<?php

include 'connect.php';

$id = $_GET['id'];

 $query = "DELETE FROM `crudtable` WHERE id=$id;";
 $query .= "ALTER TABLE `crudtable` DROP COLUMN id;";
 $query .= "ALTER TABLE `crudtable` ADD id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY FIRST;";

 mysqli_multi_query($conn,$query);


 header('location:display.php');



?>