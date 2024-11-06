<?php
require_once('../controllers/StudentController.php');

$controller = new StudentController();
$students = $controller->listStudents();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <a href="create_student.php">Agregar Nuevo Estudiante</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td>
                <a href="edit_student.php?id=<?php echo $student['id']; ?>" class="button edit">Editar</a>
                <a href="../controllers/delete_student.php?id=<?php echo $student['id']; ?>" class="button delete">Eliminar</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
