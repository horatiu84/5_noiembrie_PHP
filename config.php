<?php

// conectarea la baza de date

    $conn = new mysqli('localhost','root','','new');

    // verificam conexiune

    if ($conn->connect_error) {
        die("Conexiune esuata" .$conn->connect_error);
    }

    // facem tabelul



    $sql = "CREATE TABLE IF NOT EXISTS Utilizatori (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    name VARCHAR(255),
    email VARCHAR(255)
)";

    if($conn->query($sql) === TRUE) {
        echo "Tabel creat cu succes";
    } else {
        echo "Eroare : ".$conn->error;
    }

