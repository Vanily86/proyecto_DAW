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
        <h1>Nueva Cita</h1>
        <a href="index.php" class="btn btn-primary">← Volver</a>
        <form action="index.php?action=store" method="POST">
            <div class="form-group">
                <label>Paciente:</label>
                <input type="text" name="paciente" id="paciente" required>
            </div>
            <div class="form-group">
                <label>Especialidad:</label>
                <select name="especialidad">
                    <option value="General">General</option>
                    <option value="Pediatría">Pediatría</option>
                    <option value="Odontología">Odontología</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fecha:</label>
                <input type="date" name="fecha" id="fecha" required>
            </div>
            <div class="form-group">
                <label>Hora:</label>
                <input type="time" name="hora" required>
            </div>
            <div class="form-group">
                <label>Motivo:</label>
                <textarea name="motivo"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Guardar Cita</button>
        </form>
    </div>
    <script src="js/validaciones.js"></script>
</body>