<?php

    require_once "../controladores/pedidos.controlador.php";
    require_once "../modelos/pedidos.modelo.php";
    require_once "../vendor/autoload.php";

    class AjaxPedidos{

        public function ajaxDarListaPedidos(){

            $respuestas = PedidosControlador::ctrDarListaPedidos();  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxDarListarParaDeuda(){

            $respuestas = PedidosControlador::ctrDarListarParaDeuda();  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxCambiarSalida($hora_inicio, $nro_boleta){

            $respuestas = PedidosControlador::ctrCambiarSalida($hora_inicio, $nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxCambiarEstimado($hora_estimada, $nro_boleta){

            $respuestas = PedidosControlador::ctrCambiarEstimado($hora_estimada, $nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxCambiarRegreso($hora_regreso, $nro_boleta){

            $respuestas = PedidosControlador::ctrCambiarRegreso($hora_regreso, $nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxCambiarMensajero($mensajero, $nro_boleta){

            $respuestas = PedidosControlador::ctrCambiarMensajero($mensajero, $nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxCambiarVuelto($vuelto, $nro_boleta){

            $respuestas = PedidosControlador::ctrCambiarVuelto($vuelto, $nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxDarListaPedidosAlCredito(){

            $respuestas = PedidosControlador::ctrDarListaPedidosAlCredito();  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxAgregarPedidoCredito($nro_boleta,$empleado,$deuda,$monto,$hora_salida,$hora_regreso,$hora_estimado,$cuenta,$nueva_deuda,$puntos){

            $respuestas = PedidosControlador::ctrAgregarPedidoCredito($nro_boleta,$empleado,$deuda,$monto,$hora_salida,$hora_regreso,$hora_estimado,$cuenta,$nueva_deuda,$puntos);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxDarListarCreditos($nro_boleta){

            $respuestas = PedidosControlador::ctrDarListarCreditos($nro_boleta);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

        public function ajaxDarPuntajePedido($nro_boleta, $puntos){

            $respuestas = PedidosControlador::ctrDarPuntajePedido($nro_boleta, $puntos);  

            echo json_encode($respuestas,JSON_UNESCAPED_UNICODE);
            
        }

    }

    if(isset($_POST["accion"]) && $_POST["accion"] == 1){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxDarListaPedidos();
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 2){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxDarListarParaDeuda();
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 3){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxCambiarSalida($_POST["hora_inicio"],$_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 4){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxCambiarEstimado($_POST["hora_estimada"],$_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 5){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxCambiarRegreso($_POST["hora_regreso"],$_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 6){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxCambiarMensajero($_POST["mensajero"],$_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 7){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxCambiarVuelto($_POST["vuelto"],$_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 8){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxDarListaPedidosAlCredito();
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 9){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxAgregarPedidoCredito($_POST["nro_boleta"],$_POST["empleado"],$_POST["deuda"],$_POST["monto"],$_POST["hora_salida"],$_POST["hora_regreso"],$_POST["hora_estimado"],$_POST["cuenta"],$_POST["nueva_deuda"],$_POST["puntos"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 10){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxDarListarCreditos($_POST["nro_boleta"]);
        
    }else if(isset($_POST["accion"]) && $_POST["accion"] == 11){
        
        $nroBoleta = new AjaxPedidos();
        $nroBoleta -> ajaxDarPuntajePedido($_POST["nro_boleta"],$_POST["puntos"]);
        
    }