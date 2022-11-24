<?php

namespace Src;

class Category {

    public $servername = "localhost";
    public $username = "root";
    public $db_password = "";
    public $dbname = "e-pharmacy";
    public $conn;

    function __construct() {
        try {
            $this->conn = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->db_password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }    
    }

    function category_get_all() {
        $stmt = $this->conn->prepare("SELECT * FROM categories");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    function category_get_one($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("SELECT * FROM categories WHERE id=$id");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    function category_store_one($data) {
        $name = $data["name"];
        $stmt = $this->conn->prepare("INSERT INTO categories (name) VALUES ('$name')");
        $stmt->execute();
    }

    function category_update_one($data, $getID) {
        $id = $getID;
        $name = $data["name"];
        $stmt = $this->conn->prepare("UPDATE categories SET name='$name' WHERE id=$id");
        $stmt->execute();
    }

    function category_delete_one($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id='$id'");
        $stmt->execute();
    }

}