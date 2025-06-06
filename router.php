<?php
require_once 'controllers/Controller.php';

$controller = new Controller();

$rota = $_GET['rota'] ?? 'listar'; // Se não tiver definida, define com a rota padrão

// Processa requisições POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($rota == 'cadastrar') {
        $controller->cadastrar();
    }elseif ($rota == 'empresa') {
        $controller->empresa();
    }
    exit;
}

// Processa requisições GET
switch($rota) {
    case 'cadastrar':
        require_once 'cadastrar.php';
        break;
    case 'empresa':
        require_once 'empresa.php';
        break;
}
?>
