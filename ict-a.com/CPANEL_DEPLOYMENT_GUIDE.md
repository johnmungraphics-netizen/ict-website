# cPanel Deployment Guide for Laravel Application
## Target URL: https://www.ict-a.com/

---

## 📋 PRE-DEPLOYMENT CHECKLIST

### 1. **Verify Server Requirements**
- ✅ PHP 8.0 or higher (Your cPanel has PHP 8.2)
- ✅ Composer installed on cPanel
- ✅ Required PHP extensions enabled:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON
  - BCMath
  - Fileinfo
  - SQLite3 (for your current database)

### 2. **Prepare Your Files Locally**
Before uploading, ensure:
- [ ] Run `composer install --optimize-autoloader --no-dev`
- [ ] Clear all caches: `php artisan config:clear && php artisan cache:clear && php artisan view:clear`
- [ ] Generate production assets if needed: `npm run build`
- [ ] Create production `.env` file (see below)

---

## 🚀 DEPLOYMENT STEPS

### **STEP 1: Understand cPanel Directory Structure**

Since your cPanel hosts multiple applications/subdomains, the typical structure is:
```
/home/username/
├── public_html/              ← Main domain root (www.ict-a.com)
├── subdomain1/               ← Other subdomains
├── subdomain2/
└── private/                  ← Safe place for Laravel files outside public_html
```

**CRITICAL:** For security, Laravel files should NOT be in public_html (except the public folder contents).

### **STEP 2: Choose Your Deployment Method**

#### **Method A: Main Domain Deployment (Recommended for www.ict-a.com)**

**Directory Layout:**
```
/home/username/
├── ict-a.com/                ← All Laravel files (create this folder)
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── vendor/
│   ├── .env
│   ├── artisan
│   └── composer.json
└── public_html/              ← Point to Laravel's public folder
    ├── .htaccess             ← Your existing .htaccess + Laravel rules
    ├── index.php             ← Modified Laravel index.php
    ├── css/
    ├── js/
    ├── images/
    └── uploads/
```

**Note:** You can name the folder `ict-a.com` or `laravel` - just ensure index.php points to the correct folder.

### **STEP 3: Upload Files to cPanel**

#### **Option 1: Using cPanel File Manager**
1. Log into cPanel
2. Open **File Manager**
3. Navigate to your home directory (one level above public_html)
4. Create a new folder called `ict-a.com` (or `laravel`)
5. Upload ALL files EXCEPT the `public` folder to `/home/username/ict-a.com/`
   - Upload as a ZIP file for faster transfer
   - Use the "Extract" feature after upload
   - If you use a different folder name, update index.php accordingly

#### **Option 2: Using FTP/SFTP**
1. Use FileZilla or similar FTP client
2. Connect to your server
3. Upload structure as described above

### **STEP 4: Move Public Folder Contents**

Since `public_html` already contains other files, you need to MERGE carefully:

1. **Upload Laravel's public folder contents** to `public_html/`:
   - Copy files from your local `public/` folder
   - **DO NOT overwrite** existing `.htaccess` yet

2. **Merge .htaccess files** (see STEP 5)

3. **Upload modified index.php** to `public_html/` (see STEP 6)

### **STEP 5: Configure .htaccess in public_html**

Your current .htaccess has cPanel settings and domain redirect. You need to **merge** it with Laravel's .htaccess rules.

Create this .htaccess in `public_html/`:

```apache
# Domain Redirect (Your existing rule)
RewriteEngine on
Options -Indexes
RewriteCond %{HTTP_HOST} ^ict\-a\.co$ [OR]
RewriteCond %{HTTP_HOST} ^www\.ict\-a\.co$
RewriteRule ^/?$ "https\:\/\/ict\-a\.com\/" [R=301,L]

# BEGIN cPanel-generated php ini directives
# (Keep your existing PHP settings - already in your .htaccess)
<IfModule php8_module>
   php_flag display_errors Off
   php_value max_execution_time 90
   php_value max_input_time 90
   php_value max_input_vars 1000
   php_value memory_limit 180M
   php_value post_max_size 300M
   php_value session.gc_maxlifetime 1440
   php_value session.save_path "/var/cpanel/php/sessions/ea-php82"
   php_value upload_max_filesize 200M
   php_flag zlib.output_compression Off
</IfModule>
<IfModule lsapi_module>
   php_flag display_errors Off
   php_value max_execution_time 90
   php_value max_input_time 90
   php_value max_input_vars 1000
   php_value memory_limit 180M
   php_value post_max_size 300M
   php_value session.gc_maxlifetime 1440
   php_value session.save_path "/var/cpanel/php/sessions/ea-php82"
   php_value upload_max_filesize 200M
   php_flag zlib.output_compression Off
</IfModule>
# END cPanel-generated php ini directives

# Laravel Rewrite Rules
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Disable directory browsing
Options -Indexes

# Prevent access to sensitive files
<FilesMatch "^\.">
    Order allow,deny
    Deny from all
</FilesMatch>

# Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript application/json
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType application/pdf "access plus 1 month"
</IfModule>
```

### **STEP 6: Modify index.php in public_html**

The `index.php` in `public_html/` needs to point to your Laravel installation.

Replace the contents with:

```php
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
*/
ict-a.com/storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__.'/../ict-a.com/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/

$app = require_once __DIR__.'/../ict-a.com/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
```

**Key Change:** All paths now point to `../ict-a.com/` to match your folder name.
**Note:** If you named your folder `laravel` instead, use `../laravel/` in the paths above.
**Key Change:** All paths now point to `../laravel/` instead of `../`

### **STEP 7: Create Production .env File**

In `/home/username/ict-a.com/`, create/edit `.env`:

```env
APP_NAME="ICT-A"
APP_ENV=production
APP_KEY=base64:EKEYM2pltQoiwsUMCVOyPnZMAmfRb9F5eF1jvFil5Oc=
APP_DEBUG=false
APP_URL=https://www.ict-a.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

# Database Configuration
# Option 1: Keep SQLite (Current)
DB_CONNECTION=sqlite
DB_DATABASE=/home/username/ict-a.com/database/database.sqlite

# Option 2: Use MySQL (Recommended for Production)
# DB_CONNECTION=mysql
# DB_HOST=localhost
# DB_PORT=3306
# DB_DATABASE=your_database_name
# DB_USERNAME=your_database_user
# DB_PASSWORD=your_database_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

# Mail Configuration (Update with your SMTP settings)
MAIL_MAILER=smtp
MAIL_HOST=mail.ict-a.com
MAIL_PORT=465
MAIL_USERNAME=noreply@ict-a.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="noreply@ict-a.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

**IMPORTANT CHANGES:**
- `APP_ENV=production`
- `APP_DEBUG=false` (CRITICAL for security)
- `APP_URL=https://www.ict-a.com`
- `LOG_LEVEL=error` (reduce log size)
- Update database path for SQLite
- Configure mail settings with your cPanel email

### **STEP 8: Set Correct File Permissions**

Use cPanel File Manager or SSH:

```bash
# Navigate to Laravel directory
cd /home/username/ict-a.com

# Set directory permissions
find . -type d -exec chmod 755 {} \;

# Set file permissions
find . -type f -exec chmod 644 {} \;

# Storage and cache must be writable
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# If using SQLite
chmod 664 database/database.sqlite  # If file exists
chmod 775 database                  # Directory must be writable
```

**Via cPanel File Manager:**
1. Right-click on `storage` folder → **Change Permissions** → Set to `775`
2. Right-click on `bootstrap/cache` → **Change Permissions** → Set to `775`
3. If using SQLite database file → Set to `664`

### **STEP 9: Install Composer Dependencies**

#### **Using cPanel Terminal (Recommended):**
1. Go to cPanel → **Terminal**
2. Run these commands:

```bash
cd /home/username/ict-a.com
php composer.phar install --optimize-autoloader --no-dev

# Or if composer is globally installed:
composer install --optimize-autoloader --no-dev
```

#### **If Composer is not installed on cPanel:**
1. Download composer in your laravel directory:
```bash
cd /home/username/laravel
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

2. Then run:
```bash
php composer.phar install --optimize-autoloader --no-dev
```

### **STEP 10: Run Laravel Artisan Commands**

Via cPanel Terminal:

```bash
cd /home/username/ict-a.com

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache for production performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# If you have migrations (and using MySQL)
# php artisan migrate --force

# Create symbolic link for storage (if needed)
php artisan storage:link
```

### **STEP 11: Create Database (If Using MySQL)**

If switching to MySQL:

1. Go to cPanel → **MySQL Databases**
2. Create a new database (e.g., `username_icta`)
3. Create a new database user
4. Assign user to database with ALL PRIVILEGES
5. Update `.env` with these credentials
6. Run migrations: `php artisan migrate --force`

**If keeping SQLite:**
1. Create the database file:
```bash
cd /home/username/ict-a.com/database
touch database.sqlite
chmod 664 database.sqlite
```

---

## ✅ POST-DEPLOYMENT VERIFICATION

### **1. Test Your Website**
Visit https://www.ict-a.com/ and check:
- [ ] Home page loads correctly
- [ ] CSS/JS files are loading
- [ ] Images are displaying
- [ ] Navigation works
- [ ] Forms submit correctly
- [ ] No 500 errors

### **2. Check Error Logs**
If you see errors:
1. cPanel → **Metrics** → **Errors**
2. Or check: `/home/username/ict-a.com/storage/logs/laravel.log`

### **3. Common Issues & Solutions**

#### **500 Internal Server Error**
- Check file permissions (storage and bootstrap/cache)
- Check .env file exists and APP_KEY is set
- Check .htaccess is correct
- Check error logs

#### **404 on All Routes**
- Check .htaccess in public_html
- Verify mod_rewrite is enabled
- Check index.php paths

#### **Missing CSS/JS/Images**
- Check if files are in public_html
- Check APP_URL in .env
- Clear browser cache
- Check asset paths in blade files

#### **Permission Denied Errors**
- Set storage to 775: `chmod -R 775 storage`
- Set bootstrap/cache to 775: `chmod -R 775 bootstrap/cache`
- If SQLite: `chmod 664 database/database.sqlite`

---

## 🔒 SECURITY CHECKLIST

- [ ] `APP_DEBUG=false` in production .env
- [ ] `APP_ENV=production` in .env
- [ ] Strong `APP_KEY` generated
- [ ] Storage and bootstrap/cache are NOT in public_html
- [ ] `.env` file is NOT accessible via web
- [ ] Disable directory listing (Options -Indexes)
- [ ] SSL certificate installed (HTTPS)
- [ ] Regular backups configured

---

## 🔄 UPDATING YOUR APPLICATION

When making updates:

1. **Create a backup** (cPanel → Backup or manually download files)
2. **Upload new files** to `/home/username/ict-a.com/`
3. **Run in terminal:**
   ```bash
   cd /home/username/ict-a.com
   composer install --optimize-autoloader --no-dev
   php artisan config:clear
   php artisan cache:clear
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
4. **Test the website**

---

## 📞 TROUBLESHOOTING COMMANDS

```bash
# Check PHP version
php -v

# Check if Laravel can run
cd /home/username/ict-a.com
php artisan --version

# View last 50 lines of error log
tail -n 50 storage/logs/laravel.log

# Clear all caches
php artisan optimize:clear

# Re-cache everything
php artisan optimize
```

---

## 🌐 IMPORTANT NOTES ABOUT SHARED cPanel

Since your cPanel hosts multiple applications:

1. **Subdomain Consideration:**
   - Your subdomains should remain unaffected
   - They have their own document roots
   - Only `public_html` will show this Laravel app

2. **Existing Files in public_html:**
   - Backup everything before making changes
   - Laravel's index.php will handle all routes
   - Existing static files can coexist
   - Use `.htaccess` RewriteCond to exclude specific paths if needed

3. **Performance:**
   - Enable OPcache if available (cPanel → MultiPHP INI Editor)
   - Consider upgrading to dedicated hosting for better performance
   - Monitor resource usage

---

## 📝 QUICK DEPLOYMENT SUMMARY

1. ✅ Create `/home/username/ict-a.com/` folder
2. ✅ Upload all Laravel files (except public) to `/ict-a.com/`
3. ✅ Upload public folder contents to `/public_html/`
4. ✅ Update `.htaccess` in public_html (merge with existing)
5. ✅ Update `index.php` in public_html
6. ✅ Create production `.env` file
7. ✅ Set permissions (storage: 775, bootstrap/cache: 775)
8. ✅ Run `composer install --no-dev`
9. ✅ Run artisan commands (clear & cache)
10. ✅ Test website functionality

---

**Deployment Date:** _____________
**Deployed By:** _____________
**Server Details:** PHP 8.2, ict-a.com
**Application:** ICT-A Website

---

Need help? Check Laravel logs at: `/home/username/ict-a.com/storage/logs/laravel.log`
