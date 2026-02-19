#!/bin/bash
# Performance Log Viewer for Laravel

cd "c:\ICT11\ICT1\ICT WEBSITE\eduvalt-laravel" || exit

echo "================================"
echo "   LARAVEL PERFORMANCE LOGS"
echo "================================"
echo ""

if [ -f "storage/logs/laravel.log" ]; then
    echo "📊 Showing last 50 log entries..."
    echo ""
    tail -n 50 storage/logs/laravel.log
    echo ""
    echo "================================"
    echo "💡 To watch logs in real-time, run:"
    echo "   tail -f storage/logs/laravel.log"
    echo "================================"
else
    echo "❌ No log file found at storage/logs/laravel.log"
    echo "   The log file will be created when you visit the site"
fi
