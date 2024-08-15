<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxCategorias{

    public $idCategoria;
    public $categoria;
    public $medida;

    public function ajaxListarCategorias(){

        $categorias = CategoriasControlador::ctrListarCategorias();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxGuardarCategoria($accion){

        $guardarCategorias = CategoriasControlador::ctrGuardarCategoria($accion, $this->idCategoria, $this->categoria, $this->medida);

        echo json_encode($guardarCategorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxListarCategorias2(){

        $categorias = CategoriasControlador::ctrListarCategorias2();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxListarProductos($id_categoria){

        $categorias = CategoriasControlador::ctrListarProductos($id_categoria);

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxListarCategorias3(){

        $categorias = CategoriasControlador::ctrListarCategorias3();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxEliminarCategoria($id_categoria){

        $categorias = CategoriasControlador::ctrEliminarCategoria($id_categoria);

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

    public function ajaxDarNombreCategoria($id_categoria){

        $categorias = CategoriasControlador::ctrDarNombreCategoria($id_categoria);

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }

}

if(isset($_POST['idCategoria']) && $_POST['idCategoria'] > 0){ //EDITAR

    $editarCategoria = new AjaxCategorias();
    $editarCategoria->idCategoria = $_POST['idCategoria'];
    $editarCategoria->categoria = $_POST['categoria'];
    $editarCategoria->medida = $_POST['medida'];
    $editarCategoria->ajaxGuardarCategoria(0);

}else if(isset($_POST['idCategoria']) && $_POST['idCategoria'] == 0){ //REGISTRAR

    $registrarCategoria = new AjaxCategorias();
    $registrarCategoria->idCategoria = $_POST['idCategoria'];
    $registrarCategoria->categoria = $_POST['categoria'];
    $registrarCategoria->medida = $_POST['medida'];
    $registrarCategoria->ajaxGuardarCategoria(1);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 3){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new AjaxCategorias();
    $nombreClientes -> ajaxListarCategorias2();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 4){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new AjaxCategorias();
    $nombreClientes -> ajaxListarProductos($_POST["id_categoria"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 5){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new AjaxCategorias();
    $nombreClientes -> ajaxListarCategorias3();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 6){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new AjaxCategorias();
    $nombreClientes -> ajaxEliminarCategoria($_POST["id_categoria"]);

}else if(isset($_POST["accion"]) && $_POST["accion"] == 7){  // TRAER LISTADO DE PRODUCTOS PARA EL AUTOCOMPLETE

    $nombreClientes = new AjaxCategorias();
    $nombreClientes -> ajaxDarNombreCategoria($_POST["id_categoria"]);

}else{

    $listaCategorias = new AjaxCategorias();
    $listaCategorias -> ajaxListarCategorias();
}