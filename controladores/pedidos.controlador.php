<?php

    require_once "../modelos/pedidos.modelo.php";

    class PedidosControlador{

        static public function ctrDarListaPedidos(){
            
            $nroBoleta = PedidosModelo::mdlDarListaPedidos();

            return $nroBoleta;

        }

        static public function ctrDarListarParaDeuda(){
            
            $nroBoleta = PedidosModelo::mdlDarListarParaDeuda();

            return $nroBoleta;

        }

        static public function ctrCambiarSalida($hora_inicio, $nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlCambiarSalida($hora_inicio, $nro_boleta);

            return $nroBoleta;

        }

        static public function ctrCambiarEstimado($hora_estimada, $nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlCambiarEstimado($hora_estimada, $nro_boleta);

            return $nroBoleta;

        }

        static public function ctrCambiarRegreso($hora_regreso, $nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlCambiarRegreso($hora_regreso, $nro_boleta);

            return $nroBoleta;

        }

        static public function ctrCambiarMensajero($mensajero, $nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlCambiarMensajero($mensajero, $nro_boleta);

            return $nroBoleta;

        }

        static public function ctrCambiarVuelto($vuelto, $nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlCambiarVuelto($vuelto, $nro_boleta);

            return $nroBoleta;

        }

        static public function ctrDarListaPedidosAlCredito(){
            
            $nroBoleta = PedidosModelo::mdlDarListaPedidosAlCredito();

            return $nroBoleta;

        }

        static public function ctrAgregarPedidoCredito($nro_boleta,$empleado,$deuda,$monto,$hora_salida,$hora_regreso,$hora_estimado,$cuenta,$nueva_deuda,$puntos){
            
            $nroBoleta = PedidosModelo::mdlAgregarPedidoCredito($nro_boleta,$empleado,$deuda,$monto,$hora_salida,$hora_regreso,$hora_estimado,$cuenta,$nueva_deuda,$puntos);

            return $nroBoleta;

        }

        static public function ctrDarListarCreditos($nro_boleta){
            
            $nroBoleta = PedidosModelo::mdlDarListarCreditos($nro_boleta);

            return $nroBoleta;

        }

        static public function ctrDarPuntajePedido($nro_boleta, $puntos){
            
            $nroBoleta = PedidosModelo::mdlDarPuntajePedido($nro_boleta, $puntos);

            return $nroBoleta;

        }
    }