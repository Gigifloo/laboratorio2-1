<?php
include('conexion.php');

$db = conexion();
$query = "SELECT * FROM persona";
$result = pg_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Personas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOUzXw9W9jI+fmP7I7aiecYjKfJvoE86X6hJXQVnE2Xlw5Q" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Listado de Personas</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Documento</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dirección</th>
					<th>Celular</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = pg_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['idpersona']; ?></td>
						<td><?php echo $row['documento']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['direccion']; ?></td>
						<td><?php echo $row['celular']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>


