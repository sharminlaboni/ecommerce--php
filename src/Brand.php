<?php

namespace Src;

class Brand {

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

    function brand_get_all() {
        $stmt = $this->conn->prepare("SELECT * FROM brands");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


    function brand_get_one($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("SELECT * FROM brands WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    function brand_store_user($data) {
        $name = $data["name"];
       
        
        $stmt = $this->conn->prepare("INSERT INTO products (name, email, phone, address) VALUES ('$name',)");
        $stmt->execute();
    }

    function brand_update_user($data, $getID) {
        $id = $getID;
            
        $name = $data["name"];
       
        
        $stmt = $this->conn->prepare("UPDATE brands SET name='$name',  WHERE id=$id");
        $stmt->execute();
    }

    function brand_delete_user($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("DELETE FROM brands WHERE id='$id'");
        $stmt->execute();
    }

    function get_popular() {
        $stmt = $this->conn->prepare("SELECT * FROM brands WHERE sold > 500");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    function get_new($givenDate) {
        $stmt = $this->conn->prepare("SELECT * FROM brands WHERE added_at > $givenDate");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


}