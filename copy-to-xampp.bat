@echo off
echo Copying IZO-MAT project to XAMPP...
echo.

REM Check if XAMPP exists
if not exist "C:\xampp\htdocs" (
    echo XAMPP not found at C:\xampp\htdocs
    echo Please install XAMPP first from: https://www.apachefriends.org/download.html
    pause
    exit /b 1
)

REM Copy project files
echo Copying files to C:\xampp\htdocs\izo-mat...
xcopy /E /I /Y . C:\xampp\htdocs\izo-mat

echo.
echo Project copied successfully!
echo.
echo To access your website:
echo 1. Start XAMPP Control Panel
echo 2. Click "Start" next to Apache
echo 3. Open browser and go to: http://localhost/izo-mat
echo.
pause
