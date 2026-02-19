# 🚀 Laravel cPanel Deployment Package
## Complete Deployment Guide for ict-a.com

---

## 📋 OVERVIEW

This package contains everything you need to deploy your Laravel application to cPanel hosting at **https://www.ict-a.com/**

Your application has been analyzed and deployment files have been prepared specifically for your cPanel environment which:
- Already hosts other applications and subdomains
- Uses PHP 8.2
- Has specific memory and upload limits configured
- Redirects from ict-a.co to ict-a.com

**Application Details:**
- **Framework:** Laravel 9+
- **Application Name:** ICT-A Website
- **PHP Version Required:** PHP 8.0+ (Your server has 8.2 ✅)
- **Current Database:** SQLite (can be switched to MySQL)
- **Routes:** Home, About, Contact, Services, Courses

---

## 📦 INCLUDED FILES

This deployment package includes:

### 📘 Documentation Files

1. **[CPANEL_DEPLOYMENT_GUIDE.md](CPANEL_DEPLOYMENT_GUIDE.md)** ⭐ START HERE
   - Complete step-by-step deployment instructions
   - Pre-deployment checklist
   - Post-deployment verification
   - Troubleshooting guide
   - Security checklist
   - ~300+ lines of comprehensive guidance

2. **[DEPLOYMENT_CHECKLIST.md](DEPLOYMENT_CHECKLIST.md)**
   - Quick checklist format
   - Pre-upload preparation tasks
   - File upload checklist
   - Commands to run
   - Testing checklist
   - Perfect for following along during deployment

3. **[DEPLOYMENT_QUICK_REFERENCE.md](DEPLOYMENT_QUICK_REFERENCE.md)**
   - One-page quick reference
   - Directory structure overview
   - Critical commands
   - Common issues and solutions
   - Keep this open during deployment

4. **[DEPLOYMENT_VISUAL_GUIDE.md](DEPLOYMENT_VISUAL_GUIDE.md)**
   - Visual diagrams and flowcharts
   - Architecture overview
   - Request lifecycle
   - Decision trees
   - Troubleshooting maps

5. **[README_DEPLOYMENT.md](README_DEPLOYMENT.md)** ← You are here
   - Package overview
   - Where to start
   - File descriptions

### 🔧 Configuration Files

6. **[public/.htaccess](public/.htaccess)** ⭐ IMPORTANT
   - Merged cPanel + Laravel .htaccess
   - Includes your existing domain redirect
   - Includes your PHP 8.2 settings
   - Includes Laravel rewrite rules
   - **ACTION:** Upload this to `/public_html/.htaccess`

7. **[public/index-cpanel.php](public/index-cpanel.php)** ⭐ IMPORTANT
   - Modified index.php for cPanel structure
   - Points to `../laravel/` instead of `../`
   - **ACTION:** Rename to `index.php` and upload to `/public_html/index.php`

8. **[.env.production](.env.production)** ⭐ IMPORTANT
   - Production environment configuration
   - Pre-configured for ict-a.com
   - **ACTION:** Rename to `.env` and upload to `/home/username/laravel/.env`
   - **CRITICAL:** Update with your actual database credentials and mail settings

### 🤖 Automation Script

9. **[deploy-cpanel.sh](deploy-cpanel.sh)** ⚡ OPTIONAL
   - Bash script to automate deployment tasks
   - Sets permissions automatically
   - Installs Composer dependencies
   - Runs all artisan optimization commands
   - Validates environment configuration
   - Checks database setup
   - **USAGE:** Upload to server and run via cPanel Terminal

---

## 🎯 QUICK START GUIDE

### For First-Time Deployment:

1. **Read This First** (10 minutes)
   - [CPANEL_DEPLOYMENT_GUIDE.md](CPANEL_DEPLOYMENT_GUIDE.md) - Read sections 1-2

2. **Prepare Locally** (15 minutes)
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:clear
   php artisan cache:clear
   ```
   - Copy `.env.production` to `.env` and update settings
   - Create ZIP of all files (except `public/` folder)

3. **Upload to cPanel** (20 minutes)
   - Log into cPanel
   - Create `/home/username/laravel/` folder
   - Upload & extract Laravel files to `/laravel/`
   - Upload `public/` contents to `/public_html/`
   - Replace `public_html/index.php` with `index-cpanel.php`
   - Upload `.htaccess` to `public_html/`

4. **Configure on Server** (15 minutes)
   - Set permissions (see [DEPLOYMENT_CHECKLIST.md](DEPLOYMENT_CHECKLIST.md))
   - Run deployment commands (use Terminal or `deploy-cpanel.sh`)
   - Setup database

5. **Test & Verify** (10 minutes)
   - Visit https://www.ict-a.com/
   - Test all routes
   - Check error logs
   - Verify functionality

**Total Time: ~70 minutes**

---

## 📚 DEPLOYMENT PATHS

### Path 1: Manual Deployment (Recommended for Learning)
→ Follow [CPANEL_DEPLOYMENT_GUIDE.md](CPANEL_DEPLOYMENT_GUIDE.md) step-by-step

### Path 2: Checklist-Guided (Fastest)
→ Follow [DEPLOYMENT_CHECKLIST.md](DEPLOYMENT_CHECKLIST.md) + use [DEPLOYMENT_QUICK_REFERENCE.md](DEPLOYMENT_QUICK_REFERENCE.md)

### Path 3: Automated (For Experienced Users)
→ Upload files manually, then run [deploy-cpanel.sh](deploy-cpanel.sh)

### Path 4: Visual Learning
→ Study [DEPLOYMENT_VISUAL_GUIDE.md](DEPLOYMENT_VISUAL_GUIDE.md) first, then follow guide

---

## 🗂️ DIRECTORY STRUCTURE YOU'LL CREATE

After deployment, your cPanel will look like this:

```
/home/username/
│
├── laravel/                          ← All Laravel files
│   ├── app/
│   ├── bootstrap/
│   │   └── cache/                   ← Must be writable (775)
│   ├── config/
│   ├── database/
│   │   └── database.sqlite          ← If using SQLite
│   ├── resources/
│   │   └── views/
│   ├── routes/
│   ├── storage/                     ← Must be writable (775)
│   │   ├── app/
│   │   ├── framework/
│   │   └── logs/
│   ├── vendor/
│   ├── .env                         ← Production configuration
│   ├── artisan
│   └── composer.json
│
└── public_html/                      ← Web root (publicly accessible)
    ├── .htaccess                     ← Merged rules
    ├── index.php                     ← Points to ../laravel/
    ├── css/
    ├── js/
    ├── images/
    ├── fonts/
    └── uploads/
```

---

## ⚙️ KEY CONFIGURATION CHANGES

### 1. Environment Configuration (.env)

**MUST UPDATE:**
```env
APP_ENV=production          # ← Changed from 'local'
APP_DEBUG=false             # ← Changed from 'true' (CRITICAL!)
APP_URL=https://www.ict-a.com  # ← Changed from 'localhost'
```

**UPDATE WITH YOUR DETAILS:**
```env
DB_CONNECTION=mysql         # ← Or keep 'sqlite'
DB_DATABASE=username_dbname # ← Your cPanel database name
DB_USERNAME=username_dbuser # ← Your database user
DB_PASSWORD=your_password   # ← Your database password

MAIL_HOST=mail.ict-a.com   # ← Your mail server
MAIL_USERNAME=noreply@ict-a.com
MAIL_PASSWORD=your_email_password
```

### 2. File Paths (index.php)

**Changed from:**
```php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**Changed to:**
```php
require __DIR__.'/../laravel/vendor/autoload.php';
$app = require_once __DIR__.'/../laravel/bootstrap/app.php';
```

### 3. Apache Configuration (.htaccess)

**Merged:**
- Your existing cPanel PHP settings ✅
- Your existing domain redirect (ict-a.co → ict-a.com) ✅
- Laravel rewrite rules ✅
- Security headers ✅
- Compression and caching ✅

---

## 🔐 CRITICAL SECURITY SETTINGS

Before going live, verify:

- [ ] `APP_DEBUG=false` in production `.env`
- [ ] `APP_ENV=production` in production `.env`
- [ ] `.env` file is in `/laravel/` (NOT in public_html)
- [ ] `composer.json` is in `/laravel/` (NOT in public_html)
- [ ] `.htaccess` blocks access to `.env` and other sensitive files
- [ ] Storage and bootstrap/cache have correct permissions (775)
- [ ] HTTPS/SSL is working
- [ ] Error display is disabled

**Test Security:**
Try accessing: `https://www.ict-a.com/.env` → Should show 403 Forbidden

---

## 🗄️ DATABASE OPTIONS

### Option 1: SQLite (Current Setup)
✅ Simple, no cPanel database setup needed
✅ Good for small to medium traffic
⚠️ Single file can be limiting
⚠️ Not ideal for high-concurrency

**Setup:**
```bash
cd /home/username/laravel/database
touch database.sqlite
chmod 664 database.sqlite
```

### Option 2: MySQL (Recommended for Production)
✅ Better performance at scale
✅ Better concurrency handling
✅ More robust for production
⚠️ Requires cPanel database setup

**Setup:**
1. cPanel → MySQL Databases
2. Create database
3. Create user
4. Assign user to database
5. Update `.env` with credentials
6. Run: `php artisan migrate --force`

---

## 📞 COMMANDS QUICK REFERENCE

### Essential Commands (Run via cPanel Terminal)

```bash
# Navigate to Laravel directory
cd /home/username/laravel

# Install dependencies
composer install --optimize-autoloader --no-dev

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check version
php artisan --version

# View errors
tail -n 50 storage/logs/laravel.log
```

### Permission Commands

```bash
# Set storage permissions
chmod -R 775 /home/username/laravel/storage

# Set cache permissions
chmod -R 775 /home/username/laravel/bootstrap/cache

# Set SQLite permissions (if using)
chmod 664 /home/username/laravel/database/database.sqlite
chmod 775 /home/username/laravel/database
```

---

## ✅ POST-DEPLOYMENT TESTING

Visit and test these URLs:

- [ ] https://www.ict-a.com/ (Home)
- [ ] https://www.ict-a.com/about (About)
- [ ] https://www.ict-a.com/contact (Contact)
- [ ] https://www.ict-a.com/services (Services)
- [ ] https://www.ict-a.com/courses (Courses)
- [ ] Submit a contact form
- [ ] Check mobile responsiveness
- [ ] Verify images load
- [ ] Verify CSS/JS load

**Check for errors:**
- Browser console (F12)
- Network tab (F12)
- Laravel logs: `/home/username/laravel/storage/logs/laravel.log`

---

## 🐛 TROUBLESHOOTING

### Quick Diagnostics

**500 Internal Server Error:**
```bash
cd /home/username/laravel
chmod -R 775 storage bootstrap/cache
php artisan config:clear
tail -n 50 storage/logs/laravel.log
```

**404 on Routes:**
- Verify `.htaccess` exists in `public_html/`
- Check `index.php` paths point to `../laravel/`
- Run: `php artisan route:clear && php artisan route:cache`

**Missing CSS/JS:**
- Verify files are in `public_html/css/` and `public_html/js/`
- Check `APP_URL` in `.env`
- Clear browser cache (Ctrl + Shift + R)

**More solutions:** See [DEPLOYMENT_QUICK_REFERENCE.md](DEPLOYMENT_QUICK_REFERENCE.md) → Troubleshooting section

---

## 📊 FILE SIZE OVERVIEW

Approximate sizes to expect:

```
vendor/           ~50-100 MB  (Composer dependencies)
storage/logs/     Varies      (Monitor and rotate if > 100MB)
bootstrap/cache/  < 1 MB      (Cached configs)
public/           ~10-50 MB   (Your assets)
database.sqlite   < 10 MB     (SQLite file, if used)
```

**Total deployment:** ~100-200 MB

---

## 🔄 UPDATING YOUR LIVE SITE

When you need to update:

1. **Always backup first** (cPanel → Backup)
2. Upload new files to `/home/username/laravel/`
3. Run update commands:
   ```bash
   cd /home/username/laravel
   composer install --optimize-autoloader --no-dev
   php artisan migrate --force  # If database changes
   php artisan optimize:clear
   php artisan optimize
   ```
4. Test the website
5. Monitor logs for any issues

---

## 🎓 LEARNING RESOURCES

- **Laravel Documentation:** https://laravel.com/docs
- **cPanel Documentation:** Your hosting provider's knowledge base
- **PHP 8 Documentation:** https://www.php.net/manual/en/

---

## 📝 DEPLOYMENT CHECKLIST SUMMARY

### Pre-Deployment
- [ ] Read deployment guide
- [ ] Prepare local environment
- [ ] Create production .env
- [ ] Run Composer install
- [ ] Clear local caches

### Upload
- [ ] Create `/laravel/` directory structure
- [ ] Upload Laravel files
- [ ] Upload public files to `public_html/`
- [ ] Upload .htaccess
- [ ] Upload modified index.php

### Configuration
- [ ] Set file permissions (775 for storage/cache)
- [ ] Run Composer install on server
- [ ] Run artisan optimization commands
- [ ] Setup database
- [ ] Configure environment variables

### Testing
- [ ] Test all routes
- [ ] Verify forms work
- [ ] Check error logs
- [ ] Test on mobile
- [ ] Verify security settings

### Go Live
- [ ] Final security check
- [ ] Monitor for 24-48 hours
- [ ] Setup backups
- [ ] Document any custom changes

---

## 🆘 GETTING HELP

If you encounter issues:

1. **Check the logs first:**
   - `/home/username/laravel/storage/logs/laravel.log`
   - cPanel → Metrics → Errors

2. **Review documentation:**
   - Start with [DEPLOYMENT_QUICK_REFERENCE.md](DEPLOYMENT_QUICK_REFERENCE.md)
   - Check [DEPLOYMENT_VISUAL_GUIDE.md](DEPLOYMENT_VISUAL_GUIDE.md) troubleshooting section

3. **Common issues:**
   - 99% of deployment issues are permissions or .env configuration
   - Check permissions are exactly 775 for storage and bootstrap/cache
   - Verify .env exists and has correct settings

4. **Still stuck?**
   - Review [CPANEL_DEPLOYMENT_GUIDE.md](CPANEL_DEPLOYMENT_GUIDE.md) troubleshooting section
   - Check Laravel community forums
   - Contact your hosting provider for server-specific issues

---

## ✨ FINAL NOTES

### About Your Multi-Application cPanel Setup

Your cPanel hosts multiple applications and subdomains. This deployment:
- ✅ Will NOT affect your other applications
- ✅ Will only change what's served at www.ict-a.com
- ✅ Your subdomains remain untouched (they have separate document roots)
- ✅ Existing files in `public_html` can coexist with Laravel

### Performance Considerations

On shared hosting (cPanel):
- Expect good performance for small to medium traffic
- Enable all caching (already in deployment guide)
- Monitor resource usage via cPanel
- Consider dedicated hosting if traffic grows significantly

### Maintenance

**Weekly:**
- Check error logs
- Monitor disk space

**Monthly:**
- Review and rotate logs if > 100MB
- Check for Laravel security updates
- Test backup restoration

**As Needed:**
- Update dependencies (test locally first)
- Optimize database
- Review performance

---

## 📄 DOCUMENT VERSIONS

- **Deployment Guide:** v1.0
- **Created:** February 2026
- **Target Environment:** cPanel with PHP 8.2
- **Application:** Laravel 9+ (ICT-A)
- **Domain:** ict-a.com

---

## 🎯 NEXT STEPS

1. **Start Here:** Read [CPANEL_DEPLOYMENT_GUIDE.md](CPANEL_DEPLOYMENT_GUIDE.md)
2. **Follow Checklist:** Use [DEPLOYMENT_CHECKLIST.md](DEPLOYMENT_CHECKLIST.md)
3. **Keep Reference Open:** Have [DEPLOYMENT_QUICK_REFERENCE.md](DEPLOYMENT_QUICK_REFERENCE.md) available
4. **Deploy:** Follow the steps carefully
5. **Test:** Thoroughly test all functionality
6. **Go Live:** Monitor for 24-48 hours after deployment

---

**Good luck with your deployment! 🚀**

Remember: Take your time, follow the steps carefully, backup before making changes, and test thoroughly.

---

**Deployment Package Created:** February 19, 2026
**Target:** https://www.ict-a.com/
**Server:** cPanel (Shared Hosting)
**PHP Version:** 8.2
**Framework:** Laravel 9+
**Application:** ICT-A Website
