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
        <!-- Hero Section - Clean & Simple -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center min-vh-75">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <div class="badge bg-warning text-dark mb-3 px-3 py-2">
                                <i class="fas fa-award me-2"></i>Specjalizacja od 2003 roku
                            </div>
                            <h1 class="display-4 fw-bold text-white mb-4">
                                Profesjonalne <span class="text-warning">Hydroizolacje</span> i Osuszanie Budynków
                            </h1>
                            <p class="lead text-white mb-4">
                                Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski z gwarancją najwyższej jakości.
                            </p>
                            <div class="hero-buttons">
                                <a href="<?php echo url_for('wycena'); ?>" class="btn btn-warning btn-lg me-3">
                                    <i class="fas fa-calculator me-2"></i>Bezpłatna wycena
                                </a>
                                <a href="tel:<?php echo $company_phone; ?>" class="btn btn-outline-light btn-lg">
                                    <i class="fas fa-phone me-2"></i><?php echo $company_phone; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="<?php echo static_url('images/hero-image.jpg'); ?>" alt="Hydroizolacje budynków" class="img-fluid rounded shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section - Simple Row -->
        <section class="stats-section py-5 bg-white">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold">500+</div>
                            <div class="stat-label text-muted">Projektów</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold">20+</div>
                            <div class="stat-label text-muted">Lat doświadczenia</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold">100%</div>
                            <div class="stat-label text-muted">Zadowolonych klientów</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-item">
                            <div class="stat-number text-primary fw-bold">24/7</div>
                            <div class="stat-label text-muted">Wsparcie</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section - Simplified -->
        <section class="services-section py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Nasze Usługi</h2>
                        <p class="lead text-muted">Oferujemy kompleksowe rozwiązania w zakresie hydroizolacji i ochrony budynków przed wilgocią</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-home text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydroizolacje</h4>
                            <p class="text-muted mb-3">Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających.</p>
                            <a href="<?php echo url_for('hydroizolacje'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-tint text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Osuszanie Budynków</h4>
                            <p class="text-muted mb-3">Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.</p>
                            <a href="<?php echo url_for('osuszanie'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-swimming-pool text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Izolacje Zbiorników</h4>
                            <p class="text-muted mb-3">Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.</p>
                            <a href="<?php echo url_for('izolacje_zbiornikow'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-layer-group text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Izolacje Kurtynowe</h4>
                            <p class="text-muted mb-3">Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu - trwałe odizolowanie ścian piwnic.</p>
                            <a href="<?php echo url_for('izolacje_kurtynowe'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-square text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Posadzki Żywicze</h4>
                            <p class="text-muted mb-3">Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych.</p>
                            <a href="<?php echo url_for('posadzki_zywicze'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="fas fa-tools text-primary fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Iniekcja Rys i Pęknięć</h4>
                            <p class="text-muted mb-3">Trwałe wyeliminowanie rys i pęknięć w betonie w celu scalenia uszkodzonych elementów.</p>
                            <a href="<?php echo url_for('iniekcja_rys'); ?>" class="btn btn-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section - Simplified -->
        <section class="about-section py-5 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="display-6 fw-bold mb-4">Dlaczego IZO-MAT?</h2>
                        <h4 class="text-primary mb-3">Solidność | Rzetelność | Niezawodność</h4>
                        <p class="lead mb-4">
                            IZO-MAT działa w branży usług hydroizolacyjnych od 2003 roku. Realizujemy zlecenia w całej Polsce na obiektach najróżniejszego typu.
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Doświadczenie od 2003 roku</h6>
                                        <small class="text-muted">Ponad 20 lat doświadczenia</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Nowoczesne materiały</h6>
                                        <small class="text-muted">Najlepsze dostępne materiały</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Zasięg ogólnopolski</h6>
                                        <small class="text-muted">Realizujemy projekty w całej Polsce</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-0">Doradztwo techniczne</h6>
                                        <small class="text-muted">Profesjonalne konsultacje</small>
                                    </div>
                                </div>
                            </div>
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
            </div>
        </section>

        <!-- Process Section - Simplified -->
        <section class="process-section py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-3">Jak Pracujemy</h2>
                        <p class="lead text-muted">Nasz sprawdzony proces gwarantuje najwyższą jakość wykonanych prac</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step text-center">
                            <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">01</div>
                            <h5>Oględziny i diagnoza</h5>
                            <p class="text-muted">Dokładne sprawdzenie stanu budynku i oszacowanie stopnia uszkodzeń</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step text-center">
                            <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">02</div>
                            <h5>Wycena i planowanie</h5>
                            <p class="text-muted">Przedstawienie zaleceń, wyceny i planu działania</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step text-center">
                            <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">03</div>
                            <h5>Przygotowanie</h5>
                            <p class="text-muted">Osuszenie budynku i przygotowanie powierzchni</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step text-center">
                            <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">04</div>
                            <h5>Wykonanie</h5>
                            <p class="text-muted">Profesjonalne wykonanie hydroizolacji z najlepszych materiałów</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Preview - Simplified -->
        <section class="portfolio-preview py-5 bg-white">
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
                            <div class="portfolio-image-placeholder bg-light rounded d-flex align-items-center justify-content-center mb-3" style="height: 250px; border: 2px dashed #dc3545;">
                                <div class="text-center text-muted">
                                    <i class="fas fa-tools fa-2x mb-2 text-primary"></i>
                                    <h6><?php echo htmlspecialchars($item['title']); ?></h6>
                                    <small><?php echo htmlspecialchars($item['description']); ?></small>
                                </div>
                            </div>
                            <h5 class="text-center"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p class="text-center text-muted"><?php echo htmlspecialchars($item['description']); ?></p>
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
