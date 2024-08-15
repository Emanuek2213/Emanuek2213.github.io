
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Punto de Venta  <button class="btn btn-gray" id="Btn_Desbloquear">
                    <i class="fas fa-lock-open fs-5"></i>
                </button></h2>



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
                <a class="nav-link active" id="content-clientes-tab" data-toggle="pill" href="#content-clientes" role="tab" aria-controls="content-clientes" aria-selected="false">Lista de clientes</a>
            </li>

            <li class="nav-item" id="nav-item-registrar">
                <a class="nav-link" id="content-registrar-tab" data-toggle="pill" href="#content-registrar" role="tab" aria-controls="content-registrar" aria-selected="false"><i id= "icon_notificacion" class="fas fa-circle"></i> Nuevo registro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-lista-registros-tab" data-toggle="pill" href="#content-lista-registros" role="tab" aria-controls="content-lista-registros" aria-selected="false">Lista de registro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-imprimir-tab" data-toggle="pill" href="#content-imprimir" role="tab" aria-controls="content-imprimir" aria-selected="false">Reimpimir</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-clientes" role="tabpanel" aria-labelledby="content-clientes-tab">

                <h4>Listado de clientes</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->
                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            <h4>CLIENTE: <label id = "iptNombreCliente_0"> VARIOS </label></h4>

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                    <div style="width: 33%;" class="form-floating mx-1">
                                                        <input type="text" id="iptBuscarCliente" class="form-control" data-index="[3,4]" autocomplete="off">
                                                        <label for="iptBuscarCliente">Razon Comercial o Social</label>
                                                    </div>

                                                    <div style="width: 33%;" class="form-floating mx-1">
                                                        <input type="text" id="iptBuscarCliente2" class="form-control" data-index="2" autocomplete="off">
                                                        <label for="iptBuscarCliente2">Identificacion </label>
                                                    </div>

                                                    <div style="width: 33%;" class="form-floating mx-1">
                                                        <input type="text" id="iptBuscarCliente3" class="form-control" data-index="5" autocomplete="off">
                                                        <label for="iptBuscarCliente3">Direccion</label>
                                                    </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <!-- <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptBuscarCliente" class="form-control" data-index="3">
                                                        <label for="iptBuscarCliente">Razon Comercial</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptBuscarCliente2" class="form-control" data-index="4">
                                                        <label for="iptBuscarCliente2">Razon Social</label>
                                                    </div> -->

                                                </div>

                                            </div>

                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstClientes" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id</th>
                                                    <th>Dni o Ruc</th>
                                                    <th>Razon comercial</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-registrar" role="tabpanel" aria-labelledby="content-registrar-tab">

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
                                                    <h4>CLIENTE: <label id = "iptNombreCliente"> VARIOS </label></h4>
                                                </div>
                                        
                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroCotizacion">
                                                        <i class="fas fa-biking"></i> Sacar Cotizacion</button>
                                                </div>


                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-info btn-sm btn-block" id="btnRegistroEsp">
                                                        <i class="fas fa-biking"></i> Pedido [f8]</button>
                                                </div>

                                                <div class="col-12 col-lg-8">
                                                    <h6>Direccion: <label id = "iptDireccionCliente"> Sin Direccion </label></h6>
                                                </div>

                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-warning btn-sm btn-block" id="btnRegistrarBoleta">
                                                        <i class="fas fa-file-invoice"></i>  Boleta [f6]</button>
                                                </div>

                                                <div class="col-12 col-lg-2">
                                                    <button type="button" class="btn btn-success btn-sm btn-block" id="btnRegistrarFactura">
                                                        <i class="fas fa-file-invoice"></i>  Factura [f4]</button>
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

                                        <h6><label style="color: #17a2b8;" >(L: planchas, F: fardos, B: cajas, M: millares, C: cientos, P: paquetes, U: unidades)</label></h6>
                                        <!-- /.col -->

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-lista-registros" role="tabpanel" aria-labelledby="content-lista-registros-tab">

                <h4>Registro de Reportes</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-5">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">


                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <button class="btn btn-info" id="btnSacarCotizacion2">
                                                <i class="fas fa-print"></i> Sacar Cotizacion
                                            </button>
                                            <button class="btn btn-success" id="btnHacerPedido2">
                                                <i class="fas fa-biking"></i> Volver Pedido
                                            </button>
                                            <button class="btn btn-primary" id="btnHacerVenta2">
                                                <i class="fas fa-shopping-cart"></i> Hacer Venta
                                            </button>

                                            <button class="btn btn-warning" id="btnActualizar2">
                                                <i class="fas fa-bolt fs-5"></i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistros" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Cliente</th>
                                                        <th >Total</th>
                                                        <th >Fecha</th>
                                                        <th >Estado</th>
                                                        <th >Tipo</th>
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


                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">
                                        
                                    
                                            
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <h2>CLIENTE: <label id = "iptNombreCliente_2"> VARIOS </label> <label id = "iptFechaCliente_2"></label></h2>
                                            </div>
                                        </div>

                                        <label class="col-form-label" for="selCategoriaReg">
                                            <i class="fas fa-file-alt fs-6"></i>
                                            <span class="small">Documento</span><span class="text-danger">*</span>
                                        </label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selDocumentoVenta2">
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
                                        Total Venta: S./ <span id="totalVentaRegistrarVista2">0.00</span>
                                </h5>
                                <div class="card-body p-3">

                                    <div class="form-group mb-2">

                                        <label class="col-form-label" for="iptCodigoVentaRegistro">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small">Productos</span>
                                        </label>

                                        <input type="text" class="form-control form-control-sm" id="iptCodigoVentaRegistro"
                                            placeholder="Ingrese el código de barras o el nombre del producto">
                                    </div>

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnCambiarCliente2">
                                                <i class="fas fa-edit"></i> Cambiar Cliente
                                            </button>

                                            <button class="btn btn-success" id="btnGuardar2">
                                                <i class="fas fa-download"></i> Guardar
                                            </button>

                                            <button class="btn btn-secondary" id="btnCopiar2">
                                                <i class="far fa-copy"></i> Copiar
                                            </button>

                                            <button class="btn btn-danger" id="btnEliminarRegistro2">
                                                <i class="far fa-trash-alt"></i> Eliminar
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosProductos" class="display nowrap table-striped w-100 shadow ">
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
                                        <h6><label style="color: #17a2b8;" >(L: planchas, F: fardos, B: cajas, M: millares, C: cientos, P: paquetes, U: unidades)</label></h6>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-imprimir" role="tabpanel" aria-labelledby="content-imprimir-tab">

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
                                            <button class="btn btn-info" id="btnSacarCotizacion3">
                                                <i class="fas fa-print"></i> Sacar Cotizacion
                                            </button>
                                            <button class="btn btn-success" id="btnImprimir3">
                                                <i class="fas fa-print fs-5"></i> Imprimir
                                            </button>

                                            <button class="btn btn-warning" id="btnReImprimir3">
                                                <i class="fas fa-print fs-5"></i> RE-impresion [F10]
                                            </button>

                                            <button class="btn btn-warning" id="btnActualizar3">
                                                <i class="fas fa-bolt fs-5"></i>
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
                                                        <th >Cliente</th>
                                                        <th >Total</th>
                                                        <th >Fecha</th>
                                                        <th >Estado</th>
                                                        <th >Tipo</th>
                                                        <th >Nubefact</th>

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

                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <h2>CLIENTE: <label id = "iptNombreCliente_3"> VARIOS </label> <label id = "iptFechaCliente_3"></label></h2>
                                            </div>
                                        </div>

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
                                            <option value="6">Documento Nubefact</option>
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

                                            <button class="btn btn-warning" id="btnCambiarCliente3">
                                                <i class="fas fa-edit"></i> Cambiar Cliente
                                            </button>

                                            <button class="btn btn-success" id="btnGuardar3">
                                                <i class="fas fa-download"></i> Guardar [F8]
                                            </button>

                                            <button class="btn btn-secondary" id="btnCopiar3">
                                                <i class="far fa-copy"></i> Copíar
                                            </button>

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
                                        <h6><label style="color: #17a2b8;" >(L: planchas, F: fardos, B: cajas, M: millares, C: cientos, P: paquetes, U: unidades)</label></h6>
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


<!-- AQUI ESTARIAN LOS MODALES -->



<div class="modal fade" id="mdlListaClientes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h4 class="modal-title" id="titulo_modal_stock">Lista de Clientes</h4>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <div class="col-md-12">

                            <table id="lstClientes" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center">Opciones</th>
                                        <th>Id</th>
                                        <th>Dni o Ruc</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
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
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnHacerVenta">Hacer Venta</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlProductosCatalogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Lista de Productos</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <div class="col-md-12">

                            <table id="lstProductosCatalogo" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center" >Codigo</th>
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
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnAgregarPorducto">Agregar productos</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlProductosCatalogoxCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2 d-flex justify-content-between align-items-center">
                <h3 class="modal-title mx-auto" id="titulo_modal_stock_clientes">Lista de Productos del Cliente</h3>
                <button type="button" class="btn-close text-white fs-6 ms-3" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalCatalogoxCliente"></button>
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

                            <table id="lstProductosCatalogoxCliente" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center" ></th>
                                        <th class="text-center" >Codigo</th>
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

            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-11">
                    <h4><span class="text-end me-auto" style="color: red;"> Productos Seleccionados : <span id="cantidadProductos" style="color: red;"> 0</span></span></h4>
                </div>

            </div>

            <div class="modal-footer">

                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                        id="btnAgregarPorductoxCliente">Agregar productos</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlClientePrincipal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Cliente Principal</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5 class="fw-bold">CLIENTE:</h5>
                    </div>
                    <div class="col-3 mb-3">
                        <label for="txtid" id="txtid_label" class="form-label">RUC O DNI:</label>

                    </div>
                    <div class="col-9 mb-3">

                        <input type="text" id="txtid" value="000000001" class="form-control">
                    </div>
                    <div class="col-3 mb-3">
                        <label for="txtnombre_cliente" id="txtnombre_cliente" class="form-label">Nombre:</label>

                    </div>
                    <div class="col-9 mb-3">

                        <label id="txtnombre_cliente" class="form-control">VARIOS</label>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnBuscarCliente">Buscar otro cliente</button>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnHacerVenta2">Hacer Venta</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlActualizarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlInformacionTtutorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 96vw; max-height: 54vw;">
        <div class="modal-content">
            <div class="modal-header bg-gray py-1">
                <h5 class="modal-title">Agregar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-2 my-1">
                            <button type="button" class="btn btn-info mt-3 mx-2" style="width: 100%; height: 300px;" id="btnFotoAnterior">Anterior</button>
                        </div>
                        <div class="col-12 col-lg-8 my-1">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img id="previewImg_cliente" src="vistas\assets\imagenes\info\ventas-cliente\imagen_1.png" class="embed-responsive-item border border-secondary" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-2 my-1">
                            <button type="button" class="btn btn-info mt-3 mx-2" style="width: 100%; height: 300px;" id="btnFotoSiguiente">Siguiente</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalComentarioEliminacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Motivos</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <!-- <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <table id="tblDetalleVenta" class="table table-bordered table-striped w-100">
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

                </div> -->

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <label for="iptComentario">Explicacion del porque se elimino</label>
                            <textarea name="iptComentario" id="iptComentario" class="form-control form-control-sm"
                                rows="4" placeholder="Escribe aquí tus comentarios u opiniones"></textarea>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-info mt-3 mx-2" style="width:170px;"
                        data-bs-dismiss="modal" id="btnGuardarComentario">Confirmar eliminacion</button>
                    <!-- <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                        data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlEditarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Cliente Principal</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12 mb-3">

                        <div class="row">

                            <div class="d-none d-md-flex col-md-12 ">

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptBuscarModalCliente" class="form-control" data-index="3" autocomplete="off">
                                    <label for="iptBuscarModalCliente">Razon Comercial</label>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 mb-3">

                        <div class="row">

                            <table id="lstClientesEdicion" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center">Opciones</th>
                                        <th>Id</th>
                                        <th>Dni o Ruc</th>
                                        <th>Razon comercial</th>
                                        <th>Razon social</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm"
                    id="btnCancelarEdicion"><h6>Cancelar Cambio</h6></button>
                <button type="button" class="btn btn-success btn-sm"
                    id="btnAceptarCambio"><h6>Cambiar Cliente</h6></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlEditarNumeroNubefact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Editar Numero de Factura Nubefact</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12 mb-3">

                        <div class="row">

                            <div class="d-none d-md-flex col-md-12 ">

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptNumevoNumero" class="form-control" data-index="3" autocomplete="off">
                                    <label for="iptNumevoNumero">Numero Factura (SERIE: F001) </label>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm"
                    id="btnCancelarNumeroNubefact"><h6>Cancelar</h6></button>
                <button type="button" class="btn btn-success btn-sm"
                    id="btnCambiarNumeroNubefact"><h6>Ingresar Nuevo Numero</h6></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlPantallaCarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content">
            <div class="row mx-0">
                <div class="col-lg-12 mx-0 text-center">
                    <img src="vistas/assets/imagenes/loading.gif" id="img_carga" style="display:block;">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<style>
    #lstRegistrosImprimir td {
        font-family: 'Calibri, sans-serif';
        font-size: 14px !important;
    }

    #lstRegistrosProductosImprimir td {
        font-family: 'Calibri, sans-serif';
        font-size: 14px !important;
    }

    #lstRegistros td {
        font-family: 'Calibri, sans-serif';
        font-size: 14px !important;
    }

    #lstRegistrosProductos td {
        font-family: 'Calibri, sans-serif';
        font-size: 14px !important;
    }

    .red-text {
      color: red;
    }

    /* CSS para aumentar el tamaño de la fuente del contador de filas */
    .dataTables_info {
        font-size: 16px; /* Ajusta el tamaño según tus necesidades */
    }

    #lstProductosVenta_info {
        font-size: 25px; /* Ajusta el tamaño según tus necesidades */
    }
</style>
<!-- AQUI SON LOS SCRIPT  -->
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    var cantidad = 0;
    var Identificacion = "SIN IDENTIFICAC";
    var Direccion = "SIN DIRECCION";
    var tabla11,tabla12,tabla13,tabla21,tabla22,tabla31,tabla32,tabla51,tabla61,tabla03,tabla02,tabla01; // tabla de productos que se agrega
    var seguro = 1;
    var asegurador = 0;
    var paginaCambiada = false;

    var items = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var person = [];
    var itemsxperson = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var itemProducto = 1;
    var encendido = 20;
    var contador = 0;
    var cambiosEditables = [];
    var deletedRows =[];
    var idCliente0 = "161000000000";
    var idBoleta = 0;
    var ClienteBoleta = "";
    var idBoleta2 = 0;
    var ClienteBoleta2;

    var productos_por_agregar = new Array();
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
    var buscarfactura = 0;
    var numero_encontrado = false;

    var nombre_nuevo_cliente = "VACIO";
    var Factura = "";

    var numero_factura = "1111";
    var numero_boleta = "1111";

    var indiceActual_cliente = 0; // Índice de la imagen actual
    var suma_total = 0;
    var celdaelegida;
    var tipo_venta_para_impresion = "VACIO";
    var navLink = document.getElementById('content-registrar-tab');
    var icon_notificacion = document.getElementById('icon_notificacion');
    icon_notificacion.style.display = 'none';
    var Reimprimir ;

    $(document).ready(function(){

        VerficarEstadoVentas();
        // Función para verificar el estado de las ventas
        async function verificarEstadoVentas() {
            const element = document.querySelector('#content-registrar');
            if (element && element.style.display !== 'none' && !element.classList.contains('d-none')) {
                await VerficarEstadoVentas();
            }
        }

        // Intervalo de verificación
        let interval = null;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Si el elemento es visible, inicia el intervalo
                    if (!interval) {
                        interval = setInterval(verificarEstadoVentas, 1500);
                    }
                } else {
                    // Si el elemento no es visible, limpia el intervalo
                    if (interval) {
                        clearInterval(interval);
                        interval = null;
                    }
                }
            });
        });

        // Observa el elemento con ID 'content-registrar'
        const targetElement = document.querySelector('#content-registrar');
        if (targetElement) {
            observer.observe(targetElement);
        }


        //VerificarNumeroFactura();

        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            const tabId = $(e.target).attr('href');
            // Verificar si el tab activo es el tab deseado
            if (tabId === '#content-registrar') {
                // Enfocar el cuadro de texto "iptCodigoVenta"
                $('#iptCodigoVenta').focus();
            }
            if (tabId === '#content-clientes') {
                // Enfocar el cuadro de texto "iptCodigoVenta"
                $('#iptBuscarCliente').focus();
            }
        });
        //$("#mdlGestionarProducto").modal('show');
        $('#iptBuscarCliente').focus();

        $.ajax({
            async: false,
            url: "ajax/categorias.ajax.php",
            method: "POST",
            data: {
                'accion': 5
            },
            dataType: 'json',
            success: function (respuesta) {
                //console.log(respuesta);
                $("#selCategoriaReg").autocomplete({
                    source: respuesta,
                    select: function (event, ui) {
                        //console.log(ui.item.value)

                        $("#selCategoriaReg").val(ui.item.value)
                        return false;
                    },
                    appendTo: "#mdlGestionarProducto" // Reemplaza "modalID" con el ID de tu modal
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

        $("#iptCodigoVentaRegistro").focus(function() {
            $(this).select();
        });

        $("#iptCodigoVenta").focus(function() {
            $(this).select();
        });

        Cargar_tables();

        CargarNroBoleta();

        CargarBotones();

        cargarProductosAJAX(idBoleta2);

        // cargarNroFacuraNuveFact();

        var enlaceClientes = document.querySelector('#content-clientes-tab');
        if (enlaceClientes) {
            enlaceClientes.addEventListener('click', function() {
                idBoleta2 = 0;
                productos_por_agregar = new Array();
                $('#lstClientes tr').removeClass('selected');
                var elementoCliente = document.getElementById("iptNombreCliente");
                var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                var elementoCliente2 = document.getElementById("iptDireccionCliente");
                $("#iptBuscarCliente").val("");
                $("#iptBuscarCliente2").val("");
                $("#iptCodigoVenta").val("");

                if (elementoCliente) {
                    elementoCliente.textContent = "VARIOS";
                }

                if (elementoCliente_0) {
                    elementoCliente_0.textContent = "VARIOS";
                }

                if(elementoCliente2){
                    elementoCliente2.textContent = "Sin Direccion";
                }

                tabla11.clear().draw();
                $("#totalVenta").html("");
                $("#totalVenta").html("0.00");

                $("#totalVentaRegistrarVista1").html("");
                $("#totalVentaRegistrarVista1").html("0.00");

                $("#iptCodigoVenta").val("");

                // Agregar el foco dentro de 0.2 segundos
                setTimeout(function() {
                    var elementoFocusear = document.getElementById("iptBuscarCliente");
                    if (elementoFocusear) {
                        elementoFocusear.focus();
                    }
                }, 200);
            });
        }

        $(document).on('keydown', function(event) {

            var targetElement = event.target;

            if (!targetElement.closest('#lstRegistrosProductos')) {
                // El evento no se originó dentro de #lstRegistrosProductos
                // Puedes realizar acciones aquí si necesitas bloquear algo
                bloquear1 = 0;
            }else if (targetElement.closest('#lstRegistrosProductos')) {
                // El evento no se originó dentro de #lstRegistrosProductos
                // Puedes realizar acciones aquí si necesitas bloquear algo
                bloquear1 = 1;
            }

            if (!targetElement.closest('#lstRegistrosProductosImprimir')) {
                // El evento no se originó dentro de #lstRegistrosProductosImprimir
                // Puedes realizar acciones aquí si necesitas bloquear algo
                bloquear2 = 0;
            }else if (targetElement.closest('#lstRegistrosProductosImprimir')) {
                // El evento no se originó dentro de #lstRegistrosProductosImprimir
                // Puedes realizar acciones aquí si necesitas bloquear algo
                bloquear2 = 1;
            }

            if (event.keyCode === 40 && $('#content-clientes:visible').length > 0 && !$('#mdlProductosCatalogoxCliente').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstClientes tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');

                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstClientes tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstClientes tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-clientes:visible').length > 0 && !$('#mdlProductosCatalogoxCliente').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstClientes tbody tr:visible');
                    //console.log($visibleRows.find('td:nth-child(3)').text())
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');

                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstClientes tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstClientes tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-lista-registros:visible').length > 0 && !controlPresent && !$('#iptCodigoVentaRegistro').is(':focus') && parseInt(bloquear1) == 0 && !$('#mdlEditarCliente').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstRegistros tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstRegistros tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-lista-registros:visible').length > 0 && !controlPresent && !$('#iptCodigoVentaRegistro').is(':focus') && parseInt(bloquear1) == 0 && !$('#mdlEditarCliente').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstRegistros tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstRegistros tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-imprimir:visible').length > 0 && !controlPresent2  && !$('#iptCodigoVentaRegistro2').is(':focus') && parseInt(bloquear2) == 0 && !$('#mdlEditarCliente').is(':visible')) {
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

            if (event.keyCode === 38 && $('#content-imprimir:visible').length > 0 && !controlPresent2  && !$('#iptCodigoVentaRegistro2').is(':focus') && parseInt(bloquear2) == 0 && !$('#mdlEditarCliente').is(':visible')) {
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


            if (event.keyCode === 13 && $('#content-clientes:visible').length > 0 && !$('#mdlProductosCatalogoxCliente').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstClientes tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla01.row($selectedRow).data();

                        // Quitar la selección de todas las filas y agregarla solo a la fila actual
                        $('#lstClientes tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        // Resto de tu código
                        console.log("id Perfil: " + data[3]);
                        idBoleta2 = data[3]
                        cargarProductosAJAX(idBoleta2);
                        var elementoCliente = document.getElementById("iptNombreCliente");
                        var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                        var elementoCliente2 = document.getElementById("iptDireccionCliente");

                        $("#iptBuscarCliente").val("");
                        $("#iptBuscarCliente2").val("");
                        $("#iptBuscarCliente3").val("");

                        if (elementoCliente) {
                            elementoCliente.textContent = data[3];
                        }

                        if (elementoCliente_0) {
                            elementoCliente_0.textContent = data[3];
                        }

                        if(elementoCliente2){
                            Direccion = data[5]
                            elementoCliente2.textContent = Direccion;
                        }


                        idCliente0 = data[3]

                        idBoleta2 = data[3];

                        Direccion = data[5];

                        ClienteBoleta = data[3];

                        Identificacion = data[2];

                        ConsultarPopular(ClienteBoleta)
                        .then(respuesta => {
                            // Aquí puedes manejar la respuesta después de que la promesa se resuelva
                            console.log("Respuesta recibida:", respuesta);
                            tipo_venta_para_impresion = respuesta;

                        })
                        .catch(error => {
                            // Manejo de errores
                            console.error("Error recibido:", error);
                        });

                        $.ajax({
                            async:false,
                            url:"ajax/ventas.ajax.php",
                            method: 'POST',
                            data: {
                                'accion': 13, //1: LISTAR PRODUCTOS
                                'idCliente':idCliente0.trim(),
                            },
                            dataType: 'json',
                            success: function (respuesta){
                                console.log(respuesta.length)

                                if(respuesta.length === 0){
                                    $("#content-registrar-tab").click();
                                }else if(respuesta.length > 0){
                                    CrearYMostrar(idCliente0);
                                }
                            }
                        })


                    }else{
                        $("#iptBuscarCliente").val("");
                        $("#iptBuscarCliente2").val("");
                        $("#iptBuscarCliente3").val("");

                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 13 && $('#content-clientes:visible').length > 0 && $('#mdlProductosCatalogoxCliente').is(':visible')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    $("#iptNombreProducto").val("");
                    $("#iptNombreProducto").focus();
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 13 && $('#content-lista-registros:visible').length > 0 && !controlPresent && parseInt(bloquear1) == 0 && !$('#mdlEditarCliente').is(':visible') && !$('#iptCodigoVentaRegistro').is(':focus')) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstRegistros tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        tabla22.clear().draw();
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla21.row($selectedRow).data();
                        $('#lstRegistros tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        $(this).parents('tr').addClass('selected');

                        //console.log(data);

                        idBoleta = data[1];
                        ClienteBoleta = data[2];

                        var elementoCliente = document.getElementById("iptNombreCliente_2");
                        var elementoCliente2 = document.getElementById("iptFechaCliente_2");

                        $("#iptCodigoVentaRegistro").val("");

                        if (elementoCliente) {
                            elementoCliente.textContent = data["Cliente"];
                            elementoCliente2.textContent = "( "+ data["fecha_venta"] + " )";
                        }

                        $("#card-modulos").css("display","block");
                        console.log("id Perfil: " +idBoleta+ "-"+ ClienteBoleta);

                        $.ajax({
                            async:false,
                            url:"ajax/ventas.ajax.php",
                            method: 'POST',
                            data: {
                                accion: 9,
                                id_boleta: idBoleta
                            },
                            dataType: 'json',
                            success: function (respuesta){

                                cargarProductosAJAXRegistros(ClienteBoleta);
                                enListarProductos(respuesta, tabla22);

                            }
                        })
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                        $('#iptCodigoVentaRegistro').focus();
                    }, 100); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 13 && $('#content-imprimir:visible').length > 0 && !controlPresent && parseInt(bloquear2) == 0 && !$('#mdlEditarCliente').is(':visible') && !$('#iptCodigoVentaRegistro2').is(':focus')) { // Tecla Enter
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

                        console.log(data);

                        idBoleta2 = data[1];
                        nro_boleta_cliente = data[1];
                        ClienteBoleta2 = data[2];
                        Factura = data[6];
                        ReImprimir = data["tipo_venta"];

                        var elementoCliente = document.getElementById("iptNombreCliente_3");
                        var elementoCliente2 = document.getElementById("iptFechaCliente_3");
                        

                        $("#iptCodigoVentaRegistro2").val("");

                        if (elementoCliente) {
                            elementoCliente.textContent = data["Cliente"];
                            elementoCliente2.textContent = "( "+ data["fecha_venta"] + " )";
                        }

                        $("#card-modulos").css("display","block");
                        console.log("id Perfil: " +idBoleta2+ "-"+ ClienteBoleta2);

                        $.ajax({
                            async:false,
                            url:"ajax/ventas.ajax.php",
                            method: 'POST',
                            data: {
                                accion: 9,
                                id_boleta: idBoleta2
                            },
                            dataType: 'json',
                            success: function (respuesta){

                                cargarProductosAJAXRegistros2(ClienteBoleta2);
                                enListarProductos(respuesta, tabla32);

                            }
                        })
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                        $('#iptCodigoVentaRegistro2').focus();
                    }, 100); // Adjust the delay as needed
                }

            }



            if (event.keyCode === 37 && $('#content-clientes:visible').length > 0 && !$('#mdlProductosCatalogoxCliente').is(':visible')&& !$('#mdlActualizarCliente').is(':visible')) { // Tecla Izquierda
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Izquierda
                $('#content-clientes input').blur();
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página anterior solo si no se ha cambiado ya
                        tabla01.page('previous').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 39 && $('#content-clientes:visible').length > 0 && !$('#mdlProductosCatalogoxCliente').is(':visible')&& !$('#mdlActualizarCliente').is(':visible')) { // Tecla Derecha
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Derecha
                $('#content-clientes input').blur();
                console.log("se presiono : " + isActionInProgress);
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página siguiente solo si no se ha cambiado ya
                        tabla01.page('next').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }


            if (event.keyCode === 16  && $('#content-lista-registros:visible').length > 0) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                console.log("se presiono : " + isActionInProgress);
                if (!isActionInProgress) {
                    console.log("se presiono el control")
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    if (!controlPresent){
                        $('#selDocumentoVenta2').focus().select();
                        controlPresent = true;
                    }else if(controlPresent){
                        $("#selDocumentoVenta2").blur();
                        controlPresent = false;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 17  && $('#content-imprimir:visible').length > 0) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                console.log("se presiono : " + isActionInProgress);
                if (!isActionInProgress) {
                    console.log("se presiono el control")
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    if (!controlPresent2){
                        $('#selDocumentoVenta').focus().select();
                        controlPresent2 = true;
                    }else if(controlPresent2){
                        $("#selDocumentoVenta").blur();
                        controlPresent2 = false;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            }

            if (event.keyCode === 17  && ($('#content-registrar:visible').length > 0 || $('#content-lista-registros:visible').length > 0) && !$('#mdlProductosCatalogoxCliente').is(':visible') ) {
                event.preventDefault()

                    if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            // Verifica si la tab-pane está activa
                            // Muestra el modal

                            nombre = $("#iptNombreCliente").html();

                            nombre = nombre.trim();


                            if(nombre != "VARIOS"){

                                console.log("hola como estas :  " + nombre);
                                console.log("hola como estas :  " + ClienteBoleta);

                                if($('#content-registrar:visible').length > 0 ){

                                    $("#mdlProductosCatalogoxCliente").modal('show');

                                }

                            }



                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 100); // Adjust the delay as needed
                    }

            }

            if (event.keyCode === 16  && $('#content-registrar:visible').length > 0 && !$('#mdlProductosCatalogo').is(':visible') && $("#iptCodigoVenta").on("focus") ) {
                event.preventDefault()

                console.log("Hola");
                var texto_cantidad = "Und(s)";
                var texto_cantidad_actual = "Und(s)";
                var se_presiono = 0;
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                var $currentRow = $currentCell.closest('tr');
                var $nextRow = $currentRow.next(); // Obtener la siguiente fila

                console.log("texto_cantidad : ",texto_cantidad);
                var $firstEditableCell = $('#lstProductosVenta tbody td.editable:visible:first');

                if ($firstEditableCell.length) {

                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = tabla11.row($firstEditableCell.parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="1";
                    }
                    $firstEditableCell.text(parseFloat(data[5]));

                    //console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                    var texto = data[5];
                    console.log(data[5]);
                    var partes = texto.match( /([\d.]+)\s*(\D+)/);
                    console.log("partes : " ,partes);
                    texto_cantidad = partes[2];
                    //console.log("texto_cantidad : ",texto_cantidad);



                    var range = document.createRange();
                    range.selectNodeContents($firstEditableCell[0]);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                }


            }



        });



    })

    $(document).on('keydown', function(event) {

        if ($('#mdlGestionarPrecios').is(':visible')) {

            if(event.keyCode === 40 || event.keyCode === 39 || event.keyCode === 38 || event.keyCode === 37){

                event.preventDefault()
                var $currentCell = $(':focus');
                // Si no hay una celda enfocada, hacer clic en la primera celda editable
                if ($currentCell.length === 0) {

                        console.log("activando")
                        var $firstEditableCell = $('#lstProductosPrecios td.editable').first();
                        if ($firstEditableCell.length > 0) {
                            $firstEditableCell.trigger('click');
                            return; // Salir de la función ya que hemos enfocado la celda
                        }

                }

            }

            if (event.keyCode === 121) {

                event.preventDefault()

                if (!isActionInProgress) {

                    isActionInProgress = true;

                    $('#btnRegresarPrecios').click();

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200);

                }

            }
        }

        if (event.keyCode === 16) {
            event.preventDefault()
                if ($('#content-clientes').hasClass('active')) {

                    if (!isActionInProgress) {
                        // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        // Muestra el modal
                        // $('#iptBuscarCliente').focus().select();
                        if ($('#iptBuscarCliente').is(':focus')) {
                            $('#iptBuscarCliente2').focus().select();
                        }else if($('#iptBuscarCliente2').is(':focus')){
                            $('#iptBuscarCliente3').focus().select();
                        }else{
                            $('#iptBuscarCliente').focus().select();
                        }
                        setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Adjust the delay as needed
                    }
                }else if ($('#content-registrar').hasClass('active')) {
                    if (!isActionInProgress) {
                        // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        // Muestra el modal
                        $('#iptCodigoVenta').focus().select();
                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }

        }else if (event.keyCode === 121 && !$('#mdlProductosCatalogoxCliente').is(':visible')) {


            event.preventDefault()
                if ($('#content-registrar').hasClass('active')) {
                    if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        CargarNroBoleta();
                        $('#btnRegistrar1').click();
                        tabla21.ajax.reload();
                        tabla31.ajax.reload();
                        ////
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

                }else if ($('#content-imprimir').hasClass('active')) {
                    if (!isActionInProgress) {
                        // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        // Muestra el modal
                        $('#btnReImprimir3').click();
                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }else if ($('#content-clientes').hasClass('active')) {

                    if($('#mdlActualizarCliente').is(':visible')){
                        if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            // Muestra el modal
                            $('#btnGuardarCliente').click();
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Adjust the delay as needed
                        }
                    } else if($('#mdlProductosCatalogoxCliente').is(':visible')){
                        if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            // Muestra el modal
                            $('#btnAgregarPorductoxCliente').click();
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Adjust the delay as needed
                        }
                    } 
                }

        }else if (event.keyCode === 113 && !$('#mdlListaClientes').is(':visible') && !$('#mdlProductosCatalogo').is(':visible') && !$('#mdlGestionarProducto').is(':visible')
                    && !$('#mdlProductosCatalogoxCliente').is(':visible') && !$('#mdlClientePrincipal').is(':visible') && !$('#mdlActualizarCliente').is(':visible')) {
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

                    // Verificar si el tab activo es el tab deseado
                    if (tabId === '#content-registrar') {
                        // Enfocar el cuadro de texto "iptCodigoVenta"
                        $('#iptCodigoVenta').focus();
                    }
                } else {
                    // Cambiar directamente al tab con ID "content-clientes-tab"
                    const siguienteNav = $('#content-clientes-tab');

                    activeElement.removeClass('active').attr('aria-selected', 'false');
                    siguienteNav.addClass('active').attr('aria-selected', 'true').tab('show');

                    const tabId = siguienteNav.attr('href');
                    $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                    $(tabId).addClass('show active').attr('aria-selected', 'true');
                }
                setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
            }
        }else if (event.keyCode === 115 ){

            if ($('#content-registrar').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnRegistrarFactura').click();

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }else{

                tabla21.ajax.reload();
                tabla31.ajax.reload();
                Toast.fire({
                    icon: 'success',
                    title: "Actualizado",
                    showConfirmButton: false,
                    timer: 1500
                })

            }

        }else if (event.keyCode === 117 ){

            if ($('#content-registrar').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnRegistrarBoleta').click();

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }else{

                tabla21.ajax.reload();
                tabla31.ajax.reload();
                Toast.fire({
                    icon: 'success',
                    title: "Actualizado",
                    showConfirmButton: false,
                    timer: 1500
                })

            }

        }else if (event.keyCode === 119 && !$('#mdlProductosCatalogoxCliente').is(':visible')){
            event.preventDefault()
            if ($('#content-registrar').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnRegistroEsp').click();

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }else if ($('#content-lista-registros').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnHacerPedido2').click();

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }else if ($('#content-imprimir').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    CargarNroBoleta();
                    $('#btnGuardar3').click();

                setTimeout(function () {
                        isActionInProgress = false;
                    }, 1000); // Adjust the delay as needed
                }

            }
        }else if (event.keyCode === 27) {
            event.preventDefault()
            if ($('#content-imprimir').hasClass('active') || $('#content-registrar').hasClass('active') || $('#content-estados').hasClass('active')
                    || $('#content-lista-registros').hasClass('active') || $('#content-deudas').hasClass('active') ) {
                if(!$('#mdlProductosCatalogoxCliente').is(':visible') && !$('#mdlListaClientes').is(':visible') && !$('#mdlProductosCatalogo').is(':visible')
                     && !$('#mdlClientePrincipal').is(':visible') && !$('#mdlRegistrarTiempo').is(':visible') && !$('#mdlActualizarCliente').is(':visible') && !$('#mdlGestionarProducto').is(':visible')){

                    if (!isActionInProgress) {
                        document.querySelector('#content-clientes-tab').click()
                        // Aquí puedes colocar cualquier otra acción que desees ejecutar al presionar "Esc"
                        idBoleta2 = 0;
                        cantidad = 0
                        $('#lstClientes tr').removeClass('selected');
                        var elementoCliente = document.getElementById("iptNombreCliente");
                        var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                        var elementoCliente2 = document.getElementById("iptDireccionCliente");
                        $("#iptBuscarCliente").val("");
                        $("#iptBuscarCliente2").val("");
                        $("#iptCodigoVenta").val("");

                        if (elementoCliente) {
                            elementoCliente.textContent = "VARIOS";
                        }

                        if (elementoCliente_0) {
                            elementoCliente_0.textContent = "VARIOS";
                        }

                        if(elementoCliente2){
                            elementoCliente2.textContent = "Sin Direccion";
                        }

                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 1000); // Adjust the delay as needed
                    }

                }else if($('#mdlGestionarProducto').is(':visible')){

                    $("#mdlGestionarProducto").modal("hide");
                }


            }
        }

    });

</script>

<script>

    var ajaxEnProgreso = false;

    function CambiarNumeroDeFactura() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 6,
                    'tipo': "Factura"
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (respuesta === "ok") {
                        console.log("numero cambiado");
                        resolve();
                    } else {
                        reject(new Error('Error al cambiar el número de factura'));
                    }
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    function CambiarNumeroDeBoleta() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 6,
                    'tipo': "Boleta"
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (respuesta === "ok") {
                        console.log("numero cambiado");
                        resolve();
                    } else {
                        reject(new Error('Error al cambiar el número de factura'));
                    }
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    function CambiarNumeroDeFacturaModal(numero) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 7,
                    'tipo': "Factura",
                    'numero': numero
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (respuesta === "ok") {
                        console.log("numero cambiado");
                        resolve();
                    } else {
                        reject(new Error('Error al cambiar el número de factura'));
                    }
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
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
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                // Restablecer la bandera de AJAX una vez que la solicitud haya terminado
                ajaxEnProgreso = false;
                CambiarVentaEstadoProceso();
                // Tu código de éxito aquí...
                Toast.fire({
                    icon: 'success',
                    title: respuesta,
                    showConfirmButton: false,
                    timer: 1500
                });

                tabla11.clear().draw();
                tabla21.ajax.reload();
                tabla31.ajax.reload();
                ////
                
                CargarNroBoleta();

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
                CambiarVentaEstadoProceso();
                console.error(xhr.responseText);
            }
        });
    }

    function ejecutarAjaxESP(formData,idBoleta2,arrIndicador,arrPrecios) {
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
                ////
                CambiarVentaEstadoProceso();
                CargarNroBoleta();

                $("#totalVenta").html("0.00");

                $("#totalVentaRegistrarVista1").html("0.00");

                $("#iptCodigoVenta").val("");
                $("#content-registrar-tab").click();
                $("#iptCodigoVenta").focus();

                setTimeout(function () {

                }, 1000); // Adjust the delay as needed

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log(respuesta);

                        window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );

                        $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 21,
                                'nro_boleta': idBoleta2
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                            }
                        });

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

    function ejecutarFacturaESP(formData,idBoleta2,arrIndicador,arrPrecios,factura,numero_factura){

        console.log("consultarfactura : ", factura)
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


                ////
                CambiarVentaEstadoProceso();
                CargarNroBoleta();



                $("#iptCodigoVenta").val("");
                $("#content-registrar-tab").click();
                $("#iptCodigoVenta").focus();

                setTimeout(function () {

                }, 1000); // Adjust the delay as needed

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 63,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 11,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta añadida: ", respuesta);
                        tabla21.ajax.reload();
                        tabla31.ajax.reload();
                        ////

                        $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 12,
                                'nro_boleta': idBoleta2
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log(respuesta);
                                console.log(respuesta[0]);



                                numero_encontrado = false;

                                fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(factura)
                                })
                                .then(response => response.json())
                                .then(data => {
                                    console.log('Respuesta:', data);
                                    if (data.success) {

                                        $.ajax({
                                            url: "ajax/ventas.ajax.php",
                                            method: "POST",
                                            data: {
                                                'accion': 47,
                                                'nro_boleta': idBoleta2
                                            },
                                            dataType: 'json',
                                            success: function(respuesta) {
                                                console.log(respuesta)

                                            }

                                        });



                                        console.log("arrIndicador", arrIndicador , "arrPrecios", arrPrecios);

                                        // Asegurarse de acceder correctamente al enlace del PDF
                                        const enlaceDelPdf = data.data && data.data.enlace_del_pdf;
                                        if (enlaceDelPdf) {
                                            console.log("Enlace de la factura en PDF:", enlaceDelPdf);
                                            setTimeout(function() {
                                                window.open('http://192.168.1.41/market-pos/vistas/generar_factura_impresion.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) + '&linkQR=' + encodeURIComponent(enlaceDelPdf)+ '&factura=' + numero_factura);
                                                $("#mdlPantallaCarga").modal("hide");
                                                TipoFactura(idBoleta2)

                                                $.ajax({
                                                    url: "ajax/reporte.ajax.php",
                                                    method: "POST",
                                                    data: {
                                                        'accion': 8,
                                                        'nro_boleta': idBoleta2,
                                                        'numero_factura': numero_factura,
                                                        'link': enlaceDelPdf
                                                    },
                                                    dataType: 'json',
                                                    success: function(respuesta) {
                                                        setTimeout(function() {
                                                            $("#totalVenta").html("0.00");

                                                            $("#totalVentaRegistrarVista1").html("0.00");
                                                            buscarfactura = 0;
                                                            idBoleta2 = 0;
                                                            Identificacion = "SIN IDENTIFICAC";
                                                            Direccion = "SIN DIRECCION";
                                                            idBoleta2 = 0;
                                                            productos_por_agregar = new Array();
                                                            $('#lstClientes tr').removeClass('selected');
                                                            var elementoCliente = document.getElementById("iptNombreCliente");
                                                            var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                                                            var elementoCliente2 = document.getElementById("iptDireccionCliente");
                                                            $("#iptBuscarCliente").val("");
                                                            $("#iptBuscarCliente2").val("");
                                                            $("#iptCodigoVenta").val("");

                                                            if (elementoCliente) {
                                                                elementoCliente.textContent = "VARIOS";
                                                            }

                                                            if (elementoCliente_0) {
                                                                elementoCliente_0.textContent = "VARIOS";
                                                            }

                                                            if(elementoCliente2){
                                                                elementoCliente2.textContent = "Sin Direccion";
                                                            }

                                                            tabla11.clear().draw();
                                                            $("#totalVenta").html("");
                                                            $("#totalVenta").html("0.00");

                                                            $("#totalVentaRegistrarVista1").html("");
                                                            $("#totalVentaRegistrarVista1").html("0.00");

                                                            $("#iptCodigoVenta").val("");

                                                            tabla11.clear().draw();
                                                            tabla31.ajax.reload();
                                                            tabla21.ajax.reload();

                                                            // Agregar el foco dentro de 0.2 segundos
                                                            setTimeout(function() {
                                                                var elementoFocusear = document.getElementById("iptBuscarCliente");
                                                                if (elementoFocusear) {
                                                                    elementoFocusear.focus();
                                                                }
                                                            }, 200);

                                                        }, 3000); // 3000 ms = 3 seconds
                                                    }

                                                    });
                                            }, 3000); // 3000 ms = 3 seconds
                                        } else {
                                            console.error("No se encontró el enlace del PDF en la respuesta.");
                                            $("#mdlPantallaCarga").modal("hide");
                                            ReiniciarVenta(idBoleta2);
                                        }

                                    } else {
                                        // Manejar el error
                                        alert('Error al generar la factura: ' + data.error);
                                        $("#mdlPantallaCarga").modal("hide");
                                        ReiniciarVenta(idBoleta2);
                                    }
                                })
                                .catch((error) => {
                                    console.error('Error:', error);
                                    $("#mdlPantallaCarga").modal("hide");
                                    ReiniciarVenta(idBoleta2);
                                });


                            }
                        });

                    }
                });

                // $.ajax({
                //     url: "ajax/ventas.ajax.php",
                //     method: "POST",
                //     data: {
                //         'accion': 12,
                //         'nro_boleta': idBoleta2
                //     },
                //     dataType: 'json',
                //     success: function(respuesta) {

                //         console.log(respuesta);

                //         window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );

                //         $.ajax({
                //             url: "ajax/ventas.ajax.php",
                //             method: "POST",
                //             data: {
                //                 'accion': 21,
                //                 'nro_boleta': idBoleta2
                //             },
                //             dataType: 'json',
                //             success: function(respuesta) {

                //             }
                //         });

                //     }
                // });
            },
            error: function(xhr, status, error) {
                // En caso de error, también restablecer la bandera de AJAX
                ajaxEnProgreso = false;
                console.error(xhr.responseText);
            }
        });
    }

    function ejecutarBoletaESP(formData,idBoleta2,arrIndicador,arrPrecios,boleta,numero_boleta){

        if(numero_boleta === "1111"){
            return 0;
        }

        console.log("consultarboleta : ", boleta)
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


                ////
                CambiarVentaEstadoProceso();
                CargarNroBoleta();



                $("#iptCodigoVenta").val("");
                $("#content-registrar-tab").click();
                $("#iptCodigoVenta").focus();

                setTimeout(function () {

                }, 1000); // Adjust the delay as needed

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 63,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 11,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta añadida: ", respuesta);
                        tabla21.ajax.reload();
                        tabla31.ajax.reload();
                        ////

                        $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 12,
                                'nro_boleta': idBoleta2
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log(respuesta);
                                console.log(respuesta[0]);



                                numero_encontrado = false;

                                fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify(boleta)
                                })
                                .then(response => response.json())
                                .then(data => {
                                    console.log('Respuesta:', data);
                                    if (data.success) {

                                        $.ajax({
                                            url: "ajax/ventas.ajax.php",
                                            method: "POST",
                                            data: {
                                                'accion': 47,
                                                'nro_boleta': idBoleta2
                                            },
                                            dataType: 'json',
                                            success: function(respuesta) {
                                                console.log(respuesta)

                                            }

                                        });



                                        console.log("arrIndicador", arrIndicador , "arrPrecios", arrPrecios);

                                        // Asegurarse de acceder correctamente al enlace del PDF
                                        const enlaceDelPdf = data.data && data.data.enlace_del_pdf;
                                        if (enlaceDelPdf) {
                                            console.log("Enlace de la factura en PDF:", enlaceDelPdf);
                                            setTimeout(function() {
                                                window.open('http://192.168.1.41/market-pos/vistas/generar_boleta_impresion.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) + '&linkQR=' + encodeURIComponent(enlaceDelPdf)+ '&factura=' + numero_boleta);
                                                $("#mdlPantallaCarga").modal("hide");
                                                TipoBoleta(idBoleta2)

                                                $.ajax({
                                                    url: "ajax/reporte.ajax.php",
                                                    method: "POST",
                                                    data: {
                                                        'accion': 8,
                                                        'nro_boleta': idBoleta2,
                                                        'numero_factura': numero_boleta,
                                                        'link': enlaceDelPdf
                                                    },
                                                    dataType: 'json',
                                                    success: function(respuesta) {
                                                        setTimeout(function() {
                                                            $("#totalVenta").html("0.00");

                                                            $("#totalVentaRegistrarVista1").html("0.00");
                                                            buscarfactura = 0;
                                                            idBoleta2 = 0;
                                                            Identificacion = "SIN IDENTIFICAC";
                                                            Direccion = "SIN DIRECCION";
                                                            idBoleta2 = 0;
                                                            productos_por_agregar = new Array();
                                                            $('#lstClientes tr').removeClass('selected');
                                                            var elementoCliente = document.getElementById("iptNombreCliente");
                                                            var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                                                            var elementoCliente2 = document.getElementById("iptDireccionCliente");
                                                            $("#iptBuscarCliente").val("");
                                                            $("#iptBuscarCliente2").val("");
                                                            $("#iptCodigoVenta").val("");

                                                            if (elementoCliente) {
                                                                elementoCliente.textContent = "VARIOS";
                                                            }

                                                            if (elementoCliente_0) {
                                                                elementoCliente_0.textContent = "VARIOS";
                                                            }

                                                            if(elementoCliente2){
                                                                elementoCliente2.textContent = "Sin Direccion";
                                                            }

                                                            tabla11.clear().draw();
                                                            $("#totalVenta").html("");
                                                            $("#totalVenta").html("0.00");

                                                            $("#totalVentaRegistrarVista1").html("");
                                                            $("#totalVentaRegistrarVista1").html("0.00");

                                                            $("#iptCodigoVenta").val("");

                                                            tabla11.clear().draw();
                                                            tabla31.ajax.reload();
                                                            tabla21.ajax.reload();

                                                            // Agregar el foco dentro de 0.2 segundos
                                                            setTimeout(function() {
                                                                var elementoFocusear = document.getElementById("iptBuscarCliente");
                                                                if (elementoFocusear) {
                                                                    elementoFocusear.focus();
                                                                }
                                                            }, 200);

                                                        }, 3000); // 3000 ms = 3 seconds
                                                    }

                                                    });
                                            }, 3000); // 3000 ms = 3 seconds
                                        } else {
                                            console.error("No se encontró el enlace del PDF en la respuesta.");
                                            $("#mdlPantallaCarga").modal("hide");
                                        }

                                    } else {
                                        // Manejar el error
                                        alert('Error al generar la factura: ' + data.error);
                                        $("#mdlPantallaCarga").modal("hide");
                                        ReiniciarVenta(idBoleta2);
                                    }
                                })
                                .catch((error) => {
                                    console.error('Error:', error);
                                    $("#mdlPantallaCarga").modal("hide");
                                    ReiniciarVenta(idBoleta2);
                                });


                            }
                        });

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

    function esValido(valor) {
        return valor !== null && !isNaN(valor) && valor !== '';
    }

    function Cargar_tables(){

        tabla01= $("#lstClientes").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarCliente text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEditarCliente text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEliminarCliente text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
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
                ajustarHeadersDataTables($('#lstClientes'));
            }
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

        tabla21= $('#lstRegistros').DataTable({
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
                    },

                },
                {
                    targets: [2,3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        var prefix = '';

                        // Obtener el valor de la columna 10
                        var column10Value = full[6];
                        var color = "gray";
                        // Definir el prefijo según el valor de la columna 10
                        if (column10Value === 'NOTA DE VENTA') {
                            prefix = '100/0001-';
                            color = "blue";
                        } else if (column10Value === 'BOLETA') {
                            prefix = '003/B001-';
                            color = "purple";
                        } else if (column10Value === 'TICKET') {
                            prefix = '002/T001-';
                            color = "green";
                        } else if (column10Value === 'SIN IDENTIFICAR') {
                            prefix = '001/0000-';
                            color = "gray";
                        } else if (column10Value === 'FACTURA') {
                            prefix = '001/F001-';
                            color = "red";
                        } else {
                            prefix = '001/0000-';
                            color = "gray";
                        }

                        // Truncate the text to a maximum of 20 characters and add ellipsis
                        if (formattedData.length > 20) {
                            formattedData = formattedData.substring(0, 20) + '-';
                        }

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+color+';">' + formattedData + '</span>';
                    }
                },
                {
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;

                        formattedData = formattedData.slice(-5);

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+"black"+';">' + formattedData + '</span>';
                    }
                },
                {
                    targets: 4,
                    createdCell: function(td, cellData, rowData, row, col) {
                        if (parseFloat(rowData[5]) >= 1) {
                            $(td).parent().css('background', '#FFFFFF')
                        }else if (parseFloat(rowData[5]) < 1) {
                            $(td).parent().css('background', '#FFFFFF')
                        }
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
                    targets: [5,6],
                    visible: false,
                },
            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 5 //4: LISTAR BOLETAS
                },
            },
            "scrollX": true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistros'));
            }
        });

        tabla22= $('#lstRegistrosProductos').DataTable({
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
                ajustarHeadersDataTables($('#lstRegistrosProductos'));
            }
        });

        tabla22.on('init.dt', function () {

            $('#lstRegistrosProductos tbody').off('click', 'td.editable');
            $('#lstRegistrosProductos tbody').off('blur', 'td.editable');
            $('#lstRegistrosProductos tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)"
            var izquierda = false;

            $('#lstRegistrosProductos tbody').on('click', 'td.editable', function(){
                bloquear1 = parseInt(1);
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla22.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[6]===""){
                        data[6]="S./ 0.00";
                    }
                    $(this).text(parseFloat(data[6].replace("S./ ", "")));

                }else if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla22.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="1";
                    }
                    $(this).text(parseFloat(data[5]));

                    console.log(tabla22.cell($currentCell, 5).data())
                    var texto = tabla22.cell($currentCell, 5).data();
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

                    //     bloquear1 = 0;
                    // });
            });

            $('#lstRegistrosProductos tbody').on('blur', 'td.editable', function() {
                var $currentCell = $(this);
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();
                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this).parents('tr');
                var data = tabla22.row(currentRow).data();
                var descripcionColumna = '';

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);
                console.log("columna modificada : " + columnaModificada);

                // Actualiza el total basado en la columna modificada
                function actualizarTotal(precio, cantidad, totalIndex) {
                    var total = parseFloat(cantidad) * parseFloat(precio);
                    tabla22.cell(currentRow, totalIndex).data("S./ " + total.toFixed(2));
                }

                if (columnaModificada === 3) {
                    descripcionColumna = 'Columna 3';
                    tabla22.cell(currentRow, 6).data("S./ " + parseFloat(nuevoValor).toFixed(2));
                    actualizarTotal(nuevoValor, data[5], 7);

                    var pxu = parseFloat(nuevoValor).toFixed(2);
                    var cantidad = data[5];
                    var codigo = data[1];
                    var cliente = $("#iptNombreCliente_2").html();
                    console.log(data , "iptNombreCliente_3 : ", cliente);

                    console.log("agregando cambios al historial")
                    
                    if(cliente != "VARIOS" && esValido(pxu)){
                        console.log("agregando cambios al historial")
                        AgregarCambiosHistorialUno(cliente,codigo,pxu,cantidad)
                    }
                    recalcularTotales2();
                } else if (columnaModificada === 2) {
                    var texto = tabla22.cell($currentCell, 5).data();
                    var partes = texto.match(/([\d.]+)\s*(\D+)/);
                    var texto_cantidad = partes[2];
                    var regexNumeroTexto = /^(\d+(?:\.\d+)?)\s*([A-Za-z]+)$/;
                    var matchNumeroTexto = nuevoValor.match(regexNumeroTexto);

                    if (matchNumeroTexto) {
                        var numero = parseFloat(matchNumeroTexto[1]).toFixed(2);
                        var texto = matchNumeroTexto[2].toUpperCase();
                        var codigo_producto = data[1];
                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 21,
                                'codigo_producto': codigo_producto,
                                'id_cliente': idBoleta,
                            },
                            dataType: 'json',
                            success: function(respuesta) {
                                var precio = 0;
                                var unidad = '';

                                console.log(texto)

                                switch (texto) {    
                                    case 'F': precio = respuesta['precio_fardo']; unidad = "Fardos"; break;
                                    case 'L': precio = respuesta['precio_plancha']; unidad = "Planchas"; break;
                                    case 'M': precio = respuesta['precio_millar']; unidad = "Millares"; break;
                                    case 'B': precio = respuesta['precio_caja']; unidad = "Cajas"; break;
                                    case 'D': precio = respuesta['precio_docena']; unidad = "Docenas"; break;
                                    case 'C': precio = respuesta['precio_ciento']; unidad = "Cientos"; break;
                                    case 'P': precio = respuesta['precio_paquetito']; unidad = "Paquetitos"; break;
                                    case 'U': precio = respuesta['precio_unidad']; unidad = "Unidades"; break;
                                    default: precio = parseFloat(data[6].replace("S./ ", "")); unidad = texto_cantidad; break;
                                }

                                if (precio > 0) {
                                    tabla22.cell(currentRow, 5).data(parseFloat(numero) + " " + unidad);
                                    tabla22.cell(currentRow, 6).data("S./ " + precio.toFixed(2));
                                    actualizarTotal(precio, data[5], 7);
                                } else {
                                    tabla22.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                    actualizarTotal(data[6].replace("S./ ", ""), data[5], 7);
                                }

                                recalcularTotales3();
                                if (izquierda) {
                                    $(tabla22.cell(currentRow, 6).node()).click();
                                }
                            }
                        });
                    } else {
                        tabla22.cell(currentRow, 5).data(parseFloat(nuevoValor) + " " + texto_cantidad);
                        actualizarTotal(data[6].replace("S./ ", ""), data[5], 7);
                        recalcularTotales3();
                    }
                }
            });

            // // Función para manejar eventos de teclado
            $('#lstRegistrosProductos tbody').on('keydown', 'td.editable', function(e) {
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
                                var data = tabla22.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $nextEditableCell.text(parseFloat(data[5]));

                                console.log(tabla22.cell($currentCell, 5).data())
                                var texto = tabla22.cell($currentCell, 5).data();
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
                        var $firstEditableCell = $('#lstRegistrosProductos tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $firstEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $firstEditableCell.text(parseFloat(data[5]));

                                console.log(tabla22.cell($currentCell, 5).data())
                                var texto = tabla22.cell($currentCell, 5).data();
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
                                var data = tabla22.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $prevEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $prevEditableCell.text(parseFloat(data[5]));

                                console.log(tabla22.cell($currentCell, 5).data())
                                var texto = tabla22.cell($currentCell, 5).data();
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
                        var $lastRow = $('#lstRegistrosProductos tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $lastEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla22.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $lastEditableCell.text(parseFloat(data[5]));

                                console.log(tabla22.cell($currentCell, 5).data())
                                var texto = tabla22.cell($currentCell, 5).data();
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
                }else if (keyCode === 39) { // Tecla derecha
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla derecha

                    var $currentCell = $(this);
                    var $nextEditableCell = $currentCell.nextAll('td.editable').first();
                    izquierda = true
                    $nextEditableCell.click();
                    
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda
                    izquierda = false
                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();
                    $prevEditableCell.click();
                    
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });

        });

        tabla31 = $('#lstRegistrosImprimir').DataTable({
            columnDefs: [
                // {
                //     targets: [0, 3], // Columnas 0 y 4
                //     className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                // },
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
                    targets: [2,3,7],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        var prefix = '';

                        // Obtener el valor de la columna 10
                        var column10Value = full[6];
                        var color = "gray";
                        // Definir el prefijo según el valor de la columna 10
                        if (column10Value === 'NOTA DE VENTA') {
                            prefix = '100/0001-';
                            color = "blue";
                        } else if (column10Value === 'BOLETA') {
                            prefix = '003/B001-';
                            color = "purple";
                        } else if (column10Value === 'TICKET') {
                            prefix = '002/T001-';
                            color = "green";
                        } else if (column10Value === 'SIN IDENTIFICAR') {
                            prefix = '001/0000-';
                            color = "gray";
                        } else if (column10Value === 'FACTURA') {
                            prefix = '001/F001-';
                            color = "red";
                        } else {
                            prefix = '001/0000-';
                            color = "gray";
                        }

                        // Truncate the text to a maximum of 20 characters and add ellipsis
                        if (formattedData.length > 20) {
                            formattedData = formattedData.substring(0, 20) + '-';
                        }

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+color+';">' + formattedData + '</span>';
                    }
                },

                {
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;

                        formattedData = formattedData.slice(-5);

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+"black"+';">' + formattedData + '</span>';
                    }
                },

                {
                    targets: [7],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;

                        if(formattedData ==="0"){
                            formattedData = "-";
                        }

                        formattedData = formattedData.slice(-10);

                        // Retornar el HTML con el prefijo correspondiente
                        return '<span style="font-weight: bold;color:'+"black"+';">' + formattedData + '</span>';
                    }
                },

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Establecer el tamaño de la letra a 7px y la fuente a Calibri
                        $(td).css({
                            'font-family': 'Calibri, sans-serif',
                            'font-size': '1px'
                        });
                    }
                },

                {
                    targets: [5,6,4],
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
                    'accion': 4 //1: LISTAR BOLETAS
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
            var izquierda = false;

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
                if (columnaModificada === 3) {
                    descripcionColumna = 'Columna 3';

                    tabla32.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));

                    // var data = tabla32.row($(this).parents('tr')).data();
                    console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                    var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));

                    tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));

                    var cliente = $("#iptNombreCliente_3").html();

                    console.log(data , "iptNombreCliente_3 : ", cliente);

                    var pxu = parseFloat(nuevoValor).toFixed(2);
                    var cantidad = data[5];
                    var codigo = data[1];
                    console.log("agregando cambios al historial")
                    if(cliente != "VARIOS" && esValido(pxu)){
                        console.log("agregando cambios al historial")
                        AgregarCambiosHistorialUno(cliente,codigo,pxu,cantidad)
                    }
                    recalcularTotales3();

                }
                else if (columnaModificada === 2) {
                    // descripcionColumna = 'Columna 2';
                    // tabla32.cell(currentRow, 5).data(parseFloat(nuevoValor).toFixed(2) + " "+ texto_cantidad);

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
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Fardos");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_fardo']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_fardo']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;

                                    case 'L':
                                        console.log("CASO L");
                                        if(respuesta['precio_plancha']>0){
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + "Planchas");
                                            tabla32.cell(currentRow, 6).data("S./ "+parseFloat(respuesta['precio_plancha']).toFixed(2));
                                            var Total = parseFloat(data[5]) * parseFloat(respuesta['precio_plancha']).toFixed(2);
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }else{
                                            tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                            var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                            tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        }
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                                        recalcularTotales3();
                                        if(izquierda){
                                            var cell = tabla32.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;
                                    default:
                                        // Actualizar la celda en la tabla con el nuevo valor
                                        tabla32.cell(currentRow, 5).data(parseFloat(numero) + " " + texto_cantidad);
                                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                        tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                                        recalcularTotales3();
                                        break;
                                }
                            }
                        });


                    } else {
                        // Si nuevoValor no tiene la estructura número + texto, simplemente actualiza la celda con el valor original
                        tabla32.cell(currentRow, 5).data(parseFloat(nuevoValor) + " " + texto_cantidad);
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla32.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                        recalcularTotales3();


                    }
                }


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

                                //console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log(texto_cantidad);

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

                                //console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log(texto_cantidad);

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

                                //console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log(texto_cantidad);

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

                                //console.log(tabla32.cell($currentCell, 5).data())
                                var texto = tabla32.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                //console.log(texto_cantidad);

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
                    izquierda = true
                    $nextEditableCell.click();
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda

                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();
                    izquierda = false
                    $prevEditableCell.click();
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla11.on('init.dt', function () {

            $('#lstProductosVenta tbody').off('click', 'td.editable');
            $('#lstProductosVenta tbody').off('blur', 'td.editable');
            $('#lstProductosVenta tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;
            var izquierda = false;
            var celda_elegida;

            $('#lstProductosVenta tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

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

                    //console.log(tabla11.cell($currentCell, 5).data())
                    var texto = tabla11.cell($currentCell, 5).data();
                    var partes = texto.match( /([\d.]+)\s*(\D+)/);
                    texto_cantidad = partes[2];
                    //console.log(texto_cantidad);

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                    celda_elegida = $(this);

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
                    //console.log("data[6] : "+data[6]);


                    var dinero_base = parseFloat(data[6].replace("S./ ", ""));
                    var dinero_actual = parseFloat(nuevoValor);

                    

                    if (isNaN(dinero_actual)) {
                        dinero_actual = dinero_base;
                        nuevoValor = dinero_base.toFixed(2);
                        Toast. fire({
                            icon: 'error',
                            title: "Escriba bien pe mi king",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                    //console.log("dinero_actual : " + dinero_actual , "nuevoValor : "+ nuevoValor)

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
                            didOpen: () => {
                                console.log("este deberia ser segundo");
                                const confirmButton = Swal.getConfirmButton();
                                confirmButton.focus();

                                // // Handle keydown events
                                // Swal.getPopup().addEventListener('keydown', (event) => {
                                //     const confirmButton = Swal.getConfirmButton();
                                //     const cancelButton = Swal.getCancelButton();

                                //     if (event.key === 'ArrowLeft') {
                                //         event.preventDefault();
                                //         if (document.activeElement === confirmButton) {
                                //             cancelButton.focus();
                                //         } else {
                                //             confirmButton.focus();
                                //         }
                                //     } else if (event.key === 'ArrowRight') {
                                //         event.preventDefault();
                                //         if (document.activeElement === cancelButton) {
                                //             confirmButton.focus();
                                //         } else {
                                //             cancelButton.focus();
                                //         }
                                //     } else if (event.key === 'Enter') {
                                //         event.preventDefault();
                                //         document.activeElement.click();
                                //     }
                                // });
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                descripcionColumna = 'Columna 3';
                                tabla11.cell(currentRow, 6).data("S./ " + parseFloat(nuevoValor).toFixed(2));
                                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                                tabla11.cell(currentRow, 7).data("S./ " + parseFloat(Total).toFixed(2));
                                recalcularTotales();
                                celda_elegida.click();
                                celda_elegida.blur();
                                $("#iptCodigoVenta").focus();
                            } else {
                                descripcionColumna = 'Columna 3';
                                tabla11.cell(currentRow, 6).data("S./ " + parseFloat(dinero_base).toFixed(2));
                                celda_elegida.click();
                                celda_elegida.blur();
                                $("#iptCodigoVenta").focus();
                            }
                            
                        });

                    }


                }
                else if (columnaModificada === 2) {
                    var texto = tabla11.cell($currentCell, 5).data();
                    var partes = texto.match(/([\d.]+)\s*(\D+)/);
                    texto_cantidad = partes[2];
                    descripcionColumna = 'Columna 2';
                    var cantidad_base = data[5];

                    //console.log("nuevoValor : " + nuevoValor , "cantidad_base : " + cantidad_base);

                    // Verificar si nuevoValor tiene la estructura número + texto
                    var regexNumeroTexto = /^(\d+(?:\.\d+)?)\s*([A-Za-z]+)$/; // Expresión regular para número (opcionalmente decimal) seguido de texto
                    var matchNumeroTexto = nuevoValor.match(regexNumeroTexto);

                    if (matchNumeroTexto) {
                        var numero = parseFloat(matchNumeroTexto[1]).toFixed(2); // Obtener el número
                        var texto = matchNumeroTexto[2].toUpperCase(); // Obtener el texto en mayúsculas
                        var codigo_producto = data[1];
                        //console.log("deberia ser el puesto 1")
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

                                //console.log("idBoleta2 : " , idBoleta2 , "respuesta : " , respuesta, "texto : ",texto+"-")

                                //console.log("deberia ser el puesto 2")
                                // Imprimir el mensaje en la consola según el texto
                                switch (texto) {
                                    case 'F':
                                        //console.log("CASO F");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;

                                    case 'L':
                                        //console.log("CASO L");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;

                                    case 'M':
                                        //console.log("CASO M");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                       break;
                                    // Agrega más casos según las letras que necesites manejar
                                    case 'B':
                                        //console.log("CASO B");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;
                                    case 'D':
                                        //console.log("CASO D");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;
                                    case 'C':
                                        //console.log("CASO C");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;
                                    case 'P':
                                        //console.log("CASO P");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
                                        break;
                                    case 'U':
                                        //console.log("CASO U");
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
                                        if(izquierda){
                                            var cell = tabla11.cell(currentRow, 6).node();
                                            $(cell).click();
                                        }
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
                        //console.log("no cumple la regla");

                        var verificacion = parseFloat(nuevoValor);

                        if (isNaN(verificacion)) {
                            nuevoValor = parseFloat(cantidad_base);
                            Toast. fire({
                                icon: 'error',
                                title: "Escriba bien pe mi king jajaja",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }


                        tabla11.cell(currentRow, 5).data(parseFloat(nuevoValor) + " " + texto_cantidad);
                        var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));
                        tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                        recalcularTotales();


                    }
                }

                // var data = tabla11.row($(this).parents('tr')).data();
                ////console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);


                // // Mostrar en la consola la columna modificada y su nuevo valor
                // //console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);

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

                                ////console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                //console.log("partes : " ,partes);
                                texto_cantidad = partes[2];
                                //console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                            celda_elegida = $nextEditableCell;
                        }
                    }else{
                        //console.log("texto_cantidad : ",texto_cantidad);
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

                                ////console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                //console.log("partes : " ,partes);
                                texto_cantidad = partes[2];
                                ////console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($firstEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            celda_elegida = $firstEditableCell;
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

                                ////console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                ////console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($prevEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $prevEditableCell.attr('contenteditable', 'true');
                            celda_elegida = $prevEditableCell;
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

                                ////console.log("tabla11.cell($currentCell, 5).data() : ",tabla11.cell($currentCell, 5).data())
                                var texto = tabla11.cell($currentCell, 5).data();
                                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                                texto_cantidad = partes[2];
                                ////console.log("texto_cantidad : ",texto_cantidad);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($lastEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            celda_elegida = $lastEditableCell;
                        }
                    }

                }else if (keyCode === 39) { // Tecla derecha
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla derecha
                    
                        var $currentCell = $(this);
                        var $nextEditableCell = $currentCell.nextAll('td.editable').first();
                        //console.log("deberia ser el puesto 3")
                        izquierda = true;
                        $nextEditableCell.click();
                        celda_elegida = $nextEditableCell;
                
                    
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda

                        var $currentCell = $(this);
                        var $prevEditableCell = $currentCell.prevAll('td.editable').first();
                        izquierda = false;
                        $prevEditableCell.click();
                        celda_elegida = $prevEditableCell;

                } else if (keyCode === 13) {
                    e.preventDefault(); // Evitar el comportamiento predeterminado del Enter

                    var $currentCell = $(this);

                    // Salir de la celda actual
                    $currentCell.blur();
                    console.log("este deberia ser primero")
                    // Enfocar en el cuadro de texto iptCodigoVenta
                    $('#iptCodigoVenta').focus();
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla41= $("#lstProductosCatalogo").DataTable({

            "columnDefs": [
                {
                    "targets": 3,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[3] !== null) {
                            return 'S/. ' + parseFloat(data).toFixed(2);
                        } else {
                            return data;
                        }
                    }

                },
                {
                    "targets": [0,2,4],
                    "className": "text-center"
                },
                {
                    "targets": [5],
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

            ],

            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 14, //1: LISTAR PRODUCTOS Generales
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
                ajustarHeadersDataTables($('#lstProductosCatalogo'));
            }
        });

        tabla41.on('init.dt', function () {

            $('#lstProductosCatalogo tbody').off('click', 'td.editable');
            $('#lstProductosCatalogo tbody').off('blur', 'td.editable');
            $('#lstProductosCatalogo tbody').off('keydown', 'td.editable');
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            ajustarHeadersDataTables($('#lstProductosCatalogo'));


            $('#lstProductosCatalogo tbody').on('click', 'td.editable', function(){

                var $this = $(this);
                colIndex1 = $this.index();
                rowIndex1 = $this.closest('tr').index();

                console.log($this,colIndex1,rowIndex1 );

                $(this).attr('contenteditable', 'true');

            });

            $('#lstProductosCatalogo tbody').on('blur', 'td.editable', function(){
                var rowIndex = $(this).closest('tr').index();
                var colIndex = $(this).index();
                var newValue = $(this).text();
                var data = tabla41.row($(this).parents('tr')).data();

                console.log(data);

                if(parseFloat(newValue) < 0) {
                    editedCell.text("");
                } else {
                    if(newValue === ""){
                        newValue = 0;
                    }

                    productos_por_agregar.push([data[1], data[3], newValue, data[4]]);

                    cambiosEditables.push({ rowIndex: rowIndex, colIndex: colIndex, newValue: newValue, codigo: data[1], precio: data[4], medida: data[3] });

                }
            });



            // Deshabilitar la edición al presionar Enter
            $('#lstProductosCatalogo tbody').on('keydown', 'td.editable', function(e) {
                var $this = $(this);

                var numRows = tabla41.rows().count();
                var numCols = tabla41.columns().count();

                //console.log($this,colIndex1,rowIndex1 );


                switch (e.which) {
                    case 37: // Tecla de flecha izquierda
                        if (colIndex1 > 0) {

                            colIndex1 = colIndex1-1;
                            rowIndex1 = rowIndex1;
                            //$this.removeAttr('contenteditable');

                            activarEdicionEnCelda(tabla41,rowIndex1, colIndex1);

                        }
                        break;
                    case 39: // Tecla de flecha derecha
                        if (colIndex1 < numCols - 1) {
                            colIndex1 = colIndex1+1;
                            rowIndex1 = rowIndex1;
                            //$this.removeAttr('contenteditable');

                            activarEdicionEnCelda(tabla41,rowIndex1, colIndex1);


                        }
                        break;
                    case 38: // Tecla de flecha arriba
                        if (rowIndex1 > 0) {
                            colIndex1 = colIndex1;
                            rowIndex1 = rowIndex1-1;
                            //$this.removeAttr('contenteditable');

                            activarEdicionEnCelda(tabla41,rowIndex1, colIndex1);


                        }
                        break;
                    case 40: // Tecla de flecha abajo
                        if (rowIndex1 < numRows - 1) {
                            colIndex1 = colIndex1;
                            rowIndex1 = rowIndex1+1;
                            //$this.removeAttr('contenteditable');

                            activarEdicionEnCelda(tabla41,rowIndex1, colIndex1);


                        }
                        break;
                    case 13: // Tecla "Enter"
                        e.preventDefault();
                        $this.removeAttr('contenteditable');
                        break;
                    default:
                        return; // Si no es una tecla de navegación o "Enter", salir sin hacer nada
                }
                e.preventDefault(); // Evitar el comportamiento predeterminado de las teclas de dirección y "Enter"
            });


        });

        $("#iptBuscarCliente").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptBuscarCliente2").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptBuscarCliente3").keyup(function() {
            tabla01.column($(this).data('index')).search(this.value).draw();
        });

        tabla52= $("#lstClientesEdicion").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarClienteNuevo text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='far fa-circle fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, full, meta) {
                        return "<span style='font-family: Arial, sans-serif; font-size: 12px;'>" + data + "</span>";
                    }
                }
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 10,
            ajax: {
                url: "ajax/clientes.ajax.php",
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
                ajustarHeadersDataTables($('#lstClientesEdicion'));
            }
        });

        $("#iptBuscarModalCliente").keyup(function() {
            tabla52.column($(this).data('index')).search(this.value).draw();
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

    function activarEdicionEnCelda(tabla, rowIndex, colIndex) {
        //console.log("se activo la funcion")
        var cell = tabla.cell(rowIndex, colIndex);


        if (cell.any()) {
            var celdaDeseada = $(cell.node());

            // Convertir el nodo en un objeto jQuery
            celdaDeseada.attr('contenteditable', 'true');

            // Enfocar la celda deseada usando JavaScript nativo
            var el = celdaDeseada.get(0); // Obtener el elemento HTML puro
            if (el && typeof el.focus === 'function') {
                el.focus(); // Enfocar el elemento HTML

                // Seleccionar todo el contenido de la celda
                if (window.getSelection) {
                    var selection = window.getSelection();
                    var range = document.createRange();
                    range.selectNodeContents(el);
                    selection.removeAllRanges();
                    selection.addRange(range);
                } else if (document.body.createTextRange) {
                    var range = document.body.createTextRange();
                    range.moveToElementText(el);
                    range.select();
                }
            }
        }
    }

    function verificacionRUCSunat(Identificacion){

        console.log("es RUC");
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/consulta_ruc.ajax.php",
                type: 'POST',
                data: {
                    'ruc': Identificacion,
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (respuesta == 1) {
                        Toast.fire({
                            icon: 'error',
                            title: "EL RUC NO ES RECONCIBLE VERIFIQUE CORRECTAMENTE",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(false);
                    } else if (respuesta["message"] === "ruc no valido") {
                        console.log(respuesta["message"]);

                        Toast.fire({
                            icon: 'error',
                            title: respuesta["message"],
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(false);
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: "RUC encontrado exitosamente",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(true);
                    }
                },
                error: function(err) {
                    reject(err);
                }
            });
        });

    }

    function verificacionDniSunat(Identificacion) {
        console.log("es dni");

        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/consulta_dni.ajax.php",
                type: 'POST',
                data: {
                    'dni': Identificacion,
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (respuesta == 1) {
                        Toast.fire({
                            icon: 'error',
                            title: "EL DNI NO ES RECONCIBLE VERIFIQUE CORRECTAMENTE",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(false);
                    } else if (respuesta["message"] === "dni no valido") {
                        console.log(respuesta["message"]);

                        Toast.fire({
                            icon: 'error',
                            title: respuesta["message"],
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(false);
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: "DNI encontrado exitosamente",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        resolve(true);
                    }
                },
                error: function(err) {
                    reject(err);
                }
            });
        });
    }

    async function VerficarEstadoVentas(){

        try {
            let respuesta = await $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 54,
                },
                dataType: 'json'
            });



           if (!respuesta || respuesta.length === 0) {
                var boleano = false;
                return boleano;
           } else {
                var boleano = false;
                if(respuesta[0]["Estado"] === 1){
                    boleano = false;
                    navLink.classList.add('red-text');
                    icon_notificacion.style.display = 'inline';
                    desactivarBotones();
                }else if(respuesta[0]["Estado"] === 0){
                    boleano = true;
                    navLink.classList.remove('red-text');
                    icon_notificacion.style.display = 'none';
                    activarBotones();
                }

               return boleano;
           }
        } catch (error) {
            console.error("Error en la consulta:", error);
            // Puedes manejar el error aquí
            throw error;
        }

    }

    async function CambiarVentaEstadoActivo(){

        try {
            let respuesta = await $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 56,
                },
                dataType: 'json'
            });
        } catch (error) {
            console.error("Error en la consulta:", error);
            // Puedes manejar el error aquí
            throw error;
        }

    }

    async function CambiarVentaEstadoProceso(){

        try {
            let respuesta = await $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 55,
                },
                dataType: 'json'
            });
        } catch (error) {
            console.error("Error en la consulta:", error);
            // Puedes manejar el error aquí
            throw error;
        }

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

    function CargarBotones(){

        $("#Btn_Desbloquear").click(function(){
            CambiarVentaEstadoProceso();

        });

        $("#cambiarEstilo").click(function(){
            VerificarEstados();

        });

        $('#scrollToBottomBtn').click(function() {
            // Ajusta el scroll para ir hacia abajo
            var documentHeight = $(document).height();
            var windowHeight = $(window).height();
            var scrollTo = documentHeight - windowHeight;
            $('html, body').animate({
                scrollTop: scrollTo
            }, 500); // Puedes ajustar la velocidad de animación según tus preferencias
        });

        $("#btnCerrarModalCatalogoxCliente").on('click', function() {
            colIndex2 = 5;
            rowIndex2 = 0;

        });

        $("#btnCopiar1").on('click', function() {
            //console.log("se presiono el btn copiar 1")
            CopiarTabla11();

        });

        $("#btnCopiar2").on('click', function() {

            var filaSeleccionada = $("#lstRegistros").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                CopiarTabla22();

            }

        });

        $("#btnCopiar3").on('click', function() {

             var filaSeleccionada = $("#lstRegistrosImprimir").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                CopiarTabla32();

            }

        });

        $("#btnPegar1").on('click', function() {

            PegarTabla11();

        });

        $("#btnGuardar2").on('click', function() {

            var filaSeleccionada = $("#lstRegistros").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                //console.log(idBoleta);
                if(idBoleta == 0){
                    console.log("es cero");
                } else{

                    var formData = new FormData();
                    var arr = [];
                    var seleccion = 1;

                        tabla22.rows().eq(0).each(function(index) {

                            var row = tabla22.row(index);

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
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(respuesta) {
                                console.log("respuesta: ", respuesta);
                                tabla21.ajax.reload();
                                tabla22.clear().draw();
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

            }

        });

        $("#btnGuardar3").on('click', function() {


            var filaSeleccionada = $("#lstRegistrosImprimir").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                // console.log(idBoleta2);
                if(idBoleta2 == 0){
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

                    formData.append('nro_boleta', idBoleta2);

                    formData.append('accion', 10);

                    $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(respuesta) {
                                console.log("respuesta intento: ", respuesta);
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
            }

        });

        $("#content-clientes").on('click', '.btnSeleccionarCliente', async function() {
            //tabla32.clear().draw();


            var data = tabla01.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta2 = 0;
                ClienteBoleta ="";
                Identificacion = "SIN IDENTIFICAC";
                Direccion = "SIN DIRECCION";

                var elementoCliente = document.getElementById("iptNombreCliente");
                var elementoCliente2 = document.getElementById("iptDireccionCliente");
                var elementoCliente_0 = document.getElementById("iptNombreCliente_0");

                if (elementoCliente) {
                    elementoCliente.textContent = "VARIOS";
                }

                if (elementoCliente_0) {
                    elementoCliente_0.textContent = "VARIOS";
                }

                if(elementoCliente2){
                    elementoCliente2.textContent = "Sin Direccion";
                }

                $("#card-modulos").css("display", "none");

            }else{

                tabla01.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta2 = data[3];

                Direccion = data[5];

                idCliente0 = data[3];

                ClienteBoleta = data[3];

                Identificacion = data[2];

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta2);
                cargarProductosAJAX(idBoleta2);
                var elementoCliente = document.getElementById("iptNombreCliente");
                var elementoCliente_0 = document.getElementById("iptNombreCliente_0");
                var elementoCliente2 = document.getElementById("iptDireccionCliente");
                var elementoCliente_0_2 = document.getElementById("titulo_modal_stock_clientes")

                if (elementoCliente) {
                    elementoCliente.textContent = idBoleta2;
                }

                if (elementoCliente_0) {
                    elementoCliente_0.textContent = idBoleta2;
                    elementoCliente_0_2.textContent = idBoleta2;
                }

                if(elementoCliente2){
                    elementoCliente2.textContent = Direccion;
                }



                ConsultarPopular(ClienteBoleta)
                .then(respuesta => {
                    // Aquí puedes manejar la respuesta después de que la promesa se resuelva
                    console.log("Respuesta recibida:", respuesta);
                    tipo_venta_para_impresion = respuesta;

                })
                .catch(error => {
                    // Manejo de errores
                    console.error("Error recibido:", error);
                });

                $.ajax({
                    async:false,
                    url:"ajax/ventas.ajax.php",
                    method: 'POST',
                    data: {
                        'accion': 13, //1: LISTAR PRODUCTOS
                        'idCliente':idCliente0.trim(),
                    },
                    dataType: 'json',
                    success: function (respuesta){
                        console.log(respuesta.length)

                        if(respuesta.length === 0){
                            $("#content-registrar-tab").click();
                        }else if(respuesta.length > 0){
                            CrearYMostrar(idCliente0);
                        }
                    }
                })



            }
        });

        $("#content-clientes").on('click', '.btnEditarCliente', function() {

            $("#mdlActualizarCliente").modal('show');

            var data = tabla01.row($(this).parents('tr')).data();

            console.log(data);

            $("#iptRasonSocial").val(data["Razon"].trim());
            $("#iptRasonComercial").val(data["Nombres"].trim());
            $("#iptIdentificacion").val(data["Identificacion"].trim());
            $("#iptDireccion").val(data["Direccion"].trim());

            Puesto = data[1];

        });

        $("#content-clientes").on('click', '.btnEliminarCliente', function() {

            var data = tabla01.row($(this).parents('tr')).data();

            console.log(data);

            var idCliente = data[1];

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
                            idCliente: idCliente
                        },
                        dataType: 'json',
                        success: function (respuesta){

                            console.log("respuesta 1 : " ,respuesta[0][0]);

                            var NombreCliente = respuesta[0][0];
                            NombreCliente = NombreCliente.trim();

                            $.ajax({
                                async:false,
                                url:"ajax/clientes.ajax.php",
                                method: 'POST',
                                data: {
                                    accion: 6,
                                    NombreCliente: NombreCliente
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
                                                NombreCliente: NombreCliente
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
                                                idCliente: idCliente
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

        document.getElementById("btnGuardarCliente").addEventListener("click", function() {
            console.log("funciona?")
            GuardarDatos(Puesto);
        });

        $('#lstRegistros tbody').on('click', '.btnEditarProducto', function(){

            tabla22.clear().draw();

            $("#totalVentaRegistrarVista2").html("");
            $("#totalVentaRegistrarVista2").html("0.00");

            var data = tabla21.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta = 0;
                ClienteBoleta ="";
                nro_boleta_cliente = 0;
                Identificacion = "SIN IDENTIFICAC";
                Direccion = "SIN DIRECCION";

                var elementoCliente = document.getElementById("iptNombreCliente_2");
                var elementoCliente2 = document.getElementById("iptFechaCliente_2");

                $("#iptCodigoVentaRegistro").val("");

                if (elementoCliente) {
                    elementoCliente.textContent = "VARIOS";
                    elementoCliente2.textContent = "";
                }

                cargarProductosAJAXRegistros(0);



                $("#card-modulos").css("display", "none");

            }else{

                tabla21.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta = data[1];
                ClienteBoleta = data[2];
                nro_boleta_cliente = data[1];

                var elementoCliente = document.getElementById("iptNombreCliente_2");
                var elementoCliente2 = document.getElementById("iptFechaCliente_2");

                $("#iptCodigoVentaRegistro").val("");

                if (elementoCliente) {
                    elementoCliente.textContent = data["Cliente"];
                    elementoCliente2.textContent = "( "+ data["fecha_venta"] + " )";
                }

                cargarProductosAJAXRegistros(ClienteBoleta);

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta+ "-"+ ClienteBoleta);

                $.ajax({
                    url: "ajax/reporte.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 10,
                        'Nombres': ClienteBoleta
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        if (respuesta && respuesta.length > 0) {
                            Identificacion = respuesta[0]["Identificacion"];
                            Direccion = respuesta[0]["Direccion"];
                        } else {
                            Identificacion = "SIN IDENTIFICAC";
                            Direccion = "SIN DIRECCION";
                        }
                    },
                    error: function() {
                        // Opcional: Manejo de errores en la llamada AJAX
                        Identificacion = "SIN IDENTIFICAC";
                        Direccion = "SIN DIRECCION";
                    }
                });

                $.ajax({
                    async:false,
                    url:"ajax/ventas.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 9,
                        id_boleta: idBoleta
                    },
                    dataType: 'json',
                    success: function (respuesta){


                        enListarProductos(respuesta,tabla22);
                    }
                })


            }


        });

        $('#lstRegistrosImprimir tbody').on('click', '.btnEditarProducto', function(){

            tabla32.clear().draw();

            $("#totalVentaRegistrarVista3").html("");
            $("#totalVentaRegistrarVista3").html("0.00");

            var data = tabla31.row($(this).parents('tr')).data();

            antiguo_total = 0;

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta2 = 0;

                Factura = "";

                nro_boleta_cliente = 0;

                ClienteBoleta2= "";

                var elementoCliente = document.getElementById("iptNombreCliente_3");
                var elementoCliente2 = document.getElementById("iptFechaCliente_3");

                $("#iptCodigoVentaRegistro2").val("");

                if (elementoCliente) {
                    elementoCliente.textContent = "VARIOS";
                    elementoCliente2.textContent = "";
                }

                cargarProductosAJAXRegistros2(0);

                $("#card-modulos").css("display", "none");

            }else{

                tabla31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta2 = data[1];
                nro_boleta_cliente = data[1];
                ClienteBoleta2 = data[2];
                Factura = data[6];
                ReImprimir = data["tipo_venta"];

                var elementoCliente = document.getElementById("iptNombreCliente_3");
                var elementoCliente2 = document.getElementById("iptFechaCliente_3");
                

                $("#iptCodigoVentaRegistro2").val("");

                if (elementoCliente) {
                    elementoCliente.textContent = data["Cliente"];
                    elementoCliente2.textContent = "( "+ data["fecha_venta"] + " )";
                }

                cargarProductosAJAXRegistros2(ClienteBoleta2);

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta2, "- ", ClienteBoleta2);

                $.ajax({
                    async:false,
                    url:"ajax/ventas.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 9,
                        id_boleta: idBoleta2
                    },
                    dataType: 'json',
                    success: function (respuesta){

                        console.log(respuesta)

                        enListarProductos(respuesta, tabla32);
                    }
                })


            }
        });

        $("#btnRegistrar1").on("click", function(){
            VerficarEstadoVentas()
            CargarNroBoleta();
            CambiarVentaEstadoActivo()
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

                                    var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', palabra);
                                    formData.append('Estado', 0);

                                    var confirmador =  $("#iptNombreCliente").text();
                                    console.log("confirmador: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }


                                    ejecutarAjax(formData);



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

                                    var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                    formData.append('nro_boleta', nro_boleta);
                                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                    formData.append('total_venta', parseFloat(totalVenta));
                                    formData.append('seleccion', parseFloat(seleccion));
                                    formData.append('deuda', parseFloat(deuda));
                                    formData.append('Cliente', palabra);
                                    formData.append('Estado', 0);

                                    var confirmador =  $("#iptNombreCliente").text();
                                    console.log("confirmador: ",confirmador.trim());

                                    if(confirmador.trim() === "VARIOS"){

                                    }
                                    else{
                                        AgregarCambiosHistorial(arr2);
                                    }

                                    ejecutarAjax(formData);




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
            setTimeout(function () {
                tipo_venta_para_impresion = "VACIO";
            }, 1000); // Adjust the delay as needed
        });

        $("#btnRegistrarFactura").on("click", async function(){
            VerficarEstadoVentas()
            CargarNroBoleta();
            CambiarVentaEstadoActivo();
            items = [];
            var Consultar = false;
            var Continuar = false;

            if(tipo_venta_para_impresion === "VACIO"){
                Consultar = true;
                Continuar = true;
            } else if (tipo_venta_para_impresion === "FACTURA"){
                Consultar = true;
                Continuar = true;
            }else{
                Consultar = false;
            }

            if(!Consultar){
                Swal.fire({
                    icon: 'warning',
                    title: 'El cliente prefiere las ventas de tipo: <br><span style="font-size: 60px; font-weight: bold;">' + tipo_venta_para_impresion + '</span>',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                    cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                    confirmButtonText: "Continuar",
                    cancelButtonText: "Cancelar",
                    customClass: {
                        title: 'swal2-title' // Esta clase puede seguir aplicándose si hay otros estilos en el CSS de SweetAlert
                    }
                }).then(async (result) => {
                    if (result.isConfirmed){
                        Continuar = true;
                    }else{
                        Continuar = false;
                        
                    }

                    ContinuarRegistroFactura(isActionInProgress2,Continuar,suma_total,Identificacion);

                });
            }else{

                ContinuarRegistroFactura(isActionInProgress2,Continuar,suma_total,Identificacion);

            }

        });

        $("#btnRegistrarBoleta").on("click", async function(){
            VerficarEstadoVentas()
            CargarNroBoleta();
            CambiarVentaEstadoActivo();
            items = [];
            if(ClienteBoleta === ""){
                ClienteBoleta = "VARIOS";
            }

            var Consultar = false;
            var Continuar = false;

            if(tipo_venta_para_impresion === "VACIO"){
                Consultar = true;
                Continuar = true;
            } else if (tipo_venta_para_impresion === "BOLETA"){
                Consultar = true;
                Continuar = true;
            }else{
                Consultar = false;
            }

            if(!Consultar){
                Swal.fire({
                    icon: 'warning',
                    title: 'El cliente prefiere las ventas de tipo: <br><span style="font-size: 60px; font-weight: bold;">' + tipo_venta_para_impresion + '</span>',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                    cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                    confirmButtonText: "Continuar",
                    cancelButtonText: "Cancelar",
                }).then(async (result) => {
                    if (result.isConfirmed){
                        Continuar = true;
                    }else{
                        Continuar = false;
                    }

                    ContinuarRegistroBoleta(isActionInProgress2,Continuar,suma_total,Identificacion)

                    

                });
            }else{

                ContinuarRegistroBoleta(isActionInProgress2,Continuar,suma_total,Identificacion)

            }

            

        });

        $("#btnRegistroEsp").on("click", function(){
            VerficarEstadoVentas()
            CargarNroBoleta();
            CambiarVentaEstadoActivo();
            var Consultar = false;
            var Continuar = false;

            if(tipo_venta_para_impresion === "VACIO"){
                Consultar = true;
                Continuar = true;
            } else if (tipo_venta_para_impresion === "NOTA DE VENTA"){
                Consultar = true;
                Continuar = true;
            }else{
                Consultar = false;
            }

            if(!Consultar){
                Swal.fire({
                    icon: 'warning',
                    title: 'El cliente prefiere las ventas de tipo: <br><span style="font-size: 60px; font-weight: bold;">' + tipo_venta_para_impresion + '</span>',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                    cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                    confirmButtonText: "Continuar",
                    cancelButtonText: "Cancelar",
                }).then(async (result) => {
                    if (result.isConfirmed){
                        Continuar = true;
                    }else{
                        Continuar = false;
                    }
                    if (!isActionInProgress2 && Continuar) {
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
                                        var seleccion = 8;

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

                                            var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                            formData.append('nro_boleta', nro_boleta);
                                            formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                            formData.append('total_venta', parseFloat(totalVenta));
                                            formData.append('seleccion', seleccion);
                                            formData.append('deuda', parseFloat(deuda));
                                            formData.append('Cliente', palabra);
                                            formData.append('Estado', 1);

                                            var confirmador =  $("#iptNombreCliente").text();
                                            console.log("confirmador este ese: ",confirmador.trim());

                                            if(confirmador.trim() === "VARIOS"){

                                            }
                                            else{
                                                AgregarCambiosHistorial(arr2);
                                            }

                                            console.log('Valor de seleccion: ',seleccion )


                                            ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios);


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
                                        var seleccion = 8;

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

                                            var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                            formData.append('nro_boleta', nro_boleta);
                                            formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                            formData.append('total_venta', parseFloat(totalVenta));
                                            formData.append('seleccion', parseFloat(seleccion));
                                            formData.append('deuda', parseFloat(deuda));
                                            formData.append('Cliente', palabra);
                                            formData.append('Estado', 1);

                                            var confirmador =  $("#iptNombreCliente").text();
                                            console.log("confirmador 12131232: ",confirmador.trim());

                                            if(confirmador.trim() === "VARIOS"){

                                            }
                                            else{
                                                AgregarCambiosHistorial(arr2);
                                            }

                                            console.log(formData,nro_boleta,arrIndicador,arrPrecios)
                                            ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios);

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

                    setTimeout(function () {
                        if(Continuar){
                            TipoNotaVenta(nro_boleta);
                            tipo_venta_para_impresion = "VACIO";
                        }

                    }, 1000); // Adjust the delay as needed
                });
            }else{

                if (!isActionInProgress2 && Continuar) {
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
                                    var seleccion = 8;

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

                                        var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                        formData.append('nro_boleta', nro_boleta);
                                        formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                        formData.append('total_venta', parseFloat(totalVenta));
                                        formData.append('seleccion', seleccion);
                                        formData.append('deuda', parseFloat(deuda));
                                        formData.append('Cliente', palabra);
                                        formData.append('Estado', 1);

                                        var confirmador =  $("#iptNombreCliente").text();
                                        console.log("confirmador este ese: ",confirmador.trim());

                                        if(confirmador.trim() === "VARIOS"){

                                        }
                                        else{
                                            AgregarCambiosHistorial(arr2);
                                        }

                                        console.log('Valor de seleccion: ',seleccion )


                                        ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios);


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
                                    var seleccion = 8;

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

                                        var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                                        formData.append('nro_boleta', nro_boleta);
                                        formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                                        formData.append('total_venta', parseFloat(totalVenta));
                                        formData.append('seleccion', parseFloat(seleccion));
                                        formData.append('deuda', parseFloat(deuda));
                                        formData.append('Cliente', palabra);
                                        formData.append('Estado', 1);

                                        var confirmador =  $("#iptNombreCliente").text();
                                        console.log("confirmador 12131232: ",confirmador.trim());

                                        if(confirmador.trim() === "VARIOS"){

                                        }
                                        else{
                                            AgregarCambiosHistorial(arr2);
                                        }

                                        console.log(formData,nro_boleta,arrIndicador,arrPrecios)
                                        ejecutarAjaxESP(formData,nro_boleta,arrIndicador,arrPrecios);

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

                setTimeout(function () {
                    if(Continuar){
                        TipoNotaVenta(nro_boleta);
                        tipo_venta_para_impresion = "VACIO";
                    }

                }, 1000); // Adjust the delay as needed


            }

                

        });

        $("#btnEliminarRegistro2").on("click", function(){

            var filaSeleccionada = $("#lstRegistros").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                tabla22.clear().draw();

                EliminarRegistro(idBoleta);

                $("#totalVentaRegistrarVista2").html("");
                $("#totalVentaRegistrarVista2").html("0.00");

            }
        });

        $("#btnEliminarRegistro3").on("click", function(){

            var filaSeleccionada = $("#lstRegistrosImprimir").find('tr.selected').length; // Verifica si hay filas seleccionadas

            console.log("idBoleta2 : " , idBoleta2);

            idBoleta = idBoleta2;

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                tabla32.clear().draw();

                EliminarRegistro(idBoleta2);

                $("#totalVentaRegistrarVista3").html("");
                $("#totalVentaRegistrarVista3").html("0.00");
            }
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

        $('#lstProductosVenta tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla11);
        });

        $('#lstRegistrosProductos tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla22);
        });

        $('#lstRegistrosProductosImprimir tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla32);
        });

        $('#btnActualizar2').on("click",function(){
            tabla21.ajax.reload();
        });

        $('#btnActualizar3').on("click",function(){
            tabla31.ajax.reload();
        });

        $("#btnImprimir3").on("click",async function(){

            console.log(idBoleta2);
            var seleccion = $("#selDocumentoVenta").val();

            if(idBoleta2 === "" || idBoleta2 === 0){
                Swal.fire({
                    icon: 'warning',
                    title: 'No se selecciono una venta para imprimrir'
                });
                return 0;
            }
            
            var formData = new FormData();
            var arr = [];
            var arrIndicador  = [];
            var arrPrecios  = [];


            var formDataItems = new FormData();
            var formDataFactura = new FormData();
            suma_total = 0;
            var total_igv = 0;
            var total_gravada = 0;

                tabla32.rows().eq(0).each(function(index) {

                    var formDataProducto = new FormData();

                    var row = tabla32.row(index);

                    var data = row.data();

                    var total  = data[7].replace("S./ ", "");
                    var tot = parseFloat(total);
                    suma_total = suma_total + tot;

                    var precio  = tot/parseFloat(data[5]);
                    var prec = parseFloat(precio);

                    var palabras = data[5].match(/[a-zA-Z()]+/g);
                    var numero = parseFloat(data[5]);

                    console.log(data[1] + " , " + data[5] +" , " + numero +  " , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                    arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                    arrIndicador[index] = data[5];
                    arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                    var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
                    var valor_unitario = (precio_unitario * 100)/(118);
                    var total = parseFloat(data[7].replace("S./ ", ""));
                    var subtotal = (total * 100)/(118);
                    var igv = (total * 18)/(118);
                    var codigo = data[1];
                    var descripcion = data[4];

                    formData.append('arr[]', arr[index]);


                });

            total_igv = suma_total * 18/118;
            total_gravada = suma_total * 100/118;


            idBoleta2 = idBoleta2.replace(/^\s+|\s+$/g, '');
            console.log("array 1: " + arr);

            formData.append('nro_boleta', idBoleta2);

            formData.append('accion', 10);

            var confirmador =  $("#iptNombreCliente").text();

            console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta2+"'");

            $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 47,
                    'nro_boleta': idBoleta2
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta)
                }
            });

            if(seleccion == 2 || seleccion == 1){

                if(seleccion == 2 && Factura === "FACTURA" && idBoleta2 !=0){
                    eleccion = "factura";
                }else if(seleccion == 1 && Factura === "BOLETA"&& idBoleta2 !=0){
                    eleccion = "boleta";
                }else{
                    var titulo = ""
                    if(seleccion == 1 && Factura != "BOLETA"){
                        titulo = "la venta no esta registrado como BOLETA"
                    }else if (seleccion == 2 && Factura != "FACTURA"){
                        titulo = "la venta no esta registrado como FACTURA"
                    }else{
                        titulo = "la venta no esta registrado en Nubefact"
                    }

                    Toast.fire({
                        icon: 'warning',
                        title: titulo,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    return 0;
                }

                $.ajax({
                    url: "ajax/reporte.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 9,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        var numero_factura = respuesta[0]["numero_factura"];
                        var link = respuesta[0]["link"];

                        $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 12,
                                'nro_boleta': idBoleta2
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("respuesta: ", respuesta[0]["cliente"]);

                                window.open('http://192.168.1.41/market-pos/vistas/generar_'+eleccion+ '_impresion.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) + '&linkQR=' + encodeURIComponent(link)+ '&factura=' + numero_factura);

                            }
                        });

                    }

                });

            }else if(seleccion == 6){

                if(idBoleta2 == 0){
                    console.log("es cero");
                } else if(Factura === "BOLETA" || Factura === "FACTURA"){

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    $.ajax({
                        url: "ajax/reporte.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 9,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            var numero_factura = respuesta[0]["numero_factura"];
                            var link = respuesta[0]["link"];

                            if (link.endsWith(".pdf")) {
                                window.open(link, '_blank');
                            } else {
                                // Maneja el caso en el que el link no es un PDF
                                console.log("El enlace no es un archivo PDF.");
                            }
                        }
                    });

                }else{
                    Toast.fire({
                        icon: 'warning',
                        title: "La venta no tiene registro con nubefact",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            }else{

                if(idBoleta2 == 0){
                    console.log("es cero");
                } else{
                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 12,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: ", respuesta[0]["cliente"]);
                            if(seleccion == 1){window.open('http://192.168.1.41/market-pos/vistas/generar_boleta.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                            else if (seleccion == 3) {

                                    // var url = 'http://192.168.1.41/market-pos/vistas/generar_ticket.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios;
                                    // window.open(url, '_blank');
                                    var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]);

                                    // Abrir la nueva ventana
                                    var nuevaVentana = window.open(url, '_blank');

                                }

                            else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                            else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}


                        }
                    });
                }

            }
        });

        $("#btnReImprimir3").on("click",async function(){

            console.log(idBoleta2, ReImprimir);
            var seleccion;
            
            if(ReImprimir === "NOTA DE VENTA"){
                seleccion = 4;
            }else if (ReImprimir === "BOLETA"){
                seleccion = 1;
            }else if (ReImprimir === "FACTURA"){
                seleccion = 2;
            }else if (ReImprimir === "TICKET"){
                seleccion = 3;
            }else{
                seleccion = 5;
            }

            if(idBoleta2 === "" || idBoleta2 === 0){
                Swal.fire({
                    icon: 'warning',
                    title: 'No se selecciono una venta para imprimrir'
                });
                return 0;
            }
            var formData = new FormData();
            var arr = [];
            var arrIndicador  = [];
            var arrPrecios  = [];


            var formDataItems = new FormData();
            var formDataFactura = new FormData();
            suma_total = 0;
            var total_igv = 0;
            var total_gravada = 0;

                tabla32.rows().eq(0).each(function(index) {

                    var formDataProducto = new FormData();

                    var row = tabla32.row(index);

                    var data = row.data();

                    var total  = data[7].replace("S./ ", "");
                    var tot = parseFloat(total);
                    suma_total = suma_total + tot;

                    var precio  = tot/parseFloat(data[5]);
                    var prec = parseFloat(precio);

                    var palabras = data[5].match(/[a-zA-Z()]+/g);
                    var numero = parseFloat(data[5]);

                    console.log(data[1] + " , " + data[5] +" , " + numero +  " , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                    arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                    arrIndicador[index] = data[5];
                    arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                    var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
                    var valor_unitario = (precio_unitario * 100)/(118);
                    var total = parseFloat(data[7].replace("S./ ", ""));
                    var subtotal = (total * 100)/(118);
                    var igv = (total * 18)/(118);
                    var codigo = data[1];
                    var descripcion = data[4];

                    formData.append('arr[]', arr[index]);


                });

            total_igv = suma_total * 18/118;
            total_gravada = suma_total * 100/118;


            idBoleta2 = idBoleta2.replace(/^\s+|\s+$/g, '');
            console.log("array 1: " + arr);

            formData.append('nro_boleta', idBoleta2);

            formData.append('accion', 10);

            var confirmador =  $("#iptNombreCliente").text();

            console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta2+"'");

            $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 47,
                    'nro_boleta': idBoleta2
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta)
                }
            });

            if(seleccion == 2 || seleccion == 1){

                if(seleccion == 2 && Factura === "FACTURA" && idBoleta2 !=0){
                    eleccion = "factura";
                }else if(seleccion == 1 && Factura === "BOLETA"&& idBoleta2 !=0){
                    eleccion = "boleta";
                }else{
                    var titulo = ""
                    if(seleccion == 1 && Factura != "BOLETA"){
                        titulo = "la venta no esta registrado como BOLETA"
                    }else if (seleccion == 2 && Factura != "FACTURA"){
                        titulo = "la venta no esta registrado como FACTURA"
                    }else{
                        titulo = "la venta no esta registrado en Nubefact"
                    }

                    Toast.fire({
                        icon: 'warning',
                        title: titulo,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    return 0;
                }

                $.ajax({
                    url: "ajax/reporte.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 9,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        var numero_factura = respuesta[0]["numero_factura"];
                        var link = respuesta[0]["link"];

                        $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 12,
                                'nro_boleta': idBoleta2
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("respuesta: ", respuesta[0]["cliente"]);

                                window.open('http://192.168.1.41/market-pos/vistas/generar_'+eleccion+ '_impresion.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) + '&linkQR=' + encodeURIComponent(link)+ '&factura=' + numero_factura);

                            }
                        });

                    }

                });

            }else if(seleccion == 6){

                if(idBoleta2 == 0){
                    console.log("es cero");
                } else if(Factura === "BOLETA" || Factura === "FACTURA"){

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    $.ajax({
                        url: "ajax/reporte.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 9,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            var numero_factura = respuesta[0]["numero_factura"];
                            var link = respuesta[0]["link"];

                            if (link.endsWith(".pdf")) {
                                window.open(link, '_blank');
                            } else {
                                // Maneja el caso en el que el link no es un PDF
                                console.log("El enlace no es un archivo PDF.");
                            }
                        }
                    });

                }else{
                    Toast.fire({
                        icon: 'warning',
                        title: "La venta no tiene registro con nubefact",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            }else{

                if(idBoleta2 == 0){
                    console.log("es cero");
                } else{
                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 12,
                            'nro_boleta': idBoleta2
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: ", respuesta[0]["cliente"]);
                            if(seleccion == 1){window.open('http://192.168.1.41/market-pos/vistas/generar_boleta.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                            else if (seleccion == 3) {

                                    // var url = 'http://192.168.1.41/market-pos/vistas/generar_ticket.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios;
                                    // window.open(url, '_blank');
                                    var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]);

                                    // Abrir la nueva ventana
                                    var nuevaVentana = window.open(url, '_blank');

                                }

                            else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                            else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}


                        }
                    });
                }

            }
        });

        $("#btnHacerVenta2").on("click",async function(){
            items = [];

            var seleccion_primor = $("#selDocumentoVenta2").val();

            console.log("seleccion_primor : " , seleccion_primor)

            var cliente_tipo_de_documento = "-";

            var formData = new FormData();
            var arr = [];
            var arrIndicador  = [];
            var arrPrecios  = [];
            var seleccion = $("#selDocumentoVenta2").val();
            suma_total = 0;
            var total_igv = 0 ;
            var total_gravada = 0;
            Actualizar_fecha_venta(idBoleta)

            tabla22.rows().eq(0).each(function(index) {

                var row = tabla22.row(index);
                var data = row.data();
                var total  = data[7].replace("S./ ", "");
                var tot = parseFloat(total);
                var precio  = tot/parseFloat(data[5]);
                var prec = parseFloat(precio);
                var palabras = data[5].match(/[a-zA-Z()]+/g);
                var numero = parseFloat(data[5]);

                suma_total = suma_total + tot;
                arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                arrIndicador[index] = data[5];

                arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
                var valor_unitario = (precio_unitario * 100)/(118);
                var total = parseFloat(data[7].replace("S./ ", ""));
                var subtotal = (total * 100)/(118);
                var igv = (total * 18)/(118);
                var codigo = data[1];
                var descripcion = data[4];
                var unidad_de_medida = "NIU";

                if(palabras[0] === "Unidades"){
                    unidad_de_medida = "NIU"

                }else if(palabras[0] === "Paquetitos"){
                    unidad_de_medida = "PK"

                }else if(palabras[0] === "Cientos"){
                    unidad_de_medida = "CEN"

                }else if(palabras[0] === "Millares"){
                    unidad_de_medida = "MIL"

                }else if(palabras[0] === "Cajas"){
                    unidad_de_medida = "CJ"

                }else if(palabras[0] === "Fardos"){
                    unidad_de_medida = "FAR"

                }else if(palabras[0] === "Planchas"){
                    unidad_de_medida = "PL"

                }else if(palabras[0] === "Docenas"){
                    unidad_de_medida = "DC"

                }



                var item = {
                    unidad_de_medida: unidad_de_medida,
                    codigo: data[1],
                    descripcion: data[4],
                    cantidad: numero,
                    valor_unitario: valor_unitario.toFixed(2),
                    precio_unitario: precio_unitario.toFixed(2),
                    descuento: "",
                    subtotal: subtotal,
                    tipo_de_igv: "1",
                    igv: igv,
                    total: total,
                    anticipo_regularizacion: "false",
                    anticipo_documento_serie: "",
                    anticipo_documento_numero: ""
                };

                items.push(item);

            });

            total_igv = suma_total * 18/118;
            total_gravada = suma_total * 100/118;

            if(seleccion_primor == 2){

                if(Identificacion === "SIN IDENTIFICAC"){

                    Toast.fire({
                        icon: 'warning',
                        title: "El cliente no tiene ruc o Dni disponible",
                        showConfirmButton: false,
                        timer: 1500
                    });



                    return 0;

                }else {

                    if (Identificacion.length === 8) {
                        Toast. fire({
                            icon: 'error',
                            title: "La Boleta Solo Acepta RUC",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        return 0;
                    } else if (Identificacion.length >= 10) {
                        cliente_tipo_de_documento = 6;
                    }

                }

                    $("#mdlPantallaCarga").modal("show");
                    $("#img_carga").attr("style","display:on");
                    $("#img_carga").attr("style","height:200px");
                    $("#img_carga").attr("style","width:200px");

                    var confirmador = await VerificarNumeroFacturaBoton();

                    if(confirmador === true){

                        console.log(idBoleta);
                        if(idBoleta == 0){

                            Toast.fire({
                                icon: 'warning',
                                title: "Porfavor elija una venta",
                                showConfirmButton: false,
                                timer: 1500
                            })
                            console.log("es cero");

                        } else{

                            numero_factura = await DarNumeroFijo();

                            console.log("numero_factura : " , numero_factura)

                            

                            ///DATA DE LA FACTURA GENERAL

                            var factura = {
                                operacion: "generar_comprobante",
                                tipo_de_comprobante: "1",
                                serie: "F001",
                                numero: numero_factura,
                                sunat_transaction: "1",
                                cliente_tipo_de_documento: cliente_tipo_de_documento,
                                cliente_numero_de_documento: Identificacion,
                                cliente_denominacion: ClienteBoleta,
                                cliente_direccion: Direccion,
                                cliente_email: "",
                                cliente_email_1: "",
                                cliente_email_2: "",
                                fecha_de_emision: new Date().toLocaleDateString('es-PE'),
                                fecha_de_vencimiento: "",
                                moneda: "1",
                                tipo_de_cambio: "",
                                porcentaje_de_igv: "18",
                                descuento_global: "",
                                total_descuento: "",
                                total_anticipo: "",
                                total_gravada: total_gravada,
                                total_inafecta: "",
                                total_exonerada: "",
                                total_igv: total_igv,
                                total_gratuita: "",
                                total_otros_cargos: "",
                                total: suma_total.toFixed(2),
                                percepcion_tipo: "",
                                percepcion_base_imponible: "",
                                total_percepcion: "",
                                total_incluido_percepcion: "",
                                detraccion: "false",
                                observaciones: "",
                                documento_que_se_modifica_tipo: "",
                                documento_que_se_modifica_serie: "",
                                documento_que_se_modifica_numero: "",
                                tipo_de_nota_de_credito: "",
                                tipo_de_nota_de_debito: "",
                                enviar_automaticamente_a_la_sunat: "true",
                                enviar_automaticamente_al_cliente: "false",
                                codigo_unico: "",
                                condiciones_de_pago: "",
                                medio_de_pago: "",
                                placa_vehiculo: "",
                                orden_compra_servicio: "",
                                tabla_personalizada_codigo: "",
                                formato_de_pdf: "TICKET",
                                items: items
                            };

                            console.log("array 1: " + arr);

                            formData.append('nro_boleta', idBoleta);

                            formData.append('accion', 10);

                            var confirmador =  ClienteBoleta.trim();

                            console.log("confirmador: ",confirmador);

                            console.log(factura);

                            numero_encontrado = false;

                             // Adjust the delay as needed

                            $.ajax({
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 63,
                                    'nro_boleta': idBoleta
                                },
                                dataType: 'json',
                                success: function(respuesta) {
                                    console.log(respuesta)
                                }

                            });

                            $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 11,
                                        'nro_boleta': idBoleta
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        console.log("respuesta añadida: ", respuesta);
                                        tabla21.ajax.reload();
                                        tabla31.ajax.reload();
                                        ////

                                        $.ajax({
                                            url: "ajax/ventas.ajax.php",
                                            method: "POST",
                                            data: {
                                                'accion': 12,
                                                'nro_boleta': idBoleta
                                            },
                                            dataType: 'json',
                                            success: function(respuesta) {

                                                console.log(respuesta);
                                                console.log(respuesta[0]);

                                                if (seleccion == 2){

                                                    numero_encontrado = false;

                                                    fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                                                        method: 'POST',
                                                        headers: {
                                                            'Content-Type': 'application/json'
                                                        },
                                                        body: JSON.stringify(factura)
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        console.log('Respuesta:', data);
                                                        if (data.success) {
                                                            // Redirigir o abrir el PDF en una nueva ventana
                                                            tabla22.clear().draw();

                                                            $.ajax({
                                                                url: "ajax/ventas.ajax.php",
                                                                method: "POST",
                                                                data: {
                                                                    'accion': 47,
                                                                    'nro_boleta': idBoleta
                                                                },
                                                                dataType: 'json',
                                                                success: function(respuesta) {
                                                                    console.log(respuesta)

                                                                }

                                                            });



                                                            console.log("arrIndicador", arrIndicador , "arrPrecios", arrPrecios);

                                                            // Asegurarse de acceder correctamente al enlace del PDF
                                                            const enlaceDelPdf = data.data && data.data.enlace_del_pdf;
                                                            if (enlaceDelPdf) {
                                                                console.log("Enlace de la factura en PDF:", enlaceDelPdf);
                                                                setTimeout(function() {
                                                                    window.open('http://192.168.1.41/market-pos/vistas/generar_factura_impresion.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) + '&linkQR=' + encodeURIComponent(enlaceDelPdf)+ '&factura=' + numero_factura);
                                                                    $("#mdlPantallaCarga").modal("hide");
                                                                    TipoFactura(idBoleta)

                                                                    $.ajax({
                                                                        url: "ajax/reporte.ajax.php",
                                                                        method: "POST",
                                                                        data: {
                                                                            'accion': 8,
                                                                            'nro_boleta': idBoleta,
                                                                            'numero_factura': numero_factura,
                                                                            'link': enlaceDelPdf
                                                                        },
                                                                        dataType: 'json',
                                                                        success: function(respuesta) {
                                                                            setTimeout(function() {
                                                                                buscarfactura = 0;
                                                                                idBoleta = 0;
                                                                                Identificacion = "SIN IDENTIFICAC";
                                                                                Direccion = "SIN DIRECCION";
                                                                                console.log("idBoleta se ha establecido a 0");
                                                                            }, 3000); // 3000 ms = 3 seconds
                                                                        }

                                                                        });
                                                                }, 3000); // 3000 ms = 3 seconds
                                                            } else {
                                                                console.error("No se encontró el enlace del PDF en la respuesta.");
                                                                $("#mdlPantallaCarga").modal("hide");
                                                            }

                                                        } else {
                                                            // Manejar el error
                                                            alert('Error al generar la factura: ' + data.error);
                                                            $("#mdlPantallaCarga").modal("hide");
                                                            ReiniciarVenta(idBoleta);
                                                        }
                                                    })
                                                    .catch((error) => {
                                                        console.error('Error:', error);
                                                        $("#mdlPantallaCarga").modal("hide");
                                                        ReiniciarVenta(idBoleta);
                                                    });
                                                }

                                            }
                                        });

                                    }
                            });

                        }

                    }else{
                        console.log("Numero no establecido intentelo mas tarde");
                    }



            }else if (seleccion_primor == 1){

                if(Identificacion === "SIN IDENTIFICAC"){
                    
                    LogoCarga();

                    var confirmador = await VerificarNumeroBoletaBoton();

                    if(confirmador === true){

                        console.log(idBoleta);

                        cliente_tipo_de_documento = "-";
                        if(idBoleta == 0){

                            Toast.fire({
                                icon: 'warning',
                                title: "Piorfavor elja una venta",
                                showConfirmButton: false,
                                timer: 1500
                            })
                            console.log("es cero");

                        } else{

                            numero_boleta = await DarNumeroFijoBoleta();

                            

                            ///DATA DE LA FACTURA GENERAL

                                if(parseFloat(suma_total) <= 700){
                                    var boleta = {
                                        operacion: "generar_comprobante",
                                        tipo_de_comprobante: "2",
                                        serie: "B001",
                                        numero: numero_boleta,
                                        sunat_transaction: "1",
                                        cliente_tipo_de_documento: cliente_tipo_de_documento,
                                        cliente_numero_de_documento: "-",
                                        cliente_denominacion: ClienteBoleta,
                                        cliente_direccion: "sin direccion",
                                        cliente_email: "",
                                        cliente_email_1: "",
                                        cliente_email_2: "",
                                        fecha_de_emision: new Date().toLocaleDateString('es-PE'),
                                        fecha_de_vencimiento: "",
                                        moneda: "1",
                                        tipo_de_cambio: "",
                                        porcentaje_de_igv: "18",
                                        descuento_global: "",
                                        total_descuento: "",
                                        total_anticipo: "",
                                        total_gravada: total_gravada,
                                        total_inafecta: "",
                                        total_exonerada: "",
                                        total_igv: total_igv,
                                        total_gratuita: "",
                                        total_otros_cargos: "",
                                        total: suma_total.toFixed(2),
                                        percepcion_tipo: "",
                                        percepcion_base_imponible: "",
                                        total_percepcion: "",
                                        total_incluido_percepcion: "",
                                        detraccion: "false",
                                        observaciones: "",
                                        documento_que_se_modifica_tipo: "",
                                        documento_que_se_modifica_serie: "",
                                        documento_que_se_modifica_numero: "",
                                        tipo_de_nota_de_credito: "",
                                        tipo_de_nota_de_debito: "",
                                        enviar_automaticamente_a_la_sunat: "true",
                                        enviar_automaticamente_al_cliente: "false",
                                        codigo_unico: "",
                                        condiciones_de_pago: "",
                                        medio_de_pago: "",
                                        placa_vehiculo: "",
                                        orden_compra_servicio: "",
                                        tabla_personalizada_codigo: "",
                                        formato_de_pdf: "TICKET",
                                        items: items
                                    };

                                    console.log("array 1: " + arr);

                                    formData.append('nro_boleta', idBoleta);

                                    formData.append('accion', 10);

                                    var confirmador =  ClienteBoleta.trim();

                                    console.log("confirmador: ",confirmador);

                                    console.log(boleta);

                                    numero_encontrado = false;

                                    // Adjust the delay as needed

                                    $.ajax({
                                            url: "ajax/ventas.ajax.php",
                                            method: "POST",
                                            data: {
                                                'accion': 11,
                                                'nro_boleta': idBoleta
                                            },
                                            dataType: 'json',
                                            success: function(respuesta) {

                                                console.log("respuesta añadida: ", respuesta);
                                                tabla21.ajax.reload();
                                                tabla31.ajax.reload();
                                                ////

                                                $.ajax({
                                                    url: "ajax/ventas.ajax.php",
                                                    method: "POST",
                                                    data: {
                                                        'accion': 12,
                                                        'nro_boleta': idBoleta
                                                    },
                                                    dataType: 'json',
                                                    success: function(respuesta) {

                                                        console.log(respuesta);
                                                        console.log(respuesta[0]);

                                                        if (seleccion == 1){

                                                            numero_encontrado = false;

                                                            fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'Content-Type': 'application/json'
                                                                },
                                                                body: JSON.stringify(boleta)
                                                            })
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                console.log('Respuesta:', data);
                                                                if (data.success) {
                                                                    // Redirigir o abrir el PDF en una nueva ventana
                                                                    tabla22.clear().draw();

                                                                    $.ajax({
                                                                        url: "ajax/ventas.ajax.php",
                                                                        method: "POST",
                                                                        data: {
                                                                            'accion': 47,
                                                                            'nro_boleta': idBoleta
                                                                        },
                                                                        dataType: 'json',
                                                                        success: function(respuesta) {
                                                                            console.log(respuesta)

                                                                        }

                                                                    });



                                                                    console.log("arrIndicador", arrIndicador , "arrPrecios", arrPrecios);

                                                                    // Asegurarse de acceder correctamente al enlace del PDF
                                                                    const enlaceDelPdf = data.data && data.data.enlace_del_pdf;
                                                                    if (enlaceDelPdf) {
                                                                        console.log("Enlace de la factura en PDF:", enlaceDelPdf);
                                                                        setTimeout(function() {
                                                                            window.open('http://192.168.1.41/market-pos/vistas/generar_boleta_impresion.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) + '&linkQR=' + encodeURIComponent(enlaceDelPdf)+ '&factura=' + numero_boleta);
                                                                            $("#mdlPantallaCarga").modal("hide");
                                                                            TipoBoleta(idBoleta)

                                                                            $.ajax({
                                                                                url: "ajax/reporte.ajax.php",
                                                                                method: "POST",
                                                                                data: {
                                                                                    'accion': 8,
                                                                                    'nro_boleta': idBoleta,
                                                                                    'numero_factura': numero_boleta,
                                                                                    'link': enlaceDelPdf
                                                                                },
                                                                                dataType: 'json',
                                                                                success: function(respuesta) {
                                                                                    setTimeout(function() {
                                                                                        idBoleta = 0;
                                                                                        Identificacion = "SIN IDENTIFICAC";
                                                                                        Direccion = "SIN DIRECCION";
                                                                                        console.log("idBoleta se ha establecido a 0");
                                                                                    }, 3000); // 3000 ms = 3 seconds
                                                                                }

                                                                                });
                                                                        }, 3000); // 3000 ms = 3 seconds
                                                                    } else {
                                                                        console.error("No se encontró el enlace del PDF en la respuesta.");
                                                                        $("#mdlPantallaCarga").modal("hide");
                                                                    }

                                                                } else {
                                                                    // Manejar el error
                                                                    alert('Error al generar la factura: ' + data.error);
                                                                    $("#mdlPantallaCarga").modal("hide");
                                                                    ReiniciarVenta(idBoleta)
                                                                }
                                                            })
                                                            .catch((error) => {
                                                                console.error('Error:', error);
                                                                $("#mdlPantallaCarga").modal("hide");
                                                                ReiniciarVenta(idBoleta)
                                                            });
                                                        }

                                                    }
                                                });

                                            }
                                    });
                                }else{
                                    $("#mdlPantallaCarga").modal("hide");
                                    Toast.fire({
                                        icon: 'warning',
                                        title: "La boleta supera los 700 soles (DNI O RUC REQUERIDO)",
                                        showConfirmButton: false,
                                        timer: 1500
                                    })

                                    setTimeout(function() {
                                        idBoleta = 0;
                                        Identificacion = "SIN IDENTIFICAC";
                                        Direccion = "SIN DIRECCION";
                                        console.log("idBoleta se ha establecido a 0");
                                    }, 3000); // 3000 ms = 3 seconds
                                }
                        }

                    }else{
                        console.log("Numero no establecido intentelo mas tarde");
                    }

                }else {

                    var verificar = false;

                    console.log("Identificacion : ", Identificacion)

                    if (Identificacion.length === 8) {
                        cliente_tipo_de_documento = 1;
                        verificar = await verificacionDniSunat(Identificacion);
                    } else if (Identificacion.length >= 10) {
                        Toast. fire({
                            icon: 'error',
                            title: "La Boleta Solo Acepta DNI",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        return 0;
                    }

                    if(verificar){

                        LogoCarga();

                        var confirmador = await VerificarNumeroBoletaBoton();

                        if(confirmador === true){

                            console.log(idBoleta);
                            if(idBoleta == 0){

                                Toast.fire({
                                    icon: 'warning',
                                    title: "Piorfavor elja una venta",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                console.log("es cero");

                            } else{

                                numero_boleta = await DarNumeroFijoBoleta();

                                var boleta = {
                                    operacion: "generar_comprobante",
                                    tipo_de_comprobante: "2",
                                    serie: "B001",
                                    numero: numero_boleta,
                                    sunat_transaction: "1",
                                    cliente_tipo_de_documento: cliente_tipo_de_documento,
                                    cliente_numero_de_documento: Identificacion,
                                    cliente_denominacion: ClienteBoleta,
                                    cliente_direccion: Direccion,
                                    cliente_email: "",
                                    cliente_email_1: "",
                                    cliente_email_2: "",
                                    fecha_de_emision: new Date().toLocaleDateString('es-PE'),
                                    fecha_de_vencimiento: "",
                                    moneda: "1",
                                    tipo_de_cambio: "",
                                    porcentaje_de_igv: "18",
                                    descuento_global: "",
                                    total_descuento: "",
                                    total_anticipo: "",
                                    total_gravada: total_gravada,
                                    total_inafecta: "",
                                    total_exonerada: "",
                                    total_igv: total_igv,
                                    total_gratuita: "",
                                    total_otros_cargos: "",
                                    total: suma_total.toFixed(2),
                                    percepcion_tipo: "",
                                    percepcion_base_imponible: "",
                                    total_percepcion: "",
                                    total_incluido_percepcion: "",
                                    detraccion: "false",
                                    observaciones: "",
                                    documento_que_se_modifica_tipo: "",
                                    documento_que_se_modifica_serie: "",
                                    documento_que_se_modifica_numero: "",
                                    tipo_de_nota_de_credito: "",
                                    tipo_de_nota_de_debito: "",
                                    enviar_automaticamente_a_la_sunat: "true",
                                    enviar_automaticamente_al_cliente: "false",
                                    codigo_unico: "",
                                    condiciones_de_pago: "",
                                    medio_de_pago: "",
                                    placa_vehiculo: "",
                                    orden_compra_servicio: "",
                                    tabla_personalizada_codigo: "",
                                    formato_de_pdf: "TICKET",
                                    items: items
                                };

                                console.log("array 1: " + arr);

                                formData.append('nro_boleta', idBoleta);

                                formData.append('accion', 10);

                                var confirmador =  ClienteBoleta.trim();

                                console.log("confirmador: ",confirmador);

                                console.log(boleta);

                                numero_encontrado = false;

                                 // Adjust the delay as needed

                                $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 63,
                                        'nro_boleta': idBoleta
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {
                                        console.log(respuesta)
                                    }

                                });


                                $.ajax({
                                        url: "ajax/ventas.ajax.php",
                                        method: "POST",
                                        data: {
                                            'accion': 11,
                                            'nro_boleta': idBoleta
                                        },
                                        dataType: 'json',
                                        success: function(respuesta) {

                                            console.log("respuesta añadida: ", respuesta);
                                            tabla21.ajax.reload();
                                            tabla31.ajax.reload();
                                            ////

                                            $.ajax({
                                                url: "ajax/ventas.ajax.php",
                                                method: "POST",
                                                data: {
                                                    'accion': 12,
                                                    'nro_boleta': idBoleta
                                                },
                                                dataType: 'json',
                                                success: function(respuesta) {

                                                    console.log(respuesta);
                                                    console.log(respuesta[0]);

                                                    if (seleccion == 1){

                                                        numero_encontrado = false;

                                                        fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json'
                                                            },
                                                            body: JSON.stringify(boleta)
                                                        })
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            console.log('Respuesta:', data);
                                                            if (data.success) {
                                                                // Redirigir o abrir el PDF en una nueva ventana
                                                                tabla22.clear().draw();

                                                                $.ajax({
                                                                    url: "ajax/ventas.ajax.php",
                                                                    method: "POST",
                                                                    data: {
                                                                        'accion': 47,
                                                                        'nro_boleta': idBoleta
                                                                    },
                                                                    dataType: 'json',
                                                                    success: function(respuesta) {
                                                                        console.log(respuesta)

                                                                    }

                                                                });



                                                                console.log("arrIndicador", arrIndicador , "arrPrecios", arrPrecios);

                                                                // Asegurarse de acceder correctamente al enlace del PDF
                                                                const enlaceDelPdf = data.data && data.data.enlace_del_pdf;
                                                                if (enlaceDelPdf) {
                                                                    console.log("Enlace de la factura en PDF:", enlaceDelPdf);
                                                                    setTimeout(function() {
                                                                        window.open('http://192.168.1.41/market-pos/vistas/generar_boleta_impresion.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) + '&linkQR=' + encodeURIComponent(enlaceDelPdf)+ '&factura=' + numero_boleta);
                                                                        $("#mdlPantallaCarga").modal("hide");
                                                                        TipoBoleta(idBoleta)

                                                                        $.ajax({
                                                                            url: "ajax/reporte.ajax.php",
                                                                            method: "POST",
                                                                            data: {
                                                                                'accion': 8,
                                                                                'nro_boleta': idBoleta,
                                                                                'numero_factura': numero_boleta,
                                                                                'link': enlaceDelPdf
                                                                            },
                                                                            dataType: 'json',
                                                                            success: function(respuesta) {
                                                                                setTimeout(function() {
                                                                                    buscarfactura = 0;
                                                                                    idBoleta = 0;
                                                                                    Identificacion = "SIN IDENTIFICAC";
                                                                                    Direccion = "SIN DIRECCION";
                                                                                    console.log("idBoleta se ha establecido a 0");
                                                                                }, 1000); // 3000 ms = 3 seconds
                                                                            }

                                                                            });
                                                                    }, 3000); // 3000 ms = 3 seconds
                                                                } else {
                                                                    console.error("No se encontró el enlace del PDF en la respuesta.");
                                                                    $("#mdlPantallaCarga").modal("hide");
                                                                }

                                                            } else {
                                                                // Manejar el error
                                                                alert('Error al generar la factura: ' + data.error);
                                                                $("#mdlPantallaCarga").modal("hide");
                                                                ReiniciarVenta(idBoleta);
                                                            }
                                                        })
                                                        .catch((error) => {
                                                            console.error('Error:', error);
                                                            $("#mdlPantallaCarga").modal("hide");
                                                            ReiniciarVenta(idBoleta);
                                                        });
                                                    }

                                                }
                                            });

                                        }
                                });

                            }

                        }else{
                            console.log("Numero no establecido intentelo mas tarde");
                        }

                    }

                }

            }else if (seleccion_primor == 5){
            
                console.log(idBoleta);
                if(idBoleta == 0){
                    Toast.fire({
                        icon: 'warning',
                        title: "Porfavor elija una venta",
                        showConfirmButton: false,
                        timer: 1500
                    })
                    console.log("es cero");
                } else{


                    console.log("array 1: " + arr);

                    formData.append('nro_boleta', idBoleta);

                    formData.append('accion', 10);

                    var confirmador =  ClienteBoleta.trim();

                    console.log("confirmador: ",confirmador);

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    setTimeout(function () {

                    }, 1000); // Adjust the delay as needed


                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 12,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: ", respuesta[0]);

                            if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]));}

                                tabla22.clear().draw();

                            setTimeout(function() {
                                idBoleta = 0;
                                console.log("idBoleta se ha establecido a 0");
                            }, 3000); // 3000 ms = 3 seconds

                        }
                    });

                         
                }
                
            }else{

                console.log(idBoleta);
                if(idBoleta == 0){
                    Toast.fire({
                        icon: 'warning',
                        title: "Porfavor elija una venta",
                        showConfirmButton: false,
                        timer: 1500
                    })
                    console.log("es cero");
                } else{

                    console.log("array 1: " + arr);

                    formData.append('nro_boleta', idBoleta);

                    formData.append('accion', 10);

                    var confirmador =  ClienteBoleta.trim();

                    console.log("confirmador: ",confirmador);

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    setTimeout(function () {

                    }, 1000); // Adjust the delay as needed

                    $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 11,
                                'nro_boleta': idBoleta
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                console.log("respuesta añadida: ", respuesta);
                                tabla21.ajax.reload();
                                tabla31.ajax.reload();
                                ////

                                $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 12,
                                        'nro_boleta': idBoleta
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        console.log("respuesta: ", respuesta[0]);

                                        if (seleccion ==3){
                                            var url = 'http://192.168.1.41/market-pos/ajax/ventaRapida.ajax.php?nro_boleta=' + idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrCliente=' + encodeURIComponent(respuesta[0][0]);

                                            // Abrir la nueva ventana
                                            var nuevaVentana = window.open(url, '_blank');

                                            setTimeout(function () {
                                                TipoTicket(idBoleta)
                                            }, 1000); // Adjust the delay as needed
                                        }else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) );

                                            setTimeout(function () {
                                                TipoNotaVenta(idBoleta);
                                            }, 1000); // Adjust the delay as needed
                                        }
                                        setTimeout(function() {
                                            idBoleta = 0;
                                            console.log("idBoleta se ha establecido a 0");
                                        }, 3000); // 3000 ms = 3 seconds

                                    }
                                });

                            }
                    });
                }

            }
            tabla22.clear().draw();
        });

        $("#btnSacarCotizacion2").on("click", async function(){

            var seleccion_primor = 5

            if (seleccion_primor == 5){
            
                console.log(idBoleta);
                if(idBoleta == 0){
                    Toast.fire({
                        icon: 'warning',
                        title: "Porfavor elija una venta",
                        showConfirmButton: false,
                        timer: 1500
                    })
                    console.log("es cero");
                } else{

                    var formData = new FormData();
                    var arr = [];
                    var arrIndicador  = [];
                    var arrPrecios  = [];

                    suma_total = 0;
                    var total_igv = 0;
                    var total_gravada = 0;

                        tabla22.rows().eq(0).each(function(index) {

                            var row = tabla22.row(index);

                            var data = row.data();

                            var total  = data[7].replace("S./ ", "");
                            var tot = parseFloat(total);

                            var precio  = tot/parseFloat(data[5]);
                            var prec = parseFloat(precio);

                            var palabras = data[5].match(/[a-zA-Z()]+/g);
                            var numero = parseFloat(data[5]);

                            suma_total = suma_total + tot;

                            console.log(data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                            arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                            arrIndicador[index] = data[5];

                            arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                            formData.append('arr[]', arr[index]);

                            var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
                            var valor_unitario = (precio_unitario * 100)/(118);
                            var total = parseFloat(data[7].replace("S./ ", ""));
                            var subtotal = (total * 100)/(118);
                            var igv = (total * 18)/(118);
                            var codigo = data[1];
                            var descripcion = data[4];

                        });

                    total_igv = suma_total * 18/118;
                    total_gravada = suma_total * 100/118;

                    console.log("array 1: " + arr);

                    formData.append('nro_boleta', idBoleta);

                    formData.append('accion', 10);

                    var confirmador =  ClienteBoleta.trim();

                    console.log("confirmador: ",confirmador);

                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 47,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    });

                    setTimeout(function () {

                    }, 1000); // Adjust the delay as needed


                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 12,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta: ", respuesta[0]);

                            if (seleccion_primor == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]));}

                                tabla22.clear().draw();

                            setTimeout(function() {
                                idBoleta = 0;
                                console.log("idBoleta se ha establecido a 0");
                            }, 3000); // 3000 ms = 3 seconds

                        }
                    });

                         
                }
                
            }

        });

        $("#btnSacarCotizacion3").on("click", async function(){
            var seleccion = 5;
            if(idBoleta2 == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var arrIndicador  = [];
                var arrPrecios  = [];


                var formDataItems = new FormData();
                var formDataFactura = new FormData();
                suma_total = 0;
                var total_igv = 0;
                var total_gravada = 0;

                    tabla32.rows().eq(0).each(function(index) {

                        var formDataProducto = new FormData();

                        var row = tabla32.row(index);

                        var data = row.data();

                        var total  = data[7].replace("S./ ", "");
                        var tot = parseFloat(total);
                        suma_total = suma_total + tot;

                        var precio  = tot/parseFloat(data[5]);
                        var prec = parseFloat(precio);

                        var palabras = data[5].match(/[a-zA-Z()]+/g);
                        var numero = parseFloat(data[5]);

                        console.log(data[1] + " , " + data[5] +" , " + numero +  " , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                        arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                        arrIndicador[index] = data[5];
                        arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                        var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
                        var valor_unitario = (precio_unitario * 100)/(118);
                        var total = parseFloat(data[7].replace("S./ ", ""));
                        var subtotal = (total * 100)/(118);
                        var igv = (total * 18)/(118);
                        var codigo = data[1];
                        var descripcion = data[4];

                        formData.append('arr[]', arr[index]);


                    });

                total_igv = suma_total * 18/118;
                total_gravada = suma_total * 100/118;


                idBoleta2 = idBoleta2.replace(/^\s+|\s+$/g, '');
                console.log("array 1: " + arr);

                formData.append('nro_boleta', idBoleta2);

                formData.append('accion', 10);

                var confirmador =  $("#iptNombreCliente").text();

                console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta2+"'");

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                });

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta cliente: ", respuesta[0]["cliente"]);
                        if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/generar_comision.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}


                    }
                });
            }
        });

        $("#btnHacerPedido2").on("click",async function(){

            console.log(idBoleta);
            if(idBoleta == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var arrIndicador  = [];
                var arrPrecios  = [];
                var seleccion = $("#selDocumentoVenta2").val();

                    tabla22.rows().eq(0).each(function(index) {

                        var row = tabla22.row(index);

                        var data = row.data();

                        var total  = data[7].replace("S./ ", "");
                        var tot = parseFloat(total);

                        var precio  = tot/parseFloat(data[5]);
                        var prec = parseFloat(precio);

                        var palabras = data[5].match(/[a-zA-Z()]+/g);

                        console.log(data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", "")));

                        arr[index] = data[1] + " , " + parseFloat(data[5]) +" , " + palabras[0]+ " , " + parseFloat(data[7].replace("S./ ", ""));
                        arrIndicador[index] = data[5];
                        arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);



                        formData.append('arr[]', arr[index]);

                    });

                console.log("array 1: " + arr);

                formData.append('nro_boleta', idBoleta);

                formData.append('accion', 10);

                var confirmador =  ClienteBoleta.trim();

                console.log("confirmador hacer pedido: ",confirmador);

                $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 23,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)
                        }

                    })
                    Actualizar_fecha_venta(idBoleta)
                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 47,
                        'nro_boleta': idBoleta
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                    }

                })

                setTimeout(function () {
                    TipoNotaVenta(idBoleta);
                }, 1000); // Adjust the delay as needed

                $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 11,
                            'nro_boleta': idBoleta
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log("respuesta añadida: ", respuesta);
                            tabla21.ajax.reload();
                            tabla31.ajax.reload();
                            ////

                            $.ajax({
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 12,
                                    'nro_boleta': idBoleta
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    window.open('http://192.168.1.41/market-pos/vistas/generar_nota.php?nro_boleta='+idBoleta + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0][0]) );
                                    tabla22.clear().draw();
                                }
                            });

                        }
                });
            }
        });

        $("#btnAgregarPorductoxCliente").on("click",function() {
            $("#iptNombreProducto").focus()
            colIndex2 = 5;
            rowIndex2 = 0;
            // Itera sobre las filas de la tabla
            var table = $('#lstProductosCatalogoxCliente').DataTable();

            // Iteramos sobre todas las filas del DataTable
            table.rows().every(function() {
                // Obtenemos los datos de la fila actual
                var data = this.data();

                console.log(data)

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
            $("#content-registrar-tab").click();
            Deslizar()
            $("#iptCodigoVenta").focus();
        });

        $("#btnAgregarPorducto").on("click",function() {

            mostrarCambios();
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

        $('#lstRegistrosProductos tbody').on('click', '.btnEliminarproducto', function() {

            var data = tabla22.row($(this).parents('tr')).data();


            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[4] + ' " del registro actual? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){
                    var cod_producto = data[1];
                    tabla22.row($(this).parents('tr')).remove().draw();
                    EliminarProductoVenta(idBoleta,cod_producto);
                    recalcularTotales2();
                }
            })
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
                    tabla32.row($(this).parents('tr')).remove().draw();
                    EliminarProductoVenta(idBoleta2,cod_producto);
                    recalcularTotales3();
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

        $("#btnConfirmar").on("click",function() {

            console.log(idBoleta_registro);


            $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 22,
                    'nro_boleta': idBoleta_registro,
                    'Dinero_Dado':Dinero_Dado
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta)
                    if(Dinero_Dado == 1){
                        Dinero_Dado = 0;
                        $("#btnConfirmar").removeClass("btn-danger").addClass("btn-success").text("Confirmar Regreso de vuelto");
                    }else if(Dinero_Dado == 0){
                        Dinero_Dado = 1;
                        $("#btnConfirmar").removeClass("btn-success").addClass("btn-danger").text("Cancelar Regreso de Vuelto");
                    }
                    ////
                }

            })

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

        $("#lstProductosCatalogoxCliente").on('click', '.btnEliminarHistorial', function() {

            var data = tabla02.row($(this).parents('tr')).data();

            var cliente = document.getElementById("iptNombreCliente_0");
            var textoCliente = cliente.textContent;

            console.log("eliminado : ",textoCliente.trim() ,"-eliminado : ", data[1], " - ", data[3] )
            isSwalOpen = true;
            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar?',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                console.log(result);

                if(result.isConfirmed){

                    var codigo = parseInt(data[1]);
                    var medida = data[3];
                    var texto = textoCliente.trim()

                    console.log("esta confirmado");

                    $.ajax({
                        async: false,
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 17,
                            'codigo': codigo,
                            'medida': medida,
                            'cliente': texto,
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            if(respuesta === "ok"){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Eliminado correctamente',
                                    confirmButtonText: 'Aceptar',
                                }).then((result) => {
                                    if(result.isConfirmed){
                                        isSwalOpen = false;
                                        tabla02.ajax.reload();
                                    }
                                })

                                $("#iptNombreProducto").focus();
                            }

                        }
                    });


                }


            })
        });

        $("#btnGuardarComentario").on("click",function(){


            var Comentario = $("#iptComentario").val();

            $.ajax({
                    url: "ajax/clientes.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 8,
                        'idBoleta': idBoleta,
                        'Comentario':Comentario,
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta);
                        if(respuesta === "ok"){

                            Swal.fire({
                                icon: 'success',
                                title: ' Se elimino correctamente ',
                            })
                            tabla21.ajax.reload();
                            tabla31.ajax.reload();
                        }else{

                            Swal.fire({
                                icon: 'warning',
                                title: respuesta ,
                            })

                        }

                    }
            })
        })

        document.getElementById('btnFotoSiguiente').addEventListener('click', () => {
            indiceActual_cliente += 1; // Actualizar el índice según la dirección (1 para siguiente, -1 para anterior)

            // Verificar límites del índice
            if (indiceActual_cliente < 0) {
                indiceActual_cliente = imagenes_cliente.length - 1; // Volver al último elemento si se llega al principio
            } else if (indiceActual_cliente >= imagenes_cliente.length) {
                indiceActual_cliente = 0; // Volver al primer elemento si se llega al final
            }

            // Obtener la imagen correspondiente al índice actual
            var imagenActual = imagenes_cliente[indiceActual_cliente];

            // Actualizar la imagen en el elemento <img>
            var previewImg = document.getElementById('previewImg_cliente');
            previewImg.src = 'vistas\\assets\\imagenes\\info\\ventas-cliente\\' + imagenActual;
        });

        document.getElementById('btnFotoAnterior').addEventListener('click', () => {
            indiceActual_cliente += -1; // Actualizar el índice según la dirección (1 para siguiente, -1 para anterior)

            // Verificar límites del índice
            if (indiceActual_cliente < 0) {
                indiceActual_cliente = imagenes_cliente.length - 1; // Volver al último elemento si se llega al principio
            } else if (indiceActual_cliente >= imagenes_cliente.length) {
                indiceActual_cliente = 0; // Volver al primer elemento si se llega al final
            }

            // Obtener la imagen correspondiente al índice actual
            var imagenActual = imagenes_cliente[indiceActual_cliente];

            // Actualizar la imagen en el elemento <img>
            var previewImg = document.getElementById('previewImg_cliente');
            previewImg.src = 'vistas\\assets\\imagenes\\info\\ventas-cliente\\' + imagenActual;
        });

        $("#btnRegistroCotizacion").on("click", function(){
            

            var count = 0;
            var cancelacion = 0;

            tabla11.rows().eq(0).each(function(index) {
                count = count + 1;

                var rowData = tabla11.row(index).data(); // Obtenemos los datos de la fila

                // console.log(parseFloat(rowData[5]) +  " " +  parseFloat(rowData[6].replace("S./ ", '')));

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

                        HacerVentaCotizacion(count,nro_boleta);

                    }
                });

            }else{
                HacerVentaCotizacion(count,nro_boleta);
            }





        });

        $("#btnCambiarCliente2").on("click", function(){

            var filaSeleccionada = $("#lstRegistros").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                // Muestra el modal si hay una fila seleccionada
                $("#mdlEditarCliente").modal("show");
            }

        });

        $("#btnCambiarCliente3").on("click", function(){

            var filaSeleccionada = $("#lstRegistrosImprimir").find('tr.selected').length; // Verifica si hay filas seleccionadas

            if (filaSeleccionada === 0) {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                // Muestra el modal si hay una fila seleccionada
                $("#mdlEditarCliente").modal("show");
            }

        });

        $('#lstClientesEdicion tbody').on('click', '.btnSeleccionarClienteNuevo', function(){

            var data = tabla52.row($(this).parents('tr')).data();

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                nombre_nuevo_cliente = "VACIO";

                $('#lstClientesEdicion i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

            }else{

                $('#lstClientesEdicion i.fas.fa-circle').removeClass('fas fa-circle').addClass('far fa-circle');

                tabla52.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                // $("#mdlRegistrarTiempo").modal("show");

                $(this).find('i').removeClass('far fa-circle').addClass('fas fa-circle');

                console.log(data);

                nombre_nuevo_cliente = data["id"];

            }

        });

        $("#btnCancelarEdicion").on("click", function(){

            $("#mdlEditarCliente").modal("hide");

            nombre_nuevo_cliente = "VACIO";

        });

        $("#btnAceptarCambio").on("click", function(){

            console.log("nro_boleta_cliente : ",nro_boleta_cliente,"nombre : "+ nombre_nuevo_cliente)

            if (nombre_nuevo_cliente === "VACIO") {
                // Muestra el toast si no hay ninguna fila seleccionada
                Toast.fire({
                    icon: 'warning',
                    title: "No hay fila seleccionada",
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                // Muestra el modal si hay una fila seleccionada
                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 49,
                        'id_cliente': nombre_nuevo_cliente,
                        'nro_boleta': nro_boleta_cliente,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "OK"){

                            Toast.fire({
                                icon: 'success',
                                title: "Cambiado Exitosa mente",
                                showConfirmButton: false,
                                timer: 1500
                            });

                            tabla21.ajax.reload();
                            tabla31.ajax.reload();

                            $("#mdlEditarCliente").modal("hide");

                            nombre_nuevo_cliente = "VACIO";

                        }else{

                            Toast.fire({
                                icon: 'error',
                                title: "Error: 425 (no se guardo los cambios)",
                                showConfirmButton: false,
                                timer: 1500
                            });

                        }

                    }
                })
            }

        });

        $("#btnRegistrarPrecios").on("click", function(){

            $("#mdlGestionarProducto").modal("hide")

            $("#mdlGestionarPrecios").modal("show")

        });

        $("#btnRegresarPrecios").on('click', function() {

            $("#mdlGestionarProducto").modal("show")

            $("#mdlGestionarPrecios").modal("hide")

        })

        $("#btnCambiarNumeroNubefact").on('click', function() {

            var numero = $("#iptNumevoNumero").val()

            if(numero === ""){

                Toast.fire({
                    icon: 'error',
                    title: " Porfavor Ingrese un numero",
                    showConfirmButton: false,
                    timer: 1500
                });

            }else{

                CambiarNumeroDeFacturaModal(numero)
                buscarfactura = 0;
                $("#mdlEditarNumeroNubefact").modal("hide");

            }

        })

        $("#btnCancelarNumeroNubefact").on('click', function() {

            $("#mdlEditarNumeroNubefact").modal("hide");

        })

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////

    async function ContinuarRegistroBoleta(isActionInProgress2,Continuar,suma_total,Identificacion){

        if (!isActionInProgress2 && Continuar) {
            var count = 0;
            var totalVenta = $("#totalVenta").html();
            var nro_boleta = $("#iptNroVenta").val();
            var cliente = $("#iptNombreCliente").text();
            var palabra = cliente;
            var cancelacion = 0;
            suma_total = 0;
            var total_igv = 0;
            var total_gravada = 0;

            var cliente_tipo_de_documento = "-";

            ////esto verifica lo de los precios y si son validos
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

            if(cancelacion == 1){

                Swal.fire({
                    icon: 'warning',
                    title: 'Almenos Un producto tiene Precio o cantidad menor o igual a 0',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6', // Color azul para el botón de confirmar
                    cancelButtonColor: '#d33', // Color gris para el botón de cancelar
                    confirmButtonText: "Eliminarlos y continuar",
                    cancelButtonText: "Dejame revisar Primero",
                }).then(async (result) => {

                    if (result.isConfirmed){

                        $("#iptCodigoVenta").focus();

                        ContinuarRegistroBoleta2(Identificacion,count,palabra,nro_boleta)

                    }else{
                        setTimeout(function () {
                            isActionInProgress2 = false;
                        }, 1000); // Adjust the delay as needed
                    }

                });
            }else{
                console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

                $("#iptCodigoVenta").focus();

                console.log("IDENTIFICACION - IMPORTANTE:  ," + Identificacion+",");

                ContinuarRegistroBoleta2(Identificacion,count,palabra,nro_boleta,totalVenta)

            }


        }

        setTimeout(function () {
            if(Continuar){
                TipoBoleta(nro_boleta);
                tipo_venta_para_impresion = "VACIO";
            }
        }, 1000); // Adjust the delay as needed

    }

    async function ContinuarRegistroBoleta2(Identificacion,count,palabra,nro_boleta,totalVenta){

        var formData = new FormData();
        var arr = [];
        var arr2 = [];
        var arrIndicador  = [];
        var arrPrecios  = [];
        var seleccion = 11;

        tabla11.rows().eq(0).each(function(index) {
            var row = tabla11.row(index);
            var data = row.data();
            var total  = data[7].replace("S./ ", "");
            var tot = parseFloat(total);
            var precio  = tot / parseFloat(data[5]);
            var prec = parseFloat(precio);
            var palabras = data[5].match(/[a-zA-Z()]+/g);
            var numero = parseFloat(data[5]);

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

            var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
            var valor_unitario = (precio_unitario * 100)/(118);
            var subtotal = (tot * 100)/(118);
            var igv = (tot * 18)/(118);
            var codigo = data[1];
            var descripcion = data[4];
            var unidad_de_medida = "NIU";

            suma_total = suma_total + tot;

            if(palabras[0] === "Unidades"){

                unidad_de_medida = "NIU"

            }else if(palabras[0] === "Paquetitos"){

                unidad_de_medida = "PK"

            }else if(palabras[0] === "Cientos"){

                unidad_de_medida = "CEN"

            }else if(palabras[0] === "Millares"){

                unidad_de_medida = "MIL"

            }else if(palabras[0] === "Cajas"){

                unidad_de_medida = "CJ"

            }else if(palabras[0] === "Fardos"){

                unidad_de_medida = "FAR"

            }else if(palabras[0] === "Planchas"){

                unidad_de_medida = "PL"

            }else if(palabras[0] === "Docenas"){

                unidad_de_medida = "DC"

            }

            var item = {
                unidad_de_medida: unidad_de_medida,
                codigo: data[1],
                descripcion: data[4],
                cantidad: numero,
                valor_unitario: valor_unitario.toFixed(2),
                precio_unitario: precio_unitario.toFixed(2),
                descuento: "",
                subtotal: subtotal,
                tipo_de_igv: "1",
                igv: igv,
                total: tot,
                anticipo_regularizacion: "false",
                anticipo_documento_serie: "",
                anticipo_documento_numero: ""
            };

            items.push(item);

        });

        total_igv = suma_total * 18/118;
        total_gravada = suma_total * 100/118;

        if(Identificacion === "SIN IDENTIFICAC"){

            cliente_tipo_de_documento = "-";

            LogoCarga();

            var confirmador = await VerificarNumeroBoletaBoton();

            numero_boleta = await DarNumeroFijoBoleta();

            if (count > 0){
                    ///DATA DE LA FACTURA GENERAL
                    if(parseFloat(suma_total) <= 700){

                        var boleta = {
                            operacion: "generar_comprobante",
                            tipo_de_comprobante: "2",
                            serie: "B001",
                            numero: numero_boleta,
                            sunat_transaction: "1",
                            cliente_tipo_de_documento: cliente_tipo_de_documento,
                            cliente_numero_de_documento: "-",
                            cliente_denominacion: ClienteBoleta,
                            cliente_direccion: "sin direccion",
                            cliente_email: "",
                            cliente_email_1: "",
                            cliente_email_2: "",
                            fecha_de_emision: new Date().toLocaleDateString('es-PE'),
                            fecha_de_vencimiento: "",
                            moneda: "1",
                            tipo_de_cambio: "",
                            porcentaje_de_igv: "18",
                            descuento_global: "",
                            total_descuento: "",
                            total_anticipo: "",
                            total_gravada: total_gravada,
                            total_inafecta: "",
                            total_exonerada: "",
                            total_igv: total_igv,
                            total_gratuita: "",
                            total_otros_cargos: "",
                            total: suma_total.toFixed(2),
                            percepcion_tipo: "",
                            percepcion_base_imponible: "",
                            total_percepcion: "",
                            total_incluido_percepcion: "",
                            detraccion: "false",
                            observaciones: "",
                            documento_que_se_modifica_tipo: "",
                            documento_que_se_modifica_serie: "",
                            documento_que_se_modifica_numero: "",
                            tipo_de_nota_de_credito: "",
                            tipo_de_nota_de_debito: "",
                            enviar_automaticamente_a_la_sunat: "true",
                            enviar_automaticamente_al_cliente: "false",
                            codigo_unico: "",
                            condiciones_de_pago: "",
                            medio_de_pago: "",
                            placa_vehiculo: "",
                            orden_compra_servicio: "",
                            tabla_personalizada_codigo: "",
                            formato_de_pdf: "TICKET",
                            items: items
                        };

                        var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

                        formData.append('nro_boleta', nro_boleta);
                        formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                        formData.append('total_venta', parseFloat(totalVenta));
                        formData.append('seleccion', parseFloat(seleccion));
                        formData.append('deuda', parseFloat(deuda));
                        formData.append('Cliente', palabra);
                        formData.append('Estado', 1);

                        var confirmador =  $("#iptNombreCliente").text();
                        console.log("confirmador 12131232: ",confirmador.trim());

                        if(confirmador.trim() === "VARIOS"){

                        }
                        else{
                            AgregarCambiosHistorial(arr2);
                        }

                        ejecutarBoletaESP(formData,nro_boleta,arrIndicador,arrPrecios,boleta,numero_boleta);

                    }else{
                        $("#mdlPantallaCarga").modal("hide");
                        Toast.fire({
                            icon: 'warning',
                            title: "La boleta supera los 700 soles (DNI O RUC REQUERIDO)",
                            showConfirmButton: false,
                            timer: 1500
                        })

                        setTimeout(function() {
                            idBoleta = 0;
                            Identificacion = "SIN IDENTIFICAC";
                            Direccion = "SIN DIRECCION";
                            console.log("idBoleta se ha establecido a 0");
                        }, 3000); // 3000 ms = 3 seconds
                    }

            }else {

                Swal.fire({
                    icon: 'warning',
                    title: 'No hay productos en el listado.'
                });

            }

            setTimeout(function () {
                isActionInProgress2 = false;
            }, 1000); // Adjust the delay as needed

        }else {

            if (Identificacion.length === 8) {
                cliente_tipo_de_documento = 1;
            } else if (Identificacion.length >= 10) {
                Toast. fire({
                    icon: 'error',
                    title: "La Boleta Solo Acepta DNI",
                    showConfirmButton: false,
                    timer: 1500
                });
                return 0;
                
            }

            LogoCarga();

            var confirmador = await VerificarNumeroBoletaBoton();

            numero_boleta = await DarNumeroFijoBoleta();

            if (count > 0) {

                var boleta = {
                    operacion: "generar_comprobante",
                    tipo_de_comprobante: "2",
                    serie: "B001",
                    numero: numero_boleta,
                    sunat_transaction: "1",
                    cliente_tipo_de_documento: cliente_tipo_de_documento,
                    cliente_numero_de_documento: Identificacion,
                    cliente_denominacion: ClienteBoleta,
                    cliente_direccion: "sin direccion",
                    cliente_email: "",
                    cliente_email_1: "",
                    cliente_email_2: "",
                    fecha_de_emision: new Date().toLocaleDateString('es-PE'),
                    fecha_de_vencimiento: "",
                    moneda: "1",
                    tipo_de_cambio: "",
                    porcentaje_de_igv: "18",
                    descuento_global: "",
                    total_descuento: "",
                    total_anticipo: "",
                    total_gravada: total_gravada,
                    total_inafecta: "",
                    total_exonerada: "",
                    total_igv: total_igv,
                    total_gratuita: "",
                    total_otros_cargos: "",
                    total: suma_total.toFixed(2),
                    percepcion_tipo: "",
                    percepcion_base_imponible: "",
                    total_percepcion: "",
                    total_incluido_percepcion: "",
                    detraccion: "false",
                    observaciones: "",
                    documento_que_se_modifica_tipo: "",
                    documento_que_se_modifica_serie: "",
                    documento_que_se_modifica_numero: "",
                    tipo_de_nota_de_credito: "",
                    tipo_de_nota_de_debito: "",
                    enviar_automaticamente_a_la_sunat: "true",
                    enviar_automaticamente_al_cliente: "false",
                    codigo_unico: "",
                    condiciones_de_pago: "",
                    medio_de_pago: "",
                    placa_vehiculo: "",
                    orden_compra_servicio: "",
                    tabla_personalizada_codigo: "",
                    formato_de_pdf: "TICKET",
                    items: items
                };

                var deuda  = parseFloat(totalVenta) //esto para volver la deuda en un numero positivo
                
                formData.append('nro_boleta', nro_boleta);
                formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                formData.append('total_venta', parseFloat(totalVenta));
                formData.append('seleccion', parseFloat(seleccion));
                formData.append('deuda', parseFloat(deuda));
                formData.append('Cliente', palabra);
                formData.append('Estado', 1);

                var confirmador =  $("#iptNombreCliente").text();
                console.log("confirmador 12131232: ",confirmador.trim());

                if(confirmador.trim() === "VARIOS"){

                }
                else{
                    AgregarCambiosHistorial(arr2);
                }

                ejecutarBoletaESP(formData,nro_boleta,arrIndicador,arrPrecios,boleta,numero_boleta);

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

    async function ContinuarRegistroFactura(isActionInProgress2,Continuar,suma_total,Identificacion){

        if (!isActionInProgress2 && Continuar) {
            var count = 0;
            var totalVenta = $("#totalVenta").html();
            var nro_boleta = $("#iptNroVenta").val();
            var cliente = $("#iptNombreCliente").text();
            var palabra = cliente;
            var cancelacion = 0;

            var cliente_tipo_de_documento = "-";

            ////esto verifica lo de los precios y si son validos
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

            if(Identificacion === "SIN IDENTIFICAC"){

                Toast.fire({
                    icon: 'warning',
                    title: "El cliente no tiene ruc o Dni disponible",
                    showConfirmButton: false,
                    timer: 1500
                });

                return 0;

            }else {

                if (Identificacion.length === 8) {
                    Toast. fire({
                        icon: 'error',
                        title: "La Boleta Solo Acepta RUC",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    return 0;
                } else if (Identificacion.length >= 10) {
                    cliente_tipo_de_documento = 6;
                }

            }

            LogoCarga();
            var confirmador = await VerificarNumeroFacturaBoton();

            numero_factura = await DarNumeroFijo();

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

                        console.log("se preciono el btn registrar en factura ,",count, " , ", totalVenta, " , ", nro_boleta );

                        if (count > 0) {

                            ContinuarRegistroFactura2(numero_factura,suma_total,nro_boleta,palabra)

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

                    ContinuarRegistroFactura2(numero_factura,suma_total,nro_boleta,palabra)

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

        setTimeout(function () {
            if(Continuar){
                TipoFactura(nro_boleta);
                tipo_venta_para_impresion = "VACIO";
            }
        }, 1000); // Adjust the delay as needed   

    }

    async function ContinuarRegistroFactura2(numero_factura,suma_total,nro_boleta,palabra){
        var formData = new FormData();
        var arr = [];
        var arr2 = [];
        var arrIndicador  = [];
        var arrPrecios  = [];
        var seleccion = 11;

        suma_total = 0;
        var total_igv = 0;
        var total_gravada = 0;

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

            var precio_unitario = (parseFloat(data[7].replace("S./ ", "")))/numero;
            var valor_unitario = (precio_unitario * 100)/(118);
            var total = parseFloat(data[7].replace("S./ ", ""));
            var subtotal = (total * 100)/(118);
            var igv = (total * 18)/(118);
            var codigo = data[1];
            var descripcion = data[4];
            var unidad_de_medida = "NIU";

            suma_total = suma_total + tot;

            if(palabras[0] === "Unidades"){

                unidad_de_medida = "NIU"

            }else if(palabras[0] === "Paquetitos"){

                unidad_de_medida = "PK"

            }else if(palabras[0] === "Cientos"){

                unidad_de_medida = "CEN"

            }else if(palabras[0] === "Millares"){

                unidad_de_medida = "MIL"

            }else if(palabras[0] === "Cajas"){

                unidad_de_medida = "CJ"

            }else if(palabras[0] === "Fardos"){

                unidad_de_medida = "FAR"

            }else if(palabras[0] === "Planchas"){

                unidad_de_medida = "PL"

            }else if(palabras[0] === "Docenas"){

                unidad_de_medida = "DC"

            }

            var item = {
                unidad_de_medida: unidad_de_medida,
                codigo: data[1],
                descripcion: data[4],
                cantidad: numero,
                valor_unitario: valor_unitario.toFixed(2),
                precio_unitario: precio_unitario.toFixed(2),
                descuento: "",
                subtotal: subtotal,
                tipo_de_igv: "1",
                igv: igv,
                total: total,
                anticipo_regularizacion: "false",
                anticipo_documento_serie: "",
                anticipo_documento_numero: ""
            };

            items.push(item);

        });

        total_igv = suma_total * 18/118;
        total_gravada = suma_total * 100/118;

        ///DATA DE LA FACTURA GENERAL

        var factura = {
            operacion: "generar_comprobante",
            tipo_de_comprobante: "1",
            serie: "F001",
            numero: numero_factura,
            sunat_transaction: "1",
            cliente_tipo_de_documento: cliente_tipo_de_documento,
            cliente_numero_de_documento: Identificacion,
            cliente_denominacion: ClienteBoleta,
            cliente_direccion: Direccion,
            cliente_email: "",
            cliente_email_1: "",
            cliente_email_2: "",
            fecha_de_emision: new Date().toLocaleDateString('es-PE'),
            fecha_de_vencimiento: "",
            moneda: "1",
            tipo_de_cambio: "",
            porcentaje_de_igv: "18",
            descuento_global: "",
            total_descuento: "",
            total_anticipo: "",
            total_gravada: total_gravada,
            total_inafecta: "",
            total_exonerada: "",
            total_igv: total_igv,
            total_gratuita: "",
            total_otros_cargos: "",
            total: suma_total.toFixed(2),
            percepcion_tipo: "",
            percepcion_base_imponible: "",
            total_percepcion: "",
            total_incluido_percepcion: "",
            detraccion: "false",
            observaciones: "",
            documento_que_se_modifica_tipo: "",
            documento_que_se_modifica_serie: "",
            documento_que_se_modifica_numero: "",
            tipo_de_nota_de_credito: "",
            tipo_de_nota_de_debito: "",
            enviar_automaticamente_a_la_sunat: "true",
            enviar_automaticamente_al_cliente: "false",
            codigo_unico: "",
            condiciones_de_pago: "",
            medio_de_pago: "",
            placa_vehiculo: "",
            orden_compra_servicio: "",
            tabla_personalizada_codigo: "",
            formato_de_pdf: "TICKET",
            items: items
        };

        var deuda  = parseFloat(totalVenta)   //esto para volver la deuda en un numero positivo

        formData.append('nro_boleta', nro_boleta);
        formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
        formData.append('total_venta', parseFloat(totalVenta));
        formData.append('seleccion', seleccion);
        formData.append('deuda', parseFloat(deuda));
        formData.append('Cliente', palabra);
        formData.append('Estado', 1);

        var confirmador =  $("#iptNombreCliente").text();
        console.log("confirmador este ese: ",confirmador.trim());

        if(confirmador.trim() === "VARIOS"){

        }
        else{
            AgregarCambiosHistorial(arr2);
        }

        console.log('Valor de seleccion: ',seleccion )


        ejecutarFacturaESP(formData,nro_boleta,arrIndicador,arrPrecios,factura,numero_factura);
    }

    function LogoCarga(){
        $("#mdlPantallaCarga").modal("show");
        $("#img_carga").attr("style","display:on");
        $("#img_carga").attr("style","height:200px");
        $("#img_carga").attr("style","width:200px");
    }

    async function ConsultarPopular(ClienteBoleta) {
        try {
            let respuesta = await $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 53,
                    'nombre_cliente': ClienteBoleta
                },
                dataType: 'json'
            });

            if (!respuesta || respuesta.length === 0) {
                console.log("VACIO");
                return "VACIO";
            } else {
                console.log(respuesta);
                return respuesta[0]["tipo_venta"];
            }
        } catch (error) {
            console.error("Error en la consulta:", error);
            // Puedes manejar el error aquí
            throw error;
        }
    }

    function TipoNotaVenta(idBoleta){

        console.log("NOTA - idBoleta : ", idBoleta)

        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 38,
                    'nro_boleta': idBoleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                }
        })

    }

    function TipoTicket(idBoleta){

        console.log("TICKET - idBoleta : ", idBoleta)

        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 40,
                    'nro_boleta': idBoleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                }
        })

    }

    function ReiniciarVenta(idBoleta){

        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 51,
                'nro_boleta': idBoleta
            },
            dataType: 'json',
            success: function(respuesta) {

            }
        });

    }

    function TipoBoleta(idBoleta){

        console.log("BOLETA - idBoleta : ", idBoleta)

        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 39,
                    'nro_boleta': idBoleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                }
        })

    }

    function TipoFactura(idBoleta){

        console.log("NOTA - idBoleta : ", idBoleta)

        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 50,
                    'nro_boleta': idBoleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                }
        })

    }

    ////////////////////////////////////////////////////////////////////////////////////////////////

    function HacerVentaCotizacion(count,nro_boleta){
        CargarNroBoleta();
        var cliente = $("#iptNombreCliente").text();
        var totalVenta = $("#totalVenta").html();
        var palabra = cliente;
        if (count > 0) {

            var formData = new FormData();
            var arr = [];
            var arr2 = [];
            var arrIndicador  = [];
            var arrPrecios  = [];
            var seleccion = 5;

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
                formData.append('Cliente', palabra);

                formData.append('Estado', 1);


                var confirmador =  $("#iptNombreCliente").text();
                console.log("confirmador 12131232: ",confirmador.trim());

                if(confirmador.trim() === "VARIOS"){
                    console.log("formData : " , formData);
                    console.log(formData,nro_boleta,arrIndicador,arrPrecios);
                    ejecutarAjaxCotiza(formData,nro_boleta,arrIndicador,arrPrecios);
                }
                else{
                    AgregarCambiosHistorial(arr2);
                }
                
                
        }else {

            Swal.fire({
                icon: 'warning',
                title: 'No hay productos en el listado.'
            });

        }

        tabla31.ajax.reload();
        
        setTimeout(function () {
            isActionInProgress2 = false;
        }, 1000); // Adjust the delay as needed
    }

    function ejecutarAjaxCotiza(formData,idBoleta2,arrIndicador,arrPrecios) {

        for (const [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
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

                CargarNroBoleta();

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
                        console.log(idBoleta2);

                       var url = 'http://192.168.1.41/market-pos/ajax/ventas_comision.ajax.php?nro_boleta=' + idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios  + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]);

                        // Abrir la nueva ventana
                        var nuevaVentana = window.open(url, '_blank');

                    }
                });
            },

        });
    }

    function EliminarProductoVenta(idBoleta,cod_producto){

        console.log("EliminarProductoVenta("+idBoleta+","+cod_producto+ ")")

        $.ajax({
            async:false,
            url:"ajax/ventas.ajax.php",
            method: 'POST',
            data: {
                'accion': 31,
                'id_boleta': idBoleta,
                'cod_producto': cod_producto,
            },
            dataType: 'json',
            success: function (respuesta){

                console.log(respuesta);

                Toast.fire({
                    icon: 'success',
                    title: "Producto eliminado de la compra registrada",
                    showConfirmButton: false,
                    timer: 1500
                });

            }
        })

    }

    function Deslizar(){

            // Ajusta el scroll para ir hacia abajo
            // var documentHeight = $(document).height();
            // var windowHeight = $(window).height();
            // var scrollTo = documentHeight - windowHeight;

            var scrollTo = 10000;
            console.log("scrollTo  : ", scrollTo)

            $('html, body').animate({
                scrollTop: scrollTo
            }, 500); // Puedes ajustar la velocidad de animación según tus preferencias

    }

    function RellenarParaEditar(codigo){
        console.log("ccodigo  : " + codigo);

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

                $("#iptCodigoReg").val(respuesta[0]["codigo_producto"]);
                $("#iptDescripcionReg").val(respuesta[0]["descripcion_producto"]);
                $("#iptStockReg").val(respuesta[0]["stock_producto"]);
                $("#iptMinimoStockReg").val(respuesta[0]["minimo_stock_producto"]);
                $("#iptUbicacionReg").val(respuesta[0]["direccion"]);
                var escritura = respuesta[0]["id_categoria_producto"] + " - " + respuesta[0]["nombre_categoria"]
                $("#selCategoriaReg").val(escritura);

                var precios = [ respuesta[0]["precio_unidad"],
                                respuesta[0]["precio_paquetito"],
                                respuesta[0]["precio_docena"],
                                respuesta[0]["precio_ciento"],
                                respuesta[0]["precio_millar"],
                                respuesta[0]["precio_caja"],
                                respuesta[0]["precio_fardo"],
                                respuesta[0]["precio_plancha"],
                                respuesta[0]["precio_unidad_2"],
                                respuesta[0]["precio_paquetito_2"],
                                respuesta[0]["precio_docena_2"],
                                respuesta[0]["precio_ciento_2"],
                                respuesta[0]["precio_millar_2"],
                                respuesta[0]["precio_caja_2"],
                                respuesta[0]["precio_fardo_2"],
                                respuesta[0]["precio_plancha_2"],
                                respuesta[0]["cantidad_ciento"],
                                respuesta[0]["cantidad_millar"],
                                respuesta[0]["cantidad_caja"],
                                respuesta[0]["cantidad_fardo"],
                                respuesta[0]["cantidad_plancha"]]

                colocarDatosCeldasEspecificas(precios);

            }
        })
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
                        tabla21.ajax.reload();
                        tabla31.ajax.reload();
                        ////


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

                $("#modalComentarioEliminacion").modal("show");
                $("#iptComentario").focus();


                $.ajax({
                        url: "ajax/clientes.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 8,
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
                                tabla21.ajax.reload();
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

    function mostrarCambios(){

        // tabla11.clear().draw();
        console.log("se presiono el boton primero");

        var combinaciones = {};

        console.log(productos_por_agregar);

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
            }else{
                eliminar_dato_venta(codigo)
            }

        }
    }

    function eliminar_dato_venta(codigo){

        tabla11.rows().eq(0).each(function(index) {
            var row = tabla11.row(index);
            var data = row.data();

            if (parseInt(codigo) == data[1]) {

                // Eliminar la fila de la tabla
                tabla11.row(index).remove().draw();


            }
        });
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
                console.log("este es repetido")

                producto_repetido = 1;

                $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 8,
                        'codigo_producto': codigo,
                        'cantidad_a_comprar': cantidad,
                        'medida':medida,
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

                            var texto = "Paquetitos"

                            if(medida === "paquetito"){

                                texto = "Paquetitos"

                            }else if(medida === "fardo"){

                                texto = "Fardos"

                            }else if(medida === "ciento"){

                                texto = "Cientos"

                            }else if(medida === "docena"){

                                texto = "Docenas"

                            }else if(medida === "unidad"){

                                texto = "Unidades"

                            }else if(medida === "caja"){

                                texto = "Cajas"

                            }else if(medida === "millar"){

                                texto = "Millares"

                            }

                            console.log("este es repetido")

                            // AUMENTAR EN 1 EL VALOR DE LA CANTIDAD
                            tabla11.cell(index, 5).data(parseFloat(cantidad) +" "+texto).draw();

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

                        if (parseFloat(respuesta['precio_ciento']) > 0) {

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" cientos ) " +")</a></li>";
                            indicador = "Fardos";

                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" paquetitos ) " +")</a></li>";
                            indicador = "Fardos";


                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            indicador = "Fardos";
                        }

                    }

                    if (parseFloat(respuesta['precio_plancha']) > 0) {

                        if (parseFloat(respuesta['precio_ciento']) > 0) {

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" cientos ) " +")</a></li>";
                            indicador = "Planchas";

                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" paquetitos ) " +")</a></li>";
                            indicador = "Planchas";


                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" unidades ) " +")</a></li>";
                            indicador = "Planchas";
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

    function grabar_datos_venta2(medida,codigo,precio,cantidad){
        console.log (codigo,precio,cantidad,medida);
        var total = precio * parseFloat(cantidad);
        var producto_repetido = 0;


        tabla22.rows().eq(0).each(function(index) {

            var row = tabla22.row(index);
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
                            tabla22.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla22.cell(index, 7).data(NuevoPrecio).draw();

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

                        if (parseFloat(respuesta['precio_ciento']) > 0) {

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" cientos ) " +")</a></li>";
                            indicador = "Fardos";

                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" paquetitos ) " +")</a></li>";
                            indicador = "Fardos";


                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_fardo'] + "' medida = ' " + "Fardos"  +"' style='cursor:pointer; font-size:14px;'>Fardo: <strong>(S./ " +
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            indicador = "Fardos";
                        }

                    }

                    if (parseFloat(respuesta['precio_plancha']) > 0) {

                        if (parseFloat(respuesta['precio_ciento']) > 0) {

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" cientos ) " +")</a></li>";
                            indicador = "Planchas";

                        }else if(parseFloat(respuesta['precio_paquetito']) > 0){

                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" paquetitos ) " +")</a></li>";
                            indicador = "Planchas";


                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                            respuesta['precio_plancha'] + "' medida = ' " + "Planchas"  +"' style='cursor:pointer; font-size:14px;'>Plancha: <strong>(S./ " +
                            parseFloat(respuesta['precio_plancha']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_plancha_2']).toFixed(2) +")</strong>  -  ( "+respuesta['cantidad_plancha']+" unidades ) " +")</a></li>";
                            indicador = "Planchas";
                        }

                    }

                    dropdownMenu += "</ul>";

                    tabla22.row.add([
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

    function CrearYMostrar(idCliente0){
        if ($.fn.DataTable.isDataTable("#lstProductosCatalogoxCliente")) {
            $("#lstProductosCatalogoxCliente").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
        $('#lstProductosCatalogoxCliente tbody').off('click', 'td.editable');
        $('#lstProductosCatalogoxCliente tbody').off('blur', 'td.editable');
        $('#lstProductosCatalogoxCliente tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla02 = $("#lstProductosCatalogoxCliente").DataTable({
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
                    "targets": [6,4],
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
                    'idCliente':idCliente0.trim(),
                },
            },
            scrollX:true,

            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstProductosCatalogoxCliente'));
            },

        });

        $("#iptNombreProducto").keyup(function() {
            cantidad =0;
            tabla02.column($(this).data('index')).search(this.value).draw();

            // Obtenemos las celdas filtradas con la clase "editable"
            var celdasFiltradas = $('#lstProductosCatalogoxCliente tbody td.editable');

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
            $('#lstProductosCatalogoxCliente tbody').off('click', 'td.editable');
            $('#lstProductosCatalogoxCliente tbody').off('blur', 'td.editable');
            $('#lstProductosCatalogoxCliente tbody').off('keydown', 'td.editable');

            $('#lstProductosCatalogoxCliente tbody').on('click', 'td.editable', function(){
                var $this = $(this);
                celdaelegida = $this;
                // Desactivar el select en todas las filas
                $('#lstProductosCatalogoxCliente tbody tr.selected').removeClass('selected');

                // Activar el select en la fila actual
                $this.closest('tr').addClass('selected');

                colIndex2 = $this.index();
                rowIndex2 = $this.closest('tr').index();

                console.log($this.text(), colIndex2, rowIndex2);

                // Verificar si la columna es la cuarta (índice 3)
                if (colIndex2 === 4) {
                    console.log('Clic en la columna 4');
                    var $texto = $this.text();
                    var $number = $texto.replace("S/.","");
                    var $float = parseFloat($number).toFixed(2);
                    $this.text($float);
                }
                $this.attr('contenteditable', 'true');
                var range = document.createRange();
                range.selectNodeContents(this);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
            });

            $('#lstProductosCatalogoxCliente tbody').on('blur', 'td.editable', function(){

                $this = $(this);
                var colIndex = $(this).index();
                var precio_anterior = 0;

                if(colIndex === 4){
                    var $texto = $this.text();
                    var $number = $texto.replace("S/.","");
                    var $float = parseFloat($number).toFixed(2);
                    // Actualizar la data del DataTable
                    var data = tabla02.row($this.closest('tr')).data();
                    precio_anterior = data[4];


                    var texto2 = "S/. " + $float;
                    $this.text(texto2);

                    newValue = data[6];

                    var producto = data[1];
                    var Medida  = data[3]

                    console.log($float,idCliente0,producto,Medida,newValue,"precio_anterior : " + precio_anterior)
                    if(precio_anterior == $float){

                    }else{
                        setTimeout(function() {
                            GuardarPrecios($float,idCliente0,producto,Medida,$this,newValue,data,precio_anterior)
                        }, 200); // Retraso de 1000 milisegundos (1 segundo)
                    }




                }else{



                    var rowIndex = $(this).closest('tr').index();
                    var newValue = $(this).text();
                    var data = tabla02.row($(this).parents('tr')).data();

                    data[colIndex] = newValue;
                    // tabla02.row($this.closest('tr')).data(data).draw();

                    var cantidad = 0; // Inicializamos la cantidad a 0

                    // Obtenemos la instancia de DataTable
                    var table = $('#lstProductosCatalogoxCliente').DataTable();

                    // Iteramos sobre todas las filas del DataTable
                    table.rows().every(function() {
                        // Obtenemos los datos de la fila actual
                        var data = this.data();

                        // Accedemos al valor de la columna específica que te interesa (por ejemplo, columna 6)
                        var newValue = parseFloat(data[6]); // Cambia 6 por el índice de la columna que necesitas

                        // Verificamos si el valor es un número mayor que 0
                        if (!isNaN(newValue) && newValue > 0) {
                            cantidad++; // Incrementamos la cantidad si se cumple la condición
                        }
                    });

                    console.log('Cantidad de filas con números mayores que 0:', cantidad);

                    document.getElementById("cantidadProductos").textContent = cantidad;

                    if(parseFloat(newValue) < 0) {
                        editedCell.text("");
                    } else {
                        if(newValue === ""){
                            newValue = 0;
                        }
                        // Eliminar el producto existente de productos_por_agregar si tiene el mismo código (data[1])
                        productos_por_agregar = productos_por_agregar.filter(function(item) {
                            return item[0] !== data[1];
                        });

                        // Agregar el producto si newValue no es 0
                        if (parseFloat(newValue) !== 0) {
                            productos_por_agregar.push([data[1], data[3], newValue, data[4]]);
                        }

                        cambiosEditables.push({ rowIndex: rowIndex, colIndex: colIndex, newValue: newValue, codigo: data[1], precio: data[4], medida: data[3] });


                    }

                }


            });

        });

        $('#mdlProductosCatalogoxCliente').on('shown.bs.modal', function () {
            // Enfoca en el cuadro de texto después de que el modal se haya mostrado
            $("#iptNombreProducto").focus();

            $("#iptNombreProducto").on('focus', function() {
                console.log('El elemento #iptNombreProducto está enfocado');
                // Quitar la clase 'selected' de todas las filas
                $('#lstProductosCatalogoxCliente tbody tr').removeClass('selected');
                $('#lstProductosCatalogoxCliente tbody td[contenteditable=true]').removeAttr('contenteditable');
                $("#iptNombreProducto").select();
            });
        });

        $("#mdlProductosCatalogoxCliente").modal('show');
        //activarEdicionEnCelda(tabla02,rowIndex2, colIndex2);

        $(document).on('keydown', function(e) {

            if($('#mdlProductosCatalogoxCliente').is(':visible')){


                var $this = $(this);

                var numRows = tabla02.rows().count();
                var numCols = tabla02.columns().count();

                switch (e.which) {

                    case 38: // Tecla de flecha arriba
                        event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                        if (!isActionInProgress) {

                            isActionInProgress = true;
                            var $visibleRows = $('#lstProductosCatalogoxCliente tbody tr:visible');

                            // Verificar si hay filas visibles en la tabla
                            if ($visibleRows.find('td:nth-child(2)').text() === "") {
                                console.log('No hay filas visibles en la tabla.');

                            }else{
                                // Set the flag to indicate that the action is now in progress

                                $('#lstProductosCatalogoxCliente tbody td[contenteditable=true]').removeAttr('contenteditable');
                                // Obtener la fila actualmente seleccionada (si hay alguna)
                                var $selectedRow = $('#lstProductosCatalogoxCliente tbody tr.selected');
                                console.log($selectedRow.length + "columna : "+ colIndex2);

                                    if ($selectedRow.length === 0) {
                                        colIndex2 = 6;
                                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                                        $('#lstProductosCatalogoxCliente tbody tr:last').addClass('selected');
                                        $selectedRow = $('#lstProductosCatalogoxCliente tbody tr:last');
                                        var $celdaEditable =$selectedRow.find('td:eq('+ colIndex2 +')');
                                        $celdaEditable.attr('contenteditable', 'true');
                                        $celdaEditable.focus();
                                        celdaelegida = $celdaEditable;
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
                                        var $celdaEditable = $filaAnterior.find('td:eq('+ colIndex2 +')');

                                        // Activar la edición en la celda de la columna 7
                                        $celdaEditable.attr('contenteditable', 'true');
                                        $celdaEditable.focus();
                                        celdaelegida = $celdaEditable;
                                        var $this = $celdaEditable;
                                        if (colIndex2 === 4) {
                                            console.log('Clic en la columna 4');
                                            var $texto = $this.text();
                                            var $number = $texto.replace("S/.","");
                                            var $float = parseFloat($number).toFixed(2);
                                            $this.text($float);
                                        }
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
                            var $visibleRows = $('#lstProductosCatalogoxCliente tbody tr:visible');

                            // Verificar si hay filas visibles en la tabla
                            if ($visibleRows.find('td:nth-child(2)').text() === "") {
                                console.log('No hay filas visibles en la tabla.');

                            }else{
                                // Quitar el atributo 'contenteditable' de todas las celdas
                                $('#lstProductosCatalogoxCliente tbody td[contenteditable=true]').removeAttr('contenteditable');

                                // Obtener la fila actualmente seleccionada (si hay alguna)
                                var $selectedRow = $('#lstProductosCatalogoxCliente tbody tr.selected');
                                console.log($selectedRow.length + "columna : "+ colIndex2);

                                if ($selectedRow.length === 0) {
                                    colIndex2 = 6;
                                    // Si no hay ninguna fila seleccionada, seleccionar la primera fila
                                    $('#lstProductosCatalogoxCliente tbody tr:first').addClass('selected');
                                    $selectedRow = $('#lstProductosCatalogoxCliente tbody tr:first');
                                    var $celdaEditable =$selectedRow.find('td:eq('+ colIndex2 +')');
                                    $celdaEditable.attr('contenteditable', 'true');
                                    $celdaEditable.focus();
                                    celdaelegida = $celdaEditable;
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
                                    var $celdaEditable = $filaSiguiente.find('td:eq('+ colIndex2 +')');
                                    // Activar la edición en la celda de la columna 7
                                    $celdaEditable.attr('contenteditable', 'true');
                                        $celdaEditable.focus();
                                        celdaelegida = $celdaEditable;
                                    var $this = $celdaEditable;
                                    if (colIndex2 === 4) {
                                        console.log('Clic en la columna 4');
                                        var $texto = $this.text();
                                        var $number = $texto.replace("S/.","");
                                        var $float = parseFloat($number).toFixed(2);
                                        $this.text($float);
                                    }
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

                    case 39: //derecha
                        console.log(colIndex2);
                        if(colIndex2 == 4){
                            colIndex2 = 6

                            var $selectedRow = $('#lstProductosCatalogoxCliente tbody tr.selected');
                            var $celdaEditable = $selectedRow.find('td:eq('+ colIndex2 +')');
                            $celdaEditable.attr('contenteditable', 'true');
                            $celdaEditable.focus();
                            celdaelegida = $celdaEditable;
                            if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                // Seleccionar todo el texto dentro de la celda
                                var range = document.createRange();
                                range.selectNodeContents($celdaEditable.get(0));
                                var sel = window.getSelection();
                                sel.removeAllRanges();
                                sel.addRange(range);
                            }
                        }
                        break;
                    case 37: //izquierda
                        console.log(colIndex2);
                        if(colIndex2 == 6){
                            colIndex2 = 4



                            var $selectedRow = $('#lstProductosCatalogoxCliente tbody tr.selected');
                            var $celdaEditable = $selectedRow.find('td:eq('+ colIndex2 +')');
                            $celdaEditable.attr('contenteditable', 'true');
                            $celdaEditable.focus();
                            celdaelegida = $celdaEditable;
                            var $this = $celdaEditable;
                            if (colIndex2 === 4) {
                                console.log('Clic en la columna 4');
                                var $texto = $this.text();
                                var $number = $texto.replace("S/.","");
                                var $float = parseFloat($number).toFixed(2);
                                $this.text($float);
                            }

                            if ($celdaEditable.length > 0 && $celdaEditable.text().trim() !== "") {
                                // Seleccionar todo el texto dentro de la celda
                                var range = document.createRange();
                                range.selectNodeContents($celdaEditable.get(0));
                                var sel = window.getSelection();
                                sel.removeAllRanges();
                                sel.addRange(range);
                            }
                        }
                        break;
                    case 13: // Tecla "Enter"
                        e.preventDefault();
                        console.log("isSwalOpen : ", isSwalOpen)
                        if (isSwalOpen) {
                            // Si el modal Swal está abierto, simula el clic en el botón de confirmación
                            Swal.clickConfirm();
                            return;
                        }else{
                            if (!isActionInProgress) {

                            $this.removeAttr('contenteditable');
                            $("#iptNombreProducto").focus();
                            setTimeout(function () {
                                isActionInProgress = false;
                            }, 200); // Ajusta el retardo según sea necesario
                            }
                        }



                        break;
                    case 121: // Tecla "Enter"
                        e.preventDefault();
                        if (!isActionInProgress) {
                            // Set the flag to indicate that the action is now in progress
                            isActionInProgress = true;
                            $("#btnAgregarPorductoxCliente").click();
                            $("#iptCodigoVenta").focus();
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

    function GuardarPrecios(precio, id_cliente, nro_producto, medida,$this,newValue,data,precio_anterior) {
        seguro = 0;
        var focusedElement = document.activeElement;

        var rowIndex = $this.closest('tr').index();

        if (focusedElement) {
            console.log('Se encontró un elemento enfocado:', focusedElement);
        } else {
            console.log('No se encontró ningún elemento enfocado.');

            focusedElement = celdaelegida;
        }

        if(parseFloat(precio) < 0) {
            $this.text("S/. "+ parseFloat(precio_anterior).toFixed(2));
            Swal.fire(
                'Cuidado!',
                'El precio negativo cambios cancelados.',
                'warning'
            );
        } else {
            if(newValue === ""){
                newValue = 0;
            }
            isSwalOpen = true;
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Quieres cambiar el precio?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cambiar [enter]',
                cancelButtonText: 'No, cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        async: false,
                        url: "ajax/ventas.ajax.php",
                        method: 'POST',
                        data: {
                            'accion': 52, //1: LISTAR PRODUCTOS
                            'idCliente': id_cliente.trim(),
                            'nro_producto': nro_producto,
                            'medida': medida.trim(),
                            'precio': precio,
                        },
                        dataType: 'json',
                        success: function (respuesta) {
                            seguro = 1;
                            isSwalOpen = false;
                            console.log(respuesta);
                            if(respuesta === "OK"){
                                Swal.fire({
                                    title: 'Cambiado!',
                                    text: 'El precio ha sido cambiado.',
                                    icon: 'success',
                                    timer: 1000, // Duración en milisegundos (1 segundo)
                                    showConfirmButton: false // Ocultar el botón de confirmación
                                });
                                data[4] = precio;
                                tabla02.row($this.closest('tr')).data(data).draw();

                                console.log("nuevo precio: "  + data[4])

                                // Eliminar el producto existente de productos_por_agregar si tiene el mismo código (data[1])
                                productos_por_agregar = productos_por_agregar.filter(function(item) {
                                    return item[0] !== data[1];
                                });

                                // Agregar el producto si newValue no es 0
                                if (parseFloat(newValue) !== 0) {
                                    productos_por_agregar.push([data[1], data[3], newValue, data[4]]);
                                }

                                cambiosEditables.push({ rowIndex: rowIndex, colIndex: 4, newValue: newValue, codigo: data[1], precio: precio, medida: data[3] });
                            }
                        },
                        error: function (xhr, status, error) {

                            Swal.fire({
                                    title: 'Error!',
                                    text: 'Hubo un problema al cambiar el precio.',
                                    icon: 'error',
                                    timer: 1000, // Duración en milisegundos (1 segundo)
                                    showConfirmButton: false // Ocultar el botón de confirmación
                                });
                            seguro = 1;
                            isSwalOpen = false;
                        }
                    });
                } else {
                    console.log('No hay cambios');
                    seguro = 1;
                    isSwalOpen = false;
                    $this.text("S/. "+ parseFloat(precio_anterior).toFixed(2));
                }

                // Restaurar el enfoque al elemento guardado
                setTimeout(function () {
                    focusedElement.focus();
                }, 100); // Ajusta el tiempo según sea necesario
            });

        }


    }

    function enListarProductos(respuesta , tabla_eleccion){

        for(var i = 0; i<respuesta.length;i++){
            var producto  = respuesta[i][1];
            var cantidad  = respuesta[i][2] + " "+ respuesta[i][3];
            var total_numero = respuesta[i][4];
            var precio_numero = respuesta[i][4]/respuesta[i][2];
            total_numero = parseFloat(total_numero);
            precio_numero = parseFloat(precio_numero);

            var total = "S./ "+ parseFloat(total_numero).toFixed(2);
            var precio = "S./ "+ parseFloat(precio_numero).toFixed(2);

            console.log(producto , cantidad, precio, total)

            CargarProductosPegado2(producto , cantidad, precio, total, tabla_eleccion)
        }
    }

    function CopiarTabla11(){
        limpiar_tabla(tabla11);

    }

    function CopiarTabla22(){
        limpiar_tabla(tabla22);

    }

    function CopiarTabla32(){
        limpiar_tabla(tabla32);

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
                        CargarProductosPegado2(respuesta[i][1],respuesta[i][2],precio, total,tabla11);
                    }
                }
        });

    }

    function limpiar_tabla(tabla_eleccion){
        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 6,
            },
            dataType: 'json',
            success: function(respuesta) {

                var data = tabla_eleccion.data();


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

                console.log("porfavor funciona carajoooo funcionaaaaaa :-"+nombreCategoriaSinEspacios+"-")


                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                // console.log("🚀 ~ file: ventas.php ~ line 356 ~ CargarProductos ~ codigo_producto", respuesta)
                if (respuesta) {

                    var TotalVenta = 0.00;

                    var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
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

                    setTimeout(function() {
                        // Encuentra la última fila añadida
                        var lastRow = $('#lstProductosVenta tbody tr:last');

                        // Encuentra la celda específica que contiene "1 " + medida
                        var targetCell = lastRow.find('td').filter(function() {
                            return $(this).text().trim() === (1 + " " + medida);
                        });
                        console.log("se hizo click aqui")
                        // Simula un clic en la celda
                        targetCell.click();
                    }, 100); // Ajusta el tiempo de espera según sea necesario


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

    function CargarProductos2(producto = "") {

        console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla22.rows().eq(0).each(function(index) {

            var row = tabla22.row(index);
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
                            tabla22.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla22.cell(index, 7).data(NuevoPrecio).draw();

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

                     var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
                    dropdownMenu += "</ul>";

                    tabla22.row.add([
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

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

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

                     var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
                    dropdownMenu += "</ul>";

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

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */
    
    function CargarProductosPegado2(producto = "", cantidad, precio, total,tabla_eleccion) {

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
                    recalcularTotales2();
                    recalcularTotales3();

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

    function recalcularTotales2(){

        var TotalVenta = 0.00;
        //  Recalculamos el total de la venta
        tabla22.rows().eq(0).each(function(index) {
            var row = tabla22.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        $("#totalVentaRegistrarVista2").html("");
        $("#totalVentaRegistrarVista2").html(parseFloat(TotalVenta).toFixed(2));

        $("#iptCodigoVenta").val("");

    }

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

        $("#iptCodigoVenta").val("");

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

    function Seleccion_CantidadInicial(contador ,  dropdownMenu){


        var data = tabla11.row(contador).data();
        console.log("data: ",data, "dropdownMenu : ", dropdownMenu);
        console.log("ES ESTE REPLACE 1 [", contador);
        console.log(data[6]);
        console.log(($.parseHTML(data[6])[0]['value']));

        var floate = parseFloat(data[[6]].replace("S./","")).toFixed(2);

        console.log("NO ES ESTE REPLACE 1");

        var codigo = data[1];
        var valor_predeterminado;
        // console.log("floate", floate);

        var idx = tabla11.row(contador).index();
        var valor =  tabla11.cell(idx, 5).data();
        valor = valor.replace(/[^A-Za-z0-9()]/g, '');;//QUITA LOS ESPACIOS
        console.log("NO ES ESTE REPLACE 2");
        var match = valor.match(/^(\d+)([A-Za-z()]+)/);

        if (match) {
            var numero = parseInt(match[1]);
            var palabra = match[2];
        }
        dinero = floate;

        var selectedOption = "";

        Swal.fire({
            title: "",
            text: "Cantidad deseada:",
            input: 'text',
            html: `
                <div class="d-flex justify-content-between align-items-center">
                    <label>Cantidad deseada:</label>
                    <div class="dropdown">
                        <button type='button' class='p-0 btn btn-primary dropdown-toggle btn-sm border-0 focus-visible' data-bs-toggle='dropdown' aria-expanded='false' style='background-color: rgba(255, 255, 255, 0);'>
                            <i class='fas fa-cog text-primary fs-5'></i> <i class='fas fa-chevron-down text-primary'></i>
                        </button>
                        ${dropdownMenu}
                    </div>
                </div>
            `,
            width: 400,
            confirmButtonText: 'Aceptar',
            showCancelButton: true,
            onOpen: () => {
                const dropdownItems = document.querySelectorAll('.dropdown-item');

                valor_predeterminado = "Paquete: (S./"+dinero+")";
                console.log("Opción predetermidada:", dropdownItems[0].textContent);
                console.log("Valor predetermidada:", valor_predeterminado);

                dropdownItems.forEach(item => {
                    item.addEventListener('click', (event) => {
                        selectedOption = event.target.textContent;
                        console.log("Opción seleccionada:", selectedOption);

                    });
                });
            }
        }).then((result) => {


            $.ajax({

                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                'accion': 8, //Verifica el stock del producto
                'codigo_producto': data[1],
                'cantidad_a_comprar':result.value,
                'precio_seleccionado':dinero
                },
                dataType: 'json',
                success: function(respuesta){

                    // console.log("Respuesta  : " + respuesta["existe"]);

                    if(parseInt(respuesta["existe"])==0){

                        Swal.fire({
                            icon:'error',
                            title:' El producto "'+ data['4'] + '" no tiene stock suficiente para eso'
                        })

                        $('#iptCodigoVenta').val("");
                        $('#iptCodigoVenta').focus();

                    } else{

                        if (result.value) {
                            cantidad = result.value;
                            // console.log("nueva cantidad : " + cantidad);

                            numero = cantidad;


                            if(selectedOption === ""){
                                selectedOption = valor_predeterminado;
                            }

                            console.log("Opción seleccionada:", selectedOption);

                            var parts = selectedOption.split(':');
                            var word = parts[0].trim(); // Obtiene la palabra, elimina espacios adicionales
                            var value = parts[1].replace(/[^\d.]/g, ''); // Obtiene el valor numérico
                            value = value.replace(/^\.+/, '');

                            if (word === "Paquete") {
                                word = "Pqt(s)";
                            } else if (word === "Ciento") {
                                word = "Cnt(s)";
                            } else if (word === "Unidad") {
                                word = "Und(s)";
                            } else if (word === "Fardo") {
                                word = "Far(s)";
                            } else if (word === "Millar") {
                                word = "Mil(s)";
                            } else if (word === "Docena") {
                                word = "Doc(s)";
                            }

                            console.log("Palabra:", word); // Imprime la palabra
                            console.log("Valor numérico:", value); // Imprime el valor numérico

                            //recalcularMontos(data[1], value , word);

                            tabla11.cell(idx,5).data(cantidad + " " + word).draw();

                            NuevoPrecio =  (parseFloat(data[5]) * value).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla11.cell(idx,6).data("S./ " + value).draw();

                            tabla11.cell(idx,7).data(NuevoPrecio).draw();

                            recalcularTotales();

                            $('#iptCodigoCliente').focus();
                            $('#iptCodigoCliente').val("");
                        //actualizarVuelto();
                        }
                    }

                }
            });


        });
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
                NuevaMedida = parseFloat(data[5]) + medida;
                table.cell(index, 7).data(NuevoPrecio).draw();
                table.cell(index, 5).data(NuevaMedida).draw();

            }


        });

        // RECALCULAMOS TOTALES
        recalcularTotales();
        recalcularTotales2();
        recalcularTotales3();

    }

    async function AgregarCambiosHistorial(arr) {
        console.log("fila 2482 : array 2: ", arr);

        const confirmador = $("#iptNombreCliente").text();
        const dni = confirmador;

        for (const item of arr) {
            const datos = item.split(",");
            const codigo = datos[0];
            const nombre = wrapText(datos[1], 18); // Longitud máxima del nombre
            const pxu = datos[4];
            const cantidad = datos[3];
            const total = datos[2];

            const partes_cantidad = cantidad.match(/([\d.]+)\s*(\D+)/);
            const medida = partes_cantidad ? partes_cantidad[2] : '';

            const opciones = {
                "Paquetitos": 1,
                "Unidades": 2,
                "Docenas": 3,
                "Cientos": 4,
                "Millares": 5,
                "Cajas": 6,
                "Fardos": 7,
                "Planchas": 8
            };
            const opcion = opciones[medida] || 0;

            try {
                let respuesta = await $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 15,
                        'dni': dni,
                        'codigo_producto': codigo
                    },
                    dataType: 'json'
                });

                if (respuesta === "nuevo") {
                    respuesta = await $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 16,
                            'dni': dni,
                            'codigo_producto': codigo
                        },
                        dataType: 'json'
                    });

                    if (respuesta === "añadido") {
                        await $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 17,
                                'dni': dni,
                                'opcion': opcion,
                                'codigo_producto': codigo,
                                'precio': pxu
                            },
                            dataType: 'json'
                        });
                    }
                } else if (respuesta === "viejo") {
                    await $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 17,
                            'dni': dni,
                            'opcion': opcion,
                            'codigo_producto': codigo,
                            'precio': pxu
                        },
                        dataType: 'json'
                    });
                }
            } catch (error) {
                console.error("Error al procesar el producto:", error);
            }
        }
    }

    async function AgregarCambiosHistorialUno(dni,codigo,pxu,cantidad) {

        const partes_cantidad = cantidad.match(/([\d.]+)\s*(\D+)/);
        const medida = partes_cantidad ? partes_cantidad[2] : '';
        dni = dni.trim();
        const opciones = {
            "Paquetitos": 1,
            "Unidades": 2,
            "Docenas": 3,
            "Cientos": 4,
            "Millares": 5,
            "Cajas": 6,
            "Fardos": 7,
            "Planchas": 8
        };
        const opcion = opciones[medida] || 0;

        try {
            let respuesta = await $.ajax({
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                    'accion': 15,
                    'dni': dni,
                    'codigo_producto': codigo
                },
                dataType: 'json'
            });

            if (respuesta === "nuevo") {
                respuesta = await $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 16,
                        'dni': dni,
                        'codigo_producto': codigo
                    },
                    dataType: 'json'
                });

                if (respuesta === "añadido") {
                    await $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 17,
                            'dni': dni,
                            'opcion': opcion,
                            'codigo_producto': codigo,
                            'precio': pxu
                        },
                        dataType: 'json'
                    });
                }
            } else if (respuesta === "viejo") {
                await $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 17,
                        'dni': dni,
                        'opcion': opcion,
                        'codigo_producto': codigo,
                        'precio': pxu
                    },
                    dataType: 'json'
                });
            }
        } catch (error) {
            console.error("Error al procesar el producto:", error);
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

    function cargarProductosAJAX(idBoleta2) {

        if(idBoleta2 == 0){

            if($('#content-clientes:visible').length > 0 || $('#content-registrar:visible').length > 0 || $('#content-imprimir:visible').length > 0
            || $('#content-estados:visible').length > 0 || $('#content-lista-registros:visible').length > 0){

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
                                // $("#iptCodigoVenta").val("");
                                // $("#iptCodigoVenta").focus();
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

                $.ajax({
                    async: false,
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 6
                    },
                    dataType: 'json',
                    success: function (respuesta) {


                        $("#iptCodigoVentaRegistro").autocomplete({
                            source: respuesta,
                            select: function (event, ui) {
                                console.log("ui.item.value : " + ui.item.value)
                                var Texto = ui.item.value;
                                var palabras = Texto.split("/");

                                var cliente = palabras[1];
                                var producto = palabras[0];

                                if(idBoleta2 == 0){
                                    CargarProductos2(ui.item.value);
                                }else if(cliente === ""){
                                    CargarProductos2(ui.item.value);
                                }else{
                                    console.log(producto,cliente);
                                    CargarProductosClientes2(producto,cliente);
                                }
                                $("#iptCodigoVentaRegistro").val("");
                                $("#iptCodigoVentaRegistro").focus();
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



            if($('#content-clientes:visible').length > 0 || $('#content-registrar:visible').length > 0 || $('#content-imprimir:visible').length > 0
            || $('#content-estados:visible').length > 0 || $('#content-lista-registros:visible').length > 0){

                console.log("id Perfil de ajax: " +idBoleta2);
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
                                    console.log(producto,cliente);
                                    CargarProductosClientes(producto,cliente);
                                }

                                

                                // $("#iptCodigoVenta").val("");
                                // $("#iptCodigoVenta").focus();
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

    function cargarProductosAJAXRegistros(idBoleta2) {
        console.log(idBoleta2);

        // Verificar la visibilidad de los contenidos
        if ($('#content-clientes:visible').length > 0 || 
            $('#content-registrar:visible').length > 0 || 
            $('#content-imprimir:visible').length > 0 || 
            $('#content-estados:visible').length > 0 || 
            $('#content-lista-registros:visible').length > 0) {

            // Configurar el objeto de datos para la solicitud AJAX
            var accion = (idBoleta2 == 0 || idBoleta2 === "VARIOS") ? 6 : 20;
            var data = { 'accion': accion };
            if (idBoleta2 !== 0 && idBoleta2 !== "VARIOS") {
                data['id_cliente'] = idBoleta2;
            }

            // Realizar la solicitud AJAX
            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: data,
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptCodigoVentaRegistro").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {
                            var Texto = ui.item.value;
                            var palabras = Texto.split("/");
                            var cliente = palabras[1];
                            var producto = palabras[0];

                            if (idBoleta2 == 0 || cliente === "") {
                                CargarProductos2(ui.item.value);
                            } else {
                                console.log("CargarProductosClientes2(producto, cliente);");
                                CargarProductosClientes2(producto, cliente);
                            }

                            $("#iptCodigoVentaRegistro").val("");
                            $("#iptCodigoVentaRegistro").focus();
                            return false;
                        }
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
                }
            });
        }
    }


    function cargarProductosAJAXRegistros2(idBoleta2) {
        console.log(idBoleta2);

        // Verificar la visibilidad de los contenidos
        if ($('#content-clientes:visible').length > 0 || 
            $('#content-registrar:visible').length > 0 || 
            $('#content-imprimir:visible').length > 0 || 
            $('#content-estados:visible').length > 0 || 
            $('#content-lista-registros:visible').length > 0) {

            // Configurar el objeto de datos para la solicitud AJAX
            var data = { 'accion': (idBoleta2 == 0 || idBoleta2 === "VARIOS") ? 6 : 20 };
            if (idBoleta2 !== 0 && idBoleta2 !== "VARIOS") {
                data['id_cliente'] = idBoleta2;
            }

            // Realizar la solicitud AJAX
            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: data,
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptCodigoVentaRegistro2").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {
                            console.log("ui.item.value : " + ui.item.value);
                            var Texto = ui.item.value;
                            var palabras = Texto.split("/");

                            var cliente = palabras[1];
                            var producto = palabras[0];

                            if (idBoleta2 == 0 || cliente === "") {
                                CargarProductos3(ui.item.value);
                            } else {
                                console.log("CargarProductosClientes3(producto, cliente);");
                                CargarProductosClientes3(producto, cliente);
                            }

                            $("#iptCodigoVentaRegistro2").val("");
                            $("#iptCodigoVentaRegistro2").focus();
                            return false;
                        }
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
                }
            });
        }
    }


    function CargarProductosClientes(producto = "", cliente = "") {

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

                    var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
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

                    setTimeout(function() {
                        // Encuentra la última fila añadida
                        var lastRow = $('#lstProductosVenta tbody tr:last');

                        // Encuentra la celda específica que contiene "1 " + medida
                        var targetCell = lastRow.find('td').filter(function() {
                            return $(this).text().trim() === (1 + " " + medida);
                        });
                        console.log("se hizo click qui")
                        // Simula un clic en la celda
                        targetCell.click();
                    }, 1000); // Ajusta el tiempo de espera según sea necesario

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

    function CargarProductosClientes2(producto = "", cliente = "") {

        console.log("cargarProductos se ejcuta normal CargarProductosClientes2" )

        console.log($("#iptCodigoVenta").val() )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla22.rows().eq(0).each(function(index) {

            var row = tabla22.row(index);
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
                            tabla22.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla22.cell(index, 7).data(NuevoPrecio).draw();

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

        console.log("cargarProductos se ejcuta normal" )

        var dropdownMenu = "<ul class='dropdown-menu'>";
        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 21, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto,
                'id_cliente': ClienteBoleta,
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

                    var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
                    dropdownMenu += "</ul>";

                    tabla22.row.add([
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
            success: function(respuesta) {
                if (respuesta) {
                    var dropdownMenu = "<ul class='dropdown-menu'>";
                    var medida = obtenerMedida(respuesta);
                    var indicador = medida;

                    // Construir dropdownMenu usando función
                    dropdownMenu += construirDropdownMenu(respuesta, medida);
                    dropdownMenu += "</ul>";

                    var fila = [
                        itemProducto,
                        respuesta['codigo_producto'],
                        respuesta['id_categoria'],
                        respuesta['nombre_categoria'],
                        respuesta['descripcion_producto'],
                        "1 " + indicador,
                        respuesta['precio_venta'],
                        respuesta['total'],
                        "<center>" +
                            "<span class='btnEliminarproducto text-danger px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                            "<i class='fas fa-trash fs-5'> </i> " +
                            "</span>" +
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
                    ];

                    tabla32.row.add(fila).draw();
                    itemProducto++;

                    recalcularTotales();

                } else {
                    $("#iptCodigoVenta").val("").focus();
                }
                contador++;
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
            }
        });



    }/* FIN CargarProductos */

    // Función para obtener la medida basada en los precios
    function obtenerMedida(respuesta) {
        const precios = {
            'precio_plancha': 'Planchas',
            'precio_unidad': 'Unidades',
            'precio_paquetito': 'Paquetitos',
            'precio_docena': 'Docenas',
            'precio_ciento': 'Cientos',
            'precio_millar': 'Millares',
            'precio_caja': 'Cajas',
            'precio_fardo': 'Fardos'
        };

        for (const [key, medida] of Object.entries(precios)) {
            if (parseFloat(respuesta[key]) > 0) {
                return medida;
            }
        }
        
    }

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

    ////HATA AQUI TERMINA LO DE PRODUCTOS ALGREGADOS A LAS TABLAS

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

    async function VerificarNumeroFactura() {
        // alert('Vinculando venta con nubefact (esto tardara unos segundos)');
        const intervalId = setInterval(async() => {
            if (buscarfactura < 5) {
                console.log("por aqui si funciona 1");
                if(numero_encontrado === true){
                    console.log("the cicle ends here");
                    numero_factura = await DarNumeroFijo();
                    clearInterval(intervalId);
                }else{
                    await cargarNroFacuraNuveFact();
                }
                return;

            } else if(buscarfactura === 5 && numero_encontrado === false){
                alert('El numero actual en nubeFact es muy distinto al que esta vinculado este programa porfavor ingrese el numero actual en nubefact o reinicie el programa');
                $("#mdlEditarNumeroNubefact").modal('show');
                clearInterval(intervalId); // Detiene el intervalo
                return;
            } else if (buscarfactura > 5){
                clearInterval(intervalId); // Detiene el intervalo
                return;
            }
            console.log(buscarfactura);
            buscarfactura++;
        }, 4000); // 5000 milisegundos = 5 segundos
    }

    async function VerificarNumeroFacturaBoton() {
        return new Promise((resolve, reject) => {
            async function checkInvoice() {
                if (buscarfactura < 10) {
                    console.log("Intento");
                    if (numero_encontrado === true) {
                        console.log("Numero encontrado");

                        resolve(true);  // Retorna true y finaliza la función
                        return;
                    } else {
                        console.log("Actualizado");
                        await cargarNroFacuraNuveFact();
                    }
                    buscarfactura++;
                    setTimeout(checkInvoice, 5000);  // Espera 5 segundos antes de la próxima ejecución
                } else if (buscarfactura === 10 && numero_encontrado === false) {
                    alert('El numero actual en nubeFact es muy distinto al que esta vinculado este programa porfavor ingrese el numero actual en nubefact o reinicie el programa');
                    $("#mdlPantallaCarga").modal("hide");
                    $("#mdlEditarNumeroNubefact").modal('show');
                    resolve(false);  // Retorna false y finaliza la función
                } else if (buscarfactura > 10) {
                    resolve(false);  // Retorna false y finaliza la función
                }
                console.log(buscarfactura);
            }

            checkInvoice();  // Inicia la primera verificación
        });
    }


    async function cargarNroFacuraNuveFact() {
        console.log("consultar numero factura : ");
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 5,
                    'tipo': "Factura"
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log("consultar numero factura 2: ", respuesta);

                    var serie_elijo = respuesta[0]["serie"];
                    var numero_elijo = respuesta[0]["numero"];

                    var consulta = {
                        operacion: "consultar_comprobante",
                        tipo_de_comprobante: 1,
                        serie: serie_elijo,
                        numero: numero_elijo
                    };

                    fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(consulta)
                    })
                    .then(response => response.json())
                    .then(async (data) => {
                        console.log('Respuesta:', data);
                        if (data.success) {
                            if (data.data.enlace_del_pdf) {
                                await CambiarNumeroDeFactura();
                            } else {
                                alert('Se encontró un número disponible.');
                            }
                            resolve();
                        } else {
                            if (data.error === 'Documento no existe') {
                                numero_encontrado = true;
                                resolve();
                            } else {
                                alert('Error al generar la consulta: ' + (data.error || 'Error desconocido.'));
                                reject(new Error('Error en la consulta'));
                            }
                        }
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        reject(error);
                    });
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    async function VerificarNumeroBoletaBoton() {
        return new Promise((resolve, reject) => {
            async function checkInvoice() {
                if (buscarfactura < 10) {
                    console.log("Intento");
                    if (numero_encontrado === true) {
                        console.log("Numero encontrado");

                        resolve(true);  // Retorna true y finaliza la función
                        return;
                    } else {
                        console.log("Actualizado");
                        await cargarNroBoletaNuveFact();
                    }
                    buscarfactura++;
                    setTimeout(checkInvoice, 5000);  // Espera 5 segundos antes de la próxima ejecución
                } else if (buscarfactura === 10 && numero_encontrado === false) {
                    alert('El numero actual en nubeFact es muy distinto al que esta vinculado este programa porfavor ingrese el numero actual en nubefact o reinicie el programa');
                    $("#mdlPantallaCarga").modal("hide");
                    $("#mdlEditarNumeroNubefact").modal('show');
                    resolve(false);  // Retorna false y finaliza la función
                } else if (buscarfactura > 10) {
                    resolve(false);  // Retorna false y finaliza la función
                }
                console.log(buscarfactura);
            }

            checkInvoice();  // Inicia la primera verificación
        });
    }

    async function cargarNroBoletaNuveFact() {
        console.log("consultar numero factura : ");
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 5,
                    'tipo': "Boleta"
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log("consultar numero factura 2: ", respuesta);

                    var serie_elijo = respuesta[0]["serie"];
                    var numero_elijo = respuesta[0]["numero"];

                    var consulta = {
                        operacion: "consultar_comprobante",
                        tipo_de_comprobante: 2,
                        serie: serie_elijo,
                        numero: numero_elijo
                    };

                    fetch('http://192.168.1.41/market-pos/vistas/generar_factura.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(consulta)
                    })
                    .then(response => response.json())
                    .then(async (data) => {
                        console.log('Respuesta:', data);
                        if (data.success) {
                            if (data.data.enlace_del_pdf) {
                                await CambiarNumeroDeBoleta();
                            } else {
                                alert('Se encontró un número disponible.');
                            }
                            resolve();
                        } else {
                            if (data.error === 'Documento no existe') {
                                numero_encontrado = true;
                                resolve();
                            } else {
                                alert('Error al generar la consulta: ' + (data.error || 'Error desconocido.'));
                                reject(new Error('Error en la consulta'));
                            }
                        }
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        reject(error);
                    });
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    async function DarNumeroFijo() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 5,
                    'tipo': "Factura"
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);
                    const numero_factura = respuesta[0]["numero"];
                    resolve(numero_factura);
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    async function DarNumeroFijoBoleta() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                    'accion': 5,
                    'tipo': "Boleta"
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);
                    const numero_factura = respuesta[0]["numero"];
                    resolve(numero_factura);
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }

    function desactivarBotones() {
        // Seleccionar todos los botones que se desean modificar
        const botones = document.querySelectorAll('#btnRegistroEsp, #btnRegistrar1, #btnRegistrarBoleta, #btnRegistrarFactura');

        // Iterar sobre cada botón y cambiar la clase y desactivarlos
        botones.forEach((boton) => {
            boton.classList.remove('btn-info', 'btn-warning', 'btn-success'); // Eliminar clases existentes
            boton.classList.add('btn-secondary'); // Agregar clase btn-secondary
            boton.disabled = true; // Desactivar el botón
        });
    }

    function activarBotones() {
        // Seleccionar todos los botones que se modificaron
        const botones = document.querySelectorAll('#btnRegistroEsp, #btnRegistrar1, #btnRegistrarBoleta, #btnRegistrarFactura');

        // Iterar sobre cada botón y restaurar las clases originales y activarlos
        botones.forEach((boton) => {
            boton.classList.remove('btn-secondary'); // Eliminar clase btn-secondary
            boton.disabled = false; // Activar el botón
            // Restaurar las clases originales basadas en el ID del botón
            if (boton.id === 'btnRegistroEsp') {
                boton.classList.add('btn-info');
            } else if (boton.id === 'btnRegistrar1') {
                boton.classList.add('btn-primary');
            } else if (boton.id === 'btnRegistrarBoleta') {
                boton.classList.add('btn-warning');
            } else if (boton.id === 'btnRegistrarFactura') {
                boton.classList.add('btn-success');
            }
        });
    }

    async function Actualizar_fecha_venta(idBoleta) {
        // Obtén la fecha y hora actual
        const now = new Date();

        // Formatea el año, mes y día
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Meses empiezan en 0
        const day = String(now.getDate()).padStart(2, '0');

        // Formatea las horas, minutos y segundos
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        // Combina todo en el formato deseado
        const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

        // Muestra la fecha y hora en la consola
        console.log("formattedDate :" , formattedDate);

        return new Promise((resolve, reject) => {
            $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 64,
                    'nro_boleta': idBoleta,
                    'fecha_venta' : formattedDate
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);
                    resolve(respuesta);
                },
                error: function(err) {
                    console.error('AJAX Error:', err);
                    reject(err);
                }
            });
        });
    }
</script>