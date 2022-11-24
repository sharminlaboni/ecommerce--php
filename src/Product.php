<?php

namespace Src;

class Product {
    public $servername = "localhost";
    public $username = "root";
    public $db_password = "";
    public $dbname = "e-pharmacy";
    //public $conn;

    function __construct() {
        try {
            $this->conn = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->db_password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }    
    }

    function get_all() {
        $stmt = $this->conn->prepare("SELECT * FROM products");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


    function get_one($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id='$id'");
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    function store_user($data) {
        $name = $data["name"];
        $description = $data["description"];
        $price = $data["price"];
        $stock = $data["stock"];
        $sold = $data["sold"];
        $category_id = $data["category_id"];
        $brand_id = $data["brand_id"];
        $file = $_FILES['image'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror==0){
            $destfile = 'upload/'.$filename;
            move_uploaded_file( $filepath,$destfile);
        
        $stmt = $this->conn->prepare("INSERT INTO products (name, description, price, stock, sold, added_at, category_id, brand_id, image) 
                VALUES ('$name','$description','$price','$stock','$sold','2022-09-17', '$category_id','$brand_id', '$destfile')");
        $stmt->execute();
    } }

    function update_user($data) {
        $id = $data['id'];
            
        $name = $data["name"];
        $description = $data["description"];
        $price = $data["price"];
        $stock = $data["stock"];
        $sold = $data["sold"];
        $category_id = $data["category_id"];
        $brand_id = $data["brand_id"];
        
        
        $stmt = $this->conn->prepare("UPDATE products SET name='$name', description='$description', price='$price', stock='$stock', sold='$sold', category_id='$category_id', brand_id='$brand_id' WHERE id=$id");
        $stmt->execute();
    }

    function delete_user($getID) {
        $id = $getID;
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id='$id'");
        $stmt->execute();
    }

    function get_popular() {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE sold > 500");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    function get_new() {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE sold < 100");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

}