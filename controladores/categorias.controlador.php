<?php

class CategoriasControlador{

    static public function ctrListarCategorias(){
        
        $categorias = CategoriasModelo::mdlListarCategorias();

        return $categorias;

    }

    static public function ctrGuardarCategoria($accion, $idCategoria, $categoria, $media){

        $guardarCategorias = CategoriasModelo::mdlGuardarCategoria($accion, $idCategoria, $categoria, $media);

        return $guardarCategorias;

        
    }

    static public function ctrListarCategorias2(){
        
        $categorias = CategoriasModelo::mdlListarCategorias2();

        return $categorias;

    }

    static public function ctrListarProductos($id_categoria){
        
        $categorias = CategoriasModelo::mdlListarProductos($id_categoria);

        return $categorias;

    }

    static public function ctrListarCategorias3(){
        
        $categorias = CategoriasModelo::mdlListarCategorias3();

        return $categorias;

    }

    static public function ctrEliminarCategoria($id_categoria){
        
        $categorias = CategoriasModelo::mdlEliminarCategoria($id_categoria);

        return $categorias;

    }

    static public function ctrDarNombreCategoria($id_categoria){
        
        $categorias = CategoriasModelo::mdlDarNombreCategoria($id_categoria);

        return $categorias;

    }
}