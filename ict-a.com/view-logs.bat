@echo off
echo ================================
echo   LARAVEL PERFORMANCE LOGS
echo ================================
echo.
echo Showing last 30 log entries...
echo.
cd "c:\ICT11\ICT1\ICT WEBSITE\eduvalt-laravel"
powershell -Command "Get-Content 'storage\logs\laravel.log' -Tail 30"
echo.
echo ================================
echo Press any key to refresh...
pause > nul
cls
goto :eof
