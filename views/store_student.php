<?php
require_once('../controllers/StudentController.php');

// Verificar si se recibieron los datos del formulario
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {
    // Obtener los datos del formulario
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'age' => $_POST['age']
    ];

    // Crear instancia del controlador y guardar el nuevo estudiante
    $controller = new StudentController();
    $controller->createStudent($data);

    // Redireccionar a la lista de estudiantes después de guardar
    header("Location: list_students.php");
    exit();
} else {
    echo "Faltan datos para crear el estudiante.";
}
