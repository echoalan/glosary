<?php

    include('../model/connection.php');

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Authorization');

    class wordController extends connection{

        public $word = array();

        public function getWords(){

            $connect = $this->connect();
            
            $sql = 'SELECT * FROM words';

            $exe = mysqli_query($connect, $sql);

            while($row = mysqli_fetch_assoc($exe)){

                $this->word[]= $row;

            }

            return $this->word;

        }

    }

    $word = new wordController();

    $matriz = $word->getWords();

    echo json_encode($matriz);
?>