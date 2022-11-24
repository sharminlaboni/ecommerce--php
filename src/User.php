<?php

namespace Src;

class User
{



    public $servername = "localhost";
    public $username = "root";
    public $db_password = "";
    public $dbname = "e-pharmacy";
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->db_password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function user_get_all()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    function user_store_one($data) {
        $name = $data["name"];
        $email = $data["email"];
        $address = $data["address"];
        $phone = $data["phone"];
        $password = $data["passoword"];
        $sql = "INSERT INTO users (name, email, address, phone, password) VALUES ('$name', '$email', '$address', '$phone', '$password')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    function user_get_one($getid)
    {
        $id = $getid;
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id='$id'");
        $stmt->execute();
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $row;
    }


    function user_update_one($data, $getId)
    {

        $id = $getId;
        $id = $data['id'];
        $name = $data['name'];
        $address = $data['address'];
        $email = $data['email'];
        $phone = $data['phone'];

        $sql = "UPDATE users SET name ='$name', address = '$address', email ='$email', phone ='$phone' WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }



    function user_delete_one($getId)
    {
        $id =  $getId;
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id=$id");
        $stmt->execute();
    }
}
