<?php

//создать класс подключение к БД
class db{
    private $host = 'localhost';
    private $user = 'root';
    private $password_db = 'root';
    private $db_name = 'dz';

    
    public function mysqli(){
        $con = new mysqli($this->host, $this->user, $this->password_db, $this->db_name);
        if($con->connect_error){
                echo 'Error DB';
        }
    }

}

$con = new db();

$con->mysqli();


class db1 {

    private $host = 'localhost';
    private $user = 'root';
    private $password_db = 'root';
    private $db_name = 'dz';
    private $connection;

    public function __construct () {
        try{
            $this->connection = new mysqli($this->host, $this->user, $this->password_db, $this->db_name);
        }catch (Exception $e){
            echo ($e->getMessage());
        }
    }

    public function query($sql){
        try{
            $this->connection->query($sql);
        }catch(Exception $e){
            echo 'Error query';
        }
    }

}

$con1 = new db1();
$con1->query('insert into users (login,password) values ("user1", "12345")');
$con1->query('delete from users');