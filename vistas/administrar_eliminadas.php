<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Ventas Eliminadas</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Ventas</li>
                    <li class="breadcrumb-item active">Ventas Eliminadas</li>
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
                                    <label for="">Desde:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="ventas_desde">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Hasta:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="ventas_hasta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex flex-row align-items-center justify-content-end">
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
                    <!-- <div class="col-md-6 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                            <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalVenta">0.00</span></h2>
                    </div> -->
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
                                    <th>Comentario</th>
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
<div class="modal fade" id="modalDetallesVenta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Detalles de la venta</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="iptComentario">Explicacion del porque se elimino</label>
                                </div>

                                <div class="col-md-6 mb-3 rounded-3 text-right">
                                    <button class="btn btn-success" id="btnCambiarCausa">
                                        <i class="fas fa-save"></i> Guardar Explicacion
                                    </button>
                                </div>

                            </div>
                            
                            <textarea name="iptComentario" id="iptComentario" class="form-control form-control-sm"
                                rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>

                        </div>

                    </div>

                </div>

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                            
                            <table id="tblDetalleEliminacion" class="table table-bordered table-striped w-100">
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

                </div>  

            </div>

            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button> -->
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<script> var encendido = 20;

    var table;
    var table, ventas_desde, ventas_hasta;
    var groupColumn = 0;
    var isActionInProgress = false;
    var paginaCambiada = false;
    
    $(document).ready(function(){
        var tblDetalleEliminacionElement = document.getElementById("tblDetalleEliminacion");
        ajustarHeadersDataTables(tblDetalleEliminacionElement);
        
        

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
        $("#ventas_desde").val(moment().startOf('year').format('DD/MM/YYYY'));

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
                                "<span class='btnDetallesEliminado text-info px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-search fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                
                // {
                //     targets: 1,
                //     createdCell: function(td, cellData, rowData, row, col) {
                //         var valor = rowData[4]; // Assuming rowData is a string, remove leading/trailing spaces
                //         console.log(valor);
                //         var color;

                //         // Asignar colores según el orden indicado
                //         if (valor === "Registrado") {
                //             color = '#FFFFFF';  // Blanco
                //         } else if (valor === "Reportado") {
                //             color = '#F0F0F0';  // Gris muy claro
                //         } else if (valor === "Orden en Camino") {
                //             color = '#D0D0D0';  // Gris claro
                //         } else if (valor === "Orden Recibida") {
                //             color = '#A0A0A0';  // Gris medio
                //         } else if (valor === "Orden cancelada") {
                //             color = '#808080';  // Gris oscuro
                //         }

                //         // Aplicar el color al fondo de la fila
                //         $(td).parent().css('background', color);
                //     }
                // },
                {
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<h6><span style="font-weight: bold;color: red;"> N° ' + formattedData + '</span></h6>';
                    }
                },
                {
                    targets: [2],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<h6><span style="font-weight: bold;">' + formattedData.trim() + '</span></h6>';
                    }
                },
                {
                    targets: [3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = "S./ " + parseFloat(data).toFixed(2);
                        return '<h6><span style="font-weight: bold; color: gray;">' + formattedData + '</span></h6>';
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

                        return '<h6><span style="font-weight: bold; color: '+color+';">' + formattedData + '</span></h6>';
                    }
                },

                {
                    targets: [4,7],
                    visible: false,
                },

                
                {
                    targets: [5],
                    orderable: false,
                    render: function(data, type, full, meta) {
                            if(data === ""){
                                data = "sin mensajero"
                            }
                            return '<h6><span style="font-weight: bold;">' + data + '</span></h6>';

                    }
                },

                {
                    targets: [6],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        if(data === ""){
                            data = "sin fecha";
                        } else {
                            // Convert the date from "YYYY-MM-DD HH:MM:SS" to "DD/MM/YYYY"
                            var dateParts = data.split(" ")[0].split("-");
                            data = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
                        }
                        return '<h6><span style="font-weight: bold;">' + data + '</span></h6>';
                    }
                },
                
            ],
            scrollX:true,
            "order": [[1, 'desc']],
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
                    //$("#totalVenta").html(TotalVenta.toFixed(2));
                    return respuesta;
                },
                data: {
                    'accion': 34,
                    'fechaDesde': ventas_desde,
                    'fechaHasta': ventas_hasta
                }                              
            },
            
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });

        /* ======================================================================================
		EVENTO PARA BORRAR UNA VENTA
		======================================================================================*/

        // $('#lstVentas tbody').on('click', ".btnEliminarVenta", function() {

        //     if ($(this).parents('tr').hasClass('selected')) {

        //         $(this).parents('tr').removeClass('selected');

        //         $('#modulos').jstree("deselect_all", false);

        //         $("#select_modulos option").remove();

        //         $("#card-modulos").css("display", "none");

        //     }else{

        //         table.$('tr.selected').removeClass('selected');

        //         $(this).parents('tr').addClass('selected');
        //         var data = table.row($(this).parents('tr')).data();
                

        //         var nroBoleta2 = data[1];

        //         console.log(nroBoleta2);

        //         Swal.fire({
        //             icon: 'warning',
        //             title: ' Seguro de eliminar la boleta nro: '+nroBoleta2,
        //             confirmButtonText: 'Aceptar',
        //             showCancelButton: true,
        //         }).then((result) => {
        //             if(result.isConfirmed == true){
        //                 $. ajax({ 
        //                     url: "ajax/ventas.ajax.php",
        //                     type: "POST",
        //                     data: {accion : '3',Boleta: String(nroBoleta2)},
        //                     dataType:"json",
        //                     success:function(respuesta){
                                
        //                         Swal. fire({
        //                             position: 'center',
        //                             icon: 'success',
        //                             title: "Se elimino correctamente la venta",
        //                             showConfirmButton: false,
        //                             timer: 1500
        //                         })

        //                     table.ajax. reload();

        //                     }
        //                 });
        //             }
        //         })
        //     }
            
        // });

        /* ======================================================================================
		EVENTO PARA FILTRAR VENTAS SEGUN EL RANGO DE FECHAS
		======================================================================================*/

        $('#btnFiltrar').on('click', function(){

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
                                    "<span class='btnDetallesEliminado text-info px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                    "<i class='fas fa-search fs-2'></i>" +
                                    "</span>" +
                                    "</center>"

                        }
                    },
                    
                    // {
                    //     targets: 1,
                    //     createdCell: function(td, cellData, rowData, row, col) {
                    //         var valor = rowData[4]; // Assuming rowData is a string, remove leading/trailing spaces
                    //         console.log(valor);
                    //         var color;

                    //         // Asignar colores según el orden indicado
                    //         if (valor === "Registrado") {
                    //             color = '#FFFFFF';  // Blanco
                    //         } else if (valor === "Reportado") {
                    //             color = '#F0F0F0';  // Gris muy claro
                    //         } else if (valor === "Orden en Camino") {
                    //             color = '#D0D0D0';  // Gris claro
                    //         } else if (valor === "Orden Recibida") {
                    //             color = '#A0A0A0';  // Gris medio
                    //         } else if (valor === "Orden cancelada") {
                    //             color = '#808080';  // Gris oscuro
                    //         }

                    //         // Aplicar el color al fondo de la fila
                    //         $(td).parent().css('background', color);
                    //     }
                    // },
                    {
                        targets: [1],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            return '<h6><span style="font-weight: bold;color: red;"> N° ' + formattedData + '</span></h6>';
                        }
                    },
                    {
                        targets: [2],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            return '<h6><span style="font-weight: bold;">' + formattedData.trim() + '</span></h6>';
                        }
                    },
                    {
                        targets: [3],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = "S./ " + parseFloat(data).toFixed(2);
                            return '<h6><span style="font-weight: bold; color: gray;">' + formattedData + '</span></h6>';
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

                            return '<h6><span style="font-weight: bold; color: '+color+';">' + formattedData + '</span></h6>';
                        }
                    },

                    {
                        targets: [4,7],
                        visible: false,
                    },

                    
                    {
                        targets: [5],
                        orderable: false,
                        render: function(data, type, full, meta) {
                                if(data === ""){
                                    data = "sin mensajero"
                                }
                                return '<h6><span style="font-weight: bold;">' + data + '</span></h6>';

                        }
                    },

                    {
                        targets: [6],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            if(data === ""){
                                data = "sin fecha";
                            } else {
                                // Convert the date from "YYYY-MM-DD HH:MM:SS" to "DD/MM/YYYY"
                                var dateParts = data.split(" ")[0].split("-");
                                data = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
                            }
                            return '<h6><span style="font-weight: bold;">' + data + '</span></h6>';
                        }
                    },
                    
                ],
                "order": [[1, 'desc']],
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
                        TotalVenta = 0.00;
                        for (let i = 0; i < respuesta.length; i++) {
                            if(respuesta[i][4] === "Registrado"){

                            }else{
                                TotalVenta = parseFloat(respuesta[i][3]) + parseFloat(TotalVenta);
                            }
                            
                        }
                        //$("#totalVenta").html(TotalVenta.toFixed(2));
                        return respuesta;
                    },
                    data: {
                        'accion': 34,
                        'fechaDesde': ventas_desde,
                        'fechaHasta': ventas_hasta
                    }                              
                },
                
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
        })
        
        /*=======================================================================
        =========================================================================
        EN ESTA ZONA SE CONFIGURAN LAS ACCIONES DE LAS TECLAS
        =========================================================================
        =======================================================================*/

        $(document).on('keydown', function (event) {
            if (event.keyCode === 40 && !$('#modalDetallesVenta').is(':visible')) {
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

            if (event.keyCode === 38 && !$('#modalDetallesVenta').is(':visible')) {
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

            if (event.keyCode === 13 && !$('#modalDetallesVenta').is(':visible')) { // Tecla Enter
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

                        if($.fn.DataTable.isDataTable("#tblDetalleEliminacion")){
                            $("#tblDetalleEliminacion").DataTable().destroy();
                        }

                        $("#tblDetalleEliminacion tbody").empty();

                        $("#tblDetalleEliminacion").DataTable({
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

                        $("#modalDetallesVenta").modal("show");
                        $("#iptComentario").focus();

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 46 && !$('#modalDetallesVenta').is(':visible')) { // Tecla Enter
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

            if (event.keyCode === 37 && !$('#modalDetallesVenta').is(':visible')) { // Tecla Izquierda
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


            if (event.keyCode === 39 && !$('#modalDetallesVenta').is(':visible')) { // Tecla Derecha
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
        });

        $('#btnCambiarCausa').on('click', function(){

            var Comentario = $("#iptComentario").val();

            $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 35,
                    'Comentario': Comentario,
                    'nroBoleta':nroBoleta,
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);
                    if(respuesta === "ok"){
                        Swal.fire({
                            icon: 'success',
                            title: ' Cambio realizado correctamente  ',
                        })
                        table.ajax.reload();
                    }else{
                        Swal.fire({
                            icon: 'warning',
                            title: respuesta ,
                        })
                    }
                
                }
            })

        });

    })

    /*===============================================================================================
    =================================================================================================
    =================================================================================================
    EVENTOS PARA EDITAR UNA VENTA
    =================================================================================================
    =================================================================================================
    ===============================================================================================*/

    $("#lstVentas tbody").on("click",".btnDetallesEliminado",function(){

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

            var Comentario = data[7];

            $("#iptComentario").val(Comentario);

            if($.fn.DataTable.isDataTable("#tblDetalleEliminacion")){
                $("#tblDetalleEliminacion").DataTable().destroy();
            }

            $("#tblDetalleEliminacion tbody").empty();

            $("#tblDetalleEliminacion").DataTable({
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
                    url: "ajax/EditTable/obtener_detalle_eliminado.php",
                    type:"POST",
                    dataType: "json",
                    data:{"nro_boleta": nroBoleta},
                }
            });

            $("#modalDetallesVenta").modal("show");
            $("#iptComentario").focus();
        }
    })

    
</script><script>

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
                observer.observe($table);
        };

        // Initiate additional resize handling on datatable
        resizeHandler(element);
    }
}

//document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>