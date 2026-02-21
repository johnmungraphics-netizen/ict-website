<?php
// Asset Test Page - Diagnose static file loading issues
?>
<!DOCTYPE html>
<html>
<head>
    <title>Asset Loading Diagnostic</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .success { color: green; }
        .error { color: red; }
        .info { background: #f0f0f0; padding: 10px; margin: 10px 0; }
        pre { background: #000; color: #0f0; padding: 10px; }
    </style>
</head>
<body>
    <h1>Asset Loading Diagnostic</h1>
    
    <h2>1. Server Environment</h2>
    <div class="info">
        <strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?><br>
        <strong>Script Filename:</strong> <?php echo $_SERVER['SCRIPT_FILENAME']; ?><br>
        <strong>Current Directory:</strong> <?php echo __DIR__; ?><br>
        <strong>Base Path:</strong> <?php echo dirname(__DIR__); ?><br>
    </div>
    
    <h2>2. Public Folder Check</h2>
    <div class="info">
        <?php
        $publicPath = __DIR__ . '/public';
        echo "<strong>Public Path:</strong> $publicPath<br>";
        echo "<strong>Exists:</strong> " . (is_dir($publicPath) ? '<span class="success">YES</span>' : '<span class="error">NO</span>') . "<br>";
        
        if (is_dir($publicPath)) {
            echo "<strong>Contents:</strong><br>";
            $contents = scandir($publicPath);
            echo "<ul>";
            foreach ($contents as $item) {
                if ($item != '.' && $item != '..') {
                    $itemPath = $publicPath . '/' . $item;
                    $type = is_dir($itemPath) ? '[DIR]' : '[FILE]';
                    echo "<li>$type $item</li>";
                }
            }
            echo "</ul>";
        }
        ?>
    </div>
    
    <h2>3. Test Asset Paths</h2>
    <div class="info">
        <?php
        $testPaths = [
            '/css/plugins/animate.min.css',
            '/css/theme/nice-select.css',
            '/images/theme/logo.png',
            '/js/vendor/jquery-3.6.0.min.js',
            'public/css/plugins/animate.min.css',
            'public/images/theme/logo.png',
        ];
        
        foreach ($testPaths as $path) {
            $fullPath = __DIR__ . '/' . $path;
            $exists = file_exists($fullPath);
            $status = $exists ? '<span class="success">✓ EXISTS</span>' : '<span class="error">✗ NOT FOUND</span>';
            echo "<strong>$path:</strong> $status<br>";
            if ($exists) {
                echo "&nbsp;&nbsp;→ Real path: " . realpath($fullPath) . "<br>";
            }
        }
        ?>
    </div>
    
    <h2>4. URL Generation Test</h2>
    <div class="info">
        <?php
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $protocol . '://' . $host;
        
        echo "<strong>Base URL:</strong> $baseUrl<br>";
        echo "<strong>Sample Asset URLs:</strong><br>";
        echo "&nbsp;&nbsp;CSS: $baseUrl/css/theme/style.css<br>";
        echo "&nbsp;&nbsp;Image: $baseUrl/images/theme/logo.png<br>";
        echo "&nbsp;&nbsp;JS: $baseUrl/js/theme/main.js<br>";
        ?>
    </div>
    
    <h2>5. Test Direct Access</h2>
    <div class="info">
        <p>Try accessing these URLs directly in your browser:</p>
        <ul>
            <li><a href="/css/plugins/animate.min.css" target="_blank">/css/plugins/animate.min.css</a></li>
            <li><a href="/images/theme/logo.png" target="_blank">/images/theme/logo.png</a></li>
            <li><a href="/js/vendor/jquery-3.6.0.min.js" target="_blank">/js/vendor/jquery-3.6.0.min.js</a></li>
            <li><a href="public/css/plugins/animate.min.css" target="_blank">public/css/plugins/animate.min.css</a></li>
            <li><a href="public/images/theme/logo.png" target="_blank">public/images/theme/logo.png</a></li>
        </ul>
    </div>
    
    <h2>6. .htaccess Check</h2>
    <div class="info">
        <?php
        $htaccessPath = __DIR__ . '/.htaccess';
        echo "<strong>.htaccess exists:</strong> " . (file_exists($htaccessPath) ? '<span class="success">YES</span>' : '<span class="error">NO</span>') . "<br>";
        
        if (file_exists($htaccessPath)) {
            echo "<strong>Content:</strong><br>";
            echo "<pre>" . htmlspecialchars(file_get_contents($htaccessPath)) . "</pre>";
        }
        ?>
    </div>
    
    <h2>7. Request Info</h2>
    <div class="info">
        <strong>All Server Variables:</strong><br>
        <pre><?php print_r($_SERVER); ?></pre>
    </div>
</body>
</html>
