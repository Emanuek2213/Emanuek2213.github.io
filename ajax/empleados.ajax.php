<?php
    require_once "../controladores/empleados.controlador.php";
    require_once "../modelos/empleados.modelo.php";

    class AjaxEmpleados{

        public function ajaxMostrarAsistencia(){

            $modulos = EmpleadoControlador::ctrMostrarAsistencia();

            echo json_encode ($modulos);
        }

        public function ajaxMostrarEmpleadosSimple(){

            $modulos = EmpleadoControlador::ctrMostrarEmpleadosSimple();

            echo json_encode ($modulos);
        }

        public function ajaxMostrarEmpleados(){

            $modulos = EmpleadoControlador::ctrMostrarEmpleados();

            echo json_encode ($modulos);
        }

        public function ajaxRegistrarEmpleados($nombre,$dni){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarEmpleados($nombre,$dni);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEliminarEmpleado($empleado,$id_empleado){

            $modulosPerfil = EmpleadoControlador::ctrEliminarEmpleado($empleado,$id_empleado);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxActualizarEmpleados($nombre,$dni,$id_empleado){

            $modulosPerfil = EmpleadoControlador::ctrActualizarEmpleados($nombre,$dni,$id_empleado);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxRegistrarAsistencias($id_empleado,$justificacion){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarAsistencias($id_empleado,$justificacion);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEliminarTardanza($empleado,$id_tardanza){

            $modulosPerfil = EmpleadoControlador::ctrEliminarTardanza($empleado,$id_tardanza);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxCambiarAsistencia($id,$empleado,$fecha_hora,$justificacion){

            $modulosPerfil = EmpleadoControlador::ctrCambiarAsistencia($id,$empleado,$fecha_hora,$justificacion);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxMostrarAlmuerzos(){

            $modulos = EmpleadoControlador::ctrMostrarAlmuerzos();

            echo json_encode ($modulos);
        }

        public function ajaxVerificarRepetido($id_empleado){

            $modulos = EmpleadoControlador::ctrVerificarRepetido($id_empleado);

            echo json_encode ($modulos);
        }

        public function ajaxGuardarAlmuerzo($id_empleado){

            $modulos = EmpleadoControlador::ctrGuardarAlmuerzo($id_empleado);

            echo json_encode ($modulos);
        }

        public function ajaxGuardarAlmuerzo_fin($id_empleado){

            $modulos = EmpleadoControlador::ctrGuardarAlmuerzo_fin($id_empleado);

            echo json_encode ($modulos);
        }

        public function ajaxBorrarAlmuerzo($id_almuerzo){

            $modulos = EmpleadoControlador::ctrBorrarAlmuerzo($id_almuerzo);

            echo json_encode ($modulos);
        }

        public function ajaxListarPermisos(){

            $modulos = EmpleadoControlador::ctrListarPermisos();

            echo json_encode ($modulos);
        }

        public function ajaxRegistrarPermisos($id_empleado,$justificacion,$minutos){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarPermisos($id_empleado,$justificacion,$minutos);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEliminarPermiso($id_empleado,$id_permiso){

            $modulosPerfil = EmpleadoControlador::ctrEliminarPermiso($id_empleado,$id_permiso);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxDarTardanza($id_empleado,$id_permiso,$minutos){

            $modulosPerfil = EmpleadoControlador::ctrDarTardanza($id_empleado,$id_permiso,$minutos);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEliminarEmpleadoSeguro($id_empleado,$nombre,$dni){

            $modulosPerfil = EmpleadoControlador::ctrEliminarEmpleadoSeguro($id_empleado,$nombre,$dni);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxListaNombreEmpleados(){

            $modulosPerfil = EmpleadoControlador::ctrListaNombreEmpleados();

            echo json_encode ($modulosPerfil);
        }

        public function ajaxListadoParaAsistencias(){

            $modulosPerfil = EmpleadoControlador::ctrListadoParaAsistencias();

            echo json_encode ($modulosPerfil);
        }

        public function ajaxRegistrarNuevaAsistencia($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarNuevaAsistencia($id_empleado,$fecha_actual);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxRegistrarNuevaTardanza($id_empleado, $tardanza,$fecha_actual){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarNuevaTardanza($id_empleado, $tardanza,$fecha_actual);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxRegistrarNuevaFalta($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarNuevaFalta($id_empleado,$fecha_actual);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxRegistrarBorrarAsistencia($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoControlador::ctrRegistrarBorrarAsistencia($id_empleado,$fecha_actual);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxListaAsistenciasFecha($fecha){

            $modulosPerfil = EmpleadoControlador::ctrListaAsistenciasFecha($fecha);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxListaAsistenciasid($id_registro_asistencia){

            $modulosPerfil = EmpleadoControlador::ctrListaAsistenciasid($id_registro_asistencia);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEditarNuevaAsistencia($id_registro_asistencia){

            $modulosPerfil = EmpleadoControlador::ctrEditarNuevaAsistencia($id_registro_asistencia);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEditarNuevaTardanza($id_registro_asistencia, $tardanza){

            $modulosPerfil = EmpleadoControlador::ctrEditarNuevaTardanza($id_registro_asistencia, $tardanza);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEditarNuevaFalta($id_registro_asistencia){

            $modulosPerfil = EmpleadoControlador::ctrEditarNuevaFalta($id_registro_asistencia);

            echo json_encode ($modulosPerfil);
        }

        public function ajaxEditarBorrarAsistencia($id_registro_asistencia){

            $modulosPerfil = EmpleadoControlador::ctrEditarBorrarAsistencia($id_registro_asistencia);

            echo json_encode ($modulosPerfil);
        }
    
    }

    if(isset ($_POST[ 'accion']) && $_POST['accion'] == 1) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxMostrarAsistencia();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 2) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxMostrarEmpleados();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 3) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxRegistrarEmpleados($_POST["nombre"],$_POST["dni"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 4) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxEliminarEmpleado($_POST["empleado"], $_POST["id_empleado"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 5) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxActualizarEmpleados($_POST["nombre"],$_POST["dni"], $_POST["id_empleado"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 6) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxRegistrarAsistencias($_POST["id_empleado"],$_POST["justificacion"]);

    }  else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 7) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxEliminarTardanza($_POST["empleado"], $_POST["id_tardanza"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 8) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxCambiarAsistencia($_POST["id"], $_POST["empleado"], $_POST["fecha_hora"], $_POST["justificacion"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 9) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxMostrarAlmuerzos();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 10) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxVerificarRepetido($_POST["id_empleado"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 11) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxGuardarAlmuerzo($_POST["id_empleado"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 12) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxGuardarAlmuerzo_fin($_POST["id_empleado"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 13) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxBorrarAlmuerzo($_POST["id_almuerzo"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 14) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxListarPermisos();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 15) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxRegistrarPermisos($_POST["id_empleado"],$_POST["justificacion"],$_POST["minutos"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 16) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxEliminarPermiso($_POST["id_empleado"], $_POST["id_permiso"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 17) { //

        $modulosPerfil = new AjaxEmpleados;
        $modulosPerfil -> ajaxDarTardanza($_POST["id_empleado"], $_POST["id_permiso"], $_POST["minutos"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 18) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxMostrarEmpleadosSimple();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 19) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxEliminarEmpleadoSeguro($_POST["id_empleado"],$_POST["nombre"],$_POST["dni"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 20) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxListaNombreEmpleados();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 21) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxListadoParaAsistencias();

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 22) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxRegistrarNuevaAsistencia($_POST["id_empleado"], $_POST["fecha_actual"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 23) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxRegistrarNuevaTardanza($_POST["id_empleado"],$_POST["tardanza"], $_POST["fecha_actual"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 24) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxRegistrarNuevaFalta($_POST["id_empleado"], $_POST["fecha_actual"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 25) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxRegistrarBorrarAsistencia($_POST["id_empleado"], $_POST["fecha_actual"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 26) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxListaAsistenciasFecha($_POST["fecha"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 27) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxListaAsistenciasid($_POST["id_registro_asistencia"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 28) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxEditarNuevaAsistencia($_POST["id_registro_asistencia"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 29) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxEditarNuevaTardanza($_POST["id_registro_asistencia"],$_POST["tardanza"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 30) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxEditarNuevaFalta($_POST["id_registro_asistencia"]);

    } else if(isset ($_POST[ 'accion']) && $_POST['accion'] == 31) { //

        $modulos = new AjaxEmpleados;
        $modulos->ajaxEditarBorrarAsistencia($_POST["id_registro_asistencia"]);

    }