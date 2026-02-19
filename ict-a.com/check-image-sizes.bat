@echo off
echo ========================================
echo   IMAGE FILE SIZE CHECKER
echo ========================================
echo.
echo Checking image file sizes...
echo Target: Hero images ^<400KB, Logos ^<80KB
echo.

cd "c:\ICT11\ICT1\ICT WEBSITE\eduvalt-laravel\public\images"

echo CRITICAL IMAGES (should be compressed):
echo ----------------------------------------
if exist "black man headpone.png" dir "black man headpone.png" | findstr /C:"black man"
if exist "secondary_logo.png" dir "secondary_logo.png" | findstr /C:"secondary_logo"
if exist "hero1.jpg" dir "hero1.jpg" | findstr /C:"hero1"
if exist "hero2.jpg" dir "hero2.jpg" | findstr /C:"hero2"
if exist "hero3.jpg" dir "hero3.jpg" | findstr /C:"hero3"
if exist "employees.jpg" dir "employees.jpg" | findstr /C:"employees"
if exist "area_bg.jpg" dir "area_bg.jpg" | findstr /C:"area_bg"

echo.
echo ========================================
echo FILE SIZE GUIDE:
echo ----------------------------------------
echo   ^<50 KB    = Excellent!
echo   50-200 KB  = Good
echo   200-500 KB = Acceptable
echo   500 KB-1 MB = Needs compression
echo   ^>1 MB     = TOO LARGE! Compress now!
echo ========================================
echo.
pause
