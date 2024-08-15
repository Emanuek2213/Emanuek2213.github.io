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
                <a class="nav-link active" id="content-excel-tab" data-toggle="pill" href="#content-excel" role="tab" aria-controls="content-excel" aria-selected="false">
                    <i class=""></i>Exportar ventas (Excel)
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-Analisis-tab" data-toggle="pill" href="#content-Analisis" role="tab" aria-controls="content-Analisis" aria-selected="false">Analizar Registros(Excel)</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-excel" role="tabpanel" aria-labelledby="content-excel-tab">
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
                                    <div class="col-md-8 d-flex flex-row align-items-center justify-content-end">
                                        <div class="form-group m-0"><a class="btn btn-primary" style="width:120px;" id="btnFiltrar">Buscar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FILA PARA IMAGEN DEL GIF -->
                <div class="row mx-0">
                    <div class="col-lg-12 mx-0 text-center">
                        <img src="vistas/assets/imagenes/loading.gif" id="img_carga_1" style="display:none;">
                    </div>
                </div>

                <div class="card card-gray shadow" style="border: 1px solid black;" id="tabla_carga_1">

                    <div class="card-body p-3">
                        <div class="row mb-3">

                            <div class="col-lg-12">
                                <!-- small box -->
                                <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnVolverExcel" tabindex="0">
                                    <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                        <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Guardar Datos en un excel (xlsx)</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="display nowrap table-striped w-100 shadow" id="lstVentasExcel">
                                    <thead class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Opc</th>
                                            <th>Nro Doc</th>
                                            <th>Cliente</th>
                                            <th>Total Venta</th>
                                            <th>Estado</th>
                                            <th>Mensajero</th>
                                            <th>Fecha Venta</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-Analisis" role="tabpanel" aria-labelledby="content-Analisis-tab">

                <!-- FILA PARA INPUT FILE -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-gray" style="border: 1px solid black;">
                            <div class="card-header">
                                <h3 class="card-title">Seleccionar Archivo de Carga (Excel):</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div> <!-- ./ end card-tools -->
                            </div> <!-- ./ end card-header -->
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data" id="form_carga_productos">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <input type="file" name="fileProductos" id="fileProductos" class="form-control"
                                                accept=".xls, .xlsx">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="submit" value="Cargar Productos" class="btn btn-primary"
                                                id="btnCargar">
                                        </div>
                                    </div>
                                </form>

                            </div> <!-- ./ end card-body -->
                        </div>
                    </div>
                </div>

                <!-- FILA PARA IMAGEN DEL GIF -->
                <div class="row mx-0">
                    <div class="col-lg-12 mx-0 text-center">
                        <img src="vistas/assets/imagenes/loading.gif" id="img_carga_2" style="display:none;">
                    </div>
                </div>

                <div class="card card-gray shadow" style="border: 1px solid black;" id="tabla_carga_2">

                    <div class="card-body p-3">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalVenta">0.00</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="display nowrap table-striped w-100 shadow" id="lstVentasCarga">
                                    <thead class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Opc</th>
                                            <th>Nro Doc</th>
                                            <th>Cliente</th>
                                            <th>Total Venta</th>
                                            <th>Estado</th>
                                            <th>Mensajero</th>
                                            <th>Fecha Venta</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.3/xlsx.full.min.js"></script>
<script>

    var encendido = 20;

    var tabla11, ventas_desde, ventas_hasta;
    var groupColumn = 0;
    var isActionInProgress = false;
    var paginaCambiada = false;

    $(document).ready(function(){

        Desaparecer(2) //este comando lo que hace es desaparecer a la tabla momentaniamente 

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
        
        ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;        
        console.log("🚀 ~ file: administrar_ventas.php ~ line 97 ~ $ ~ ventas_desde", ventas_desde)
        ventas_hasta = ventas_hasta.substr(6,4) + '-' + ventas_hasta.substr(3,2) + '-' + ventas_hasta.substr(0,2) ;
        console.log("🚀 ~ file: administrar_ventas.php ~ line 99 ~ $ ~ ventas_hasta", ventas_hasta)
        
        CargadorMasivo();

        CargarTables();

        CargarBotones();

    })
    
</script>


<script>

    function CargarTables(){

        tabla11 = $('#lstVentasExcel').DataTable({  
                    
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
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;color: blue;"> N° ' + formattedData + '</span>';
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
                
            ],
            scrollX:true,
            "order": [[1, 'desc']],
            dom: 'Bfrtip',
            buttons: [
                'excel',
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
                    'fechaHasta': ventas_hasta
                }                              
            },           
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }

        });

    }

    function CargarBotones(){


        /* ======================================================================================
        EVENTO PARA BORRAR UNA VENTA
        ======================================================================================*/

        $('#lstVentasExcel tbody').on('click', ".btnEliminarVenta", function() {

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');
                var data = tabla11.row($(this).parents('tr')).data();
                

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

                                tabla11.ajax. reload();

                            }
                        });
                    }
                })
            }
            
        });

        /* ======================================================================================
        EVENTO PARA FILTRAR VENTAS SEGUN EL RANGO DE FECHAS
        ======================================================================================*/

        $('#btnFiltrar').on('click', function(){

            tabla11.destroy();
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

            tabla11 = $('#lstVentasExcel').DataTable({  
            
                
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
                        targets: [1],
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var formattedData = data;
                            return '<span style="font-weight: bold;color: blue;">' + formattedData + '</span>';
                        }
                    },
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
                        $("#totalVenta").html(TotalVenta.toFixed(2));
                        return respuesta;
                    },
                    data: {
                        'accion': 18,
                        'fechaDesde': ventas_desde,
                        'fechaHasta': ventas_hasta
                    }                              
                },
                
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });
        })

        /* ======================================================================================
        EVENTO PARA VER UNA VENTA
        ======================================================================================*/

        $("#lstVentasExcel tbody").on("click",".btnEditarVenta",function(){

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');


                var data = tabla11.row($(this).parents('tr')).data();

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

        
        $("#btnVolverExcel").on('click', function(){
            console.log("se presiono este boton ..... convirtiendo en excel " ,ventas_hasta ," ",ventas_desde)

            Desaparecer(1);

            cargarImagen_1();

            $.ajax({
                async:false,
                url:"ajax/carga_descarga.ajax.php",
                type:"POST",
                data: {
                    "accion": 1,
                    "ventas_hasta": ventas_hasta,
                    "ventas_desde": ventas_desde,
                },
                dataType: 'json',
                success:function(respuesta){

                    console.log(respuesta);
                    
                    if(respuesta.length > 0 ){

                        var Columnas =  Object.keys(respuesta[0]).length;

                        var Filas =  respuesta.length;

                        Columnas = parseInt(Columnas)/2

                        console.log(Columnas,Filas);

                        var matriz = [];

                        matriz = CompletarExcel(respuesta,Filas,Columnas);

                        console.log("sigamos con esto");

                        $.ajax({
                            async:false,
                            url:"ajax/carga_descarga.ajax.php",
                            type:"POST",
                            data: {
                                "accion": 2,
                                "ventas_hasta": ventas_hasta,
                                "ventas_desde": ventas_desde,
                            },
                            dataType: 'json',
                            success:function(respuesta){


                                if(respuesta.length > 0 ){

                                    var Columnas2 =  Object.keys(respuesta[0]).length;

                                    var Filas2 =  respuesta.length;

                                    Columnas2 = parseInt(Columnas2)/2

                                    console.log(Columnas2,Filas2);

                                    var matriz2 = [];

                                    matriz2 = CompletarExcel2(respuesta,Filas2,Columnas2);

                                    imprimirEnExcel(matriz, matriz2)

                                    tabla11.ajax.reload();
                                    

                                }else if(respuesta === "error"){

                                    Swal.fire({
                                        position:'center',
                                        icon:'error',
                                        title: 'Se presento un error al momento de realizar el registro de categorías y/o productos!',
                                        showConfirmButton: false,
                                        timer: 2500
                                    })

                                    DesaparecerImagen_1();
                                    Aparecer(1);

                                }

                            }
                        })

                        

                    }else if(respuesta === "error"){

                        Swal.fire({
                            position:'center',
                            icon:'error',
                            title: 'Se presento un error al momento de realizar el registro de categorías y/o productos!',
                            showConfirmButton: false,
                            timer: 2500
                        })

                        DesaparecerImagen_1();
                        Aparecer(1);

                    }
                }
                
            });


        })

        


    }

    function CargadorMasivo(){
        $("#form_carga_productos").on('submit',function(e){

            e.preventDefault();

            /*===================================================================*/
            //VALIDAR QUE SE SELECCIONE UN ARCHIVO
            /*===================================================================*/
            if($("#fileProductos").get(0).files.length == 0){
                Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'Debe seleccionar un archivo (Excel).',
                    showConfirmButton: false,
                    timer: 2500
                })
            }else{

                /*===================================================================*/
                //VALIDAR QUE EL ARCHIVO SELECCIONADO SEA EN EXTENSION XLS O XLSX
                /*===================================================================*/
                var extensiones_permitidas = [".xls",".xlsx"];
                var input_file_productos = $("#fileProductos");
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:()])+(" + extensiones_permitidas.join('|') + ")$");

                console.log(exp_reg);
                console.log(input_file_productos.val());
                console.log("hola");

                if(!exp_reg.test(input_file_productos.val().toLowerCase())){
                    Swal.fire({
                        position:'center',
                        icon:'warning',
                        title: 'Debe seleccionar un archivo con extensión .xls o .xlsx.',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    return false;
                }

                var datos = new FormData($(form_carga_productos)[0]);
                
                
                $("#btnCargar").prop("disabled",true);
                $("#img_carga_2").attr("style","display:on");
                $("#img_carga_2").attr("style","height:200px");
                $("#img_carga_2").attr("style","width:200px");

                

                console.log(datos);

                $.ajax({
                    url:"ajax/carga_descarga.ajax.php",
                    type:"POST",
                    data:datos,
                    cache:false,
                    contentType:false,
                    processData: false,
                    success:function(accion){

                        console.log(accion)


                     
                        if(accion == 1 ){
                     
                            // Swal.fire({
                            //     position:'center',
                            //     icon:'success',
                            //     title: 'Se registro correctamente!',
                            //     showConfirmButton: false,
                            //     timer: 2500
                            // })

                            // $("#btnCargar").prop("disabled",false);
                            // $("#img_carga_2").attr("style","display:none");

                            CargarTableDetalles();
                            Aparecer(2)

                        }else{

                            Swal.fire({
                                position:'center',
                                icon:'error',
                                title: 'Se presento un error en el registro del excel (recuerde de no modificar el excel anterior mente)!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga_2").attr("style","display:none");

                        }
                    }
                 
                });

                /*$("#btnCargar").prop("disabled",false);
                $("#img_carga").attr("style","display:none");
                    */
                console.log("adios");

            }
        })
    }

    function CargarTableDetalles(){

        // Verificar si existe una instancia de tabla DataTable y destruirla si es necesario
        if ($.fn.DataTable.isDataTable('#lstVentasCarga')) {
            $('#lstVentasCarga').DataTable().destroy();
        }

        tabla21 = $('#lstVentasCarga').DataTable({  
                    
            "columnDefs": [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarVenta2 text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                
                {
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;color: blue;"> N° ' + formattedData + '</span>';
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
                
            ],
            scrollX:true,
            "order": [[1, 'desc']],
            dom: 'Bfrtip',
            lengthMenu: [15, 30, 50, 100, 200, 500],
            "pageLength": 15,
            ajax: {
                url: 'ajax/carga_descarga.ajax.php',
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
                    'accion': 4
                }                              
            },           
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "initComplete": function(settings, json) {
                // Mostrar la notificación de éxito
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Se registro correctamente!',
                    showConfirmButton: false,
                    timer: 2500
                });

                // Habilitar el botón y ocultar la imagen de carga
                $("#btnCargar").prop("disabled", false);
                $("#img_carga_2").attr("style", "display:none");
            }

        });


        $("#lstVentasCarga tbody").on("click",".btnEditarVenta2",function(){

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla21.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');


                var data = tabla21.row($(this).parents('tr')).data();

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
                        url: "ajax/EditTable/obtener_detalle_venta_excel.php",
                        type:"POST",
                        dataType: "json",
                        data:{"nro_boleta": nroBoleta},
                    }
                });

                $("#modalEditarVenta").modal("show");
            }
        })
        



    }

    function Desaparecer(table){

        if(table == 1){
            document.getElementById('tabla_carga_1').classList.add('d-none'); 
        }else{
            document.getElementById('tabla_carga_2').classList.add('d-none');
        }
        
    }

    function Aparecer(table){

        if(table == 1){
            document.getElementById('tabla_carga_1').classList.remove('d-none');

        }else{
            document.getElementById('tabla_carga_2').classList.remove('d-none');

        }
        
    }

    function cargarImagen_1(){
        $("#img_carga_1").attr("style","display:on");
        $("#img_carga_1").attr("style","height:200px");
        $("#img_carga_1").attr("style","width:200px");
    }

    function cargarImagen_2(){
        $("#img_carga_2").attr("style","display:on");
        $("#img_carga_2").attr("style","height:200px");
        $("#img_carga_2").attr("style","width:200px");
    }

    function DesaparecerImagen_1(){
        $("#img_carga_1").attr("style","display:none");
    }

    function DesaparecerImagen_2(){
        $("#img_carga_2").attr("style","display:none");
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
                    observer.observe($table);
            };

            // Initiate additional resize handling on datatable
            resizeHandler(element);
        }
    }


    function CompletarExcel(respuesta,Filas,Columnas){
        var matriz = [];

        // Inicializar la matriz con arrays vacíos
        for (var i = 0; i <= Filas; i++) {
            matriz[i] = [];
        }

        matriz[0] = ["id_boleta", "nro_boleta", "Cliente", "descripcion", "subtotal", "igv", "total_venta", "Estado", "fecha_venta", "fecha_salida", "fecha_entrega", "fecha_regreso", "mensajero", "deuda", "Vuelto", "Dinero_Dado", "registro", "Persona_Dinero", "Tipo_pago"]


        console.log(respuesta)
        for (var i = 1; i <= Filas; i++) {
            for (var j = 0; j <= Columnas; j++) {
                matriz[i][j] = respuesta[i-1][j];
            }
        }

        console.log("completado aqui")

        return matriz;
        
    }

    function CompletarExcel2(respuesta,Filas2,Columnas2){
        var matriz = [];

        var Filas = Filas2;
        var Columnas = Columnas2

        // Inicializar la matriz con arrays vacíos
        for (var i = 0; i <= Filas; i++) {
            matriz[i] = [];
        }

        matriz[0] = ["id", "nro_boleta", "codigo_producto", "cantidad", "medida", "total_venta", "fecha_venta"]


        console.log(respuesta)
        for (var i = 1; i <= Filas; i++) {
            for (var j = 0; j <= Columnas; j++) {
                matriz[i][j] = respuesta[i-1][j];
            }
        }

        console.log("completado aqui 2")

        return matriz;
        
    }


    function imprimirEnExcel(matriz, matriz2) {
        // Crear un nuevo libro de trabajo
        var workbook = XLSX.utils.book_new();

        // Convertir la primera matriz en una hoja de cálculo de SheetJS
        var worksheet1 = XLSX.utils.aoa_to_sheet(matriz);

        // Convertir la segunda matriz en una hoja de cálculo de SheetJS
        var worksheet2 = XLSX.utils.aoa_to_sheet(matriz2);

        // Agregar la primera hoja de cálculo al libro de trabajo con el nombre 'Hoja1'
        XLSX.utils.book_append_sheet(workbook, worksheet1, 'venta_cabecera');

        // Agregar la segunda hoja de cálculo al libro de trabajo con el nombre 'Hoja2'
        XLSX.utils.book_append_sheet(workbook, worksheet2, 'venta_detalle');

        // Guardar el libro de trabajo en un archivo Excel
        var nombreArchivo = 'Excel_ventas.xlsx';
        XLSX.writeFile(workbook, nombreArchivo);

        Swal.fire({
            position:'center',
            icon:'success',
            title: 'Accion realizada con exito, Excel Creado y Descargado',
            showConfirmButton: false,
            timer: 2500
        })

        eliminar_base();

        DesaparecerImagen_1();
        Aparecer(1);
    }

    function eliminar_base(){

        $.ajax({
            async:false,
            url:"ajax/carga_descarga.ajax.php",
            type:"POST",
            data: {
                "accion": 3,
                "ventas_hasta": ventas_hasta,
                "ventas_desde": ventas_desde,
            },
            dataType: 'json',
            success:function(respuesta){

                console.log(respuesta);

                tabla11.ajax.reload()
                

            }
        })

    }

</script>