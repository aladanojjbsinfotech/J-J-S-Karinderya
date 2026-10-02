<?php
// Get the absolute path to the views directory
$viewsDir = realpath(__DIR__ . '/../resources/views');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&J's Karinderya - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
    // Load navbar partial if it exists
    if ($viewsDir && file_exists($viewsDir . '/partials/navbar.blade.php')) {
        include $viewsDir . '/partials/navbar.blade.php';
    } 
    ?>

    <main>
        <?php 
        // Load main landing page view
        if ($viewsDir && file_exists($viewsDir . '/landing.blade.php')) {
            include $viewsDir . '/landing.blade.php';
        } 
        ?>
    </main>

    <?php 
    // Load footer partial
    if ($viewsDir && file_exists($viewsDir . '/partials/footer.blade.php')) {
        include $viewsDir . '/partials/footer.blade.php';
    } 
    ?>

    <script src="js/app.js" defer></script>
</body>
</html>