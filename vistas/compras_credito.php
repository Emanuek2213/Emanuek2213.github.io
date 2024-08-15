
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Compras x Credito</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Compras</li>

                    <li class="breadcrumb-item active">Compras x Credito</li>
                    
                    <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/hY0QZtI4Y7I?si=UXC5I3xp-fXqJpbP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->


<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-compras-creditos" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-cancelar-tab" data-toggle="pill" href="#content-cancelar" role="tab" aria-controls="content-cancelar" aria-selected="false">
                    <i class=""></i>Cancelar Compras
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-automatico-tab" data-toggle="pill" href="#content-automatico" role="tab" aria-controls="content-automatico" aria-selected="false">Pagos al credito</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-compras-creditos">

            <div class="tab-pane fade active show mt-4 px-4" id="content-cancelar" role="tabpanel" aria-labelledby="content-cancelar-tab">

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
                                                    <input type="text" id="iptBuscarProveedor" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptBuscarProveedor">Proveedor</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnVolverOriginal">
                                                <i class="fas fa-minus"> Volver Normal [F8]</i>
                                            </button>

                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">

                                            <button class="btn btn-danger" id="btnGenerarDeudas">
                                                <i class="fas fa-plus"> Crear Deuda [F10]</i>
                                            </button>

                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnActualizarCompras">
                                                <i class="fas fa-bolt"> Refrescar Lista [F4]</i>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstCompras" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th >Opciones</th>
                                                        <th >Nro Compra</th>
                                                        <th >Proveedor</th>
                                                        <th >Fecha</th>
                                                        <th >Monto</th>
                                                        <th >Estado</th>   
                                                        <th >Deuda</th>

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

            <div class="tab-pane fade mt-4 px-4" id="content-automatico" role="tabpanel" aria-labelledby="content-automatico-tab">

                <div class="container-fluid">

                    <h4>Pagar Al Credito</h4>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-6 mb-3 rounded-3 text-right">
                                            
                                            <div class="d-none d-md-flex col-md-12 ">
                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarProveedorAlCredito" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptBuscarProveedorAlCredito">Proveedor</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">

                                            <button class="btn btn-danger" id="btnGuardarRecibos">
                                                <i class="fas fa-image"> Guardar Recibos [F8]</i>
                                            </button>

                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnAsignarCuotas">
                                                <i class="fas fa-calculator"> Asignar Cuotas [F10]</i>
                                            </button>

                                        </div>

                                        <div class="col-md-2 mb-3 rounded-3 text-right">
                                            

                                            <button class="btn btn-warning" id="btnActualizarComprasCreditos">
                                                <i class="fas fa-bolt"> Refrescar Lista [F4]</i>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstComprasAlCredito" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th >Opciones</th>
                                                        <th >Nro Compra</th>
                                                        <th >Proveedor</th>
                                                        <th >Fecha</th>
                                                        <th >Monto</th>
                                                        <th >id_compra_credito</th>
                                                           
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




<div class="modal fade" id="mdlListadoFotos" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Listado de Fotografias</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-10">

                                        <h4><label id="iptClienteFotos">CLIENTE: </label></h4>
                                        <h6><label id="iptnrofoto">NRO: </label></h6>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-success" id="btnGuardarFoto">
                                            <i class="fas fa-folder-plus"> Agregar foto [F10]</i>
                                        </button>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-12">

                                        <table id="lstFotosCompra" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th >Opc</th>
                                                    <th >Nro</th>
                                                    <th >Nro Compra</th>
                                                    <th >Proveedor</th>
                                                    <th >Fecha</th>
                                                    <th >Borrar</th>
                                                        
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

        </div>

    </div>

</div>

<div class="modal fade" id="mdlAgregarFoto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header bg-success py-2">

                <h6 class="modal-title" id="Titulo_modal_foto"> Agregar Nueva Fotografia</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarAgregarFoto">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-7">

                                        <h5><label id="iptClienteAgregarFoto">CLIENTE: </label></h5>

                                    </div>

                                    <div class="col-md-5">

                                        <button class="btn btn-danger" id="btnCerrarAgregado">
                                            <i class="fas fa-minus"> Regresar [F8]</i>
                                        </button>

                                        <button class="btn btn-success" id="btnAgregarFoto">
                                            <i class="fas fa-plus"> Agregar [F10]</i>
                                        </button>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <form class="needs-foto-validation" novalidate >

                                        <div class="col-12">

                                            <div class="form-group mb-2">

                                                <label for="iptImagen"><i class = "fas fa-image fs-6"></i><span class = "small">Seleccione una imagen</span></label>
                                                <input type="file"
                                                        class = "form-control form-control-sm"
                                                        id = "iptImagen"
                                                        name = "iptImagen"
                                                        accept = "image/*"
                                                        onchange = "previewFile(this)">

                                            </div>
                                            
                                        </div>

                                        <div class="col-12 col-lg-12 my-1">

                                            <div style="width: 100%; height : 450px;">
                                                <img id = "previewImg" src="vistas/assets/imagenes/no_image.jpg" 
                                                class = "border border-secondary" 
                                                style = "object-fit: contain; width:100%; height:100%;" alt="">
                                            </div>

                                        </div>

                                    </form>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="mdlMiraFoto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header bg-success py-2">

                <h6 class="modal-title" id="Titulo_modal_foto"> Visualizar Fotografia</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarMirarFoto">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <form class="needs-foto-validation" novalidate >

                                        <div class="col-12 col-lg-12 my-1">

                                            <div style="width: 100%; height : 600px;">
                                                <img id = "previewImgMirar" src="vistas/assets/imagenes/no_image.jpg" 
                                                class = "border border-secondary" 
                                                style = "object-fit: contain; width:100%; height:100%;" alt="">
                                            </div>

                                        </div>

                                    </form>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="mdlInformacionDeudas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

            <div class="modal-header bg-success py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Listado de Cuotas</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-10">

                                        <h4><label id="iptClienteCuotas">CLIENTE: </label></h4>
                                        <h6><label id="iptnrocuotas">NRO: </label></h6>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-success" id="btnGuardarCuota">
                                            <i class="fas fa-file-invoice-dollar"> Agregar Cuota [F10]</i>
                                        </button>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-12">

                                        <table id="lstCuotasCompra" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th >Opciones</th>
                                                    <th >Nro Compra</th>
                                                    <th >Proveedor</th>
                                                    <th >Fecha</th>
                                                    <th >Monto</th>  
                                                    <th >Borrar</th>
                                                        
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

        </div>

    </div>

</div>

<div class="modal fade" id="mdlAgregarCuota" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header bg-success py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Registrar Cuota</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStockAgregarCuota">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-0">

                                    <div class="col-md-8">

                                        <h5><label id="iptClienteCuotasIngreso">CLIENTE: </label></h5>

                                    </div>

                                    <div class="col-md-4">

                                        <button class="btn btn-danger" id="btnVolverCuotaIngreso">
                                            <h6> Volver [F8] </h6></i>
                                        </button>

                                        <button class="btn btn-success" id="btnGuardarCuotaIngreso">
                                            <h6> Agregar [F10] </h6></i>
                                        </button>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptMontoCuotaAgregar">Total de la Cuota</label>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <input type="text" min="0" name="iptMontoCuotaAgregar" id="iptMontoCuotaAgregar"
                                                    class="form-control form-control-sm" placeholder="S/. 0.00">

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        
                                            <label for="">Fecha:</label>

                                            <div class="input-group">

                                                <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div>
                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" id="iptFechaCuotaAgregar">

                                            </div>


                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <label for="iptHoraRegistro">Hora:</label>
                                                        
                                    <div class="col-md-7">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="iptHoraRegistro">

                                    </div>

                                    <div class="col-md-5">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selHoraRegistro">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptDetallesCotizaAgregar">Detalles u Observaciones </label>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <textarea name="iptDetallesCotizaAgregar" id="iptDetallesCotizaAgregar" class="form-control form-control-sm" placeholder="Sin Empleados"></textarea>

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

    </div>

</div>


<script>
    ////// VARIABLES GLOBALES //////
    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000
                });

    var tabla11, tabla21, tabla31;

    var isActionInProgress = false;

    var nro_boleta, id_compra_credito, Proveedor;

    $(document).ready(function(){

        Cargar_tables();

        Cargar_botones_tables();

        Cargar_botones_normal();

        $('#iptFechaCuotaAgregar').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })

        $("#iptFechaCuotaAgregar").val(moment().format('DD/MM/YYYY'));

        $('#iptHoraRegistro').inputmask('h:s t', {
            'placeholder': 'hh:mm AM/PM',
            'alias': 'datetime',
            'inputFormat': 'h:s t',
        });

        $('#iptHoraRegistro').click(function() {
            $(this).select();
        });
        
        $('#iptHoraRegistro').blur(function() {

            var valor = $(this).val();
    
            if (valor) {
                var partes = valor.split(":");
                var horas = parseInt(partes[0]);
                var minutos = parseInt(partes[1]);
                
                if (horas >= 12) {
                    horas -= 12;
                    if (horas === 0) {
                        horas = 12; // Si las horas son 0, ajusta a 12
                    }
                    var horasStr = horas < 10 ? "0" + horas : horas.toString();
                    var minutosStr = minutos < 10 ? "0" + minutos : minutos.toString();
                    $(this).val(horasStr + ":" + minutosStr);
                }
            }

        });  

        $("#iptMontoCuotaAgregar").val("S/. 0.00");

        $('#iptMontoCuotaAgregar').focus(function() {

            // Obtener el texto actual del campo
            var texto = $(this).val();

            // Remover el símbolo "S/. " y espacios en blanco
            var numero = texto.replace('S/. ', '').trim();

            // Mostrar solo el número en el campo
            $(this).val(numero);

            // Seleccionar todo el texto en el campo de entrada
            $(this).select();
        });

        $('#iptMontoCuotaAgregar').blur(function() {
            // Obtener el valor del campo
            var valor = $(this).val();

            // Convertir el valor a un número con 2 decimales
            var numero = parseFloat(valor).toFixed(2);

            // Agregar el símbolo "S/. " al valor y actualizar el campo
            $(this).val('S/. ' + numero);
        });
        
        $(document).on('keydown', function(event) {

            //EVENTOS DE LAS FLECHAS 

            if (event.keyCode === 40 && $('#content-automatico:visible').length > 0 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstComprasAlCredito tbody tr:visible');

                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstComprasAlCredito tbody tr.selected');

                        //$('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstComprasAlCredito tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-automatico:visible').length > 0 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstComprasAlCredito tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstComprasAlCredito tbody tr.selected');

                        //$('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstComprasAlCredito tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-cancelar:visible').length > 0) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstCompras tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstCompras tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstCompras tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-cancelar:visible').length > 0) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstCompras tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstCompras tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstCompras tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-automatico:visible').length > 0 && $('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstFotosCompra tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstFotosCompra tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstFotosCompra tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-automatico:visible').length > 0 && $('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstFotosCompra tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstFotosCompra tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstFotosCompra tbody tr:last').addClass('selected');
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


            //EVENTOS DE ENTER

            if (event.keyCode === 13 && $('#content-automatico:visible').length > 0 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstComprasAlCredito tbody tr.selected');

                    if ($selectedRow.length > 0) {

                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla21.row($selectedRow).data();
                        
                        if ($selectedRow.parents('tr').hasClass('selected')) {

                            $selectedRow.parents('tr').removeClass('selected');

                            $('#modulos').jstree("deselect_all", false);

                            $("#select_modulos option").remove();

                            $("#card-modulos").css("display", "none");

                            $('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                            nro_boleta = 0;

                        }else{

                            $('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                            $selectedRow.parents('tr').addClass('selected');
                            
                            $selectedRow.find('i').removeClass('far fa-circle').addClass('fas fa-circle');

                            console.log(data);

                            nro_boleta = data["nro_boleta"];
                            
                        }

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            };

            if (event.keyCode === 13 && $('#content-cancelar:visible').length > 0) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstCompras tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla21.row($selectedRow).data();
                        // Obtener el icono dentro de la fila seleccionada
                        var $icono = $selectedRow.find('i');
                        
                        // Verificar la clase actual del icono y cambiarla
                        if ($icono.hasClass('fas fa-circle')) {
                            $icono.removeClass('fas fa-circle').addClass('far fa-circle');
                        } else if ($icono.hasClass('far fa-circle')) {
                            $icono.removeClass('far fa-circle').addClass('fas fa-circle');
                        }
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            };

            if (event.keyCode === 13 && $('#content-automatico:visible').length > 0 && $('#mdlListadoFotos').is(':visible') && !$('#mdlMiraFoto').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstFotosCompra tbody tr.selected');

                    if ($selectedRow.length > 0) {

                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla22.row($selectedRow).data();

                        if ($selectedRow.parents('tr').hasClass('selected')) {

                            $selectedRow.parents('tr').removeClass('selected');

                            $('#modulos').jstree("deselect_all", false);

                            $("#select_modulos option").remove();

                            $("#card-modulos").css("display", "none");

                        }else{

                            $selectedRow.parents('tr').addClass('selected');

                            var id_compra_foto  = data["1"];

                            console.log("id_compra_foto : ",id_compra_foto)

                            DarNombreImagen(id_compra_foto);

                            $("#mdlMiraFoto").modal("show");
                        
                        }

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            };

            //EVENTO F2

            if (event.keyCode === 113 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlInformacionDeudas').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {
                        // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;

                        const activeElement = $('#tabs-asignar-compras-creditos .nav-link.active');
                        const nextElement = activeElement.parent().next().find('.nav-link');
                        console.log(nextElement)

                        if (nextElement.length) {
                            activeElement.removeClass('active').attr('aria-selected', 'false');
                            nextElement.addClass('active').attr('aria-selected', 'true').tab('show');
                            const tabId = nextElement.attr('href');
                            console.log(tabId)

                            $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                            $(tabId).addClass('show active').attr('aria-selected', 'true');

                            if (tabId === '#content-cancelar') {
                                $('#iptBuscarCliente').focus();
                            }else if (tabId === '#content-automatico') {
                                $('#iptNombreClienteDeuda').focus();
                            }

                        } else {
                            // Cambiar directamente al tab con ID "content-cancelar-tab"
                            const siguienteNav = $('#content-cancelar-tab');

                            activeElement.removeClass('active').attr('aria-selected', 'false');
                            siguienteNav.addClass('active').attr('aria-selected', 'true').tab('show');

                            const tabId = siguienteNav.attr('href');
                            $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                            $(tabId).addClass('show active').attr('aria-selected', 'true');

                            if (tabId === '#content-cancelar') {
                                $('#iptBuscarCliente').focus();
                            }else if (tabId === '#content-automatico') {
                                $('#iptNombreClienteDeuda').focus();
                            }
                        }

                        
                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 115 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlInformacionDeudas').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {
                    
                    tabla11.ajax.reload();
                    tabla21.ajax.reload();

                    Toast.fire({
                        icon: 'success',
                        title: " Actualizado Correctamente ",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 119 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlInformacionDeudas').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {

                    if($('#content-cancelar:visible').length > 0){

                        $("#btnVolverOriginal").click();

                    }else if($('#content-automatico:visible').length > 0){

                        $("#btnGuardarRecibos").click();

                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 121 && !$('#mdlListadoFotos').is(':visible') && !$('#mdlInformacionDeudas').is(':visible') && !$('#mdlAgregarFoto').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {

                    if($('#content-cancelar:visible').length > 0){

                        $("#btnGenerarDeudas").click();

                    }else if($('#content-automatico:visible').length > 0){

                        $("#btnAsignarCuotas").click();

                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }
            }

            // MODAL DE LA LISTA DE FOTOS                            
                                                        
            if (event.keyCode === 121 && $('#mdlListadoFotos').is(':visible')){

                event.preventDefault()
                if (!isActionInProgress) {

                    if($('#content-cancelar:visible').length > 0){

                        // $("#btnVolverOriginal").click();

                    }else if($('#content-automatico:visible').length > 0){

                        $("#btnGuardarFoto").click();

                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }

            // modal de AGREGAR LAS FOTOS 

            if (event.keyCode === 121 && $('#mdlAgregarFoto').is(':visible')){

                event.preventDefault()
                if (!isActionInProgress) {

                    if($('#content-cancelar:visible').length > 0){

                        // $("#btnVolverOriginal").click();

                    }else if($('#content-automatico:visible').length > 0){

                        $("#btnAgregarFoto").click();

                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 119 && $('#mdlAgregarFoto').is(':visible')){

                event.preventDefault()
                if (!isActionInProgress) {

                    if($('#content-cancelar:visible').length > 0){

                        // $("#btnVolverOriginal").click();

                    }else if($('#content-automatico:visible').length > 0){

                        $("#btnCerrarAgregado").click();

                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }

        });

    });

</script>
<script>

    function Cargar_tables(){

        tabla11 = $('#lstCompras').DataTable({
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnElegirCompra text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='far fa-circle fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {
                    targets: [3], // Columna 7
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir la cadena de fecha a un objeto de fecha
                            var fecha = new Date(data);

                            // Obtener las horas y los minutos
                            var horas = fecha.getHours();
                            var minutos = fecha.getMinutes();

                            // Convertir horas al formato de 12 horas
                            var ampm = horas >= 12 ? 'PM' : 'AM';
                            horas = horas % 12;
                            horas = horas ? horas : 12; // Las 0 horas deben ser 12 en el formato de 12 horas
                            minutos = minutos < 10 ? '0' + minutos : minutos;

                            // Crear la cadena de tiempo en el formato deseado
                            var tiempo = horas + ':' + minutos + ' ' + ampm;

                            return tiempo;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },

                {
                    targets: [4], // Columna 3
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear el número a moneda con dos decimales
                            var formatoMoneda = new Intl.NumberFormat('es-PE', {
                                style: 'currency',
                                currency: 'PEN'
                            }).format(data);

                            return "<strong>" + formatoMoneda + "</strong>" ;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },

                {
                    targets: [5,6],
                    visible: false,

                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseInt(rowData[5]);
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(220, 20, 60, 0.5)';      // Rojo con opacidad 0.7
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
                    }
                },

            ],
            ajax: {
                url: "ajax/compras.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //1:LISTAR PEDIDOS
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
                ajustarHeadersDataTables($('#lstCompras'));
            }
        });

        tabla21 = $('#lstComprasAlCredito').DataTable({
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnInformacionDeuda text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='far fa-circle fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {
                    targets: [3], // Columna 7
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir la cadena de fecha a un objeto de fecha
                            var fecha = new Date(data);

                            // Obtener las horas y los minutos
                            var horas = fecha.getHours();
                            var minutos = fecha.getMinutes();

                            // Convertir horas al formato de 12 horas
                            var ampm = horas >= 12 ? 'PM' : 'AM';
                            horas = horas % 12;
                            horas = horas ? horas : 12; // Las 0 horas deben ser 12 en el formato de 12 horas
                            minutos = minutos < 10 ? '0' + minutos : minutos;

                            // Crear la cadena de tiempo en el formato deseado
                            var tiempo = horas + ':' + minutos + ' ' + ampm;

                            return tiempo;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },

                {
                    targets: [4], // Columna 3
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear el número a moneda con dos decimales
                            var formatoMoneda = new Intl.NumberFormat('es-PE', {
                                style: 'currency',
                                currency: 'PEN'
                            }).format(data);

                            return "<strong>" + formatoMoneda + "</strong>" ;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },

                {
                    targets: [5,6],
                    visible: false,

                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseInt(rowData[5]);
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(220, 20, 60, 0.5)';      // Rojo con opacidad 0.7
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
                    }
                },

            ],
            ajax: {
                url: "ajax/compras.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //1:LISTAR PEDIDOS
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
                ajustarHeadersDataTables($('#lstComprasAlCredito'));
            }
        });

        tabla22 = $('#lstFotosCompra').DataTable({
            columnDefs: [
            ],
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
                ajustarHeadersDataTables($('#lstFotosCompra'));
            }
        });

        tabla23 = $('#lstCuotasCompra').DataTable({
            columnDefs: [

            ],
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
                ajustarHeadersDataTables($('#lstCuotasCompra'));
            }
        });

    }

    function Cargar_botones_tables(){

        $("#lstCompras tbody").on('click','.btnElegirCompra', function(){

            var data = tabla11.row($(this).parents('tr')).data();
        
            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                // $('#lstCompras i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');
                $(this).find('i').removeClass('fas fa-circle').addClass('far fa-circle');

            }else{

                // $('#lstCompras i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                // $("#mdlRegistrarTiempo").modal("show");
                
                $(this).find('i').removeClass('far fa-circle').addClass('fas fa-circle');

                // console.log(data)
                
            }

        });

        $("#lstComprasAlCredito tbody").on('click','.btnInformacionDeuda', function(){

            var data = tabla21.row($(this).parents('tr')).data();
        
            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

            }else{

                $('#lstComprasAlCredito i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                tabla21.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                // $("#mdlRegistrarTiempo").modal("show");
                
                $(this).find('i').removeClass('far fa-circle').addClass('fas fa-circle');

                console.log(data);

                nro_boleta = data["nro_boleta"];

                Proveedor = data["Proveedor"];

                id_compra_credito = data["id_compra_credito"];

                console.log("nro_boleta: "+ nro_boleta , " id_compra_credito : "+ id_compra_credito)


            }

        });

        $("#lstFotosCompra tbody").on('click','.btnVerImagen', function(){

            console.log(nro_boleta)

            var data = tabla22.row($(this).parents('tr')).data();

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla22.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                var id_compra_foto  = data["1"];

                console.log("id_compra_foto : ",id_compra_foto)

                DarNombreImagen(id_compra_foto);

                $("#mdlMiraFoto").modal("show");
            
            }

        });

        $("#lstFotosCompra tbody").on('click','.btnEliminarFoto2', function(){

            console.log(nro_boleta)

            var data = tabla22.row($(this).parents('tr')).data();

             if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla22.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                var id_compra_foto  = data["1"];

                console.log("id_compra_foto : ",id_compra_foto)

                Swal.fire({
                    title: 'Está seguro de Eliminar esta fotografia?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, deseo eliminarlo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {

                        $.ajax({
                            url: "ajax/compras.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 11, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                                'id_compra_foto': id_compra_foto,
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log(respuesta);

                                if(respuesta === "ok"){
                                    cargarFotos(nro_boleta)

                                    Toast.fire({
                                        icon: 'success',
                                        title: " Eliminado Correctamente ",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                }

                            }

                        });

                    }
                })
            
            }

        });

    }

    function Cargar_botones_normal(){

        ///// aqui de compras

        $("#btnActualizarCompras").click(function(){

            tabla11.ajax.reload();

            Toast.fire({
                icon: 'success',
                title: " Actualizado Correctamente ",
                showConfirmButton: false,
                timer: 1500
            });

        });
        
        $("#btnGenerarDeudas").click(function(){

            var nro_ultimo = "";

            $('#lstCompras tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla11.row($(this)).data();
                nro_ultimo = rowData[1]; // Selecciona la primera columna (columna 0)
                console.log("nro_ultimo : " + nro_ultimo);
            });

            if(nro_ultimo === ""){

                Toast.fire({
                    icon: 'warning',
                    title: " Seleccione 1 o mas elementos de la lista ",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else{

                $('#lstCompras tbody tr').filter(function() {
                    return $(this).find('i').hasClass('fas fa-circle');
                }).each(function() {
                    var rowData = tabla11.row($(this)).data();
                    var nro_boleta = rowData[1]; // Selecciona la primera columna (columna 0)
                    console.log('Información columna 1:', nro_boleta);

                    console.log("nro_ultimo : " + nro_ultimo + " - nro_boleta : "+ nro_boleta)

                    $.ajax({
                        url: "ajax/compras.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 3,
                            'nro_boleta' : nro_boleta,
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: " + respuesta)

                            if(respuesta === "ok"){
                                notificacion = "ok";
                            }else{
                                notificacion = "error";
                            }

                            if(notificacion === "ok" && nro_boleta == nro_ultimo){

                                tabla11.ajax.reload();
                                tabla21.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: " Agregados Correctamente ",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }else if(nro_boleta == nro_ultimo){

                                Toast.fire({
                                    icon: 'error',
                                    title: " Hubo un error ",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            } 

                        }
                    });

                });

            }

        }); 

        $("#btnVolverOriginal").click(function(){

            var nro_ultimo = "";

            $('#lstCompras tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla11.row($(this)).data();
                nro_ultimo = rowData[1]; // Selecciona la primera columna (columna 0)
                console.log("nro_ultimo : " + nro_ultimo);
            });

            if(nro_ultimo === ""){

                Toast.fire({
                    icon: 'warning',
                    title: " Seleccione 1 o mas elementos de la lista ",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else{

                $('#lstCompras tbody tr').filter(function() {
                    return $(this).find('i').hasClass('fas fa-circle');
                }).each(function() {
                    var rowData = tabla11.row($(this)).data();
                    var nro_boleta = rowData[1]; // Selecciona la primera columna (columna 0)
                    console.log('Información columna 1:', nro_boleta);

                    console.log("nro_ultimo : " + nro_ultimo + " - nro_boleta : "+ nro_boleta)

                    $.ajax({
                        url: "ajax/compras.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 4,
                            'nro_boleta' : nro_boleta,
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: " + respuesta)

                            if(respuesta === "ok"){
                                notificacion = "ok";
                            }else{
                                notificacion = "error";
                            }

                            if(notificacion === "ok" && nro_boleta == nro_ultimo){

                                tabla11.ajax.reload();
                                tabla21.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: " Agregados Correctamente ",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }else if(nro_boleta == nro_ultimo){

                                Toast.fire({
                                    icon: 'error',
                                    title: " Hubo un error ",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            } 

                        }
                    });

                });

            }

        });

        ///// aqui de compras al credito

        $("#btnActualizarComprasCreditos").click(function(){

            tabla21.ajax.reload();

            Toast.fire({
                icon: 'success',
                title: " Actualizado Correctamente ",
                showConfirmButton: false,
                timer: 1500
            });

        });

        $("#btnGuardarRecibos").click(function(){

            var nro_ultimo = "";

            $('#lstComprasAlCredito tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla21.row($(this)).data();
                nro_ultimo = rowData[1]; // Selecciona la primera columna (columna 0)
                cliente = rowData[2];
                console.log("nro_ultimo : " + nro_ultimo);
            });

            if(nro_ultimo === ""){

                Toast.fire({
                    icon: 'warning',
                    title: " Seleccione un elemento de la lista ",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else{

                var iptClienteFotos ="CLIENTE: "  + cliente
                var iptnrofoto = "NRO: "+nro_ultimo
                $("#iptClienteFotos").text(iptClienteFotos)
                $("#iptnrofoto").text(iptnrofoto)
                cargarFotos(nro_ultimo);
                $("#mdlListadoFotos").modal("show");
            }

        }); 

        $("#btnAsignarCuotas").click(function(){

            var nro_ultimo = "";
            var cliente = "";

            $('#lstComprasAlCredito tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla21.row($(this)).data();
                nro_ultimo = rowData[1]; // Selecciona la primera columna (columna 0)
                cliente = rowData[2];
                console.log("nro_ultimo : " + nro_ultimo);
            });

            if(nro_ultimo === ""){

                Toast.fire({
                    icon: 'warning',
                    title: " Seleccione un elemento de la lista ",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else{

                var iptClienteCuotas ="CLIENTE: "  + cliente
                var iptnrocuotas = "NRO: "+nro_ultimo
                $("#iptClienteCuotas").text(iptClienteCuotas)
                $("#iptnrocuotas").text(iptnrocuotas)
                cargarListados(nro_ultimo);
                $("#mdlInformacionDeudas").modal("show");

            }

        }); 

        ///// Aqui dentro del modal fotos

        $("#btnGuardarFoto").click(function(){

            $("#mdlListadoFotos").modal("hide")

            $("#mdlAgregarFoto").modal("show")

            var iptClienteAgregarFoto ="CLIENTE: "  + Proveedor

            $("#iptClienteAgregarFoto").text(iptClienteAgregarFoto)

        });

        $("#btnEliminarFoto").click(function(){

            Toast.fire({
                icon: 'warning',
                title: " Seleccione un elemento de la lista ",
                showConfirmButton: false,
                timer: 1500
            });

        });

        ///// Aqui dentro del modal Cuotas

        $("#btnGuardarCuota").click(function(){

            $("#mdlAgregarCuota").modal("show")

            $("#mdlInformacionDeudas").modal("hide")

            var hora = obtenerHoraExacta();

            var iptHoraRegistro = VolverHora(hora)

            var selHoraRegistro = obtenerValorAdicional(hora)

            $("#iptHoraRegistro").val(iptHoraRegistro);

            $("#selHoraRegistro").val(selHoraRegistro);

            var iptClienteCuotasIngreso ="CLIENTE: "  + Proveedor

            $("#iptClienteCuotasIngreso").text(iptClienteCuotasIngreso)

            setTimeout(function () {
                console.log("hola")
                $("#iptMontoCuotaAgregar").focus();
            }, 500); // Adjust the delay as needed

            

        });

        ///// Aqui dentro del modal agregar fotos

        $("#btnCerrarAgregarFoto").click(function(){

            $("#mdlListadoFotos").modal("show");

            $("#mdlAgregarFoto").modal("hide");

            $("#iptImagen").val("");

            $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")

        });

        $("#btnCerrarAgregado").click(function(){

            $("#mdlListadoFotos").modal("show");

            $("#mdlAgregarFoto").modal("hide");

            $("#iptImagen").val("");

            $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")

        });

        $("#btnAgregarFoto").click(function(){

            var imagen_valida = true;

            var forms = document.getElementsByClassName('needs-foto-validation');

            var validation = Array.prototype.filter.call(forms, function(form) {

                if (form.checkValidity() === true) {   

                    // console.log("Listo para registrar el producto")

                    var file = $("#iptImagen").val();

                    var ext = file.substring(file.lastIndexOf("."));

                    if(file != ""){
                        if (ext != ".jpg" && ext != ".png" && ext != ".gif" && ext != ".jpeg" && ext != ".webp") {
                            mensajeToast('error', "La extensión " + ext + " no es una imagen válida");
                            imagen_valida = false;
                        }

                        if (!imagen_valida) {
                            return;
                        }
                        
                        Swal.fire({
                            title: 'Está seguro de registrar esta fotografia?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, deseo registrarlo!',
                            cancelButtonText: 'Cancelar',
                        }).then((result) => {

                            if (result.isConfirmed) {
                                const inputImage = document.querySelector('#iptImagen');
                                
                                var datos = new FormData();
                                datos.append("accion", 7);
                                datos.append("nro_boleta", nro_boleta);
                                datos.append("id_compra_credito", id_compra_credito);
                                datos.append("imagen", $("#iptImagen").val());
                                datos.append("archivo[]",inputImage.files[0])

                                $.ajax({
                                    url: "ajax/compras.ajax.php",
                                    method: "POST",
                                    data: datos,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        if (respuesta == "ok") {

                                            Swal.fire({
                                                icon: 'success',
                                                title: "Agregado Correctamente"
                                            });

                                            $("#iptImagen").val("");

                                            $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
                                            $(".needs-foto-validation").removeClass("was-validated");

                                            cargarFotos(nro_boleta)

                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'El producto no se pudo registrar'
                                            });
                                        }

                                    }
                                });

                            }
                        })

                    }
                    
                }else {
                    console.log("No paso la validacion")
                }

                form.classList.add('was-validated');

            });
            
        });

        ///// Aqui dentro del modal agregar fotos mdlAgregarCuota 

        $("#btnVolverCuotaIngreso").click(function(){

            $("#mdlAgregarCuota").modal("hide")

            $("#mdlInformacionDeudas").modal("show")

            $("#iptMontoCuotaAgregar").val("S/. 0.00");

            $("#iptDetallesCotizaAgregar").val("");

        });

        $("#btnCerrarModalStockAgregarCuota").click(function(){

            $("#mdlAgregarCuota").modal("hide")

            $("#mdlInformacionDeudas").modal("show")

            $("#iptMontoCuotaAgregar").val("");

            $("#iptDetallesCotizaAgregar").val("");

        });

        $("#btnGuardarCuotaIngreso").click(function(){

            var monto_soles = $("#iptMontoCuotaAgregar").val();

            var fecha = $("#iptFechaCuotaAgregar").val();

            var hora = $("#iptHoraRegistro").val();

            var sel = $("#selHoraRegistro").val();

            var detalles = $("#iptDetallesCotizaAgregar").val();


            // Separar fecha en día, mes y año
            var partesFecha = fecha.split("/");
            var dia = partesFecha[0];
            var mes = partesFecha[1];
            var anio = partesFecha[2];

            // Separar hora en horas y minutos
            var partesHora = hora.split(":");
            var horas = parseInt(partesHora[0]);
            var minutos = parseInt(partesHora[1]);

            // Convertir a formato de 24 horas si es PM y no es medianoche
            if (sel === "PM" && horas !== 12) {
                horas += 12;
            } else if (sel === "AM" && horas === 12) {
                horas = 0; // Si es medianoche, ajustar a 0
            }

            // Crear un nuevo objeto de fecha y tiempo
            var fechaTimestamp = new Date(anio, mes - 1, dia, horas, minutos);

            // Obtener el timestamp
            var timestamp = anio + "-" + mes + "-" + dia + " " + horas + ":" + minutos + ":00";

            var montoNumerico = parseFloat(monto_soles.replace("S/. ", "").replace(",", "."));
        
            var fecha_cotiza = timestamp;

            console.log(fecha_cotiza);

            var monto = montoNumerico;

            $.ajax({
                url: "ajax/compras.ajax.php",
                method: "POST",
                data: {
                    'accion': 13, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                    'nro_boleta': nro_boleta,
                    'fecha_cotiza': fecha_cotiza,
                    'monto': monto,
                    'detalles': detalles,
                },
                dataType: 'json',
                success: function(respuesta) {

                    console.log(respuesta)

                    if (respuesta == "ok") {

                        Swal.fire({
                            icon: 'success',
                            title: "Agregado Correctamente"
                        });

                        cargarListados(nro_boleta);

                        $("#mdlAgregarCuota").modal("hide")

                        $("#mdlInformacionDeudas").modal("show")

                        $("#iptMontoCuotaAgregar").val("S/. 0.00");

                        $("#iptDetallesCotizaAgregar").val("");

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'El producto no se pudo registrar'
                        });
                    }

                }

            });


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

    function cargarListados(nro_ultimo){

        console.log("nro_ultimo : ", nro_ultimo);

        tabla23.clear().draw();

        $.ajax({
            url: "ajax/compras.ajax.php",
            method: "POST",
            data: {
                'accion': 5, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'nro_boleta': nro_ultimo,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);

                for(i = 0; i< respuesta.length; i++){

                    tabla23.row.add([
                        "<center>" +
                                        
                                        "<span class='btnVerCuotaDetalles text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-image fs-5'> </i> " +
                                        "</span>" +
                                    
                        "</center>",
                        respuesta[i]['nro_boleta'],
                        respuesta[i]['Proveedor'],
                        respuesta[i]['fecha_cotiza'],
                        respuesta[i]['monto'],
                        "<center>" +
                                        
                                        "<span class='btnEliminarCuota text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-trash fs-5'> </i> " +
                                        "</span>" +
                                    
                        "</center>",
                    ]).draw();

                }

            }
        });

    }

    function cargarFotos(nro_ultimo){

        tabla22.clear().draw();

        $.ajax({
            url: "ajax/compras.ajax.php",
            method: "POST",
            data: {
                'accion': 6, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'nro_boleta': nro_ultimo,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);

                for(i = 0; i< respuesta.length; i++){

                    tabla22.row.add([
                        "<center>" +
                                        
                                        "<span class='btnVerImagen text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-image fs-5'> </i> " +
                                        "</span>" +
                                    
                        "</center>",
                        respuesta[i]['id_compra_foto'],
                        respuesta[i]['nro_boleta'],
                        respuesta[i]['Proveedor'],
                        respuesta[i]['fecha_foto'],
                        "<center>" +
                                        
                                        "<span class='btnEliminarFoto2 text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-trash fs-5'> </i> " +
                                        "</span>" +
                                    
                        "</center>",
                    ]).draw();

                }

            }
        });

    }

    function previewFile(input) {
        const preview = document.getElementById('previewImg');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "vistas/assets/imagenes/no_image.jpg";
        }
    }

    function DarNombreImagen(id_compra_foto){

        $.ajax({
            url: "ajax/compras.ajax.php",
            method: "POST",
            data: {
                'accion': 8, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'id_compra_foto': id_compra_foto,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var direccion = "vistas/assets/imagenes/cuotas/" + respuesta[0]["imagen"];

                $("#previewImgMirar").attr("src",direccion)

            }
        });
        
    }

    function VolverHora(data) {
        var fecha = new Date(data);
        var hora = fecha.getHours();
        var minutos = fecha.getMinutes();

        // Convertir a formato de 12 horas
        var hora12 = hora % 12 || 12; // Si es 0, convertir a 12 en vez de 0
        var am_pm = hora >= 12 ? 'PM' : 'AM'; // Determinar si es AM o PM

        // Formatear los minutos
        var minutosFormateados = minutos < 10 ? '0' + minutos : minutos;

        // Crear la hora formateada
        var horaFormateada = hora12 + ':' + minutosFormateados;

        return horaFormateada;
    }

    function obtenerHoraExacta() {
        const ahora = new Date();
        
        const año = ahora.getFullYear();
        const mes = String(ahora.getMonth() + 1).padStart(2, '0');
        const dia = String(ahora.getDate()).padStart(2, '0');
        const horas = String(ahora.getHours()).padStart(2, '0');
        const minutos = String(ahora.getMinutes()).padStart(2, '0');
        const segundos = String(ahora.getSeconds()).padStart(2, '0');
        
        return `${año}-${mes}-${dia} ${horas}:${minutos}:${segundos}`;
    }

    // Función para determinar el valor adicional (0 o 1)
    function obtenerValorAdicional(data) {
        var fecha = new Date(data);
        var valorAdicional = fecha.getHours() >= 12 ? "PM" : "AM";
        return valorAdicional;
    }

</script>