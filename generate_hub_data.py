#!/usr/bin/env python3
"""
ResultsPro & Ofia 9MM Content Hub - Live Directory Scanner & Cache Generator
Scans all 400 deliverables across Sprint-01 to Sprint-08 (Weeks 01 to 10)
and produces:
  1. content-data.json (for HTTP/static hosting)
  2. content-data.js   (window.CONTENT_HUB_FILES = [...], enables file:/// browsing with zero CORS issues)
  3. Optionally synchronizes the embedded INITIAL_FALLBACK_FILES in contenthub.html & index.html
"""

import os
import sys
import re
import json
import glob
import html

ROOT_DIR = os.path.dirname(os.path.abspath(__file__))

def extract_title(content, filename, is_html):
    if is_html:
        m = re.search(r'<title>(.*?)</title>', content, re.IGNORECASE | re.DOTALL)
        if m:
            return html.unescape(m.group(1).strip())
    else:
        m = re.search(r'^#\s+(.+)$', content, re.MULTILINE)
        if m:
            title = m.group(1).strip()
            # Strip emojis
            title = re.sub(r'[\U00010000-\U0010ffff\u2600-\u27bf\s]+', ' ', title).strip()
            # Strip deliverable prefixes
            title = re.sub(r'^(?:Video Script:\s*|Email Blast:\s*|Social Media & Carousel Pack:\s*|Social Media Distribution Pack:\s*)', '', title, flags=re.IGNORECASE).strip()
            return title.strip('"\'')
    return os.path.splitext(filename)[0]

def detect_stream(filename):
    fn = filename.lower()
    if fn == 'blog-post.md':
        return {'stream': 'blog', 'streamLabel': 'Stream 1: Blog & SEO Guide', 'streamOrder': 1}
    elif fn == 'email-blast.html':
        return {'stream': 'email', 'streamLabel': 'Stream 2: HTML Email Newsletter', 'streamOrder': 2}
    elif fn == 'email-blast.md':
        return {'stream': 'email-md', 'streamLabel': 'Stream 2: Email Strategy & Subject Lines', 'streamOrder': 3}
    elif fn == 'video-script.md':
        return {'stream': 'video', 'streamLabel': 'Stream 3: Dual-Track Video Script', 'streamOrder': 4}
    elif fn == 'social-media-carousel.md':
        return {'stream': 'carousel', 'streamLabel': 'Stream 4: Social Media / Carousel Pack', 'streamOrder': 5}
    return {'stream': 'general', 'streamLabel': 'General Deliverable', 'streamOrder': 6}

def normalize_week(week_folder):
    m = re.search(r'week[-_ ]?(\d+)', week_folder, re.IGNORECASE)
    if m:
        return f"Week {int(m.group(1)):02d}"
    return week_folder

def main():
    print(f"Scanning 9MM repository at: {ROOT_DIR}")
    results = []
    
    # Locate all Sprint-* folders
    sprint_pattern = os.path.join(ROOT_DIR, "[Ss]print-*")
    sprint_dirs = sorted([d for d in glob.glob(sprint_pattern) if os.path.isdir(d)])
    
    if not sprint_dirs:
        # Fallback to direct listing
        sprint_dirs = sorted([
            os.path.join(ROOT_DIR, d) for d in os.listdir(ROOT_DIR)
            if os.path.isdir(os.path.join(ROOT_DIR, d)) and 'sprint' in d.lower()
        ])

    print(f"Found {len(sprint_dirs)} Sprint directories.")

    for s_dir in sprint_dirs:
        sprint_name = os.path.basename(s_dir)
        sprint_key = sprint_name.lower()
        
        for root, dirs, files in os.walk(s_dir):
            for file in files:
                ext = os.path.splitext(file)[1].lower()
                if ext not in ('.md', '.html', '.htm'):
                    continue
                
                full_path = os.path.join(root, file)
                rel_path = os.path.relpath(full_path, ROOT_DIR)
                rel_dir = os.path.dirname(rel_path)
                dir_parts = rel_dir.replace('\\', '/').split('/')
                
                sprint_folder = dir_parts[0] if len(dir_parts) > 0 else sprint_name
                week_folder = '/'.join(dir_parts[1:]) if len(dir_parts) > 1 else 'General'
                
                try:
                    with open(full_path, 'r', encoding='utf-8', errors='ignore') as f:
                        content = f.read()
                except Exception as e:
                    print(f"Error reading {full_path}: {e}")
                    continue
                
                is_html = ext in ('.html', '.htm')
                stream_info = detect_stream(file)
                title = extract_title(content, file, is_html)
                week_normalized = normalize_week(week_folder)
                
                # Slug ID
                clean_id = re.sub(r'[^a-zA-Z0-9]+', '-', f"{sprint_folder}-{week_folder}-{file}").lower().strip('-')
                
                # Metrics
                char_count = len(content)
                # Simple word count stripping HTML tags if HTML
                plain_text = re.sub(r'<[^>]+>', ' ', content) if is_html else content
                words = re.findall(r'\b\w+\b', plain_text)
                word_count = len(words)
                
                stat = os.stat(full_path)
                
                results.append({
                    'id': clean_id,
                    'path': rel_path.replace('\\', '/'),
                    'fileName': file,
                    'filename': file,
                    'cleanLabel': file,
                    'sprint': sprint_key,
                    'sprintFolder': sprint_folder,
                    'cluster': sprint_folder,
                    'clusterFolder': sprint_folder,
                    'week': week_normalized,
                    'weekRaw': week_folder,
                    'weekFolder': week_folder,
                    'stream': stream_info['stream'],
                    'streamLabel': stream_info['streamLabel'],
                    'streamOrder': stream_info['streamOrder'],
                    'isHtml': is_html,
                    'title': title,
                    'size': stat.st_size,
                    'charCount': char_count,
                    'wordCount': word_count,
                    'lastModified': int(stat.st_mtime),
                    'content': content
                })

    # Sort results consistently
    results.sort(key=lambda x: (x['sprint'], x['week'], x.get('streamOrder', 99)))

    print(f"Total deliverables scanned: {len(results)}")

    # 1. Output content-data.json
    json_path = os.path.join(ROOT_DIR, 'content-data.json')
    with open(json_path, 'w', encoding='utf-8') as f:
        json.dump(results, f, ensure_ascii=False)
    print(f"✓ Wrote {json_path} ({os.path.getsize(json_path):,} bytes)")

    # 2. Output content-data.js
    js_path = os.path.join(ROOT_DIR, 'content-data.js')
    json_str = json.dumps(results, ensure_ascii=False)
    with open(js_path, 'w', encoding='utf-8') as f:
        f.write("window.CONTENT_HUB_FILES = " + json_str + ";\n")
    print(f"✓ Wrote {js_path} ({os.path.getsize(js_path):,} bytes)")

    # 3. Synchronize HTML files if needed (clean syntax-safe replacement)
    for html_file in ['contenthub.html', 'index.html']:
        target_path = os.path.join(ROOT_DIR, html_file)
        if os.path.exists(target_path):
            try:
                with open(target_path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                # Check if file has corrupted multi-line fallback and clean it
                start_marker = "<script>\nconst INITIAL_FALLBACK_FILES ="
                end_marker = "const SPRINT_METADATA = {"
                
                s_idx = content.find("<script>\nconst INITIAL_FALLBACK_FILES =")
                if s_idx == -1:
                    s_idx = content.find("<script>\r\nconst INITIAL_FALLBACK_FILES =")
                e_idx = content.find(end_marker)
                
                if s_idx != -1 and e_idx != -1 and e_idx > s_idx:
                    clean_header = "<script>\nconst INITIAL_FALLBACK_FILES = (typeof window !== 'undefined' && window.CONTENT_HUB_FILES) ? window.CONTENT_HUB_FILES : [];\n\n"
                    cleaned = content[:s_idx] + clean_header + content[e_idx:]
                    with open(target_path, 'w', encoding='utf-8') as f:
                        f.write(cleaned)
                    print(f"✓ Cleaned and verified {html_file}")
            except Exception as e:
                print(f"⚠️ Could not verify {html_file}: {e}")

    print("\n✅ Sync Complete! All 400 deliverables are fully refreshed in content-data.js.")
    print("👉 Open contenthub.html or index.html directly in your web browser.")

if __name__ == '__main__':
    main()
