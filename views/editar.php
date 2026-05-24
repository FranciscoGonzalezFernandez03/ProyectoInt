<!DOCTYPE html>
<html>
<head>
    <title>Editar Problema</title>
</head>
<body>
    <h1>Editar Problema</h1>

    <form method="POST">
        Título:<br>
        <input type="text" name="titulo" value="<?= $problema->getTitulo() ?>" required><br><br>

        Descripción:<br>
        <input type="text" name="descripcion" value="<?= $problema->getDescripcion() ?>" required><br><br>

        Prioridad:<br>
        <input type="text" name="prioridad" value="<?= $problema->getPrioridad() ?>" required><br><br>

        Fecha:<br>
        <input type="date" name="fecha" value="<?= $problema->getFecha() ?>" required><br><br>

        <?php if ($problema instanceof informatico): ?>
            Equipo Afectado:<br>
            <input type="text" name="equipoAfectado" value="<?= $problema->getEquipoAfectado() ?>" required><br><br>
        <?php endif; ?>

        <?php if ($problema instanceof ergonomicos): ?>
            Zona del Cuerpo:<br>
            <input type="text" name="zonaCuerpo" value="<?= $problema->getZonaCuerpo() ?>" required><br><br>
        <?php endif; ?>

        <button type="submit">Actualizar Problema</button>
    </form>

    <br>
    <a href="index.php">Volver al listado</a>
</body>
</html>