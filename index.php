<?php
    include "connection.php";
    $select = "select * from shareup";
        $selectquery = $connection->query($select);
        if(!$selectquery){
          die("Invalid query!");
        }
        while($row=$selectquery->fetch_assoc()){
          print_r($row["id"]);}
?>