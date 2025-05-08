<?php
require_once 'model/docente.php';

class DocenteController {
    private $model;

    public function __CONSTRUCT() {
        $this->model = new Docente();
    }

    public function Index() {
        require_once 'view/header.php';
        require_once 'view/docente/docente.php';
        require_once 'view/footer.php';
    }

    public function Crud() {
        $docente = new Docente();
        if(isset($_REQUEST['id_docente'])){
            $docente = $this->model->Obtener($_REQUEST['id_docente']);
        }

        require_once 'view/header.php';
        require_once 'view/docente/docente-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar() {
        $docente = new Docente();
        $docente->id_docente = $_REQUEST['id_docente'];
        $docente->cedula = $_REQUEST['cedula'];
        $docente->nombres = $_REQUEST['nombres'];
        $docente->apellidos = $_REQUEST['apellidos'];
        $docente->titulo_academico = $_REQUEST['titulo_academico'];
        $docente->especialidad = $_REQUEST['especialidad'];
        $docente->telefono = $_REQUEST['telefono'];
        $docente->email = $_REQUEST['email'];
        $docente->fecha_contratacion = $_REQUEST['fecha_contratacion'];
        $docente->activo = isset($_REQUEST['activo']) ? 1 : 0;

        if ($docente->id_docente > 0) {
            $this->model->Actualizar($docente);
        } else {
            $this->model->Registrar($docente);
        }
    
        header('Location: index.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id_docente']);
        header('Location: index.php');
    }
}
?>
