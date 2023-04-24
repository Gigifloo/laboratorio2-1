<?php
include_once "conexion.php"; // Incluye el archivo de conexión a la base de datos
$sentencia = $conexion->query("SELECT idpersona, documento, nombre, apellido, direccion, celular FROM persona"); // Realiza una consulta para obtener todos los registros de la tabla "persona"
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtiene todos los registros de la tabla como un arreglo de objetos
?>

<div class="row">

	<div class="col-12">
		<h1>Listar con arreglo</h1>
		<a href="https://youtu.be/2xI5SyusvBY" target="_blank">Por Estrellita Caycedo</a>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Dirección</th>
						<th>Celular</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<!--
					Modificación
					-->
					<?php foreach($personas as $persona){ ?>
						<tr>
							<td><?php echo $persona->idpersona ?></td>
							<td><?php echo $persona->documento ?></td>
							<td><?php echo $persona->nombre ?></td>
							<td><?php echo $persona->apellido ?></td>
							<td><?php echo $persona->direccion ?></td>
							<td><?php echo $persona->celular ?></td>
							<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $persona->idpersona?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $persona->idpersona?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
