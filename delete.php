<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo "$id";
        $sql = "DELETE from `shareup` where id=$id";
        $connection->query($sql);
    }
    header('location:/php_crud/select.php');
?>