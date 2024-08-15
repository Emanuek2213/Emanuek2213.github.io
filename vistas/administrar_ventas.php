<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Reportes</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Ventas</li>
                    <li class="breadcrumb-item active">Administrar Ventas</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-gray shadow" style="border: 1px solid black;">
                    <div class="card-header">
                        <h3 class="card-title">Criterios de Busqueda</h3>
                        <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Ventas desde:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="ventas_desde">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Ventas hasta:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="ventas_hasta">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Tipo de Documentos</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selListarDocumentosVentas">
                                        <option value="1" selected="true">Todos los Documentos</option>
                                        <option value="2">Boletas</option>
                                        <option value="3">Facturas</option>
                                        <option value="4">Notas de Ventas</option>
                                        <option value="5">Tickets</option>
                                        <option value="6">Sin Registrar</option>
                                        <option value="7">Registradas</option>
                                        <option value="8">Nubefact</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-row align-items-center justify-content-end">

                        
                                <div class="form-group m-0"><a class="btn btn-primary" style="width:120px;" id="btnFiltrar">Buscar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-gray shadow" style="border: 1px solid black;"  >

            <div class="card-body p-3">
                <div class="row mb-3">
                    
                    <div class="col-md-6 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                            <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalVenta">0.00</span></h2>
                    </div>

                    <div class="col-md-2 mb-3 rounded-3" style="background-color: white;color: white;text-align:center;border:1px solid white;">

                    </div>

                    <div class="col-md-4 mb-3 rounded-3" style="cursor:pointer; background-color: green;color: white;text-align:center;border:1px solid black;" id = "btnImprimirVentasMostrar">
                        <h2 class="fw-bold m-0"><i class='fas fa-print fs-3'></i>  Imprimir Ventas</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="display nowrap table-striped w-100 shadow" id="lstVentas">
                            <thead class="bg-gray text-left fs-6">
                                <tr>
                                    <th>Opc</th>
                                    <th>Nro Doc</th>
                                    <th>Cliente</th>
                                    <th>Total Venta</th>
                                    <th>Estado</th>
                                    <th>Mensajero</th>
                                    <th>Fecha Venta</th>
                                    <th>Fecha Impresion</th>
                                    <th>Detalles</th>
                                    <th>Tipo venta</th>
                                    <th>Identificacion</th>
                                    <th>numero_factura</th>
                                    <th>Impresion</th>
                                </tr>
                            </thead>
                            <tbody class="small"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditarVenta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header">

                <h5 class="modal-title fw-bold">Detalles de la venta</h5>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>
            <div class="col-md-12">
                
                <table id="tblDetalleVenta" class="table table-bordered table-striped w-100">
                    <thead  id = "heardtblDetalleVenta">
                        <tr>
                            <th>Id</th>
                            <th>Boleta</th>
                            <th>Cod.Producto</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Cant</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalComentarioEliminacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Motivos</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <!-- <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                            
                            <table id="tblDetalleVenta" class="table table-bordered table-striped w-100">
                                <thead class="bg-gray text-left fs-6" class="bg-gray text-left fs-6">
                                    <tr>
                                        <th>Id</th>
                                        <th>Boleta</th>
                                        <th>Cod.Producto</th>
                                        <th>Categoria</th>
                                        <th>Producto</th>
                                        <th>Cant</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            
                        </div>

                    </div>

                </div> -->

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <label for="iptComentario">Explicacion del porque se elimino</label>
                            <textarea name="iptComentario" id="iptComentario" class="form-control form-control-sm"
                                rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>

                        </div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                        <button type="button" class="btn btn-secondary mt-3 mx-2"
                         id="btnPreciosErroneos">Precios erroneos</button>
                        <button type="button" class="btn btn-warning mt-3 mx-2"
                           id="btnClienteErroneo">Cliente equivocado</button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-info mt-3 mx-2" style="width:170px;"
                data-bs-dismiss="modal" id="btnGuardarComentario">Confirmar eliminacion</button>
                <!-- <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                    data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button> -->
                    
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlListarTiemposImpresion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h5 class="modal-title" id="titulo_mdlListaImpresion"> Listado de Impresion de la venta </h5>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarListaImpresion">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        
                        
                    </div>

                    

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        

                        <button class="btn btn-warning" id="btnActualizarListaImpresion">
                            <i class="fas fa-bolt"> Refrescar</i>
                        </button>

                    </div>

                </div>

                <div class="row">

                    <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                    <div class="col-md-12">

                        <table id="lstImpresionVenta" class="display nowrap table-striped w-100 shadow ">
                            <thead class="bg-gray text-left fs-6">
                                <tr>
                                    <th >nro</th>
                                    <th >Nro Venta</th>
                                    <th >Fecha</th>    

                                </tr>
                            </thead>
                            <tbody class="small text-left fs-6">
                            </tbody>
                        </table>
                        <!-- / table -->
                    </div>
                    <!-- /.col -->

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="mdlPantallaCarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content">
            <div class="row mx-0">
                <div class="col-lg-12 mx-0 text-center">
                    <img src="vistas/assets/imagenes/loading.gif" id="img_carga" style="display:block;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlElegirTipoImpresion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h5 class="modal-title" id="titulo_mdlListaImpresion"> Imprimir Venta </h5>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarListaImpresion">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                            id="selDocumentoVenta2">
                            <option value="0">Seleccione Documento</option>
                            <option value="1" selected="true">Boleta</option>
                            <option value="2">Factura</option>
                            <option value="3">Ticket</option>
                            <option value="4">Nota de Venta</option>
                            <option value="5">Cotizacion</option>
                            <option value="6">Nube Fact</option>
                        </select>
                        
                    </div>

                    

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        
                            <button class="btn btn-success btn-sm btn-block" id="btnImprimirVentaSeleccion">
                                <i class="fas fa-print"></i> Imprimir
                            </button>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script> var encendido = 20;
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });
    var table;
    var table, ventas_desde, ventas_hasta;
    var groupColumn = 0;
    var isActionInProgress = false;
    var paginaCambiada = false;
    var nroBoleta2 = "";
    var tipo_venta = "";
    var numero_factura = 0;
    var numero_boleta_impresion = "";
    var arrIndicador  = [];
    var arrPrecios  = [];
    var arrCliente = "";
    var Factura = "";

    var opcion = 1;
    
    $(document).ready(function(){
        var tblDetalleVentaElement = document.getElementById("tblDetalleVenta");
        ajustarHeadersDataTables(tblDetalleVentaElement);
        
        

        $('#ventas_desde, #ventas_hasta').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })

                // Obtén la fecha del primer día del mes actual
        var fechaInicioMesActual = moment().startOf('month');

        // Resta un mes para obtener el primer día del mes pasado
        var fechaInicioMesPasado = fechaInicioMesActual.subtract(1, 'months');

        // Formatea la fecha en el formato 'DD/MM/YYYY'
        var fechaFormateada = fechaInicioMesPasado.format('DD/MM/YYYY');

        // Establece el valor de #ventas_desde
        $("#ventas_desde").val(moment().format('DD/MM/YYYY'));

        // Establece el valor de #ventas_hasta al día actual en el formato 'DD/MM/YYYY'
        $("#ventas_hasta").val(moment().format('DD/MM/YYYY'));

        ventas_desde = $("#ventas_desde").val();
        ventas_hasta = $("#ventas_hasta").val();

        $("#ventas_desde").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#ventas_hasta").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        opcion = 1;
        
        ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;        
        console.log("🚀 ~ file: administrar_ventas.php ~ line 97 ~ $ ~ ventas_desde", ventas_desde)
        ventas_hasta = ventas_hasta.substr(6,4) + '-' + ventas_hasta.substr(3,2) + '-' + ventas_hasta.substr(0,2) ;
        console.log("🚀 ~ file: administrar_ventas.php ~ line 99 ~ $ ~ ventas_hasta", ventas_hasta)

        table = $('#lstVentas').DataTable({            
            "columnDefs": [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarVenta text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEditarVenta text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {

                    targets: 12,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnElegirImpresion text-green px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-print fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                
                {
                    targets: [1],
                    
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        var prefix = '';

                        // Obtener el valor de la columna 10
                        var column10Value = full[9];
                        var color = "gray";
                        // Definir el prefijo según el valor de la columna 10
                        if (column10Value === 'NOTA DE VENTA') {
                            prefix = '100/0001-';
                            color = "blue";
                        } else if (column10Value === 'BOLETA') {
                            prefix = '003/B001-';
                            color = "purple";
                        } else if (column10Value === 'TICKET') {
                            prefix = '002/T001-';
                            color = "green";
                        } else if (column10Value === 'SIN IDENTIFICAR') {
                            prefix = '001/0000-';
                            color = "gray";
                        } else if (column10Value === 'FACTURA') {
                            prefix = '001/F001-';
                            color = "red";
                        } else {
                            prefix = '001/0000-';
                            color = "gray";
                        }

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+color+';">' + prefix + formattedData + '</span>';
                    }
                },
                {
                    targets: [2],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;">' + formattedData.trim() + '</span>';
                    }
                },
                {
                    targets: [3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = "S./ " + parseFloat(data).toFixed(2);
                        return '<span style="font-weight: bold; color: green;">' + formattedData + '</span>';
                    }
                },
                {
                    targets: [4],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        var color = 'gray';
                        if (formattedData === "Registrado") {
                            color = 'gray';  // Blanco
                        } else if (formattedData === "Impreso") {
                            color = 'black';  // Gris muy claro
                        } else if (formattedData === "Orden en Camino") {
                            color = 'orange';  // Gris claro
                        } else if (formattedData === "Orden Recibida") {
                            color = 'red';  // Gris medio
                        } else if (formattedData === "Orden cancelada") {
                            color = 'green';  // Gris oscuro
                        }

                        return '<span style="font-weight: bold; color: '+color+';">' + formattedData + '</span>';
                    }
                },

                
                {
                    targets: [5],
                    orderable: false,
                    render: function(data, type, full, meta) {
                            if(data === ""){
                                data = "sin mensajero"
                            }
                            return data;

                    }
                },

                {
                    targets: [6, 7],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        if (data) {
                            var date = new Date(data);
                            var timeOptions = {
                                hour: '2-digit',
                                minute: '2-digit',
                                hour12: true
                            };
                            var dateOptions = {
                                day: '2-digit',
                                month: '2-digit',
                                year: '2-digit'
                            };

                            var timeString = date.toLocaleString('en-GB', timeOptions).replace(',', '').toUpperCase();
                            var dateString = date.toLocaleString('en-GB', dateOptions).replace(',', '');

                            return `${timeString} ${dateString}`;
                        }
                        return data;
                    }
                },
                {

                    targets: 8,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnVerImpresiones text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-history  fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {

                    targets: [10],
                    visible:false,
                },
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Cambiar la fuente a Calibri y el tamaño de la letra a 10px
                        $(td).css({
                            'font-family': 'Calibri, sans-serif',
                            'font-size': '30px'
                        });
                    }
                }
                
            ],
            scrollX:true,
            "order": [[6, 'desc']],
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    text: 'Exportar a Excel',
                    customize: function (xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];

                        // Hide the first column (assuming it's the index 0)
                        $('col:first', sheet).attr('hidden', '1');
                        $('col:eq(1)', sheet).attr('hidden', '1');
                        
                        // Style the header row
                        $('row:first c', sheet).attr('s', '7');

                        // Style the second, third, and fourth columns (assuming they are at indices 1, 2, and 3)
                        $('row c[r^="B"]', sheet).attr('s', '2'); // 2 is a style ID for bold text
                        $('row c[r^="C"]', sheet).attr('s', '2'); // 2 is a style ID for bold text
                        $('row c[r^="D"]', sheet).attr('s', '2'); // 2 is a style ID for bold text

                        // Trim trailing spaces from the words in the second column (assuming it's the index 1)
                        $('row c[r^="C"] t', sheet).each(function () {
                            $(this).text($(this).text().trim());
                        });

                        // Apply "Light 1" table style to the entire sheet
                        var tableStyle = '<tableStyles count="1">' +
                                            '<tableStyle type="table" id="Light1" name="Light 1"/>' +
                                        '</tableStyles>';
                        $('worksheet', sheet).attr('xmlns:mc', 'http://schemas.openxmlformats.org/markup-compatibility/2006');
                        $('worksheet', sheet).attr('xmlns', 'urn:schemas-microsoft-com:office:spreadsheet');
                        $('worksheet', sheet).prepend(tableStyle);
                    }
                },
                'print',
                'pageLength'
            ],
            lengthMenu: [15, 30, 50, 100, 200, 500],
            "pageLength": 15,
            ajax: {
                url: 'ajax/ventas.ajax.php',
                type: 'POST',
                dataType: 'json',
                "dataSrc": function(respuesta) {
                    TotalVenta = 0.00;
                    for (let i = 0; i < respuesta.length; i++) {
                        if(respuesta[i][4] === "Registrado"){

                        }else{
                            TotalVenta = parseFloat(respuesta[i][3]) + parseFloat(TotalVenta);
                        }
                        
                    }
                    $("#totalVenta").html(TotalVenta.toFixed(2));
                    return respuesta;
                },
                data: {
                    'accion': 18,
                    'fechaDesde': ventas_desde,
                    'fechaHasta': ventas_hasta,
                    'opcion': opcion,
                }                              
            },
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstVentas'));
            }
        });

        table2 = $('#lstImpresionVenta').DataTable({       
            "columnDefs": [
      
            ],
            scrollX:true,
            "order": [[1, 'desc']],
            dom: 'Bfrtip',
            lengthMenu: [15, 30, 50, 100, 200, 500],
            "pageLength": 15,
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstImpresionVenta'));
            }
        });

        /* ======================================================================================
		EVENTO PARA BORRAR UNA VENTA
		======================================================================================*/

        $('#lstVentas tbody').on('click', ".btnEliminarVenta", function() {

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                table.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');
                var data = table.row($(this).parents('tr')).data();
                
                console.log (data);
                nroBoleta2 = data[1];
                tipo_venta = data[9];

                console.log(nroBoleta2);

                console.log(tipo_venta);

                Swal.fire({
                    icon: 'warning',
                    title: ' Seguro de eliminar la boleta nro: '+nroBoleta2,
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,
                }).then((result) => {
                    if(result.isConfirmed == true){

                        $("#modalComentarioEliminacion").modal("show");
                        $("#iptComentario").focus();

                        numero_factura = data[11];
                            
                    }
                })
            }
            
        });

        $('#lstVentas tbody').on('click', ".btnVerImpresiones", function() {

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                table.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');
                var data = table.row($(this).parents('tr')).data();

                $("#mdlListarTiemposImpresion").modal("show")

                var nro_boleta = data["nro_boleta"];

                RellenarTabla(nro_boleta);
            }

        });

        $('#lstVentas tbody').on('click', ".btnElegirImpresion", function() {

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                table.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');
                var data = table.row($(this).parents('tr')).data();

                $("#mdlElegirTipoImpresion").modal("show")

                numero_boleta_impresion = data["nro_boleta"];
                Factura = data["tipo_venta"];

                // ConseguirArrCliente();
                // ConseguirArrPrecios();
                // ConseguirarrIndicador();

                
            }

        });

        /* ======================================================================================
		EVENTO PARA FILTRAR VENTAS SEGUN EL RANGO DE FECHAS
		======================================================================================*/

        $('#btnFiltrar').on('click', function(){
            opcion = $("#selListarDocumentosVentas").val();
            table.destroy();
            if($("#ventas_desde").val() ==''){
                ventas_desde = '01/01/2023';
            }else{
                ventas_desde = $("#ventas_desde").val();
            }

            if($("#ventas_hasta").val() ==''){
                ventas_hasta = moment().format('DD/MM/YYYY');
            }else{
                ventas_hasta = $("#ventas_hasta").val();
            }

            ventas_desde = ventas_desde.substr(6,4) + "-" + ventas_desde.substr(3,2) + "-" + ventas_desde.substr(0,2);

            ventas_hasta = ventas_hasta.substr(6,4) + "-" + ventas_hasta.substr(3,2) + "-" + ventas_hasta.substr(0,2);

            var groupColumn = 0;

            table = $('#lstVentas').DataTable({  
            
                
                "columnDefs": [
                    {

                        targets: 0,
                        orderable: false,
                        render: function(data, type, full, meta) {
                                return "<center>" +
                                    "<span class='btnEliminarVenta text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                    "<i class='fas fa-trash fs-5'></i>" +
                                    "</span>" +
                                    "<span class='btnEditarVenta text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                    "<i class='fas fa-edit fs-5'></i>" +
                                    "</span>" +
                                    "</center>"

                        }
                    },

                    {

                        targets: 12,
                        orderable: false,
                        render: function(data, type, full, meta) {
                                return "<center>" +
                                    "<span class='btnElegirImpresion text-green px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                    "<i class='fas fa-print fs-5'></i>" +
                                    "</span>" +
                                    "</center>"

                        }
                    },
                    
                    {
                        targets: [1],
                        
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            var prefix = '';

                            // Obtener el valor de la columna 10
                            var column10Value = full[9];
                            var color = "gray";
                            // Definir el prefijo según el valor de la columna 10
                            if (column10Value === 'NOTA DE VENTA') {
                                prefix = '100/0001-';
                                color = "blue";
                            } else if (column10Value === 'BOLETA') {
                                prefix = '003/B001-';
                                color = "purple";
                            } else if (column10Value === 'TICKET') {
                                prefix = '002/T001-';
                                color = "green";
                            } else if (column10Value === 'SIN IDENTIFICAR') {
                                prefix = '001/0000-';
                                color = "gray";
                            } else if (column10Value === 'FACTURA') {
                                prefix = '001/F001-';
                                color = "red";
                            } else {
                                prefix = '001/0000-';
                                color = "gray";
                            }

                            // Retornar el HTML con el prefijo correspondiente
                            return '<span style="font-weight: bold;color:'+color+';">' + prefix + formattedData + '</span>';
                        }
                    },
                    // {
                    //     targets: [1],
                    //     orderable: false,
                    //     render: function(data, type, full, meta) {
                    //         var formattedData = data;
                    //         return '<span style="font-weight: bold;color: blue;">' + formattedData + '</span>';
                    //     }
                    // },
                    {
                        targets: [2],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            return '<span style="font-weight: bold;">' + formattedData + '</span>';
                        }
                    },
                    {
                        targets: [3],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = "S./ " + parseFloat(data).toFixed(2);
                            return '<span style="font-weight: bold; color: green;">' + formattedData + '</span>';
                        }
                    },
                    {
                        targets: [4],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            var color = 'gray';
                            if (formattedData === "Registrado") {
                                color = 'gray';  // Blanco
                            } else if (formattedData === "Reportado") {
                                color = 'black';  // Gris muy claro
                            } else if (formattedData === "Orden en Camino") {
                                color = 'orange';  // Gris claro
                            } else if (formattedData === "Orden Recibida") {
                                color = 'red';  // Gris medio
                            } else if (formattedData === "Orden cancelada") {
                                color = 'green';  // Gris oscuro
                            }

                            return '<span style="font-weight: bold; color: '+color+';">' + formattedData + '</span>';
                        }
                    },

                    
                    {
                        targets: [5],
                        orderable: false,
                        render: function(data, type, full, meta) {
                                if(data === ""){
                                    data = "sin mensajero"
                                }
                                return data;

                        }
                    },
                    {
                        targets: [10],
                        visible: false,
                    },

                    {
                        targets: "_all",
                        createdCell: function(td, cellData, rowData, row, col) {
                            // Cambiar la fuente a Calibri y el tamaño de la letra a 10px
                            $(td).css({
                                'font-family': 'Calibri, sans-serif',
                                'font-size': '30px'
                            });
                        }
                    }
                    
                ],
                scrollX:true,
                "order": [[6, 'desc']],
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength',
                ],
                lengthMenu: [15, 30, 50, 100, 200, 500],
                "pageLength": 30,
                ajax: {
                    url: 'ajax/ventas.ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    "dataSrc": function(respuesta) {
                        console.log(respuesta , ventas_desde , ventas_hasta);
                        TotalVenta = 0.00;
                        for (let i = 0; i < respuesta.length; i++) {
                            if(respuesta[i][4] === "Registrado"){

                            }else{
                                TotalVenta = parseFloat(respuesta[i][3]) + parseFloat(TotalVenta);
                            }
                            
                        }
                        $("#totalVenta").html(TotalVenta.toFixed(2));
                        return respuesta;
                    },
                    data: {
                        'accion': 18,
                        'fechaDesde': ventas_desde,
                        'fechaHasta': ventas_hasta,
                        'opcion': opcion,
                    }                              
                },
                
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
        });
        
        $('#btnGuardarComentario').on('click', function(){

            var Comentario = $("#iptComentario").val();

            console.log("tipo_venta : ", tipo_venta)

            if(tipo_venta === "FACTURA"){

                if(Comentario === ""){

                    Toast. fire({
                        icon: 'error',
                        title: "Escriba un comentario Valido",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return 0; 
                }


                $("#mdlPantallaCarga").modal("show");
                $("#img_carga").attr("style","display:on");
                $("#img_carga").attr("style","height:200px");
                $("#img_carga").attr("style","width:200px");
                var eliminacion = {
                    operacion: "generar_anulacion",
                    tipo_de_comprobante: 1,
                    serie: "F001",
                    numero: numero_factura,
                    motivo: Comentario,
                    codigo_unico: "" 
                }

                console.log(eliminacion);

                fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(eliminacion)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta:', data);
                    if (data.success) {
                        $("#mdlPantallaCarga").modal("hide");
                        $. ajax({ 
                            url: "ajax/ventas.ajax.php",
                            type: "POST",
                            data: {
                                    accion : '3',
                                    Boleta: String(nroBoleta2),
                                    Comentario: Comentario,
                                    },
                            dataType:"json",
                            success:function(respuesta){

                                if(respuesta === "ok"){

                                    Swal. fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: "Se elimino correctamente la venta",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    nroBoleta2 = "";
                                    tipo_venta = "";
                                    table.ajax. reload();
                                    
                                }else{

                                    Swal. fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: "Hubo un error con la eliminacion",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });

                                }
                            
                                    
                            }
                        });
                    } else {
                        // Manejar el error
                        $("#mdlPantallaCarga").modal("hide");
                        Swal. fire({
                            position: 'center',
                            icon: 'error',
                            title: data.error,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                })
                .catch((error) => {
                    //console.error('Error:', error);
                    $("#mdlPantallaCarga").modal("hide");
                    Swal. fire({
                        position: 'center',
                        icon: 'error',
                        title: error,
                        showConfirmButton: false,
                        timer: 1500
                    });
                });

            }else if(tipo_venta === "BOLETA"){

                if(Comentario === ""){

                    Toast. fire({
                        icon: 'error',
                        title: "Escriba un comentario Valido",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return 0; 
                }


                $("#mdlPantallaCarga").modal("show");
                $("#img_carga").attr("style","display:on");
                $("#img_carga").attr("style","height:200px");
                $("#img_carga").attr("style","width:200px");
                var eliminacion = {
                    operacion: "generar_anulacion",
                    tipo_de_comprobante: 2,
                    serie: "B001",
                    numero: numero_factura,
                    motivo: Comentario,
                    codigo_unico: "" 
                }

                console.log(eliminacion);

                fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(eliminacion)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta:', data);
                    if (data.success) {
                        $("#mdlPantallaCarga").modal("hide");
                        $. ajax({ 
                            url: "ajax/ventas.ajax.php",
                            type: "POST",
                            data: {
                                    accion : '3',
                                    Boleta: String(nroBoleta2),
                                    Comentario: Comentario,
                                    },
                            dataType:"json",
                            success:function(respuesta){

                                if(respuesta === "ok"){

                                    Swal. fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: "Se elimino correctamente la venta",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    nroBoleta2 = "";
                                    tipo_venta = "";
                                    table.ajax. reload();
                                    
                                }else{

                                    Swal. fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: "Hubo un error con la eliminacion",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });

                                }
                            
                                    
                            }
                        });
                    } else {
                        // Manejar el error
                        $("#mdlPantallaCarga").modal("hide");
                        Swal. fire({
                            position: 'center',
                            icon: 'error',
                            title: data.error,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                })
                .catch((error) => {
                    //console.error('Error:', error);
                    $("#mdlPantallaCarga").modal("hide");
                    Swal. fire({
                        position: 'center',
                        icon: 'error',
                        title: error,
                        showConfirmButton: false,
                        timer: 1500
                    });
                });

            }else{
                
                $. ajax({ 
                    url: "ajax/ventas.ajax.php",
                    type: "POST",
                    data: {
                            accion : '3',
                            Boleta: String(nroBoleta2),
                            Comentario: Comentario,
                            },
                    dataType:"json",
                    success:function(respuesta){

                        if(respuesta === "ok"){

                            Swal. fire({
                                position: 'center',
                                icon: 'success',
                                title: "Se elimino correctamente la venta",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            nroBoleta2 = "";
                            tipo_venta = "";
                            table.ajax. reload();
                            
                        }else{

                            Swal. fire({
                                position: 'center',
                                icon: 'error',
                                title: "Hubo un error con la eliminacion",
                                showConfirmButton: false,
                                timer: 1500
                            });

                        }
                    
                            
                    }
                });

            }

                        

            

        });

        $('#btnImprimirVentasMostrar').on('click', function(){

            // Obtener los datos de la columna 1 y copiarlos en un array
            var nro_Boletas = table.column(1).data().toArray();

            var ventas_desde = $("#ventas_desde").val();

            var ventas_hasta = $("#ventas_hasta").val();

            // Ahora nro_Boletas contiene los datos de la columna 1 en un array
            console.log(nro_Boletas);

            window.open('http://192.168.1.41/market-pos/vistas/generar_impresion.php?nro_Boletas='+nro_Boletas+ '&ventas_desde=' + ventas_desde + '&ventas_hasta=' + ventas_hasta);

            
        });
        
        $('#btnPreciosErroneos').on('click', function(){
            $("#iptComentario").val("Los Precios Dentro del recibo Fueron erroneos");
            setTimeout(function(){
                $('#btnGuardarComentario').click();
            }, 1000); // 1000 milisegundos = 1 segundo
        });

        $('#btnClienteErroneo').on('click', function(){
            $("#iptComentario").val("El Cliente registrado en el recibo era el incorrecto");
            setTimeout(function(){
                $('#btnGuardarComentario').click();
            }, 1000); // 1000 milisegundos = 1 segundo
        });

        $("#btnImprimirVentaSeleccion").on('click', function(){

            var seleccion = $("#selDocumentoVenta2").val()

            if(seleccion == 0){

            }else if(seleccion == 2){


                if(numero_boleta_impresion == 0){
                    console.log("es cero");
                } else if(Factura === "FACTURA"){

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    $.ajax({
                        url: "ajax/reporte.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 9,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            var numero_factura = respuesta[0]["numero_factura"];
                            var link = respuesta[0]["link"];

                            $.ajax({
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 12,
                                    'nro_boleta': numero_boleta_impresion
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    console.log("respuesta: ", respuesta[0]["cliente"]);

                                    window.open('http://192.168.1.41/market-pos/vistas/generar_factura_impresion.php?nro_boleta=' + numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) + '&linkQR=' + encodeURIComponent(link)+ '&factura=' + numero_factura);

                                }
                            });

                        }

                    });
                } else{
                    Toast.fire({
                        icon: 'warning',
                        title: "La venta no es una factura",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            }else if(seleccion == 1){


                if(numero_boleta_impresion == 0){
                    console.log("es cero");
                } else if(Factura === "BOLETA"){

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    $.ajax({
                        url: "ajax/reporte.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 9,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            var numero_factura = respuesta[0]["numero_factura"];
                            var link = respuesta[0]["link"];

                            $.ajax({
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 12,
                                    'nro_boleta': numero_boleta_impresion
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    console.log("respuesta: ", respuesta[0]["cliente"]);

                                    window.open('http://192.168.1.41/market-pos/vistas/generar_boleta_impresion.php?nro_boleta=' + numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) + '&linkQR=' + encodeURIComponent(link)+ '&factura=' + numero_factura);

                                }
                            });

                        }

                    });
                } else{
                    Toast.fire({
                        icon: 'warning',
                        title: "La venta no es una factura",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            }else if(seleccion == 6){
                if(numero_boleta_impresion == 0){
                    console.log("es cero");
                } else if(numero_boleta_impresion != 0 && (Factura === "BOLETA" || Factura === "FACTURA")){

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta)
                        }

                    });

                    $.ajax({
                        url: "ajax/reporte.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 9,
                            'nro_boleta': numero_boleta_impresion
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            var numero_factura = respuesta[0]["numero_factura"];
                            var link = respuesta[0]["link"];

                            if (link.endsWith(".pdf")) {
                                window.open(link, '_blank');
                            } else {
                                // Maneja el caso en el que el link no es un PDF
                                console.log("El enlace no es un archivo PDF.");
                            }
                        }
                    });

                }else{
                    Toast.fire({
                        icon: 'warning',
                        title: "La venta no tiene registro con nubefact",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }else{

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': numero_boleta_impresion
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        //console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': numero_boleta_impresion
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta: ", respuesta[0]["cliente"]);
                        

                        if (seleccion == 3) {

                                // var url = 'http://192.168.1.41/market-pos/vistas/generar_ticket.php?nro_boleta=' + numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios;
                                // window.open(url, '_blank');
                                var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]);

                                // Abrir la nueva ventana
                                var nuevaVentana = window.open(url, '_blank');

                            }

                        else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                        else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+numero_boleta_impresion + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}

                    }
                });

            }

                

        });
        /*=======================================================================
        =========================================================================
        EN ESTA ZONA SE CONFIGURAN LAS ACCIONES DE LAS TECLAS
        =========================================================================
        =======================================================================*/

        $(document).on('keydown', function (event) {
            if (event.keyCode === 40 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) {
                event.preventDefault();

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstVentas tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstVentas tbody tr:first').addClass('selected');
                    } else {
                        // If a row is selected, move the selection to the next row and remove the selection from other rows
                        $selectedRow.removeClass('selected');
                        $selectedRow.next('tr').addClass('selected');
                    }

                    // Set a timeout to reset the flag after a short delay
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 38 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstVentas tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstVentas tbody tr:last').addClass('selected');
                    } else {
                        // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
                        $selectedRow.removeClass('selected');
                        $selectedRow.prev('tr').addClass('selected');
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 13 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstVentas tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = table.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        $('#lstVentas tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        // Resto de tu código
                        console.log("id Perfil: " + data[1]);

                        nroBoleta = data[1];

                        if($.fn.DataTable.isDataTable("#tblDetalleVenta")){
                            $("#tblDetalleVenta").DataTable().destroy();
                        }

                        $("#tblDetalleVenta tbody").empty();

                        $("#tblDetalleVenta").DataTable({
                            columns:[
                                {data:'id'},
                                {data:'nro_boleta'},
                                {data:'codigo_producto'},
                                {data:'nombre_categoria'},
                                {data:'descripcion_producto'},
                                {data:'cantidad'},
                                {data:'total_venta'}
                            ],
                            processing : true,
                            serverSide : true,
                            pading:false,
                            scrollX:true,
                            ajax:{
                                url: "ajax/EditTable/obtener_detalle_venta.php",
                                type:"POST",
                                dataType: "json",
                                data:{"nro_boleta": nroBoleta},
                            }
                        });

                        $("#modalEditarVenta").modal("show");

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 46 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstVentas tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = table.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        $('#lstVentas tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        // Resto de tu código
                        console.log("id Perfil: " + data[1]);

                        var nroBoleta2 = data[1];

                        console.log(nroBoleta2);

                        Swal.fire({
                            icon: 'warning',
                            title: ' Seguro de eliminar la boleta nro: '+nroBoleta2,
                            confirmButtonText: 'Aceptar',
                            showCancelButton: true,
                        }).then((result) => {
                            if(result.isConfirmed == true){
                                $. ajax({ 
                                    url: "ajax/ventas.ajax.php",
                                    type: "POST",
                                    data: {accion : '3',Boleta: String(nroBoleta2)},
                                    dataType:"json",
                                    success:function(respuesta){
                                        
                                        Swal. fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: "Se elimino correctamente la venta",
                                            showConfirmButton: false,
                                            timer: 1500
                                        })

                                    table.ajax. reload();

                                    }
                                });
                            }
                        })

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 37 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) { // Tecla Izquierda
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Izquierda
                $('#ccontainer-fluid input').blur();
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página anterior solo si no se ha cambiado ya
                        table.page('previous').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }


            if (event.keyCode === 39 && !$('#modalEditarVenta').is(':visible')&& !$('#modalComentarioEliminacion').is(':visible')) { // Tecla Derecha
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Derecha
                $('#ccontainer-fluid input').blur();
               
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página siguiente solo si no se ha cambiado ya
                        table.page('next').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            } 

            if (event.keyCode === 13 && $('#modalComentarioEliminacion').is(':visible') && $("#iptComentario").is(':focus')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    $("#btnGuardarComentario").click()
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }
        });

    })

    /*===============================================================================================
    =================================================================================================
    =================================================================================================
    EVENTOS PARA EDITAR UNA VENTA
    =================================================================================================
    =================================================================================================
    ===============================================================================================*/

    $("#lstVentas tbody").on("click",".btnEditarVenta",function(){

        if ($(this).parents('tr').hasClass('selected')) {

            $(this).parents('tr').removeClass('selected');

            $('#modulos').jstree("deselect_all", false);

            $("#select_modulos option").remove();

            $("#card-modulos").css("display", "none");

        }else{

            table.$('tr.selected').removeClass('selected');

            $(this).parents('tr').addClass('selected');


            var data = table.row($(this).parents('tr')).data();

            nroBoleta = data[1];

            console.log(nroBoleta);

            if($.fn.DataTable.isDataTable("#tblDetalleVenta")){
                $("#tblDetalleVenta").DataTable().destroy();
            }

            $("#tblDetalleVenta tbody").empty();

            $("#tblDetalleVenta").DataTable({
                columns:[
                    {data:'id'},
                    {data:'nro_boleta'},
                    {data:'codigo_producto'},
                    {data:'nombre_categoria'},
                    {data:'descripcion_producto'},
                    {data:'cantidad'},
                    {data:'total_venta'}
                ],
                processing : true,
                serverSide : true,
                pading:false,
                scrollX:true,
                ajax:{
                    url: "ajax/EditTable/obtener_detalle_venta.php",
                    type:"POST",
                    dataType: "json",
                    data:{"nro_boleta": nroBoleta},
                }
            });

            $("#modalEditarVenta").modal("show");
        }
    })

    
</script><script>

function RellenarTabla(nro_boleta){

    $.ajax({
        url: "ajax/ventas.ajax.php",
        method: "POST",
        data: {
            'accion': 48,
            'nro_boleta': nro_boleta,
        },
        dataType: 'json',
        success: function(respuesta) {
            
            console.log(respuesta);

            table2.clear().draw();

            for(var i = 0; i < respuesta.length; i++){

                var date = new Date(respuesta[i]['fecha_impresion']);
                var timeOptions = {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: true
                };
                var dateOptions = {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit'
                };

                var timeString = date.toLocaleString('en-GB', timeOptions).replace(',', '').toUpperCase();
                var dateString = date.toLocaleString('en-GB', dateOptions).replace(',', '');

                var texto = `${timeString} - ${dateString}`;

                table2.row.add([

                    '<b>' + respuesta[i]['id_impresion']+ '</b>',
                    '<b>' + respuesta[i]['nro_boleta']+ '</b>',
                    texto,
                    
                ]).draw();

            }

            
            
        }
    })

}    

function ajustarHeadersDataTables(element) {
    if (element) {
        var observer = window.ResizeObserver ? new ResizeObserver(function(entries) {
            entries.forEach(function(entry) {
                $(entry.target).DataTable().columns.adjust();
            });
        }) : null;

        // Function to add a datatable to the ResizeObserver entries array
        var resizeHandler = function($table) {
            var domElement = $table instanceof jQuery ? $table.get(0) : $table;
            if (observer && domElement) {
                observer.observe(domElement);
            }
        };

        // Initiate additional resize handling on datatable
        resizeHandler(element);
    }
}

function ConseguirArrCliente(){
    
}

//document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>