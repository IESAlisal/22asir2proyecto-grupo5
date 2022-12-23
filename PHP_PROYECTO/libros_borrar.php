<?php 
include_once 'funcionesBaseDatos.php';
if(isset($_POST['borrar']))
{
	$mensaje = borrarLibro($_POST['libro']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Borrar libros</title>
	<link rel="stylesheet" media="screen" href="stylelibrosborrar.css" >
</head>
<div>
	<div class="borrado">
	<div class="formulario" action="" method="post" name="formulario">   
            <label for="libro">Libro:</label>
        	<select name="libro">
        		<?php
        		
	            $libros = getLibros();

	            foreach($libros as $libro)
				{
					echo "<option value='{$libro->numero_ejemplar}'";
	                echo ">{$libro->titulo} (año {$libro->anyo_edicion})</option>";
				}
	            	
            ?>
        	</select>
	</div>
	<button class="submit" type="submit" name="borrar">Borrar</button>

	<br>
	<br>

    <?php 
    	if(isset($mensaje))
    	{
    		echo "<div class='aviso'>El precio del libro borrado era: $mensaje €</div>";
    	}
    ?>
	</div>
</form>
<button>
<a href="index.php">Volver</a>
</button>
</body>
</html>