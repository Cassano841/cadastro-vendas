<?php
    class db{
        //host
        private $host = 'localhost';
        //user
        private $user = 'root';
        //password
        private $password = '';
        //database
        private $database = 'db_nivelamento';

        public function connect_mysql(){

            //create connection
            $con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            //adjust charset application - database
            mysqli_set_charset($con, 'utf-8');

            //error log
            if(mysqli_connect_error()){
                echo 'Erro ao conectar com o banco de dados: '.mysqli_connect_error(); 
            }
            
            return $con;
        }
    }
?>
