<?php
class PerfilControlador{

    static public function ctrObtenerPerfiles() {

        $modulos = PerfilModelo::mdlObtenerPerfiles();

        return $modulos;
        
    }

    static public function ctrMostrarUsuarios() {

        $modulos = PerfilModelo::mdlMostrarUsuarios();

        return $modulos;
        
    }

    static public function ctrDarDatosUsuario($idUsuario) {

        $datos = PerfilModelo::mdlDarDatosUsuario($idUsuario);

        return $datos;
        
    }

    static public function ctrRegistrarUsuario($idUsuario, $nombre, $apellido, $usuario,$cargo, $contraseña,$nueva_contraseña) {

        

        $datos = PerfilModelo::mdlRegistrarUsuario($idUsuario,$nombre, $apellido, $usuario, $cargo, $contraseña,$nueva_contraseña);

        return $datos;
        
    }
}