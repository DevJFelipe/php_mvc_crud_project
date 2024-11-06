<?php
require_once('../controllers/StudentController.php');

// Verificar si se recibió el ID del estudiante a eliminar
$id = $_GET['id'] ?? null;

if ($id) {
    // Crear instancia del controlador y eliminar el estudiante
    $controller = new StudentController();
    $controller->deleteStudent($id);

    // Redireccionar a la lista de estudiantes después de eliminar
    header("Location: ../views/list_students.php");
    exit();
} else {
    echo "ID de estudiante no proporcionado.";
}
?>
