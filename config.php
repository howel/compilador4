<?php

	//creamos la conexion a la base de datos MySql
	$conexion1 = mysql_connect('localhost','root','');
	$db= mysql_select_db('bd_inkafarma',$conexion1);

	//Buscador
	$palabra = $_GET['variable'];
	
	if($palabra == '')
	{
		echo 'Escribe una palabra...';
	}
	else
	{
		//Consulta a MySql
		$query = "SELECT * FROM tcliente where nombre like '%$palabra%'";
		$respuesta = mysql_query ($query) or die(mysql_error());

		if (mysql_fetch_assoc ($respuesta)<=0) 
		{ 
			//cerrar Conexion MySql
			mysql_close($conexion1);
			//-----------------------------------------------------------------------------------
			//Trabajando con PostgreSql
			//-----------------------------------------------------------------------------------
			$user = "postgres";
			$password = "123";
			$dbname = "bd_arcangel";
			$port = "5432";
			$host = "localhost";
			$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

			$conexion2 = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
			//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

			//Consulta a PostgresSql
			$query2 = "SELECT * FROM cliente where nombre like '%$palabra%'";
			$respuesta2 = pg_query($conexion2, $query2) or die("Error en la Consulta PostgreSql");
			if (pg_fetch_assoc($respuesta2)<=0) 
			{
				echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'<b>'.".";
			}
			else
			{
				$respuesta2 = pg_query($query2) or die("Error en la consulta SQL PostgreSql");

				while ($row = pg_fetch_array($respuesta2)) 
				{
					//Resultados de PostgreSql
					//--------------------------------------------------------------------------------
					echo "
					<table class='table table-hover'>

					<tr>
						<td colspan='6'>
							<img src='img/arcangel.png' height='200'>
						</td>
					</tr>

			      	<tr class='success' > 
			      	    <th>Codigo</th> 
			      	    <th>Nombre</th> 
			      	    <th>Email</th> 
				  	    <th>Dni</th>
						<th>Telefono</th>
				  	</tr>
				  	<tr> 
				  	  	<td>".$row['id_cliente']."</td> 
				  	    <td>".$row['nombre']."</td> 
				  	    <td>".$row['email']."</td>
				  	    <td>".$row['dni']."</td> 
				  	    <td>".$row['telefono']."</td> 
				  	     
				  	</tr>

					<tr>
						<td colspan='6'>
							<button type='button' class='btn btn-default'>
							    <span class='glyphicon glyphicon-print'></span> Exportar A Pdf
							</button>
						</td>
					</tr>
					</table> ";
				}
			}

			//pg_close($conexion2)
			//echo "No se encontraron resultados con el termino ".'<b>'.$palabra.'<b>'.".";
		}
		else
		{
			$respuesta = mysql_query ($query) or die("Error en la consulta SQL MySql");

			while($row = mysql_fetch_array($respuesta))
			{
				//Resultados de MySql
				//--------------------------------------------------------------------------------
				echo "
				<table class='table table-hover'> 

					<tr>
						<td colspan='6'> <img src='img/Inkafarma_logo.png'> </td>
					</tr>

			      	<tr class='success' > 
			      	    <th> Codigo </th> 
			      	    <th> Nombre </th> 
			      	    <th> Apellidos </th> 
				  	    <th> Dni </th>
						<th> Telefono </th>
				  	    <th> Direccion </th>
				  	</tr>
				  	<tr> 
				  	  	<td>".$row['id_cliente']."</td> 
				  	    <td>".$row['nombre']."</td> 
				  	    <td>".$row['apellidos']."</td>
				  	    <td>".$row['dni']."</td> 
				  	    <td>".$row['telefono']."</td> 
				  	    <td>".$row['direccion']."</td> 
				  	</tr>

				  	<tr>
						<td colspan='6'>
							<button type='button' class='btn btn-default'>
							    <span class='glyphicon glyphicon-print'></span> Exportar A Pdf
							</button>
						</td>
					</tr>

				</table> ";
			}
		}
	}
?>


