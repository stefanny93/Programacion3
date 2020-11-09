# Programacion3
Ejercicio 2
<!DOCTYPE html>
<html>
<head>
	<title>Personas</title>
	<meta charset="utf-8">
</head>
<body>
<form action="guardar.php" method="post">
<fieldset>
 <form name="personas" action="" method="POST">
 	Nombre <input type="text" name="nombre" required placeholder="Nombre"><br>
 	Apellido <input type="text" name="apellido" required><br>
 	Cédula <input type="number" name="cedula" required size="8" maxlength="8"><br>
 	Sexo <input type="radio" name="sexo" value="F" checked> Femenino
 		 <input type="radio" name="sexo" value="M"> Masculino
 		 <br>
 	Edad <input type="number" name="edad" required size="3" maxlength="3" min="0" max="140"><br>
 	Ocupación
 	<select name="ocu">
 		<option>Ingeniero</option>
 		<option>Obrero</option>
 		<option>Estudiante</option>
 		<option>Abogado</option>
 		<option>Licenciado</option>
 	</select><br>
 	Dirección
 	<textarea rows="3" cols="15">
 	</textarea>
 	<hr>
 	<input type="reset" name="" value="Reiniciar">
 	<input type="submit" name="" value="Guardar">
 </form>
</body>
</html>

