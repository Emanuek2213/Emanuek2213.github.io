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

         <!-- row Tarjetas Agente -->
         <div class="row">

            <!-- TARJETA BCP -->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-indigo"  data-toggle="modal" data-target="#mdlNuevoMovimientoBCP">
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">BCP</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoBCP">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-orange" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA BANCO DE LA NACION -->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-red"  data-toggle="modal" data-target="#mdlNuevoMovimientoNACION">
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-weight: bold;  padding: 5px;">NACION</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoNACION">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-danger" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA BBVA -->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-cyan"  data-toggle="modal" data-target="#mdlNuevoMovimientoBBVA">
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-weight: bold;  padding: 5px;">BBVA</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoBBVA">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-blue" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             
             <!-- TARJETA KASNET-->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-blue" data-toggle="modal" data-target="#mdlNuevoMovimientoKASNET">                                  
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">KASNET</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoKASNET">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-yellow" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA INTERBANK -->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-green" data-toggle="modal" data-target="#mdlNuevoMovimientoINT">
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">INTERBANK</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoINT">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-blue" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA RED DIGITAL -->
            
             <div class="col-lg-2">
                 <!-- small box -->
                 <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-purple" data-toggle="modal" data-target="#mdlNuevoMovimientoRED">
                     <div class="inner">
                         <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">RED DIGITAL</span></h5>
                         <h6 >Credito : S./ <span id="totalEfectivoRED">*******</span></h6>
                    </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a  class="small-box bg-orange" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>


         </div> 
        <div class = "row">
            <div class="col-lg-4">
                <button id="cambiarTotal" class="small-box bg-indigo" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Credito de los bancos</span></button>
            </div>

            <div class="col-lg-4">
                <button id="mirarEfectivo" class="small-box bg-green" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Efectivo : S./ <span id="totalEfectivo">*******</span></span></button>
            </div>
            <div class="col-lg-4">
                <button id="mirarCredito" class="small-box bg-orange" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Credito : S./ <span id="totalCredito">*******</span></span></button>
            </div>
            
        </div>

        <div class = "row">
            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                <div class="card-body p-3">
                    <div class="col-md-6 mb-3">
                        <h3>Efectivo Disponible: S./ <span id="totalEfectivo2">*******</span></h3>
                        <h6>Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy" style="color: green;">*******</span></h6>
                        <h6>Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision" style="color: green;">*******</span></h6>
                    </div>

                
                <!-- ./row Tarjetas Agente-->

                

                <!-- row TABLA DE MOVIMIENTOS AGENTE-->
                

                    <div class="col-lg-12">

                        <div class="card card-gray" style="border: 1px solid black;">
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
                                            <input type="text" id="iptDineroDesde" class="form-control">
                                            <label for="iptDineroDesde">M. Desde</label>
                                        </div>

                                        <div style="width: 20%;" class="form-floating mx-1">
                                            <input type="text" id="iptDineroHasta" class="form-control">
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
                                            <input type="text" id="iptDineroDesde" class="form-control">
                                            <label for="iptDineroDesde">M. Desde</label>
                                        </div>

                                        <div style="width: 100%;" class="form-floating mx-1 my-1">
                                            <input type="text" id="iptDineroHasta" class="form-control">
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
 </div><!-- /.container-fluid -->

<!-- Ventana Modal para ingresar nuevo movimiento BCP -->
    <div class="modal fade" id="mdlNuevoMovimientoBCP" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-indigo py-1">

                    <h5 class="modal-title">Nuevo Movimiento BCP</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">
        
                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal" id="btnGuardarProductobcp">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>
                
                </div>

            </div>
        </div>
    </div>

<!-- Ventana Modal para ingresar nuevo movimiento BANCO DE LA NACION -->
    <div class="modal fade" id="mdlNuevoMovimientoNACION" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-red py-1">

                    <h5 class="modal-title">Nuevo Movimiento NACION</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">

                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal" id="btnGuardarProductoNACION">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>
                
                </div>

            </div>
        </div>
    </div>

<!-- Ventana Modal para ingresar nuevo movimiento BBVA -->
    <div class="modal fade" id="mdlNuevoMovimientoBBVA" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-cyan py-1">

                    <h5 class="modal-title">Nuevo Movimiento BBVA</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">

                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal" id="btnGuardarProductoBBVA">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>
                
                </div>

            </div>
        </div>
    </div>

 <!-- Ventana Modal para ingresar nuevo movimiento KASNET -->
    <div class="modal fade" id="mdlNuevoMovimientoKASNET" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-yellow py-1">

                    <h5 class="modal-title">Nuevo Movimiento KASNET</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">

                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal" id="btnGuardarProductoKASNET">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>

                    
                
                </div>

            </div>
        </div>
    </div>

<!-- Ventana Modal para ingresar nuevo movimiento INTERBANK -->
    <div class="modal fade" id="mdlNuevoMovimientoINT" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-green py-1">

                    <h5 class="modal-title">Nuevo Movimiento INTERBANK</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">

                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal"id="btnGuardarProductoINT">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>
                
                </div>

            </div>
        </div>
    </div>

<!-- Ventana Modal para ingresar nuevo movimiento RED DIGITAl -->
    <div class="modal fade" id="mdlNuevoMovimientoRED" role="dialog">

        <div class="modal-dialog modal-lg">

            <!-- contenido del modal -->
            <div class="modal-content">

                <!-- cabecera del modal -->
                <div class="modal-header bg-purple py-1">

                    <h5 class="modal-title">Nuevo Movimiento RED DIGITAL</h5>

                    <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                    </button>

                </div>

                <!-- cuerpo del modal -->
                <div class="modal-body">

                    <form class="needs-validation" novalidate >
                        <!-- Abrimos una fila -->
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
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-info mt-3 mx-2"
                                data-dismiss="modal"id="btnGuardarProductoRED">Guardar</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                        </div>
                    </form>
                
                </div>

            </div>
        </div>
    </div>


 </div>
 <!-- /.content -->

 <script> var encendido = 20;
    var table;

    var cuentas = [];

        var boton = document.getElementById("cambiarTotal");
        var efectivo = document.getElementById("mirarEfectivo");
        var credito = document.getElementById("mirarCredito");
        var BCP = document.getElementById("totalEfectivoBCP");
        var NACION = document.getElementById("totalEfectivoNACION");
        var BBVA = document.getElementById("totalEfectivoBBVA");
        var KASNET = document.getElementById("totalEfectivoKASNET");
        var INT = document.getElementById("totalEfectivoINT");
        var RED = document.getElementById("totalEfectivoRED");
        var EFE = document.getElementById("totalEfectivo");
        var CRE = document.getElementById("totalCredito");
        

        
        

        


        function Dar(Agente = "",tipo = "",cantidad = 0){
        
            ////console.log(Agente + " tipo : " + tipo);
                $.ajax({
                    url: "ajax/registro_agente.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 4, //parametro para obtener las ventas del mes
                        'Agente':Agente,
                        'tipo': tipo,
                    },
                    dataType:'json',
                    success:function(respuesta){
                        cantidad= parseInt(respuesta["Total"]);
                        ////console.log("cantidad en funcion dar en el ajax: " + cantidad);
                        OtraFuncionQueUsaCantidad(cantidad);
                    }
                });
            ////console.log("cantidad en funcion dar: " + cantidad);

        }

        // Agrega un manejador de eventos al botón cuando se presiona el botón
        boton.addEventListener("mousedown", function() {
            // Muestra el número 1000
           
            var i = 0;
            var BCPR = 0;
            var NACIONR =0;
            var BBVAR = 0;
            var KASNETR = 0 ;
            var INTR = 0;
            var REDR = 0;
            
                    $.ajax({
                        url: "ajax/registro_agente.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 5, //parametro para obtener las ventas del mes
                        },
                        dataType:'json',
                        success:function(respuesta){

                        ////console.log(respuesta);
                            
                            for(i = 0; i<respuesta.length ; i++){
                                if(respuesta[i]["Agente"] == "BCP"){
                                    
                                    BCPR =    BCPR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "NACION"){
                                    NACIONR =   NACIONR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                    
                                } else if(respuesta[i]["Agente"] == "BBVA"){
                                    BBVAR =     BBVAR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "KASNET"){
                                    KASNETR = KASNETR +   parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "INT"){
                                    INTR =  INTR +     parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "RED"){
                                    REDR =  REDR +     parseFloat(respuesta[i]["MontoActual"]) ;
                                }
                            }


                            
                            

                            BCP.textContent = BCPR.toFixed(2);
                            NACION.textContent = NACIONR.toFixed(2);
                            BBVA.textContent = BBVAR.toFixed(2);
                            KASNET.textContent = KASNETR.toFixed(2);
                            INT.textContent = INTR.toFixed(2);
                            RED.textContent = REDR.toFixed(2);
                            
                        }
                    });
                
                    

            
            
        });



        // Agrega un manejador de eventos al botón cuando se libera el botón
        boton.addEventListener("mouseup", function() {
            // Vuelve a ocultar el número
            BCP.textContent = "*****";
            NACION.textContent = "*****";
            BBVA.textContent = "*****";
            KASNET.textContent = "*****";
            INT.textContent = "*****";
            RED.textContent = "*****";
        });


        // Agrega un manejador de eventos al botón cuando se presiona el botón
        efectivo.addEventListener("mousedown", function() {
            // Muestra el número 1000
            var EFER = 0;
            var i = 0;

            
            $.ajax({
                        url: "ajax/registro_agente.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 5, //parametro para obtener las ventas del mes
                        },
                        dataType:'json',
                        success:function(respuesta){

                        ////console.log(respuesta);
                            
                            for(i = 0; i<respuesta.length ; i++){
                                if(respuesta[i]["Agente"] == "EFECTIVO"){
                                    
                                    if(respuesta[i]["Cuenta"] == "Agente"){
                                    
                                    EFER =    EFER + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } 
                            
                                } 
                            }


                            
                            EFE.textContent = EFER.toFixed(2);

                            
                            
                        }
                    });

            
            
        });

        

        // Agrega un manejador de eventos al botón cuando se libera el botón
        efectivo.addEventListener("mouseup", function() {
            // Vuelve a ocultar el número
            EFE.textContent = "*******";
        });


        // Agrega un manejador de eventos al botón cuando se presiona el botón
        credito.addEventListener("mousedown", function() {
            // Muestra el número 1000
            var i = 0;
            var BCPR = 0;
            var NACIONR =0;
            var BBVAR = 0;
            var KASNETR = 0 ;
            var INTR = 0;
            var REDR = 0;
            
                    $.ajax({
                        url: "ajax/registro_agente.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 5, //parametro para obtener las ventas del mes
                        },
                        dataType:'json',
                        success:function(respuesta){

                        ////console.log(respuesta);
                            
                            for(i = 0; i<respuesta.length ; i++){
                                if(respuesta[i]["Agente"] == "BCP"){
                                    
                                    BCPR =    BCPR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "NACION"){
                                    NACIONR =   NACIONR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                    
                                } else if(respuesta[i]["Agente"] == "BBVA"){
                                    BBVAR =     BBVAR + parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "KASNET"){
                                    KASNETR = KASNETR +   parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "INT"){
                                    INTR =  INTR +     parseFloat(respuesta[i]["MontoActual"]) ;
                            
                                } else if(respuesta[i]["Agente"] == "RED"){
                                    REDR =  REDR +     parseFloat(respuesta[i]["MontoActual"]) ;
                                }
                            }


                            
                            

                            var CRER = -(-BCPR.toFixed(2)
                            - NACIONR.toFixed(2)
                            - BBVAR.toFixed(2)
                            - KASNETR.toFixed(2)
                            - INTR.toFixed(2)
                            - REDR.toFixed(2));

                            CRE.textContent = CRER.toFixed(2);
                            
                            
                        }
                    });
                    

            
            
        });

        

        // Agrega un manejador de eventos al botón cuando se libera el botón
        credito.addEventListener("mouseup", function() {
            // Vuelve a ocultar el número
            CRE.textContent = "*******";
        });


    $(document).ready(function() {
 
        $('#mdlNuevoMovimientoBCP').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalBCP').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input, select y button para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último elemento es el botón, activa el botón
                        $('#btnGuardarProductoBCP').click(); // Puedes cambiar "click" por "trigger('click')" si utilizas eventos personalizados en el botón.
                    }
                }

                if (e.key === ' '){
                    $('#btnGuardarProductoBCP').click();
                }
            });
        });


        $('#mdlNuevoMovimientoNACION').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalNACION').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input y select para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último campo recibe el enfoque, activar el botón "Guardar" al presionar "Enter" nuevamente
                        $('#btnGuardarProductoNACION').click();
                    }
                }
            });
        });

        $('#mdlNuevoMovimientoBBVA').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalBBVA').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input y select para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último campo recibe el enfoque, activar el botón "Guardar" al presionar "Enter" nuevamente
                        $('#btnGuardarProductoBBVA').click();
                    }
                }
            });
        });

        $('#mdlNuevoMovimientoKASNET').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalKASNET').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input y select para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último campo recibe el enfoque, activar el botón "Guardar" al presionar "Enter" nuevamente
                        $('#btnGuardarProductoKASNET').click();
                    }
                }
            });
        });

        $('#mdlNuevoMovimientoINT').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalINT').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input y select para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último campo recibe el enfoque, activar el botón "Guardar" al presionar "Enter" nuevamente
                        $('#btnGuardarProductoINT').click();
                    }
                }
            });
        });

        $('#mdlNuevoMovimientoRED').on('shown.bs.modal', function () {
            // Habilitar edición y enfoque en el primer campo
            $('#iptMontoTotalRED').prop('disabled', false).focus();
            
            // Escuchar el evento "Enter" en campos input y select para avanzar al siguiente
            $('input, select, button').on('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const inputs = $('input, select, button');
                    const currentIndex = inputs.index(this);
                    if (currentIndex < inputs.length - 1) {
                        inputs[currentIndex + 1].focus();
                    } else if (currentIndex === inputs.length - 1) {
                        // Si el último campo recibe el enfoque, activar el botón "Guardar" al presionar "Enter" nuevamente
                        $('#btnGuardarProductoRED').click();
                    }
                }
            });
        });

        cargarMatrizCuentas();
        cargarOpciones()
        
        //CargarCuentas();

        cargarPagina();

            
        
        
    })


    

    
 </script>

 <script>
    
    

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
                               

                                cargarTablero();
                                CargarEfectivo();
                                CargarCuentas2();
                                cargarOpciones();
                            }


                        }
                    });
        }
        
    }


    function cargarPagina(){

        
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 1 //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){
                ////console.log(respuesta);
                
            }
        });

        CargarEfectivo();
        
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
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
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

                if (settings.nTable.id !== 'tbl_movimientos') {
                    return true; // Si no es el DataTable específico, permite que la fila pase el filtro
                }

                var precioDesde = parseFloat($("#iptDineroDesde").val());
                var precioHasta = parseFloat($("#iptDineroHasta").val());

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
                    var motivo = "pos nomas"
                    datos.append("accion", accion);
                    datos.append("fecha_hora", fecha_hora);
                    datos.append("motivo", motivo);
                                

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

    function cargarTablero(){
                // Limpiar la tabla
        table.clear().draw(); // Si estás usando DataTables, por ejemplo

        // Recargar la tabla mediante AJAX
        table.ajax.reload(); // Esta función recargará los datos vía AJAX
    }

    function CargarCuentas(){
        
    

            var selectCuentaBCP = document.getElementById("selCuentaBCP");
            var selectCuentaNACION = document.getElementById("selCuentaNACION");
            var selectCuentaBBVA = document.getElementById("selCuentaBBVA");
            var selectCuentaKASNET = document.getElementById("selCuentaKASNET");
            var selectCuentaINT = document.getElementById("selCuentaINT");
            var selectCuentaRED = document.getElementById("selCuentaRED");

            var bcp_1 = selectCuentaBCP.querySelector("option[value='Principal']");

            var nacion_1 = selectCuentaNACION.querySelector("option[value='Principal']");
            var nacion_2 = selectCuentaNACION.querySelector("option[value='Johana']");
            var nacion_3 = selectCuentaNACION.querySelector("option[value='Jonatan']");
            var nacion_4 = selectCuentaNACION.querySelector("option[value='Yvan']");
            var nacion_5 = selectCuentaNACION.querySelector("option[value='Ruben']");
            var nacion_6 = selectCuentaNACION.querySelector("option[value='Karen']");

            var bbva_1 = selectCuentaBBVA.querySelector("option[value='Principal']");
            var bbva_2 = selectCuentaBBVA.querySelector("option[value='Johana']");

            var kasnet_1 = selectCuentaKASNET.querySelector("option[value='Principal']");
            var kasnet_2 = selectCuentaKASNET.querySelector("option[value='Jonatan']");
            var kasnet_3 = selectCuentaKASNET.querySelector("option[value='Johana']");

            var int_1 = selectCuentaINT.querySelector("option[value='Principal']");
            var int_2 = selectCuentaINT.querySelector("option[value='Johana']");

            var red_1 = selectCuentaRED.querySelector("option[value='Principal']");

            //console.log("se esta cargando las cuentas");
        
          

            $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 5, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){

                //console.log("la respuesta al cargar es de...." + respuesta[1]["Cuenta"]);
                    
                    for(i = 0; i<respuesta.length ; i++){
                        
                        if(respuesta[i]["Agente"] == "BCP"){
                            
                            if(respuesta[i]["Cuenta"] == "Principal"){

                                var bcp_1R = parseFloat(respuesta[i]["MontoActual"]) ;

                            }

                        } else if(respuesta[i]["Agente"] == "NACION"){
                            if(respuesta[i]["Cuenta"] == "Principal"){

                                var nacion_1R =   parseFloat(respuesta[i]["MontoActual"]) ;

                            } else if(respuesta[i]["Cuenta"] == "Johana"){
                                var nacion_2R =    parseFloat(respuesta[i]["MontoActual"]);
                    
                            }

                            if(respuesta[i]["Cuenta"] == "Jonatan"){
                                var nacion_3R =    parseFloat(respuesta[i]["MontoActual"]) ;
                    
                            }

                            if(respuesta[i]["Cuenta"] == "Yvan"){
                                var  nacion_4R =    parseFloat(respuesta[i]["MontoActual"]);
                    
                            }

                            if(respuesta[i]["Cuenta"] == "Ruben"){
                                var nacion_5R =    parseFloat(respuesta[i]["MontoActual"]) ;
                    
                            }

                            if(respuesta[i]["Cuenta"] == "Karen"){
                                var nacion_6R =    parseFloat(respuesta[i]["MontoActual"]) ;

                    
                            }
                            
                        } else if(respuesta[i]["Agente"] == "BBVA"){

                            if(respuesta[i]["Cuenta"] == "Principal"){
                                var bbva_1R =      parseFloat(respuesta[i]["MontoActual"]) ;
                    
                            }

                            if(respuesta[i]["Cuenta"] == "Johana"){
                                var bbva_2R =      parseFloat(respuesta[i]["MontoActual"]) ;


                            }
                            
                        } else if(respuesta[i]["Agente"] == "KASNET"){

                            if(respuesta[i]["Cuenta"] == "Principal"){
                                var kasnet_1R =    parseFloat(respuesta[i]["MontoActual"]) ;

                            }

                            if(respuesta[i]["Cuenta"] == "Johana"){
                                var kasnet_2R =    parseFloat(respuesta[i]["MontoActual"]) ;

                            }

                            if(respuesta[i]["Cuenta"] == "Jonatan"){
                                var  kasnet_3R =    parseFloat(respuesta[i]["MontoActual"]);


                            }
                            
                        } else if(respuesta[i]["Agente"] == "INT"){

                            if(respuesta[i]["Cuenta"] == "Principal"){
                                var int_1R =      parseFloat(respuesta[i]["MontoActual"]) ;

                            }

                            if(respuesta[i]["Cuenta"] == "Johana"){
                                var int_2R =       parseFloat(respuesta[i]["MontoActual"]) ;


                            }
                            
                        } else if(respuesta[i]["Agente"] == "RED"){

                            if(respuesta[i]["Cuenta"] == "Principal"){
                                var red_1R =       parseFloat(respuesta[i]["MontoActual"]);
                            }
                            
                        }
                    }

                    ////console.log("credito de principal-bcp : s/" + Cuentas[0]["Credito"]);


                    


                    
                    


                    bcp_1.textContent =   "Principal : S/"  +  (bcp_1R.toFixed(2)) ;


                    nacion_1.textContent = "Principal : S/"  +      (nacion_1R.toFixed(2)) ;
                    nacion_2.textContent =  "Johana : S/"  +        (nacion_2R.toFixed(2)) ;
                    nacion_3.textContent =  "Jonatan : S/"  +       (nacion_3R.toFixed(2)) ;
                    nacion_4.textContent =  "Yvan : S/"  +          (nacion_4R.toFixed(2)) ;
                    nacion_5.textContent =  "Ruben : S/"  +         (nacion_5R.toFixed(2)) ;
                    nacion_6.textContent =  "Karen : S/"  +         (nacion_6R.toFixed(2)) ;

                    bbva_1.textContent =  "Principal : S/"  +       (bbva_1R.toFixed(2)) ;
                    bbva_2.textContent =  "Johana : S/"  +          (bbva_2R.toFixed(2)) ;

                    kasnet_1.textContent = "Kasnet Principal : S/"  +         (kasnet_1R.toFixed(2)) ;
                    kasnet_2.textContent =  "Jonatan : S/"  +       (kasnet_2R.toFixed(2)) ;
                    kasnet_3.textContent = "Johana : S/"  +         (kasnet_3R.toFixed(2)) ;

                    int_1.textContent = "Principal : S/"  +         (int_1R.toFixed(2)) ;
                    int_2.textContent =  "Johana : S/"  +           (int_2R.toFixed(2)) ;

                    red_1.textContent = "Principal : S/"  +         (red_1R.toFixed(2)) ;

                
                
                    
                }
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

    function CargarCuentas2(){
        
    

        var selectCuentaBCP = document.getElementById("selCuentaBCP");
        var selectCuentaNACION = document.getElementById("selCuentaNACION");
        var selectCuentaBBVA = document.getElementById("selCuentaBBVA");
        var selectCuentaKASNET = document.getElementById("selCuentaKASNET");
        var selectCuentaINT = document.getElementById("selCuentaINT");
        var selectCuentaRED = document.getElementById("selCuentaRED");

        console.log("esto es de la funcion CargarCuentas: "+ cuentas);

        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){
                for (var i = 0; i < respuesta.length; i++) {
                    for (var j = 0; j < cuentas.length; j++) {
                        if (respuesta[i]["Agente"] === cuentas[j][0]) {
                            for (var k = 0; k < cuentas[j][1].length; k++) {
                                if (respuesta[i]["Cuenta"] === cuentas[j][1][k]) {
                                   
                                }
                            }
                        }
                    }
                }

            }
        })
        
                
    
    }


    function cargarMatrizCuentas(){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, //parametro para obtener las ventas del mes
            },
            dataType: 'json',
            success: function(respuesta) {
                

                respuesta.forEach(function(item) {
                    var agente = item.Agente;
                    var cuenta = item.Cuenta;

                    // Verifica si ya existe el agente en la matriz
                    var agenteIndex = cuentas.findIndex(function(element) {
                        return element[0] === agente;
                    });

                    if (agenteIndex === -1) {
                        // Si no existe el agente, agrégalo con la cuenta
                        cuentas.push([agente, [cuenta]]);
                    } else {
                        // Si existe el agente, verifica si la cuenta ya está agregada
                        var cuentaIndex = cuentas[agenteIndex][1].indexOf(cuenta);
                        if (cuentaIndex === -1) {
                            // Si la cuenta no está, agrégala al agente existente
                            cuentas[agenteIndex][1].push(cuenta);
                        }
                    }
                });

                // Aquí tienes tu matriz creada con los datos únicos de Agente y Cuenta
                console.log("esto es de cargar matriz cuentas: "+cuentas);
            },
            error: function() {
                console.log('Error al cargar las opciones');
            }
        });
    }


    function destruir_tabla(){
        table.destroy();
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


        var COM = document.getElementById("totalComision");

        $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 11, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){
                    var COMR = 0;

                console.log(respuesta[0]["SumaComision"]);
                    
                    
                            
                            COMR = parseFloat(respuesta[0]["SumaComision"]) ;
                    
                        


                    
                    COM.textContent = COMR.toFixed(2);

                    
                    
                }
            });

        var COMHOY = document.getElementById("totalComisionHoy");

        $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 13, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){
                    var COMR = 0;

                console.log(respuesta[0]["SumaComision"]);
                    
                    
                            if(respuesta[0]["SumaComision"] == null){} else{
                            COMR = parseFloat(respuesta[0]["SumaComision"]) ;}
                    
                        


                    
                    COMHOY.textContent = COMR.toFixed(2);

                    
                    
                }
            });
    }
    
 </script><script>
 //document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>