<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Compras</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Compras</li>

                    <!-- <input type="text" id="fechaInput" readonly>
                    <button id="mostrarCalendario">Mostrar Calendario</button> -->

                    

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
                <a class="nav-link active" id="content-gastos-tab" data-toggle="pill" href="#content-gastos" role="tab" aria-controls="content-gastos" aria-selected="false">Registrar Nuevo Gastos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-estados_gastos-tab" data-toggle="pill" href="#content-estados_gastos" role="tab" aria-controls="content-estados_gastos" aria-selected="false">Listados de Gastos</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-gastos" role="tabpanel" aria-labelledby="content-gastos-tab">

                <h4>Hacer nuevo registro</h4>

                <div class="container-fluid">

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                    Total Venta: S./ <span id="totalVentaRegistrarVista1">0.00</span>
                                </h5>

                                

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

                                                <label for="iptNroVenta">Nro Venta</label>

                                                <input type="text" min="0" name="iptEfectivo" id="iptNroVenta"
                                                    class="form-control form-control-sm" placeholder="Nro Venta" disabled>

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
                                                    <h4>CLIENTE: <label id = "iptNombreFijo"> GASTOS JUSYBA S.A.C </label></h4>

                                                    
                                                </div>

                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroCotizacion">
                                                        <i class="fas fa-biking"></i> Registrar e Imprimir [f8]</button>
                                                </div>


                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroEsp">
                                                        <i class="fas fa-biking"></i> Registrar [f10]</button>
                                                </div>

                                                <div class="col-12 col-lg-10">
                                                    <h6>Direccion: <label id = "iptDireccionFijo"> JR AYACUCHO 1054 - AL FRENTE DE LA GALERIA EL ZAPATON </label></h6>

                                                    
                                                </div>

                                            </div>

                                             <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptCodigoVenta">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptCodigoVenta"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div>
                                        </div>

                                        <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                                        <div class="col-md-5 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                                            <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalVenta">0.00</span></h2>
                                        </div>

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-7 text-right">
                                            <button class="btn btn-danger" id="btnVaciarGasto">
                                                <i class="far fa-trash-alt"></i> Vaciar
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosGastos" class="display nowrap table-striped w-100 shadow ">
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

                                        <h6><label style="color: #17a2b8;" >(L: planchas, F: fardos, B: cajas, M: millares, C: cientos, P: paquetes, U: unidades)</label></h6>
                                        <!-- /.col -->

                                    </div>

                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-estados_gastos" role="tabpanel" aria-labelledby="content-estados_gastos-tab">

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

                <div class="card card-gray shadow" style="border: 1px solid black;"  >

                    <div class="card-body p-3">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 rounded-3" style="background-color: gray;color: white;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">S/ <span class="fw-bold" id="totalVentaGastos">0.00</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="display nowrap table-striped w-100 shadow" id="lstGastosListados">
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

<!-- AQUI SON LOS SCRIPT  -->
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    var tabla11; // tabla de productos que se agrega
    var tabla21; // tabla de productos que se agrega

    var itemProducto = 0;   

    var ventas_desde, ventas_hasta;

    var isActionInProgress = false;

    var isActionInProgress2 = false;

    $(document).ready(function(){

        $("#iptCodigoVenta").focus();
        CargarNroBoleta();
        Cargar_fechas();
        Cargar_tables();
        cargarProductosAJAX();
        Cargar_Botones();

    })

    
    $(document).on('keydown', function(event) {

        //console.log(event.keyCode);
        // Verifica si la tecla presionada es la tecla Control (keyCode 17)
        if (event.keyCode === 121) {

            
            event.preventDefault()
            if ($('#content-registrar').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnRegistroEsp').click();
                    tabla21.ajax.reload();
                    //tabla31.ajax.reload();
                    ////tabla51.ajax.reload();
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }else if ($('#content-lista-registros').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                    $('#btnHacerVenta2').click();
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }
                
        }else if (event.keyCode === 113) {

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
                    // Cambiar directamente al tab con ID "content-gastos-tab"
                    const siguienteNav = $('#content-gastos-tab');

                    activeElement.removeClass('active').attr('aria-selected', 'false');
                    siguienteNav.addClass('active').attr('aria-selected', 'true').tab('show');

                    const tabId = siguienteNav.attr('href');
                    $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                    $(tabId).addClass('show active').attr('aria-selected', 'true');

                }

                $("#iptCodigoVenta").focus();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed

            }
        }
        

    });

</script>

<script>

    var ajaxEnProgreso = false;

    function Cargar_Botones(){

        $("#btnRegistroEsp").on("click", function(){
            CargarNroBoleta();
            console.log("esta bien?");
            if (!isActionInProgress2) {
                var count = 0;
                var totalVenta = $("#totalVenta").html();
                var nro_boleta = $("#iptNroVenta").val();
                var cliente = $("#iptNombreCliente").text();
                var palabra = cliente;
                var cancelacion = 0;

                tabla11.rows().eq(0).each(function(index) {
                    count = count + 1;

                    var rowData = tabla11.row(index).data(); // Obtenemos los datos de la fila

                    console.log(parseFloat(rowData[5]) +  " " +  parseFloat(rowData[6].replace("S./ ", '')));
                    
                    var column5 = parseFloat(rowData[5]) 
                    var column6 =  parseFloat(rowData[6].replace("S./ ", ''))

                    // Verificamos si la columna 5 o la columna 6 tienen un valor de 0 o negativo
                    if (column5<= 0 || column6<= 0) {
                        cancelacion = 1; // Establecemos la variable cancelacion en 1
                    }

                    
                });
                $("#iptCodigoVenta").focus();
                
                if(cancelacion == 1){
                    
                    Swal.fire({
                        icon: 'warning',
                        title: 'Almenos Un producto tiene Precio o cantidad menor o igual a 0',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                        cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                        confirmButtonText: "Eliminarlos y continuar",
                        cancelButtonText: "Dejame revisar Primero",
                    }).then((result) => {
                    
                        if (result.isConfirmed){
                            
                             console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

                            if (count > 0) {

                                var formData = new FormData();
                                var arr = [];
                                var arr2 = [];
                                var arrIndicador  = [];
                                var arrPrecios  = [];
                                var seleccion = 1;

                                    tabla11.rows().eq(0).each(function(index) {
                                        var row = tabla11.row(index);
                                        var data = row.data();
                                        var total  = data[7].replace("S./ ", "");
                                        var tot = parseFloat(total);
                                        var precio  = tot / parseFloat(data[5]);
                                        var prec = parseFloat(precio);
                                        var palabras = data[5].match(/[a-zA-Z()]+/g);

                                        console.log(palabras);

                                        var nuevoElemento1 = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + "," + palabras[0];
                                        var nuevoElemento2 = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                                        var nuevoIndicador = data[5];
                                        var nuevoPrecio = "S./ " + parseFloat(prec).toFixed(2);

                                        if(parseFloat(data[5]) > 0 && parseFloat(prec) > 0){
                                            // Verificar si el elemento ya existe en los arrays
                                            if (!arr.includes(nuevoElemento1)) {
                                                arr.push(nuevoElemento1); // Agregar el elemento solo si no existe en el array
                                                formData.append('arr[]', nuevoElemento1);
                                            }

                                            if (!arr2.includes(nuevoElemento2)) {
                                                arr2.push(nuevoElemento2); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrIndicador.includes(nuevoIndicador)) {
                                                arrIndicador.push(nuevoIndicador); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrPrecios.includes(nuevoPrecio)) {
                                                arrPrecios.push(nuevoPrecio); // Agregar el elemento solo si no existe en el array
                                            }
                                        }
                                            
                                    });

                                    var deuda  = 0 //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', "INVERSIONES JUSYBA S.A.C");
                                    formData.append('Estado', 0);


                                    ejecutarAjax(formData);

                                    CargarNroBoleta();



                            }else {

                                Swal.fire({
                                    icon: 'warning',
                                    title: 'No hay productos en el listado.'
                                });

                            }


                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed

                        }else{
                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed
                        }
                    
                    });
                }else{
                    console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

                            if (count > 0) {

                                var formData = new FormData();
                                var arr = [];
                                var arr2 = [];
                                var arrIndicador  = [];
                                var arrPrecios  = [];
                                var seleccion = 1;

                                    tabla11.rows().eq(0).each(function(index) {
                                        var row = tabla11.row(index);
                                        var data = row.data();
                                        var total  = data[7].replace("S./ ", "");
                                        var tot = parseFloat(total);
                                        var precio  = tot / parseFloat(data[5]);
                                        var prec = parseFloat(precio);
                                        var palabras = data[5].match(/[a-zA-Z()]+/g);
                                        

                                        var nuevoElemento1 = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + "," + palabras[0];
                                        var nuevoElemento2 = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                                        var nuevoIndicador = data[5];
                                        var nuevoPrecio = "S./ " + parseFloat(prec).toFixed(2);

                                        if(parseFloat(data[5]) > 0 && parseFloat(prec) > 0){
                                            // Verificar si el elemento ya existe en los arrays
                                            if (!arr.includes(nuevoElemento1)) {
                                                arr.push(nuevoElemento1); // Agregar el elemento solo si no existe en el array
                                                formData.append('arr[]', nuevoElemento1);
                                            }

                                            if (!arr2.includes(nuevoElemento2)) {
                                                arr2.push(nuevoElemento2); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrIndicador.includes(nuevoIndicador)) {
                                                arrIndicador.push(nuevoIndicador); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrPrecios.includes(nuevoPrecio)) {
                                                arrPrecios.push(nuevoPrecio); // Agregar el elemento solo si no existe en el array
                                            }
                                        }
                                            
                                    });

                                    var deuda  = 0  //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', "INVERSIONES JUSYBA S.A.C");
                                    formData.append('Estado', 0);

                                    ejecutarAjax(formData);

                                    CargarNroBoleta();

                                    
                                    



                            }else {

                                Swal.fire({
                                    icon: 'warning',
                                    title: 'No hay productos en el listado.'
                                });

                            }


                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed
                }

               
                
            }

        });

        $("#btnRegistroCotizacion").on("click", function(){
            CargarNroBoleta();
            console.log("esta bien?");
            if (!isActionInProgress2) {
                var count = 0;
                var totalVenta = $("#totalVenta").html();
                var nro_boleta = $("#iptNroVenta").val();
                var cliente = $("#iptNombreCliente").text();
                var palabra = cliente;
                var cancelacion = 0;

                tabla11.rows().eq(0).each(function(index) {
                    count = count + 1;

                    var rowData = tabla11.row(index).data(); // Obtenemos los datos de la fila

                    console.log(parseFloat(rowData[5]) +  " " +  parseFloat(rowData[6].replace("S./ ", '')));
                    
                    var column5 = parseFloat(rowData[5]) 
                    var column6 =  parseFloat(rowData[6].replace("S./ ", ''))

                    // Verificamos si la columna 5 o la columna 6 tienen un valor de 0 o negativo
                    if (column5<= 0 || column6<= 0) {
                        cancelacion = 1; // Establecemos la variable cancelacion en 1
                    }

                    
                });
                $("#iptCodigoVenta").focus();
                
                if(cancelacion == 1){
                    
                    Swal.fire({
                        icon: 'warning',
                        title: 'Almenos Un producto tiene Precio o cantidad menor o igual a 0',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                        cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                        confirmButtonText: "Eliminarlos y continuar",
                        cancelButtonText: "Dejame revisar Primero",
                    }).then((result) => {
                    
                        if (result.isConfirmed){
                            
                             console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

                            if (count > 0) {

                                var formData = new FormData();
                                var arr = [];
                                var arr2 = [];
                                var arrIndicador  = [];
                                var arrPrecios  = [];
                                var seleccion = 1;

                                    tabla11.rows().eq(0).each(function(index) {
                                        var row = tabla11.row(index);
                                        var data = row.data();
                                        var total  = data[7].replace("S./ ", "");
                                        var tot = parseFloat(total);
                                        var precio  = tot / parseFloat(data[5]);
                                        var prec = parseFloat(precio);
                                        var palabras = data[5].match(/[a-zA-Z()]+/g);

                                        console.log(palabras);

                                        var nuevoElemento1 = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + "," + palabras[0];
                                        var nuevoElemento2 = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                                        var nuevoIndicador = data[5];
                                        var nuevoPrecio = "S./ " + parseFloat(prec).toFixed(2);

                                        if(parseFloat(data[5]) > 0 && parseFloat(prec) > 0){
                                            // Verificar si el elemento ya existe en los arrays
                                            if (!arr.includes(nuevoElemento1)) {
                                                arr.push(nuevoElemento1); // Agregar el elemento solo si no existe en el array
                                                formData.append('arr[]', nuevoElemento1);
                                            }

                                            if (!arr2.includes(nuevoElemento2)) {
                                                arr2.push(nuevoElemento2); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrIndicador.includes(nuevoIndicador)) {
                                                arrIndicador.push(nuevoIndicador); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrPrecios.includes(nuevoPrecio)) {
                                                arrPrecios.push(nuevoPrecio); // Agregar el elemento solo si no existe en el array
                                            }
                                        }
                                            
                                    });

                                    var deuda  = 0 //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', "INVERSIONES JUSYBA S.A.C");
                                    formData.append('Estado', 0);


                                    ejecutarAjax(formData);

                                    ImprimirBoleta(nro_boleta,arrIndicador,arrPrecios);

                                    CargarNroBoleta();



                            }else {

                                Swal.fire({
                                    icon: 'warning',
                                    title: 'No hay productos en el listado.'
                                });

                            }


                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed

                        }else{
                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed
                        }
                    
                    });
                }else{
                    console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

                            if (count > 0) {

                                var formData = new FormData();
                                var arr = [];
                                var arr2 = [];
                                var arrIndicador  = [];
                                var arrPrecios  = [];
                                var seleccion = 1;

                                    tabla11.rows().eq(0).each(function(index) {
                                        var row = tabla11.row(index);
                                        var data = row.data();
                                        var total  = data[7].replace("S./ ", "");
                                        var tot = parseFloat(total);
                                        var precio  = tot / parseFloat(data[5]);
                                        var prec = parseFloat(precio);
                                        var palabras = data[5].match(/[a-zA-Z()]+/g);
                                        

                                        var nuevoElemento1 = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + "," + palabras[0];
                                        var nuevoElemento2 = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                                        var nuevoIndicador = data[5];
                                        var nuevoPrecio = "S./ " + parseFloat(prec).toFixed(2);

                                        if(parseFloat(data[5]) > 0 && parseFloat(prec) > 0){
                                            // Verificar si el elemento ya existe en los arrays
                                            if (!arr.includes(nuevoElemento1)) {
                                                arr.push(nuevoElemento1); // Agregar el elemento solo si no existe en el array
                                                formData.append('arr[]', nuevoElemento1);
                                            }

                                            if (!arr2.includes(nuevoElemento2)) {
                                                arr2.push(nuevoElemento2); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrIndicador.includes(nuevoIndicador)) {
                                                arrIndicador.push(nuevoIndicador); // Agregar el elemento solo si no existe en el array
                                            }

                                            if (!arrPrecios.includes(nuevoPrecio)) {
                                                arrPrecios.push(nuevoPrecio); // Agregar el elemento solo si no existe en el array
                                            }
                                        }
                                            
                                    });

                                    var deuda  = 0  //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', "INVERSIONES JUSYBA S.A.C");
                                    formData.append('Estado', 0);

                                    ejecutarAjax(formData);
                                    
                                    ImprimirBoleta(nro_boleta,arrIndicador,arrPrecios);

                                    CargarNroBoleta();


                            }else {

                                Swal.fire({
                                    icon: 'warning',
                                    title: 'No hay productos en el listado.'
                                });

                            }


                            setTimeout(function () {
                                isActionInProgress2 = false;
                            }, 1000); // Adjust the delay as needed
                }

               
                
            }

        });

        $("#content-gastos-tab").on("click", function(){

            console.log("hola");

            $("#iptCodigoVenta").focus();

        });

    }

    function Cargar_tables(){

        tabla11= $('#lstProductosGastos').DataTable({
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
                },
                {
                    targets: [5,6],
                    createdCell: function (td, cellData, rowData, row, col) {
                       // Agregar la clase 'editable' a las celdas específicas
                       if ($(td).hasClass('editable')) {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        } else {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        }
                    },
                    className: "text-center",
                },
                {
                    targets:[1,4,7,8],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
            ],
            buttons: [
                'excel',
                'print',
                'pageLength'
            ],
            dom: 'Bfrtip',
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            "order": [
                [0, 'asc']
            ],
            "language": {

                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"

            },

        });

        tabla11.on('init.dt', function () {

            $('#lstProductosGastos tbody').off('click', 'td.editable');
            $('#lstProductosGastos tbody').off('blur', 'td.editable');
            $('#lstProductosGastos tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstProductosGastos tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla11.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[6]===""){
                        data[6]="S./ 0.00";
                    }
                    $(this).text(parseFloat(data[6].replace("S./ ", "")));

                }else if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla11.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="1 Unidades";
                    }
                    $(this).text(parseFloat(data[5]));

                    console.log(tabla11.cell($currentCell, 5).data())
                    var texto = tabla11.cell($currentCell, 5).data();
                    var partes = texto.match( /([\d.]+)\s*(\D+)/);
                    texto_cantidad = partes[2];
                    console.log(texto_cantidad);

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstProductosGastos'));

            $('#lstProductosGastos tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla11.row($(this).parents('tr')).data();

                
                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 3) {
                    var data = tabla11.row($(this).parents('tr')).data();
                    console.log("data[6] : "+data[6]);


                    var dinero_base = parseFloat(data[6].replace("S./ ", ""));
                    var dinero_actual = parseFloat(nuevoValor);

                    if(dinero_actual >= dinero_base/2){
                        descripcionColumna = 'Columna 3';
                        tabla11.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                        recalcularTotales();
                    }else{
                        Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: "Precio muy bajo volviendo al precio anterior...",
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                            cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                            confirmButtonText: "Continuar con ese precio",
                            cancelButtonText: "Volver al Anterior",
                        }).then((result) => {
                            if (result.isConfirmed){

                                descripcionColumna = 'Columna 3';
                                tabla11.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                recalcularTotales();

                            }else{
                                descripcionColumna = 'Columna 3';
                                tabla11.cell(currentRow, 6).data("S./ "+parseFloat(dinero_base).toFixed(2));
                            }           
                        });
                        
                    }

                    
                }
                else if (columnaModificada === 2) {
                    var texto = tabla11.cell($currentCell, 5).data();
                    var partes = texto.match(/([\d.]+)\s*(\D+)/);
                    texto_cantidad = partes[2];
                    descripcionColumna = 'Columna 2';

                    console.log("nuevoValor : " + nuevoValor);

                    // Verificar si nuevoValor tiene la estructura número + texto
                    var regexNumeroTexto = /^(\d+(?:\.\d+)?)\s*([A-Za-z]+)$/; // Expresión regular para número (opcionalmente decimal) seguido de texto
                    var matchNumeroTexto = nuevoValor.match(regexNumeroTexto);

                    if (matchNumeroTexto) {
                        var numero = parseFloat(matchNumeroTexto[1]).toFixed(2); // Obtener el número
                        var texto = matchNumeroTexto[2].toUpperCase(); // Obtener el texto en mayúsculas
                        var codigo_producto = data[1];
                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 21, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                                'codigo_producto': codigo_producto,
                                'id_cliente': idBoleta2,
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("idBoleta2 : " , idBoleta2 , "respuesta : " , respuesta, "texto : ",texto+"-")
                                // Imprimir el mensaje en la consola según el texto
                                switch (texto) {
                                    case 'F':
                                        console.log("CASO F");
                                        if(respuesta['precio_fardo']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Fardos");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_fardo']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_fardo']).toFixed(2);  
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));    
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales();
                                        break;

                                    case 'L':
                                        console.log("CASO L");
                                        if(respuesta['precio_fardo']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Planchas");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_fardo']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_fardo']).toFixed(2);  
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));    
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();
                                        break;
                                        
                                    case 'M':
                                        console.log("CASO M");
                                        if(respuesta['precio_millar']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Millares");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_millar']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_millar']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();
                                       break;
                                    // Agrega más casos según las letras que necesites manejar
                                    case 'B':
                                        console.log("CASO B");
                                        if(respuesta['precio_caja']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Cajas");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_caja']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_caja']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'D':
                                        console.log("CASO D");
                                        if(respuesta['precio_docena']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Docenas");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_docena']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_docena']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        } 
                                        recalcularTotales();   
                                        break;
                                    case 'C':
                                        console.log("CASO C");
                                        if(respuesta['precio_ciento']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Cientos");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_ciento']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_ciento']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'P':
                                        console.log("CASO P");
                                        if(respuesta['precio_paquetito']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Paquetitos");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_paquetito']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_paquetito']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'U':
                                        console.log("CASO U");
                                        if(respuesta['precio_unidad']>0){
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + "Unidades");
                                            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_unidad']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_unidad']).toFixed(2);
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    default:
                                        // Actualizar la celda en la tabla con el nuevo valor
                                        tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                        tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        recalcularTotales();
                                        break;
                                }
                            }
                        });

                        
                    } else {
                        // Si nuevoValor no tiene la estructura número + texto, simplemente actualiza la celda con el valor original
                        tabla11.cell(currentRow, 5).data(parseFloat(nuevoValor) + " " + texto_cantidad);
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                        recalcularTotales();

                        
                    }
                }

                // var data = tabla11.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                
            });

            // // Función para manejar eventos de teclado
            $('#lstProductosGastos tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 187 || keyCode === 107) { // Tecla DERECHA
                    $(this).text((currentValue + 1).toFixed(2));
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                } else if (keyCode === 189 || keyCode === 109) { // Tecla IZQUIERDA
                    $(this).text(Math.max(0, currentValue - 1).toFixed(2));
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                }else if (keyCode === 40) { // Tecla Enter
                    e.preventDefault(); // Evitar el comportamiento predeterminado del Enter

                    var $currentCell = $(this);

                    // Obtener la fila y columna de la celda actual
                    var rowIndex = $currentCell.parent().index();
                    var cellIndex = $currentCell.index();

                    var $currentRow = $currentCell.closest('tr');
                    var $nextRow = $currentRow.next(); // Obtener la siguiente fila

                    if ($nextRow.length) {
                        var $nextEditableCell = $nextRow.find('td.editable').first(); // Obtener la primera celda editable de la siguiente fila
                        if(cellIndex == 3){
                            $nextEditableCell =$nextEditableCell.nextAll('.editable').first();
                        }
                        if ($nextEditableCell.length) {
                            // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                            if(cellIndex == 3){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $nextEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                console.log("partes : " ,partes);
                                texto_cantidad = partes[2];
                                //console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstProductosGastos tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $firstEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $firstEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                console.log("partes : " ,partes);
                                texto_cantidad = partes[2];
                                //console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($firstEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                        }
                    }
                }else if (keyCode === 38) { // Tecla arriba
                    e.preventDefault(); // Evitar el comportamiento predeterminado del arriba

                     var $currentCell = $(this);

                    // Obtener la fila y columna de la celda actual
                    var rowIndex = $currentCell.parent().index();
                    var cellIndex = $currentCell.index();

                    var $currentRow = $currentCell.closest('tr');
                    var $prevRow = $currentRow.prev(); // Obtener la fila anterior

                    if ($prevRow.length) {
                        var $prevEditableCell = $prevRow.find('td.editable').first(); // Obtener la primera celda editable de la fila anterior
                        if(cellIndex == 3){
                            $prevEditableCell =$prevEditableCell.nextAll('.editable').first();
                        }
                        if ($prevEditableCell.length) {
                            // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                             if(cellIndex == 3){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $prevEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $prevEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($prevEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $prevEditableCell.attr('contenteditable', 'true');
                        }
                    } else {
                        // Si se encuentra en la primera fila, moverse a la última fila
                        var $lastRow = $('#lstProductosGastos tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $lastEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $lastEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($lastEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                        }
                    }
                }else if (keyCode === 39) { // Tecla derecha
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla derecha

                    var $currentCell = $(this);
                    var $nextEditableCell = $currentCell.nextAll('td.editable').first();

                    if ($nextEditableCell.length) {
                        $nextEditableCell.attr('contenteditable', 'true');
                        var data = tabla11.row($nextEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if (data[6] === "") {
                            data[6] = "S./ 0.00";
                        }
                        $nextEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                        var range = document.createRange();
                        range.selectNodeContents($nextEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda

                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();

                    if ($prevEditableCell.length) {
                        $prevEditableCell.attr('contenteditable', 'true');
                        var data = tabla11.row($prevEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if (data[5] === "") {
                            data[5] = "1";
                        }
                        $prevEditableCell.text(parseFloat(data[5]));

                        var range = document.createRange();
                        range.selectNodeContents($prevEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                } else if (keyCode === 13) {
                    e.preventDefault(); // Evitar el comportamiento predeterminado del Enter

                    var $currentCell = $(this);

                    // Salir de la celda actual
                    $currentCell.blur();

                    // Enfocar en el cuadro de texto iptCodigoVenta
                    $('#iptCodigoVenta').focus();
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla21= $('#lstGastosListados').DataTable({
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
                url: 'ajax/gastos_pagos.ajax.php',
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
                    $("#totalVentaGastos").html(TotalVenta.toFixed(2));
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
            },

            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstGastosListados'));
            },
        });

    }

    function Cargar_fechas(){
        
        $('#ventas_desde, #ventas_hasta').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
    
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

    }

    function cargarProductosAJAX() {

        if($('#content-gastos:visible').length > 0 || $('#content-estados_gastos:visible').length > 0){
            
            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                    'accion': 6
                },
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptCodigoVenta").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {
                            console.log(ui.item.value)
                            CargarProductos(ui.item.value);
                            $("#iptCodigoVenta").val("");
                            $("#iptCodigoVenta").focus();
                            return false;
                        },
                    }).data("ui-autocomplete")._renderItem = function (ul, item) {
                        return $("<li class='ui-autocomplete-row'></li>")
                            .data("item.autocomplete", item)
                            .append(item.label)
                            .appendTo(ul);
                    };

                    // Agregar evento de enfoque y desenfoque a los elementos de la lista
                    $(".ui-autocomplete-row").on("focus", function () {
                        $(this).addClass("ui-state-focus");
                    }).on("blur", function () {
                        $(this).removeClass("ui-state-focus");
                    });

                    // Manejar evento de teclas al navegar por la lista
                    $("#iptCodigoVenta").on("keydown", function (event) {
                        if (event.which === 40) {
                            // Flecha abajo, enfocar el siguiente elemento de la lista
                            $(".ui-autocomplete-row:focus").next(".ui-autocomplete-row").focus();
                        } else if (event.which === 38) {
                            // Flecha arriba, enfocar el elemento anterior de la lista
                            $(".ui-autocomplete-row:focus").prev(".ui-autocomplete-row").focus();
                        }
                    });

                    // Configurar el evento de apertura de la lista para asegurarse de que la opción seleccionada sea visible
                    $("#iptCodigoVenta").on("autocompleteopen", function (event, ui) {
                        var selected = $(".ui-autocomplete-row.ui-state-focus");
                        if (selected.length) {
                            // Si hay un elemento enfocado, asegurarse de que sea visible
                            var ul = $(this).autocomplete("widget");
                            var itemHeight = selected.outerHeight();
                            var scrollTop = ul.scrollTop();
                            var top = selected.position().top;

                            if (top + itemHeight > ul.height()) {
                                // Si el elemento está fuera de la vista por abajo, desplazarse hacia abajo
                                ul.scrollTop(scrollTop + top + itemHeight - ul.height());
                            } else if (top < 0) {
                                // Si el elemento está fuera de la vista por arriba, desplazarse hacia arriba
                                ul.scrollTop(scrollTop + top);
                            }
                        }
                    });
                },
            });

        }

    }

    function CargarProductos(producto = "") {

        console.log("cargarProductos se ejcuta normal" )
        console.log($("#iptCodigoVenta").val() )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla11.rows().eq(0).each(function(index) {

            var row = tabla11.row(index);
            var data = row.data();
            //console.log("data[6]: " , data[1] );
            //console.log("data[6]: " , parseInt(codigo_producto) );
            if (parseInt(codigo_producto) == data[1]) {

                producto_repetido = 1;

                $.ajax({
                    async: false,
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 8,
                        'codigo_producto': data[1],
                        'cantidad_a_comprar': data[5]
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if (parseInt(respuesta['existe']) == 0) {

                            Swal.fire({
                                icon: 'error',
                                title: ' El producto ' + data[4] + ' ya no tiene stock'
                            })

                            $("#iptCodigoVenta").val("");
                            $("#iptCodigoVenta").focus();


                        } else {

                            // AUMENTAR EN 1 EL VALOR DE LA CANTIDAD
                            tabla11.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla11.cell(index, 7).data(NuevoPrecio).draw();

                            // RECALCULAMOS TOTALES
                            recalcularTotales();
                        }
                    }
                });

            }
        });

        if(producto_repetido == 1){
            return;
        }

        var dropdownMenu = "<ul class='dropdown-menu'>";
        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 7, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto
            },
            dataType: 'json',
            success: function(respuesta,dropdownMenu) {
                
                var nombreCategoria = respuesta['nombre_categoria'];

                var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")


                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var TotalVenta = 0.00;

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = "Unidades";

                    if (parseFloat(respuesta['precio_unidad']) > 0) {
                        
                        medida = "Unidades";
                    }else if (parseFloat(respuesta['precio_paquetito']) > 0) {
                        
                        medida = "Paquetitos";
                    }else if (parseFloat(respuesta['precio_docena']) > 0) {
                        
                        medida = "Docenas";
                    }else if (parseFloat(respuesta['precio_ciento']) > 0) {
                        
                        medida = "Cientos";
                    }else if (parseFloat(respuesta['precio_millar']) > 0) {
                        
                        medida = "Millares";
                    }else if (parseFloat(respuesta['precio_caja']) > 0) {
                        
                        medida = "Cajas";
                    }else if (parseFloat(respuesta['precio_fardo']) > 0) {
                        if(nombreCategoriaSinEspacios === "PAPEL HIGIENICO" || nombreCategoriaSinEspacios === "SERVILLETA" || nombreCategoriaSinEspacios === "TOALLA" || nombreCategoriaSinEspacios === "SORBETE" ){
                            
                            medida = "Planchas";                        
                        }else{
                            
                            medida = "Fardos";
                        }
                        
                    }

                    if (parseFloat(respuesta['precio_unidad']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_unidad'] + "' medida = ' " + "Unidades" + "' style='cursor:pointer; font-size:14px;'>Unidad: <strong>(S./ " +
                        parseFloat(respuesta['precio_unidad']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_unidad_2']).toFixed(2) +")</strong>  -  ( 1 unidad ) " + "</a></li>";
                        indicador = "Unidades";
                    }

                    if (parseFloat(respuesta['precio_paquetito']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                         respuesta['precio_paquetito'] + "' medida = ' " + "Paquetitos"  +"' style='cursor:pointer; font-size:14px;'>Paquete: <strong>(S./ " +
                         parseFloat(respuesta['precio_paquetito']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_paquetito_2']).toFixed(2) +")</strong>  -  ( 1 paquete) " + ")</a></li>";
                       indicador = "Paquetitos";
                    }

                    if (parseFloat(respuesta['precio_docena']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_docena'] + "' medida = ' " + "Docenas"  +"' style='cursor:pointer; font-size:14px;'>Docena: <strong>(S./ " +
                         parseFloat(respuesta['precio_docena']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_docena_2']).toFixed(2) +")</strong>  -  ( 1 docena ) " +")</a></li>";
                         indicador = "Docenas";
                    }

                    if (parseFloat(respuesta['precio_ciento']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_ciento'] + "' medida = ' " + "Cientos"  +"' style='cursor:pointer; font-size:14px;'>Ciento: <strong>(S./ " +
                        parseFloat(respuesta['precio_ciento']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_ciento_2']).toFixed(2) +")</strong>  -  ( 1 ciento ) " + ")</a></li>";
                        indicador = "Cientos";
                    }

                    if (parseFloat(respuesta['precio_millar']) > 0) {

                        if (parseFloat(respuesta['precio_ciento']) > 0) {
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: <strong>(S./ " +
                            parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_millar']+" cientos ) " +")</a></li>";
                            indicador = "Millares";
                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: <strong>(S./ " +
                            parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_millar']+" paquetes ) " +")</a></li>";
                            indicador = "Millares";
                        
                        
                        }else{
                             dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: <strong>(S./ " +
                            parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_millar']+" unidades ) " +")</a></li>";
                            indicador = "Millares";
                        }
                    }

                    if (parseFloat(respuesta['precio_caja']) > 0) {

                        if (parseFloat(respuesta['precio_ciento']) > 0) {

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: <strong>(S./ " +
                            parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_caja']+" cientos ) " +")</a></li>";
                            indicador = "Cajas";

                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: <strong>(S./ " +
                            parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_caja']+" paquetitos ) " +")</a></li>";
                            indicador = "Cajas";
                        
                        
                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: <strong>(S./ " +
                            parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_caja']+" unidades ) " +")</a></li>";
                            indicador = "Cajas";
                        }
                            
                    }

                    if (parseFloat(respuesta['precio_fardo']) > 0) {
                        if(nombreCategoriaSinEspacios === "PAPEL HIGIENICO" || nombreCategoriaSinEspacios === "SERVILLETA" || nombreCategoriaSinEspacios === "TOALLA" || nombreCategoriaSinEspacios === "SORBETE"){
                            
                             if (parseFloat(respuesta['precio_ciento']) > 0) {

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" cientos ) " +")</a></li>";
                            

                            }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" paquetitos ) " +")</a></li>";
                            
                            
                            
                            }else{

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            
                            }
                            
                            
                            indicador = "Planchas";
                        }else{

                            if (parseFloat(respuesta['precio_ciento']) > 0) {

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" cientos ) " +")</a></li>";
                            

                            }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" paquetitos ) " +")</a></li>";
                            
                            
                            
                            }else{

                                dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                                respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " + 
                                parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            
                            }
                                
                            indicador = "Fardos";
                        }
                        
                    }
                    

                    dropdownMenu += "</ul>";

                    tabla11.row.add([
                        itemProducto,
                        respuesta['codigo_producto'],
                        respuesta['id_categoria'],
                        respuesta['nombre_categoria'],
                        respuesta['descripcion_producto'],
                        1 + " " + medida,
                        respuesta['precio_venta'],


                        respuesta['total'],
                        "<center>" +
                                        
                                        "<span class='btnEliminarproducto text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-trash fs-5'> </i> " +
                                        "</span>" +
                                        "<span class='btnEditarproducto text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-edit fs-5'> </i> " +
                                        "</span>" +
                                        "<div class='btn-group'>" +
                                        "<button type='button' class=' p-0 btn btn-primary dropdown-toggle btn-sm border-0 focus-visible' data-bs-toggle='dropdown' aria-expanded='false' style='background-color: rgba(255, 255, 255, 0);'>" +
                                            "<i class='fas fa-cog text-primary fs-5'></i> <i class='fas fa-chevron-down text-primary'></i>" +
                                            "</button>" +

                                            dropdownMenu +
                                        "</div>" +
                        "</center>",
                        respuesta['aplica_peso'],
                        respuesta['precio_docena'],
                        respuesta['precio_millar'],
                        respuesta['precio_caja'],
                        respuesta['precio_fardo']
                    ]).draw();

                    itemProducto = itemProducto + 1;

                    recalcularTotales()

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }

            }
        });



    }/* FIN CargarProductos */

    function recalcularTotales(){

        var TotalVenta = 0.00;
        //  Recalculamos el total de la venta
        tabla11.rows().eq(0).each(function(index) {
            var row = tabla11.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        $("#totalVenta").html("");
        $("#totalVenta").html(parseFloat(TotalVenta).toFixed(2));

        $("#totalVentaRegistrarVista1").html("");
        $("#totalVentaRegistrarVista1").html(parseFloat(TotalVenta).toFixed(2));

        $("#iptCodigoVenta").val("");

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

    // Función para realizar el AJAX
    function ejecutarAjax(formData) {
        // Verificar si ya hay una solicitud AJAX en curso
        if (ajaxEnProgreso) {
            console.log("La solicitud AJAX está en curso. Esperando a que termine.");
            return; // Salir de la función si ya hay una solicitud en curso
        }

        // Establecer la bandera de AJAX en progreso
        ajaxEnProgreso = true;

        $.ajax({
            url: "ajax/gastos_pagos.ajax.php",
            method: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                // Restablecer la bandera de AJAX una vez que la solicitud haya terminado
                ajaxEnProgreso = false;

                // Tu código de éxito aquí...
                Toast.fire({
                    icon: 'success',
                    title: respuesta,
                    showConfirmButton: false,
                    timer: 1500
                });

                tabla11.clear().draw();
                tabla21.ajax.reload();
                //tabla31.ajax.reload();
                ////tabla51.ajax.reload();

                

                $("#totalVenta").html("0.00");

                $("#totalVentaRegistrarVista1").html("0.00");

                $("#iptCodigoVenta").val("");
                $("#content-registrar-tab").click();
                $("#iptCodigoVenta").focus();
                $("#iptNombreCliente").text("VARIOS");
                $("#iptNombreCliente_0").text("VARIOS");
                $("#iptDireccionCliente").text("Sin Direccion");
            },
            error: function(xhr, status, error) {
                // En caso de error, también restablecer la bandera de AJAX
                ajaxEnProgreso = false;
                console.error(xhr.responseText);
            }
        });
    }

    function CargarNroBoleta() {

        $.ajax({
            async: false,
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 1
            },
            dataType: 'json',
            success: function(respuesta) {
                // console.log("serie de la boleta : " + respuesta["serie_boleta"]);
                serie_boleta = respuesta["serie_boleta"];
                nro_boleta = respuesta["nro_venta"];

                $("#iptNroSerie").val(serie_boleta);
                $("#iptNroVenta").val(nro_boleta);
            }
        });
    }

    function ImprimirBoleta(nro_boleta,arrIndicador,arrPrecios) {

        console.log(nro_boleta)

        window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+nro_boleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent("INVERSIONES JUSYBA SAC/SIN IDENTIFICACION/JR AYACUCHO 1054 - AL FRENTE DE LA GALERIA EL ZAPATON") );

        // $.ajax({
        //     url: "ajax/ventas.ajax.php",
        //     method: "POST",
        //     data: {
        //         'accion': 21,
        //         'nro_boleta': nro_boleta
        //     },
        //     dataType: 'json',
        //     success: function(respuesta) {

        //     }
        // });

    }


</script>
