# Quick Deployment Checklist for cPanel
## Website: https://www.ict-a.com/

---

## 📦 PRE-UPLOAD PREPARATION

### On Your Local Machine:
- [ ] Run `composer install --optimize-autoloader --no-dev`
- [ ] Run `php artisan config:clear`
- [ ] Run `php artisan cache:clear`
- [ ] Run `php artisan view:clear`
- [ ] Run `php artisan route:clear`
- [ ] Create production `.env` file (use `.env.production` template)
- [ ] Ensure `APP_DEBUG=false` in production `.env`
- [ ] Ensure `APP_ENV=production` in production `.env`
- [ ] Update `APP_URL=https://www.ict-a.com` in production `.env`
- [ ] Backup current files (if updating)

---

## 📤 FILE UPLOAD

### Create Directory Structure:
```
/home/username/
├── laravel/              ← Create this folder
└── public_html/          ← Already exists
```

### Upload Files:
- [ ] Upload ALL files EXCEPT `public/` folder to `/home/username/ict-a.com/`
  - app/
  - bootstrap/
  - config/
  - database/
  - resources/
  - routes/
  - storage/
  - vendor/
  - .env (production version)
  - artisan
  - composer.json
  - etc.

- [ ] Upload contents of `public/` folder to `/home/username/public_html/`
  - css/
  - js/
  - images/
  - uploads/
  - fonts/

- [ ] Upload `public/.htaccess` to `/home/username/public_html/.htaccess`
  - This merges your existing cPanel .htaccess with Laravel rules

- [ ] Upload `public/index-cpanel.php` to `/home/username/public_html/index.php`
  - This replaces the index.php with cPanel-compatible paths (points to ../ict-a.com/)

---

## 🔐 SET PERMISSIONS

Via cPanel File Manager or Terminal:

- [ ] Set `storage/` to 775
  ```bash
  chmod -R 775 /home/username/ict-a.com/storage
  ```

- [ ] Set `bootstrap/cache/` to 775
  ```bash
  chmod -R 775 /home/username/ict-a.com/bootstrap/cache
  ```

- [ ] If using SQLite, set database file to 664
  ```bash
  chmod 664 /home/username/ict-a.com/database/database.sqlite
  chmod 775 /home/username/ict-a.com/database
  ```

---

## 🗄️ DATABASE SETUP

### If Using MySQL:
- [ ] Create database in cPanel (e.g., `username_icta`)
- [ ] Create database user
- [ ] Assign user to database with ALL PRIVILEGES
- [ ] Update `.env` with database credentials
- [ ] Run migrations via Terminal:
  ```bash
  cd /home/username/laravel
  php artisan migrate --force
  ```

### If Using SQLite (Current):
- [ ] Create database file:
  ```bash
  cd /home/username/laravel/database
  touch database.sqlite
  chmod 664 database.sqlite
  ```
- [ ] Update `.env` with absolute path:
  ```
  DB_DATABASE=/home/username/ict-a.com/database/database.sqlite
  ```

---

## 🎯 RUN ARTISAN COMMANDS

Via cPanel Terminal:

```bash
cd /home/username/ict-a.com

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache for production (better performance)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create symbolic link for storage (if needed)
php artisan storage:link

# Check Laravel version
php artisan --version
```

All commands executed?
- [ ] Config cleared
- [ ] Cache cleared
- [ ] Routes cached
- [ ] Views cached
- [ ] Storage linked

---

## ✅ TESTING

### Test Website Functionality:
- [ ] Visit https://www.ict-a.com/
- [ ] Home page loads correctly
- [ ] CSS/JS are loading properly
- [ ] Images display correctly
- [ ] Test navigation:
  - [ ] About page (/about)
  - [ ] Contact page (/contact)
  - [ ] Services page (/services)
  - [ ] Courses page (/courses)
- [ ] Test contact form submission
- [ ] Check responsive design on mobile
- [ ] Test service detail pages

### Check for Errors:
- [ ] No 500 errors
- [ ] No 404 errors on assets
- [ ] No console errors (F12 Developer Tools)
- [ ] Check Laravel logs: `/home/username/ict-a.com/storage/logs/laravel.log`

---

## 🔒 SECURITY VERIFICATION

- [ ] `.env` file is NOT accessible via browser (try: https://www.ict-a.com/.env)
- [ ] `composer.json` is NOT accessible via browser
- [ ] `APP_DEBUG=false` in production
- [ ] `APP_ENV=production` in production
- [ ] SSL certificate is active (HTTPS working)
- [ ] Directory listing is disabled
- [ ] Error reporting is disabled publicly

---

## 📧 EMAIL CONFIGURATION

If using contact forms:
- [ ] Get SMTP settings from cPanel > Email Accounts
- [ ] Update `.env` with correct mail settings:
  ```
  MAIL_HOST=mail.ict-a.com
  MAIL_PORT=465
  MAIL_USERNAME=noreply@ict-a.com
  MAIL_PASSWORD=your_password
  MAIL_ENCRYPTION=ssl
  ```
- [ ] Test contact form submission
- [ ] Verify email delivery

---

## ⚡ PERFORMANCE OPTIMIZATION

- [ ] Run `php artisan optimize` for comprehensive caching
- [ ] Enable OPcache in cPanel (MultiPHP INI Editor)
- [ ] Verify GZIP compression is working
- [ ] Check browser caching headers
- [ ] Test page load speed

---

## 🔄 POST-DEPLOYMENT

- [ ] Create backup of deployed files
- [ ] Document any custom configurations
- [ ] Set up automated backups in cPanel
- [ ] Configure cron jobs (if needed for Laravel scheduler)
- [ ] Monitor error logs for first 24-48 hours
- [ ] Share website with stakeholders for testing

---

## 🆘 TROUBLESHOOTING

### If you encounter issues:

**500 Internal Server Error:**
1. Check permissions: storage (775), bootstrap/cache (775)
2. Check `.env` file exists in `/laravel/` directory
3. Check error logs: `/laravel/storage/logs/laravel.log`
4. Verify `.htaccess` is correct
5. Run: `php artisan config:clear`

**404 on all routes:**
1. Verify `.htaccess` in public_html
2. Check mod_rewrite is enabled
3. Verify index.php paths point to `../laravel/`

**Missing CSS/JS:**
1. Verify files are in public_html
2. Check `APP_URL` in `.env`
3. Clear browser cache
4. Check file paths in blade templates

**Permission Denied:**
1. Set storage to 775
2. Set bootstrap/cache to 775
3. Ensure web server user can write to these directories

---

## 📞 Quick Commands Reference

```bash
# Navigate to Laravel directory
cd /home/username/laravel

# Check PHP version
php -v

# Check Laravel version
php artisan --version

# Clear all caches
php artisan optimize:clear

# Re-cache everything
php artisan optimize

# View error log
tail -n 50 storage/logs/laravel.log

# Check disk space
df -h
```

---

## ✨ Deployment Complete!

**Deployment Date:** _______________
**Deployed By:** _______________
**Laravel Version:** _______________
**PHP Version:** 8.2
**Application:** ICT-A Website

**Notes:**
_______________________________________________
_______________________________________________
_______________________________________________

---

**Need Help?**
- Check error logs: `/home/username/laravel/storage/logs/laravel.log`
- cPanel Error logs: Metrics > Errors
- Laravel Documentation: https://laravel.com/docs
