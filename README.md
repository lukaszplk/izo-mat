# IZO-MAT Flask Website - Improved Version

This is an improved version of the IZO-MAT website built with Flask, featuring modern design and responsive layout.

## Features

### ✨ Improvements over Original Website

1. **Modern Design**
   - Clean, professional layout
   - Responsive design for all devices
   - Modern typography and color scheme
   - Improved user experience

2. **Better Content Organization**
   - Clear navigation structure
   - Well-organized service pages
   - Professional portfolio section
   - Streamlined contact information

3. **Technical Improvements**
   - Fast loading times
   - SEO-optimized structure
   - Accessible design
   - Clean, semantic HTML

4. **Enhanced Functionality**
   - Interactive quote request form
   - Contact form with validation
   - Responsive image galleries
   - Smooth scrolling and animations

## Project Structure

```
izo-mat-flask/
├── app.py                 # Main Flask application
├── requirements.txt       # Python dependencies
├── run.bat               # Windows run script
├── static/
│   ├── css/
│   │   └── style.css     # Custom CSS styles
│   ├── js/
│   │   └── main.js       # JavaScript functionality
│   └── images/           # Website images
└── templates/
    ├── base.html         # Base template
    ├── index.html        # Homepage
    ├── service.html      # Service page template
    ├── wycena.html       # Quote request page
    └── ...               # Other templates
```

## Installation and Setup

1. **Prerequisites**
   - Python 3.7 or higher
   - pip (Python package installer)

2. **Install Dependencies**
   ```bash
   pip install -r requirements.txt
   ```

3. **Run the Application**
   
   **Option 1: HTTP (Basic)**
   ```bash
   python app.py
   ```
   Access at: `http://127.0.0.1:5000`
   
   **Option 2: HTTPS (Secure)**
   ```bash
   pip install pyopenssl
   python app.py
   ```
   Access at: `https://127.0.0.1:5000`
   
   **Option 3: Using batch files (Windows)**
   - `run.bat` - HTTP version
   - `run-secure.bat` - HTTPS version (installs pyopenssl automatically)

4. **Security Considerations**
   - **Development**: The app includes security headers and HTTPS support
   - **Browser Warnings**: Self-signed certificates will trigger warnings in browsers
   - **Production**: Never use Flask's development server in production

## Key Improvements Made

### 🎨 Design & User Experience
- **Modern UI**: Replaced outdated design with contemporary layout
- **Responsive Design**: Mobile-first approach ensuring compatibility across all devices
- **Professional Typography**: Improved readability and hierarchy
- **Color Scheme**: Professional blue and gold color palette
- **Navigation**: Intuitive menu structure with dropdown for services

### 📱 Mobile Optimization
- Responsive navigation with mobile menu
- Touch-friendly buttons and links
- Optimized images for different screen sizes
- Mobile-specific layout adjustments

### ⚡ Performance
- Optimized CSS and JavaScript
- Lazy loading for images
- Minified assets for faster loading
- Efficient Flask routing

### 🔍 SEO Improvements
- Semantic HTML structure
- Meta tags optimization
- Structured data for local business
- Clean URL structure
- Proper heading hierarchy

### 🚀 Functionality
- **Interactive Forms**: Quote request and contact forms with validation
- **Smooth Animations**: CSS transitions and scroll animations
- **Modern JavaScript**: ES6+ features for better performance
- **API Endpoints**: RESTful endpoints for form submissions

## Available Pages

1. **Homepage** (`/`) - Overview of services and company
2. **Services** - Individual pages for each service:
   - Hydroizolacje (`/hydroizolacje`)
   - Osuszanie budynków (`/osuszanie`)
   - Izolacje zbiorników (`/izolacje-zbiornikow`)
   - Izolacje kurtynowe (`/izolacje-kurtynowe`)
   - Izolacje dachów (`/izolacje-dachow`)
   - Posadzki żywicze (`/posadzki-zywicze`)
   - Iniekcja rys i pęknięć (`/iniekcja-rys`)
3. **Portfolio** (`/realizacje`) - Showcase of completed projects
4. **About** (`/o-firmie`) - Company information
5. **Contact** (`/kontakt`) - Contact information and map
6. **Quote** (`/wycena`) - Request quote form

## Configuration

### Development
- Debug mode is enabled by default
- Server runs on `127.0.0.1:5000`
- Auto-reload on code changes

### Production Deployment
For production deployment, you should:
1. Set `DEBUG = False` in `app.py`
2. Use a production WSGI server (e.g., Gunicorn)
3. Configure proper database for form submissions
4. Set up email functionality for contact forms
5. Use environment variables for sensitive configuration

## Customization

### Adding New Services
1. Add route in `app.py`
2. Create service data dictionary
3. Use the `service.html` template

### Modifying Styles
- Edit `static/css/style.css` for custom styles
- CSS variables are defined in `:root` for easy theming

### Adding New Pages
1. Create route in `app.py`
2. Create corresponding template in `templates/`
3. Update navigation in `base.html`

## Security and "Unsafe" Warnings

### Why Browsers Show "Not Secure" Warning

When you run the Flask development server locally, browsers may show security warnings for these reasons:

1. **HTTP vs HTTPS**: Development server uses HTTP by default
2. **Self-signed certificates**: No certificate authority validation
3. **Development environment**: Flask dev server isn't hardened for production
4. **Local IP address**: Browsers are cautious with localhost connections

### How to Make It "Secure"

**Option 1: Use HTTPS (Recommended)**
```bash
run-secure.bat  # This installs pyopenssl and runs with HTTPS
```

**Option 2: Accept HTTP for Development**
- The site is safe for local development
- Browser warnings are normal for development servers
- Data stays on your local machine

**Option 3: Production Deployment**
For a truly secure public website, deploy to a proper web server with:
- Valid SSL certificate from a Certificate Authority
- Production WSGI server (Gunicorn, uWSGI)
- Reverse proxy (Nginx, Apache)
- Proper security configuration

### Browser Security Override

If using HTTP for development:
1. Click "Advanced" in the browser warning
2. Click "Proceed to 127.0.0.1 (unsafe)"
3. The site will work normally for testing

**Note**: These warnings are normal for development and don't affect the functionality of your local test site.

## Contact

For questions about this implementation:
- Original website: http://izo-mat.pl
- Phone: +48 606 900 346
- Email: izomatrs@op.pl

---

**Note**: This is an improved version created for demonstration purposes. The original IZO-MAT website and company information remain unchanged.