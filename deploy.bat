@echo off
echo ========================================
echo    IZO-MAT Website Deployment Script
echo ========================================
echo.

echo 📁 Copying files from repository to public_html...
echo.

REM Copy PHP files
copy "config.php" "..\public_html\"
copy "index.php" "..\public_html\"
copy "hydroizolacje.php" "..\public_html\"
copy "osuszanie.php" "..\public_html\"
copy "izolacje-zbiornikow.php" "..\public_html\"
copy "izolacje-kurtynowe.php" "..\public_html\"
copy "kontakt.php" "..\public_html\"
copy "wycena.php" "..\public_html\"
copy "contact-handler.php" "..\public_html\"

REM Copy static folder
xcopy "static" "..\public_html\static\" /E /I /Y

REM Copy README
copy "README.md" "..\public_html\"

echo.
echo ✅ Deployment completed!
echo 🌐 Your website has been updated
echo.
echo Press any key to exit...
pause > nul
