<?php
    $conn = mysqli_connect("localhost", "homestead", "secret", "book_manage");
    if(!$conn) {
        die("Can't connect to database: " . mysqli_connect_error());
    } else {
        echo 'thanh cong';
    }
?>
