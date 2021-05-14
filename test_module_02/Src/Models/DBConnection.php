<?php
namespace Model;
use PDO;
use PDOException;

class DataBase {
    protected $dsn;
    protected $user;
    protected $password;
    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=maket_manager';
        $this->user = 'phpmyadmin';
        $this->password = '1';
    }
    public function connect(){
        try {
            return new PDO($this->dsn, $this->user,$this->password); 
        }catch(PDOException $e){
            echo "Server error";
            exit();
        }
    }
}