<?php
// ResultsPro & Ofia 9MM Content Hub - Live Folder Scanner
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

$results = [];

function extractTitle($content, $filename, $isHtml) {
    if ($isHtml) {
        if (preg_match('/<title>(.*?)<\/title>/si', $content, $matches)) {
            return trim(html_entity_decode($matches[1], ENT_QUOTES, 'UTF-8'));
        }
    } else {
        if (preg_match('/^#\s+(.+)$/m', $content, $matches)) {
            $title = trim($matches[1]);
            // Strip leading emojis or quotes if any
            $title = preg_replace('/^[\x{1F300}-\x{1FAD6}\x{2600}-\x{27BF}\s]+/u', '', $title);
            $title = preg_replace('/^(?:Video Script:\s*|Email Blast:\s*|Social Media & Carousel Pack:\s*|Social Media Distribution Pack:\s*)/i', '', $title);
            return trim(trim($title, '"\''));
        }
    }
    return pathinfo($filename, PATHINFO_FILENAME);
}

function detectStream($filename) {
    $fn = strtolower($filename);
    if ($fn === 'blog-post.md') {
        return ['stream' => 'blog', 'streamLabel' => 'Stream 1: Blog & SEO Guide', 'streamOrder' => 1];
    }
    if ($fn === 'email-blast.html') {
        return ['stream' => 'email', 'streamLabel' => 'Stream 2: HTML Email Newsletter', 'streamOrder' => 2];
    }
    if ($fn === 'email-blast.md') {
        return ['stream' => 'email-md', 'streamLabel' => 'Stream 2: Email Strategy & Subject Lines', 'streamOrder' => 3];
    }
    if ($fn === 'video-script.md') {
        return ['stream' => 'video', 'streamLabel' => 'Stream 3: Dual-Track Video Script', 'streamOrder' => 4];
    }
    if ($fn === 'social-media-carousel.md') {
        return ['stream' => 'carousel', 'streamLabel' => 'Stream 4: Social Media / Carousel Pack', 'streamOrder' => 5];
    }
    return ['stream' => 'general', 'streamLabel' => 'General Deliverable', 'streamOrder' => 6];
}

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
                    $baseName = basename($fullPath);
                    $isHtml = ($ext === 'html' || $ext === 'htm');
                    $streamInfo = detectStream($baseName);
                    $title = extractTitle($content, $baseName, $isHtml);
                    
                    // Normalize week format e.g. "Week-01" -> "Week 01"
                    $weekNormalized = $weekFolder;
                    if (preg_match('/week[-_ ]?(\d+)/i', $weekFolder, $wm)) {
                        $weekNormalized = 'Week ' . str_pad($wm[1], 2, '0', STR_PAD_LEFT);
                    }
                    
                    // Slug ID: sprint-01-week-02-blog-post-md
                    $cleanId = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', "{$sprintFolder}-{$weekFolder}-{$baseName}"));
                    $cleanId = trim($cleanId, '-');
                    
                    $sprintKey = strtolower($sprintFolder);
                    
                    // Calculate words
                    $wordCount = str_word_count(strip_tags($content));
                    $charCount = strlen($content);
                    
                    $results[] = [
                        'id' => $cleanId,
                        'path' => $fullPath,
                        'fileName' => $baseName,
                        'filename' => $baseName,
                        'cleanLabel' => $baseName,
                        'sprint' => $sprintKey,
                        'sprintFolder' => $sprintFolder,
                        'cluster' => $sprintFolder,
                        'clusterFolder' => $sprintFolder,
                        'week' => $weekNormalized,
                        'weekRaw' => $weekFolder,
                        'weekFolder' => $weekFolder,
                        'stream' => $streamInfo['stream'],
                        'streamLabel' => $streamInfo['streamLabel'],
                        'streamOrder' => $streamInfo['streamOrder'],
                        'isHtml' => $isHtml,
                        'title' => $title,
                        'size' => filesize($fullPath),
                        'charCount' => $charCount,
                        'wordCount' => $wordCount,
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

// Sort results consistently by Sprint, Week, Stream Order
usort($results, function($a, $b) {
    if ($a['sprint'] !== $b['sprint']) {
        return strcmp($a['sprint'], $b['sprint']);
    }
    if ($a['week'] !== $b['week']) {
        return strcmp($a['week'], $b['week']);
    }
    return ($a['streamOrder'] ?? 0) <=> ($b['streamOrder'] ?? 0);
});

$json = json_encode($results, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@file_put_contents(__DIR__ . '/content-data.json', $json);
@file_put_contents(__DIR__ . '/content-data.js', "window.CONTENT_HUB_FILES = " . $json . ";\n");

// Explicit ComplianceHub logo location from web_app/public/logo.png
$exactLogo = '/Volumes/ReedBreedCC/compliancehub_ng/web_app/public/logo.png';
if (!file_exists($exactLogo)) {
    $exactLogo = dirname(__DIR__) . '/compliancehub_ng/web_app/public/logo.png';
}

$copiedLogo = null;
if (file_exists($exactLogo)) {
    $copiedLogo = __DIR__ . '/compliancehub_logo.png';
    @copy($exactLogo, $copiedLogo);
    @file_put_contents(__DIR__ . '/ch_logo_found.txt', $exactLogo);
}

// Upload to Cloudinary using credentials from compliancehub_ng/.env
if ($copiedLogo && file_exists($copiedLogo)) {
    $cUrl = 'cloudinary://843881634745644:f10bR34lPm4mYEbtrcIhB0eIcLQ@yugcjpau';
    if (preg_match('/cloudinary:\/\/([^:]+):([^@]+)@([^\/]+)/', $cUrl, $cm)) {
        $apiKey = $cm[1];
        $apiSecret = $cm[2];
        $cloudName = $cm[3];
        $timestamp = time();
        $publicId = 'compliancehub_logo';
        $folder = '9mm';
        
        $params = [
            'folder' => $folder,
            'public_id' => $publicId,
            'timestamp' => $timestamp
        ];
        ksort($params);
        $signStr = '';
        foreach ($params as $k => $v) {
            $signStr .= "$k=$v&";
        }
        $signStr = rtrim($signStr, '&') . $apiSecret;
        $signature = sha1($signStr);
        
        $postData = [
            'file' => new CURLFile($copiedLogo),
            'api_key' => $apiKey,
            'timestamp' => $timestamp,
            'signature' => $signature,
            'folder' => $folder,
            'public_id' => $publicId
        ];
        
        $ch = curl_init("https://api.cloudinary.com/v1_1/$cloudName/image/upload");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $resRaw = curl_exec($ch);
        curl_close($ch);
        
        $resJson = json_decode($resRaw, true);
        if (!empty($resJson['secure_url'])) {
            $uploadedUrl = $resJson['secure_url'];
            @file_put_contents(__DIR__ . '/ch_cloudinary_url.txt', $uploadedUrl);
            
            // Auto-update contenthub.html, index.html, and ComplianceHub deliverable files safely without recursion
            $targetFiles = [
                'contenthub.html', 
                'index.html', 
                'Sprint-09/Week-01/blog-post.md', 'Sprint-09/Week-01/email-blast.html', 'Sprint-09/Week-01/email-blast.md',
                'Sprint-10/Week-01/blog-post.md', 'Sprint-10/Week-01/email-blast.html', 'Sprint-10/Week-01/email-blast.md',
                'Sprint-11/Week-01/blog-post.md', 'Sprint-11/Week-01/email-blast.html', 'Sprint-11/Week-01/email-blast.md',
                'Sprint-12/Week-01/blog-post.md', 'Sprint-12/Week-01/email-blast.html', 'Sprint-12/Week-01/email-blast.md'
            ];
            foreach ($targetFiles as $file) {
                $fullP = __DIR__ . '/' . $file;
                if (file_exists($fullP)) {
                    $c = @file_get_contents($fullP);
                    if ($c) {
                        // Replace any nested or relative references cleanly
                        $c = preg_replace('/https?:\/\/[^\s"\'<>]*compliancehub_logo\.(?:png|svg)/i', $uploadedUrl, $c);
                        $c = preg_replace('/(?<!\/)compliancehub_logo\.(?:png|svg)/i', $uploadedUrl, $c);
                        @file_put_contents($fullP, $c);
                    }
                }
            }
            echo "\n[Cloudinary Success] Uploaded ComplianceHub logo to: " . $uploadedUrl . "\n";
        }
    }
}

echo $json;
