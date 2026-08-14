# Project Summary: Infinite Fintech Web Application

> **Document Purpose**: This comprehensive summary provides complete architectural, functional, design system, and technical specifications for any AI agent or CLI developer taking over or working on this codebase.

---

## 1. Executive Summary & Business Identity

- **Company Name**: บริษัท อินฟินิท ฟินเทค จำกัด (INFINITE FINTECH CO., LTD.)
- **Business Category**: ผู้ให้บริการสินเชื่อรายย่อยระดับจังหวัด (PICO Finance) ภายใต้การกำกับดูแลของกระทรวงการคลัง
- **Official License Verification URL**: `https://www.1359.go.th/picodoc/pico_public/`
- **Service Area Boundary**: **จังหวัดนนทบุรีเท่านั้น (Nonthaburi Province Only)**
- **Mobile Application Name**: **อุ่นใจแคช (Ounjai Cash)**
- **Official App Download Link**: `https://play.google.com/store/apps/details?id=com.ounjaicash.co.th&pcampaignid=web_share`
- **Master Content Document**: [`Content.md`](file:///C:/xampp/htdocs/infinite/Content.md) *(Strict Directive: Never invent or add text outside this file)*

---

## 2. Core Loan Parameters & Financial Rules

| Parameter | Specification | Note |
| :--- | :--- | :--- |
| **Loan Product Type** | PICO Finance (สินเชื่อรายย่อยระดับจังหวัด) | Regulated by Ministry of Finance |
| **Credit Limit Range** | ฿5,000 - ฿50,000 THB | Flexible selection via interactive slider |
| **Interest Rate (APR)** | Maximum 35.80% per annum | Effective Rate (แบบลดต้นลดดอก) |
| **Repayment Term** | 91 - 180 Days | Flexible selection via interactive slider |
| **Required Documents** | 1. บัตรประชาชนตัวจริง<br>2. หน้าสมุดบัญชีธนาคารเพื่อรับเงิน | Simple 2-item document checklist |
| **Guarantor Requirement** | **No Collateral / No Guarantor Needed** | ไม่ต้องใช้หลักทรัพย์ค้ำประกัน |

---

## 3. Tech Stack & Software Architecture

- **Backend Framework**: PHP CodeIgniter 3 (MVC / HMVC Structure)
- **Web Server**: Apache (XAMPP Environment / PHP 7.4+)
- **Root Directory**: `C:\xampp\htdocs\infinite`
- **Routing Helper**: Custom `site_root_url()` with clean URL routing
- **Styling**: Vanilla CSS3 Custom Properties in [`assets/css/style.css`](file:///C:/xampp/htdocs/infinite/assets/css/style.css) with Bootstrap 5.3 utilities
- **Multi-Language Architecture**: 
  - Dual language support (`thai` & `english`)
  - Language dictionaries: [`application/language/thai/site_lang.php`](file:///C:/xampp/htdocs/infinite/application/language/thai/site_lang.php) & [`application/language/english/site_lang.php`](file:///C:/xampp/htdocs/infinite/application/language/english/site_lang.php)
  - All text strings rendered via `$this->lang->line('key_name')`
  - Interactive Language Switcher Slider in Navbar (TH / EN)

---

## 4. Design System & Theme Specifications

- **Theme Identity**: **Blue - Purple - White Light Theme (`ฟ้า-ม่วง-ขาว` โทนสว่าง)**
- **Typography**: `LINE Seed Sans TH` (`LINESeedSansTH`)
- **Color Tokens**:
  ```css
  --bg-dark: #F8FAFC;        /* Pearl White Page Canvas */
  --bg-card: #FFFFFF;        /* Pure White Cards / Frosted Glass rgba(255,255,255,0.88) */
  --primary-blue: #0284C7;   /* Sky Blue Brand Accent */
  --accent-purple: #7C3AED;  /* Violet Purple Brand Accent */
  --text-white: #0F172A;     /* 100% High-Contrast Dark Slate Headings */
  --text-slate: #334155;     /* Dark Slate Body Text */
  --text-muted: #64748B;     /* Muted Secondary Text */
  --border-glass: rgba(124, 58, 237, 0.18);
  ```

### Key UI Components & Special Effects
1. **Falling Banknotes Background Effect** (`assets/js/falling-banknotes.js`):
   - High-performance HTML5 Canvas 60FPS particle rain across all pages (`pointer-events: none; opacity: 0.35; z-index: 1;`).
   - Renders 3D fluttering THB banknotes with official colors:
     - ฿20: Green (`#16A34A`)
     - ฿50: Blue (`#0284C7`)
     - ฿100: Red (`#DC2626`)
     - ฿500: Purple (`#7C3AED`)
     - ฿1000: Slate Gray (`#475569`)
2. **Animated Soft Aura Blobs**: `.hero-aura-blob-1` & `.hero-aura-blob-2` providing subtle gradient depth behind Hero sections.
3. **Floating Trust Metrics Badges**: 3D floating badges (`.floating-stat-badge`) in Hero section highlighting PICO Finance regulation, 30-min fast approval, and 50,000 THB max credit limit.
4. **Frosted Glass 3D Cards**: `.card-3d` featuring `background: rgba(255, 255, 255, 0.88); backdrop-filter: blur(12px);` for high contrast over falling banknotes.
5. **Policy Tab Pill Bar**: `.nav-pills-custom` capsule pill tabs with Blue-Purple gradient active states.

---

## 5. Responsive Design & Multi-Monitor Optimization

- **Notebook & Laptop Screens (13"-15", 992px - 1440px / 125%-150% scaling)**:
  - Fluid container padding: `padding-left: clamp(16px, 3.5vw, 40px) !important;`
  - Scaled headers (`.display-4` -> `2.15rem`)
  - Nav links enforce `flex-wrap: nowrap !important; white-space: nowrap !important;`
  - Nav link hover border jitter fix: default `border: 1px solid transparent;` mutating only `border-color` on `:hover`.
- **Mobile Screens (< 991px)**:
  - Vertical 1-column full-width drawer menu (`.futuristic-nav .navbar-collapse`).
  - License audit check box wrapping with `flex-column flex-md-row` and `word-break: break-word`.
  - Scaled mobile font sizes (`.display-4` -> `1.85rem`).

---

## 6. Directory Map & File Directory

```
C:\xampp\htdocs\infinite\
├── Content.md                          # Master source of truth for text & financial terms
├── DESIGN.md                           # Core Design System documentation
├── project_summary.md                  # Detailed architectural summary (This File)
├── application/
│   ├── controllers/                    # Site route handlers
│   ├── language/
│   │   ├── thai/site_lang.php          # Thai language key dictionary
│   │   └── english/site_lang.php       # English language key dictionary
│   └── views/
│       ├── header.php                  # Glass navbar, language switcher, mobile drawer
│       ├── footer.php                  # Dark slate footer, scripts, canvas inclusion
│       ├── home/index.php              # Hero, PICO License Card, 3 Stat Badges, Highlights, Calculator
│       ├── about/index.php             # Company intro, vision, mission, license check box
│       ├── services/index.php          # Specs, Qualifications, Documents, Sample Calc Viewer
│       ├── apply/index.php             # App features, 5 Prep items, 7-Step Workflow Timeline, App CTA
│       ├── policy/index.php            # 4 Tab Bar (.nav-pills-custom), Gov, Privacy, Terms (15 points), Contract
│       └── contact/index.php           # Office address, Google Maps CTA, Email & LINE support, Warning Badge
└── assets/
    ├── css/style.css                   # Single CSS source of truth (Tokens, Glass, Breakpoints)
    ├── js/falling-banknotes.js         # HTML5 Canvas 60FPS THB banknote rain
    └── images/                         # Logos & repayment calculation sample images
```

---

## 7. Verification & Maintenance Commands

- **Check PHP Syntax across all views**:
  ```bash
  C:\xampp\php\php.exe -l application/views/header.php application/views/footer.php application/views/home/index.php application/views/about/index.php application/views/services/index.php application/views/apply/index.php application/views/policy/index.php application/views/contact/index.php
  ```
- **Check Language File Syntax**:
  ```bash
  C:\xampp\php\php.exe -l application/language/thai/site_lang.php application/language/english/site_lang.php
  ```

---
*Summary generated for agent-to-agent codebase context transfer.*
