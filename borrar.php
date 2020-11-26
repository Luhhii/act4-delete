<?php 
include("function.php");
$id = $_GET['programa_id'];
delete('programa','programa_id',$id);
header("location:index.php");
?>