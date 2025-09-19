# How to Read Screaming Frog SEO Spider Reports

## 🐸 **What is Screaming Frog SEO Spider?**

**Screaming Frog** is a website crawler that analyzes your site's technical SEO health by examining every page, link, and element - just like Google's crawlers do.

### **What It Does:**
- Crawls your entire website in minutes
- Identifies technical SEO problems
- Analyzes page elements (titles, meta descriptions, headers)
- Finds broken links and errors
- Checks redirects and duplicate content
- Evaluates page speed and mobile issues

### **Free vs Paid Version:**
```
Free Version:
- Crawl up to 500 URLs
- Basic SEO analysis
- Perfect for small-medium websites

Paid Version (£149/year):
- Unlimited URL crawling
- Advanced features
- Custom extraction
- JavaScript rendering
```

---

## 📊 **Main Screaming Frog Interface Overview**

### **🗂️ Tab Structure:**
When you open Screaming Frog after a crawl, you'll see these main tabs:

```
1. Internal        - All pages found on your website
2. External        - Links pointing to other websites  
3. Protocol        - HTTP vs HTTPS issues
4. Response Codes  - Status codes (200, 404, 301, etc.)
5. URL Structure   - URL analysis and issues
6. Page Titles     - Title tag analysis
7. Meta Description - Meta description analysis
8. Meta Keywords   - Meta keywords (largely obsolete)
9. H1             - H1 header analysis
10. H2            - H2 header analysis
11. Images        - Image optimization analysis
12. Directives    - Robots.txt and meta robots analysis
```

---

## 🔍 **How to Read Each Section**

### **📋 1. Internal Tab (Most Important)**

This shows all pages found on your website with key metrics:

#### **Column Explanations:**
```
Address: Full URL of the page
Content: File type (HTML, CSS, JS, images)
Status Code: HTTP response (200=good, 404=missing, 301=redirect)
Status: Text version of status code
Title 1: Page title tag
Title 1 Length: Character count of title
Meta Description 1: Meta description content
Meta Description 1 Length: Character count
H1-1: First H1 header on page
H1-2: Second H1 header (should usually be only one)
Response Time: How fast page loads
Last Modified: When page was last updated
Redirect URL: Where redirects point to
```

#### **What to Look For:**
```
✅ Good Signs:
- Status Code: 200 (OK)
- Title Length: 30-60 characters
- Meta Description Length: 120-160 characters
- Response Time: Under 3 seconds
- One H1 per page

🚨 Problems to Fix:
- Status Code: 404 (broken pages)
- Missing titles or meta descriptions
- Duplicate titles across pages
- Multiple H1 tags on same page
- Slow response times (5+ seconds)
```

### **📋 2. Response Codes Tab**

Shows HTTP status codes for all URLs:

#### **Common Status Codes:**
```
200 - OK: Page loads successfully ✅
301 - Moved Permanently: Proper redirect ✅
302 - Moved Temporarily: Temporary redirect ⚠️
404 - Not Found: Broken page/link 🚨
500 - Server Error: Website problem 🚨
403 - Forbidden: Access denied 🚨
```

#### **What to Check:**
```
Filter by Status Code:
1. Click "Response Codes" tab
2. Look at "Status Code" filter dropdown
3. Select specific codes to investigate

Priority Fixes:
- 404 errors: Fix broken links or redirect to relevant pages
- 500 errors: Server issues need technical attention
- Too many 302s: Should usually be 301 redirects
```

### **📋 3. Page Titles Tab**

Analyzes all title tags on your website:

#### **Filter Options:**
```
Missing: Pages without title tags 🚨
Duplicate: Multiple pages with same title 🚨
Multiple: Pages with more than one title tag 🚨
Over X Characters: Titles too long (>60 chars) ⚠️
Under X Characters: Titles too short (<30 chars) ⚠️
Same as H1: Title identical to H1 header ⚠️
```

#### **Title Optimization Checklist:**
```
Good Title Examples for IZO-MAT:
✅ "Hydroizolacja Fundamentów Tarnów | IZO-MAT" (45 chars)
✅ "Osuszanie Budynków Tarnów - Profesjonalna Firma" (48 chars)
✅ "Izolacja Przeciwwilgociowa | IZO-MAT Tarnów" (43 chars)

Bad Title Examples:
🚨 "Strona główna" (too generic, no keywords)
🚨 "Hydroizolacja fundamentów, osuszanie budynków, izolacja przeciwwilgociowa, naprawa zawilgoceń, usługi budowlane w Tarnowie i okolicach" (too long, 134 chars)
🚨 [No title] (missing completely)
```

### **📋 4. Meta Description Tab**

Analyzes meta descriptions:

#### **Filter Options:**
```
Missing: Pages without meta descriptions 🚨
Duplicate: Same description on multiple pages 🚨
Multiple: More than one meta description per page 🚨
Over X Characters: Too long (>160 chars) ⚠️
Under X Characters: Too short (<120 chars) ⚠️
```

#### **Meta Description Best Practices:**
```
Good Examples:
✅ "Profesjonalna hydroizolacja fundamentów w Tarnowie. 15 lat doświadczenia, gwarancja 10 lat. Bezpłatna wycena. Zadzwoń: 123-456-789" (145 chars)

Bad Examples:
🚨 "Strona firmy IZO-MAT" (too short, no value)
🚨 [Missing] (Google creates its own, often poor quality)
```

### **📋 5. H1 Tab**

Analyzes H1 header tags:

#### **Common Issues:**
```
Missing H1: Pages without main header 🚨
Duplicate H1: Same H1 on multiple pages 🚨
Multiple H1: More than one H1 per page 🚨
```

#### **H1 Optimization:**
```
Good H1 Examples:
✅ "Hydroizolacja Fundamentów w Tarnowie"
✅ "Profesjonalne Osuszanie Budynków"
✅ "Izolacja Przeciwwilgociowa - Usługi"

H1 Rules:
- One H1 per page
- Include main keyword
- Be descriptive and clear
- Different from page title
```

### **📋 6. Images Tab**

Analyzes all images on your website:

#### **Image Issues to Check:**
```
Missing Alt Text: Images without alt attributes 🚨
Over X KB: Large images slowing site speed 🚨
Alt Text Over X Characters: Alt text too long ⚠️
```

#### **Image Optimization Checklist:**
```
Alt Text Best Practices:
✅ "Hydroizolacja fundamentów - prace wykonane przez IZO-MAT"
✅ "Osuszanie zawilgoconej piwnicy - przed i po"
✅ "Zespół specjalistów IZO-MAT przy pracy"

File Size Optimization:
✅ Under 100KB for web images
✅ Use WebP format when possible
✅ Compress images without quality loss
```

---

## 🔧 **Step-by-Step Report Analysis**

### **🎯 Phase 1: Critical Issues (Fix First)**

#### **1. Find Broken Pages (404 errors):**
```
Steps:
1. Go to "Response Codes" tab
2. Filter by "Client Error (4xx)"
3. Look for 404 status codes
4. Export list of broken URLs

Action:
- Fix broken internal links
- Redirect important 404s to relevant pages
- Remove links to non-existent pages
```

#### **2. Find Missing Title Tags:**
```
Steps:
1. Go to "Page Titles" tab
2. Filter by "Missing"
3. Export list of pages without titles

Action:
- Add unique, keyword-optimized titles to each page
- Follow 30-60 character length rule
- Include primary keyword and brand name
```

#### **3. Find Missing Meta Descriptions:**
```
Steps:
1. Go to "Meta Description" tab  
2. Filter by "Missing"
3. Export list of pages without descriptions

Action:
- Write compelling 120-160 character descriptions
- Include keywords and call-to-action
- Make each description unique
```

### **🎯 Phase 2: Optimization Issues (Fix Second)**

#### **4. Find Duplicate Content:**
```
Steps:
1. Go to "Page Titles" tab
2. Filter by "Duplicate"
3. Identify pages with identical titles

Action:
- Rewrite duplicate titles to be unique
- Differentiate similar pages clearly
- Consider consolidating very similar pages
```

#### **5. Check Page Speed Issues:**
```
Steps:
1. Go to "Internal" tab
2. Sort by "Response Time" (highest first)
3. Identify slowest loading pages

Action:
- Optimize slow pages (compress images, minify code)
- Consider caching solutions
- Review hosting performance
```

#### **6. Analyze Internal Linking:**
```
Steps:
1. Go to "Internal" tab
2. Look at "Inlinks" column
3. Find pages with very few internal links

Action:
- Add internal links to important pages
- Create topic clusters and hub pages
- Ensure all pages are accessible within 3 clicks
```

---

## 📊 **Sample Report Interpretation**

### **Example Crawl Results for IZO-MAT:**

```
Total URLs Found: 45
Response Codes:
- 200 (OK): 40 pages ✅
- 404 (Not Found): 3 pages 🚨
- 301 (Redirect): 2 pages ✅

Page Titles:
- Missing: 5 pages 🚨
- Duplicate: 8 pages 🚨
- Optimal Length: 25 pages ✅

Meta Descriptions:
- Missing: 12 pages 🚨
- Too Short: 6 pages ⚠️
- Good Length: 15 pages ✅

H1 Headers:
- Missing: 3 pages 🚨
- Multiple H1s: 4 pages 🚨
- Good: 38 pages ✅
```

### **Priority Action Plan:**
```
Week 1 (Critical):
□ Fix 3 broken 404 pages
□ Add titles to 5 missing pages
□ Write meta descriptions for 12 pages

Week 2 (Important):
□ Fix 8 duplicate title issues
□ Resolve multiple H1 problems
□ Optimize 6 short meta descriptions

Week 3 (Optimization):
□ Improve slow-loading pages
□ Add internal links to isolated pages
□ Optimize image alt text
```

---

## 💡 **Pro Tips for Using Screaming Frog**

### **🔧 Configuration Settings:**

#### **Before Crawling:**
```
Configuration → Spider:
☑ Check "Follow Internal nofollow"
☑ Check "Crawl Outside of Start Folder"
☐ Uncheck "Check External Links" (unless needed)

Configuration → Extraction:
☑ Check relevant extractions you need
- Page Titles
- Meta Descriptions  
- H1-H6 headers
- Meta Keywords
- Images
```

#### **For JavaScript Sites:**
```
Configuration → Rendering:
☑ Enable "JavaScript Rendering"
Select "Chromium WRS" mode
Set wait time to 5 seconds
```

### **📊 Export and Reporting:**

#### **Useful Exports:**
```
Bulk Export → Response Codes → All Response Codes
- Complete overview spreadsheet

Bulk Export → Page Titles → Page Titles  
- Title optimization worksheet

Bulk Export → Internal → All Internal Links
- Complete site structure analysis
```

#### **Custom Filters:**
```
Create custom filters for:
- Pages over 5 seconds load time
- Images over 100KB
- Pages with no internal links
- Titles under 30 or over 60 characters
```

---

## 🎯 **What to Do After Analysis**

### **📋 Create Action Plan:**
```
1. Document Issues:
   - Create spreadsheet of all problems found
   - Prioritize by impact (critical → important → optimization)
   - Assign responsible team members

2. Track Progress:
   - Re-crawl weekly to monitor improvements
   - Compare before/after metrics
   - Measure impact on search rankings

3. Regular Monitoring:
   - Monthly full site crawls
   - Weekly crawls of new content
   - Monitor for new issues after site changes
```

### **📈 Expected Results Timeline:**
```
Week 1-2: Fix critical issues
- Immediate improvement in crawl errors
- Better indexing by search engines

Month 1-2: Complete optimization
- Improved search result appearance
- Better click-through rates

Month 3-6: See ranking improvements
- Higher positions for target keywords
- Increased organic traffic
```

Screaming Frog is incredibly powerful for finding technical SEO issues that might be holding your website back. The key is to work systematically through the most critical issues first, then move to optimization improvements.

Would you like me to help you set up Screaming Frog for the IZO-MAT website, or explain any specific part of the analysis in more detail?