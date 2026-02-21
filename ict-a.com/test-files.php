<?php
// Quick File Structure Check
echo "<h2>Checking actual file paths:</h2>";

$testFiles = [
    '/home2/ictaco/ict-a.com/public/css/theme/bootstrap.min4d80.css',
    '/home2/ictaco/ict-a.com/public/css/theme/style.css',
    '/home2/ictaco/ict-a.com/public/images/theme/logo.png',
    '/home2/ictaco/ict-a.com/public/js/vendor/jquery.minf43b.js',
];

foreach ($testFiles as $file) {
    $exists = file_exists($file);
    echo ($exists ? '✓' : '✗') . " $file<br>";
}

echo "<hr>";
echo "<h2>Testing RewriteCond logic:</h2>";

// Simulate what the .htaccess is checking
$requestUri = '/css/theme/style.css';
$check1 = 'public' . $requestUri; // What current .htaccess checks
$check2 = $_SERVER['DOCUMENT_ROOT'] . '/public' . $requestUri; // What it should check

echo "Request URI: $requestUri<br>";
echo "Current check: $check1 → " . (file_exists($check1) ? '✓ EXISTS' : '✗ NOT FOUND') . "<br>";
echo "Correct check: $check2 → " . (file_exists($check2) ? '✓ EXISTS' : '✗ NOT FOUND') . "<br>";
