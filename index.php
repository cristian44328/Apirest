<?php 
//Controladores
require_once "controlador/rutas.controlador.php";
require_once "controlador/cursos.controlador.php";

//Modelos
require_once "modelo/cursos.modelo.php";

$rutas=new ControladorRutas();
$rutas->inicio();
