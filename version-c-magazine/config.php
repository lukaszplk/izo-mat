<?php
// Configuration file for IZO-MAT website
// This file contains all the basic configuration settings

// Company Information
$company_name = "IZO-MAT";
$company_phone = "+48 14 621 20 20";
$company_email = "biuro@izo-mat.pl";
$company_address = "Tarnów, Dąbrowa Tarnowska";

// Website URLs
$base_url = "http://localhost/izo-mat/version-c-magazine/";
$static_url = "http://localhost/izo-mat/version-c-magazine/static/";

// Helper function to generate URLs
function url_for($page) {
    global $base_url;
    return $base_url . $page . ".php";
}

// Helper function to generate static URLs
function static_url($path) {
    global $static_url;
    return $static_url . $path;
}

// Page titles and descriptions
$page_titles = [
    'index' => 'IZO-MAT - Profesjonalne Hydroizolacje i Osuszanie Budynków w Tarnowie',
    'hydroizolacje' => 'Hydroizolacje - IZO-MAT',
    'osuszanie' => 'Osuszanie Budynków - IZO-MAT',
    'izolacje_zbiornikow' => 'Izolacje Zbiorników - IZO-MAT',
    'izolacje_kurtynowe' => 'Izolacje Kurtynowe - IZO-MAT',
    'kontakt' => 'Kontakt - IZO-MAT',
    'wycena' => 'Zamów Wycenę - IZO-MAT'
];

$page_descriptions = [
    'index' => 'Profesjonalne hydroizolacje budynków w Tarnowie i Dąbrowie Tarnowskiej. Osuszanie budynków, izolacje zbiorników, posadzki żywicze. Doświadczenie od 2003 roku.',
    'hydroizolacje' => 'Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających.',
    'osuszanie' => 'Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.',
    'izolacje_zbiornikow' => 'Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.',
    'izolacje_kurtynowe' => 'Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu - trwałe odizolowanie ścian piwnic.',
    'kontakt' => 'Skontaktuj się z nami - IZO-MAT. Profesjonalne hydroizolacje i osuszanie budynków.',
    'wycena' => 'Zamów bezpłatną wycenę hydroizolacji - IZO-MAT. Profesjonalne usługi izolacyjne.'
];

// Services data
$services = [
    [
        'title' => 'Hydroizolacje',
        'description' => 'Zabezpieczanie budynków poprzez wykonanie hydroizolacji z materiałów bitumicznych i uszczelniających.',
        'icon' => 'fas fa-home'
    ],
    [
        'title' => 'Osuszanie Budynków',
        'description' => 'Profesjonalne osuszanie ścian i elementów które uległy zawilgoceniu w celu usunięcia wilgoci.',
        'icon' => 'fas fa-tint'
    ],
    [
        'title' => 'Izolacje Zbiorników',
        'description' => 'Pełna izolacja zbiorników, basenów, tarasów i balkonów zapewniająca ich szczelność.',
        'icon' => 'fas fa-swimming-pool'
    ],
    [
        'title' => 'Izolacje Kurtynowe',
        'description' => 'Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu - trwałe odizolowanie ścian piwnic.',
        'icon' => 'fas fa-layer-group'
    ],
    [
        'title' => 'Posadzki Żywicze',
        'description' => 'Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych.',
        'icon' => 'fas fa-square'
    ],
    [
        'title' => 'Iniekcja Rys i Pęknięć',
        'description' => 'Trwałe wyeliminowanie rys i pęknięć w betonie w celu scalenia uszkodzonych elementów.',
        'icon' => 'fas fa-tools'
    ]
];

// Process steps
$process_steps = [
    [
        'number' => '01',
        'title' => 'Oględziny i diagnoza',
        'description' => 'Dokładne sprawdzenie stanu budynku i oszacowanie stopnia uszkodzeń'
    ],
    [
        'number' => '02',
        'title' => 'Wycena i planowanie',
        'description' => 'Przedstawienie zaleceń, wyceny i planu działania'
    ],
    [
        'number' => '03',
        'title' => 'Przygotowanie',
        'description' => 'Osuszenie budynku i przygotowanie powierzchni'
    ],
    [
        'number' => '04',
        'title' => 'Wykonanie',
        'description' => 'Profesjonalne wykonanie hydroizolacji z najlepszych materiałów'
    ]
];

// Testimonials
$testimonials = [
    [
        'text' => 'Profesjonalne podejście, terminowe wykonanie i najwyższa jakość materiałów. Polecam IZO-MAT wszystkim, którzy potrzebują hydroizolacji.',
        'author' => 'Jan Kowalski',
        'position' => 'Właściciel domu',
        'rating' => 5
    ],
    [
        'text' => 'Świetna firma! Rozwiązali problem z wilgocią w naszej piwnicy.',
        'author' => 'Anna Nowak',
        'position' => 'Właścicielka mieszkania',
        'rating' => 5
    ],
    [
        'text' => 'Kompleksowa obsługa od wyceny po realizację. Polecam wszystkim!',
        'author' => 'Piotr Wiśniewski',
        'position' => 'Dyrektor firmy',
        'rating' => 5
    ]
];

// Features
$features = [
    'Doświadczenie od 2003 roku',
    'Nowoczesne materiały',
    'Zasięg ogólnopolski',
    'Doradztwo techniczne'
];

// Stats
$stats = [
    [
        'number' => '500+',
        'label' => 'Projektów',
        'icon' => 'fas fa-project-diagram'
    ],
    [
        'number' => '20+',
        'label' => 'Lat doświadczenia',
        'icon' => 'fas fa-calendar-alt'
    ],
    [
        'number' => '100%',
        'label' => 'Zadowolonych klientów',
        'icon' => 'fas fa-smile'
    ],
    [
        'number' => '24/7',
        'label' => 'Wsparcie',
        'icon' => 'fas fa-clock'
    ]
];
?>
