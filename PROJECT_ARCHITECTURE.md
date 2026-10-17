# Paanchajanya Realty — Technical Architecture & System Overview

**Document Version:** 1.0  
**Generated Date:** October 2026  
**Repository:** [annemchaitanyakumar/realestate](https://github.com/annemchaitanyakumar/realestate.git)  
**Production Domain:** `https://paanchajanyarealty.com`  

---

## 1. Executive Summary

Paanchajanya Realty's web platform operates as a dual-layer architecture:
1. **Public Website (`/`):** A high-performance, lightweight PHP and modern Vanilla CSS/JS client portal delivering rapid page loads and high SEO rankings.
2. **Administration Portal (`/admin`):** A full-stack Laravel 12 application powered by Livewire 3 and Tailwind CSS v4, handling leads, site sliders, venture media, and administrative workflows.

---

## 2. Technology Stack & Frameworks

### A. Backend & Admin Portal (`/admin`)

| Layer | Technology | Version | Purpose |
| :--- | :--- | :--- | :--- |
| **Backend Framework** | **Laravel** | `^12.0` | Core PHP framework, MVC structure, routing, Eloquent ORM, authentication |
| **Language Runtime** | **PHP** | `^8.2` | Server runtime environment |
| **Dynamic UI Engine** | **Livewire** | `^3.6` | Reactive full-stack component framework (eliminates need for React/Vue APIs) |
| **CSS Framework** | **Tailwind CSS** | `^4.0.0` | Utility-first responsive styling for the admin portal |
| **Asset Bundler** | **Vite** | `^7.0.7` | High-speed frontend build tool & HMR (`@tailwindcss/vite`, `laravel-vite-plugin`) |
| **HTTP Client** | **Axios** | `^1.11.0` | Asynchronous AJAX requests |
| **Interactive CLI** | **Laravel Tinker** | `^2.10.1` | REPL console for direct database and model interaction |
| **Unit Testing** | **PHPUnit** | `^11.5.3` | Backend automated test suite |

---

### B. Public-Facing Website (`/`)

| Component | Technology | Implementation Details |
| :--- | :--- | :--- |
| **Server Engine** | **Native PHP (Vanilla)** | Runs on PHP 8.2 with PDO (PHP Data Objects) for low-latency DB queries |
| **Frontend Styling** | **Vanilla CSS3 (Design Tokens)** | `assests/css/laperla-luxury.css` — Custom design system, CSS Grid, Flexbox, glassmorphism |
| **Frontend Scripts** | **Modern ES6+ JavaScript** | `assests/js/laperla-luxury.js` — Lightweight hero slider, modals, mobile menu, scroll effects |
| **Typography** | **Google Fonts** | *Cinzel* (Primary display serif), *Playfair Display* (Editorial headings), *Plus Jakarta Sans* (Body) |
| **Legacy Foundation** | **WordPress / Elementor** | Site originally started on WordPress; residual backups kept in `wp-content/` and `index_elementor_backup.php` |

---

## 3. Communication Architecture (Frontend to Backend)

Unlike a decoupled Single Page Application (SPA), this project uses a **Server-Side Rendered (SSR) Monolithic Architecture**:

```
[ Visitor Browser ]
       │
       ▼ (1. HTTP GET /)
[ Nginx Web Server (Port 80/443) ]
       │
       ▼ (2. Passes to PHP-FPM)
[ index.php ] ──includes──> [ includes/db.php ] ──PDO──> [ MySQL Database (127.0.0.1) ]
       │                                                         ▲
       │ (3. Queries 'sliders' table)                            │
       ▼ (4. Compiles dynamic HTML)                              │
[ Visitor Browser ]                                              │
       │                                                         │
       ▼ (5. Submits Contact Form - POST)                        │
[ index.php ] ───INSERT INTO contact_submissions────────────────┘
                                                                 ▲
                                                                 │ (Reads leads)
[ admin/ (Laravel 12 Dashboard) ] ───────────────────────────────┘
```

### Key Connection Points:
1. **Frontend DB Access:** Configured in `includes/db.php` using PDO:
   * Host: `127.0.0.1`
   * Database: `paanchdevdb`
   * User: `paanchdev`
2. **Form Lead Capture:** `index.php` intercepts `POST` requests and directly executes parameterized prepared statements into `contact_submissions`.
3. **Admin Dashboard Access:** The Laravel admin reads from the same database using credentials defined in `admin/.env`.

---

## 4. Hosting, Server & Infrastructure

| Attribute | Details |
| :--- | :--- |
| **Hosting Provider / Brand** | **GoDaddy** (`GO-DADDY-COM-LLC`) |
| **Server Machine Type** | **Ubuntu Linux VPS** |
| **Public Server IP** | **`97.74.80.132`** |
| **Web Server Daemon** | **Nginx 1.24.0 (Ubuntu)** (Listening on Ports 80 and 443) |
| **Nginx VHost Config** | `/etc/nginx/sites-available/paanchajanyarealty.com` |
| **Document Root Path** | `/var/www/paanchajanyarealty.com` |
| **SSL / TLS Certificate** | Let's Encrypt Certbot (`/etc/letsencrypt/live/paanchajanyarealty.com/`) |
| **Domain Registrar** | **GoDaddy.com, LLC** (Registered: Oct 17, 2025) |
| **DNS & CDN Provider** | **Cloudflare** (`meera.ns.cloudflare.com`, `rocco.ns.cloudflare.com`) |

---

## 5. CI/CD Deployment Pipeline

* **Repository:** Hosted on GitHub at `https://github.com/annemchaitanyakumar/realestate.git`
* **Workflow File:** `.github/workflows/deploy.yml`
* **Trigger:** Pushes to the `main` branch (`git push origin main`)
* **Deployment Mechanism:** GitHub Actions connects directly via SSH using `appleboy/ssh-action@v1.2.5` to pull the latest commits into `/var/www/paanchajanyarealty.com`.

---

## 6. Directory Map

```text
paanchajanyarealty.com/
├── .github/workflows/      # Automated deployment workflow (deploy.yml)
├── admin/                  # Laravel 12 Backend & Livewire Admin Dashboard
│   ├── app/                # Controllers, Models, Livewire Components
│   ├── config/             # Laravel configuration files
│   ├── database/           # Migrations and Seeders
│   ├── resources/          # Views (Blade), CSS, and JS
│   ├── routes/             # Web and API routing
│   ├── .env                # Database & Mail configuration
│   ├── composer.json       # PHP packages & dependencies
│   └── package.json        # Frontend tools (Tailwind v4, Vite 7)
├── assests/                # Public assets directory
│   ├── css/                # Luxury stylesheet (laperla-luxury.css)
│   ├── js/                 # Luxury JS controller (laperla-luxury.js)
│   └── image/              # Project and venture photographs
├── includes/               # PHP shared utilities
│   ├── db.php              # Direct MySQL PDO connection
│   ├── header.php          # Shared header markup
│   └── footer.php          # Shared footer markup
├── index.php               # Production homepage (PHP + PDO + Luxury HTML)
├── index.html              # Standalone static preview / Vercel demo
├── aboutus.php             # About Us page
├── contactus.php           # Contact Us page
├── project.php             # Individual venture detail page
└── PROJECT_ARCHITECTURE.md # This system architecture reference
```
