<?php
include_once '../model/Login/LoginModel.php';

class LoginController  {
  function validar() {
    $obj = new LoginModel();
    $usuEncontrado = false;
    $credCorrectas = false;
    $documento = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios";

    $usuario = $obj -> sentencia($sql);

    foreach ($usuario as $usu) {
      if ($documento == $usu['usu_id']) {
	$usuEncontrado = true;
	if ($password == $usu['usu_clave']) {
	  $credCorrectas = true;
	  break;
	} else {
	  break;
	}
      }
    }
    
    if ($usuEncontrado == true and $credCorrectas == true) {
      $_SESSION['documento'] = $documento;
      redirect(getUrl('Login', 'Login', 'home'));
    } else if ($usuEncontrado == true and $credCorrectas == false) {
      echo "<script> alert('Credenciales incorrectas'); </script>";
    } else if ($usuEncontrado == false and $credCorrectas == false) {
      echo "<script> alert('Usuario inexistente'); </script>";
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
