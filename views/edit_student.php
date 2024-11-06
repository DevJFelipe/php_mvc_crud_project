<?php
require_once('../controllers/StudentController.php');

// Verificar si se recibió un ID en la URL
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID de estudiante no proporcionado");
}

// Instanciar el controlador y obtener los datos del estudiante
$controller = new StudentController();
$student = $controller->getStudentById($id);

if (!$student) {
    die("Estudiante no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Estudiante</h1>
        <form action="../controllers/update_student.php" method="post">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?php echo $student['name']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $student['email']; ?>" required>
            <label for="age">Edad:</label>
            <input type="number" name="age" value="<?php echo $student['age']; ?>" required>
            <button type="submit" class="button">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
