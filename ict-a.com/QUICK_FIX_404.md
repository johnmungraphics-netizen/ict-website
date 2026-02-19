# 🚨 QUICK FIX FOR 404 ERROR

## Problem
Your index.php in public_html is EMPTY and you uploaded the Laravel app to folder `ict-a.com`

## Solution

### 1. Replace index.php in public_html

**Upload this file to:** `/public_html/index.php`
**Use file:** `public/index-for-public_html.php` (rename it to `index.php`)

This file is already configured to point to your `ict-a.com` folder.

### 2. Verify File Structure

Make sure you have:

```
/home/username/
├── ict-a.com/              ← Your Laravel app (all files except public/)
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── vendor/
│   ├── .env
│   └── ...
│
└── public_html/            ← Web root
    ├── .htaccess           ← Already uploaded ✓
    ├── index.php           ← NEEDS TO BE REPLACED!
    ├── css/
    ├── js/
    ├── images/
    └── uploads/
```

### 3. Steps to Fix

**Via cPanel File Manager:**

1. Go to cPanel → File Manager
2. Navigate to `public_html`
3. Delete or rename the current empty `index.php`
4. Upload the file: `public/index-for-public_html.php`
5. Rename it to `index.php`
6. Visit https://www.ict-a.com/

**OR use the content below:**

Open `public_html/index.php` in cPanel editor and paste this:

```php
<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../ict-a.com/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../ict-a.com/vendor/autoload.php';

$app = require_once __DIR__.'/../ict-a.com/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
```

### 4. Check Permissions

Make sure these folders are writable (775):

Via cPanel File Manager:
1. Navigate to `/home/username/ict-a.com/storage`
2. Right-click → Change Permissions → Set to `775`
3. Navigate to `/home/username/ict-a.com/bootstrap/cache`
4. Right-click → Change Permissions → Set to `775`

### 5. Test

Visit: https://www.ict-a.com/

If you still get errors, check:
- `/home/username/ict-a.com/storage/logs/laravel.log`
- cPanel → Metrics → Errors

## Common Issues After Fix

**500 Error:**
- Check permissions on storage and bootstrap/cache (must be 775)
- Check .env file exists in `/home/username/ict-a.com/.env`
- Check error logs

**Still 404:**
- Verify .htaccess in public_html has Laravel rules
- Clear browser cache (Ctrl+Shift+R)
- Check mod_rewrite is enabled (contact hosting support)

**Missing CSS/JS:**
- Check files are in `/public_html/css/` and `/public_html/js/`
- Check APP_URL in .env is `https://www.ict-a.com`

## Need More Help?

See: CPANEL_DEPLOYMENT_GUIDE.md (now updated with correct paths)
