<?php 

require_once '../../core/connection.php';
require_once '../../core/helper.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {

    $id = $_GET['id'];

    // check here if category is already exist or not (task)
    $select_query = "SELECT `name` FROM `categories` WHERE `id` = '$id'";
    $result = mysqli_fetch_row(mysqli_query($conn, $select_query));
    if(mysqli_affected_rows($conn)>0){
        
        $query = "DELETE FROM `categories` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $query);

    }

    if($result) {
        $_SESSION['success'] = "Category Deleted Successfully";
        header("Location: ../../pages/categories/index.php");
        exit;
    } else {
        header("Location: ../../pages/categories/index.php");
        exit;
    }

} else {
    header("Location: ../../pages/categories/index.php");
    exit;
}