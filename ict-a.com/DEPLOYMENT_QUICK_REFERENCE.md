# 🚀 CPANEL DEPLOYMENT - QUICK REFERENCE
## Website: https://www.ict-a.com/

---

## 📁 DIRECTORY STRUCTURE

```
/home/username/
├── laravel/                    ← All Laravel files (app, config, routes, etc.)
│   ├── .env                   ← Production environment config
│   ├── vendor/                ← Composer dependencies
│   ├── storage/               ← Must be writable (775)
│   └── bootstrap/cache/       ← Must be writable (775)
│
└── public_html/               ← Web root (Laravel's public folder)
    ├── .htaccess              ← Merged cPanel + Laravel rules
    ├── index.php              ← Points to ../laravel/
    ├── css/
    ├── js/
    ├── images/
    └── uploads/
```

---

## 🔑 CRITICAL FILES

### 1. **public_html/.htaccess**
- Merges your existing cPanel .htaccess with Laravel rewrite rules
- Keep cPanel PHP settings + Domain redirect
- Add Laravel routing rules

### 2. **public_html/index.php**
- Must point to: `../laravel/vendor/autoload.php`
- Must point to: `../laravel/bootstrap/app.php`
- Use `index-cpanel.php` as template

### 3. **/home/username/laravel/.env**
- **MUST SET:** `APP_ENV=production`
- **MUST SET:** `APP_DEBUG=false`
- **MUST SET:** `APP_URL=https://www.ict-a.com`
- Update database credentials
- Update mail settings

---

## ⚙️ REQUIRED PERMISSIONS

```bash
chmod -R 775 /home/username/laravel/storage
chmod -R 775 /home/username/laravel/bootstrap/cache
chmod 664 /home/username/laravel/database/database.sqlite  # If using SQLite
chmod 775 /home/username/laravel/database                   # Directory
```

---

## 🎯 DEPLOYMENT COMMANDS

### Run in cPanel Terminal:

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

# Create storage link
php artisan storage:link

# Run migrations (if using MySQL)
php artisan migrate --force
```

---

## 🗄️ DATABASE OPTIONS

### Option 1: SQLite (Current)
```env
DB_CONNECTION=sqlite
DB_DATABASE=/home/username/laravel/database/database.sqlite
```

**Create database:**
```bash
cd /home/username/laravel/database
touch database.sqlite
chmod 664 database.sqlite
```

### Option 2: MySQL (Recommended)
1. Create database in cPanel → MySQL Databases
2. Create user and assign to database
3. Update .env:
```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=username_dbname
DB_USERNAME=username_dbuser
DB_PASSWORD=secure_password
```

---

## ✅ POST-DEPLOYMENT CHECKS

- [ ] Website loads: https://www.ict-a.com/
- [ ] No 500 errors
- [ ] CSS/JS loading correctly
- [ ] Images displaying
- [ ] All routes work (/about, /contact, /services, /courses)
- [ ] Forms submit correctly
- [ ] `.env` not accessible via web (try browsing to it)
- [ ] Check logs: `/laravel/storage/logs/laravel.log`

---

## 🐛 TROUBLESHOOTING

### 500 Internal Server Error
```bash
# Check permissions
chmod -R 775 storage bootstrap/cache

# Clear and recache
php artisan optimize:clear
php artisan optimize

# Check logs
tail -n 50 storage/logs/laravel.log
```

### 404 on All Routes
- Verify `.htaccess` in public_html
- Check `mod_rewrite` is enabled
- Verify `index.php` paths point to `../laravel/`

### Missing CSS/JS
- Check files are in `public_html/css` and `public_html/js`
- Verify `APP_URL` in `.env`
- Clear browser cache

### Permission Denied
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
chown -R username:username /home/username/laravel
```

---

## 📧 EMAIL SETUP (cPanel)

Get SMTP details from: **cPanel → Email Accounts → Configure Email Client**

Update `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=mail.ict-a.com
MAIL_PORT=465
MAIL_USERNAME=noreply@ict-a.com
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="noreply@ict-a.com"
```

---

## 🔒 SECURITY CHECKLIST

- [ ] `APP_DEBUG=false`
- [ ] `APP_ENV=production`
- [ ] `.env` file protected (not in public_html)
- [ ] `composer.json` protected
- [ ] Directory listing disabled
- [ ] SSL certificate active (HTTPS)
- [ ] File permissions correct (775 for folders, 664 for files)
- [ ] Error display disabled (`display_errors=Off` in .htaccess)

---

## 🔄 UPDATING THE APPLICATION

1. **Backup everything** (cPanel → Backup)
2. Upload new files to `/home/username/laravel/`
3. Run deployment script or commands:
```bash
cd /home/username/laravel
composer install --optimize-autoloader --no-dev
php artisan migrate --force  # If database changes
php artisan optimize:clear
php artisan optimize
```
4. Test the website

---

## 📝 USEFUL COMMANDS

```bash
# Check Laravel version
php artisan --version

# Check PHP version
php -v

# View last 50 log entries
tail -n 50 storage/logs/laravel.log

# Clear everything
php artisan optimize:clear

# Cache everything
php artisan optimize

# Check disk space
df -h

# Find large files
du -sh * | sort -hr | head -10

# Check file permissions
ls -la storage
ls -la bootstrap/cache
```

---

## 📞 EMERGENCY COMMANDS

```bash
# Fix permissions
cd /home/username/laravel
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;
chmod -R 775 storage bootstrap/cache

# Complete cache clear
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear

# Rebuild all caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🎯 QUICK DEPLOYMENT AUTOMATION

Use the provided deployment script:

```bash
# Upload deploy-cpanel.sh to /home/username/laravel/
chmod +x deploy-cpanel.sh
./deploy-cpanel.sh
```

This automates:
- Permission setting
- Composer install
- Cache clearing
- Production optimization
- Environment validation
- Database checks

---

## 📊 FILE SIZES TO MONITOR

- **Logs:** `storage/logs/laravel.log` (rotate if > 100MB)
- **Cache:** `bootstrap/cache/*.php` (can be deleted if issues)
- **Sessions:** `storage/framework/sessions/*` (auto-cleaned)
- **Vendor:** `vendor/` (largest directory, normal)

---

## 🌐 cPanel SPECIFIC NOTES

- **PHP Version:** 8.2 (confirmed by your .htaccess)
- **Memory Limit:** 180M (can increase if needed)
- **Upload Limit:** 200M
- **Execution Time:** 90 seconds
- **Session Path:** `/var/cpanel/php/sessions/ea-php82`

### Multi-Application Setup:
- Your subdomains are safe (separate document roots)
- Only `public_html` serves this Laravel app
- Existing files in `public_html` can coexist
- Laravel handles routing via `.htaccess`

---

## 📅 MAINTENANCE SCHEDULE

**Weekly:**
- Check error logs
- Monitor disk space
- Test contact forms

**Monthly:**
- Review security updates
- Update Composer dependencies (test locally first)
- Backup database and files

**As Needed:**
- Clear logs if > 100MB
- Review performance
- Update Laravel (test locally first)

---

## 🆘 SUPPORT RESOURCES

- **Error Logs:** `/home/username/laravel/storage/logs/laravel.log`
- **cPanel Error Logs:** Metrics → Errors
- **Laravel Docs:** https://laravel.com/docs
- **PHP Config:** cPanel → MultiPHP INI Editor

---

**Last Updated:** February 2026
**Laravel Version:** 9+
**PHP Version:** 8.2
**Server:** cPanel (Shared Hosting)
**Application:** ICT-A Website
