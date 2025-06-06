<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('protected.php');

$nome = $_SESSION['usuario_nome'] ?? $_SESSION['empresa_nome'] ?? 'Nome não disponível';
$email = $_SESSION['usuario_email'] ?? $_SESSION['empresa_email'] ?? 'E-mail não disponível';



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esporte Town</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white pb-5">

    <div class="profile-section">
        
        <div class="profile-text">
            
            <strong><?= htmlspecialchars($nome) ?></strong><br>
               
            <small><?= htmlspecialchars($email) ?></small>
        </div>
    </div>

    <div style="height: 5px; background-color: #ccc; margin: 10px 0;"></div>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagens/Zenir.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Imagens/Zenir.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Imagens/Zenir.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

    <div class="container">
        <div class="event-card d-flex align-items-center">
            <img src="Imagens/futebol.png" class="me-3" alt="Futebol">
            <div>
                <strong>Futebol</strong><br>
                <small>localização</small>
            </div>
        </div>
        <div class="event-card d-flex align-items-center">
            <img src="Imagens/basquete.png" class="me-3" alt="Evento 1">
            <div>
                <strong>Basquuete</strong><br>
                <small>localização</small>
            </div>
        </div>
        <div class="event-card d-flex align-items-center">
            <img src="Imagens/tenis de mesa.png" class="me-3" alt="Evento 2">
            <div>
                <strong>Tênis de mesa</strong><br>
                <small>localização</small>
            </div>
        </div>
        <div class="event-card d-flex align-items-center">
            <img src="Imagens/vôlei.png" class="me-3" alt="Evento 3">
            <div>
                <strong>Vôlei</strong><br>
                <small>localização</small>
            </div>
        </div>
<div class="barra">
    <nav class="bottom-nav d-flex justify-content-around py-2">
        <a href="#" class="nav-link text-center">
            <div>
              <img src="Imagens/home.png" alt="">
            </div>
            <small>Home</small>
        </a>
        <a href="#" class="nav-link text-center">
            <div>🔍</div>
            <small>Pesquisar</small>
        </a>
        <a href="#" class="nav-link text-center">
            <div>
              <img src="Imagens/configuraçoes.png" alt="">
            </div>
            <small>Ajustes</small>
        </a>
    </nav>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
