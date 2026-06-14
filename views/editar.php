<?php $titulo = 'Editar problema'; include 'views/header.php'; ?>

<section class="formulario">
    <h1>Editar problema</h1>

    <form method="POST">
        <p>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="<?= $problema->getTitulo() ?>" required>
        </p>
        <p>
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="<?= $problema->getDescripcion() ?>" required>
        </p>
        <p>
            <label for="prioridad">Prioridad</label>
            <select id="prioridad" name="prioridad" required>
                <option value="" disabled>Selecciona la prioridad</option>
                <option value="Alta"  <?= $problema->getPrioridad() == 'Alta'  ? 'selected' : '' ?>>Alta</option>
                <option value="Media" <?= $problema->getPrioridad() == 'Media' ? 'selected' : '' ?>>Media</option>
                <option value="Baja"  <?= $problema->getPrioridad() == 'Baja'  ? 'selected' : '' ?>>Baja</option>
            </select>
        </p>
        <p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="<?= $problema->getFecha() ?>" required>
        </p>

        <?php if ($problema instanceof informatico): ?>
        <p>
            <label for="equipoAfectado">Equipo afectado</label>
            <input type="text" id="equipoAfectado" name="equipoAfectado" value="<?= $problema->getEquipoAfectado() ?>" required>
        </p>
        <?php endif; ?>

        <?php if ($problema instanceof ergonomico): ?>
        <p>
            <label for="zonaCuerpo">Zona del cuerpo</label>
            <input type="text" id="zonaCuerpo" name="zonaCuerpo" value="<?= $problema->getZonaCuerpo() ?>" required>
        </p>
        <?php endif; ?>

        <button type="submit">Actualizar problema</button>
    </form>
</section>

<?php include 'views/footer.php'; ?>