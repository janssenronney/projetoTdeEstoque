<?php

$servername = "localhost";

$database = "controle_estoque";

$username = "root";

$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
elseif ($conn) {
    # code...
    echo "Connected successfully";
    echo $conn;
}

mysqli_close($conn);

?>