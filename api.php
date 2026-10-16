<?php
// ResultsPro & Ofia 9MM Content Hub - Live Folder Scanner
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$results = [];

// Recursively scan all Sprint-* directories for .md and .html files
function scanDirectory($dir, &$results) {
    if (!is_dir($dir)) return;
    $items = scandir($dir);
    if ($items === false) return;
    
    foreach ($items as $item) {
        if ($item === '.' || $item === '..' || $item[0] === '.') continue;
        $fullPath = $dir . '/' . $item;
        
        if (is_dir($fullPath)) {
            scanDirectory($fullPath, $results);
        } elseif (is_file($fullPath)) {
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
            if ($ext === 'md' || $ext === 'html' || $ext === 'htm') {
                $relDir = dirname($fullPath);
                $dirParts = explode('/', str_replace('\\', '/', $relDir));
                $sprintFolder = $dirParts[0] ?? 'Sprint-01';
                $weekFolder = count($dirParts) > 1 ? implode('/', array_slice($dirParts, 1)) : 'General';
                
                $content = @file_get_contents($fullPath);
                if ($content !== false) {
                    $results[] = [
                        'path' => $fullPath,
                        'filename' => basename($fullPath),
                        'sprint' => $sprintFolder,
                        'sprintFolder' => $sprintFolder,
                        'cluster' => $sprintFolder,
                        'clusterFolder' => $sprintFolder,
                        'week' => $weekFolder,
                        'weekFolder' => $weekFolder,
                        'size' => filesize($fullPath),
                        'lastModified' => filemtime($fullPath),
                        'content' => $content
                    ];
                }
            }
        }
    }
}

// Find all Sprint-* directories (case-insensitive)
$sprintDirs = glob('{Sprint-*,sprint-*,Sprints-*,sprints-*}', GLOB_BRACE | GLOB_ONLYDIR);
if (empty($sprintDirs)) {
    $allDirs = glob('*', GLOB_ONLYDIR);
    $sprintDirs = array_values(array_filter($allDirs ?: [], function($d) {
        return stripos($d, 'sprint') !== false;
    }));
}
if (!empty($sprintDirs)) {
    sort($sprintDirs);
    foreach ($sprintDirs as $sDir) {
        scanDirectory($sDir, $results);
    }
}

echo json_encode($results, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
