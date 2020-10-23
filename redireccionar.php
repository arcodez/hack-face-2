//Validacion del login 

//Validación del Login
if ($correo=="" && $clave=="") { header("Location: fail2.php");}
else if ($correo == "") { header("Location: fail.php"); } 
else if ($clave == "") { header("Location: fail1.php"); } 

//Pagina a redireccionar
else { header("Location: pasaste.php"); }