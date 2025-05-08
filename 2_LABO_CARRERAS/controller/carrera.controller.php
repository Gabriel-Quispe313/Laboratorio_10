<?php
require_once 'model/carrera.php';

class CarreraController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new Carrera();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/carrera/carrera.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $car = new Carrera();
        if(isset($_REQUEST['id_carrera'])){
            $car = $this->model->Obtener($_REQUEST['id_carrera']);
        }

        require_once 'view/header.php';
        require_once 'view/carrera/carrera-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $car = new Carrera();
        $car->id_carrera = $_REQUEST['id_carrera'];
        $car->nombre_carrera = $_REQUEST['nombre_carrera'];
        $car->codigo_carrera = $_REQUEST['codigo_carrera'];
        $car->duracion_semestres = $_REQUEST['duracion_semestres'];
        $car->descripcion = $_REQUEST['descripcion'];
        $car->fecha_creacion = $_REQUEST['fecha_creacion'];
        $car->activa = isset($_REQUEST['activa']) ? 1 : 0;

        if ($car->id_carrera > 0) {
            $this->model->Actualizar($car);
        } else {
            $this->model->Registrar($car);
        }
        
        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_carrera']);
        header('Location: index.php');
    }
}
?>
