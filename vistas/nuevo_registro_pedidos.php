
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Estado de Pedidos</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Ventas</li>

                    <li class="breadcrumb-item active">Estado de Pedidos</li>


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
                <a class="nav-link active" id="content-estados-tab" data-toggle="pill" href="#content-estados" role="tab" aria-controls="content-estados" aria-selected="false">
                    <i class=""></i>Estado de Registros
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-deudas-tab" data-toggle="pill" href="#content-deudas" role="tab" aria-controls="content-deudas" aria-selected="false">Ver Deudas</a>
            </li>


        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-estados" role="tabpanel" aria-labelledby="content-estados-tab">

                <h4>Estados de Reporte</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-6 mb-3 rounded-3 text-right">

                                            <div class="d-none d-md-flex col-md-12 ">
                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptBuscarCliente" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptBuscarCliente">Razon Comercial</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6 mb-3 rounded-3 text-right">


                                            <button class="btn btn-warning" id="btnActualizar4">
                                                <i class="fas fa-bolt"> Refrescar</i>
                                            </button>

                                            <!-- <button class="btn btn-info" id="btnSeleccionMultiple">
                                                <i class="far fa-check-square"> Seleccion Multiple</i>
                                            </button>

                                            <button class="btn btn-success" id="btnRegistrar">
                                                <i class="fas fa-check"> Registrar</i>
                                            </button> -->


                                        </div>

                                    </div>

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosEstados" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Fecha</th> <!-- PIDEME UN DATO MAS Y TE JURO QUE TE PEGO -->
                                                        <th >Cliente</th>
                                                        <th >Deuda total</th>
                                                        <th >Deuda actual</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-deudas" role="tabpanel" aria-labelledby="content-deudas-tab">

                <h4>Ver Deudas x Cliente</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->
                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            <h4>CLIENTE: <label id = "iptNombreClienteDeuda_0"> VARIOS </label></h4>

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptNombreClienteDeuda" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptNombreClienteDeuda">Razon Comercial</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">


                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnActualizar6">
                                                <i class="fas fa-bolt"> Refrescar</i>
                                            </button>


                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstRegistrosEstadosCliente" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                        <th ></th>
                                                        <th >Bol</th>
                                                        <th >Fecha</th> <!-- PIDEME UN DATO MAS Y TE JURO QUE TE PEGO -->
                                                        <th >Cliente</th>
                                                        <th >D.Total</th>
                                                        <th >D.Actual</th>
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


<!-- AQUI ESTARIAN LOS MODALES -->

<div class="modal fade" id="mdlRegistrarTiempo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock"> Registrar Tiempo</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 col-lg-6">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <!-- <div class="row">

                                        <div class="col-12 col-lg-12">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnVerPagosVenta">
                                                <i class='fas fa-search fs-5'></i> Registro de Pagos
                                            </button>
                                        </div>

                                    </div> -->

                                    <div class="row">

                                        <label class="col-form-label" for="selCategoriaReg">
                                            <i class="fas fa-time-alt fs-6"></i>
                                            <span class="small"> Tiempo</span><span class="text-danger">*</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selTiempo">
                                                <option value="0"> No Modificar</option>
                                                <option value="1"> Salida</option>
                                                <option value="2"> Regreso</option>
                                            </select>
                                        </div>

                                        <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                            Debe Seleccione una opcion
                                        </span>

                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptPersona">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Persona</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-sm" id="iptPersona">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptHora">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Hora Actual</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHora"
                                            placeholder="Ingrese una hora valida">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-warning btn-sm btn-block" id="btn3m_1"><strong>- 5 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-warning btn-sm btn-block" id="btn5m_1"><strong>- 1 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-warning btn-sm btn-block" id="btn10m_1"><strong>+ 1 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-warning btn-sm btn-block" id="btn30m_1"><strong>+ 5 min</strong></button>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptHoraEstimada">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Hora Estimada de regreso</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHoraEstimada"
                                            placeholder="Ingrese una hora valida">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn3m"><strong>+3 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn5m"><strong>+5 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn10m"><strong>+10 min</strong></button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn30m"><strong>+30 min</strong></button>
                                        </div>

                                    </div>

                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-6">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <div class="row">

                                        <div class="col-12 col-lg-12">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnCredito">Credito</button>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptDia">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Dia</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat=" dd/mm/yyyy" id="iptDia" placeholder="Ingrese una hora valida">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptDeuda">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Deuda Actual</span>
                                        </label>

                                        <!-- Deuda Actual -->
                                        <div class="input-group mb-3">
                                            <!-- <i class="fas fa-money-bill fs-6"></i> -->
                                            <input type="text" class="form-control form-control-sm" id="iptDeuda">
                                        </div>
                                    </div>

                                    <div class="row">

                                        <label class="col-form-label" for="iptAmortiguacion">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Dinero dado por el cliente</span>
                                        </label>

                                        <!-- Amortiguación -->
                                        <div class="input-group mb-3">
                                            <!-- <i class="fas fa-money-bill fs-6"></i> -->
                                            <input type="text" class="form-control form-control-sm" id="iptAmortiguacion">
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-secondary btn-sm btn-block" id="btn10">+ S./50</button>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn50">+ S./50</button>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn100">+ S./100</button>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-6">

                                            <label class="col-form-label" for="iptVuelto">
                                                <i class="fas fa-money-bill fs-6"></i>
                                                <span class="small"> Vuelto a entregar</span>
                                            </label>

                                            <!-- Amortiguación -->
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-sm" id="iptVuelto">
                                            </div>

                                        </div>

                                        <div class="col-12 col-lg-6">

                                            <label class="col-form-label" for="iptNuevaDeuda">
                                                <i class="fas fa-money-bill fs-6"></i>
                                                <span class="small"> Nueva Deuda</span>
                                            </label>

                                            <!-- Amortiguación -->
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-sm" id="iptNuevaDeuda">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12" id = "modal_tipos_pago">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-12 col-lg-6">

                                        <label class="col-form-label" for="selTipoPago">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Tipo de Pago</span>
                                        </label>

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="selTipoPago">
                                            <option value="Opc"> Elegir Opcion</option>
                                            <option value="Yape"> Yape</option>
                                            <option value="Plin"> Plin</option>
                                            <option value="Efectivo"> Efectivo</option>
                                            <option value="Transferencia"> Transferencia</option>
                                        </select>

                                    </div>

                                    <div class="col-12 col-lg-6">

                                        <label class="col-form-label" for="iptPersonaDinero">
                                            <i class="fas fa-barcode fs-6"></i>
                                            <span class="small"> Persona o Cuenta que recibe el dinero</span>
                                        </label>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control form-control-sm" id="iptPersonaDinero">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="col-12 col-lg-6">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                    <button type="button" class="btn btn-danger btn-sm btn-block" data-bs-dismiss="modal" id="btnVolverRegistro">Eliminar Del Registro</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-6">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <button type="button" class="btn btn-secondary btn-sm btn-block" id="btnGuardarTiempo">Guardar tiempo</button>
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

<div class="modal fade" id="modalPagosVenta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Pagos de la venta</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" id="btnCerrarModalPagos" data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row align-items-center">

                    <div class="col-12 col-lg-4">
                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-header bg-gray py-2 ">
                                <h3 class="card-title fw-bold">Datos de Envío</h3>    
                            </div>

                            <div class="card-body p-3">
                                
                                <div class="row mb-2">
                                    <label class="col-form-label" for="iptNombreMensajero">
                                        <i class="fas fa-user fs-6"></i>
                                        <span class="small"> Nombre del Mensajero</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" id="iptNombreMensajero">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <label class="col-form-label" for="iptHoraSalidaNuevo">
                                                <i class="fas fa-clock fs-6"></i>
                                                <span class="small"> Hora de Salida</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="iptHoraSalidaNuevo">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnmenos1_1">- 1 min</button>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnmas1_1">+ 1 min</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <label class="col-form-label" for="iptHoraRegresoNuevo">
                                                <i class="fas fa-clock fs-6"></i>
                                                <span class="small"> Hora de Regreso</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="iptHoraRegresoNuevo">
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnmenos1_2">- 1 min</button>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btnmas1_2">+ 1 min</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label" for="iptFechaVenta">
                                        <i class="fas fa-calendar fs-6"></i>
                                        <span class="small">Fecha de venta</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" id="iptFechaVenta">
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <button type="button" class="btn btn-success btn-sm btn-block" id="btnGuardarCambiosEnvios">GUARDAR CAMBIOS ENVIO</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-header bg-gray py-2 ">
                                <h3 class="card-title fw-bold">Registro de Pagos</h3>    
                            </div>

                            <div class="card-body p-3">

                                <div class="row mb-3">
                                    
                                    <table id="tblDatosPagosBoleta" class="table table-bordered table-striped w-100">
                                        <thead class="bg-gray text-left fs-6" class="bg-gray text-left fs-6">
                                            <tr>
                                                <th>Id</th>
                                                <th>Boleta</th>
                                                <th>Monto</th>
                                                <th>Tipo de Pago</th>
                                                <th>Cuenta o Persona</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row align-items-center">

                    <div class="col-12 col-lg-12">
                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-header bg-gray py-2 ">
                                <h3 class="card-title fw-bold">Registar Nuevo Pago</h3>    
                            </div>

                            <div class="card-body p-3">
                                
                                <div class="row align-items-center">

                                    <div class="col-12 col-lg-6">

                                        <div class="row mb-3">

                                            <div class="col-12 col-lg-12">

                                                <label class="col-form-label" for="selTipoPago_2">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small"> Tipo de Pago</span>
                                                </label>

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="selTipoPago_2">
                                                    <option value="Opc"> Elegir Opcion</option>
                                                    <option value="Yape"> Yape</option>
                                                    <option value="Plin"> Plin</option>
                                                    <option value="Efectivo"> Efectivo</option>
                                                    <option value="Transferencia"> Transferencia</option>
                                                </select>

                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-form-label" for="iptFechaPago">
                                                <i class="fas fa-calendar fs-6"></i>
                                                <span class="small">Dia a Registrar</span>
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="iptFechaPago">
                                            </div>
                                        </div>              

                                        <div class="row mb-3">
                                            <label class="col-form-label" for="iptHoraSalida">
                                                <i class="fas fa-user fs-6"></i>
                                                <span class="small">Persona o Cuenta que recibe el dinero</span>
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="iptHoraSalida">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-6">
                                        
                                        <div class="row mb-3">

                                            <label class="col-form-label" for="iptDineroIngreso">
                                                <i class="fas fa-money-bill fs-6"></i>
                                                <span class="small"> Dinero a Ingresar</span>
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="iptDineroIngreso">
                                            </div>
                                            
                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-12 col-lg-4">
                                                <button type="button" class="btn btn-secondary btn-sm btn-block" id="btnNecesario">+ S./50</button>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <button type="button" class="btn btn-info btn-sm btn-block" id="btnMultiplo50">+ S./50</button>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <button type="button" class="btn btn-info btn-sm btn-block" id="btnMultiplo100">+ S./100</button>
                                            </div>

                                        </div>
                                        
                                        <div class="row mb-3">

                                            <div class="col-12 col-lg-6">
                                                <label class="col-form-label" for="iptNuevaDeuda_2">
                                                    <i class="fas fa-money-bill fs-6"></i>
                                                    <span class="small">Nueva Deuda</span>
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="iptNuevaDeuda_2">
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <label class="col-form-label" for="iptVueloDar">
                                                    <i class="fas fa-money-bill fs-6"></i>
                                                    <span class="small">Vuelto a dar</span>
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" id="iptVueloDar">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row mb-3">

                                            <div class="col-12 col-lg-12">
                                                <button type="button" class="btn btn-success btn-sm btn-block" id="btnIngresarNuevoPago">INGRESAR NUEVO PAGO</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
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

<script>
    var tabla51,tabla61,tabla71;
    var MultipleSeleccion = 0;
    var Credito = 0;
    var Estado = 0;
    var Aumento = 0, Aumento2 = 0;
    var idBoleta_registro;
    var hora_salida_registro;
    var hora_llegada_registro;
    var iptHoraEstimada, iptHora; 
    var deuda;
    $(document).ready(function(){

        Cargar_tables();
        Cargar_Botones_Tables();
        Cargar_Botones_Modal();
        Botones_exteriores();
        cargarClientesAjax();
    })

</script>

<script>

    function Cargar_tables(){

        document.getElementById('iptAmortiguacion').addEventListener('input', function() {calcularVuelto(); calcularNuevaDeuda();});

        document.getElementById('iptDineroIngreso').addEventListener('input', function() {calcular2(deuda,"iptNuevaDeuda_2");calcular2(deuda,"iptVueloDar")});

        tabla51 =$('#lstRegistrosEstados').DataTable({
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
                            "<i class='far fa-clock fs-5'></i>" +
                            "</span>" +

                            "<span class='btnSeleccion text-success px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-circle fs-5'></i>" +
                            "</span>" +


                            "</center>"
                    }
                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[11]);
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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [6, 7, 8], // Columnas 4, 5 y 6
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
                    targets: 9, // Columna 8
                    render: function (data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Obtener las fechas de las columnas 6 y 7
                            var fechaInicio = new Date(row[6]);
                            var fechaFin = new Date(row[7]);

                            // Calcular la diferencia de tiempo en milisegundos
                            var diferenciaEnMilisegundos = fechaFin - fechaInicio;

                            // Convertir la diferencia a minutos
                            var diferenciaEnMinutos = diferenciaEnMilisegundos / (1000 * 60);

                            // Si la diferencia es negativa, establecerla como 0
                            if (diferenciaEnMinutos < 0) {
                                diferenciaEnMinutos = 0;
                            }

                            // Ajustar el valor para que muestre el resto de la división por 1440 minutos
                            var minutosPorDia = 1440;
                            var minutosAjustados = diferenciaEnMinutos % minutosPorDia;

                            // Mostrar la diferencia en minutos en la columna
                            return minutosAjustados.toFixed(2) + ' min';
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: 12, // Columna 8
                    render: function (data, type, row, meta) {
                        return "S/. " + parseFloat(data).toFixed(2);
                    }
                },

                {
                    targets: 11, // Columna 9
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
                    targets: 13, // Columna 11
                    visible:false,
                },
                {
                    targets: 14,
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
                    targets: 15,
                    visible: false,
                }


            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
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
                toggleBotonesCirculos()
            }
        });

        $('#lstRegistrosEstados').on('init.dt', function () {
            // Desplazar el scroll horizontal al inicio de la tabla
            $('#lstRegistrosEstados').parent('.dataTables_scrollBody').scrollLeft(0);
        });

        tabla61 =$('#lstRegistrosEstadosCliente').DataTable({
            columnDefs: [
                {
                    targets: [0, 5,6], // Columnas 0 y 4
                    className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                },
                {
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnAsignarHoraDeuda text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-clock fs-5'></i>" +
                            "</span>" +
                            
                            "</center>"
                    }
                },

                {
                    targets: 0,
                    createdCell: function(td, cellData, rowData, row, col) {
                        var valor = parseFloat(rowData[11]);
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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [6, 7, 8], // Columnas 4, 5 y 6
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
                    targets: 9, // Columna 8
                    render: function (data, type, row, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Obtener las fechas de las columnas 6 y 7
                            var fechaInicio = new Date(row[6]);
                            var fechaFin = new Date(row[7]);

                            // Calcular la diferencia de tiempo en milisegundos
                            var diferenciaEnMilisegundos = fechaFin - fechaInicio;

                            // Convertir la diferencia a minutos
                            var diferenciaEnMinutos = diferenciaEnMilisegundos / (1000 * 60);

                            // Si la diferencia es negativa, establecerla como 0
                            if (diferenciaEnMinutos < 0) {
                                diferenciaEnMinutos = 0;
                            }

                            // Ajustar el valor para que muestre el resto de la división por 1440 minutos
                            var minutosPorDia = 1440;
                            var minutosAjustados = diferenciaEnMinutos % minutosPorDia;

                            // Mostrar la diferencia en minutos en la columna
                            return minutosAjustados.toFixed(2) + ' min';
                        } else {
                            // Devolver el valor original para otros casos
                            return data;
                        }
                    }
                },
                {
                    targets: 12, // Columna 8
                    render: function (data, type, row, meta) {
                        return "S/. " + parseFloat(data).toFixed(2);
                    }
                },

                {
                    targets: 11, // Columna 9
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
                        var fechaColumna5 = new Date(row[13]);
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
                    targets: 13, // Columna 11
                    visible:false,
                },
                {
                    targets: 14,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var icono = "";
                        if (data == 1) {
                            icono = "<i class='fas fa-check-circle text-success fs-5'></i>"; // ícono de check
                        } else if (data == 0) {
                            icono = "<i class='far fa-times-circle text-danger fs-5'></i>"; // ícono de X
                        }
                        return "<center>" +
                            "<span class='btnAsignarHora23 text-primary px-1' style='cursor:pointer;'>" +
                            icono +
                            "</span>" +
                            "</center>";
                    }
                },
                {
                    "targets": 2, // Índice de la columna
                    "visible": true, // Cambiamos de false a true para hacer visible la columna
                    "render": function(data, type, row, meta) {
                        // Convertir el valor timestamp a una fecha legible
                        var fecha = data.split(" ")
                        
                        return fecha[0];
                    }
                },
                {
                    targets: 15,
                    visible: false,
                }

                
            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: function(d) {
                    // Ajusta los valores de 'nombre_cliente' y 'accion'
                    d.nombre_cliente = "VARIOS"; // Valor predeterminado
                    d.accion = 59; // Valor predeterminado
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
                ajustarHeadersDataTables($('#lstRegistrosEstadosCliente'));
            }
        });

        tabla71= $("#tblDatosPagosBoleta").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        if (td !== undefined) {
                            $(td).css('font-family', 'Calibri, sans-serif');
                        }
                    }
                },
                {
                    targets: [0],
                    visible: false,
                },
                {
                    targets: [3],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + "S/. 0.00" + '</h6>';

                        }else{

                            var numero = parseFloat(data);
                            var dinero = "S/. " + numero.toFixed(2);

                            if(numero < 0){
                                return '<h6 style="text-align: center; color: red;"><strong>' + dinero + '</strong></h6>';
                            }else if(numero == 0){
                                return '<h6 style="text-align: center; color: black;"><strong>' + dinero + '</strong></h6>';
                            }else if(numero > 0){
                                return '<h6 style="text-align: center; color: green;"><strong>' + dinero + '</strong></h6>';
                            }
                            

                        }
                        
                    }
                },
            ],
            lengthMenu: [4,8,12,16,20],
            'pageLength': 4,
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: function(d) {
                    // Ajusta los valores de 'nombre_cliente' y 'accion'
                    d.nro_boleta = "00000926"; // Valor predeterminado
                    d.accion = 37; // Valor predeterminado
                },
            },
            scrollX:true,
            "order": [
                [5, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblDatosPagosBoleta'));
            }
        });

    }

    function Cargar_Botones_Tables() {

        $("#lstRegistrosEstados tbody").on('click', '.btnAsignarHora', function() {
            Credito = 0;
            Aumento = 0;
            Aumento2 = 0;
            var fila = $(this).closest("tr");
            var datosFila = $("#lstRegistrosEstados").DataTable().row(fila).data();
            var Dinero_Dado = datosFila["Dinero_Dado"];
            var Vuelto = parseFloat(datosFila["Vuelto"]);
            idBoleta_registro = datosFila["nro_boleta"];

            // Gestiona la selección de la fila
            if (fila.hasClass('selected') && MultipleSeleccion == 0) {
                fila.removeClass('selected');
                $('#modulos').jstree("deselect_all", false);
                $("#select_modulos option").remove();
                $("#card-modulos").hide();
            } else {
                tabla51.$('tr.selected').removeClass('selected');
                fila.addClass('selected');
                Registro = datosFila["Estado"] + ";" + datosFila["nro_boleta"];
                console.log(Registro);

                // Muestra mensaje de advertencia o realiza la solicitud AJAX
                if (datosFila["Estado"] == 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'El registro todavía no está confirmado'
                    });
                } else {
                    $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: { 'accion': 19, 'codigo': idBoleta_registro },
                        dataType: 'json',
                        success: function(respuesta) {
                            // Configura el modal con la respuesta
                            $("#modal_tipos_pago").show();
                            $("#iptDeuda").val(parseFloat(respuesta[0]["deuda"]).toFixed(2)).prop("disabled", true);
                            $("#iptVuelto,#iptNuevaDeuda").val(Vuelto.toFixed(2)).prop("disabled", true);
                            $("#iptAmortiguacion").val("");
                            $("#iptHoraEstimada, #iptPersona, #iptHora, #btn3m, #btn5m, #btn10m, #btn30m").prop("disabled", false);
                            $("#btnConfigurar").prop("disabled", true);

                            $("#iptAmortiguacion, #btn10, #btn50, #btn100, #btnCredito").prop("disabled", false);

                            $("#iptHoraEstimada, #iptHora").prop("disabled", true);
                            $("#btnConfigurar").prop("disabled", false);
                            establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                            if (datosFila["Estado"] == 1){
                                $("#selTiempo").val(1);
                                $("#iptHoraEstimada").val(moment().format('HH:mm'));
                            }else if (datosFila["Estado"] == 2){
                                $("#selTiempo").val(2);
                            }else if (datosFila["Estado"] == 3 || datosFila["Estado"] == 4){
                                $("#selTiempo").val(0);
                            }

                            
                            $("#iptPersona").val(datosFila["mensajero"]);
                            actualizarTextoBotones(parseFloat(respuesta[0]["deuda"]));
                            $("#mdlRegistrarTiempo").modal('show');
                            $("#iptDia").val(moment().format('YYYY-MM-DD')).attr("readonly", true).datepicker({ dateFormat: 'yy-mm-dd' });
                            $("#iptHora").val(moment().format('HH:mm'));
                            iptHora =  $("#iptHora").val();
                        }
                    });
                }
            }
        });

        $("#lstRegistrosEstadosCliente tbody").on('click', '.btnAsignarHoraDeuda', function() {
            Aumento = 0;
            Aumento2 = 0;
            Estado = 0;
            var fila = $(this).closest("tr");
            var datosFila = $("#lstRegistrosEstadosCliente").DataTable().row(fila).data();
            idBoleta_registro = datosFila["nro_boleta"];
            Estado = datosFila["Estado"];

            if (fila.hasClass('selected') && MultipleSeleccion == 0) {
                fila.removeClass('selected');
                $('#modulos').jstree("deselect_all", false);
                $("#select_modulos option").remove();
                $("#card-modulos").hide();
            } else {
                tabla61.$('tr.selected').removeClass('selected');
                fila.addClass('selected');
                Registro = datosFila["Estado"] + ";" + datosFila["nro_boleta"];
                console.log(Registro);
                console.log(datosFila);
                var fecha_venta = datosFila["fecha_venta"];
                var fecha_regreso = datosFila["fecha_regreso"];
                var fecha_salida = datosFila["fecha_salida"];
                deuda = datosFila["deuda"].replace("S/. ","")
                console.log(deuda)
                if(deuda <= 0 && Estado == 3){
                    VolverEstado4(datosFila["nro_boleta"]);
                }

                hora_salida_registro = fecha_salida;
                hora_llegada_registro = fecha_regreso;

                var iptFechaVenta = fecha_venta.split(' ')[0]


                calcular2(deuda,"iptNuevaDeuda_2")
                calcular2(deuda,"iptVueloDar")
                actualizarTextoBotones2(deuda);
                actualizarCuentasBoletas(datosFila["nro_boleta"]);
                establecerHoraDesdeString_2(fecha_regreso , "iptHoraRegresoNuevo")
                console.log(fecha_venta.split(' ')[0]);
                $("#iptHoraRegresoNuevo").attr("readonly", true);
                establecerHoraDesdeString_2(fecha_salida , "iptHoraSalidaNuevo")
                $("#iptHoraSalidaNuevo").attr("readonly", true);
                $("#iptNuevaDeuda_2").attr("readonly", true);
                $("#iptVueloDar").attr("readonly", true);
                $("#iptNombreMensajero").val(datosFila["mensajero"])
                $("#iptFechaVenta").val(iptFechaVenta).attr("readonly", true).datepicker({ dateFormat: 'yy-mm-dd' });
                $("#iptFechaPago").val(moment().format('YYYY-MM-DD')).attr("readonly", true).datepicker({ dateFormat: 'yy-mm-dd' });
                $("#modalPagosVenta").modal('show');

            }
        });
    }

    function Cargar_Botones_Modal(){

        $("#btnGuardarCambiosEnvios").on('click', function () {
            
            var hora_llegada_elegida = $("#iptHoraRegresoNuevo").val();
            var hora_salida_elegida = $("#iptHoraSalidaNuevo").val();
            var mensajero = $("#iptNombreMensajero").val();

             var fecha = hora_salida_registro.split(' ')[0];
    
            // Fusionar la fecha con la nueva hora
            var horaFinal_llegada = fecha + ' ' + hora_llegada_elegida + ':00';
            var horaFinal_salida = fecha + ' ' + hora_salida_elegida + ':00';

            console.log("horaFinal_llegada : ", horaFinal_llegada , "horaFinal_salida : ", horaFinal_salida, "idBoleta_registro : ", idBoleta_registro);

            // Verificar si horaFinal_llegada es menor a horaFinal_salida
            if (mensajero === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: '<h3><b>El Mensajero no está definido.</b></h3>',
                    confirmButtonText: 'Aceptar',
                });
            } else if (horaFinal_llegada < horaFinal_salida) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: '<h3><b>La hora de llegada no puede ser menor que la hora de salida.</b></h3>',
                    confirmButtonText: 'Aceptar',
                });
            } else {
                var nro_boleta = idBoleta_registro;

                $.ajax({
                    async: false,
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 60,
                        'nro_boleta': nro_boleta,
                        'fecha_salida': horaFinal_salida,
                        'fecha_regreso': horaFinal_llegada,
                        'Estado': Estado,
                        'mensajero': mensajero,
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        if (respuesta === "ok") {
                            Swal.fire({
                                icon: 'success',
                                title: 'Actualizado correctamente',
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    isSwalOpen = false;
                                    tabla61.ajax.reload();
                                    Estado = 3;
                                }
                            });
                        }
                    }
                });
            }

        });

        $("#btnIngresarNuevoPago").on('click', function () {

            var Nombre = $("#iptHoraSalida").val();
            var tipo_pago = $("#selTipoPago_2").val();
            var ingreso = $("#iptDineroIngreso").val();
            var nueva_deuda = $("#iptNuevaDeuda_2").val();
            var vuelto = $("#iptVueloDar").val();
            if(tipo_pago === "Opc"){
                tipo_pago = "Efectivo";
            }
            if(Nombre === ""){
                Nombre = "Desconocido";
            }

            var nro_boleta = idBoleta_registro;

            console.log("ESTADO : ", Estado , "idBoleta_registro : " , idBoleta_registro, "Nombre : " , Nombre, "tipo_pago : " , tipo_pago, "ingreso : " , ingreso, "nueva_deuda : " , nueva_deuda , "vuelto : " , vuelto );
            
            if(Estado != 4 && parseFloat(deuda) > 0){
            
                $.ajax({
                    async: false,
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 61,
                        'nro_boleta':nro_boleta,
                        'Monto':ingreso,
                        'Tipo_pago':tipo_pago,
                        'Persona_Dinero' :Nombre,
                        'Estado':Estado,
                        'Deuda':nueva_deuda,
                        'vuelto': vuelto,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){
                            Swal.fire({
                                icon: 'success',
                                title: 'Actualizado correctamente',
                                confirmButtonText: 'Aceptar',
                            }).then((result) => {
                                if(result.isConfirmed){
                                    isSwalOpen = false;
                                    tabla61.ajax.reload();
                                    tabla71.ajax.reload();
                                    deuda = parseFloat(nueva_deuda);
                                    actualizarTextoBotones2(deuda);
                                    calcular2(deuda,"iptNuevaDeuda_2")
                                    calcular2(deuda,"iptVueloDar")
                                }
                                
                            })


                        }

                    }
                });

            }else if(Estado == 3 && parseFloat(deuda) <= 0){

                Swal.fire({
                    icon: 'warning',
                    title: 'La venta ya esta cancelada !!! (proceso cancelado)',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    if(result.isConfirmed){
                        isSwalOpen = false;
                        tabla61.ajax.reload();
                        tabla71.ajax.reload();
                        VolverEstado4(nro_boleta);
                    }
                })

            }else{
                Swal.fire({
                    icon: 'warning',
                    title: 'La venta ya esta cancelada !!! (proceso cancelado)',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    if(result.isConfirmed){
                        isSwalOpen = false;
                        tabla61.ajax.reload();
                        tabla71.ajax.reload();
                    }
                })
            }
            
        });

        $("#btnCredito").on("click",function() {
            $("#iptAmortiguacion").val(0)
            agregarDinero(0)
            if(Credito == 0){

                $("#iptAmortiguacion").prop("disabled", true);
                $("#btn10").prop("disabled", true);
                $("#btn50").prop("disabled", true);
                $("#btn100").prop("disabled", true);

                $("#selTipoPago").prop("disabled", true);
                $("#iptPersonaDinero").prop("disabled", true);
                Credito = 1;

            }else if (Credito == 1){

                $("#iptAmortiguacion").prop("disabled", false);
                $("#btn10").prop("disabled", false);
                $("#btn50").prop("disabled", false);
                $("#btn100").prop("disabled", false);

                $("#selTipoPago").prop("disabled", false);
                $("#iptPersonaDinero").prop("disabled", false);
                Credito = 0;

            }

        });

        // Agrega eventos de clic a los botones
        $("#btn3m_1").on('click', function () {

            Aumento2 = Aumento2 - 5;
            agregarMinutos(Aumento2, "iptHora",iptHora);
        });

        $("#btn5m_1").on('click', function () {

            Aumento2 = Aumento2 - 1;
            agregarMinutos(Aumento2, "iptHora",iptHora);
        });

        $("#btn10m_1").on('click', function () {

            Aumento2 = Aumento2 + 1;
            agregarMinutos(Aumento2 , "iptHora",iptHora);
        });

        $("#btn30m_1").on('click', function () {

            Aumento2 = Aumento2 + 5;
            agregarMinutos(Aumento2, "iptHora",iptHora);
        });

        // Agrega eventos de clic a los botones
        $("#btn3m").on('click', function () {

            Aumento = Aumento + 3;
            agregarMinutos(Aumento, "iptHoraEstimada",iptHoraEstimada);
        });

        $("#btn5m").on('click', function () {

            Aumento = Aumento + 5;
            agregarMinutos(Aumento, "iptHoraEstimada",iptHoraEstimada);
        });

        $("#btn10m").on('click', function () {

            Aumento = Aumento + 10;
            agregarMinutos(Aumento, "iptHoraEstimada",iptHoraEstimada);
        });

        $("#btn30m").on('click', function () {

            Aumento = Aumento + 30;
            agregarMinutos(Aumento, "iptHoraEstimada",iptHoraEstimada);
        });

        $('#btn10').on('click', function () {

            var dinero = document.getElementById('btn10').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero(dineroNumero);
        });

        $('#btn50').on('click', function () {

            var dinero = document.getElementById('btn50').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero(dineroNumero);
        });

        $('#btn100').on('click', function () {

            var dinero = document.getElementById('btn100').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero(dineroNumero);
        });

        $('#btnNecesario').on('click', function () {

            var dinero = document.getElementById('btnNecesario').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero2(dineroNumero);
        });

        $('#btnMultiplo50').on('click', function () {

            var dinero = document.getElementById('btnMultiplo50').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero2(dineroNumero);
        });

        $('#btnMultiplo100').on('click', function () {

            var dinero = document.getElementById('btnMultiplo100').textContent;

            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));

            agregarDinero2(dineroNumero);
        });

        $("#btnVolverRegistro").on("click",function() {

            var nro_boleta = idBoleta_registro
            Swal.fire({
                    icon: 'warning',
                    title: 'Seguro de eliminar?',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,
                }).then((result) => {
                    //console.log(result);

                    if(result.isConfirmed){

                        $.ajax({
                            async: false,
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 24,
                                'nro_boleta':nro_boleta
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
                                            tabla51.ajax.reload();
                                        }
                                    })


                                }

                            }
                        });


                    }


                })
        });

        $("#btnGuardarTiempo").on("click", function() {

            if ($("#iptAmortiguacion").val() === ""){
                agregarDinero("0");
                Amortiguacion = 0;
            }

            

            var Dia = $("#iptDia").val();
            var fecha = $("#iptHora").val();
            var fecha_estimada = $("#iptHoraEstimada").val();



            var Tipo_pago = $("#selTipoPago").val();
            var Persona_Dinero = $("#iptPersonaDinero").val();

            var DatosRegistro = Registro.split(";");



            // VARIABLES IMPORTANTES

            var Boleta = DatosRegistro[1];
            var tiempo = Dia + " " + fecha;
            var tiempo_estimado = Dia + " " + fecha_estimada;
            var estado = parseInt(DatosRegistro[0]);
            var eleccion = $("#selTiempo").val();
            var persona = $("#iptPersona").val();

            var Amortiguacion = parseFloat($("#iptAmortiguacion").val() || 0).toFixed(2);
            var Vuelto = parseFloat($("#iptVuelto").val() || 0).toFixed(2);
            var Deuda = parseFloat($("#iptDeuda").val() || 0).toFixed(2);
            var Nueva_Deuda = parseFloat($("#iptNuevaDeuda").val() || 0).toFixed(2);

            console.log("estado :",estado,"eleccion :", eleccion, "Boleta :",Boleta,"persona :",persona,"Nueva_Deuda :",Nueva_Deuda,"tiempo_estimado :",tiempo_estimado,"tiempo :",tiempo)

            if (Tipo_pago === "Opc"){
                Tipo_pago = "Efectivo"
            }

            if (Persona_Dinero === ""){
                Persona_Dinero = "Desconocido"
            }

            console.log("Boleta :",Boleta,"Amortiguacion :", Amortiguacion, "Tipo_pago :",Tipo_pago,"Persona_Dinero :",Persona_Dinero);

            if(estado == 1 && eleccion == 2){
                Swal.fire({
                    icon: 'error',
                    title: 'Todavia no se registro la hora de salida del mensajero'
                });
                $("#mdlRegistrarTiempo").modal("hide");
            }else if(estado == 4 && eleccion == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'La venta esta cancelada y se eligio no modificar las horas (proceso cancelado ya que no hay nada por modificar)'
                });
                $("#mdlRegistrarTiempo").modal("hide");
            }else if(eleccion == 0 && Amortiguacion == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'La deuda no se va a pagar y la hora se opto por no modificar (proceso cancelado ya que no hay nada por modificar)'
                });
                $("#mdlRegistrarTiempo").modal("hide");
            }else{
                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 57,
                        'tiempo': tiempo,
                        'tiempo_estimado': tiempo_estimado,
                        'estado': estado,
                        'Boleta': Boleta,
                        'eleccion': eleccion,
                        'persona': persona,
                        'Nueva_Deuda':Nueva_Deuda,
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)
                        if (respuesta === "ok" && Amortiguacion > 0) {
                            $.ajax({
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 58,
                                    'Boleta': Boleta,
                                    'Amortiguacion': Amortiguacion,
                                    'Tipo_pago': Tipo_pago,
                                    'Persona_Dinero': Persona_Dinero,
                                },
                                dataType: 'json',
                                success: function(respuesta) {
                                    if (respuesta === "ok") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Registrado Exitosa mente'
                                        });
                                        $("#iptPersonaDinero").val("");
                                        $("#iptAmortiguacion").val("");
                                        tabla51.ajax.reload();
                                        $("#mdlRegistrarTiempo").modal("hide");
                                    }
                                }
                            });
                        }else if(respuesta === "ok"){
                            Swal.fire({
                                icon: 'success',
                                title: 'Registrado Exitosa mente'
                            });
                            $("#iptPersonaDinero").val("");
                            $("#iptAmortiguacion").val("");
                            tabla51.ajax.reload();
                            $("#mdlRegistrarTiempo").modal("hide");
                        }
                    }
                })
            }
        });

        $("#btnmenos1_1").on('click', function () {
            
            Aumento = Aumento - 1;
            agregarMinutos2(Aumento, "iptHoraSalidaNuevo",hora_salida_registro);
        });

        $("#btnmas1_1").on('click', function () {
            
            Aumento = Aumento + 1;
            agregarMinutos2(Aumento, "iptHoraSalidaNuevo",hora_salida_registro);
        });

        $("#btnmenos1_2").on('click', function () {
            
            Aumento2 = Aumento2 - 1;
            agregarMinutos2(Aumento2, "iptHoraRegresoNuevo",hora_llegada_registro);
        });

        $("#btnmas1_2").on('click', function () {
            
            Aumento2 = Aumento2 + 1;
            agregarMinutos2(Aumento2, "iptHoraRegresoNuevo",hora_llegada_registro);
        });

    }

    function VolverEstado4(nro_boleta){

        $.ajax({
            async: false,
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 62,
                'nro_boleta':nro_boleta,

            },
            dataType: 'json',
            success: function(respuesta) {

                if(respuesta === "ok"){
                    
                    tabla61.ajax.reload();

                }

            }
        });

    }

    function Botones_exteriores(){
        // Asociar la función al evento click del botón
        $('#btnActualizar6').on('click', function() {
            var texto = "VARIOS"; // Cambia esto por el texto que desees enviar
            $("#iptNombreClienteDeuda_0").html(texto)
            actualizarNombreCliente(texto);
        });

        $("#btnActualizar4").on("click",function(){
            tabla51.ajax.reload();
        })
    }

    function cargarClientesAjax(){

        if($('#content-estados:visible').length > 0 || $('#content-deudas:visible').length > 0){
               
            $.ajax({
                async: false,
                url: "ajax/clientes.ajax.php",
                method: "POST",
                data: {
                    'accion': 13
                },
                dataType: 'json',
                success: function (respuesta) {

                    
                    $("#iptNombreClienteDeuda").autocomplete({
                        source: respuesta,
                        select: function (event, ui) {

                            
                            var texto = ui.item.value; // Cambia esto por el texto que desees enviar
                            $("#iptNombreClienteDeuda_0").text(texto);
                            console.log("ui.item.value : " + texto)
                            actualizarNombreCliente(texto);

                            $("#iptNombreClienteDeuda").val("");
                            $("#iptNombreClienteDeuda").focus();

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

    function actualizarTextoBotones(dinero) {
        var nuevoTexto50 = Math.ceil(dinero / 50) * 50 ;
        var nuevoTexto100 = Math.ceil(dinero / 50) * 50 + 50;
        var nuevoTexto10 = dinero.toFixed(2);
        document.getElementById('btn50').innerText = '+ S./' + nuevoTexto50;
        document.getElementById('btn100').innerText = '+ S./' + nuevoTexto100;
        document.getElementById('btn10').innerText = '+ S./' + nuevoTexto10;
    }

    function actualizarTextoBotones2(deuda) {
        var nuevoTexto50 = Math.ceil(deuda / 50) * 50 ;
        var nuevoTexto100 = Math.ceil(deuda / 50) * 50 + 50;
        var nuevoTexto10 = deuda;

        document.getElementById('btnMultiplo50').innerText = '+ S./' + nuevoTexto50;
        document.getElementById('btnMultiplo100').innerText = '+ S./' + nuevoTexto100;
        document.getElementById('btnNecesario').innerText = '+ S./' + nuevoTexto10;
    }

    function establecerHoraDesdeString(fechaHoraString) {
        
        const iptHora = document.getElementById('iptHoraEstimada');
        const fechaHora = new Date(fechaHoraString);

        // Formatear la fecha y hora en el formato deseado
        const horaFormateada = fechaHora.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });

        // Establecer el valor del campo iptHoraEstimada
        iptHora.value = horaFormateada;

        iptHoraEstimada = horaFormateada;
    }

    function establecerHoraDesdeString_2(fechaHoraString , texto) {

        const iptHora = document.getElementById(texto);
        const fechaHora = new Date(fechaHoraString);

        // Formatear la fecha y hora en el formato deseado
        const horaFormateada = fechaHora.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });

        // Establecer el valor del campo texto
        iptHora.value = horaFormateada;
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

    function toggleBotonesCirculos() {
        $('.btnSeleccion').toggle(); // Alternar la visibilidad de los botones con clase btnAsignarHora23
    }

    function agregarMinutos(minutos, texto, horaStr) {
        const iptHoraSeleccionado = document.getElementById(texto);

        // Convertir la cadena de hora en un objeto Date
        const [hora, minuto] = horaStr.split(':').map(Number);
        const horaActual = new Date();
        horaActual.setHours(hora);
        horaActual.setMinutes(minuto);
        horaActual.setSeconds(0);  // Asignar segundos a 0 por defecto

        // Añadir los minutos a la hora actual
        horaActual.setMinutes(horaActual.getMinutes() + minutos);

        // Ajustar la hora si supera las 24 horas
        if (horaActual.getHours() === 0) {
            horaActual.setHours(24 - 1);  // Para ajustar las 24 horas a las 23 horas
        }

        // Formatear la hora en formato 'HH:MM'
        const horaFormateada = horaActual.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });

        // Asignar el valor formateado al campo de entrada
        iptHoraSeleccionado.value = horaFormateada;
    }

    function agregarMinutos2(minutos, texto, hora) {
        console.log(hora);

        // Convertir la cadena de fecha y hora en un objeto Date
        const horaActual = new Date(hora);

        // Sumar los minutos a la hora actual
        horaActual.setMinutes(horaActual.getMinutes() + minutos);

        // Formatear la hora en formato 'HH:MM'
        const horaFormateada = horaActual.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });

        // Establecer el valor del input
        const iptHora = document.getElementById(texto);
        iptHora.value = horaFormateada;
    }

    function agregarDinero(dinero){
        document.getElementById('iptAmortiguacion').value = dinero;
        calcularVuelto();
        calcularNuevaDeuda();
    }

    function agregarDinero2(dinero){
        document.getElementById('iptDineroIngreso').value = dinero;
        calcular2(deuda,"iptNuevaDeuda_2")
        calcular2(deuda,"iptVueloDar")
    }

    function md5(string) {
        return CryptoJS.MD5(string).toString();
    }

    function calcularVuelto() {
        var deuda = parseFloat(document.getElementById('iptDeuda').value);
        var amortiguacion = parseFloat(document.getElementById('iptAmortiguacion').value);
        var vuelto = -(deuda - amortiguacion);
        if (vuelto < 0) {
            vuelto = 0.00;
        }
        document.getElementById('iptVuelto').value = vuelto.toFixed(2); // Redondear a 2 decimales
    }

    function calcularNuevaDeuda() {
        var deuda = parseFloat(document.getElementById('iptDeuda').value);
        var amortiguacion = parseFloat(document.getElementById('iptAmortiguacion').value);
        var vuelto = (deuda - amortiguacion);
        if (vuelto < 0) {
            vuelto = 0.00;
        }
        document.getElementById('iptNuevaDeuda').value = vuelto.toFixed(2); // Redondear a 2 decimales
    }

    function calcular2(deuda,texto) { 

        var amortiguacion = parseFloat(document.getElementById('iptDineroIngreso').value);
        
        if (amortiguacion === "" || isNaN(amortiguacion)) {
            amortiguacion = 0;
        }

        console.log("amortiguacion : " , amortiguacion);
        
        var vuelto = -(deuda - amortiguacion);

        if(texto === "iptNuevaDeuda_2"){
            vuelto = -vuelto;
        }
        
        if (vuelto < 0) {
            vuelto = 0.00;
        }

        document.getElementById(texto).value = vuelto.toFixed(2); // Redondear a 2 decimales
    }

    // Función para actualizar el 'nombre_cliente' y recargar la tabla
    function actualizarNombreCliente(nombreCliente) {
        tabla61.ajax.url("ajax/ventas.ajax.php").load(function(data) {
            tabla61.settings()[0].ajax.data = function(d) {
                d.nombre_cliente = nombreCliente;
                d.accion = 59;
            };
            tabla61.ajax.reload();
        });
    }

    function actualizarCuentasBoletas(nro_boleta) {
        tabla71.ajax.url("ajax/ventas.ajax.php").load(function(data) {
            tabla71.settings()[0].ajax.data = function(d) {
                d.nro_boleta = nro_boleta;
                d.accion = 37;
            };
            tabla71.ajax.reload();
        });
    }
</script>