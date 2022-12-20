<!DOCTYPE html>
<html>
<head>
	<title>Libros</title>
	<link rel="stylesheet" media="screen" href="stylelibros.css" >
</head>
<body>
	<form class="formulario" method="post" action="libros_guardar.php" name="formulario">
		<div class="modal">
			<div class="modal__container">
			  <div class="modal__featured">
				<button type="button" class="button--transparent button--close" href="login.php">
				  <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
					<g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
				  <span class="visuallyhidden">Return to Product Page</span>
				</button>
				<div class="modal__circle"></div>
			  </div>
			  <div class="modal__content">
				<h2>Inserte los datos del libro</h2>	
			<br>
		    <span class="mensaje_obligatorio">* Campo obligatorio</span>
			<br><br>
		    
		        <label for="titulo">Titulo:*</label>
		        <input type="text" name="titulo" required>
			<br><br>
		        <label for="anyo">Año de edición:*</label>
		        <input type="number" name="anyo" min="1900" max="2100" required>
			<br><br>
		        <label for="precio">Precio:*</label>
		        <input type="number" name="precio" step="any" required>
			<br><br>
		        <label for="adquisicion">Fecha de adquisición:*</label>
		        <input type="date" name="adquisicion" required>
			<br><br>
		    	<button class="submit" type="submit" name="guardar">Guardar datos del libro</button>
		    
	</form>
	<br><br>
	<a href="libros_datos.php">Mostrar los libros guardados</a>
</body>
</html>




