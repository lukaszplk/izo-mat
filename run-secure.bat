@echo off
echo Installing PyOpenSSL for HTTPS support...
"C:/Users/lukaszp/OneDrive - PDF Solutions, Inc/Desktop/New folder/.venv/Scripts/pip.exe" install pyopenssl

echo.
echo Starting IZO-MAT Flask Application with HTTPS...
echo.
echo The site will be available at: https://127.0.0.1:5000
echo.
echo Note: Your browser will show a security warning because this is a 
echo self-signed certificate for development. Click "Advanced" and 
echo "Proceed to 127.0.0.1" to access the site.
echo.

cd /d "C:\Users\lukaszp\OneDrive - PDF Solutions, Inc\Desktop\New folder\izo-mat-flask"
"C:/Users/lukaszp/OneDrive - PDF Solutions, Inc/Desktop/New folder/.venv/Scripts/python.exe" app.py
pause