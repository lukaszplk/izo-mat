<?php
require_once 'config.php';

$page_title = "IZO-MAT - Profesjonalne Hydroizolacje i Osuszanie Budynków w Tarnowie";
$page_description = "Profesjonalne hydroizolacje budynków w Tarnowie i Dąbrowie Tarnowskiej. Osuszanie budynków, izolacje zbiorników, posadzki żywicze. Doświadczenie od 2003 roku.";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="hydroizolacje Tarnów, osuszanie budynków, izolacje, posadzki żywicze, IZO-MAT">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo static_url('css/style.css'); ?>?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <!-- Top Contact Bar -->
        <div class="top-bar bg-primary text-white py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <i class="fas fa-phone me-2"></i>
                                <span class="me-1">Zadzwoń:</span>
                                <a href="tel:<?php echo $company_phone; ?>" class="text-white text-decoration-none"><?php echo $company_phone; ?></a>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-envelope me-2"></i>
                                <span class="me-1">Email:</span>
                                <a href="mailto:<?php echo $company_email; ?>" class="text-white text-decoration-none"><?php echo $company_email; ?></a>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                <span>Tarnów, Dąbrowa Tarnowska</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-end">
                        <!-- Social media links removed -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo url_for('index'); ?>">
                    <div class="logo-placeholder me-2 d-inline-block bg-primary text-white rounded px-2 py-1" style="width: 50px; height: 50px; line-height: 48px; text-align: center; font-weight: bold;">IZO</div>
                    <span class="fw-bold text-primary">IZO-MAT</span>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('index'); ?>">Strona główna</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="ofertaDropdown" role="button" data-bs-toggle="dropdown">
                                Oferta
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo url_for('hydroizolacje'); ?>">Hydroizolacje</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('osuszanie'); ?>">Osuszanie budynków</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('izolacje_zbiornikow'); ?>">Izolacje zbiorników</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('izolacje_kurtynowe'); ?>">Izolacje kurtynowe</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('izolacje_dachow'); ?>">Izolacje dachów</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('posadzki_zywicze'); ?>">Posadzki żywicze</a></li>
                                <li><a class="dropdown-item" href="<?php echo url_for('iniekcja_rys'); ?>">Iniekcja rys i pęknięć</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('realizacje'); ?>">Realizacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('o_firmie'); ?>">O firmie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_for('kontakt'); ?>">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary text-white px-4" href="<?php echo url_for('wycena'); ?>">Zamów wycenę</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section - Magazine Style -->
        <section class="hero-magazine">
            <div class="container-fluid">
                <div class="row g-0">
                    <!-- Main Hero Content -->
                    <div class="col-lg-8">
                        <div class="hero-main">
                            <div class="hero-content">
                                <div class="hero-badge">
                                    <span class="badge bg-warning text-dark">Specjalizacja od 2003 roku</span>
                                </div>
                                <h1 class="hero-title">Profesjonalne Hydroizolacje i Osuszanie Budynków</h1>
                                <p class="hero-description">Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski z gwarancją najwyższej jakości.</p>
                                <div class="hero-actions">
                                    <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary btn-lg">Bezpłatna wycena</a>
                                    <a href="<?php echo url_for('kontakt'); ?>" class="btn btn-outline-primary btn-lg">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hero Sidebar -->
                    <div class="col-lg-4">
                        <div class="hero-sidebar">
                            <div class="sidebar-stats">
                                <div class="stat-item">
                                    <div class="stat-number">500+</div>
                                    <div class="stat-label">Projektów</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">20+</div>
                                    <div class="stat-label">Lat doświadczenia</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">100%</div>
                                    <div class="stat-label">Zadowolonych klientów</div>
                                </div>
                            </div>
                            <div class="sidebar-image">
                                <div class="image-placeholder">
                                    <i class="fas fa-building fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Services - Magazine Grid -->
        <section class="featured-services">
            <div class="container-fluid">
                <div class="row g-0">
                    <!-- Large Featured Service -->
                    <div class="col-lg-6">
                        <div class="featured-service-large">
                            <div class="service-image">
                                <div class="image-placeholder bg-primary">
                                    <i class="fas fa-home fa-4x text-white"></i>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3>Hydroizolacje</h3>
                                <p>Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Two Smaller Services -->
                    <div class="col-lg-3">
                        <div class="service-card-small">
                            <div class="service-icon">
                                <i class="fas fa-tint fa-2x text-primary"></i>
                            </div>
                            <h4>Osuszanie</h4>
                            <p>Profesjonalne osuszanie ścian i elementów.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="service-card-small">
                            <div class="service-icon">
                                <i class="fas fa-swimming-pool fa-2x text-primary"></i>
                            </div>
                            <h4>Zbiorniki</h4>
                            <p>Pełna izolacja zbiorników i basenów.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Grid - Magazine Style -->
        <section class="content-grid">
            <div class="container-fluid">
                <div class="row g-0">
                    <!-- Main Content Column -->
                    <div class="col-lg-8">
                        <div class="main-content-area">
                            <!-- About Section -->
                            <div class="content-block">
                                <h2>Dlaczego IZO-MAT?</h2>
                                <p>IZO-MAT działa w branży usług hydroizolacyjnych od 2003 roku. Realizujemy zlecenia w całej Polsce na obiektach najróżniejszego typu.</p>
                                
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Doświadczenie od 2003 roku</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Nowoczesne materiały</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Zasięg ogólnopolski</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle text-success"></i>
                                        <span>Doradztwo techniczne</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Process Section -->
                            <div class="content-block">
                                <h2>Jak Pracujemy</h2>
                                <div class="process-timeline">
                                    <div class="process-step">
                                        <div class="step-number">01</div>
                                        <h5>Oględziny</h5>
                                        <p>Dokładne sprawdzenie stanu budynku</p>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">02</div>
                                        <h5>Wycena</h5>
                                        <p>Przedstawienie zaleceń i wyceny</p>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">03</div>
                                        <h5>Wykonanie</h5>
                                        <p>Profesjonalne wykonanie hydroizolacji</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar Column -->
                    <div class="col-lg-4">
                        <div class="sidebar-content">
                            <!-- Quick Contact -->
                            <div class="sidebar-widget">
                                <h4>Kontakt</h4>
                                <div class="contact-info">
                                    <p><i class="fas fa-phone"></i> <?php echo $company_phone; ?></p>
                                    <p><i class="fas fa-envelope"></i> <?php echo $company_email; ?></p>
                                    <p><i class="fas fa-map-marker-alt"></i> Tarnów, Dąbrowa Tarnowska</p>
                                </div>
                                <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary w-100">Zamów wycenę</a>
                            </div>
                            
                            <!-- Testimonial -->
                            <div class="sidebar-widget">
                                <h4>Opinie Klientów</h4>
                                <div class="testimonial">
                                    <p>"Profesjonalne podejście, terminowe wykonanie i najwyższa jakość materiałów."</p>
                                    <div class="author">
                                        <strong>Jan Kowalski</strong>
                                        <small>Właściciel domu</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Services List -->
                            <div class="sidebar-widget">
                                <h4>Nasze Usługi</h4>
                                <ul class="services-list">
                                    <li><a href="#">Hydroizolacje</a></li>
                                    <li><a href="#">Osuszanie budynków</a></li>
                                    <li><a href="#">Izolacje zbiorników</a></li>
                                    <li><a href="#">Posadzki żywicze</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid -->
        <section class="portfolio-grid">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-12">
                        <h2 class="section-title">Nasze Realizacje</h2>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <div class="image-placeholder">
                                    <i class="fas fa-tools fa-2x"></i>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h5>Projekt 1</h5>
                                <p>Opis realizacji</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <div class="image-placeholder">
                                    <i class="fas fa-tools fa-2x"></i>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h5>Projekt 2</h5>
                                <p>Opis realizacji</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <div class="image-placeholder">
                                    <i class="fas fa-tools fa-2x"></i>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h5>Projekt 3</h5>
                                <p>Opis realizacji</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-5 bg-primary text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="mb-3">Potrzebujesz profesjonalnej hydroizolacji?</h2>
                        <p class="mb-0">Skontaktuj się z nami już dziś i otrzymaj bezpłatną wycenę</p>
                    </div>
                    <div class="col-lg-4 text-end">
                        <a href="<?php echo url_for('wycena'); ?>" class="btn btn-warning btn-lg">Zamów wycenę</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>IZO-MAT</h5>
                    <p>Profesjonalne hydroizolacje i osuszanie budynków od 2003 roku.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Kontakt</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-phone me-2"></i><?php echo $company_phone; ?></p>
                        <p><i class="fas fa-envelope me-2"></i><?php echo $company_email; ?></p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Tarnów, Dąbrowa Tarnowska</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5>Usługi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">Hydroizolacje</a></li>
                        <li><a href="#" class="text-white-50">Osuszanie budynków</a></li>
                        <li><a href="#" class="text-white-50">Izolacje zbiorników</a></li>
                        <li><a href="#" class="text-white-50">Posadzki żywicze</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
