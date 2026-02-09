<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Citas Médicas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Editar Cita Médica</h1>
        <a href="index.php?action=index" class="btn btn-primary" style="margin-bottom:20px;">← Volver al Listado</a>

        <?php if (isset($error)): ?>
            <div class="error-box"><?= $error ?></div>
        <?php endif; ?>

        <form action="index.php?action=update&id=<?= $cita['id'] ?>" method="POST">
            
            <div class="form-group">
                <label for="paciente">Nombre del Paciente:</label>
                <input type="text" id="paciente" name="paciente" 
                       value="<?= htmlspecialchars($cita['paciente']) ?>" required>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <select name="especialidad" id="especialidad">
                    <option value="General" <?= $cita['especialidad'] == 'General' ? 'selected' : '' ?>>General</option>
                    <option value="Pediatría" <?= $cita['especialidad'] == 'Pediatría' ? 'selected' : '' ?>>Pediatría</option>
                    <option value="Odontología" <?= $cita['especialidad'] == 'Odontología' ? 'selected' : '' ?>>Odontología</option>
                    <option value="Cardiología" <?= $cita['especialidad'] == 'Cardiología' ? 'selected' : '' ?>>Cardiología</option>
                    <option value="Dermatología" <?= $cita['especialidad'] == 'Dermatología' ? 'selected' : '' ?>>Dermatología</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de la Cita:</label>
                <input type="date" id="fecha" name="fecha" 
                       value="<?= $cita['fecha'] ?>" required>
            </div>

            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" 
                       value="<?= $cita['hora'] ?>" required>
            </div>

            <div class="form-group">
                <label for="motivo">Motivo de la consulta:</label>
                <textarea id="motivo" name="motivo" rows="4"><?= htmlspecialchars($cita['motivo']) ?></textarea>
            </div>

            <button type="submit" class="btn btn-success">Actualizar Datos de la Cita</button>
        </form>
    </div>

    <script src="js/validaciones.js"></script>
</body>
</html>