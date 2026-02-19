# cPanel Deployment Visual Guide
## Laravel Application Deployment Flow

---

## 🏗️ ARCHITECTURE DIAGRAM

```
┌─────────────────────────────────────────────────────────────┐
│                    CPANEL SERVER                             │
│  /home/username/                                            │
│  ├─── laravel/                    ← PRIVATE (Secure)       │
│  │    ├── app/                                              │
│  │    ├── bootstrap/                                        │
│  │    │   └── cache/              ← MUST BE WRITABLE (775) │
│  │    ├── config/                                           │
│  │    ├── database/                                         │
│  │    │   └── database.sqlite     ← MUST BE WRITABLE (664) │
│  │    ├── resources/                                        │
│  │    ├── routes/                                           │
│  │    ├── storage/                ← MUST BE WRITABLE (775) │
│  │    │   ├── app/                                          │
│  │    │   ├── framework/                                    │
│  │    │   └── logs/                                         │
│  │    ├── vendor/                                           │
│  │    ├── .env                    ← PRODUCTION CONFIG      │
│  │    ├── artisan                                           │
│  │    └── composer.json                                     │
│  │                                                           │
│  └─── public_html/                ← PUBLIC (Web Accessible)│
│       ├── .htaccess              ← MERGED APACHE RULES     │
│       ├── index.php              ← POINTS TO ../laravel/   │
│       ├── css/                                              │
│       ├── js/                                               │
│       ├── images/                                           │
│       ├── fonts/                                            │
│       └── uploads/                                          │
└─────────────────────────────────────────────────────────────┘

                        ▼
                        
        https://www.ict-a.com/
                │
                ▼
        ┌───────────────┐
        │   Browser     │
        │   Request     │
        └───────┬───────┘
                │
                ▼
    ┌───────────────────────┐
    │  Apache Web Server    │
    │  (reads .htaccess)    │
    └───────────┬───────────┘
                │
                ▼
    ┌───────────────────────┐
    │  public_html/         │
    │  index.php            │
    └───────────┬───────────┘
                │
                ▼
    ┌───────────────────────┐
    │  ../laravel/          │
    │  vendor/autoload.php  │
    └───────────┬───────────┘
                │
                ▼
    ┌───────────────────────┐
    │  Laravel Framework    │
    │  Routes, Controllers  │
    └───────────┬───────────┘
                │
                ▼
    ┌───────────────────────┐
    │  Response Generated   │
    │  (HTML, JSON, etc.)   │
    └───────────┬───────────┘
                │
                ▼
        ┌───────────────┐
        │   Browser     │
        │   Display     │
        └───────────────┘
```

---

## 📋 DEPLOYMENT WORKFLOW

```
┌─────────────────────────────────────────────────────────────┐
│                   LOCAL MACHINE                              │
└─────────────────────────────────────────────────────────────┘
                        │
                        │ 1. Prepare Files
                        ▼
            ┌──────────────────────┐
            │  composer install    │
            │  --optimize-autoloader│
            │  --no-dev            │
            └──────────┬───────────┘
                        │
                        │ 2. Clear Caches
                        ▼
            ┌──────────────────────┐
            │  php artisan         │
            │  config:clear        │
            │  cache:clear         │
            │  view:clear          │
            └──────────┬───────────┘
                        │
                        │ 3. Prepare .env
                        ▼
            ┌──────────────────────┐
            │  Create production   │
            │  .env file           │
            │  APP_ENV=production  │
            │  APP_DEBUG=false     │
            └──────────┬───────────┘
                        │
                        │ 4. Create Archive
                        ▼
            ┌──────────────────────┐
            │  ZIP all files       │
            │  (except public/)    │
            └──────────┬───────────┘
                        │
                        ▼
┌─────────────────────────────────────────────────────────────┐
│                   FILE TRANSFER                              │
│  ┌────────────┐         ┌────────────┐                      │
│  │ FTP/SFTP   │   OR    │  cPanel    │                      │
│  │ FileZilla  │         │  Upload    │                      │
│  └────────────┘         └────────────┘                      │
└─────────────────────────────────────────────────────────────┘
                        │
                        ▼
┌─────────────────────────────────────────────────────────────┐
│                   CPANEL SERVER                              │
└─────────────────────────────────────────────────────────────┘
                        │
                        │ 5. Create Directories
                        ▼
            ┌──────────────────────┐
            │  mkdir laravel       │
            │  in /home/username/  │
            └──────────┬───────────┘
                        │
                        │ 6. Upload Files
                        ▼
            ┌──────────────────────┐
            │  Upload Laravel      │
            │  files to laravel/   │
            │                      │
            │  Upload public/      │
            │  to public_html/     │
            └──────────┬───────────┘
                        │
                        │ 7. Extract Files
                        ▼
            ┌──────────────────────┐
            │  Extract ZIP in      │
            │  laravel/ directory  │
            └──────────┬───────────┘
                        │
                        │ 8. Set Permissions
                        ▼
            ┌──────────────────────┐
            │  chmod 775 storage   │
            │  chmod 775 bootstrap │
            │         /cache        │
            └──────────┬───────────┘
                        │
                        │ 9. Install Dependencies
                        ▼
            ┌──────────────────────┐
            │  composer install    │
            │  --optimize-autoloader│
            │  --no-dev            │
            └──────────┬───────────┘
                        │
                        │ 10. Run Artisan
                        ▼
            ┌──────────────────────┐
            │  php artisan         │
            │  optimize:clear      │
            │                      │
            │  php artisan         │
            │  optimize            │
            └──────────┬───────────┘
                        │
                        │ 11. Database Setup
                        ▼
       ┌────────────────┴────────────────┐
       │                                  │
       ▼                                  ▼
┌──────────────┐              ┌──────────────────┐
│   SQLite     │              │     MySQL        │
│              │              │                  │
│ touch        │              │ Create DB in     │
│ database.    │              │ cPanel           │
│ sqlite       │              │                  │
│              │              │ php artisan      │
│ chmod 664    │              │ migrate --force  │
└──────┬───────┘              └────────┬─────────┘
       │                               │
       └───────────────┬───────────────┘
                       │
                       │ 12. Final Checks
                       ▼
            ┌──────────────────────┐
            │  Test website        │
            │  Check logs          │
            │  Verify routes       │
            │  Test forms          │
            └──────────┬───────────┘
                       │
                       ▼
            ┌──────────────────────┐
            │   DEPLOYMENT         │
            │   COMPLETE ✅        │
            └──────────────────────┘
```

---

## 🔄 REQUEST LIFECYCLE

```
User visits: https://www.ict-a.com/about

    1. DNS Resolution
    ────────────────────────▶ ict-a.com → Server IP
    
    2. Apache Receives Request
    ────────────────────────▶ Looks for public_html/
    
    3. .htaccess Processing
    ────────────────────────▶ Reads rewrite rules
                              Checks if file exists
                              If not, route to index.php
    
    4. index.php Execution
    ────────────────────────▶ Loads: ../laravel/vendor/autoload.php
                              Loads: ../laravel/bootstrap/app.php
    
    5. Laravel Bootstrap
    ────────────────────────▶ Reads: ../laravel/.env
                              Loads configurations
                              Starts application
    
    6. Route Matching
    ────────────────────────▶ Matches: /about
                              Routes to: PageController@about
    
    7. Controller Execution
    ────────────────────────▶ Runs controller logic
                              Fetches data (if needed)
    
    8. View Rendering
    ────────────────────────▶ Loads: resources/views/pages/about.blade.php
                              Compiles Blade template
                              Stores in: bootstrap/cache/
    
    9. Response Assembly
    ────────────────────────▶ Adds headers
                              Includes assets (CSS/JS from public_html/)
    
    10. Send to Browser
    ────────────────────────▶ HTML rendered
                              Page displayed ✅
```

---

## 🗂️ FILE STRUCTURE COMPARISON

### ❌ WRONG (All files in public_html - INSECURE)

```
public_html/
├── app/                    ← ⚠️ EXPOSED TO WEB
├── bootstrap/              ← ⚠️ EXPOSED TO WEB
├── config/                 ← ⚠️ EXPOSED TO WEB
├── .env                    ← 🚨 CRITICAL SECURITY RISK!
├── vendor/                 ← ⚠️ EXPOSED TO WEB
├── css/
├── js/
└── index.php
```

### ✅ CORRECT (Laravel outside public_html - SECURE)

```
/home/username/
├── laravel/                ← ✅ NOT ACCESSIBLE VIA WEB
│   ├── app/                ← ✅ SECURE
│   ├── bootstrap/          ← ✅ SECURE
│   ├── config/             ← ✅ SECURE
│   ├── .env                ← ✅ SECURE
│   ├── vendor/             ← ✅ SECURE
│   └── ...
│
└── public_html/            ← ✅ ONLY PUBLIC FILES
    ├── .htaccess
    ├── index.php           ← Points to ../laravel/
    ├── css/
    ├── js/
    └── images/
```

---

## 📊 DEPLOYMENT DECISION TREE

```
Do you have SSH/Terminal access?
│
├─── YES ──────────────────────────────────────┐
│                                               │
│   Can you run bash scripts?                  │
│   │                                           │
│   ├─── YES ─▶ Use deploy-cpanel.sh          │
│   │           (Fastest, Automated)           │
│   │                                           │
│   └─── NO ──▶ Run commands manually          │
│               from DEPLOYMENT_CHECKLIST      │
│                                               │
└─── NO ───────────────────────────────────────┤
                                                │
    Use cPanel File Manager                     │
    │                                           │
    ├─── Upload ZIP files                      │
    ├─── Extract using File Manager            │
    ├─── Use File Manager to set permissions   │
    └─── Use cPanel Terminal for artisan       │
         commands                               │
```

---

## 🔐 SECURITY LAYERS

```
┌─────────────────────────────────────────────────────────────┐
│                   SECURITY ARCHITECTURE                      │
└─────────────────────────────────────────────────────────────┘

Level 1: Apache/Web Server
├─── .htaccess rules
│    ├─── Block .env access
│    ├─── Block .git access
│    ├─── Block composer.json access
│    └─── URL rewriting

Level 2: File System
├─── Directory permissions
│    ├─── 755 for application directories
│    ├─── 775 for writable directories (storage, cache)
│    ├─── 644 for files
│    └─── 664 for writable files (SQLite DB)

Level 3: Laravel Application
├─── .env configuration
│    ├─── APP_ENV=production (disables debug routes)
│    ├─── APP_DEBUG=false (hides error details)
│    └─── APP_KEY (encrypts sessions/cookies)

Level 4: Physical Separation
├─── Laravel core OUTSIDE web root
│    ├─── /home/username/laravel/ (NOT accessible)
│    └─── /home/username/public_html/ (ONLY this accessible)

Level 5: SSL/HTTPS
└─── HTTPS encryption
     └─── Protects data in transit
```

---

## 🚦 DEPLOYMENT STATUS INDICATORS

### ✅ Green - All Good
- Website loads correctly
- No errors in logs
- All routes accessible
- Forms submitting
- CSS/JS loading
- HTTPS working

### ⚠️ Yellow - Warning
- Some CSS/JS not loading (check paths)
- Slow performance (optimize cache)
- Large log files (rotate logs)
- Low disk space (clean up)

### 🚨 Red - Critical Issues
- 500 Internal Server Error
  → Check permissions, .env, logs
- 404 on all routes
  → Check .htaccess, mod_rewrite
- White screen of death
  → Check PHP errors, enable logging temporarily
- Database connection errors
  → Check .env credentials, database exists

---

## 📞 QUICK TROUBLESHOOTING MAP

```
Issue: Website not loading (500 Error)
│
├─── Check 1: File Permissions
│    ├─── storage → 775?
│    ├─── bootstrap/cache → 775?
│    └─── Fix: chmod -R 775 storage bootstrap/cache
│
├─── Check 2: .env file exists?
│    ├─── Exists in /laravel/ directory?
│    ├─── APP_KEY set?
│    └─── Fix: Copy .env.production, run php artisan key:generate
│
├─── Check 3: Dependencies installed?
│    ├─── vendor/ folder exists?
│    └─── Fix: composer install --no-dev
│
└─── Check 4: Review error logs
     ├─── storage/logs/laravel.log
     └─── cPanel → Metrics → Errors

────────────────────────────────────────────────────────────

Issue: CSS/JS not loading
│
├─── Check 1: Files in correct location?
│    ├─── public_html/css/ ?
│    ├─── public_html/js/ ?
│    └─── Fix: Upload public/ contents to public_html/
│
├─── Check 2: APP_URL correct in .env?
│    └─── Fix: APP_URL=https://www.ict-a.com
│
└─── Check 3: Browser cache
     └─── Fix: Hard refresh (Ctrl+Shift+R)

────────────────────────────────────────────────────────────

Issue: 404 on all routes (except homepage)
│
├─── Check 1: .htaccess exists in public_html?
│    └─── Fix: Upload .htaccess with Laravel rules
│
├─── Check 2: mod_rewrite enabled?
│    └─── Fix: Contact hosting support
│
└─── Check 3: Route cache issue?
     └─── Fix: php artisan route:clear && php artisan route:cache
```

---

## 📈 PERFORMANCE OPTIMIZATION FLOW

```
Fresh Deployment
│
├─── 1. Optimize Autoloader
│    └─── composer install --optimize-autoloader --no-dev
│
├─── 2. Cache Configuration
│    └─── php artisan config:cache
│
├─── 3. Cache Routes
│    └─── php artisan route:cache
│
├─── 4. Cache Views
│    └─── php artisan view:cache
│
├─── 5. Enable OPcache (cPanel)
│    └─── MultiPHP INI Editor → opcache.enable=1
│
├─── 6. GZIP Compression
│    └─── Already in .htaccess (mod_deflate)
│
└─── 7. Browser Caching
     └─── Already in .htaccess (mod_expires)

Result: Faster page loads ⚡
```

---

**Reference Document**
**Version:** 1.0
**Last Updated:** February 2026
**Target:** ict-a.com on cPanel
**Application:** ICT-A Website
