<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Reporte de Cotizaciones</h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Ventas</li>
                    <li class="breadcrumb-item active">Administrar Cotizaciones</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">

    <div class="container-fluid">

            <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="content-perfiles-tab" data-toggle="pill" href="#content-perfiles" role="tab" aria-controls="content-perfiles" aria-selected="false">Historial</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " id="content-modulos-tab" data-toggle="pill" href="#content-modulos" role="tab" aria-controls="content-modulos" aria-selected="false">Crear o Modificar</a>
                </li>

            </ul>

            <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

                <div class="tab-pane fade active show mt-4 px-4" id="content-perfiles" role="tabpanel" aria-labelledby="content-perfiles-tab">
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
                                                <label for="">Cotizaciones desde</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="cotiza_desde">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Cotizaciones hasta:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="cotiza_hasta">
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
                                <div class="col-md-6 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                                        <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalCotiza">0.00</span></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display nowrap table-striped w-100 shadow" id="lstCotizacion">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr>
                                                <th>Nro Boleta</th>
                                                <th>Codigo Barras</th>
                                                <th>Categoria</th>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Total Venta</th>
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

                <div class="tab-pane fade  mt-4 px-4" id="content-modulos" role="tabpanel" aria-labelledby="content-modulos-tab">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-gray shadow">
                                <div class="card-header">
                                    <h3 class="card-title">Criterios de Busqueda</h3>
                                    <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <table id="lstCabeceras" class="display nowrap table-striped w-100 shadow ">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr>
                                                <th class="text-center">Opciones</th>
                                                <th>Item</th>
                                                <th>nro.Cotizacion</th>
                                                <th>Total</th>
                                                <th>Fecha</th>
                                                
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
                    
                        <div class="col-md-8">
                            <div class="card card-gray shadow">
                                <div class="card-header">
                                    <h3 class="card-title">Criterios de Busqueda</h3>
                                    <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <table id="lstDetalles" class="display nowrap table-striped w-100 shadow ">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr>
                                                <th>Item</th>
                                                <th>Codigo</th>
                                                <th>Id Categoria</th>
                                                <th>Categoria</th>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                                <th class="text-center">Opciones</th>
                                                <th>Aplica Peso</th>
                                                <th>Precio docena</th>
                                                <th>Precio millar</th>
                                                <th>Precio caja</th>
                                                <th>Precio fardo</th>
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

<!-- Modal -->
<div class="modal fade" id="modalEditarCotizacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

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


<!-- ESTOS SCRIPTS SON DE LA VISTA HISTORIAL -->
<script> 
    var encendido = 20;
        $(document).ready(function(){
            var tblDetalleVentaElement = document.getElementById("tblDetalleVenta");
            var table_cabeceras = document.getElementById("lstCabeceras");
            var table_detalles = document.getElementById("lstDetalles");
            ajustarHeadersDataTables(table_cabeceras);
            ajustarHeadersDataTables(table_detalles);
            ajustarHeadersDataTables(tblDetalleVentaElement);
            var table, cotiza_desde, cotiza_hasta;
            var groupColumn = 0;

            $('#cotiza_desde, #cotiza_hasta').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })

                    // Obtén la fecha del primer día del mes actual
            var fechaInicioMesActual = moment().startOf('month');

            // Resta un mes para obtener el primer día del mes pasado
            var fechaInicioMesPasado = fechaInicioMesActual.subtract(1, 'months');

            // Formatea la fecha en el formato 'DD/MM/YYYY'
            var fechaFormateada = fechaInicioMesPasado.format('DD/MM/YYYY');

            // Establece el valor de #cotiza_desde
            $("#cotiza_desde").val(fechaFormateada);

            // Establece el valor de #cotiza_hasta al día actual en el formato 'DD/MM/YYYY'
            $("#cotiza_hasta").val(moment().format('DD/MM/YYYY'));

            cotiza_desde = $("#cotiza_desde").val();
            cotiza_hasta = $("#cotiza_hasta").val();
            
            cotiza_desde = cotiza_desde.substr(6,4) + '-' + cotiza_desde.substr(3,2) + '-' + cotiza_desde.substr(0,2) ;        
            ////console.log("🚀 ~ file: administrar_ventas.php ~ line 97 ~ $ ~ cotiza_desde", cotiza_desde)
            cotiza_hasta = cotiza_hasta.substr(6,4) + '-' + cotiza_hasta.substr(3,2) + '-' + cotiza_hasta.substr(0,2) ;
            ////console.log("🚀 ~ file: administrar_ventas.php ~ line 99 ~ $ ~ cotiza_hasta", cotiza_hasta)

            table = $('#lstCotizacion').DataTable({  
                "columnDefs": [
                    { visible: false, targets: groupColumn },
                    {
                        targets: [1,2,3,4,5],
                        orderable: false
                    }
                ],
                "order": [[ 6, 'desc' ]],
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength',

                ],
                lengthMenu: [0, 5, 10, 15, 20, 50],
                "pageLength": 15,
                ajax: {
                    url: 'ajax/cotiza.ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    "dataSrc": function(respuesta){
                        
                        totalCotiza = 0.00;
                        for( let i = 0; i< respuesta.length;i++){
                            totalCotiza = parseFloat(respuesta[i][5].replace('S./ ','')) + parseFloat(totalCotiza);
                        }
                        $("#totalCotiza").html(totalCotiza.toFixed(2))
                        return respuesta;
                    },
                    data: {
                        'accion': 2,
                        'fechaDesde': cotiza_desde,
                        'fechaHasta' : cotiza_hasta
                    }                              
                },
                drawCallback: function (settings) {
                    
                    var api = this.api();
                    var rows = api.rows( {page:'current'} ).nodes();
                    var last=null;
        
                    api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {                
                                        
                        if ( last !== group ) {

                            const data = group.split("-");
                            var nroBoleta = data[0];
                            nroBoleta = nroBoleta.split(":")[1].trim();
                            var estado;
                            
                            var color = "success";

                        
                            $.ajax({

                                url: "ajax/cotiza.ajax.php",
                                type: "POST",
                                data: {accion : '4',Boleta: String(nroBoleta)},
                                dataType:"json",
                                success:function(respuesta){

                                    var estado = respuesta[0][0];

                                    //console.log("estado : "+estado + " nro de boleta: "+ nroBoleta);

                                    if (estado === "CANCELADO"){
                                        color = "success";
                                    }else if(estado === "DEUDA"){
                                        color = "danger";
                                    }else if(estado === "PARCIAL"){
                                        color = "warning";
                                    }
                                    //console.log("🚀 ~ file: administrar_ventas.php ~ line 134 ~ nroBoleta", nroBoleta)

                                    $(rows).eq(i).before(
                                        '<tr class="group">'+
                                            '<td colspan="6" class="fs-6 fw-bold fst-italic bg-'+color+' text-white "  style="border: 1px solid black;"> ' +
                                                '<i nroBoleta = ' + nroBoleta + ' class="fas fa-trash fs-6 text-dark mx-2 btnEliminarCotizacion" style="cursor:pointer;"></i> <i nroBoleta = ' + nroBoleta + ' class="fas fa-edit fs-6 text-dark mx-2 btnEditarCotizacion" style="cursor:pointer;"> </i>'+
                                                    group +  
                                            '</td>'+
                                        '</tr>'
                                    );

                                }
                             
                            })
                            
                            
                            
                            

                            last = group;
                        }
                    } );
                },
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });

            /* ======================================================================================
            EVENTO PARA BORRAR UNA VENTA
            ======================================================================================*/

            $('#lstCotizacion tbody').on('click', ".btnEliminarCotizacion", function() {

                //console.log("se presiono este boton")
                var nroBoleta = $(this).attr("nroBoleta");
                $.ajax({ 
                    url: "ajax/cotiza.ajax.php",
                    type: "POST",
                    data: {accion : '3',Boleta: String(nroBoleta)},
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
            });

            /* ======================================================================================
            EVENTO PARA FILTRAR VENTAS SEGUN EL RANGO DE FECHAS
            ======================================================================================*/

            $('#btnFiltrar').on('click', function(){

                table.destroy();
                if($("#cotiza_desde").val() ==''){
                    cotiza_desde = '01/01/2023';
                }else{
                    cotiza_desde = $("#cotiza_desde").val();
                }

                if($("#cotiza_hasta").val() ==''){
                    cotiza_hasta = moment().format('DD/MM/YYYY');
                }else{
                    cotiza_hasta = $("#cotiza_hasta").val();
                }

                cotiza_desde = cotiza_desde.substr(6,4) + "-" + cotiza_desde.substr(3,2) + "-" + cotiza_desde.substr(0,2);

                cotiza_hasta = cotiza_hasta.substr(6,4) + "-" + cotiza_hasta.substr(3,2) + "-" + cotiza_hasta.substr(0,2);

                var groupColumn = 0;

                table = $('#lstCotizacion').DataTable({  
                    "columnDefs": [
                        { visible: false, targets: groupColumn },
                        {
                            targets: [1,2,3,4,5],
                            orderable: false
                        }
                    ],
                    "order": [[ 6, 'desc' ]],
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 'print', 'pageLength',

                    ],
                    lengthMenu: [0, 5, 10, 15, 20, 50],
                    "pageLength": 15,
                    ajax: {
                        url: 'ajax/cotiza.ajax.php',
                        type: 'POST',
                        dataType: 'json',
                        "dataSrc": function(respuesta){
                            
                            totalCotiza = 0.00;
                            for( let i = 0; i< respuesta.length;i++){
                                totalCotiza = parseFloat(respuesta[i][5].replace('S./ ','')) + parseFloat(totalCotiza);
                            }
                            $("#totalCotiza").html(totalCotiza.toFixed(2))
                            return respuesta;
                        },
                        data: {
                            'accion': 2,
                            'fechaDesde': cotiza_desde,
                            'fechaHasta' : cotiza_hasta
                        }                              
                    },
                    drawCallback: function (settings) {
                        
                        var api = this.api();
                        var rows = api.rows( {page:'current'} ).nodes();
                        var last=null;
            
                        api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {                
                                            
                            if ( last !== group ) {

                                const data = group.split("-");
                                var nroBoleta = data[0];
                                nroBoleta = nroBoleta.split(":")[1].trim();                        
                                var estado;
                            
                                var color = "success";

                            
                                $.ajax({

                                    url: "ajax/cotiza.ajax.php",
                                    type: "POST",
                                    data: {accion : '4',Boleta: String(nroBoleta)},
                                    dataType:"json",
                                    success:function(respuesta){

                                        var estado = respuesta[0][0];

                                        //console.log("estado : "+estado + " nro de boleta: "+ nroBoleta);

                                        if (estado === "CANCELADO"){
                                            color = "success";
                                        }else if(estado === "DEUDA"){
                                            color = "danger";
                                        }else if(estado === "PARCIAL"){
                                            color = "warning";
                                        }
                                        //console.log("🚀 ~ file: administrar_ventas.php ~ line 134 ~ nroBoleta", nroBoleta)

                                        $(rows).eq(i).before(
                                            '<tr class="group">'+
                                                '<td colspan="6" class="fs-6 fw-bold fst-italic bg-'+color+' text-white "  style="border: 1px solid black;"> ' +
                                                    '<i nroBoleta = ' + nroBoleta + ' class="fas fa-trash fs-6 text-dark mx-2 btnEliminarCotizacion" style="cursor:pointer;"></i> <i nroBoleta = ' + nroBoleta + ' class="fas fa-edit fs-6 text-dark mx-2 btnEditarCotizacion" style="cursor:pointer;"> </i>'+
                                                        group +  
                                                '</td>'+
                                            '</tr>'
                                        );

                                    }
                                
                                })

                                last = group;
                            }
                        } );
                    },
                    language: {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                    }
                });
            }) 
            
            
            table_cabeceras = $('#lstCabeceras').DataTable({
                    columnDefs: [
                        {
                            targets: 1,
                            visible: false
                        },

                        {
                            targets: 0,
                            orderable: false,
                            render: function(data, type, full, meta) {
                                return  "<center>" +
                                        "<span class='btnEditarCotiza text-primary px-1' style='cursor:pointer;'>" +
                                        "<i class='fas fa-pencil-alt fs-5'></i>" +
                                        "</span>" +
                                        "<span class='btnEliminarCotiza text-danger px-1' style='cursor:pointer;'>" +
                                        "<i class='fas fa-trash fs-5'></i>" +
                                        "</span>" +
                                        "</center>"
                            }
                        }
                    ],
                    "order": [
                        [1, 'desc']
                    ],
                    ajax: {
                        url: "ajax/cotiza.ajax.php",
                        dataSrc: '',
                        type: "POST",
                        data: {
                            'accion': 1 //1: LISTAR Cabecera
                        },
                    },
                    scrollX:true,
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                    }
            });

            table_detalles = $('#lstDetalles').DataTable({
                columnDefs: [{
                        targets: 0,
                        visible: false
                    },
                    {
                        targets: 3,
                        visible: false
                    },
                    {
                        targets: 2,
                        visible: false
                    },
                    {
                        targets: 9,
                        visible: false
                    },
                    {
                        targets: 10,
                        visible: false
                    },
                    {
                        targets: 11,
                        visible: false
                    },
                    {
                        targets: 12,
                        visible: false
                    },
                    {
                        targets: 13,
                        visible: false
                    }
                ],
                "order": [
                    [0, 'desc']
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
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

        $("#lstCotizacion tbody").on("click",".btnEditarVenta",function(){ 
                
        })


        $("#lstCotizacion tbody").on("click",".btnEditarVenta",function(){

            nroBoleta = $(this).attr("nroBoleta");

            //console.log(nroBoleta);

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

            $("#modalEditarCotizacion").modal("show");
        })

        
</script>

<script>

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


</script>

<!-- ESTOS SCRIPTS SON DE LA VISTA CREAR O MODIFICAR -->

<script>
    

    
</script>