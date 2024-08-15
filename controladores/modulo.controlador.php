<?php

    class ModuloControlador{

        static public function ctrobtenerModulos(){

            $modulos = ModuloModelo::mdlobtenerModulos();

            return $modulos;

        }

        static public function ctrobtenerModulosPorPerfil($id_perfil){

            $modulosPerfil = ModuloModelo::mdlobtenerModulosPorPerfil($id_perfil);

            return $modulosPerfil;

        }

        static public function ctrobtenerModulosSistema(){

            $modulosSistema = ModuloModelo::mdlobtenerModulosSistema();

            return $modulosSistema;

        }

        static public function ctrReorganizarModulos($modulos_ordenados){

            $modulosOrdenados = ModuloModelo::mdlReorganizarModulos($modulos_ordenados);

            return $modulosOrdenados;

        }

        static public function ctrRegistrarModulos($data_modulo){

            $registro_modulos = ModuloModelo::mdlRegistrarModulos($data_modulo);

            return $registro_modulos;

        }


    }