<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 cclass="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario / Productos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">

    <div class="container-fluid">

        <!-- row para criterios de busqueda -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card card-gray shadow" style="border: 1px solid black;">
                    <div class="card-header">
                        <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="d-none d-md-flex col-md-12 ">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="iptCodigoBarras" class="form-control" data-index="2">
                                    <label for="iptCodigoBarras">Código de Barras</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                    <label for="iptCategoria">Categoría</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptProducto" class="form-control" data-index="5">
                                    <label for="iptProducto">Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="iptPrecioVentaDesde" class="form-control">
                                    <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="iptPrecioVentaHasta" class="form-control">
                                    <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                                </div>
                            </div>

                            <div class="d-block d-sm-none">

                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                    <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                    <label for="iptCodigoBarras">Código de Barras</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                    <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                    <label for="iptCategoria">Categoría</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                    <input type="text" id="iptProducto" class="form-control" data-index="5">
                                    <label for="iptProducto">Producto</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                    <input type="number" id="iptPrecioVentaDesde" class="form-control">
                                    <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                    <input type="number" id="iptPrecioVentaHasta" class="form-control">
                                    <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                                </div>
                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>

        <!-- row para listado de productos/inventario -->
        <div class="row">
            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                <div class="card-body p-3">
                    <div class="col-lg-12">
                        <table id="tbl_productos" class="table table-striped w-100 shadow" style="border: 1px solid black;">
                            <thead class="bg-gray text-left fs-6">
                                <tr style="font-size: 15px;">
                                    <th></th>
                                    <th>id</th>
                                    <th>Codigo</th>
                                    <th>Id Categoria</th>
                                    <th>Categoría</th>
                                    <th>Producto</th>
                                    <th>Pre x Und</th>
                                    <th>Pre x paq</th>
                                    <th>Pre x doc</th>
                                    <th>Pre x cien</th>
                                    <th>Pre x mill</th>
                                    <th>Pre x Cjs</th>
                                    <th>Pre x Far</th>
                                    <th>Cant x doc</th>
                                    <th>Cant x mill</th>
                                    <th>Cant x Cjs</th>
                                    <th>Cant x Far</th>
                                    <th>Compra</th>
                                    <th>Utilidad</th>
                                    <th>Stock</th>
                                    <th>Min. Stock</th>
                                    <th>Ventas</th>
                                    <th>Fecha Creación</th>
                                    <th>Fecha Actualización</th>
                                    <th>Nombre de la imagen</th>
                                    <th>Direccion</th>
                                    <th class="text-cetner">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-small">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->

</div>
<!-- /.content -->

<!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Producto</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->
                    <div class="row">

                        <!-- Columna para registro del codigo de barras -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Código de Barras</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control form-control-sm" id="iptCodigoReg"
                                    name="iptCodigoReg" placeholder="Código de Barras" required>
                                <div class="invalid-feedback">Debe ingresar el codigo de barras</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selCategoriaReg"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Categoria</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="selCategoriaReg"
                                    name="selCategoriaReg" placeholder="Código de Barras" required onclick="this.select()">
                                <div class="invalid-feedback">Ingrese un texto para buscar</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptUbicacionReg"><i class="fas fa-map-marker fs-6"></i>
                                    <span class="small">Ubicacion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptUbicacionReg"
                                    name="iptUbicacionReg" placeholder="Ubicacion del producto" required>
                                <div class="invalid-feedback">Ingrese un texto para buscar</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la categoría del producto -->
                        <!-- <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Categoría</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCategoriaReg" required>
                        
                                </select>
                                <div class="invalid-feedback">Seleccione la categoría</div>
                            </div>
                        </div> -->

                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="iptImagen"><i class = "fas fa-image fs-6"></i><span class = "small">Seleccione una imagen</span></label>
                                <input type="file"
                                        class = "form-control form-control-sm"
                                        id = "iptImagen"
                                        name = "iptImagen"
                                        accept = "image/*"
                                        onchange = "previewFile(this)">
                            </div>
                        </div>

                        <div class="col-12 col-lg-5 my-1">
                            <div style="width: 100%; height : 280px;">
                                <img id = "previewImg" src="vistas/assets/imagenes/no_image.jpg" 
                                class = "border border-secondary" 
                                style = "object-fit: cover; width:100%; height:100%;" alt="">
                            </div>
                        </div>


                        <div class="col-lg-7">
                            <div class="row">
                                <!-- Columna para registro de la descripción del producto -->
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptDescripcionReg"><i
                                                class="fas fa-file-signature fs-6"></i> <span
                                                class="small">Descripción</span><span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="iptDescripcionReg"
                                            placeholder="Descripción" required>
                                        <div class="invalid-feedback">Debe ingresar la descripción</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Compra -->
                                <div class="col-12  col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioCompraReg"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Compra</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm"
                                            id="iptPrecioCompraReg" placeholder="Precio de Compra" required>
                                        <div class="invalid-feedback">Debe ingresar el Precio de compra</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaReg"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro de la Utilidad -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptUtilidadReg"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Utilidad</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptUtilidadReg"
                                            placeholder="Utilidad" disabled>
                                    </div>
                                </div>
                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegPaquete"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                             x paquetito</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegPaquete"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegDocena"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta x docena</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegDocena"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegCiento"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta x ciento</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegCiento"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegMillar"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta x millar</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegMillar"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegCaja"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta x caja</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegCaja"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Precio de Venta -->
                                <div class="col-12 col-lg-4">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptPrecioVentaRegFardo"><i
                                                class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                                Venta x fardo</span><span class="text-danger">*</span></label>
                                        <input type="float" min="0" class="form-control form-control-sm" id="iptPrecioVentaRegFardo"
                                            placeholder="Precio de Venta" required>
                                        <div class="invalid-feedback">Debe ingresar el precio de venta</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        

                        <!-- Columna para registro la cantidad -->
                        <div class="col-12 col-lg-3">
                            <div class="form-group mb-2">
                                <label class="" for="iptCantidadMillar"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Cantidad millar</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadMillar"
                                    placeholder="Cantidad x millar" required>
                                <div class="invalid-feedback">ingrese cuantas unidades son un millar de dicho producto</div>
                            </div>
                        </div>

                        <!-- Columna para registro la cantidad -->
                        <div class="col-12 col-lg-3">
                            <div class="form-group mb-2">
                                <label class="" for="iptCantidadDocena"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Cantidad Docena</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadDocena"
                                    placeholder="Cantidad x Docena" required>
                                <div class="invalid-feedback">ingrese cuantas unidades son un Docena de dicho producto</div>
                            </div>
                        </div>

                        <!-- Columna para registro la cantidad -->
                        <div class="col-12 col-lg-3">
                            <div class="form-group mb-2">
                                <label class="" for="iptCantidadFardo"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Cantidad Fardo</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadFardo"
                                    placeholder="Cantidad x Fardo" required>
                                <div class="invalid-feedback">ingrese cuantas unidades son un Fardo de dicho producto</div>
                            </div>
                        </div>

                        <!-- Columna para registro la cantidad -->
                        <div class="col-12 col-lg-3">
                            <div class="form-group mb-2">
                                <label class="" for="iptCantidadCaja"><i
                                        class="fas fa-dollar-sign fs-6"></i> <span class="small">Cantidad Caja</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadCaja"
                                    placeholder="Cantidad x Caja" required>
                                <div class="invalid-feedback">ingrese cuantas unidades son un Caja de dicho producto</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Stock del producto -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                    <span class="small">Stock</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                    placeholder="Stock" required>
                                <div class="invalid-feedback">Debe ingresar el stock</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Minimo de Stock -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptMinimoStockReg"><i
                                        class="fas fa-minus-circle fs-6"></i> <span class="small">Mínimo
                                        Stock</span><span class="text-danger">*</span></label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                    placeholder="Mínimo Stock" required>
                                <div class="invalid-feedback">Debe ingresar el minimo stock</div>
                            </div>
                        </div>

                        <!-- creacion de botones para cancelar y guardar el producto -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                        <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                            id="btnGuardarProducto">Guardar Producto</button>
                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                    </div>
                </form>
            
            </div>

        </div>
    </div>


</div>
<!-- /. End Ventana Modal para ingreso de Productos -->

<div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 mb-3">
                        <label for="" class="form-label text-primary d-block">Codigo: <span id="stock_codigoProducto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Producto: <span id="stock_Producto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Stock: <span id="stock_Stock"
                                class="text-secondary"></span></label>
                    </div>

                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockSumar">
                                <i class="fas fa-plus-circle fs-6"></i> <span class="small"
                                    id="titulo_modal_label">Agregar al Stock</span>
                            </label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockSumar"
                                placeholder="Ingrese cantidad a agregar al Stock">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="" class="form-label text-danger">Nuevo Stock: <span id="stock_NuevoStock"
                                class="text-secondary"></span></label><br>
                    </div>
                    
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnCancelarRegistroStock">Cancelar</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnGuardarNuevorStock">Guardar</button>
            </div>

        </div>
    </div>
</div>

<!-- Incluye la librería JSZip desde la CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>

<!-- Incluye la librería SheetJS desde la CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script> var encendido = 20;
var accion;
var table;
var operacion_stock = 0; // permitar definir si vamos a sumar o restar al stock (1: sumar, 2:restar)

/*===================================================================*/
//INICIALIZAMOS EL MENSAJE DE TIPO TOAST (EMERGENTE EN LA PARTE SUPERIOR)
/*===================================================================*/
var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});

$(document).ready(function() {


    /*===================================================================*/
    //PRUEBAS AJAX
    /*===================================================================*/
     $.ajax({
         url: "ajax/productos.ajax.php",
         type: "POST",
         data: {
             'accion': 1 //1: LISTAR PRODUCTOS
         },
         dataType: 'json',
         success: function(respuesta) {
             //console.log("respuesta", respuesta);
         }
     });

    /*===================================================================*/
    //SOLICITUD AJAX PARA CARGAR SELECT DE CATEGORIAS
    /*===================================================================*/
    // $.ajax({
    //     url: "ajax/categorias.ajax.php",
    //     cache: false,
    //     contentType: false,
    //     processData: false,
    //     dataType: 'json',
    //     success: function(respuesta) {

    //         var options = '<option selected value="">Seleccione una categoría</option>';

    //         for (let index = 0; index < respuesta.length; index++) {
    //             options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][
    //                 1
    //             ] + '</option>';
    //         }

    //         $("#selCategoriaReg").append(options);
    //     }
    // });

    $.ajax({
        async: false,
        url: "ajax/categorias.ajax.php",
        method: "POST",
        data: {
            'accion': 5
        },
        dataType: 'json',
        success: function (respuesta) {
            //console.log(respuesta);
            $("#selCategoriaReg").autocomplete({
                source: respuesta,
                select: function (event, ui) {
                    //console.log(ui.item.value)

                    $("#selCategoriaReg").val(ui.item.value)
                    return false;
                },
                appendTo: "#mdlGestionarProducto" // Reemplaza "modalID" con el ID de tu modal
            }).data("ui-autocomplete")._renderItem = function (ul, item) {
                return $("<li class='ui-autocomplete-row'></li>")
                    .data("item.autocomplete", item)
                    .append(item.label)
                    .appendTo(ul);
            };

            // Agregar evento de enfoque y desenfoque a los elementos de la lista
            $(".ui-autocomplete-row").on("focus", function () {
                $(this).addClass("ui-state-focus");
            }).on("blur", function () {
                $(this).removeClass("ui-state-focus");
            });
        },
    });

    /*===================================================================*/
    // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    /*===================================================================*/
    table = $("#tbl_productos").DataTable({
        dom: 'Bfrtip',
        
        buttons: [{
                text: 'Agregar Producto',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    $("#mdlGestionarProducto").modal('show');
                    selCategoriaReg = document.getElementById("selCategoriaReg");
                    verCategoria(selCategoriaReg);
                    CargarSiguienteNumero();
                    selCategoriaReg.addEventListener('change', function () {
                        verCategoria(selCategoriaReg);
                    });
                    accion = 2; //registrar
                }
            },
            {
                text: 'Exportar Excel',
                className: 'exportExcel',
                action: function (e, dt, button, config) {
                    var exportData = [];
                    dt.rows({ search: 'applied' }).data().each(function (row) {
                        exportData.push([row[1], row[2], row[3], row[4], row[5]]);
                    });

                    var wb = XLSX.utils.book_new();
                    wb.SheetNames.push("Productos");
                    var ws = XLSX.utils.aoa_to_sheet(exportData);
                    wb.Sheets["Productos"] = ws;

                    // Establecer encabezado y anchura de las columnas
                    var wscols = [
                        { wch: 15 }, // Anchura de la primera columna
                        { wch: 15 }, // Anchura de las otras columnas
                        { wch: 15 },
                        { wch: 40 },
                        { wch: 60 }
                    ];
                    ws['!cols'] = wscols;

                    // Establecer encabezado y aplicar estilo negrita
                    ws['A1'] = { v: 'id', t: 's', s: { bold: true } };
                    ws['B1'] = { v: 'Codigo', t: 's', s: { bold: true } };
                    ws['C1'] = { v: 'Id Categoria', t: 's', s: { bold: true } };
                    ws['D1'] = { v: 'Categoría', t: 's', s: { bold: true } };
                    ws['E1'] = { v: 'Producto', t: 's', s: { bold: true } };

                    var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });

                    function s2ab(s) {
                        var buf = new ArrayBuffer(s.length);
                        var view = new Uint8Array(buf);
                        for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                        return buf;
                    }

                    saveAs(new Blob([s2ab(wbout)], { type: "application/octet-stream" }), 'Catalogo_Jusyba.xlsx');
                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [5, 10, 15, 30, 50, 100],
        pageLength: 10,
        ajax: {
            url: "ajax/productos.ajax.php",
            dataSrc: '',
            type: "POST",
            data: {
                'accion': 1 //1: LISTAR PRODUCTOS
            },
        },
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [{
                targets: 0,
                orderable: false,
                className: 'control'
            },
            {
                targets: 1,
                visible: false
            },
            {
                targets: 3,
                visible: false
            },
            {
                targets: 13,
                visible: false
            },
            {
                targets: 14,
                visible: false
            },
            {
                targets: 15,
                visible: false
            },
            {
                targets: 16,
                visible: false
            },
            {
                targets: 17,
                visible: false
            },
            {
                targets: 18,
                visible: false
            },
            {
                targets: 19,
                createdCell: function(td, cellData, rowData, row, col) {
                    if (parseFloat(rowData[19]) <= parseFloat(rowData[20])) {
                        $(td).parent().css('background', '#FF5733')
                    }
                }
            },
            {
                targets: 22,
                visible: false
            },
            {
                targets: 23,
                visible: false
            },
            
            {
                targets: 26,
                orderable: false,
                render: function(data, type, full, meta) {
                    return "<center>" +
                        "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-pencil-alt fs-5'></i>" +
                        "</span>" +
                        "<span class='btnAumentarStock text-success px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-plus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-minus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
                        "<i class='fas fa-trash fs-5'></i>" +
                        "</span>" +
                        "</center>"
                }
            }

        ],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });

    document.getElementById('iptCodigoReg').addEventListener('input', function() {
        let value = this.value;

        // Separar números de letras y eliminar solo las letras "E"
        value = value.split('').map(char => (/[0-9]/.test(char) || char === 'E') ? char : '').join('');
        this.value = value;
    });

    /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
    /*===================================================================*/
    $("#iptCodigoBarras").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptCategoria").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptProducto").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

    /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
    /*===================================================================*/
    $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function() {
        table.draw();
    })

    $.fn.dataTable.ext.search.push(

        function(settings, data, dataIndex) {

            var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
            var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());

            var col_venta = parseFloat(data[6]);

            if (col_venta === 0){           
                col_venta = parseFloat(data[7]);
            }

            if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
                (isNaN(precioDesde) && col_venta <= precioHasta) ||
                (precioDesde <= col_venta && isNaN(precioHasta)) ||
                (precioDesde <= col_venta && col_venta <= precioHasta)) {
                return true;
            }

            return false;
        }
    )

    /*===================================================================*/
    // EVENTO PARA LIMPIAR INPUTS DE CRITERIOS DE BUSQUEDA
    /*===================================================================*/
    $("#btnLimpiarBusqueda").on('click', function() {

        $("#iptCodigoBarras").val('')
        $("#iptCategoria").val('')
        $("#iptProducto").val('')
        $("#iptPrecioVentaDesde").val('')
        $("#iptPrecioVentaHasta").val('')

        table.search('').columns().search('').draw();
    })

    $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

        $("#validate_codigo").css("display", "none");
        $("#validate_categoria").css("display", "none");
        $("#validate_descripcion").css("display", "none");
        $("#validate_precio_compra").css("display", "none");
        $("#validate_precio_venta").css("display", "none");
        $("#validate_stock").css("display", "none");
        $("#validate_min_stock").css("display", "none");

        $("#iptCodigoReg").val("");
        $("#iptUbicacionReg").val("");
        $("#selCategoriaReg").val(0);
        $("#iptDescripcionReg").val("");
        $("#iptPrecioCompraReg").val("");
        $("#iptPrecioVentaReg").val("");
        $("#iptUtilidadReg").val("");
        $("#iptStockReg").val("");
        $("#iptMinimoStockReg").val("");

    })

    /*===================================================================*/
    //EVENTO PARA CALCULAR LA UTILIDAD AL DIGITAR SOBRE LOS INPUT'S
    /*===================================================================*/
    $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function() {
        calcularUtilidad();
    });

    $("#iptPrecioCompraReg, #iptPrecioVentaRegPaquete").keyup(function() {
        calcularUtilidad();
    });

    $("#iptPrecioCompraReg, #iptPrecioVentaRegCiento").keyup(function() {
        calcularUtilidad();
    });


    /*===================================================================*/
    //EVENTO PARA CALCULAR LA UTILIDAD AL CAMBIAR EL CONTENIDO (PERDER FOCUS)
    /*===================================================================*/
    $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function() {
        calcularUtilidad();
    });
    $("#iptPrecioCompraReg, #iptPrecioVentaRegPaquete").change(function() {
        calcularUtilidad();
    });
    $("#iptPrecioCompraReg, #iptPrecioVentaRegCiento").change(function() {
        calcularUtilidad();
    });

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON AUMENTAR STOCK
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnAumentarStock', function() {

        operacion_stock = 1; //sumar stock
        accion = 3;

        $("#mdlGestionarStock").modal('show'); //MOSTRAR VENTANA MODAL

        $("#titulo_modal_stock").html('Aumentar Stock'); // CAMBIAR EL TITULO DE LA VENTANA MODAL
        $("#titulo_modal_label").html('Agregar al Stock'); // CAMBIAR EL TEXTO DEL LABEL DEL INPUT PARA INGRESO DE STOCK
        $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a agregar al Stock"); //CAMBIAR EL PLACEHOLDER 

        var data = table.row($(this)).data();
            

            if (data === undefined) {
                // Intenta la otra forma
                data = table.row($(this).parents('tr')).data();
            } //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE

        $("#stock_codigoProducto").html(data[2])	//CODIGO DEL PRODUCTO DEL DATATABLE
        $("#stock_Producto").html(data[5]) 			//NOMBRE DEL PRODUCTO DEL DATATABLE
	    $("#stock_Stock").html(data[19])				//STOCK ACTUAL DEL PRODUCTO DEL DATATABLE

        $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON DISMINUIR STOCK
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnDisminuirStock', function() {

        operacion_stock = 2; //restar stock
        accion = 3;
        $("#mdlGestionarStock").modal('show'); //MOSTRAR VENTANA MODAL

        $("#titulo_modal_stock").html('Disminuir Stock'); // CAMBIAR EL TITULO DE LA VENTANA MODAL
        $("#titulo_modal_label").html('Disminuir al Stock'); // CAMBIAR EL TEXTO DEL LABEL DEL INPUT PARA INGRESO DE STOCK
        $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a disminuir al Stock"); //CAMBIAR EL PLACEHOLDER 


        var data = table.row($(this)).data();
            

            if (data === undefined) {
                // Intenta la otra forma
                data = table.row($(this).parents('tr')).data();
            } //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE

        $("#stock_codigoProducto").html(data[2])	//CODIGO DEL PRODUCTO DEL DATATABLE
        $("#stock_Producto").html(data[5])			//NOMBRE DEL PRODUCTO DEL DATATABLE
        $("#stock_Stock").html(data[13])				//STOCK ACTUAL DEL PRODUCTO DEL DATATABLE

        $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })

    /* ======================================================================================
    EVENTO QUE LIMPIA EL INPUT DE INGRESO DE STOCK AL CERRAR LA VENTANA MODAL
    =========================================================================================*/
    $("#btnCancelarRegistroStock, #btnCerrarModalStock").on('click', function() {
        $("#iptStockSumar").val("")
    })

    /* ======================================================================================
    EVENTO AL DIGITAR LA CANTIDAD A AUMENTAR O DISMINUIR DEL STOCK
    =========================================================================================*/
    $("#iptStockSumar").keyup(function() {

        // console.log($("#iptStockSumar").val());

        if (operacion_stock == 1) {

            if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

                var stockActual = parseFloat($("#stock_Stock").html());
                var cantidadAgregar = parseFloat($("#iptStockSumar").val());

                $("#stock_NuevoStock").html(stockActual + cantidadAgregar);

            } else {

                Swal.fire({
                    icon: 'warning',
                    title: 'Ingrese un valor mayor a 0'
                });
                $("#iptStockSumar").val("")
                $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

            }

        } else {

            if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

                var stockActual = parseFloat($("#stock_Stock").html());
                var cantidadAgregar = parseFloat($("#iptStockSumar").val());

                $("#stock_NuevoStock").html(stockActual - cantidadAgregar);

                if (parseInt($("#stock_NuevoStock").html()) < 0) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'La cantidad a disminuir no puede ser mayor al stock actual (Nuevo stock < 0)'
                    });

                    $("#iptStockSumar").val("");
                    $("#iptStockSumar").focus();
                    $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
                }
            } else {
                
                Swal.fire({
                    icon: 'warning',
                    title: 'Ingrese un valor mayor a 0'
                });
                
                $("#iptStockSumar").val("")                
                $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
            }
        }

    })

    /* ======================================================================================
    EVENTO QUE REGISTRA EN BD EL AUMENTO O DISMINUCION DE STOCK
    =========================================================================================*/
    $("#btnGuardarNuevorStock").on('click', function() {

        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

            var nuevoStock = parseFloat($("#stock_NuevoStock").html()),
                codigo_producto = $("#stock_codigoProducto").html();

            var datos = new FormData();

            datos.append('accion', accion);
            datos.append('nuevoStock', nuevoStock);
            datos.append('codigo_producto', codigo_producto);

            $.ajax({
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: datos,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(respuesta) {

                    $("#stock_NuevoStock").html("");
                    $("#iptStockSumar").val("");

                    $("#mdlGestionarStock").modal('hide');
                    
                    table.ajax.reload();

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: respuesta,
                        showConfirmButton: false,
                        timer: 1500
                    })

                }
            });

        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Debe ingresar la cantidad a aumentar'
            });
        }

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnEditarProducto', function() {

        accion = 4; //seteamos la accion para editar

        $("#mdlGestionarProducto").modal('show');

        var data = table.row($(this)).data();
            if (data === undefined) {
                // Intenta la otra forma
                data = table.row($(this).parents('tr')).data();
            } //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
        console.log("🚀 ~ file: productos.php ~ line 751 ~ $ ~ data", data)
        
        var selCategoriaReg = data[3]+ " - " + data[4]

        $("#iptCodigoReg").val(data["codigo_producto"]);
        $("#selCategoriaReg").val(selCategoriaReg);
        $("#iptDescripcionReg").val(data[5]);

        selCategoriaReg = document.getElementById("selCategoriaReg");
        verCategoria(selCategoriaReg);
        
        selCategoriaReg.addEventListener('change', function () {
            verCategoria(selCategoriaReg);
            });

        console.log(data[19].replace('Und(s))',''));
        console.log(data[24]);  

        

        $("#iptPrecioCompraReg").val(data[17]);
        $("#iptPrecioVentaReg").val(data[6]);
        $("#iptPrecioVentaRegPaquete").val(data[7]);
        $("#iptPrecioVentaRegDocena").val(data[8]);
        $("#iptPrecioVentaRegCiento").val(data[9]);
        $("#iptPrecioVentaRegMillar").val(data[10]);
        $("#iptPrecioVentaRegCaja").val(data[11]);
        $("#iptPrecioVentaRegFardo").val(data[12]);
        $("#iptCantidadDocena").val(data[13]);
        $("#iptCantidadMillar").val(data[14]);
        $("#iptCantidadCaja").val(data[15]);
        $("#iptCantidadFardo").val(data[16]);
        $("#iptUtilidadReg").val(data[18]);
        $("#iptStockReg").val(data[19].replace('Und(s))',''));
        $("#iptMinimoStockReg").val(data[20].replace('Und(s)',''));
        $("#iptUbicacionReg").val(data[25]);
        var imagenPreview = document.getElementById('previewImg');
        if (imagenPreview) {
            imagenPreview.src = 'vistas/assets/imagenes/productos/'+data[24];
        }

        

    })

    

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tbl_productos tbody').on('click', '.btnEliminarProducto', function() {
        
        accion = 5; //seteamos la accion para editar
        
        var data = table.row($(this).parents('tr')).data();

        if(data == undefined){
            data = table.row($(this)).data();
        }

        console.log(data);

        var codigo_producto = data["codigo_producto"];

        Swal.fire({
            title: 'Está seguro de eliminar el producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, deseo eliminarlo!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            console.log("resultado valor: "+ result);
            if (result.isConfirmed) {

                var datos = new FormData();

                console.log("accion numero: "+ accion);

                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto); //codigo_producto               

                $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(respuesta) {

                        if (respuesta == "ok") {

                            Swal.fire({
                                icon: 'success',
                                title: 'El producto se eliminó correctamente'
                            });

                            table.ajax.reload();

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'El producto no se pudo eliminar'
                            });
                        }

                    }
                });

            }
        })
    })
        

});

// CALCULA LA UTILIDAD
function calcularUtilidad() {

    var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
    
    
    if($("#iptPrecioVentaReg").val()>0){
    var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
    console.log("iptPrecioVentaRegPaquete : " + iptPrecioVentaReg);
    }else if($("#iptPrecioVentaRegPaquete").val() > 0){
        iptPrecioVentaReg = $("#iptPrecioVentaRegPaquete").val();
        console.log("iptPrecioVentaRegPaquete : " + iptPrecioVentaReg);
    } else if($("#iptPrecioVentaRegCiento").val() > 0){
        iptPrecioVentaReg = $("#iptPrecioVentaRegCiento").val();
        console.log("iptPrecioVentaRegCiento : " + iptPrecioVentaReg);
    } else{
        iptPrecioVentaReg = 0;
    }
    
    
    var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;

    $("#iptUtilidadReg").val(Utilidad.toFixed(2));

}

/*===================================================================*/
//FUNCION QUE PERMITE PREVISUALIZAR LA IMAGEN
/*===================================================================*/

function previewFile(input){
    var file= $("input[type=file]").get(0).files[0];

    if (file){
        var reader = new FileReader();

        reader.onload = function(){
            $("#previewImg").attr("src",reader.result);
        }

        reader.readAsDataURL(file);
    }
}

/*===================================================================*/
//EVENTO QUE GUARDA LOS DATOS DEL PRODUCTO, PREVIA VALIDACION DEL INGRESO DE LOS DATOS OBLIGATORIOS
/*===================================================================*/
document.getElementById("btnGuardarProducto").addEventListener("click", function() {

    var imagen_valida = true;

    var categoria_texto = $("#selCategoriaReg").val()
    var id_categoria_producto = parseInt(categoria_texto)
    console.log("id_categoria_producto : " + id_categoria_producto)

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

        if (form.checkValidity() === true) {   

            // console.log("Listo para registrar el producto")

            var file = $("#iptImagen").val();

            var codigoreg = $("#iptCodigoReg").val();

            var codigo = codigoreg.replace(/\s/g, '');

            var ext = file.substring(file.lastIndexOf("."));

            if(file != ""){
                if (ext != ".jpg" && ext != ".png" && ext != ".gif" && ext != ".jpeg" && ext != ".webp") {
                    mensajeToast('error', "La extensión " + ext + " no es una imagen válida");
                    imagen_valida = false;
                }

                if (!imagen_valida) {
                    return;
                }
                
                Swal.fire({
                    title: 'Está seguro de registrar el producto?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo registrarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        const inputImage = document.querySelector('#iptImagen');
                        
                        var datos = new FormData();
                        console.log("accion numero: "+ accion);
                        datos.append("accion", accion);
                        datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
                        datos.append("id_categoria_producto", id_categoria_producto); //id_categoria_producto
                        datos.append("descripcion_producto", $("#iptDescripcionReg").val()); //descripcion_producto
                        datos.append("imagen_producto", $("#iptImagen").val());
                        datos.append("archivo[]",inputImage.files[0])
                        datos.append("precio_compra", $("#iptPrecioCompraReg").val()); //precio_compra_producto
                        datos.append("precio_paquetito", $("#iptPrecioVentaRegPaquete").val()); //precio_venta_producto
                        datos.append("precio_unidad", $("#iptPrecioVentaReg").val());
                        datos.append("precio_docena", $("#iptPrecioVentaRegDocena").val()); //precio_venta_producto
                        datos.append("precio_ciento", $("#iptPrecioVentaRegCiento").val()); //precio_venta_producto
                        datos.append("precio_millar", $("#iptPrecioVentaRegMillar").val()); //precio_venta_producto
                        datos.append("precio_caja", $("#iptPrecioVentaRegCaja").val()); //precio_venta_producto
                        datos.append("precio_fardo", $("#iptPrecioVentaRegFardo").val()); //precio_venta_producto
                        datos.append("cantidad_millar", $("#iptCantidadMillar").val());
                        datos.append("cantidad_docena", $("#iptCantidadDocena").val());
                        datos.append("cantidad_caja", $("#iptCantidadCaja").val());
                        datos.append("cantidad_fardo", $("#iptCantidadFardo").val());
                        datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
                        datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
                        datos.append("ventas_producto","0"); //stock_producto
                        datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val()); //minimo_stock_producto  
                        datos.append("ventas_producto", 0); //ventas_producto
                        datos.append("direccion",$("#iptUbicacionReg").val());

                        if(accion == 2){
                            var titulo_msj = "El producto se registró correctamente"

                            var parar = 0;

                            $.ajax({
                                async:false,
                                url: "ajax/productos.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 25,
                                    'codigo': codigo
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    console.log("es repetido ?? ", respuesta )
                                    if (respuesta === "repetido") {

                                        Swal.fire({
                                            icon: 'error',
                                            title: "el codigo ya existe"
                                        });

                                        parar = 1; 

                                        return 0;

                                    }

                                }
                            });

                            console.log(parar)

                            if(parar == 1 ){
                                return;
                            }
                        }

                        if(accion == 4){
                            var titulo_msj = "El producto se actualizó correctamente"

                            $.ajax({
                                async:false,
                                url: "ajax/productos.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 25,
                                    'codigo': codigo
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    console.log("es repetido ?? ", respuesta )

                                }
                            });
                        }

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(respuesta) {

                                if (respuesta == "ok") {

                                    Swal.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlGestionarProducto").modal('hide');
                                    $("#iptImagen").val("");
                                    $("#iptCodigoReg").val("");
                                    $("#selCategoriaReg").val(0);
                                    $("#iptDescripcionReg").val("");
                                    $("#iptPrecioCompraReg").val("");
                                    $("#iptPrecioVentaReg").val("");
                                    $("iptPrecioVentaRegPaquete").val("");
                                    $("#iptPrecioVentaRegDocena").val("");
                                    $("#iptPrecioVentaRegCiento").val("");
                                    $("#iptPrecioVentaRegMillar").val("");
                                    $("#iptPrecioVentaRegCaja").val("");
                                    $("#iptPrecioVentaRegFardo").val("");
                                    $("#iptCantidadMillar").val("");
                                    $("#iptCantidadDocena").val("");
                                    $("#iptCantidadFardo").val("");
                                    $("#iptCantidadCaja").val("");
                                    $("#iptUtilidadReg").val("");
                                    $("#iptStockReg").val("");
                                    $("#iptMinimoStockReg").val("");
                                    $("#iptUbicacionReg").val("");

                                    $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
                                    $(".needs-validation").removeClass("was-validated");

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }

                            }
                        });

                    }
                })

            }else{

                console.log("codigo : -", codigo)

                
                
                Swal.fire({
                    title: 'Está seguro de hacer los siguientes cambios?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo registrarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if(accion == 2){
                        var titulo_msj = "El producto se registró correctamente"
                        accion = 22

                        var parar = 0;

                        $.ajax({
                            async:false,
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 25,
                                'codigo': codigo
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("es repetido ?? ", respuesta )
                                if (respuesta === "repetido") {

                                    Swal.fire({
                                        icon: 'error',
                                        title: "el codigo ya existe"
                                    });

                                    parar = 1; 

                                    return 0;

                                }

                            }
                        });

                        console.log(parar)

                        if(parar == 1 ){
                            return;
                        }
                    }

                    if(accion == 4){
                        var titulo_msj = "El producto se actualizó correctamente"
                        accion = 24

                        $.ajax({
                            async:false,
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 25,
                                'codigo': codigo
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("es repetido ?? ", respuesta )

                            }
                        });
                    }

                    if (result.isConfirmed) {
                        const inputImage = document.querySelector('#iptImagen');
                        var datos = new FormData();
                        console.log("accion numero 2: "+ accion);
                        datos.append("accion", accion);
                        datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
                        datos.append("id_categoria_producto", id_categoria_producto); //id_categoria_producto
                        datos.append("descripcion_producto", $("#iptDescripcionReg").val()); //descripcion_producto
                        datos.append("precio_compra", $("#iptPrecioCompraReg").val()); //precio_compra_producto
                        datos.append("precio_paquetito", $("#iptPrecioVentaRegPaquete").val()); //precio_venta_producto
                        datos.append("precio_unidad", $("#iptPrecioVentaReg").val());
                        datos.append("precio_docena", $("#iptPrecioVentaRegDocena").val()); //precio_venta_producto
                        datos.append("precio_ciento", $("#iptPrecioVentaRegCiento").val()); //precio_venta_producto
                        datos.append("precio_millar", $("#iptPrecioVentaRegMillar").val()); //precio_venta_producto
                        datos.append("precio_caja", $("#iptPrecioVentaRegCaja").val()); //precio_venta_producto
                        datos.append("precio_fardo", $("#iptPrecioVentaRegFardo").val()); //precio_venta_producto
                        datos.append("cantidad_millar", $("#iptCantidadMillar").val());
                        datos.append("cantidad_docena", $("#iptCantidadDocena").val());
                        datos.append("cantidad_caja", $("#iptCantidadCaja").val());
                        datos.append("cantidad_fardo", $("#iptCantidadFardo").val());
                        datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
                        datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
                        datos.append("ventas_producto","0"); //stock_producto
                        datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val()); //minimo_stock_producto  
                        datos.append("ventas_producto", 0); //ventas_producto
                        datos.append("direccion",$("#iptUbicacionReg").val());

                        

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(respuesta) {

                                if (respuesta == "ok") {

                                    Swal.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlGestionarProducto").modal('hide');
                                    $("#iptImagen").val("");
                                    $("#iptCodigoReg").val("");
                                    $("#selCategoriaReg").val(0);
                                    $("#iptDescripcionReg").val("");
                                    $("#iptPrecioCompraReg").val("");
                                    $("#iptPrecioVentaReg").val("");
                                    $("iptPrecioVentaRegPaquete").val("");
                                    $("#iptPrecioVentaRegDocena").val("");
                                    $("#iptPrecioVentaRegCiento").val("");
                                    $("#iptPrecioVentaRegMillar").val("");
                                    $("#iptPrecioVentaRegCaja").val("");
                                    $("#iptPrecioVentaRegFardo").val("");
                                    $("#iptCantidadMillar").val("");
                                    $("#iptCantidadDocena").val("");
                                    $("#iptCantidadFardo").val("");
                                    $("#iptCantidadCaja").val("");
                                    $("#iptUtilidadReg").val("");
                                    $("#iptStockReg").val("");
                                    $("#iptMinimoStockReg").val("");

                                    $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
                                    $(".needs-validation").removeClass("was-validated");

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }

                            }
                        });

                    }
                })
            }

                

            


            
        }else {
            console.log("No paso la validacion")
        }

        form.classList.add('was-validated');

    });
});


/*===================================================================*/
//EVENTO QUE LIMPIA LOS MENSAJES DE ALERTA DE INGRESO DE DATOS DE CADA INPUT AL CANCELAR LA VENTANA MODAL
/*===================================================================*/
document.getElementById("btnCancelarRegistro").addEventListener("click", function() {
    $(".needs-validation").removeClass("was-validated");
    $("#mdlGestionarProducto").modal('hide');
                                $("#iptImagen").val("");
                                $("#iptCodigoReg").val("");
                                $("#selCategoriaReg").val(0);
                                $("#iptDescripcionReg").val("");
                                $("#iptPrecioCompraReg").val("");
                                $("#iptPrecioVentaReg").val("");
                                $("iptPrecioVentaRegPaquete").val("");
                                $("#iptPrecioVentaRegDocena").val("");
                                $("#iptPrecioVentaRegCiento").val("");
                                $("#iptPrecioVentaRegMillar").val("");
                                $("#iptPrecioVentaRegCaja").val("");
                                $("#iptPrecioVentaRegFardo").val("");
                                $("#iptCantidadMillar").val("");
                                $("#iptCantidadDocena").val("");
                                $("#iptCantidadFardo").val("");
                                $("#iptCantidadCaja").val("");
                                $("#iptUtilidadReg").val("");
                                $("#iptStockReg").val("");
                                $("#iptMinimoStockReg").val("");

                                $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
})

    function verCategoria(selCategoriaReg){
        var selectedValue = selCategoriaReg.value;
            console.log(selectedValue);
            
                    // Verifica si el valor seleccionado es "Bolsas (puesto 25)"
                if (selectedValue == 25) {
                    // Configura los campos a 0 y deshabilita la edición
                    iptPrecioVentaReg.value = '0';
                    iptPrecioVentaReg.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegPaquete.value = '';
                    iptPrecioVentaRegPaquete.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegDocena.value = '0';
                    iptPrecioVentaRegDocena.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCiento.value = '0';
                    iptPrecioVentaRegCiento.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegMillar.value = '';
                    iptPrecioVentaRegMillar.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCaja.value = '0';
                    iptPrecioVentaRegCaja.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegFardo.value = '';
                    iptPrecioVentaRegFardo.readOnly = false;
                } else if (selectedValue == 26) {
                    // Verifica si el valor seleccionado es "Cintas(puesto 26)"
                    iptPrecioVentaReg.value = '';
                    iptPrecioVentaReg.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegPaquete.value = '0';
                    iptPrecioVentaRegPaquete.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegDocena.value = '';
                    iptPrecioVentaRegDocena.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCiento.value = '0';
                    iptPrecioVentaRegCiento.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegMillar.value = '0';
                    iptPrecioVentaRegMillar.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCaja.value = '';
                    iptPrecioVentaRegCaja.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegFardo.value = '0';
                    iptPrecioVentaRegFardo.readOnly = true;
                } else if (selectedValue == 27) {
                    // Verifica si el valor seleccionado es "Envases(puesto 27)"
                    iptPrecioVentaReg.value = '0';
                    iptPrecioVentaReg.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegPaquete.value = '0';
                    iptPrecioVentaRegPaquete.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegDocena.value = '0';
                    iptPrecioVentaRegDocena.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCiento.value = '';
                    iptPrecioVentaRegCiento.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegMillar.value = '';
                    iptPrecioVentaRegMillar.readOnly = false;
                    /////////////////////////////////////////
                    iptPrecioVentaRegCaja.value = '0';
                    iptPrecioVentaRegCaja.readOnly = true;
                    /////////////////////////////////////////
                    iptPrecioVentaRegFardo.value = '0';
                    iptPrecioVentaRegFardo.readOnly = true;
                    
                } else{
                    // // Si no es "Bolsas", habilita los campos
                    // // Verifica si el valor seleccionado es "Envases(puesto 27)"
                    // iptPrecioVentaReg.value = '';
                    // iptPrecioVentaReg.readOnly = false;
                    // /////////////////////////////////////////
                    // iptPrecioVentaRegPaquete.value = '';
                    // iptPrecioVentaRegPaquete.readOnly = false;
                    // /////////////////////////////////////////
                    // iptPrecioVentaRegDocena.value = '';
                    // iptPrecioVentaRegDocena.readOnly = false;
                    // /////////////////////////////////////////
                    // iptPrecioVentaRegCiento.value = '';
                    // iptPrecioVentaRegCiento.readOnly = false;
                    // /////////////////////////////////////////
                    // iptPrecioVentaRegMillar.value = '';
                    // iptPrecioVentaRegMillar.readOnly = false;
                    // /////////////////////////////////////////
                    // iptPrecioVentaRegCaja.value = '';
                    // iptPrecioVentaRegCaja.readOnly = false;
                    /////////////////////////////////////////
                    }
    }

    function CargarSiguienteNumero(){

        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 27, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                var cantidades = respuesta[0]["total"];

                cantidades = parseInt(cantidades) + 100000000001;

                console.log("cantidades : "+ cantidades)

                $("#iptCodigoReg").val(cantidades)

            }
        });
}
</script><script>
 //document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);


</script>