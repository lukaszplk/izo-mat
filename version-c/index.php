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
        <!-- Hero Section - Unique Sidebar Layout -->
        <section class="hero-section">
            <div class="hero-background"></div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-3 sidebar">
                        <div class="sidebar-content">
                            <div class="sidebar-header">
                                <h3>IZO-MAT</h3>
                                <p>Profesjonalne Hydroizolacje</p>
                            </div>
                            <div class="sidebar-stats">
                                <div class="sidebar-stat">
                                    <div class="stat-icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div class="stat-info">
                                        <div class="stat-number">500+</div>
                                        <div class="stat-label">Projektów</div>
                                    </div>
                                </div>
                                <div class="sidebar-stat">
                                    <div class="stat-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="stat-info">
                                        <div class="stat-number">20+</div>
                                        <div class="stat-label">Lat</div>
                                    </div>
                                </div>
                                <div class="sidebar-stat">
                                    <div class="stat-icon">
                                        <i class="fas fa-smile"></i>
                                    </div>
                                    <div class="stat-info">
                                        <div class="stat-number">100%</div>
                                        <div class="stat-label">Zadowolonych</div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-actions">
                                <a href="<?php echo url_for('hydroizolacje'); ?>" class="btn btn-warning btn-block mb-2">
                                    <i class="fas fa-tools"></i> Nasze Usługi
                                </a>
                                <a href="<?php echo url_for('kontakt'); ?>" class="btn btn-outline-light btn-block">
                                    <i class="fas fa-phone"></i> Kontakt
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Content -->
                    <div class="col-lg-9 main-content">
                        <div class="main-content-wrapper">
                            <div class="badge bg-warning text-dark mb-3">
                                <i class="fas fa-award"></i> Specjalizacja od 2003 roku
                            </div>
                            <h1 class="display-4 fw-bold mb-4">
                                Profesjonalne <span class="text-warning">Hydroizolacje</span> i Osuszanie Budynków
                            </h1>
                            <p class="lead mb-4">
                                Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski z gwarancją najwyższej jakości i nowoczesnymi technologiami.
                            </p>
                            <div class="main-image">
                                <img src="<?php echo static_url('images/hero-image.jpg'); ?>" alt="Hydroizolacje" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section - Dynamic Grid Layout -->
        <section class="services-section py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Nasze Usługi</h2>
                        <p class="lead text-muted">Oferujemy kompleksowe rozwiązania w zakresie hydroizolacji i ochrony budynków przed wilgocią</p>
                    </div>
                </div>
                
                <!-- Featured Service - Large Card -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="featured-service-card card border-0 shadow-lg overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="featured-service-image bg-primary d-flex align-items-center justify-content-center" style="height: 300px;">
                                        <i class="fas fa-home text-white" style="font-size: 4rem;"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body p-5">
                                        <h3 class="card-title text-primary mb-3">Hydroizolacje</h3>
                                        <p class="card-text lead mb-4">Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających. Nasza specjalność od 2003 roku.</p>
                                        <a href="<?php echo url_for('hydroizolacje'); ?>" class="btn btn-primary btn-lg">Dowiedz się więcej</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Other Services - Asymmetric Grid -->
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-tint text-primary fa-3x"></i>
                                </div>
                                <h4 class="card-title">Osuszanie Budynków</h4>
                                <p class="card-text">Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.</p>
                                <a href="<?php echo url_for('osuszanie'); ?>" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-swimming-pool text-primary fa-3x"></i>
                                </div>
                                <h4 class="card-title">Izolacje Zbiorników</h4>
                                <p class="card-text">Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.</p>
                                <a href="<?php echo url_for('izolacje_zbiornikow'); ?>" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-layer-group text-primary fa-3x"></i>
                                </div>
                                <h4 class="card-title">Izolacje Kurtynowe</h4>
                                <p class="card-text">Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu.</p>
                                <a href="<?php echo url_for('izolacje_kurtynowe'); ?>" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-square text-primary fa-3x"></i>
                                </div>
                                <h4 class="card-title">Posadzki Żywicze</h4>
                                <p class="card-text">Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych.</p>
                                <a href="<?php echo url_for('posadzki_zywicze'); ?>" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="fas fa-tools text-primary fa-3x"></i>
                                </div>
                                <h4 class="card-title">Iniekcja Rys i Pęknięć</h4>
                                <p class="card-text">Trwałe wyeliminowanie rys i pęknięć w betonie w celu scalenia uszkodzonych elementów.</p>
                                <a href="<?php echo url_for('iniekcja_rys'); ?>" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section - Split Layout with Stats -->
        <section class="about-section py-5">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="display-6 fw-bold mb-4">Dlaczego IZO-MAT?</h2>
                            <h4 class="text-primary mb-3">Solidność | Rzetelność | Niezawodność</h4>
                            <p class="lead mb-4">
                                IZO-MAT działa w branży usług hydroizolacyjnych od 2003 roku. Realizujemy zlecenia w całej Polsce na obiektach najróżniejszego typu.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <div class="about-image-placeholder bg-light rounded shadow d-flex align-items-center justify-content-center" style="height: 300px; border: 2px dashed #dc3545;">
                                <div class="text-center text-muted">
                                    <i class="fas fa-building fa-3x mb-3 text-primary"></i>
                                    <h5>About Image Placeholder</h5>
                                    <p>Replace with your company image</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Features Grid -->
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-calendar-alt text-primary fa-2x"></i>
                            </div>
                            <h5>20+ Lat</h5>
                            <p class="text-muted mb-0">Doświadczenia w branży hydroizolacyjnej</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-tools text-primary fa-2x"></i>
                            </div>
                            <h5>Nowoczesne Materiały</h5>
                            <p class="text-muted mb-0">Najlepsze dostępne materiały krajowe i zagraniczne</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-map-marker-alt text-primary fa-2x"></i>
                            </div>
                            <h5>Zasięg Ogólnopolski</h5>
                            <p class="text-muted mb-0">Realizujemy projekty na terenie całej Polski</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-card text-center p-4 bg-white rounded shadow-sm">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-user-tie text-primary fa-2x"></i>
                            </div>
                            <h5>Doradztwo Techniczne</h5>
                            <p class="text-muted mb-0">Profesjonalne konsultacje i doradztwo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section - Diagonal Layout -->
        <section class="process-section py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Jak Pracujemy</h2>
                        <p class="lead text-muted">Nasz sprawdzony proces gwarantuje najwyższą jakość wykonanych prac</p>
                    </div>
                </div>
                
                <!-- Process Steps with Connecting Lines -->
                <div class="process-timeline">
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center position-relative">
                                <div class="step-number">01</div>
                                <h5>Oględziny i diagnoza</h5>
                                <p class="text-muted">Dokładne sprawdzenie stanu budynku i oszacowanie stopnia uszkodzeń</p>
                                <div class="process-line d-none d-lg-block"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center position-relative">
                                <div class="step-number">02</div>
                                <h5>Wycena i planowanie</h5>
                                <p class="text-muted">Przedstawienie zaleceń, wyceny i planu działania</p>
                                <div class="process-line d-none d-lg-block"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center position-relative">
                                <div class="step-number">03</div>
                                <h5>Przygotowanie</h5>
                                <p class="text-muted">Osuszenie budynku i przygotowanie powierzchni</p>
                                <div class="process-line d-none d-lg-block"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-step text-center position-relative">
                                <div class="step-number">04</div>
                                <h5>Wykonanie</h5>
                                <p class="text-muted">Profesjonalne wykonanie hydroizolacji z najlepszych materiałów</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section - Asymmetric Layout -->
        <section class="testimonials-section py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Co Mówią Nasi Klienci</h2>
                        <p class="lead text-muted">Opinie zadowolonych klientów, którzy zaufali naszym usługom</p>
                    </div>
                </div>
                
                <!-- Featured Testimonial -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="featured-testimonial card border-0 shadow-lg overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body p-5">
                                        <div class="testimonial-rating mb-3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <blockquote class="blockquote mb-4">
                                            <p class="mb-0">"Profesjonalne podejście, terminowe wykonanie i najwyższa jakość materiałów. Polecam IZO-MAT wszystkim, którzy potrzebują hydroizolacji. Prace wykonane szybko i solidnie."</p>
                                        </blockquote>
                                        <div class="testimonial-author d-flex align-items-center">
                                            <div class="author-avatar me-3">
                                                <div class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Jan Kowalski</h6>
                                                <small class="text-muted">Właściciel domu jednorodzinnego</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testimonial-image bg-primary d-flex align-items-center justify-content-center" style="height: 250px;">
                                        <i class="fas fa-quote-right text-white" style="font-size: 3rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Other Testimonials -->
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonial-card card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="testimonial-rating mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="testimonial-text mb-4">"Świetna firma! Rozwiązali problem z wilgocią w naszej piwnicy. Na pewno skorzystamy ponownie."</p>
                                <div class="testimonial-author d-flex align-items-center">
                                    <div class="author-avatar me-3">
                                        <div class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Anna Nowak</h6>
                                        <small class="text-muted">Właścicielka mieszkania</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonial-card card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="testimonial-rating mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="testimonial-text mb-4">"Kompleksowa obsługa od wyceny po realizację. Fachowa wiedza i nowoczesne metody. Polecam wszystkim!"</p>
                                <div class="testimonial-author d-flex align-items-center">
                                    <div class="author-avatar me-3">
                                        <div class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Piotr Wiśniewski</h6>
                                        <small class="text-muted">Dyrektor firmy budowlanej</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Preview -->
        <section class="portfolio-preview py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Nasze Realizacje</h2>
                        <p class="lead text-muted">Zobacz przykłady naszych prac i efekty przed oraz po wykonaniu hydroizolacji</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <?php foreach(array_slice($portfolio, 0, 3) as $item): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <div class="portfolio-image-placeholder bg-light rounded d-flex align-items-center justify-content-center" style="height: 250px; border: 2px dashed #dc3545;">
                                    <div class="text-center text-muted">
                                        <i class="fas fa-tools fa-2x mb-2 text-primary"></i>
                                        <h6><?php echo htmlspecialchars($item['title']); ?></h6>
                                        <small><?php echo htmlspecialchars($item['description']); ?></small>
                                    </div>
                                </div>
                                <div class="portfolio-overlay">
                                    <div class="portfolio-content">
                                        <h5><?php echo htmlspecialchars($item['title']); ?></h5>
                                        <p><?php echo htmlspecialchars($item['description']); ?></p>
                                        <a href="<?php echo url_for('realizacje'); ?>" class="btn btn-light">Zobacz więcej</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="text-center mt-4">
                    <a href="<?php echo url_for('realizacje'); ?>" class="btn btn-primary btn-lg">Zobacz wszystkie realizacje</a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-5 bg-primary text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="mb-2">Potrzebujesz profesjonalnej hydroizolacji?</h3>
                        <p class="mb-0">Skontaktuj się z nami już dziś i otrzymaj bezpłatną wycenę</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo url_for('wycena'); ?>" class="btn btn-light btn-lg">Zamów wycenę</a>
                        <a href="tel:<?php echo $company_phone; ?>" class="btn btn-outline-light btn-lg ms-2">Zadzwoń</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-primary">IZO-MAT</h5>
                    <p>Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski.</p>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-primary">Nasze usługi</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo url_for('hydroizolacje'); ?>" class="text-white-50">Hydroizolacje</a></li>
                        <li><a href="<?php echo url_for('osuszanie'); ?>" class="text-white-50">Osuszanie budynków</a></li>
                        <li><a href="<?php echo url_for('izolacje_zbiornikow'); ?>" class="text-white-50">Izolacje zbiorników</a></li>
                        <li><a href="<?php echo url_for('posadzki_zywicze'); ?>" class="text-white-50">Posadzki żywicze</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-primary">Kontakt</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt me-2"></i>ul. Warszawska 64k<br>33-200 Dąbrowa Tarnowska</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>ul. Elektryczna 2<br>33-100 Tarnów</p>
                        <p><i class="fas fa-phone me-2"></i><a href="tel:<?php echo $company_phone; ?>" class="text-white-50"><?php echo $company_phone; ?></a></p>
                        <p><i class="fas fa-envelope me-2"></i><a href="mailto:<?php echo $company_email; ?>" class="text-white-50"><?php echo $company_email; ?></a></p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-primary">Godziny pracy</h5>
                    <p>Poniedziałek - Piątek: 8:00 - 17:00<br>
                    Sobota: 8:00 - 14:00<br>
                    Niedziela: Zamknięte</p>
                    
                    <div class="mt-3">
                        <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary">Zamów bezpłatną wycenę</a>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 IZO-MAT. Wszelkie prawa zastrzeżone.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="<?php echo url_for('polityka_prywatnosci'); ?>" class="text-white-50 me-3">Polityka prywatności</a>
                    <a href="<?php echo url_for('regulamin'); ?>" class="text-white-50">Regulamin</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo static_url('js/main.js'); ?>"></script>
</body>
</html>

