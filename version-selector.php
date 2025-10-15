<?php
// Version selector for IZO-MAT website
$page_title = "IZO-MAT - Select Website Version";
$page_description = "Choose your preferred version of the IZO-MAT website";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #dc3545 0%, #000000 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .version-selector {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0;
        }
        
        .version-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .version-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.4);
        }
        
        .version-btn {
            background: linear-gradient(135deg, #dc3545, #b02a37);
            border: none;
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin: 0.5rem;
            min-width: 200px;
        }
        
        .version-btn:hover {
            background: linear-gradient(135deg, #b02a37, #dc3545);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.3);
        }
        
        .version-btn i {
            margin-right: 0.5rem;
        }
        
        .logo {
            font-size: 3rem;
            font-weight: bold;
            color: #dc3545;
            margin-bottom: 1rem;
        }
        
        .subtitle {
            color: #6c757d;
            margin-bottom: 2rem;
        }
        
        .version-info {
            background: #f8f9fa;
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem 0;
            border-left: 4px solid #dc3545;
        }
        
        .version-info h6 {
            color: #dc3545;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .version-info small {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="version-selector">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="version-card text-center">
                        <div class="logo">
                            <i class="fas fa-home text-primary"></i> IZO-MAT
                        </div>
                        <h2 class="mb-3">Select Website Version</h2>
                        <p class="subtitle">Choose which version of the IZO-MAT website you'd like to view</p>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-star text-warning"></i> Version A - Enhanced</h6>
                                    <small>Modern design with testimonials, stats, floating cards, and animations</small>
                                </div>
                                <a href="version-a/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Version A
                                </a>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-server text-info"></i> Version B - Server Match</h6>
                                    <small>Matches dev-test.org.pl exactly - simpler design, no testimonials</small>
                                </div>
                                <a href="version-b/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Version B
                                </a>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-mobile-alt text-success"></i> Version C - Mobile-First</h6>
                                    <small>Optimized for mobile devices with touch-friendly interface</small>
                                </div>
                                <a href="version-c/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Version C
                                </a>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h4 class="mb-4 text-primary">
                            <i class="fas fa-palette"></i> Version C - Layout Experiments
                        </h4>
                        <p class="subtitle mb-4">Three completely different structural approaches to break away from traditional layouts</p>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-newspaper text-primary"></i> Magazine Style</h6>
                                    <small>Asymmetric grids, featured content, sidebar widgets - editorial layout</small>
                                </div>
                                <a href="version-c-magazine/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Magazine Style
                                </a>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-chart-line text-info"></i> Dashboard Style</h6>
                                    <small>Fixed sidebar, card grids, data visualization - admin panel feel</small>
                                </div>
                                <a href="version-c-dashboard/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Dashboard Style
                                </a>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="version-info">
                                    <h6><i class="fas fa-images text-success"></i> Portfolio Style</h6>
                                    <small>Masonry grids, gallery layouts, creative positioning - visual-first</small>
                                </div>
                                <a href="version-c-portfolio/" class="version-btn">
                                    <i class="fas fa-eye"></i> View Portfolio Style
                                </a>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-primary mb-3">
                                    <i class="fas fa-info-circle"></i> How it works:
                                </h6>
                                <ul class="list-unstyled text-start">
                                    <li><i class="fas fa-check text-success"></i> Each version is in its own folder</li>
                                    <li><i class="fas fa-check text-success"></i> Test different designs safely</li>
                                    <li><i class="fas fa-check text-success"></i> Compare user experience</li>
                                    <li><i class="fas fa-check text-success"></i> Choose the best one</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary mb-3">
                                    <i class="fas fa-cogs"></i> Management:
                                </h6>
                                <ul class="list-unstyled text-start">
                                    <li><i class="fas fa-folder text-info"></i> Easy to organize versions</li>
                                    <li><i class="fas fa-copy text-info"></i> Copy files between versions</li>
                                    <li><i class="fas fa-trash text-danger"></i> Remove unwanted versions</li>
                                    <li><i class="fas fa-arrow-up text-warning"></i> Promote chosen version</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <small class="text-muted">
                                <i class="fas fa-lightbulb"></i> 
                                Tip: Once you decide on a version, you can move its contents to the main directory
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
