<?php
/*
Este archivo lista todos los datos de la tabla, obteniendo a los mismos como un arreglo
*/
?>
<?php
include_once "conexion.php";
$sentencia = $conexion->query("select idpersona, documento, nombre, apellido, direccion, celular from persona");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
                        <th>Persona</th>
						<th>Nombre</th>
						<th>Apellido</th>
                        <th>Direccion</th>
                        <th>Celular</th>
					</tr>
				</thead>
				<tbody>
					<!--
					Modificación
					-->
					<?php foreach($persona as $persona){ ?>
						<tr>
							<td><?php echo $persona->idpersona ?></td>
							<td><?php echo $persona->documento ?></td>
							<td><?php echo $persona->nombre ?></td>
                            <td><?php echo $persona->apellido ?></td>
                            <td><?php echo $persona->direccion ?></td>
                            <td><?php echo $persona->celular ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>