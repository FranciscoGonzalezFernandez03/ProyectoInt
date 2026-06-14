<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo . ' · GestiónLaboral' : 'GestiónLaboral' ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
 
<header class="site-header">
    <img src="img/logo1.png" alt="Logo de GestiónLaboral" class="logo">
    <div class="header-inner">
        <a href="index.php" class="site-logo">⚙ GestiónLaboral</a>
 
        <nav class="site-nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="https://youtu.be/ID_DEL_VIDEO" target="_blank" rel="noopener">Ver demo</a></li>
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li>Hola, <strong><?= $_SESSION['usuarioEmail'] ?></strong></li>
                    <li><a href="index.php?accion=logout" class="nav-btn">Cerrar sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
 
<main class="site-main">