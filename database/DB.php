<?php

class DB {
    private $host = "localhost";
    private $db_name = "gest_ets_ibno_sehli";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection(): PDO{
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Erreur de connexion: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>