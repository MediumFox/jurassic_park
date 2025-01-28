<?php

use FastRoute\RouteCollector;
use FastRoute\Dispatcher;

// Chargement de l'autoloader si présent
if (file_exists("../vendor/autoload.php")) {
    require_once "../vendor/autoload.php";
}

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    // $r->addRoute(['GET', 'POST'], '/', 'getUsers');
});

// Récupération de la méthode HTTP et de l'URI
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Suppression des paramètres de requête (ex: ?foo=bar)
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo 'Erreur 404 - Page non trouvée';
        break;

    case Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo 'Erreur 405 - Méthode non autorisée';
        break;

    case Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if (is_callable($handler)) {
            call_user_func_array($handler, [$vars]);
        } else {
            echo "Erreur interne : Handler non valide";
        }
        break;
}
?>
