<?php
class Materia {
    private $pdo;

    public $id_materia;
    public $codigo_materia;
    public $nombre_materia;
    public $tota_horas;
    public $horas_teoria;
    public $horas_practica;
    public $descripcion;

    public function __construct() { // Corrección del constructor
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $sql = "SELECT * FROM materias";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id_materia) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM materias WHERE id_materia = ?");
            $stm->execute(array($id_materia));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Materia $data) {
        try {
            $sql = "INSERT INTO materias (codigo_materia, nombre_materia, tota_horas, horas_teoria, horas_practica, descripcion) VALUES (?, ?, ?, ?, ?, ?)";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array(
                    $data->codigo_materia,
                    $data->nombre_materia,
                    $data->tota_horas,
                    $data->horas_teoria,
                    $data->horas_practica,
                    $data->descripcion
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Materia $data) {
        try {
            $sql = "UPDATE materias SET 
                        codigo_materia = ?, 
                        nombre_materia = ?, 
                        tota_horas = ?, 
                        horas_teoria = ?, 
                        horas_practica = ?, 
                        descripcion = ? 
                    WHERE id_materia = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array(
                    $data->codigo_materia,
                    $data->nombre_materia,
                    $data->tota_horas,
                    $data->horas_teoria,
                    $data->horas_practica,
                    $data->descripcion,
                    $data->id_materia
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_materia) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM materias WHERE id_materia = ?");
            $stm->execute(array($id_materia));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>