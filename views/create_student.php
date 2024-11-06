<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Estudiante</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Crear Nuevo Estudiante</h1>
    <form action="store_student.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="age">Edad:</label>
        <input type="number" name="age" required>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
