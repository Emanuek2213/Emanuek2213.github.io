 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Administrar Clientes</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Administrar Clientes</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">

        <div class="row mb-3">

            <div class="col-md-12">
                <div class="card card-gray" style="border: 1px solid black;">
                    <div class="card-header">
                        <h3 class="card-title">CAMBIAR DATOS DE LOS CLIENTES</h3>
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
                        <div class = "row">
                            
                            <div class = "col-lg-9"> 

                                
                            </div>

                            <div class = "col-lg-4">

                                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                    <div class="card-body p-3">

                                        <form method="post" class="needs-validation-registro-clientes" novalidate id="frm_registro_clientes">


                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptNombreCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Nombre</span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptNombreCliente"
                                                                name="iptNombreCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback">Ingrese un Nombre</div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL APELLIDO DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptApellidoCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Apellido</span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptApellidoCliente"
                                                                name="iptApellidoCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback">Ingrese el Apellido</div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL DNI O RUC DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptIdentCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">DNI  o RUC </span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptIdentCliente"
                                                                name="iptIdentCliente" placeholder="Ingrese la Categoría" required readonly>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback">Ingrese un DNI</div>

                                                        </div>

                                                    </div>

                                            </div>


                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA LA DIRECCION DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptDireccionCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Direccion </span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptDireccionCliente"
                                                                name="iptDireccionCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback">Ingrese una Direccion </div>

                                                        </div>

                                                    </div>

                                            </div>

                                            

                                            <div class="col-md-12">
                                                <div class="form-group m-0 mt-2">
                                                    <a style="cursor:pointer;"
                                                        class="btn btn-success btn-sm w-100"
                                                        id="btnRegistrarCliente">Ingresar Nuevo Cliente
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 

                                </div>

                            </div>

                            <!--LISTADO DE Clientes -->
                            <div class="col-md-8">
                                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                    <div class="card-body p-3">
                                        <div class="card card-gray shadow" >

                                            <div class="card-header">

                                                <h3 class="card-title"><i class="fas fa-list"></i> Listado de Módulos</h3>

                                            </div>

                                            <div class="card-body">

                                                <table id="tblClientes" class="display nowrap table-striped shadow rounded" style="width:100%">

                                                    <thead class="bg-gray text-left">
                                                        <th class="text-center">Acciones</th>
                                                        <th class="text-center">id</th>
                                                        <th class="text-center">DNI o RUC</th>
                                                        <th class="text-center">Nombre</th>
                                                        <th class="text-center">Telefono</th>
                                                        <th class="text-center">Direccion</th>
                                                        
                                                    </thead>
                                                    <tbody class="small text left">

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- EN ESTA PARTE BUSCA A LOS CLIENTES -->
                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                    <div class="card-body p-3">
                        <div class="row">

                            <!-- INPUT PARA INGRESO DE DATOS DEL CLIENTE -->
                            <div class="col-md-12 mb-6">

                                <div class="form-group mb-2">

                                    <label class="col-form-label" for="iptCliente">
                                        <i class="fas fa-user fs-6"></i>
                                        <span class="small">Cliente</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" id="iptCliente"
                                        placeholder="Ingrese el código de barras o el nombre del producto">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-3">
                                    <button id="btnAgregarHistorial" class="small-box bg-green" >
                                        <span style="font-style: italic; font-weight: bold;  padding: 10px; ">Agregar Nuevo Producto</span>
                                    </button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div> 
                <!-- LINEA DE SEPARACION DE LA BUSQUEDA CON LA TABLA DE PRODUCTOS -->
                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                </div>  
                <!-- EN ESTA PARTE ESTA LA TABLA DE LOS PRODUCTOS POR CLIENTE ( SI NO HAY CLIENTE SELECCIONADO NO MUESTRA NADA) -->
                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                    <div class="card-body p-3">
                        <div class= "row" >
                            <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                            <div class="col-md-12">

                                <table id="lstProductosxCliente" class="display nowrap table-striped w-100 shadow ">
                                    <thead class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Item</th>
                                            <th>Cod.cliente</th>
                                            <th>Cliente</th>
                                            <th>Codigo</th>
                                            <th>Id Categoria</th>
                                            <th>Categoria</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th class="text-center">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small text-left fs-6">
                                    </tbody>
                                </table>
                                <!-- / table -->
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

        </div>

     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

<div class="modal fade" id="mdlCatalogoClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Agregar Nuevo Producto</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 mb-1">
                        <label for="" class="form-label text-primary d-block">Cliente: <span id="txtNombre_cliente"
                                class="text-secondary"></span></label>
                    </div>

                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockSumar">
                                <i class="fas fa-plus-circle fs-6"></i> <span class="small"
                                    id="titulo_modal_label">Buscar Productos</span>
                            </label>
                                <input type="text" class="form-control form-control-sm" id="iptCodigoVentaModel"
                                    placeholder="Ingrese el código de barras o el nombre del producto">
                        </div>
                    </div>

                    <!-- <div class="col-12">
                            <button id="btnAgregarProducto" class="small-box bg-indigo" >
                                <span style="font-style: italic; font-weight: bold;  padding: 10px;">Agregar Producto</span>
                            </button>
                    </div> -->
                    
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    var table;
    var tblClientes;
    var items = [];
    var person = [];
    var idCliente = 0;
    var itemsxperson = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var itemProducto = 1;
    var encendido = 20;

    $(document).ready(function(){
        CargarDataTable();
        $("#iptIdentCliente").prop("readonly", false);
        idUsuario = 0;

        //ajustarHeadersDataTables(table)

        $.ajax({
            async: false,
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: {
                'accion': 1
            },
            dataType: 'json',
            success: function(respuesta2) {
                console.log("LINEA DE CLIENTES 385 : ", respuesta2);
                for (let i = 0; i < respuesta2.length; i++) {
                    person.push(respuesta2[i]['descripcion_cliente'])
                }
                
                $("#iptCliente").autocomplete({

                    source: person,
                    select: function(event, ui) {

                        //CargarProductos(ui.item.value);                                    
                        
                        
                        $("#iptCliente").val(ui.item.value);

                        var info = ui.item.value;

                        var partes = info.split('-');

                        // Extraer la primera parte que contiene el DNI (suponiendo que el DNI siempre esté en la primera posición)
                        var dni = partes[0].trim();

                        MostrarProductos(dni);
                        //  $("#iptCliente").focus();

                        

                        return false;
                    }
                })


            }
        });

        $("#btnAgregarHistorial").on('click', function() {
            
            AgregarNuevoProducto();
        });

        $("#btnCerrarModalStock").on('click', function() {
            
            $("#iptCliente").val("");

            $("#iptCodigoVentaModel").val("");
        });
        
        $('#lstProductosxCliente tbody').on('click', '.btnEliminarProducto', function() {
            var data = table.row($(this).parents('tr')).data();

            console.log(data[1], data[3]);
            
            var dni = data[1];
            var id = data[3];
            
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

                    EliminarProducto(id,dni)

                }
            })

            
        });


        $('#tblClientes').on('click', '.btnSeleccionarPerfil', function(){
            var data = tblClientes.row($(this).parents('tr')).data();

        

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                idCliente = 0;
                
                $("#card-modulos").css("display", "none");
                console.log("id Cliente: " +idCliente);
                $("#iptIdentCliente").prop("readonly", false);
                $("#iptNombreCliente").val("");
                $("#iptApellidoCliente").val("");
                $("#iptIdentCliente").val("");
                $("#iptDireccionCliente").val("");
                
                var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

                // Cambiar el texto del botón
                btnRegistrarCliente.textContent = 'Ingresar Nuevo Cliente';
                

            }else{

                tblClientes.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');
                
                idCliente = data[1];
                IdentCliente = data[2];

                $("#card-modulos").css("display","block");

                console.log("id Cliente: " +idCliente);

                $.ajax({
                    async:false,
                    url:"ajax/clientes.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 3,
                        idCliente: IdentCliente
                    },
                    dataType: 'json',
                    success: function (respuesta){
                        console.log(respuesta[0][1] , " -- " , respuesta[0][2]);

                        $("#iptIdentCliente").prop("readonly", true);
                        $("#iptNombreCliente").val(respuesta[0][1]);
                        $("#iptApellidoCliente").val(respuesta[0][2]);
                        $("#iptIdentCliente").val(respuesta[0][0]);
                        $("#iptDireccionCliente").val(respuesta[0][3]);

                        var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

                        // Cambiar el texto del botón
                        btnRegistrarCliente.textContent = 'Cambiar Datos del Cliente';

                        //modulos_usuario = respuesta;

                        //seleccionarModulosPerfil(idUsuario);
                    }
                })


            }
        })

        $("#btnRegistrarCliente").on("click", function(){
            RegistrarCliente();
        })
    })


</script>

<script>
    function AgregarNuevoProducto(){
        // Obtener el valor del input #iptCliente
        var iptClienteValue = $("#iptCliente").val();

        if(iptClienteValue === ""){
            console.log("elige un cliente");

        }else{ 
            $("#mdlCatalogoClientes").modal('show');
            console.log(iptClienteValue);

            // Dividir la cadena en partes usando el carácter "-"
            var partes = iptClienteValue.split('-');

            // Extraer la primera parte que contiene el DNI (suponiendo que el DNI siempre esté en la primera posición)
            var dni = partes[0].trim();
            $("#txtNombre_cliente").html(partes[1]);

            // Vaciar el array antes de cada llamada para evitar la acumulación de valores
            itemsxperson = [];

            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                    'accion': 6,
                },
                dataType: 'json',
                success: function(respuesta) {
                    
                    for (let i = 0; i < respuesta.length; i++) {
                        itemsxperson.push(respuesta[i]['descripcion_producto'])
                    }
                    
                    $("#iptCodigoVentaModel").autocomplete({

                        source: itemsxperson,
                        appendTo: "#mdlCatalogoClientes", // Agregar al modal
                        select: function(event, ui) {

                            var Producto = ui.item.value;

                            console.log(Producto);

                            var Producto_partes = Producto.split('-');

                            var id = Producto_partes[0].trim();

                            //console.log("🚀 ~ file: ventas.php ~ line 313 ~ $ ~ #iptCodigoVentaModel", lstProductosVenta)
                            AgregarProductoAlCliente(id,dni);                                    
                            
                            
                            // $("#iptCodigoVenta").val("");

                            // $("#iptCodigoVenta").focus();

                            return false;
                        }
                    })


                }
            });
            console.log(dni);
        }
    }

    function MostrarProductos(dni){
        console.log(dni);

        var partes =  dni.split("/");

        console.log(partes[0]);

        table.column(1).search(partes[0].trim()).draw();
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

    function AgregarProductoAlCliente(id,dni){
        console.log(id, dni);

        $.ajax({
            async: false,
            url: "ajax/administrar_cliente.ajax.php",
            method: "POST",
            data: {
                'accion': 2,
                'dni':dni,
                'id':id
            },
            dataType: 'json',
            success: function(respuesta) {
                
                if(respuesta === "ya esta"){
                    Swal.fire({
                        icon: 'warning',
                        title: 'Producto ya registrado'
                    });
                    $("#iptCodigoVentaModel").val("");
                    table.ajax.reload(); 
                }else if(respuesta === "no esta"){
                    console.log("no esta y esta parte si funciona")
                    AgregarProducto(id,dni);
                }
            }
        });

    }

    function AgregarProducto(id,dni){

        console.log("esto tambien");
        $.ajax({
            async: false,
            url: "ajax/administrar_cliente.ajax.php",
            method: "POST",
            data: {
                'accion': 3,
                'dni':dni,
                'id':id
            },
            dataType: 'json',
            success: function(respuesta) {
                
                if(respuesta === "OK"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Nuevo producto agregado'
                    });    
                    $("#iptCodigoVentaModel").val("");
                    table.ajax.reload();
                }else if(respuesta === "ERROR"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un error intentelo mas tarde'
                    });  
                    $("#iptCodigoVentaModel").val("");
                    table.ajax.reload(); 
                }
            }
        });
    }

    function EliminarProducto(id,dni){
        $.ajax({
            async: false,
            url: "ajax/administrar_cliente.ajax.php",
            method: "POST",
            data: {
                'accion': 4,
                'dni':dni,
                'id':id
            },
            dataType: 'json',
            success: function(respuesta) {
                if (respuesta === "OK"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Producto eliminado'
                    }); 
                    table.ajax.reload(); 
                }else if(respuesta === "ERROR"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un error intentelo mas tarde'
                    }); 
                }
            }
        });
    }

    function CargarDataTable(){
        table = $('#lstProductosxCliente').DataTable({
            ajax: {
                url: "ajax/administrar_cliente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //1: LISTAR PRODUCTOS
                },
            },
            columnDefs: [{
                    targets: 0,
                    visible: false
                },
                
                {
                    targets: 4,
                    visible: false
                },
                {
                    targets: 7,
                    visible: false
                },
                {
                    targets: 8,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                }
            ],
            scrollX:true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });


        tblClientes = $('#tblClientes').DataTable({
                
                ajax:{
                    async: false,
                    url: "ajax/clientes.ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    dataSrc: "",
                    data:{
                        accion: 2
                    }

                },
            
                
                columnDefs:[
                    {    
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarPerfil text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
                                "</span>" +
                                "</center>"    
                        }
                    }
                ],
                scrollX:true,
                order:[
                    [1,'asc']
                ],
                language :{
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
        });

    }

    function RegistrarCliente(){
        var forms = document.getElementsByClassName('needs-validation-registro-clientes');
        var validation = Array.prototype.filter.call(forms, function(form){
            if(form.checkValidity() === true){

                Swal.fire({
                        title: "¿Está seguro de hacer los cambios?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, deseo hacerlo!",
                        cancelButtonText: "Cancelar",
                    }).then((result) => {

                        if (result.isConfirmed){

                            var nombre = $("#iptNombreCliente").val();
                            var apellidos = $("#iptApellidoCliente").val();
                            var Ident =  $("#iptIdentCliente").val();
                            var Direccion = $("#iptDireccionCliente").val();

                            console.log(nombre , apellidos , Ident, Direccion)
                           
                            $.ajax({
                                async: false,
                                url: "ajax/clientes.ajax.php",
                                method: "POST",
                                data:{
                                    accion:4,
                                    senal: idCliente,
                                    Nombres: nombre,
                                    Apellidos: apellidos,
                                    Identificacion: Ident,
                                    Direccion: Direccion,
                                    
                                },
                                
                                success: function(respuesta){
                                    console.log(respuesta);

                                    if (respuesta == '"OK"'){
                                        Swal.fire({
                                            title: "Cambios realizados",
                                            icon: "success",

                                            
                                        });

                                            $("#iptNombreCliente").val("");
                                            $("#iptApellidoCliente").val("");
                                            $("#iptIdentCliente").val("");
                                            $("#iptDireccionCliente").val("");

                                            $("#iptIdentCliente").prop("readonly", false);
                                            $(".needs-validation-registro-clientes").removeClass("was-validated");
                                            tblClientes.ajax.reload();
                                            Actualizar_busqueda();

                                    }else if (respuesta == '"ERROR"'){
                                        Swal.fire({
                                            title: "Hay un error en sus datos vuelva a ver",
                                            icon: "error",
                                            
                                        });
                                    }
                                }
                            })

                        }

                       
                    });
                
            }
            form.classList.add("was-validated");
        })
    }


    function Actualizar_busqueda(){
        table.ajax.reload();
        person = [];
        $.ajax({
            async: false,
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: {
                'accion': 1
            },
            dataType: 'json',
            success: function(respuesta2) {
                console.log("LINEA DE CLIENTES 385 : ", respuesta2);
                for (let i = 0; i < respuesta2.length; i++) {
                    person.push(respuesta2[i]['descripcion_cliente'])
                }
                
                $("#iptCliente").autocomplete({

                    source: person,
                    select: function(event, ui) {

                        //CargarProductos(ui.item.value);                                    
                        
                        
                        $("#iptCliente").val(ui.item.value);

                        var info = ui.item.value;

                        var partes = info.split('-');

                        // Extraer la primera parte que contiene el DNI (suponiendo que el DNI siempre esté en la primera posición)
                        var dni = partes[0].trim();

                        MostrarProductos(dni);
                        //  $("#iptCliente").focus();

                        

                        return false;
                    }
                })


            }
        });
    }
</script>
<script>
document.removeEventListener('keydown', boton3);
document.removeEventListener('keydown', boton2);
document.removeEventListener('keydown', boton1);
</script>