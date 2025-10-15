# IZO-MAT Website Version Manager

This setup allows you to manage multiple versions of your website and choose the best one.

## Structure

```
izo-mat/
├── index.php                 # Main website (current version)
├── version-selector.php      # Version selection page
├── config.php               # Configuration
├── static/                  # Static assets
├── version-a/               # Version A (current enhanced version)
├── version-b/               # Version B (alternative design)
└── version-c/               # Version C (mobile-first)
```

## How to Use

1. **Access the version selector**: Visit `http://localhost/izo-mat/version-selector.php`
2. **Choose a version**: Click on any version button to view it
3. **Test and compare**: Navigate between versions to see differences
4. **Make changes**: Edit files in each version folder independently
5. **Promote a version**: When ready, copy the chosen version to the main directory

## Version Descriptions

- **Version A**: Current enhanced version with testimonials, stats, and modern styling
- **Version B**: Alternative design (to be created)
- **Version C**: Mobile-first optimized version (to be created)

## Promoting a Version

When you decide on a version:

1. Copy all files from the chosen version folder to the main directory
2. Update the main `index.php` with the chosen version's content
3. Remove or archive the other version folders

## Benefits

- ✅ Safe testing environment
- ✅ Easy comparison between designs
- ✅ No risk of breaking the main site
- ✅ Organized development workflow
- ✅ Easy rollback if needed
