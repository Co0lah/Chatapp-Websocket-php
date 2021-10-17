<?php

$conn = mysqli_connect("localhost", "root", "", "chatapp");
    if (!$conn) {
        echo "db connect success" . mysqli_connect_error();
    }
    
?>