<table>
	<tr> 
		<th>DNI</th> <th>Provincia</th> <th>Sexo</th> <th>Presidenciable</th> <th>Localidad</th> <th>Direccion</th> 
	</tr>
	<?php
		require_once("../clases/usuario.php");
		require_once("../clases/AccesoDatos.php");

		$usuarios = usuario::TraerTodosLosUsuarios();
		for ($i = 0; $i < count($usuario); $i++)
		{
			echo "<tr>";
			echo "<td>";
			echo $usuarios[0];
			echo "</td>";
			echo "<td>";
			echo $usuarios[1];
			echo "</td>";
			echo "<td>";
			echo $usuarios[2];
			echo "</td>";
			echo "<td>";
			echo $usuarios[3];
			echo "</td>";
			echo "<td>";
			echo $usuarios[4];
			echo "</td>";
			echo "<td>";
			echo $usuarios[5];
			echo "</td>";
			echo "<td>";
			echo "<button class="+"btn btn-lg btn-primary btn-block"+ "type="+"button"+"onclick = "+"borrar()"+">Modificar</button>";
			echo "</td>";
			echo "<td>";
			echo "<button class="+"btn btn-lg btn-primary btn-block"+ "type="+"button"+"onclick = "+"modificar()"+">Modificar</button>";
			echo "</td>";
			echo "<td>";
			echo "<button class="+"btn btn-lg btn-primary btn-block"+ "type="+"button"+"onclick = "+"VerEnMapa($usuarios[1], $usuarios[4], $usuarios[5], $usuarios[0])"+">Modificar</button>";
			echo "</td>";
			echo "</tr>";
		}
	?>
</table>