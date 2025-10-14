<?php
require_once 'config.php';

$page_title = "Wycena - IZO-MAT";
$page_description = "Zamów bezpłatną wycenę hydroizolacji. Wypełnij formularz i otrzymaj profesjonalną wycenę w ciągu 24 godzin.";
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
                        <h1 class="display-4 fw-bold mb-3">Bezpłatna Wycena</h1>
                        <p class="lead">Wypełnij formularz i otrzymaj profesjonalną wycenę w ciągu 24 godzin</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Form Section -->
        <section class="quote-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="quote-form">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0"><i class="fas fa-calculator me-2"></i>Formularz wyceny</h3>
                                </div>
                                <div class="card-body p-4">
                                    <form action="quote-handler.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">Imię i nazwisko *</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">Email *</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="form-label">Telefon *</label>
                                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="service" class="form-label">Usługa *</label>
                                                <select class="form-select" id="service" name="service" required>
                                                    <option value="">Wybierz usługę</option>
                                                    <option value="hydroizolacje">Hydroizolacje</option>
                                                    <option value="osuszanie">Osuszanie budynków</option>
                                                    <option value="izolacje-zbiornikow">Izolacje zbiorników</option>
                                                    <option value="izolacje-kurtynowe">Izolacje kurtynowe</option>
                                                    <option value="izolacje-dachow">Izolacje dachów</option>
                                                    <option value="posadzki-zywicze">Posadzki żywicze</option>
                                                    <option value="iniekcja-rys">Iniekcja rys i pęknięć</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="area" class="form-label">Powierzchnia (m²) *</label>
                                                <input type="number" class="form-control" id="area" name="area" min="1" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="location" class="form-label">Lokalizacja</label>
                                                <input type="text" class="form-control" id="location" name="location" placeholder="Miasto, województwo">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Opis projektu</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Opisz szczegóły projektu, stan budynku, preferencje materiałowe..."></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="urgency" class="form-label">Pilność realizacji</label>
                                            <select class="form-select" id="urgency" name="urgency">
                                                <option value="standard">Standardowa (1-2 miesiące)</option>
                                                <option value="urgent">Pilna (2-4 tygodnie)</option>
                                                <option value="emergency">Awaryjna (1-2 tygodnie)</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
                                            <label class="form-check-label" for="privacy">
                                                Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z <a href="<?php echo url_for('polityka_prywatnosci'); ?>" target="_blank">polityką prywatności</a> *
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="fas fa-paper-plane me-2"></i>Wyślij zapytanie o wycenę
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="display-5 fw-bold">Dlaczego warto wybrać naszą wycenę?</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-item text-center">
                            <div class="benefit-icon mb-3">
                                <i class="fas fa-clock text-primary fa-3x"></i>
                            </div>
                            <h5>Szybka odpowiedź</h5>
                            <p>Odpowiadamy w ciągu 24 godzin</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-item text-center">
                            <div class="benefit-icon mb-3">
                                <i class="fas fa-euro-sign text-primary fa-3x"></i>
                            </div>
                            <h5>Bezpłatna wycena</h5>
                            <p>Nie pobieramy opłat za wycenę</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-item text-center">
                            <div class="benefit-icon mb-3">
                                <i class="fas fa-user-tie text-primary fa-3x"></i>
                            </div>
                            <h5>Profesjonalne doradztwo</h5>
                            <p>Ekspert oceni Twój projekt</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-item text-center">
                            <div class="benefit-icon mb-3">
                                <i class="fas fa-handshake text-primary fa-3x"></i>
                            </div>
                            <h5>Bez zobowiązań</h5>
                            <p>Wycena nie zobowiązuje do realizacji</p>
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
                        <h3 class="mb-2">Potrzebujesz pilnej wyceny?</h3>
                        <p class="mb-0">Zadzwoń bezpośrednio i otrzymaj wycenę telefoniczną</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="tel:<?php echo $company_phone; ?>" class="btn btn-warning btn-lg">Zadzwoń teraz</a>
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
