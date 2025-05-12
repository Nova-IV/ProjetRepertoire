<?php 
    class Route{
        static function routes(){
            $routes = ['home', 'about', 'contact'];

           # la page demandée, sinon afficher 'accueil' par défaut
            $page = $_GET['page'] ?? 'home';

            # la page demandée existe dans notre tableau
            if (!in_array($page, $routes)) {
                $page = 'home'; # Sécurité : éviter une inclusion de fichier non autorisée
            }

            $page_path = "./pages/$page.php";

            if (!file_exists($page_path)) {
                die("Erreur : La page demandée n'existe pas.");
            }
            return $page;
        }
    }
    $page = Route::routes();
