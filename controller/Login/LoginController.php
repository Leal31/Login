<?php
include_once '../model/Login/LoginModel.php';

class LoginController  {
  function validar() {
    $obj = new LoginModel();
    
    $documento = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usu_id=$documento AND usu_clave='$password'";

    $usuario = $obj -> sentencia($sql);

    if ($usuario) {
      foreach ($usuario as $usu) {
	if ($documento == $usu['usu_id'] and $password == $usu['usu_clave']) {
	  $_SESSION['documento'] = $documento;
	  redirect(getUrl('Login', 'Login', 'home'));
	} else {
	 echo "Credenciales erroneas";
	}
    }} else {
      echo "Hubo un error";
    }
 }

  function home() {
    include_once '../view/Login/home.php';
  }

  function cerrarSesion() {
    session_destroy();
    redirect("index.php");
  }
}
?>
