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
                 <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Agente Jusyba</h1>
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
                <a class="nav-link active" id="content-registros-tab" data-toggle="pill" href="#content-registros" role="tab" aria-controls="content-registros" aria-selected="false">Lista de registro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-bcp-tab" data-toggle="pill" href="#content-bcp" role="tab" aria-controls="content-bcp" aria-selected="false">Registro BCP</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-nacion-tab" data-toggle="pill" href="#content-nacion" role="tab" aria-controls="content-nacion" aria-selected="false">Registro NACION</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-bbva-tab" data-toggle="pill" href="#content-bbva" role="tab" aria-controls="content-bbva" aria-selected="false">Registro BBVA</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-kasnet-tab" data-toggle="pill" href="#content-kasnet" role="tab" aria-controls="content-kasnet" aria-selected="false">Registro KASNET</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-interbank-tab" data-toggle="pill" href="#content-interbank" role="tab" aria-controls="content-interbank" aria-selected="false">Registro INTERBANK</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-red-tab" data-toggle="pill" href="#content-red" role="tab" aria-controls="content-red" aria-selected="false">Registro RED</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-registros" role="tabpanel" aria-labelledby="content-registros-tab">

                <div class="row">
                    <div class="card card-gray shadow" style="border: 1px solid black;"  >
                        <div class="card-body p-3">

                            <div class="col-md-6 mb-3">
                                <h3>Efectivo Disponible 2: S./ <span id="totalEfectivo2">*******</span></h3>
                            </div>
                            
                            <div class="col-lg-12">

                                <div class="card card-gray">
                                    <div class="card-header">
                                        <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
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

                                        <div class="row">

                                            <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="text" id="iptAgente" class="form-control" data-index="5">
                                                    <label for="iptAgente">Agente</label>
                                                </div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="text" id="iptCuenta" class="form-control" data-index="6">
                                                    <label for="iptCuenta">Cuenta</label>
                                                </div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="text" id="iptNombre" class="form-control" data-index="7">
                                                    <label for="iptNombre">Persona</label>
                                                </div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="text" id="iptTipo" class="form-control" data-index="4">
                                                    <label for="iptTipo">Tipo</label>
                                                </div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="text" id="iptDia" class="form-control" data-index="8">
                                                    <label for="iptDia">Fecha</label>
                                                </div>

                                                <div id="datepicker-container"></div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="number" id="iptDineroDesde" class="form-control">
                                                    <label for="iptDineroDesde">M. Desde</label>
                                                </div>

                                                <div style="width: 20%;" class="form-floating mx-1">
                                                    <input type="number" id="iptDineroHasta" class="form-control">
                                                    <label for="iptDineroHasta">M. Hasta</label>
                                                </div>
                                            </div>

                                            <div class="d-block d-sm-none">

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="text" id="iptAgente" class="form-control" data-index="5">
                                                    <label for="iptAgente">Agente</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="text" id="iptCuenta" class="form-control" data-index="6">
                                                    <label for="iptCuenta">Cuenta</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="text" id="iptNombre" class="form-control" data-index="7">
                                                    <label for="iptNombre">Persona</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="text" id="iptTipo" class="form-control" data-index="4">
                                                    <label for="iptTipo">Tipo</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="text" id="iptDia" class="form-control" data-index="8">
                                                    <label for="iptDia">Fecha</label>
                                                </div>

                                                

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="number" id="iptDineroDesde" class="form-control">
                                                    <label for="iptDineroDesde">M. Desde</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                    <input type="number" id="iptDineroHasta" class="form-control">
                                                    <label for="iptDineroHasta">M. Hasta</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mt-3 ">
                                            <button id="btnBorrarDatos" class="small-box bg-indigo" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Borrar Datos</span></button>
                                            </div>

                                        </div>
                                    </div> <!-- ./ end card-body -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="card card-gray shadow" style="border: 1px solid black;"  >
                        <div class="card-body p-3">
                            <div class="col-lg-12">       
                                <table  id="tbl_movimientos" class="table table-striped w-100 shadow" style="border: 1px solid black;">
                                    <thead class="bg-gray text-left fs-6">
                                        <tr style="font-size: 15px;">
                                            <th></th>
                                            <th>Numero</th>
                                            <th>Monto</th>
                                            <th>Comision</th>
                                            <th>Tipo</th>
                                            <th>Agente</th>
                                            <th>Cuenta</th>
                                            <th>Nombre</th>
                                            <th>Dia</th>
                                            <th>Hora</th>
                                            <th>N° Operacion</th>
                                            <th>Usuarios</th>
                                            <th class="text-cetner">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-small">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- ./row TABLA DE MOVIMIENTOS AGENTE-->

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-bcp" role="tabpanel" aria-labelledby="content-bcp-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row">

                            <div class="card card-gray shadow" style="border: 10px  solid #008080;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/bcp.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalBCP"
                                                    name="iptMontoTotalBCP" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionBCP"
                                                    name="iptComisionBCP" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimientoBCP"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoBCP" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaBCP"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaBCP" required>S
                                                    <option value="Principal">Principal : S/ 1000</span></option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreBCP"
                                                    name="iptNombreBCP" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>
                                        <!-- Columna para registro el numero de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoBCP"
                                                    name="iptCodigoBCP" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>

                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                        
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductobcp">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                        
                    </form>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-nacion" role="tabpanel" aria-labelledby="content-nacion-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row">

                            <div class="card card-gray shadow" style="border: 10px  solid #FF0000;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/nacion.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Columna para registro del Monto-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalNACION"
                                                    name="iptMontoTotalNACION" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionNACION"
                                                    name="iptComisionNACION" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimiento"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoNACION" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaNACION"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaNACION" required>
                                                    <option value="Principal">Principal : S/ 1000</span></option>
                                                    <option value="Johana">Johana  : S/ 1000</span></option>
                                                    <option value="Jonatan">Jonatan : S/ 1000</span></option>
                                                    <option value="Yvan">Yvan    : S/ 1000</span></option>
                                                    <option value="Ruben">Ruben   : S/ 1000</span></option>
                                                    <option value="Karen">Karen   : S/ 1000</span></option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreNACION"
                                                    name="iptNombreNACION" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro el numero de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoNACION"
                                                    name="iptCodigoNACION" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>

                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                                    
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductoNACION">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                    </form>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-bbva" role="tabpanel" aria-labelledby="content-bbva-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row">

                            <div class="card card-gray shadow" style="border: 10px  solid #40E0D0;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/bbva.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">

                            
                                        <!-- Columna para registro del Monto-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalBBVA"
                                                    name="iptMontoTotalBBVA" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionBBVA"
                                                    name="iptComisionBBVA" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimiento"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoBBVA" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaBBVA"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaBBVA" required>
                                                    <option value="Principal">Principal : S/ 1000</span></option>
                                                    <option value="Johana">Johana  : S/ 1000</span></option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreBBVA"
                                                    name="iptNombreBBVA" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro el numero de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoBBVA"
                                                    name="iptCodigoBBVA" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>

                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                                                
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductoBBVA">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                    </form>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-kasnet" role="tabpanel" aria-labelledby="content-kasnet-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row">

                            <div class="card card-gray shadow" style="border: 10px  solid #00008B;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/kasnet.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">
                            
                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalKASNET"
                                                    name="iptMontoTotalKASNET" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionKASNET"
                                                    name="iptComisionKASNET" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimiento"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoKASNET" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaKASNET"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaKASNET" required>
                                                    <option value="Principal">Kasnet Principal: S/ 100</span></option>
                                                    <option value="Johana">Johana  : S/ 100</span></option>
                                                    <option value="Jonatan">Jonatan : S/ 100</span></option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreKASNET"
                                                    name="iptNombreKASNET" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro el numero de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoKASNET"
                                                    name="iptCodigoKASNET" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>

                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                                                            
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductoKASNET">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                    </form>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-interbank" role="tabpanel" aria-labelledby="content-interbank-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row">

                            <div class="card card-gray shadow" style="border: 10px  solid #008000;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/interbank.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">

                            
                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalINT"
                                                    name="iptMontoTotalINT" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionINT"
                                                    name="iptComisionINT" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimiento"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoINT" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaINT"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaINT" required>
                                                    <option value="Principal">Principal : S/ 1000</span></option>
                                                    <option value="Johana">Johana  : S/ 1000</span></option>
                        
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreINT"
                                                    name="iptNombreINT" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro el numero de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoINT"
                                                    name="iptCodigoINT" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>
                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                                                                
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductoINT">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                    </form>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-red" role="tabpanel" aria-labelledby="content-red-tab">
                <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
                        <div class="row"> 

                            <div class="card card-gray shadow" style="border: 10px  solid #800080;"  >

                                <div class="card-body p-3">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 mx-0 text-center">
                                            <img src="vistas/assets/imagenes/red.png" id="img_carga" style="display:on; width: 500px; height: 200px;">
                                        </div>
                                    </div>

                                    <div class="row">

                            
                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Monto Total</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptMontoTotalRED"
                                                    name="iptMontoTotalRED" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresa la cantidad de dinero</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro de la Comision-->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Comision</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptComisionRED"
                                                    name="iptComisionRED" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Por favor, ingresar Comision</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selMovimiento"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Movimiento</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selMovimientoRED" required>
                                                    <option value="Deposito">Deposito</option>
                                                    <option value="Retiro">Retiro</option>
                                                    <option value="Yape">Retiro (Yape)</option>
                                                    <option value="Pago de Servicios">Pago de servicios</option>
                                                    
                                                </select>
                                                <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                            </div>
                                        </div>

                                        <!-- Columna para ESPECIFICAR EL TIPO DE CUENTA-->
                                        <div class="col-12  col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="selCuentaRED"><i class="fas fa-dumpster fs-6"></i>
                                                    <span class="small">Cuenta</span><span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCuentaRED" required>
                                                    <option value="Principal">Principal : S/ 1000</option>
            
                                                </select>
                                                <div class="invalid-feedback">Seleccione la cuenta a usar </div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del Monto -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptMontoTotal"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Nombre (Opcional)</span><span class="text-danger"></span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombreRED"
                                                    name="iptNombreRED" placeholder="Monto total" required>
                                                <div class="invalid-feedback">Ejem: "Rosalia"</div>
                                            </div>
                                        </div>

                                        <!-- Columna para registro del codigo de operacion -->
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptCodigo"><i class="fas fa-dollar-sign fs-6"></i>
                                                    <span class="small">Numero de Operacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control form-control-sm" id="iptCodigoRED"
                                                    name="iptCodigoRED" placeholder="Numero de Operacion" required>
                                                <div class="invalid-feedback">Por favor, ingrese el N°Operacion</div>
                                            </div>
                                        </div>
                                        <!-- creacion de botones para cancelar y guardar el producto -->
                                                                                        
                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-danger mt-3 btn-block" id="btnCancelarRegistro">Cancelar</button>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <button type="button" class="btn btn-info mt-3 btn-block" id="btnGuardarProductoRED">Guardar</button>
                                        </div>

                                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                                    </div>
                                
                                </div>

                            </div>

                        </div>
                    </form>
            </div>

        </div>
         
        
    
    </div>
 </div><!-- /.container-fluid -->


<!-- AQUI SON LOS SCRIPT  -->
<script>

    var Toast = Swal.mixin({

        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000

    });

    var table; // tabla de productos que se agrega


    var isActionInProgress = false;

    $(document).ready(function(){
    
        Cargar_tables();
        CargarEfectivo();
        cargarOpciones();

    })

    
    /*=======================================================================
    =========================================================================
    EN ESTA ZONA SE CONFIGURAN LAS ACCIONES DE LAS TECLAS
    =========================================================================
    =======================================================================*/

    $(document).on('keydown', function (event) {
        // Verifica si la tecla presionada es la tecla F2 (keyCode 113)
        if (event.keyCode == 113) {
            event.preventDefault();

            // Obtén el elemento de navegación activo dentro del tab actual
            const activeElement = $('.nav-tabs .nav-link.active');

            // Verifica si el tab actual es uno de los tabs específicos que te interesan
            if (activeElement.length && (activeElement.attr('id') === 'content-registros-tab' || activeElement.attr('id') === 'content-bcp-tab' || activeElement.attr('id') === 'content-nacion-tab'
            || activeElement.attr('id') === 'content-bbva-tab'|| activeElement.attr('id') === 'content-kasnet-tab'|| activeElement.attr('id') === 'content-interbank-tab'
            || activeElement.attr('id') === 'content-red-tab')) {

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

        if (event.keyCode == 121  && $('#content-bcp:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("bcp");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 121  && $('#content-nacion:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("nacion");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 121  && $('#content-bbva:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("bbva");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 121  && $('#content-kasnet:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("kasnet");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 121  && $('#content-interbank:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("interbank");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 121  && $('#content-red:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                console.log("red");
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }

        if (event.keyCode == 13  && $('#content-bcp:visible').length > 0) {
            event.preventDefault();

            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                var currentIndex = inputElements.index(currentFocusedElement);

                // Calcular el índice del próximo elemento (con bucle)
                var nextIndex = (currentIndex + 1) % inputElements.length;

                // Enfocar el próximo elemento
                inputElements[nextIndex].focus();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 13  && $('#content-nacion:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Si no hay ningún elemento enfocado actualmente, enfocar el primero
                if (currentFocusedElement.length === 0) {
                    inputElements.first().focus();
                } else {
                    // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                    var currentIndex = inputElements.index(currentFocusedElement);

                    // Calcular el índice del próximo elemento (con bucle)
                    var nextIndex = (currentIndex + 1) % inputElements.length;

                    // Enfocar el próximo elemento
                    inputElements.eq(nextIndex).focus();
                }

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 13  && $('#content-bbva:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Si no hay ningún elemento enfocado actualmente, enfocar el primero
                if (currentFocusedElement.length === 0) {
                    inputElements.first().focus();
                } else {
                    // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                    var currentIndex = inputElements.index(currentFocusedElement);

                    // Calcular el índice del próximo elemento (con bucle)
                    var nextIndex = (currentIndex + 1) % inputElements.length;

                    // Enfocar el próximo elemento
                    inputElements.eq(nextIndex).focus();
                }

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 13  && $('#content-kasnet:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Si no hay ningún elemento enfocado actualmente, enfocar el primero
                if (currentFocusedElement.length === 0) {
                    inputElements.first().focus();
                } else {
                    // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                    var currentIndex = inputElements.index(currentFocusedElement);

                    // Calcular el índice del próximo elemento (con bucle)
                    var nextIndex = (currentIndex + 1) % inputElements.length;

                    // Enfocar el próximo elemento
                    inputElements.eq(nextIndex).focus();
                }

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 13  && $('#content-interbank:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Si no hay ningún elemento enfocado actualmente, enfocar el primero
                if (currentFocusedElement.length === 0) {
                    inputElements.first().focus();
                } else {
                    // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                    var currentIndex = inputElements.index(currentFocusedElement);

                    // Calcular el índice del próximo elemento (con bucle)
                    var nextIndex = (currentIndex + 1) % inputElements.length;

                    // Enfocar el próximo elemento
                    inputElements.eq(nextIndex).focus();
                }

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }
        if (event.keyCode == 13  && $('#content-red:visible').length > 0) {
            event.preventDefault();
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener todos los elementos de entrada (input, select, button) dentro de #content-bcp
                var inputElements = $('#content-bcp :input');

                // Obtener el elemento que tiene actualmente el foco
                var currentFocusedElement = $(':focus');

                // Si no hay ningún elemento enfocado actualmente, enfocar el primero
                if (currentFocusedElement.length === 0) {
                    inputElements.first().focus();
                } else {
                    // Encontrar el índice del elemento actualmente enfocado dentro de la lista de elementos de entrada
                    var currentIndex = inputElements.index(currentFocusedElement);

                    // Calcular el índice del próximo elemento (con bucle)
                    var nextIndex = (currentIndex + 1) % inputElements.length;

                    // Enfocar el próximo elemento
                    inputElements.eq(nextIndex).focus();
                }

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
        }

    });


    var btnBCP= document.getElementById("btnGuardarProductobcp");

    

    btnBCP.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoBCP").value;
        var cuenta = document.getElementById("selCuentaBCP").value;
        var monto = document.getElementById("iptMontoTotalBCP").value;
        var comision = document.getElementById("iptComisionBCP").value;
        var nombre = document.getElementById("iptNombreBCP").value;
        var codigo = document.getElementById("iptCodigoBCP").value;
        var Agente = "BCP";

        var selectElement = document.getElementById("selCuentaBCP");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));

        if(nombre == ""){
            nombre = "-";
        }
        document.getElementById("selMovimientoBCP").value = "Deposito";
        document.getElementById("selCuentaBCP").value = "Principal";
        document.getElementById("iptMontoTotalBCP").value = "";
        document.getElementById("iptComisionBCP").value = "";
        document.getElementById("iptNombreBCP").value = "";
        document.getElementById("iptCodigoBCP").value = "";


        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        //ImprimirTicket(Agente, codigo, monto, comision, nombre);

        // Imprime el valor seleccionado en la consola
        ////console.log("Opción seleccionada de BCP: " + tipo +  "; Monto: " + monto + "; Codigo: " + codigo);
        
        // Cierra el modal
        $('#mdlNuevoMovimientoBCP').modal('hide');
    });
    var btnNACION= document.getElementById("btnGuardarProductoNACION");

    btnNACION.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoNACION").value;
        var cuenta = document.getElementById("selCuentaNACION").value;
        var monto = document.getElementById("iptMontoTotalNACION").value;
        var comision = document.getElementById("iptComisionNACION").value;
        var nombre = document.getElementById("iptNombreNACION").value;
        var codigo = document.getElementById("iptCodigoNACION").value;
        var Agente = "NACION";
       
        var selectElement = document.getElementById("selMovimientoNACION");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));
        
        if(nombre == ""){
            nombre = "-";
        }
        document.getElementById("selMovimientoNACION").value = "Deposito";
        document.getElementById("selCuentaNACION").value = "Principal";
        document.getElementById("iptMontoTotalNACION").value = "";
        document.getElementById("iptComisionNACION").value = "";
        document.getElementById("iptNombreNACION").value = "";
        document.getElementById("iptCodigoNACION").value = "";

        

        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        // Imprime el valor seleccionado en la consola
        ////console.log("Opción seleccionada de NACION: " + tipo);
        
        // Cierra el modal
        $('#mdlNuevoMovimientoNACION').modal('hide');
    });
    
    var btnBBVA= document.getElementById("btnGuardarProductoBBVA");

    btnBBVA.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoBBVA").value;
        var cuenta = document.getElementById("selCuentaBBVA").value;
        var monto = document.getElementById("iptMontoTotalBBVA").value;
        var comision = document.getElementById("iptComisionBBVA").value;
        var nombre = document.getElementById("iptNombreBBVA").value;
        var codigo = document.getElementById("iptCodigoBBVA").value;
        var Agente = "BBVA";
        
        var selectElement = document.getElementById("selMovimientoBBVA");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));
        
        if(nombre == ""){
            nombre = "-";
        }
        document.getElementById("selMovimientoBBVA").value = "Deposito";
        document.getElementById("selCuentaBBVA").value = "Principal";
        document.getElementById("iptMontoTotalBBVA").value = "";
        document.getElementById("iptComisionBBVA").value = "";
        document.getElementById("iptNombreBBVA").value = "";
        document.getElementById("iptCodigoBBVA").value = "";

       

        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        // Imprime el valor seleccionado en la consola
        ////console.log("Opción seleccionada de BBVA: " + tipo);
        
        // Cierra el modal
        $('#mdlNuevoMovimientoBBVA').modal('hide');
    });

    var btnKASNET= document.getElementById("btnGuardarProductoKASNET");

    btnKASNET.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoKASNET").value;
        var cuenta = document.getElementById("selCuentaKASNET").value;
        var monto = document.getElementById("iptMontoTotalKASNET").value;
        var comision = document.getElementById("iptComisionKASNET").value;
        var nombre = document.getElementById("iptNombreKASNET").value;
        var codigo = document.getElementById("iptCodigoKASNET").value;
        var Agente = "KASNET";
        
        var selectElement = document.getElementById("selMovimientoKASNET");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));
        
        if(nombre == ""){
            nombre = "-";
        }

        document.getElementById("selMovimientoKASNET").value = "Deposito";
        document.getElementById("selCuentaKASNET").value = "Principal";
        document.getElementById("iptMontoTotalKASNET").value = "";
        document.getElementById("iptComisionKASNET").value = "";
        document.getElementById("iptNombreKASNET").value = "";
        document.getElementById("iptCodigoKASNET").value = "";
       

        ////console.log("monto de KASNET: " + monto);
        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        // Imprime el valor seleccionado en la consola
        ////console.log("Opción seleccionada de KASNET: " + tipo);
        
        // Cierra el modal
        $('#mdlNuevoMovimientoKASNET').modal('hide');
    });


    var btnINT= document.getElementById("btnGuardarProductoINT");

    btnINT.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoINT").value;
        var cuenta = document.getElementById("selCuentaINT").value;
        var monto = document.getElementById("iptMontoTotalINT").value;
        var comision = document.getElementById("iptComisionINT").value;
        var nombre = document.getElementById("iptNombreINT").value;
        var codigo = document.getElementById("iptCodigoINT").value;
        var Agente = "INT";
        
        var selectElement = document.getElementById("selMovimientoINT");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));

        if(nombre == ""){
            nombre = "-";
        }

        document.getElementById("selMovimientoINT").value = "Deposito";
        document.getElementById("selCuentaINT").value = "Principal";
        document.getElementById("iptMontoTotalINT").value = "";
        document.getElementById("iptComisionINT").value = "";
        document.getElementById("iptNombreINT").value = "";
        document.getElementById("iptCodigoINT").value = "";
        

        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        // Imprime el valor seleccionado en la consola
        ////console.log("Opción seleccionada de INTERBANK: " + tipo);
        
        // Cierra el modal
        $('#mdlNuevoMovimientoINT').modal('hide');
    });

    var btnRED= document.getElementById("btnGuardarProductoRED");

    btnRED.addEventListener("click", function() {

        var tipo = document.getElementById("selMovimientoRED").value;
        var cuenta = document.getElementById("selCuentaRED").value;
        var monto = document.getElementById("iptMontoTotalRED").value;
        var comision = document.getElementById("iptComisionRED").value;
        var nombre = document.getElementById("iptNombreRED").value;
        var codigo = document.getElementById("iptCodigoRED").value;
        var Agente = "RED";
        

        var selectElement = document.getElementById("selMovimientoRED");
        var selectedText = selectElement.options[selectElement.selectedIndex].textContent;

        var datosselect = selectedText.split('/');
        var saldoCuenta = parseFloat(datosselect[1])
         console.log("funciona??????", parseFloat(datosselect[1]));

        if(nombre == ""){
            nombre = "-";
        }
        
        document.getElementById("selMovimientoRED").value = "Deposito";
        document.getElementById("selCuentaRED").value = "Principal";
        document.getElementById("iptMontoTotalRED").value = "";
        document.getElementById("iptComisionRED").value = "";
        document.getElementById("iptNombreRED").value = "";
        document.getElementById("iptCodigoRED").value = "";

        RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta);
        // Imprime el valor seleccionado en la consola

        

        ////console.log("Opción seleccionada de RED: " + tipo);
        

        
        
        // Cierra el modal
        $('#mdlNuevoMovimientoRED').modal('hide');

        
    });



    function RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta){
        console.log(" RegistrarMovimiento: ", tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta)
        var usuario = '<?php echo $nombreCompleto; ?>';
        var efe = document.getElementById("totalEfectivo2").textContent;
        if(monto <= 0){
            Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'Monto invalido: .s/ ' + monto,
                    showConfirmButton: false,
                    timer: 2500
                })
        }else{
            console.log("EFE:",efe);
            if ((monto > efe && tipo === "Retiro") || (monto > efe && tipo === "Retiro (Yape)")){
            
                Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'OJO, OPERACION PROCEDERA PERO EL EFECTIVO ESTARA EN NEGATIVO',
                    showConfirmButton: false,
                    timer: 2500
                })

            }else{
                if ((monto > saldoCuenta && tipo === "Deposito")){
                    Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'OJO, OPERACION PROCEDERA PERO LA CUENTA ESTARA EN NEGATIVO',
                    showConfirmButton: false,
                    timer: 2500
                })
                }else{
                    
                }
            }

            $.ajax({
                        url: "ajax/registro_agente.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 3, //parametro para obtener las ventas del mes
                            'codigo':codigo,
                            'tipo':tipo,
                            'monto':monto,
                            'comision':comision,
                            'Agente':Agente,
                            'nombre':nombre,
                            'cuenta':cuenta,
                            'usuario':usuario,
                        },
                        dataType:'json',
                        success:function(respuesta){

                            if (respuesta == "error"){

                                Swal.fire({
                                    position:'center',
                                    icon:'error',
                                    title: 'Ocurrio un error, intentelo de nuevo',
                                    showConfirmButton: false,
                                    timer: 2500
                                })

                            } else if (respuesta = "ok"){
                                
                                Toast.fire({
                                    icon:'success',
                                    title: 'Registrado Correctamente',
                                    showConfirmButton: false,
                                    timer: 2500
                                })
                                cargarTablero();
                                CargarEfectivo();
                                cargarOpciones();
                            }


                        }
                    });
        }

    }

</script>

<script>

    function Cargar_tables(){

        table = $("#tbl_movimientos").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength'
                ],
                pageLength: [5, 10, 15, 30, 50, 100],
                pageLength: 10,
                ajax:{
                    url: "ajax/registro_agente.ajax.php",
                    dataSrc: '',
                    type: 'POST',
                    data: {
                        'accion': 1 //parametro para obtener las ventas del mes
                    },
                },
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [

                    {
                        targets:0,
                        orderable: false,
                        className: 'control'
                    },
                    {
                        targets: 1,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 2,

                        render: function(data, type, row) {
                            // Agrega "S/" al inicio de los números en la columna 3
                            return 'S/' + data;
                        },

                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 3,
                        render: function(data, type, row) {
                            // Agrega "S/" al inicio de los números en la columna 3
                            return '+ S/' + data;
                        },

                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'color': 'green',
                                'text-align': 'center'
                            });
                        }
                    },
                    
                    {
                        targets: 4,
                        render: function (data, type, row) {
                            var color = '';
                            var fontWeight = 'bold';

                            if (data === 'Deposito') {
                                color = 'darkorange';
                            } else if (data === 'Retiro') {
                                color = 'darkmagenta';
                            }

                            return '<span style="color: ' + color + '; font-weight: ' + fontWeight + ';">' + data + '</span>';
                        },
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    
                    {
                        targets: 5,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },

                    {
                        targets: 6,
                        visible:false,
                    },
                    {
                        targets: 7,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },

                    {
                        targets: 8,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },

                    {
                        targets: 9,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 10,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 11,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 12,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarRegistro text-primary px-1' style='cursor:pointer;'>" +
                                "<i class='fas fa-pencil-alt fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEliminarRegistro text-danger px-1' style='cursor:pointer;'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +
                                "</center>"
                        }
                    }
                    

                ],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            
        });


        table.on('buttons-action', function (e, buttonApi, data, node) {
            if (buttonApi.text() == 'Print') {
                // Aquí puedes agregar código para restablecer el estado de la página si se cierra la ventana de impresión
                window.onafterprint = function () {
                    // Restablece la página o realiza otras acciones necesarias
                    location.reload(); // Esto recarga la página
                };
            }
        });
        
        $("#iptAgente").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptNombre").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptCuenta").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptDia").attr("readonly", true);

        // Configurar el Datepicker en el campo "iptDia"
        $("#iptDia").datepicker({
            dateFormat: 'dd/mm/yy' // Formato "dd/mm/yyyy"
        });

        $("#iptDia").change(function() {
            var selectedDate = this.value; // Obtiene la fecha seleccionada en el formato "25/03/2000"
            var formattedDate = convertDateFormat(selectedDate); // Convierte el formato de fecha
            table.column($(this).data('index')).search(formattedDate).draw();
        });

        $("#btnBorrarDatos").click(function() {
            $("#iptDia").val(""); // Borra el valor del campo "iptDia"
            $("#iptCuenta").val("");
            $("#iptAgente").val("");
            $("#iptNombre").val("");
            $("#iptTipo").val("");
            $("#iptDineroDesde").val("");
            $("#iptDineroHasta").val("");
            table.column($("#iptDia").data('index')).search("").draw();
            table.column($("#iptCuenta").data('index')).search("").draw();
            table.column($("#iptAgente").data('index')).search("").draw();
            table.column($("#iptNombre").data('index')).search("").draw();
            table.column($("#iptTipo").data('index')).search("").draw();
            table.column($("#iptDineroDesde").data('index')).search("").draw();
            table.column($("#iptDineroHasta").data('index')).search("").draw(); // Realiza una búsqueda sin restricciones
        });



        function convertDateFormat(inputDate) {
            // Divide la fecha en partes usando el carácter '/'
            var parts = inputDate.split('/');
            
            if (parts.length === 3) {
                // Reordena las partes para que coincidan con el formato "2000-03-25"
                return parts[2] + '-' + parts[1] + '-' + parts[0];
            } else {
                // Si el formato no es válido, devuelve la fecha original
                return inputDate;
            }
        }

        $("#iptTipo").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
        /*===================================================================*/
        $("#iptDineroDesde, #iptDineroHasta").keyup(function() {
            table.draw();
        })

        $.fn.dataTable.ext.search.push(

            function(settings, data, dataIndex) {

                var precioDesde = parseFloat($("#iptDineroDesde").val());
                var precioHasta = parseFloat($("#iptDineroHasta").val());

                if(precioHasta === ""){
                    precioHasta == 100000;
                }
                if(precioDesde === ""){
                    precioDesde == 100000;
                }

                var col_venta = parseFloat(data[2].replace("S/",""));

                if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
                    (isNaN(precioDesde) && col_venta <= precioHasta) ||
                    (precioDesde <= col_venta && isNaN(precioHasta)) ||
                    (precioDesde <= col_venta && col_venta <= precioHasta)) {
                    return true;
                }

                return false;
            }
        )

        $('#tbl_movimientos tbody').on('click', '.btnEliminarRegistro', function() {

            
            var accion = 7;
            var data = table.row($(this)).data();
            
            //var data = table.row($(this).parents('tr')).data();
            console.log(data);

            if (data === undefined) {
                // Intenta la otra forma
                data = table.row($(this).parents('tr')).data();
            }
            
            

            var hora = data[9];
            var fecha = data[8];
            var fecha_hora = fecha + " " + hora;

            console.log(fecha_hora);


            Swal.fire({
                title: 'Está seguro de eliminar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, deseo eliminarlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", accion);
                    datos.append("fecha_hora", fecha_hora);
                                

                    $.ajax({
                        url: "ajax/registro_agente.ajax.php",
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
                                    title: 'El producto se eliminó correctamente'
                                });
                                table.ajax.reload();
                                CargarEfectivo();
                                cargarOpciones();
                                CargarCuentas2();

                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'El producto no se pudo eliminar'
                                });
                            }

                        }
                    });

                }
            })

            

        });

    }

    function cargarOpciones(){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success: function(respuesta) {
                var selectCuentaBCP = document.getElementById("selCuentaBCP");
                var selectCuentaNACION = document.getElementById("selCuentaNACION");
                var selectCuentaBBVA = document.getElementById("selCuentaBBVA");
                var selectCuentaKASNET = document.getElementById("selCuentaKASNET");
                var selectCuentaINT = document.getElementById("selCuentaINT");
                var selectCuentaRED = document.getElementById("selCuentaRED");


                console.log("esto es de cargarOpciones : ", respuesta)

                
                // Vaciar opciones existentes (si las hay)
                selectCuentaBCP.innerHTML = '';
                selectCuentaNACION.innerHTML = '';
                selectCuentaBBVA.innerHTML = '';
                selectCuentaKASNET.innerHTML = '';
                selectCuentaINT.innerHTML = '';
                selectCuentaRED.innerHTML = '';



                for (var i = 0; i < respuesta.length; i++) {
                    var agente = respuesta[i]["Agente"];
                    var value = respuesta[i]["Cuenta"];
                    var text = respuesta[i]["Cuenta"] + ":S/" + respuesta[i]["MontoActual"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option = document.createElement('option');
                    option.value = value;
                    option.text = text;

                    if (value === "Principal") {
                        // Si es "Principal", añadirlo al inicio de las opciones
                        option.selected = true; // Seleccionar por defecto "Principal"
                        if (agente == "BCP") {
                            selectCuentaBCP.insertBefore(option, selectCuentaBCP.firstChild);
                        } else if (agente == "BBVA") {
                            selectCuentaBBVA.insertBefore(option, selectCuentaBBVA.firstChild);
                        } else if (agente == "INT") {
                            selectCuentaINT.insertBefore(option, selectCuentaINT.firstChild);
                        } else if (agente == "KASNET") {
                            selectCuentaKASNET.insertBefore(option, selectCuentaKASNET.firstChild);
                        } else if (agente == "NACION") {
                            selectCuentaNACION.insertBefore(option, selectCuentaNACION.firstChild);
                        } else if (agente == "RED") {
                            selectCuentaRED.insertBefore(option, selectCuentaRED.firstChild);
                        }
                    } else {
                        // Si no es "Principal", añadirlo como las otras opciones
                        if (agente == "BCP") {
                            selectCuentaBCP.appendChild(option);
                        } else if (agente == "BBVA") {
                            selectCuentaBBVA.appendChild(option);
                        } else if (agente == "INT") {
                            selectCuentaINT.appendChild(option);
                        } else if (agente == "KASNET") {
                            selectCuentaKASNET.appendChild(option);
                        } else if (agente == "NACION") {
                            selectCuentaNACION.appendChild(option);
                        } else if (agente == "RED") {
                            selectCuentaRED.appendChild(option);
                        }
                    }
                }

                
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
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

    function cargarTablero(){
                // Limpiar la tabla
        table.clear().draw(); // Si estás usando DataTables, por ejemplo

        // Recargar la tabla mediante AJAX
        table.ajax.reload(); // Esta función recargará los datos vía AJAX
    }

    function CargarEfectivo(){
        var EFE2 = document.getElementById("totalEfectivo2");

        $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 5, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){
                    var EFER = 0;

                ////console.log(respuesta);
                    
                    for(i = 0; i<respuesta.length ; i++){
                        if(respuesta[i]["Agente"] == "EFECTIVO"){
                            
                            if(respuesta[i]["Cuenta"] == "Agente"){
                            
                            EFER =    EFER + parseFloat(respuesta[i]["MontoActual"]) ;
                    
                        } 
                    
                        } 
                    }


                    
                    EFE2.textContent = EFER.toFixed(2);

                    
                    
                }
            });


        // var COM = document.getElementById("totalComision");

        // $.ajax({
        //         url: "ajax/registro_agente.ajax.php",
        //         type: 'POST',
        //         data: {
        //             'accion': 11, //parametro para obtener las ventas del mes
        //         },
        //         dataType:'json',
        //         success:function(respuesta){
        //             var COMR = 0;

        //         console.log("sumacomision: ",respuesta[0]["SumaComision"]);
                    
                    
                            
        //                     COMR = parseFloat(respuesta[0]["SumaComision"]) ;
                    
                        


                    
        //             COM.textContent = COMR.toFixed(2);

                    
                    
        //         }
        //     });

        // var COMHOY = document.getElementById("totalComisionHoy");

        // $.ajax({
        //         url: "ajax/registro_agente.ajax.php",
        //         type: 'POST',
        //         data: {
        //             'accion': 13, //parametro para obtener las ventas del mes
        //         },
        //         dataType:'json',
        //         success:function(respuesta){
        //             var COMR = 0;

        //         console.log(respuesta[0]["SumaComision"]);
                    
                    
        //                     if(respuesta[0]["SumaComision"] == null){} else{
        //                     COMR = parseFloat(respuesta[0]["SumaComision"]) ;}
                    
                        


                    
        //             COMHOY.textContent = COMR.toFixed(2);

                    
                    
        //         }
        //     });
    }

</script>