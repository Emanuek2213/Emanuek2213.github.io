<?php
    require_once "../controladores/modulo.controlador.php";
    require_once "../modelos/modulo.modelo.php";

    class AjaxModulos{

        public function ajaxObtenerModulos(){

            $modulos = ModuloControlador::ctrobtenerModulos();

            echo json_encode ($modulos);
        }

        public function ajaxObtenerModulosPorPerfil($id_perfil){

            $modulosPerfil = ModuloControlador::ctrobtenerModulosPorPerfil($id_perfil);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxObtenerModulosSistema(){

            $modulosPerfil2 = ModuloControlador::ctrobtenerModulosSistema();

            echo json_encode ($modulosPerfil2);
        }

        public function ajaxReorganizarModulos($modulos_ordenados){

            $modulosOrdenados = ModuloControlador::ctrReorganizarModulos($modulos_ordenados);

            echo json_encode ($modulosOrdenados);
        }

        public function ajaxRegistrarModulos($array_datos){

            $registro_modulos = ModuloControlador::ctrRegistrarModulos($array_datos);

            echo json_encode ($registro_modulos);
        }

    }

    if(isset ($_POST[ 'accion']) && $_POST['accion'] == 1) { //

        $modulos = new AjaxModulos;
        $modulos->ajaxObtenerModulos();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 2) { //

        $modulosPerfil = new AjaxModulos;
        $modulosPerfil -> ajaxObtenerModulosPorPerfil($_POST["id_perfil"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 3) { //

        $modulosPerfil2 = new AjaxModulos;
        $modulosPerfil2 -> ajaxObtenerModulosSistema();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 4) { //

        $organizar_modulos = new AjaxModulos;
        $organizar_modulos -> ajaxReorganizarModulos($_POST["modulos"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 5) { //

        $array_datos = [];
        parse_str($_POST["datos"], $array_datos);

        $registro_modulos = new AjaxModulos;
        $registro_modulos -> ajaxRegistrarModulos($array_datos);

    }



