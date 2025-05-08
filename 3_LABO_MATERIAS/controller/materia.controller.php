<?php
require_once 'model/materia.php';

class MateriaController {
    private $model;

    public function __construct() { // Corrección del constructor
        $this->model = new Materia();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/materia/materia.php';
        require_once 'view/footer.php';
    }

    public function Crud() {
        $mat = new Materia();
        if (isset($_REQUEST['id_materia'])) {
            $mat = $this->model->Obtener($_REQUEST['id_materia']);
        }

        require_once 'view/header.php';
        require_once 'view/materia/materia-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $mat = new Materia();
        $mat->id_materia = $_REQUEST['id_materia-form'];
        $mat->codigo_materia = $_REQUEST['codigo_materia-form'];
        $mat->nombre_materia = $_REQUEST['nombre_materia-form'];
        $mat->tota_horas = $_REQUEST['tota_horas-form'];
        $mat->horas_teoria = $_REQUEST['horas_teoria-form'];
        $mat->horas_practica = $_REQUEST['horas_practica-form'];
        $mat->descripcion = $_REQUEST['descripcion-form'];

        if ($mat->id_materia > 0) {
            $this->model->Actualizar($mat);
        } else {
            $this->model->Registrar($mat);
        }

        header('Location: index.php');
        exit();
    }

    public function Eliminar() {
        if (isset($_REQUEST['id_materia'])) {
            $this->model->Eliminar($_REQUEST['id_materia']);
        }
        header('Location: index.php');
        exit();
    }
}
?>