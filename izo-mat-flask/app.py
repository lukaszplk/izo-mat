from flask import Flask, render_template, request, jsonify, flash, redirect, url_for
import os

app = Flask(__name__)
app.secret_key = 'your-secret-key-here'  # Change this in production

# Configuration
app.config['DEBUG'] = True

# Security headers for better browser compatibility
@app.after_request
def add_security_headers(response):
    # Remove server header
    response.headers.pop('Server', None)
    
    # Add security headers
    response.headers['X-Content-Type-Options'] = 'nosniff'
    response.headers['X-Frame-Options'] = 'DENY'
    response.headers['X-XSS-Protection'] = '1; mode=block'
    
    # Content Security Policy (basic)
    response.headers['Content-Security-Policy'] = (
        "default-src 'self' 'unsafe-inline' 'unsafe-eval' "
        "https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; "
        "img-src 'self' data: https:; "
        "font-src 'self' https://cdnjs.cloudflare.com;"
    )
    
    return response

# Main routes
@app.route('/')
def index():
    """Homepage with services overview"""
    return render_template('index.html')

@app.route('/hydroizolacje')
def hydroizolacje():
    """Hydroizolacje service page"""
    service_data = {
        'title': 'Hydroizolacje',
        'description': 'Profesjonalne hydroizolacje budynków z materiałów bitumicznych i uszczelniających',
        'features': [
            'Izolacja fundamentów',
            'Hydroizolacja ścian',
            'Izolacja przeciwwodna',
            'Materiały najwyższej jakości'
        ],
        'process': [
            'Oględziny i diagnoza stanu budynku',
            'Przygotowanie powierzchni',
            'Aplikacja materiałów izolacyjnych',
            'Kontrola jakości wykonania'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/osuszanie')
def osuszanie():
    """Osuszanie budynków service page"""
    service_data = {
        'title': 'Osuszanie Budynków',
        'description': 'Profesjonalne osuszanie zawilgoconych ścian i elementów budynku',
        'features': [
            'Osuszanie elektroosmotyczne',
            'Osuszanie grawitacyjne',
            'Usuwanie grzybów i pleśni',
            'Monitoring wilgotności'
        ],
        'process': [
            'Pomiar wilgotności ścian',
            'Identyfikacja przyczyn zawilgocenia',
            'Wybór metody osuszania',
            'Proces osuszania i kontrola'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/izolacje-zbiornikow')
def izolacje_zbiornikow():
    """Izolacje zbiorników service page"""
    service_data = {
        'title': 'Izolacje Zbiorników',
        'description': 'Kompleksowa izolacja zbiorników, basenów, tarasów i balkonów',
        'features': [
            'Izolacja basenów',
            'Izolacja zbiorników wodnych',
            'Izolacja tarasów',
            'Izolacja balkonów'
        ],
        'process': [
            'Przygotowanie powierzchni',
            'Aplikacja primer-a',
            'Nakładanie warstw izolacyjnych',
            'Testy szczelności'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/izolacje-kurtynowe')
def izolacje_kurtynowe():
    """Izolacje kurtynowe service page"""
    service_data = {
        'title': 'Izolacje Kurtynowe',
        'description': 'Zewnętrzna hydroizolacja bez wykopu poprzez iniekcję żelu',
        'features': [
            'Bez konieczności wykopu',
            'Iniekcja żelu izolacyjnego',
            'Trwała ochrona fundamentów',
            'Minimalna inwazyjność'
        ],
        'process': [
            'Wiercenie otworów w ścianie',
            'Wprowadzenie żelu izolacyjnego',
            'Utworzenie kurtyny wodoszczelnej',
            'Kontrola efektywności izolacji'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/izolacje-dachow')
def izolacje_dachow():
    """Izolacje dachów odwróconych service page"""
    service_data = {
        'title': 'Izolacje Dachów Odwróconych',
        'description': 'Specjalistyczna izolacja dachów odwróconych z izolacją termiczną',
        'features': [
            'Izolacja przeciwwodna',
            'Izolacja termiczna',
            'Odprowadzanie wody',
            'Długotrwała ochrona'
        ],
        'process': [
            'Przygotowanie podłoża',
            'Montaż izolacji termicznej',
            'Aplikacja membrany wodoszczelnej',
            'Wykonanie warstwy ochronnej'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/posadzki-zywicze')
def posadzki_zywicze():
    """Posadzki żywicze service page"""
    service_data = {
        'title': 'Posadzki Żywicze',
        'description': 'Trwałe i odporne posadzki żywicze dla budynków mieszkalnych i przemysłowych',
        'features': [
            'Wysoka odporność na ścieranie',
            'Łatwość utrzymania czystości',
            'Różnorodność kolorów',
            'Właściwości antypoślizgowe'
        ],
        'process': [
            'Przygotowanie podłoża betonowego',
            'Aplikacja primer-a',
            'Nakładanie żywicy',
            'Wykończenie powierzchni'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/iniekcja-rys')
def iniekcja_rys():
    """Iniekcja rys i pęknięć service page"""
    service_data = {
        'title': 'Iniekcja Rys i Pęknięć',
        'description': 'Trwałe wyeliminowanie rys i pęknięć w betonie',
        'features': [
            'Wzmocnienie konstrukcji',
            'Uszczelnienie rys',
            'Zapobieganie korozji',
            'Przywrócenie integralności'
        ],
        'process': [
            'Ocena stanu rys i pęknięć',
            'Przygotowanie otworów iniekcyjnych',
            'Iniekcja materiału naprawczego',
            'Kontrola skuteczności naprawy'
        ]
    }
    return render_template('service.html', service=service_data)

@app.route('/realizacje')
def realizacje():
    """Portfolio/realizacje page"""
    projects = [
        {
            'title': 'Dach Odwrócony w Rzeszowie',
            'category': 'izolacje-dachow',
            'image': 'portfolio-1.jpg',
            'description': 'Kompleksowa izolacja dachu odwróconego w budynku mieszkalnym'
        },
        {
            'title': 'Hydroizolacja w Gręboszowie',
            'category': 'hydroizolacje',
            'image': 'portfolio-2.jpg',
            'description': 'Wykonanie hydroizolacji fundamentów starego budynku'
        },
        {
            'title': 'Izolacja Tarasów',
            'category': 'izolacje-zbiornikow',
            'image': 'portfolio-3.jpg',
            'description': 'Profesjonalna izolacja tarasów mieszkalnych'
        },
        {
            'title': 'Fontanna w Nowym Sączu',
            'category': 'izolacje-zbiornikow',
            'image': 'portfolio-4.jpg',
            'description': 'Renowacja i izolacja miejskiej fontanny'
        },
        {
            'title': 'Naprawa Niecki Basenowej',
            'category': 'izolacje-zbiornikow',
            'image': 'portfolio-5.jpg',
            'description': 'Kompleksowa naprawa i izolacja basenu'
        },
        {
            'title': 'Posadzki Żywicze',
            'category': 'posadzki-zywicze',
            'image': 'portfolio-6.jpg',
            'description': 'Wykonanie posadzek żywicznych w hali przemysłowej'
        }
    ]
    return render_template('realizacje.html', projects=projects)

@app.route('/o-firmie')
def o_firmie():
    """About us page"""
    company_info = {
        'founded': 2003,
        'experience_years': 2024 - 2003,
        'completed_projects': '500+',
        'team_size': 12,
        'certifications': [
            'Certyfikat ISO 9001',
            'Uprawnienia budowlane',
            'Certyfikaty producenta materiałów'
        ]
    }
    return render_template('o_firmie.html', company=company_info)

@app.route('/kontakt')
def kontakt():
    """Contact page"""
    contact_info = {
        'offices': [
            {
                'name': 'Biuro Tarnów',
                'address': 'ul. Elektryczna 2, 33-100 Tarnów',
                'phone': '+48 606 900 346',
                'email': 'izomatrs@op.pl',
                'coordinates': {'lat': 50.032047, 'lng': 20.968689}
            },
            {
                'name': 'Biuro Dąbrowa Tarnowska',
                'address': 'ul. Warszawska 64k, 33-200 Dąbrowa Tarnowska',
                'phone': '+48 606 900 346',
                'email': 'izomatrs@op.pl',
                'coordinates': {'lat': 50.188468, 'lng': 20.989263}
            }
        ]
    }
    return render_template('kontakt.html', contact=contact_info)

@app.route('/wycena')
def wycena():
    """Quote request page"""
    services = [
        'Hydroizolacje',
        'Osuszanie budynków',
        'Izolacje zbiorników',
        'Izolacje kurtynowe',
        'Izolacje dachów',
        'Posadzki żywicze',
        'Iniekcja rys i pęknięć'
    ]
    return render_template('wycena.html', services=services)

@app.route('/polityka-prywatnosci')
def polityka_prywatnosci():
    """Privacy policy page"""
    return render_template('polityka_prywatnosci.html')

@app.route('/regulamin')
def regulamin():
    """Terms of service page"""
    return render_template('regulamin.html')

# API routes for form submissions
@app.route('/api/contact', methods=['POST'])
def api_contact():
    """Handle contact form submission"""
    try:
        data = request.get_json() or request.form.to_dict()
        
        # Basic validation
        required_fields = ['name', 'email', 'phone', 'message']
        for field in required_fields:
            if not data.get(field):
                return jsonify({'success': False, 'message': f'Pole {field} jest wymagane'}), 400
        
        # In a real application, you would:
        # 1. Validate data more thoroughly
        # 2. Save to database
        # 3. Send email notification
        # 4. Log the submission
        
        # For now, just simulate success
        return jsonify({
            'success': True,
            'message': 'Wiadomość została wysłana pomyślnie. Skontaktujemy się z Państwem w ciągu 24 godzin.'
        })
        
    except Exception as e:
        return jsonify({'success': False, 'message': 'Wystąpił błąd podczas wysyłania wiadomości'}), 500

@app.route('/api/quote', methods=['POST'])
def api_quote():
    """Handle quote request submission"""
    try:
        data = request.get_json() or request.form.to_dict()
        
        # Basic validation
        required_fields = ['name', 'email', 'phone', 'service', 'area']
        for field in required_fields:
            if not data.get(field):
                return jsonify({'success': False, 'message': f'Pole {field} jest wymagane'}), 400
        
        # Calculate estimated price (basic calculation)
        area = float(data.get('area', 0))
        service = data.get('service', '')
        
        price_per_m2 = {
            'Hydroizolacje': 50,
            'Osuszanie budynków': 80,
            'Izolacje zbiorników': 60,
            'Izolacje kurtynowe': 120,
            'Izolacje dachów': 70,
            'Posadzki żywicze': 90,
            'Iniekcja rys i pęknięć': 40
        }
        
        base_price = price_per_m2.get(service, 50)
        estimated_price = area * base_price
        
        return jsonify({
            'success': True,
            'message': 'Zapytanie o wycenę zostało wysłane pomyślnie.',
            'estimated_price': estimated_price,
            'formatted_price': f"{estimated_price:,.0f} PLN".replace(',', ' ')
        })
        
    except Exception as e:
        return jsonify({'success': False, 'message': 'Wystąpił błąd podczas przetwarzania zapytania'}), 500

# Error handlers
@app.errorhandler(404)
def not_found_error(error):
    return render_template('404.html'), 404

@app.errorhandler(500)
def internal_error(error):
    return render_template('500.html'), 500

# Context processors for template globals
@app.context_processor
def inject_globals():
    return {
        'company_name': 'IZO-MAT',
        'company_phone': '+48 606 900 346',
        'company_email': 'izomatrs@op.pl',
        'current_year': 2024,
        'services_menu': [
            {'name': 'Hydroizolacje', 'url': url_for('hydroizolacje')},
            {'name': 'Osuszanie budynków', 'url': url_for('osuszanie')},
            {'name': 'Izolacje zbiorników', 'url': url_for('izolacje_zbiornikow')},
            {'name': 'Izolacje kurtynowe', 'url': url_for('izolacje_kurtynowe')},
            {'name': 'Izolacje dachów', 'url': url_for('izolacje_dachow')},
            {'name': 'Posadzki żywicze', 'url': url_for('posadzki_zywicze')},
            {'name': 'Iniekcja rys i pęknięć', 'url': url_for('iniekcja_rys')}
        ]
    }

if __name__ == '__main__':
    # Create static/images directory if it doesn't exist
    images_dir = os.path.join(app.static_folder, 'images')
    os.makedirs(images_dir, exist_ok=True)
    
    # Run the application with SSL context for HTTPS
    # This creates a self-signed certificate for development
    try:
        app.run(debug=True, host='127.0.0.1', port=5000, ssl_context='adhoc')
    except Exception as e:
        print("HTTPS not available, falling back to HTTP")
        print("To enable HTTPS, install: pip install pyopenssl")
        app.run(debug=True, host='127.0.0.1', port=5000)