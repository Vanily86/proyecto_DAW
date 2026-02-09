<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Producto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .error { color: white; background-color: #dc3545; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; margin-top: 20px; }
        button:hover { background-color: #218838; }
        .volver { display: inline-block; margin-bottom: 15px; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

    <h1>Agregar Nuevo Producto</h1>
    <a href="index.php?controller=producto&action=index" class="volver">← Volver al listado</a>

    <?php if (!empty($errores)): ?>
        <div class="error">
            <strong>Por favor, corrige los siguientes errores:</strong>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="index.php?controller=producto&action=store" method="POST">
        
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" 
               value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4"><?php echo isset($descripcion) ? htmlspecialchars($descripcion) : ''; ?></textarea>

        <label for="precio">Precio (ej: 19.99):</label>
        <input type="number" id="precio" name="precio" step="0.01" 
               value="<?php echo isset($precio) ? $precio : ''; ?>" required>

        <label for="stock">Stock inicial:</label>
        <input type="number" id="stock" name="stock" 
               value="<?php echo isset($stock) ? $stock : ''; ?>" required>

        <button type="submit">Guardar Producto</button>
    </form>

</body>
</html>