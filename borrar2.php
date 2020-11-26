<?php 
include("function2.php");
$id = $_GET['nota_id'];
delete('nota','nota_id',$id);
header("location:index2.php");
?>