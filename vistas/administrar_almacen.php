<?php
session_start(); // Asegúrate de iniciar la sesión al principio de tu script si no está iniciada aún

// Obtener el nombre completo de la variable de sesión
$nombreCompleto = $_SESSION["nombreCompleto"];

// Mostrar el nombre completo en la vista

?>
<!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Almacen</h1>
                 <?php echo '<h6>Bienvenido, ' . $nombreCompleto . '!</h6>';?>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Agente</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">

     <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-salida-tab" data-toggle="pill" href="#content-salida" role="tab" aria-controls="content-salida" aria-selected="false">REGISTRAR SALIDA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-entrada-tab" data-toggle="pill" href="#content-entrada" role="tab" aria-controls="content-entrada" aria-selected="false">REGISTRAR ENTRADA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-imprimir-tab" data-toggle="pill" href="#content-imprimir" role="tab" aria-controls="content-imprimir" aria-selected="false">IMPRIMIR SALIDA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-imprimir-2-tab" data-toggle="pill" href="#content-imprimir-2" role="tab" aria-controls="content-imprimir-2" aria-selected="false">IMPRIMIR ENTRADA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-registro-tab" data-toggle="pill" href="#content-registro" role="tab" aria-controls="content-registro" aria-selected="false">LISTA DE REGISTROS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-stock-tab" data-toggle="pill" href="#content-stock" role="tab" aria-controls="content-stock" aria-selected="false">STOCK BAMBAS</a>
            </li>


        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-salida" role="tabpanel" aria-labelledby="content-salida-tab">

                

                <div class="container-fluid">

                    <div class="row mb-3">
                        <h4>REGISTRAR SALIDA</h4>
                    </div>

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-2">

                                    <!-- SERIE Y NRO DE BOLETA -->
                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-4">

                                                <label for="iptNroSerie1">Serie</label>

                                                <input type="text" min="0" name="iptEfectivo1" id="iptNroSerie1"
                                                    class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                            </div>

                                            <div class="col-md-8">

                                                <label for="iptNroVenta1">Nro Registro</label>

                                                <input type="text" min="0" name="iptEfectivo1" id="iptNroVenta1"
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

                                            <h4>CLIENTE: <label id = "iptNombreCliente1"> VARIOS </label></h4>

                                            <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptCodigoVenta_1">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptCodigoVenta_1"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div>



                                        </div>

                                        <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                                        <div class="col-md-5 mb-3 rounded-3" style="background-color: orange ;color: white;text-align:center;border:1px solid gray;">
                                            <h2 class="fw-bold m-0"> Productos Salida : </h2>
                                        </div>

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-7 text-right">
                                            <button class="btn btn-primary" id="btnRegistrar1">
                                                <i class="fas fa-shopping-cart"></i> Registrar
                                            </button>
                                            <button class="btn btn-danger" id="btnVaciarListado1">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                            <button class="btn btn-secondary" id="btnCopiar1">
                                                <i class="far fa-copy"></i>
                                            </button>
                                            <button class="btn btn-success" id="btnPegar1">
                                                <i class="far fa-clipboard"></i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosVenta_1" class="display nowrap table-striped w-100 shadow ">
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

            <div class="tab-pane fade mt-4 px-4" id="content-entrada" role="tabpanel" aria-labelledby="content-entrada-tab">

                

                <div class="container-fluid">

                    <div class="row mb-3">
                        <h4>REGISTRAR ENTRADA</h4>
                    </div>

                    <div class="row mb-3">


                        <div class="col-md-12">
                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-2">

                                    <!-- SERIE Y NRO DE BOLETA -->
                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-4">

                                                <label for="iptNroSerie2">Serie</label>

                                                <input type="text" min="0" name="iptEfectivo2" id="iptNroSerie2"
                                                    class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                            </div>

                                            <div class="col-md-8">

                                                <label for="iptNroVenta2">Nro Venta</label>

                                                <input type="text" min="0" name="iptEfectivo2" id="iptNroVenta2"
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

                                            <h4>CLIENTE: <label id = "iptNombreCliente2"> VARIOS </label></h4>

                                            <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptCodigoVenta_2">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptCodigoVenta_2"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div>



                                        </div>

                                        <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                                        <div class="col-md-5 mb-3 rounded-3" style="background-color: teal ;color: white;text-align:center;border:1px solid gray;">
                                            <h2 class="fw-bold m-0"> Productos Entrada :</h2>
                                        </div>

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-7 text-right">
                                            <button class="btn btn-primary" id="btnRegistrar2">
                                                <i class="fas fa-shopping-cart"></i> Registrar
                                            </button>
                                            <button class="btn btn-danger" id="btnVaciarListado1">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                            <button class="btn btn-secondary" id="btnCopiar2">
                                                <i class="far fa-copy"></i>
                                            </button>
                                            <button class="btn btn-success" id="btnPegar2">
                                                <i class="far fa-clipboard"></i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosVenta_2" class="display nowrap table-striped w-100 shadow ">
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

            <div class="tab-pane fade mt-4 px-4" id="content-imprimir" role="tabpanel" aria-labelledby="content-imprimir-tab">

                <h4>Re-Imprimir Reporte</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-6">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">
                                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                                        <div class="col-md-3 mb-3 rounded-3 text-center">
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
                                        </div>

                                        <div class="col-md-6 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnImprimir3">
                                                <i class="fas fa-print fs-5"></i> Imprimir
                                            </button>

                                            <button class="btn btn-warning" id="btnActualizar3">
                                                <i class="fas fa-bolt fs-5"></i>
                                            </button>

                                            
                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosImprimir_1" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Cliente</th>
                                                        <th >Total</th>
                                                        <th >Fecha</th>
                                                        <th >Estado</th>

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

                        <div class="col-md-6">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                    Seleccionar Impresion
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

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <button class="btn btn-secondary" id="btnCopiar3">
                                                <i class="far fa-copy"></i>
                                            </button>

                                            <button class="btn btn-danger" id="btnEliminarRegistro3">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosProductosImprimir_1" class="display nowrap table-striped w-100 shadow ">
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

            <div class="tab-pane fade mt-4 px-4" id="content-imprimir-2" role="tabpanel" aria-labelledby="content-imprimir-tab">

                <h4>Re-Imprimir Reporte</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-6">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">
                                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                                        <div class="col-md-3 mb-3 rounded-3 text-center">
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
                                        </div>

                                        <div class="col-md-6 mb-3 rounded-3 text-right">

                                            <button class="btn btn-success" id="btnImprimir4">
                                                <i class="fas fa-print fs-5"></i> Imprimir
                                            </button>

                                            <button class="btn btn-warning" id="btnActualizar4">
                                                <i class="fas fa-bolt fs-5"></i>
                                            </button>

                                            
                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosImprimir_2" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Cliente</th>
                                                        <th >Total</th>
                                                        <th >Fecha</th>
                                                        <th >Estado</th>

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

                        <div class="col-md-6">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                    Seleccionar Impresion
                                </h5>

                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">

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
                                       VISTA PREVIA
                                </h5>
                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <button class="btn btn-secondary" id="btnCopiar4">
                                                <i class="far fa-copy"></i>
                                            </button>

                                            <button class="btn btn-danger" id="btnEliminarRegistro3">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosProductosImprimir_2" class="display nowrap table-striped w-100 shadow ">
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

            <div class="tab-pane fade mt-4 px-4" id="content-registro" role="tabpanel" aria-labelledby="content-registro-tab">

                <div class="row mb-3">
                    <h4>LISTA DE REGISTROS</h4>
                </div>

                <div class="container-fluid">

                    <div class="row mb-3">
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
                                <div class="col-md-12 mb-3 rounded-3" style="background-color: black ;color: white;text-align:center;border:1px solid gray;">
                                        <h2 class="fw-bold m-0">LISTA DE REGISTROS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display nowrap table-striped w-100 shadow" id="lstVentas">
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
            
            <div class="tab-pane fade mt-4 px-4" id="content-stock" role="tabpanel" aria-labelledby="content-stock-tab">

                <div class="row mb-3">
                    <h4>STOCK BAMBAS</h4>
                </div>

                <div class="container-fluid">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card card-gray shadow" style="border: 1px solid black;">
                                <div class="card-header">
                                    <h3 class="card-title">Criterios de Busqueda</h3>
                                    <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptProducto" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptProducto">Producto</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptProducto" class="form-control" data-index="3">
                                                        <label for="iptProducto">Producto</label>
                                                    </div>


                                                </div>

                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                            <div class="row mb-3">

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="display nowrap table-striped w-100 shadow" id="lstStock">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr>
                                                <th>Opc</th>
                                                <th>Producto</th>
                                                <th>Fardos</th>
                                                <th>Cajas</th>
                                                <th>Millares</th>
                                                <th>Cientos</th>
                                                <th>Docenas</th>
                                                <th>Paquetes</th>
                                                <th>Unidades</th>
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
 </div><!-- /.container-fluid -->

 <div class="modal fade" id="mdlCambiarCantidades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Cambiar Cantidades</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                        <div class="col-12 col-lg-12">
                            <h4>PRODUCTO: <label id = "iptNombreProducto"> Producto x </label></h4>
                        </div>  
                        
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptFardos"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Fardos o  Planchas</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptFardos"
                                    name="iptFardos" placeholder="Razon Social" required>
                                <div class="invalid-feedback">Debe ingresar la Razon Social</div>
                            </div>
                        </div>  

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptMillares"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Millares</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptMillares"
                                    name="iptMillares" placeholder="Razon Comercial" required>
                                <div class="invalid-feedback">Debe ingresar la Razon Comercial</div>
                            </div>
                        </div> 

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCajas"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Cajas</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCajas"
                                    name="iptCajas" placeholder="Identificacion" required>
                                <div class="invalid-feedback">Debe ingresar la Numero de Cajas</div>
                            </div>
                        </div> 

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCientos"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Cientos</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCientos"
                                    name="iptCientos" placeholder="Direccion" required>
                                <div class="invalid-feedback">Debe ingresar la Numero de Cientos</div>
                            </div>
                        </div> 

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptDocenas"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Docenas</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptDocenas"
                                    name="iptDocenas" placeholder="Telefono" required>
                                <div class="invalid-feedback">Debe ingresar la Numero de Docenas</div>
                            </div>
                        </div> 

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptPaquetes"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Paquetitos</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptPaquetes"
                                    name="iptPaquetes" placeholder="Código de Barras" required>
                                <div class="invalid-feedback">Debe ingresar la Numero de Paquetitos</div>
                            </div>
                        </div> 

                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptUnidades"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Numero de Unidades</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptUnidades"
                                    name="iptUnidades" placeholder="Detalles" required>
                                <div class="invalid-feedback">Debe ingresar la Numero de Unidades</div>
                            </div>
                        </div> 

                    

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarStock">Guardar Cambios Cliente</button>
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
    var tabla21; // lista de productos generales
    var tabla31; // lista de productos x cliente
    var tabla41; // lista de impresion
    var tabla51; // lista de impresion 2
    var tabla61;

    var tabla42; // lista de impresion
    var tabla52; // lista de impresion 2

    var isActionInProgress = false;
    
    var itemProducto = 1;
    var contador = 0;

    var idBoleta1 = 0;
    var idBoleta2 = 0;

    var ClienteBoleta1;
    var ClienteBoleta2;

    $(document).ready(function(){
        cargar_fechas();
        CargarNroBoleta();
        Cargar_tables();
        CargarBotones();
        Autocomplete(tabla11);
        Autocomplete_2(tabla21);
    })

    $(document).on('keydown', function (event) {
        // Verifica si la tecla presionada es la tecla F2 (keyCode 113)
        if (event.keyCode === 113) {
            event.preventDefault();

            // Obtén el elemento de navegación activo dentro del tab actual
            const activeElement = $('.nav-tabs .nav-link.active');

            // Verifica si el tab actual es uno de los tabs específicos que te interesan
            if (activeElement.length && (activeElement.attr('id') === 'content-salida-tab' || activeElement.attr('id') === 'content-entrada-tab' || activeElement.attr('id') === 'content-imprimir-tab'
            || activeElement.attr('id') === 'content-imprimir-2-tab'|| activeElement.attr('id') === 'content-registro-tab'|| activeElement.attr('id') === 'content-stock-tab')) {

                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Obtén el siguiente elemento de navegación dentro del mismo tab
                    const nextElement = activeElement.parent().next().find('.nav-link');

                    if (nextElement.length) {
                        // Cambia al siguiente tab dentro del mismo tab-pane
                        activeElement.removeClass('active').attr('aria-selected', 'false');
                        nextElement.addClass('active').attr('aria-selected', 'true').tab('show');
                        const tabId = nextElement.attr('href');
                        $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                        $(tabId).addClass('show active').attr('aria-selected', 'true');
                    } else {
                        // Si no hay siguiente elemento, cambia al primer elemento del mismo tab-pane
                        const firstNav = activeElement.parent().siblings().first().find('.nav-link');
                        activeElement.removeClass('active').attr('aria-selected', 'false');
                        firstNav.addClass('active').attr('aria-selected', 'true').tab('show');
                        const tabId = firstNav.attr('href');
                        $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                        $(tabId).addClass('show active').attr('aria-selected', 'true');
                    }

                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Ajusta el retraso según sea necesario
                }
            }
        }
    });

</script>

<script>
    function Cargar_tables(){

        tabla11= $('#lstProductosVenta_1').DataTable({
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
                    targets: 6,
                    visible: false
                },
                {
                    targets: 7,
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

            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },

        });

        tabla11.on('init.dt', function () {

            $('#lstProductosVenta_1 tbody').off('click', 'td.editable');
            $('#lstProductosVenta_1 tbody').off('blur', 'td.editable');
            $('#lstProductosVenta_1 tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstProductosVenta_1 tbody').on('click', 'td.editable', function(){
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

            $('#lstProductosVenta_1 tbody').on('blur', 'td.editable', function() {

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
                    descripcionColumna = 'Columna 3';
                    tabla11.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                }
                else if (columnaModificada === 2) {
                    var texto = tabla11.cell($currentCell, 5).data();
                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                texto_cantidad = partes[2];
                    descripcionColumna = 'Columna 2';
                    tabla11.cell(currentRow, 5).data(parseFloat(nuevoValor) + " "+ texto_cantidad);
                }

                // var data = tabla11.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));

                tabla11.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                recalcularTotales();
            });

            // // Función para manejar eventos de teclado
            $('#lstProductosVenta_1 tbody').on('keydown', 'td.editable', function(e) {
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
                        var $firstEditableCell = $('#lstProductosVenta_1 tbody td.editable:visible:first');
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
                        var $lastRow = $('#lstProductosVenta_1 tbody tr:last');
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
                } else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla21= $('#lstProductosVenta_2').DataTable({
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
                    targets: 6,
                    visible: false
                },
                {
                    targets: 7,
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

            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },

        });

        tabla21.on('init.dt', function () {

            $('#lstProductosVenta_2 tbody').off('click', 'td.editable');
            $('#lstProductosVenta_2 tbody').off('blur', 'td.editable');
            $('#lstProductosVenta_2 tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstProductosVenta_2 tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla21.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[6]===""){
                        data[6]="S./ 0.00";
                    }
                    $(this).text(parseFloat(data[6].replace("S./ ", "")));

                }else if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla21.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="1 Unidades";
                    }
                    $(this).text(parseFloat(data[5]));

                    console.log(tabla21.cell($currentCell, 5).data())
                    var texto = tabla21.cell($currentCell, 5).data();
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

            $('#lstProductosVenta_2 tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla21.row($(this).parents('tr')).data();


                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 3) {
                    descripcionColumna = 'Columna 3';
                    tabla21.cell(currentRow, 6).data("S./ "+parseFloat(nuevoValor).toFixed(2));
                }
                else if (columnaModificada === 2) {
                    var texto = tabla21.cell($currentCell, 5).data();
                var partes = texto.match( /([\d.]+)\s*(\D+)/);
                texto_cantidad = partes[2];
                    descripcionColumna = 'Columna 2';
                    tabla21.cell(currentRow, 5).data(parseFloat(nuevoValor) + " "+ texto_cantidad);
                }

                // var data = tabla21.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                var Total = parseFloat(data[5]) * parseFloat(data[6].replace("S./ ", ""));

                tabla21.cell(currentRow, 7).data("S./ "+parseFloat(Total).toFixed(2));
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                recalcularTotales();
            });

            // // Función para manejar eventos de teclado
            $('#lstProductosVenta_2 tbody').on('keydown', 'td.editable', function(e) {
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
                                var data = tabla21.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $nextEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla21.cell($currentCell, 5).data() : ",tabla21.cell($currentCell, 5).data())
                                var texto = tabla21.cell($currentCell, 5).data();
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
                        var $firstEditableCell = $('#lstProductosVenta_2 tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $firstEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $firstEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla21.cell($currentCell, 5).data() : ",tabla21.cell($currentCell, 5).data())
                                var texto = tabla21.cell($currentCell, 5).data();
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
                                var data = tabla21.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $prevEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $prevEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla21.cell($currentCell, 5).data() : ",tabla21.cell($currentCell, 5).data())
                                var texto = tabla21.cell($currentCell, 5).data();
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
                        var $lastRow = $('#lstProductosVenta_2 tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[6]===""){
                                    data[6]="S./ 0.00";
                                }
                                $lastEditableCell.text(parseFloat(data[6].replace("S./ ", "")));

                            }else if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla21.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="1";
                                }
                                $lastEditableCell.text(parseFloat(data[5]));

                                //console.log("tabla21.cell($currentCell, 5).data() : ",tabla21.cell($currentCell, 5).data())
                                var texto = tabla21.cell($currentCell, 5).data();
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
                        var data = tabla21.row($nextEditableCell.parents('tr')).data();
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
                        var data = tabla21.row($prevEditableCell.parents('tr')).data();
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
                } else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla31= $('#lstVentas').DataTable({  
            
            
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
                        return '<span style="font-weight: bold;">' + formattedData.trim() + '</span>';
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
                    targets: 3,
                    visible: false
                },
                {
                    targets: [4],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        var color = 'gray';
                        if (formattedData === "Registrado") {
                            color = 'gray';  // Blanco
                        } else if (formattedData === "Reportado") {
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
                url: 'ajax/registros.ajax.php',
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
                    // $("#totalVenta").html(TotalVenta.toFixed(2));
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
                ajustarHeadersDataTables($('#lstVentas'));
            }
        });

        tabla41 = $('#lstRegistrosImprimir_1').DataTable({
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
                    targets: 3,
                    visible: false,
                },
                {
                    targets: 5,
                    visible: false,
                },
            ],
            ajax: {
                url: "ajax/registros.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 4 //1: LISTAR BOLETAS
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
                ajustarHeadersDataTables($('#lstRegistrosImprimir_1'));
            }
        });

        tabla42= $('#lstRegistrosProductosImprimir_1').DataTable({
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
                    targets: 6,
                    visible: false
                },
                {
                    targets: 7,
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
                },{
                    targets:[1,4,5,6,7,8],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },

            ],
            "scrollX": true,
            "order": [
                [1, 'asc']
            ],
            "pageLength": 5,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistrosProductosImprimir_1'));
            }
        });

        tabla51 = $('#lstRegistrosImprimir_2').DataTable({
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
                    targets: 3,
                    visible: false,
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
                    targets: 5,
                    visible: false,
                },
            ],
            ajax: {
                url: "ajax/registros.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 5 //1: LISTAR BOLETAS
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
                ajustarHeadersDataTables($('#lstRegistrosImprimir_2'));
            }
        });

        tabla52= $('#lstRegistrosProductosImprimir_2').DataTable({
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
                    targets: 6,
                    visible: false
                },
                {
                    targets: 7,
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
                },{
                    targets:[1,4,5,6,7,8],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },

            ],
            "scrollX": true,
            "order": [
                [1, 'asc']
            ],
            "pageLength": 5,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstRegistrosProductosImprimir_2'));
            }
        });

        tabla61 = $("#lstStock").DataTable({
            "columnDefs": [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarStock text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
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
                        return '<span style="font-weight: bold;">' + formattedData + '</span>';
                    }
                },

                {
                    targets: [2,3,4,5,6,7,8],
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        if(formattedData != "0"){
                            return '<span style="font-weight: bold; color: green;">' + formattedData + '</span>';
                        }else{
                            return '<span style="font-weight: bold; color: white;">' + formattedData + '</span>';
                        }
                        
                    }
                },
                
                
                
            ],
            scrollX:true,
            "order": [[0, 'desc']],
            dom: 'Bfrtip',
            buttons: [
                'excel',
                'print',
                'pageLength'
            ],
            lengthMenu: [15, 30, 50, 100, 200, 500],
            "pageLength": 15,
            ajax: {
                url: "ajax/registros.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //1: LISTAR BOLETAS
                },
            },
            
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstStock'));
            }
        });

        
    }

    function cargar_fechas(){

        $('#ventas_desde, #ventas_hasta').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })

                // Obtén la fecha del primer día del mes actual
        var fechaInicioMesActual = moment().startOf('month');

        // Resta un mes para obtener el primer día del mes pasado
        var fechaInicioMesPasado = fechaInicioMesActual.subtract(1, 'months');

        // Formatea la fecha en el formato 'DD/MM/YYYY'
        var fechaFormateada = fechaInicioMesPasado.format('DD/MM/YYYY');

        // Establece el valor de #ventas_desde
        $("#ventas_desde").val(fechaFormateada);

        // Establece el valor de #ventas_hasta al día actual en el formato 'DD/MM/YYYY'
        $("#ventas_hasta").val(moment().format('DD/MM/YYYY'));

        ventas_desde = $("#ventas_desde").val();
        ventas_hasta = $("#ventas_hasta").val();
        
        ventas_desde = ventas_desde.substr(6,4) + '-' + ventas_desde.substr(3,2) + '-' + ventas_desde.substr(0,2) ;        
        console.log("🚀 ~ file: administrar_ventas.php ~ line 97 ~ $ ~ ventas_desde", ventas_desde)
        ventas_hasta = ventas_hasta.substr(6,4) + '-' + ventas_hasta.substr(3,2) + '-' + ventas_hasta.substr(0,2) ;
        console.log("🚀 ~ file: administrar_ventas.php ~ line 99 ~ $ ~ ventas_hasta", ventas_hasta)

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

    function Autocomplete(tabla){
        /* ======================================================================================
		TRAER LISTADO DE PRODUCTOS PARA INPUT DE AUTOCOMPLETADO
		======================================================================================*/
		$.ajax({
            async: false,
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 6
            },
            dataType: 'json',
            success: function (respuesta) {
                $("#iptCodigoVenta_1").autocomplete({
                    source: respuesta,
                    select: function (event, ui) {
                        CargarProductos(tabla,ui.item.value);
                        $("#iptCodigoVenta_1").val("");
                        $("#iptCodigoVenta_1").focus();
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
                $("#iptCodigoVenta_1").on("keydown", function (event) {
                    if (event.which === 40) {
                        // Flecha abajo, enfocar el siguiente elemento de la lista
                        $(".ui-autocomplete-row:focus").next(".ui-autocomplete-row").focus();
                    } else if (event.which === 38) {
                        // Flecha arriba, enfocar el elemento anterior de la lista
                        $(".ui-autocomplete-row:focus").prev(".ui-autocomplete-row").focus();
                    }
                });

                // Configurar el evento de apertura de la lista para asegurarse de que la opción seleccionada sea visible
                $("#iptCodigoVenta_1").on("autocompleteopen", function (event, ui) {
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

    function Autocomplete_2(tabla){
        /* ======================================================================================
		TRAER LISTADO DE PRODUCTOS PARA INPUT DE AUTOCOMPLETADO
		======================================================================================*/
		$.ajax({
            async: false,
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 6
            },
            dataType: 'json',
            success: function (respuesta) {
                $("#iptCodigoVenta_2").autocomplete({
                    source: respuesta,
                    select: function (event, ui) {
                        CargarProductos(tabla,ui.item.value);
                        $("#iptCodigoVenta_2").val("");
                        $("#iptCodigoVenta_2").focus();
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
                $("#iptCodigoVenta_2").on("keydown", function (event) {
                    if (event.which === 40) {
                        // Flecha abajo, enfocar el siguiente elemento de la lista
                        $(".ui-autocomplete-row:focus").next(".ui-autocomplete-row").focus();
                    } else if (event.which === 38) {
                        // Flecha arriba, enfocar el elemento anterior de la lista
                        $(".ui-autocomplete-row:focus").prev(".ui-autocomplete-row").focus();
                    }
                });

                // Configurar el evento de apertura de la lista para asegurarse de que la opción seleccionada sea visible
                $("#iptCodigoVenta_2").on("autocompleteopen", function (event, ui) {
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

    function CargarBotones(){

        $("#btnCopiar1").on('click', function() {
            
            CopiarTabla(tabla11);

        });

        $("#btnCopiar2").on('click', function() {

            CopiarTabla(tabla21);

        });

        $("#btnCopiar3").on('click', function() {

            CopiarTabla(tabla42);

        });

        $("#btnCopiar4").on('click', function() {

            CopiarTabla(tabla52);

        });


        $('#btnActualizar3').on("click",function(){
            tabla42.ajax.reload();
        });

        $('#btnActualizar4').on("click",function(){
            tabla52.ajax.reload();
        });

        $("#btnImprimir3").on("click",function(){


            console.log(idBoleta1);
            if(idBoleta1 == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var arrIndicador  = [];
                var arrPrecios  = [];
                var seleccion = $("#selDocumentoVenta").val();


                    tabla42.rows().eq(0).each(function(index) {

                        var row = tabla42.row(index);

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

                idBoleta1 = idBoleta1.replace(/^\s+|\s+$/g, '');
                console.log("array 1: " + arr);

                formData.append('nro_boleta', idBoleta1);

                formData.append('accion', 10);

                var confirmador =  $("#iptNombreCliente1").text();

                console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta1+"'");

                $.ajax({
                    url: "ajax/registros.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': idBoleta1
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta: ", respuesta[0]["cliente"]);
                        if(seleccion == 1){window.open('http://192.168.1.41/market-pos/vistas/solicitud_boleta.php?nro_boleta='+idBoleta1 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios);}

                        else if (seleccion ==3){window.open('http://192.168.1.41/market-pos/vistas/solicitud_ticket.php?nro_boleta='+idBoleta1 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios);}

                        else if (seleccion == 2){ console.log("iNDICADOR: "+ arrIndicador);
                                                console.log("PRECIOS: "+ arrPrecios);
                                                // console.log("array 1: " + arr);
                                            }

                        else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/solicitud_nota.php?nro_boleta='+idBoleta1 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                        else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/solicitud_comision.php?nro_boleta='+idBoleta1 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}


                    }
                });
            }
        });

        $("#btnImprimir4").on("click",function(){


            console.log(idBoleta2);
            if(idBoleta2 == 0){
                console.log("es cero");
            } else{

                var formData = new FormData();
                var arr = [];
                var arrIndicador  = [];
                var arrPrecios  = [];
                var seleccion = $("#selDocumentoVenta2").val();


                    tabla52.rows().eq(0).each(function(index) {

                        var row = tabla52.row(index);

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

                idBoleta2 = idBoleta2.replace(/^\s+|\s+$/g, '');
                console.log("array 1: " + arr);

                formData.append('nro_boleta', idBoleta2);

                formData.append('accion', 10);

                var confirmador =  $("#iptNombreCliente2").text();

                console.log("confirmador: ",confirmador.trim() , " Y LA BOLETA :'"+idBoleta2+"'");

                $.ajax({
                    url: "ajax/registros.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'nro_boleta': idBoleta2
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log("respuesta: ", respuesta[0]["cliente"]);
                        if(seleccion == 1){window.open('http://192.168.1.41/market-pos/vistas/solicitud_boleta.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios);}

                        else if (seleccion ==3){window.open('http://192.168.1.41/market-pos/vistas/solicitud_ticket.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios);}

                        else if (seleccion == 2){ console.log("iNDICADOR: "+ arrIndicador);
                                                console.log("PRECIOS: "+ arrPrecios);
                                                // console.log("array 1: " + arr);
                                            }

                        else if (seleccion == 4){window.open('http://192.168.1.41/market-pos/vistas/solicitud_nota.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]) );}

                        else if (seleccion == 5){window.open('http://192.168.1.41/market-pos/vistas/solicitud_comision.php?nro_boleta='+idBoleta2 + '&arrIndicador=' + arrIndicador + '&arrPrecios=' + arrPrecios + '&arrCliente=' + encodeURIComponent(respuesta[0]["cliente"]));}


                    }
                });
            }
        });

        $("#btnRegistrar1").on("click", function(){

            console.log("funciona?????")
            var count = 0;
            var totalVenta = $("#totalVenta1").html();
            var nro_boleta = $("#iptNroVenta1").val();
            var cliente = $("#iptNombreCliente1").text();
            var palabra = cliente;

            tabla11.rows().eq(0).each(function(index) {
                count = count + 1;
            });

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


                            var precio  = tot/parseFloat(data[5]);
                            var prec = parseFloat(precio);

                            var palabras = data[5].match(/[a-zA-Z()]+/g);

                            console.log("palabras:  ",palabras[0]);
                            arr[index] = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + ","+palabras[0];
                        arr2[index] = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                        arrIndicador[index] = data[5];
                        arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                        // console.log("data 5: "+ arrIndicador);
                        // console.log("data 5: "+ arrPrecios);
                        // console.log("array 1: " + arr);
                        console.log("array 2: " + arr);
                        formData.append('arr[]', arr[index]);



                    });

                    var deuda  = parseFloat(totalVenta) - $("#iptEfectivoRecibido").val()  //esto para volver la deuda en un numero positivo

                    formData.append('nro_boleta', nro_boleta);
                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                    formData.append('total_venta', parseFloat(totalVenta));
                    formData.append('seleccion', parseFloat(seleccion));
                    formData.append('deuda', parseFloat(deuda));
                    formData.append('Cliente', palabra);
                    formData.append('Estado', 0);

                    var confirmador =  $("#iptNombreCliente1").text();
                    console.log("confirmador: ",confirmador.trim());


                    $.ajax({
                        url: "ajax/registros.ajax.php",
                        method: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            // console.log("respuesta: ", respuesta);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta,
                                showConfirmButton: false,
                                timer: 1500
                            })

                            tabla11.clear().draw();
                            tabla41.ajax.reload();
                            tabla31.ajax.reload();
                            tabla51.ajax.reload();
                            tabla61.ajax.reload();

                            CargarNroBoleta();

                            // $("#totalVenta").html("");
                            // $("#totalVenta").html("0.00");

                            // $("#totalVentaRegistrarVista1").html("");
                            // $("#totalVentaRegistrarVista1").html("0.00");

                            $("#iptCodigoVenta").val("");
                            $("#content-registrar-tab").click();
                            $("#iptCodigoVenta").focus();
                        }
                    });



            } else {

                Swal.fire({
                    icon: 'warning',
                    title: 'No hay productos en el listado.'
                });

            }

        });

        $("#btnRegistrar2").on("click", function(){ // esto es de entradas


            var count = 0;
            var totalVenta = $("#totalVenta2").html();
            var nro_boleta = $("#iptNroVenta2").val();
            var cliente = $("#iptNombreCliente2").text();
            var palabra = cliente;

            tabla21.rows().eq(0).each(function(index) {
                count = count + 1;
            });

            console.log("se preciono el btn registrar ,",count, " , ", totalVenta, " , ", nro_boleta );

            if (count > 0) {

                var formData = new FormData();
                var arr = [];
                var arr2 = [];
                var arrIndicador  = [];
                var arrPrecios  = [];
                var seleccion = 1;

                    tabla21.rows().eq(0).each(function(index) {

                        var row = tabla21.row(index);

                            var data = row.data();
                            var total  = data[7].replace("S./ ", "");
                            var tot = parseFloat(total);


                            var precio  = tot/parseFloat(data[5]);
                            var prec = parseFloat(precio);

                            var palabras = data[5].match(/[a-zA-Z()]+/g);

                            console.log("palabras:  ",palabras[0]);
                            arr[index] = data[1] + "," + parseFloat(data[5]) + "," + parseFloat(tot).toFixed(2) + "," + parseFloat(prec).toFixed(2) + ","+palabras[0];
                        arr2[index] = data[1] + "," + data[4] + "," + data[7].replace("S./ ", "") + "," + data[5] + "," + parseFloat(prec).toFixed(2);
                        arrIndicador[index] = data[5];
                        arrPrecios[index] = "S./ "+parseFloat(prec).toFixed(2);

                        // console.log("data 5: "+ arrIndicador);
                        // console.log("data 5: "+ arrPrecios);
                        // console.log("array 1: " + arr);
                        console.log("array 2: " + arr);
                        formData.append('arr[]', arr[index]);



                    });

                    var deuda  = parseFloat(totalVenta) - $("#iptEfectivoRecibido").val()  //esto para volver la deuda en un numero positivo

                    formData.append('nro_boleta', nro_boleta);
                    formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                    formData.append('total_venta', parseFloat(totalVenta));
                    formData.append('seleccion', parseFloat(seleccion));
                    formData.append('deuda', parseFloat(deuda));
                    formData.append('Cliente', palabra);
                    formData.append('Estado', 1);

                    var confirmador =  $("#iptNombreCliente2").text();
                    console.log("confirmador: ",confirmador.trim());


                    $.ajax({
                        url: "ajax/registros.ajax.php",
                        method: "POST",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            // console.log("respuesta: ", respuesta);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta,
                                showConfirmButton: false,
                                timer: 1500
                            })

                            tabla21.clear().draw();
                            tabla41.ajax.reload();
                            tabla31.ajax.reload();
                            tabla51.ajax.reload();
                            tabla61.ajax.reload();

                            CargarNroBoleta();

                            // $("#totalVenta").html("");
                            // $("#totalVenta").html("0.00");

                            // $("#totalVentaRegistrarVista1").html("");
                            // $("#totalVentaRegistrarVista1").html("0.00");

                            $("#iptCodigoVenta").val("");
                            $("#content-registrar-tab").click();
                            $("#iptCodigoVenta").focus();
                        }
                    });



            } else {

                Swal.fire({
                    icon: 'warning',
                    title: 'No hay productos en el listado.'
                });

            }

        });

        $('#lstRegistrosImprimir_1 tbody').on('click', '.btnEditarProducto', function(){

            tabla42.clear().draw();

            $("#totalVentaRegistrarVista4").html("");
            $("#totalVentaRegistrarVista4").html("0.00");

            var data = tabla41.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta1 = 0;
                ClienteBoleta1= "";

                $("#card-modulos").css("display", "none");

            }else{

                tabla41.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta1 = data[1];
                ClienteBoleta1 = data[2];

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta1, "- ", ClienteBoleta1);

                $.ajax({
                    async:false,
                    url:"ajax/registros.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 9,
                        id_boleta: idBoleta1
                    },
                    dataType: 'json',
                    success: function (respuesta){


                        enListarProductos2(respuesta);
                    }
                })


            }
        });

        $('#lstRegistrosImprimir_2 tbody').on('click', '.btnEditarProducto', function(){

            tabla52.clear().draw();

            $("#totalVentaRegistrarVista5").html("");
            $("#totalVentaRegistrarVista5").html("0.00");

            var data = tabla51.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idBoleta2 = 0;
                ClienteBoleta2= "";

                $("#card-modulos").css("display", "none");

            }else{

                tabla51.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idBoleta2 = data[1];
                ClienteBoleta2 = data[2];

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +idBoleta2, "- ", ClienteBoleta2);

                $.ajax({
                    async:false,
                    url:"ajax/registros.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 9,
                        id_boleta: idBoleta2
                    },
                    dataType: 'json',
                    success: function (respuesta){


                        enListarProductos3(respuesta);
                    }
                })


            }
        });

        $('#lstProductosVenta_1 tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla11);
        });

        $('#lstProductosVenta_2 tbody').on('click', '.dropdown-item', function() {

            codigo_producto = $(this).attr("codigo");
            var precio_sustituto = parseFloat($(this).attr("precio").replaceAll("S./ ",""))

            precio_venta = precio_sustituto.toFixed(2);
            medida = $(this).attr("medida");
            console.log(medida);
            recalcularMontos(codigo_producto,precio_venta,medida,tabla21);
        });

        $('#lstProductosVenta_1 tbody').on('click', '.btnEliminarproducto', function() {

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

        $('#lstProductosVenta_2 tbody').on('click', '.btnEliminarproducto', function() {

            var data = tabla21.row($(this).parents('tr')).data();


            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[4] + ' " del registro actual? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){
                    tabla21.row($(this).parents('tr')).remove().draw();
                    recalcularTotales();
                }
            })
        });

        $('#lstStock tbody').on('click', '.btnEditarStock', function() {

            var data = tabla61.row($(this).parents('tr')).data();

            console.log(data);

            $("#iptNombreProducto").text(data[1]);
            $("#iptFardos").val(data[2]);
            $("#iptMillares").val(data[4]);
            $("#iptCajas").val(data[3]);
            $("#iptCientos").val(data[5]);
            $("#iptDocenas").val(data[6]);
            $("#iptPaquetes").val(data[7]);
            $("#iptUnidades").val(data[8]);

            $("#mdlCambiarCantidades").modal('show');
        });
        
        $("#btnGuardarStock").on("click", function(){

            var nombre = $("#iptNombreProducto").text();
            var fardos = $("#iptFardos").val();
            var millares = $("#iptMillares").val();
            var cajas = $("#iptCajas").val();
            var cientos = $("#iptCientos").val();
            var docenas = $("#iptDocenas").val();
            var paquetes = $("#iptPaquetes").val();
            var unidades = $("#iptUnidades").val();

            $.ajax({
                    url: "ajax/registros.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 6,
                        'nombre': nombre,
                        'fardos': fardos,
                        'millares': millares,
                        'cajas': cajas,
                        'cientos': cientos,
                        'docenas': docenas,
                        'paquetes': paquetes,
                        'unidades': unidades,
                        
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        Toast.fire({
                            icon: 'success',
                            title: "Actualizado",
                            showConfirmButton: false,
                            timer: 1500
                        })

                        tabla61.ajax.reload()
                    }
                });


        });

    }

    function enListarProductos2(respuesta){
        console.log("enListarProductos(respuesta) : " ,respuesta);

        for(var i = 0; i<respuesta.length;i++){
            var producto  = respuesta[i][1];
            var cantidad  = respuesta[i][2] + " "+ respuesta[i][3];
            var total_numero = respuesta[i][4];
            var precio_numero = respuesta[i][4]/respuesta[i][2];
            total_numero = parseFloat(total_numero);
            precio_numero = parseFloat(precio_numero);

            var total = "S./ "+ parseFloat(total_numero).toFixed(2);
            var precio = "S./ "+ parseFloat(precio_numero).toFixed(2);

            //console.log(producto , cantidad, precio, total)

            CargarProductosPegado3(producto , cantidad, precio, total)
        }
    }

    function enListarProductos3(respuesta){
        console.log("enListarProductos(respuesta) : " ,respuesta);

        for(var i = 0; i<respuesta.length;i++){
            var producto  = respuesta[i][1];
            var cantidad  = respuesta[i][2] + " "+ respuesta[i][3];
            var total_numero = respuesta[i][4];
            var precio_numero = respuesta[i][4]/respuesta[i][2];
            total_numero = parseFloat(total_numero);
            precio_numero = parseFloat(precio_numero);

            var total = "S./ "+ parseFloat(total_numero).toFixed(2);
            var precio = "S./ "+ parseFloat(precio_numero).toFixed(2);

            //console.log(producto , cantidad, precio, total)

            CargarProductosPegado4(producto , cantidad, precio, total)
        }
    }

    function CargarProductosPegado3(producto = "", cantidad, precio, total) {

        //console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        //console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla42.rows().eq(0).each(function(index) {

            var row = tabla42.row(index);
            var data = row.data();
            console.log("data[6]: " , data[1] );
            console.log("data[6]: " , parseInt(codigo_producto) );
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
                            tabla42.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla42.cell(index, 7).data(NuevoPrecio).draw();

                            // RECALCULAMOS TOTALES
                            recalcularTotales4();
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
                    var indicador = " Unidades";

                    if (parseFloat(respuesta['precio_unidad']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_unidad'] + "' medida = ' " + "Unidades" + "' style='cursor:pointer; font-size:14px;'>Unidad: (S./" + 
                        parseFloat(respuesta['precio_unidad']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_unidad_2']).toFixed(2) +")  -  ( 1 unidad ) " + "</a></li>";
                        indicador = " Unidades";
                    }

                    if (parseFloat(respuesta['precio_paquetito']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                         respuesta['precio_paquetito'] + "' medida = ' " + "Paquetitos"  +"' style='cursor:pointer; font-size:14px;'>Paquete: (S./" + 
                         parseFloat(respuesta['precio_paquetito']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_paquetito_2']).toFixed(2) +")  -  ( 1 unidad ) " + ")</a></li>";
                       indicador = " Paquetitos";
                    }

                    if (parseFloat(respuesta['precio_docena']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_docena'] + "' medida = ' " + "Docenas"  +"' style='cursor:pointer; font-size:14px;'>Docena: (S./" +
                         parseFloat(respuesta['precio_docena']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_docena_2']).toFixed(2) + ")  -  ( 12 unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_ciento']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_ciento'] + "' medida = ' " + "Cientos"  +"' style='cursor:pointer; font-size:14px;'>Ciento: (S./" + 
                        parseFloat(respuesta['precio_ciento']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_ciento_2']).toFixed(2) + ")  -  ( 100 unidades ) " + ")</a></li>";
                        indicador = "Cientos";
                    }

                    if (parseFloat(respuesta['precio_millar']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: (S./ " + 
                        parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_millar']+" unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_caja']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: (S./ " + 
                        parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_caja']+" unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_fardo']) > 0) {
                        if(nombreCategoriaSinEspacios === "PAPEL HIGIENICO" || nombreCategoriaSinEspacios === "SERVILLETA" || nombreCategoriaSinEspacios === "TOALLA" || nombreCategoriaSinEspacios === "SORBETE" ){
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                        }
                        
                    }

                    dropdownMenu += "</ul>";

                    if (respuesta['aplica_peso'] == 1) {


                        tabla42.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            cantidad,
                            precio,
                            total,
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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

                        tabla42.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            cantidad,
                            precio,
                            total,
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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

                    recalcularTotales4()

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

    function CargarProductosPegado4(producto = "", cantidad, precio, total) {

        //console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        //console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        tabla52.rows().eq(0).each(function(index) {

            var row = tabla52.row(index);
            var data = row.data();
            console.log("data[6]: " , data[1] );
            console.log("data[6]: " , parseInt(codigo_producto) );
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
                            tabla52.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            tabla52.cell(index, 7).data(NuevoPrecio).draw();

                            // RECALCULAMOS TOTALES
                            recalcularTotales5();
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
                    var indicador = " Unidades";

                    if (parseFloat(respuesta['precio_unidad']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_unidad'] + "' medida = ' " + "Unidades" + "' style='cursor:pointer; font-size:14px;'>Unidad: (S./" + 
                        parseFloat(respuesta['precio_unidad']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_unidad_2']).toFixed(2) +")  -  ( 1 unidad ) " + "</a></li>";
                        indicador = " Unidades";
                    }

                    if (parseFloat(respuesta['precio_paquetito']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                         respuesta['precio_paquetito'] + "' medida = ' " + "Paquetitos"  +"' style='cursor:pointer; font-size:14px;'>Paquete: (S./" + 
                         parseFloat(respuesta['precio_paquetito']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_paquetito_2']).toFixed(2) +")  -  ( 1 unidad ) " + ")</a></li>";
                       indicador = " Paquetitos";
                    }

                    if (parseFloat(respuesta['precio_docena']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_docena'] + "' medida = ' " + "Docenas"  +"' style='cursor:pointer; font-size:14px;'>Docena: (S./" +
                         parseFloat(respuesta['precio_docena']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_docena_2']).toFixed(2) + ")  -  ( 12 unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_ciento']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_ciento'] + "' medida = ' " + "Cientos"  +"' style='cursor:pointer; font-size:14px;'>Ciento: (S./" + 
                        parseFloat(respuesta['precio_ciento']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_ciento_2']).toFixed(2) + ")  -  ( 100 unidades ) " + ")</a></li>";
                        indicador = "Cientos";
                    }

                    if (parseFloat(respuesta['precio_millar']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: (S./ " + 
                        parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_millar']+" unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_caja']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: (S./ " + 
                        parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_caja']+" unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_fardo']) > 0) {
                        if(nombreCategoriaSinEspacios === "PAPEL HIGIENICO" || nombreCategoriaSinEspacios === "SERVILLETA" || nombreCategoriaSinEspacios === "TOALLA" || nombreCategoriaSinEspacios === "SORBETE" ){
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                        }
                        
                    }

                    dropdownMenu += "</ul>";

                    if (respuesta['aplica_peso'] == 1) {


                        tabla52.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            cantidad,
                            precio,
                            total,
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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

                        tabla52.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            cantidad,
                            precio,
                            total,
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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

                    recalcularTotales5()

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


    function recalcularTotales4(){

        var TotalVenta = 0.00;
        //  Recalculamos el total de la venta
        tabla42.rows().eq(0).each(function(index) {
            var row = tabla42.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        $("#totalVentaRegistrarVista4").html("");
        $("#totalVentaRegistrarVista4").html(parseFloat(TotalVenta).toFixed(2));

    }

    function recalcularTotales5(){

        var TotalVenta = 0.00;
        //  Recalculamos el total de la venta
        tabla52.rows().eq(0).each(function(index) {
            var row = tabla52.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        $("#totalVentaRegistrarVista5").html("");
        $("#totalVentaRegistrarVista5").html(parseFloat(TotalVenta).toFixed(2));

    }

    function CopiarTabla(table){
        limpiar_tabla(table);

    }

    function limpiar_tabla(table){
        $.ajax({
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 6,
            },
            dataType: 'json',
            success: function(respuesta) {

                var data = table.data();


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

    function CargarProductos(table,producto = "") {

        console.log("cargarProductos se ejcuta normal" )

        if (producto != "") {
            var codigo_producto = producto;

        } else {
            var codigo_producto = $("#iptCodigoVenta").val();

        }

        // console.log("🚀 ~ file: ventas.php ~ line 674 ~ CargarProductos ~ codigo_producto : ", codigo_producto)

        var producto_repetido = 0;


        table.rows().eq(0).each(function(index) {

            var row = table.row(index);
            var data = row.data();
            console.log("data[6]: " , data[1] );
            console.log("data[6]: " , parseInt(codigo_producto) );
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
                            table.cell(index, 5).data(parseFloat(data[5]) + 1 + ' Und(s)').draw();

                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseFloat(data[5]) * parseFloat(data[6].replace("S./", ""))).toFixed(2);
                            NuevoPrecio = "S./ " + NuevoPrecio;
                            table.cell(index, 7).data(NuevoPrecio).draw();

                            // RECALCULAMOS TOTALES
                            recalcularTotales(table);
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
            url: "ajax/registros.ajax.php",
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
                    var indicador = " Cientos";

                    if (parseFloat(respuesta['precio_unidad']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_unidad'] + "' medida = ' " + "Unidades" + "' style='cursor:pointer; font-size:14px;'>Unidad: (S./" + 
                        parseFloat(respuesta['precio_unidad']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_unidad_2']).toFixed(2) +")  -  ( 1 unidad ) " + "</a></li>";
                        
                    }

                    if (parseFloat(respuesta['precio_paquetito']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " +
                         respuesta['precio_paquetito'] + "' medida = ' " + "Paquetitos"  +"' style='cursor:pointer; font-size:14px;'>Paquete: (S./" + 
                         parseFloat(respuesta['precio_paquetito']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_paquetito_2']).toFixed(2) +")  -  ( 1 unidad ) " + ")</a></li>";
                       
                    }

                    if (parseFloat(respuesta['precio_docena']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_docena'] + "' medida = ' " + "Docenas"  +"' style='cursor:pointer; font-size:14px;'>Docena: (S./" +
                         parseFloat(respuesta['precio_docena']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_docena_2']).toFixed(2) + ")  -  ( 12 unidades ) " +")</a></li>";

                    }

                    if (parseFloat(respuesta['precio_ciento']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_ciento'] + "' medida = ' " + "Cientos"  +"' style='cursor:pointer; font-size:14px;'>Ciento: (S./" + 
                        parseFloat(respuesta['precio_ciento']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_ciento_2']).toFixed(2) + ")  -  ( 100 unidades ) " + ")</a></li>";
                        indicador = "Cientos";
                    }

                    if (parseFloat(respuesta['precio_millar']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_millar'] +"' medida = ' " + "Millares"  + "' style='cursor:pointer; font-size:14px;'>Millar: (S./ " + 
                        parseFloat(respuesta['precio_millar']).toFixed(2) + " - S./ " +  parseFloat(respuesta['precio_millar_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_millar']+" unidades ) " +")</a></li>";
                        indicador = "Millares";
                    }

                    if (parseFloat(respuesta['precio_caja']) > 0) {
                        dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                        respuesta['precio_caja'] + "' medida = ' " + "Cajas"  +"' style='cursor:pointer; font-size:14px;'>Caja: (S./ " + 
                        parseFloat(respuesta['precio_caja']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_caja_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_caja']+" unidades ) " +")</a></li>";
                        indicador = "Caja";
                    }

                    if (parseFloat(respuesta['precio_fardo']) > 0) {
                        if(nombreCategoriaSinEspacios === "PAPEL HIGIENICO" || nombreCategoriaSinEspacios === "SERVILLETA" || nombreCategoriaSinEspacios === "TOALLA" || nombreCategoriaSinEspacios === "SORBETE" ){
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Planchas"  + "'style='cursor:pointer; font-size:14px;'>Plancha: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            indicador = "Planchas";
                        }else{
                            dropdownMenu += "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + 
                            respuesta['precio_fardo'] +"' medida = ' " + "Fardos"  + "'style='cursor:pointer; font-size:14px;'>Fardo: (S./ " + 
                            parseFloat(respuesta['precio_fardo']).toFixed(2) + " - S./ " + parseFloat(respuesta['precio_fardo_2']).toFixed(2) +")  -  ( "+respuesta['cantidad_fardo']+" unidades ) " +")</a></li>";
                            indicador = "Fardos";
                        }
                        
                    }

                    dropdownMenu += "</ul>";

                    if (respuesta['aplica_peso'] == 1) {


                        table.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            respuesta['cantidad'] + " " + indicador,
                            respuesta['precio_venta'],


                            respuesta['total'],
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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

                        table.row.add([
                            itemProducto,
                            respuesta['codigo_producto'],
                            respuesta['id_categoria'],
                            respuesta['nombre_categoria'],
                            respuesta['descripcion_producto'],
                            respuesta['cantidad'] + " " + indicador,
                            respuesta['precio_venta'],
                            respuesta['total'],
                            "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
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
                }

                //Seleccion_CantidadInicial(contador,dropdownMenu);


                contador +=1;
            }
        });



    }/* FIN CargarProductos */

    function recalcularTotales(){

        var TotalVenta = 0.00;

        var TotalVenta2 = 0.00;
        //  Recalculamos el total de la venta
        tabla11.rows().eq(0).each(function(index) {
            var row = tabla11.row(index);

            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data[7].replace("S./ ", ""));

        });

        tabla21.rows().eq(0).each(function(index) {
            var row = tabla21.row(index);

            var data = row.data();
            TotalVenta2 = parseFloat(TotalVenta2) + parseFloat(data[7].replace("S./ ", ""));

        });

        // TotalVenta = parseFloat(TotalVenta).toFixed(2);

        // $("#totalVenta1").html("");
        // $("#totalVenta1").html(parseFloat(TotalVenta).toFixed(2));

        // $("#totalVenta2").html("");
        // $("#totalVenta2").html(parseFloat(TotalVenta2).toFixed(2));

        // $("#totalVentaRegistrarVista1").html("");
        // $("#totalVentaRegistrarVista1").html(parseFloat(TotalVenta).toFixed(2));

        $("#iptCodigoVenta").val("");

    }

    function CargarNroBoleta() {

        $.ajax({
            async: false,
            url: "ajax/registros.ajax.php",
            method: "POST",
            data: {
                'accion': 1
            },
            dataType: 'json',
            success: function(respuesta) {
                // console.log("serie de la boleta : " + respuesta["serie_boleta"]);
                serie_boleta = respuesta["serie_boleta"];
                nro_boleta = respuesta["nro_venta"];

                $("#iptNroSerie1").val(serie_boleta);
                $("#iptNroVenta1").val(nro_boleta);
                $("#iptNroSerie2").val(serie_boleta);
                $("#iptNroVenta2").val(nro_boleta);
            }
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

    }

</script>

