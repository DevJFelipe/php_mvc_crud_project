<?php
require_once('../config/conexion.php');

class Student extends Conexion {
    public $id;
    public $name;
    public $email;
    public $age;

    public function get($id = '') {
        if ($id != '') {
            $this->query = "SELECT * FROM students WHERE id = '$id'";
            $this->obtener_resultados_query();
            if (count($this->rows) == 1) {
                foreach ($this->rows[0] as $propiedad => $valor) {
                    $this->$propiedad = $valor;
                }
            }
        } else {
            $this->query = "SELECT * FROM students";
            $this->obtener_resultados_query();
        }
        // Devuelve los resultados directamente
        return $this->rows;
    }

    public function set($data = array()) {
        $this->query = "INSERT INTO students (name, email, age) VALUES ('".$data['name']."', '".$data['email']."', '".$data['age']."')";
        $this->ejecutar_query();
    }

    public function edit($data = array()) {
        $this->query = "UPDATE students SET name = '".$data['name']."', email = '".$data['email']."', age = '".$data['age']."' WHERE id = '".$data['id']."'";
        $this->ejecutar_query();
    }

    public function delete($id = '') {
        $this->query = "DELETE FROM students WHERE id = '$id'";
        $this->ejecutar_query();
    }
}
?>
