#!/bin/bash
# Laravel Production Deployment Script for cPanel
# This script helps automate deployment tasks on the server
# Run this via cPanel Terminal after uploading files

echo "========================================="
echo "Laravel cPanel Deployment Script"
echo "Website: ict-a.com"
echo "========================================="
echo ""

# Get username (will auto-detect in cPanel)
CURRENT_DIR=$(pwd)
USERNAME=$(echo $CURRENT_DIR | cut -d'/' -f3)
LARAVEL_PATH="/home/$USERNAME/laravel"

echo "Detected Username: $USERNAME"
echo "Laravel Path: $LARAVEL_PATH"
echo ""

# Check if Laravel directory exists
if [ ! -d "$LARAVEL_PATH" ]; then
    echo "❌ Error: Laravel directory not found at $LARAVEL_PATH"
    echo "Please create the directory and upload your files first."
    exit 1
fi

echo "✓ Laravel directory found"
echo ""

# Navigate to Laravel directory
cd $LARAVEL_PATH

echo "========================================="
echo "Step 1: Setting Correct Permissions"
echo "========================================="

# Set storage permissions
if [ -d "storage" ]; then
    chmod -R 775 storage
    echo "✓ Storage permissions set to 775"
else
    echo "❌ Warning: storage directory not found"
fi

# Set bootstrap/cache permissions
if [ -d "bootstrap/cache" ]; then
    chmod -R 775 bootstrap/cache
    echo "✓ Bootstrap cache permissions set to 775"
else
    echo "❌ Warning: bootstrap/cache directory not found"
fi

# Set SQLite database permissions if exists
if [ -f "database/database.sqlite" ]; then
    chmod 664 database/database.sqlite
    chmod 775 database
    echo "✓ SQLite database permissions set"
else
    echo "ℹ SQLite database file not found (will be created if needed)"
fi

echo ""
echo "========================================="
echo "Step 2: Installing Composer Dependencies"
echo "========================================="

# Check if composer is available
if command -v composer &> /dev/null; then
    echo "✓ Composer found, installing dependencies..."
    composer install --optimize-autoloader --no-dev
elif [ -f "composer.phar" ]; then
    echo "✓ Using local composer.phar..."
    php composer.phar install --optimize-autoloader --no-dev
else
    echo "⚠ Composer not found. Downloading composer..."
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    php composer.phar install --optimize-autoloader --no-dev
fi

echo ""
echo "========================================="
echo "Step 3: Clearing Laravel Caches"
echo "========================================="

php artisan config:clear
echo "✓ Config cache cleared"

php artisan cache:clear
echo "✓ Application cache cleared"

php artisan route:clear
echo "✓ Route cache cleared"

php artisan view:clear
echo "✓ View cache cleared"

echo ""
echo "========================================="
echo "Step 4: Optimizing for Production"
echo "========================================="

php artisan config:cache
echo "✓ Config cached"

php artisan route:cache
echo "✓ Routes cached"

php artisan view:cache
echo "✓ Views cached"

echo ""
echo "========================================="
echo "Step 5: Creating Storage Link"
echo "========================================="

if [ -d "public/storage" ]; then
    echo "ℹ Storage link already exists"
else
    php artisan storage:link
    echo "✓ Storage link created"
fi

echo ""
echo "========================================="
echo "Step 6: Environment Check"
echo "========================================="

if [ -f ".env" ]; then
    echo "✓ .env file found"
    
    # Check critical .env settings
    if grep -q "APP_ENV=production" .env; then
        echo "✓ APP_ENV is set to production"
    else
        echo "⚠ WARNING: APP_ENV is not set to production!"
    fi
    
    if grep -q "APP_DEBUG=false" .env; then
        echo "✓ APP_DEBUG is set to false"
    else
        echo "⚠ WARNING: APP_DEBUG is not set to false!"
    fi
    
    if grep -q "APP_URL=https://www.ict-a.com" .env; then
        echo "✓ APP_URL is correctly set"
    else
        echo "⚠ WARNING: APP_URL might need updating"
    fi
else
    echo "❌ ERROR: .env file not found!"
    echo "Please create .env file from .env.production template"
fi

echo ""
echo "========================================="
echo "Step 7: Laravel Version Info"
echo "========================================="

php artisan --version
php -v | head -n 1

echo ""
echo "========================================="
echo "Step 8: Database Check"
echo "========================================="

# Check if using SQLite
if grep -q "DB_CONNECTION=sqlite" .env 2>/dev/null; then
    echo "Database Type: SQLite"
    
    # Get database path from .env
    DB_PATH=$(grep "DB_DATABASE=" .env | cut -d'=' -f2)
    
    if [ -f "$DB_PATH" ]; then
        echo "✓ SQLite database file found at: $DB_PATH"
        DB_SIZE=$(du -h "$DB_PATH" | cut -f1)
        echo "  Database size: $DB_SIZE"
    else
        echo "⚠ SQLite database file not found"
        echo "  Creating database file..."
        
        # Create database directory if doesn't exist
        mkdir -p database
        touch database/database.sqlite
        chmod 664 database/database.sqlite
        chmod 775 database
        
        echo "✓ Database file created at: database/database.sqlite"
        echo "  You may need to run: php artisan migrate --force"
    fi
elif grep -q "DB_CONNECTION=mysql" .env 2>/dev/null; then
    echo "Database Type: MySQL"
    DB_NAME=$(grep "DB_DATABASE=" .env | cut -d'=' -f2)
    echo "  Database Name: $DB_NAME"
    echo "  ℹ Ensure database exists and credentials are correct"
else
    echo "⚠ Database connection not configured in .env"
fi

echo ""
echo "========================================="
echo "Step 9: Disk Space Check"
echo "========================================="

df -h . | tail -n 1 | awk '{print "Used: "$3" / "$2" ("$5")"}'

echo ""
echo "========================================="
echo "Step 10: File Permissions Summary"
echo "========================================="

if [ -d "storage" ]; then
    STORAGE_PERM=$(stat -c "%a" storage)
    echo "storage/           : $STORAGE_PERM (should be 775)"
fi

if [ -d "bootstrap/cache" ]; then
    CACHE_PERM=$(stat -c "%a" bootstrap/cache)
    echo "bootstrap/cache/   : $CACHE_PERM (should be 775)"
fi

if [ -f ".env" ]; then
    ENV_PERM=$(stat -c "%a" .env)
    echo ".env               : $ENV_PERM (should be 644)"
fi

echo ""
echo "========================================="
echo "DEPLOYMENT SUMMARY"
echo "========================================="
echo ""
echo "✅ Deployment script completed!"
echo ""
echo "Next Steps:"
echo "1. Visit https://www.ict-a.com/ to test your website"
echo "2. Test all pages and functionality"
echo "3. Check error logs if issues occur:"
echo "   $LARAVEL_PATH/storage/logs/laravel.log"
echo ""
echo "Useful commands:"
echo "  Clear all caches:  php artisan optimize:clear"
echo "  View error log:    tail -n 50 storage/logs/laravel.log"
echo "  Run migrations:    php artisan migrate --force"
echo ""
echo "========================================="
echo "Deployment Date: $(date)"
echo "========================================="
