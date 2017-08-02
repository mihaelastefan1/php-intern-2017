<?php

include 'C:\xampp\htdocs\conexiune_database.php';

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO products (id, name, details, price, favorite_product, user_job, image) VALUES ('$id', '$name', '$details', '$price', '$favorite_product', '$user_job', '$file_name')";
//var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }

// close connection
mysqli_close($conn);


 
