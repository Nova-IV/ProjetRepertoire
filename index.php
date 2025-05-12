<?php
    include_once __DIR__ . '/controller/BaseController.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les routes</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
        include_once __DIR__ . '/routes/route.php';
    ?>

    <main>
        <?php include_once __DIR__ . '/pages/$page.php'; ?>
    </main>

    <footer>
        <p>&copy; - PHP - 2025</p>
    </footer>
    
</body>
</html>