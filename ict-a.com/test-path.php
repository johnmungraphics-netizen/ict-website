<?php
// Test file to debug the 404 issue
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Path Testing</h1>";

// Test 1: Check current directory
echo "<h2>Current Directory:</h2>";
echo "<pre>" . __DIR__ . "</pre>";

// Test 2: Check parent directory
echo "<h2>Parent Directory Contents:</h2>";
$parent = dirname(__DIR__);
echo "<pre>";
if (is_dir($parent)) {
    $folders = scandir($parent);
    foreach ($folders as $folder) {
        if ($folder != '.' && $folder != '..') {
            echo $folder;
            if (is_dir($parent . '/' . $folder)) {
                echo " [DIRECTORY]";
            }
            echo "\n";
        }
    }
} else {
    echo "Cannot read parent directory";
}
echo "</pre>";

// Test 3: Check for Laravel folder
echo "<h2>Looking for Laravel Application:</h2>";
$possible_paths = [
    '../ict-a.com',
    '../eduvalt-laravel',
    '../ict-a.com-laravel',
    '../laravel',
];

foreach ($possible_paths as $path) {
    $full_path = __DIR__ . '/' . $path;
    echo "<strong>$path</strong>: ";
    if (file_exists($full_path)) {
        echo "✓ EXISTS ";
        if (file_exists($full_path . '/vendor/autoload.php')) {
            echo "| vendor/autoload.php ✓ FOUND";
        } else {
            echo "| vendor/autoload.php ✗ NOT FOUND";
        }
        if (file_exists($full_path . '/bootstrap/app.php')) {
            echo " | bootstrap/app.php ✓ FOUND";
        } else {
            echo " | bootstrap/app.php ✗ NOT FOUND";
        }
    } else {
        echo "✗ NOT FOUND";
    }
    echo "<br>";
}

// Test 4: Try to load Laravel
echo "<h2>Attempting to Load Laravel:</h2>";
$laravel_path = __DIR__.'/../ict-a.com';
if (file_exists($laravel_path . '/vendor/autoload.php')) {
    try {
        require $laravel_path . '/vendor/autoload.php';
        echo "✓ Autoload successful<br>";
        
        if (file_exists($laravel_path . '/bootstrap/app.php')) {
            $app = require_once $laravel_path . '/bootstrap/app.php';
            echo "✓ Bootstrap successful<br>";
            echo "App is: " . get_class($app) . "<br>";
        } else {
            echo "✗ bootstrap/app.php not found<br>";
        }
    } catch (Exception $e) {
        echo "✗ Error loading Laravel:<br>";
        echo "<pre>" . $e->getMessage() . "</pre>";
    }
} else {
    echo "✗ Vendor autoload not found at: " . $laravel_path . '/vendor/autoload.php';
}

echo "<hr>";
echo "<p><strong>Instructions:</strong> Once you've identified the correct path, delete this test file for security.</p>";
