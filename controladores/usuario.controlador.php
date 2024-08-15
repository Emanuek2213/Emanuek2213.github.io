<?php

class UsuarioControlador{
    public function login(){
        if(isset($_POST['loginUsuario'])){

            $usuario = $_POST['loginUsuario'];
            $password = crypt($_POST['loginPassword'], '$2a$07$azybxcags23425sdg23sdfhsd$');

            $respuesta = UsuarioModelo::mdlIniciarSesion($usuario,$password);
            
            if(count($respuesta) > 0){
                $_SESSION["usuario"] = $respuesta[0];

                echo '
                    <script>
                        window.location = "http://192.168.1.41/market-pos/"
                    </script>
                    ';
            }else{
                echo '
                    <script>
                        Swal.fire{
                            "error",
                            "Usuario o Contraseña Invalida",
                            "http://192.168.1.41/market-pos/"
                        };
                    </script>
                    ';
            }
        }
    }

    static public function ctrObtenerMenuUsuario($id_usuario){
        $menuUsuario = UsuarioModelo::mdlObtenerUsuario($id_usuario);
        return $menuUsuario;
    }

    static public function ctrObtenerSubMenuUsuario($idMenu,$id_perfil_usuario){
        $submenuUsuario = UsuarioModelo::mdlSubObtenerUsuario($idMenu, $id_perfil_usuario);
        return $submenuUsuario;
    }
}