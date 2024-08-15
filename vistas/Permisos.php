
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Permisos de Empleados</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Permisos</li>

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
                <a class="nav-link active" id="content-registrar-permisos-tab" data-toggle="pill" href="#content-registrar-permisos" role="tab" aria-controls="content-registrar-permisos" aria-selected="false">Registrar Almuerzo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-permisos-tab" data-toggle="pill" href="#content-permisos" role="tab" aria-controls="content-permisos" aria-selected="false">Registro de Almuerxos</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-registrar-permisos" role="tabpanel" aria-labelledby="content-registrar-permisos-tab">

                <div class="row mb-3">
                    <div class="col-md-3 mb-3">

                    </div>

                    <div class="col-md-6 mb-6 text-center">
                        
                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registrar Permisos</h2>

                        </div>
                    
                    </div>

                    <div class="col-md-3 mb-3">
                        
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-2 mb-3">

                    </div>

                    <div class="col-md-8 mb-6">
                        <div class="card card-gray" style="border: 1px solid black;">

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-6 mx-auto text-center">
                                        <div class="reloj" id="reloj_2">
                                            <div class="fecha" id="fecha_2"></div>
                                            <div class="hora" id="hora_2"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-6">

                                        <div class="col-lg-12 mb-3">
                                            <label class="" for="selEmpleadosPermiso"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Empleado</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selEmpleadosPermiso">
                                                <option value="0" selected="true">Seleccione Empleado</option>
                                                <option value="1">Cliente</option>
                                                <option value="2">Proveedor</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div> 
                                        
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptComentario"><i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Detalles</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptComentario"
                                                    name="iptComentario" placeholder="Detalles del permiso" required>
                                                <div class="invalid-feedback">Detalles del permiso</div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <label class="" for="selHoras"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Tiempo</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selHoras">
                                                <option value="0" selected="true">Seleccione Tiempo</option>
                                                <option value="2">30 MINUTOS</option>
                                                <option value="3">45 MINUTOS</option>
                                                <option value="4">1:00 HORA</option>
                                                <option value="6">1:30 HORAS</option>
                                                <option value="8">2:00 HORAS</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div> 
                                        
                                        <!-- <div class="col-lg-12 mb-3">
                                            <label class="" for="selReaccion"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Registro si la persona Volvio o Salio</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selReaccion">
                                                <option value="1" selected="true">Salio</option>
                                                <option value="2">Regreso</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div>   -->

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnRegistrarPermiso">Registrar Permiso</button>
                                        </div>

                                    </div> 

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        
                    </div>
                </div>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-permisos" role="tabpanel" aria-labelledby="content-permisos-tab">

                <div class="row mb-3">

                    <div class="col-md-12 mb-6 text-center">

                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registros de Permisos</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptEmpleadoPermiso" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptEmpleadoPermiso">Empleado</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptEmpleadoPermiso" class="form-control" data-index="3">
                                                        <label for="iptEmpleadoPermiso">Empleado</label>
                                                    </div>


                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstPermiso" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th class="text-center">Id_Permiso</th>
                                                    <th class="text-center">Id_Empleado</th>
                                                    <th class="text-center">Empleado</th>
                                                    <th class="text-center">Hora Inicio</th>
                                                    <th class="text-center">Hora Final</th>
                                                    <th class="text-center">Retrazo</th>
                                                    <th class="text-center">Duracion</th>
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

<div class="modal fade" id="mdlDarTardanza" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Permiso de : <label id = "iptNombreEmpleado"> Empleado x </label> </h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <form method="post" class="needs-validation-actualizar-empleados" novalidate id="frm_actualizar_empleados">

                            
                        <div class="col-md-12 mb-3">
                            <div class="col-lg-12">
                                <div class="form-group mb-2">
                                    <label class="" for="iptMinutosTardanza"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Minutos de tardanza</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="number" class="form-control form-control-sm" id="iptMinutosTardanza" name="iptMinutosTardanza" required>
                                    <div class="invalid-feedback">Por favor ingrese una fecha válida</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 mb-3">

                            <div class="row">

                                <div class="col-lg-4">

                                    <button type="button" class="btn btn-danger btn-sm btn-block"  id="btn_mas_15">+15</button>

                                </div> 

                                <div class="col-lg-4">

                                    <button type="button" class="btn btn-secondary btn-sm btn-block"  id="btn_mas_5">+5</button>

                                </div> 

                                <div class="col-lg-4">

                                    <button type="button" class="btn btn-success btn-sm btn-block"  id="btn_menos_1">-1</button>

                                </div> 
                                
                            </div>  

                        </div>

                    </form>
                        
                </div> 

            </div>

            <div class="modal-footer">

                <div class="col-md-12">

                    <div class="col-12 col-lg-12">

                        <button type="button" class="btn btn-info btn-sm btn-block"  id="btnDarTardanza">Cambiar Datos</button>

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

    </script>

    <script>

    var table11;
    var table21;

    var id_empleado_edicion;
    var id_asistencia_edicion;

    var id_empleado_fijo = 0;
    var id_permiso_fijo = 0;

    $(document).ready(function(){

        $("#iptMinutosTardanza").val(0);

        actualizarReloj();
        cargarOpciones();
        cargarTable();
        CargarBotones();

        
        setInterval(()=> {
            
            actualizarReloj();
        
        }, 1000); // 10000 milisegundos = 10 segundos

    })

</script>

<script>

    function actualizarReloj() {

        if($('#content-registrar-permisos:visible').length > 0 || $('#content-permisos:visible').length > 0 ){
        const ahora = new Date();
        const dia = ahora.getDate();
        const mes = ahora.getMonth() + 1;
        const año = ahora.getFullYear();
        const horas = ahora.getHours().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const minutos = ahora.getMinutes().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const segundos = ahora.getSeconds().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        
        const fechaElemento = document.getElementById('fecha_2');
        fechaElemento.textContent = `${dia}/${mes}/${año}`;

        const horaElemento = document.getElementById('hora_2');
        horaElemento.textContent = `${horas}:${minutos}:${segundos}`;

        }
    }

    function cargarOpciones(){
        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 2, 
            },
            dataType: 'json',
            success: function(respuesta) {
                var selectEmpleados = document.getElementById("selEmpleadosPermiso");

                console.log("esto es de cargarOpciones : ", respuesta);

                // Vaciar opciones existentes (si las hay)
                selectEmpleados.innerHTML = '<option value="">Seleccione Empleado</option>';

                for (var i = 0; i < respuesta.length; i++) {
                    var value = respuesta[i]["id_empleado"];
                    var text = respuesta[i]["nombre"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option1 = document.createElement('option');
                    option1.value = value;
                    option1.text = text;

                    selectEmpleados.appendChild(option1);
                }
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });

    }

    function cargarTable(){

        tabla11= $("#lstPermiso").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                            
                                "<span class='btnEliminarPermiso text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +

                                "<span class='btnDarRetrazo text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-clock fs-5'></i>" +
                                "</span>" +

                                "</center>"

                    }
                },
                {
                    targets: 4, // Suponiendo que la columna de timestamp es la número 4 (0-indexed)
                    render: function(data, type, full, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear la fecha-tiempo y extraer solo la hora y los minutos
                            var dateTime = new Date(data);
                            var formattedTime = dateTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });
                            // Aplicar estilos CSS al texto
                            return "<span style='color: green; font-weight: bold;'>" + formattedTime + "</span>";
                        } else {
                            // Retornar la fecha-tiempo completa para otros tipos (sorting, etc.)
                            return data;
                        }
                    },
                },
                {
                    targets: 5, // Suponiendo que la columna de timestamp es la número 4 (0-indexed)
                    render: function(data, type, full, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear la fecha-tiempo y extraer solo la hora y los minutos
                            var dateTime = new Date(data);
                            var formattedTime = dateTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });
                            // Aplicar estilos CSS al texto
                            return "<span style='color: red; font-weight: bold;'>" + formattedTime + "</span>";
                        } else {
                            // Retornar la fecha-tiempo completa para otros tipos (sorting, etc.)
                            return data;
                        }
                    },
                },
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: 2,
                    visible:false,
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 14 //2: LISTAR CLIENTES
                },
            },
            scrollX:true,
            "order": [
                [1, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstPermiso'));
            }
        });

    }

    function CargarBotones(){

        /*===================================================================
        =====================================================================
        AQUI SE REGISTRA TODO LO QUE TENGA QUE VER CON LA VENTANA ASISTENCIAS
        =====================================================================
        ===================================================================*/
        
        $("#btnRegistrarPermiso").on('click', function() {
            var id_empleado = $("#selEmpleadosPermiso").val();
            var justificacion = $("#iptComentario").val();
            var tiempo = $("#selHoras").val();

            var minutos = tiempo * 15;

            console.log(id_empleado)

            $.ajax({
                url: "ajax/empleados.ajax.php",
                type: 'POST',
                data: {
                    'accion': 15, 
                    'id_empleado': id_empleado,
                    'justificacion':justificacion,
                    'minutos':minutos,
                },
                dataType:'json',
                success: function(respuesta) {

                    console.log("respuesta: "+ respuesta)

                    if(respuesta === "OK"){

                        tabla11.ajax.reload()
                        
                        var justificacion = $("#iptComentario").val("");
                        Toast.fire({
                            icon: 'success',
                            title: "Asistencia Registrada Correctamente",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        
                    }
                    
                }
            })


        })

        $('#lstPermiso tbody').on('click', '.btnEliminarPermiso', function(){

            var data = tabla11.row($(this).parents('tr')).data();

            console.log(data);

            var id_empleado = data[2];
            var id_permiso = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar el Permiso (sus minutos de tardanzas tambien desapareceran)',
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
                            'accion': 16, 
                            'id_empleado': id_empleado,
                            'id_permiso':id_permiso,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log(respuesta)

                            if(respuesta === "OK"){

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

        $('#lstPermiso tbody').on('click', '.btnDarRetrazo', function(){

            var data = tabla11.row($(this).parents('tr')).data();

            console.log(data);

            id_empleado_fijo = data[2];
            id_permiso_fijo = data[1];

            $("#mdlDarTardanza").modal("show")

        });

        $("#btnDarTardanza").on('click', function() {

            

            var minutos_actual = $("#iptMinutosTardanza").val();

            var minutos = parseInt(minutos_actual);

            $.ajax({
                url: "ajax/empleados.ajax.php",
                type: 'POST',
                data: {
                    'accion': 17, 
                    'id_empleado': id_empleado_fijo,
                    'id_permiso':id_permiso_fijo,
                    'minutos':minutos,
                },
                dataType:'json',
                success: function(respuesta) {

                    console.log(respuesta)

                    if(respuesta === "OK"){

                        tabla11.ajax.reload();
                        $("#iptMinutosTardanza").val(0);

                        $("#mdlDarTardanza").modal("hide")

                        Toast.fire({
                            icon: 'success',
                            title: "Minutos Agregados Correctamente",
                            showConfirmButton: false,
                            timer: 1500
                        });

                    }
                }
            })

        });

        $("#btn_mas_15").on("mousedown", function() {

            var Cambio = 15;
            cambioCantidad(Cambio);
            // Establecer el intervalo de tiempo para ejecutar la función cambioCantidad cada 1 segundo
            intervalId = setInterval(function() {
                Cambio = 15;
                cambioCantidad(Cambio);
            }, 150); // 1000 milisegundos = 1 segundo
        }).on("mouseup mouseleave", function() {
            // Limpiar el intervalo cuando se libere el botón del ratón
            clearInterval(intervalId);
        });

        $("#btn_mas_5").on("mousedown", function() {

            var Cambio = 5;
            cambioCantidad(Cambio);
            // Establecer el intervalo de tiempo para ejecutar la función cambioCantidad cada 1 segundo
            intervalId = setInterval(function() {
                Cambio = 5;
                cambioCantidad(Cambio);
            }, 150); // 1000 milisegundos = 1 segundo
        }).on("mouseup mouseleave", function() {
            // Limpiar el intervalo cuando se libere el botón del ratón
            clearInterval(intervalId);
        });

        $("#btn_menos_1").on("mousedown", function() {

            var Cambio = -1;
            cambioCantidad(Cambio);
            // Establecer el intervalo de tiempo para ejecutar la función cambioCantidad cada 1 segundo
            intervalId = setInterval(function() {
                Cambio = -1;
                cambioCantidad(Cambio);
            }, 150); // 1000 milisegundos = 1 segundo
        }).on("mouseup mouseleave", function() {
            // Limpiar el intervalo cuando se libere el botón del ratón
            clearInterval(intervalId);
        });
        
    }

    function cambioCantidad(Cambio){

        var minutos_actual = $("#iptMinutosTardanza").val();

        var minutos_1 = parseInt(minutos_actual);

        var minutos_total = parseInt(minutos_1) + parseInt(Cambio)

        $("#iptMinutosTardanza").val(minutos_total);

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