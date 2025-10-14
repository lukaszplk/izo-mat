<?php
/**
 * IZO-MAT Website - Auto Deployment Script
 * 
 * This script automatically copies files from the repository to public_html
 * Run this after pulling from GitHub to deploy changes
 */

// Configuration
$repo_path = '/home/ifbstrjf/repositories/izo-mat';
$public_path = '/home/ifbstrjf/public_html';
$exclude_files = ['.git', '.venv', '.gitignore', 'deploy.php'];

echo "🚀 Starting IZO-MAT deployment...\n";

// Check if repository exists
if (!is_dir($repo_path)) {
    die("❌ Repository not found at: $repo_path\n");
}

// Check if public_html exists
if (!is_dir($public_path)) {
    die("❌ Public HTML directory not found at: $public_path\n");
}

// Function to copy files recursively
function copyDirectory($src, $dst, $exclude = []) {
    $dir = opendir($src);
    @mkdir($dst);
    
    while (($file = readdir($dir)) !== false) {
        if ($file != '.' && $file != '..' && !in_array($file, $exclude)) {
            $srcFile = $src . '/' . $file;
            $dstFile = $dst . '/' . $file;
            
            if (is_dir($srcFile)) {
                copyDirectory($srcFile, $dstFile, $exclude);
            } else {
                copy($srcFile, $dstFile);
                echo "✅ Copied: $file\n";
            }
        }
    }
    closedir($dir);
}

// Copy files from repository to public_html
echo "📁 Copying files from repository to public_html...\n";
copyDirectory($repo_path, $public_path, $exclude_files);

echo "🎉 Deployment completed successfully!\n";
echo "🌐 Your website is now updated at: " . $_SERVER['HTTP_HOST'] . "\n";
?>
