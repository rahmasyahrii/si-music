<?php
class album
{
    private $db;
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbgaleri", "root", "");
        } catch (PDOException $e) {
            die("Error " . $e->getMessage());
        }
    }

    public function tampil()
    {
        $sql = "SELECT * FROM album";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }
}