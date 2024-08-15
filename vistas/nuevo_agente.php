
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Punto de Venta</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Ventas</li>

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->

<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-elegir-tab" data-toggle="pill" href="#content-elegir" role="tab" aria-controls="content-elegir" aria-selected="false">Movimiento Agente</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-movimientos-tab" data-toggle="pill" href="#content-movimientos" role="tab" aria-controls="content-movimientos" aria-selected="false">Movimiento Agente</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-listado-tab" data-toggle="pill" href="#content-listado" role="tab" aria-controls="content-listado" aria-selected="false">Nuevo registro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-ganancias-tab" data-toggle="pill" href="#content-ganancias" role="tab" aria-controls="content-ganancias" aria-selected="false">Lista de registro</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-elegir" role="tabpanel" aria-labelledby="content-elegir-tab">

                <h4>Elija un Banco</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">
                                    
                                    <div class="col-md-6 mb-3">
                                        <h2>Efectivo Disponible: S./ <span id="totalEfectivo2">*******</span></h2>
                                        <h5>Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy" style="color: green;">*******</span></h5>
                                        <h5>Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision" style="color: green;">*******</span></h5>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <table id="lstElegirBanco" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th class="text-center">Agente</th>
                                                    <th class="text-center">Cuentas</th>
                                                    <th class="text-center">Total Credito</th>
                                                    <th class="text-center">TTP</th>
                                                    <th class="text-center">TTN</th>
                                                    <th class="text-center">MR</th>
                                                    <th class="text-center">MP</th>
                                                    <th class="text-center">Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody class="small text-left fs-6">
                                            </tbody>
                                        </table>
                                    
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>                

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-movimientos" role="tabpanel" aria-labelledby="content-movimientos-tab">

                <h4>Registrar Movimiento Agente</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->
                <div class="container-fluid">

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >                      

                                <div class="card-body p-2">

                                    <!-- SERIE Y NRO DE BOLETA -->
                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-4">

                                                <label for="iptNroSerie">Serie</label>

                                                <input type="text" min="0" name="iptEfectivo" id="iptNroSerie"
                                                    class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                            </div>

                                            <div class="col-md-8">

                                                <label for="iptNroTrans">Nro Transaccion</label>

                                                <input type="text" min="0" name="iptEfectivo" id="iptNroTrans"
                                                    class="form-control form-control-sm" placeholder="Nro Transaccion" disabled>

                                            </div>

                                        </div>

                                    </div>

                                </div><!-- ./ CARD BODY -->

                            </div><!-- ./ CARD -->
                        </div>

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            <div class="row">
                                                <div class="col-12 col-lg-8">
                                                    <h3>Banco: <label id = "iptNombreCliente"> BCP </label></h3>

                                                    
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    
                                                </div>

                                                <div class="col-12 col-lg-7">
                                                    <h4>Cuenta: <label id = "iptDireccionCliente"> PRINCIPAL </label></h4>

                                                    
                                                </div>

                                                <div class="col-12 col-lg-5 text-right">
                                                    <button class="btn btn-primary" id="btnRegistrar1">
                                                        <i class="fas fa-shopping-cart"></i> Registrar [f10]
                                                    </button>
                                                    <button class="btn btn-danger" id="btnVaciarListado1">
                                                        <i class="far fa-trash-alt"></i> Cancelar
                                                    </button>
                                                </div>

                                            </div>

                                             <!-- <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptCodigoVenta">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptCodigoVenta"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div> -->
                                        </div>

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->


                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">


                                            <!-- / table -->
                                        </div>

                                        
                                        <!-- /.col -->

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            <div class="row">
                                                

                                            </div>

                                             
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-listado" role="tabpanel" aria-labelledby="content-listado-tab">

                <h4>Hacer nuevo registro</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                        </div>
                        
                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-ganancias" role="tabpanel" aria-labelledby="content-ganancias-tab">

                <h4>Registro de Reportes</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                        </div>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="mdlListarCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-gray py-2">
                    <h6 class="modal-title" id="titulo_modal_stock">Lista de Clientes</h6>
                    <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                        id="btnCerrarModalStock">
                    </button>
                </div>

                <div class="modal-body">

                    <table id="lstElegirCuenta" class="display nowrap table-striped w-100 shadow ">
                        <thead class="bg-gray text-left fs-6">
                            <tr>
                                <th class="text-center">Opciones</th>
                                <th>Id</th>
                                <th>Agente</th>
                                <th>Nombre</th>
                                <th>Credito</th>
                                <th>TTP</th>
                                <th>TTN</th>
                                <th>MR</th>
                                <th>MD</th>
                                <th>Credito total</th>
                            </tr>
                        </thead>
                        <tbody class="small text-left fs-6">
                        </tbody>
                    </table>

                </div>

            </div>
    </div>

</div>

<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    var table11,tabla12;

    var isActionInProgress = false;
    var isActionInProgress2 = false;

    var idAgente, idCuenta;


    $(document).ready(function(){

        Cargar_tables();
        Cargar_Botones();

    })

    
    $(document).on('keydown', function(event) {

        //console.log(event.keyCode);
        // Verifica si la tecla presionada es la tecla Control (keyCode 17)
        if (event.keyCode === 113) {
            event.preventDefault()
            if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                const activeElement = $('#tabs-asignar-modulos-perfil .nav-link.active');
                const nextElement = activeElement.parent().next().find('.nav-link');
                console.log(nextElement)

                if (nextElement.length) {
                    activeElement.removeClass('active').attr('aria-selected', 'false');
                    nextElement.addClass('active').attr('aria-selected', 'true').tab('show');
                    const tabId = nextElement.attr('href');
                    console.log(tabId)

                    $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                    $(tabId).addClass('show active').attr('aria-selected', 'true');
                
                } else {
                    // Cambiar directamente al tab con ID "content-elegir-tab"
                    const siguienteNav = $('#content-elegir-tab');

                    activeElement.removeClass('active').attr('aria-selected', 'false');
                    siguienteNav.addClass('active').attr('aria-selected', 'true').tab('show');

                    const tabId = siguienteNav.attr('href');
                    $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                    $(tabId).addClass('show active').attr('aria-selected', 'true');
                }
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
            }
        }

        $(document).on('keydown', function(event) {

            // ESTO ES DE LA TABLA  DE LAS CUENTAS

            if (event.keyCode === 40 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstElegirBanco tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        //console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstElegirBanco tbody tr:first').addClass('selected');
                        } else {
                            // If a row is selected, move the selection to the next row and remove the selection from other rows
                            $selectedRow.removeClass('selected');
                            $selectedRow.next('tr').addClass('selected');
                        }

                        // Set a timeout to reset the flag after a short delay
                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 38 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstElegirBanco tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        //console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstElegirBanco tbody tr:last').addClass('selected');
                        } else {
                            // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
                            $selectedRow.removeClass('selected');
                            $selectedRow.prev('tr').addClass('selected');
                        }
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = table11.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        idAgente = data[1];

                        CrearYMostrar(idAgente)

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }
        
            if (event.keyCode === 40 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstElegirCuenta tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        //console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstElegirCuenta tbody tr:first').addClass('selected');
                        } else {
                            // If a row is selected, move the selection to the next row and remove the selection from other rows
                            $selectedRow.removeClass('selected');
                            $selectedRow.next('tr').addClass('selected');
                        }

                        // Set a timeout to reset the flag after a short delay
                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 38 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstElegirCuenta tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        //console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstElegirCuenta tbody tr:last').addClass('selected');
                        } else {
                            // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
                            $selectedRow.removeClass('selected');
                            $selectedRow.prev('tr').addClass('selected');
                        }
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = table12.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        idAgente = data[1];

                        CrearYMostrar(idAgente)

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

        })

    });

</script>

<script>

    function Cargar_Botones(){

        $('#lstElegirBanco tbody').on('click', '.btnSeleccionarBanco', function(){
            
        
            var data = table11.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idAgente = 0;
                            
                $("#card-modulos").css("display", "none");

            }else{

                table11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idAgente = data[1];

                console.log(idAgente)

                CrearYMostrar(idAgente)
                


            }
            
        });

        $('#lstElegirCuenta tbody').on('click', '.btnSeleccionarCuenta', function(){
            
        
            var data = table11.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idCuenta = 0;
                            
                $("#card-modulos").css("display", "none");

            }else{

                table11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idCuenta = data[1];

                console.log(idCuenta);



            }
            
        });

    }

    function  Cargar_tables(){

        table11= $("#lstElegirBanco").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarBanco text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-3'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    "targets": 8,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[7] !== null) {
                            return '<h3> S/. ' + parseFloat(data).toFixed(2) + '</h3>' ;
                        } else {
                            return '<h3>' + data + '</h3>';
                        }
                    }

                },

                {
                    "targets": [1,2],
                    "render": function (data, type, row) {
                        
                            return '<h3>' + data + '</h3>' ;
                        
                    }

                },
                {
                    targets: [3,4,5,6,7],
                    visible:false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 19 //19: LISTAR AGENTES
                },
            },
            scrollX:true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstElegirBanco'));
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

    function CrearYMostrar(idAgente){
        if ($.fn.DataTable.isDataTable("#lstElegirCuenta")) {
            $("#lstElegirCuenta").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstElegirCuenta tbody').off('click', 'td.editable');
            $('#lstElegirCuenta tbody').off('blur', 'td.editable');
            $('#lstElegirCuenta tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idAgente
        tabla12 = $("#lstElegirCuenta").DataTable({
            //"searching": false,
            "columnDefs": [
                {
                    "targets": 9,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[8] !== null) {
                            return 'S/. ' + parseFloat(data).toFixed(2);
                        } else {
                            return data;
                        }
                    }

                },
                {
                    "targets": [0,1,3,5],
                    "className": "text-center"
                },
                {
                    "targets": [6],
                    "createdCell": function (td, cellData, rowData, row, col) {
                       // Agregar la clase 'editable' a las celdas específicas
                       if ($(td).hasClass('editable')) {
                            $(td).addClass('editable');
                            $(td).attr('contenteditable', 'true');
                        } else {
                            $(td).addClass('editable');
                            $(td).attr('contenteditable', 'true');
                        }
                    }
                },
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnSeleccionarCuenta text-info px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-check fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    },

                },
                {
                    "targets": [1,2,4,5,6,7,8],
                    "visible": false
                },
                
            ],

            pageLength: [10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 20, //1: LISTAR PRODUCTOS
                    'idAgente':idAgente.trim(),
                },
            },
            scrollX:true,
            
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstElegirCuenta'));
            },
            
        });

        // $("#iptNombreProducto").keyup(function() {
        //     cantidad =0;
        //     tabla12.column($(this).data('index')).search(this.value).draw();

        //     // Obtenemos las celdas filtradas con la clase "editable"
        //     var celdasFiltradas = $('#lstElegirCuenta tbody td.editable');

        //     //console.log("celdasFiltradas : ",celdasFiltradas)

        //     // Iteramos sobre las celdas filtradas
        //     celdasFiltradas.each(function() {
        //         var newValue = parseFloat($(this).text());
                
        //         // Verificamos si el valor es un número mayor que 0
        //         if (!isNaN(newValue) && newValue > 0) {
        //             cantidad++; // Incrementamos la cantidad si se cumple la condición
        //         }
        //     });

        //     console.log('Cantidad de filas con números mayores que 0:', cantidad);

        //     document.getElementById("cantidadProductos").textContent = cantidad;
        // })

        // tabla12.on('init.dt', function () {

        //     // Restablecer eventos para evitar acumulación
        //     $('#lstElegirCuenta tbody').off('click', 'td.editable');
        //     $('#lstElegirCuenta tbody').off('blur', 'td.editable');
        //     $('#lstElegirCuenta tbody').off('keydown', 'td.editable');

        //     $('#lstElegirCuenta tbody').on('click', 'td.editable', function(){

        //         var $this = $(this);

        //         // Desactivar el select en todas las filas
        //         $('#lstElegirCuenta tbody tr.selected').removeClass('selected');

        //         // Activar el select en la fila actual
        //         $this.closest('tr').addClass('selected');

        //         colIndex2 = $this.index();
        //         rowIndex2 = $this.closest('tr').index();

        //         console.log($this, colIndex2, rowIndex2);

        //         $this.attr('contenteditable', 'true');

        //         var range = document.createRange();
        //         range.selectNodeContents(this);
        //         var sel = window.getSelection();
        //         sel.removeAllRanges();
        //         sel.addRange(range);
                
        //     });

        //     $('#lstElegirCuenta tbody').on('blur', 'td.editable', function(){

        //         var cantidad = 0; // Inicializamos la cantidad a 0

        //         // Obtenemos las celdas filtradas con la clase "editable"
        //         var celdasFiltradas = $('#lstElegirCuenta tbody td.editable');

        //         //console.log("celdasFiltradas : ",celdasFiltradas)

        //         // Iteramos sobre las celdas filtradas
        //         celdasFiltradas.each(function() {
        //             var newValue = parseFloat($(this).text());
                    
        //             // Verificamos si el valor es un número mayor que 0
        //             if (!isNaN(newValue) && newValue > 0) {
        //                 cantidad++; // Incrementamos la cantidad si se cumple la condición
        //             }
        //         });

        //         console.log('Cantidad de filas con números mayores que 0:', cantidad);

        //         document.getElementById("cantidadProductos").textContent = cantidad;

        //         var rowIndex = $(this).closest('tr').index();
        //         var colIndex = $(this).index();
        //         var newValue = $(this).text();
        //         var data = tabla12.row($(this).parents('tr')).data();

                
                
        //         if(parseFloat(newValue) < 0) {
        //             editedCell.text("");
        //         } else {
        //             if(newValue === ""){
        //                 newValue = 0;
        //             }

        //             if(newValue == 0){
                        
        //                 // console.log("eliminando : ",data);
        //                 // // Filtrar elementos con data[0] igual a 1 y mantener los que no cumplen esa condición
        //                 // productos_por_agregar = productos_por_agregar.filter(item => item[0] != data[1]);

        //                 // // Filtrar elementos con codigo igual a 1 y mantener los que no cumplen esa condición
        //                 // cambiosEditables = cambiosEditables.filter(item => item.codigo != data[1]);
                        
        //             }else{
        //                 productos_por_agregar.push([data[1], data[3], newValue, data[4]]);
        //                 cambiosEditables.push({ rowIndex: rowIndex, colIndex: colIndex, newValue: newValue, codigo: data[1], precio: data[4], medida: data[3] });
                        
        //             }
        //         }
        //     });


            
            

        // });

        // $('#mdlListarCuenta').on('shown.bs.modal', function () {
        //     // Enfoca en el cuadro de texto después de que el modal se haya mostrado
        //     $("#iptNombreProducto").focus();

        //     $("#iptNombreProducto").on('focus', function() {
        //         console.log('El elemento #iptNombreProducto está enfocado');
        //         // Quitar la clase 'selected' de todas las filas
        //         $('#lstElegirCuenta tbody tr').removeClass('selected');
        //         $('#lstElegirCuenta tbody td[contenteditable=true]').removeAttr('contenteditable');
        //         $("#iptNombreProducto").select();
        //     });
        // });

        $("#mdlListarCuenta").modal('show');
        //activarEdicionEnCelda(tabla12,rowIndex2, colIndex2);

        // $(document).on('keydown', function(e) {

        //     if($('#mdlListarCuenta').is(':visible')){
         
             
        //         var $this = $(this);
             
        //         var numRows = tabla12.rows().count();
        //         var numCols = tabla12.columns().count();
                
        //         switch (e.which) {
                
        //             case 38: // Tecla de flecha arriba
        //                 event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
        //                 if (!isActionInProgress) {

        //                     isActionInProgress = true;
        //                     var $visibleRows = $('#lstElegirCuenta tbody tr:visible');

        //                     // Verificar si hay filas visibles en la tabla
        //                     if ($visibleRows.find('td:nth-child(2)').text() === "") {
        //                         //console.log('No hay filas visibles en la tabla.');
                                
        //                     }else{
        //                         // Set the flag to indicate that the action is now in progress
                                
        //                         $('#lstElegirCuenta tbody td[contenteditable=true]').removeAttr('contenteditable');
        //                         // Obtener la fila actualmente seleccionada (si hay alguna)
        //                         var $selectedRow = $('#lstElegirCuenta tbody tr.selected');
        //                         console.log($selectedRow.length);

        //                         if ($selectedRow.length === 0) {
        //                             // Si no hay ninguna fila seleccionada, seleccionar la última fila
        //                             $('#lstElegirCuenta tbody tr:last').addClass('selected');
        //                             $selectedRow = $('#lstElegirCuenta tbody tr:last');
        //                             var $celdaEditable =$selectedRow.find('td:eq(6)');
        //                             $celdaEditable.attr('contenteditable', 'true');
        //                             $celdaEditable.focus();
        //                             // Seleccionar todo el texto dentro de la celda
        //                             var range = document.createRange();
        //                             range.selectNodeContents($celdaEditable.get(0));
        //                             var sel = window.getSelection();
        //                             sel.removeAllRanges();
        //                             sel.addRange(range);

        //                         } else {
        //                             // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
        //                             $selectedRow.removeClass('selected');
        //                             var $filaAnterior = $selectedRow.prev('tr');
        //                             $filaAnterior.addClass('selected');

        //                             // Obtener la celda de la columna 7 en la fila seleccionada
        //                             var $celdaEditable = $filaAnterior.find('td:eq(6)');

        //                             // Activar la edición en la celda de la columna 7
        //                             $celdaEditable.attr('contenteditable', 'true');
        //                                 $celdaEditable.focus();
        //                             // Comprobar si la celda es válida y no está vacía
        //                             if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                        

        //                                 // Seleccionar todo el texto dentro de la celda
        //                                 var range = document.createRange();
        //                                 range.selectNodeContents($celdaEditable.get(0));
        //                                 var sel = window.getSelection();
        //                                 sel.removeAllRanges();
        //                                 sel.addRange(range);
        //                             }
        //                         }
        //                     }
        //                     setTimeout(function () {
        //                         isActionInProgress = false;
        //                     }, 200); // Ajusta el retardo según sea necesario
        //                 }
        //                 break;
        //             case 40: // Tecla de flecha abajo
        //                 event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Abajo
        //                 if (!isActionInProgress) {
        //                     // Set the flag to indicate that the action is now in progress
        //                     isActionInProgress = true;
        //                     var $visibleRows = $('#lstElegirCuenta tbody tr:visible');

        //                     // Verificar si hay filas visibles en la tabla
        //                     if ($visibleRows.find('td:nth-child(2)').text() === "") {
        //                         //console.log('No hay filas visibles en la tabla.');
                                
        //                     }else{
        //                         // Quitar el atributo 'contenteditable' de todas las celdas
        //                         $('#lstElegirCuenta tbody td[contenteditable=true]').removeAttr('contenteditable');

        //                         // Obtener la fila actualmente seleccionada (si hay alguna)
        //                         var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

        //                         if ($selectedRow.length === 0) {
        //                             // Si no hay ninguna fila seleccionada, seleccionar la primera fila
        //                             $('#lstElegirCuenta tbody tr:first').addClass('selected');
        //                             $selectedRow = $('#lstElegirCuenta tbody tr:first');
        //                             var $celdaEditable =$selectedRow.find('td:eq(6)');
        //                             $celdaEditable.attr('contenteditable', 'true');
        //                             $celdaEditable.focus();
        //                             // Seleccionar todo el texto dentro de la celda
        //                             var range = document.createRange();
        //                             range.selectNodeContents($celdaEditable.get(0));
        //                             var sel = window.getSelection();
        //                             sel.removeAllRanges();
        //                             sel.addRange(range);
        //                         } else {
        //                             // Si hay una fila seleccionada, mover la selección a la fila siguiente y quitar la selección de otras filas
        //                             $selectedRow.removeClass('selected');
        //                             var $filaSiguiente = $selectedRow.next('tr');
        //                             $filaSiguiente.addClass('selected');

        //                             // Obtener la celda de la columna 7 en la fila seleccionada
        //                             var $celdaEditable = $filaSiguiente.find('td:eq(6)');
        //                             // Activar la edición en la celda de la columna 7
        //                             $celdaEditable.attr('contenteditable', 'true');
        //                                 $celdaEditable.focus();
        //                             // Comprobar si la celda es válida y no está vacía
        //                             if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                        

        //                                 // Seleccionar todo el texto dentro de la celda
        //                                 var range = document.createRange();
        //                                 range.selectNodeContents($celdaEditable.get(0));
        //                                 var sel = window.getSelection();
        //                                 sel.removeAllRanges();
        //                                 sel.addRange(range);
        //                             }
        //                         }
        //                     }
        //                     setTimeout(function () {
        //                         isActionInProgress = false;
        //                     }, 200); // Ajusta el retardo según sea necesario
        //                 }
        //                 break;
        //             case 13: // Tecla "Enter"
        //                 e.preventDefault();

        //                 if (isSwalOpen) {
        //                     // Si el modal Swal está abierto, simula el clic en el botón de confirmación
        //                     Swal.clickConfirm();
        //                     return;
        //                 }

        //                 if (!isActionInProgress) {

        //                     $this.removeAttr('contenteditable');
        //                     $("#iptNombreProducto").focus();
        //                     setTimeout(function () {
        //                         isActionInProgress = false;
        //                     }, 200); // Ajusta el retardo según sea necesario
        //                 }

        //                 break;
        //             case 121: // Tecla "Enter"
        //                 e.preventDefault();
        //                 if (!isActionInProgress) {
        //                     // Set the flag to indicate that the action is now in progress
        //                     isActionInProgress = true;
        //                     $("#btnAgregarPorductoxCliente").click();
        //                     $("#iptCodigoVenta").focus();
        //                     setTimeout(function () {
        //                         isActionInProgress = false;
        //                     }, 200); // Ajusta el retardo según sea necesario
        //                 }
        //                 break;
        //             default:
        //                 return; // Si no es una tecla de navegación o "Enter", salir sin hacer nada
        //         }
        //         e.preventDefault(); // Evitar el comportamiento predeterminado de las teclas de dirección y "Enter"
         
        //     }
            
             
        // });
        

        
        // Llamar a ajax.reload() para recargar los datos con el nuevo idAgente
        //tabla12.ajax.reload();

        
    }

</script>