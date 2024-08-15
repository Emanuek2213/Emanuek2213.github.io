
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Calendario</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Calendario</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">
    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-deudas" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-calendario-tab" data-toggle="pill" href="#content-calendario" role="tab" aria-controls="content-calendario" aria-selected="false">Calendario de Deudas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-deuda-tab" data-toggle="pill" href="#content-deuda" role="tab" aria-controls="content-deuda" aria-selected="false">Lista de Deudas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-amortiguacion-tab" data-toggle="pill" href="#content-amortiguacion" role="tab" aria-controls="content-amortiguacion" aria-selected="false">Lista de Amortiguaciones</a>
            </li>


        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-deudas">

            <div class="tab-pane fade active show mt-4 px-4" id="content-calendario" role="tabpanel" aria-labelledby="content-calendario-tab">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-gray shadow" style="border: 1px solid black;">
                        
                            <div class="row mb-3">

                                <div class="col-md-10 offset-md-1">

                                    <div id='calendar'></div>
                                    
                                </div>
                        
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-deuda" role="tabpanel" aria-labelledby="content-deuda-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnNuevaDeuda" tabindex="0">
                                                <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                    <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Registrar Nueva Deuda [F10]</span></h4>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.col -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">

                                        <div class="d-none d-md-flex col-md-12 ">

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="text" id="iptBuscarDeuda" class="form-control" data-index="2" autocomplete="off">
                                                <label for="iptBuscarDeuda">Buscador Deudor</label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistroDeudas" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h4>Opciones</h4></th>
                                                        <th class="text-center"><h4>Nro</h4></th>
                                                        <th class="text-center"><h4>Deudor</h4></th>
                                                        <th class="text-center"><h4>Monto</h4></th>
                                                        <th class="text-center"><h4>Deuda Actual</h4></th>
                                                        
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

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-amortiguacion" role="tabpanel" aria-labelledby="content-amortiguacion-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistroAmortiguacion" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h4>Opciones</h4></th>
                                                        <th class="text-center"><h4>Nro</h4></th>
                                                        <th class="text-center"><h4>Amorituguador</h4></th>
                                                        <th class="text-center"><h4>Monto</h4></th>
                                                        <th class="text-center"><h4>Deuda</h4></th>
                                                        <th class="text-center"><h4>Fecha</h4></th>
                                                        
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

                </div>

            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="mdlCrearDeuda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Registrar Nueva Deuda</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptDeudor">
                            <i class="fas fa-user fs-6"></i>
                            <span class="big">Nombre de la Persona o Empresa a que le deberas</span>
                        </label>

                        <input type="text" class="form-control form-control-sm" id="iptDeudor"
                            placeholder="Nombre o Alias">
                    </div>

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptMontoDeuda">
                            <i class="fas fa-dollar-sign fs-6"></i>
                            <span class="big">Cantidad de dinero Prestado (.S/)</span>
                        </label>

                        <input type="number" class="form-control form-control-sm" id="iptMontoDeuda"
                            placeholder="Nombre o Alias">
                    </div>

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptFechaDeuda">
                            <i class="fas fa-calendar fs-6"></i>
                            <span class="big">Fecha a Registrar</span>
                        </label>

                        <input type="text" class="form-control form-control-sm" id="iptFechaDeuda"
                            placeholder="Nombre o Alias">
                    </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm"
                    id="btnRegistrarDeuda">Registrar Deuda</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlCrearAmortiguacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Registrar Nueva Amortiguador</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptAmortiguador">
                            <i class="fas fa-user fs-6"></i>
                            <span class="big">Nombre de la Persona o Empresa que pague parte de la deuda</span>
                        </label>

                        <input type="text" class="form-control form-control-sm" id="iptAmortiguador"
                            placeholder="Nombre o Alias">
                    </div>

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptMontoAmortiguador">
                            <i class="fas fa-dollar-sign fs-6"></i>
                            <span class="big">Cantidad de dinero Dado (.S/)</span>
                        </label>

                        <input type="number" class="form-control form-control-sm" id="iptMontoAmortiguador"
                            placeholder="Nombre o Alias">
                    </div>

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptFechaAmortiguador">
                            <i class="fas fa-calendar fs-6"></i>
                            <span class="big">Fecha a Registrar</span>
                        </label>

                        <input type="text" class="form-control form-control-sm" id="iptFechaAmortiguador"
                            placeholder="Nombre o Alias">
                    </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm"
                    id="btnRegistrarAmortiguador">Registrar Amortiguador</button>
            </div>
        </div>
    </div>
</div>

<script>

    var eventos , eventosDesdeBD,calendar;
    var tabla11, tabla21;
    var isActionInProgress = false;
    var isActionInProgress2 = false;

    $(document).ready(function(){

        CargarEventosCalendar();

        CargarTable();

        CargarBotones(); 
        
    });

    $(document).on('keydown', function(event) {

        if (event.keyCode === 121 && !$('#mdlCrearDeuda').is(':visible')) {

            
            event.preventDefault()
            if ($('#content-deuda').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    $('#btnNuevaDeuda').click();
                    ////tabla51.ajax.reload();
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }
                
        } else if (event.keyCode === 121 && $('#mdlCrearDeuda').is(':visible')){

            event.preventDefault()
            if ($('#content-deuda').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    $('#btnRegistrarDeuda').click();
                    ////tabla51.ajax.reload();
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }

        }
        
        if (event.keyCode === 13 && $('#mdlCrearDeuda').is(':visible')) {
            // Evitar el comportamiento predeterminado de la tecla Enter
            event.preventDefault();

            // Verificar si el input de Deudor está enfocado
            if ($('#iptDeudor').is(':focus')) {
                // Si está enfocado, pasar el foco al input de MontoDeuda
                $('#iptMontoDeuda').focus().select();
            } else if ($('#iptMontoDeuda').is(':focus')) {
                // Si el input de MontoDeuda está enfocado, pasar el foco al input de Deudor
                $('#iptDeudor').focus().select();
            } else {
                // Si está enfocado, pasar el foco al input de MontoDeuda
                $('#iptDeudor').focus().select();
            }
        }

    });

</script>

<script>

    function CargarDeudas(){
        $.ajax({
            async:false,
            url:"ajax/compras.ajax.php",
            method: 'POST',
            data: {
                accion: 15,
            },
            dataType: 'json',
            success: function (respuesta){

                console.log(respuesta);

                $("#iptNombreProveedor_venta_modal").val(Proveedor);
                $("#iptEncargado_modal").val(mensajero);
                $("#selBolFac_modal").val(tipo_documento);
                $("#selTipoPago_modal").val(Tipo_pago);
                $("#ventas_desde_modal").val(fecha_compra);
                $("#iptNumeroDocumento_modal").val(nro_documento);
                $("#selTipoDni_modal").val(tipo_dni);
                $("#iptComentario_modal").val(comentario);
                $("#fecha_salida_modal").val(fecha_salida);
                $("#fecha_regreso_modal").val(fecha_regreso);
                $("#sel_PM_salida_modal").val(sel_salida);
                $("#sel_PM_regreso_modal").val(sel_regreso);

                $("#iptDireccionProveedor_venta_modal").val(respuesta[0]["Direccion"]);
                $("#iptRazonSocialProveedor_venta_modal").val(respuesta[0]["Razon"]);

                if(respuesta[0]["Identificacion"] === "SIN IDENTIFICAC"){

                    $("#iptRucProveedor_modal").val("0000000001");

                }else{
                    $("#iptRucProveedor_modal").val(respuesta[0]["Identificacion"]);
                }
                $("#mdlGestionDeCompra").modal("show");

                calcularDiferencia_modal();
            }
        });
    }

    function CargarTable(){

        tabla11= $("#lstRegistroDeudas").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarDeuda text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-4'></i>" +
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
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h4 style="text-align: center;">' + data + '</h4>';
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/calendario.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //2: LISTAR CLIENTES
                },
            },
            scrollX:true,
            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistroDeudas'));
            }
        });

        tabla21= $("#lstRegistroAmortiguacion").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarAmortiguacion text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
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
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h4 style="text-align: center;">' + data + '</h4>';
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/calendario.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //2: LISTAR CLIENTES
                },
            },
            scrollX:true,
            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistroAmortiguacion'));
            }
        });

    }

    function CargarBotones(){

        $("#btnNuevaDeuda").on("click", function(){

            $("#mdlCrearDeuda").modal("show");

            $("#iptFechaDeuda").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
            });

            $("#iptFechaDeuda").val(moment().format('DD/MM/YYYY'));  

            $("#iptDeudor").focus();

        })

        $("#btnRegistrarDeuda").on("click", function(){

            // esto es para la lista de deuda

            var Deudor = $("#iptDeudor").val();

            var Monto_texto  = $("#iptMontoDeuda").val();

            var Monto = parseFloat(Monto_texto).toFixed(2);

            var Deuda  = $("#iptMontoDeuda").val();

            var Estado = 1;

            // esto es para el calendario

            var fecha  = $("#iptFechaDeuda").val();

            fecha = fecha.substr(6,4) + '-' + fecha.substr(3,2) + '-' + fecha.substr(0,2) + "";

            var fecha_evento = fecha + " 13:09:00";

            console.log(fecha);

            var tipo_accion = "Deuda";

            if(Deudor === "" || Monto_texto === "" || Monto <= 0 ){

                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: "Porfavor ingrese un nombre y un monto valido",
                    showConfirmButton: false,
                    timer: 1500
                })

                return 0;
            }

            $.ajax({
                async:false,
                url:"ajax/calendario.ajax.php",
                method: 'POST',
                data: {
                    'accion': 3, //1: LISTAR PRODUCTOS
                    'Deudor': Deudor,
                    'Monto' : Monto,
                    'Deuda' : Deuda,
                    'Estado': Estado,
                    'fecha' : fecha,
                    'tipo_accion' : tipo_accion,
                },
                dataType: 'json',
                success: function (respuesta){

                    console.log(respuesta);

                    if(respuesta === "ok"){

                        tabla11.ajax.reload();

                        var nuevosEventos = [
                            { nombre: Deudor, fecha: fecha_evento },
                        ];

                        nuevosEventos.forEach(function (evento) {
                            calendar.addEvent({
                                title: evento.nombre,
                                start: evento.fecha
                            });
                        });

                        $("#mdlCrearDeuda").modal("hide");

                    }

                }
            })

        })

        $("#iptBuscarDeuda").keyup(function() {
            tabla11.column($(this).data('index')).search(this.value).draw();
        });

        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            const tabId = $(e.target).attr('href');
            
            if (tabId === '#content-deuda') {
                // Enfocar el cuadro de texto "iptCodigoVenta"
                $('#iptBuscarDeuda').focus();
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

    function CargarEventosCalendar() {

        if (calendar) {
            calendar.destroy(); // Destruye la instancia existente del calendario
        }

        $.ajax({
            url: "ajax/calendario.ajax.php",
            method: 'POST',
            data: {
                'accion': 4, //1: LISTAR PRODUCTOS
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                eventosDesdeBD = respuesta;

                var eventos = eventosDesdeBD.map(function (item) {
                    return {
                        title: item.nombre,
                        start: item.fecha,
                    };
                });

                var calendarEl = document.getElementById('calendar');
                calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    selectable: true,
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: eventos,
                    select: function (info) {
                        var selectedDate = info.startStr; // Obtener la fecha seleccionada en formato 'yyyy-mm-dd'
                        console.log(selectedDate); // Muestra la fecha seleccionada en la consola
                    }
                });

                calendar.render();
            }
        });
    }

</script>

