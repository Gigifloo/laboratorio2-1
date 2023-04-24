<?php
    //Incluir el archivo de conexión a la base de datos
    include("conexion.php");

    //Consulta SQL para obtener todos los registros de la tabla "persona"
    $sql = "SELECT * FROM persona";

    //Ejecutar la consulta y almacenar el resultado en una variable
    $resultado = pg_query(conexion(), $sql);

    //Si la consulta devuelve algún resultado
    if(pg_num_rows($resultado) > 0){
        echo "<table>";
        echo "<tr><th>ID</th><th>Documento</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Celular</th></tr>";

        //Recorrer los registros y mostrarlos en una tabla HTML
        while($fila = pg_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" . $fila["idpersona"] . "</td>";
            echo "<td>" . $fila["documento"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["apellido"] . "</td>";
            echo "<td>" . $fila["direccion"] . "</td>";
            echo "<td>" . $fila["celular"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron registros";
    }

    //Cerrar la conexión a la base de datos
    pg_close(conexion());
?>

