<?php

    class EmpleadoControlador{

        static public function ctrMostrarAsistencia(){

            $modulos = EmpleadoModelo::mdlMostrarAsistencia();

            return $modulos;

        }

        static public function ctrMostrarEmpleados(){

            $modulos = EmpleadoModelo::mdlMostrarEmpleados();

            return $modulos;

        }

        static public function ctrMostrarEmpleadosSimple(){

            $modulos = EmpleadoModelo::mdlMostrarEmpleadosSimple();

            return $modulos;

        }

        static public function ctrRegistrarEmpleados($nombre,$dni){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarEmpleados($nombre,$dni);

            return $modulosPerfil;

        }

        static public function ctrEliminarEmpleado($empleado,$id_empleado){

            $modulosPerfil = EmpleadoModelo::mdlEliminarEmpleado($empleado,$id_empleado);

            return $modulosPerfil;

        }

        static public function ctrActualizarEmpleados($nombre,$dni,$id_empleado){

            $modulosPerfil = EmpleadoModelo::mdlActualizarEmpleados($nombre,$dni,$id_empleado);

            return $modulosPerfil;

        }

        static public function ctrRegistrarAsistencias($id_empleado,$justificacion){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarAsistencias($id_empleado,$justificacion);

            return $modulosPerfil;

        }

        static public function ctrEliminarTardanza($empleado,$id_tardanza){

            $modulosPerfil = EmpleadoModelo::mdlEliminarTardanza($empleado,$id_tardanza);

            return $modulosPerfil;

        }

        static public function ctrCambiarAsistencia($id,$empleado,$fecha_hora,$justificacion){

            $modulosPerfil = EmpleadoModelo::mdlCambiarAsistencia($id,$empleado,$fecha_hora,$justificacion);

            return $modulosPerfil;

        }

        static public function ctrMostrarAlmuerzos(){

            $modulos = EmpleadoModelo::mdlMostrarAlmuerzos();

            return $modulos;

        }

        static public function ctrVerificarRepetido($id_empleado){

            $modulos = EmpleadoModelo::mdlVerificarRepetido($id_empleado);

            return $modulos;

        }

        static public function ctrGuardarAlmuerzo($id_empleado){

            $modulos = EmpleadoModelo::mdlGuardarAlmuerzo($id_empleado);

            return $modulos;

        }
        static public function ctrGuardarAlmuerzo_fin($id_empleado){

            $modulos = EmpleadoModelo::mdlGuardarAlmuerzo_fin($id_empleado);

            return $modulos;

        }

        static public function ctrBorrarAlmuerzo($id_almuerzo){

            $modulos = EmpleadoModelo::mdlBorrarAlmuerzo($id_almuerzo);

            return $modulos;

        }

        static public function ctrListarPermisos(){

            $modulos = EmpleadoModelo::mdlListarPermisos();

            return $modulos;

        }

        static public function ctrRegistrarPermisos($id_empleado,$justificacion,$minutos){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarPermisos($id_empleado,$justificacion,$minutos);

            return $modulosPerfil;

        }

        static public function ctrEliminarPermiso($id_empleado,$id_permiso){

            $modulosPerfil = EmpleadoModelo::mdlEliminarPermiso($id_empleado,$id_permiso);

            return $modulosPerfil;

        }

        static public function ctrDarTardanza($id_empleado,$id_permiso,$minutos){

            $modulosPerfil = EmpleadoModelo::mdlDarTardanza($id_empleado,$id_permiso,$minutos);

            return $modulosPerfil;

        }
        
        static public function ctrEliminarEmpleadoSeguro($id_empleado,$nombre,$dni){

            $modulosPerfil = EmpleadoModelo::mdlEliminarEmpleadoSeguro($id_empleado,$nombre,$dni);

            return $modulosPerfil;

        }

        static public function ctrListaNombreEmpleados(){

            $modulosPerfil = EmpleadoModelo::mdlListaNombreEmpleados();

            return $modulosPerfil;

        }

        static public function ctrListadoParaAsistencias(){

            $modulosPerfil = EmpleadoModelo::mdlListadoParaAsistencias();

            return $modulosPerfil;

        }

        static public function ctrRegistrarNuevaAsistencia($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarNuevaAsistencia($id_empleado,$fecha_actual);

            return $modulosPerfil;

        }

        static public function ctrRegistrarNuevaTardanza($id_empleado, $tardanza,$fecha_actual){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarNuevaTardanza($id_empleado, $tardanza,$fecha_actual);

            return $modulosPerfil;

        }

        static public function ctrRegistrarNuevaFalta($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarNuevaFalta($id_empleado,$fecha_actual);

            return $modulosPerfil;

        }

        static public function ctrRegistrarBorrarAsistencia($id_empleado,$fecha_actual){

            $modulosPerfil = EmpleadoModelo::mdlRegistrarBorrarAsistencia($id_empleado,$fecha_actual);

            return $modulosPerfil;

        }

        static public function ctrListaAsistenciasFecha($fecha){

            $modulosPerfil = EmpleadoModelo::mdlListaAsistenciasFecha($fecha);

            return $modulosPerfil;

        }

        static public function ctrListaAsistenciasid($id_registro_asistencia){

            $modulosPerfil = EmpleadoModelo::mdlListaAsistenciasid($id_registro_asistencia);

            return $modulosPerfil;

        }

        static public function ctrEditarNuevaAsistencia($id_registro_asistencia){

            $modulosPerfil = EmpleadoModelo::mdlEditarNuevaAsistencia($id_registro_asistencia);

            return $modulosPerfil;

        }

        static public function ctrEditarNuevaTardanza($id_registro_asistencia, $tardanza){

            $modulosPerfil = EmpleadoModelo::mdlEditarNuevaTardanza($id_registro_asistencia, $tardanza);

            return $modulosPerfil;

        }

        static public function ctrEditarNuevaFalta($id_registro_asistencia){

            $modulosPerfil = EmpleadoModelo::mdlEditarNuevaFalta($id_registro_asistencia);

            return $modulosPerfil;

        }

        static public function ctrEditarBorrarAsistencia($id_registro_asistencia){

            $modulosPerfil = EmpleadoModelo::mdlEditarBorrarAsistencia($id_registro_asistencia);

            return $modulosPerfil;

        }

    }