<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alta</title>
</head>
<body>
	<form name="alta" action="procesarAlta.php" method="post" enctype="multipart/form-data">
		
		<table align="center" cellpadding="5">
			<h2 align="center">Inserte los datos de la vivienda</h2>
			
			<tr>
				
				<td>Tipo: </label></td>
				<td><select id="" name="tipo">
					<option value="" selected="selected">- selecciona -</option>
					<option value="casa">Casa</option>
					<option value="piso">Piso</option>
					<option value="adosado">Adosado</option>
					<option value="chalet">Chalet</option>
					<option value="habitacion">Habitacion</option>
					<br>
				</select></td>
			</tr>


			<tr>

				<td>Zona: </label></td>
				<td><select id="" name="zona">
					<option value="" selected="selected">- selecciona -</option>
					<option value="centro">Centro</option>
					<option value="fuenlabrada">Fuenlabrada</option>
					<option value="getafe">Getafe</option>
					<option value="avila">Avila</option>
					<option value="alcala">Alcala</option>
				</select></td>

			</tr>




			<tr>
				<td>Direccion: </label></td>
				<td><input type="text"  name="direccion" placeholder="Direccion"/></td>
			</tr>

			<tr>
				<td>Numero de habitaciones: </label></td>

				<td><div>
					<input type="radio"  name="nh" value="1" checked>
					<label for="1">1</label>

					<input type="radio"  name="nh" value="2">
					<label for="2">2</label>

					<input type="radio"  name="nh" value="3">
					<label for="3">3</label>

					<input type="radio"  name="nh" value="4">
					<label for="4">4</label>

					<input type="radio" name="nh" value="5">
					<label for="5">5</label>
				</div></td>
			</tr>

			<tr>
				<td>Precio: </label></td>
				<td><input type="number"  name="precio" placeholder="Precio"/></td>
			</tr>



			<tr>
				<td>Tamaño: </label></td>
				<td><input type="number" name="size" placeholder="Tamaño"/></td>
			</tr>


			<tr>
				<td>Extras: </label></td>
				<td>
					<input type="checkbox" name="extras[]"value="Piscina">
					<label for="extras">Piscina</label>

					<input type="checkbox" name="extras[]" value="Garaje">
					<label for="extras">Garaje</label>

					<input type="checkbox" name="extras[]" value="Jardin">
				 	<label for="extras">Jardin</label>

					<input type="checkbox" name="extras[]" value="Terraza">
					<label for="extras">Terraza</label>
				</td>
			</tr>

			<tr>
				<td>Foto:</td>
   			   <td> <input type="file" name="fileToUpload" id="fileToUpload"></td>
			</tr>
			
			<tr>
				<td>Observaciones: </label></td>
				<td><textarea  name="observaciones" rows="10" cols="40">Escriba aqui sus observaciones</textarea>
				</td>
			</tr>	





			<tr>

				<td><input type="submit" value="Insertar Vivienda" name="submit"/></td>
				<td><input type="reset" value="Borrar" /></td>
				<td><a href="1pantalla.php"><button type="button">VOLVER</button></a></td>

			</tr>

		</table>		




	</body>
	</html>