<?php
class Database {
    public static function StartUp(){
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=carreras_MVC; charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>
