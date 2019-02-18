<?php
    class db{
        //host
        private $host = '127.0.0.1:3306';
        //user
        private $user = 'root';
        //password
        private $password = 'root';
        //database
        private $database = 'db_nivelamento';

        public function connect_mysql(){

            //create connection
            $con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            //adjust charset application - database
            //mysqli_set_charset($con);

            //error log
            if(mysqli_connect_error()){
                echo 'Erro ao conectar com o banco de dados: '.mysqli_connect_error(); 
            }
            
            return $con;
        }
    }
?>
