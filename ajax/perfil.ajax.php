<?php

require_once "../controladores/perfil.controlador.php";
require_once "../modelos/perfil.modelo.php";

class AjaxPerfiles{

    

    public function ajaxObtenerPerfiles(){

        $perfiles = PerfilControlador::ctrObtenerPerfiles();

        echo json_encode($perfiles);
    }
    
    public function ajaxMostrarUsuarios(){

        $perfiles = PerfilControlador::ctrMostrarUsuarios();

        echo json_encode($perfiles);
    }

    public function ajaxDarDatosUsuario($idUsuario){

        $datos = PerfilControlador::ctrDarDatosUsuario($idUsuario);

        echo json_encode($datos);
    }

    public function ajaxRegistrarUsuario($idUsuario,$nombre, $apellido, $usuario, $cargo, $contraseña,$nueva_contraseña){

        $estado = PerfilControlador::ctrRegistrarUsuario($idUsuario, $nombre, $apellido, $usuario,$cargo, $contraseña,$nueva_contraseña);

        echo json_encode($estado);
    }
  
}


if(isset($_POST['accion']) && $_POST['accion'] == 1){ //Ejecutar function ventas del mes (Grafico de Barras)

    $perfiles = new AjaxPerfiles();
    $perfiles -> ajaxObtenerPerfiles();

} else if(isset($_POST['accion']) && $_POST['accion'] == 2){ //Ejecutar function ventas del mes (Grafico de Barras)

    $perfiles = new AjaxPerfiles();
    $perfiles -> ajaxMostrarUsuarios();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ //Ejecutar function ventas del mes (Grafico de Barras)

    $perfiles = new AjaxPerfiles();
    $perfiles -> ajaxDarDatosUsuario($_POST['idUsuario']);

}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //Ejecutar function ventas del mes (Grafico de Barras)

    $perfiles = new AjaxPerfiles();
    $perfiles -> ajaxRegistrarUsuario($_POST['idUsuario'],$_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['cargo'],$_POST['contraseña'],$_POST['nueva_contraseña']);

}