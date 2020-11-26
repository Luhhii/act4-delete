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
	include("function.php");
?>
<table border="1" width="100%">
	<tr>
		<th width="5%">Id</th>
		<th width="16%">Nombre</th>
		<th width="16%">Horario Inicial</th>
		<th width="16%">Horario Final</th>
		<th width="16%">Descripcion</th>
		<th width="16%">Lista de Conductores</th>
		<th width="15%">Borrar</th>
	</tr>
<?php 
	$sql = "select * from programa";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
	<td><?php echo $row->programa_id;?></td>
		<td><?php echo $row->Nombre;?></td>
		<td><?php echo $row->Horario_I;?></td>
		<td><?php echo $row->Horario_F;?></td>
		<td><?php echo $row->Descripcion;?></td>
		<td><?php echo $row->Lista_C;?></td>
		<td>
   <a class="btn btn-primary" href="borrar.php?programa_id=<?php echo $row->programa_id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>