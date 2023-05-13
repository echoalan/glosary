<?php

    class connection{

        public $host = 'localhost';
        public $user = 'root';
        public $pass = '';
        public $dbName = 'glosary';
        public $conn = '';


        public function connect(){

            $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);

            return $this->conn;

        }

    }


?>