#!/bin/bash
# Git Post-Receive Hook for Automatic Deployment
# This runs automatically after git pull

echo "🚀 Starting automatic deployment..."

# Paths
REPO_PATH="/home/ifbstrjf/repositories/izo-mat"
PUBLIC_PATH="/home/ifbstrjf/public_html"

# Files to copy
PHP_FILES=(
    "config.php"
    "index.php" 
    "hydroizolacje.php"
    "osuszanie.php"
    "izolacje-zbiornikow.php"
    "izolacje-kurtynowe.php"
    "kontakt.php"
    "wycena.php"
    "contact-handler.php"
)

# Copy PHP files
echo "📁 Copying PHP files..."
for file in "${PHP_FILES[@]}"; do
    if [ -f "$REPO_PATH/$file" ]; then
        cp "$REPO_PATH/$file" "$PUBLIC_PATH/"
        echo "✅ Copied: $file"
    fi
done

# Copy static folder
echo "📁 Copying static files..."
if [ -d "$REPO_PATH/static" ]; then
    cp -r "$REPO_PATH/static" "$PUBLIC_PATH/"
    echo "✅ Copied: static folder"
fi

# Copy README
if [ -f "$REPO_PATH/README.md" ]; then
    cp "$REPO_PATH/README.md" "$PUBLIC_PATH/"
    echo "✅ Copied: README.md"
fi

echo "🎉 Automatic deployment completed!"
echo "🌐 Website updated successfully"
