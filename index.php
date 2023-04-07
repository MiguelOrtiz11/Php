<!DOCTYPE html>
<html>
<head>
	<title>Galería de imágenes</title>
</head>
<body>
	<h1>Galería de imágenes prueba</h1>

	<?php include("gallery.php"); ?>
	

<!-- HTML -->
<div class="row">
  <?php
	//Recorre la galeria y sube cada enlace que este en gallery.php
  foreach ($image_urls as $url) {
    echo "<img src='$url' alt='Imagenes de pixabay' width='100%' />";
  }
  ?>
</div>


</body>
</html>
