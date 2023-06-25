<?php
include 'connect.php';
 $ID = $_GET['Id'];
mysqli_query($conn,"DELETE FROM `tblcard` WHERE Id = $ID");

header('location:index.php');

?>