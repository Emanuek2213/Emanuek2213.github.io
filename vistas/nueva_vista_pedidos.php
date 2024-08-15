
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

                    <li class="breadcrumb-item active">Ventas</li>

                    <li class="breadcrumb-item active">Pedidos</li>
                    

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->


<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-pedidos-creditos" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-estados-tab" data-toggle="pill" href="#content-estados" role="tab" aria-controls="content-estados" aria-selected="false">
                    <i class=""></i>Estado de Pedidos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-creditos-tab" data-toggle="pill" href="#content-creditos" role="tab" aria-controls="content-creditos" aria-selected="false">Elegir Creditos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-ver-creditos-tab" data-toggle="pill" href="#content-ver-creditos" role="tab" aria-controls="content-ver-creditos" aria-selected="false">Pagos al credito</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-pedidos-creditos">

            <div class="tab-pane fade active show mt-4 px-4" id="content-estados" role="tabpanel" aria-labelledby="content-estados-tab">

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
                                                    <input type="text" id="iptBuscarCliente" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptBuscarCliente">Cliente</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        

                                        <div class="col-md-6 mb-3 rounded-3 text-right">
                                            

                                            <button class="btn btn-warning" id="btnActualizarPedidos">
                                                <i class="fas fa-bolt"> Refrescar [F4]</i>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstPedidos" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th >Opciones</th>
                                                        <th >Nro Venta</th>
                                                        <th >Cliente</th>
                                                        <th >Fecha</th>
                                                        <th >Monto</th>    
                                                        <th >Envio</th>
                                                        <th >Vuelta</th>
                                                        <th >Aprox</th>
                                                        <th >Vuelto</th>
                                                        <th >Mensajero</th>
                                                        <th >Progreso</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-creditos" role="tabpanel" aria-labelledby="content-creditos-tab">
                
                <div class="container-fluid">

                    <h4>Registrar al Credito</h4>
                    <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-8 mb-3">

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptNombreClienteDeuda" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptNombreClienteDeuda">Cliente</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">


                                                </div>

                                            </div>
                    
                                        </div>

                                        <div class="col-md-4 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnActualizarCredito">
                                                <i class="fas fa-bolt"> Refrescar [F4]</i>
                                            </button>

                                            <button class="btn btn-danger" id="btnVolverDeudas">
                                                <i class="fas fa-check"> Registrar Deuda</i>
                                            </button>

                                            
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstConvertirDeudas" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th >Elegir</th>
                                                    <th >Nro Venta</th>
                                                    <th >Cliente</th>
                                                    <th >Fecha</th>
                                                    <th >Monto</th>    
                                                    <th >Envio</th>
                                                    <th >Vuelta</th>
                                                    <th >Aprox</th>
                                                    <th >Vuelto</th>
                                                    <th >Mensajero</th>
                                                    <th >Progreso</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-ver-creditos" role="tabpanel" aria-labelledby="content-ver-creditos-tab">

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
                                                    <input type="text" id="iptBuscarClienteAlCredito" class="form-control" data-index="2" autocomplete="off">
                                                    <label for="iptBuscarClienteAlCredito">Cliente</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        

                                        <div class="col-md-6 mb-3 rounded-3 text-right">
                                            

                                            <button class="btn btn-warning" id="btnActualizarPedidosAlCreditos">
                                                <i class="fas fa-bolt"> Refrescar [F4]</i>
                                            </button>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstPedidosAlCredito" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th >Opciones</th>
                                                        <th >Nro Venta</th>
                                                        <th >Cliente</th>
                                                        <th >Total Venta</th>    
                                                        <th >Deuda Actual</th>
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

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="mdlRegistrarTiempo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-md" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Registrar Tiempo</h6>
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

                                    <div class="col-md-12">

                                        <h4><label id="iptTotalVentaModal">TOTAL VENTA : </label></h4>

                                        <h6><label id="iptPuntajeModal"> Puntos : 0 </label></h6>

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

                                        <label for="iptMensajero">Mensajero</label>

                                        <div class="row">

                                            <div class="col-md-8">

                                                <input type="text" min="0" name="iptMensajero" id="iptMensajero"
                                                    class="form-control form-control-sm" placeholder="Sin Mensajero">

                                            </div>

                                            <div class="col-md-4">

                                                <button class="btn btn-info btn-sm btn-block" id="btnGuardarMensajero">
                                                    <i class="fas fa-edit"></i> Guardar</i>
                                                </button>

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-3">

                                    <label for="hora_salida">Hora de Salida</label>
                                                        
                                    <div class="col-md-4">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_salida">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_salida">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-warning btn-sm btn-block" id="btnHE_salida">
                                            <i class="fas fa-clock"></i></i>
                                        </button>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-success btn-sm btn-block" id="btnGuardarSalida">
                                            <i class="fas fa-file"></i></i>
                                        </button>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="hora_estimada">Hora de Regreso (estimado)</label>
                                                        
                                    <div class="col-md-4">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_estimada">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_estimada">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-warning btn-sm btn-block" id="btnHE_estimado">
                                            <i class="fas fa-clock"></i></i>
                                        </button>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-success btn-sm btn-block" id="btnGuardarEstimado">
                                            <i class="fas fa-file"></i></i>
                                        </button>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="hora_regreso">Hora de Regreso (real)</label>
                                                        
                                    <div class="col-md-4">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_regreso">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_regreso">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-warning btn-sm btn-block" id="btnHE_regreso">
                                            <i class="fas fa-clock"></i></i>
                                        </button>

                                    </div>

                                    <div class="col-md-2">

                                        <button class="btn btn-success btn-sm btn-block" id="btnGuardarRegreso">
                                            <i class="fas fa-file"></i></i>
                                        </button>

                                    </div>

                                </div>

                                <div class="row mb-3" id="divTotalCobro">

                                    <div class="col-md-12">

                                        <label for="iptTotalCobro">Total a Cobrar</label>

                                        <div class="row">

                                            <div class="col-md-8">

                                                <input type="text" min="0" name="iptTotalCobro" id="iptTotalCobro"
                                                    class="form-control form-control-sm" placeholder="S/. 0.00">

                                            </div>

                                            <div class="col-md-4">

                                                <button class="btn btn-info btn-sm btn-block" id="btnCancelarDeuda">
                                                    <i class="fas fa-money-bill"></i> Cancelar Deuda</i>
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

    </div>

</div>

<div class="modal fade" id="mdlIngresarCreditos" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-md" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h6 class="modal-title" id="titulo_modal_stock"> Agregar Nuevo Pago</h6>
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

                                    <div class="col-md-12">

                                        <h6><label id="iptPuntajeModal_2"> Puntos : 0 </label></h6>

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

                                        <label for="iptReceptor">Mensajero que enviaron a cobrar</label>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <input type="text" min="0" name="iptReceptor" id="iptReceptor"
                                                    class="form-control form-control-sm" placeholder="Sin Empleados">

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptCuenta">Cuenta que recibira el dinero</label>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <input type="text" min="0" name="iptCuenta" id="iptCuenta"
                                                    class="form-control form-control-sm" placeholder="Si es efectivo colocar : EFECTIVO">

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-3">

                                    <label for="hora_2_salida">Hora de Salida</label>
                                                        
                                    <div class="col-md-7">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_2_salida">

                                    </div>

                                    <div class="col-md-5">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_2_hora_salida">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="hora_2_estimada">Hora de Regreso (estimado)</label>
                                                        
                                    <div class="col-md-7">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_2_estimada">

                                    </div>

                                    <div class="col-md-5">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_2_hora_estimada">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="hora_2_regreso">Hora de Regreso (real)</label>
                                                        
                                    <div class="col-md-7">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_2_regreso">

                                    </div>

                                    <div class="col-md-5">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_2_hora_regreso">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptTotal2Cobro">Total a Cobrar</label>

                                        <div class="row">

                                            <div class="col-md-12">

                                                <input type="text" min="0" name="iptTotal2Cobro" id="iptTotal2Cobro"
                                                    class="form-control form-control-sm" placeholder="S/. 0.00">

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <div class="col-md-12">

                                                <button class="btn btn-info btn-sm btn-block" id="btnGuardarDetalles">
                                                    <i class="fas fa-notes-medical"></i> Registrar nuevo pagos</i>
                                                </button>

                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>   

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <div class="row">

                                            <div class="col-md-12">

                                                <button class="btn btn-warning btn-sm btn-block" id="btnVerPagosAcumulados">
                                                    <i class="fas fa-file"></i> Ver Registros De Pagos</i>
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

    </div>

</div>

<div class="modal fade" id="mdlListaCreditosPedidos" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

            <div class="modal-header bg-gray py-2">

                <h5 class="modal-title" id="titulo_mdlListaCreditosPedidos"> Listado de Pagos de la venta</h5>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
                
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        
                        
                    </div>

                    

                    <div class="col-md-6 mb-3 rounded-3 text-right">
                        

                        <button class="btn btn-warning" id="btnActualizarPagosAlCredito">
                            <i class="fas fa-bolt"> Refrescar</i>
                        </button>

                    </div>

                </div>

                <div class="row">

                    <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                    <div class="col-md-12">

                        <table id="lstPagosAlCredito" class="display nowrap table-striped w-100 shadow ">
                            <thead class="bg-gray text-left fs-6">
                                <tr>
                                    <th >Editar</th>
                                    <th >Nro Venta</th>
                                    <th >Cliente</th>
                                    <th >Total Venta</th>    
                                    <th >Deuda Actual</th>
                                    <th >Pago</th>
                                    <th >Nueva Deuda</th>
                                    <th >id</th>
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


<script>

    ////// VARIABLES GLOBALES //////

    var tabla11, tabla21, tabla31;

    var nro_boleta, total_venta;

    var isActionInProgress = false;

    var deuda,nro_boleta_2;

    //variables para la formula 1 de pedidos

    var var1,var2,var3;

    var data_pedido, data_credito;

    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000
                });


    $(document).ready(function(){

        $('#iptBuscarCliente').focus();

        Cargar_tables();

        Cargar_Botones_Tablas();

        CargarAjaxEmpleados();

        Cargar_Botones_Normal();

        $('#hora_salida, #hora_estimada, #hora_regreso, #hora_2_salida, #hora_2_estimada, #hora_2_regreso').inputmask('h:s t', {
            'placeholder': 'hh:mm AM/PM',
            'alias': 'datetime',
            'inputFormat': 'h:s t',
        });

        $('#hora_salida, #hora_estimada, #hora_regreso, #hora_2_salida, #hora_2_estimada, #hora_2_regreso').click(function() {
            $(this).select();
        });

        $('#hora_salida, #hora_estimada, #hora_regreso, #iptTotalCobro').on('change blur', function() {
            CalcularPuntajePedidos();
        });

        $('#hora_2_salida, #hora_2_estimada, #hora_2_regreso, #iptTotal2Cobro').on('change blur', function() {
            CalcularPuntajeCreditos();
        });

        $('#iptTotalCobro, #iptTotal2Cobro').focus(function() {

            // Obtener el texto actual del campo
            var texto = $(this).val();

            // Remover el símbolo "S/. " y espacios en blanco
            var numero = texto.replace('S/. ', '').trim();

            // Mostrar solo el número en el campo
            $(this).val(numero);

            // Seleccionar todo el texto en el campo de entrada
            $(this).select();
        });

        $('#iptTotalCobro, #iptTotal2Cobro').blur(function() {
            // Obtener el valor del campo
            var valor = $(this).val();

            // Convertir el valor a un número con 2 decimales
            var numero = parseFloat(valor).toFixed(2);

            // Agregar el símbolo "S/. " al valor y actualizar el campo
            $(this).val('S/. ' + numero);
        });

        $('#iptTotalCobro, #iptTotal2Cobro').keypress(function(e) {
            if (e.which === 13) { // Si se presiona Enter
                // Triggers the blur event
                $(this).blur();
            }
        });

        $('#mdlRegistrarTiempo').on('shown.bs.modal', function () {
            $('#iptMensajero').focus();
        });

        $('#content-estados-tab').on('shown.bs.tab', function (e) {
            $('#iptBuscarCliente').focus();
        });

        $('#content-creditos-tab').on('shown.bs.tab', function (e) {
            $('#iptNombreClienteDeuda').focus();
        });

        $('#content-ver-creditos-tab').on('shown.bs.tab', function (e) {
            $('#iptBuscarClienteAlCredito').focus();
        });

        // Navegación entre campos con la tecla Enter
        $('#mdlRegistrarTiempo').on('keydown', 'input, select', function(e) {
            // Verificar si la tecla presionada es Enter
            if (e.which === 13) {
                e.preventDefault(); // Prevenir el comportamiento por defecto de Enter

                // Obtener todos los campos de entrada y select dentro del modal
                var $inputs = $(this).closest('.modal-content').find('input, select');
                var currentIndex = $inputs.index(this); // Obtener el índice del campo actual

                // Encontrar el siguiente campo de entrada o select que no esté deshabilitado
                var $nextElement = $inputs.eq(currentIndex + 1);
                while ($nextElement.length) {
                    if (!$nextElement.prop('disabled')) {
                        $nextElement.focus(); // Enfocar el siguiente elemento
                        break;
                    }
                    $nextElement = $inputs.eq(currentIndex + 2); // Ir al siguiente elemento
                }

                if (!$nextElement.length) {
                    $('#iptMensajero').focus();
                }
            }
        });

        // Enfocar el primer elemento del modal al abrirlo
        $('#mdlIngresarCreditos').on('shown.bs.modal', function () {
            $(this).find('input, select').eq(0).focus();
        });

        // Navegación entre campos con la tecla Enter
        $('#mdlIngresarCreditos').on('keydown', 'input, select', function(e) {
            // Verificar si la tecla presionada es Enter
            if (e.which === 13) {
                e.preventDefault(); // Prevenir el comportamiento por defecto de Enter

                // Obtener todos los campos de entrada y select dentro del modal
                var $inputs = $(this).closest('.modal-content').find('input, select');
                var currentIndex = $inputs.index(this); // Obtener el índice del campo actual

                // Encontrar el siguiente campo de entrada o select que no esté deshabilitado
                var $nextElement = $inputs.eq(currentIndex + 1);
                while ($nextElement.length) {
                    if (!$nextElement.prop('disabled')) {
                        $nextElement.focus(); // Enfocar el siguiente elemento
                        break;
                    }
                    $nextElement = $inputs.eq(currentIndex + 2); // Ir al siguiente elemento
                }

                if (!$nextElement.length) {
                    $('#iptReceptor').focus();
                }
            }
        });
        
        $("#iptBuscarCliente").keyup(function() {
            tabla11.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptNombreClienteDeuda").keyup(function() {
            tabla21.column($(this).data('index')).search(this.value).draw();
        });

        $("#iptBuscarClienteAlCredito").keyup(function() {
            tabla31.column($(this).data('index')).search(this.value).draw();
        });

        $(document).on('keydown', function(event) {

            //EVENTOS DE LAS FLECHAS 

            if (event.keyCode === 40 && $('#content-estados:visible').length > 0 && !$('#mdlRegistrarTiempo').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstPedidos tbody tr:visible');

                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstPedidos tbody tr.selected');

                        $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstPedidos tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-estados:visible').length > 0 && !$('#mdlRegistrarTiempo').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstPedidos tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstPedidos tbody tr.selected');

                        $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstPedidos tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-creditos:visible').length > 0 ) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstConvertirDeudas tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstConvertirDeudas tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstConvertirDeudas tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-creditos:visible').length > 0 ) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstConvertirDeudas tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstConvertirDeudas tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstConvertirDeudas tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-ver-creditos:visible').length > 0 && !$('#mdlIngresarCreditos').is(':visible')) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstPedidosAlCredito tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{

                        // Get the currently selected row (if any)
                        var $selectedRow = $('#lstPedidosAlCredito tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // If no row is selected, select the first row
                            $('#lstPedidosAlCredito tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-ver-creditos:visible').length > 0 && !$('#mdlIngresarCreditos').is(':visible')) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    var $visibleRows = $('#lstPedidosAlCredito tbody tr:visible');
                    
                    // Verificar si hay filas visibles en la tabla
                    if ($visibleRows.find('td:nth-child(3)').text() === "") {
                        console.log('No hay filas visibles en la tabla.');
                        
                    }else{
                        // Obtener la fila actualmente seleccionada (si hay alguna)
                        var $selectedRow = $('#lstPedidosAlCredito tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay ninguna fila seleccionada, seleccionar la última fila
                            $('#lstPedidosAlCredito tbody tr:last').addClass('selected');
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

            if (event.keyCode === 13 && $('#content-estados:visible').length > 0 && !$('#mdlRegistrarTiempo').is(':visible')) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstPedidos tbody tr.selected');

                    if ($selectedRow.length > 0) {

                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla11.row($selectedRow).data();
                        
                        if ($selectedRow.parents('tr').hasClass('selected')) {

                            $selectedRow.parents('tr').removeClass('selected');

                            $('#modulos').jstree("deselect_all", false);

                            $("#select_modulos option").remove();

                            $("#card-modulos").css("display", "none");

                            $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                        }else{

                            $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                            $selectedRow.parents('tr').addClass('selected');

                            $("#mdlRegistrarTiempo").modal("show");
                            
                            $selectedRow.find('i').removeClass('far fa-clock').addClass('fas fa-clock');

                            console.log(data)
            
                            var iptTotalVentaModal = "TOTAL VENTA : S/. " + parseFloat(data[4]).toFixed(2)

                            var iptDeuda = "S/. " + parseFloat(data["deuda"]).toFixed(2)

                            var iptMensajero = data["mensajero"]

                            nro_boleta = data["nro_boleta"];

                            total_venta = data["deuda"];

                            var hora_salida = VolverHora(data[5])

                            var hora_estimada = VolverHora(data[6])

                            var hora_regreso = VolverHora(data[7])

                            var sel_PM_hora_salida = obtenerValorAdicional(data[5])

                            var sel_PM_hora_estimada = obtenerValorAdicional(data[6])

                            var sel_PM_hora_regreso = obtenerValorAdicional(data[7])

                            $("#hora_salida").val(hora_salida);
                            $("#hora_estimada").val(hora_estimada);
                            $("#hora_regreso").val(hora_regreso);

                            $("#sel_PM_hora_salida").val(sel_PM_hora_salida);
                            $("#sel_PM_hora_estimada").val(sel_PM_hora_estimada);
                            $("#sel_PM_hora_regreso").val(sel_PM_hora_regreso);

                            $("#iptMensajero").val(iptMensajero);

                            $("#iptTotalCobro").val(iptDeuda);

                            $("#iptTotalVentaModal").text(iptTotalVentaModal);

                            if(data["Estado"] == 3){
                                document.getElementById('divTotalCobro').style.display = 'none';
                            }else{
                                document.getElementById('divTotalCobro').style.display = 'block';
                            }
                            
                        }

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            };

            if (event.keyCode === 13 && $('#content-creditos:visible').length > 0) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstConvertirDeudas tbody tr.selected');

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

            if (event.keyCode === 13 && $('#content-ver-creditos:visible').length > 0 && !$('#mdlIngresarCreditos').is(':visible')) { // Tecla Enter

                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstPedidosAlCredito tbody tr.selected');

                    if ($selectedRow.length > 0) {

                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tabla31.row($selectedRow).data();
                        
                        if ($selectedRow.parents('tr').hasClass('selected')) {

                            $selectedRow.parents('tr').removeClass('selected');

                            $('#modulos').jstree("deselect_all", false);

                            $("#select_modulos option").remove();

                            $("#card-modulos").css("display", "none");


                        }else{

                            $selectedRow.parents('tr').addClass('selected');

                            $("#mdlIngresarCreditos").modal("show");

                            console.log(data)

                            var hora = obtenerHoraExacta();

                            var hora_salida = VolverHora(hora)

                            var hora_estimada = VolverHora(hora)

                            var hora_regreso = VolverHora(hora)

                            var sel_PM_hora_salida = obtenerValorAdicional(hora)

                            var sel_PM_hora_estimada = obtenerValorAdicional(hora)

                            var sel_PM_hora_regreso = obtenerValorAdicional(hora)

                            $("#hora_2_salida").val(hora_salida);
                            $("#hora_2_estimada").val(hora_estimada);
                            $("#hora_2_regreso").val(hora_regreso);

                            $("#sel_PM_2_hora_salida").val(sel_PM_hora_salida);
                            $("#sel_PM_2_hora_estimada").val(sel_PM_hora_estimada);
                            $("#sel_PM_2_hora_regreso").val(sel_PM_hora_regreso);

                            
                        }

                        
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }

            };

            //EVENTO F2

            if (event.keyCode === 113 && !$('#mdlRegistrarTiempo').is(':visible') && !$('#mdlIngresarCreditos').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {
                        // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;

                        const activeElement = $('#tabs-asignar-pedidos-creditos .nav-link.active');
                        const nextElement = activeElement.parent().next().find('.nav-link');
                        console.log(nextElement)

                        if (nextElement.length) {
                            activeElement.removeClass('active').attr('aria-selected', 'false');
                            nextElement.addClass('active').attr('aria-selected', 'true').tab('show');
                            const tabId = nextElement.attr('href');
                            console.log(tabId)

                            $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                            $(tabId).addClass('show active').attr('aria-selected', 'true');

                            if (tabId === '#content-estados') {
                                $('#iptBuscarCliente').focus();
                            }else if (tabId === '#content-creditos') {
                                $('#iptNombreClienteDeuda').focus();
                            }else if (tabId === '#content-ver-creditos') {
                                $('#iptBuscarClienteAlCredito').focus();
                            }

                        } else {
                            // Cambiar directamente al tab con ID "content-estados-tab"
                            const siguienteNav = $('#content-estados-tab');

                            activeElement.removeClass('active').attr('aria-selected', 'false');
                            siguienteNav.addClass('active').attr('aria-selected', 'true').tab('show');

                            const tabId = siguienteNav.attr('href');
                            $('.tab-pane').removeClass('show active').attr('aria-selected', 'false');
                            $(tabId).addClass('show active').attr('aria-selected', 'true');

                            if (tabId === '#content-estados') {
                                $('#iptBuscarCliente').focus();
                            }else if (tabId === '#content-creditos') {
                                $('#iptNombreClienteDeuda').focus();
                            }else if (tabId === '#content-ver-creditos') {
                                $('#iptBuscarClienteAlCredito').focus();
                            }
                        }

                        
                        setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 115 && !$('#mdlRegistrarTiempo').is(':visible') && !$('#mdlIngresarCreditos').is(':visible')) {

                event.preventDefault()
                if (!isActionInProgress) {
                    
                    tabla11.ajax.reload();
                    tabla21.ajax.reload();
                    tabla31.ajax.reload();

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

        });

    });

</script>

<script>

    function Cargar_tables(){

        tabla11 = $('#lstPedidos').DataTable({
            columnDefs: [

                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnRegistrarHora text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='far fa-clock fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: [1,2], // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        return "<strong>" + data + "</strong>" ;
                    }
                },
                {
                    targets: 3, // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir la fecha en el formato deseado (dd Mmm)
                            var fecha = new Date(data);
                            var opcionesFecha = { day: '2-digit', month: 'short' };
                            var fechaFormateada = fecha.toLocaleDateString('es-ES', opcionesFecha);
                            
                            return  fechaFormateada ;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: [4,8], // Columna 3
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
                    targets: [5,6,7], // Columna 7
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
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[10]);
                        ////console.log("este es el valor del row data 8 : ", valor)
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(255, 255, 255, 0.5)';  // Blanco con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 2) {
                            color = 'rgba(255, 165, 0, 0.5)';    // Naranja con opacidad 0.7
                        } else if (valor == 3) {
                            color = 'rgba(220, 20, 60, 0.5)';      // Rojo con opacidad 0.7
                        } else if (valor == 4) {
                            color = 'rgba(128, 128, 128, 0.5)';  // Gris oscuro con opacidad 0.7
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
                    }
                },
                

            ],
            ajax: {
                url: "ajax/pedidos.ajax.php",
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
                ajustarHeadersDataTables($('#lstPedidos'));
            }
        });

        tabla21 = $('#lstConvertirDeudas').DataTable({
            columnDefs: [

                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionar text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='far fa-circle fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: [1,2], // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        return "<strong>" + data + "</strong>" ;
                    }
                },
                {
                    targets: 3, // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Convertir la fecha en el formato deseado (dd Mmm)
                            var fecha = new Date(data);
                            var opcionesFecha = { day: '2-digit', month: 'short' };
                            var fechaFormateada = fecha.toLocaleDateString('es-ES', opcionesFecha);
                            
                            return  fechaFormateada ;
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: [4,8], // Columna 3
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
                    targets: [5,6,7], // Columna 7
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
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[10]);
                        ////console.log("este es el valor del row data 8 : ", valor)
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(255, 255, 255, 0.5)';  // Blanco con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 2) {
                            color = 'rgba(255, 165, 0, 0.5)';    // Naranja con opacidad 0.7
                        } else if (valor == 3) {
                            color = 'rgba(220, 20, 60, 0.5)';      // Rojo con opacidad 0.7
                        } else if (valor == 4) {
                            color = 'rgba(128, 128, 128, 0.5)';  // Gris oscuro con opacidad 0.7
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
                    }
                },
                

            ],
            ajax: {
                url: "ajax/pedidos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //2:LISTAR PEDIDOS PARA HACERLO DEUDA
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
                ajustarHeadersDataTables($('#lstConvertirDeudas'));
            }
        });
        
        tabla31 = $('#lstPedidosAlCredito').DataTable({
            columnDefs: [

                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnRegistrarPago text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-money-bill fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: [1,2], // Columna 7 (la indexación comienza desde 0)
                    render: function(data, type, row, meta) {
                        return "<strong>" + data + "</strong>" ;
                    }
                },
                {
                    targets: [3,4], // Columna 3
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
                    targets: 5, // Columna 9
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
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[5]);
                        ////console.log("este es el valor del row data 8 : ", valor)
                        var color;

                        // Asignar colores según el orden indicado
                        if (valor == 0) {
                            color = 'rgba(255, 255, 255, 0.5)';  // Blanco con opacidad 0.7
                        } else if (valor == 1) {
                            color = 'rgba(154, 205, 50, 0.5)';   // Verde con opacidad 0.7
                        } else if (valor == 2) {
                            color = 'rgba(255, 165, 0, 0.5)';    // Naranja con opacidad 0.7
                        } else if (valor == 3) {
                            color = 'rgba(220, 20, 60, 0.5)';      // Rojo con opacidad 0.7
                        } else if (valor == 4) {
                            color = 'rgba(128, 128, 128, 0.5)';  // Gris oscuro con opacidad 0.7
                        }

                        // Aplicar el color al fondo de la fila
                        $(td).parent().css('background', color);
                    }
                },
                

            ],
            ajax: {
                url: "ajax/pedidos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 8 //1:LISTAR PEDIDOS
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
                ajustarHeadersDataTables($('#lstPedidosAlCredito'));
            }
        });

        tabla41 = $('#lstPagosAlCredito').DataTable({
            columnDefs: [

                {
                    targets: 7,
                    visible: false,
                },

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
                ajustarHeadersDataTables($('#lstPagosAlCredito'));
            }
        });

    }

    function Cargar_Botones_Normal(){

        $("#btnVolverDeudas").click(function(){

            var nro_ultimo;

            $('#lstConvertirDeudas tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla21.row($(this)).data();
                nro_ultimo = rowData[1]; // Selecciona la primera columna (columna 0)
                console.log("nro_ultimo : " + nro_ultimo);
            });

            $('#lstConvertirDeudas tbody tr').filter(function() {
                return $(this).find('i').hasClass('fas fa-circle');
            }).each(function() {
                var rowData = tabla21.row($(this)).data();
                var nro_boleta = rowData[1]; // Selecciona la primera columna (columna 0)
                console.log('Información columna 1:', nro_boleta);

                console.log("nro_ultimo : " + nro_ultimo + " - nro_boleta : "+ nro_boleta)

                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 46,
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
                            tabla31.ajax.reload();

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

        }); 

        $("#btnActualizarCredito").click(function(){

            tabla21.ajax.reload();

        });

        $("#btnActualizarPedidos").click(function(){

            tabla11.ajax.reload();

        });  

        $("#btnActualizarPedidosAlCreditos").click(function(){

            tabla31.ajax.reload();

        });

        $("#btnHE_salida").click(function(){

            const horaExacta = obtenerHoraExacta();
            var sel_PM_hora_salida = obtenerValorAdicional(horaExacta)
            var hora_salida = VolverHora(horaExacta)

            $("#hora_salida").val(hora_salida);
            $("#sel_PM_hora_salida").val(sel_PM_hora_salida);
                
        }); 

        $("#btnHE_estimado").click(function(){

            const horaExacta = obtenerHoraExacta();
            var sel_PM_hora_estimada = obtenerValorAdicional(horaExacta)
            var hora_estimada = VolverHora(horaExacta)  

            $("#hora_estimada").val(hora_estimada);
            $("#sel_PM_hora_estimada").val(sel_PM_hora_estimada);

        }); 

        $("#btnHE_regreso").click(function(){

            const horaExacta = obtenerHoraExacta();
            var sel_PM_hora_regreso = obtenerValorAdicional(horaExacta)
            var hora_regreso = VolverHora(horaExacta)
            $("#hora_regreso").val(hora_regreso);
            $("#sel_PM_hora_regreso").val(sel_PM_hora_regreso);

        }); 

        $("#btnGuardarSalida").click(function(){

            var sel_PM_hora_salida = $("#sel_PM_hora_salida").val();
            var hora_inicio = $("#hora_salida").val();

            hora_inicio = RegresarHora(sel_PM_hora_salida,hora_inicio);

            console.log(hora_inicio);

            GuardarPuntaje();

            $.ajax({
                url: "ajax/pedidos.ajax.php",
                method: "POST",
                data: {
                    'accion': 3,
                    'hora_inicio':hora_inicio,
                    'nro_boleta' : nro_boleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                    tabla11.ajax.reload();

                }
            })
                
        }); 

        $("#btnGuardarEstimado").click(function(){

            var sel_PM_hora_estimada = $("#sel_PM_hora_estimada").val();
            var hora_estimada = $("#hora_estimada").val();

            hora_estimada = RegresarHora(sel_PM_hora_estimada,hora_estimada);

            console.log(hora_estimada);

            GuardarPuntaje();

            $.ajax({
                url: "ajax/pedidos.ajax.php",
                method: "POST",
                data: {
                    'accion': 4,
                    'hora_estimada':hora_estimada,
                    'nro_boleta' : nro_boleta,
                },
                dataType: 'json',
                success: function(respuesta) {
                    
                    tabla11.ajax.reload();

                }
            })

        }); 

        $("#btnGuardarRegreso").click(function(){

            var sel_PM_hora_regreso = $("#sel_PM_hora_regreso").val();
            var hora_regreso = $("#hora_regreso").val();

            hora_regreso = RegresarHora(sel_PM_hora_regreso,hora_regreso);

            console.log(hora_regreso);

            GuardarPuntaje();

            $.ajax({
                url: "ajax/pedidos.ajax.php",
                method: "POST",
                data: {
                    'accion': 5,
                    'hora_regreso':hora_regreso,
                    'nro_boleta' : nro_boleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                    tabla11.ajax.reload();

                    if(respuesta === "ok"){
                        Toast.fire({
                            icon: 'success',
                            title: " Actualizado",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                }
            })

        }); 
        
        $("#btnGuardarMensajero").click(function(){
            
            var mensajero = $("#iptMensajero").val();

            console.log(mensajero);

            $.ajax({
                url: "ajax/pedidos.ajax.php",
                method: "POST",
                data: {
                    'accion': 6,
                    'mensajero':mensajero,
                    'nro_boleta' : nro_boleta,
                },
                dataType: 'json',
                success: function(respuesta) {

                    tabla11.ajax.reload();

                    if(respuesta === "ok"){
                        Toast.fire({
                            icon: 'success',
                            title: " Actualizado",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                }
            }) 

        });
        
        $("#btnCancelarDeuda").click(function(){

            var iptTotalCobro = $("#iptTotalCobro").val();
            iptTotalCobro = parseFloat(iptTotalCobro.replace("S/. ", ""));

            console.log("iptTotalCobro : " + iptTotalCobro + "total_venta : " + total_venta);

            var vuelto = iptTotalCobro - total_venta; 

            if(vuelto < 0){

                Toast.fire({
                    icon: 'error',
                    title: " El monto tiene que ser mayor que la deuda",
                    showConfirmButton: false,
                    timer: 1500
                });

                return 0;

            }else{

                $.ajax({
                    url: "ajax/pedidos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 7,
                        'vuelto': vuelto,
                        'nro_boleta' : nro_boleta,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        tabla11.ajax.reload();

                        if(respuesta === "ok"){
                            Toast.fire({
                                icon: 'success',
                                title: " Actualizado",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }

                    }
                })

            }
            
        });

        $("#btnGuardarDetalles").click(function(){

            console.log("nro_boleta_2 : " , nro_boleta_2);

            var empleado = $("#iptReceptor").val();

            if(empleado === ""){
                empleado = "SIN EMPLEADO"
            }

            console.log("empleado : " , empleado);
            
            console.log("deuda : " , deuda);

            var monto_letra = $("#iptTotal2Cobro").val();

            // Crear una expresión regular para encontrar números decimales
            var regex = /(\d+(\.\d+)?)/;

            // Buscar el número en el texto usando la expresión regular
            var match = regex.exec(monto_letra);

            // Verificar si se encontró un número y mostrarlo
            if (match && match[1]) {
                var monto = parseFloat(match[1]);

                if(monto < 0){
                    monto = -999;
                }

            } else {
                monto = -999;
            }

            console.log("monto : " , monto);

            var sel_PM_hora_salida = $("#sel_PM_2_hora_salida").val();
            var hora_inicio = $("#hora_2_salida").val();

            hora_inicio = RegresarHora(sel_PM_hora_salida,hora_inicio);

            console.log("hora_inicio : " , hora_inicio);

            var sel_PM_hora_estimada = $("#sel_PM_2_hora_estimada").val();
            var hora_estimada = $("#hora_2_estimada").val();

            hora_estimada = RegresarHora(sel_PM_hora_estimada,hora_estimada);

            console.log("hora_estimada : " , hora_estimada);

            var sel_PM_hora_regreso = $("#sel_PM_2_hora_regreso").val();
            var hora_regreso = $("#hora_2_regreso").val();

            hora_regreso = RegresarHora(sel_PM_hora_regreso,hora_regreso);

            console.log("hora_regreso : " , hora_regreso); 

            var cuenta = $("#iptCuenta").val();

            if(cuenta === ""){
                cuenta = "EFECTIVO";
            }

            console.log("cuenta : " , cuenta);

            

            if(monto == -999){

                Toast.fire({
                    icon: 'error',
                    title: " Error, porfavor coloque una cantidad de dinero valido",
                    showConfirmButton: false,
                    timer: 1500
                });
                
            }else{

                nueva_deuda = deuda - monto;

                if(nueva_deuda < 0){
                    nueva_deuda = 0;
                }

                var texto = $("#iptPuntajeModal_2").text();

                var puntos = texto.match(/\d+/)[0];

                console.log(puntos);

                $.ajax({
                    url: "ajax/pedidos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 9,
                        'nro_boleta' : nro_boleta_2,
                        'empleado' : empleado,
                        'deuda' : deuda,
                        'monto' : monto,
                        'hora_salida' : hora_inicio,
                        'hora_regreso' : hora_regreso,
                        'hora_estimado' : hora_estimada,
                        'cuenta' : cuenta,
                        'nueva_deuda': nueva_deuda,
                        'puntos':puntos,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            tabla31.ajax.reload();
                            tabla11.ajax.reload();

                            Toast.fire({
                                icon: 'success',
                                title: " Actualizado",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }

                    }
                }) 

            }

        });

        $("#btnVerPagosAcumulados").click(function(){

            console.log("nro_boleta_2 : " , nro_boleta_2);

            $("#mdlIngresarCreditos").modal("hide");

            $("#mdlListaCreditosPedidos").modal("show");

            AgregarDatosModal(nro_boleta_2);

        });


    }
 
    function Cargar_Botones_Tablas(){

        $("#lstPedidos tbody").on('click','.btnRegistrarHora', function(){

            var data = tabla11.row($(this).parents('tr')).data();
        
            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

            }else{

                $('#lstPedidos i.fas.fa-clock').removeClass('fas fa-clock').addClass('far fa-clock');

                tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                $("#mdlRegistrarTiempo").modal("show");
                
                $(this).find('i').removeClass('far fa-clock').addClass('fas fa-clock');

                console.log(data)

                data_pedido = data;
 
                var iptTotalVentaModal = "TOTAL VENTA : S/. " + parseFloat(data["total_venta"]).toFixed(2)

                var iptDeuda = "S/. " + parseFloat(data["deuda"]).toFixed(2)

                var iptMensajero = data["mensajero"]

                nro_boleta = data["nro_boleta"];

                total_venta = data["deuda"];

                var hora_salida = VolverHora(data[5])

                var hora_estimada = VolverHora(data[6])

                var hora_regreso = VolverHora(data[7])

                var sel_PM_hora_salida = obtenerValorAdicional(data[5])

                var sel_PM_hora_estimada = obtenerValorAdicional(data[6])

                var sel_PM_hora_regreso = obtenerValorAdicional(data[7])

                $("#hora_salida").val(hora_salida);
                $("#hora_estimada").val(hora_estimada);
                $("#hora_regreso").val(hora_regreso);

                $("#sel_PM_hora_salida").val(sel_PM_hora_salida);
                $("#sel_PM_hora_estimada").val(sel_PM_hora_estimada);
                $("#sel_PM_hora_regreso").val(sel_PM_hora_regreso);

                $("#iptMensajero").val(iptMensajero);

                $("#iptTotalCobro").val(iptDeuda);

                $("#iptTotalVentaModal").text(iptTotalVentaModal);

                CalcularPuntajePedidos()

                if(data["Estado"] == 3){
                    document.getElementById('divTotalCobro').style.display = 'none';
                }else{
                    document.getElementById('divTotalCobro').style.display = 'block';
                }
                
            }

        });

        $('#lstConvertirDeudas tbody').on('click', '.btnSeleccionar', function() {

            var data = tabla21.row($(this).closest('tr')).data();
            
            if ($(this).closest('tr').hasClass('selected')) {

                $(this).closest('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $(this).find('i').removeClass('fas fa-circle').addClass('far fa-circle');

            } else {

                tabla21.$('tr.selected').removeClass('selected');

                $(this).closest('tr').addClass('selected');
                // Cambiar el ícono a fas fa-circle
                $(this).find('i').removeClass('far fa-circle').addClass('fas fa-circle');
            }
        });

        $("#lstPedidosAlCredito tbody").on('click','.btnRegistrarPago', function(){

            var data = tabla31.row($(this).parents('tr')).data();
        
            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");


            }else{

                tabla31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                $("#mdlIngresarCreditos").modal("show");

                console.log(data)

                data_credito = data;

                deuda = data["deuda"];

                nro_boleta_2 = data["nro_boleta"];

                var hora = obtenerHoraExacta();

                var hora_salida = VolverHora(hora)

                var hora_estimada = VolverHora(hora)

                var hora_regreso = VolverHora(hora)

                var sel_PM_hora_salida = obtenerValorAdicional(hora)

                var sel_PM_hora_estimada = obtenerValorAdicional(hora)

                var sel_PM_hora_regreso = obtenerValorAdicional(hora)

                $("#hora_2_salida").val(hora_salida);
                $("#hora_2_estimada").val(hora_estimada);
                $("#hora_2_regreso").val(hora_regreso);

                $("#sel_PM_2_hora_salida").val(sel_PM_hora_salida);
                $("#sel_PM_2_hora_estimada").val(sel_PM_hora_estimada);
                $("#sel_PM_2_hora_regreso").val(sel_PM_hora_regreso);
                
                $("#iptTotal2Cobro").val("S/. 0.00");
                

                
            }

        });

    }

    function GuardarPuntaje(){

        var texto = $("#iptPuntajeModal").text();

        var puntos = texto.match(/\d+/)[0];

        console.log(puntos);

        $.ajax({
            url: "ajax/pedidos.ajax.php",
            method: "POST",
            data: {
                'accion': 11,
                'puntos':puntos,
                'nro_boleta' : nro_boleta,
            },
            dataType: 'json',
            success: function(respuesta) {

                tabla11.ajax.reload();

            }
        })

    }

    function RegresarHora(periodo, hora_estimada) {

        // console.log(periodo);
        // Obtener la fecha y hora actual
        var fecha_venta = data_pedido["fecha_venta"];

        var fecha_actual = convertirAFecha(fecha_venta);

        console.log(fecha_actual)

        // Dividir la hora_estimada en horas y minutos
        var [horas, minutos] = hora_estimada.split(':').map(Number);

        // Convertir a formato de 24 horas si es PM
        if (periodo === "PM") {
            horas = (horas % 12) + 12;
        }

        // Establecer la hora estimada
        fecha_actual.setHours(horas);
        fecha_actual.setMinutes(minutos);
        fecha_actual.setSeconds(0); // Establecer los segundos en 0

        // console.log(fecha_actual)

        var año = fecha_actual.getFullYear();
        var mes = String(fecha_actual.getMonth() + 1).padStart(2, '0');
        var dia = String(fecha_actual.getDate()).padStart(2, '0');
        var horas = String(fecha_actual.getHours()).padStart(2, '0');
        var minutos = String(fecha_actual.getMinutes()).padStart(2, '0');
        var segundos = String(fecha_actual.getSeconds()).padStart(2, '0');

        // Crear la cadena formateada
        var cadenaFormateada = `${año}-${mes}-${dia} ${horas}:${minutos}:${segundos}`;

        return cadenaFormateada;
    }

    function convertirAFecha(fechaString) {
        // Dividir la cadena en partes
        var partes = fechaString.split(/[- :]/);

        // Crear el objeto Date con las partes de la cadena
        var fecha = new Date(partes[0], partes[1] - 1, partes[2], partes[3], partes[4], partes[5]);

        return fecha;
    }

    function CalcularPuntajePedidos(){

        var total_venta = data_pedido["total_venta"];

        // console.log("CalcularPuntajePedidos TOTAL VENTA: " + total_venta);

        var hora_salida = $("#hora_salida").val() + " " +  $("#sel_PM_hora_salida").val();
        var hora_estimada = $("#hora_estimada").val() + " " +  $("#sel_PM_hora_estimada").val();
        var hora_regreso = $("#hora_regreso").val() + " " + $("#sel_PM_hora_regreso").val();

        var horaSalidaDate = convertirHora(hora_salida);
        var horaEstimadaDate = convertirHora(hora_estimada);
        var horaRegresoDate = convertirHora(hora_regreso);

        // console.log("CalcularPuntajePedidos horaEstimadaDate: " + horaEstimadaDate);

        // console.log("CalcularPuntajePedidos horaRegresoDate: " + horaRegresoDate);

        var diferenciaEnMS = horaEstimadaDate - horaRegresoDate ;
        var diferenciaEnMinutos = Math.floor(diferenciaEnMS / (1000 * 60));

        var diferenciaEnMS_total = horaEstimadaDate - horaSalidaDate;
        var diferenciaEnMinutos_total = Math.floor(diferenciaEnMS_total / (1000 * 60));

        // console.log("La diferencia en minutos es:", diferenciaEnMinutos);

        // console.log("La diferencia en minutos total es:", diferenciaEnMinutos_total);

        if(diferenciaEnMinutos_total <= 0){
            diferenciaEnMinutos_total = 1;
        }

        var Puntaje = 5*(diferenciaEnMinutos * total_venta)/diferenciaEnMinutos_total

        // console.log("CalcularPuntajePedidos Puntaje: " + Puntaje);

        CambiarPuntaje(Puntaje)

    }

    function CalcularPuntajeCreditos(){

        var Puntaje;

        var total_venta = data_credito["total_venta"];

        var total_cobro = $("#iptTotal2Cobro").val();

        var total_cobro_numerico = parseFloat(total_cobro.replace("S/. ", ''));

        console.log("CalcularPuntajePedidos TOTAL VENTA: " + total_venta);

        console.log("CalcularPuntajePedidos total_cobro_numerico: " + total_cobro_numerico);

        var hora_salida = $("#hora_2_salida").val() + " " +  $("#sel_PM_2_hora_salida").val();
        var hora_estimada = $("#hora_2_estimada").val() + " " +  $("#sel_PM_2_hora_estimada").val();
        var hora_regreso = $("#hora_2_regreso").val() + " " + $("#sel_PM_2_hora_regreso").val();

        var horaSalidaDate = convertirHora(hora_salida);
        var horaEstimadaDate = convertirHora(hora_estimada);
        var horaRegresoDate = convertirHora(hora_regreso);

        var diferenciaEnMS = horaEstimadaDate - horaRegresoDate ;
        var diferenciaEnMinutos = Math.floor(diferenciaEnMS / (1000 * 60));

        var diferenciaEnMS_total = horaEstimadaDate - horaSalidaDate;
        var diferenciaEnMinutos_total = Math.floor(diferenciaEnMS_total / (1000 * 60));

        console.log("La diferencia en minutos es:", diferenciaEnMinutos);

        console.log("La diferencia en minutos total es:", diferenciaEnMinutos_total);

        if(diferenciaEnMinutos_total <= 0){ 
            diferenciaEnMinutos_total = 1;
        }

        if(total_venta < total_cobro_numerico){

            total_cobro_numerico = total_venta;

        }

        if(diferenciaEnMinutos_total < diferenciaEnMinutos){
            diferenciaEnMinutos = diferenciaEnMinutos_total;
        }

        if(total_venta <= 0){

            Puntaje = 0;

        }else{

            Puntaje = (300 * diferenciaEnMinutos * total_cobro_numerico)/(diferenciaEnMinutos_total * total_venta)

        }

        console.log("CalcularPuntajePedidos Puntaje: " + Puntaje);

        CambiarPuntaje2_(Puntaje)

    }

    function CambiarPuntaje(Puntaje) {

        if(Puntaje < 0){
        
            $("#iptPuntajeModal").text("Puntos : " + parseInt(Puntaje) + " Puntos. (la persona se atrazo)")
        
        }else{

            $("#iptPuntajeModal").text("Puntos : " + parseInt(Puntaje) + " Puntos.")

        }

    }

    function CambiarPuntaje2_(Puntaje){

        if(Puntaje < 0){
        
            $("#iptPuntajeModal_2").text("Puntos : " + parseInt(Puntaje) + " Puntos. (la persona se atrazo)")
        
        }else{

            $("#iptPuntajeModal_2").text("Puntos : " + parseInt(Puntaje) + " Puntos.")

        }

    }

    function convertirHora(hora) {
        var partes = hora.split(":");
        var horaNum = parseInt(partes[0]);
        var minutos = parseInt(partes[1].split(" ")[0]);
        var periodo = partes[1].split(" ")[1];

        // Ajustar la hora si es PM
        if (periodo === "PM" && horaNum !== 12) {
            horaNum += 12;
        }

        // Crear el objeto Date con la hora especificada
        var fecha = new Date();
        fecha.setHours(horaNum);
        fecha.setMinutes(minutos);
        fecha.setSeconds(0);

        return fecha;
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

    function CargarAjaxEmpleados(){
        $('#mdlRegistrarTiempo').on('shown.bs.modal', function () {

            $.ajax({
                async: false,
                url: "ajax/empleados.ajax.php",
                method: "POST",
                data: {
                    'accion': 20
                },
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptMensajero").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {
                            console.log(ui.item.value)
                            $("#iptMensajero").val(ui.item.value)
                            return false;
                        },
                    }).data("ui-autocomplete")._renderItem = function (ul, item) {
                        return $("<li class='ui-autocomplete-row'></li>")
                            .data("item.autocomplete", item)
                            .append(item.label)
                            .appendTo(ul);
                    };

                    // Ajustar el z-index después de que se haya creado el autocompletar
                    $(".ui-autocomplete").css("z-index", "9999");
                },
            });

        });

        $('#mdlIngresarCreditos').on('shown.bs.modal', function () {

            $.ajax({
                async: false,
                url: "ajax/empleados.ajax.php",
                method: "POST",
                data: {
                    'accion': 20
                },
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptReceptor").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {
                            console.log(ui.item.value)
                            $("#iptReceptor").val(ui.item.value)
                            return false;
                        },
                    }).data("ui-autocomplete")._renderItem = function (ul, item) {
                        return $("<li class='ui-autocomplete-row'></li>")
                            .data("item.autocomplete", item)
                            .append(item.label)
                            .appendTo(ul);
                    };

                    // Ajustar el z-index después de que se haya creado el autocompletar
                    $(".ui-autocomplete").css("z-index", "9999");
                },
            });

        });

    }

    function VerificarEstados(){
        $.ajax({
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 25,
                },
                dataType: 'json',
                success: function(respuesta) {
                    //console.log(respuesta);
                    if(respuesta[0][0] > 0){
                        $("#content-estados-tab").addClass("text-danger");
                        $("#content-estados-tab i").addClass("fas fa-exclamation-circle me-2");
                    }else{
                        $("#content-estados-tab").removeClass("text-danger");
                        $("#content-estados-tab i").removeClass("fas fa-exclamation-circle me-2");
                    }
                    
                }
        })
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

    function AgregarDatosModal(nro_boleta){
        $.ajax({
            url: "ajax/pedidos.ajax.php",
            method: "POST",
            data: {
                'accion': 10,
                'nro_boleta': nro_boleta,
            },
            dataType: 'json',
            success: function(respuesta) {
                
                console.log(respuesta);

                tabla41.clear().draw();

                for(var i = 0; i < respuesta.length; i++){

                    nueva_deuda = parseFloat(respuesta[i]['deuda']) - parseFloat(respuesta[i]['monto'])

                    if(nueva_deuda < 0 ){
                        nueva_deuda = 0;
                    }

                    tabla41.row.add([
                        "<center>" +
                                        "<span class='btnEditarPagoPedido text-info px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                        "<i class='fas fa-edit fs-5'> </i> " +
                                        "</span>" +

                                        "</div>" +
                        "</center>",
                        respuesta[i]['nro_boleta'],
                        respuesta[i]['empleado'],
                        "S/. " + parseFloat(respuesta[i]['total_venta']).toFixed(2),
                        "S/. " + parseFloat(respuesta[i]['deuda']).toFixed(2),
                        "S/. " + parseFloat(respuesta[i]['monto']).toFixed(2),
                        "S/. " + parseFloat(nueva_deuda).toFixed(2),
                        respuesta[i]['id_credito'],
                        
                    ]).draw();

                }

                
                
            }
        })
    }

</script>