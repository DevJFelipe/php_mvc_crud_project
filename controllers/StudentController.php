<?php
require_once('../models/Student.php');

class StudentController {
    public function listStudents() {
        $student = new Student();
        return $student->get();  // Devuelve los datos directamente desde 'get()'
    }

    public function createStudent($data) {
        $student = new Student();
        $student->set($data);
    }

    public function updateStudent($data) {
        $student = new Student();
        $student->edit($data);
    }

    public function deleteStudent($id) {
        $student = new Student();
        $student->delete($id);
    }

    public function getStudentById($id) {
        $student = new Student();
        $result = $student->get($id);  // Aquí obtenemos directamente los datos
        return count($result) ? $result[0] : null;
    }
    
    
}
?>
