
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

            
            <li class="nav-item">
                <a class="nav-link" id="content-cobranzas-tab" data-toggle="pill" href="#content-cobranzas" role="tab" aria-controls="content-cobranzas" aria-selected="false">Salir a Cobrar</a>
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

                                            <button class="btn btn-info" id="btnSeleccionMultiple">
                                                <i class="far fa-check-square"> Seleccion Multiple</i>
                                            </button>

                                            <button class="btn btn-success" id="btnRegistrar">
                                                <i class="fas fa-check"> Registrar</i>
                                            </button>

                                            
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

                                            <h4>CLIENTE: <label id = "iptNombreClienteDeuda_0"> Sin elegir </label></h4>

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

                                            <button class="btn btn-info" id="btnSeleccionMultipleDeuda">
                                                <i class="far fa-check-square"> Seleccion Multiple</i>
                                            </button>

                                            <button class="btn btn-success" id="btnRegistrarDeuda">
                                                <i class="fas fa-check"> Registrar</i>
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

            <div class="tab-pane fade mt-4 px-4" id="content-cobranzas" role="tabpanel" aria-labelledby="content-cobranzas-tab">


                
            
                <h4>Seleccionar Ventas A cobrar</h4>

                <div class="container-fluid">

                    <div class="row">
                        <div class="card card-gray shadow" style="border: 1px solid black;" id="tabla_carga_1">

                            <div class="card-body p-3">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <!-- small box -->
                                        <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnMandarCobro" tabindex="0">
                                            <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                <h4 id="tarjeta_bcp"><i class='fas fa-biking fs-5'></i><span style="font-style: italic; font-weight: bold;  padding: 10px;">Enviar a Cobrar</span></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- small box -->
                                        <div style="cursor: pointer;" class="small-box bg-info" data-toggle="modal" id="btnRegistrarRegreso" tabindex="0">
                                            <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                <h4 id="tarjeta_bcp"><i class='far fa-clock fs-5'></i><span style="font-style: italic; font-weight: bold;  padding: 10px;">Registrar Hora</span></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstRegistrosPedidos" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
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

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <button type="button" class="btn btn-info btn-sm btn-block" id="btnVerPagosVenta">
                                            <i class='fas fa-search fs-5'></i> Registro de Pagos
                                        </button>
                                    </div>

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
                                            <button type="button" class="btn btn-secondary btn-sm btn-block" id="btnConfigurar">Configurar</button>
                                        </div>

                                    </div>

                                    <label class="col-form-label" for="selCategoriaReg">
                                        <i class="fas fa-time-alt fs-6"></i>
                                        <span class="small"> Tiempo</span><span class="text-danger">*</span>
                                    </label>

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        id="selTiempo">
                                        <option value="0"> Elegir Opcion</option>
                                        <option value="1"> Salida</option>
                                        <option value="2"> Regreso</option>
                                    </select>

                                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                        Debe Seleccione una opcion
                                    </span>

                                    <label class="col-form-label" for="iptPersona">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersona">
                                    </div>

                                    <label class="col-form-label" for="iptHora">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Hora de Viaje</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHora"
                                        placeholder="Ingrese una hora valida">
                                    </div>

                                    <label class="col-form-label" for="iptHoraEstimada">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Hora Estimada</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHoraEstimada"
                                        placeholder="Ingrese una hora valida">
                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn3m">+3 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn5m">+5 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn10m">+10 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn30m">+30 min</button>
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

                                    <label class="col-form-label" for="iptDia">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Dia</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat=" dd/mm/yyyy" id="iptDia"
                                        placeholder="Ingrese una hora valida">

                                    <label class="col-form-label" for="iptDeuda">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Deuda Actual</span>
                                    </label>

                                    <!-- Deuda Actual -->
                                    <div class="input-group mb-3">
                                        <!-- <i class="fas fa-money-bill fs-6"></i> -->
                                        <input type="text" class="form-control form-control-sm" id="iptDeuda">
                                    </div>

                                    <label class="col-form-label" for="iptAmortiguacion">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Dinero dado por el cliente</span>
                                    </label>

                                    <!-- Amortiguación -->
                                    <div class="input-group mb-3">
                                        <!-- <i class="fas fa-money-bill fs-6"></i> -->
                                        <input type="text" class="form-control form-control-sm" id="iptAmortiguacion">
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

                                    <label class="col-form-label" for="iptVuelto">
                                        <i class="fas fa-money-bill fs-6"></i>
                                        <span class="small"> Vuelto a entregar</span>
                                    </label>

                                    <!-- Amortiguación -->
                                    <div class="input-group mb-3">
                                        <!-- <i class="fas fa-money-bill fs-6"></i> -->
                                        <input type="text" class="form-control form-control-sm" id="iptVuelto">
                                    </div>



                                    
                                    
                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12" id = "modal_tipos_pago">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                

                                <div class="col-12 col-lg-12">

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

                                    <label class="col-form-label" for="iptPersonaDinero">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona o Cuenta que recibe el dinero</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersonaDinero">
                                    </div>
                                    
                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    

                    <div class="col-12 col-lg-4">

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

                    <div class="col-12 col-lg-8">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <button type="button" class="btn btn-success btn-sm btn-block" id="btnConfirmar">Confirmar Regreso de vuelto</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

            
                


                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarTiempo">Guardar tiempo</button>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlRegistrarTiempo2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <!-- <div class="row">

                                        <div class="col-12 col-lg-12">
                                            <button type="button" class="btn btn-secondary btn-sm btn-block" id="btnConfigurar">Configurar</button>
                                        </div>

                                    </div> -->

                                    <label class="col-form-label" for="iptDia_2">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Dia</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat=" dd/mm/yyyy" id="iptDia_2"
                                        placeholder="Ingrese una hora valida">

                                    <label class="col-form-label" for="selCategoriaReg">
                                        <i class="fas fa-time-alt fs-6"></i>
                                        <span class="small"> Tiempo</span><span class="text-danger">*</span>
                                    </label>

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        id="selTiempo_2">
                                        <option value="0"> Elegir Opcion</option>
                                        <option value="1"> Salida</option>
                                        <option value="2"> Regreso</option>
                                    </select>

                                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                        Debe Seleccione una opcion
                                    </span>

                                    <label class="col-form-label" for="iptPersona_2">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersona_2">
                                    </div>

                                    <label class="col-form-label" for="iptHora_2">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Hora de Viaje</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHora_2"
                                        placeholder="Ingrese una hora valida">
                                    </div>

                                    <label class="col-form-label" for="iptHoraEstimada_2">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Hora Estimada</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="time" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="hh:mm:ss" id="iptHoraEstimada_2"
                                        placeholder="Ingrese una hora valida">
                                    </div>

                                    <div class="row">

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn3m_2">+3 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn5m_2">+5 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn10m_2">+10 min</button>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <button type="button" class="btn btn-info btn-sm btn-block" id="btn30m_2">+30 min</button>
                                        </div>

                                    </div>
                                    
                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                    <button type="button" class="btn btn-danger btn-sm btn-block" data-bs-dismiss="modal" id="btnVolverRegistro_2">Eliminar Del Registro</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

            
                


                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarTiempo_2">Guardar tiempo</button>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlRegistrarTiempo3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <!-- <div class="row">

                                        <div class="col-12 col-lg-12">
                                            <button type="button" class="btn btn-secondary btn-sm btn-block" id="btnConfigurar">Configurar</button>
                                        </div>

                                    </div> -->

                                    <label class="col-form-label" for="iptDia_3">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Dia</span>
                                    </label>

                                    <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat=" dd/mm/yyyy" id="iptDia_3"
                                        placeholder="Ingrese una hora valida">

                                    <label class="col-form-label" for="sel_TipoPago_3">
                                        <i class="fas fa-time-alt fs-6"></i>
                                        <span class="small"> Tipo de pago</span><span class="text-danger">*</span>
                                    </label>

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        id="sel_TipoPago_3">
                                        <option value="0"> Elegir Opcion</option>
                                        <option value="Yape"> Yape</option>
                                        <option value="Plin"> Plin</option>
                                        <option value="Efectivo"> Efectivo</option>
                                        <option value="Transferencia"> Transferencia</option>
                                    </select>

                                    <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                        Debe Seleccione una opcion
                                    </span>

                                    <label class="col-form-label" for="iptPersona_3">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona o cuenta que recibe el dinero</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersona_3">
                                    </div>

                                    
                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                    <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal" id="btnCancelarCredito_3">Cancelar Credito de las deudas seleccionadas</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                    <button type="button" class="btn btn-danger btn-sm btn-block" data-bs-dismiss="modal" id="btnVolverRegistro_3">Eliminar Del Registro</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarTiempo_2">Guardar tiempo</button> -->

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlCambiarNombres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <label class="col-form-label" for="iptPersona_Mensajero_secreto">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona que mando la mercaderia</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersona_Mensajero_secreto">
                                    </div>

                                    <label class="col-form-label" for="iptPersona_Cuenta_secreto">
                                        <i class="fas fa-barcode fs-6"></i>
                                        <span class="small"> Persona o cuenta que recibe el dinero</span>
                                    </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" id="iptPersona_Cuenta_secreto">
                                    </div>

                                    
                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                    <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal" id="btnCambiar_Nombres">Cambiar Nombres </button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlContraseña" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Ingrese Contraseña</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalContraseña">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12 col-lg-12">

                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-body p-3">

                                <div class="col-12 col-lg-12">

                                    <form action="Registro_pedidos.php" method="post">
                                        <label class="col-form-label" for="iptNombreUsuario">
                                            <span class="sr-only">Nombre de usuario</span> <!-- Esto oculta el label para usuarios visuales pero lo hace accesible para tecnologías de asistencia -->
                                        </label>
                                        <input type="text" id="iptNombreUsuario" name="nombre_usuario" aria-label="Nombre de usuario oculto" aria-hidden="true" style="position: absolute; left: -9999px;"> <!-- Esto oculta el campo de nombre de usuario -->
                                        
                                        <label class="col-form-label" for="iptContraseñaNombres">
                                            <i class="fas fa-lock fs-6"></i>
                                            <span class="small">Contraseña</span>
                                        </label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-sm" id="iptContraseñaNombres" placeholder="Ingrese una Contraseña válida" autocomplete="new-password">
                                            <button class="btn btn-outline-secondary" type="button" id="btnMostrarContraseña">...</button>
                                        </div>
                                    </form>

                                    <!-- / table -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-lg-12 mt-3">

                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-12 col-lg-12">
                                        <button type="button" class="btn btn-success btn-sm btn-block"
                                            id="btnIngresarContraseña">Ingresar Contraseña</button>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnGuardarTiempo_2">Guardar tiempo</button> -->
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalPagosVenta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Pagos de la venta</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" id="btnCerrarModalPagos">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">
                            
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

            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalMandarCobrador" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock"> Registrar Tiempo</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    
                    <div class="col-md-5">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptElegirCobrador">Cobrador</label>

                                        <input type="text" min="0" name="iptElegirCobrador" id="iptElegirCobrador"
                                            class="form-control form-control-sm" placeholder="Escriba un nombre">

                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-3">

                                    <label for="hora_salida">Hora de Salida</label>
                                                        
                                    <div class="col-md-8">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_salida">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_salida">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="hora_regreso">Hora de Regreso (estimado)</label>
                                                        
                                    <div class="col-md-8">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_regreso">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_regreso">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptTotalCobro">Total a Cobrar</label>

                                        <input type="text" min="0" name="iptTotalCobro" id="iptTotalCobro"
                                            class="form-control form-control-sm" placeholder="S/. 0.00">

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>

                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-body">

                                <div class="row">
                                    
                                    <div style="cursor: pointer;" class="small-box bg-info" data-toggle="modal" id="btnEmpezarCobranza" tabindex="0">
                                        <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                            <h5 id="tarjeta_bcp"><i class='fas fa-biking fs-5'></i><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mandar a Cobrar</span></h5>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                        </div>

                    </div> 

                    <div class="col-md-7">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">
                                
                                <table id="tblDatosPagosBoletaCobranza" class="table table-bordered table-striped w-100">
                                    <thead class="bg-gray text-left fs-6" class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Nro Boleta</th>
                                            <th>Cliente</th>
                                            <th>Total Venta</th>
                                            <th>Deuda</th>
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
        </div>
    </div>
</div>

<div class="modal fade" id="modalRegresoCobrador" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Registrar Hora de regreso</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    
                    <div class="col-md-5">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptElegirCobradorApunte">Cobrador</label>

                                        <input type="text" min="0" name="iptElegirCobradorApunte" id="iptElegirCobradorApunte"
                                            class="form-control form-control-sm" placeholder="Escriba un nombre">

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <label for="hora_real">Hora de Regreso (real)</label>
                                                        
                                    <div class="col-md-8">

                                        <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:MM" id="hora_real">

                                    </div>

                                    <div class="col-md-4">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_PM_hora_real">
                                            <option value="PM" selected="true">PM</option>
                                            <option value="AM">AM</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <label for="iptTotalCobroRegistro">Total que se Cobro</label>

                                        <input type="text" min="0" name="iptTotalCobroRegistro" id="iptTotalCobroRegistro"
                                            class="form-control form-control-sm" placeholder="S/. 0.00">

                                    </div>
                                    
                                </div>

                                <div class="row mb-3">

                                    <label for="hora_real">Tipo de Pago</label>                      

                                    <div class="col-md-12">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            id="sel_Tipo_Pago">
                                            <option value="Efectivo" selected="true">Efectivo</option>
                                            <option value="Yape">Yape</option>
                                            <option value="Plin">Plin</option>
                                            <option value="Transferecia">Transferecia</option>
                                        </select>

                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <label for="iptCuentaSeleccionado">Cuenta de Banco</label>
                                                        
                                    <div class="col-md-12">

                                        <input type="text" class="form-control form-control-sm" id="iptCuentaSeleccionado">

                                    </div>


                                </div>
                                
                            </div>

                        </div>

                        <div class="card card-gray shadow" style="border: 1px solid black;">

                            <div class="card-body">

                                <div class="row">
                                    
                                    <div style="cursor: pointer;" class="small-box bg-info" data-toggle="modal" id="btnEmpezarCobranza" tabindex="0">
                                        <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                            <h5 id="tarjeta_bcp"><i class='fas fa-clock fs-5'></i><span style="font-style: italic; font-weight: bold;  padding: 10px;">Registrar Cobranza</span></h5>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>

                        </div>

                    </div> 

                    <div class="col-md-7">

                        <div class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">
                                
                                <table id="tblRegistrarPagosBoletaCobranza" class="table table-bordered table-striped w-100">
                                    <thead class="bg-gray text-left fs-6" class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Opc</th>
                                            <th>Nro Boleta</th>
                                            <th>Cliente</th>
                                            <th>Deuda a Cobrar</th>
                                            <th>Hora Estimada</th>
                                            <th>Encargado</th>
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

    var tabla01;
    var tabla02;
    var tabla03;
    var tabla04;

    var tabla51;
    var tabla61, tabla71, tabla81, tabla91;

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

    var Registro;

    var Puesto = "";

    var controlPresent3 = false;

    var isActionInProgress = false;

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
    var nro_Boletas = [];
    var total_cobros = [];
    var total_cobro = 0;
    

    $(document).ready(function(){

        document.getElementById('iptAmortiguacion').addEventListener('input', calcularVuelto);

        $('#mdlRegistrarTiempo').on('shown.bs.modal', function () {
            // Enfocar el elemento #iptPersona cuando el modal está completamente visible
            $("#iptPersona").focus();
        });

         // Manejar el evento de presionar la tecla en los campos de entrada
        $("#iptHora, #iptDia , #iptPersona").keypress(function(event) {
            // Verificar si la tecla presionada es Enter (código 13)
            if (event.which === 13) {
                // Verificar si el modal está activo
                if ($("#mdlRegistrarTiempo").is(":visible")) {
                    // Simular clic en el botón "Guardar tiempo"
                    $("#btnGuardarTiempo").click();
                }
            }
        });


        $("#btnRegistrar").prop("disabled", true);

        VerificarEstados();

        cargarClientesAjax();

        Cargar_tables();

        CargarBotones();

        // Configurar el intervalo para que la función se ejecute cada 10 segundos
        
        setInterval(()=> {
    
           VerificarEstados();
    
        }, 60000); // 10000 milisegundos = 10 segundos 60 mil son 1 minuto

        $(document).on('keydown', function(event) {

            if (event.keyCode === 40 && $('#content-estados:visible').length > 0 && !controlPresent3) {
                event.preventDefault(); // Prevenir el comportamiento predeterminado de la tecla de flecha abajo

                // Verificar si la selección múltiple está activada
                if (MultipleSeleccion === 1) {
                    // Si la selección múltiple está activada, simplemente mover la selección sin quitar otras selecciones
                    var $selectedRows = $('#lstRegistrosEstados tbody tr.selected');
                    if ($selectedRows.length === 0) {
                        // Si no hay filas seleccionadas, seleccionar la primera fila
                        $('#lstRegistrosEstados tbody tr:first').addClass('selected');
                    } else {
                        // Si hay filas seleccionadas, mover la selección a la siguiente fila sin quitar otras selecciones
                        $selectedRows.last().next('tr').addClass('selected');
                    }
                } else {
                    // Si la selección múltiple no está activada, comportamiento normal
                    if (!isActionInProgress) {
                        isActionInProgress = true; // Establecer la bandera para indicar que la acción está en progreso

                        var $selectedRow = $('#lstRegistrosEstados tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay una fila seleccionada, seleccionar la primera fila
                            $('#lstRegistrosEstados tbody tr:first').addClass('selected');
                        } else {
                            // Si hay una fila seleccionada, mover la selección a la siguiente fila y quitar la selección de otras filas
                            $selectedRow.removeClass('selected');
                            $selectedRow.next('tr').addClass('selected');
                        }

                        setTimeout(function() {
                            isActionInProgress = false;
                        }, 100); // Ajustar el tiempo de espera según sea necesario
                    }
                }
            }

            if (event.keyCode === 38 && $('#content-estados:visible').length > 0 && !controlPresent3) {
                event.preventDefault(); // Prevenir el comportamiento predeterminado de la tecla de flecha arriba

                // Verificar si la selección múltiple está activada
                if (MultipleSeleccion === 1) {
                    // Si la selección múltiple está activada, simplemente mover la selección sin quitar otras selecciones
                    var $selectedRows = $('#lstRegistrosEstados tbody tr.selected');
                    if ($selectedRows.length === 0) {
                        // Si no hay filas seleccionadas, seleccionar la última fila
                        $('#lstRegistrosEstados tbody tr:last').addClass('selected');
                    } else {
                        // Si hay filas seleccionadas, mover la selección a la fila anterior sin quitar otras selecciones
                        $selectedRows.first().prev('tr').addClass('selected');
                    }
                } else {
                    // Si la selección múltiple no está activada, comportamiento normal
                    if (!isActionInProgress) {
                        isActionInProgress = true; // Establecer la bandera para indicar que la acción está en progreso

                        var $selectedRow = $('#lstRegistrosEstados tbody tr.selected');

                        if ($selectedRow.length === 0) {
                            // Si no hay una fila seleccionada, seleccionar la última fila
                            $('#lstRegistrosEstados tbody tr:last').addClass('selected');
                        } else {
                            // Si hay una fila seleccionada, mover la selección a la fila anterior y quitar la selección de otras filas
                            $selectedRow.removeClass('selected');
                            $selectedRow.prev('tr').addClass('selected');
                        }

                        setTimeout(function() {
                            isActionInProgress = false;
                        }, 100); // Ajustar el tiempo de espera según sea necesario
                    }
                }
            }

            if (event.keyCode === 13 && $('#content-estados:visible').length > 0 && !controlPresent3) { // Tecla Enterb
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstRegistrosEstados tbody tr.selected');

                    //console.log($selectedRow);

                    Configurar = 0;
                    Aumento = 0;

                    if ($selectedRow.length > 0) {

                        var datosFila = $("#lstRegistrosEstados").DataTable().row($selectedRow).data();

                        //console.log(datosFila);

                        Registro = datosFila["Estado"] + ";"+ datosFila["nro_boleta"];

                        var Vuelto = parseFloat(datosFila["Vuelto"]);

                        if(datosFila["Estado"] == 0){
                            Swal.fire({
                                icon: 'warning',
                                title: 'El registro todavia no esta confirmado'
                            });
                        }else{

                            $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 19,
                                        'codigo': datosFila["nro_boleta"]
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        //console.log("hora: ",respuesta[0]["fecha_entrega"]);
                                        var deuda =parseFloat(respuesta[0]["deuda"])
                                        $("#iptDeuda").prop("disabled", true);
                                        $("#iptDeuda").val(deuda.toFixed(2));
                                        $("#iptVuelto").prop("disabled", true);
                                        $("#iptVuelto").val(Vuelto.toFixed(2));

                                        $("#iptHoraEstimada").prop("disabled", false);
                                        $("#iptPersona").prop("disabled", false);
                                        $("#iptHora").prop("disabled", false);
                                        $("#btn3m").prop("disabled", false);
                                        $("#btn5m").prop("disabled", false);
                                        $("#btn10m").prop("disabled", false);
                                        $("#btn30m").prop("disabled", false);
                                        $("#btnConfigurar").prop("disabled", true);

                                        if(deuda <= 0){
                                            $("#iptAmortiguacion").prop("disabled", true);
                                            $("#btn10").prop("disabled", true);
                                            $("#btn50").prop("disabled", true);
                                            $("#btn100").prop("disabled", true);
                                        }else{
                                            $("#iptAmortiguacion").prop("disabled", false);
                                            
                                            $("#btn10").prop("disabled", false);
                                            $("#btn50").prop("disabled", false);
                                            $("#btn100").prop("disabled", false);
                                            
                                        }

                                        if(datosFila["Estado"] == 2){
                                            $("#selTiempo").val("2");
                                            $("#selTiempo").prop("disabled", true);
                                            establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                                            $("#iptHoraEstimada").prop("disabled", true);
                                        }else if (datosFila["Estado"] == 1){
                                            $("#selTiempo").val("1");
                                            $("#selTiempo").prop("disabled", true);
                                            $("#iptHoraEstimada").val(moment().format('HH:mm:ss'));
                                        }else{
                                            $("#selTiempo").val("0");
                                            $("#selTiempo").prop("disabled", true);
                                            $("#iptPersona").prop("disabled", true);
                                            $("#iptHoraEstimada").prop("disabled", true);
                                            $("#iptHora").prop("disabled", true);
                                            $("#btn3m").prop("disabled", true);
                                            $("#btn5m").prop("disabled", true);
                                            $("#btn10m").prop("disabled", true);
                                            $("#btn30m").prop("disabled", true);
                                            $("#btnConfigurar").prop("disabled", false);
                                            establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                                        }
                                        $("#iptPersona").val(datosFila["mensajero"]);

                                        actualizarTextoBotones(deuda)

                                        $("#mdlRegistrarTiempo").modal('show');
                                        $("#iptDia").val(moment().format('YYYY-MM-DD'));
                                        
                                        $("#iptDia").attr("readonly", true);

                                        // Configurar el Datepicker en el campo "iptDia"
                                        $("#iptDia").datepicker({
                                            dateFormat: 'yy-mm-dd' // Formato "dd/mm/yyyy"
                                        });
                                        
                                        $("#iptHora").val(moment().format('HH:mm:ss'));
                                        
                                    }
                            })

                            

                        }
                    
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 17 && $('#content-estados:visible').length > 0 && !controlPresent3) { // Tecla Enterb
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#lstRegistrosEstados tbody tr.selected');

                    //console.log($selectedRow);

                    if ($selectedRow.length > 0) {

                        var datosFila = $("#lstRegistrosEstados").DataTable().row($selectedRow).data();

                        //console.log(datosFila);

                        Registro = datosFila["Estado"] + ";"+ datosFila["nro_boleta"];

                        if(datosFila["Estado"] == 0){
                            Swal.fire({
                                icon: 'warning',
                                title: 'El registro todavia no esta confirmado'
                            });
                        }else{

                            $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 19,
                                        'codigo': datosFila["nro_boleta"]
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        //console.log(respuesta[0]["deuda"]);
                                        var deuda =parseFloat(respuesta[0]["deuda"])

                                        $("#iptDeuda").val(deuda.toFixed(2));
                                        
                                        $("#mdlPagarDeuda").modal('show');
                                        
                                    }
                            })

                        }
                    
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }
            
            if (event.keyCode === 37 && $('#content-estados:visible').length > 0 && !controlPresent3) { // Tecla Izquierda
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Izquierda
                $('#content-estados input').blur();
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página anterior solo si no se ha cambiado ya
                        tabla51.page('previous').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            }

            if (event.keyCode === 39 && $('#content-estados:visible').length > 0 && !controlPresent3) { // Tecla Derecha
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Derecha
                $('#content-estados input').blur();
                //console.log("se presiono : " + isActionInProgress);
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    paginaCambiada = false;
                    if (!paginaCambiada) {
                        // Ir a la página siguiente solo si no se ha cambiado ya
                        tabla51.page('next').draw('page');
                        paginaCambiada = true;
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
            } 

            
        });



    })

    
    $(document).on('keydown', function(event) {

        ////console.log(event.keyCode);
        // Verifica si la tecla presionada es la tecla Control (keyCode 17)
        if (event.keyCode === 113 ) {
            event.preventDefault()
            if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                const activeElement = $('.nav-link.active');
                const nextElement = activeElement.parent().next().find('.nav-link');
                //console.log(nextElement.length)

                if (nextElement.length) {
                    activeElement.removeClass('active').attr('aria-selected', 'false');
                    nextElement.addClass('active').attr('aria-selected', 'true').tab('show');
                    const tabId = nextElement.attr('href');
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
            
            //tabla21.ajax.reload();
            //tabla31.ajax.reload();
            tabla51.ajax.reload();
            Toast.fire({
                icon: 'success',
                title: "Actualizado",
                showConfirmButton: false,
                timer: 1500
            })
        
        }else if (event.keyCode === 121 && $('#content-estados:visible').length > 0 && $('#mdlRegistrarTiempo').is(':visible')){
            
            event.preventDefault()
            if ($('#content-estados').hasClass('active')) {
                if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    $('#btnVerPagosVenta').click();
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 200); // Adjust the delay as needed
                }

            }
        
        }
        

    });

</script>

<script>

    // Definir una variable global para controlar el estado de ejecución del AJAX
    var ajaxEnProgreso = false;

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

    function Cargar_tables(){

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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
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
                    targets: [0, 4,5], // Columnas 0 y 4
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

                            "<span class='btnSeleccionDeuda text-success px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-circle fs-5'></i>" +
                            "</span>" +

                            
                            "</center>"
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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
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
                    targets: 14,
                    visible: false,
                }

                
            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 27, //27: LISTAR BOLETAS con tod la info del cliente escrito
                    'nombre_cliente':""
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
                toggleBotonesCirculosDeudas();
            }
        });

        tabla71 =$('#lstRegistrosPedidos').DataTable({
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

                            "<span class='btnSeleccionCobro text-blue px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-circle fs-5'></i>" +
                            "</span>" +

                            
                            "</center>"
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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
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
                    visible: false,
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
                    targets: 17,
                    visible: false,
                }

                
            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 41 //15: LISTAR BOLETAS con tod la info
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
                ajustarHeadersDataTables($('#lstRegistrosPedidos'));
            }
        });

        tabla81 =$('#tblDatosPagosBoletaCobranza').DataTable({
            columnDefs: [
                {
                    targets: [0], // Columnas 0 y 4
                    className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                },

                
            ],
            lengthMenu: [10, 25, 50, 100],
            'pageLength': 10,
            "scrollX": true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblDatosPagosBoletaCobranza'));
            }
        });

        tabla91 =$('#tblRegistrarPagosBoletaCobranza').DataTable({
            columnDefs: [
                {
                    targets: [0], // Columnas 0 y 4
                    className: 'text-center font-weight-bold', // Clases para centrar y hacer negrita
                },

                
            ],
            lengthMenu: [10, 25, 50, 100],
            'pageLength': 10,
            "scrollX": true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblRegistrarPagosBoletaCobranza'));
            }
        });

    }

    function CargarBotones(){

        

        $("#btnSeleccionMultiple").click(function(){

            $('#lstRegistrosEstados tbody tr').removeClass('selected');
            Aumento = 0;
            
            
            if(MultipleSeleccion == 0){
                MultipleSeleccion = 1;
                
                $("#btnSeleccionMultiple").removeClass("btn-info").addClass("btn-danger").html('<i class="far fa-check-square"> Cancelar Selección</i>');
                $("#btnRegistrar").prop("disabled", false);
                

            }else{
                MultipleSeleccion = 0;
                $("#btnSeleccionMultiple").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                $('#lstRegistrosEstados').DataTable().column(14).search("").draw();
                toggleBotonesCirculos();
                $("#btnRegistrar").prop("disabled", true);
                Boletas= [];
                estado = 0;
            }
            toggleBotonesCirculos();
            toggleBotonesReloj()
        });

        $("#btnSeleccionMultipleDeuda").click(function(){

            $('#lstRegistrosEstadosCliente tbody tr').removeClass('selected');
            Aumento = 0;
            
            
            if(MultipleSeleccion == 0){
                MultipleSeleccion = 1;
                
                $("#btnSeleccionMultipleDeuda").removeClass("btn-info").addClass("btn-danger").html('<i class="far fa-check-square"> Cancelar Selección</i>');
                $("#btnRegistrarDeuda").prop("disabled", false);
                

            }else{
                MultipleSeleccion = 0;
                $("#btnSeleccionMultipleDeuda").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();
                toggleBotonesCirculosDeudas();
                $("#btnRegistrarDeuda").prop("disabled", true);
                Boletas= [];
                estado = 0;
            }
            toggleBotonesCirculosDeudas();
            toggleBotonesRelojDeudas()
        });

        $('#btnActualizar4').on("click",function(){

            if (estado != 0){
                MultipleSeleccion = 0;
                $("#btnSeleccionMultiple").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                $('#lstRegistrosEstados').DataTable().column(14).search("").draw();
                toggleBotonesCirculos();
                $("#btnRegistrar").prop("disabled", true);
                Boletas= [];
                estado = 0;
            }

            tabla51.ajax.reload();

            
        });

        $('#btnActualizar6').on("click",function(){

            if (estado != 0){
                MultipleSeleccion = 0;
                $("#btnSeleccionMultipleDeuda").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();
                toggleBotonesCirculos();
                $("#btnRegistrarDeuda").prop("disabled", true);
                Boletas= [];
                estado = 0;
            }

            tabla61.ajax.reload();


        });

        $("#chkEfectivoExacto1").on("change",function(){
            var checkbox1 = document.getElementById('chkEfectivoExacto1');
            var checkbox2 = document.getElementById('chkEfectivoExacto2');

            if (checkbox1.checked) {

                //console.log("Activo 1");

                if (checkbox2.checked) {

                    //console.log("Activo 2");

                    tabla31.column("5").search("").draw();

                } else {

                    //console.log("Apagado 2");

                    tabla31.column("5").search("0").draw();

                }

            } else {
                
                //console.log("Apagado 1");

                if (checkbox2.checked) {

                    //console.log("Activo 2");

                    tabla31.column("5").search('1|2|3|4|5|6', true, false).draw();

                } else {

                    //console.log("Apagado 2");

                    tabla31.column("5").search("40").draw();

                }
            }
        });

        $("#chkEfectivoExacto2").on("change",function(){
            var checkbox1 = document.getElementById('chkEfectivoExacto1');
            var checkbox2 = document.getElementById('chkEfectivoExacto2');

            if (checkbox1.checked) {

                //console.log("Activo 1");

                if (checkbox2.checked) {

                    //console.log("Activo 2");

                    tabla31.column("5").search("").draw();

                } else {

                    //console.log("Apagado 2");

                    tabla31.column("5").search("0").draw();
                    
                }

            } else {
                
                //console.log("Apagado 1");

                if (checkbox2.checked) {

                    //console.log("Activo 2");

                    tabla31.column("5").search('1|2|3|4|5|6', true, false).draw();

                } else {

                    //console.log("Apagado 2");

                    tabla31.column("5").search("40").draw();

                }
            }
        });

        $("#lstRegistrosEstados tbody").on('click','.btnAsignarHora', function(){
            Configurar = 0;
            Credito = 0;
            Aumento = 0;
            var data = tabla51.row($(this).parents('tr')).data();
            
            //console.log(data)
            Dinero_Dado = data["Dinero_Dado"]; 
            idBoleta_registro = data["nro_boleta"];

            if (Dinero_Dado == 0) {
                $("#btnConfirmar").removeClass("btn-danger").addClass("btn-success").text("Confirmar Regreso de vuelto");
            } else {
                $("#btnConfirmar").removeClass("btn-success").addClass("btn-danger").text("Cancelar Regreso de Vuelto");
            }

            if ($(this).parents('tr').hasClass('selected') && MultipleSeleccion == 0) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla51.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                ////console.log(data);

                var fila = $(this).closest("tr");
                //console.log(fila);
                // Obtener los datos de la fila
                var datosFila = $("#lstRegistrosEstados").DataTable().row(fila).data();

                //console.log(datosFila);

                Registro = datosFila["Estado"] + ";"+ datosFila["nro_boleta"];

                console.log(Registro);

                var Vuelto = parseFloat(datosFila["Vuelto"]);

                if(datosFila["Estado"] == 0){
                    Swal.fire({
                        icon: 'warning',
                        title: 'El registro todavia no esta confirmado'
                    });
                }else{

                    $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 19,
                                'codigo': datosFila["nro_boleta"]
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                var elemento = document.getElementById("modal_tipos_pago");

                                elemento.style.display = "block";

                                console.log("deuda: ",respuesta);
                                var deuda =parseFloat(respuesta[0]["deuda"])
                                $("#iptDeuda").prop("disabled", true);
                                $("#iptDeuda").val(deuda.toFixed(2));
                                $("#iptVuelto").prop("disabled", true);
                                $("#iptVuelto").val(Vuelto.toFixed(2));
                                $("#iptAmortiguacion").val("");

                                $("#iptHoraEstimada").prop("disabled", false);
                                $("#iptPersona").prop("disabled", false);
                                $("#iptHora").prop("disabled", false);
                                $("#btn3m").prop("disabled", false);
                                $("#btn5m").prop("disabled", false);
                                $("#btn10m").prop("disabled", false);
                                $("#btn30m").prop("disabled", false);
                                $("#btnConfigurar").prop("disabled", true);

                                if(deuda <= 0 || datosFila["Estado"] == 1){

                                    elemento.style.display = "none";
                                    $("#iptAmortiguacion").prop("disabled", true);
                                    $("#btn10").prop("disabled", true);
                                    $("#btn50").prop("disabled", true);
                                    $("#btn100").prop("disabled", true);
                                    $("#btnCredito").prop("disabled", true);

                                }else{

                                    $("#iptAmortiguacion").prop("disabled", false);
                                    $("#btn10").prop("disabled", false);
                                    $("#btn50").prop("disabled", false);
                                    $("#btn100").prop("disabled", false);
                                    $("#btnCredito").prop("disabled", false);
                                    
                                }

                                if(datosFila["Estado"] == 2){

                                    $("#selTiempo").val("2");
                                    $("#selTiempo").prop("disabled", true);
                                    establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                                    $("#iptHoraEstimada").prop("disabled", true);
                                    $("#btn3m").prop("disabled", true);
                                    $("#btn5m").prop("disabled", true);
                                    $("#btn10m").prop("disabled", true);
                                    $("#btn30m").prop("disabled", true);

                                }else if (datosFila["Estado"] == 1){

                                    $("#selTiempo").val("1");
                                    $("#selTiempo").prop("disabled", true);
                                    $("#iptHoraEstimada").val(moment().format('HH:mm:ss'));

                                }else{

                                    $("#selTiempo").val("0");
                                    $("#selTiempo").prop("disabled", true);
                                    $("#iptPersona").prop("disabled", true);
                                    $("#iptHoraEstimada").prop("disabled", true);
                                    $("#iptHora").prop("disabled", true);
                                    $("#btn3m").prop("disabled", true);
                                    $("#btn5m").prop("disabled", true);
                                    $("#btn10m").prop("disabled", true);
                                    $("#btn30m").prop("disabled", true);
                                    $("#btnConfigurar").prop("disabled", false);
                                    establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);

                                }
                                $("#iptPersona").val(datosFila["mensajero"]);

                                actualizarTextoBotones(deuda)

                                $("#mdlRegistrarTiempo").modal('show');
                                $("#iptDia").val(moment().format('YYYY-MM-DD'));
                                
                                $("#iptDia").attr("readonly", true);

                                // Configurar el Datepicker en el campo "iptDia"
                                $("#iptDia").datepicker({
                                    dateFormat: 'yy-mm-dd' // Formato "dd/mm/yyyy"
                                });
                                
                                $("#iptHora").val(moment().format('HH:mm:ss'));
                                
                            }
                    })

                    

                }
            
            }
            

        });

        $("#lstRegistrosEstados tbody").on('click','.btnCambiarSecreto', function(){
            Configurar = 0;
            Credito = 0;
            Aumento = 0;

            var data = tabla51.row($(this).parents('tr')).data();
            
            //console.log(data)
            Dinero_Dado = data["Dinero_Dado"]; 
            idBoleta_registro = data["nro_boleta"];

            if (Dinero_Dado == 0) {
                $("#btnConfirmar").removeClass("btn-danger").addClass("btn-success").text("Confirmar Regreso de vuelto");
            } else {
                $("#btnConfirmar").removeClass("btn-success").addClass("btn-danger").text("Cancelar Regreso de Vuelto");
            }

            if ($(this).parents('tr').hasClass('selected') && MultipleSeleccion == 0) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla51.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                ////console.log(data);

                var fila = $(this).closest("tr");
                //console.log(fila);
                // Obtener los datos de la fila
                var datosFila = $("#lstRegistrosEstados").DataTable().row(fila).data();

                //console.log(datosFila);

                $('#mdlContraseña').modal('show');
            
            }
            

        });

        $("#lstRegistrosEstados tbody").on('click','.btnSeleccion', function(){

            Configurar = 0;
            Credito = 0;
            Aumento = 0;
            
            var data = tabla51.row($(this).parents('tr')).data();

            idBoleta_registro = data["nro_boleta"];

            estado = data["Estado"];

            estado = parseInt(estado);

            //console.log(estado)

            if(estado >= 3){

                Swal.fire({

                    icon: 'warning',
                    title: 'No se puede alterar multiples opciones en estado rojo o gris',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,

                })

                estado = 0;
                idBoleta_registro = 0;

            }else{

            

                if ($(this).parents('tr').hasClass('selected')) {

                    $(this).parents('tr').removeClass('selected');

                    $('#modulos').jstree("deselect_all", false);

                    $("#select_modulos option").remove();

                    $("#card-modulos").css("display", "none");

                    var index = Boletas.indexOf(idBoleta_registro);

                    if (index !== -1) {
                        Boletas.splice(index, 1);
                    }
                    if (Boletas.length === 0) {
                        $('#lstRegistrosEstados').DataTable().column(14).search("").draw();

                        estado = 0;

                        toggleBotonesCirculos();
                    }

                }else{

                    $(this).parents('tr').addClass('selected');
                    
                    Boletas.push(idBoleta_registro);

                    $('#lstRegistrosEstados').DataTable().column(14).search(estado).draw();

                    toggleBotonesCirculos();  
                    
                    //console.log(Boletas)
                    
                }

            }
        });

        $("#lstRegistrosEstadosCliente tbody").on('click','.btnAsignarHoraDeuda', function(){
            Configurar = 0;
            Credito = 0;
            Aumento = 0;
            var data = tabla61.row($(this).parents('tr')).data();
            
            //console.log(data)
            Dinero_Dado = data["Dinero_Dado"]; 
            idBoleta_registro = data["nro_boleta"];

            if (Dinero_Dado == 0) {
                $("#btnConfirmar").removeClass("btn-danger").addClass("btn-success").text("Confirmar Regreso de vuelto");
            } else {
                $("#btnConfirmar").removeClass("btn-success").addClass("btn-danger").text("Cancelar Regreso de Vuelto");
            }

            if ($(this).parents('tr').hasClass('selected') && MultipleSeleccion == 0) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla61.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                ////console.log(data);

                var fila = $(this).closest("tr");
                //console.log(fila);
                // Obtener los datos de la fila
                var datosFila = $("#lstRegistrosEstadosCliente").DataTable().row(fila).data();

                //console.log(datosFila);

                Registro = datosFila["Estado"] + ";"+ datosFila["nro_boleta"];

                var Vuelto = parseFloat(datosFila["Vuelto"]);

                if(datosFila["Estado"] == 0){
                    Swal.fire({
                        icon: 'warning',
                        title: 'El registro todavia no esta confirmado'
                    });
                }else{

                    $.ajax({
                            url: "ajax/ventas.ajax.php",
                            method: "POST",
                            data: {
                                'accion': 19,
                                'codigo': datosFila["nro_boleta"]
                            },
                            dataType: 'json',
                            success: function(respuesta) {

                                //console.log("hora: ",respuesta[0]["fecha_entrega"]);
                                var deuda =parseFloat(respuesta[0]["deuda"])
                                $("#iptDeuda").prop("disabled", true);
                                $("#iptDeuda").val(deuda.toFixed(2));
                                $("#iptVuelto").prop("disabled", true);
                                $("#iptVuelto").val(Vuelto.toFixed(2));
                                $("#iptAmortiguacion").val("");

                                $("#iptHoraEstimada").prop("disabled", false);
                                $("#iptPersona").prop("disabled", false);
                                $("#iptHora").prop("disabled", false);
                                $("#btn3m").prop("disabled", false);
                                $("#btn5m").prop("disabled", false);
                                $("#btn10m").prop("disabled", false);
                                $("#btn30m").prop("disabled", false);
                                $("#btnConfigurar").prop("disabled", true);


                                if(deuda <= 0){
                                    $("#iptAmortiguacion").prop("disabled", true);
                                    $("#btn10").prop("disabled", true);
                                    $("#btn50").prop("disabled", true);
                                    $("#btn100").prop("disabled", true);
                                    $("#btnCredito").prop("disabled", true);
                                }else{
                                    $("#iptAmortiguacion").prop("disabled", false);
                                    
                                    $("#btn10").prop("disabled", false);
                                    $("#btn50").prop("disabled", false);
                                    $("#btn100").prop("disabled", false);
                                    $("#btnCredito").prop("disabled", false);
                                    
                                }

                                if(datosFila["Estado"] == 2){
                                    $("#selTiempo").val("2");
                                    $("#selTiempo").prop("disabled", true);
                                    establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                                    $("#iptHoraEstimada").prop("disabled", true);
                                    $("#btn3m").prop("disabled", true);
                                    $("#btn5m").prop("disabled", true);
                                    $("#btn10m").prop("disabled", true);
                                    $("#btn30m").prop("disabled", true);
                                }else if (datosFila["Estado"] == 1){
                                    $("#selTiempo").val("1");
                                    $("#selTiempo").prop("disabled", true);
                                    $("#iptHoraEstimada").val(moment().format('HH:mm:ss'));
                                }else{
                                    $("#selTiempo").val("0");
                                    $("#selTiempo").prop("disabled", true);
                                    $("#iptPersona").prop("disabled", true);
                                    $("#iptHoraEstimada").prop("disabled", true);
                                    $("#iptHora").prop("disabled", true);
                                    $("#btn3m").prop("disabled", true);
                                    $("#btn5m").prop("disabled", true);
                                    $("#btn10m").prop("disabled", true);
                                    $("#btn30m").prop("disabled", true);
                                    $("#btnConfigurar").prop("disabled", false);
                                    establecerHoraDesdeString(respuesta[0]["fecha_entrega"]);
                                }
                                $("#iptPersona").val(datosFila["mensajero"]);

                                actualizarTextoBotones(deuda)

                                $("#mdlRegistrarTiempo").modal('show');
                                $("#iptDia").val(moment().format('YYYY-MM-DD'));
                                
                                $("#iptDia").attr("readonly", true);

                                // Configurar el Datepicker en el campo "iptDia"
                                $("#iptDia").datepicker({
                                    dateFormat: 'yy-mm-dd' // Formato "dd/mm/yyyy"
                                });
                                
                                $("#iptHora").val(moment().format('HH:mm:ss'));
                                
                            }
                    })

                    

                }
            
            }
            

        });

        $("#lstRegistrosEstadosCliente tbody").on('click','.btnSeleccionDeuda', function(){

            Configurar = 0;
            Credito = 0;
            Aumento = 0;
            
            var data = tabla61.row($(this).parents('tr')).data();

            idBoleta_registro = data["nro_boleta"];

            estado = data["Estado"];

            estado = parseInt(estado);

            if(estado < 3){

                Swal.fire({

                    icon: 'warning',
                    title: 'No se puede alterar multiples opciones en estado rojo o gris',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,

                })

                estado = 0;
                idBoleta_registro = 0;

            }else{

            

                if ($(this).parents('tr').hasClass('selected')) {

                    $(this).parents('tr').removeClass('selected');

                    $('#modulos').jstree("deselect_all", false);

                    $("#select_modulos option").remove();

                    $("#card-modulos").css("display", "none");

                    var index = Boletas.indexOf(idBoleta_registro);

                    if (index !== -1) {
                        Boletas.splice(index, 1);
                    }
                    if (Boletas.length === 0) {
                        $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();

                        estado = 0;

                        toggleBotonesCirculosDeudas();
                    }

                }else{

                    $(this).parents('tr').addClass('selected');
                    
                    Boletas.push(idBoleta_registro);

                    $('#lstRegistrosEstadosCliente').DataTable().column(14).search(estado).draw();

                    toggleBotonesCirculosDeudas();  
                    
                    //console.log(Boletas)
                    
                }

            }
        });

        $("#lstProductosCatalogoxCliente").on('click', '.btnEliminarHistorial', function() {

            var data = tabla02.row($(this).parents('tr')).data();

            var cliente = document.getElementById("iptNombreCliente_0");
            var textoCliente = cliente.textContent;

            //console.log("eliminado : ",textoCliente.trim() ,"-eliminado : ", data[1], " - ", data[3] )
            isSwalOpen = true;
            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar?',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                //console.log(result);

                if(result.isConfirmed){

                    //console.log("esta confirmado");

                    $.ajax({
                        async: false,
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 17,
                            'codigo': data[1],
                            'medida': data[3],
                            'cliente': textoCliente.trim(),
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

        $("#btnRegistrar").on("click",function() {

            if (Boletas.length === 0) {

                Toast.fire({
                    icon: 'warning',
                    title: " No hay Boletas Seleccionadas",
                    showConfirmButton: false,
                    timer: 1500
                })

            }else{

                //console.log(estado);

                //console.log(Boletas);

                $("#iptDia_2").val(moment().format('YYYY-MM-DD'));
                                
                $("#iptDia_2").attr("readonly", true);

                // Configurar el Datepicker en el campo "iptDia"
                $("#iptDia_2").datepicker({
                    dateFormat: 'yy-mm-dd' // Formato "dd/mm/yyyy"
                });

                $("#iptHora_2").val(moment().format('HH:mm:ss'));

                $("#iptHoraEstimada_2").val(moment().format('HH:mm:ss'));
                
                $("#btn3m_2").prop("disabled", false);
                $("#btn5m_2").prop("disabled", false);
                $("#btn10m_2").prop("disabled", false);
                $("#btn30m_2").prop("disabled", false);

                if(estado == 1){

                    $("#selTiempo_2").val("1");

                }else if(estado == 2){

                    $("#selTiempo_2").val("2");
                    
                    $("#iptHoraEstimada_2").prop("disabled", true);

                    $("#btn3m_2").prop("disabled", true);
                    $("#btn5m_2").prop("disabled", true);
                    $("#btn10m_2").prop("disabled", true);
                    $("#btn30m_2").prop("disabled", true);

                }

                

                

                $("#mdlRegistrarTiempo2").modal('show');

            }

                
        })

        $("#btnRegistrarDeuda").on("click",function() {

            if (Boletas.length === 0) {

                Toast.fire({
                    icon: 'warning',
                    title: " No hay Boletas Seleccionadas",
                    showConfirmButton: false,
                    timer: 1500
                })

            }else{

                //console.log(estado);

                //console.log(Boletas);

                $("#iptDia_3").val(moment().format('YYYY-MM-DD'));
                                
                $("#iptDia_3").attr("readonly", true);

                // Configurar el Datepicker en el campo "iptDia"
                $("#iptDia_3").datepicker({
                    dateFormat: 'yy-mm-dd' // Formato "dd/mm/yyyy"
                });

            

                

                

                $("#mdlRegistrarTiempo3").modal('show');

            }

                
        })

        $("#btnCancelarCredito_3").on("click",function() {

            var Tipo_pago = $("#sel_TipoPago_3").val();

            var Persona_Dinero = $("#iptPersona_3").val();

            //console.log(Boletas);

                Swal.fire({

                    icon: 'warning',
                    title: 'Seguro de Cancelar las Deudas?',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,

                }).then((result) => {

                    //console.log(result);

                    if(result.isConfirmed){

                        for( var i = 0 ; i <= Boletas.length ; i++){

                            $.ajax({
                                async: false,
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 28,
                                    'nro_boleta':Boletas[i],
                                    'Tipo_pago':Tipo_pago,
                                    'Persona_Dinero':Persona_Dinero,
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    if(respuesta === "ok"){
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Deudas Canceladas',
                                            confirmButtonText: 'Aceptar',
                                        }).then((result) => {
                                            if(result.isConfirmed){
                                                MultipleSeleccion = 0;
                                                $("#btnSeleccionMultipleDeuda").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                                                $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();
                                                toggleBotonesCirculosDeudas();
                                                $("#btnRegistrarDeuda").prop("disabled", true);
                                                Boletas= [];
                                                estado = 0;

                                                $("#sel_TipoPago_3").val("Opc");

                                                $("#iptPersona_3").val("");
                                                isSwalOpen = false;
                                                tabla61.ajax.reload();
                                                tabla51.ajax.reload();
                                                //tabla31.ajax.reload();
                                                //tabla21.ajax.reload();
                                            }
                                        })
                                        
                                        
                                    }else if(respuesta  === "falta12"){
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Falta la Persona y Tipo de Pago',
                                            confirmButtonText: 'Aceptar',
                                        })
                                    }else if(respuesta  === "falta1"){
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Por favor, seleccione un tipo de pago',
                                            confirmButtonText: 'Aceptar',
                                        })
                                    }else if(respuesta  === "falta2"){
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Por favor, escriba a la persona',
                                            confirmButtonText: 'Aceptar',
                                        })
                                    }

                                }
                            });

                        }

                    }
                    
                    
                })
        })

        $("#btnVolverRegistro_3").on("click",function() {

            var Tipo_pago = $("#sel_TipoPago_3").val();

            var Persona_Dinero = $("#iptPersona_3").val();

            //console.log(Boletas);

                Swal.fire({

                    icon: 'warning',
                    title: 'Seguro de Eliminar las Deudas?',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,

                }).then((result) => {

                    //console.log(result);

                    if(result.isConfirmed){

                        for( var i = 0 ; i <= Boletas.length ; i++){

                            $.ajax({
                                async: false,
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 24,
                                    'nro_boleta':Boletas[i],
                                },
                                dataType: 'json',
                                success: function(respuesta) {

                                    if(respuesta === "ok"){
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Deudas Canceladas',
                                            confirmButtonText: 'Aceptar',
                                        }).then((result) => {
                                            if(result.isConfirmed){
                                                MultipleSeleccion = 0;
                                                $("#btnSeleccionMultipleDeuda").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                                                $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();
                                                toggleBotonesCirculosDeudas();
                                                $("#btnRegistrarDeuda").prop("disabled", true);
                                                Boletas= [];
                                                estado = 0;
                                                isSwalOpen = false;
                                                tabla61.ajax.reload();
                                                tabla51.ajax.reload();
                                                //tabla31.ajax.reload();
                                                //tabla21.ajax.reload();
                                            }
                                        })
                                        
                                        
                                    }

                                }
                            });

                        }

                    }
                    
                    
                })
        })

        $("#btnVolverRegistro_2").on("click",function() {

            
            var nro_boleta = idBoleta_registro
                Swal.fire({

                    icon: 'warning',
                    title: 'Seguro de Cancelar',
                    confirmButtonText: 'Aceptar',
                    showCancelButton: true,

                }).then((result) => {

                    //console.log(result);

                    if(result.isConfirmed){

                        for( var i = 0 ; i <= Boletas.length ; i++){

                            $.ajax({
                                async: false,
                                url: "ajax/ventas.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 24,
                                    'nro_boleta':Boletas[i]
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
                                                MultipleSeleccion = 0;
                                                $("#btnSeleccionMultiple").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                                                $('#lstRegistrosEstados').DataTable().column(14).search("").draw();
                                                toggleBotonesCirculos();
                                                $("#btnRegistrar").prop("disabled", true);
                                                Boletas= [];
                                                estado = 0;
                                                isSwalOpen = false;
                                                tabla51.ajax.reload();
                                                //tabla31.ajax.reload();
                                                //tabla21.ajax.reload();
                                            }
                                        })
                                        
                                        
                                    }

                                }
                            });

                        }

                    }
                    
                    
                })
        })

        $("#btnGuardarTiempo_2").on("click",function() {

            var Dia = $("#iptDia_2").val();
            var fecha = $("#iptHora_2").val();
            var fecha_estimada = $("#iptHoraEstimada_2").val();
            var eleccion = $("#selTiempo_2").val();
            var persona  = $("#iptPersona_2").val();
        

            var tiempo = (Dia + " " + fecha);
            var tiempo_estimado = (Dia + " " + fecha_estimada);
            //console.log( " -- Tiempo estimado : " +tiempo_estimado + " -- Estado: " + estado+ " ---- " + " tiempo : " + tiempo);

            var Amortiguacion = 0;

            //console.log("Amortiguacion: ",Amortiguacion);
            //console.log("estado: ",estado);
            //console.log(Boletas)

            if(parseInt(estado) == 1){
                //console.log("estado es inicial")
            }

            $.ajax({
                async: false,
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 26,
                    'tiempo_estimado':tiempo_estimado,
                    'tiempo' : tiempo,
                    'estado': estado,
                    'Boletas': Boletas,
                    'persona':persona,
                },
                dataType: 'json',
                success: function(respuesta) {

                    if(respuesta === "ok"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Registrados correctamente',
                            confirmButtonText: 'Aceptar',
                        }).then((result) => {
                            if(result.isConfirmed){
                                MultipleSeleccion = 0;
                                $("#btnSeleccionMultiple").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                                $('#lstRegistrosEstados').DataTable().column(14).search("").draw();
                                toggleBotonesCirculos();
                                $("#btnRegistrar").prop("disabled", true);
                                Boletas= [];
                                estado = 0;
                                isSwalOpen = false;
                                tabla51.ajax.reload();
                                //tabla31.ajax.reload();
                                //tabla21.ajax.reload();
                            }
                        })
                        
                        
                    }

                }
            });
            
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
                                            //tabla31.ajax.reload();
                                            //tabla21.ajax.reload();
                                        }
                                    })
                                    
                                    
                                }

                            }
                        });


                    }
                    
                    
                })
        })
        
        $("#btnConfigurar").on("click",function() {

            if(Configurar == 0){

                $("#iptHoraEstimada").prop("disabled", false);
                $("#iptPersona").prop("disabled", false);
                $("#iptHora").prop("disabled", false);
                $("#btn3m").prop("disabled", false);
                $("#btn5m").prop("disabled", false);
                $("#btn10m").prop("disabled", false);
                $("#btn30m").prop("disabled", false);
                Configurar = 1;

            }else if (Configurar == 1){

                $("#iptHoraEstimada").prop("disabled", true);
                $("#iptPersona").prop("disabled", true);
                $("#iptHora").prop("disabled", true);
                $("#btn3m").prop("disabled", true);
                $("#btn5m").prop("disabled", true);
                $("#btn10m").prop("disabled", true);
                $("#btn30m").prop("disabled", true);
                Configurar = 0;

            }
        
            
            
        })

        $("#btnGuardarTiempo").on("click",function() {
            var Dia = $("#iptDia").val();
            var fecha = $("#iptHora").val();
            var fecha_estimada = $("#iptHoraEstimada").val();
            var eleccion = $("#selTiempo").val();
            var persona  = $("#iptPersona").val();

            var Tipo_pago = $("#selTipoPago").val();

            var Persona_Dinero = $("#iptPersonaDinero").val();
            
            var DatosRegistro = Registro.split(";");

            var estado = DatosRegistro[0];

            var tiempo = (Dia + " " + fecha);
            var tiempo_estimado = (Dia + " " + fecha_estimada);
            //console.log(Dia + " " + fecha + " -- Registro: " + estado+ " -- " + DatosRegistro[1] + "---- " + " eleccion : " + eleccion);

            var Amortiguacion = $("#iptAmortiguacion").val();

            //console.log("Amortiguacion: ",Amortiguacion);
            //console.log("estado: ",estado);

            if(Amortiguacion === ""){
                Amortiguacion = 0;
            }

            

            var Vuelto = $("#iptVuelto").val();

            var Deuda = $("#iptDeuda").val();

            if(parseInt(estado) == 1){
                //console.log("estado es inicial")
                Amortiguacion = 0;
            }

            Amortiguacion = parseFloat(Amortiguacion).toFixed(2);

            var Amortiguacion2 = parseFloat(Amortiguacion).toFixed(2);

            Vuelto = parseFloat(Vuelto).toFixed(2);

            Deuda = parseFloat(Deuda).toFixed(2);

            
            if(parseFloat(Amortiguacion) > parseFloat(Deuda)){
                Amortiguacion = parseFloat(Deuda).toFixed(2);
            }

            if(Vuelto <= 0){
                Vuelto = 0;
            }

            //console.log("Amortiguacion: ",Amortiguacion)


            var Boleta = DatosRegistro[1];

            if(DatosRegistro[0] > 0) {

                var caso;

                if(Amortiguacion === Deuda){

                    //console.log("Amortiguacion es igual")
                    if(estado == 3){
                        caso = 3;
                    }else{
                        caso = 2;
                    }

                }else{
                    caso = 1;
                }

                //console.log("estado : ", estado , " caso : ", caso);

                $.ajax({
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 16,
                            'tiempo': tiempo,
                            'tiempo_estimado': tiempo_estimado,
                            'estado': estado,
                            'Boleta': Boleta,
                            'eleccion' : eleccion,
                            'persona' : persona,
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            //console.log(respuesta);

                            if(respuesta === "ok"){

                                $.ajax({
                                    url: "ajax/ventas.ajax.php",
                                    method: "POST",
                                    data: {
                                        'accion': 20,
                                        'Boleta': Boleta,
                                        'estado': estado,
                                        'caso': caso,
                                        'Amortiguacion': Amortiguacion,
                                        'Amortiguacion2': Amortiguacion2,
                                        'Vuelto':Vuelto,
                                        'Tipo_pago': Tipo_pago,
                                        'Persona_Dinero':Persona_Dinero,
                                    },
                                    dataType: 'json',
                                    success: function(respuesta) {

                                        //console.log(respuesta);

                                        if(respuesta === "ok"){

                                            Swal.fire({
                                                icon: 'success',
                                                title: 'ok'
                                            });
                                            $("#sel_TipoPago_3").val("Opc");

                                                $("#iptPersona_3").val("");
                                            //tabla21.ajax.reload();
                                            //tabla31.ajax.reload();
                                            tabla51.ajax.reload();
                                            tabla61.ajax.reload();
                                            $("#iptAmortiguacion").val("");
                                        }
                                        
                                        
                                    }
                                })
                            }
                            
                            
                        }
                })
                
            }

            
            
        });

        $("#btnCredito").on("click",function() {

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

        $("#btnConfirmar").on("click",function() {

            //console.log(idBoleta_registro);


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
                    //console.log(respuesta)
                    if(Dinero_Dado == 1){
                        Dinero_Dado = 0;
                        $("#btnConfirmar").removeClass("btn-danger").addClass("btn-success").text("Confirmar Regreso de vuelto");
                    }else if(Dinero_Dado == 0){
                        Dinero_Dado = 1;
                        $("#btnConfirmar").removeClass("btn-success").addClass("btn-danger").text("Cancelar Regreso de Vuelto");
                    }
                    tabla51.ajax.reload();
                }

            })

        });

        $("#btnGuardarProducto").on("click",function() {

            var codigo = $("#iptCodigoReg").val();            
            var descripcion = $("#iptDescripcionReg").val();
            var precio_compra = $("#iptPrecioCompraReg").val();
            var precio_venta = $("#iptPrecioVentaReg").val();
            var utilidad = $("#iptUtilidadReg").val();
            var precio_paquete = $("#iptPrecioVentaRegPaquete").val();
            var precio_docena = $("#iptPrecioVentaRegDocena").val();
            var precio_ciento = $("#iptPrecioVentaRegCiento").val();
            var precio_millar = $("#iptPrecioVentaRegMillar").val();
            var precio_caja = $("#iptPrecioVentaRegCaja").val();
            var precio_fardo = $("#iptPrecioVentaRegFardo").val();

            var precio_venta_2 = $("#iptPrecioVentaReg_2").val();
            var precio_paquete_2 = $("#iptPrecioVentaRegPaquete_2").val();
            var precio_docena_2 = $("#iptPrecioVentaRegDocena_2").val();
            var precio_ciento_2 = $("#iptPrecioVentaRegCiento_2").val();
            var precio_millar_2 = $("#iptPrecioVentaRegMillar_2").val();
            var precio_caja_2 = $("#iptPrecioVentaRegCaja_2").val();
            var precio_fardo_2 = $("#iptPrecioVentaRegFardo_2").val();

            var cantidad_millar = $("#iptCantidadMillar").val();
            var cantidad_docena = $("#iptCantidadDocena").val();
            var cantidad_fardo = $("#iptCantidadFardo").val();
            var cantidad_caja = $("#iptCantidadCaja").val();
            var stock = $("#iptStockReg").val();
            var min_stock = $("#iptMinimoStockReg").val();


            EdicionProducto(codigo,descripcion,precio_compra,precio_venta,utilidad,precio_paquete,precio_docena,precio_ciento,precio_millar,precio_caja,precio_fardo,
            precio_venta_2,precio_paquete_2,precio_docena_2,precio_ciento_2,precio_millar_2,precio_caja_2,precio_fardo_2,cantidad_millar,cantidad_docena,cantidad_fardo,cantidad_caja,stock,min_stock)

            $("#mdlGestionarProducto").modal("hide");
            


        });

        $("#btnVerPagosVenta").on("click",function() {

            console.log(idBoleta_registro);

            $("#mdlRegistrarTiempo").modal('hide');

            $("#modalPagosVenta").modal('show');

            CrearMostrar(idBoleta_registro);

        });

        $("#btnCerrarModalPagos").on("click",function() {

            $("#modalPagosVenta").modal('hide');

        });

        $('#modalPagosVenta').on('hidden.bs.modal', function () {
            $("#mdlRegistrarTiempo").modal('show');
        });

        $("#btnMandarCobro").on("click",function(){

            VerificarRepetidos(nro_Boletas, total_cobros);

        });

        $("#lstRegistrosPedidos tbody").on('click','.btnSeleccionCobro', function(){


            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");


            }else{

                $(this).parents('tr').addClass('selected');

            }

            var selectedRows = tabla71.rows('.selected').nodes();
            nro_Boletas = [];
            total_cobros = [];

            $(selectedRows).each(function() {
                var rowData = tabla71.row(this).data();
                nro_Boletas.push(rowData[1]); // Suponiendo que la segunda columna contiene el número de boletas
                total_cobros.push(rowData[17]);
            });

            console.log("nro_Boletas : ", nro_Boletas);
            console.log("total_cobros : ", total_cobros);

            
        });
        
        $("#btnEmpezarCobranza").on("click",function(){

            var selectedRows = tabla81.rows().nodes();
            nro_Boletas = [];
            total_cobros = [];

            $(selectedRows).each(function() {
                var rowData = tabla81.row(this).data();
                nro_Boletas.push(rowData[0]); // Suponiendo que la segunda columna contiene el número de boletas
                total_cobros.push(rowData[3]);
            });

            var error = "no";

            var sel_PM_hora_salida = $("#sel_PM_hora_salida").val();

            var sel_PM_hora_regreso = $("#sel_PM_hora_regreso").val();

            var hora_salida = $("#hora_salida").val(); 

            var hora_regreso = $("#hora_regreso").val();

            if(sel_PM_hora_salida === "PM"){

                hora_salida = horaPM(hora_salida);

            }else if(sel_PM_hora_salida === "AM"){
                
                hora_salida = horaAM(hora_salida);

            }

            if(sel_PM_hora_regreso === "PM"){

                hora_regreso = horaPM(hora_regreso);

            }else if(sel_PM_hora_regreso === "AM"){
                
                hora_regreso = horaAM(hora_regreso);

            }

            console.log(nro_Boletas, hora_salida, hora_regreso);

            if(nro_Boletas.length == 0){
                
                Toast.fire({
                    icon: 'error',
                    title: " No hay ventas para cobrar",
                    showConfirmButton: false,
                    timer: 1500
                })

            }else{

                for(i = 0; i< nro_Boletas.length;i++){

                    var nro_boleta = nro_Boletas[i];
                    var total_cobro = total_cobros[i];
                    var cobrador = $("#iptElegirCobrador").val(); 

                    $.ajax({
                        async: false,
                        url: "ajax/ventas.ajax.php",
                        method: "POST",
                        data: {
                            'accion': 43,
                            'nro_boleta':nro_boleta,
                            'total_cobro':total_cobro,
                            'hora_salida':hora_salida,
                            'hora_regreso':hora_regreso,
                            'cobrador':cobrador,

                        },
                        dataType: 'json',
                        success: function (respuesta) {

                            console.log(respuesta)

                            if(respuesta === "ok"){
                                error = "no";
                            }else{
                                error = "si";
                            }

                        },
                    });

                }

            }

            if(error === "no"){

                Toast.fire({
                    icon: 'success',
                    title: " Registrado correctamente",
                    showConfirmButton: false,
                    timer: 1500
                })

                $("#modalMandarCobrador").modal("hide");
            }else if(error === "si"){

                Toast.fire({
                    icon: 'error',
                    title: " Hubo un error con los guardados",
                    showConfirmButton: false,
                    timer: 1500
                })

            }

        });

        $("#btnRegistrarRegreso").on("click",function(){

            Swal.fire({
                icon: 'warning',
                title: "Tener mucho cuidado en esta parte los datos que guarde no podran ser cambiados despues",
                confirmButtonText: 'Continuar',
                showCancelButton: true,
                cancelButtonText: 'Hacerlo mas Tarde',
            }).then((result) => {
                //console.log(result);

                if(result.isConfirmed){

                    CrearMostrarSegundoModal()

                }

                
            })

        });

        $("#tblRegistrarPagosBoletaCobranza tbody").on('click','.btnSeleccionarCobranza', function(){

            var data = tabla91.row($(this).parents('tr')).data();

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

                $("#iptElegirCobradorApunte").val("");

                $("#iptTotalCobroRegistro").val("");


            }else{

                tabla91.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                $("#iptElegirCobradorApunte").val(data[5]);

                $("#iptTotalCobroRegistro").val(data[3]);

            }

            
        });

        // Agrega eventos de clic a los botones
        document.getElementById('btn3m').addEventListener('click', function () {
            
            Aumento = Aumento + 3;
            agregarMinutos(Aumento);
        });

        document.getElementById('btn5m').addEventListener('click', function () {
            
            Aumento = Aumento + 5;
            agregarMinutos(Aumento);
        });

        document.getElementById('btn10m').addEventListener('click', function () {
            
            Aumento = Aumento + 10;
            agregarMinutos(Aumento);
        });

        document.getElementById('btn30m').addEventListener('click', function () {
            
            Aumento = Aumento + 30;
            agregarMinutos(Aumento);
        });

        document.getElementById('btn3m_2').addEventListener('click', function () {
            
            Aumento = Aumento + 3;
            agregarMinutos2(Aumento);
        });

        document.getElementById('btn5m_2').addEventListener('click', function () {
            
            Aumento = Aumento + 5;
            agregarMinutos2(Aumento);
        });

        document.getElementById('btn10m_2').addEventListener('click', function () {
            
            Aumento = Aumento + 10;
            agregarMinutos2(Aumento);
        });

        document.getElementById('btn30m_2').addEventListener('click', function () {
            
            Aumento = Aumento + 30;
            agregarMinutos2(Aumento);
        });

        document.getElementById('btn10').addEventListener('click', function () {
            
            var dinero = document.getElementById('btn10').textContent;
            
            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));
            
            agregarDinero(dineroNumero);
        });

        document.getElementById('btn50').addEventListener('click', function () {
            
            var dinero = document.getElementById('btn50').textContent;
            
            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));
            
            agregarDinero(dineroNumero);
        });

        document.getElementById('btn100').addEventListener('click', function () {
            
            var dinero = document.getElementById('btn100').textContent;
            
            var dineroNumero = parseFloat(dinero.replace('+ S./', ''));
            
            agregarDinero(dineroNumero);
        });

        document.getElementById("btnMostrarContraseña").addEventListener("click", function () {
            var passwordInput = document.getElementById("iptContraseñaNombres");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });

        document.getElementById("btnIngresarContraseña").addEventListener("click", function () {

            //console.log("hola")
            var passwordInput = document.getElementById("iptContraseñaNombres").value;
            // Aquí puedes realizar la verificación de la contraseña
            // Por ejemplo, vamos a verificar si la contraseña ingresada es "123456"
            var contraseñaCorrecta = "e10adc3949ba59abbe56e057f20f883e"; // Contraseña cifrada
            var contraseñaIngresada = md5(passwordInput); // Convertimos la contraseña ingresada a MD5 para comparar
            //console.log(contraseñaIngresada)
            if (contraseñaIngresada === contraseñaCorrecta) {
                //console.log("hola")
                // Contraseña correcta, puedes realizar las acciones necesarias aquí
                alert("¡Contraseña correcta!");

                $("#mdlContraseña").modal('hide');

                $("#iptContraseñaNombres").val("")

                $("#mdlCambiarNombres").modal('show');
            } else {
                //console.log("hola incorrecto")
                // Contraseña incorrecta
                alert("Contraseña incorrecta. Por favor, inténtalo de nuevo.");
            }
        });

        document.getElementById("btnCambiar_Nombres").addEventListener("click", function () {

            //console.log("idBoleta_registro : ", idBoleta_registro)

            var mensajero = $("#iptPersona_Mensajero_secreto").val()

            var Persona_Dinero = $("#iptPersona_Cuenta_secreto").val()

            var nro_boleta = idBoleta_registro

            $.ajax({
                async: false,
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 29,
                    'nro_boleta': nro_boleta,
                    'Persona_Dinero': Persona_Dinero,
                    'mensajero': mensajero,
                },
                dataType: 'json',
                success: function(respuesta) {
                    //console.log(respuesta)

                    Swal.fire({
                            icon: 'success',
                            title: 'Cambios realizados correctamente',
                        })

                        $("#iptPersona_Mensajero_secreto").val("")
                        $("#iptPersona_Cuenta_secreto").val("")
                        tabla01.ajax.reload();
                        //tabla21.ajax.reload();
                        //tabla31.ajax.reload();
                        tabla51.ajax.reload();
                        tabla61.ajax.reload();



                }
            })

            
        });

        // Función para cifrar la contraseña en MD5
        


    }

    function CrearMostrarSegundoModal(){

        RellenoTabla();

        $("#modalRegresoCobrador").modal("show");

        $('#hora_real').inputmask('hh:mm', {
            'placeholder': 'hh:mm',
            'alias': 'datetime',
            'inputFormat': 'hh:mm',
            'min': '01:00', // Hora mínima permitida
            'max': '12:59'  // Hora máxima permitida
        });

        $("#hora_real").val(moment().format('hh:mm'));

    }

    function RellenoTabla(){

        tabla91.clear().draw();

        $.ajax({
                async: false,
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 45,
                },
                dataType: 'json',
                success: function (respuesta) {

                    console.log(respuesta)

                    for(i = 0; i < respuesta.length ; i++){
                        var fecha = respuesta[i]['hora_regreso'];
                        var separar = fecha.split(" ")

                        tabla91.row.add([
                            "<center>" +
                                            "<span class='btnSeleccionarCobranza text-info px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                            "<i class='far fa-circle fs-5'> </i> " +
                                            "</span>" +
                            "</center>",
                            respuesta[i]['nro_boleta'],
                            respuesta[i]['Cliente'],
                            respuesta[i]['total_cobro'],
                            separar[1],
                            respuesta[i]['cobrador'],
                        ]).draw();


                    }

                    

                },
            });

    }

    function horaPM(hora12){

        var fechaActual = new Date();

        var año = fechaActual.getFullYear();
        var mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
        var dia = fechaActual.getDate().toString().padStart(2, '0');

        var partesHora = hora12.split(':');
        var horas = parseInt(partesHora[0]);
        var minutos = parseInt(partesHora[1]);

        if(horas == 12){
            horas = 0;
        }else{
            horas += 12;
        }

        return año + "-" + mes + "-" + dia + " " + horas.toString().padStart(2, '0') + ':' + minutos.toString().padStart(2, '0') + ':00';

    }

    function horaAM(hora12){

        var fechaActual = new Date();

        var año = fechaActual.getFullYear();
        var mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');
        var dia = fechaActual.getDate().toString().padStart(2, '0');

        var partesHora = hora12.split(':');
        var horas = parseInt(partesHora[0]);
        var minutos = parseInt(partesHora[1]);

        if(horas == 12){
            horas = 12;
        }else{
            horas += 0;
        }

        return año + "-" + mes + "-" + dia + " " + horas.toString().padStart(2, '0') + ':' + minutos.toString().padStart(2, '0') + ':00';

    }

    function VerificarRepetidos(nro_Boletas, total_cobros){

        var contador = 0;

        var mensaje = "Algunas ventas ya se mandaron para cobro:";

        var notificacion = "no";

        var continuar = "si";

        var imax = nro_Boletas.length - 1;

        for(i = 0; i<nro_Boletas.length; i++){

            var nro_boleta = nro_Boletas[i];

            var total_cobro = parseFloat(total_cobros[i]);

            $.ajax({
                async: false,
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 44,
                    'nro_boleta':nro_boleta,
                    'total_cobro':total_cobro,
                },
                dataType: 'json',
                success: function (respuesta) {

                    console.log(respuesta)

                    if(respuesta === "ok"){

                        contador += 1

                        if( i == 0){
                            mensaje = mensaje + ""
                        }else{
                            mensaje = mensaje + ","
                        }

                        mensaje = mensaje + " " + nro_boleta

                        notificacion = "si";


                    }

                    if( i == imax){
                        mensaje = mensaje + ". (estas salidas seran sobrescritos)"
                    }

                },
            });

        }

        console.log(mensaje);

        if(notificacion === "si"){

            Swal.fire({
                icon: 'warning',
                title: mensaje,
                confirmButtonText: 'Continuar nomas',
                showCancelButton: true,
            }).then((result) => {
                //console.log(result);

                if(result.isConfirmed){

                    console.log(continuar);

                    Continuar();

                }

                
            })


        }else if(notificacion === "no"){

            Continuar();

        }
        

    }

    function Continuar(){

        AgregarNumerosdeBoletas(nro_Boletas);

        $("#modalMandarCobrador").modal("show");

        $('#hora_salida').inputmask('hh:mm', {
            'placeholder': 'hh:mm',
            'alias': 'datetime',
            'inputFormat': 'hh:mm',
            'min': '01:00', // Hora mínima permitida
            'max': '12:59'  // Hora máxima permitida
        });

        $("#hora_salida").val(moment().format('hh:mm'));

        $('#hora_regreso').inputmask('hh:mm', {
            'placeholder': 'hh:mm',
            'alias': 'datetime',
            'inputFormat': 'hh:mm',
            'min': '01:00', // Hora mínima permitida
            'max': '12:59'  // Hora máxima permitida
        });

        $("#hora_regreso").val(moment().format('hh:mm'));

        setTimeout(function() {

            $("#iptElegirCobrador").focus();

        }, 1000); // Ajustar el tiempo de espera según sea necesario

    }

    function AgregarNumerosdeBoletas(nro_Boletas){

        total_cobro = 0;

        tabla81.clear().draw();

        console.log("se ejecuto el AgregarNumerosdeBoletas(nro_Boletas)", nro_Boletas)

        for(i = 0; i<nro_Boletas.length; i++){

            var nro_boleta = nro_Boletas[i];

            $.ajax({
                async: false,
                url: "ajax/ventas.ajax.php",
                method: "POST",
                data: {
                    'accion': 42,
                    'nro_boleta':nro_boleta,
                },
                dataType: 'json',
                success: function (respuesta) {

                    console.log(respuesta)

                    tabla81.row.add([
                        respuesta[0]['nro_boleta'],
                        respuesta[0]['Cliente'],
                        respuesta[0]['total_venta'],
                        respuesta[0]['deuda'],
                    ]).draw();

                    total_cobro = total_cobro + parseFloat(respuesta[0]['deuda']);

                },
            });

        }

        console.log(total_cobro)

        var iptTotalCobro = "S/. "+ total_cobro.toFixed(2);

        $("#iptTotalCobro").val(iptTotalCobro)

    }

    function CrearMostrar(idBoleta_registro){

        if ($.fn.DataTable.isDataTable("#tblDatosPagosBoleta")) {
            $("#tblDatosPagosBoleta").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#tblDatosPagosBoleta tbody').off('click', 'td.editable');
            $('#tblDatosPagosBoleta tbody').off('blur', 'td.editable');
            $('#tblDatosPagosBoleta tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla04= $("#tblDatosPagosBoleta").DataTable({

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
                    targets: [0,3],
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
            lengthMenu: [10,20, 30, 50],
            'pageLength': 30,
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 37, //2: LISTAR CLIENTES
                    'nro_boleta':idBoleta_registro,
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
                ajustarHeadersDataTables($('#tblDatosPagosBoleta'));
            }
        });

    }

    function toggleBotonesCirculos() {
        $('.btnSeleccion').toggle(); // Alternar la visibilidad de los botones con clase btnAsignarHora23
    }

    function toggleBotonesCirculosDeudas() {
        $('.btnSeleccionDeuda').toggle(); // Alternar la visibilidad de los botones con clase btnAsignarHora23
    }

    function toggleBotonesReloj() {
        $('.btnAsignarHora').toggle(); // Alternar la visibilidad de los botones con clase btnAsignarHora23
    }

    function toggleBotonesRelojDeudas() {
        $('.btnAsignarHoraDeuda').toggle(); // Alternar la visibilidad de los botones con clase btnAsignarHora23
    }

    // Función para agregar minutos a la hora actual
    function agregarMinutos(minutos) {
        const iptHora = document.getElementById('iptHoraEstimada');
        const horaActual = new Date();
        horaActual.setMinutes(horaActual.getMinutes() + minutos);

        // Si la hora supera las 24 horas, la ajustamos reiniciando el reloj a las 00:00:00
        if (horaActual.getHours() == 0) {
            horaActual.setHours(horaActual.getHours() - 23);
        }

        const horaFormateada = horaActual.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });
        iptHora.value = horaFormateada;
    }

    function agregarMinutos2(minutos) {
        const iptHora = document.getElementById('iptHoraEstimada_2');
        const horaActual = new Date();
        horaActual.setMinutes(horaActual.getMinutes() + minutos);

        // Si la hora supera las 24 horas, la ajustamos reiniciando el reloj a las 00:00:00
        if (horaActual.getHours() == 0) {
            horaActual.setHours(horaActual.getHours() - 23);
        }

        const horaFormateada = horaActual.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });
        iptHora.value = horaFormateada;
    }

    function establecerHoraDesdeString(fechaHoraString) {
        const iptHora = document.getElementById('iptHoraEstimada');
        const fechaHora = new Date(fechaHoraString);

        // Formatear la fecha y hora en el formato deseado
        const horaFormateada = fechaHora.toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit', second: '2-digit' });

        // Establecer el valor del campo iptHoraEstimada
        iptHora.value = horaFormateada;
    }

    function actualizarTextoBotones(dinero) {
        var nuevoTexto50 = Math.ceil(dinero / 50) * 50 ;
        var nuevoTexto100 = Math.ceil(dinero / 50) * 50 + 50;
        var nuevoTexto10 = dinero.toFixed(2); 
        document.getElementById('btn50').innerText = '+ S./' + nuevoTexto50;
        document.getElementById('btn100').innerText = '+ S./' + nuevoTexto100;
        document.getElementById('btn10').innerText = '+ S./' + nuevoTexto10;
    }

    
    function agregarDinero(dinero){
        document.getElementById('iptAmortiguacion').value = dinero;
        calcularVuelto()
    }

    function md5(string) {
        return CryptoJS.MD5(string).toString();
    }

    function calcularVuelto() {
        var deuda = parseFloat(document.getElementById('iptDeuda').value);
        var amortiguacion = parseFloat(document.getElementById('iptAmortiguacion').value);
        var vuelto = -(deuda - amortiguacion);
        document.getElementById('iptVuelto').value = vuelto.toFixed(2); // Redondear a 2 decimales
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

                            MultipleSeleccion = 0;
                            $("#btnSeleccionMultipleDeuda").removeClass("btn-danger").addClass("btn-info").html('<i class="far fa-check-square"> Seleccion Multiple</i> ');
                            $('#lstRegistrosEstadosCliente').DataTable().column(14).search("").draw();
                            $("#btnRegistrarDeuda").prop("disabled", true);
                            Boletas= [];
                            estado = 0;

                            nombre_cliente_deudas = ui.item.value;
                            //console.log("ui.item.value : " + nombre_cliente_deudas)
                            
                            EliminarYReemplazar(nombre_cliente_deudas);

                            $("#iptNombreClienteDeuda_0").text(nombre_cliente_deudas);

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

    function EliminarYReemplazar(nombre_cliente){

        ////console.log("Comenzando EliminarYReemplazar");
    
        if ($.fn.DataTable.isDataTable('#lstRegistrosEstadosCliente')) {
            ////console.log("Tabla existente encontrada, destruyendo...");
            $('#lstRegistrosEstadosCliente').DataTable().destroy();
            ////console.log("Tabla destruida");
        }
        
        ////console.log("Restableciendo eventos...");
        $('#lstRegistrosEstadosCliente tbody').off('click', 'td.editable');
        $('#lstRegistrosEstadosCliente tbody').off('blur', 'td.editable');
        $('#lstRegistrosEstadosCliente tbody').off('keydown', 'td.editable');
        ////console.log("Eventos restablecidos");
        
        ////console.log("Creando nueva tabla...");
        tabla61 =$('#lstRegistrosEstadosCliente').DataTable({
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
                            "<span class='btnAsignarHoraDeuda text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-clock fs-5'></i>" +
                            "</span>" +

                            "<span class='btnSeleccionDeuda text-success px-1' style='cursor:pointer;'>" +
                            "<i class='far fa-circle fs-5'></i>" +
                            "</span>" +

                            
                            "</center>"
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

                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
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
                    targets: 14,
                    visible: false,
                }

                
            ],
            ajax: {
                url: "ajax/ventas.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 27, //27: LISTAR BOLETAS con tod la info del cliente escrito
                    'nombre_cliente':nombre_cliente
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
                toggleBotonesCirculosDeudas();
            },
            
        });

        

        //////console.log("Nueva tabla creada");
    
        //////console.log("Finalizando EliminarYReemplazar");

    }

</script>

<!-- AQUI SON LOS SCRIPT  -->