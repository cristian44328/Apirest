<?php

$array=explode("/",$_SERVER['REQUEST_URI']);

/*=======================================
Cuando no se hace petecion a la API
======================================= */
if(count(array_filter($array))===1){
    $json=array(
        "detalle" => "Sin Solicitudes",
    );
    echo json_encode($json, true);
}else{
    /*=======================================
    Cuando si se hace petecion a la API
    ======================================= */
    if(count(array_filter($array))===2){
       //cursos existentes
       if(array_filter($array)[2]==="cursos"){
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]==="GET"){
            $cursos = new ControladorCursos();
            $cursos->index();
        }
       }
    }
}