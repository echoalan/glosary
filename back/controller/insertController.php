<?php

    include('../model/connection.php');

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Authorization');

    class InsertWord extends Connection {
   
        public function insert($word, $category) {

            $conn = $this->connect();

            $word = mysqli_real_escape_string($conn, $word);
            $category = mysqli_real_escape_string($conn, $category);

            $sql = "INSERT INTO words (WORD, CATEGORY) VALUES ('$word', '$category')";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die('Error al insertar palabra: ' . mysqli_error($conn));
            }

            mysqli_close($conn);
        }   
    }


    if(isset($_POST['word']) && isset($_POST['category'])){

        $word = $_POST['word'];
        $category = $_POST['category'];    

        $wordObj = new InsertWord();
        $wordObj->insert($word, $category);

    }


?>