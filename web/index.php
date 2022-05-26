<?php
include_once '../lib/helpers.php';
include_once '../view/partials/headers.php';
session_start();
if (isset($_SESSION['documento'])) {
  include_once '../view/partials/navbar.php';
  if (isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
    $controlador = $_GET['controlador'];
    $funcion = $_GET['funcion'];
    getUrl($modulo, $controlador, $funcion);
    resolve();
  }
} else {
  include '../view/formSesion.php';
}

include_once '../view/partials/footers.php';

?>
