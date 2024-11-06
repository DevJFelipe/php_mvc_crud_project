<?php
require_once('../controllers/StudentController.php');

// Verificar si se recibieron los datos necesarios
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {
    // Obtener datos del formulario
    $data = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'age' => $_POST['age']
    ];

    // Crear instancia del controlador y actualizar el estudiante
    $controller = new StudentController();
    $controller->updateStudent($data);

    // Redireccionar a la lista de estudiantes
    header("Location: ../views/list_students.php");
    exit();
} else {
    echo "Datos incompletos para actualizar el estudiante.";
}
?>
