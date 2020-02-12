<?php 

require_once("Config/Connection.php");

class Users extends Connect
{
    public $conn;
    protected $table = 'tb_user';

    function __construct()
    {
        $this->conn = parent::start();
    }

    function all($field = '*')
    {
        $sql = "SELECT $field FROM ". $this->table;
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    function find($id)
    {
        $sql = "SELECT * FROM ". $this->table. " WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
        // return $sql;
    }

    function create($payloads)
    {
        $password = password_hash($payloads['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO ". $this->table. " (username, email, password, address, phone, gender, user_pict) VALUES (
            '".$payloads['username']."',
            '".$payloads['email']."',
            '".$password."',
            '".$payloads['address']."',
            '".$payloads['phone']."',
            '".$payloads['gender']."',
            '".$payloads['user_pict']."'
        )";

        return $this->conn->query($sql);

    }
    


    function login($payloads)
    {
        $sql = "SELECT * FROM tb_user WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

        return $this->conn->query($sql);
    }

}

?> 

