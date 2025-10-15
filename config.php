<?php
// IZO-MAT PHP Website
// Converted from Flask app

// Configuration
$site_title = "IZO-MAT - Profesjonalne Hydroizolacje i Osuszanie Budynków w Tarnowie";
$site_description = "Profesjonalne hydroizolacje budynków w Tarnowie i Dąbrowie Tarnowskiej. Osuszanie budynków, izolacje zbiorników, posadzki żywicze. Doświadczenie od 2003 roku.";
$company_phone = "+48 606 900 346";
$company_email = "izomatrs@op.pl";

// Services data
$services = [
    'hydroizolacje' => [
        'title' => 'Hydroizolacje',
        'description' => 'Profesjonalne hydroizolacje budynków z materiałów bitumicznych i uszczelniających',
        'features' => [
            'Izolacja fundamentów',
            'Hydroizolacja ścian',
            'Izolacja przeciwwodna',
            'Materiały najwyższej jakości'
        ],
        'process' => [
            'Oględziny i diagnoza stanu budynku',
            'Przygotowanie powierzchni',
            'Aplikacja materiałów izolacyjnych',
            'Kontrola jakości wykonania'
        ]
    ],
    'osuszanie' => [
        'title' => 'Osuszanie Budynków',
        'description' => 'Profesjonalne osuszanie zawilgoconych ścian i elementów budynku',
        'features' => [
            'Osuszanie elektroosmotyczne',
            'Osuszanie grawitacyjne',
            'Usuwanie grzybów i pleśni',
            'Monitoring wilgotności'
        ],
        'process' => [
            'Pomiar wilgotności ścian',
            'Identyfikacja przyczyn zawilgocenia',
            'Wybór metody osuszania',
            'Proces osuszania i kontrola'
        ]
    ],
    'izolacje-zbiornikow' => [
        'title' => 'Izolacje Zbiorników',
        'description' => 'Kompleksowa izolacja zbiorników, basenów, tarasów i balkonów',
        'features' => [
            'Izolacja basenów',
            'Izolacja zbiorników wodnych',
            'Izolacja tarasów',
            'Izolacja balkonów'
        ],
        'process' => [
            'Przygotowanie powierzchni',
            'Aplikacja primer-a',
            'Nakładanie warstw izolacyjnych',
            'Testy szczelności'
        ]
    ],
    'izolacje-kurtynowe' => [
        'title' => 'Izolacje Kurtynowe',
        'description' => 'Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu',
        'features' => [
            'Bez konieczności wykopu',
            'Iniekcja żelu izolacyjnego',
            'Trwała ochrona fundamentów',
            'Minimalna inwazyjność'
        ],
        'process' => [
            'Wiercenie otworów w ścianie',
            'Wprowadzenie żelu izolacyjnego',
            'Utworzenie kurtyny wodoszczelnej',
            'Kontrola efektywności izolacji'
        ]
    ],
    'izolacje-dachow' => [
        'title' => 'Izolacje Dachów Odwróconych',
        'description' => 'Specjalistyczna izolacja dachów odwróconych z izolacją termiczną',
        'features' => [
            'Izolacja przeciwwodna',
            'Izolacja termiczna',
            'Odprowadzanie wody',
            'Długotrwała ochrona'
        ],
        'process' => [
            'Przygotowanie podłoża',
            'Montaż izolacji termicznej',
            'Aplikacja membrany wodoszczelnej',
            'Wykonanie warstwy ochronnej'
        ]
    ],
    'posadzki-zywicze' => [
        'title' => 'Posadzki Żywicze',
        'description' => 'Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych',
        'features' => [
            'Wysoka odporność na ścieranie',
            'Łatwość utrzymania czystości',
            'Różnorodność kolorów',
            'Właściwości antypoślizgowe'
        ],
        'process' => [
            'Przygotowanie podłoża betonowego',
            'Aplikacja primer-a',
            'Nakładanie żywicy',
            'Wykończenie powierzchni'
        ]
    ],
    'iniekcja-rys' => [
        'title' => 'Iniekcja Rys i Pęknięć',
        'description' => 'Trwałe wyeliminowanie rys i pęknięć w betonie',
        'features' => [
            'Wzmocnienie konstrukcji',
            'Uszczelnienie rys',
            'Zapobieganie korozji',
            'Przywrócenie integralności'
        ],
        'process' => [
            'Ocena stanu rys i pęknięć',
            'Przygotowanie otworów iniekcyjnych',
            'Iniekcja materiału naprawczego',
            'Kontrola skuteczności naprawy'
        ]
    ]
];

// Portfolio data
$portfolio = [
    [
        'title' => 'Dach Odwrócony w Rzeszowie',
        'category' => 'izolacje-dachow',
        'image' => 'portfolio-1.jpg',
        'description' => 'Kompleksowa izolacja dachu odwróconego w budynku mieszkalnym'
    ],
    [
        'title' => 'Hydroizolacja w Gręboszowie',
        'category' => 'hydroizolacje',
        'image' => 'portfolio-2.jpg',
        'description' => 'Wykonanie hydroizolacji fundamentów starego budynku'
    ],
    [
        'title' => 'Izolacja Tarasów',
        'category' => 'izolacje-zbiornikow',
        'image' => 'portfolio-3.jpg',
        'description' => 'Profesjonalna izolacja tarasów mieszkalnych'
    ],
    [
        'title' => 'Fontanna w Nowym Sączu',
        'category' => 'izolacje-zbiornikow',
        'image' => 'portfolio-4.jpg',
        'description' => 'Renowacja i izolacja miejskiej fontanny'
    ],
    [
        'title' => 'Naprawa Niecki Basenowej',
        'category' => 'izolacje-zbiornikow',
        'image' => 'portfolio-5.jpg',
        'description' => 'Kompleksowa naprawa i izolacja basenu'
    ],
    [
        'title' => 'Posadzki Żywicze',
        'category' => 'posadzki-zywicze',
        'image' => 'portfolio-6.jpg',
        'description' => 'Wykonanie posadzek żywicznych w hali przemysłowej'
    ]
];

// Company info
$company_info = [
    'founded' => 2003,
    'experience_years' => 2024 - 2003,
    'completed_projects' => '500+',
    'team_size' => 12,
    'certifications' => [
        'Certyfikat ISO 9001',
        'Uprawnienia budowlane',
        'Certyfikaty producenta materiałów'
    ]
];

// Contact info
$contact_info = [
    'offices' => [
        [
            'name' => 'Biuro Tarnów',
            'address' => 'ul. Elektryczna 2, 33-100 Tarnów',
            'phone' => '+48 606 900 346',
            'email' => 'izomatrs@op.pl',
            'coordinates' => ['lat' => 50.032047, 'lng' => 20.968689]
        ],
        [
            'name' => 'Biuro Dąbrowa Tarnowska',
            'address' => 'ul. Warszawska 64k, 33-200 Dąbrowa Tarnowska',
            'phone' => '+48 606 900 346',
            'email' => 'izomatrs@op.pl',
            'coordinates' => ['lat' => 50.188468, 'lng' => 20.989263]
        ]
    ]
];

// Helper functions
function url_for($page) {
    // Detect if we're running locally (XAMPP) or on server
    $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
    $base_url = $is_local ? '/izo-mat/' : '/';
    
    switch($page) {
        case 'index':
            return $base_url;
        case 'hydroizolacje':
            return $base_url . 'hydroizolacje.php';
        case 'osuszanie':
            return $base_url . 'osuszanie.php';
        case 'izolacje_zbiornikow':
            return $base_url . 'izolacje-zbiornikow.php';
        case 'izolacje_kurtynowe':
            return $base_url . 'izolacje-kurtynowe.php';
        case 'izolacje_dachow':
            return $base_url . 'izolacje-dachow.php';
        case 'posadzki_zywicze':
            return $base_url . 'posadzki-zywicze.php';
        case 'iniekcja_rys':
            return $base_url . 'iniekcja-rys.php';
        case 'realizacje':
            return $base_url . 'realizacje.php';
        case 'o_firmie':
            return $base_url . 'o-firmie.php';
        case 'kontakt':
            return $base_url . 'kontakt.php';
        case 'wycena':
            return $base_url . 'wycena.php';
        case 'polityka_prywatnosci':
            return $base_url . 'polityka-prywatnosci.php';
        case 'regulamin':
            return $base_url . 'regulamin.php';
        default:
            return $base_url;
    }
}

function static_url($file) {
    // Detect if we're running locally (XAMPP) or on server
    $is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
    $base_path = $is_local ? '/izo-mat/' : '/';
    return $base_path . 'static/' . $file;
}

// Get current page
$current_page = basename($_SERVER['PHP_SELF'], '.php');
if ($current_page == 'index') {
    $current_page = 'index';
}
?>
