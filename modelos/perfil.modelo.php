<?php

require_once "conexion.php";

class PerfilModelo{
    static public function mdlObtenerPerfiles(){
        $stmt = Conexion::conectar() -> prepare("select '' as control ,p.id_perfil,
                                                        p.descripcion,
                                                        p.estado,
                                                        date(p.fecha_creacion) as fecha_creacion,
                                                        p.fecha_actualizacion,
                                                        '' as opciones
                                                from perfiles p
                                                order by p.id_perfil");

        $stmt-> execute();

        return $stmt -> fetchAll();
    }

    static public function mdlMostrarUsuarios(){
        $stmt = Conexion::conectar() -> prepare("select '' as opciones ,
                                                        u.id_usuario as id,
                                                        u.nombre_usuario as nombre,
                                                        u.apellido_usuario as apellido,
                                                        u.usuario as usuario,
                                                        u.clave as contraseña,
                                                        p.descripcion as cargo
                                                from perfiles p inner join usuarios u
                                                where u.id_perfil_usuario = p.id_perfil");

        $stmt-> execute();

        return $stmt -> fetchAll();
    }

    static public function mdlDarDatosUsuario($idUsuario){
        $stmt = Conexion::conectar() -> prepare("select '' as opciones ,
                                                        u.id_usuario as id,
                                                        u.nombre_usuario as nombre,
                                                        u.apellido_usuario as apellido,
                                                        u.usuario as usuario,
                                                        u.clave as contraseña,
                                                        u.id_perfil_usuario as cargo
                                                from perfiles p inner join usuarios u
                                                where u.id_perfil_usuario = p.id_perfil and u.id_usuario = :id_usuario");
                                                
        $stmt -> bindParam(":id_usuario",$idUsuario,PDO::PARAM_INT);
        $stmt-> execute();

        return $stmt -> fetchAll();
    }

    static public function mdlRegistrarUsuario($idUsuario, $nombre, $apellido, $usuario, $cargo, $contraseña, $nueva_contraseña) {
        //var_dump($idUsuario, $nombre,  $apellido,  $usuario,  $cargo,  $contraseña,  $nueva_contraseña);

        $contraseña = crypt($contraseña, '$2a$07$azybxcags23425sdg23sdfhsd$');
        $nueva_contraseña = crypt($nueva_contraseña, '$2a$07$azybxcags23425sdg23sdfhsd$');

        if ($idUsuario > 0) {
    
            $stmt = Conexion::conectar()->prepare('UPDATE usuarios u SET u.usuario = :usuario, u.nombre_usuario = :nombre, 
                u.apellido_usuario = :apellido , u.clave = :nueva_contrasena, u.id_perfil_usuario = :cargo 
                WHERE u.clave = :contrasena AND u.id_usuario = :idUsuario');

                $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
                $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
                $stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
                $stmt->bindParam(':contrasena', $contraseña, PDO::PARAM_STR);
                $stmt->bindParam(":nueva_contrasena", $nueva_contraseña, PDO::PARAM_STR);
                $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
                $stmt->bindParam(":cargo", $cargo, PDO::PARAM_INT);
                
                }
                
          else if ($idUsuario == 0 &&  $nueva_contraseña == $contraseña) {
    
             $stmt = Conexion::conectar()->prepare("INSERT INTO usuarios (id_usuario, nombre_usuario, apellido_usuario, usuario, clave, id_perfil_usuario, estado)
             VALUES (NULL, :nombre, :apellido, :usuario , :nueva_contrasena, :cargo, 1) ;");
    
             $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
             $stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
             $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
             $stmt->bindParam(":cargo", $cargo, PDO::PARAM_INT);
             $stmt->bindParam(":nueva_contrasena", $nueva_contraseña, PDO::PARAM_STR);
             
         }
    
        if($stmt -> execute()){
            return "OK";
        } else {
            return "ERROR";
        }
    }
    
}