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
<body class="portfolio-layout">
    <!-- Navigation -->
    <nav class="portfolio-nav">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <div class="logo-icon">IZO</div>
                    <span class="logo-text">IZO-MAT</span>
                </div>
                
                <ul class="nav-menu">
                    <li><a href="#" class="nav-link active">Strona główna</a></li>
                    <li><a href="#" class="nav-link">Usługi</a></li>
                    <li><a href="#" class="nav-link">Realizacje</a></li>
                    <li><a href="#" class="nav-link">O firmie</a></li>
                    <li><a href="#" class="nav-link">Kontakt</a></li>
                </ul>
                
                <div class="nav-actions">
                    <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary">Zamów wycenę</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-portfolio">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span class="badge bg-warning text-dark">Specjalizacja od 2003 roku</span>
                </div>
                <h1 class="hero-title">Profesjonalne Hydroizolacje i Osuszanie Budynków</h1>
                <p class="hero-description">Specjalizujemy się w hydroizolacjach od 2003 roku. Oferujemy kompleksowe usługi izolacyjne na terenie całej Polski z gwarancją najwyższej jakości.</p>
                <div class="hero-actions">
                    <a href="<?php echo url_for('wycena'); ?>" class="btn btn-primary btn-lg">Bezpłatna wycena</a>
                    <a href="<?php echo url_for('kontakt'); ?>" class="btn btn-outline-light btn-lg">Kontakt</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-placeholder">
                    <i class="fas fa-building fa-4x text-white"></i>
                </div>
            </div>
        </div>
        
        <!-- Floating Stats -->
        <div class="floating-stats">
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
    </section>

    <!-- Services Masonry Grid -->
    <section class="services-masonry">
        <div class="container">
            <div class="section-header">
                <h2>Nasze Usługi</h2>
                <p>Kompleksowe rozwiązania w zakresie hydroizolacji</p>
            </div>
            
            <div class="masonry-grid">
                <!-- Large Featured Service -->
                <div class="masonry-item masonry-item-large">
                    <div class="service-card featured">
                        <div class="service-image">
                            <div class="image-placeholder bg-primary">
                                <i class="fas fa-home fa-3x text-white"></i>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3>Hydroizolacje</h3>
                            <p>Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających. Nasza specjalność od 2003 roku.</p>
                            <a href="#" class="btn btn-outline-primary">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                
                <!-- Medium Services -->
                <div class="masonry-item masonry-item-medium">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tint fa-2x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h4>Osuszanie Budynków</h4>
                            <p>Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                
                <div class="masonry-item masonry-item-medium">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-swimming-pool fa-2x text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h4>Izolacje Zbiorników</h4>
                            <p>Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                
                <!-- Small Services -->
                <div class="masonry-item masonry-item-small">
                    <div class="service-card compact">
                        <div class="service-icon">
                            <i class="fas fa-layer-group fa-lg text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5>Izolacje Kurtynowe</h5>
                            <p>Zewnętrzna hydroizolacja bez wykopu.</p>
                        </div>
                    </div>
                </div>
                
                <div class="masonry-item masonry-item-small">
                    <div class="service-card compact">
                        <div class="service-icon">
                            <i class="fas fa-square fa-lg text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5>Posadzki Żywicze</h5>
                            <p>Trwałe i odporne posadzki żywicze.</p>
                        </div>
                    </div>
                </div>
                
                <div class="masonry-item masonry-item-small">
                    <div class="service-card compact">
                        <div class="service-icon">
                            <i class="fas fa-tools fa-lg text-primary"></i>
                        </div>
                        <div class="service-content">
                            <h5>Iniekcja Rys</h5>
                            <p>Trwałe wyeliminowanie rys i pęknięć.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section with Diagonal Layout -->
    <section class="about-diagonal">
        <div class="diagonal-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Dlaczego IZO-MAT?</h2>
                        <h4 class="text-primary">Solidność | Rzetelność | Niezawodność</h4>
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
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <div class="image-placeholder">
                            <i class="fas fa-building fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline -->
    <section class="process-timeline-section">
        <div class="container">
            <div class="section-header">
                <h2>Jak Pracujemy</h2>
                <p>Nasz sprawdzony proces gwarantuje najwyższą jakość</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-number">01</div>
                    </div>
                    <div class="timeline-content">
                        <h4>Oględziny i diagnoza</h4>
                        <p>Dokładne sprawdzenie stanu budynku i oszacowanie stopnia uszkodzeń</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-number">02</div>
                    </div>
                    <div class="timeline-content">
                        <h4>Wycena i planowanie</h4>
                        <p>Przedstawienie zaleceń, wyceny i planu działania</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-number">03</div>
                    </div>
                    <div class="timeline-content">
                        <h4>Przygotowanie</h4>
                        <p>Osuszenie budynku i przygotowanie powierzchni</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-number">04</div>
                    </div>
                    <div class="timeline-content">
                        <h4>Wykonanie</h4>
                        <p>Profesjonalne wykonanie hydroizolacji z najlepszych materiałów</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="testimonials-carousel">
        <div class="container">
            <div class="section-header">
                <h2>Co Mówią Nasi Klienci</h2>
                <p>Opinie zadowolonych klientów</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card featured">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <blockquote>
                            "Profesjonalne podejście, terminowe wykonanie i najwyższa jakość materiałów. Polecam IZO-MAT wszystkim, którzy potrzebują hydroizolacji."
                        </blockquote>
                        <div class="author">
                            <div class="author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="author-info">
                                <strong>Jan Kowalski</strong>
                                <small>Właściciel domu</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <blockquote>
                            "Świetna firma! Rozwiązali problem z wilgocią w naszej piwnicy."
                        </blockquote>
                        <div class="author">
                            <div class="author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="author-info">
                                <strong>Anna Nowak</strong>
                                <small>Właścicielka mieszkania</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <blockquote>
                            "Kompleksowa obsługa od wyceny po realizację. Polecam wszystkim!"
                        </blockquote>
                        <div class="author">
                            <div class="author-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="author-info">
                                <strong>Piotr Wiśniewski</strong>
                                <small>Dyrektor firmy</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Gallery -->
    <section class="portfolio-gallery">
        <div class="container">
            <div class="section-header">
                <h2>Nasze Realizacje</h2>
                <p>Przykłady naszych prac</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item large">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 1</h5>
                            <p>Opis realizacji</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item medium">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 2</h5>
                            <p>Opis realizacji</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item small">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-lg"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 3</h5>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item medium">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 4</h5>
                            <p>Opis realizacji</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item small">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-lg"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 5</h5>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item small">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tools fa-lg"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h5>Projekt 6</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Potrzebujesz profesjonalnej hydroizolacji?</h2>
                <p>Skontaktuj się z nami już dziś i otrzymaj bezpłatną wycenę</p>
                <a href="<?php echo url_for('wycena'); ?>" class="btn btn-warning btn-lg">Zamów wycenę</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>IZO-MAT</h5>
                    <p>Profesjonalne hydroizolacje i osuszanie budynków od 2003 roku.</p>
                </div>
                <div class="footer-section">
                    <h5>Kontakt</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> <?php echo $company_phone; ?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo $company_email; ?></p>
                        <p><i class="fas fa-map-marker-alt"></i> Tarnów, Dąbrowa Tarnowska</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h5>Usługi</h5>
                    <ul>
                        <li><a href="#">Hydroizolacje</a></li>
                        <li><a href="#">Osuszanie budynków</a></li>
                        <li><a href="#">Izolacje zbiorników</a></li>
                        <li><a href="#">Posadzki żywicze</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
