
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h3 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Cuadraje de Agente</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Cuadre Agente</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">
    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-deudas" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-cuadreos-tab" data-toggle="pill" href="#content-cuadreos" role="tab" aria-controls="content-cuadreos" aria-selected="false">Agregar o Modificar Cuadres</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-ingresos_salidas-tab" data-toggle="pill" href="#content-ingresos_salidas" role="tab" aria-controls="content-ingresos_salidas" aria-selected="false">Historial de Cuadres</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-editarCuentas-tab" data-toggle="pill" href="#content-editarCuentas" role="tab" aria-controls="content-editarCuentas" aria-selected="false">Edicion de Cuentas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-graficos-tab" data-toggle="pill" href="#content-graficos" role="tab" aria-controls="content-graficos" aria-selected="false">Estadisticas</a>
            </li>


        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-deudas">

            <div class="tab-pane fade active show mt-4 px-4" id="content-cuadreos" role="tabpanel" aria-labelledby="content-cuadreos-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-6">

                                            <div style="cursor: pointer;" class="small-box bg-blue" data-toggle="modal" id="btnCambiarCuadre" tabindex="0">
                                                <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                    <h6 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Editar Cuadre Agente [F8]</span></h6>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- /.col -->

                                        <div class="col-md-6">

                                            <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnNuevoCuadre" tabindex="0">
                                                <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                    <h6 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Registrar Nuevo Cuadre Agente [F10]</span></h6>
                                                </div>
                                            </div>


                                            <div style="cursor: pointer; display: none;" class="small-box bg-purple" data-toggle="modal" id="btnGuardarCambios" tabindex="0">
                                                <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                    <h6 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Guardar Nuevos Cambios</span></h6>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-12" id="formularioContainer" style="display: none;">
                            <div class="card card-gray shadow" style="border: 1px solid black;">
                                <div class="card-header">
                                    <h3 class="card-title">Criterios de Busqueda</h3>
                                    <div class="card-tools"><button class="btn btn-tool" type="button" data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptFechaBusqueda_cuadreo">
                                                    <i class="fas fa-calendar fs-6"></i>
                                                    <span class="big">Fecha a Registrar</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptFechaBusqueda_cuadreo"
                                                    placeholder="Nombre o Alias">

                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-12" id="formularioPrincipal1" style="display: block;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstIngresarGanancia" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                        <div class="col-md-6" id="formularioPrincipal2" style="display: block;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: blue; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0">Total Cuentas : S/ <span class="fw-bold" id="totalCuadrePrincipal">0.00</span></h3>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstIngresarCuadre" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Agente</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Cuenta</h6></th>
                                                        <th class="text-center"><h6>Monto Anterior</h6></th>
                                                        <th class="text-center"><h6>Monto Ingreso</h6></th>
                                                        
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

                        <div class="col-md-6" id="formularioPrincipal3" style="display: block;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                    
                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: green; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0"> Total de Ingresos: S/ <span class="fw-bold" id="totalIngresoPrincipal">0.00</span></h3>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstIngresarIngreso" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-green text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: red; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0">Total de Salidas : S/ <span class="fw-bold" id="totalSalidaPrincipal">0.00</span></h3>
                                        </div>
                                        

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstIngresarSalidas" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-red text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                    <!-- <div class="row mb-3">

                        <div class="col-md-12" id="formularioContainerTablas1" style="display: none;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        
                                        <div class="col-md-12">

                                            <table id="lstIngresarSegundaGanancia" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                        <div class="col-md-6" id="formularioContainerTablas2" style="display: none;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        
                                        <div class="col-md-12">

                                            <table id="lstIngresarSegundaCuadre" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Agente</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Cuenta</h6></th>
                                                        <th class="text-center"><h6>Monto Anterior</h6></th>
                                                        <th class="text-center"><h6>Monto Ingreso</h6></th>
                                                        
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

                        <div class="col-md-6" id="formularioContainerTablas3" style="display: none;">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        
                                        <div class="col-md-12">

                                            <table id="lstIngresarSegundaIngreso" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-green text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="small text-left fs-6">
                                                </tbody>
                                            </table>
                                            
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        
                                        <div class="col-md-12">

                                            <table id="lstIngresarSegundaSalidas" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-red text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                    </div> -->

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-ingresos_salidas" role="tabpanel" aria-labelledby="content-ingresos_salidas-tab">

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
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">

                                                <label class="col-form-label" for="iptFechaBusqueda">
                                                    <i class="fas fa-calendar fs-6"></i>
                                                    <span class="big">Fecha a Registrar</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptFechaBusqueda"
                                                    placeholder="Nombre o Alias">

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: gray; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0">Calculo Total : S/ <span class="fw-bold" id="totalSumatoria">0.00</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="card card-gray shadow" style="border: 1px solid black; background-color: blue;"  >

                                                <div class="card-body p-3">

                                                    <div class="row">

                                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: blue; color: white; text-align:center;">
                                                            <h2 class="fw-bold m-0">Total Cuentas Ayer : <span class="fw-bold" id="totalCuadreAnterior">S/. 0.00</span></h2>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="card card-gray shadow" style="border: 1px solid black; background-color: black;"  >

                                                <div class="card-body p-3">

                                                    <div class="row">

                                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: black; color: white; text-align:center;">
                                                            <h2 class="fw-bold m-0">Diferencial : <span class="fw-bold" id="totalFormulaAnterior" style = "color: white;" >S/. 0.00</span></h2>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="card card-gray shadow" style="border: 1px solid black; background-color: green;"  >

                                                <div class="card-body p-3">

                                                    <div class="row">

                                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: green; color: white; text-align:center;">
                                                            <h2 class="fw-bold m-0">Total Ingresos Ayer : <span class="fw-bold" id="totalIngresosAnterior">S/. 0.00</span></h2>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>  

                                            <div class="card card-gray shadow" style="border: 1px solid black; background-color: red;"  >

                                                <div class="card-body p-3">

                                                    <div class="row">

                                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: red; color: white; text-align:center;">
                                                            <h2 class="fw-bold m-0">Total Salidas Ayer : <span class="fw-bold" id="totalSalidasAnterior">S/. 0.00</span></h2>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        
                                        <div class="col-md-12">

                                            <table id="lstVerGanancia" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="small text-left fs-6">
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                        <!-- /.col -->

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: blue; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0">Total Cuentas : S/ <span class="fw-bold" id="totalCuadre">0.00</span></h3>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstVerCuadre" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-blue text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Agente</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Cuenta</h6></th>
                                                        <th class="text-center"><h6>Monto Anterior</h6></th>
                                                        <th class="text-center"><h6>Monto Ingreso</h6></th>
                                                        
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

                            <div id = "btnImprimirDocumentacion"  class="card card-gray shadow" style="  cursor:pointer; border: 1px solid black; background-color: green;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: green; color: white; text-align:center;">
                                            <h2 class="fw-bold m-0">Imprimir Documentacion [f10]</h2>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            

                        </div>

                        <div class="col-md-6">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: green; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0"> Total de Ingresos: S/ <span class="fw-bold" id="totalIngreso">0.00</span></h3>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstVerIngresos" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-success text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12 mb-1 rounded-3 d-flex align-items-center justify-content-center" style="background-color: red; color: white; text-align:center; border: 1px solid gray;">
                                            <h3 class="fw-bold m-0">Total de Salidas : S/ <span class="fw-bold" id="totalSalida">0.00</span></h3>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstVerSalidas" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-red text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h6>Nro</h6></th>
                                                        <th class="text-center"><h6>Nombre</h6></th>
                                                        <th class="text-center"><h6>Monto</h6></th>
                                                        <th class="text-center"><h6>Referencia</h6></th>
                                                        
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

            <div class="tab-pane fade mt-4 px-4" id="content-editarCuentas" role="tabpanel" aria-labelledby="content-editarCuentas-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <table id="lstEditarCuentas" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th class="text-center"><h4>Opc</h4></th>
                                                        <th class="text-center"><h4>Nro</h4></th>
                                                        <th class="text-center"><h4>Banco</h4></th>
                                                        <th class="text-center"><h4>Nombre</h4></th>
                                                        
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

             <div class="tab-pane fade mt-4 px-4" id="content-graficos" role="tabpanel" aria-labelledby="content-graficos-tab">

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-blue shadow" style="border: 1px solid black;"  >

                                <div class="card-header">
                                    

                                    <div class="card-title" >
                                        <h3><label id="title-header-ganancias" style="font-style: italic; font-weight: bold;">Ventas del mes : S./1,200.00</label></h3>
                                    </div>

                                    <div class="card-tools">

                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus fs-5"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times fs-5"></i>
                                        </button>

                                    </div> <!-- ./ end card-tools -->

                                </div> <!-- ./ end card-header -->


                                <div class="card-body">

                                    <div class="chart">

                                        <canvas id="barChartGanancias"
                                            style="min-height: 350px; height: 500px; max-height: 600px; width: 100%;">

                                        </canvas>

                                    </div>

                                </div> <!-- ./ end card-body -->

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="card card-green shadow" style="border: 1px solid black;"  >

                                <div class="card-header">
                                    
                                    <div class="card-title" >
                                        <h3><label id="title-header-ingresos" style="font-style: italic; font-weight: bold;">Ventas del mes : S./1,200.00</label></h3>
                                    </div>

                                    <div class="card-tools">

                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus fs-5"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times fs-5"></i>
                                        </button>

                                    </div> <!-- ./ end card-tools -->

                                </div> <!-- ./ end card-header -->


                                <div class="card-body">

                                    <div class="chart">

                                        <canvas id="barChartIngreso"
                                            style="min-height: 350px; height: 500px; max-height: 600px; width: 100%;">

                                        </canvas>

                                    </div>

                                </div> <!-- ./ end card-body -->

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="card card-red shadow" style="border: 1px solid black;"  >

                                <div class="card-header">

                                    <div class="card-title" >
                                        <h3><label id="title-header-salidas" style="font-style: italic; font-weight: bold;">Ventas del mes : S./1,200.00</label></h3>
                                    </div>


                                    <div class="card-tools">

                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus fs-5"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times fs-5"></i>
                                        </button>

                                    </div> <!-- ./ end card-tools -->

                                </div> <!-- ./ end card-header -->


                                <div class="card-body">

                                    <div class="chart">

                                        <canvas id="barChartSalidas"
                                            style="min-height: 350px; height: 500px; max-height: 600px; width: 100%;">

                                        </canvas>

                                    </div>

                                </div> <!-- ./ end card-body -->

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="modalCambiarNombres" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document" >

        <div class="modal-content"  style="border: 1px solid black;">

            <div class="modal-header bg-gray py-2">

                <h3 class="modal-title fw-bold">Cambiar Datos</h3>

                <button type="button" class="btn btn-outline-primary text-red border-0 fs-2" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="col-md-12">

                    <div class="card card-gray shadow" style="border: 1px solid black;"  >

                        <div class="card-body p-3">

                            <div class="col-12  col-lg-12">
                                <div class="form-group mb-2">
                                    <label class="" for="iptNombreBanco"><i
                                            class="fas fa-file-signature fs-6"></i> <span
                                            class="small">Banco</span><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" id="iptNombreBanco"
                                        placeholder="Banco" required>
                                    <div class="invalid-feedback">Debe ingresar un Nombre </div>
                                </div>
                            </div>

                            <!-- Columna para registro de la descripción del producto -->
                            <div class="col-12  col-lg-12">
                                <div class="form-group mb-2">
                                    <label class="" for="iptNombreCuenta"><i
                                            class="fas fa-file-signature fs-6"></i> <span
                                            class="small">Nombre</span><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" id="iptNombreCuenta"
                                        placeholder="Nombre" required>
                                    <div class="invalid-feedback">Debe ingresar un Nombre</div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                    <button type="button" class="btn btn-info mt-3 mx-2" style="width:300px;"
                        data-bs-dismiss="modal" id="btnGuardarEdicion">Confirmar edicion</button>
                    <!-- <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                        data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button> -->
            </div>
        </div>
    </div>
</div>

<script>

    var eventos , eventosDesdeBD,calendar;
    var tabla11,tabla12,tabla13,tabla14, tabla21,tabla22,tabla23,tabla24,tabla31;
    var tabla31,tabla02,tabla03,tabla04;
    var isActionInProgress = false;
    var isActionInProgress2 = false;
    var filtro1,filtro2,filtro3;
    var idCuenta,idNombre,idBanco;
    var anterior;
    var ayercuentas, ayeringresos, ayersalidas;

    $(document).ready(function(){

        $("#iptFechaBusqueda").datepicker({
            dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#iptFechaBusqueda").val(moment().format('DD/MM/YYYY')); 
        
        $("#iptFechaBusqueda_cuadreo").datepicker({
            dateFormat: 'dd/mm/yy' // Formato de fecha día/mes/año
        });

        $("#iptFechaBusqueda_cuadreo").val(moment().format('DD/MM/YYYY'));  

        CargarTable();

        CargarBotones();

        CargarGrafos();
        
        
    });

    $(document).on('keydown', function(event) {

        
        

        if (event.keyCode === 13 && $('#content-cuadreos:visible').length > 0 ){

            var $focusedCell = $('#lstIngresarCuadre tbody td.editable:focus');
            var $focusedCell2 = $('#lstIngresarIngreso tbody td.editable:focus');
            var $focusedCell3 = $('#lstIngresarSalidas tbody td.editable:focus');
            var $focusedCell4 = $('#lstIngresarGanancia tbody td.editable:focus');

            


            console.log( " 1 : ",$focusedCell.length , " 2 : ", $focusedCell2.length , " 3 : ", $focusedCell3.length, " 4 : ", $focusedCell4.length)

            if ($focusedCell.length === 0 && $focusedCell2.length === 0 && $focusedCell3.length === 0 && $focusedCell4.length === 0 ) {
                // Evitar el comportamiento predeterminado de la tecla Enter
                event.preventDefault();

                var $firstEditableCell = $('#lstIngresarCuadre tbody td.editable:visible:first');
                var cellIndex = $firstEditableCell.index();

                if (cellIndex == 2) {
                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = $('#lstIngresarCuadre').DataTable().row($firstEditableCell.parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if (data[5] === "") {
                        data[5] = "S/. 0.00";
                    }
                    var texto = data[5];

                    if (Number.isInteger(texto)) {
                        $firstEditableCell.text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $firstEditableCell.text(parseFloat(numero));
                    }
                }

                var range = document.createRange();
                range.selectNodeContents($firstEditableCell[0]);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

            }else if ($focusedCell.length === 1) {
                // Evitar el comportamiento predeterminado de la tecla Enter
                event.preventDefault();

                var $firstEditableCell = $('#lstIngresarIngreso tbody td.editable:visible:first');
                var cellIndex = $firstEditableCell.index();

                if (cellIndex == 2) {
                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = $('#lstIngresarIngreso').DataTable().row($firstEditableCell.parents('tr')).data();

                    console.log(data)
                    
                    // Cambiar el valor de la celda a 0
                    if (data[2] === "") {
                        data[2] = "S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $firstEditableCell.text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $firstEditableCell.text(parseFloat(numero));
                    }

                    
                }

                var range = document.createRange();
                range.selectNodeContents($firstEditableCell[0]);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

            }else if ($focusedCell2.length === 1) {
                // Evitar el comportamiento predeterminado de la tecla Enter
                event.preventDefault();

                var $firstEditableCell = $('#lstIngresarSalidas tbody td.editable:visible:first');
                var cellIndex = $firstEditableCell.index();

                if (cellIndex == 2) {
                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = $('#lstIngresarSalidas').DataTable().row($firstEditableCell.parents('tr')).data();

                    console.log(data)

                    // Cambiar el valor de la celda a 0
                    if (data[2] === "") {
                        data[2] = "S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $firstEditableCell.text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $firstEditableCell.text(parseFloat(numero));
                    }
                }

                var range = document.createRange();
                range.selectNodeContents($firstEditableCell[0]);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

                $('html, body').animate({
                    scrollTop: 10000
                }, 100); // Puedes ajustar la velocidad de animación según tus preferencias

            }else if ($focusedCell3.length === 1) {
                // Evitar el comportamiento predeterminado de la tecla Enter
                event.preventDefault();

                var $firstEditableCell = $('#lstIngresarGanancia tbody td.editable:visible:first');
                var cellIndex = $firstEditableCell.index();

                if (cellIndex == 2) {
                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = $('#lstIngresarGanancia').DataTable().row($firstEditableCell.parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if (data[2] === "") {
                        data[2] = "S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $firstEditableCell.text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $firstEditableCell.text(parseFloat(numero));
                    }
                }

                $('html, body').animate({
                    scrollTop: 0
                }, 100); // Puedes ajustar la velocidad de animación según tus preferencias

                var range = document.createRange();
                range.selectNodeContents($firstEditableCell[0]);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

            }else if ($focusedCell4.length === 1) {
                // Evitar el comportamiento predeterminado de la tecla Enter
                event.preventDefault();

                var $firstEditableCell = $('#lstIngresarCuadre tbody td.editable:visible:first');
                var cellIndex = $firstEditableCell.index();

                if (cellIndex == 2) {
                    $firstEditableCell.attr('contenteditable', 'true');
                    var data = $('#lstIngresarCuadre').DataTable().row($firstEditableCell.parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if (data[5] === "") {
                        data[5] = "S/. 0.00";
                    }
                    var texto = data[5];

                    if (Number.isInteger(texto)) {
                        $firstEditableCell.text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $firstEditableCell.text(parseFloat(numero));
                    }
                }

                var range = document.createRange();
                range.selectNodeContents($firstEditableCell[0]);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

            }

        }else if (event.keyCode === 121 && $('#content-cuadreos:visible').length > 0 ) {

            
            event.preventDefault()
                if ($('#content-cuadreos').hasClass('active')) {
                    if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        $('#btnNuevoCuadre').click();
                    setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }
                
        }else if (event.keyCode === 121 && $('#content-ingresos_salidas:visible').length > 0 ) {

            
            event.preventDefault()
                if ($('#content-ingresos_salidas').hasClass('active')) {
                    if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        $('#btnImprimirDocumentacion').click();
                    setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }
                
        }else if (event.keyCode === 119 && $('#content-cuadreos:visible').length > 0 ) {

            
            event.preventDefault()
                if ($('#content-cuadreos').hasClass('active')) {
                    if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        $('#btnCambiarCuadre').click();
                    setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }
                
        }else if (event.keyCode === 40 && $('#content-editarCuentas:visible').length > 0 ) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstEditarCuentas tbody tr:visible');
                
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    console.log('No hay filas visibles en la tabla.');
                    
                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstEditarCuentas tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstEditarCuentas tbody tr:first').addClass('selected');
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
        }else if (event.keyCode === 38 && $('#content-editarCuentas:visible').length > 0 ) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstEditarCuentas tbody tr:visible');
                
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    console.log('No hay filas visibles en la tabla.');
                    
                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstEditarCuentas tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstEditarCuentas tbody tr:last').addClass('selected');
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
        }else if (event.keyCode === 13 && $('#content-editarCuentas:visible').length > 0 ){
    
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#lstEditarCuentas tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = tabla31.row($selectedRow).data();

                    console.log(data)

                    idCuenta = data[1];

                    idBanco = data[2]; 
                
                    idNombre = data[3];

                    $("#iptNombreBanco").val(idBanco);

                    $("#iptNombreCuenta").val(idNombre);

                    $("#modalCambiarNombres").modal('show');

                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }
    
        }else if (event.keyCode === 121 && $('#content-editarCuentas:visible').length > 0 ) {

            
            event.preventDefault()
                if ($('#content-editarCuentas').hasClass('active')) {
                    if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                        isActionInProgress = true;
                        $('#btnGuardarEdicion').click();
                    setTimeout(function () {
                            isActionInProgress = false;
                        }, 200); // Adjust the delay as needed
                    }

                }
                
        }
            

    });

</script>

<script>

    function CargarGrafos(){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 19 //parametro para obtener las ganancias del mes
            },
            dataType: 'json',
            success: function(respuesta) {
             
                var fecha_ganancias = [];
                var total_ganancias = [];

                var total_ganancias_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {

                    fecha_ganancias.push(respuesta[i]['fecha_ganancias']);
                    total_ganancias.push(respuesta[i]['total_ganancias']);
                    total_ganancias_mes = parseFloat(total_ganancias_mes) + parseFloat(respuesta[i][
                        'total_ganancias'
                    ]);

                }

                var max_total_ganancias = 0; // Inicializamos con el valor negativo infinito

                for (let i = 0; i < respuesta.length; i++) {
                    var total_ganancias_actual = parseFloat(respuesta[i]['total_ganancias']);
                    if (total_ganancias_actual > max_total_ganancias) {
                        max_total_ganancias = total_ganancias_actual;
                    }
                }

                // Calcular 1.2 veces el máximo valor de total_ganancias
                var valor_1p2_max_total_ganancias = 1.2 * max_total_ganancias;

                // Redondear al múltiplo de 10 más cercano
                var multiplo_10_cercano = Math.round(valor_1p2_max_total_ganancias / 10) * 10;

                total_ganancias.push(multiplo_10_cercano);

                $("#title-header-ganancias").html('Ganancias del Mes: S/. ' + total_ganancias_mes.toFixed(2));

                var barChartCanvas = $("#barChartGanancias").get(0).getContext('2d');

                var areaChartData = {
                    labels: fecha_ganancias,
                    datasets: [{
                        label: 'Ganancias del Mes',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(0,0,0,0.9)',
                        borderWidth: 1,
                        data: total_ganancias
                    }]
                }

                var barChartData = $.extend(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global
                                .defaultFontFamily, 'normal',
                                Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                                    var scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    var y_pos = model.y;

                                    // Make sure data value does not get overflown and hidden
                                    // when the bar's value is too close to the max value of the scale
                                    // Note: The y value is reverse, it counts from top down
                                    if ((scale_max - model.y) / scale_max >= 0.93) {
                                        y_pos = model.y + 20;
                                    }

                                    ctx.fillStyle = 'white';
                                    ctx.font = 'bold 16px Arial';
                                    
                                    // Configura el color del borde y el ancho del borde
                                    ctx.strokeStyle = 'black'; // Puedes usar 'blue' en lugar de 'black' para un borde azul
                                    ctx.lineWidth = 3; // Ajusta el ancho del borde según tus preferencias
                                    
                                    var minTextY = model.y - 250; // Ajusta esta posición según tus necesidades

                                    // Asegúrate de que el texto no salga por encima de la posición mínima
                                    if (y_pos < minTextY) {
                                        y_pos = minTextY;
                                    }
                                    // Dibuja el texto con borde
                                    ctx.strokeText(dataset.data[i], model.x, y_pos);

                                    // Rellena el texto con el color blanco
                                    ctx.fillStyle = 'white';
                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
                
            }
        });

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 20 //parametro para obtener las ganancias del mes
            },
            dataType: 'json',
            success: function(respuesta) {
             
                var fecha_salidas = [];
                var total_salidas = [];

                var total_salidas_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {

                    fecha_salidas.push(respuesta[i]['fecha_salidas']);
                    total_salidas.push(respuesta[i]['total_salidas']);
                    total_salidas_mes = parseFloat(total_salidas_mes) + parseFloat(respuesta[i][
                        'total_salidas'
                    ]);

                }

                $("#title-header-salidas").html('Salidas del Mes: S/. ' + total_salidas_mes.toFixed(2));

                var barChartCanvas = $("#barChartSalidas").get(0).getContext('2d');

                var areaChartData = {
                    labels: fecha_salidas,
                    datasets: [{
                        label: 'Salidas del Mes', 
                        backgroundColor: 'rgba(255, 99, 71, 0.9)',
                        borderColor: 'rgba(0,0,0,0.9)',
                        borderWidth: 1,
                        data: total_salidas
                    }]
                }

                var max_total_salidas = 0; // Inicializamos con el valor negativo infinito

                for (let i = 0; i < respuesta.length; i++) {
                    var total_salidas_actual = parseFloat(respuesta[i]['total_salidas']);
                    if (total_salidas_actual > max_total_salidas) {
                        max_total_salidas = total_salidas_actual;
                    }
                }

                // Calcular 1.2 veces el máximo valor de total_salidas
                var valor_1p2_max_total_salidas = 1.2 * max_total_salidas;

                // Redondear al múltiplo de 10 más cercano
                var multiplo_10_cercano = Math.round(valor_1p2_max_total_salidas / 10) * 10;

                total_salidas.push(multiplo_10_cercano);

                var barChartData = $.extend(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global
                                .defaultFontFamily, 'normal',
                                Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                                    var scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    var y_pos = model.y;

                                    // Make sure data value does not get overflown and hidden
                                    // when the bar's value is too close to the max value of the scale
                                    // Note: The y value is reverse, it counts from top down
                                    if ((scale_max - model.y) / scale_max >= 0.93) {
                                        y_pos = model.y + 20;
                                    }

                                    ctx.fillStyle = 'white';
                                    ctx.font = 'bold 16px Arial';
                                    
                                    // Configura el color del borde y el ancho del borde
                                    ctx.strokeStyle = 'black'; // Puedes usar 'blue' en lugar de 'black' para un borde azul
                                    ctx.lineWidth = 3; // Ajusta el ancho del borde según tus preferencias
                                    
                                    var minTextY = model.y - 250; // Ajusta esta posición según tus necesidades

                                    // Asegúrate de que el texto no salga por encima de la posición mínima
                                    if (y_pos < minTextY) {
                                        y_pos = minTextY;
                                    }
                                    // Dibuja el texto con borde
                                    ctx.strokeText(dataset.data[i], model.x, y_pos);

                                    // Rellena el texto con el color blanco
                                    ctx.fillStyle = 'white';
                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
                
            }
        });

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 21 //parametro para obtener las ganancias del mes
            },
            dataType: 'json',
            success: function(respuesta) {
             
                var fecha_ingresos = [];
                var total_ingresos = [];

                var total_ingresos_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {

                    fecha_ingresos.push(respuesta[i]['fecha_ingresos']);
                    total_ingresos.push(respuesta[i]['total_ingresos']);
                    total_ingresos_mes = parseFloat(total_ingresos_mes) + parseFloat(respuesta[i][
                        'total_ingresos'
                    ]);

                }

                $("#title-header-ingresos").html('Ingresos del Mes: S/. ' + total_ingresos_mes.toFixed(2));

                var barChartCanvas = $("#barChartIngreso").get(0).getContext('2d');

                var areaChartData = {
                    labels: fecha_ingresos,
                    datasets: [{
                        label: 'Ingresos del Mes',
                        backgroundColor: 'rgba(144, 238, 144, 0.9)',
                        borderColor: 'rgba(0,0,0,0.9)',
                        borderWidth: 1,
                        data: total_ingresos
                    }]
                }

                var max_total_ingresos = 0; // Inicializamos con el valor negativo infinito

                for (let i = 0; i < respuesta.length; i++) {
                    var total_ingresos_actual = parseFloat(respuesta[i]['total_ingresos']);
                    if (total_ingresos_actual > max_total_ingresos) {
                        max_total_ingresos = total_ingresos_actual;
                    }
                }

                // Calcular 1.2 veces el máximo valor de total_ingresos
                var valor_1p2_max_total_ingresos = 1.2 * max_total_ingresos;

                // Redondear al múltiplo de 10 más cercano
                var multiplo_10_cercano = Math.round(valor_1p2_max_total_ingresos / 10) * 10;

                total_ingresos.push(multiplo_10_cercano);

                var barChartData = $.extend(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global
                                .defaultFontFamily, 'normal',
                                Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                                    var scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    var y_pos = model.y;

                                    // Make sure data value does not get overflown and hidden
                                    // when the bar's value is too close to the max value of the scale
                                    // Note: The y value is reverse, it counts from top down
                                    if ((scale_max - model.y) / scale_max >= 0.93) {
                                        y_pos = model.y + 20;
                                    }

                                    ctx.fillStyle = 'white';
                                    ctx.font = 'bold 16px Arial';
                                    
                                    // Configura el color del borde y el ancho del borde
                                    ctx.strokeStyle = 'black'; // Puedes usar 'blue' en lugar de 'black' para un borde azul
                                    ctx.lineWidth = 3; // Ajusta el ancho del borde según tus preferencias
                                    
                                    var minTextY = model.y - 250; // Ajusta esta posición según tus necesidades

                                    // Asegúrate de que el texto no salga por encima de la posición mínima
                                    if (y_pos < minTextY) {
                                        y_pos = minTextY;
                                    }
                                    // Dibuja el texto con borde
                                    ctx.strokeText(dataset.data[i], model.x, y_pos);

                                    // Rellena el texto con el color blanco
                                    ctx.fillStyle = 'white';
                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
                
            }
        });

    }

    function CargarTable(){

        tabla11= $("#lstIngresarCuadre").DataTable({

            columnDefs: [
                {
                    targets: [0,1,2,3,4],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [0,3,5],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [4],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;"><strong>S/. ' + parseFloat(data).toFixed(2) + '</strong></h6>';
                    }
                },
                {
                    targets: [5],
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
                    targets: [1,2],
                    visible: false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 30,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstIngresarCuadre'));
            }
        });

        tabla11.on('init.dt', function () {

            $('#lstIngresarCuadre tbody').off('click', 'td.editable');
            $('#lstIngresarCuadre tbody').off('blur', 'td.editable');
            $('#lstIngresarCuadre tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstIngresarCuadre tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla11.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[5]===""){
                        data[5]="S/. 0.00";
                    }
                    $(this).text(parseFloat(data[5].replace("S/. ", "")));

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstIngresarCuadre'));

            $('#lstIngresarCuadre tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla11.row($(this).parents('tr')).data();

                if(nuevoValor === ""){
                    tabla11.cell(currentRow, 5).data("S/. "+parseFloat(0).toFixed(2));
                }else{
                    tabla11.cell(currentRow, 5).data("S/. "+parseFloat(nuevoValor.replace("S/. ", "")).toFixed(2));
                }

                var suma1 = obtenerDatosTablaPrincipal(tabla11);

                var a_suma1 = parseFloat(suma1);

                $("#totalCuadrePrincipal").text(a_suma1.toFixed(2));
                
                
            });

            // // Función para manejar eventos de teclado
            $('#lstIngresarCuadre tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 40) { // Tecla Enter
                    e.preventDefault(); // Evitar el comportamiento predeterminado del Enter

                    var $currentCell = $(this);

                    // Obtener la fila y columna de la celda actual
                    var rowIndex = $currentCell.parent().index();
                    var cellIndex = $currentCell.index();

                    var $currentRow = $currentCell.closest('tr');
                    var $nextRow = $currentRow.next(); // Obtener la siguiente fila

                    if ($nextRow.length) {
                        var $nextEditableCell = $nextRow.find('td.editable').first(); // Obtener la primera celda editable de la siguiente fila
                        if(cellIndex == 2){
                            $nextEditableCell =$nextEditableCell.nextAll('.editable').first();
                        }
                        if ($nextEditableCell.length) {
                            // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                            if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="S/. 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[5].replace("S/. ", "")));

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        //console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstIngresarCuadre tbody td.editable:visible:first');
                        if(cellIndex == 2){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="S/. 0.00";
                                }
                                $firstEditableCell.text(parseFloat(data[5].replace("S/. ", "")));

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
                        if(cellIndex == 2){
                            $prevEditableCell =$prevEditableCell.nextAll('.editable').first();
                        }
                        if ($prevEditableCell.length) {
                            // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                             if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="S/. 0.00";
                                }
                                $prevEditableCell.text(parseFloat(data[5].replace("S/. ", "")));

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
                        var $lastRow = $('#lstIngresarCuadre tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 2){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla11.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[5]===""){
                                    data[5]="S/. 0.00";
                                }
                                $lastEditableCell.text(parseFloat(data[5].replace("S/. ", "")));

                            }

                            var range = document.createRange();
                            range.selectNodeContents($lastEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                        }
                    }
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla12= $("#lstIngresarIngreso").DataTable({

            columnDefs: [
                {
                    targets: [0,1],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2,3],
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
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstIngresarIngreso'));
            }
        });

        tabla12.on('init.dt', function () {

            $('#lstIngresarIngreso tbody').off('click', 'td.editable');
            $('#lstIngresarIngreso tbody').off('blur', 'td.editable');
            $('#lstIngresarIngreso tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstIngresarIngreso tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla12.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[2]===""){
                        data[2]="S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $(this).text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $(this).text(parseFloat(numero));
                    }

                }else if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla12.row($(this).parents('tr')).data();
                    console.log(data[3]);
                    // Cambiar el valor de la celda a 0
                    if(data[3]===""){
                        data[3]="SIN REFERENCIA";
                    }
                    $(this).text(data[3]);

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstIngresarIngreso'));

            $('#lstIngresarIngreso tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla12.row($(this).parents('tr')).data();

                console.log("data modificada : ", nuevoValor );
                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 2) {

                    if(nuevoValor === ""){
                        tabla12.cell(currentRow, 2).data("S/. "+parseFloat(0).toFixed(2));
                    }else{

                        if (Number.parseFloat(nuevoValor)) {
                            console.log("es aqui");
                            tabla12.cell(currentRow, 2).data("S/. "+ parseFloat(nuevoValor).toFixed(2));
                        } else {
                            console.log("es aqui 2 aqui no deberia ser si selecionar la fecha");
                            tabla12.cell(currentRow, 2).data("S/. "+parseFloat(nuevoValor.replace("S/. ", "")).toFixed(2));
                        }

                        
                    }

                    var suma2 = obtenerDatosTabla2Principal(tabla12);

                    var a_suma2 = parseFloat(suma2);

                    $("#totalIngresoPrincipal").text(a_suma2.toFixed(2));
            
                }
                else if (columnaModificada === 3) {

                    if(nuevoValor === ""){
                        tabla12.cell(currentRow, 3).data("SIN REFERENCIA");
                    }else{
                        tabla12.cell(currentRow, 3).data(nuevoValor);
                    }


                }

                // var data = tabla11.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                
            });

            // Función para manejar eventos de teclado
            $('#lstIngresarIngreso tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 40) { // Tecla Enter
                    console.log("40")
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
                            
                            if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                $nextEditableCell.text(parseFloat(data[2].replace("S/. ", "")));

                            }else if(cellIndex == 3){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($nextEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $nextEditableCell.text(data[3]);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        //console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstIngresarIngreso tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            
                            if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $firstEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $firstEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($firstEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $firstEditableCell.text(data[3]);

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
                             if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $prevEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $prevEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($prevEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $prevEditableCell.text(data[3]);

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
                        var $lastRow = $('#lstIngresarIngreso tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $lastEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $lastEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla12.row($lastEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $lastEditableCell.text(data[3]);

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
                        var data = tabla12.row($nextEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(data[3]===""){
                            data[3]="SIN REFERENCIA";
                        }
                        $nextEditableCell.text(data[3]);

                        var range = document.createRange();
                        range.selectNodeContents($nextEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda
                    console.log(37)
                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();

                    if ($prevEditableCell.length) {
                        $prevEditableCell.attr('contenteditable', 'true');
                        var data = tabla12.row($prevEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(parseFloat(data[2].replace("S/. ", ""))==="" || data[2] === ""){
                            data[2]="S/. 0.00";
                        }
                        var texto = data[2];

                        if (Number.isInteger(texto)) {
                            $prevEditableCell.text(parseFloat(texto));
                        } else {
                            var numero = texto.replace("S/. ", "")
                            $prevEditableCell.text(parseFloat(numero));
                        }

                        var range = document.createRange();
                        range.selectNodeContents($prevEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });


        tabla13= $("#lstIngresarSalidas").DataTable({

            columnDefs: [
                {
                    targets: [0,1],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2,3],
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
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 3 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstIngresarSalidas'));
            }
        });

        tabla13.on('init.dt', function () {

            $('#lstIngresarSalidas tbody').off('click', 'td.editable');
            $('#lstIngresarSalidas tbody').off('blur', 'td.editable');
            $('#lstIngresarSalidas tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstIngresarSalidas tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla13.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[2]===""){
                        data[2]="S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $(this).text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $(this).text(parseFloat(numero));
                    }

                }else if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla13.row($(this).parents('tr')).data();
                    console.log(data[3]);
                    // Cambiar el valor de la celda a 0
                    if(data[3]===""){
                        data[3]="SIN REFERENCIA";
                    }
                    $(this).text(data[3]);

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstIngresarSalidas'));

            $('#lstIngresarSalidas tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla13.row($(this).parents('tr')).data();

                
                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 2) {

                    if(nuevoValor === ""){
                        tabla13.cell(currentRow, 2).data("S/. "+parseFloat(0).toFixed(2));
                    }else{
                        tabla13.cell(currentRow, 2).data("S/. "+parseFloat(nuevoValor.replace("S/. ", "")).toFixed(2));
                    }

                    var suma3 = obtenerDatosTabla2Principal(tabla13);

                    var a_suma3 = parseFloat(suma3);

                    $("#totalSalidaPrincipal").text(a_suma3.toFixed(2));

                }
                else if (columnaModificada === 3) {

                    if(nuevoValor === ""){
                        tabla13.cell(currentRow, 3).data("SIN REFERENCIA");
                    }else{
                        tabla13.cell(currentRow, 3).data(nuevoValor);
                    }


                }

                // var data = tabla11.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                
            });

            // Función para manejar eventos de teclado
            $('#lstIngresarSalidas tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 40) { // Tecla Enter
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
                            
                            if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                $nextEditableCell.text(parseFloat(data[2].replace("S/. ", "")));

                            }else if(cellIndex == 3){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($nextEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $nextEditableCell.text(data[3]);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        //console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstIngresarSalidas tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            
                            if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $firstEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $firstEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($firstEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $firstEditableCell.text(data[3]);

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
                             if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $prevEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $prevEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($prevEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $prevEditableCell.text(data[3]);

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
                        var $lastRow = $('#lstIngresarSalidas tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $lastEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $lastEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla13.row($lastEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $lastEditableCell.text(data[3]);

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
                        var data = tabla13.row($nextEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(data[3]===""){
                            data[3]="SIN REFERENCIA";
                        }
                        $nextEditableCell.text(data[3]);

                        var range = document.createRange();
                        range.selectNodeContents($nextEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda
                    console.log(37)
                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();

                    if ($prevEditableCell.length) {
                        $prevEditableCell.attr('contenteditable', 'true');
                        var data = tabla13.row($prevEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(parseFloat(data[2].replace("S/. ", ""))==="" || data[2] === ""){
                            data[2]="S/. 0.00";
                        }
                        var texto = data[2];

                        if (Number.isInteger(texto)) {
                            $prevEditableCell.text(parseFloat(texto));
                        } else {
                            var numero = texto.replace("S/. ", "")
                            $prevEditableCell.text(parseFloat(numero));
                        }

                        var range = document.createRange();
                        range.selectNodeContents($prevEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });

        tabla14= $("#lstIngresarGanancia").DataTable({

            columnDefs: [
                {
                    targets: [0,1],
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2,3],
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
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 10 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstIngresarGanancia'));
            }
        });

        tabla14.on('init.dt', function () {

            $('#lstIngresarGanancia tbody').off('click', 'td.editable');
            $('#lstIngresarGanancia tbody').off('blur', 'td.editable');
            $('#lstIngresarGanancia tbody').off('keydown', 'td.editable');

            var texto_cantidad = "Und(s)";
            var texto_cantidad_actual = "Und(s)";
            var se_presiono = 0;

            $('#lstIngresarGanancia tbody').on('click', 'td.editable', function(){
                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                if(cellIndex == 2){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla14.row($(this).parents('tr')).data();
                    // Cambiar el valor de la celda a 0
                    if(data[2]===""){
                        data[2]="S/. 0.00";
                    }
                    var texto = data[2];

                    if (Number.isInteger(texto)) {
                        $(this).text(parseFloat(texto));
                    } else {
                        var numero = texto.replace("S/. ", "")
                        $(this).text(parseFloat(numero));
                    }

                }else if(cellIndex == 3){

                    $(this).attr('contenteditable', 'true');
                    var data = tabla14.row($(this).parents('tr')).data();
                    console.log(data[3]);
                    // Cambiar el valor de la celda a 0
                    if(data[3]===""){
                        data[3]="SIN REFERENCIA";
                    }
                    $(this).text(data[3]);

                }
                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);


            });
            // Llamada a la función ajustarHeadersDataTables después de que la tabla se ha inicializado
            //ajustarHeadersDataTables($('#lstIngresarGanancia'));

            $('#lstIngresarGanancia tbody').on('blur', 'td.editable', function() {

                var $currentCell = $(this);

                // Obtener la fila y columna de la celda actual
                var rowIndex = $currentCell.parent().index();
                var cellIndex = $currentCell.index();

                //console.log("Fila: " + rowIndex + ", Columna: " + cellIndex);

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = tabla14.row($(this).parents('tr')).data();

                
                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 2) {

                    if(nuevoValor === ""){
                        tabla14.cell(currentRow, 2).data("S/. "+parseFloat(0).toFixed(2));
                    }else{
                        tabla14.cell(currentRow, 2).data("S/. "+parseFloat(nuevoValor.replace("S/. ", "")).toFixed(2));
                    }

                    
                }
                else if (columnaModificada === 3) {

                    if(nuevoValor === ""){
                        tabla14.cell(currentRow, 3).data("SIN REFERENCIA");
                    }else{
                        tabla14.cell(currentRow, 3).data(nuevoValor);
                    }


                }

                // var data = tabla11.row($(this).parents('tr')).data();
                //console.log("data:5:",parseFloat(data[5]),"data 6 : ",data[6]);

                
                // // Mostrar en la consola la columna modificada y su nuevo valor
                // console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);
                
            });

            // Función para manejar eventos de teclado
            $('#lstIngresarGanancia tbody').on('keydown', 'td.editable', function(e) {
                var keyCode = e.keyCode || e.which;
                var currentValue = parseFloat($(this).text()) || 0;

                // Manejar la tecla arriba (38) y abajo (40)
                if (keyCode === 40) { // Tecla Enter
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
                            
                            if(cellIndex == 2){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($nextEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];
                                $nextEditableCell.text(parseFloat(data[2].replace("S/. ", "")));

                            }else if(cellIndex == 3){

                                $nextEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($nextEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $nextEditableCell.text(data[3]);

                            }

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        //console.log("texto_cantidad : ",texto_cantidad);
                        var $firstEditableCell = $('#lstIngresarGanancia tbody td.editable:visible:first');
                        if(cellIndex == 3){
                            $firstEditableCell =$firstEditableCell.nextAll('.editable').first();
                        }
                        if ($firstEditableCell.length) {

                            
                            if(cellIndex == 2){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($firstEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $firstEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $firstEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $firstEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($firstEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $firstEditableCell.text(data[3]);

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
                             if(cellIndex == 2){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($prevEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $prevEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $prevEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $prevEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($prevEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $prevEditableCell.text(data[3]);

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
                        var $lastRow = $('#lstIngresarGanancia tbody tr:last');
                        var $lastEditableCell = $lastRow.find('td.editable').first();

                        if(cellIndex == 3){
                            $lastEditableCell =$lastEditableCell.nextAll('.editable').first();
                        }

                        if ($lastEditableCell.length) {
                            if(cellIndex == 2){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($lastEditableCell.parents('tr')).data();
                                // Cambiar el valor de la celda a 0
                                if(data[2]===""){
                                    data[2]="S/. 0.00";
                                }
                                var texto = data[2];

                                if (Number.isInteger(texto)) {
                                    $lastEditableCell.text(parseFloat(texto));
                                } else {
                                    var numero = texto.replace("S/. ", "")
                                    $lastEditableCell.text(parseFloat(numero));
                                }

                            }else if(cellIndex == 3){

                                $lastEditableCell.attr('contenteditable', 'true');
                                var data = tabla14.row($lastEditableCell.parents('tr')).data();
                                console.log(data[3]);
                                // Cambiar el valor de la celda a 0
                                if(data[3]===""){
                                    data[3]="SIN REFERENCIA";
                                }
                                $lastEditableCell.text(data[3]);

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
                        var data = tabla14.row($nextEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(data[3]===""){
                            data[3]="SIN REFERENCIA";
                        }
                        $nextEditableCell.text(data[3]);

                        var range = document.createRange();
                        range.selectNodeContents($nextEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else if (keyCode === 37) { // Tecla izquierda
                    e.preventDefault(); // Evitar el comportamiento predeterminado de la tecla izquierda
                    console.log(37)
                    var $currentCell = $(this);
                    var $prevEditableCell = $currentCell.prevAll('td.editable').first();

                    if ($prevEditableCell.length) {
                        $prevEditableCell.attr('contenteditable', 'true');
                        var data = tabla14.row($prevEditableCell.parents('tr')).data();
                        // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                        if(parseFloat(data[2].replace("S/. ", ""))==="" || data[2] === ""){
                            data[2]="S/. 0.00";
                        }
                        var texto = data[2];

                        if (Number.isInteger(texto)) {
                            $prevEditableCell.text(parseFloat(texto));
                        } else {
                            var numero = texto.replace("S/. ", "")
                            $prevEditableCell.text(parseFloat(numero));
                        }
                        var range = document.createRange();
                        range.selectNodeContents($prevEditableCell[0]);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);
                    }
                }else {
                    return true;
                }

                // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                e.preventDefault();
            });


        });


        tabla21= $("#lstVerCuadre").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [0,3],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [1,2,4],
                    visible: false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 30,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstVerCuadre'));
            }
        });

        tabla22= $("#lstVerIngresos").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 2 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstVerIngresos'));
            }
        });

        tabla23= $("#lstVerSalidas").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 3 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstVerSalidas'));
            }
        });

        tabla24= $("#lstVerGanancia").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: "_all",
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 10 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstVerGanancia'));
            }
        });


        tabla31= $("#lstEditarCuentas").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarNombre text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-edit fs-4'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {
                    targets: [2,3],
                    render: function(data, type, row) {
                        return '<h5 style="text-align: center;">' + data + '</h5>';
                    }
                },
                {
                    targets: [1],
                    render: function(data, type, row) {
                        return '<h5 style="text-align: center;"><strong>' + data + '</strong></h5>';
                    }
                },

            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 30,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 17 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstEditarCuentas'));
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
    
    function CargarBotones(){

        $("#btnNuevoCuadre").on("click", function(){

            // EXTRAER TABLA DE CUADRES

            var tablaDataCuadre = tabla11.rows().data().toArray();

            var matrizDatosCuadre = [];

            for(var i = 0; i < tablaDataCuadre.length; i++){
                var rowData = [];
                for(var j = 0; j < 6; j++){

                    if(j == 1 || j == 2 || j == 3 || j == 4){

                    }else if(tablaDataCuadre[i][j] === "" && j == 5 ){
                        rowData.push("S/. 0.00");
                    }else {
                        rowData.push(tablaDataCuadre[i][j]);
                    }
                }

                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);

                matrizDatosCuadre.push(rowData);
            }

            console.log(matrizDatosCuadre);

            AgregarDatosCuadre(matrizDatosCuadre);

            // EXTRAER TABLA DE INGRESOS 
            
            var tablaDataIngresos = tabla12.rows().data().toArray();

            var matrizDatosIngresos = [];

            for(var i = 0; i < tablaDataIngresos.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){

                    if(tablaDataIngresos[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataIngresos[i][j] === "" && j == 3 ){
                        rowData.push("SIN REFERENCIA");
                    }else {
                        rowData.push(tablaDataIngresos[i][j]);
                    }

                }

                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);

                matrizDatosIngresos.push(rowData);
            }

            console.log(matrizDatosIngresos);

            AgregarDatosIngresos(matrizDatosIngresos);

            // EXTRAER TABLA DE SALIDAS 

            var tablaDataSalidas = tabla13.rows().data().toArray();

            var matrizDatosSalidas = [];

            for(var i = 0; i < tablaDataSalidas.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){
                    
                    if(tablaDataSalidas[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataSalidas[i][j] === "" && j == 3 ){
                        rowData.push("SIN REFERENCIA");
                    }else {
                        rowData.push(tablaDataSalidas[i][j]);
                    }
                    
                }
                
                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);
                
                matrizDatosSalidas.push(rowData);
            }

            console.log(matrizDatosSalidas);

            AgregarDatosSalidas(matrizDatosSalidas);

            // EXTRAER TABLA DE GANANCIAS

            var tablaDataGanancias = tabla14.rows().data().toArray();

            var matrizDatosGanancias = [];

            for(var i = 0; i < tablaDataGanancias.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){
                    
                    if(tablaDataGanancias[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataGanancias[i][j] === "" && j == 3 ){
                        rowData.push("SIN GANANCIAS");
                    }else {
                        rowData.push(tablaDataGanancias[i][j]);
                    }
                    
                }
                
                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);
                
                matrizDatosGanancias.push(rowData);
            }

            console.log(matrizDatosGanancias);

            AgregarDatosGanancias(matrizDatosGanancias);

            setTimeout(function() {

                if(filtro1 === "ok" && filtro2 === "ok" && filtro3 === "ok"){

                    Swal.fire({
                        icon: 'success',
                        title: 'Los Cambios fueron Guardados Correctamente',
                        timer: 800
                    })

                }

            }, 1000);

        });

        $("#iptFechaBusqueda").on('change', function() {

            // Obtener el valor actual del input
            var textoIngresado = $(this).val();
    
            // Convertir la fecha al formato yyyy-mm-dd utilizando Moment.js
            var fechaFormateada = moment(textoIngresado, 'DD/MM/YYYY').format('YYYY-MM-DD');
            
            // Mostrar el texto cambiado en la consola
            console.log('Texto cambiado:', fechaFormateada);

            CrearYMostrarCuadre(fechaFormateada);
            CrearYMostrarIngresos(fechaFormateada);
            CrearYMostrarSalidas(fechaFormateada);
            CrearYMostrarGanancias(fechaFormateada);

            setTimeout(function() {
            
                CrearYMostrarCuadreAnterior(fechaFormateada);
                CrearYMostrarIngresosAnterior(fechaFormateada);
                CrearYMostrarSalidasAnterior(fechaFormateada);

            }, 500);

            setTimeout(function() {
                var suma1 = obtenerDatosTabla(tabla21);
                var suma2 = obtenerDatosTabla2(tabla22);
                var suma3 = obtenerDatosTabla2(tabla23);

                console.log( suma1 + " - " + suma2 + " - " + suma2 )

                var a_suma1 = parseFloat(suma1);
                var a_suma2 = parseFloat(suma2);
                var a_suma3 = parseFloat(suma3);
                var a_suma4 = a_suma1 + a_suma2 - a_suma3;

                $("#totalCuadre").text(a_suma1.toFixed(2));
                $("#totalIngreso").text(a_suma2.toFixed(2));
                $("#totalSalida").text(a_suma3.toFixed(2));
                $("#totalSumatoria").text(a_suma4.toFixed(2));
                
                console.log("ayercuentas : "+ ayercuentas, "ayeringresos : " + ayeringresos, "ayersalidas : " + ayersalidas)

                var a_suma_ayer = ayercuentas + ayeringresos - ayersalidas;

                var a_suma8 = a_suma4 - a_suma_ayer;

                var totalFormulaAnterior = document.getElementById('totalFormulaAnterior');

                if(a_suma8 > 0){

                    $("#totalFormulaAnterior").text("S/. " + a_suma8.toFixed(2));

                    totalFormulaAnterior.style.color = 'green';

                }else if(a_suma8 < 0){

                    a_suma8 = a_suma8 * (-1);

                    $("#totalFormulaAnterior").text("- S/. " + a_suma8.toFixed(2));

                    totalFormulaAnterior.style.color = 'red';

                }else{

                    $("#totalFormulaAnterior").text("S/. 0.00");

                    totalFormulaAnterior.style.color = 'white';

                }

            }, 1000);

            
        });

        $("#btnCambiarCuadre").on("click", function(){
            
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            var formularioContainer = document.getElementById('formularioContainer');
            formularioContainer.style.display = (formularioContainer.style.display === 'none' ? 'block' : 'none');

            var btnNuevoCuadre = document.getElementById('btnNuevoCuadre');
            var btnGuardarCambios = document.getElementById('btnGuardarCambios');

            btnNuevoCuadre.style.display = (btnNuevoCuadre.style.display === 'none' ? 'block' : 'none');
            btnGuardarCambios.style.display = (btnGuardarCambios.style.display === 'none' ? 'block' : 'none');

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            // // Obtener el valor actual del input
            // var textoIngresado = $("#iptFechaBusqueda_cuadreo").val();
    
            // // Convertir la fecha al formato yyyy-mm-dd utilizando Moment.js
            // var fechaFormateada = moment(textoIngresado, 'DD/MM/YYYY').format('YYYY-MM-DD');
            
            // // Mostrar el texto cambiado en la consola
            // console.log('Texto cambiado:', fechaFormateada);

            // CrearYMostrarCuadre2(fechaFormateada);
            // CrearYMostrarIngresos2(fechaFormateada);
            // CrearYMostrarSalidas2(fechaFormateada);
            // CrearYMostrarGanancias2(fechaFormateada);



        });

        $("#iptFechaBusqueda_cuadreo").on('change', function() {

            // Obtener el valor actual del input
            var textoIngresado = $(this).val();
    
            // Convertir la fecha al formato yyyy-mm-dd utilizando Moment.js
            var fechaFormateada = moment(textoIngresado, 'DD/MM/YYYY').format('YYYY-MM-DD');
            
            // Mostrar el texto cambiado en la consola
            console.log('Texto cambiado:', fechaFormateada);

            CrearYMostrarCuadre2(fechaFormateada);
            CrearYMostrarIngresos2(fechaFormateada);
            CrearYMostrarSalidas2(fechaFormateada);
            CrearYMostrarGanancias2(fechaFormateada);

            setTimeout(function() {
                var suma1 = obtenerDatosTablaPrincipal(tabla11);
                var suma2 = obtenerDatosTabla2Principal(tabla12);
                var suma3 = obtenerDatosTabla2Principal(tabla13);

                console.log( suma1 + " - " + suma2 + " - " + suma3 )

                var a_suma1 = parseFloat(suma1);
                var a_suma2 = parseFloat(suma2);
                var a_suma3 = parseFloat(suma3);

                $("#totalCuadrePrincipal").text(a_suma1.toFixed(2));
                $("#totalIngresoPrincipal").text(a_suma2.toFixed(2));
                $("#totalSalidaPrincipal").text(a_suma3.toFixed(2));
                


            }, 1000);

        });

        $("#btnGuardarCambios").on("click", function(){

            // Obtener el valor actual del input
            var textoIngresado = $("#iptFechaBusqueda_cuadreo").val();
    
            // Convertir la fecha al formato yyyy-mm-dd utilizando Moment.js
            var fechaFormateada = moment(textoIngresado, 'DD/MM/YYYY').format('YYYY-MM-DD');
            
            // Mostrar el texto cambiado en la consola
            console.log('Texto cambiado:', fechaFormateada);

            // EXTRAER TABLA DE CUADRES

            var tablaDataCuadre = tabla11.rows().data().toArray();

            var matrizDatosCuadre = [];

            for(var i = 0; i < tablaDataCuadre.length; i++){
                var rowData = [];
                for(var j = 0; j < 6; j++){

                    if(j == 1 || j == 2 || j == 3 || j == 4){

                    }else if(tablaDataCuadre[i][j] === "" && j == 5 ){
                        rowData.push("S/. 0.00");
                    }else {
                        rowData.push(tablaDataCuadre[i][j]);
                    }
                }

                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);

                matrizDatosCuadre.push(rowData);
            }

            console.log(matrizDatosCuadre);

            AgregarDatosFechaCuadre(matrizDatosCuadre, fechaFormateada);

            // EXTRAER TABLA DE INGRESOS 
            
            var tablaDataIngresos = tabla12.rows().data().toArray();

            var matrizDatosIngresos = [];

            for(var i = 0; i < tablaDataIngresos.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){

                    if(tablaDataIngresos[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataIngresos[i][j] === "" && j == 3 ){
                        rowData.push("SIN REFERENCIA");
                    }else {
                        rowData.push(tablaDataIngresos[i][j]);
                    }

                }

                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);

                matrizDatosIngresos.push(rowData);
            }

            console.log(matrizDatosIngresos);

            AgregarDatosFechaIngresos(matrizDatosIngresos, fechaFormateada);

            // EXTRAER TABLA DE SALIDAS 

            var tablaDataSalidas = tabla13.rows().data().toArray();

            var matrizDatosSalidas = [];

            for(var i = 0; i < tablaDataSalidas.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){
                    
                    if(tablaDataSalidas[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataSalidas[i][j] === "" && j == 3 ){
                        rowData.push("SIN REFERENCIA");
                    }else {
                        rowData.push(tablaDataSalidas[i][j]);
                    }
                    
                }
                
                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);
                
                matrizDatosSalidas.push(rowData);
            }

            console.log(matrizDatosSalidas);

            AgregarDatosFechaSalidas(matrizDatosSalidas, fechaFormateada);

            // EXTRAER TABLA DE GANANCIAS

            var tablaDataGanancias = tabla14.rows().data().toArray();

            var matrizDatosGanancias = [];

            for(var i = 0; i < tablaDataGanancias.length; i++){
                var rowData = [];
                for(var j = 0; j < 4; j++){
                    
                    if(tablaDataGanancias[i][j] === "" && j == 2 ){
                        rowData.push("S/. 0.00");
                    }else if(tablaDataGanancias[i][j] === "" && j == 3 ){
                        rowData.push("SIN GANANCIAS");
                    }else {
                        rowData.push(tablaDataGanancias[i][j]);
                    }
                    
                }
                
                var timestamp = obtenerFechaActual();
                rowData.push(timestamp);
                
                matrizDatosGanancias.push(rowData);
            }

            console.log(matrizDatosGanancias);

            AgregarDatosFechaGanancias(matrizDatosGanancias, fechaFormateada);

            setTimeout(function() {

                if(filtro1 === "ok" && filtro2 === "ok" && filtro3 === "ok"){

                    Swal.fire({
                        icon: 'success',
                        title: 'Los Cambios fueron Guardados Correctamente',
                        timer: 800,
                    })

                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un error con los datos intentelo otra vez',
                        timer: 800,
                    })

                }

            }, 1000);

        });

        $('#lstEditarCuentas tbody').on('click', '.btnEditarNombre', function(){

            var data = tabla31.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                idCuenta = 0;

                idBanco = ""; 
                
                idNombre = "";

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                $("#card-modulos").css("display", "none");

            }else{

                tabla31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                console.log(data);

                idCuenta = data[1];

                idBanco = data[2]; 
                
                idNombre = data[3];

                $("#iptNombreBanco").val(idBanco);

                $("#iptNombreCuenta").val(idNombre);

                $("#modalCambiarNombres").modal('show');

                $("#card-modulos").css("display","block");

            }
        });

        $("#btnGuardarEdicion").on("click", function(){

            console.log("se presiono esto");

            var nuevoNombre = $("#iptNombreCuenta").val();

            var nuevoBanco = $("#iptNombreBanco").val();

            $.ajax({
                async: false,
                url: "ajax/cuadre_caja.ajax.php",
                method: "POST",
                data: {
                    'accion': 18,
                    'idCuenta': idCuenta,
                    'Nombre': nuevoNombre,
                    'Banco': nuevoBanco,
                },
                dataType: 'json',
                success: function(respuesta) {

                    console.log(respuesta);

                    if(respuesta === "ok"){

                        Swal.fire({
                            icon: 'success',
                            title: 'Los Cambios fueron Guardados Correctamente',
                            confirmButtonText: 'Aceptar',
                            timer: 800
                        })

                        tabla31.ajax.reload();

                        tabla21.ajax.reload();

                        tabla11.ajax.reload();

                    }else{

                        Swal.fire({
                            icon: 'error',
                            title: 'Hubo un error con los datos intentelo otra vez',
                            confirmButtonText: 'Aceptar',
                            timer: 800
                        })

                    }
                    
                }
            });

        });
        
        $("#btnImprimirDocumentacion").on("click", function(){

            var FechaBusqueda = $("#iptFechaBusqueda").val();

            console.log(FechaBusqueda);

            if(FechaBusqueda === ""){


            }else {

                var iptFechaBusqueda = moment(FechaBusqueda, 'DD/MM/YYYY').format('YYYY-MM-DD');

                console.log(iptFechaBusqueda);

                Extractor_Datos()

            }

        });

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function Extractor_Datos(){

        var Datex_1 = ExtraerTabla_1(tabla21);

        var Datex_2 = ExtraerTabla_2(tabla22);

        var Datex_3 = ExtraerTabla_2(tabla23);

        var Datex_4 = ExtraerTabla_2(tabla24);

        var totalCuadreAnterior = $("#totalCuadreAnterior").text();
        var totalFormulaAnterior = $("#totalFormulaAnterior").text();
        var totalIngresosAnterior = $("#totalIngresosAnterior").text();
        var totalSalidasAnterior = $("#totalSalidasAnterior").text();
        var FechaBusqueda = $("#iptFechaBusqueda").val();

        var Datex_5 =  totalCuadreAnterior + " , " + totalFormulaAnterior + " , " +  totalIngresosAnterior + " , " + totalSalidasAnterior;

        console.log("Datex_1 : ", Datex_1 , "Datex_2 : ", Datex_2 , "Datex_3 : ", Datex_3 , "Datex_4 : ", Datex_4 , "Datex_5 : ", Datex_5 ,)

        window.open('http://192.168.1.41/market-pos/vistas/generar_cuadre.php?Datex_1='+Datex_1 + '&Datex_2=' + Datex_2 + '&Datex_3=' + Datex_3 + '&Datex_4=' + Datex_4  + '&Datex_5=' + Datex_5+ '&FechaBusqueda=' + FechaBusqueda );

    }

    function ExtraerTabla_1(tabla) {

        var datosColumna0 = [];

        // Obtener todos los datos de la tabla
        var data = tabla.rows().data();

        for(i = 0; i<data.length; i++){
            datosColumna0.push([data[i][0] + " / " + data[i][3] + " / " + data[i][5]]);
        }
    
        // Devolver los arrays con los datos extraídos
        return datosColumna0;
    }

    function ExtraerTabla_2(tabla) {
        
        var datosColumna2 = [];

        // Obtener todos los datos de la tabla
        var data = tabla.rows().data();

        // Iterar sobre los datos de la tabla
        for(i = 0; i<data.length; i++){
            datosColumna2.push([data[i][2] + " / " + data[i][3]]);
        }

        // Devolver los arrays con los datos extraídos
        return datosColumna2;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function CrearYMostrarCuadre(fechaFormateada){

        if ($.fn.DataTable.isDataTable("#lstVerCuadre")) {
            $("#lstVerCuadre").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstVerCuadre tbody').off('click', 'td.editable');
            $('#lstVerCuadre tbody').off('blur', 'td.editable');
            $('#lstVerCuadre tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla21= $("#lstVerCuadre").DataTable({

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
                    targets: [5],
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
                {
                    targets: [1,2,4],
                    visible: false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 30,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 7, //2: LISTAR CLIENTES
                    'fecha':fechaFormateada,
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
                //ajustarHeadersDataTables($('#lstVerCuadre'));
            }
        });

    }

    function CrearYMostrarIngresos(fechaFormateada){
        if ($.fn.DataTable.isDataTable("#lstVerIngresos")) {
            $("#lstVerIngresos").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstVerIngresos tbody').off('click', 'td.editable');
            $('#lstVerIngresos tbody').off('blur', 'td.editable');
            $('#lstVerIngresos tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla22= $("#lstVerIngresos").DataTable({

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
                    targets: [0,1],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            var numero = parseFloat(data);
                            var dinero = "S/. " + numero.toFixed(2);

                            if(numero < 0){
                                return '<h6 style="text-align: center; color: red;"><strong>' + dinero + '</strong></h6>';
                            }else if(numero == 0){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else if(numero > 0){
                                return '<h6 style="text-align: center; color: green;"><strong>' + dinero + '</strong></h6>';
                            }
                            

                        }
                        
                    }
                },
                {
                    targets: [3],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            if(data === "SIN REFERENCIA"){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else{
                                return '<h6 style="text-align: center; color: black;"><strong>' + data + '</strong></h6>';
                            }

                        }
                        
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 8, //2: LISTAR CLIENTES
                    'fecha':fechaFormateada,
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
                //ajustarHeadersDataTables($('#lstVerIngresos'));
            }
        });

    }

    function CrearYMostrarSalidas(fechaFormateada){
        if ($.fn.DataTable.isDataTable("#lstVerSalidas")) {
            $("#lstVerSalidas").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstVerSalidas tbody').off('click', 'td.editable');
            $('#lstVerSalidas tbody').off('blur', 'td.editable');
            $('#lstVerSalidas tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla23= $("#lstVerSalidas").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [0,1],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            var numero = parseFloat(data);
                            var dinero = "S/. " + numero.toFixed(2);

                            if(numero < 0){
                                return '<h6 style="text-align: center; color: green;"><strong>' + dinero + '</strong></h6>';
                            }else if(numero == 0){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else if(numero > 0){
                                return '<h6 style="text-align: center; color: red;"><strong>' + dinero + '</strong></h6>';
                            }
                            

                        }
                        
                    }
                },

                {
                    targets: [3],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            if(data === "SIN REFERENCIA"){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else{
                                return '<h6 style="text-align: center; color: black;"><strong>' + data + '</strong></h6>';
                            }

                            
                            

                        }
                        
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 9, //2: LISTAR CLIENTES
                    'fecha':fechaFormateada,
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
                //ajustarHeadersDataTables($('#lstVerSalidas'));
            }
        });

        

    }

    function CrearYMostrarGanancias(fechaFormateada){
        if ($.fn.DataTable.isDataTable("#lstVerGanancia")) {
            $("#lstVerGanancia").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstVerGanancia tbody').off('click', 'td.editable');
            $('#lstVerGanancia tbody').off('blur', 'td.editable');
            $('#lstVerGanancia tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idCliente0
        tabla24= $("#lstVerGanancia").DataTable({

            columnDefs: [
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Agregar la clase .text-xl solo a la columna especificada
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
                {
                    targets: [0,1],
                    render: function(data, type, row) {
                        return '<h6 style="text-align: center;">' + data + '</h6>';
                    }
                },
                {
                    targets: [2],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            var numero = parseFloat(data);
                            var dinero = "S/. " + numero.toFixed(2);

                            if(numero < 0){
                                return '<h6 style="text-align: center; color: red;"><strong>' + dinero + '</strong></h6>';
                            }else if(numero == 0){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else if(numero > 0){
                                return '<h6 style="text-align: center; color: green;"><strong>' + dinero + '</strong></h6>';
                            }
                            

                        }
                        
                    }
                },

                {
                    targets: [3],
                    render: function(data, type, row) {
                        if(data === ""){

                            return '<h6 style="text-align: center;">' + data + '</h6>';

                        }else{

                            if(data === "SIN REFERENCIA"){
                                return '<h6 style="text-align: center; color: black;"><strong>' + "" + '</strong></h6>';
                            }else{
                                return '<h6 style="text-align: center; color: black;"><strong>' + data + '</strong></h6>';
                            }

                            
                            

                        }
                        
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/cuadre_caja.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 12, //2: LISTAR CLIENTES
                    'fecha':fechaFormateada,
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
                //ajustarHeadersDataTables($('#lstVerGanancia'));
            }
        });

        

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function CrearYMostrarCuadreAnterior(fechaFormateada){

        var sumatoria = 0;

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 7, //1: LISTAR PRODUCTOS
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                for(i = 0; i< respuesta.length; i++){

                    sumatoria = sumatoria + respuesta[i][4];

                }

                var a_suma5 = parseFloat(sumatoria);

                ayercuentas  = a_suma5;


                if(a_suma5 > 0){

                    $("#totalCuadreAnterior").text("S/. " + a_suma5.toFixed(2));

                }else if(a_suma5 < 0){

                    a_suma5 = a_suma5 * (-1);

                    $("#totalCuadreAnterior").text("- S/. " + a_suma5.toFixed(2));

                }else{

                    $("#totalCuadreAnterior").text("S/. 0.00");

                }

                

            }
        });

    }

    function CrearYMostrarIngresosAnterior(fechaFormateada){
        
        var sumatoria = 0;

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 22, //1: LISTAR PRODUCTOS
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                for(i = 0; i< respuesta.length; i++){

                    sumatoria = sumatoria + respuesta[i][2];

                }

                var a_suma6 = parseFloat(sumatoria);

                ayeringresos = a_suma6;


                if(a_suma6 > 0){

                    $("#totalIngresosAnterior").text("S/. " + a_suma6.toFixed(2));

                }else if(a_suma6 < 0){

                    a_suma6 = a_suma6 * (-1);

                    $("#totalIngresosAnterior").text("- S/. " + a_suma6.toFixed(2));

                }else{

                    $("#totalIngresosAnterior").text("S/. 0.00");

                }

                

            }
        });

    }

    function CrearYMostrarSalidasAnterior(fechaFormateada){
    
        var sumatoria = 0;

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 23, //1: LISTAR PRODUCTOS
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                for(i = 0; i< respuesta.length; i++){

                    sumatoria = sumatoria + respuesta[i][2];

                }

                var a_suma7 = parseFloat(sumatoria);

                ayersalidas = a_suma7;

                if(a_suma7 > 0){

                    $("#totalSalidasAnterior").text("S/. " + a_suma7.toFixed(2));

                }else if(a_suma7 < 0){

                    a_suma7 = a_suma7 * (-1);

                    $("#totalSalidasAnterior").text("- S/. " + a_suma7.toFixed(2));

                }else{

                    $("#totalSalidasAnterior").text("S/. 0.00");

                }

                

            }
        });

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function CrearYMostrarIngresos2(fechaFormateada){

        var datosNumero1 = [];
        var datosNumero2 = [];
        var datosNumero3 = [];


        $.ajax({
            async: false,
            url: "ajax/cuadre_caja.ajax.php",
            method: "POST",
            data: {
                'accion': 8,
                'fecha': fechaFormateada,
            },
            dataType: 'json',
            success: function(respuesta) {

                respuesta.forEach(function (item) {
                    datosNumero1.push(item[1]);
                    datosNumero2.push(item[2]);
                    datosNumero3.push(item[3]);
                });
            }
        });

        // console.log("Ingresos del número 1:", datosNumero1);
        // console.log("Ingresos del número 2:", datosNumero2);
        // console.log("Ingresos del número 3:", datosNumero3);

        // Obtener los datos de la tabla
        var data = tabla12.rows().data();

        // Verificar que haya datos en la tabla y que la longitud de datosNumero2 sea igual a la cantidad de filas
        if (data.length > 0 && datosNumero2.length === data.length) {

            tabla12.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                this.cell(index, 2).data("");
                this.cell(index, 3).data("");
                
            });

            // Iterar sobre cada fila de la tabla
            tabla12.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                var valor = datosNumero2[index];
                var texto = datosNumero3[index];

                // Actualizar el valor de la tercera columna en esta fila
                if(valor == 0){

                }else{
                    this.cell(index, 2).data("S/. " + parseFloat(valor).toFixed(2));
                }

                if(texto === "SIN REFERENCIA"){

                }else{
                    this.cell(index, 3).data(texto);
                }
                
            });

            // Redibujar la tabla para aplicar los cambios
            tabla12.draw();
        }

    }

    function CrearYMostrarSalidas2(fechaFormateada){

        var datosNumero2 = [];
        var datosNumero3 = [];

        $.ajax({
            async: false,
            url: "ajax/cuadre_caja.ajax.php",
            method: "POST",
            data: {
                'accion': 9,
                'fecha': fechaFormateada,
            },
            dataType: 'json',
            success: function(respuesta) {

                respuesta.forEach(function (item) {
                    datosNumero2.push(item[2]);
                    datosNumero3.push(item[3]);
                });
            }
        });

        // console.log("Salidas del número 2:", datosNumero2);
        // console.log("Salidas del número 3:", datosNumero3);

        // Obtener los datos de la tabla
        var data = tabla13.rows().data();

        // Verificar que haya datos en la tabla y que la longitud de datosNumero2 sea igual a la cantidad de filas
        if (data.length > 0 && datosNumero2.length === data.length) {

            tabla13.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                this.cell(index, 2).data("");
                this.cell(index, 3).data("");
                
            });
            // Iterar sobre cada fila de la tabla
            tabla13.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                var valor = datosNumero2[index];
                var texto = datosNumero3[index];

                // Actualizar el valor de la tercera columna en esta fila
                if(valor == 0){

                }else{
                    this.cell(index, 2).data("S/. " + parseFloat(valor).toFixed(2));
                }

                if(texto === "SIN REFERENCIA"){

                }else{
                    this.cell(index, 3).data(texto);
                }
                
            });

            // Redibujar la tabla para aplicar los cambios
            tabla13.draw();
        }


    }

    function CrearYMostrarGanancias2(fechaFormateada){

        var datosNumero2 = [];
        var datosNumero3 = [];

        $.ajax({
            async: false,
            url: "ajax/cuadre_caja.ajax.php",
            method: "POST",
            data: {
                'accion': 12,
                'fecha': fechaFormateada,
            },
            dataType: 'json',
            success: function(respuesta) {

                respuesta.forEach(function (item) {
                    datosNumero2.push(item[2]);
                    datosNumero3.push(item[3]);
                });
            }
        });

        
        // console.log("Ganancias del número 2:", datosNumero2);
        // console.log("Ganancias del número 3:", datosNumero3);

        // Obtener los datos de la tabla
        var data = tabla14.rows().data();

        // Verificar que haya datos en la tabla y que la longitud de datosNumero2 sea igual a la cantidad de filas
        if (data.length > 0 && datosNumero2.length === data.length) {

            tabla14.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                this.cell(index, 2).data("");
                this.cell(index, 3).data("");
                
            });
            // Iterar sobre cada fila de la tabla
            tabla14.rows().every(function (index) {
                // Obtener el valor correspondiente de datosNumero2 para esta fila
                var valor = datosNumero2[index];
                var texto = datosNumero3[index];

                // Actualizar el valor de la tercera columna en esta fila
                if(valor == 0){

                }else{
                    this.cell(index, 2).data("S/. " + parseFloat(valor).toFixed(2));
                }

                if(texto === "SIN REFERENCIA"){

                }else{
                    this.cell(index, 3).data(texto);
                }
                
            });

            // Redibujar la tabla para aplicar los cambios
            tabla14.draw();
        }
    }

    function CrearYMostrarCuadre2(fechaFormateada){

        var datosNumero2 = [];
        var datosNumero3 = [];
        var ordenNumero2 = [];


        $.ajax({
            async: false,
            url: "ajax/cuadre_caja.ajax.php",
            method: "POST",
            data: {
                'accion': 7,
                'fecha': fechaFormateada,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                respuesta.forEach(function (item) {
                    ordenNumero2.push(item[0]);
                    datosNumero3.push(item[4]);
                    datosNumero2.push(item[5]);
                });
            }
        });

        console.log("Cuadre del número 2:", datosNumero2);
        console.log("Orden del número 3:", datosNumero3);

        // Obtener los datos de la tabla
        var data = tabla11.rows().data();

        // Verificar que haya datos en la tabla y que la longitud de datosNumero2 sea igual a la cantidad de filas
        if (data.length > 0 && datosNumero2.length === data.length) {

            for(i = 0; i < datosNumero2.length; i++){

                // Obtener el valor correspondiente de datosNumero2 para esta fila
                var valor = datosNumero2[i];
                var antes = datosNumero3[i];
                var celda = ordenNumero2[i];

                // Iterar sobre cada fila de la tabla
                tabla11.rows().every(function (index) {
                    

                    if(valor === ""){

                        if(this.cell(index, 0).data() == celda){
                            this.cell(index, 5).data("S/. " + parseFloat(0).toFixed(2)); 
                        }

                    }else{
                        // Actualizar el valor de la tercera columna en esta fila
                        if(this.cell(index, 0).data() == celda){
                            this.cell(index, 5).data("S/. " + parseFloat(valor).toFixed(2)); 
                        }
                    }

                    
                    if(antes === ""){

                        if(this.cell(index, 0).data() == celda){
                            this.cell(index, 4).data("");
                            this.cell(index, 4).data(0); 
                        }

                    }else{
                        // Actualizar el valor de la tercera columna en esta fila
                        if(this.cell(index, 0).data() == celda){
                            this.cell(index, 4).data("");
                            this.cell(index, 4).data(antes); 
                        }
                    }
                    
                });

            }

            // Redibujar la tabla para aplicar los cambios
            tabla11.draw();
        }

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function obtenerFechaActual() {
        var fecha = new Date();
        var dia = agregarCeroDelante(fecha.getDate());
        var mes = agregarCeroDelante(fecha.getMonth() + 1);
        var año = fecha.getFullYear();
        var horas = agregarCeroDelante(fecha.getHours());
        var minutos = agregarCeroDelante(fecha.getMinutes());
        var segundos = agregarCeroDelante(fecha.getSeconds());
        
        return año + "-" + mes + "-" + dia + " " + horas + ":" + minutos + ":" + segundos;
    }

    function agregarCeroDelante(numero) {
        return numero < 10 ? "0" + numero : numero;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function AgregarDatosCuadre(matrizDatosCuadre){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 4, //1: LISTAR PRODUCTOS
                'matrizDatosCuadre': matrizDatosCuadre,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                if(respuesta === "ok"){
                    filtro1 = "ok"
                }

            }
        });

    }

    function AgregarDatosIngresos(matrizDatosIngresos){ 

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 5, //1: LISTAR PRODUCTOS
                'matrizDatosIngresos': matrizDatosIngresos,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                if(respuesta === "ok"){
                    filtro2 = "ok"
                }

            }
        });

    }

    function AgregarDatosSalidas(matrizDatosSalidas){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 6, //1: LISTAR PRODUCTOS
                'matrizDatosSalidas': matrizDatosSalidas,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                if(respuesta === "ok"){
                    filtro3 = "ok"
                }

            }
        });

    }

    function AgregarDatosGanancias(matrizDatosGanancias){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 11, //1: LISTAR PRODUCTOS
                'matrizDatosGanancias': matrizDatosGanancias,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                filtro3 = "error"

                if(respuesta === "ok"){
                    filtro3 = "ok"
                }

            }
        });

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function AgregarDatosFechaCuadre(matrizDatosCuadre, fechaFormateada){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 13, //1: LISTAR PRODUCTOS
                'matrizDatosCuadre': matrizDatosCuadre,
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);
                
                filtro1 = "error"

                if(respuesta === "ok"){
                    filtro1 = "ok"
                }

            }
        });

    }

    function AgregarDatosFechaIngresos(matrizDatosIngresos, fechaFormateada){ 

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 14, //1: LISTAR PRODUCTOS
                'matrizDatosIngresos': matrizDatosIngresos,
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                filtro2 = "error"

                if(respuesta === "ok"){
                    filtro2 = "ok"
                }

            }
        });

    }

    function AgregarDatosFechaSalidas(matrizDatosSalidas, fechaFormateada){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 15, //1: LISTAR PRODUCTOS
                'matrizDatosSalidas': matrizDatosSalidas,
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);
                
                filtro3 = "error"

                if(respuesta === "ok"){
                    filtro3 = "ok"
                }

            }
        });

    }

    function AgregarDatosFechaGanancias(matrizDatosGanancias, fechaFormateada){

        $.ajax({
            url: "ajax/cuadre_caja.ajax.php",
            method: 'POST',
            data: {
                'accion': 16, //1: LISTAR PRODUCTOS
                'matrizDatosGanancias': matrizDatosGanancias,
                'fecha':fechaFormateada,
            },
            dataType: 'json',
            success: function (respuesta) {

                console.log(respuesta);

                filtro3 = "error"

                if(respuesta === "ok"){
                    filtro3 = "ok"
                }

            }
        });

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function obtenerDatosTabla(tabla) {
        var datos = tabla.rows().data().toArray();
        var sumaColumna5 = datos.reduce(function(acc, curr) {
            return acc + parseFloat(curr[5] || 0);
        }, 0);
        console.log("Suma de la columna 5:", sumaColumna5);
        return sumaColumna5
    }

    function obtenerDatosTabla2(tabla) {
        var datos = tabla.rows().data().toArray();
        
        var sumaColumna2 = datos.reduce(function(acc, curr) {
            return acc + parseFloat(curr[2] || 0);
        }, 0);
        console.log("Suma de la columna 2:", sumaColumna2);
        return sumaColumna2
    }

    function obtenerDatosTablaPrincipal(tabla) {
        var datos = tabla.rows().data().toArray();
        var sumaColumna5 = datos.reduce(function(acc, curr) {
            // Extraer el valor numérico eliminando el símbolo de dinero y convirtiendo a número
            var valorNumerico = parseFloat(curr[5].replace('S/. ', '').replace(',', '') || 0);
            return acc + valorNumerico;
        }, 0);
        console.log("Suma de la columna 5:", sumaColumna5);
        return sumaColumna5;
    }

    function obtenerDatosTabla2Principal(tabla) {
        var datos = tabla.rows().data().toArray();
        
        var sumaColumna2 = datos.reduce(function(acc, curr) {
            var valorNumerico = parseFloat(curr[2].replace('S/. ', '').replace(',', '') || 0);
            return acc + valorNumerico;
        }, 0);
        console.log("Suma de la columna 2:", sumaColumna2);
        return sumaColumna2
    }

</script>
