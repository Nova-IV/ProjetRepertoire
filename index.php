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
        <?php 
        function routes(){
                    $page = isset($_GET['page']) ? $_GET['page'] : 'default'; // Par défaut, 'default.php'
        $page = basename($page); // Sécurise la variable pour éviter des inclusions non désirées
        $filePath = __DIR__ . '/pages/' . $page . '.php';

        if (file_exists($filePath)) {
            include_once $filePath;
        } else {
            echo "<p>La page demandée n'existe pas.</p>";
        }
        }
        routes();
        ?>
    </main>

    <footer>
        <p>&copy; - PHP - 2025</p>
    </footer>
    
</body>
</html>