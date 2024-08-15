<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Pedidos</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Empleados</li>

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->


<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-empleados" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-empleado-tab" data-toggle="pill" href="#content-empleado" role="tab" aria-controls="content-empleado" aria-selected="false">
                    <i class=""></i> Gestion de Empleados
                </a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-empleados">

            <div class="tab-pane fade active show mt-4 px-4" id="content-empleado" role="tabpanel" aria-labelledby="content-empleado-tab">

                <div class="container-fluid">

                    <h4>Estado de Pedidos</h4>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-6 mb-3 rounded-3 text-right">
                                            
                                            <div class="d-none d-md-flex col-md-12 ">
                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarEmpleado" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptBuscarEmpleado">Cliente</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        

                                        <div class="col-md-6 mb-3 rounded-3 text-right">
                                            

                                            <button class="btn btn-warning" id="btnActualizarEmpleados">
                                                <i class="fas fa-bolt"> Refrescar</i>
                                            </button>

                                            <button class="btn btn-success" id="btnAgregarEmpleado">
                                                <i class="fas fa-user-plus"> Añadir Nuevo Empleado</i>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstEmpleados" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-info text-left fs-6">
                                                    <tr>
                                                        <th >Editar</th>
                                                        <th >Id</th>
                                                        <th >Nombre</th>
                                                        <th >Dni</th>
                                                        <th >Borrar</th>    

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

<div class="modal fade" id="mdlEditarEmpleado" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-md" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Cambiar Datos del Cliente</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptNombre">Nombre</label>

                                        <input type="text" min="0" name="iptNombre" id="iptNombre"
                                            class="form-control form-control-sm" placeholder="No hay Nombre registrado">

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptIdentificacion">Identificacion</label>

                                        <input type="text" min="0" name="iptIdentificacion" id="iptIdentificacion"
                                            class="form-control form-control-sm" placeholder="No hay Identificacion registrado">

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <button class="btn btn-success btn-sm btn-block" id="btnCambiarDatos">
                                            <i class="fas fa-edit"></i>Cambiar datos del cliente</i>
                                        </button>

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

<div class="modal fade" id="mdlAgregarEmpleado" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-md" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Cambiar Datos del Cliente</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptNombre2">Nombre</label>

                                        <input type="text" min="0" name="iptNombre2" id="iptNombre2"
                                            class="form-control form-control-sm" placeholder="No hay Nombre registrado">

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptIdentificacion2">Identificacion</label>

                                        <input type="text" min="0" name="iptIdentificacion2" id="iptIdentificacion2"
                                            class="form-control form-control-sm" placeholder="No hay Identificacion registrado">

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <button class="btn btn-success btn-sm btn-block" id="btnAgregarDatos">
                                            <i class="fas fa-edit"></i>Agregar nuevo Empleado</i>
                                        </button>

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


<script>

var Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 3000
            }); 

////// VARIABLES GLOBALES //////

var tabla11;

var id_empleado;

var nombre, nombre_anterior;

var dni;

$(document).ready(function(){

    // VerificarEstados();

    Cargar_tables();

    Cargar_Botones_Normal();

    Cargar_Botones_Tablas();

});

</script>

<script>

    function Cargar_tables(){

        tabla11 = $('#lstEmpleados').DataTable({
            columnDefs: [

                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarCliente text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-envelope fs-3'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: [3], // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        
                        if(data === ""){

                            return "Sin Identificacion" ;

                        }else{

                            return data ;

                        }

                    }
                },
                {
                    targets: [2], // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        return "<strong>" + data + "</strong>" ;
                    }
                },

                {
                    targets: 4,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarEmpleado text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-3'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                
            ],
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 18 //1:LISTAR PEDIDOS
                },
            },
            lengthMenu: [10, 25, 50, 100],
            'pageLength': 25,
            "scrollX": true,
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

    }

    function Cargar_Botones_Normal(){

        $("#btnActualizarEmpleados").click(function(){

            tabla11.ajax.reload();

        });

        $("#btnAgregarEmpleado").click(function(){

            $("#mdlAgregarEmpleado").modal("show");

        });

        $("#btnCambiarDatos").click(function(){

            nombre_anterior = nombre;

            nombre = $("#iptNombre").val();

            dni = $("#iptIdentificacion").val();

            if(nombre === ""){

                Swal.fire({
                    icon: 'warning',
                    title: 'El Empleado debe tener nombre',
                    confirmButtonText: 'Aceptar',
                })
                
            }else{

                Swal.fire({
                    icon: 'warning',
                    title: 'Seguro de Cambiar los datos de : '+ nombre_anterior,
                    showCancelButton: true,
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {

                        console.log('ACEPTADO');
                        CambiarDatos(id_empleado, nombre, dni);

                    }

                });

            }

        });

        $("#btnAgregarDatos").click(function(){

            var nombre_nuevo = $("#iptNombre2").val();

            var dni_nuevo = $("#iptIdentificacion2").val();

            if(nombre === ""){

                Swal.fire({
                    icon: 'warning',
                    title: 'El Empleado debe tener nombre',
                    confirmButtonText: 'Aceptar',
                })
                
            }else{

                Swal.fire({
                    icon: 'warning',
                    title: 'Seguro de Agregar al empleado ' + nombre_nuevo,
                    showCancelButton: true,
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {

                        console.log('ACEPTADO');
                        AgregarDatos(nombre_nuevo, dni_nuevo);

                    }

                });

            }

        });

    }

    function Cargar_Botones_Tablas(){

        $('#lstEmpleados tbody').on('click', '.btnEditarCliente', function() {

            var data = tabla11.row($(this).closest('tr')).data();
            
            if ($(this).closest('tr').hasClass('selected')) {

                $(this).closest('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $(this).find('i').removeClass('fas fa-envelope-open').addClass('fas fa-envelope');

            } else {

                $('#lstEmpleados tbody .btnEditarCliente i').removeClass('fas fa-envelope-open').addClass('fas fa-envelope');

                tabla11.$('tr.selected').removeClass('selected');

                $(this).closest('tr').addClass('selected');
                // Cambiar el ícono a fas fa-circle
                $(this).find('i').removeClass('fas fa-envelope').addClass('fas fa-envelope-open');

                id_empleado = data["id_empleado"];

                nombre = data["nombre"];

                dni = data["dni"];

                AñadirDatosModal(id_empleado, nombre, dni);

                $("#mdlEditarEmpleado").modal("show");
            }
        });

        $('#lstEmpleados tbody').on('click', '.btnEliminarEmpleado', function() {

            var data = tabla11.row($(this).closest('tr')).data();
            
            if ($(this).closest('tr').hasClass('selected')) {

                $(this).closest('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $(this).find('i').removeClass('fas fa-envelope-open').addClass('fas fa-envelope');

            } else {

                tabla11.$('tr.selected').removeClass('selected');

                $(this).closest('tr').addClass('selected');
                // Cambiar el ícono a fas fa-circle
                $(this).find('i').removeClass('fas fa-envelope').addClass('fas fa-envelope-open');

                id_empleado = data["id_empleado"];

                nombre = data["nombre"];

                dni = data["dni"];

                EliminarEmpleados(id_empleado, nombre, dni);

            }
        });

    }

    function AñadirDatosModal(id_empleado, nombre, dni){

        $("#iptNombre").val(nombre)

        $("#iptIdentificacion").val(dni)

    }

    function CambiarDatos(id_empleado, nombre, dni){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            method: "POST",
            data: {
                'accion': 5,
                'id_empleado': id_empleado,
                'nombre': nombre,
                'dni': dni,
            },
            dataType: 'json',
            success: function(respuesta) {

                if(respuesta == "OK"){

                    $("#mdlEditarEmpleado").modal("hide");

                    tabla11.ajax.reload();

                    Toast.fire({
                        icon: 'success',
                        title: "Datos del empleados Sobreescritos Correctamente!!!",
                        showConfirmButton: false,
                        timer: 1500
                    });

                }
                
            }
        });

    }

    function EliminarEmpleados(id_empleado, nombre, dni){

        Swal.fire({
            icon: 'warning',
            title: 'Seguro de eliminar '+ nombre + ' del Registro?',
            showDenyButton: true,
            denyButtonText: 'Continuar',
            showCancelButton: true,
            confirmButtonText: 'Editar',
            cancelButtonText: 'Cancelar',
            
        }).then((result) => {
            if (result.isConfirmed) {

                console.log('ESTA EDITANDO');

                AñadirDatosModal(id_empleado, nombre, dni);

                $("#mdlEditarEmpleado").modal("show");
                
            } else if (result.isDenied) {
                
                console.log('ACEPTADO');

                EliminandoEmpleados(id_empleado, nombre, dni);

            } else {
                // Cancelar
            }
        });

    }

    function EliminandoEmpleados(id_empleado, nombre, dni){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            method: "POST",
            data: {
                'accion': 19,
                'id_empleado': id_empleado,
                'nombre': nombre,
                'dni': dni,
            },
            dataType: 'json',
            success: function(respuesta) {

                if(respuesta == "OK"){

                    tabla11.ajax.reload();

                    Toast.fire({
                        icon: 'success',
                        title: "Empleado Eliminado Correctamente!!!",
                        showConfirmButton: false,
                        timer: 1500
                    });

                } else {

                    tabla11.ajax.reload();

                    Toast.fire({
                        icon: 'error',
                        title: respuesta,
                        showConfirmButton: false,
                        timer: 1500
                    });

                }
                
            }
        });

    }

    function AgregarDatos(nombre_nuevo, dni_nuevo){

        $.ajax({
            url: "ajax/empleados.ajax.php",
            method: "POST",
            data: {
                'accion': 3,
                'nombre': nombre_nuevo,
                'dni': dni_nuevo,
            },
            dataType: 'json',
            success: function(respuesta) {

                if(respuesta == "OK"){

                    tabla11.ajax.reload();

                    Toast.fire({
                        icon: 'success',
                        title: "Empleado Registrado Correctamente!!!",
                        showConfirmButton: false,
                        timer: 1500
                    });

                } else {

                    tabla11.ajax.reload();

                    Toast.fire({
                        icon: 'error',
                        title: "No se puedo agregar ",
                        showConfirmButton: false,
                        timer: 1500
                    });

                }
                
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

</script>