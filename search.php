<?php

require_once ("config.php");

if($_SERVER["REQUEST_METHOD"] =="POST") {
    $nume_cautat = $conn->real_escape_string($_POST['nume_cautat']);

    $sql = "SELECT * FROM Utilizatori WHERE name LIKE '%$nume_cautat'";

    $result = $conn->query($sql);

    if($result->num_rows>0) {
        echo "<table><tr><th>ID</th><th>Nume</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()){
            echo "<tr><td>" .$row['id'] ."</td><td>" . $row['name']."</td><td>" .$row['email']."</td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 rezultate";
    }

    $conn->close();

}

?>

<form method="post" action="">
    Nume: <input type="text" name="nume_cautat"><br/>
    <input type="submit" value="Cauta">
</form>
