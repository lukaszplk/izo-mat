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
<body class="dashboard-layout">
    <!-- Dashboard Sidebar -->
    <aside class="dashboard-sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <div class="logo-icon">IZO</div>
                <span class="logo-text">IZO-MAT</span>
            </div>
        </div>
        
        <nav class="sidebar-nav">
            <ul class="nav-list">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span>Strona główna</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tools"></i>
                        <span>Usługi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-images"></i>
                        <span>Realizacje</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-building"></i>
                        <span>O firmie</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-phone"></i>
                        <span>Kontakt</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="sidebar-footer">
            <div class="contact-card">
                <h6>Kontakt</h6>
                <p><i class="fas fa-phone"></i> <?php echo $company_phone; ?></p>
                <p><i class="fas fa-envelope"></i> <?php echo $company_email; ?></p>
                <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary btn-sm">Zamów wycenę</a>
            </div>
        </div>
    </aside>

    <!-- Main Dashboard Content -->
    <main class="dashboard-main">
        <!-- Top Bar -->
        <header class="dashboard-header">
            <div class="header-left">
                <button class="sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Dashboard</h1>
            </div>
            <div class="header-right">
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> <?php echo $company_phone; ?></span>
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <!-- Hero Section -->
            <section class="hero-dashboard">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge bg-warning text-dark">Specjalizacja od 2003 roku</span>
                    </div>
                    <h1 class="hero-title">Profesjonalne Hydroizolacje i Osuszanie Budynków</h1>
                    <p class="hero-description">Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski.</p>
                    <div class="hero-actions">
                        <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary btn-lg">Bezpłatna wycena</a>
                        <a href="<?php echo url_for('kontakt'); ?>" class="btn btn-outline-primary btn-lg">Kontakt</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-placeholder">
                        <i class="fas fa-building fa-4x text-primary"></i>
                    </div>
                </div>
            </section>

            <!-- Stats Cards -->
            <section class="stats-section">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">Projektów</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">20+</div>
                                <div class="stat-label">Lat doświadczenia</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Zadowolonych klientów</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Wsparcie</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Grid -->
            <section class="services-section">
                <div class="section-header">
                    <h2>Nasze Usługi</h2>
                    <p>Kompleksowe rozwiązania w zakresie hydroizolacji</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <h4>Hydroizolacje</h4>
                            </div>
                            <div class="service-body">
                                <p>Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-tint"></i>
                                </div>
                                <h4>Osuszanie Budynków</h4>
                            </div>
                            <div class="service-body">
                                <p>Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-swimming-pool"></i>
                                </div>
                                <h4>Izolacje Zbiorników</h4>
                            </div>
                            <div class="service-body">
                                <p>Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <h4>Izolacje Kurtynowe</h4>
                            </div>
                            <div class="service-body">
                                <p>Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu - trwałe odizolowanie ścian piwnic.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-square"></i>
                                </div>
                                <h4>Posadzki Żywicze</h4>
                            </div>
                            <div class="service-body">
                                <p>Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <h4>Iniekcja Rys i Pęknięć</h4>
                            </div>
                            <div class="service-body">
                                <p>Trwałe wyeliminowanie rys i pęknięć w betonie w celu scalenia uszkodzonych elementów.</p>
                                <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About & Process Section -->
            <section class="about-process-section">
                <div class="row g-4">
                    <!-- About Card -->
                    <div class="col-lg-6">
                        <div class="content-card">
                            <div class="card-header">
                                <h3>Dlaczego IZO-MAT?</h3>
                            </div>
                            <div class="card-body">
                                <p>IZO-MAT działa w branży usług hydroizolacyjnych od 2003 roku. Realizujemy zlecenia w całej Polsce na obiektach najróżniejszego typu.</p>
                                
                                <div class="features-list">
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
                        </div>
                    </div>
                    
                    <!-- Process Card -->
                    <div class="col-lg-6">
                        <div class="content-card">
                            <div class="card-header">
                                <h3>Jak Pracujemy</h3>
                            </div>
                            <div class="card-body">
                                <div class="process-steps">
                                    <div class="process-step">
                                        <div class="step-number">01</div>
                                        <div class="step-content">
                                            <h5>Oględziny i diagnoza</h5>
                                            <p>Dokładne sprawdzenie stanu budynku</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">02</div>
                                        <div class="step-content">
                                            <h5>Wycena i planowanie</h5>
                                            <p>Przedstawienie zaleceń i wyceny</p>
                                        </div>
                                    </div>
                                    <div class="process-step">
                                        <div class="step-number">03</div>
                                        <div class="step-content">
                                            <h5>Wykonanie</h5>
                                            <p>Profesjonalne wykonanie hydroizolacji</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="testimonials-section">
                <div class="section-header">
                    <h2>Co Mówią Nasi Klienci</h2>
                    <p>Opinie zadowolonych klientów</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>"Profesjonalne podejście, terminowe wykonanie i najwyższa jakość materiałów."</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="author-info">
                                    <strong>Jan Kowalski</strong>
                                    <small>Właściciel domu</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>"Świetna firma! Rozwiązali problem z wilgocią w naszej piwnicy."</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="author-info">
                                    <strong>Anna Nowak</strong>
                                    <small>Właścicielka mieszkania</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>"Kompleksowa obsługa od wyceny po realizację. Polecam wszystkim!"</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="author-info">
                                    <strong>Piotr Wiśniewski</strong>
                                    <small>Dyrektor firmy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Section -->
            <section class="portfolio-section">
                <div class="section-header">
                    <h2>Nasze Realizacje</h2>
                    <p>Przykłady naszych prac</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
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
                        <div class="portfolio-card">
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
                        <div class="portfolio-card">
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
            </section>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
