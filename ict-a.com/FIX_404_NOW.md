# ✅ FIX YOUR 404 ERROR - SIMPLE STEPS

## What's Wrong?
Your `index.php` in `public_html` is **EMPTY**. That's why you're getting 404 errors.

---

## 🔧 THE FIX (5 Minutes)

### Option 1: Copy/Paste Method (Easiest)

1. **Login to cPanel File Manager**

2. **Navigate to `public_html`**

3. **Click on `index.php`**

4. **Click "Edit" button** at the top

5. **Delete all content** (it's empty anyway)

6. **Paste THIS CODE:**

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

7. **Click "Save Changes"**

8. **Visit https://www.ict-a.com/** - It should work now!

---

### Option 2: Upload File Method

1. Go to your local folder: `ICT WEBSITE/ict-a.com/public/`

2. Find file: `index-for-public_html.php`

3. **Upload it to cPanel:**
   - Go to cPanel File Manager
   - Navigate to `public_html`
   - Delete or rename the current `index.php`
   - Upload `index-for-public_html.php`
   - Rename it to `index.php`

4. **Visit https://www.ict-a.com/**

---

## 🔐 After It Works - Set Permissions

### Via cPanel File Manager:

1. **Navigate to home directory** (one level up from public_html)

2. **Go into `ict-a.com` folder**

3. **Right-click on `storage` folder**
   - Select "Change Permissions"
   - Set to `775` (check: Owner: Read+Write+Execute, Group: Read+Write+Execute, World: Read+Execute)
   - Check "Recurse into subdirectories"
   - Click "Change Permissions"

4. **Right-click on `bootstrap/cache` folder**
   - Select "Change Permissions"
   - Set to `775`
   - Check "Recurse into subdirectories"
   - Click "Change Permissions"

---

## 🧪 Final Check

Visit these URLs - all should work:
- ✅ https://www.ict-a.com/ (Home)
- ✅ https://www.ict-a.com/about (About)
- ✅ https://www.ict-a.com/contact (Contact)
- ✅ https://www.ict-a.com/services (Services)
- ✅ https://www.ict-a.com/courses (Courses)

---

## 🐛 Still Having Issues?

### If you see 500 Error:
Check: `/home/username/ict-a.com/storage/logs/laravel.log`

**Common fixes:**
```bash
cd /home/username/ict-a.com
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### If CSS/JS not loading:
- Check files are in `/public_html/css/` and `/public_html/js/`
- Hard refresh browser: **Ctrl + Shift + R**

### If .env error:
Make sure `.env` file exists in `/home/username/ict-a.com/.env`

---

## 📁 Your Current Structure Should Be:

```
/home/username/
│
├── ict-a.com/               ✅ Your Laravel app here
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── vendor/
│   ├── .env                 ✅ Make sure this exists
│   └── storage/             ✅ Must be 775 permissions
│
└── public_html/             ✅ Web root
    ├── .htaccess            ✅ Already there
    ├── index.php            ⚠️  NEEDS THE CODE ABOVE
    ├── css/
    ├── js/
    └── images/
```

---

**That's it! Your website should now work at https://www.ict-a.com/**
