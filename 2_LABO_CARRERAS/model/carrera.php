<?php
class Carrera {
    private $pdo;

    public $id_carrera;
    public $nombre_carrera;
    public $codigo_carrera;
    public $duracion_semestres;
    public $descripcion;
    public $fecha_creacion;
    public $activa;

    public function __CONSTRUCT(){
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar(){
        try {
            $sql = "SELECT * FROM carreras";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id_carrera){
        try {
            $stm = $this->pdo->prepare("SELECT * FROM carreras WHERE id_carrera = ?");
            $stm->execute([$id_carrera]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Carrera $data){
        try {
            $sql = "INSERT INTO carreras (nombre_carrera, codigo_carrera, duracion_semestres, descripcion, fecha_creacion, activa) VALUES (?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($sql)->execute([
                $data->nombre_carrera,
                $data->codigo_carrera,
                $data->duracion_semestres,
                $data->descripcion,
                $data->fecha_creacion,
                $data->activa
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(Carrera $data){
        try {
            $sql = "UPDATE carreras SET nombre_carrera = ?, codigo_carrera = ?, duracion_semestres = ?, descripcion = ?, fecha_creacion = ?, activa = ? WHERE id_carrera = ?";
            $this->pdo->prepare($sql)->execute([
                $data->nombre_carrera,
                $data->codigo_carrera,
                $data->duracion_semestres,
                $data->descripcion,
                $data->fecha_creacion,
                $data->activa,
                $data->id_carrera
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_carrera){
        try {
            $stm = $this->pdo->prepare("DELETE FROM carreras WHERE id_carrera = ?");
            $stm->execute([$id_carrera]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>
