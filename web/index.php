<?php
session_start();
include_once '../lib/helpers.php';
include_once '../view/partials/header.php';
if (isset($_SESSION['documento'])) {
  include_once '../view/partials/navbar.php';
  } else {
  include '../view/Login/formSesion.php';
  }
if (isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
    $controlador = $_GET['controlador'];
    $funcion = $_GET['funcion'];
    getUrl($modulo, $controlador, $funcion);
    resolve();
  }


include_once '../view/partials/footer.php';

?>
