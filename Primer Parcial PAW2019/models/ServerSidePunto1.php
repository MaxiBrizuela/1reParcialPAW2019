<?php

$fallo=array();

if(isset($_POST["Enviar"])){//Si apretamos el boton Enviar
    
    //Si la validacion del servidor falla, escribo los datos ingresados por el cliente 
    //para que estos no esten vacios.
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $lenguaje = $_POST['lenguaje'];
    

    validarCampos();
    if($fallo){
        require 'controllers/punto1.php';//Fallo algun valor
    }else{
        require 'controllers/punto1.validado.php';//Todos los datos validos
    }
}

function validarCampos(){
    validarCamposObligatorios();
    validarNombre();
    validarEmail();
    validarLenguaje();
}

function validarCamposObligatorios(){
    if(
        ($_POST["nombre"] == "") ||
        ($_POST["email"] == "") 
    ){
        array_push($GLOBALS['fallo'],"Falta completar campos obligatorios*");
    }
}


function validarEmail(){
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        array_push($GLOBALS['fallo'],"Fallo el email ingresado");
    }
}

function validarNombre(){
    if(!preg_match("/^([a-zA-Z ]+)$/",$_POST["nombre"])){
        array_push($GLOBALS['fallo'],"Fallo el nombre ingresado");
    }
}

function validarLenguaje(){
    if(!
        (($_POST["lenguaje"] == "C++") ||
        ($_POST["lenguaje"] == "JAVA") ||
        ($_POST["lenguaje"] == "Delphi") ||
        ($_POST["lenguaje"] == "Fortran"))
    ){
        array_push($GLOBALS['fallo'],"Fallo el lenguaje seleccionado");
    }
}


?>
