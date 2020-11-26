<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros con Función PHPn</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:98%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Eliminar Registros con Función PHP </h1>
<br><br>

<?php
	include("function2.php");
?>
<table border="1" width="100%">
	<tr>
		<th width="15%">Id</th>
		<th width="20%">titulo</th>
		<th width="20%">contenido</th>
		<th width="20%">resumen</th>
        <th width="20%">p_id</th>
        <th width="15%">Borrar</th>
	</tr>
<?php 
	$sql = "select * from nota";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
	<td><?php echo $row->nota_id;?></td>
		<td><?php echo $row->titulo;?></td>
		<td><?php echo $row->contenido;?></td>
		<td><?php echo $row->resumen;?></td>
		<td><?php echo $row->p_id;?></td>
		<td>
   <a class="btn btn-primary" href="borrar2.php?nota_id=<?php echo $row->nota_id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>