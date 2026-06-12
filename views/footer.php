Footer · PHP
</main>
 
<footer class="site-footer">
    <div class="footer-inner">
        <p class="footer-copy">
            &copy; <?= date('Y') ?> GestiónLaboral &mdash; Proyecto Intermodular DAW
        </p>
        <nav class="footer-nav" aria-label="Navegación secundaria">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=crear">Agregar problema</a></li>
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li><a href="index.php?accion=logout">Cerrar sesión</a></li>
                <?php else: ?>
                    <li><a href="index.php?accion=login">Iniciar sesión</a></li>
                    <li><a href="index.php?accion=alta">Registrarse</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</footer>
 
</body>
</html>
 