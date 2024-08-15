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

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-proveedor-tab" data-toggle="pill" href="#content-proveedor" role="tab" aria-controls="content-proveedor" aria-selected="false">Lista de Proveedores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-comprar-tab" data-toggle="pill" href="#content-comprar" role="tab" aria-controls="content-comprar" aria-selected="false">Nuevo Compra</a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" id="content-lista-compras-tab" data-toggle="pill" href="#content-lista-compras" role="tab" aria-controls="content-lista-compras" aria-selected="false">Lista de registro</a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" id="content-imprimir-compra-tab" data-toggle="pill" href="#content-imprimir-compra" role="tab" aria-controls="content-imprimir-compra" aria-selected="false">Imprimir ticket de compra</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-estados-tab" data-toggle="pill" href="#content-estados" role="tab" aria-controls="content-estados" aria-selected="false">Estado de Registros</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-proveedor" role="tabpanel" aria-labelledby="content-proveedor-tab">

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

            <div class="tab-pane fade mt-4 px-4" id="content-comprar" role="tabpanel" aria-labelledby="content-comprar-tab">

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
                                                <div class="col-12 col-lg-6">
                                                    <h5>PROVEEDOR: <label id = "iptNombreProveedor"> VARIOS </label></h5>

                                                    
                                                </div>

                                                <div class="col-12 col-lg-3">
                                                    <button type="button" class="btn btn-warning btn-sm btn-block" id="btnRegistroCotizacion">
                                                        <i class="fas fa-file"></i> Sacar Cotizacion</button>
                                                </div>

                                                <div class="col-12 col-lg-3">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroEsp">
                                                        <i class="fas fa-biking"></i> - Registrar e Imprimir (Ticket) [F8]</button>
                                                </div>

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

            <div class="tab-pane fade mt-4 px-4" id="content-imprimir-compra" role="tabpanel" aria-labelledby="content-imprimir-compra-tab">

                <h4>Re-Imprimir Reporte</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-5">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">
                                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                                        <!-- <div class="col-md-3 mb-3 rounded-3 text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto1" checked>
                                            <label class="form-check-label" for="chkEfectivoExacto1">
                                                Por Registrar
                                            </label>
                                        </div>

                                        <div class="col-md-3 mb-3 rounded-3 text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto2" checked>
                                            <label class="form-check-label" for="chkEfectivoExacto2">
                                                Registrados
                                            </label>
                                        </div> -->

                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnImprimir3">
                                                <i class="fas fa-print fs-5"></i> Imprimir
                                            </button>

                                            <button class="btn btn-warning" id="btnActualizar3">
                                                <i class="fas fa-bolt fs-5"></i> Actualizar
                                            </button>

                                            
                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosImprimir" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Proveedor</th>
                                                        <th >Total</th>
                                                        <th >Fecha</th>
                                                        <th >Estado</th>
                                                        <th >Mensajero</th>
                                                        <th >Tipo de Pago</th>

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

                        <div class="col-md-7">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                    Total Venta: S./ <span id="totalVentaRegistrarVista3">0.00</span>
                                </h5>

                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">

                                        <label class="col-form-label" for="selCategoriaReg">
                                            <i class="fas fa-file-alt fs-6"></i>
                                            <span class="small">Documento</span><span class="text-danger">*</span>
                                        </label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selDocumentoVenta">
                                            <option value="0">Seleccione Documento</option>
                                            <option value="1" selected="true">Boleta</option>
                                            <option value="2">Factura</option>
                                            <option value="3">Ticket</option>
                                            <option value="4">Nota de Venta</option>
                                            <option value="5">Cotizacion</option>
                                        </select>

                                        <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                            Debe Seleccione documento
                                        </span>

                                    </div>

                                </div><!-- ./ CARD BODY -->

                            </div><!-- ./ CARD -->

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                       VISTA PREVIA
                                </h5>
                                <div class="card-body p-3">

                                    <div class="form-group mb-2">

                                        <label class="col-form-label" for="iptCodigoVentaRegistro2">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small">Productos</span>
                                        </label>

                                        <input type="text" class="form-control form-control-sm" id="iptCodigoVentaRegistro2"
                                            placeholder="Ingrese el código de barras o el nombre del producto">
                                    </div>

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnGuardar3">
                                                <i class="fas fa-download"></i> Guardar Cambios
                                            </button>

                                            <!-- <button class="btn btn-secondary" id="btnCopiar3">
                                                <i class="far fa-copy"></i> Copíar Lista
                                            </button> -->

                                            <button class="btn btn-danger" id="btnEliminarRegistro3">
                                                <i class="far fa-trash-alt"></i> Eliminar 
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosProductosImprimir" class="display nowrap table-striped w-100 shadow ">
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
                                                        <th ></th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-estados" role="tabpanel" aria-labelledby="content-estados-tab">

                <h4>Reporte de Compras</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">
                                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                                        <!-- <div class="col-md-3 mb-3 rounded-3 text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto1" checked>
                                            <label class="form-check-label" for="chkEfectivoExacto1">
                                                Por Registrar
                                            </label>
                                        </div>

                                        <div class="col-md-3 mb-3 rounded-3 text-center">
                                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto2" checked>
                                            <label class="form-check-label" for="chkEfectivoExacto2">
                                                Registrados
                                            </label>
                                        </div> -->

                                        <!-- <div class="col-md-12 mb-3 rounded-3 text-right">
                                            
                                            <div class="d-none d-md-flex col-md-12 ">
                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarCliente" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptBuscarCliente">Razon Comercial</label>
                                                </div>
                                            </div>
                                            
                                        </div> -->

                                        

                                        <!-- <div class="col-md-4 mb-3 rounded-3 text-right">
                                            

                                            <button class="btn btn-warning" id="btnActualizar4">
                                                <i class="fas fa-bolt"> Refrescar</i>
                                            </button>

                                            <button class="btn btn-info" id="btnSeleccionMultiple">
                                                <i class="far fa-check-square"> Seleccion Multiple</i>
                                            </button>

                                            <button class="btn btn-success" id="btnRegistrar">
                                                <i class="fas fa-check"> Registrar</i>
                                            </button>

                                            
                                        </div> -->

                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnActualizar4">
                                                <i class="fas fa-bolt fs-5"></i> Actualizar
                                            </button>

                                            
                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosEstados" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th >Detalles</th>
                                                        <th >Bol</th>
                                                        <th >Fecha</th> <!-- PIDEME UN DATO MAS Y TE JURO QUE TE PEGO -->
                                                        <th >Cliente</th>
                                                        <th >Total</th>    
                                                        <th >F.Env</th>
                                                        <th >F.Reg</th>
                                                        <th >F.Est</th>
                                                        <th >Tiempo</th>
                                                        <th >Pers</th>
                                                        <th >Estado</th>
                                                        <th >Vuelto</th>
                                                        <th >F.Re</th>
                                                        <th >Conf</th>
                                                        <th >Estado2</th>
                                                        <th >Persona $</th>
                                                        <th >Tipo Pago</th>
                                                        <th >Nro Documento</th>
                                                        <th >Tipo Documento</th>
                                                        <th >Tipo DNI</th>
                                                        <th >Comentario</th>
                                                        <th >F.Pago</th>
                                                        
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
                        <!-- <div style="width: 100%;" class="form-floating mx-1 my-1">
                            <input type="text" id="iptNombreProducto" class="form-control" data-index="2" autocomplete="off">
                            <label for="iptNombreProducto">Nombre del producto</label>
                        </div> -->
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

                <span class="text-end me-auto" style="color: red;">PRODUCTOS:</span>
                <span id="cantidadProductos" style="color: red;">0</span>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnAgregarPorductoxProveedor">Agregar productos</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlDatosCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Detalles de la Compra</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="form-group mb-2">

                        <label class="col-form-label" for="iptEncargado">
                            <i class="fas fa-barcode fs-6"></i>
                            <span class="small">Persona que hara la compra</span>
                        </label>

                        <input type="text" class="form-control form-control-sm" id="iptEncargado"
                            placeholder="Nombre o Alias">
                    </div>

                    <div class="form-group mb-2">

                        <!-- <label class="col-form-label" for="selTipoPago">
                            <i class="fas fa-file-alt fs-6"></i>
                            <span class="small">Documento</span><span class="text-danger">*</span>
                        </label>

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                            id="selTipoPago">
                            <option value="Efectivo" selected="true">Efectivo</option>
                            <option value="Yape">Yape</option>
                            <option value="Plin">Plin</option>
                            <option value="Transferencia">Transferencia</option>
                            <option value="Credito">Credito</option>
                        </select>

                        <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                            Debe Seleccionar una Opcion
                        </span> -->
                    </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnHacerCompra">Hacer Compra</button>
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

<div class="modal fade" id="mdlGestionarPrecios" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Precios</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">

                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->

                    <div class="row">

                        <table id="lstProductosPrecios" class="display nowrap table-striped w-100 shadow ">
                            <thead class="bg-gray text-left fs-6">
                                <tr>
                                    <th>Id</th>
                                    <th>UM</th>
                                    <th>Precio (S/.)</th>
                                    <th>Min    (S/.)</th>
                                    <th>Cantidad</th>

                                </tr>
                            </thead>
                            <tbody class="small text-left fs-6">
                            </tbody>
                        </table>

                    </div>

                    <div class="row">
                        <!-- Columna para registro de la descripción del producto -->

                        <div class="col-12 col-lg-6">
                            <button type="button" class="btn btn-primary mt-3 w-100" id="btnRegresarPrecios">Regresar [F10]</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>


</div>

<!-- FIN Ventana Modal para ingresar o modificar un Productos -->

<div class="modal fade" id="mdlGestionDeCompra" role="dialog">

    <div class="modal-dialog modal-xl">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Producto</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModalGestionCompra">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <div class="col-md-12">
                    <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                        <!-- <h5 class="card-header py-1 bg-gray text-white text-center">
                            Total Venta: S./ <span id="totalVentaRegistrarVista1">0.00</span>
                        </h5> -->

                        

                        <div class="card-body p-2">

                            <!-- SERIE Y NRO DE BOLETA -->
                            <div class="form-group">

                                <div class="row mb-3">

                                    <!-- <div class="col-md-4">

                                        <label for="iptNroSerie">Serie</label>

                                        <input type="text" min="0" name="iptEfectivo" id="iptNroSerie"
                                            class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                    </div>

                                    <div class="col-md-8">

                                        <label for="iptNroVenta">Nro Venta</label>

                                        <input type="text" min="0" name="iptEfectivo" id="iptNroVenta"
                                            class="form-control form-control-sm" placeholder="Nro Venta" disabled>

                                    </div> -->

                                    <div class="col-md-12">

                                        <label for="iptNombreProveedor_venta_modal">Razon Comercial</label>

                                        <input type="text" min="0" name="iptNombreProveedor_venta_modal" id="iptNombreProveedor_venta_modal"
                                            class="form-control form-control-sm" placeholder="Razon Comercial" disabled>

                                    </div>

                                    <div class="col-md-12">

                                        <label for="iptRazonSocialProveedor_venta_modal">Razon Social</label>

                                        <input type="text" min="0" name="iptRazonSocialProveedor_venta_modal" id="iptRazonSocialProveedor_venta_modal"
                                            class="form-control form-control-sm" placeholder="Razon Social" disabled>

                                    </div>

                                    <div class="col-md-12">

                                        <label for="iptDireccionProveedor_venta_modal">Direccion</label>

                                        <input type="text" min="0" name="iptDireccionProveedor_venta_modal" id="iptDireccionProveedor_venta_modal"
                                            class="form-control form-control-sm" placeholder="Direccion" disabled>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-4">

                                        <label for="selTipoDni_modal">Eleccion Identificacion</label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selTipoDni_modal">
                                            
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

                                        <label for="iptRucProveedor_modal">Numero de Identificacion</label>

                                        <input type="text" min="0" name="iptEfectivo" id="iptRucProveedor_modal"
                                            class="form-control form-control-sm" placeholder="Numero de Identificacion" disabled>
                                    </div>

                                    <div class="col-md-4">

                                        <label for="iptEncargado_modal">Persona que hara la compra</label>

                                        <input type="text" class="form-control form-control-sm" id="iptEncargado_modal"
                                            placeholder="Nombre o Alias">
                                    </div>

                                    <div class="col-md-6">

                                        <label for="selTipoPago_modal">Tipo de pago</label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selTipoPago_modal">
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

                                        <label for="selBolFac_modal">Boleta o Factura?</label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selBolFac_modal">
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

                                                <input type="text" class="form-control form-control-sm" id="ventas_desde_modal" readonly> 
                                                
                                            </div>

                                            <div class="col-md-4">

                                                <button id="mostrarCalendario_modal">Mostrar Calendario</button>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <label for="">Fecha Pago (opc)</label>

                                        <div class="row">

                                            <div class="col-md-8">

                                                <input type="text" class="form-control form-control-sm" id="ventas_pago_modal" readonly> 
                                                
                                            </div>

                                            <div class="col-md-4">

                                                <button id="mostrarCalendariodeuda_modal">Mostrar Calendario</button>

                                            </div>

                                        </div>

                                    </div>


                                    <div class="col-md-4">

                                        <label for="iptNumeroDocumento_modal">Numero de Documento (Boleta o Factura)</label>

                                        <input type="text" min="0" name="iptNumeroDocumento_modal" id="iptNumeroDocumento_modal"
                                            class="form-control form-control-sm" placeholder="Razon Social">

                                    </div>

                                    <div class="col-md-4">

                                        <label for="">Hora Salida</label>

                                        <!-- <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM:ss" id="fecha_salida_modal"> -->

                                        <div class="row">
                                                    
                                            <div class="col-md-8">

                                                <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="fecha_salida_modal">

                                            </div>

                                            <div class="col-md-4">

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="sel_PM_salida_modal">
                                                    <option value="PM" selected="true">PM</option>
                                                    <option value="AM">AM</option>
                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <label for="">Hora Regreso</label>
                                        
                                        <!-- <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM:ss" id="fecha_regreso_modal"> -->

                                        <div class="row">
                                                    
                                            <div class="col-md-8">

                                                <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="fecha_regreso_modal">

                                            </div>

                                            <div class="col-md-4">

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="sel_PM_regreso_modal">
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

                                                <input type="text" class="form-control form-control-sm" id="diferencia_minutos_modal" disabled>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <label for="iptComentario_modal">Comentarios u Opiniones</label>
                                        <textarea name="iptComentario_modal" id="iptComentario_modal" class="form-control form-control-sm"
                                            rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>
                                    </div>

                                </div>

                            </div>

                        </div><!-- ./ CARD BODY -->

                    </div><!-- ./ CARD -->
                </div>

                <div class="col-md-12">
                    <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-2">

                            <div class="form-group">

                                    <div class="row mb-3">
                                        
                                        <div class="col-md-12">
                                            
                                            <!-- creacion de botones para cancelar y guardar el producto -->
                                            <button type="button" class="btn btn-success mt-3 mx-2" style="width:100%;"
                                                id="btnDetallesCompra"><i class="fas fa-search"></i> Mirar Productos de la Compra</button>

                                        </div>

                                    </div> 

                            </div>

                        </div> 

                    </div>

                </div>

                <div class="col-md-12">
                    <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-2">

                            <div class="form-group">

                                    <div class="row mb-3">
                                        
                                        <div class="col-md-6">
                                            
                                            <!-- creacion de botones para cancelar y guardar el producto -->
                                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:100%;"
                                                data-bs-dismiss="modal" id="btnCancelarRegistro">Cerrar Ventana</button>

                                        </div>
                                        
                                        <div class="col-md-6">

                                            <button type="button" style="width:100%;" class="btn btn-primary mt-3 mx-2"
                                                id="btnGuardarDatosCompra">Guardar datos de la compra</button>
                                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

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

<!-- Modal -->
<div class="modal fade" id="modalDetallesCompra" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Detalles de la Compra</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" id="btnCerrarModalDetallesCompra">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                            
                            <table id="tblDetalleCompras" class="table table-bordered table-striped w-100">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<!-- AQUI SON LOS SCRIPT  -->
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    var cantidad = 0;

    var tabla11; // tabla de productos que se agrega
    var tabla12; // lista de productos generales
    var tabla13; // lista de productos x cliente

    var tabla21;
    var tabla22;

    var tabla31;
    var tabla32;

    var tabla01;
    var tabla02;
    var tabla03;

    var tabla51,tabla61;

    var asegurador = 0;

    var ajaxEnProgreso = false;

    var paginaCambiada = false;

    var items = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var person = [];
    var itemsxperson = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var itemProducto = 1;
    var encendido = 20;
    var contador = 0;
    var cambiosEditables = [];
    var deletedRows =[];
    var idProveedor0 = "161000000000";
    var idBoleta = 0;
    var ProveedorBoleta = "";
    var idBoleta2 = 0;
    var ProveedorBoleta2;

    var productos_por_agregar = new Array();
    var productos_por_agregar_registros = new Array();
    var contador_productos  = 0;

    var colIndex1;
    var rowIndex1;

    var colIndex2;
    var rowIndex2;

    var colIndex3;
    var rowIndex3;

    var Registro;

    var Puesto = "";

    var controlPresent = false;
    var controlPresent2 = false;
    var controlPresent3 = false;

    var isActionInProgress = false;
    var isActionInProgress2 = false;

    var idProductoEdit;
    var filaEliminar;
    var nombre_cliente_deudas = "";

    var isSwalOpen = false;

    var Aumento = 0;
    var Credito = 0;
    var Configurar = 0;
    var idBoleta_registro = 0 ;
    var Dinero_Dado = 0;
    var MultipleSeleccion = 0; 
    var Boletas= [];
    var estado = 0;

    var bloquear1 = 0;
    var bloquear2 = 0;

    var Dni_Proveedor = "10000001";

    var ventas_desde;

    var fecha_salida;
    var fecha_regreso;

    var Boleta_Registro;

    var Mensajero_imprimir;
    var Tipo_pago_imprimir;

    $(document).ready(function(){

        var tblDetalleComprasElement = document.getElementById("tblDetalleCompras");
        ajustarHeadersDataTablesEspecial(tblDetalleComprasElement);
        
        var enlaceProveedors = document.querySelector('#content-proveedor-tab');
        if (enlaceProveedors) {
            enlaceProveedors.addEventListener('click', function() {
                idBoleta2 = 0;
                productos_por_agregar = new Array();
                productos_por_agregar_registros = new Array();
                $('#lstProveedors tr').removeClass('selected');
                var elementoProveedor = document.getElementById("iptNombreProveedor");
                var elementoProveedor2 = document.getElementById("iptDireccionProveedor");
                var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");
                $("#iptBuscarProveedor").val("");
                $("#iptBuscarProveedor2").val("");
                tabla01.column(3).search("").draw();
                $("#iptCodigoVenta").val("");
                cantidad = 0
                if (elementoProveedor) {
                    elementoProveedor.textContent = "VARIOS";
                }

                if (elementoProveedor_0) {
                    elementoProveedor_0.textContent = "VARIOS";
                }

                if (elementoProveedor2) {
                    elementoProveedor2.textContent = "Sin Direccion";
                }

                tabla11.clear().draw();
                tabla01.ajax.reload();
                $("#totalVenta").html("");
                $("#totalVenta").html("0.00");

                $("#totalVentaRegistrarVista1").html("");
                $("#totalVentaRegistrarVista1").html("0.00");

                $("#iptRucProveedor").val("0000000001");

                $("#iptNombreProveedor_venta").val("VARIOS");

                $("#iptRazonSocialProveedor_venta").val("SIN RAZON");

                $("#iptDireccionProveedor_venta").val("SIN DIRECCION");

                // Agregar el foco dentro de 0.2 segundos
                setTimeout(function() {
                    var elementoFocusear = document.getElementById("iptBuscarProveedor");
                    if (elementoFocusear) {
                        elementoFocusear.focus();
                    }
                }, 200);
            });
        }

        var enlaceProveedors2 = document.querySelector('#content-comprar-tab');
        if (enlaceProveedors2) {
            enlaceProveedors2.addEventListener('click', function() {
                $("#fecha_salida").val(moment().format('hh:mm'));
                $("#fecha_regreso").val(moment().format('hh:mm'));
                $('html, body').animate({
                    scrollTop: 10000
                }, 500, function() {
                    setTimeout(function() {
                        $("#iptCodigoVenta").focus();
                    }, 500); // Retraso de 100 milisegundos después de la animación
                });
            });
        }

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

        

        // Agregar eventos de escucha a los inputs y selects para llamar a calcularDiferencia()
        document.getElementById('fecha_salida').addEventListener('blur', calcularDiferencia);
        document.getElementById('fecha_regreso').addEventListener('blur', calcularDiferencia);
        document.getElementById('sel_PM_salida').addEventListener('change', calcularDiferencia);
        document.getElementById('sel_PM_regreso').addEventListener('change', calcularDiferencia);

        document.getElementById('fecha_salida_modal').addEventListener('blur', calcularDiferencia_modal);
        document.getElementById('fecha_regreso_modal').addEventListener('blur', calcularDiferencia_modal);
        document.getElementById('sel_PM_salida_modal').addEventListener('change', calcularDiferencia_modal);
        document.getElementById('sel_PM_regreso_modal').addEventListener('change', calcularDiferencia_modal);
       
        CargarNroBoleta();
        Cargar_tables();
        CargarBotones();
        cargarProductosAJAX(0);
        calcularDiferencia();

        $("#iptBuscarProveedor").focus();

        $('#mdlDatosCompra').on('shown.bs.modal', function () {
            // Busca el input con el id 'iptEncargado' dentro del modal y enfócalo
            $('#iptEncargado').focus();
        });

        $(document).on('keydown', function(event) {

            // if (!$(event.target).closest('#lstRegistrosProductos').length) {
            //     //console.log('No estoy en esta tabla');
            //     bloquear1 = 0;

            // }

            if (!$(event.target).closest('#lstRegistrosProductosImprimir').length) {
                //console.log('No estoy en esta tabla 2');
                bloquear2 = 0;

            }

            if (event.keyCode === 40 && $('#content-proveedor:visible').length > 0 && !$('#mdlProductosCatalogoxProveedor').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstProveedores tbody tr:visible');
                    console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstProveedores tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstProveedores tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-proveedor:visible').length > 0 && !$('#mdlProductosCatalogoxProveedor').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstProveedores tbody tr:visible');
                    console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstProveedores tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstProveedores tbody tr:last').addClass('selected');
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

            // if (event.keyCode === 40 && $('#content-lista-compras:visible').length > 0 && !controlPresent && !$('#iptCodigoVentaRegistro').is(':focus') && bloquear1 == 0) {
            //     event.preventDefault(); // Prevent the default behavior of the Down arrow key

            //     // Check if the action is not already in progress
            //     if (!isActionInProgress) {
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;

            //         // Get the currently selected row (if any)
            //         var $selectedRow = $('#lstRegistros tbody tr.selected');

            //         if ($selectedRow.length === 0) {
            //             // If no row is selected, select the first row
            //             $('#lstRegistros tbody tr:first').addClass('selected');
            //         } else {
            //             // If a row is selected, move the selection to the next row and remove the selection from other rows
            //             $selectedRow.removeClass('selected');
            //             $selectedRow.next('tr').addClass('selected');
            //         }

            //         // Set a timeout to reset the flag after a short delay
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
            // }

            // if (event.keyCode === 38 && $('#content-lista-compras:visible').length > 0 && !controlPresent && !$('#iptCodigoVentaRegistro').is(':focus') && bloquear1 == 0) {
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            //     if (!isActionInProgress) {
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         // Obtener la fila actualmente seleccionada (si hay alguna)
            //         var $selectedRow = $('#lstRegistros tbody tr.selected');

            //         if ($selectedRow.length === 0) {
            //             // Si no hay ninguna fila seleccionada, seleccionar la última fila
            //             $('#lstRegistros tbody tr:last').addClass('selected');
            //         } else {
            //             // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
            //             $selectedRow.removeClass('selected');
            //             $selectedRow.prev('tr').addClass('selected');
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
            // }

            if (event.keyCode === 40 && $('#content-imprimir-compra:visible').length > 0 && !controlPresent2 && bloquear2 == 0) {

                console.log("se presiono abajo")
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstRegistrosImprimir tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstRegistrosImprimir tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-imprimir-compra:visible').length > 0 && !controlPresent2 && bloquear2 == 0) {

                console.log("se presiono abajo")
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstRegistrosImprimir tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstRegistrosImprimir tbody tr:last').addClass('selected');
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

           
            if (event.keyCode === 13 && $('#content-proveedor:visible').length > 0 && !$('#mdlProductosCatalogoxProveedor').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstProveedores tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla01.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        $('#lstProveedores tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        // Resto de tu código
                        idBoleta2 = data[3];

                        var Direccion = data[5];

                        idProveedor0 = data[3];

                        var social  = data[4];

                        var proveedor = data[3];

                        console.log("idBoleta2 : ",idBoleta2)

                        if(data[2] === "SIN IDENTIFICAC"){

                            Swal.fire({
                                icon: 'warning',
                                title: 'El proveedor no tiene dni o ruc registrado. Continuar?',
                                confirmButtonText: 'Aceptar',
                                showCancelButton: true,
                            }).then((result) => {

                                if(result.isConfirmed == true){

                                    Dni_Proveedor = "0000000001";

                                    $("#iptRucProveedor").val(Dni_Proveedor)

                                    $("#iptNombreProveedor_venta").val(proveedor)

                                    $("#iptRazonSocialProveedor_venta").val(social)

                                    $("#iptDireccionProveedor_venta").val(Direccion)

                                    $("#card-modulos").css("display","block");
                                    console.log("id Perfil: " +idBoleta2);
                                    cargarProductosAJAX(idBoleta2);
                                    var elementoProveedor = document.getElementById("iptNombreProveedor");
                                    var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");
                                    var elementoProveedor2 = document.getElementById("iptDireccionProveedor");

                                    if (elementoProveedor) {
                                        elementoProveedor.textContent = idBoleta2;
                                    }

                                    if (elementoProveedor_0) {
                                        elementoProveedor_0.textContent = idBoleta2;
                                    }

                                    if(elementoProveedor2){
                                        elementoProveedor2.textContent = Direccion;
                                    }

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
                                                $("#content-comprar-tab").click();
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
                                    
                                }else{
                                    return 0;
                                }
                            })

                            
                        }else{

                            Dni_Proveedor = data[2].trim();
                            
                            $("#iptRucProveedor").val(Dni_Proveedor)

                            $("#iptNombreProveedor_venta").val(proveedor)

                            $("#iptRazonSocialProveedor_venta").val(social)

                            $("#iptDireccionProveedor_venta").val(Direccion)

                            $("#card-modulos").css("display","block");
                            console.log("id Perfil: " +idBoleta2);
                            cargarProductosAJAX(idBoleta2);
                            var elementoProveedor = document.getElementById("iptNombreProveedor");
                            var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");
                            var elementoProveedor2 = document.getElementById("iptDireccionProveedor");

                            if (elementoProveedor) {
                                elementoProveedor.textContent = idBoleta2;
                            }

                            if (elementoProveedor_0) {
                                elementoProveedor_0.textContent = idBoleta2;
                            }

                            if(elementoProveedor2){
                                elementoProveedor2.textContent = Direccion;
                            }

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
                                        $("#content-comprar-tab").click();
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

                  
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            
            }
            
            // if (event.keyCode === 13 && $('#content-lista-compras:visible').length > 0 && !controlPresent ) { // Tecla Enter
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            //     if (!isActionInProgress) {
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         // Obtener la fila actualmente seleccionada
            //         var $selectedRow = $('#lstRegistros tbody tr.selected');

            //         if ($selectedRow.length > 0) {
            //             tabla22.clear().draw();
            //             // Si hay una fila seleccionada, obtener los datos de la fila
            //             var data = tabla21.row($selectedRow).data();
            //             $('#lstRegistros tbody tr').removeClass('selected');
            //             $selectedRow.addClass('selected');

            //             $(this).parents('tr').addClass('selected');

            //             //console.log(data);

            //             idBoleta = data[1];
            //             ProveedorBoleta = data[2];

            //             $("#card-modulos").css("display","block");
            //             console.log("id Perfil: " +idBoleta+ "-"+ ProveedorBoleta);

            //             $.ajax({
            //                 async:false,
            //                 url:"ajax/ventas.ajax.php",
            //                 method: 'POST',
            //                 data: {
            //                     accion: 9,
            //                     id_boleta: idBoleta
            //                 },
            //                 dataType: 'json',
            //                 success: function (respuesta){


            //                     enListarProductos(respuesta);
            //                 }
            //             })
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
                
            // }

            if (event.keyCode === 13 && $('#content-imprimir-compra:visible').length > 0 && !controlPresent2) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstRegistrosImprimir tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        tabla32.clear().draw();
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla31.row($selectedRow).data();
                        $('#lstRegistrosImprimir tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        $(this).parents('tr').addClass('selected');

                        //console.log(data);

                        idBoleta2 = data[1];
                        ProveedorBoleta2 = data[2];

                        $("#card-modulos").css("display","block");
                        console.log("id Perfil: " +idBoleta2+ "-"+ ProveedorBoleta2);

                        $.ajax({
                            async:false,
                            url:"ajax/ventas.ajax.php",
                            method: 'POST',
                            data: {
                                accion: 33,
                                id_boleta: idBoleta2
                            },
                            dataType: 'json',
                            success: function (respuesta){


                                enListarProductos2(respuesta);
                            }
                        })
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
             
            }

            if (event.keyCode === 13 && $('#content-comprar:visible').length > 0){

                console.log("se presiono esto");

                $("#iptCodigoVenta").focus();
            }

            

            // if (event.keyCode === 37 && $('#content-proveedor:visible').length > 0 && !$('#mdlProductosCatalogoxProveedor').is(':visible')&& !$('#mdlActualizarProveedor').is(':visible')) { // Tecla Izquierda
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Izquierda
            //     $('#content-proveedor input').blur();
            //     if (!isActionInProgress) {
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         paginaCambiada = false;
            //         if (!paginaCambiada) {
            //             // Ir a la página anterior solo si no se ha cambiado ya
            //             tabla01.page('previous').draw('page');
            //             paginaCambiada = true;
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
            // }

            // if (event.keyCode === 39 && $('#content-proveedor:visible').length > 0 && !$('#mdlProductosCatalogoxProveedor').is(':visible')&& !$('#mdlActualizarProveedor').is(':visible')) { // Tecla Derecha
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Derecha
            //     $('#content-proveedor input').blur();
            //     console.log("se presiono : " + isActionInProgress);
            //     if (!isActionInProgress) {
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         paginaCambiada = false;
            //         if (!paginaCambiada) {
            //             // Ir a la página siguiente solo si no se ha cambiado ya
            //             tabla01.page('next').draw('page');
            //             paginaCambiada = true;
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
            // }    
        

            // if (event.keyCode === 16  && $('#content-lista-compras:visible').length > 0) {
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            //     console.log("se presiono : " + isActionInProgress);
            //     if (!isActionInProgress) {
            //         console.log("se presiono el control")
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         if (!controlPresent){
            //             $('#selDocumentoVenta2').focus().select();
            //             controlPresent = true;
            //         }else if(controlPresent){
            //             $("#selDocumentoVenta2").blur();
            //             controlPresent = false;
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
             
            // }

            // if (event.keyCode === 17  && $('#content-imprimir-compra:visible').length > 0) {
            //     event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            //     console.log("se presiono : " + isActionInProgress);
            //     if (!isActionInProgress) {
            //         console.log("se presiono el control")
            //         // Set the flag to indicate that the action is now in progress
            //         isActionInProgress = true;
            //         if (!controlPresent2){
            //             $('#selDocumentoVenta').focus().select();
            //             controlPresent2 = true;
            //         }else if(controlPresent2){
            //             $("#selDocumentoVenta").blur();
            //             controlPresent2 = false;
            //         }
            //         setTimeout(function () {
            //             isActionInProgress = false;
            //         }, 100); // Adjust the delay as needed
            //     }
             
            // }

            if (event.keyCode === 17  && ($('#content-comprar:visible').length > 0 || $('#content-lista-compras:visible').length > 0) && !$('#mdlProductosCatalogoxProveedor').is(':visible') ) {
                event.preventDefault()
                 
                    if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            // Verifica si la tab-pane está activa
                            // Muestra el modal

                            nombre = $("#iptNombreProveedor").html();

                            nombre = nombre.trim();
                         

                            if(nombre != "VARIOS"){

                                console.log("hola como estas :  " + nombre);
                                console.log("hola como estas :  " + ProveedorBoleta);

                                if($('#content-comprar:visible').length > 0 ){

                                    $("#mdlProductosCatalogoxProveedor").modal('show');

                                }
                             
                            }

                         
                         
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 100); // Adjust the delay as needed
                    }
                          
            }

            // if (event.keyCode === 16  && $('#content-comprar:visible').length > 0 && !$('#mdlProductosCatalogo').is(':visible') && $("#iptCodigoVenta").on("focus") ) {
            //     event.preventDefault()
                    
            //     console.log("Hola");
            //     var texto_cantidad = "Und(s)";
            //     var texto_cantidad_actual = "Und(s)";
            //     var se_presiono = 0;
            //     var $currentCell = $(this);

            //     // Obtener la fila y columna de la celda actual
            //     var rowIndex = $currentCell.parent().index();
            //     var cellIndex = $currentCell.index();

            //     var $currentRow = $currentCell.closest('tr');
            //     var $nextRow = $currentRow.next(); // Obtener la siguiente fila

            //     console.log("texto_cantidad : ",texto_cantidad);
            //     var $firstEditableCell = $('#lstProductosVenta tbody td.editable:visible:first');
                
            //     if ($firstEditableCell.length) {

            //         $firstEditableCell.attr('contenteditable', 'true');
            //         var data = tabla11.row($firstEditableCell.parents('tr')).data();
            //         // Cambiar el valor de la celda a 0
            //         if(data[5]===""){
            //             data[5]="1";
            //         }
            //         $firstEditableCell.text(parseFloat(data[5]));

            //         //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
            //         var texto = data[5];
            //         console.log(data[5]);
            //         var partes = texto.match( /([\d.]+)\s*(\D+)/);
            //         console.log("partes : " ,partes);
            //         texto_cantidad = partes[2];
            //         //console.log("texto_cantidad : ",texto_cantidad);

                    

            //         var range = document.createRange();
            //         range.selectNodeContents($firstEditableCell[0]);
            //         var sel = window.getSelection();
            //         sel.removeAllRanges();
            //         sel.addRange(range);
            //     }
                
                             
            // }

            
            
        });

        



    })

    
    $(document).on('keydown', function(event) {

        //console.log(event.keyCode);
        // Verifica si la tecla presionada es la tecla Control (keyCode 17)
     
        if (event.keyCode === 119 && !$('#mdlProductosCatalogoxProveedor').is(':visible')){
            event.preventDefault()
            if ($('#content-comprar').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnRegistroEsp').click();
                    

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }
        }
     

    });

</script>

<script>

    function ajustarHeadersDataTablesEspecial(element) {
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

    function calcularDiferencia() {
        var horaSalida = document.getElementById('fecha_salida').value;
        var horaRegreso = document.getElementById('fecha_regreso').value;
        var ampmSalida = document.getElementById('sel_PM_salida').value;
        var ampmRegreso = document.getElementById('sel_PM_regreso').value;

        // Verificar si se ha ingresado una hora de salida y regreso válida
        if (!horaSalida || !horaRegreso) {
            console.log('Ingrese un rango válido de tiempo.');
            $("#diferencia_minutos").val("invalido")
            return; // Salir de la función si no se ha ingresado un rango válido
        }

        // Convertir las horas al formato de 24 horas si es necesario
        if (ampmSalida === 'PM') {
            var horaSalida24 = horaSalida.split(':')[0];
            horaSalida24 = horaSalida24 === '12' ? '12' : (parseInt(horaSalida24, 10) + 12).toString();
            horaSalida = horaSalida24 + ':' + horaSalida.split(':')[1];
        }
        if (ampmRegreso === 'PM') {
            var horaRegreso24 = horaRegreso.split(':')[0];
            horaRegreso24 = horaRegreso24 === '12' ? '12' : (parseInt(horaRegreso24, 10) + 12).toString();
            horaRegreso = horaRegreso24 + ':' + horaRegreso.split(':')[1];
        }

        // Crear objetos de fecha y hora para los cálculos
        var fechaHoraSalida = new Date('2000-01-01T' + horaSalida + ':00');
        var fechaHoraRegreso = new Date('2000-01-01T' + horaRegreso + ':00');

        // Calcular la diferencia en milisegundos
        var diferenciaMs = fechaHoraRegreso - fechaHoraSalida;

        // Verificar si la diferencia de tiempo es válida
        if (isNaN(diferenciaMs) || diferenciaMs < 0) {
            console.log('Ingrese un rango válido de tiempo.');

            $("#diferencia_minutos").val("invalido")
            
            return; // Salir de la función si la diferencia no es válida
        }

        // Calcular la diferencia en minutos y horas
        var diferenciaMinutos = Math.abs(Math.round(diferenciaMs / 1000 / 60));
        var diferenciaHoras = Math.abs(Math.round(diferenciaMinutos / 60));

        // Mostrar la diferencia de tiempo en la consola
        console.log('Diferencia en minutos:', diferenciaMinutos);
        console.log('Diferencia en horas:', diferenciaHoras);

        $("#diferencia_minutos").val(diferenciaMinutos+ " min");


    }

    function calcularDiferencia_modal() {
        var horaSalida = document.getElementById('fecha_salida_modal').value;
        var horaRegreso = document.getElementById('fecha_regreso_modal').value;
        var ampmSalida = document.getElementById('sel_PM_salida_modal').value;
        var ampmRegreso = document.getElementById('sel_PM_regreso_modal').value;

        // Verificar si se ha ingresado una hora de salida y regreso válida
        if (!horaSalida || !horaRegreso) {
            console.log('Ingrese un rango válido de tiempo.');
            $("#diferencia_minutos_modal").val("invalido")
            return; // Salir de la función si no se ha ingresado un rango válido
        }

        // Convertir las horas al formato de 24 horas si es necesario
        if (ampmSalida === 'PM') {
            var horaSalida24 = horaSalida.split(':')[0];
            horaSalida24 = horaSalida24 === '12' ? '12' : (parseInt(horaSalida24, 10) + 12).toString();
            horaSalida = horaSalida24 + ':' + horaSalida.split(':')[1];
        }
        if (ampmRegreso === 'PM') {
            var horaRegreso24 = horaRegreso.split(':')[0];
            horaRegreso24 = horaRegreso24 === '12' ? '12' : (parseInt(horaRegreso24, 10) + 12).toString();
            horaRegreso = horaRegreso24 + ':' + horaRegreso.split(':')[1];
        }

        // Crear objetos de fecha y hora para los cálculos
        var fechaHoraSalida = new Date('2000-01-01T' + horaSalida + ':00');
        var fechaHoraRegreso = new Date('2000-01-01T' + horaRegreso + ':00');

        // Calcular la diferencia en milisegundos
        var diferenciaMs = fechaHoraRegreso - fechaHoraSalida;

        // Verificar si la diferencia de tiempo es válida
        if (isNaN(diferenciaMs) || diferenciaMs < 0) {
            console.log('Ingrese un rango válido de tiempo.');

            $("#diferencia_minutos_modal").val("invalido")
            
            return; // Salir de la función si la diferencia no es válida
        }

        // Calcular la diferencia en minutos y horas
        var diferenciaMinutos = Math.abs(Math.round(diferenciaMs / 1000 / 60));
        var diferenciaHoras = Math.abs(Math.round(diferenciaMinutos / 60));

        // Mostrar la diferencia de tiempo en la consola
        console.log('Diferencia en minutos:', diferenciaMinutos);
        console.log('Diferencia en horas:', diferenciaHoras);

        $("#diferencia_minutos_modal").val(diferenciaMinutos+ " min");


    }

    function Cargar_tables(){

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
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstProductosVenta'));

            $('#lstProductosVenta tbody').on('blur', 'td.editable', function() {

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

                                console.log(respuesta);
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
            $('#lstProductosVenta tbody').on('keydown', 'td.editable', function(e) {
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
                        var $firstEditableCell = $('#lstProductosVenta tbody td.editable:visible:first');
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
                        var $lastRow = $('#lstProductosVenta tbody tr:last');
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

        tabla31 = $('#lstRegistrosImprimir').DataTable({
            columnDefs: [
                {
                    targets: [0, 3], // Columnas 0 y 4
                    className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                },
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-check fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[5]);
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = '#FFFFFF';  // Blanco
                        } else if (valor == 1) {
                            color = '#F0F0F0';  // Gris muy claro
                        } else if (valor == 2) {
                            color = '#D0D0D0';  // Gris claro
                        } else if (valor == 3) {
                            color = '#A0A0A0';  // Gris medio
                        } else if (valor == 4) {
                            color = '#808080';  // Gris oscuro
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
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
                    targets: [5,6,7],
                    visible: false,
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 32 //1: LISTAR BOLETAS
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
                ajustarHeadersDataTables($('#lstRegistrosImprimir'));
            }
        });

        tabla32= $('#lstRegistrosProductosImprimir').DataTable({
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
            // "scrollX": true,
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            "order": [
                [1, 'asc']
            ],
            
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistrosProductosImprimir'));
            }
        });

        tabla32.on('init.dt', function () {

            $('#lstRegistrosProductosImprimir tbody').off('click', 'td.editable');
            $('#lstRegistrosProductosImprimir tbody').off('blur', 'td.editable');
            $('#lstRegistrosProductosImprimir tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)"

            $('#lstRegistrosProductosImprimir tbody').on('click', 'td.editable', function(){
                bloquear2 = 1;
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla32.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[6]===""){
                        data[6]="S./ 0.00";
                    }
                    $(this).text(parseFloat(data[6].replace("S./ ", "")));

                }else if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla32.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="1";
                    }
                    $(this).text(parseFloat(data[5]));

                    console.log(tabla32.cell($currentCell, 5).data())
                    var texto = tabla32.cell($currentCell, 5).data();
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
                
                    // Agregar el evento blur para detectar cuando se sale de la celda
                    // $(this).on('blur', function() {
                    //     console.log('No estoy en esta tabla');

                    //     bloquear2 = 0;
                    // });
            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstRegistrosProductosImprimir'));

            $('#lstRegistrosProductosImprimir tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla32.row($(this).parents('tr')).data();
                console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                // if (columnaModificada === 3) {
                //     descripcionColumna = 'Columna 3';
                    
                //     tabla32.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                // }
                // else if (columnaModificada === 2) {
                //     descripcionColumna = 'Columna 2';
                //     tabla32.cell(currentRow, 5).data(parseFloat(nuevoValor).toFixed(2) + " "+ texto_cantidad);
                // }

                if (columnaModificada === 3) {
                    var data = tabla32.row($(this).parents('tr')).data();
                    console.log("data[6] : "+data[6]);


                    var dinero_base = parseFloat(data[6].replace("S./ ", ""));
                    var dinero_actual = parseFloat(nuevoValor);

                    if(dinero_actual >= dinero_base/2){
                        descripcionColumna = 'Columna 3';
                        tabla32.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
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
                                tabla32.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                recalcularTotales();

                            }else{
                                descripcionColumna = 'Columna 3';
                                tabla32.cell(currentRow, 6).data("S./ "+parseFloat(dinero_base).toFixed(2));
                            }           
                        });
                        
                    }

                    
                }
                else if (columnaModificada === 2) {
                    var texto = tabla32.cell($currentCell, 5).data();
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
                                'id_cliente': ClienteBoleta2,
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("ClienteBoleta2 : " , ClienteBoleta2 , "respuesta : " , respuesta, "texto : ",texto+"-")

                                console.log(respuesta);
                                // Imprimir el mensaje en la consola según el texto
                                switch (texto) {
                                    case 'F':
                                        console.log("CASO F");
                                        if(respuesta['precio_fardo']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Fardos");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_fardo']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_fardo']).toFixed(2);  
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));    
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales();
                                        break;

                                    case 'L':
                                        console.log("CASO L");
                                        if(respuesta['precio_fardo']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Planchas");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_fardo']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_fardo']).toFixed(2);  
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));    
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();
                                        break;
                                        
                                    case 'M':
                                        console.log("CASO M");
                                        if(respuesta['precio_millar']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Millares");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_millar']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_millar']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();
                                       break;
                                    // Agrega más casos según las letras que necesites manejar
                                    case 'B':
                                        console.log("CASO B");
                                        if(respuesta['precio_caja']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Cajas");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_caja']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_caja']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'D':
                                        console.log("CASO D");
                                        if(respuesta['precio_docena']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Docenas");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_docena']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_docena']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", "")); 
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        } 
                                        recalcularTotales();   
                                        break;
                                    case 'C':
                                        console.log("CASO C");
                                        if(respuesta['precio_ciento']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Cientos");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_ciento']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_ciento']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'P':
                                        console.log("CASO P");
                                        if(respuesta['precio_paquetito']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Paquetitos");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_paquetito']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_paquetito']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    case 'U':
                                        console.log("CASO U");
                                        if(respuesta['precio_unidad']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Unidades");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_unidad']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_unidad']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2)); 
                                        }
                                        recalcularTotales();    
                                        break;
                                    default:
                                        // Actualizar la celda en la tabla con el nuevo valor
                                        tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                        tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        recalcularTotales();
                                        break;
                                }
                            }
                        });

                        
                    } else {
                        // Si nuevoValor no tiene la estructura número + texto, simplemente actualiza la celda con el valor original
                        tabla32.cell(currentRow, 5).data(parseFloat(nuevoValor) + " " + texto_cantidad);
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                        recalcularTotales();

                        
                    }
                }

                // var data = tabla32.row($(this).parents('tr')).data();
                console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));

                tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                recalcularTotales3();
            });

            // // Función para manejar eventos de teclado
            $('#lstRegistrosProductosImprimir tbody').on('keydown', 'td.editable', function(e) {
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
                }else if (keyCode === 40 || keyCode === 13 ) { // Tecla Enter
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
                                var data = tabla32.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $nextEditableCell.text(parseFloat(data[5]));

                                console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                console.log(texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        $currentCell.attr('contenteditable', 'false');
                        var $firstEditableCell = $('#lstRegistrosProductosImprimir tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $firstEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $firstEditableCell.text(parseFloat(data[5]));

                                console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                console.log(texto_cantidad);

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
                                var data = tabla32.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $prevEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $prevEditableCell.text(parseFloat(data[5]));

                                console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                console.log(texto_cantidad);

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
                        var $lastRow = $('#lstRegistrosProductosImprimir tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $lastEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla32.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $lastEditableCell.text(parseFloat(data[5]));

                                console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                console.log(texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($lastEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                        }
                    }
                } else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla51= $('#lstRegistrosEstados').DataTable({
            columnDefs: [
                {
                    targets: [0, 4,5], // Columnas 0 y 4
                    className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                },
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnAsignarHora text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-search fs-3'></i>" +
                            "</span>" +

                            // "<span class='btnSeleccion text-success px-1' style='cursor:pointer;'>" +
                            // "<i class='far fa-circle fs-5'></i>" +
                            // "</span>" +

                            
                            "</center>"
                    }
                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[16]);

                        var valor_2 = rowData[18];
                        ////console.log("este es el valor del row data 8 : ", valor)
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(255, 255, 255, 0.5)';  // Blanco con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 2) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Naranja con opacidad 0.7
                        } else if (valor == 3) {
                            color = 'rgba(154, 205, 50, 0.5)';  // Rojo con opacidad 0.7
                        } else if (valor == 4) {
                            color = 'rgba(154, 205, 50, 0.5)';  // Gris oscuro con opacidad 0.7
                        } else if (valor == 5) {
                            color = 'rgba(220, 20, 60, 0.5)';  // Gris oscuro con opacidad 0.7
                        }

                        if(valor_2 == ""){
                            color = 'rgba(173, 216, 230, 0.5)';
                        }


                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
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
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<h6><span style="font-weight: bold;color: blue;"> N° ' + formattedData + '</span></h6>';
                    }
                },

                {
                    targets: [3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<h6><span style="font-weight: bold;color: black;">' + formattedData + '</span></h6>';
                    }
                },

                {
                    targets: [5, 6, 7], // Columnas 4, 5 y 6
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir el formato de la fecha
                            var fecha = new Date(data);
                            var opciones = {
                                hour: '2-digit',
                                minute: '2-digit',
                                // day: '2-digit',
                                // month: '2-digit'
                            };
                            return fecha.toLocaleString('ES-es', opciones);
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                
                {
                    targets: 8, // Columna 8
                    render: function (data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Obtener las fechas de las columnas 6 y 7
                            var fechaInicio = new Date(row[5]);
                            var fechaFin = new Date(row[6]);

                            // Calcular la diferencia de tiempo en milisegundos
                            var diferenciaEnMilisegundos = fechaFin - fechaInicio;

                            // Convertir la diferencia a minutos
                            var diferenciaEnMinutos = diferenciaEnMilisegundos / (1000 * 60);

                            diferenciaEnMinutos = parseFloat(diferenciaEnMinutos)

                            // Si la diferencia es negativa, establecerla como 0
                            if (diferenciaEnMinutos < 0) {
                                diferenciaEnMinutos = 0;
                            }

                            // Mostrar la diferencia en minutos en la columna
                            return diferenciaEnMinutos.toFixed(2) + ' min';
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: 11, // Columna 8
                    render: function (data, type, row, meta) {
                        return "S/. " + parseFloat(data).toFixed(2);
                    }
                },

                {
                    targets: 16, // Columna 8
                    render: function (data, type, row, meta) {
                        if (data == 5){
                            return '<strong>' + "DEUDA" + '</strong>' ;
                        }else if(data == 1){
                            return "EFECTIVO";
                        }else if(data == 2){
                            return "YAPE";
                        }else if(data == 3){
                            return "PLIN";
                        }else if(data == 4){
                            return "TRANSFERENCIA";
                        }
                    }
                },

                {
                    targets: 18, // Columna 8
                    render: function (data, type, row, meta) {
                        if(data == 1){
                            return "BOLETA";
                        }else if(data == 2){
                            return "FACTURA";
                        }else{
                            return "NO IDENTIFICADO";
                            
                        }
                    }
                },

                {
                    targets: 10, // Columna 9
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir el valor a porcentaje
                            var porcentaje = data * 25;

                            // Crear el código HTML para la barra de progreso con bordeado negro
                            var barraProgresoHTML = '<div class="progress rounded-pill border border-dark" style="height: 20px;">' +
                                '<div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: ' + porcentaje + '%;" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="4"></div>' +
                                '</div>';

                            return barraProgresoHTML;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: 3, // Columna 2
                    render: function(data, type, row, meta) {
                        // Obtener la fecha de la columna 5
                        var fechaColumna5 = new Date(row[12]);
                        // Obtener la fecha actual
                        var fechaActual = new Date();
                        
                        // Verificar si la fecha de la columna 5 es del día actual
                        if (fechaColumna5.toDateString() === fechaActual.toDateString()) {
                            // Si es del día actual, devolver el dato en negrita
                            data = '<strong>' + data + '</strong>';
                        }

                        // Reducir el nombre si es más largo que cierta longitud
                        var maxLength = 40; // Establecer la longitud máxima deseada

                        // Verificar si el nombre tiene más de una palabra
                        var palabras = data.split(' - ');
                        if (palabras.length > 1) {
                            // Tomar solo los dos primeros nombres
                            data = palabras.slice(0, 2).join('-');
                        }

                        // Reducir el nombre si es más largo que la longitud máxima
                        if (data.length > maxLength) {
                            data = data.substring(0, maxLength) + '...'; // Reducir y agregar puntos suspensivos
                        }
                        
                        return data;
                    }
                },
                {
                    targets: 12, // Columna 11
                    visible:false,
                },
                {
                    targets: 13,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var icono = "";
                        if (data == 1) {
                            icono = "<i class='fas fa-check-circle text-success fs-5'></i>"; // ícono de check
                        } else if (data == 0) {
                            icono = "<i class='far fa-times-circle text-danger fs-5'></i>"; // ícono de X
                        }
                        return "<center>" +
                            "<span class='btnCambiarSecreto text-primary px-1' style='cursor:pointer;'>" +
                            icono +
                            "</span>" +
                            "</center>";
                    }
                },
                {
                    targets: 2,
                    visible: false,
                },
                {
                    targets: 14,
                    visible: false,
                },

                {
                    targets: [6,7,8,10,11,15,19,20,21],
                    visible: false,
                },


                
            ],
            ajax: {
                url: "ajax/compras.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 15 //15: LISTAR BOLETAS con tod la info
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
                ajustarHeadersDataTables($('#lstRegistrosEstados'));
            }
        });

        tabla61= $("#lstProductosPrecios").DataTable({
            columnDefs: [
                {
                    targets: [2, 3, 4],
                    createdCell: function (td, cellData, rowData, row, col) {
                        // Verificar si cellData está vacío
                        if (cellData === "" || cellData === null || cellData === undefined) {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        }
                    },
                    className: "text-center",
                },
                {
                    targets:[0,1],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
            ],
            pageLength: 10,
            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 31 //1: LISTAR PRODUCTOS
                },
            },
            responsive: {
                details: {
                    type: 'column'
                }
            },
            scrollX:true,
            "order": [
                [0, 'asc']
            ],
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstProductosPrecios'));
            }
        });

        tabla61.on('init.dt', function () {

            $('#lstProductosPrecios tbody').off('click', 'td.editable');
            $('#lstProductosPrecios tbody').off('keydown', 'td.editable');

            $('#lstProductosPrecios tbody').on('click', 'td.editable', function() {
                var range, selection;
                var $cell = $(this);

                // Asegurarse de que la celda es editable
                if ($cell.attr('contenteditable') === 'true') {
                    // Enfocar la celda
                    $cell.focus();
                    Seleccionar($cell);
                }
            });

            $('#lstProductosPrecios tbody').on('keydown', 'td.editable', function() {

                var $currentCell = $(':focus');
                var colIndex = $currentCell.index();

                // Navegar hacia abajo
                if (event.keyCode === 40) { // Flecha abajo
                    var $nextRow = $currentCell.closest('tr').next('tr');
                    if ($nextRow.length > 0) {
                        $nextRow.find('td').eq(colIndex).trigger('click');

                    }
                }

                // Navegar hacia arriba
                if (event.keyCode === 38) { // Flecha arriba
                    var $prevRow = $currentCell.closest('tr').prev('tr');
                    if ($prevRow.length > 0) {
                        $prevRow.find('td').eq(colIndex).trigger('click');
                    }
                }

                // Navegar hacia la izquierda
                if (event.keyCode === 37) { // Flecha izquierda
                    var $prevCell = $currentCell.prev('td');
                    if ($prevCell.length > 0) {
                        $prevCell.trigger('click');
                    }
                }

                // Navegar hacia la derecha
                if (event.keyCode === 39) { // Flecha derecha
                    var $nextCell = $currentCell.next('td');
                    if ($nextCell.length > 0) {
                        $nextCell.trigger('click');
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

    function CargarBotones(){

        /*===================================================================*/
        //ESTO SON LOS BOTONES DE LA LISTA DE PROVEEDORES
        /*===================================================================*/


        $("#content-proveedor").on('click', '.btnSeleccionarProveedor', function() {
            //tabla32.clear().draw();


            var data = tabla01.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta2 = 0;
                
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

                if(data[2] === "SIN IDENTIFICAC"){

                    Swal.fire({
                        icon: 'warning',
                        title: 'El proveedor no tiene dni o ruc registrado. Continuar?',
                        confirmButtonText: 'Aceptar',
                        showCancelButton: true,
                    }).then((result) => {

                        if(result.isConfirmed == true){

                            Dni_Proveedor = "0000000001";

                            $("#iptRucProveedor").val(Dni_Proveedor)

                            $("#iptNombreProveedor_venta").val(proveedor)

                            $("#iptRazonSocialProveedor_venta").val(social)

                            $("#iptDireccionProveedor_venta").val(Direccion)

                            $("#card-modulos").css("display","block");
                            console.log("id Perfil: " +idBoleta2);
                            cargarProductosAJAX(idBoleta2);
                            var elementoProveedor = document.getElementById("iptNombreProveedor");
                            var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");
                            var elementoProveedor2 = document.getElementById("iptDireccionProveedor");

                            if (elementoProveedor) {
                                elementoProveedor.textContent = idBoleta2;
                            }

                            if (elementoProveedor_0) {
                                elementoProveedor_0.textContent = idBoleta2;
                            }

                            if(elementoProveedor2){
                                elementoProveedor2.textContent = Direccion;
                            }

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
                                        $("#content-comprar-tab").click();
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
                            
                        }else{
                            return 0;
                        }
                    })

                    
                }else{

                    Dni_Proveedor = data[2].trim();
                    
                    $("#iptRucProveedor").val(Dni_Proveedor)

                    $("#iptNombreProveedor_venta").val(proveedor)

                    $("#iptRazonSocialProveedor_venta").val(social)

                    $("#iptDireccionProveedor_venta").val(Direccion)

                    $("#card-modulos").css("display","block");
                    console.log("id Perfil: " +idBoleta2);
                    cargarProductosAJAX(idBoleta2);
                    var elementoProveedor = document.getElementById("iptNombreProveedor");
                    var elementoProveedor_0 = document.getElementById("iptNombreProveedor_0");
                    var elementoProveedor2 = document.getElementById("iptDireccionProveedor");

                    if (elementoProveedor) {
                        elementoProveedor.textContent = idBoleta2;
                    }

                    if (elementoProveedor_0) {
                        elementoProveedor_0.textContent = idBoleta2;
                    }

                    if(elementoProveedor2){
                        elementoProveedor2.textContent = Direccion;
                    }

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
                                $("#content-comprar-tab").click();
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


            }
        });

        $("#content-proveedor").on('click', '.btnEditarProveedor', function() {

            $("#mdlActualizarProveedor").modal('show');

            var data = tabla01.row($(this).parents('tr')).data();

            console.log(data);

            $("#iptRasonSocial").val(data["Razon"].trim());
            $("#iptRasonComercial").val(data["Nombres"].trim());
            $("#iptIdentificacion").val(data["Identificacion"].trim());
            $("#iptDireccion").val(data["Direccion"].trim());

            Puesto = data[1];

        });

        $("#content-proveedor").on('click', '.btnEliminarProveedor', function() {

            var data = tabla01.row($(this).parents('tr')).data();

            console.log(data);

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

        $("#btnAgregarPorductoxProveedor").on("click",function() {
            // $("#iptNombreProducto").focus()
            colIndex2 = 5;
            rowIndex2 = 0; 
            mostrarCambios();
            $("#content-comprar-tab").click();
            $("#fecha_salida").val(moment().format('hh:mm'));
                $("#fecha_regreso").val(moment().format('hh:mm'));
                $('html, body').animate({
                    scrollTop: 10000
                }, 500, function() {
                    setTimeout(function() {
                        $("#iptCodigoVenta").focus();
                    }, 500); // Retraso de 100 milisegundos después de la animación
                });
            // Deslizar()
            // $("#iptCodigoVenta").focus();
        });

        document.getElementById("btnGuardarCliente").addEventListener("click", function() {
            console.log("funciona?")
            GuardarDatos(Puesto);
        });

        /*===================================================================*/
        //ESTO SON LOS BOTONES DENTRO DE EL LISTADO DE COMPRAS
        /*===================================================================*/


        $("#btnCopiar1").on('click', function() {
            //console.log("se presiono el btn copiar 1")
            CopiarTabla11();

        });

        $("#btnPegar1").on('click', function() {

            PegarTabla11();

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

        $("#btnRegistroEsp").on("click", function(){
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

                            HacerVentaEsp();
                            tabla31.ajax.reload();
                            tabla51.ajax.reload();
                        }


                    });


                }else{

                    HacerVentaEsp();
                    tabla31.ajax.reload();
                    tabla51.ajax.reload();
                }

                $("#content-proveedor-tab").click();

            } else {

                Toast.fire({
                    icon: 'warning',
                    title: "No hay productos en la lista",
                    showConfirmButton: false,
                    timer: 1500
                })

            }
            
            

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
                            tabla31.ajax.reload();
                            tabla51.ajax.reload();
                        }


                    });


                }else{

                    HacerVentaCotizacion();
                    tabla31.ajax.reload();
                    tabla51.ajax.reload();
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

        $("#btnRegistrar1").on("click", function(){

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

                            HacerVentaNormal();
                            tabla31.ajax.reload();
                            tabla51.ajax.reload();
                        }


                    });


                }else{

                    HacerVentaNormal();
                    tabla31.ajax.reload();
                    tabla51.ajax.reload();
                }

            } else {

                Toast.fire({
                    icon: 'warning',
                    title: "No hay productos en la lista",
                    showConfirmButton: false,
                    timer: 1500
                })

            }

            $("#content-proveedor-tab").click();

            $("#iptBuscarProveedor").focus();
            
        });

        $("#btnHacerCompra").on("click", function(){
            CargarNroBoleta();

            fecha_regreso = $("#fecha_regreso").val();

            fecha_regreso = ventas_desde + " " + fecha_regreso ;

            fecha_salida = $("#fecha_salida").val();

            fecha_salida = ventas_desde + " " + fecha_salida ;

            console.log("fecha_regreso : ",fecha_regreso , "fecha_salida : ",fecha_salida)

            if (!isActionInProgress2) {
                var count = 0;
                var totalVenta = $("#totalVenta").html();
                var nro_boleta = $("#iptNroVenta").val();
                var Tipo_pago = $("#selTipoPago").val();
                var mensajero = $("#iptEncargado").val();
                var cliente = $("#iptNombreProveedor").text();
                var palabra = cliente;
                var cancelacion = 0;
                var tipo_documento = $("#selBolFac").val();
                var iptNumeroDocumento = $("#iptNumeroDocumento").val();

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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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

                                    var confirmador =  $("#iptNombreProveedor").text();
                                    console.log("confirmador este ese: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log('Valor de seleccion: ',seleccion )
                                    

                                    ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);


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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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
                                    console.log("confirmador 12131232: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log(formData,nro_boleta,arrIndicador,arrPrecios)
                                    ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);
                                
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

            $("#content-proveedor-tab").click();

            $("#iptBuscarProveedor").focus();

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

        /*===================================================================*/
        //ESTO SON LOS BOTONES DENTRO DE EL LISTADO DE IMPRESION Y EDICION
        /*===================================================================*/

        $('#btnActualizar3').on("click",function(){
            tabla31.ajax.reload();
        });

        $("#btnGuardar3").on('click', function() {

            console.log(idBoleta);
            if(idBoleta == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var seleccion = 1;

                    tabla32.rows().eq(0).each(function(index) {

                        var row = tabla32.row(index);

                        var data = row.data();

                        var palabras = data[5].match(/[a-zA-Z()]+/g);

                        console.log(data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                        arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));

                        console.log("array 1: " + arr);

                        formData.append('arr[]', arr[index]);

                    });

                formData.append('nro_boleta', idBoleta);

                formData.append('accion', 10);

                $.ajax({
                        url: "ajax/compras.ajax.php",
                        method: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            console.log("respuesta: ", respuesta);
                            tabla31.ajax.reload();
                            tabla32.clear().draw();
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "Guardado con exito",
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }
                    });
            }

        });

        $("#btnImprimir3").on("click",function(){


            console.log(idBoleta);
            if(idBoleta == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var arrIndicador  = [];
                var arrPrecios  = [];
                var seleccion = $("#selDocumentoVenta").val();


                    tabla32.rows().eq(0).each(function(index) {

                        var row = tabla32.row(index);

                        var data = row.data();

                        var total  = data[7].replace("S./ ", "");
                        var tot = parseFloat(total);

                        var precio  = tot/parseFloat(data[5]);
                        var prec = parseFloat(precio);

                        var palabras = data[5].match(/[a-zA-Z()]+/g);

                        console.log(data[1] + " , " + data[5] +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                        arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                        arrIndicador[index] = data[5];
                        arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);



                        formData.append('arr[]', arr[index]);

                    });

                idBoleta = idBoleta.replace(/^\s+|\s+$/g, '');
                console.log("array 1: " + arr);

                formData.append('nro_boleta', idBoleta);

                formData.append('accion', 10);

                var confirmador =  $("#iptNombreProveedor").text();

                console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta+"'");

                var Texto_pago_imprimir = "Efectivo"

                if(Tipo_pago_imprimir == 1){

                    Texto_pago_imprimir = "Efectivo"

                }else if(Tipo_pago_imprimir == 2){

                    Texto_pago_imprimir = "Yape"

                }else if(Tipo_pago_imprimir == 3){

                    Texto_pago_imprimir = "Plin"

                }else if(Tipo_pago_imprimir == 4){

                    Texto_pago_imprimir = "Trasferencia"

                }else if(Tipo_pago_imprimir == 5){

                    Texto_pago_imprimir = "Deuda"

                }

                $.ajax({
                    url: "ajax/compras.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': idBoleta
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta: ", respuesta[0]["cliente"]);
                        if(seleccion == 1){window.open('http://192.168.1.41/market-pos/vistas/generar_boleta_compra.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"])+ '&Texto_pago=' + Texto_pago_imprimir+ '&Mensajero=' + Mensajero_imprimir );}

                        else if (seleccion == 3) {

                                // var url = 'http://192.168.1.41/market-pos/vistas/generar_ticket.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios;
                                // window.open(url, '_blank');
                                var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"])+ '&Texto_pago=' + Texto_pago_imprimir+ '&Mensajero=' + Mensajero_imprimir;

                                // Abrir la nueva ventana
                                var nuevaVentana = window.open(url, '_blank');

                                //nuevaVentana.print();

                                // // Esperar 10 segundos y luego imprimir
                                // setTimeout(function() {
                                //     //nuevaVentana.print();
                                // }, 2000); // 10000 milisegundos = 10 segundos
                            }

                        else if (seleccion == 2){ 
                                                window.open('http://192.168.1.41/market-pos/vistas/generar_factura_compra.php?' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"]));
                                                console.log("iNDICADOR: "+ arrIndicador);
                                                console.log("PRECIOS: "+ arrPrecios);
                                                console.log("array 1: " + idBoleta);
                                            }

                        else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/generar_nota_compra.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                        else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision_compra.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"]));}


                    }
                });
            }
        });

        $("#btnEliminarRegistro3").on("click", function(){
            tabla32.clear().draw();

            EliminarRegistro(idBoleta);

            $("#totalVentaRegistrarVista3").html("");
            $("#totalVentaRegistrarVista3").html("0.00");
        });

        $('#lstRegistrosImprimir tbody').on('click', '.btnEditarProducto', function(){

            tabla32.clear().draw();

            $("#totalVentaRegistrarVista3").html("");
            $("#totalVentaRegistrarVista3").html("0.00");

            var data = tabla31.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta = 0;


                
                ClienteBoleta2= "";

                cargarProductosAJAXRegistros2(0);

                $("#card-modulos").css("display", "none");

            }else{

                tabla31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta = data[1];
                ClienteBoleta2 = data[2];

                Mensajero_imprimir = data[6];
                Tipo_pago_imprimir = data[7];

                cargarProductosAJAXRegistros2(ClienteBoleta2);

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta, "- ", ClienteBoleta2);

                $.ajax({
                    async:false,
                    url:"ajax/compras.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 9,
                        id_boleta: idBoleta
                    },
                    dataType: 'json',
                    success: function (respuesta){

                        console.log(respuesta);
                        enListarProductos2(respuesta);
                    }
                })


            }
        });

        $('#lstRegistrosProductosImprimir tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla32);
        });

        $('#lstRegistrosProductosImprimir tbody').on('click', '.btnEliminarproducto', function() {

            var data = tabla32.row($(this).parents('tr')).data();


            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[4] + ' " del registro actual? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){
                    var cod_producto = data[1];
                    var fila = $(this).parents('tr')
                    
                    EliminarProductoVenta(idBoleta,cod_producto,fila);
                    recalcularTotales3();
                }
            })
        });

        $("#btnRegistrarPrecios").on("click", function(){

            $("#mdlGestionarProducto").modal("hide")

            $("#mdlGestionarPrecios").modal("show")

        });

        $("#btnRegresarPrecios").on('click', function() {

            $("#mdlGestionarProducto").modal("show")

            $("#mdlGestionarPrecios").modal("hide")

        })

        /*===================================================================*/
        //ESTO SON LOS BOTONES DENTRO DE EL LISTADO EDICION DE COMPRAS
        /*===================================================================*/

        $('#btnActualizar4').on("click",function(){
            tabla51.ajax.reload();
        });

        $("#lstRegistrosEstados tbody").on('click','.btnAsignarHora', function(){

            var data = tabla51.row($(this).parents('tr')).data();

            console.log(data);

            Boleta_Registro = data["nro_boleta"]

            var Proveedor           = data["Proveedor"];
            var mensajero           = data["mensajero"];
            var tipo_documento      = data["tipo_documento"];
            var Tipo_pago           = data["Tipo_pago"];
            var compra              = data["fecha_compra"];
            var nro_documento       = data["nro_documento"];
            var tipo_dni            = data["tipo_dni"]
            var comentario          = data["comentario"]
            var salida              = data["fecha_salida"]
            var regreso             = data["fecha_regreso"]
            var pago                = data["fecha_pago"]

            var objetoMoment = moment(compra, "YYYY-MM-DD HH:mm:ss");

            var objetoMoment_pago = moment(pago, "YYYY-MM-DD HH:mm:ss");

            // Obtener la fecha formateada en "DD/MM/YYYY"
            var fecha_compra = objetoMoment.format("DD/MM/YYYY");

            var fecha_pago = objetoMoment_pago.format("DD/MM/YYYY");

            var texto_salida = salida.split(" ");

            var fecha_salida = texto_salida[1]

            var salida_2 = convertirHora12h(fecha_salida)

            var texto_salida_2 = salida_2.split(" ");

            var fecha_salida = texto_salida_2[0]

            var sel_salida = texto_salida_2[1]
            /////////////////////////////////////////////////////////

            var texto_regreso = regreso.split(" ");

            var fecha_regreso = texto_regreso[1]

            var regreso_2 = convertirHora12h(fecha_regreso)

            var texto_regreso_2 = regreso_2.split(" ");

            var fecha_regreso = texto_regreso_2[0]

            var sel_regreso = texto_regreso_2[1]

            /////////////////////////////////////////////////////////

            




            console.log(Proveedor)
            
            if(Proveedor.trim() === "VARIOS"){

                $("#iptNombreProveedor_venta_modal").val(Proveedor);
                $("#iptEncargado_modal").val(mensajero);
                $("#selBolFac_modal").val(tipo_documento);
                $("#selTipoPago_modal").val(Tipo_pago); 
                $("#ventas_desde_modal").val(fecha_compra);
                $("#iptNumeroDocumento_modal").val(nro_documento);
                $("#selTipoDni_modal").val(tipo_dni);
                $("#iptComentario_modal").val(comentario);
                $("#fecha_salida_modal").val(fecha_salida);
                $("#fecha_regreso_modal").val(fecha_regreso);
                $("#sel_PM_salida_modal").val(sel_salida);
                $("#sel_PM_regreso_modal").val(sel_regreso);
                $("#ventas_pago_modal").val(fecha_pago);

                $("#iptDireccionProveedor_venta_modal").val("SIN DIRECCION");
                $("#iptRazonSocialProveedor_venta_modal").val("SIN RAZON");
                $("#iptRucProveedor_modal").val("0000000001");

                $("#mdlGestionDeCompra").modal("show");

            }else{ 

            
                $.ajax({
                    async:false,
                    url:"ajax/clientes.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 15,
                        Proveedor: Proveedor
                    },
                    dataType: 'json',
                    success: function (respuesta){

                        console.log(respuesta);

                        $("#iptNombreProveedor_venta_modal").val(Proveedor);
                        $("#iptEncargado_modal").val(mensajero);
                        $("#selBolFac_modal").val(tipo_documento);
                        $("#selTipoPago_modal").val(Tipo_pago);
                        $("#ventas_desde_modal").val(fecha_compra);
                        $("#iptNumeroDocumento_modal").val(nro_documento);
                        $("#selTipoDni_modal").val(tipo_dni);
                        $("#iptComentario_modal").val(comentario);
                        $("#fecha_salida_modal").val(fecha_salida);
                        $("#fecha_regreso_modal").val(fecha_regreso);
                        $("#sel_PM_salida_modal").val(sel_salida);
                        $("#sel_PM_regreso_modal").val(sel_regreso);

                        $("#iptDireccionProveedor_venta_modal").val(respuesta[0]["Direccion"]);
                        $("#iptRazonSocialProveedor_venta_modal").val(respuesta[0]["Razon"]);

                        if(respuesta[0]["Identificacion"] === "SIN IDENTIFICAC"){

                            $("#iptRucProveedor_modal").val("0000000001");

                        }else{
                            $("#iptRucProveedor_modal").val(respuesta[0]["Identificacion"]);
                        }
                        $("#mdlGestionDeCompra").modal("show");

                        calcularDiferencia_modal();
                    }
                });

            }

            

        });

        $("#btnGuardarDatosCompra").on("click",function() {

            console.log("HOLA");
            var nro_boleta      = Boleta_Registro
            var nombre          = $("#iptNombreProveedor_venta_modal").val();
            var social          = $("#iptRazonSocialProveedor_venta_modal").val();
            var direccion       = $("#iptDireccionProveedor_venta_modal").val();
            var dni             = $("#iptRucProveedor_modal").val();
            var mensajero       = $("#iptEncargado_modal").val();
            var Tipo_pago       = $("#selTipoPago_modal").val();
            var tipo_documento  = $("#selBolFac_modal").val();
            var tipo_dni        = $("#selTipoDni_modal").val();
            var fecha_compra    = $("#ventas_desde_modal").val();
            var nro_documento   = $("#iptNumeroDocumento_modal").val();
            var comentario      = $("#iptComentario_modal").val();
            var fecha_salida    = $("#fecha_salida_modal").val() + " " + $("#sel_PM_salida_modal").val();
            var fecha_regreso   = $("#fecha_regreso_modal").val()+ " "+ $("#sel_PM_regreso_modal").val();
            var fecha_pago      = $("#ventas_pago_modal").val();

            $.ajax({
                url: "ajax/compras.ajax.php",
                method: "POST",
                data: {
                    'accion': 16,
                    'nro_boleta'    : nro_boleta,
                    'Proveedor'     : nombre,
                    'fecha_compra'  : fecha_compra,
                    'mensajero'     : mensajero,
                    'Tipo_pago'     : Tipo_pago,
                    'nro_documento' : nro_documento,
                    'tipo_documento': tipo_documento,
                    'tipo_dni'      : tipo_dni,
                    'comentario'    : comentario,
                    'fecha_salida'  : fecha_salida,
                    'fecha_regreso' : fecha_regreso,
                    'fecha_pago'    : fecha_pago,
                },
                dataType: 'json', 
                success: function(respuesta) {

                    console.log(respuesta);

                    if(respuesta === "OK"){

                        Toast.fire({
                            icon: 'success',
                            title: "Cambios realizados correctamente",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        $("#mdlGestionDeCompra").modal("hide");
                        tabla51.ajax.reload()
                        
                    }else{

                        Swal.fire({
                            icon: 'warning',
                            title: "Error con los datos",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        tabla51.ajax.reload()

                    }

                   

                }
            });

        });

        $("#btnDetallesCompra").on("click",function() {

            var nroBoleta = Boleta_Registro;

            if($.fn.DataTable.isDataTable("#tblDetalleCompras")){
                $("#tblDetalleCompras").DataTable().destroy();
            }

            $("#tblDetalleCompras tbody").empty();

            $("#tblDetalleCompras").DataTable({
                columns:[
                    {data:'id'},
                    {data:'nro_boleta'},
                    {data:'codigo_producto'},
                    {data:'nombre_categoria'},
                    {data:'descripcion_producto'},
                    {data:'cantidad'},
                    {data:'total_compra'}
                ],
                processing : true,
                serverSide : true,
                pading:false,
                scrollX:true,
                ajax:{
                    url: "ajax/EditTable/obtener_detalle_compra.php",
                    type:"POST",
                    dataType: "json",
                    data:{"nro_boleta": nroBoleta},
                }
            });

            $("#mdlGestionDeCompra").modal("hide");

            $("#modalDetallesCompra").modal("show");
            
        })

        $("#btnCerrarModalDetallesCompra").on("click",function() {

            console.log("emanuel")

            $("#mdlGestionDeCompra").modal("show");

            $("#modalDetallesCompra").modal("hide");

        })
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

    function convertirHora12h(hora24h) {
        var [hora, minutos] = hora24h.split(":");
        var horaNum = parseInt(hora, 10);
        var periodo = horaNum < 12 ? "AM" : "PM";

        if (horaNum === 0) {
            horaNum = 12; // Si es medianoche, la hora se convierte a 12 AM
        } else if (horaNum > 12) {
            horaNum -= 12; // Convertir hora mayor a 12 a formato de 12 horas
        }

        return `${horaNum.toString().padStart(2, '0')}:${minutos} ${periodo}`;
    }

    function HacerVentaEsp(){
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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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

                                    var confirmador =  $("#iptNombreProveedor").text();
                                    console.log("confirmador este ese: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log('Valor de seleccion: ',seleccion );
                                    

                                    ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);
                                    tabla51.ajax.reload();

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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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
                                    console.log("confirmador 12131232: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log(formData,nro_boleta,arrIndicador,arrPrecios);
                                    ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);
                                    tabla51.ajax.reload();
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
        tabla51.ajax.reload();
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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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

                                    var confirmador =  $("#iptNombreProveedor").text();
                                    console.log("confirmador este ese: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log('Valor de seleccion: ',seleccion );
                                    

                                    ejecutarAjaxNORMAL(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);
                                    tabla51.ajax.reload();

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
                                var seleccion = 9;

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

                                    var deuda  = parseFloat(totalVenta)  //esto para volver la deuda en un numero positivo

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
                                    console.log("confirmador 12131232: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    console.log(formData,nro_boleta,arrIndicador,arrPrecios);
                                    ejecutarAjaxNORMAL(formData,nro_boleta,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario);
                                    tabla51.ajax.reload();
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
    }

    /*===================================================================*/
    //FUNCIONES PARA CARGAR PRODUCTOS EN UN CUADRO DE TEXTO
    /*===================================================================*/
    
    function cargarProductosAJAX(idBoleta2) {
        
        if(idBoleta2 == 0){

            if($('#content-proveedor:visible').length > 0 || $('#content-comprar:visible').length > 0 
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

                // $.ajax({
                //     async: false,
                //     url: "ajax/productos.ajax.php",
                //     method: "POST",
                //     data: {
                //         'accion': 6
                //     },
                //     dataType: 'json',
                //     success: function (respuesta) {

                        
                //         $("#iptCodigoVentaRegistro").autocomplete({
                //             source: respuesta,
                //             select: function (event, ui) {
                //                 console.log("ui.item.value : " + ui.item.value)
                //                 var Texto = ui.item.value;
                //                 var palabras = Texto.split("/");

                //                 var cliente = palabras[1];
                //                 var producto = palabras[0];

                //                 if(idBoleta2 == 0){
                //                     CargarProductos2(ui.item.value);
                //                 }else if(cliente === ""){
                //                     CargarProductos2(ui.item.value);
                //                 }else{
                //                     CargarProductosProveedors(producto,cliente);
                //                 }
                //                 $("#iptCodigoVentaRegistro").val("");
                //                 $("#iptCodigoVentaRegistro").focus();
                //                 return false;
                //             },
                //         }).data("ui-autocomplete")._renderItem = function (ul, item) {
                //             return $("<li class='ui-autocomplete-row'></li>")
                //                 .data("item.autocomplete", item)
                //                 .append(item.label)
                //                 .appendTo(ul);
                //         };

                //         // Agregar evento de enfoque y desenfoque a los elementos de la lista
                //         $(".ui-autocomplete-row").on("focus", function () {
                //             $(this).addClass("ui-state-focus");
                //         }).on("blur", function () {
                //             $(this).removeClass("ui-state-focus");
                //         });

                //     },
                // });
            }

        }else{

            

            if($('#content-proveedor:visible').length > 0 || $('#content-comprar:visible').length > 0 
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

    /*===================================================================*/
    //FUNCIONES PARA CARGAR PRODUCTOS EN UNA TABLA
    /*===================================================================*/
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

                    if (respuesta['aplica_peso'] == 1) {


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

                    } else {

                        tabla11.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            1 + " " + indicador,
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

                    }

                    recalcularTotales()

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

    /*===================================================================*/
    //FUNCIONES PARA RECALCULAR EL PRECIO DE LA COMPRA
    /*===================================================================*/
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

            // Obtenemos las celdas filtradas con la clase "editable"
            var celdasFiltradas = $('#lstProductosCatalogoxProveedor tbody td.editable');

            //console.log("celdasFiltradas : ",celdasFiltradas)

            // Iteramos sobre las celdas filtradas
            celdasFiltradas.each(function() {
                var newValue = parseFloat($(this).text());
                
                // Verificamos si el valor es un número mayor que 0
                if (!isNaN(newValue) && newValue > 0) {
                    cantidad++; // Incrementamos la cantidad si se cumple la condición
                }
            });

            console.log('Cantidad de filas con números mayores que 0:', cantidad);

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

                console.log($this, colIndex2, rowIndex2);

                $this.attr('contenteditable', 'true');

                var range = document.createRange();
                range.selectNodeContents(this);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
                
            });

            $('#lstProductosCatalogoxProveedor tbody').on('blur', 'td.editable', function(){

                var cantidad = 0; // Inicializamos la cantidad a 0

                // Obtenemos las celdas filtradas con la clase "editable"
                var celdasFiltradas = $('#lstProductosCatalogoxProveedor tbody td.editable');

                //console.log("celdasFiltradas : ",celdasFiltradas)

                // Iteramos sobre las celdas filtradas
                celdasFiltradas.each(function() {
                    var newValue = parseFloat($(this).text());
                    
                    // Verificamos si el valor es un número mayor que 0
                    if (!isNaN(newValue) && newValue > 0) {
                        cantidad++; // Incrementamos la cantidad si se cumple la condición
                    }
                });

                console.log('Cantidad de filas con números mayores que 0:', cantidad);

                document.getElementById("cantidadProductos").textContent = cantidad;

                var rowIndex = $(this).closest('tr').index();
                var colIndex = $(this).index();
                var newValue = $(this).text();
                var data = tabla02.row($(this).parents('tr')).data();

                
                
                if(parseFloat(newValue) < 0) {
                    editedCell.text("");
                } else {
                    if(newValue === ""){
                        newValue = 0;
                    }

                    if(newValue == 0){
                        
                        console.log("eliminando : ",data);
                        // Filtrar elementos con data[0] igual a 1 y mantener los que no cumplen esa condición
                        productos_por_agregar = productos_por_agregar.filter(item => item[0] != data[1]);

                        // Filtrar elementos con codigo igual a 1 y mantener los que no cumplen esa condición
                        cambiosEditables = cambiosEditables.filter(item => item.codigo != data[1]);
                        
                    }else{
                        productos_por_agregar.push([data[1], data[3], newValue, data[4]]);
                        cambiosEditables.push({ rowIndex: rowIndex, colIndex: colIndex, newValue: newValue, codigo: data[1], precio: data[4], medida: data[3] });
                        
                    }
                }
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

        $("#mdlProductosCatalogoxProveedor").modal('show');

        $(document).on('keydown', function(e) {

            if($('#mdlProductosCatalogoxProveedor').is(':visible')){
         
             
                var $this = $(this);
             
                var numRows = tabla02.rows().count();
                var numCols = tabla02.columns().count();
                
                switch (e.which) {
                
                    case 38: // Tecla de flecha arriba
                        event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                        if (!isActionInProgress) {

                            isActionInProgress = true;
                            var $visibleRows = $('#lstProductosCatalogoxProveedor tbody tr:visible');

                            // Verificar si hay filas visibles en la tabla
                            if ($visibleRows.find('td:nth-child(2)').text() === "") {
                                console.log('No hay filas visibles en la tabla.');
                                
                            }else{
                                // Set the flag to indicate that the action is now in progress
                                
                                $('#lstProductosCatalogoxProveedor tbody td[contenteditable=true]').removeAttr('contenteditable');
                                // Obtener la fila actualmente seleccionada (si hay alguna)
                                var $selectedRow = $('#lstProductosCatalogoxProveedor tbody tr.selected');
                                console.log($selectedRow.length);

                                if ($selectedRow.length === 0) {
                                    // Si no hay ninguna fila seleccionada, seleccionar la última fila
                                    $('#lstProductosCatalogoxProveedor tbody tr:last').addClass('selected');
                                    $selectedRow = $('#lstProductosCatalogoxProveedor tbody tr:last');
                                    var $celdaEditable =$selectedRow.find('td:eq(6)');
                                    $celdaEditable.attr('contenteditable', 'true');
                                    $celdaEditable.focus();
                                    // Seleccionar todo el texto dentro de la celda
                                    var range = document.createRange();
                                    range.selectNodeContents($celdaEditable.get(0));
                                    var sel = window.getSelection();
                                    sel.removeAllRanges();
                                    sel.addRange(range);

                                } else {
                                    // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
                                    $selectedRow.removeClass('selected');
                                    var $filaAnterior = $selectedRow.prev('tr');
                                    $filaAnterior.addClass('selected');

                                    // Obtener la celda de la columna 7 en la fila seleccionada
                                    var $celdaEditable = $filaAnterior.find('td:eq(6)');

                                    // Activar la edición en la celda de la columna 7
                                    $celdaEditable.attr('contenteditable', 'true');
                                        $celdaEditable.focus();
                                    // Comprobar si la celda es válida y no está vacía
                                    if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                        

                                        // Seleccionar todo el texto dentro de la celda
                                        var range = document.createRange();
                                        range.selectNodeContents($celdaEditable.get(0));
                                        var sel = window.getSelection();
                                        sel.removeAllRanges();
                                        sel.addRange(range);
                                    }
                                }
                            }
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Ajusta el retardo según sea necesario
                        }
                        break;
                    case 40: // Tecla de flecha abajo
                        event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Abajo
                        if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            var $visibleRows = $('#lstProductosCatalogoxProveedor tbody tr:visible');

                            // Verificar si hay filas visibles en la tabla
                            if ($visibleRows.find('td:nth-child(2)').text() === "") {
                                console.log('No hay filas visibles en la tabla.');
                                
                            }else{
                                // Quitar el atributo 'contenteditable' de todas las celdas
                                $('#lstProductosCatalogoxProveedor tbody td[contenteditable=true]').removeAttr('contenteditable');

                                // Obtener la fila actualmente seleccionada (si hay alguna)
                                var $selectedRow = $('#lstProductosCatalogoxProveedor tbody tr.selected');

                                if ($selectedRow.length === 0) {
                                    // Si no hay ninguna fila seleccionada, seleccionar la primera fila
                                    $('#lstProductosCatalogoxProveedor tbody tr:first').addClass('selected');
                                    $selectedRow = $('#lstProductosCatalogoxProveedor tbody tr:first');
                                    var $celdaEditable =$selectedRow.find('td:eq(6)');
                                    $celdaEditable.attr('contenteditable', 'true');
                                    $celdaEditable.focus();
                                    // Seleccionar todo el texto dentro de la celda
                                    var range = document.createRange();
                                    range.selectNodeContents($celdaEditable.get(0));
                                    var sel = window.getSelection();
                                    sel.removeAllRanges();
                                    sel.addRange(range);
                                } else {
                                    // Si hay una fila seleccionada, mover la selección a la fila siguiente y quitar la selección de otras filas
                                    $selectedRow.removeClass('selected');
                                    var $filaSiguiente = $selectedRow.next('tr');
                                    $filaSiguiente.addClass('selected');

                                    // Obtener la celda de la columna 7 en la fila seleccionada
                                    var $celdaEditable = $filaSiguiente.find('td:eq(6)');
                                    // Activar la edición en la celda de la columna 7
                                    $celdaEditable.attr('contenteditable', 'true');
                                        $celdaEditable.focus();
                                    // Comprobar si la celda es válida y no está vacía
                                    if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                        

                                        // Seleccionar todo el texto dentro de la celda
                                        var range = document.createRange();
                                        range.selectNodeContents($celdaEditable.get(0));
                                        var sel = window.getSelection();
                                        sel.removeAllRanges();
                                        sel.addRange(range);
                                    }
                                }
                            }
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Ajusta el retardo según sea necesario
                        }
                        break;
                    case 13: // Tecla "Enter"
                        e.preventDefault();

                        if (isSwalOpen) {
                            // Si el modal Swal está abierto, simula el clic en el botón de confirmación
                            Swal.clickConfirm();
                            return;
                        }

                        if (!isActionInProgress) {

                            $this.removeAttr('contenteditable');
                            $("#iptNombreProducto").focus();
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Ajusta el retardo según sea necesario
                        }

                        break;
                    case 121: // Tecla "Enter"
                        e.preventDefault();
                        if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            
                            $("#btnAgregarPorductoxProveedor").click();

                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Ajusta el retardo según sea necesario
                        }
                        break;
                    default:
                        return; // Si no es una tecla de navegación o "Enter", salir sin hacer nada
                }
                e.preventDefault(); // Evitar el comportamiento predeterminado de las teclas de dirección y "Enter"
         
            }
            
             
        });

    }

    function CopiarTabla11(){
        limpiar_tabla(tabla11);

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

    function CargarProductosPegado(producto = "", cantidad, precio, total,tabla11) {

        console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

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

                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var nombreCategoria = respuesta['nombre_categoria'];

                    var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                    console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")
                    var TotalVenta = 0.00;

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    var indicador = "Unidades";

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

                    if (respuesta['aplica_peso'] == 1) {


                        tabla11.row.add([
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

                    } else {

                        tabla11.row.add([
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

                    }

                    recalcularTotales()

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

    function CargarProductosPegado3(producto = "", cantidad, precio, total) {

        //console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        //console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla32.rows().eq(0).each(function(index) {

            var row = tabla32.row(index);
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
                            tabla32.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla32.cell(index, 7).data(NuevoPrecio).draw();

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

                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var TotalVenta = 0.00;

                    var nombreCategoria = respuesta['nombre_categoria'];

                    var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                    console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    var indicador = "Unidades";

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

                    if (respuesta['aplica_peso'] == 1) {


                        tabla32.row.add([
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
                                            // "<span class='btnEditarproducto text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                            // "<i class='fas fa-edit fs-5'> </i> " +
                                            // "</span>" +
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

                    } else {

                        tabla32.row.add([
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
                                            // "<span class='btnEditarproducto text-warning px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                            // "<i class='fas fa-edit fs-5'> </i> " +
                                            // "</span>" +
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

                    }

                    recalcularTotales3()

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
        console.log("2524: ",resultados);
        var i = 0;
        for(i = 0; i<resultados.length; i++){

            var medida = resultados[i][1];
            var codigo = resultados[i][0];
            var precio = parseFloat(resultados[i][3]).toFixed(2);
            var cantidad = parseFloat(resultados[i][2]).toFixed(2);

            console.log ("2533: ",codigo,precio,cantidad,medida);
            if(cantidad>0){
                grabar_datos_venta(medida,codigo,precio,cantidad)
            }
            
        }
    }

    function grabar_datos_venta(medida,codigo,precio,cantidad){
        console.log (codigo,precio,cantidad,medida);
        var total = precio * parseFloat(cantidad);
        var producto_repetido = 0;


        tabla11.rows().eq(0).each(function(index) {

            var row = tabla11.row(index);
            var data = row.data();
            //console.log("data[6]: " , data[1] );
            //console.log("data[6]: " , parseInt(codigo) );
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
                'codigo_producto': codigo
            },
            dataType: 'json',
            success: function(respuesta) {
                if (respuesta) {

                    console.log(respuesta);

                    var texto_total = "S./ " + parseFloat(total).toFixed(2);;

                    var texto_precio = "S./ " + parseFloat(precio).toFixed(2);;

                    var data = tabla11.rows().data();

                    if(medida === "paquetito"){
                        medida = "Paquetitos"
                    }else if(medida === "unidad"){
                        medida = "Unidades"
                    }else if(medida === "docena"){
                        medida = "Docenas"
                    }else if(medida === "ciento"){
                        medida = "Cientos"
                    }else if(medida === "millar"){
                        medida = "Millares"
                    }else if(medida === "caja"){
                        medida = "Cajas"
                    }else if(medida === "fardo"){
                        medida = "Fardos"
                    }

                    var nombreCategoria = respuesta['nombre_categoria'];

                    var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                    console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")

                    // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
               

                    var TotalVenta = 0.00;

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    var indicador = "Unidades";

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
                        codigo,
                        respuesta['id_categoria'],
                        respuesta['nombre_categoria'],
                        respuesta['descripcion_producto'],
                        parseFloat(cantidad)+ " " + medida,
                        texto_precio,

                     
                        texto_total,
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
                    
                    
                    

                    

                    recalcularTotales()
                }
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
             var nombre = wrapText(datos[1], 18); // Longitud máxima del nombre
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

    function ejecutarAjaxESP(formData,idBoleta2,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario) {
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
                tabla31.ajax.reload();
                tabla51.ajax.reload();

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

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 30,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json', 
                    success: function(respuesta) {

                        console.log(respuesta);

                        // window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );

                       var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"])+ '&Texto_pago=' + Texto_pago+ '&Mensajero=' + Mensajero;

                        // Abrir la nueva ventana
                        var nuevaVentana = window.open(url, '_blank');

                        // $.ajax({
                        //     url: "ajax/ventas.ajax.php",
                        //     method: "POST",
                        //     data: {
                        //         'accion': 21,
                        //         'nro_boleta': idBoleta2
                        //     },
                        //     dataType: 'json',
                        //     success: function(respuesta) {

                        //     }
                        // });

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
                // Restablecer la bandera de AJAX una vez que la solicitud haya terminado
                ajaxEnProgreso = false;

                // Tu código de éxito aquí...
                // Toast.fire({
                //     icon: 'success',
                //     title: respuesta,
                //     showConfirmButton: false,
                //     timer: 1500
                // });

                // tabla11.clear().draw();
                // tabla31.ajax.reload();
                // tabla51.ajax.reload();

                CargarNroBoleta();

                // $("#totalVenta").html("0.00");

                // $("#totalVentaRegistrarVista1").html("0.00");

                // $("#iptCodigoVenta").val("");

                // $("#iptNumeroDocumento").val("");

                // $("#iptComentario").val("");

                // $("#selBolFac").val(1);

                // $("#selTipoPago").val(1);

                // $("#selTipoDni").val(1);

                // // $("#content-registrar-tab").click();
                // $("#iptCodigoVenta").focus();
                
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

                       var url = 'http://192.168.1.41/market-pos/ajax/ventas_comision.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrProveedor=' + encodeURIComponent(respuesta[0]["cliente"])+ '&Texto_pago=' + Texto_pago+ '&Mensajero=' + Mensajero;

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

    function ejecutarAjaxNORMAL(formData,idBoleta2,arrIndicador,arrPrecios,Tipo_pago,tipo_dni,comentario) {
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
                tabla31.ajax.reload();
                tabla51.ajax.reload();

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

    function EdicionProducto(codigo,descripcion,precio_unidad,precio_paquetito,precio_docena,precio_ciento,precio_millar,precio_caja,precio_fardo,precio_plancha,precio_unidad_2,precio_paquetito_2,precio_docena_2,precio_ciento_2,precio_millar_2,precio_caja_2,precio_fardo_2,precio_plancha_2
    ,cantidad_ciento,cantidad_millar,cantidad_caja,cantidad_fardo,cantidad_plancha,stock,min_stock,direccion,id_categoria_producto){

        $.ajax({
            async: false,
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 19,
                'codigo': codigo,
                'descripcion':descripcion,

                'precio_unidad':precio_unidad,
                'precio_paquete':precio_paquetito,
                'precio_docena':precio_docena,
                'precio_ciento':precio_ciento,
                'precio_millar':precio_millar,
                'precio_caja':precio_caja,
                'precio_fardo':precio_fardo,
                'precio_plancha':precio_plancha,

                'precio_unidad_2':precio_unidad_2,
                'precio_paquete_2':precio_paquetito_2,
                'precio_docena_2':precio_docena_2,
                'precio_ciento_2':precio_ciento_2,
                'precio_millar_2':precio_millar_2,
                'precio_caja_2':precio_caja_2,
                'precio_fardo_2':precio_fardo_2,
                'precio_plancha_2':precio_plancha_2,

                'cantidad_ciento':cantidad_ciento,
                'cantidad_millar':cantidad_millar,
                'cantidad_caja':cantidad_caja,
                'cantidad_fardo':cantidad_fardo,
                'cantidad_plancha':cantidad_plancha,

                'stock':stock,
                'min_stock':min_stock,
                'direccion':direccion,
                'id_categoria_producto':id_categoria_producto,

            },
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta : " + respuesta);


                if(respuesta === "OK"){

                    Swal.fire({
                        icon: 'success',
                        title: 'Cambios realizados correctamente ',
                        confirmButtonText: 'Aceptar',
                        showCancelButton: true,
                    }).then((result) => {

                        filaEliminar.remove().draw();
                        CargarProductos(idProductoEdit);
                    })


                }



            }
        })

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

    function enListarProductos2(respuesta){
        console.log("enListarProductos(respuesta) : " ,respuesta);

        for(var i = 0; i<respuesta.length;i++){
            var producto  = respuesta[i][2];
            var cantidad  = respuesta[i][3] + " "+ respuesta[i][4];
            var total_numero = respuesta[i][5];
            var precio_numero = respuesta[i][5]/respuesta[i][3];
            total_numero = parseFloat(total_numero);
            precio_numero = parseFloat(precio_numero);

            var total = "S./ "+ parseFloat(total_numero).toFixed(2);
            var precio = "S./ "+ parseFloat(precio_numero).toFixed(2);

            console.log(producto , cantidad, precio, total)

            CargarProductosPegado3(producto , cantidad, precio, total)
        }
    }

    function CargarProductosProveedors(producto = "", cliente = "") {

        console.log("cargarProductos se ejcuta normal CargarProductosClientes" )

        console.log($("#iptCodigoVenta").val() ,"")

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ idBoleta2 : ", idBoleta2)

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
                'accion': 21, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto,
                'id_cliente': idBoleta2,
            },
            dataType: 'json',
            success: function(respuesta,dropdownMenu) {
                
                var nombreCategoria = respuesta['nombre_categoria'];

                var nombreCategoriaSinEspacios = nombreCategoria.replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');

                console.log("porfavor funciona carajoooo :-"+nombreCategoriaSinEspacios+"-")


                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var TotalVenta = 0.00;

                    dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = "Unidades";

                    if (parseFloat(respuesta['precio_unidad_cliente']) > 0) {
                        
                        medida = "Unidades";
                    }else if (parseFloat(respuesta['precio_paquetito_cliente']) > 0) {
                        
                        medida = "Paquetitos";
                    }else if (parseFloat(respuesta['precio_docena_cliente']) > 0) {
                        
                        medida = "Docenas";
                    }else if (parseFloat(respuesta['precio_ciento_cliente']) > 0) {
                        
                        medida = "Cientos";
                    }else if (parseFloat(respuesta['precio_millar_cliente']) > 0) {
                        
                        medida = "Millares";
                    }else if (parseFloat(respuesta['precio_caja_cliente']) > 0) {
                        
                        medida = "Cajas";
                    }else if (parseFloat(respuesta['precio_fardo_cliente']) > 0) {
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

                    if (respuesta['aplica_peso'] == 1) {


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

                    } else {

                        tabla11.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            1 + " " + indicador,
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

                    }

                    recalcularTotales()

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

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
                NuevaMedida = parseFloat(data[5]) + medida;
                table.cell(index, 7).data(NuevoPrecio).draw();
                table.cell(index, 5).data(NuevaMedida).draw();

            }


        });

        // RECALCULAMOS TOTALES
        recalcularTotales();

    }

    // function RellenarParaEditar(codigo){
    //     console.log("ccodigo  : " + codigo);

    //     $.ajax({
    //         async: false,
    //         url: "ajax/productos.ajax.php",
    //         method: "POST",
    //         data: {
    //             'accion': 18,
    //             'codigo_producto': codigo,
    //         },
    //         dataType: 'json',
    //         success: function(respuesta) {
    //             console.log(respuesta);

    //             $("#iptCodigoReg").val(respuesta[0]["codigo_producto"]);            
    //             $("#iptDescripcionReg").val(respuesta[0]["descripcion_producto"]);
    //             $("#iptPrecioCompraReg").val(respuesta[0]["precio_compra"]);
    //             $("#iptPrecioVentaReg").val(respuesta[0]["precio_unidad"]);
    //             $("#iptPrecioVentaReg_2").val(respuesta[0]["precio_unidad_2"]);
    //             $("#iptUtilidadReg").val(respuesta[0]["utilidad"]);
    //             $("#iptPrecioVentaRegPaquete").val(respuesta[0]["precio_paquetito"]);
    //             $("#iptPrecioVentaRegDocena").val(respuesta[0]["precio_docena"]);
    //             $("#iptPrecioVentaRegCiento").val(respuesta[0]["precio_ciento"]);
    //             $("#iptPrecioVentaRegMillar").val(respuesta[0]["precio_millar"]);
    //             $("#iptPrecioVentaRegCaja").val(respuesta[0]["precio_caja"]);
    //             $("#iptPrecioVentaRegFardo").val(respuesta[0]["precio_fardo"]);
    //             $("#iptPrecioVentaRegPaquete_2").val(respuesta[0]["precio_paquetito_2"]);
    //             $("#iptPrecioVentaRegDocena_2").val(respuesta[0]["precio_docena_2"]);
    //             $("#iptPrecioVentaRegCiento_2").val(respuesta[0]["precio_ciento_2"]);
    //             $("#iptPrecioVentaRegMillar_2").val(respuesta[0]["precio_millar_2"]);
    //             $("#iptPrecioVentaRegCaja_2").val(respuesta[0]["precio_caja_2"]);
    //             $("#iptPrecioVentaRegFardo_2").val(respuesta[0]["precio_fardo_2"]);
    //             $("#iptCantidadMillar").val(respuesta[0]["cantidad_millar"]);
    //             $("#iptCantidadDocena").val(respuesta[0]["cantidad_docena"]);
    //             $("#iptCantidadFardo").val(respuesta[0]["cantidad_fardo"]);
    //             $("#iptCantidadCaja").val(respuesta[0]["cantidad_caja"]);
    //             $("#iptStockReg").val(respuesta[0]["stock_producto"]);
    //             $("#iptMinimoStockReg").val(respuesta[0]["minimo_stock_producto"]);
    //             $("#iptUbicacionReg").val(respuesta[0]["direccion"]);
    //             var escritura = respuesta[0]["id_categoria_producto"] + " - " + respuesta[0]["nombre_categoria"]
    //             $("#selCategoriaReg").val(escritura);

    //         }
    //     })
    // }

    function cargarProductosAJAXRegistros2(idBoleta2) {

        console.log(idBoleta2)

        if(idBoleta2 == 0 || idBoleta2 === "VARIOS"){

            if($('#content-proveedor:visible').length > 0 || $('#content-comprar:visible').length > 0 || $('#content-imprimir-compra:visible').length > 0 
            || $('#content-estados:visible').length > 0){
               

                $.ajax({
                    async: false,
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 6
                    },
                    dataType: 'json',
                    success: function (respuesta) {
                        $("#iptCodigoVentaRegistro2").autocomplete({
                            source: respuesta,
                            select: function (event, ui) {
                                CargarProductos3(ui.item.value);
                                $("#iptCodigoVentaRegistro2").val("");
                                $("#iptCodigoVentaRegistro2").focus();
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
                    },
                });
            }

        }else{

            

            if($('#content-proveedor:visible').length > 0 || $('#content-comprar:visible').length > 0 || $('#content-imprimir-compra:visible').length > 0 
            || $('#content-estados:visible').length > 0){

                console.log("2 ." + idBoleta2)
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
                        $("#iptCodigoVentaRegistro2").autocomplete({
                            source: respuesta,
                            select: function (event, ui) {
                                console.log("ui.item.value : " + ui.item.value)
                                var Texto = ui.item.value;
                                var palabras = Texto.split("/");

                                var cliente = palabras[1];
                                var producto = palabras[0];

                                if(idBoleta2 == 0){
                                    CargarProductos3(ui.item.value);
                                }else if(cliente === ""){
                                    CargarProductos3(ui.item.value);
                                }else{
                                    console.log("CargarProductosClientes2(producto,cliente);")
                                    CargarProductosClientes3(producto,cliente);
                                }
                                $("#iptCodigoVentaRegistro2").val("");
                                $("#iptCodigoVentaRegistro2").focus();
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

                        
                    },
                });

            }

        }

             
       
    }

    function CargarProductos3(producto = "") {

        console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla32.rows().eq(0).each(function(index) {

            var row = tabla32.row(index);
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
                            tabla32.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla32.cell(index, 7).data(NuevoPrecio).draw();

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

                    if (respuesta['aplica_peso'] == 1) {


                        tabla32.row.add([
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

                    } else {

                        tabla32.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            1 + " " + indicador,
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

                    }

                    recalcularTotales()

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

    function CargarProductosClientes3(producto = "", cliente = "") {

        console.log("cargarProductos se ejcuta normal CargarProductosClientes3" )

        console.log("producto = ", producto , " -  cliente: ", cliente)

        if (producto != "") {
            var codigo_producto = producto;

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla32.rows().eq(0).each(function(index) {

            var row = tabla32.row(index);
            var data = row.data();
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
                            tabla32.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla32.cell(index, 7).data(NuevoPrecio).draw();

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

        console.log("cargarProductos se ejcuta normal 2 " )

        var dropdownMenu = "<ul class='dropdown-menu'>";
        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 21, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto,
                'id_cliente': ClienteBoleta2,
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

                    if (respuesta['aplica_peso'] == 1) {


                        tabla32.row.add([
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

                    } else {

                        tabla32.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            1 + " " + indicador,
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

                    }

                    recalcularTotales()

                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {



                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();

                }

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

    function recalcularTotales3(){

        var TotalVenta = 0.00;
        //  Recalculamos el total de la venta
        tabla32.rows().eq(0).each(function(index) {
            var row = tabla32.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        $("#totalVentaRegistrarVista3").html("");
        $("#totalVentaRegistrarVista3").html(parseFloat(TotalVenta).toFixed(2));

    }

    function EliminarProductoVenta(idBoleta,cod_producto,fila){

        console.log("EliminarProductoVenta("+idBoleta+","+cod_producto+ ")")

        $.ajax({
            async:false,
            url:"ajax/compras.ajax.php",
            method: 'POST',
            data: {
                'accion': 31,
                'id_boleta': idBoleta,
                'cod_producto': cod_producto,
            },
            dataType: 'json',
            success: function (respuesta){

                console.log(respuesta);

                if(respuesta === "OK"){

                    tabla32.row(fila).remove().draw();

                    Toast.fire({
                        icon: 'success',
                        title: "Producto eliminado de la compra registrada",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    
                } else {

                    Toast.fire({
                        icon: 'danger',
                        title: "Error: No se pudo eliminar correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    
                }


                
               
            }
        })

    }

    function EliminarRegistro(idBoleta){

        console.log("boleta a eliminar: ",idBoleta);

        Swal.fire({
            icon: 'warning',
            title: ' Seguro de eliminar el registro o boleta ? ',
            confirmButtonText: 'Aceptar',
            showCancelButton: true,
        }).then((result) => {
            console.log(result.isConfirmed);
            if(result.isConfirmed == true){
                

                $.ajax({
                        url: "ajax/clientes.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 16,
                            'idBoleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta);
                            if(respuesta === "ok"){

                                Swal.fire({
                                    icon: 'success',
                                    title: ' Se elimino correctamente ',
                                })
                                tabla51.ajax.reload();
                                tabla31.ajax.reload();
                            }else{

                                Swal.fire({
                                    icon: 'warning',
                                    title: respuesta ,
                                })

                            }
                            
                        }
                })
            }
            
        })

        

        



    }

    function GuardarDatos(numero){

        var RazonSocial = $("#iptRasonSocial").val();
        var RazonComercial = $("#iptRasonComercial").val();
        var Identificacion = $("#iptIdentificacion").val();
        var Direccion = $("#iptDireccion").val();
        var Telefono = $("#iptTelefono").val();
        var Detalles = $("#iptDetalles").val();
        var Correo = $("#iptCorreo").val();
        var Cuenta = $("#selCuenta").val();
        if(Cuenta == 0){
            Cuenta = 1;
        }

        $.ajax({
                url: "ajax/clientes.ajax.php",
                method: "POST",
                data: {
                    'accion': 10,
                    'numero': numero,
                    'RazonSocial': RazonSocial,
                    'RazonComercial': RazonComercial,
                    'Identificacion': Identificacion,
                    'Direccion': Direccion,
                    'Telefono': Telefono,
                    'Detalles': Detalles,
                    'Correo': Correo,
                    'Cuenta': Cuenta,
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);


                        Swal.fire({
                            icon: 'success',
                            title: 'Cambios realizados correctamente',
                        })
                        tabla01.ajax.reload();
                        tabla31.ajax.reload();
                        tabla51.ajax.reload();
                        ////tabla51.ajax.reload();


                }
        })


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

        var celdasEspecificas = [
            [0, 2],
            [1, 2],
            [2, 2],
            [3, 2],
            [4, 2],
            [5, 2],
            [6, 2],
            [7, 2],
            [0, 3],
            [1, 3],
            [2, 3],
            [3, 3],
            [4, 3],
            [5, 3],
            [6, 3],
            [7, 3],
            [3, 4],
            [4, 4],
            [5, 4],
            [6, 4],
            [7, 4]
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas, index) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = datos[index];

            // Colocar el contenido en la celda correspondiente
            if(contenido > 0){
                $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }else{
                $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text("");
            }
            
        });
    }

    function obtenerDatosCeldasEspecificas() {
        var datos = [];
        var celdasEspecificas = [
            [0, 2],
            [1, 2],
            [2, 2],
            [3, 2],
            [4, 2],
            [5, 2],
            [6, 2],
            [7, 2],
            [0, 3],
            [1, 3],
            [2, 3],
            [3, 3],
            [4, 3],
            [5, 3],
            [6, 3],
            [7, 3],
            [3, 4],
            [4, 4],
            [5, 4],
            [6, 4],
            [7, 4]
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = $('#lstProductosPrecios tbody tr').eq(filaIndex).find('td').eq(colIndex).text();

            // Si el contenido es una cadena vacía o contiene solo espacios en blanco, cambiarlo a 0
            if (contenido.trim() === "" || contenido.trim() === " ") {
                contenido = "0";
            }

            datos.push(contenido);
        });

        return datos;
    }

    function Seleccionar($elemento){
        // Crear un rango de selección
        var range = document.createRange();
        // Seleccionar el contenido del elemento
        range.selectNodeContents($elemento[0]);
        // Obtener la selección actual
        var selection = window.getSelection();
        // Limpiar la selección actual
        selection.removeAllRanges();
        // Agregar el rango de selección al objeto de selección
        selection.addRange(range);
    }

</script>