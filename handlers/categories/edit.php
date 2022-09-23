<?php
require_once '../../core/connection.php';



if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    $query = "UPDATE categories SET 
    `name`='$name',`description`='$description' Where id=$id";
        mysqli_query($conn, $query);
    
        header("Location: ../../pages/categories/index.php");
    

}