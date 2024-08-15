<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Asistencia y Empleados</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Asistencias</li>

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
                <a class="nav-link active" id="content-registrar-asistencia-tab" data-toggle="pill" href="#content-registrar-asistencia" role="tab" aria-controls="content-registrar-asistencia" aria-selected="false">Registrar Asistencia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-lista-asistencias-tab" data-toggle="pill" href="#content-lista-asistencias" role="tab" aria-controls="content-lista-asistencias" aria-selected="false">Registro de Asistencia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-empleados-tab" data-toggle="pill" href="#content-empleados" role="tab" aria-controls="content-empleados" aria-selected="false">Lista de Empleados</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-registrar-asistencia" role="tabpanel" aria-labelledby="content-registrar-asistencia-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12 mb-12 text-center">
                            
                            <div class="card card-gray" style="border: 1px solid black;">

                                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registrar Asistencia del Empleado ( <span id="Fecha_de_asistencia"></span> )</h2>

                            </div>
                        
                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstRegistrarAsistencia" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-black text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Editar</th>
                                                    <th>Id</th>
                                                    <th>Empleado</th>
                                                    <th class="text-center">Asistencia</th>
                                                    <th class="text-center">Tardanza</th>
                                                    <th class="text-center">Falta</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-lista-asistencias" role="tabpanel" aria-labelledby="content-lista-asistencias-tab">  

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12 mb-6 text-center">

                            <div class="card card-gray" style="border: 1px solid black;">

                                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Lista de Asistencia</h2>

                            </div>

                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;">
                                <div class="card-header">
                                    <h3 class="card-title">Criterios de Busqueda</h3>
                                    <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Ventas desde:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="fecha_asistencia">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8 d-flex flex-row align-items-center justify-content-end">
                                            <div class="form-group m-0"><a class="btn btn-primary" style="width:120px;" id="btnFiltrar">Buscar [F10]</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstAsistencias" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id_asistencia</th>
                                                    <th>Id</th>
                                                    <th>Empleado</th>
                                                    <th>Asistencia</th>
                                                    <th>Tardanza</th>
                                                    <th>Falta</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-empleados" role="tabpanel" aria-labelledby="content-empleados-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12 mb-6 text-center">

                            <div class="card card-gray" style="border: 1px solid black;">

                                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Lista de Empleados</h2>

                            </div>

                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                    <div style="width: 60%;" class="form-floating mx-1">
                                                        <input type="text" id="iptEmpleado2" class="form-control" data-index="3" autocomplete="off">
                                                        <label for="iptEmpleado2">Empleado</label>
                                                    </div>

                                                    <div class="col-lg-5">
                                                        <!-- small box -->
                                                        <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnAgregarEmpleado" tabindex="0">
                                                            <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                                <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Nuevo empleado [F10]</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptEmpleado2" class="form-control" data-index="3">
                                                        <label for="iptEmpleado2">Empleado</label>
                                                    </div>

                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstEmpleados" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-black text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id</th>
                                                    <th>Empleado</th>
                                                    <th>dni</th>
                                                    <th>Tardanzas</th>
                                                    <th>Justifiaciones</th>
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

<div class="modal fade" id="mdlTiempoTardanza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock">Tiempo de Tardanza</h6>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">

                        <div class="form-group mb-2">

                            <label class="" for="iptCantidadMinutos">
                                <i class="fas fa-plus-circle fs-6"></i> <span class="small"
                                    id="titulo_modal_label">Agregar al Stock</span>
                            </label>

                            <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadMinutos"
                                placeholder="Ingrese cantidad a agregar al Stock">

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnCancelarTardanza">Cancelar [esc]</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnGuardarTardanza">Guardar [enter]</button>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlTiempoTardanzaEdicion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock_edicion">Tiempo de Tardanza</h6>

            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">

                        <div class="form-group mb-2">

                            <label class="" for="iptCantidadMinutosEdicion">
                                <i class="fas fa-plus-circle fs-6"></i> <span class="small"
                                    id="titulo_modal_label">Agregar al Stock</span>
                            </label>

                            <input type="number" min="0" class="form-control form-control-sm" id="iptCantidadMinutosEdicion"
                                placeholder="Ingrese cantidad a agregar al Stock">

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnCancelarTardanzaEdicion">Cancelar [esc]</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnGuardarTardanzaEdicion">Guardar [enter]</button>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlCrearCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Empleado</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <form method="post" class="needs-validation-registro-empleados" novalidate id="frm_registro_empleados">

                        <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->
                        
                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptNombre"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Nombre de Empleado</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptNombre"
                                        name="iptNombre" placeholder="Razon Social" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Social</div>
                                </div>
                        
                            </div>
                            
                        </div>
                            
                        <div class="col-md-12 mb-3">

                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptDni"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">DNI o identificacion (opcional)</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptDni"
                                        name="iptDni" placeholder="Razon Comercial" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Comercial</div>
                                </div>

                            </div> 

                        </div>

                        <div class="col-md-12">

                            <div class="col-12 col-lg-12">

                                <button type="button" class="btn btn-secondary btn-sm"  id="btnGuardarCliente">Guardar Cliente [f10]</button>

                            </div> 

                        </div>
                        
                    </form> 

                    

                </div>

            </div>

            <div class="modal-footer">
                
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalEditarAsistencia" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Cambiar Asistencia</h3>

            </div>

            <div class="modal-body">

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <table id="lstEditarAsitencia" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-black text-left fs-6">
                                    <tr>
                                        <th>Id_asistencia</th>
                                        <th>Id</th>
                                        <th>Empleado</th>
                                        <th class="text-center">Asistencia</th>
                                        <th class="text-center">Tardanza</th>
                                        <th class="text-center">Falta</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

                <!-- <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <label for="iptComentario">Explicacion del porque se elimino</label>
                            <textarea name="iptComentario" id="iptComentario" class="form-control form-control-sm"
                                rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>

                        </div>

                    </div>

                </div> -->

            </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-info mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" id="btnCerrarEdicion">Cerrar ventana</button>
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

</script>

<script>

var table11;
var table21;
var table31;

var $icono;

var isActionInProgress = false;

var fecha_actual;

var id_empleado_edicion;
var id_asistencia_edicion;

var id_registro_asistencia_edicion;

$(document).ready(function(){

    cargarTable();

    cargarCalendario();

    cargarBotonesTable();

    cargarBotonesModal();

    cargarBotonesNormal();

})

$(document).on('keydown', function(event) {

    if ( $('#content-registrar-asistencia:visible').length > 0 && $('#mdlTiempoTardanza').is(':visible')) {

        if (event.keyCode === 27) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnCancelarTardanza').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }

        }

        if (event.keyCode === 13) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnGuardarTardanza').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }

        }
    }

    if ( $('#content-lista-asistencias:visible').length > 0 && !$('#mdlTiempoTardanza').is(':visible')) {

        if (event.keyCode === 121) {

            event.preventDefault()

            if (!isActionInProgress) {

                isActionInProgress = true;

                $('#btnFiltrar').click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); 

            }

        }
    }

});

</script>

<script>

    function cargarTable(){

        table11= $("#lstRegistrarAsistencia").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +

                            "<span class='btnEditarEmpleado text-blue px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                            "<i class='fas fa-edit fs-1'></i>" +
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

                    targets: 3,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +

                            "<span class='btnRegistrarAsistencia text-green px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                            "<i class='far fa-clock fs-1'></i>" +
                            "</span>" +

                            "</center>"

                    }
                },
                {

                    targets: 4,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +

                            "<span class='btnRegistrarTardanza text-yellow px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                            "<i class='far fa-clock fs-1'></i>" +
                            "</span>" +

                            "</center>"

                    }
                },
                {

                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +

                            "<span class='btnRegistrarFalta text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                            "<i class='far fa-clock fs-1'></i>" +
                            "</span>" +

                            "</center>"

                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 21 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstRegistrarAsistencia'));
            }
        });

        table21= $("#lstAsistencias").DataTable({
            columnDefs: [
                {

                    targets: 1,
                    visible: false,
                    
                }
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            scrollX:true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstAsistencias'));
            }
        });

        table31= $("#lstEmpleados").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +

                            "<span class='btnEliminarEmpleado text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +

                            "</center>"

                    }
                },
                {

                    targets: 3,
                    visible: false,
                },
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstEmpleados'));
            }
        });

        table41= $("#lstEditarAsitencia").DataTable({
            columnDefs: [
                {

                    targets: 0,
                    visible: false,
                    
                }
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            scrollX:true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstEditarAsitencia'));
            }

        });


    }

    function cargarCalendario(){

        $('#fecha_asistencia').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })

        $("#fecha_asistencia").val(moment().format('DD/MM/YYYY'));

        $("#fecha_asistencia").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#Fecha_de_asistencia").text(moment().format('DD/MM/YYYY'));

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

    function cargarBotonesTable(){

        $("#lstRegistrarAsistencia tbody").on('click','.btnRegistrarAsistencia', function(){

            var data = table11.row($(this).parents('tr')).data();

            var id_empleado = data["id_empleado"]

            fecha_actual = moment().format('YYYY-MM-DD')

            console.log(fecha_actual);
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {

                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatos(id_empleado);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                registrarAsistencia(id_empleado);
            }

        });

        $("#lstRegistrarAsistencia tbody").on('click', '.btnRegistrarTardanza', function() {
            // Obtener los datos de la fila actual
            var data = table11.row($(this).parents('tr')).data();

            var id_empleado = data["id_empleado"]

            fecha_actual = moment().format('YYYY-MM-DD')
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            $icono = $icon;

            id_empleado_edicion = id_empleado;

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {
                
                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatos(id_empleado,fecha_actual);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                $("#mdlTiempoTardanza").modal("show");

                // registrarTardanza(id_empleado);
            }
            
        });

        $("#lstRegistrarAsistencia tbody").on('click','.btnRegistrarFalta', function(){

            // Obtener los datos de la fila actual
            var data = table11.row($(this).parents('tr')).data();

            var id_empleado = data["id_empleado"]

            fecha_actual = moment().format('YYYY-MM-DD')
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {
                
                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatos(id_empleado);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                registrarInasistencia(id_empleado);
            }

        });

        $('#mdlTiempoTardanza').on('shown.bs.modal', function () {
            $('#iptCantidadMinutos').focus();
        });

        $("#lstAsistencias tbody").on('click','.btnEditarAsistencia', function(){

            var data = table21.row($(this).parents('tr')).data();

            var id_registro_asistencia = data[1];

            console.log(id_registro_asistencia);

            $("#modalEditarAsistencia").modal("show");

            rellenarTablaModal(id_registro_asistencia);

        });


        $('#lstEmpleados tbody').on('click', '.btnEliminarEmpleado', function(){

            var data = table31.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];
            var id_empleado = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar al empleado: ' + empleado,
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, deseo hacerlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 4, 
                            'empleado': empleado,
                            'id_empleado':id_empleado,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log(respuesta)

                            if(respuesta === "OK"){

                                table31.ajax.reload();
                                tabla11.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: "Eliminado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                        }
                    })
                }
                
            })
        
        });

        $("#lstEditarAsitencia tbody").on('click','.btnRegistrarAsistencia', function(){

            var data = table41.row($(this).parents('tr')).data();

            console.log(data);

            var id_registro_asistencia = data[0];
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {

                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatosEdicion(id_registro_asistencia);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                registrarAsistenciaEdicion(id_registro_asistencia);
            }

        });

        $("#lstEditarAsitencia tbody").on('click', '.btnRegistrarTardanza', function() {
            // Obtener los datos de la fila actual
            var data = table41.row($(this).parents('tr')).data();

            console.log(data);

            var id_registro_asistencia = data[0];

            id_registro_asistencia_edicion = id_registro_asistencia;
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            $icono_edicion = $icon;

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {
             
                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatosEdicion(id_registro_asistencia);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                $("#mdlTiempoTardanzaEdicion").modal("show");

                $("#modalEditarAsistencia").modal("hide");

                // registrarTardanza(id_empleado);
            }
            
        });

        $("#lstEditarAsitencia tbody").on('click','.btnRegistrarFalta', function(){

            // Obtener los datos de la fila actual
            var data = table41.row($(this).parents('tr')).data();

            console.log(data);

            var id_registro_asistencia = data[0];
            
            // Encontrar el icono en la fila actual
            var $icon = $(this).find('i');

            var $row = $(this).closest('tr');

            // Alternar la clase del icono
            if ($icon.hasClass('fas fa-clock')) {
             
                $icon.removeClass('fas fa-clock').addClass('far fa-clock');

                BorrarDatosEdicion(id_registro_asistencia);

            } else {

                console.log(data);

                $row.find('i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                $icon.removeClass('far fa-clock').addClass('fas fa-clock');

                registrarInasistenciaEdicion(id_registro_asistencia);
            }

        });

    }

    function cargarBotonesModal(){

        $("#btnCancelarTardanza").on('click', function() {

            $("#iptCantidadMinutos").val("");

            $icono.removeClass('fas fa-clock').addClass('far fa-clock');

        });


        $("#btnGuardarTardanza").on('click', function() {

            var tardanza = $("#iptCantidadMinutos").val();

            console.log("tardanza : ", tardanza)

            tardanza = parseFloat(tardanza);

            if(tardanza > 0){
                registrarTardanza(id_empleado_edicion,tardanza);
            }else{
                Toast.fire({
                    icon: 'error',
                    title: "Ingrese un monto valido",
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            

        });

        $("#btnGuardarTardanzaEdicion").on('click', function() {

            var tardanza = $("#iptCantidadMinutosEdicion").val();

            console.log("tardanza : ", tardanza)

            tardanza = parseFloat(tardanza);

            if(tardanza > 0){
                registrarTardanzaEdicion(id_registro_asistencia_edicion,tardanza);
            }else{
                Toast.fire({
                    icon: 'error',
                    title: "Ingrese un monto valido",
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            

        });

        $("#btnCancelarTardanzaEdicion").on('click', function() {

            $("#iptCantidadMinutosEdicion").val("");

            $icono_edicion.removeClass('fas fa-clock').addClass('far fa-clock');

            $("#mdlTiempoTardanzaEdicion").modal("hide");

            $("#modalEditarAsistencia").modal("show");

        });

    }

    function cargarBotonesNormal(){

        $("#btnFiltrar").on('click', function() {

            var fecha_asistencia = $("#fecha_asistencia").val();

            var fecha = cambiarFormatoFecha(fecha_asistencia);

            console.log(fecha)

            rellenarTabla(fecha);

        });

        $("#btnAgregarEmpleado").on('click', function() {
            
            $("#mdlCrearCliente").modal('show');
        });

        $("#btnGuardarCliente").on('click', function() {

            var forms = document.getElementsByClassName('needs-validation-registro-empleados');
            var validation = Array.prototype.filter.call(forms, function(form){

                var firstInput = form.elements[0];

                if(firstInput.checkValidity() === true){

                    var nombre = $("#iptNombre").val();
                    var dni = $("#iptDni").val();
                    
                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 3, 
                            'nombre': nombre,
                            'dni': dni,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log("respuesta: "+ respuesta)

                            if(respuesta === "OK"){

                                table31.ajax.reload()
                                $("#mdlCrearCliente").modal('hide');
                                cargarOpciones();
                                cargarOpcionesModal();
                                Toast.fire({
                                    icon: 'success',
                                    title: "Agregado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                
                            } else if(respuesta === "ERROR 404"){
                                
                                Swal.fire({
                                    icon: 'error',
                                    title: "Ya existe un empleado con ese nombre",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                            
                        }
                    })
                }
                form.classList.add("was-validated");
            })

        })


    }

    function registrarAsistencia(id_empleado){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 22, 
                'id_empleado': id_empleado,
                'fecha_actual': fecha_actual,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);
                
            }
        });

    }

    function registrarTardanza(id_empleado,tardanza){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 23, 
                'id_empleado': id_empleado,
                'tardanza':tardanza,
                'fecha_actual': fecha_actual,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);

                if(respuesta === "OK"){
                    $("#iptCantidadMinutos").val("");

                    $("#mdlTiempoTardanza").modal("hide");

                    Toast.fire({
                        icon: 'success',
                        title: "Agregado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else{
                    
                    Toast.fire({
                        icon: 'error',
                        title: "Error en la actualizacion 359",
                        showConfirmButton: false,
                        timer: 1500
                    })

                }
                
            }
        });

    }

    function registrarInasistencia(id_empleado){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 24, 
                'id_empleado': id_empleado,
                'fecha_actual': fecha_actual,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);
                
            }
        });

    }

    function BorrarDatos(id_empleado){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 25, 
                'id_empleado': id_empleado,
                'fecha_actual': fecha_actual,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);
                
            }
        });

    }

    function cambiarFormatoFecha(fecha) {
        let partes = fecha.split('/');
        return `${partes[2]}-${partes[1].padStart(2, '0')}-${partes[0].padStart(2, '0')}`;
    }

    function rellenarTabla(fecha){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 26, 
                'fecha': fecha,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);

                table21.clear().draw();

                for(i = 0; i < respuesta.length; i++){

                    var far1 = "far";
                    var far2 = "far";
                    var far3 = "far";

                    if(respuesta[i]['asistencia'] > 0){
                        far1 = "fas";
                    }
                    if(respuesta[i]['tardanza'] > 0){
                        far2 = "fas";
                    }
                    if(respuesta[i]['inasistencia'] > 0){
                        far3 = "fas";
                    }

                    table21.row.add([
                        "<center>" +
                                        
                            "<span class='btnEditarAsistencia text-info px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='fas fa-edit fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>",
                        respuesta[i]['id_registro_asistencia'],
                        respuesta[i]['id_empleado'],
                        respuesta[i]['nombre'],
                        "<center>" +
                                        
                            "<span class='btnDesconocido text-success px-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far1 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>",
                        "<center>" +
                                        
                            "<span class='btnDesconocido text-warning px-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far2 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>",
                        "<center>" +
                                        
                            "<span class='btnDesconocido text-danger px-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far3 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>"
                    ]).draw();

                }

            }
        });

    }

    function rellenarTablaModal(id_registro_asistencia){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 27, 
                'id_registro_asistencia': id_registro_asistencia,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);

                table41.clear().draw();

                for(i = 0; i < respuesta.length; i++){

                    var far1 = "far";
                    var far2 = "far";
                    var far3 = "far";

                    if(respuesta[i]['asistencia'] > 0){
                        far1 = "fas";
                    }
                    if(respuesta[i]['tardanza'] > 0){
                        far2 = "fas";
                    }
                    if(respuesta[i]['inasistencia'] > 0){
                        far3 = "fas";
                    }

                    table41.row.add([

                        respuesta[i]['id_registro_asistencia'],
                        respuesta[i]['id_empleado'],
                        respuesta[i]['nombre'],
                        "<center>" +
                                        
                            "<span class='btnRegistrarAsistencia text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far1 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>",
                        "<center>" +
                                        
                            "<span class='btnRegistrarTardanza text-warning px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far2 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>",
                        "<center>" +
                                        
                            "<span class='btnRegistrarFalta text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='" + far3 + " fa-clock fs-1'> </i> " +
                            "</span>" +
                    
                        "</center>"
                    ]).draw();

                }

            }
        });

    }

    function registrarAsistenciaEdicion(id_registro_asistencia){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 28, 
                'id_registro_asistencia': id_registro_asistencia,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);

                if (!isActionInProgress) {

                    isActionInProgress = true;

                    $('#btnFiltrar').click();

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); 

                }
                
            }
        });

    }

    function registrarTardanzaEdicion(id_registro_asistencia,tardanza){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 29, 
                'id_registro_asistencia': id_registro_asistencia,
                'tardanza':tardanza,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);

                if(respuesta === "OK"){
                    $("#iptCantidadMinutos").val("");

                    $("#mdlTiempoTardanza").modal("hide");

                    Toast.fire({
                        icon: 'success',
                        title: "Agregado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#mdlTiempoTardanzaEdicion").modal("hide");

                    $("#modalEditarAsistencia").modal("show");

                    
                    if (!isActionInProgress) {

                        isActionInProgress = true;

                        $('#btnFiltrar').click();

                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); 

                    }

                }else{
                    
                    Toast.fire({
                        icon: 'error',
                        title: "Error en la actualizacion 369",
                        showConfirmButton: false,
                        timer: 1500
                    });

                }
                
            }
        });

    }

    function registrarInasistenciaEdicion(id_registro_asistencia){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 30, 
                'id_registro_asistencia': id_registro_asistencia,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);
                
                if (!isActionInProgress) {

                    isActionInProgress = true;

                    $('#btnFiltrar').click();

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); 

                }
            }
        });

    }

    function BorrarDatosEdicion(id_registro_asistencia){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 31, 
                'id_registro_asistencia': id_registro_asistencia,
            },
            dataType:'json',
            success: function(respuesta) {

                console.log(respuesta);
                
                if (!isActionInProgress) {

                    isActionInProgress = true;

                    $('#btnFiltrar').click();

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); 

                }
            }
        });

    }

</script>