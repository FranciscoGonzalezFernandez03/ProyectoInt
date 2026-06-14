<?php $titulo = 'Crear problema'; include 'views/header.php'; ?>

<section class="formulario">
    <h1>Crear problema</h1>

    <form method="POST">
        <p>
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" required>
                <option value="" disabled selected>Selecciona un tipo</option>
                <option value="informatico">Informático</option>
                <option value="ergonomico">Ergonómico</option>
            </select>
        </p>
        <p>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>
        </p>
        <p>
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" required>
        </p>
        <p>
            <label for="prioridad">Prioridad</label>
            <select id="prioridad" name="prioridad" required>
                <option value="" disabled selected>Selecciona la prioridad</option>
                <option value="Alta">Alta</option>
                <option value="Media">Media</option>
                <option value="Baja">Baja</option>
            </select>
        </p>
        <p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required>
        </p>
        <p>
            <label for="equipoAfectado">Equipo afectado (solo informático)</label>
            <input type="text" id="equipoAfectado" name="equipoAfectado">
        </p>
        <p>
            <label for="zonaCuerpo">Zona del cuerpo (solo ergonómico)</label>
            <input type="text" id="zonaCuerpo" name="zonaCuerpo">
        </p>

        <button type="submit">Guardar</button>
    </form>
</section>

<?php include 'views/footer.php'; ?>