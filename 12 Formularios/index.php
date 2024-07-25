<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Validacion de Formularios PHP</h1>
    <form method="get" action="procesa.php">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name">
        <select name="ocupacion" id="ocupacion">
            <option value="Ing_Informatico">Ingeniero Informatico</option>
            <option value="Doctor">Doctor</option>
            <option value="Administrador">Administrador</option>
        </select>
        <input type="radio" name="sex" value="Hombre" id="hombre">
        <label for="hombre">Hombre</label>
        
        <input type="radio" name="sex" value="Mujer" id="mujer">
        <label for="mujer">Mujer</label>
        <input type="submit">
        <?php for($i = 0; $i <= 4; $i++): ?>
            <h4>Hijo <?php echo $i+1; ?></h4>
            <input type="text" name="hijos[<?php echo $i; ?>][Nombre]">
            <input type="text" name="hijos[<?php echo $i; ?>][edad]">
        <?php endfor; ?>
    </form>
</body>
</html>