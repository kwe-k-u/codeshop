<?php

require("/db_cred.php");

    $conn = new mysqli(servername, username, password, dbname);

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
        echo "connection failed";
    } else {
        echo "connection succesful";
    }

?>