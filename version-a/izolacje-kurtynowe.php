<?php
require_once 'config.php';

$service_key = 'izolacje-kurtynowe';
$service = $services[$service_key];
$page_title = $service['title'] . " - IZO-MAT";
$page_description = $service['description'];
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo static_url('css/style.css'); ?>">
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
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo url_for('index'); ?>">
                    <img src="<?php echo static_url('images/logo.png'); ?>" alt="IZO-MAT" height="50" class="me-2">
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
        <!-- Page Header -->
        <section class="page-header py-5 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-3"><?php echo $service['title']; ?></h1>
                        <p class="lead"><?php echo $service['description']; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Details -->
        <section class="service-details py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-content">
                            <h2 class="mb-4">Czym są <?php echo $service['title']; ?>?</h2>
                            <p class="lead mb-4">
                                <?php echo $service['description']; ?> To nowoczesna metoda hydroizolacji, która nie wymaga wykopów i jest idealna dla istniejących budynków.
                            </p>
                            
                            <h3 class="mb-3">Zalety izolacji kurtynowych:</h3>
                            <ul class="list-unstyled">
                                <?php foreach($service['features'] as $feature): ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <?php echo htmlspecialchars($feature); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <h3 class="mb-3 mt-5">Proces realizacji:</h3>
                            <div class="row">
                                <?php foreach($service['process'] as $index => $step): ?>
                                <div class="col-md-6 mb-3">
                                    <div class="process-item">
                                        <div class="step-number-small"><?php echo $index + 1; ?></div>
                                        <div class="step-content">
                                            <h6><?php echo htmlspecialchars($step); ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="service-sidebar">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Potrzebujesz wyceny?</h5>
                                </div>
                                <div class="card-body">
                                    <p>Skontaktuj się z nami i otrzymaj bezpłatną wycenę dla swojego projektu.</p>
                                    <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary w-100 mb-2">Zamów wycenę</a>
                                    <a href="tel:<?php echo $company_phone; ?>" class="btn btn-outline-primary w-100">Zadzwoń</a>
                                </div>
                            </div>
                            
                            <div class="card mt-4">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Kontakt</h5>
                                </div>
                                <div class="card-body">
                                    <p><i class="fas fa-phone me-2"></i><?php echo $company_phone; ?></p>
                                    <p><i class="fas fa-envelope me-2"></i><?php echo $company_email; ?></p>
                                    <p><i class="fas fa-map-marker-alt me-2"></i>Tarnów, Dąbrowa Tarnowska</p>
                                </div>
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
                        <h3 class="mb-2">Zainteresowany naszą ofertą?</h3>
                        <p class="mb-0">Skontaktuj się z nami już dziś i otrzymaj profesjonalną wycenę</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo url_for('wycena'); ?>" class="btn btn-warning btn-lg">Zamów wycenę</a>
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
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
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
