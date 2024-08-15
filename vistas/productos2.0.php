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
                                    <th>id</th>                             <!--01xv-->
                                    <th>Codigo</th>                         <!--02v-->
                                    <th>Id Categoria</th>                   <!--03xv-->
                                    <th>Categoría</th>                      <!--04v-->
                                    <th>Producto</th>                       <!--05v-->
                                    <th class="text-center">S/. Und</th>    <!--06v-->
                                    <th class="text-center">S/. Paq</th>    <!--07v-->
                                    <th class="text-center">S/. Doc</th>    <!--08v-->
                                    <th class="text-center">S/. Cie</th>    <!--09v-->
                                    <th class="text-center">S/. Mil</th>    <!--10v-->
                                    <th class="text-center">S/. Cjs</th>    <!--11v-->
                                    <th class="text-center">S/. Far</th>    <!--12v-->
                                    <th class="text-center">S/. Pla</th>    <!--13v-->
                                    <th>Cant x doc</th>                     <!--14vx-->
                                    <th>Cant x mill</th>                    <!--15vx-->
                                    <th>Cant x Cjs</th>                     <!--16vx-->
                                    <th>Cant x Far</th>                     <!--17vx-->
                                    <th>Cant x Pla</th>                     <!--18vx-->
                                    <th>Compra</th>                         <!--19vx-->
                                    <th>Utilidad</th>                       <!--20vx-->
                                    <th>Stock</th>                          <!--21vx-->
                                    <th>Min. Stock</th>                     <!--22vx-->
                                    <th>Ventas</th>                         <!--23vx-->
                                    <th>Fecha Creación</th>                 <!--24vx-->
                                    <th>Fecha Actualización</th>            <!--25vx-->
                                    <th>Nombre de la imagen</th>            <!--26vx-->
                                    <th>Direccion</th>                      <!--27vx-->
                                    <th class="text-center">Opciones</th>   <!--28v-->
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
                                <input type="text" class="form-control form-control-sm to-uppercase" id="selCategoriaReg"
                                    name="selCategoriaReg" placeholder="Código de Barras" required onclick="this.select()">
                                <div class="invalid-feedback">Ingrese un texto para buscar</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptUbicacionReg"><i class="fas fa-map-marker fs-6"></i>
                                    <span class="small">Ubicacion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm to-uppercase" id="iptUbicacionReg"
                                    name="iptUbicacionReg" placeholder="Ubicacion del producto" required>
                                <div class="invalid-feedback">Ingrese un texto para buscar</div>
                            </div>
                        </div>

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
                                        <input type="text" class="form-control form-control-sm to-uppercase" id="iptDescripcionReg"
                                            placeholder="Descripción" required>
                                        <div class="invalid-feedback">Debe ingresar la descripción</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Stock del producto -->
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                            <span class="small">Stock</span><span class="text-danger">*</span></label>
                                        <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                            placeholder="Stock" required>
                                        <div class="invalid-feedback">Debe ingresar el stock</div>
                                    </div>
                                </div>

                                <!-- Columna para registro del Minimo de Stock -->
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="" for="iptMinimoStockReg"><i
                                                class="fas fa-minus-circle fs-6"></i> <span class="small">Mínimo
                                                Stock</span><span class="text-danger">*</span></label>
                                        <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                            placeholder="Mínimo Stock" required>
                                        <div class="invalid-feedback">Debe ingresar el minimo stock</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="button" class="btn btn-success mt-3 w-100" data-bs-dismiss="modal" id="btnGestionarPrecios">GestionarPrecios [F8]</button>
                                </div>

                            </div>
                        </div>          

                    </div>

                    <div class="row">
                        <!-- Columna para registro de la descripción del producto -->
                        <div class="col-12 col-lg-6">
                            <button type="button" class="btn btn-danger mt-3 w-100" id="btnCancelarRegistro">Cancelar [F4]</button>
                        </div>

                        <div class="col-12 col-lg-6">
                            <button type="button" class="btn btn-info mt-3 w-100" id="btnGuardarProducto">Guardar Producto [F10]</button>
                            <button type="button" class="btn btn-warning mt-3 w-100" id="btnGuardarCambios">Guardar Cambios [F10]</button>
                        </div>

                    </div>

                </form>
            
            </div>

        </div>
    </div>


</div>

<div class="modal fade" id="mdlGestionarPrecios" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Precios</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->

                    <div class="row">
                    
                        <table id="lstProductosPrecios" class="display nowrap table-striped w-100 shadow ">
                            <thead class="bg-gray text-left fs-6">
                                <tr>
                                    <th>Id</th>
                                    <th>UM</th>
                                    <th>Precio (S/.)</th>
                                    <th>Min    (S/.)</th>
                                    <th>Cantidad</th>

                                </tr>
                            </thead>
                            <tbody class="small text-left fs-6">
                            </tbody>
                        </table>

                    </div>

                    <div class="row">
                        <!-- Columna para registro de la descripción del producto -->

                        <div class="col-12 col-lg-6">
                            <button type="button" class="btn btn-primary mt-3 w-100" id="btnRegresarPrecios">Regresar [F10]</button>
                        </div>
                    </div>

                </form>
            
            </div>

        </div>
    </div>


</div>

<!-- Incluye la librería JSZip desde la CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>

<!-- Incluye la librería SheetJS desde la CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script>

var accion;
var edicion = false;
var tabla11, tabla12;
var operacion_stock = 0;
var isActionInProgress = false; 

var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});

$(document).ready(function() {

    CargarTablas();

    CargarBuscadores();

    CargarBotonesTable();

    CargarBotonesInterfas();

    darCategorias();

});

$(document).on('keydown', function(event) {

    if ($('#mdlGestionarPrecios').is(':visible')) {

        if(event.keyCode === 40 || event.keyCode === 39 || event.keyCode === 38 || event.keyCode === 37){

            event.preventDefault()
            var $currentCell = $(':focus');
            // Si no hay una celda enfocada, hacer clic en la primera celda editable
            if ($currentCell.length === 0) {
                
                    console.log("activando")
                    var $firstEditableCell = $('#lstProductosPrecios td.editable').first();
                    if ($firstEditableCell.length > 0) {
                        $firstEditableCell.trigger('click');
                        return; // Salir de la función ya que hemos enfocado la celda
                    }
                
            }

        }

        if (event.keyCode === 121) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnRegresarPrecios').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }
  
        }
    }

    if ($('#mdlGestionarProducto').is(':visible')) {

        if (event.keyCode === 121) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                if(edicion){
                    $('#btnGuardarCambios').click();
                }else{
                    $('#btnGuardarProducto').click();
                }

                

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }
  
        }

        if (event.keyCode === 119) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnGestionarPrecios').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }
  
        }

        if (event.keyCode === 115) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnCancelarRegistro').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }
  
        }
    }

});

</script>

<script>

    function CargarTablas(){

        /*===================================================================*/
        // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
        /*===================================================================*/
        tabla11 = $("#tbl_productos").DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    text: 'Agregar Producto',
                    className: 'addNewRecord',
                    action: function(e, dt, node, config) {
                        $("#btnGuardarProducto").show();
                        $("#btnGuardarCambios").hide();
                        edicion = false; 
                        $("#mdlGestionarProducto").modal('show');
                        CargarSiguienteNumero();
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
            pageLength: [5, 10, 20, 30, 50, 100],
            pageLength: 20,
            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 30 //1: LISTAR PRODUCTOS
                },
            },
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    className: 'control'
                },
                {
                    targets: [1,3,14,15,16,17,18,19,20,21,22,23,24,25,26,27],
                    visible: false
                },

                {
                    targets: [6, 7, 8, 9, 10, 11, 12, 13],
                    render: function(data, type, row, meta) {
                        let formattedData = "S/. " + parseFloat(data).toFixed(2);
                        let guion = "-"
                        if (data <= 0) {
                            return `<span style="color: black; display: block; text-align: center;">${guion}</span>`;
                        } else {
                            return `<strong><span style="color: green; display: block; text-align: center;">${formattedData}</span></strong>`;
                        }
                    }
                }, 

                {
                    targets: [2, 5],
                    render: function(data, type, row, meta) {

                        return `<strong><span>${data}</span></strong>`;

                    }
                }, 

                {
                    targets: 21,
                    createdCell: function(td, cellData, rowData, row, col) {
                        if (parseFloat(rowData[21]) <= parseFloat(rowData[22])) {
                            $(td).parent().css('background', '#FF5733')
                        }
                    }
                },
                    
                {
                    targets: 28,
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

        tabla12 = $("#lstProductosPrecios").DataTable({
            columnDefs: [
                {
                    targets: [2, 3, 4],
                    createdCell: function (td, cellData, rowData, row, col) {
                        // Verificar si cellData está vacío
                        if (cellData === "" || cellData === null || cellData === undefined) {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        }
                    },
                    className: "text-center",
                },
                {
                    targets:[0,1],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
            ],
            pageLength: 10,
            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 31 //1: LISTAR PRODUCTOS
                },
            },
            responsive: {
                details: {
                    type: 'column'
                }
            },
            scrollX:true,
            "order": [
                [0, 'asc']
            ],
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstProductosPrecios'));
            }
        });
        
        tabla12.on('init.dt', function () {

            $('#lstProductosPrecios tbody').off('click', 'td.editable');
            $('#lstProductosPrecios tbody').off('keydown', 'td.editable');

            $('#lstProductosPrecios tbody').on('click', 'td.editable', function() {
                var range, selection;
                var $cell = $(this);
                
                // Asegurarse de que la celda es editable
                if ($cell.attr('contenteditable') === 'true') {
                    // Enfocar la celda
                    $cell.focus();
                    Seleccionar($cell);
                }
            });

            $('#lstProductosPrecios tbody').on('keydown', 'td.editable', function() {

                var $currentCell = $(':focus');
                var colIndex = $currentCell.index();
                
                // Navegar hacia abajo
                if (event.keyCode === 40) { // Flecha abajo
                    var $nextRow = $currentCell.closest('tr').next('tr');
                    if ($nextRow.length > 0) {
                        $nextRow.find('td').eq(colIndex).trigger('click');
                        
                    }
                }
                
                // Navegar hacia arriba
                if (event.keyCode === 38) { // Flecha arriba
                    var $prevRow = $currentCell.closest('tr').prev('tr');
                    if ($prevRow.length > 0) {
                        $prevRow.find('td').eq(colIndex).trigger('click');
                    }
                }
                
                // Navegar hacia la izquierda
                if (event.keyCode === 37) { // Flecha izquierda
                    var $prevCell = $currentCell.prev('td');
                    if ($prevCell.length > 0) {
                        $prevCell.trigger('click');
                    }
                }
                
                // Navegar hacia la derecha
                if (event.keyCode === 39) { // Flecha derecha
                    var $nextCell = $currentCell.next('td');
                    if ($nextCell.length > 0) {
                        $nextCell.trigger('click');
                    }
                }

            });

        });

    }

    function CargarBuscadores(){

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
        /*===================================================================*/
        $("#iptCodigoBarras").keyup(function() {
            tabla11.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptCategoria").keyup(function() {
            tabla11.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptProducto").keyup(function() {
            tabla11.column($(this).data('index')).search(this.value).draw();
        })

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
        /*===================================================================*/
        $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function() {
            tabla11.draw();
        })

        $.fn.dataTable.ext.search.push(

            function(settings, data, dataIndex) {

                // Verifica si el filtro se aplica solo a la tabla con el ID 'tbl_productos'
                if (settings.nTable.id !== 'tbl_productos') {
                    return true;
                }

                var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
                var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());

                var precio = data[6];

                if(precio === "-"){
                    precio = data[7]
                }

                if(precio === "-"){
                    precio = data[8]
                }

                if(precio === "-"){
                    precio = data[9]
                }

                if(precio === "-"){
                    precio = data[10]
                }

                if(precio === "-"){
                    precio = data[11]
                }

                if(precio === "-"){
                    precio = data[12]
                }

                if(precio === "-"){
                    precio = data[13]
                }else{
                    precio = "S/. 0.00";
                }
                
                var col_venta = precio.replace("S/. ", "");

                col_venta = parseFloat(col_venta);

                if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
                    (isNaN(precioDesde) && col_venta <= precioHasta) ||
                    (precioDesde <= col_venta && isNaN(precioHasta)) ||
                    (precioDesde <= col_venta && col_venta <= precioHasta)) {
                    return true;
                }

                return false;
            }
        )

    }

    function CargarBotonesTable(){

        /* ======================================================================================
        EVENTO AL DAR CLICK EN EL BOTON AUMENTAR STOCK
        =========================================================================================*/
        $('#tbl_productos tbody').on('click', '.btnAumentarStock', function() {

           

        })

        /* ======================================================================================
        EVENTO AL DAR CLICK EN EL BOTON DISMINUIR STOCK
        =========================================================================================*/
        $('#tbl_productos tbody').on('click', '.btnDisminuirStock', function() {

           

        })

        /* ======================================================================================
        EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
        =========================================================================================*/
        $('#tbl_productos tbody').on('click', '.btnEditarProducto', function() {

            edicion = true; 

            $("#btnGuardarProducto").hide();
            $("#btnGuardarCambios").show();

            var data = tabla11.row($(this).parents('tr')).data();
            if(data == undefined){
                data = tabla11.row($(this)).data();
            }
            console.log(data);

            var nombre  = nombreCategoria(data["id_categoria"])

            $("#iptCodigoReg").val(data["codigo_producto"]); 
            $("#iptDescripcionReg").val(data["descripcion_producto"]);
            $("#iptStockReg").val(parseFloat(data["stock"]));
            $("#iptMinimoStockReg").val(parseFloat(data["minimo_stock"]));
            $("#iptUbicacionReg").val(data["direccion"]);
            $("#previewImg").attr("src","vistas/assets/imagenes/productos/" + data["imagen_producto"]);

            var codigo_producto_precios = data["codigo_producto"];

            $.ajax({
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                    'accion': 36,
                    'codigo_producto':codigo_producto_precios,
                },
                dataType: 'json',
                success: function(respuesta) {

                    console.log(respuesta[0]);
                    
                    var datos = respuesta[0];

                    var precios = [datos["precio_unidad"],
                        datos["precio_paquetito"],
                        datos["precio_docena"],
                        datos["precio_ciento"],
                        datos["precio_millar"],
                        datos["precio_caja"],
                        datos["precio_fardo"],
                        datos["precio_plancha"],
                        
                        datos["precio_unidad_2"],
                        datos["precio_paquetito_2"],
                        datos["precio_docena_2"],
                        datos["precio_ciento_2"],
                        datos["precio_millar_2"],
                        datos["precio_caja_2"],
                        datos["precio_fardo_2"],
                        datos["precio_plancha_2"],
                    
                        datos["cantidad_ciento"],
                        datos["cantidad_millar"],
                        datos["cantidad_caja"],
                        datos["cantidad_fardo"],
                        datos["cantidad_plancha"],]

                    colocarDatosCeldasEspecificas(precios);

                    $("#mdlGestionarProducto").modal('show');

                }
            })

            

        })



        /* ======================================================================================
        EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
        =========================================================================================*/
        $('#tbl_productos tbody').on('click', '.btnEliminarProducto', function() {
            
            accion = 5; //seteamos la accion para editar
            
            var data = tabla11.row($(this).parents('tr')).data();

            if(data == undefined){
                data = tabla11.row($(this)).data();
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

                                tabla11.ajax.reload();

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

    }

    function CargarBotonesInterfas(){

        /*===================================================================*/
        // EVENTO PARA LIMPIAR INPUTS DE CRITERIOS DE BUSQUEDA
        /*===================================================================*/
        $("#btnLimpiarBusqueda").on('click', function() {

            $("#iptCodigoBarras").val('')
            $("#iptCategoria").val('')
            $("#iptProducto").val('')
            $("#iptPrecioVentaDesde").val('')
            $("#iptPrecioVentaHasta").val('')

            tabla11.search('').columns().search('').draw();
        })

        $("#btnGestionarPrecios").on('click', function() {

            $("#mdlGestionarProducto").modal("hide")

            $("#mdlGestionarPrecios").modal("show")

        })

        $("#btnRegresarPrecios").on('click', function() {

            $("#mdlGestionarProducto").modal("show")

            $("#mdlGestionarPrecios").modal("hide")

        })

        $("#btnCancelarRegistro").on('click', function() {

            $("#mdlGestionarProducto").modal("hide")

            LimpiarModal();

        })

        $("#btnGuardarProducto").on('click', function() {
            
            var alerta = confirmarAlerta();

            console.log("alerta : " , alerta);

            var datosEspecificos = obtenerDatosCeldasEspecificas();

            if(alerta === "Con Foto"){

                var codigoreg = $("#iptCodigoReg").val();
                var codigo = codigoreg.replace(/\s/g, '');
            
                var codigo_producto         = codigo;
                var id_categoria_producto   = $("#selCategoriaReg").val();
                var descripcion_producto    = $("#iptDescripcionReg").val().toUpperCase();
                var stock_producto          = $("#iptStockReg").val();
                var minimo_stock_producto   = $("#iptMinimoStockReg").val();
                var direccion               = $("#iptUbicacionReg").val().toUpperCase();

                var precio_unidad           =  datosEspecificos[0];
                var precio_paquetito        =  datosEspecificos[1];
                var precio_docena           =  datosEspecificos[2];
                var precio_ciento           =  datosEspecificos[3];
                var precio_millar           =  datosEspecificos[4];
                var precio_caja             =  datosEspecificos[5];
                var precio_fardo            =  datosEspecificos[6];
                var precio_plancha          =  datosEspecificos[7];

                var precio_unidad_2           =  datosEspecificos[8];
                var precio_paquetito_2        =  datosEspecificos[9];
                var precio_docena_2           =  datosEspecificos[10];
                var precio_ciento_2           =  datosEspecificos[11];
                var precio_millar_2           =  datosEspecificos[12];
                var precio_caja_2             =  datosEspecificos[13];
                var precio_fardo_2            =  datosEspecificos[14];
                var precio_plancha_2          =  datosEspecificos[15];
        
                var cantidad_ciento         =  datosEspecificos[16];
                var cantidad_millar         =  datosEspecificos[17];
                var cantidad_caja           =  datosEspecificos[18];
                var cantidad_fardo          =  datosEspecificos[19];
                var cantidad_plancha        =  datosEspecificos[20];

                var datos = new FormData();
                var accion = 32;
                const inputImage = document.querySelector('#iptImagen');
                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto);
                datos.append("id_categoria_producto", id_categoria_producto);
                datos.append("descripcion_producto", descripcion_producto);
                datos.append("stock_producto", stock_producto);
                datos.append("minimo_stock_producto", minimo_stock_producto);
                datos.append("direccion", direccion);

                datos.append("precio_unidad", precio_unidad);
                datos.append("precio_paquetito", precio_paquetito);
                datos.append("precio_docena", precio_docena);
                datos.append("precio_ciento", precio_ciento);
                datos.append("precio_millar", precio_millar);
                datos.append("precio_caja", precio_caja);
                datos.append("precio_fardo", precio_fardo);
                datos.append("precio_plancha", precio_plancha);

                datos.append("precio_unidad_2", precio_unidad_2);
                datos.append("precio_paquetito_2", precio_paquetito_2);
                datos.append("precio_docena_2", precio_docena_2);
                datos.append("precio_ciento_2", precio_ciento_2);
                datos.append("precio_millar_2", precio_millar_2);
                datos.append("precio_caja_2", precio_caja_2);
                datos.append("precio_fardo_2", precio_fardo_2);
                datos.append("precio_plancha_2", precio_plancha_2);

                datos.append("cantidad_ciento", cantidad_ciento);
                datos.append("cantidad_millar", cantidad_millar);
                datos.append("cantidad_caja", cantidad_caja);
                datos.append("cantidad_fardo", cantidad_fardo);
                datos.append("cantidad_plancha", cantidad_plancha);

                datos.append("imagen_producto", $("#iptImagen").val());
                datos.append("archivo[]",inputImage.files[0])

                for (var pair of datos.entries()) {
                    console.log(pair[0]+ ': ' + pair[1]); 
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
                                title: "Producto Registrado Correctamente (con foto)"
                            });

                            tabla11.ajax.reload(); $("#mdlGestionarProducto").modal("hide")

                            LimpiarModal()

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'El producto no se pudo registrar'
                            });
                        }

                    }
                });

            }else if(alerta === "Sin Foto"){

                var codigoreg = $("#iptCodigoReg").val();
                var codigo = codigoreg.replace(/\s/g, '');
            
                var codigo_producto         = codigo;
                var id_categoria_producto   = $("#selCategoriaReg").val();
                var descripcion_producto    = $("#iptDescripcionReg").val().toUpperCase();
                var stock_producto          = $("#iptStockReg").val();
                var minimo_stock_producto   = $("#iptMinimoStockReg").val();
                var direccion               = $("#iptUbicacionReg").val().toUpperCase();

                var precio_unidad           =  datosEspecificos[0];
                var precio_paquetito        =  datosEspecificos[1];
                var precio_docena           =  datosEspecificos[2];
                var precio_ciento           =  datosEspecificos[3];
                var precio_millar           =  datosEspecificos[4];
                var precio_caja             =  datosEspecificos[5];
                var precio_fardo            =  datosEspecificos[6];
                var precio_plancha          =  datosEspecificos[7];

                var precio_unidad_2           =  datosEspecificos[8];
                var precio_paquetito_2        =  datosEspecificos[9];
                var precio_docena_2           =  datosEspecificos[10];
                var precio_ciento_2           =  datosEspecificos[11];
                var precio_millar_2           =  datosEspecificos[12];
                var precio_caja_2             =  datosEspecificos[13];
                var precio_fardo_2            =  datosEspecificos[14];
                var precio_plancha_2          =  datosEspecificos[15];
        
                var cantidad_ciento         =  datosEspecificos[16];
                var cantidad_millar         =  datosEspecificos[17];
                var cantidad_caja           =  datosEspecificos[18];
                var cantidad_fardo          =  datosEspecificos[19];
                var cantidad_plancha        =  datosEspecificos[20];

                var datos = new FormData();
                var accion = 33;
                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto);
                datos.append("id_categoria_producto", id_categoria_producto);
                datos.append("descripcion_producto", descripcion_producto);
                datos.append("stock_producto", stock_producto);
                datos.append("minimo_stock_producto", minimo_stock_producto);
                datos.append("direccion", direccion);

                datos.append("precio_unidad", precio_unidad);
                datos.append("precio_paquetito", precio_paquetito);
                datos.append("precio_docena", precio_docena);
                datos.append("precio_ciento", precio_ciento);
                datos.append("precio_millar", precio_millar);
                datos.append("precio_caja", precio_caja);
                datos.append("precio_fardo", precio_fardo);
                datos.append("precio_plancha", precio_plancha);

                datos.append("precio_unidad_2", precio_unidad_2);
                datos.append("precio_paquetito_2", precio_paquetito_2);
                datos.append("precio_docena_2", precio_docena_2);
                datos.append("precio_ciento_2", precio_ciento_2);
                datos.append("precio_millar_2", precio_millar_2);
                datos.append("precio_caja_2", precio_caja_2);
                datos.append("precio_fardo_2", precio_fardo_2);
                datos.append("precio_plancha_2", precio_plancha_2);

                datos.append("cantidad_ciento", cantidad_ciento);
                datos.append("cantidad_millar", cantidad_millar);
                datos.append("cantidad_caja", cantidad_caja);
                datos.append("cantidad_fardo", cantidad_fardo);
                datos.append("cantidad_plancha", cantidad_plancha);

                // for (var pair of datos.entries()) {
                //     console.log(pair[0]+ ': ' + pair[1]); 
                // }

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
                                title: "Producto Registrado Correctamente (sin foto)"
                            });
                            
                            CargarSiguienteNumero()
                            LimpiarModal()
                            tabla11.ajax.reload(); $("#mdlGestionarProducto").modal("hide")

                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'El producto no se pudo registrar'
                            });
                        }

                    }
                });
                
            }else if(alerta === "Foto Erroneo"){

                Toast.fire({
                    icon: 'warning',
                    title: "La Fotografia no es valido para guardarlo",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else if(alerta === "falta datos"){

                Toast.fire({
                    icon: 'warning',
                    title: "Faltan datos para completar",
                    showConfirmButton: false,
                    timer: 1500
                });

            }

        })

        $("#btnGuardarCambios").on('click', function() {
            
            var alerta = confirmarAlerta();

            console.log("alerta : " , alerta);

            var datosEspecificos = obtenerDatosCeldasEspecificas();

            if(alerta === "Con Foto"){

                var codigoreg = $("#iptCodigoReg").val();
                var codigo = codigoreg.replace(/\s/g, '');
                const inputImage = document.querySelector('#iptImagen');
            
                var codigo_producto         = codigo;
                var id_categoria_producto   = $("#selCategoriaReg").val();
                var descripcion_producto    = $("#iptDescripcionReg").val().toUpperCase();
                var stock_producto          = $("#iptStockReg").val();
                var minimo_stock_producto   = $("#iptMinimoStockReg").val();
                var direccion               = $("#iptUbicacionReg").val().toUpperCase();

                var precio_unidad           =  datosEspecificos[0];
                var precio_paquetito        =  datosEspecificos[1];
                var precio_docena           =  datosEspecificos[2];
                var precio_ciento           =  datosEspecificos[3];
                var precio_millar           =  datosEspecificos[4];
                var precio_caja             =  datosEspecificos[5];
                var precio_fardo            =  datosEspecificos[6];
                var precio_plancha          =  datosEspecificos[7];

                var precio_unidad_2           =  datosEspecificos[8];
                var precio_paquetito_2        =  datosEspecificos[9];
                var precio_docena_2           =  datosEspecificos[10];
                var precio_ciento_2           =  datosEspecificos[11];
                var precio_millar_2           =  datosEspecificos[12];
                var precio_caja_2             =  datosEspecificos[13];
                var precio_fardo_2            =  datosEspecificos[14];
                var precio_plancha_2          =  datosEspecificos[15];
        
                var cantidad_ciento         =  datosEspecificos[16];
                var cantidad_millar         =  datosEspecificos[17];
                var cantidad_caja           =  datosEspecificos[18];
                var cantidad_fardo          =  datosEspecificos[19];
                var cantidad_plancha        =  datosEspecificos[20];

                var datos = new FormData();
                var accion = 34;
                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto);
                datos.append("id_categoria_producto", id_categoria_producto);
                datos.append("descripcion_producto", descripcion_producto);
                datos.append("stock_producto", stock_producto);
                datos.append("minimo_stock_producto", minimo_stock_producto);
                datos.append("direccion", direccion);

                datos.append("precio_unidad", precio_unidad);
                datos.append("precio_paquetito", precio_paquetito);
                datos.append("precio_docena", precio_docena);
                datos.append("precio_ciento", precio_ciento);
                datos.append("precio_millar", precio_millar);
                datos.append("precio_caja", precio_caja);
                datos.append("precio_fardo", precio_fardo);
                datos.append("precio_plancha", precio_plancha);

                datos.append("precio_unidad_2", precio_unidad_2);
                datos.append("precio_paquetito_2", precio_paquetito_2);
                datos.append("precio_docena_2", precio_docena_2);
                datos.append("precio_ciento_2", precio_ciento_2);
                datos.append("precio_millar_2", precio_millar_2);
                datos.append("precio_caja_2", precio_caja_2);
                datos.append("precio_fardo_2", precio_fardo_2);
                datos.append("precio_plancha_2", precio_plancha_2);

                datos.append("cantidad_ciento", cantidad_ciento);
                datos.append("cantidad_millar", cantidad_millar);
                datos.append("cantidad_caja", cantidad_caja);
                datos.append("cantidad_fardo", cantidad_fardo);
                datos.append("cantidad_plancha", cantidad_plancha);

                datos.append("imagen_producto", $("#iptImagen").val());
                datos.append("archivo[]",inputImage.files[0])

                // for (var pair of datos.entries()) {
                //     console.log(pair[0]+ ': ' + pair[1]); 
                // }

                Swal.fire({
                    title: 'Está seguro de cambiar los datos?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo cambiarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    console.log("resultado valor: "+ result);

                    if (result.isConfirmed){

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
                                    tabla11.ajax.reload(); $("#mdlGestionarProducto").modal("hide")

                                    Swal.fire({
                                        icon: 'success',
                                        title: "Producto Registrado Correctamente (con foto)"
                                    });

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }

                            }
                        });

                    }

                });

            }else if(alerta === "Sin Foto"){

                var codigoreg = $("#iptCodigoReg").val();
                var codigo = codigoreg.replace(/\s/g, '');
            
                 var codigo_producto         = codigo;
                var id_categoria_producto   = $("#selCategoriaReg").val();
                var descripcion_producto    = $("#iptDescripcionReg").val().toUpperCase();
                var stock_producto          = $("#iptStockReg").val();
                var minimo_stock_producto   = $("#iptMinimoStockReg").val();
                var direccion               = $("#iptUbicacionReg").val().toUpperCase();

                var precio_unidad           =  datosEspecificos[0];
                var precio_paquetito        =  datosEspecificos[1];
                var precio_docena           =  datosEspecificos[2];
                var precio_ciento           =  datosEspecificos[3];
                var precio_millar           =  datosEspecificos[4];
                var precio_caja             =  datosEspecificos[5];
                var precio_fardo            =  datosEspecificos[6];
                var precio_plancha          =  datosEspecificos[7];

                var precio_unidad_2           =  datosEspecificos[8];
                var precio_paquetito_2        =  datosEspecificos[9];
                var precio_docena_2           =  datosEspecificos[10];
                var precio_ciento_2           =  datosEspecificos[11];
                var precio_millar_2           =  datosEspecificos[12];
                var precio_caja_2             =  datosEspecificos[13];
                var precio_fardo_2            =  datosEspecificos[14];
                var precio_plancha_2          =  datosEspecificos[15];
        
                var cantidad_ciento         =  datosEspecificos[16];
                var cantidad_millar         =  datosEspecificos[17];
                var cantidad_caja           =  datosEspecificos[18];
                var cantidad_fardo          =  datosEspecificos[19];
                var cantidad_plancha        =  datosEspecificos[20];

                var datos = new FormData();
                var accion = 35;
                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto);
                datos.append("id_categoria_producto", id_categoria_producto);
                datos.append("descripcion_producto", descripcion_producto);
                datos.append("stock_producto", stock_producto);
                datos.append("minimo_stock_producto", minimo_stock_producto);
                datos.append("direccion", direccion);

                datos.append("precio_unidad", precio_unidad);
                datos.append("precio_paquetito", precio_paquetito);
                datos.append("precio_docena", precio_docena);
                datos.append("precio_ciento", precio_ciento);
                datos.append("precio_millar", precio_millar);
                datos.append("precio_caja", precio_caja);
                datos.append("precio_fardo", precio_fardo);
                datos.append("precio_plancha", precio_plancha);

                datos.append("precio_unidad_2", precio_unidad_2);
                datos.append("precio_paquetito_2", precio_paquetito_2);
                datos.append("precio_docena_2", precio_docena_2);
                datos.append("precio_ciento_2", precio_ciento_2);
                datos.append("precio_millar_2", precio_millar_2);
                datos.append("precio_caja_2", precio_caja_2);
                datos.append("precio_fardo_2", precio_fardo_2);
                datos.append("precio_plancha_2", precio_plancha_2);

                datos.append("cantidad_ciento", cantidad_ciento);
                datos.append("cantidad_millar", cantidad_millar);
                datos.append("cantidad_caja", cantidad_caja);
                datos.append("cantidad_fardo", cantidad_fardo);
                datos.append("cantidad_plancha", cantidad_plancha);

                // for (var pair of datos.entries()) {
                //     console.log(pair[0]+ ': ' + pair[1]); 
                // }

                Swal.fire({
                    title: 'Está seguro de cambiar los datos?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo cambiarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    console.log("resultado valor: "+ result);

                    if (result.isConfirmed){

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log(respuesta)

                                if (respuesta == "ok") {
                                    tabla11.ajax.reload(); $("#mdlGestionarProducto").modal("hide") 

                                    Swal.fire({
                                        icon: 'success',
                                        title: "Producto Editado Correctamente"
                                    });

                                    LimpiarModal()

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }

                            }
                        });
                    
                    }

                });
                
            }else if(alerta === "Foto Erroneo"){

                Toast.fire({
                    icon: 'warning',
                    title: "La Fotografia no es valido para guardarlo",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else if(alerta === "falta datos"){

                Toast.fire({
                    icon: 'warning',
                    title: "Faltan datos para completar",
                    showConfirmButton: false,
                    timer: 1500
                });

            }

        })

    }

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

                cantidades = parseInt(cantidades) + 100000000003;

                console.log("cantidades : "+ cantidades)

                $("#iptCodigoReg").val(cantidades)

            }
        });
    }

    function ajustarHeadersDataTables(element) {
            if (element) {
                var observer = window.ResizeObserver ? new ResizeObserver(function(entries) {
                    entries.forEach(function(entry) {
                        $(entry.target).DataTable().columns.adjust();
                    });
                }) : null;

                // Function to add a datatable to the ResizeObserver entries array
                resizeHandler = function($table) {
                    if (observer)
                        observer.observe($table[0]);
                };

                // Initiate additional resize handling on datatable
                resizeHandler(element);
            }
    }

    function LimpiarModal(){
        $("#selCategoriaReg").val("");
        $("#iptUbicacionReg").val("");
        $("#iptImagen").val("");
        $("#iptDescripcionReg").val("");
        $("#iptStockReg").val("");
        $("#iptMinimoStockReg").val("");
        $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
        tabla12.ajax.reload();
    }

    function Seleccionar($elemento){
        // Crear un rango de selección
        var range = document.createRange();
        // Seleccionar el contenido del elemento
        range.selectNodeContents($elemento[0]);
        // Obtener la selección actual
        var selection = window.getSelection();
        // Limpiar la selección actual
        selection.removeAllRanges();
        // Agregar el rango de selección al objeto de selección
        selection.addRange(range);
    }

    function obtenerDatosCeldasEspecificas() {
        var datos = [];
        var celdasEspecificas = [
            [0, 2],
            [1, 2],
            [2, 2],
            [3, 2],
            [4, 2],
            [5, 2],
            [6, 2],
            [7, 2],
            [0, 3],
            [1, 3],
            [2, 3],
            [3, 3],
            [4, 3],
            [5, 3],
            [6, 3],
            [7, 3],
            [3, 4],
            [4, 4],
            [5, 4],
            [6, 4],
            [7, 4]
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text();

            // Si el contenido es una cadena vacía o contiene solo espacios en blanco, cambiarlo a 0
            if (contenido.trim() === "" || contenido.trim() === " ") {
                contenido = "0";
            }

            datos.push(contenido);
        });

        return datos;
    }

    function colocarDatosCeldasEspecificas(datos) {

        

        var celdasEspecificas = [
            [0, 2],
            [1, 2],
            [2, 2],
            [3, 2],
            [4, 2],
            [5, 2],
            [6, 2],
            [7, 2],
            [0, 3],
            [1, 3],
            [2, 3],
            [3, 3],
            [4, 3],
            [5, 3],
            [6, 3],
            [7, 3],
            [3, 4],
            [4, 4],
            [5, 4],
            [6, 4],
            [7, 4]
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas, index) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = datos[index];

            // Colocar el contenido en la celda correspondiente
            if(contenido > 0){
                $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }else{
                $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text("");
            }
            
        });
    }

    function darCategorias(){

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
    }

    function confirmarAlerta(){

        var codigo_producto         = $("#iptCodigoReg").val();
        var id_categoria_producto   = $("#selCategoriaReg").val();
        var descripcion_producto    = $("#iptDescripcionReg").val();
        var stock_producto          = $("#iptStockReg").val();
        var minimo_stock_producto   = $("#iptMinimoStockReg").val();
        var direccion               = $("#iptUbicacionReg").val();

        var file = $("#iptImagen").val();
        var ext = file.substring(file.lastIndexOf("."));

        if(file != ""){

            if (ext != ".jpg" && ext != ".png" && ext != ".gif" && ext != ".jpeg" && ext != ".webp") {
                return "Foto Erroneo";
            }

            if( codigo_producto != "" && id_categoria_producto != "" && descripcion_producto != "" && stock_producto != "" && minimo_stock_producto != "" ){
                return "Con Foto";
            }else{
                return "falta datos";
            }

        }else{

            if( codigo_producto != "" && id_categoria_producto != "" && descripcion_producto != "" && stock_producto != "" && minimo_stock_producto != "" ){
                return "Sin Foto";
            }else{
                return "falta datos";
            }

        }

    }

    function nombreCategoria(id_categoria){

        $.ajax({
            async:false,
            url:"ajax/categorias.ajax.php",
            method: 'POST',
            data: {
                'accion': 7,
                'id_categoria': id_categoria,
            },
            dataType: 'json',
            success: function (respuesta){

                console.log(respuesta);

                var nombre = respuesta[0]["nombre_categoria"]

                $("#selCategoriaReg").val(id_categoria + " - " + nombre);
               
            }
        })

    }


</script>