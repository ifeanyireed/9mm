#!/usr/bin/env bash
# ResultsPro & Ofia 9MM Content Hub - Instant Synchronization Script
# Generates content-data.js, content-data.json, and embeds fresh deliverables into contenthub.html & index.html

set -e
cd "$(dirname "$0")"

echo "=========================================================="
echo "   ResultsPro & Ofia 9MM Content Hub - Data Synchronizer  "
echo "=========================================================="

if command -v python3 &>/dev/null; then
    echo "Running Python scanner (generate_hub_data.py)..."
    python3 generate_hub_data.py
elif command -v php &>/dev/null; then
    echo "Running PHP scanner (api.php)..."
    php api.php > /dev/null
    echo "✓ Generated content-data.json and content-data.js via PHP."
else
    echo "❌ Error: Neither python3 nor php was found on this system."
    exit 1
fi

echo "=========================================================="
echo "Done! You can now open contenthub.html or index.html."
echo "=========================================================="
