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
    <div class="header-inner">
        <a href="index.php" class="site-logo">⚙ GestiónLaboral</a>
 
        <nav class="site-nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>

 
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li>Hola, <strong><?= $_SESSION['usuarioEmail'] ?></strong></li>
                    <li><a href="index.php?accion=logout" class="nav-btn">Cerrar sesión</a></li>
                <?php else: ?>
                    <li><a href="index.php?accion=login" class="nav-btn">Iniciar sesión</a></li>
                    <li><a href="index.php?accion=alta" class="nav-btn nav-btn--registro">Registrarse</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
 
<main class="site-main">