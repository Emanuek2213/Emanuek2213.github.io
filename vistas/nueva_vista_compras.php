<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Compras 0</h2>

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

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-compras" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-proveedores-tab" data-toggle="pill" href="#content-proveedores" role="tab" aria-controls="content-proveedores" aria-selected="false">Lista de Proveedores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-RegistrarComprar-tab" data-toggle="pill" href="#content-RegistrarComprar" role="tab" aria-controls="content-RegistrarComprar" aria-selected="false">Nuevo Compra</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-compras">

            <div class="tab-pane fade active show mt-4 px-4" id="content-proveedores" role="tabpanel" aria-labelledby="content-proveedores-tab">

                <h4>Listado de Proveedores</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->
                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            <h4>PROVEEDOR: <label id = "iptNombreProveedor_0"> VARIOS </label></h4>

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 33%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarProveedor" class="form-control" data-index="[3,4]" autocomplete="off">
                                                    <label for="iptBuscarProveedor">Nombre o Razon social Proveedor</label>
                                                </div>

                                                <div style="width: 33%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarProveedor2" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptBuscarProveedor2">Dni o Ruc</label>
                                                </div>

                                                <div style="width: 33%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarProveedor3" class="form-control" data-index="5" autocomplete="off">
                                                    <label for="iptBuscarProveedor3">Direccion</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstProveedores" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id</th>
                                                    <th>Dni o Ruc</th>
                                                    <th>Nombre</th>
                                                    <th>Razon social</th>
                                                    <th>Direccion</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-RegistrarComprar" role="tabpanel" aria-labelledby="content-RegistrarComprar-tab">

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

                                        <div class="row mb-3">

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

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <!-- <h5 class="card-header py-1 bg-gray text-white text-center">
                                    Total Venta: S./ <span id="totalVentaRegistrarVista1">0.00</span>
                                </h5> -->

                                

                                <div class="card-body p-2">

                                    <!-- SERIE Y NRO DE BOLETA -->
                                    <div class="form-group">

                                        <div class="row mb-3">


                                            <div class="col-md-12">

                                                <label for="iptNombreProveedor_venta">Razon Comercial</label>

                                                <input type="text" min="0" name="iptNombreProveedor_venta" id="iptNombreProveedor_venta"
                                                    class="form-control form-control-sm" placeholder="Razon Comercial" disabled>

                                            </div>

                                            <div class="col-md-12">

                                                <label for="iptRazonSocialProveedor_venta">Razon Social</label>

                                                <input type="text" min="0" name="iptRazonSocialProveedor_venta" id="iptRazonSocialProveedor_venta"
                                                    class="form-control form-control-sm" placeholder="Razon Social" disabled>

                                            </div>

                                            <div class="col-md-12">

                                                <label for="iptDireccionProveedor_venta">Direccion</label>

                                                <input type="text" min="0" name="iptDireccionProveedor_venta" id="iptDireccionProveedor_venta"
                                                    class="form-control form-control-sm" placeholder="Direccion" disabled>

                                            </div>

                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-md-4">

                                                <label for="selTipoDni">Eleccion Identificacion</label>

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="selTipoDni">
                                                    
                                                    <option value="1" selected="true">DNI - DOC. NACIONAL DE IDENTIDAD</option>
                                                    <option value="2">CE - CARNET DE EXTRANJERIA</option>
                                                    <option value="3">RUC - REG. UNICO DE CONTRIBULLENTES</option>
                                                    <option value="4">PAS - PASAPORTE</option>
                                                    <option value="5">PN - PARTIDAD DE NACIMIENTO</option>
                                                    <option value="5">OTR - OTROS</option>
                                                </select>

                                                <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                    Debe Seleccionar un Tipo de Pago
                                                </span>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="iptRucProveedor">Numero de Identificacion</label>

                                                <input type="text" min="0" name="iptEfectivo" id="iptRucProveedor"
                                                    class="form-control form-control-sm" placeholder="Numero de Identificacion" disabled>
                                            </div>

                                            <div class="col-md-4">

                                                <label for="iptEncargado">Persona que hara la compra</label>

                                                <input type="text" class="form-control form-control-sm" id="iptEncargado"
                                                    placeholder="Nombre o Alias">
                                            </div>

                                            <div class="col-md-6">

                                                <label for="selTipoPago">Tipo de pago</label>

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="selTipoPago">
                                                    <option value="0">Seleccione Tipo de Pago</option>
                                                    <option value="1" selected="true">Efectivo</option>
                                                    <option value="2">Yape</option>
                                                    <option value="3">Plin</option>
                                                    <option value="4">Transferencia</option>
                                                    <option value="5">Deuda</option>
                                                </select>

                                                <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                    Debe Seleccionar un Tipo de Pago
                                                </span>

                                            </div>

                                            <div class="col-md-6">

                                                <label for="selBolFac">Boleta o Factura?</label>

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="selBolFac">
                                                    <option value="0">Elige una opcion</option>
                                                    <option value="1" selected="true">Boleta (Importante Informacion Contable) </option>
                                                    <option value="2">Factura (Importante Informacion Contable)</option>
                                                    <option value="3">Nota de Venta (Informacion Informal)</option>
                                                </select>

                                                <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                    Debe Seleccionar un Tipo de Pago
                                                </span>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Fecha</label>

                                                <div class="row">

                                                    <div class="col-md-8">

                                                        <input type="text" class="form-control form-control-sm" id="ventas_desde" readonly> 
                                                        
                                                    </div>

                                                    <div class="col-md-4">

                                                        <button class="btn btn-info btn-sm btn-block" id="mostrarCalendario">Mostrar Calendario</button>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Fecha</label>

                                                <div class="row">

                                                    <div class="col-md-8">

                                                        <input type="text" class="form-control form-control-sm" id="ventas_pago" readonly> 
                                                        
                                                    </div>

                                                    <div class="col-md-4">

                                                        <button class="btn btn-info btn-sm btn-block" id="mostrarCalendariodeuda">Mostrar Calendario</button>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="iptNumeroDocumento">Numero de Documento (Boleta o Factura)</label>

                                                <input type="text" min="0" name="iptNumeroDocumento" id="iptNumeroDocumento"
                                                    class="form-control form-control-sm" placeholder="Numero de la boleta, nota de compra, factura o ticket">

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Hora Salida</label>

                                                <!-- <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM:ss" id="fecha_salida"> -->

                                                <div class="row">
                                                    
                                                    <div class="col-md-8">

                                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="fecha_salida">

                                                    </div>

                                                    <div class="col-md-4">

                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                            id="sel_PM_salida">
                                                            <option value="PM" selected="true">PM</option>
                                                            <option value="AM">AM</option>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Hora Regreso</label>
                                                
                                                <!-- <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM:ss" id="fecha_regreso"> -->
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-md-8">

                                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="fecha_regreso">

                                                    </div>

                                                    <div class="col-md-4">

                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                            id="sel_PM_regreso">
                                                            <option value="PM" selected="true">PM</option>
                                                            <option value="AM">AM</option>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <label for="">Tiempo estimado</label>
                                                
                                                <!-- <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM:ss" id="fecha_regreso"> -->
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">

                                                        <input type="text" class="form-control form-control-sm" id="diferencia_minutos" disabled>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <label for="iptComentario">Comentarios u Opiniones</label>
                                                <textarea name="iptComentario" id="iptComentario" class="form-control form-control-sm"
                                                    rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>
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
                                                    <h5>PROVEEDOR: <label id = "iptNombreProveedor"> VARIOS </label></h5>

                                                    
                                                </div>

                                                <div class="col-12 col-lg-4">
                                                    <button type="button" class="btn btn-warning btn-sm btn-block" id="btnRegistroCotizacion">
                                                        <i class="fas fa-file"></i> Sacar Cotizacion</button>
                                                </div>

                                                <!-- <div class="col-12 col-lg-3">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroEsp">
                                                        <i class="fas fa-biking"></i> - Registrar e Imprimir (Ticket) [F8]</button>
                                                </div> -->

                                                <div class="col-12 col-lg-10">
                                                    <h6>Direccion: <label id = "iptDireccionProveedor"> Sin Direccion </label></h6>

                                                    
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
                                            <button class="btn btn-primary" id="btnRegistrar1">
                                                <i class="fas fa-shopping-cart"></i> Registrar [f10]
                                            </button>
                                            <button class="btn btn-danger" id="btnVaciarListado1">
                                                <i class="far fa-trash-alt"></i> Vaciar
                                            </button>
                                            <button class="btn btn-secondary" id="btnCopiar1">
                                                <i class="far fa-copy"></i> Copiar
                                            </button>
                                            <button class="btn btn-success" id="btnPegar1">
                                                <i class="far fa-clipboard"></i> Pegar
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow ">
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

                                        <h6>(L: planchas, F: fardos, B: cajas, M: millares, C: cientos, P: paquetes, U: unidades)</h6>
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

<div class="modal fade" id="mdlProductosCatalogoxProveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Historal del Proveedor</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalCatalogoxProveedor">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="d-none d-md-flex col-md-12 mb-3">
                        <div style="width: 100%;" class="form-floating mx-1">
                            <input type="text" id="iptNombreProducto" class="form-control" data-index="2" autocomplete="off">
                            <label for="iptNombreProducto">Nombre del producto</label>
                        </div>
                    </div>

                    <div class="d-block d-sm-none">

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">
                        <div class="col-md-12">

                            <table id="lstProductosCatalogoxProveedor" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">Codigo</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-center">Solicitud</th>
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

            <div class="modal-footer">

                <span class="text-end me-auto" style="color: red;">
                    <h2><strong>PRODUCTOS :</strong> <strong><span id="cantidadProductos" style="color: red;">0</span></strong></h2>
                </span>
                
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnAgregarPorductoxProveedor">Agregar productos</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlActualizarProveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Registrar Tiempo</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">



                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptRasonSocial"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Razon Social</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptRasonSocial"
                                    name="iptRasonSocial" placeholder="Razon Social" required>
                                <div class="invalid-feedback">Debe ingresar la Razon Social</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptRasonComercial"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Razon Comercial</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptRasonComercial"
                                    name="iptRasonComercial" placeholder="Razon Comercial" required>
                                <div class="invalid-feedback">Debe ingresar la Razon Comercial</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptIdentificacion"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Identificacion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptIdentificacion"
                                    name="iptIdentificacion" placeholder="Identificacion" required>
                                <div class="invalid-feedback">Debe ingresar la Identificacion</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptDireccion"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Direccion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptDireccion"
                                    name="iptDireccion" placeholder="Direccion" required>
                                <div class="invalid-feedback">Debe ingresar la Direccion</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptTelefono"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Telefono</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptTelefono"
                                    name="iptTelefono" placeholder="Telefono" required>
                                <div class="invalid-feedback">Debe ingresar la Telefono</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptDetalles"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Detalles</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptDetalles"
                                    name="iptDetalles" placeholder="Código de Barras" required>
                                <div class="invalid-feedback">Debe ingresar la Detalles</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCorreo"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Correo</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCorreo"
                                    name="iptCorreo" placeholder="Detalles" required>
                                <div class="invalid-feedback">Debe ingresar la Correo</div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">

                            <label class="" for="selCuenta"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Cuento</span><span class="text-danger">*</span>
                            </label>

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCuenta">
                                <option value="0" selected="true">Seleccione Documento</option>
                                <option value="0">Cliente</option>
                                <option value="1">Proveedor</option>
                            </select>

                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                Debe Seleccionar una opcion
                            </span>

                        </div>



                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarCliente">Guardar Cambios Cliente</button>
            </div>

        </div>
    </div>
</div>

<!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Producto</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">

                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->
                    <div class="row">

                        <!-- Columna para registro del codigo de barras -->
                        <div class="col-12 col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Código de Barras</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCodigoReg"
                                    name="iptCodigoReg" placeholder="Código de Barras" required readonly>
                                <div class="invalid-feedback">Debe ingresar el codigo de barras</div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class= "containter" style="border: 2px solid black; padding: 10px; background-color: white; margin-bottom: 10px;">
                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group mb-2">
                                            <label class="" for="selCategoriaReg"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Categoria</span><span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control form-control-sm" id="selCategoriaReg"
                                                name="selCategoriaReg" placeholder="Código de Barras" required onclick="this.select()">
                                            <div class="invalid-feedback">Ingrese un texto para buscar</div>
                                        </div>
                                    </div>

                                    <!-- Columna para registro de la descripción del producto -->
                                    <div class="col-12  col-lg-12">
                                        <div class="form-group mb-2">
                                            <label class="" for="iptDescripcionReg"><i
                                                    class="fas fa-file-signature fs-6"></i> <span
                                                    class="small">Descripción</span><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-sm" id="iptDescripcionReg"
                                                placeholder="Descripción" required>
                                            <div class="invalid-feedback">Debe ingresar la descripción</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group mb-2">
                                            <label class="" for="iptUbicacionReg"><i class="fas fa-map-marker fs-6"></i>
                                                <span class="small">Ubicacion</span><span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control form-control-sm" id="iptUbicacionReg"
                                                name="iptUbicacionReg" placeholder="Ubicacion del producto" required>
                                            <div class="invalid-feedback">Ingrese un texto para buscar</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-12">

                                        <button type="button" class="btn btn-success mt-3 w-100" id="btnRegistrarPrecios">Gestionar Precios</button>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class= "containter" style="border: 2px solid black; padding: 10px; background-color: white; margin-bottom: 10px;">

                                    <div class="row" >
                                        <!-- Columna para registro del Stock del producto -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                                    <span class="small">Stock</span><span class="text-danger">*</span></label>
                                                <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                                    placeholder="Stock" required>
                                                <div class="invalid-feedback">Debe ingresar el stock</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Minimo de Stock -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMinimoStockReg"><i
                                                        class="fas fa-minus-circle fs-6"></i> <span class="small">Mínimo
                                                        Stock</span><span class="text-danger">*</span></label>
                                                <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                                    placeholder="Mínimo Stock" required>
                                                <div class="invalid-feedback">Debe ingresar el minimo stock</div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class= "containter" style="border: 2px solid black; padding: 10px; background-color: white; margin-bottom: 10px;">

                                <div class="row">

                                    <div class="col-12 col-lg-6">
                                        <button type="button" class="btn btn-danger mt-3 w-100"
                                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar Cambios</button>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <button type="button" class="btn btn-primary mt-3 w-100"
                                            id="btnGuardarProducto">Guardar Producto</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<!-- AQUI SON LOS SCRIPT  -->
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    //VARIABLES GLOBALES
    var itemProducto = 1;
    var idBoleta2 , idProveedor0 , cantidad ;
    var isActionInProgress = false, isActionInProgress2 = false;
    var productos_por_agregar = new Array();
    var isSwalOpen = false;
    var contador = 0;
    var ajaxEnProgreso = false;

    $(document).ready(function(){    
        CargarNroBoleta();
        CargarTables();
        cargarBotonesExteriores();
        CargarHoras();
    })

    
    $(document).on('keydown', function(event) {

     

    });

</script>

<script>

    function CargarTables(){

        tabla01= $("#lstProveedores").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarProveedor text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEditarProveedor text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Proveedor'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEliminarProveedor text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Proveedor'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
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
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/clientes.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 14 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstProveedores'));
                cargarBotonesTabla01();
            }
        });

        $("#iptBuscarProveedor").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptBuscarProveedor2").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptBuscarProveedor3").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        tabla11= $('#lstProductosVenta').DataTable({
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

            $('#lstProductosVenta tbody').off('click', 'td.editable');
            $('#lstProductosVenta tbody').off('blur', 'td.editable');
            $('#lstProductosVenta tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstProductosVenta tbody').on('click', 'td.editable', function(){
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
                    Seleccion(this);


            });

            $('#lstProductosVenta tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla11.row($(this).parents('tr')).data();

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

                    console.log("matchNumeroTexto : ",matchNumeroTexto , "idBoleta2 : " , idBoleta2)

                    if (matchNumeroTexto) {
                        console.log("matchNumeroTexto deberia segui aqui ")
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

                                console.log(respuesta);
                                // Imprimir el mensaje en la consola según el texto
                                switch (texto) {
                                    case 'F':
                                        console.log("CASO F");
                                        palabra = "precio_fardo";
                                        mayus = "Fardos";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);
                                        break;

                                    case 'L':
                                        console.log("CASO L");
                                        palabra = "precio_plancha";
                                        mayus = "Planchas";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);
                                        break;
                                        
                                    case 'M':
                                        console.log("CASO M");
                                        palabra = "precio_millar";
                                        mayus = "Millares";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);
                                       break;
                                    // Agrega más casos según las letras que necesites manejar
                                    case 'B':
                                        console.log("CASO B");
                                        palabra = "precio_caja";
                                        mayus = "Cajas";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);    
                                        break;
                                    case 'D':
                                        console.log("CASO D");
                                        palabra = "precio_docena";
                                        mayus = "Docenas";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus); 
                                        break;
                                    case 'C':
                                        console.log("CASO C");
                                        palabra = "precio_ciento";
                                        mayus = "Cientos";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus); 
                                        break;
                                    case 'P':
                                        console.log("CASO P");
                                        palabra = "precio_paquetito";
                                        mayus = "Paquetitos";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);    
                                        break;
                                    case 'U':
                                        console.log("CASO U");
                                        palabra = "precio_unidad";
                                        mayus = "Unidades";
                                        Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad,mayus);   
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

            });

            $('#lstProductosVenta tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 187 || keyCode === 107) { // Tecla DERECHA
                    $(this).text((currentValue + 1).toFixed(2));
                    Seleccion(this);
                    
                } else if (keyCode === 189 || keyCode === 109) { // Tecla IZQUIERDA
                    $(this).text(Math.max(0, currentValue - 1).toFixed(2));
                    Seleccion(this);

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
                            Movimiento($currentCell,cellIndex,texto_cantidad,$nextEditableCell)
                        }
                    }else{
                        console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstProductosVenta tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            Movimiento($currentCell,cellIndex,texto_cantidad,$firstEditableCell)
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
                            Movimiento($currentCell,cellIndex,texto_cantidad,$prevEditableCell)

                        }
                    } else {
                        // Si se encuentra en la primera fila, moverse a la última fila
                        var $lastRow = $('#lstProductosVenta tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }
                        if ($lastEditableCell.length) {
                            Movimiento($currentCell,cellIndex,texto_cantidad,$lastEditableCell)
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

                        Seleccion($nextEditableCell[0])
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

                        Seleccion($prevEditableCell[0])
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

    }

    function Examinacion(palabra,respuesta,currentRow,tabla11,numero,Total,texto_cantidad){
        if(respuesta[palabra]>0){
            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + mayus);
            tabla11.cell(currentRow, 6).data("S./ "+parseFloat(respuesta[palabra]).toFixed(2));
            var Total = parseFloat(data[5]) * parseFloat(respuesta[palabra]).toFixed(2);  
            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));    
        }else{
            tabla11.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
            tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
        }
        recalcularTotales();
    }

    function Movimiento($currentCell,cellIndex,texto_cantidad,$nextEditableCell){
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

        Seleccion($nextEditableCell[0])

        $nextEditableCell.attr('contenteditable', 'true');
    }

    function Seleccion($this){
        var range = document.createRange();
        range.selectNodeContents($this);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    }

    function cargarBotonesTabla01(){

        $("#content-proveedores").on('click', '.btnSeleccionarProveedor', function() {

            document.getElementById("cantidadProductos").textContent = 0;

            var data = tabla01.row($(this).parents('tr')).data();

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta2 = "";
                
                var elementoProveedor = document.getElementById("iptNombreProveedor");
                var elementoProveedor2 = document.getElementById("iptDireccionProveedor");
                var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");

                if (elementoProveedor) {
                    elementoProveedor.textContent = "VARIOS";
                }

                if (elementoProveedor_0) {
                    elementoProveedor_0.textContent = "VARIOS";
                }

                if(elementoProveedor2){
                    elementoProveedor2.textContent = "Sin Direccion";
                }

                $("#card-modulos").css("display", "none");

            }else{

                tabla01.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                console.log(data);

                idBoleta2 = data[3];

                var Direccion = data[5];

                idProveedor0 = data[3];

                var social  = data[4];

                var proveedor = data[3];

                var Dni_Proveedor = data[2].trim();

                if(data[2] === "SIN IDENTIFICAC"){

                    
                    var title = "(esta persona no tiene identificacion registrado)"
                    
                }else{
                    var title = "";

                }

                //console.log(idBoleta2)
                console.log("aqui");

                Swal.fire({
                    icon: 'warning',
                    title: 'Seguro de Continuar? '+ title,
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,
                }).then((result) => {

                    if(result.isConfirmed == true){

                        Dni_Proveedor = "0000000001";

                        CambiarValores_ventana_1(Dni_Proveedor,proveedor,social,Direccion);
                        
                    }else{
                        
                    }
                })


            }
        });

        $("#content-proveedores").on('click', '.btnEditarProveedor', function() {

            $("#mdlActualizarProveedor").modal('show');

            var data = tabla01.row($(this).parents('tr')).data();

            //console.log(data);

            $("#iptRasonSocial").val(data["Razon"].trim());
            $("#iptRasonComercial").val(data["Nombres"].trim());
            $("#iptIdentificacion").val(data["Identificacion"].trim());
            $("#iptDireccion").val(data["Direccion"].trim());

            Puesto = data[1];

        });

        $("#content-proveedores").on('click', '.btnEliminarProveedor', function() {

            var data = tabla01.row($(this).parents('tr')).data();

            //console.log(data);

            var idProveedor = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Eliminar a'+ data[3] + "?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, deseo hacerlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {

                if (result.isConfirmed){

                    $.ajax({
                        async:false,
                        url:"ajax/clientes.ajax.php",
                        method: 'POST',
                        data: {
                            accion: 5,
                            idProveedor: idProveedor
                        },
                        dataType: 'json',
                        success: function (respuesta){

                            console.log("respuesta 1 : " ,respuesta[0][0]);

                            var NombreProveedor = respuesta[0][0];
                            NombreProveedor = NombreProveedor.trim();
                            
                            $.ajax({
                                async:false,
                                url:"ajax/clientes.ajax.php",
                                method: 'POST',
                                data: {
                                    accion: 6,
                                    NombreProveedor: NombreProveedor
                                },
                                dataType: 'json',
                                success: function (respuesta){

                                    console.log("respuesta 2 : " ,respuesta);

                                    if(respuesta === "ok"){

                                        $.ajax({
                                            async:false,
                                            url:"ajax/clientes.ajax.php",
                                            method: 'POST',
                                            data: {
                                                accion: 7,
                                                NombreProveedor: NombreProveedor
                                            },
                                            dataType: 'json',
                                            success: function (respuesta){

                                                console.log("respuesta 3 : " ,respuesta);

                                                for(var i = 0; i< respuesta.length;i++){

                                                    var idBoleta = respuesta[i][0];

                                                    $.ajax({
                                                        async:false,
                                                        url:"ajax/clientes.ajax.php",
                                                        method: 'POST',
                                                        data: {
                                                            accion: 8,
                                                            idBoleta: idBoleta
                                                        },
                                                        dataType: 'json',
                                                        success: function (respuesta){

                                                            console.log("respuesta 4 : " ,respuesta);
                                                            
                                                            

                                                        }
                                                    })
                                                }
                                                

                                            }
                                        });

                                        $.ajax({
                                            async:false,
                                            url:"ajax/clientes.ajax.php",
                                            method: 'POST',
                                            data: {
                                                accion: 9,
                                                idProveedor: idProveedor
                                            },
                                            dataType: 'json',
                                            success: function (respuesta){
                                                
                                                console.log("respuesta 5 : " ,respuesta);
                                                tabla01.ajax.reload()

                                                if(respuesta.length != 0){
                                                    console.log("respuesta 5 : ")
                                                }

                                            }
                                        });

                                    }
                                    
                                }
                            })
                            
                        }
                    })

                }

                
            });

        });

        $('#lstProductosVenta tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla11);
        });

        $('#lstProductosVenta tbody').on('click', '.btnEliminarproducto', function() {

            var data = tabla11.row($(this).parents('tr')).data();


            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[4] + ' " del registro actual? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){
                    tabla11.row($(this).parents('tr')).remove().draw();
                    recalcularTotales();
                }
            })
        });

        $('#lstProductosVenta tbody').on('click', '.btnEditarproducto', function() {

            var data = tabla11.row($(this).parents('tr')).data();
            filaEliminar = tabla11.row($(this).parents('tr'));
            var codigo = data[1]
            idProductoEdit = codigo;

            $("#mdlGestionarProducto").modal('show');

            RellenarParaEditar(codigo);
        
        });

    }

    function cargarBotonesExteriores(){

        $("#btnAgregarPorductoxProveedor").on("click",function() {
            cantidad =0;
            $("#iptNombreProducto").focus()
            colIndex2 = 5;
            rowIndex2 = 0;
            // Itera sobre las filas de la tabla
            var table = $('#lstProductosCatalogoxProveedor').DataTable();

            // Iteramos sobre todas las filas del DataTable
            table.rows({ search: 'none' }).every(function() {
                // Obtenemos los datos de la fila actual
                var data = this.data();

                // Accedemos al valor de la columna específica que te interesa (por ejemplo, columna 6)
                var newValue = parseFloat(data[6]); // Cambia 6 por el índice de la columna que necesitas

                // Verificamos si el valor es un número mayor que 0
                if (!isNaN(newValue) && newValue > 0) {
                    cantidad++; // Incrementamos la cantidad si se cumple la condición

                    // Eliminar el producto existente de productos_por_agregar si tiene el mismo código (data[1])
                    productos_por_agregar = productos_por_agregar.filter(function(item) {
                        return item[0] !== data[1];
                    });

                    // Agregar el producto si newValue no es 0
                    if (parseFloat(newValue) !== 0) {
                        productos_por_agregar.push([data[1], data[3], newValue, data[4]]);
                    }
                }
            });

            console.log("productos_por_agregar : ", productos_por_agregar)

            mostrarCambios();
            $("#content-RegistrarComprar-tab").click();
            Deslizar()
            $("#iptCodigoVenta").focus();
        });

        $("#btnGuardarProducto").on("click",function() {

            var datosEspecificos = obtenerDatosCeldasEspecificas();

            var codigo = $("#iptCodigoReg").val();
            var descripcion = $("#iptDescripcionReg").val();

            var utilidad = 0;

            var precio_unidad           =  datosEspecificos[0];
            var precio_paquetito        =  datosEspecificos[1];
            var precio_docena           =  datosEspecificos[2];
            var precio_ciento           =  datosEspecificos[3];
            var precio_millar           =  datosEspecificos[4];
            var precio_caja             =  datosEspecificos[5];
            var precio_fardo            =  datosEspecificos[6];
            var precio_plancha          =  datosEspecificos[7];


            var precio_unidad_2           =  datosEspecificos[8];
            var precio_paquetito_2        =  datosEspecificos[9];
            var precio_docena_2           =  datosEspecificos[10];
            var precio_ciento_2           =  datosEspecificos[11];
            var precio_millar_2           =  datosEspecificos[12];
            var precio_caja_2             =  datosEspecificos[13];
            var precio_fardo_2            =  datosEspecificos[14];
            var precio_plancha_2          =  datosEspecificos[15];

            var cantidad_ciento         =  datosEspecificos[16];
            var cantidad_millar         =  datosEspecificos[17];
            var cantidad_caja           =  datosEspecificos[18];
            var cantidad_fardo          =  datosEspecificos[19];
            var cantidad_plancha        =  datosEspecificos[20];

            var stock = $("#iptStockReg").val();
            var min_stock = $("#iptMinimoStockReg").val();
            var direccion = $("#iptUbicacionReg").val();

            var categoria_texto = $("#selCategoriaReg").val()
            var id_categoria_producto = parseInt(categoria_texto)


            EdicionProducto(codigo,descripcion,precio_unidad,precio_paquetito,precio_docena,precio_ciento,precio_millar,precio_caja,precio_fardo,precio_plancha,precio_unidad_2,precio_paquetito_2,precio_docena_2,precio_ciento_2,precio_millar_2,precio_caja_2,precio_fardo_2,precio_plancha_2
            ,cantidad_ciento,cantidad_millar,cantidad_caja,cantidad_fardo,cantidad_plancha,stock,min_stock,direccion,id_categoria_producto)

            $("#mdlGestionarProducto").modal("hide");



        });

        $("#btnRegistrarPrecios").on("click", function(){

            $("#mdlGestionarProducto").modal("hide")

            $("#mdlGestionarPrecios").modal("show")

        });

        $("#btnRegresarPrecios").on('click', function() {

            $("#mdlGestionarProducto").modal("show")

            $("#mdlGestionarPrecios").modal("hide")

        })

        $("#btnPegar1").on('click', function(){
            PegarTabla11();
        })

        $("#btnCopiar1").on('click', function() {
            //console.log("se presiono el btn copiar 1")
            CopiarTabla11();

        });

        $("#btnVaciarListado1").on("click", function(){

            var data = tabla11.row($(this).parents('tr')).data();

            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar el registro actual? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){
                    tabla11.clear().draw();
                    $("#totalVenta").html("");
                    $("#totalVenta").html("0.00");

                    $("#totalVentaRegistrarVista1").html("");
                    $("#totalVentaRegistrarVista1").html("0.00");

                    $("#iptCodigoVenta").val("");
                }
            })
            
        });

        $("#btnRegistroCotizacion").on("click", function(){

            ventas_desde = $("#ventas_desde").val();

            ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;
            
            var count = 0;
            var cancelacion = 0;

            fecha_regreso = $("#fecha_regreso").val() + " " + $("#sel_PM_regreso").val();

            fecha_regreso = convertirHora(fecha_regreso);

            fecha_regreso = ventas_desde + " " + fecha_regreso ;

            fecha_salida = $("#fecha_salida").val() + " " + $("#sel_PM_salida").val();

            fecha_salida = convertirHora(fecha_salida);

            fecha_salida = ventas_desde + " " + fecha_salida ;

            console.log("fecha_regreso : ",fecha_regreso , "fecha_salida : ",fecha_salida)

            if (tabla11.rows().data().any()) {

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

                var tipo_documento = $("#selBolFac").val();

                var iptNumeroDocumento = $("#iptNumeroDocumento").val();

                if(tipo_documento == 2 &&  iptNumeroDocumento === ""){

                    Swal.fire({
                        icon: 'warning',
                        title: 'Las facturas deben registrarse con un numero porfavor completelo y vuelva a intentar',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                        confirmButtonText: "ESTA BIEN",
                    })

                    return 0;
                
                    

                }

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

                            HacerVentaCotizacion();

                        }


                    });


                }else{

                    HacerVentaCotizacion();

                }

            } else {

                Toast.fire({
                    icon: 'warning',
                    title: "No hay productos en la lista",
                    showConfirmButton: false,
                    timer: 1500
                })

            }
            
            

        });

        $("#btnRegistrar1").on("click", async function(){

            ventas_desde = $("#ventas_desde").val();

            ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;
            
            var count = 0;
            var cancelacion = 0;

            fecha_regreso = $("#fecha_regreso").val() + " " + $("#sel_PM_regreso").val();

            fecha_regreso = convertirHora(fecha_regreso);

            fecha_regreso = ventas_desde + " " + fecha_regreso ;

            fecha_salida = $("#fecha_salida").val() + " " + $("#sel_PM_salida").val();

            fecha_salida = convertirHora(fecha_salida);

            fecha_salida = ventas_desde + " " + fecha_salida ;

            console.log("fecha_regreso : ",fecha_regreso , "fecha_salida : ",fecha_salida)

            if (tabla11.rows().data().any()) {

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

                var tipo_documento = $("#selBolFac").val();

                var iptNumeroDocumento = $("#iptNumeroDocumento").val();

                if(tipo_documento == 2 &&  iptNumeroDocumento === ""){

                    Swal.fire({
                        icon: 'warning',
                        title: 'Las facturas deben registrarse con un numero porfavor completelo y vuelva a intentar',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                        confirmButtonText: "ESTA BIEN",
                    })

                    return 0;
                
                    

                }else if (tipo_documento == 1 && iptNumeroDocumento === "") {
                    const result = await Swal.fire({
                        icon: 'warning',
                        title: 'Las Boletas usualmente se registran con un número, ¿seguro de continuar?',
                        showCancelButton: true, // Mostrar el botón de cancelar
                        confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                        cancelButtonColor: '#d33', // Color rojo para el botón de cancelar
                        confirmButtonText: "ESTA BIEN",
                        cancelButtonText: "Cancelar",
                    });

                    if (result.isConfirmed) {
                        // Usuario aceptó, continuar con el flujo
                    } else if (result.isDismissed) {
                        // Usuario presionó cancelar, retornar 0
                        return 0;
                    }
                }

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
                            HacerVentaNormal();
                        }
                    });


                }else{
                    HacerVentaNormal();
                }

            } else {

                Toast.fire({
                    icon: 'warning',
                    title: "No hay productos en la lista",
                    showConfirmButton: false,
                    timer: 1500
                })

            }

            $("#content-proveedores-tab").click();
            $("#iptBuscarProveedor").focus();
            
        });

    }

    function procesarFilas(tabla, arr, arr2, arrIndicador, arrPrecios,formData) {
        tabla.rows().eq(0).each(function(index) {
            var row = tabla.row(index);
            var data = row.data();
            var total = data[7].replace("S./ ", "");
            var tot = parseFloat(total);
            var precio = tot / parseFloat(data[5]);
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
    }

    function HacerVentaNormal(){
        CargarNroBoleta();

        if (!isActionInProgress2) {
            var count = 0;
            var totalVenta = $("#totalVenta").html();
            var nro_boleta = $("#iptNroVenta").val();
            var Tipo_pago = $("#selTipoPago").val();
            var mensajero = $("#iptEncargado").val();
            var cliente = $("#iptNombreProveedor").text();
            var tipo_dni = $("#selTipoDni").val();
            var palabra = cliente;
            var cancelacion = 0;
            var tipo_documento = $("#selBolFac").val();
            var iptNumeroDocumento = $("#iptNumeroDocumento").val();
            var comentario = $("#iptComentario").val();

            tabla11.rows().eq(0).each(function(index) {
                count = count + 1;

                var rowData = tabla11.row(index).data(); // Obtenemos los datos de la fila

                console.log(parseFloat(rowData[5]) + " " + parseFloat(rowData[6].replace("S./ ", '')));

                var column5 = parseFloat(rowData[5]);
                var column6 = parseFloat(rowData[6].replace("S./ ", ''));

                // Verificamos si la columna 5 o la columna 6 tienen un valor de 0 o negativo
                if (column5 <= 0 || column6 <= 0) {
                    cancelacion = 1; // Establecemos la variable cancelacion en 1
                }
            });
            $("#iptCodigoVenta").focus();

            if (cancelacion == 1) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Almenos Un producto tiene Precio o cantidad menor o igual a 0',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                    cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                    confirmButtonText: "Eliminarlos y continuar",
                    cancelButtonText: "Dejame revisar Primero",
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("se preciono el btn registrar ,", count, " , ", totalVenta, " , ", nro_boleta);

                        if (count > 0) {
                            var formData = new FormData();
                            var arr = [];
                            var arr2 = [];
                            var arrIndicador = [];
                            var arrPrecios = [];
                            var seleccion = 9;

                            procesarFilas(tabla11, arr, arr2, arrIndicador, arrPrecios,formData);

                            var deuda = parseFloat(totalVenta); // Esto para volver la deuda en un número positivo
                            
                            formData.append('nro_boleta', nro_boleta);
                            formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                            formData.append('total_venta', parseFloat(totalVenta));
                            formData.append('seleccion', seleccion);
                            formData.append('deuda', parseFloat(deuda));
                            formData.append('Proveedor', palabra);
                            formData.append('tipo_dni', tipo_dni);
                            formData.append('Tipo_pago', Tipo_pago);
                            formData.append('mensajero', mensajero);
                            formData.append('tipo_documento', tipo_documento);
                            formData.append('nro_documento', iptNumeroDocumento);
                            formData.append('comentario', comentario);
                            formData.append('fecha_regreso', fecha_regreso);
                            formData.append('fecha_salida', fecha_salida);
                            formData.append('Estado', 1);

                            var confirmador = $("#iptNombreProveedor").text();
                            console.log("confirmador este ese: ", confirmador.trim());

                            if (confirmador.trim() === "VARIOS") {
                                // No hacer nada
                            } else {
                                AgregarCambiosHistorial(arr2);
                            }

                            console.log('Valor de seleccion: ', seleccion);

                            ejecutarAjaxNORMAL(formData, nro_boleta, arrIndicador, arrPrecios, Tipo_pago, tipo_dni, comentario);
                            tabla51.ajax.reload();

                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'No hay productos en el listado.'
                            });
                        }

                        setTimeout(function () {
                            isActionInProgress2 = false;
                        }, 1000); // Ajusta el retraso según sea necesario

                    } else {
                        setTimeout(function () {
                            isActionInProgress2 = false;
                        }, 1000); // Ajusta el retraso según sea necesario
                    }
                });
            } else {
                console.log("se preciono el btn registrar ,", count, " , ", totalVenta, " , ", nro_boleta);

                if (count > 0) {
                    var formData = new FormData();
                    var arr = [];
                    var arr2 = [];
                    var arrIndicador = [];
                    var arrPrecios = [];
                    var seleccion = 9;

                    procesarFilas(tabla11, arr, arr2, arrIndicador, arrPrecios,formData);

                    var deuda = parseFloat(totalVenta); // Esto para volver la deuda en un número positivo

                    formData.append('nro_boleta', nro_boleta);
                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                    formData.append('total_venta', parseFloat(totalVenta));
                    formData.append('seleccion', parseFloat(seleccion));
                    formData.append('deuda', parseFloat(deuda));
                    formData.append('Proveedor', palabra);
                    formData.append('tipo_dni', tipo_dni);
                    formData.append('Tipo_pago', Tipo_pago);
                    formData.append('mensajero', mensajero);
                    formData.append('tipo_documento', tipo_documento);
                    formData.append('nro_documento', iptNumeroDocumento);
                    formData.append('comentario', comentario);
                    formData.append('fecha_regreso', fecha_regreso);
                    formData.append('fecha_salida', fecha_salida);
                    formData.append('Estado', 1);

                    var confirmador = $("#iptNombreProveedor").text();
                    console.log("confirmador 12131232: ", confirmador.trim());

                    if (confirmador.trim() === "VARIOS") {
                        // No hacer nada
                    } else {
                        AgregarCambiosHistorial(arr2);
                    }

                    console.log(formData, nro_boleta, arrIndicador, arrPrecios);
                    ejecutarAjaxNORMAL(formData, nro_boleta, arrIndicador, arrPrecios, Tipo_pago, tipo_dni, comentario);

                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No hay productos en el listado.'
                    });
                }

                setTimeout(function () {
                    isActionInProgress2 = false;
                }, 1000); // Ajusta el retraso según sea necesario
            }
        }
    }

    function ejecutarAjaxNORMAL(formData,idBoleta2,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario) {

        console.log("Valores de formData:");
        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        // Verificar si ya hay una solicitud AJAX en curso
        if (ajaxEnProgreso) {
            console.log("La solicitud AJAX está en curso. Esperando a que termine.");
            return; // Salir de la función si ya hay una solicitud en curso
        }

        console.log("La solicitud AJAX está en curso. Esperando a que termine.");

        

        // Establecer la bandera de AJAX en progreso
        ajaxEnProgreso = true;

        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                console.log(respuesta);
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

                CargarNroBoleta();

                $("#totalVenta").html("0.00");

                $("#totalVentaRegistrarVista1").html("0.00");

                $("#iptCodigoVenta").val("");

                $("#iptNumeroDocumento").val("");

                $("#iptComentario").val("");

                $("#selBolFac").val(1);

                $("#selTipoPago").val(1);

                $("#selTipoDni").val(1);

                // $("#content-registrar-tab").click();
                $("#iptCodigoVenta").focus();
                
                var Texto_pago = "Efectivo"

                if(Tipo_pago == 1){

                    Texto_pago = "Efectivo"

                }else if(Tipo_pago == 2){

                    Texto_pago = "Yape"

                }else if(Tipo_pago == 3){

                    Texto_pago = "Plin"

                }else if(Tipo_pago == 4){

                    Texto_pago = "Trasferencia"

                }else if(Tipo_pago == 5){

                    Texto_pago = "Deuda"

                }

                var Mensajero = $("#iptEncargado").val();
            },
            error: function(xhr, status, error) {
                // En caso de error, también restablecer la bandera de AJAX
                ajaxEnProgreso = false;
                console.error(xhr.responseText);
            }
        });
    }

    function AgregarCambiosHistorial(arr){  
        console.log("fila 2482 : array 2: " + arr);

         for (var i = 0; i < arr.length; i++) {
             var datos = arr[i].split(",");
             var confirmador =  $("#iptNombreProveedor").text();
             var partes = confirmador.split("-");
             var dni = confirmador


             var codigo  = datos[0];
             var nombre = datos[1]; // Longitud máxima del nombre
             var pxu = datos[4];
             var cantidad = datos[3];
             var total = datos[2];

             var partes_cantidad = cantidad.match( /([\d.]+)\s*(\D+)/);
             var medida = partes_cantidad[2];
             console.log("medida:" +  medida);

             var opcion  = 0;
             if(medida === "Paquetitos"){
                 opcion  = 1;
             }if(medida === "Unidades"){
                 opcion  = 2;
             }if(medida === "Docenas"){
                 opcion  = 3;
             }if(medida === "Cientos"){
                 opcion  = 4;
             }if(medida === "Millares"){
                 opcion  = 5;
             }if(medida === "Cajas"){
                 opcion  = 6;
             }if(medida === "Fardos" || medida === "Planchas" ){
                 opcion  = 7;
             }

             $.ajax({
                 async: false,
                 url: "ajax/productos.ajax.php",
                 method: "POST",
                 data: {
                     'accion': 15, // verifica si el producto en la tabla es nuevo o viejo
                     'dni': dni,
                     'codigo_producto':codigo,
                 },
                 dataType: 'json',
                 success: function(respuesta) {

                     if(respuesta === "nuevo"){

                         $.ajax({
                             async: false,
                             url: "ajax/productos.ajax.php",
                             method: "POST",
                             data: {
                                 'accion': 16, // Añade el nuevo producto con los precios predeterminado
                                 'dni': dni,
                                 'codigo_producto':codigo,
                             },
                             dataType: 'json',
                             success: function(respuesta) {

                                 if(respuesta === "añadido"){
                                     $.ajax({
                                         async: false,
                                         url: "ajax/productos.ajax.php",
                                         method: "POST",
                                         data: {
                                             'accion': 17, // Ajusta el precio al ultimo
                                             'dni': dni,
                                             'opcion':opcion,
                                             'codigo_producto':codigo,
                                             'precio':pxu,
                                         },
                                         dataType: 'json',
                                         success: function(respuesta) {

                                         } 
                                     });
                                 }

                             } 
                         });

                     }else if(respuesta === "viejo"){
                         $.ajax({
                             async: false,
                             url: "ajax/productos.ajax.php",
                             method: "POST",
                             data: {
                                 'accion': 17, // Ajusta el precio al ultimo
                                 'dni': dni,
                                 'opcion':opcion,
                                 'codigo_producto':codigo,
                                 'precio':pxu,
                             },
                             dataType: 'json',
                             success: function(respuesta) {

                             } 
                         });
                     }
                    

                } 
            });

        }
    }

    function wrapText(text, maxLength) {
            var lines = [];
            while (text.length > maxLength) {
                var line = text.substring(0, maxLength);
                lines.push(line);
                text = text.substring(maxLength);
            }
            lines.push(text);
            return lines.join("\n\t\t\t\t");
    }

    function convertirHora(hora12h) {
        var [hora, minutos, periodo] = hora12h.split(/[:\s]/);
        hora = parseInt(hora, 10);
        minutos = parseInt(minutos, 10);
        if (periodo.toUpperCase() === "PM" && hora !== 12) {
            hora += 12;
        }
        if (periodo.toUpperCase() === "AM" && hora === 12) {
            hora = 0;
        }
        return `${hora.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:00`;
    }

    function procesarDatosVenta(formData, nro_boleta, totalVenta, palabra, tipo_dni, Tipo_pago, mensajero, tipo_documento, iptNumeroDocumento, comentario, fecha_regreso, fecha_salida, seleccion) {
        var arr = [];
        var arr2 = [];
        var arrIndicador  = [];
        var arrPrecios  = [];

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

        var deuda  = parseFloat(totalVenta);  //esto para volver la deuda en un numero positivo

        formData.append('nro_boleta', nro_boleta);
        formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
        formData.append('total_venta', parseFloat(totalVenta));
        formData.append('seleccion', parseFloat(seleccion));
        formData.append('deuda', parseFloat(deuda));
        formData.append('Proveedor', palabra);
        formData.append('tipo_dni', tipo_dni);
        formData.append('Tipo_pago', Tipo_pago);
        formData.append('mensajero', mensajero);
        formData.append('tipo_documento', tipo_documento);
        formData.append('nro_documento', iptNumeroDocumento);
        formData.append('comentario', comentario);
        formData.append('fecha_regreso', fecha_regreso);
        formData.append('fecha_salida', fecha_salida);
        formData.append('Estado', 1);

        var confirmador =  $("#iptNombreProveedor").text();
        console.log("confirmador: ", confirmador.trim());

        if(confirmador.trim() !== "VARIOS"){
            AgregarCambiosHistorial(arr2);
        }

        console.log(formData, nro_boleta, arrIndicador, arrPrecios);
        ejecutarAjaxCotiza(formData, nro_boleta, arrIndicador, arrPrecios, Tipo_pago, tipo_dni, comentario);
    }

    function ejecutarAjaxCotiza(formData,idBoleta2,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario) {
        // Verificar si ya hay una solicitud AJAX en curso
        if (ajaxEnProgreso) {
            console.log("La solicitud AJAX está en curso. Esperando a que termine.");
            return; // Salir de la función si ya hay una solicitud en curso
        }

        // Establecer la bandera de AJAX en progreso
        ajaxEnProgreso = true;

        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                console.log(respuesta);

                ajaxEnProgreso = false;

                CargarNroBoleta();

                var Texto_pago = "Efectivo"

                if(Tipo_pago == 1){

                    Texto_pago = "Efectivo"

                }else if(Tipo_pago == 2){

                    Texto_pago = "Yape"

                }else if(Tipo_pago == 3){

                    Texto_pago = "Plin"

                }else if(Tipo_pago == 4){

                    Texto_pago = "Trasferencia"

                }else if(Tipo_pago == 5){

                    Texto_pago = "Deuda"

                }

                var Mensajero = $("#iptEncargado").val();

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 36,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json', 
                    success: function(respuesta) {

                        console.log(respuesta);

                       var url = 'http://192.168.18.5/market-pos/ajax/ventas_comision.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"])+ '&Texto_pago=' + Texto_pago+ '&Mensajero=' + Mensajero;

                        // Abrir la nueva ventana
                        var nuevaVentana = window.open(url, '_blank');

                    }
                });
            },
            error: function(xhr, status, error) {
                // En caso de error, también restablecer la bandera de AJAX
                ajaxEnProgreso = false;
                console.error(xhr.responseText);
            }
        });
    }

    function HacerVentaCotizacion() {
        CargarNroBoleta();

        if (!isActionInProgress2) {
            var count = 0;
            var totalVenta = $("#totalVenta").html();
            var nro_boleta = $("#iptNroVenta").val();
            var Tipo_pago = $("#selTipoPago").val();
            var mensajero = $("#iptEncargado").val();
            var cliente = $("#iptNombreProveedor").text();
            var tipo_dni = $("#selTipoDni").val();
            var palabra = cliente;
            var cancelacion = 0;
            var tipo_documento = $("#selBolFac").val();
            var iptNumeroDocumento = $("#iptNumeroDocumento").val();
            var comentario = $("#iptComentario").val();

            tabla11.rows().eq(0).each(function(index) {
                count = count + 1;
                var rowData = tabla11.row(index).data();
                var column5 = parseFloat(rowData[5]);
                var column6 = parseFloat(rowData[6].replace("S./ ", ''));

                if (column5 <= 0 || column6 <= 0) {
                    cancelacion = 1;
                }
            });
            
            $("#iptCodigoVenta").focus();
            
            if(cancelacion == 1){
                Swal.fire({
                    icon: 'warning',
                    title: 'Almenos Un producto tiene Precio o cantidad menor o igual a 0',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Eliminarlos y continuar",
                    cancelButtonText: "Dejame revisar Primero",
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("se presionó el btn registrar, ", count, " , ", totalVenta, " , ", nro_boleta );
                        if (count > 0) {
                            var formData = new FormData();
                            procesarDatosVenta(formData, nro_boleta, totalVenta, palabra, tipo_dni, Tipo_pago, mensajero, tipo_documento, iptNumeroDocumento, comentario, fecha_regreso, fecha_salida, 10);
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'No hay productos en el listado.'
                            });
                        }
                        setTimeout(function () {
                            isActionInProgress2 = false;
                        }, 1000);
                    } else {
                        setTimeout(function () {
                            isActionInProgress2 = false;
                        }, 1000);
                    }
                });
            } else {
                console.log("se presionó el btn registrar, ", count, " , ", totalVenta, " , ", nro_boleta );
                if (count > 0) {
                    var formData = new FormData();
                    procesarDatosVenta(formData, nro_boleta, totalVenta, palabra, tipo_dni, Tipo_pago, mensajero, tipo_documento, iptNumeroDocumento, comentario, fecha_regreso, fecha_salida, 10);
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No hay productos en el listado.'
                    });
                }
                setTimeout(function () {
                    isActionInProgress2 = false;
                }, 1000);
            }
        }
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

    function CopiarTabla11(){
        limpiar_tabla(tabla11);
    }

    function limpiar_tabla(tabla11){
        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 6,
            },
            dataType: 'json',
            success: function(respuesta) {

                var data = tabla11.data();


                for(var i = 0 ; i< data.length; i++){
                    console.log("data ["+i+"]: "+ data[i][1] + " , " +parseFloat(data[i][5]) + " , " +parseFloat(data[i][6].replace("S./","")) + " , " + parseFloat(data[i][7].replace("S./","")) );
                    var codigo = data[i][1];
                    var cantidad = data[i][5];
                    var precio = parseFloat(data[i][6].replace("S./",""));
                    var total = parseFloat(data[i][7].replace("S./",""));
                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 7,
                            'codigo': codigo,
                            'cantidad': cantidad,
                            'precio':precio,
                            'total': total,
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta añadida: ", respuesta);
                        }
                    });

                }
            }
        });
    }

    function PegarTabla11(){
        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 8,
                },
                dataType: 'json',
                success: function(respuesta) {

                    console.log("respuesta añadida: ", respuesta);

                    for(var i = 0 ; i< respuesta.length; i ++){
                        var precio  = respuesta[i][3]
                        precio = parseFloat(precio);
                        precio = "S./ "+ parseFloat(precio).toFixed(2);

                        var total  = respuesta[i][4]
                        total = parseFloat(total);
                        total = "S./ "+ parseFloat(total).toFixed(2);
                        CargarProductosPegado(respuesta[i][1],respuesta[i][2],precio, total,tabla11);
                    }
                }
        });

    }

    function CargarProductosPegado(producto = "", cantidad, precio, total,tabla_eleccion) {

        console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla_eleccion.rows().eq(0).each(function(index) {

            var row = tabla_eleccion.row(index);
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
                            tabla_eleccion.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla_eleccion.cell(index, 7).data(NuevoPrecio).draw();

                            // RECALCULAMOS TOTALES
                            recalcularTotales();
                            recalcularTotales2();
                            recalcularTotales3();
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

                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var TotalVenta = 0.00;

                    var nombreCategoria = respuesta['nombre_categoria'];

                    var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                    console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")

                    medida = "Unidades"

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
                    dropdownMenu += "</ul>";

                    tabla_eleccion.row.add([
                        itemProducto,
                        respuesta['codigo_producto'],
                        respuesta['id_categoria'],
                        respuesta['nombre_categoria'],
                        respuesta['descripcion_producto'],
                        cantidad,
                        precio,
                        total,
                        "<center>" +

                                        "<span class='btnEliminarproducto text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-trash fs-5'> </i> " +
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

                    recalcularTotales();

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }


                contador +=1;
            }
        });



    }/* FIN CargarProductos */
    // Función para construir el dropdownMenu
    function construirDropdownMenu(respuesta, medida) {
        const precios = [
            { key: 'precio_unidad', label: 'Unidad', medida: 'Unidades' },
            { key: 'precio_paquetito', label: 'Paquete', medida: 'Paquetitos' },
            { key: 'precio_docena', label: 'Docena', medida: 'Docenas' },
            { key: 'precio_ciento', label: 'Ciento', medida: 'Cientos' },
            { key: 'precio_millar', label: 'Millar', medida: 'Millares' },
            { key: 'precio_caja', label: 'Caja', medida: 'Cajas' },
            { key: 'precio_fardo', label: 'Fardo', medida: 'Fardos' },
            { key: 'precio_plancha', label: 'Plancha', medida: 'Planchas' }
        ];
        // Define the initial empty menu
        let menu = '';
        precios.forEach(precio => {

            if (parseFloat(respuesta[precio.key]) > 0) {
                // Append each item to the menu string
                
                menu += `<li>
                            <a class='dropdown-item' codigo='${respuesta['codigo_producto']}' 
                            precio='${respuesta[precio.key]}' 
                            medida='${precio.medida}' 
                            style='cursor:pointer; font-size:14px;'>
                            ${precio.label}: <strong>(S./ ${parseFloat(respuesta[precio.key]).toFixed(2)} - S./ ${parseFloat(respuesta[precio.key + '_2']).toFixed(2)})</strong> - (${getCantidad(respuesta, precio.medida)})
                            </a>
                        </li>`;
            }
        });
        return menu;
    }
    // Función para obtener la cantidad basada en la medida
    function getCantidad(respuesta, medida) {
        const cantidades = {
            'Unidades': '1 unidad',
            'Paquetitos': "1" + " paquetes",
            'Docenas': "1" + " docenas",
            'Cientos': "1" + " cientos",
            'Millares': respuesta['cantidad_millar'] + " " + (parseFloat(respuesta['precio_ciento']) > 0 ? "cientos" : "unidades"),
            'Cajas': respuesta['cantidad_caja'] + " " + (parseFloat(respuesta['precio_ciento']) > 0 ? "cientos" : (parseFloat(respuesta['precio_paquetito']) > 0 ? "paquetitos" : "unidades")),
            'Fardos': respuesta['cantidad_fardo'] + " " + (parseFloat(respuesta['precio_ciento']) > 0 ? "cientos" : (parseFloat(respuesta['precio_paquetito']) > 0 ? "paquetitos" : "unidades"))
        };
        return cantidades[medida] || "unidades";
    }

    function CambiarValores_ventana_1(Dni_Proveedor,proveedor,social,Direccion){
                    
        $("#iptRucProveedor").val(Dni_Proveedor)

        $("#iptNombreProveedor_venta").val(proveedor)

        $("#iptRazonSocialProveedor_venta").val(social)

        $("#iptDireccionProveedor_venta").val(Direccion)

        $("#card-modulos").css("display","block");
        
        
        $("#iptNombreProveedor").html(proveedor) 
        $("#iptNombreProveedor_0").html(proveedor) 
        $("#iptDireccionProveedor").html(Direccion) 

        console.log("id Perfil 12: " +proveedor + " Direccion : "+ Direccion+ " Dni_Proveedor : "+ Dni_Proveedor+ " social : "+ social);

        cargarProductosAJAX(proveedor);

        $.ajax({
            async:false,
            url:"ajax/ventas.ajax.php",
            method: 'POST',
            data: {
                'accion': 13, //1: LISTAR PRODUCTOS
                'idCliente':idProveedor0.trim(),
            },
            dataType: 'json',
            success: function (respuesta){
                console.log(respuesta.length)

                if(respuesta.length === 0){
                    $("#content-RegistrarComprar-tab").click();
                    $("#fecha_salida").val(moment().format('hh:mm'));
                    $("#fecha_regreso").val(moment().format('hh:mm'));
                    $('html, body').animate({
                        scrollTop: 10000
                    }, 500, function() {
                        setTimeout(function() {
                            $("#iptCodigoVenta").focus();
                        }, 500); // Retraso de 100 milisegundos después de la animación
                    });
                }else if(respuesta.length > 0){
                    CrearYMostrar(idProveedor0);
                }
            }
        })

    }
    
    function CrearYMostrar(idProveedor0){
        if ($.fn.DataTable.isDataTable("#lstProductosCatalogoxProveedor")) {
            $("#lstProductosCatalogoxProveedor").DataTable().destroy();
        }

        $('#lstProductosCatalogoxProveedor tbody').off('click', 'td.editable');
        $('#lstProductosCatalogoxProveedor tbody').off('blur', 'td.editable');
        $('#lstProductosCatalogoxProveedor tbody').off('keydown', 'td.editable');

        tabla02 = $("#lstProductosCatalogoxProveedor").DataTable({
            //"searching": false,
            "columnDefs": [
                {
                    "targets": 4,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[3] !== null) {
                            return 'S/. ' + parseFloat(data).toFixed(2);
                        } else {
                            return data;
                        }
                    }

                },
                {
                    "targets": [0,1,3,5],
                    "className": "text-center"
                },
                {
                    "targets": [6],
                    "createdCell": function (td, cellData, rowData, row, col) {
                       // Agregar la clase 'editable' a las celdas específicas
                       if ($(td).hasClass('editable')) {
                            $(td).addClass('editable');
                            $(td).attr('contenteditable', 'true');
                        } else {
                            $(td).addClass('editable');
                            $(td).attr('contenteditable', 'true');
                        }
                    }
                },
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEliminarHistorial text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    },

                },
                
            ],

            pageLength: [10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 13, //1: LISTAR PRODUCTOS
                    'idCliente':idProveedor0.trim(),
                },
            },
            scrollX:true,
            
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstProductosCatalogoxProveedor'));
            },
            
        });

        $("#iptNombreProducto").keyup(function() {
            cantidad =0;
            tabla02.column($(this).data('index')).search(this.value).draw();

            var table = $('#lstProductosCatalogoxProveedor').DataTable();

            // Recorrer todas las filas de la tabla, incluyendo las filtradas
            table.rows({ search: 'none' }).every(function() {
                var data = this.data();

                // Cambia 6 por el índice de la columna que necesitas
                var newValue = parseFloat(data[6]);

                if (!isNaN(newValue) && newValue > 0) {
                    cantidad++; // Incrementamos la cantidad si se cumple la condición
                }
            });

            //console.log('Cantidad de filas con números mayores que 0:', cantidad);

            document.getElementById("cantidadProductos").textContent = cantidad;
        })

        tabla02.on('init.dt', function () {

            // Restablecer eventos para evitar acumulación
            $('#lstProductosCatalogoxProveedor tbody').off('click', 'td.editable');
            $('#lstProductosCatalogoxProveedor tbody').off('blur', 'td.editable');
            $('#lstProductosCatalogoxProveedor tbody').off('keydown', 'td.editable');

            $('#lstProductosCatalogoxProveedor tbody').on('click', 'td.editable', function(){

                var $this = $(this);

                // Desactivar el select en todas las filas
                $('#lstProductosCatalogoxProveedor tbody tr.selected').removeClass('selected');

                // Activar el select en la fila actual
                $this.closest('tr').addClass('selected');

                colIndex2 = $this.index();
                rowIndex2 = $this.closest('tr').index();

                //console.log($this, colIndex2, rowIndex2);

                $this.attr('contenteditable', 'true');

                var range = document.createRange();
                range.selectNodeContents(this);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
                
            });

            $('#lstProductosCatalogoxProveedor tbody').on('blur', 'td.editable', function(){

                var rowIndex = $(this).closest('tr').index();
                var newValue = $(this).text();
                var data = tabla02.row($(this).parents('tr')).data();
                var colIndex = $(this).index();
                var cantidad = 0; // Inicializamos la cantidad a 0
                data[colIndex] = newValue;

                var table = $('#lstProductosCatalogoxProveedor').DataTable();

                // Recorrer todas las filas de la tabla, incluyendo las filtradas
                table.rows({ search: 'none' }).every(function() {
                    var data = this.data();

                    // Cambia 6 por el índice de la columna que necesitas
                    var newValue = parseFloat(data[6]);

                    if (!isNaN(newValue) && newValue > 0) {
                        cantidad++; // Incrementamos la cantidad si se cumple la condición
                    }
                });

                //console.log('Cantidad de filas con números mayores que 0:', cantidad);

                document.getElementById("cantidadProductos").textContent = cantidad;

            });

        });

        $('#mdlProductosCatalogoxProveedor').on('shown.bs.modal', function () {
            // Enfoca en el cuadro de texto después de que el modal se haya mostrado
            $("#iptNombreProducto").focus();

            $("#iptNombreProducto").on('focus', function() {
                console.log('El elemento #iptNombreProducto está enfocado');
                // Quitar la clase 'selected' de todas las filas
                $('#lstProductosCatalogoxProveedor tbody tr').removeClass('selected');
                $('#lstProductosCatalogoxProveedor tbody td[contenteditable=true]').removeAttr('contenteditable');
                $("#iptNombreProducto").select();
            });
        });

        $(document).on('keydown', function(e) {

            $("#mdlProductosCatalogoxProveedor").on('keydown', function(e) {
                if (!$('#mdlProductosCatalogoxProveedor').is(':visible')) return;

                var $this = $(this);
                var $selectedRow = $('#lstProductosCatalogoxProveedor tbody tr.selected');
                var $visibleRows = $('#lstProductosCatalogoxProveedor tbody tr:visible');

                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(2)').text() === "") {
                    console.log('No hay filas visibles en la tabla.');
                    return;
                }

                function seleccionarCelda($fila, indiceColumna) {
                    $('#lstProductosCatalogoxProveedor tbody td[contenteditable=true]').removeAttr('contenteditable');
                    $fila.addClass('selected').siblings().removeClass('selected');
                    var $celdaEditable = $fila.find('td').eq(indiceColumna).attr('contenteditable', 'true').focus();

                    var range = document.createRange();
                    range.selectNodeContents($celdaEditable[0]);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                }

                switch (e.which) {
                    case 38: // Flecha arriba
                        e.preventDefault();
                        if (!isActionInProgress) {
                            isActionInProgress = true;
                            var $filaAnterior = $selectedRow.prev('tr');
                            if ($filaAnterior.length) {
                                seleccionarCelda($filaAnterior, 6);
                            } else {
                                seleccionarCelda($visibleRows.last(), 6);
                            }
                            setTimeout(() => { isActionInProgress = false; }, 200);
                        }
                        break;

                    case 40: // Flecha abajo
                        e.preventDefault();
                        if (!isActionInProgress) {
                            isActionInProgress = true;
                            var $filaSiguiente = $selectedRow.next('tr');
                            if ($filaSiguiente.length) {
                                seleccionarCelda($filaSiguiente, 6);
                            } else {
                                seleccionarCelda($visibleRows.first(), 6);
                            }
                            setTimeout(() => { isActionInProgress = false; }, 200);
                        }
                        break;

                    case 13: // Enter
                        e.preventDefault();
                        if (isSwalOpen) {
                            Swal.clickConfirm();
                            return;
                        }
                        if (!isActionInProgress) {
                            $this.removeAttr('contenteditable');
                            $("#iptNombreProducto").focus();
                            setTimeout(() => { isActionInProgress = false; }, 200);
                        }
                        break;

                    case 121: // F10 (Código corregido, ya que el caso anterior era incorrecto)
                        e.preventDefault();
                        if (!isActionInProgress) {
                            isActionInProgress = true;
                            $("#btnAgregarPorductoxProveedor").click();
                            setTimeout(() => { isActionInProgress = false; }, 200);
                        }
                        break;

                    default:
                        return;
                }
            });

            
             
        });

        $("#mdlProductosCatalogoxProveedor").modal('show');
    }

    function cargarProductosAJAX(idBoleta2) {
        
        if(idBoleta2 == 0){

            if($('#content-proveedores:visible').length > 0 || $('#content-RegistrarComprar:visible').length > 0 
            || $('#content-imprimir-compra:visible').length > 0){
               
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

        }else{

            

            if($('#content-proveedores:visible').length > 0 || $('#content-RegistrarComprar:visible').length > 0 
            || $('#content-imprimir-compra:visible').length > 0){

                console.log("id Perfil: " +idBoleta2);
                $.ajax({
                    async: false,
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 20,
                        'id_cliente':idBoleta2,
                    },
                    dataType: 'json',
                    success: function (respuesta) {
                        $("#iptCodigoVenta").autocomplete({
                            source: respuesta,
                            select: function (event, ui) {
                                console.log("ui.item.value : " + ui.item.value)
                                var Texto = ui.item.value;
                                var palabras = Texto.split("/");

                                var cliente = palabras[1];
                                var producto = palabras[0];

                                if(idBoleta2 == 0){
                                    CargarProductos(ui.item.value);
                                }else if(cliente === ""){
                                    CargarProductos(ui.item.value);
                                }else{
                                    CargarProductosProveedors(producto,cliente);
                                }

                                
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

             
       
    }

    function Deslizar(){

            var scrollTo = 10000;
            console.log("scrollTo  : ", scrollTo)

            $('html, body').animate({
                scrollTop: scrollTo
            }, 500); // Puedes ajustar la velocidad de animación según tus preferencias

    }

    function mostrarCambios(){

        tabla11.clear().draw();
        console.log("se presiono el boton");

        var combinaciones = {};

        // Iterar sobre la matriz productos_por_agregar y almacenar los últimos valores para cada combinación única de los dos primeros elementos
        productos_por_agregar.forEach(function (fila) {
            var key = fila[0] + '-' + fila[1]; // Combinación de los dos primeros elementos como clave
            combinaciones[key] = fila; // Almacenar el último elemento como valor para esa combinación
        });

        // Obtener los resultados únicos
        var resultados = Object.values(combinaciones);
        //console.log("2524: ",resultados);
        var i = 0;
        for(i = 0; i<resultados.length; i++){

            var medida = resultados[i][1];
            var codigo = resultados[i][0];
            var precio = parseFloat(resultados[i][3]).toFixed(2);
            var cantidad = parseFloat(resultados[i][2]).toFixed(2);

            //console.log ("2533: ",codigo,precio,cantidad,medida);
            if(cantidad>0){
                grabar_datos_venta(medida,codigo,precio,cantidad)
            }
            
        }
        recalcularTotales();
    }


    function grabar_datos_venta(medida, codigo, precio, cantidad) {
        console.log(codigo, precio, cantidad, medida);
        var total = precio * parseFloat(cantidad);
        var precio_unitario = precio;
        var producto_repetido = 0;

        // Verificar si el producto ya está en la tabla
        tabla11.rows().eq(0).each(function(index) {
            var row = tabla11.row(index);
            var data = row.data();
            if (parseInt(codigo) == data[1]) {
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
                            });
                            $("#iptCodigoVenta").val("").focus();
                        } else {
                            // Aumentar cantidad y actualizar precio
                            var nuevaCantidad = parseFloat(data[5]) + 1 + ' Und(s)';
                            tabla11.cell(index, 5).data(nuevaCantidad).draw();
                            var nuevoPrecio = "S./ " + (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            tabla11.cell(index, 7).data(nuevoPrecio).draw();
                            recalcularTotales();
                        }
                    }
                });
                return;
            }
        });

        if (producto_repetido) return;

        // Obtener detalles del producto
        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: { 'accion': 7, 'codigo_producto': codigo },
            dataType: 'json',
            success: function(respuesta) {
                if (respuesta) {
                    var texto_total = "S./ " + parseFloat(total).toFixed(2);
                    var texto_precio = "S./ " + parseFloat(precio_unitario).toFixed(2);
                    if(medida === "millar"){
                        medida = medida.charAt(0).toUpperCase() + medida.slice(1) + 'es';
                    }else{
                        medida = medida.charAt(0).toUpperCase() + medida.slice(1) + 's';
                    }
                    var nombreCategoria = respuesta['nombre_categoria'].trim().replace(/\s+/g, ' ');
                    var indicador = "Unidades";

                    // Construir menú desplegable
                    var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medidas = ['unidad', 'paquetito', 'docena', 'ciento', 'millar', 'caja', 'fardo'];
                    var precios = ['precio_unidad', 'precio_paquetito', 'precio_docena', 'precio_ciento', 'precio_millar', 'precio_caja', 'precio_fardo'];
                    var cantidad_medida = ['unidad', 'paquete', 'docena', 'ciento', 'unidad', 'unidad', 'unidad'];

                    for (var i = 0; i < medidas.length; i++) {
                        var precio = respuesta[precios[i]];
                        if (parseFloat(precio) > 0) {
                            if(medidas[i] === "millar"){
                                var medida_texto = medidas[i].charAt(0).toUpperCase() + medidas[i].slice(1) + 'es';
                            }else{
                                var medida_texto = medidas[i].charAt(0).toUpperCase() + medidas[i].slice(1) + 's';
                            }
                            var texto_precio2 = parseFloat(respuesta[precios[i] + '_2']).toFixed(2);
                            dropdownMenu += "<li><a class='dropdown-item' codigo='" + respuesta['codigo_producto'] + "' precio='" + precio + "' medida='" + medida_texto + "' style='cursor:pointer; font-size:14px;'>" + medida_texto + ": <strong>(S./ " + parseFloat(precio).toFixed(2) + " - S./ " + texto_precio2 + ")</strong>  -  ( 1 " + cantidad_medida[i] + " )</a></li>";
                            indicador = medida_texto;
                        }
                    }

                    dropdownMenu += "</ul>";

                    // Añadir fila a la tabla
                    tabla11.row.add([
                        itemProducto,
                        codigo,
                        respuesta['id_categoria'],
                        respuesta['nombre_categoria'],
                        respuesta['descripcion_producto'],
                        parseFloat(cantidad) + " " + medida,
                        texto_precio,
                        texto_total,
                        "<center>" +
                            "<span class='btnEliminarproducto text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'><i class='fas fa-trash fs-5'></i></span>" +
                            "<span class='btnEditarproducto text-warning px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Editar producto'><i class='fas fa-edit fs-5'></i></span>" +
                            "<div class='btn-group'>" +
                                "<button type='button' class='p-0 btn btn-primary dropdown-toggle btn-sm border-0 focus-visible' data-bs-toggle='dropdown' aria-expanded='false' style='background-color: rgba(255, 255, 255, 0);'>" +
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
                }
            }
        });
    }

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


    function recalcularMontos(codigo_producto, precio_venta,medida,table){


        console.log(codigo_producto, precio_venta,medida);

        table.rows().eq(0).each(function(index) {

            var row = table.row(index);

            var data = row.data();

            if (data[1] == codigo_producto) {

                // AUMENTAR EN 1 EL VALOR DE LA CANTIDAD

                var nuevoContenido = "S./ " + precio_venta;


                table.cell(index, 6).data(nuevoContenido).draw();

                // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                NuevoPrecio = (parseFloat(data[5]) * precio_venta).toFixed(2);
                NuevoPrecio = "S./ " + (parseFloat(NuevoPrecio)).toFixed(2);
                NuevaMedida = parseFloat(data[5]) + " " + medida;
                table.cell(index, 7).data(NuevoPrecio).draw();
                table.cell(index, 5).data(NuevaMedida).draw();

            }


        });

        // RECALCULAMOS TOTALES
        recalcularTotales();

    }

    function RellenarParaEditar(codigo) {
        console.log("Código: " + codigo);

        $.ajax({
            async: false,
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 18,
                'codigo_producto': codigo,
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log(respuesta);

                const producto = respuesta[0];
                const campos = {
                    iptCodigoReg: producto["codigo_producto"],
                    iptDescripcionReg: producto["descripcion_producto"],
                    iptStockReg: producto["stock_producto"],
                    iptMinimoStockReg: producto["minimo_stock_producto"],
                    iptUbicacionReg: producto["direccion"],
                    selCategoriaReg: `${producto["id_categoria_producto"]} - ${producto["nombre_categoria"]}`
                };

                for (const [id, valor] of Object.entries(campos)) {
                    $(`#${id}`).val(valor);
                }

                const precios = [
                    producto["precio_unidad"],
                    producto["precio_paquetito"],
                    producto["precio_docena"],
                    producto["precio_ciento"],
                    producto["precio_millar"],
                    producto["precio_caja"],
                    producto["precio_fardo"],
                    producto["precio_plancha"],
                    producto["precio_unidad_2"],
                    producto["precio_paquetito_2"],
                    producto["precio_docena_2"],
                    producto["precio_ciento_2"],
                    producto["precio_millar_2"],
                    producto["precio_caja_2"],
                    producto["precio_fardo_2"],
                    producto["precio_plancha_2"],
                    producto["cantidad_ciento"],
                    producto["cantidad_millar"],
                    producto["cantidad_caja"],
                    producto["cantidad_fardo"],
                    producto["cantidad_plancha"]
                ];

                colocarDatosCeldasEspecificas(precios);
            }
        });
    }
    
    function colocarDatosCeldasEspecificas(datos) {
        const celdasEspecificas = [
            [0, 2], [1, 2], [2, 2], [3, 2], [4, 2], [5, 2], [6, 2], [7, 2],
            [0, 3], [1, 3], [2, 3], [3, 3], [4, 3], [5, 3], [6, 3], [7, 3],
            [3, 4], [4, 4], [5, 4], [6, 4], [7, 4]
        ];

        celdasEspecificas.forEach((coordenadas, index) => {
            const [filaIndex, colIndex] = coordenadas;
            const contenido = datos[index];

            // Asignar el contenido en la celda correspondiente
            $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido > 0 ? contenido : "");
        });
    }

    function obtenerDatosCeldasEspecificas() {
        const celdasEspecificas = [
            [0, 2], [1, 2], [2, 2], [3, 2], [4, 2], [5, 2], [6, 2], [7, 2],
            [0, 3], [1, 3], [2, 3], [3, 3], [4, 3], [5, 3], [6, 3], [7, 3],
            [3, 4], [4, 4], [5, 4], [6, 4], [7, 4]
        ];

        return celdasEspecificas.map(([filaIndex, colIndex]) => {
            let contenido = $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text().trim();

            // Si el contenido es vacío o solo espacios, se considera 0
            return contenido === "" ? "0" : contenido;
        });
    }

    function CargarHoras(){

        var ahora = new Date();
        var horaActual = ahora.getHours();
        var minutoActual = ahora.getMinutes();

        $('#fecha_salida').inputmask('hh:mm', {
            'placeholder': 'hh:mm',
            'alias': 'datetime',
            'inputFormat': 'hh:mm',
            'min': '01:00', // Hora mínima permitida
            'max': '12:59'  // Hora máxima permitida
        });

        $("#fecha_salida").val(moment().format('hh:mm'));

        $('#fecha_regreso').inputmask('hh:mm', {
            'placeholder': 'hh:mm',
            'alias': 'datetime',
            'inputFormat': 'hh:mm',
            'min': '01:00', // Hora mínima permitida
            'max': '12:59'  // Hora máxima permitida
        });

        $("#fecha_regreso").val(moment().format('hh:mm'));
                

        $("#ventas_desde").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#mostrarCalendario").on("click", function() {
            $("#ventas_desde").datepicker("show");
        });

        $("#ventas_pago").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#mostrarCalendariodeuda").on("click", function() {
            $("#ventas_pago").datepicker("show");
        });

        $("#ventas_desde_modal").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#mostrarCalendario_modal").on("click", function() {
            $("#ventas_desde_modal").datepicker("show");
        });

        $("#ventas_pago_modal").datepicker({
                dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#mostrarCalendariodeuda_modal").on("click", function() {
            $("#ventas_pago_modal").datepicker("show");
        });

        $("#ventas_desde").val(moment().format('DD/MM/YYYY'));

        $("#ventas_pago").val(moment().format('DD/MM/YYYY'));

        ventas_desde = $("#ventas_desde").val();

        ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;


        $("#iptRucProveedor").val("0000000001");

        $("#iptNombreProveedor_venta").val("VARIOS");

        $("#iptRazonSocialProveedor_venta").val("SIN RAZON");

        $("#iptDireccionProveedor_venta").val("SIN DIRECCION");

        agregarEventListeners();

    }

    function calcularDiferencia(fechaSalidaId, fechaRegresoId, ampmSalidaId, ampmRegresoId, resultadoId) {
        var horaSalida = document.getElementById(fechaSalidaId).value;
        var horaRegreso = document.getElementById(fechaRegresoId).value;
        var ampmSalida = document.getElementById(ampmSalidaId).value;
        var ampmRegreso = document.getElementById(ampmRegresoId).value;

        // Verificar si se ha ingresado una hora de salida y regreso válida
        if (!horaSalida || !horaRegreso) {
            console.log('Ingrese un rango válido de tiempo.');
            $("#" + resultadoId).val("invalido");
            return;
        }

        // Convertir las horas al formato de 24 horas si es necesario
        function convertirAHora24(hora, ampm) {
            var [hora24, minutos] = hora.split(':');
            if (ampm === 'PM' && hora24 !== '12') {
                hora24 = (parseInt(hora24, 10) + 12).toString();
            }
            if (ampm === 'AM' && hora24 === '12') {
                hora24 = '00';
            }
            return hora24 + ':' + minutos;
        }

        horaSalida = convertirAHora24(horaSalida, ampmSalida);
        horaRegreso = convertirAHora24(horaRegreso, ampmRegreso);

        // Crear objetos de fecha y hora para los cálculos
        var fechaHoraSalida = new Date('2000-01-01T' + horaSalida + ':00');
        var fechaHoraRegreso = new Date('2000-01-01T' + horaRegreso + ':00');

        // Calcular la diferencia en milisegundos
        var diferenciaMs = fechaHoraRegreso - fechaHoraSalida;

        // Verificar si la diferencia de tiempo es válida
        if (isNaN(diferenciaMs) || diferenciaMs < 0) {
            console.log('Ingrese un rango válido de tiempo.');
            $("#" + resultadoId).val("invalido");
            return;
        }

        // Calcular la diferencia en minutos y horas
        var diferenciaMinutos = Math.abs(Math.round(diferenciaMs / 1000 / 60));
        var diferenciaHoras = Math.abs(Math.round(diferenciaMinutos / 60));

        // Mostrar la diferencia de tiempo en la consola
        console.log('Diferencia en minutos:', diferenciaMinutos);
        console.log('Diferencia en horas:', diferenciaHoras);

        $("#" + resultadoId).val(diferenciaMinutos + " min");
    }
    // Uso de las funciones
    function calcularDiferencia_normal() {
        calcularDiferencia('fecha_salida', 'fecha_regreso', 'sel_PM_salida', 'sel_PM_regreso', 'diferencia_minutos');
    }
    function calcularDiferencia_modal() {
        calcularDiferencia('fecha_salida_modal', 'fecha_regreso_modal', 'sel_PM_salida_modal', 'sel_PM_regreso_modal', 'diferencia_minutos_modal');
    }
    function agregarEventListeners() {
        // Lista de configuraciones para los event listeners
        const configuraciones = [
            { id: 'fecha_salida', evento: 'blur', funcion: calcularDiferencia_normal },
            { id: 'fecha_regreso', evento: 'blur', funcion: calcularDiferencia_normal },
            { id: 'sel_PM_salida', evento: 'change', funcion: calcularDiferencia_normal },
            { id: 'sel_PM_regreso', evento: 'change', funcion: calcularDiferencia_normal },
        ];

        configuraciones.forEach(config => {
            const elemento = document.getElementById(config.id);
            if (elemento) {
                elemento.addEventListener(config.evento, config.funcion);
            } else {
                console.error(`Elemento con ID "${config.id}" no encontrado.`);
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

</script>