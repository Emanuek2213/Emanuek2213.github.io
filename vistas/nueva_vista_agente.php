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

                <!-- <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Punto de Venta</h2> -->

            </div><!-- /.col -->

            <div class="col-sm-6">

                <!-- <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Ventas</li>

                </ol> -->

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->

<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-agente" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-elegir-tab" data-toggle="pill" href="#content-elegir" role="tab" aria-controls="content-elegir" aria-selected="false">Añadir nueva accion</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-listado-tab" data-toggle="pill" href="#content-listado" role="tab" aria-controls="content-listado" aria-selected="false">Lista de Registros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-ganancias-tab" data-toggle="pill" href="#content-ganancias" role="tab" aria-controls="content-ganancias" aria-selected="false">Editar Valores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-Cambios-tab" data-toggle="pill" href="#content-Cambios" role="tab" aria-controls="content-Cambios" aria-selected="false">Lista de Ediciones</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-agente">

            <div class="tab-pane fade active show mt-4 px-4" id="content-elegir" role="tabpanel" aria-labelledby="content-elegir-tab">

                <!-- <h4>Elija un Banco</h4> -->
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <h2 style="font-style: italic; font-weight: bold;  padding: 5px;" >Efectivo Disponible: S./ <span id="totalEfectivo_nuevo1">*******</span></h2>
                                        <h5 style="font-style: italic; font-weight: bold;  padding: 5px;" >Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy1" style="color: green;">*******</span></h5>
                                        <h5 style="font-style: italic; font-weight: bold;  padding: 5px;" >Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision1" style="color: green;">*******</span></h5>
                                    </div>

                                </div>

                                <div class = "row">
                                    <div class="col-lg-4">
                                        <button id="cambiarTotal_nuevo" class="small-box bg-indigo" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Credito de los bancos</span></button>
                                    </div>

                                    <div class="col-lg-4">
                                        <button id="mirarEfectivo_nuevo" class="small-box bg-green" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Efectivo : S./ <span id="totalEfectivo_nuevo">*******</span></span></button>
                                    </div>
                                    <div class="col-lg-4">
                                        <button id="mirarCredito_nuevo" class="small-box bg-orange" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Mirar Credito : S./ <span id="totalCredito_nuevo">*******</span></span></button>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-lg-2">
                                        <!-- small box -->
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-indigo"  data-toggle="modal" data-target="#mdlNuevoMovimiento_2_BCP">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">BCP</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoBCP">*******</span></h6>
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
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-red"  data-toggle="modal" data-target="#mdlNuevoMovimiento_2_NACION">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-weight: bold;  padding: 5px;">NACION</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoNACION">*******</span></h6>
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
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-cyan"  data-toggle="modal" data-target="#mdlNuevoMovimiento_2_BBVA">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-weight: bold;  padding: 5px;">BBVA</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoBBVA">*******</span></h6>
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
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-blue" data-toggle="modal" data-target="#mdlNuevoMovimiento_2_KASNET">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">KASNET</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoKASNET">*******</span></h6>
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
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-green" data-toggle="modal" data-target="#mdlNuevoMovimiento_2_INT">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">INTERBANK</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoINT">*******</span></h6>
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
                                        <div style="cursor:pointer; border: 1px solid black;" class="small-box bg-purple" data-toggle="modal" data-target="#mdlNuevoMovimiento_2_RED">
                                            <div class="inner">
                                                <h5 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 5px;">RED DIGITAL</span></h5>
                                                <h6 >Credito : S./ <span id="totalEfectivo_nuevoRED">*******</span></h6>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-clipboard"></i>
                                            </div>
                                            <a  class="small-box bg-orange" data-toggle="modal"><span style="font-style: italic; font-weight: bold;  padding: 5px;">Nuevo</span><i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <table id="lstElegirBanco" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th class="text-center">Agente</th>
                                                    <th class="text-center">Cuentas</th>
                                                    <th class="text-center">Total Credito</th>
                                                    <th class="text-center">TTP</th>
                                                    <th class="text-center">TTN</th>
                                                    <th class="text-center">MR</th>
                                                    <th class="text-center">MP</th>
                                                    <th class="text-center">Monto</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-listado" role="tabpanel" aria-labelledby="content-listado-tab">

                <h4>Listado de Acciones</h4>

                <div class="container-fluid">

                    <div class = "row">
                        <div class="card card-gray shadow" style="border: 1px solid black;"  >
                            <div class="card-body p-3">
                                <div class="col-md-6 mb-3">
                                    <h3 style="font-style: italic; font-weight: bold;  padding: 5px;" >Efectivo Disponible: S./ <span id="totalEfectivo_nuevo2">*******</span></h3>
                                    <h6 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy2" style="color: green;">*******</span></h6>
                                    <h6 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision2" style="color: green;">*******</span></h6>
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
                                                        <input type="text" id="iptAgente" class="form-control" data-index="2">
                                                        <label for="iptAgente">Agente</label>
                                                    </div>

                                                    <div style="width: 20%;" class="form-floating mx-1">
                                                        <input type="text" id="iptCuenta" class="form-control" data-index="3">
                                                        <label for="iptCuenta">Cuenta</label>
                                                    </div>

                                                    <div style="width: 20%;" class="form-floating mx-1">
                                                        <input type="text" id="iptNombre" class="form-control" data-index="7">
                                                        <label for="iptNombre">Persona</label>
                                                    </div>

                                                    <div style="width: 20%;" class="form-floating mx-1">
                                                        <input type="text" id="iptTipo" class="form-control" data-index="6">
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
                                                        <input type="text" id="iptAgente" class="form-control" data-index="2">
                                                        <label for="iptAgente">Agente</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptCuenta" class="form-control" data-index="3">
                                                        <label for="iptCuenta">Cuenta</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptNombre" class="form-control" data-index="7">
                                                        <label for="iptNombre">Persona</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptTipo" class="form-control" data-index="6">
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
                                    <table  id="tbl_2_movimientos" class="table table-striped w-100 shadow" style="border: 1px solid black;">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr style="font-size: 15px;">
                                                <th></th>
                                                <th class="text-center">Agente</th>
                                                <th class="text-center">Cuenta</th>
                                                <th class="text-center">Numero</th>
                                                <th class="text-center">Monto</th>
                                                <th class="text-center">Comision</th>
                                                <th class="text-center">Tipo</th>

                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Dia</th>
                                                <th class="text-center">Hora</th>
                                                <th class="text-center">N° Operacion</th>
                                                <th class="text-center">Usuarios</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-small">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-ganancias" role="tabpanel" aria-labelledby="content-ganancias-tab">

                <h4>Edicion de Cuentas</h4>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row">

                                    <div class="col-md-10 mb-3">
                                        <h2 style="font-style: italic; font-weight: bold;  padding: 5px;">Efectivo Disponible: S./ <span id="totalEfectivo_nuevo3">*******</span></h2>
                                        <h5 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy3" style="color: green;">*******</span></h5>
                                        <h5 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision3" style="color: green;">*******</span></h5>
                                    </div>

                                    <div class="col-md-2 mb-3">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnAgregarBanco">Añadir Nuevo Banco [F10] </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div  class="card card-gray shadow" style="border: 1px solid black;"  >

                            <div class="card-body p-3">

                                <div class="row mb-3">

                                    <div class="col-md-12">

                                        <table id="lstElegirBanco3" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th class="text-center">Agente</th>
                                                    <th class="text-center">Cuentas</th>
                                                    <th class="text-center">Total Credito</th>
                                                    <th class="text-center">TTP</th>
                                                    <th class="text-center">TTN</th>
                                                    <th class="text-center">MR</th>
                                                    <th class="text-center">MP</th>
                                                    <th class="text-center">Monto</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-Cambios" role="tabpanel" aria-labelledby="content-Cambios-tab">

                <h4>Lista de Ediciones</h4>

                <div class="container-fluid">

                    <div class = "row">
                        <div class="card card-gray shadow" style="border: 1px solid black;"  >
                            <div class="card-body p-3">
                                <div class="col-md-6 mb-3">
                                    <h3 style="font-style: italic; font-weight: bold;  padding: 5px;" >Efectivo Disponible: S./ <span id="totalEfectivo_nuevo4">*******</span></h3>
                                    <h6 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del dia de hoy: <span style="color: green;"> S./ </span><span id="totalComisionHoy4" style="color: green;">*******</span></h6>
                                    <h6 style="font-style: italic; font-weight: bold;  padding: 5px;">Comision del mes: <span style="color: green;"> S./ </span><span id="totalComision4" style="color: green;">*******</span></h6>
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

                                                    <div style="width: 25%;" class="form-floating mx-1">
                                                        <input type="text" id="iptAgente_4" class="form-control" data-index="2">
                                                        <label for="iptAgente_4">Agente</label>
                                                    </div>

                                                    <div style="width: 25%;" class="form-floating mx-1">
                                                        <input type="text" id="iptCuenta_4" class="form-control" data-index="3">
                                                        <label for="iptCuenta_4">Cuenta</label>
                                                    </div>

                                                    <div style="width: 25%;" class="form-floating mx-1">
                                                        <input type="text" id="iptNombre_4" class="form-control" data-index="7">
                                                        <label for="iptNombre_4">Persona</label>
                                                    </div>

                                                    <div style="width: 25%;" class="form-floating mx-1">
                                                        <input type="text" id="iptDia_4" class="form-control" data-index="8">
                                                        <label for="iptDia_4">Fecha</label>
                                                    </div>

                                                    <div id="datepicker-container"></div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptAgente_4" class="form-control" data-index="2">
                                                        <label for="iptAgente_4">Agente</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptCuenta_4" class="form-control" data-index="3">
                                                        <label for="iptCuenta_4">Cuenta</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptNombre_4" class="form-control" data-index="7">
                                                        <label for="iptNombre_4">Persona</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptDia_4" class="form-control" data-index="8">
                                                        <label for="iptDia_4">Fecha</label>
                                                    </div>

                                                </div>

                                                <div class="col-lg-6 mt-3 ">
                                                <button id="btnBorrarDatos_4" class="small-box bg-indigo" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Borrar Datos</span></button>
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
                                    <table  id="tbl_4_movimientos" class="table table-striped w-100 shadow" style="border: 1px solid black;">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr style="font-size: 15px;">
                                                <th></th>
                                                <th></th>
                                                <th class="text-center">Banco Antes</th>
                                                <th class="text-center">Cuenta Antes</th>
                                                <th class="text-center">Monto Antes</th>

                                                <th class="text-center">Banco Desp</th>
                                                <th class="text-center">Cuenta Desp</th>
                                                <th class="text-center">Monto Desp</th>

                                                <th class="text-center">Usuario</th>
                                                <th class="text-center">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-small">
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

</div>

<div class="modal fade" id="mdlListarCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Lista de Cuentas</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalStock"></button>
            </div>

            <div class="modal-body">
                <table id="lstElegirCuenta" class="display nowrap table-striped w-100 shadow ">
                    <thead class="bg-gray text-left fs-6">
                        <tr>
                            <th class="text-center">Opciones</th>
                            <th>Id</th>
                            <th>Agente</th>
                            <th>Nombre</th>
                            <th>Credito</th>
                            <th>TTP</th>
                            <th>TTN</th>
                            <th>MR</th>
                            <th>MD</th>
                            <th>Credito total</th>
                        </tr>
                    </thead>
                    <tbody class="small text-left fs-6">
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnVolverBancos">Regresar al inicio [Esc]</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlAccionesAgentes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_acciones">Acciones de Agentes</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalAcciones">
                </button>
            </div>

            <div class="modal-body">
                <table id="tblAccionesAgente" class="display nowrap table-striped w-100 shadow">
                    <thead class="bg-gray text-left fs-6">
                        <tr>
                            <th class="text-center">Opciones</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody class="small text-left fs-6">
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnVolverAgentes">Volver a elegir otra cuenta [Esc]</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlMontosComisiones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_acciones">Ingresar Montos</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalAcciones">
                </button>
            </div>

            <div class="modal-body">
                <table id="tblMontosComisiones" class="display nowrap table-striped w-100 shadow">
                    <thead class="bg-gray text-left fs-6">
                        <tr>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">(Area de ingreso de texto)</th>
                        </tr>
                    </thead>
                    <tbody class="small text-left fs-6">
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnVolverAcciones">Volver a elegir otra accion [Esc]</button>
                <button type="button" class="btn btn-info" id="btnGuardarAcciones">Guardar Acciones [Enter]</button>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="mdlListarCuenta3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Lista de Cuentas</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalStock"></button>
            </div>

            <div class="modal-body">
                <div class="row mb-3">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnAgregarCuenta">Ingresar nueva Cuenta [F10]</button>
                </div>

                <div class="row mb-3">
                    <table id="lstElegirCuenta3" class="display nowrap table-striped w-100 shadow ">
                        <thead class="bg-gray text-left fs-6">
                            <tr>
                                <th class="text-center">Opciones</th>
                                <th>Id</th>
                                <th>Agente</th>
                                <th>Nombre</th>
                                <th>Credito</th>
                                <th>TTP</th>
                                <th>TTN</th>
                                <th>MR</th>
                                <th>MD</th>
                                <th>Credito total</th>
                            </tr>
                        </thead>
                        <tbody class="small text-left fs-6">
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnVolverBancos3">Regresar al inicio [Esc]</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlEdicionCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_acciones">Modificar Valores</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalAcciones">
                </button>
            </div>

            <div class="modal-body">

                <div class="row mb-3">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnEliminarCuenta">Eliminar Cuenta [F8]</button>
                </div>

                <div class="row mb-3">
                    <table id="tblEdicionCuenta" class="display nowrap table-striped w-100 shadow">
                        <thead class="bg-gray text-left fs-6">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                            </tr>
                        </thead>
                        <tbody class="small text-left fs-6">
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="btnVolverAgentes3">Volver a elegir otra cuenta [Esc]</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnGuardarCambios">GuardarCambios [Enter]</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlIngresarCuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_acciones">Ingresar Valores</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalAcciones">
                </button>
            </div>

            <div class="modal-body">
                <table id="tblIngresarCuenta" class="display nowrap table-striped w-100 shadow">
                    <thead class="bg-gray text-left fs-6">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody class="small text-left fs-6">
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnCancelarInsersion">Cancelar [Esc]</button>
                <button type="button" class="btn btn-success" id="btnIngresarNuevo">Ingresar Nuevo Banco [Enter]</button>
            </div>

        </div>
    </div>
</div>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Ventana Modal para ingresar nuevo movimiento BCP -->
    <div class="modal fade" id="mdlNuevoMovimiento_2_BCP" role="dialog">

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
    <div class="modal fade" id="mdlNuevoMovimiento_2_NACION" role="dialog">

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
    <div class="modal fade" id="mdlNuevoMovimiento_2_BBVA" role="dialog">

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
    <div class="modal fade" id="mdlNuevoMovimiento_2_KASNET" role="dialog">

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
    <div class="modal fade" id="mdlNuevoMovimiento_2_INT" role="dialog">

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
    <div class="modal fade" id="mdlNuevoMovimiento_2_RED" role="dialog">

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

<script>

    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    var table11,table12,table13,table14,table21,table31;

    var isActionInProgress = false;
    var isActionInProgress2 = false;
    var formattedDate;
    var formattedDate_2;

    var idAgente, idCuenta, idAccion;

    var idAgente3, idCuenta3, Cuenta_id_3,monto3;

    var Usuario = '<?php echo $nombreCompleto; ?>';
    var cuentas = [];

    $(document).ready(function(){
        cargarMatrizCuentas();
        Cargar_tables();
        Cargar_Botones();
        Acciones_Modal();
        CargarEfectivo();
        CargarBotonesBancos();
        CargarModales();
        CargarBotonesModal();
        cargarOpciones();

        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            var tabId = $(e.target).attr('href');
            if (tabId === '#content-listado') {
                $('#iptAgente').focus();

                $.fn.dataTable.ext.search.push(
                    function(settings, data, dataIndex) {
                        // Verifica si el DataTable específico es el que estamos buscando
                        if (settings.nTable.id !== 'tbl_2_movimientos') {
                            return true; // Si no es el DataTable específico, permite que la fila pase el filtro
                        }

                        console.log(data[4]);

                        // Verifica si data[2] está definido
                        if (typeof data[4] === 'undefined') {
                            return true; // Si data[2] no está definido, permite que la fila pase el filtro
                        }

                        var precioDesde = parseFloat($("#iptDineroDesde").val());
                        var precioHasta = parseFloat($("#iptDineroHasta").val());

                        var col_venta = parseFloat(data[4].replace("S/", ""));

                        if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
                            (isNaN(precioDesde) && col_venta <= precioHasta) ||
                            (precioDesde <= col_venta && isNaN(precioHasta)) ||
                            (precioDesde <= col_venta && col_venta <= precioHasta)) {
                            return true;
                        }

                        return false;
                    }
                );
            }
        });



    })

    $(document).on('keydown', function(event) {

        var modales = (!$('#mdlNuevoMovimiento_2_BCP').is(':visible') && !$('#mdlNuevoMovimiento_2_NACION').is(':visible') && !$('#mdlNuevoMovimiento_2_BBVA').is(':visible') && !$('#mdlNuevoMovimiento_2_KASNET').is(':visible') && !$('#mdlNuevoMovimiento_2_INT').is(':visible') && !$('#mdlNuevoMovimiento_2_RED').is(':visible') )

        if (event.keyCode === 40 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible')&& !$('#mdlMontosComisiones').is(':visible') && modales) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirBanco tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstElegirBanco tbody tr:first').addClass('selected');
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
        }else if (event.keyCode === 40 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirCuenta tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstElegirCuenta tbody tr:first').addClass('selected');
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
        }else if (event.keyCode === 40 && $('#content-elegir:visible').length > 0 && $('#mdlAccionesAgentes').is(':visible')) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#tblAccionesAgente tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#tblAccionesAgente tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#tblAccionesAgente tbody tr:first').addClass('selected');
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

        if (event.keyCode === 38 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible')&& !$('#mdlMontosComisiones').is(':visible') && modales) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirBanco tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstElegirBanco tbody tr:last').addClass('selected');
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
        }else if (event.keyCode === 38 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirCuenta tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstElegirCuenta tbody tr:last').addClass('selected');
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
        }else if (event.keyCode === 38 && $('#content-elegir:visible').length > 0 && $('#mdlAccionesAgentes').is(':visible')) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#tblAccionesAgente tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#tblAccionesAgente tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#tblAccionesAgente tbody tr:last').addClass('selected');
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

        if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible')&& !$('#mdlMontosComisiones').is(':visible') && modales) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#lstElegirBanco tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = table11.row($selectedRow).data();

                    // Quitar la selección de todas las filas y agregarla solo a la fila actual
                    idAgente = data[1];

                    CrearYMostrar(idAgente)


                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && $('#mdlListarCuenta').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#lstElegirCuenta tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = table12.row($selectedRow).data();

                    // Quitar la selección de todas las filas y agregarla solo a la fila actual

                    // CrearYMostrar(idAgente)

                    idCuenta = data["Nombre"];

                    console.log( idAgente + " - " + idCuenta);

                    $("#mdlListarCuenta").modal('hide');

                    $("#mdlAccionesAgentes").modal('show');

                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && $('#mdlAccionesAgentes').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#tblAccionesAgente tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = table13.row($selectedRow).data();

                    // Quitar la selección de todas las filas y agregarla solo a la fila actual

                    // CrearYMostrar(idAgente)

                    idAccion = data["Nombre"];

                    console.log( idAgente + " - " + idCuenta+ " - " + idAccion);

                    $("#mdlAccionesAgentes").modal('hide');

                    $("#mdlMontosComisiones").modal('show');

                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-elegir:visible').length > 0 && $('#mdlMontosComisiones').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada

                $("#btnGuardarAcciones").click();

                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        }


        if (event.keyCode === 40 && $('#content-ganancias:visible').length > 0 && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible')&& !$('#mdlIngresarCuenta').is(':visible')) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirBanco3 tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstElegirBanco3 tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstElegirBanco3 tbody tr:first').addClass('selected');
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
        }else if (event.keyCode === 40 && $('#content-ganancias:visible').length > 0 && $('#mdlListarCuenta3').is(':visible')) {
            event.preventDefault(); // Prevent the default behavior of the Down arrow key

            // Check if the action is not already in progress
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirCuenta3 tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#lstElegirCuenta3 tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#lstElegirCuenta3 tbody tr:first').addClass('selected');
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

        if (event.keyCode === 38 && $('#content-ganancias:visible').length > 0 && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible')&& !$('#mdlIngresarCuenta').is(':visible')) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirBanco3 tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstElegirBanco3 tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstElegirBanco3 tbody tr:last').addClass('selected');
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
        }else if (event.keyCode === 38 && $('#content-ganancias:visible').length > 0 && $('#mdlListarCuenta3').is(':visible')) {
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;

                var $visibleRows = $('#lstElegirCuenta3 tbody tr:visible');
                //console.log($visibleRows.find('td:nth-child(3)').text())
                // Verificar si hay filas visibles en la tabla
                if ($visibleRows.find('td:nth-child(3)').text() === "") {
                    //console.log('No hay filas visibles en la tabla.');

                }else{
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#lstElegirCuenta3 tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#lstElegirCuenta3 tbody tr:last').addClass('selected');
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

        if (event.keyCode === 13 && $('#content-ganancias:visible').length > 0 && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible')&& !$('#mdlIngresarCuenta').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#lstElegirBanco3 tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = table31.row($selectedRow).data();

                    // Quitar la selección de todas las filas y agregarla solo a la fila actual
                    idAgente3 = data[1];

                    CrearYMostrar3(idAgente3)


                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-ganancias:visible').length > 0 && $('#mdlListarCuenta3').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                // Obtener la fila actualmente seleccionada
                var $selectedRow = $('#lstElegirCuenta3 tbody tr.selected');

                if ($selectedRow.length > 0) {
                    // Si hay una fila seleccionada, obtener los datos de la fila
                    var data = table32.row($selectedRow).data();

                    // Quitar la selección de todas las filas y agregarla solo a la fila actual

                    // CrearYMostrar(idAgente)

                    Cuenta_id_3 = data["id"];

                    idCuenta3 = data["Nombre"];

                    monto3 = data["Calculo_Final"]

                    console.log( idAgente + " - " + idCuenta);

                    var datos = [idAgente3,  idCuenta3, monto3];

                    colocarDatosCeldasEspecificas3(datos)

                    $("#mdlListarCuenta3").modal('hide');

                    $("#mdlEdicionCuenta").modal('show');

                }
                setTimeout(function () {
                    isActionInProgress = false;
                }, 100); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-ganancias:visible').length > 0 && $('#mdlIngresarCuenta').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnIngresarNuevo').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }

        } else if (event.keyCode === 13 && $('#content-ganancias:visible').length > 0 && $('#mdlEdicionCuenta').is(':visible')) { // Tecla Enter
            event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnGuardarCambios').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }

        }


        if (event.keyCode === 113 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible') && !$('#mdlMontosComisiones').is(':visible')
                    && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible') && !$('#mdlIngresarCuenta').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                const activeElement = $('#tabs-asignar-modulos-agente .nav-link.active');
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
                    if (tabId === '#content-listado') {
                        // Enfocar el cuadro de texto "iptCodigoVenta"
                        $('#iptAgente').focus();
                    }
                } else {
                    // Cambiar directamente al tab con ID "content-clientes-tab"
                    const siguienteNav = $('#content-elegir-tab');

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
        }

        if (event.keyCode === 121 && $('#content-ganancias:visible').length > 0 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible') && !$('#mdlMontosComisiones').is(':visible')
                    && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible') && !$('#mdlIngresarCuenta').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnAgregarBanco').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }else if (event.keyCode === 121 && $('#content-ganancias:visible').length > 0 && $('#mdlListarCuenta3').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnAgregarCuenta').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }

        if (event.keyCode === 27 && $('#content-ganancias:visible').length > 0 && $('#mdlListarCuenta3').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnVolverBancos3').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }else if (event.keyCode === 27 && $('#content-ganancias:visible').length > 0 && $('#mdlEdicionCuenta').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnVolverAgentes3').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }else if (event.keyCode === 27 && $('#content-ganancias:visible').length > 0 && $('#mdlIngresarCuenta').is(':visible')) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnCancelarInsersion').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }

        if (event.keyCode === 119 && $('#content-ganancias:visible').length > 0 && $('#mdlEdicionCuenta').is(':visible') ) {
            event.preventDefault()
            if (!isActionInProgress) {
                // Set the flag to indicate that the action is now in progress
                isActionInProgress = true;
                $('#btnEliminarCuenta').click();
                setTimeout(function () {
                    isActionInProgress = false;
                }, 200); // Adjust the delay as needed
            }
        }

        if ((event.keyCode === 37 || event.keyCode === 39) && $('#content-listado:visible').length > 0 && !$('#mdlListarCuenta').is(':visible') && !$('#mdlAccionesAgentes').is(':visible') && !$('#mdlMontosComisiones').is(':visible')
            && !$('#mdlListarCuenta3').is(':visible') && !$('#mdlEdicionCuenta').is(':visible') && !$('#mdlIngresarCuenta').is(':visible')) {

            event.preventDefault();
            var inputs = $('input.form-control');
            var currentIndex = inputs.index($(':focus'));

            if (event.keyCode === 39 && currentIndex < inputs.length - 1) {
                $(inputs[currentIndex + 1]).focus().click();
            } else if (event.keyCode === 37 && currentIndex > 0) {
                $(inputs[currentIndex - 1]).focus().click();
            }
        }


    });


</script>

<script>

    function Acciones_Modal(){
        $('#mdlMontosComisiones').on('shown.bs.modal', function () {
            // Ejecutar el código para encontrar y hacer clic en la primera celda editable
            setTimeout(function() {
                // Encontrar la primera celda editable
                var $firstEditableCell = $('#tblMontosComisiones tbody tr td.editable').eq(0);

                if ($firstEditableCell.length > 0) {
                    console.log($firstEditableCell);
                    // Simular un clic en la primera celda editable
                    $firstEditableCell.click();
                } else {
                    console.log('No se encontró ninguna celda editable.');
                }
            }, 100); // Ajusta el tiempo de espera según sea necesario
        });

        $('#mdlEdicionCuenta').on('shown.bs.modal', function () {
            // Ejecutar el código para encontrar y hacer clic en la primera celda editable
            setTimeout(function() {
                // Encontrar la primera celda editable
                var $firstEditableCell = $('#tblEdicionCuenta tbody tr td.editable').eq(0);

                if ($firstEditableCell.length > 0) {
                    console.log($firstEditableCell);
                    // Simular un clic en la primera celda editable
                    $firstEditableCell.click();
                } else {
                    console.log('No se encontró ninguna celda editable.');
                }
            }, 100); // Ajusta el tiempo de espera según sea necesario
        });

        $('#mdlIngresarCuenta').on('shown.bs.modal', function () {
            // Ejecutar el código para encontrar y hacer clic en la primera celda editable
            setTimeout(function() {
                // Encontrar la primera celda editable
                var $firstEditableCell = $('#tblIngresarCuenta tbody tr td.editable').eq(0);

                if ($firstEditableCell.length > 0) {
                    console.log($firstEditableCell);
                    // Simular un clic en la primera celda editable
                    $firstEditableCell.click();
                } else {
                    console.log('No se encontró ninguna celda editable.');
                }
            }, 100); // Ajusta el tiempo de espera según sea necesario
        });

    }

    function Cargar_Botones(){

        $('#lstElegirBanco tbody').on('click', '.btnSeleccionarBanco', function(){


            var data = table11.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idAgente = 0;

                $("#card-modulos").css("display", "none");

            }else{

                table11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idAgente = data[1];

                console.log(idAgente)

                CrearYMostrar(idAgente)



            }

        });

        $('#lstElegirCuenta tbody').on('click', '.btnSeleccionarCuenta', function(){


            var data = table12.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idCuenta = 0;

                $("#card-modulos").css("display", "none");

            }else{

                table12.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                // console.log(data);

                idCuenta = data["Nombre"];

                console.log( idAgente + " - " + idCuenta);

                $("#mdlListarCuenta").modal('hide');

                $("#mdlAccionesAgentes").modal('show');

            }

        });

        $('#tblAccionesAgente tbody').on('click', '.btnSeleccionarMovimiento', function(){


            var data = table13.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idAccion = 0;

                $("#card-modulos").css("display", "none");

            }else{

                table13.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                console.log(data);

                idAccion = data["Nombre"];

                console.log( idAgente + " - " + idCuenta+ " - " + idAccion);

                $("#mdlAccionesAgentes").modal('hide');

                $("#mdlMontosComisiones").modal('show');

            }

        });

        $('#btnVolverBancos').on('click', function(){
            table12.$('tr.selected').removeClass('selected');

            $("#mdlListarCuenta").modal('hide');
        })

        $('#btnVolverAgentes').on('click', function(){

            table13.$('tr.selected').removeClass('selected');

            $("#mdlAccionesAgentes").modal('hide');

            $("#mdlListarCuenta").modal('show');
        })

        $('#btnGuardarAcciones').on('click', function(){

            var datos = obtenerDatosCeldasEspecificas();

            console.log(datos);

            var monto = datos[0];
            var comision = datos[1];
            var nombre = datos[2];
            var detalles = datos[3];
            var usuario = '<?php echo $nombreCompleto; ?>';
            var codigo = datos[4];

            console.log( idAgente + " - " + idCuenta+ " - " + idAccion+ " - " + monto + " - " + comision+ " - " + nombre+ " - " + detalles+ " - " + usuario);
            if(monto != 0 && comision != 0){

                if(nombre == 0){
                    nombre = "-"
                }

                if(detalles == 0){
                    detalles = ""
                }

                if(idAccion === "Retiro"){
                    RegistrarRetiro(codigo,monto,comision,idAccion,idAgente,idCuenta,nombre,usuario,detalles);
                }else if (idAccion === "Deposito"){
                    RegistrarDeposito(codigo,monto,comision,idAccion,idAgente,idCuenta,nombre,usuario,detalles);
                }else if (idAccion === "Pago de Servicios"){
                    RegistrarServicio(codigo,monto,comision,idAccion,idAgente,idCuenta,nombre,usuario,detalles);
                }
            }else{

                if(monto == 0 ){
                    Toast.fire({
                        icon: 'error',
                        title: "El monto es OLVIGATORIO",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }else if (comision == 0){
                    Toast.fire({
                        icon: 'success',
                        title: "La comision es OLVIGATORIO",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }



        })

        $("#iptAgente").keyup(function() {
            table21.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptNombre").keyup(function() {
            table21.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptCuenta").keyup(function() {
            table21.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptTipo").keyup(function() {
            table21.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptDia").attr("readonly", true);

        // Configurar el Datepicker en el campo "iptDia"
        $("#iptDia").datepicker({
            dateFormat: 'dd/mm/yy' // Formato "dd/mm/yyyy"
        });

        $("#iptDia").change(function() {
            var selectedDate = this.value; // Obtiene la fecha seleccionada en el formato "25/03/2000"
            formattedDate = convertDateFormat(selectedDate); // Convierte el formato de fecha
            Cerrar_Mostrar(formattedDate);
        });


        $("#iptAgente_4").keyup(function() {
            table41.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptNombre_4").keyup(function() {
            table41.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptCuenta_4").keyup(function() {
            table41.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptDia_4").attr("readonly", true);

        // Configurar el Datepicker en el campo "iptDia"
        $("#iptDia_4").datepicker({
            dateFormat: 'dd/mm/yy' // Formato "dd/mm/yyyy"
        });


        $("#iptDia_4").change(function() {
            var selectedDate = this.value; // Obtiene la fecha seleccionada en el formato "25/03/2000"
            formattedDate_2 = convertDateFormat(selectedDate); // Convierte el formato de fecha
            Cerrar_Mostrar_2(formattedDate_2);
        });

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
        /*===================================================================*/
        $("#iptDineroDesde, #iptDineroHasta").keyup(function() {
            table21.draw();
        })



        $("#btnBorrarDatos").click(function() {
            $("#iptDia").val(""); // Borra el valor del campo "iptDia"
            $("#iptCuenta").val("");
            $("#iptAgente").val("");
            $("#iptNombre").val("");
            $("#iptTipo").val("");
            $("#iptDineroDesde").val("");
            $("#iptDineroHasta").val("");
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            var yyyy = today.getFullYear();

            formattedDate = yyyy + '-' + mm + '-' + dd; // Formato 'YYYY-MM-DD'
            table21.column($("#iptDia").data('index')).search("").draw();
            table21.column($("#iptCuenta").data('index')).search("").draw();
            table21.column($("#iptAgente").data('index')).search("").draw();
            table21.column($("#iptNombre").data('index')).search("").draw();
            table21.column($("#iptTipo").data('index')).search("").draw();
            table21.column($("#iptDineroDesde").data('index')).search("").draw();
            table21.column($("#iptDineroHasta").data('index')).search("").draw(); // Realiza una búsqueda sin restricciones

            Cerrar_Mostrar(formattedDate)
        });

        $("#btnBorrarDatos_4").click(function() {
            $("#iptDia_4").val(""); // Borra el valor del campo "iptDia"
            $("#iptCuenta_4").val("");
            $("#iptAgente_4").val("");
            $("#iptNombre_4").val("");

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            var yyyy = today.getFullYear();

            formattedDate_2 = yyyy + '-' + mm + '-' + dd; // Formato 'YYYY-MM-DD'
            
            table41.column($("#iptDia_4").data('index')).search("").draw();
            table41.column($("#iptCuenta_4").data('index')).search("").draw();
            table41.column($("#iptAgente_4").data('index')).search("").draw();
            table41.column($("#iptNombre_4").data('index')).search("").draw();

            Cerrar_Mostrar_2(formattedDate_2)
            
        });

        $('#lstElegirBanco3 tbody').on('click', '.btnEditarBanco', function(){


            var data = table31.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idAgente3 = 0;

                $("#card-modulos").css("display", "none");

            }else{

                table31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idAgente3 = data[1];

                console.log(idAgente3)

                CrearYMostrar3(idAgente3)



            }

        });

        $('#lstElegirCuenta3 tbody').on('click', '.btnEditarCuenta', function(){


            var data = table32.row($(this).parents('tr')).data();



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                Cuenta_id_3 = 0;

                $("#card-modulos").css("display", "none");

            }else{

                table32.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                console.log(data);

                Cuenta_id_3 = data["id"];

                idCuenta3 = data["Nombre"];

                monto3 = data["Calculo_Final"]

                console.log( idAgente3 + " - " + idCuenta3 + " - " + Cuenta_id_3 + " - "+ monto3);

                var datos = [idAgente3,  idCuenta3, monto3]

                $("#mdlEdicionCuenta").modal("show");

                $("#mdlListarCuenta3").modal("hide");

                colocarDatosCeldasEspecificas3(datos)

            }

        });

        $('#btnVolverBancos3').on('click', function(){

            table31.$('tr.selected').removeClass('selected');

            $("#mdlListarCuenta3").modal('hide');

        })

        $('#btnVolverAgentes3').on('click', function(){

            table32.$('tr.selected').removeClass('selected');

            $("#mdlEdicionCuenta").modal('hide');

            $("#mdlListarCuenta3").modal('show');
        })



        $('#btnAgregarBanco').on('click', function(){

            table31.$('tr.selected').removeClass('selected');
            table34.ajax.reload();

            $("#mdlIngresarCuenta").modal('show');
        })

        $('#btnAgregarCuenta').on('click', function(){

            table31.$('tr.selected').removeClass('selected');

            var vacio = ""
            var datos = [idAgente3,vacio ,vacio ]
            colocarDatosCeldasEspecificas4(datos)
            $("#mdlIngresarCuenta").modal('show');
        })

        $('#btnIngresarNuevo').on('click', function(){

            table31.$('tr.selected').removeClass('selected');
            var datos = obtenerDatosCeldasEspecificas4();
            console.log(datos);
            var Banco = datos[0];
            var Cuenta = datos[1];
            var Monto = datos[2];

            IngresarNuevoCuenta(Banco,Cuenta,Monto)

        })

        $('#btnEliminarCuenta').on('click', function(){
            // Mostrar el cuadro de diálogo de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto (y los registros con estos seran eliminados)",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Código que se ejecuta cuando el usuario confirma la acción
                    console.log(idAgente3 + " - " + idCuenta3 + " - " + Cuenta_id_3 + " - "+ monto3);

                    EliminarCuenta(idAgente3,idCuenta3,Cuenta_id_3);

                    // Mostrar un mensaje de éxito (opcional)

                }
            });
        });

        $("#btnGuardarCambios").on('click', function(){

            table31.$('tr.selected').removeClass('selected');
            var datos = obtenerDatosCeldasEspecificas3();
            console.log(datos);
            var Banco = datos[0];
            var Cuenta = datos[1];
            var Monto = datos[2];

            console.log(idAgente3, idCuenta3, Cuenta_id_3,monto3)

            ModificarCuenta(Banco,Cuenta,Monto,idAgente3, idCuenta3, Cuenta_id_3,monto3);

        })

        $('#tbl_2_movimientos tbody').on('click', '.btnEliminarRegistro', function() {
            var accion = 7;
            var data = table21.row($(this)).data();
            
            if (data === undefined) {
                // Intenta la otra forma
                data = table21.row($(this).parents('tr')).data();
            }
            
            var hora = data[9];
            var fecha = data[8];
            var fecha_hora = fecha + " " + hora;

            console.log(fecha_hora);

            Swal.fire({
                title: '¿Está seguro de eliminar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, deseo eliminarlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Motivo de la eliminación',
                        input: 'textarea',
                        inputLabel: 'Por favor, ingrese el motivo de la eliminación:',
                        inputPlaceholder: 'Escriba el motivo aquí...',
                        showCancelButton: true,
                        confirmButtonText: 'Enviar',
                        cancelButtonText: 'Cancelar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var motivo = result.value; // Obtener el motivo ingresado
                            console.log('Motivo de eliminación:', motivo);

                            var datos = new FormData();
                            datos.append("accion", accion);
                            datos.append("fecha_hora", fecha_hora);
                            datos.append("motivo", motivo); // Agregar el motivo al FormData

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
                                        cargarTablero();

                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'El producto no se pudo eliminar'
                                        });
                                        cargarTablero();

                                    }
                                }
                            });
                        }
                    });
                }
            });
        });

    }

    function CargarBotonesBancos(){

        var boton = document.getElementById("cambiarTotal_nuevo");
        var efectivo = document.getElementById("mirarEfectivo_nuevo");
        var credito = document.getElementById("mirarCredito_nuevo");
        var BCP = document.getElementById("totalEfectivo_nuevoBCP");
        var NACION = document.getElementById("totalEfectivo_nuevoNACION");
        var BBVA = document.getElementById("totalEfectivo_nuevoBBVA");
        var KASNET = document.getElementById("totalEfectivo_nuevoKASNET");
        var INT = document.getElementById("totalEfectivo_nuevoINT");
        var RED = document.getElementById("totalEfectivo_nuevoRED");
        var EFE = document.getElementById("totalEfectivo_nuevo");
        var CRE = document.getElementById("totalCredito_nuevo");

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

                                } else if(["INT", "Interbank", "INTERBANK"].includes(respuesta[i]["Agente"])){
                                    INTR =  INTR +     parseFloat(respuesta[i]["MontoActual"]) ;

                                } else if(["RED", "RED DIGITAL", "REDDIGITAL"].includes(respuesta[i]["Agente"])){
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

                                } else if(["INT", "Interbank", "INTERBANK"].includes(respuesta[i]["Agente"])){
                                    INTR =  INTR +     parseFloat(respuesta[i]["MontoActual"]) ;

                                } else if(["RED", "RED DIGITAL", "REDDIGITAL"].includes(respuesta[i]["Agente"])){
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

    }

    function  Cargar_tables(){

        table11= $("#lstElegirBanco").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarBanco text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-3'></i>" +
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
                {
                    "targets": 8,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[7] !== null) {
                            var numero = parseFloat(data).toFixed(2);
                            if(numero >= 0){
                                return '<h3> S/. ' + parseFloat(data).toFixed(2) + '</h3>' ;
                            }else if (numero < 0){
                                numero = -1 * numero;
                                return '<h3> -S/. ' + numero.toFixed(2) + '</h3>' ;
                            }

                        } else {
                            return '<h3>' + data + '</h3>';
                        }
                    }

                },

                {
                    "targets": [1,2],
                    "render": function (data, type, row) {

                            return '<h3>' + data + '</h3>' ;

                    }

                },
                {
                    "targets": [0,1,2,8],
                    "className": "text-center"
                },
                {
                    targets: [3,4,5,6,7],
                    visible:false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 21 //21: LISTAR AGENTES
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
                ajustarHeadersDataTables($('#lstElegirBanco'));
            }
        });

        table13= $("#tblAccionesAgente").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarMovimiento text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-3'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 22 //21: LISTAR AGENTES
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
                ajustarHeadersDataTables($('#tblAccionesAgente'));
            }
        });

        table14= $("#tblMontosComisiones").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {
                    targets: [1],
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
                    targets: [0],
                    className: "text-center",
                },

            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 23 //21: LISTAR AGENTES
                },
            },
            scrollX:true,
            "order": [
                [1, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblMontosComisiones'));
            }
        });

        table14.on('init.dt', function () {

            $('#tblMontosComisiones tbody').off('click', 'td.editable');
            $('#tblMontosComisiones tbody').off('keydown', 'td.editable');

            $('#tblMontosComisiones tbody').on('click', 'td.editable', function() {
                var $cell = $(this);

                // Asegurarse de que la celda es editable
                if ($cell.attr('contenteditable') === 'true') {
                    // Enfocar la celda
                    $cell.focus();
                    Seleccionar($cell);
                }
            });

            $('#tblMontosComisiones tbody').on('keydown', 'td.editable', function(event) {
                var $currentCell = $(':focus');
                var colIndex = $currentCell.index();
                var $targetCell;

                // Navegar hacia abajo
                if (event.keyCode === 40) { // Flecha abajo
                    var $nextRow = $currentCell.closest('tr').next('tr');
                    if ($nextRow.length > 0) {
                        $targetCell = $nextRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia arriba
                if (event.keyCode === 38) { // Flecha arriba
                    var $prevRow = $currentCell.closest('tr').prev('tr');
                    if ($prevRow.length > 0) {
                        $targetCell = $prevRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia la izquierda
                if (event.keyCode === 37) { // Flecha izquierda
                    $targetCell = $currentCell.prev('td');
                }

                // Navegar hacia la derecha
                if (event.keyCode === 39) { // Flecha derecha
                    $targetCell = $currentCell.next('td');
                }

                if ($targetCell && $targetCell.length > 0) {
                    $targetCell.trigger('click');
                    setTimeout(function() {
                        Seleccionar($targetCell);
                    }, 0);
                }
            });

        });

        table21 = $("#tbl_2_movimientos").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength'
                ],
                lengthMenu: [5, 10, 20, 30, 50, 100],
                pageLength: 30,
                ajax:{
                    url: "ajax/registro_agente.ajax.php",
                    dataSrc: '',
                    type: 'POST',
                    data: {
                        'accion': 25 //parametro para obtener las ventas del mes
                    },
                },
                // responsive: {
                //     details: {
                //         type: 'column'
                //     }
                // },
                scrollX:true,
                columnDefs: [

                    {
                        targets:0,
                        visible: false,
                        // className: 'control'
                    },
                    {
                        targets: 1,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center',
                                'font-weight': 'bold'
                            });
                        }
                    },
                    {
                        targets: 4,

                        render: function(data, type, row) {
                            // Agrega "S/" al inicio de los números en la columna 3
                            return '<h6> S/' + parseFloat(data).toFixed(2) + '</h6>' ;
                        },

                        createdCell: function (td, cellData, rowData, row, col) {
                            var value = parseFloat(cellData); // Asegurarse de que el valor sea numérico
                            var styles = {

                                'text-align': 'center'
                            };

                            if (value > 0) {
                                styles['color'] = 'green';
                                styles['font-weight'] = 'bold';
                            } else if (value < 0) {
                                styles['color'] = 'red';
                                styles['font-weight'] = 'bold';
                            } else {
                                styles['color'] = 'grey';
                            }

                            $(td).css(styles);
                        }
                    },
                    {
                        targets: 5,
                        render: function(data, type, row) {
                            // Agrega "S/" al inicio de los números en la columna 3
                            return '<h6>+ S/' + data + '</h6>' ;
                        },

                        createdCell: function (td, cellData, rowData, row, col) {
                            var value = parseFloat(cellData); // Asegurarse de que el valor sea numérico
                            var styles = {

                                'text-align': 'center'
                            };

                            if (value > 0) {
                                styles['color'] = 'green';
                                styles['font-weight'] = 'bold';
                            } else if (value < 0) {
                                styles['color'] = 'red';
                                styles['font-weight'] = 'bold';
                            } else {
                                styles['color'] = 'grey';
                            }

                            $(td).css(styles);
                        }
                    },

                    {
                        targets: [2, 3, 6],
                        render: function (data, type, row, meta) {
                            var color = '';
                            var fontWeight = 'bold';

                            // Obtener el valor de la columna 6 (índice 5 ya que las columnas están indexadas desde 0)
                            var valueCol6 = row[6];

                            if (valueCol6 === 'Deposito') {
                                color = 'darkorange';
                            } else if (valueCol6 === 'Retiro') {
                                color = 'darkmagenta';
                            }

                            return '<h6><span style="color: ' + color + '; font-weight: ' + fontWeight + ';">' + data + '</span></h6>';
                        },
                        createdCell: function (td, cellData, rowData, row, col) {
                            // Alinear el texto en el centro
                            $(td).css({
                                'text-align': 'center'
                            });

                            // Aplicar color según el valor de la columna 6
                            if (col === 2 || col === 3 || col === 6) {
                                var valueCol6 = rowData[6];

                                if (valueCol6 === 'Deposito') {
                                    $(td).css('color', 'darkorange');
                                } else if (valueCol6 === 'Retiro') {
                                    $(td).css('color', 'darkmagenta');
                                }

                                $(td).css('font-weight', 'bold');
                            }
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
                                // "<span class='btnEditarRegistro text-primary px-1' style='cursor:pointer;'>" +
                                // "<i class='fas fa-pencil-alt fs-5'></i>" +
                                // "</span>" +
                                "<span class='btnEliminarRegistro text-danger px-1' style='cursor:pointer;'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +
                                "</center>"
                        }
                    }


                ],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                },
                "drawCallback": function(settings) {
                    ajustarHeadersDataTables($('#tbl_2_movimientos'));
                }

        });

        table31= $("#lstElegirBanco3").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarBanco text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-edit fs-3'></i>" +
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
                {
                    "targets": 8,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[7] !== null) {
                            var numero = parseFloat(data).toFixed(2);
                            if(numero >= 0){
                                return '<h3> S/. ' + parseFloat(data).toFixed(2) + '</h3>' ;
                            }else if (numero < 0){
                                numero = -1 * numero;
                                return '<h3> -S/. ' + numero.toFixed(2) + '</h3>' ;
                            }

                        } else {
                            return '<h3>' + data + '</h3>';
                        }
                    }

                },

                {
                    "targets": [1,2],
                    "render": function (data, type, row) {

                            return '<h3>' + data + '</h3>' ;

                    }

                },
                {
                    "targets": [0,1,2,8],
                    "className": "text-center"
                },
                {
                    targets: [3,4,5,6,7],
                    visible:false
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 21 //21: LISTAR AGENTES
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
                ajustarHeadersDataTables($('#lstElegirBanco3'));
            }
        });

        table33= $("#tblEdicionCuenta").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {
                    targets: [1],
                    createdCell: function (td, cellData, rowData, row, col) {
                        // Verificar si cellData está vacío
                        if (cellData === "" || cellData === null || cellData === undefined) {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        }
                    },
                    className: "text-center",
                }


            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 28 //21: LISTAR AGENTES
                },
            },
            scrollX:true,
            "order": [
                [1, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblEdicionCuenta'));
            }
        });

        table33.on('init.dt', function () {

            $('#tblEdicionCuenta tbody').off('click', 'td.editable');
            $('#tblEdicionCuenta tbody').off('keydown', 'td.editable');

            $('#tblEdicionCuenta tbody').on('click', 'td.editable', function() {
                var $cell = $(this);

                // Asegurarse de que la celda es editable
                if ($cell.attr('contenteditable') === 'true') {
                    // Enfocar la celda
                    $cell.focus();
                    Seleccionar($cell);
                }
            });

            $('#tblEdicionCuenta tbody').on('keydown', 'td.editable', function(event) {
                var $currentCell = $(':focus');
                var colIndex = $currentCell.index();
                var $targetCell;

                // Navegar hacia abajo
                if (event.keyCode === 40) { // Flecha abajo
                    var $nextRow = $currentCell.closest('tr').next('tr');
                    if ($nextRow.length > 0) {
                        $targetCell = $nextRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia arriba
                if (event.keyCode === 38) { // Flecha arriba
                    var $prevRow = $currentCell.closest('tr').prev('tr');
                    if ($prevRow.length > 0) {
                        $targetCell = $prevRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia la izquierda
                if (event.keyCode === 37) { // Flecha izquierda
                    $targetCell = $currentCell.prev('td');
                }

                // Navegar hacia la derecha
                if (event.keyCode === 39) { // Flecha derecha
                    $targetCell = $currentCell.next('td');
                }

                if ($targetCell && $targetCell.length > 0) {
                    $targetCell.trigger('click');
                    setTimeout(function() {
                        Seleccionar($targetCell);
                    }, 0);
                }
            });

        });

        table34= $("#tblIngresarCuenta").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            columnDefs: [
                {
                    targets: [1],
                    createdCell: function (td, cellData, rowData, row, col) {
                        // Verificar si cellData está vacío
                        if (cellData === "" || cellData === null || cellData === undefined) {
                            $(td).addClass('editable');
                            $(td).css('font-family', 'Calibri, sans-serif');
                            $(td).attr('contenteditable', 'true');
                        }
                    },
                    className: "text-center",
                }


            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 28 //21: LISTAR AGENTES
                },
            },
            scrollX:true,
            "order": [
                [1, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#tblIngresarCuenta'));
            }
        });

        table34.on('init.dt', function () {

            $('#tblIngresarCuenta tbody').off('click', 'td.editable');
            $('#tblIngresarCuenta tbody').off('keydown', 'td.editable');

            $('#tblIngresarCuenta tbody').on('click', 'td.editable', function() {
                var $cell = $(this);

                // Asegurarse de que la celda es editable
                if ($cell.attr('contenteditable') === 'true') {
                    // Enfocar la celda
                    $cell.focus();
                    Seleccionar($cell);
                }
            });

            $('#tblIngresarCuenta tbody').on('keydown', 'td.editable', function(event) {
                var $currentCell = $(':focus');
                var colIndex = $currentCell.index();
                var $targetCell;

                // Navegar hacia abajo
                if (event.keyCode === 40) { // Flecha abajo
                    var $nextRow = $currentCell.closest('tr').next('tr');
                    if ($nextRow.length > 0) {
                        $targetCell = $nextRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia arriba
                if (event.keyCode === 38) { // Flecha arriba
                    var $prevRow = $currentCell.closest('tr').prev('tr');
                    if ($prevRow.length > 0) {
                        $targetCell = $prevRow.find('td').eq(colIndex);
                    }
                }

                // Navegar hacia la izquierda
                if (event.keyCode === 37) { // Flecha izquierda
                    $targetCell = $currentCell.prev('td');
                }

                // Navegar hacia la derecha
                if (event.keyCode === 39) { // Flecha derecha
                    $targetCell = $currentCell.next('td');
                }

                if ($targetCell && $targetCell.length > 0) {
                    $targetCell.trigger('click');
                    setTimeout(function() {
                        Seleccionar($targetCell);
                    }, 0);
                }
            });

        });

        table41 = $("#tbl_4_movimientos").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength'
                ],
                lengthMenu: [5, 10, 20, 30, 50, 100],
                pageLength: 30,
                ajax:{
                    url: "ajax/registro_agente.ajax.php",
                    dataSrc: '',
                    type: 'POST',
                    data: {
                        'accion': 33 //parametro para obtener las ventas del mes
                    },
                },
                // responsive: {
                //     details: {
                //         type: 'column'
                //     }
                // },
                "order": [
                    [0, 'desc']
                ],
                scrollX:true,
                columnDefs: [

                    {
                        targets: [0, 1],
                        visible: false
                    },
                    {
                        targets: [2, 3, 5,6],
                        render: function (data, type, row, meta) {
                            var color = '';
                            var fontWeight = 'bold';

                            switch (data) {
                                case 'BCP':
                                    color = 'blue';
                                    break;
                                case 'BBVA':
                                    color = 'turquoise';
                                    break;
                                case 'INT':
                                case 'INTERBANK':
                                    color = 'green';
                                    break;
                                case 'RED':
                                case 'RED DIGITAL':
                                    color = 'purple';
                                    break;
                                case 'NACION':
                                    color = 'red';
                                    break;
                                case 'KASNET':
                                    color = 'saddlebrown';
                                    break;
                                default:
                                    color = 'black'; // Color por defecto si no coincide con ninguna condición
                                    break;
                            }

                            return '<h6><span style="color: ' + color + '; font-weight: ' + fontWeight + ';">' + data + '</span></h6>';
                        },
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: [4, 7],
                        render: function(data, type, row) {
                            var value = parseFloat(data).toFixed(2);
                            var formattedValue = value < 0 ? '-S/ ' + Math.abs(value).toFixed(2) : 'S/ ' + value;
                            return '<h6 style="font-weight: bold;">' + formattedValue + '</h6>';
                        },
                        createdCell: function (td, cellData, rowData, row, col) {
                            var value = parseFloat(cellData);
                            var styles = {
                                'text-align': 'center',
                                'font-weight': 'bold'
                            };

                            if (value > 0) {
                                styles['color'] = 'green';
                            } else if (value < 0) {
                                styles['color'] = 'red';
                            } else {
                                styles['color'] = 'grey';
                            }

                            $(td).css(styles);
                        }
                    }


                ],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                },
                "drawCallback": function(settings) {
                    ajustarHeadersDataTables($('#tbl_4_movimientos'));
                }

        });

    }

    function CrearYMostrar(idAgente){
        if ($.fn.DataTable.isDataTable("#lstElegirCuenta")) {
            $("#lstElegirCuenta").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstElegirCuenta tbody').off('click', 'td.editable');
            $('#lstElegirCuenta tbody').off('blur', 'td.editable');
            $('#lstElegirCuenta tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idAgente
        table12 = $("#lstElegirCuenta").DataTable({
            //"searching": false,
            "columnDefs": [
                {
                    "targets": 9,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[8] !== null) {
                            var numero = parseFloat(data).toFixed(2);

                            if( numero >= 0 ){
                                return 'S/. ' + parseFloat(data).toFixed(2);
                            }else if (numero < 0){
                                numero = -1 * numero;
                                return '- S/. ' + numero.toFixed(2);
                            }

                        } else {
                            return data;
                        }
                    }

                },
                {
                    "targets": [0,1,3,5,9],
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
                            "<span class='btnSeleccionarCuenta text-green px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-money-bill-wave fs-4'></i>" +
                            "</span>" +
                            "</center>"
                    },

                },
                {
                    "targets": [1,2,4,5,6,7,8],
                    "visible": false
                },

            ],

            pageLength: [10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 20, //1: LISTAR PRODUCTOS
                    'idAgente':idAgente.trim(),
                },
            },
            scrollX:true,

            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstElegirCuenta'));
            },

        });

        $("#mdlListarCuenta").modal('show');

    }

    function CrearYMostrar3(idAgente){
        if ($.fn.DataTable.isDataTable("#lstElegirCuenta3")) {
            $("#lstElegirCuenta3").DataTable().destroy();
        }

         // Restablecer eventos para evitar acumulación
            $('#lstElegirCuenta3 tbody').off('click', 'td.editable');
            $('#lstElegirCuenta3 tbody').off('blur', 'td.editable');
            $('#lstElegirCuenta3 tbody').off('keydown', 'td.editable');

        // Crear la tabla con el nuevo valor de idAgente
        table32 = $("#lstElegirCuenta3").DataTable({
            //"searching": false,
            "columnDefs": [
                {
                    "targets": 9,
                    "render": function (data, type, row) {
                        if (type === 'display' && row[8] !== null) {
                            var numero = parseFloat(data).toFixed(2);

                            if( numero >= 0 ){
                                return 'S/. ' + parseFloat(data).toFixed(2);
                            }else if (numero < 0){
                                numero = -1 * numero;
                                return '- S/. ' + numero.toFixed(2);
                            }

                        } else {
                            return data;
                        }
                    }

                },
                {
                    "targets": [0,1,3,5,9],
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
                            "<span class='btnEditarCuenta text-warning px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-edit fs-4'></i>" +
                            "</span>" +
                            "</center>"
                    },

                },
                {
                    "targets": [1,2,4,5,6,7,8],
                    "visible": false
                },

            ],

            pageLength: [10, 15, 30, 50, 100],
            pageLength: 10,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 20, //1: LISTAR PRODUCTOS
                    'idAgente':idAgente.trim(),
                },
            },
            scrollX:true,

            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstElegirCuenta3'));
            },

        });

        $("#mdlListarCuenta3").modal('show');

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

    function Seleccionar($cell) {
        var range = document.createRange();
        var selection = window.getSelection();
        range.selectNodeContents($cell[0]);
        selection.removeAllRanges();
        selection.addRange(range);
    }

    function obtenerDatosCeldasEspecificas() {
        var datos = [];
        var celdasEspecificas = [
            [0, 1],
            [1, 1],
            [2, 1],
            [3, 1],
            [4, 1],
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = $('#tblMontosComisiones tbody tr').eq(filaIndex).find('td').eq(colIndex).text();

            // Si el contenido es una cadena vacía o contiene solo espacios en blanco, cambiarlo a 0
            if (contenido.trim() === "" || contenido.trim() === " ") {
                contenido = "0";
            }

            datos.push(contenido);
        });

        return datos;
    }

    function RegistrarRetiro(codigo,monto,comision,tipo,Agente,cuenta,nombre,usuario,detalles){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 24,
                'eleccion': 1,
                'codigo': codigo,
                'monto': monto,
                'comision': comision,
                'tipo': tipo,
                'Agente': Agente,
                'cuenta': cuenta,    //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'nombre': nombre,
                'usuario': usuario,
                'detalles': detalles,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                if(respuesta === "ok"){
                    Toast.fire({
                        icon: 'success',
                        title: "Retiro Registrado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    cargarTablero();
                    $("#mdlMontosComisiones").modal("hide");
                    table12.$('tr.selected').removeClass('selected');
                    table13.$('tr.selected').removeClass('selected');
                }

            }
        });
    }

    function RegistrarDeposito(codigo,monto,comision,tipo,Agente,cuenta,nombre,usuario,detalles){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 24,
                'eleccion': 2,
                'codigo': codigo,
                'monto': monto,
                'comision': comision,
                'tipo': tipo,
                'Agente': Agente,
                'cuenta': cuenta,    //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'nombre': nombre,
                'usuario': usuario,
                'detalles': detalles,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                if(respuesta === "ok"){
                    Toast.fire({
                        icon: 'success',
                        title: "Deposito Registrado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    cargarTablero();
                    $("#mdlMontosComisiones").modal("hide");
                    table12.$('tr.selected').removeClass('selected');
                    table13.$('tr.selected').removeClass('selected');
                }

            }
        });
    }

    function RegistrarServicio(codigo,monto,comision,tipo,Agente,cuenta,nombre,usuario,detalles){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 24,
                'eleccion': 3,
                'codigo': codigo,
                'monto': monto,
                'comision': comision,
                'tipo': tipo,
                'Agente': Agente,
                'cuenta': cuenta,    //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'nombre': nombre,
                'usuario': usuario,
                'detalles': detalles,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                if(respuesta === "ok"){
                    Toast.fire({
                        icon: 'success',
                        title: "Servicio Registrado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    cargarTablero();
                    $("#mdlMontosComisiones").modal("hide");
                    table12.$('tr.selected').removeClass('selected');
                    table13.$('tr.selected').removeClass('selected');
                }

            }
        });
    }

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

    function Cerrar_Mostrar(formattedDate) {
        if (!formattedDate) {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            var yyyy = today.getFullYear();

            formattedDate = yyyy + '-' + mm + '-' + dd; // Formato 'YYYY-MM-DD'
        }
        
        if ($.fn.DataTable.isDataTable("#tbl_2_movimientos")) {
            $("#tbl_2_movimientos").DataTable().destroy();
        }

        table21 = $("#tbl_2_movimientos").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            lengthMenu: [5, 10, 20, 30, 50, 100],
            pageLength: 30,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: 'POST',
                data: {
                    'accion': 26,
                    'fecha_eleccion': formattedDate // Parámetro para obtener las ventas del mes
                }
            },
            scrollX: true,
            columnDefs: [
                {
                    targets: 0,
                    visible: false
                },
                {
                    targets: 1,
                    createdCell: function (td, cellData) {
                        $(td).css({
                            'text-align': 'center',
                            'font-weight': 'bold'
                        });
                    }
                },
                {
                    targets: 4,
                    render: function(data) {
                        // Agrega "S/" al inicio de los números en la columna 4
                        return '<h6>S/' + parseFloat(data).toFixed(2) + '</h6>';
                    },
                    createdCell: function (td, cellData) {
                        var value = parseFloat(cellData); // Asegurarse de que el valor sea numérico
                        var styles = {
                            'text-align': 'center'
                        };

                        if (value > 0) {
                            styles['color'] = 'green';
                            styles['font-weight'] = 'bold';
                        } else if (value < 0) {
                            styles['color'] = 'red';
                            styles['font-weight'] = 'bold';
                        } else {
                            styles['color'] = 'grey';
                        }

                        $(td).css(styles);
                    }
                },
                {
                    targets: 5,
                    render: function(data) {
                        // Agrega "S/" al inicio de los números en la columna 5
                        return '<h6>+ S/' + data + '</h6>';
                    },
                    createdCell: function (td, cellData) {
                        var value = parseFloat(cellData); // Asegurarse de que el valor sea numérico
                        var styles = {
                            'text-align': 'center'
                        };

                        if (value > 0) {
                            styles['color'] = 'green';
                            styles['font-weight'] = 'bold';
                        } else if (value < 0) {
                            styles['color'] = 'red';
                            styles['font-weight'] = 'bold';
                        } else {
                            styles['color'] = 'grey';
                        }

                        $(td).css(styles);
                    }
                },
                {
                    targets: [2, 3, 6],
                    render: function(data, type, row) {
                        var color = '';
                        var fontWeight = 'bold';

                        // Obtener el valor de la columna 6 (índice 5 ya que las columnas están indexadas desde 0)
                        var valueCol6 = row[6];

                        if (valueCol6 === 'Deposito') {
                            color = 'darkorange';
                        } else if (valueCol6 === 'Retiro') {
                            color = 'darkmagenta';
                        }

                        return '<h6><span style="color: ' + color + '; font-weight: ' + fontWeight + ';">' + data + '</span></h6>';
                    },
                    createdCell: function (td, cellData, rowData, row, col) {
                        // Alinear el texto en el centro
                        $(td).css({
                            'text-align': 'center'
                        });

                        // Aplicar color según el valor de la columna 6
                        var valueCol6 = rowData[6];

                        if (col === 2 || col === 3 || col === 6) {
                            if (valueCol6 === 'Deposito') {
                                $(td).css('color', 'darkorange');
                            } else if (valueCol6 === 'Retiro') {
                                $(td).css('color', 'darkmagenta');
                            } else {
                                $(td).css('color', 'black'); // Color predeterminado si no coincide
                            }

                            $(td).css('font-weight', 'bold');
                        }
                    }
                },
                // Otros ajustes de columna...
                {
                    targets: 12,
                    orderable: false,
                    render: function() {
                        return "<center>" +
                            "<span class='btnEliminarRegistro text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>";
                    }
                }
            ],
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            drawCallback: function() {
                ajustarHeadersDataTables($('#tbl_2_movimientos'));
            }
        });
    }

    function Cerrar_Mostrar_2(formattedDate_2) {
        if (!formattedDate_2) {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            var yyyy = today.getFullYear();

            formattedDate_2 = yyyy + '-' + mm + '-' + dd; // Formato 'YYYY-MM-DD'
        }
        
        if ($.fn.DataTable.isDataTable("#tbl_4_movimientos")) {
            $("#tbl_4_movimientos").DataTable().destroy();
        }

        table41 = $("#tbl_4_movimientos").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength'
            ],
            lengthMenu: [5, 10, 20, 30, 50, 100],
            pageLength: 30,
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: 'POST',
                data: {
                    'accion': 32,
                    'fecha_eleccion': formattedDate_2 // Parámetro para obtener las ventas del mes
                }
            },
            scrollX: true,
            columnDefs: [

                {
                    targets: [0, 1],
                    visible: false
                },
                {
                    targets: [2, 3, 5,6],
                    render: function (data, type, row, meta) {
                        var color = '';
                        var fontWeight = 'bold';

                        switch (data) {
                            case 'BCP':
                                color = 'blue';
                                break;
                            case 'BBVA':
                                color = 'turquoise';
                                break;
                            case 'INT':
                            case 'INTERBANK':
                                color = 'green';
                                break;
                            case 'RED':
                            case 'RED DIGITAL':
                                color = 'purple';
                                break;
                            case 'NACION':
                                color = 'red';
                                break;
                            case 'KASNET':
                                color = 'saddlebrown';
                                break;
                            default:
                                color = 'black'; // Color por defecto si no coincide con ninguna condición
                                break;
                        }

                        return '<h6><span style="color: ' + color + '; font-weight: ' + fontWeight + ';">' + data + '</span></h6>';
                    },
                    createdCell: function (td, cellData, rowData, row, col) {
                        $(td).css({
                            'text-align': 'center'
                        });
                    }
                },
                {
                    targets: [4, 7],
                    render: function(data, type, row) {
                        var value = parseFloat(data).toFixed(2);
                        var formattedValue = value < 0 ? '-S/ ' + Math.abs(value).toFixed(2) : 'S/ ' + value;
                        return '<h6 style="font-weight: bold;">' + formattedValue + '</h6>';
                    },
                    createdCell: function (td, cellData, rowData, row, col) {
                        var value = parseFloat(cellData);
                        var styles = {
                            'text-align': 'center',
                            'font-weight': 'bold'
                        };

                        if (value > 0) {
                            styles['color'] = 'green';
                        } else if (value < 0) {
                            styles['color'] = 'red';
                        } else {
                            styles['color'] = 'grey';
                        }

                        $(td).css(styles);
                    }
                }


            ],
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            drawCallback: function() {
                ajustarHeadersDataTables($('#tbl_4_movimientos'));
            }
        });
    }

    function CargarEfectivo(){
        var EFE2 = document.getElementById("totalEfectivo_nuevo1");
        var EFE2_2 = document.getElementById("totalEfectivo_nuevo2");
        var EFE2_3 = document.getElementById("totalEfectivo_nuevo3");
        var EFE2_4 = document.getElementById("totalEfectivo_nuevo4");
        $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 5, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){
                    var EFER = 0;

                    console.log("PARA VER EL EFECTIVO : ", respuesta);

                    for(i = 0; i<respuesta.length ; i++){
                        if(respuesta[i]["Agente"].includes("EFECTIVO")){
                            console.log("AGENTE EXAMINACION : ", respuesta[i]["Agente"] ," +  MONTO:  " , respuesta[i]["MontoActual"])

                            if(respuesta[i]["Cuenta"] == "AGENTE" || respuesta[i]["Cuenta"] == "Agente" || respuesta[i]["Cuenta"] == "EFECTIVO BILLETES" || respuesta[i]["Cuenta"] == "EFECTIVO MONEDAS"){

                            EFER =    EFER + parseFloat(respuesta[i]["MontoActual"]) ;

                        }

                        }
                    }



                    EFE2.textContent = EFER.toFixed(2);
                    EFE2_2.textContent = EFER.toFixed(2);
                    EFE2_3.textContent = EFER.toFixed(2);
                    EFE2_4.textContent = EFER.toFixed(2);

                }
            });


        var COM = document.getElementById("totalComision1");
        var COM_2 = document.getElementById("totalComision2");
        var COM_3 = document.getElementById("totalComision3");
        var COM_4 = document.getElementById("totalComision4");
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
                    COM_2.textContent = COMR.toFixed(2);
                    COM_3.textContent = COMR.toFixed(2);
                    COM_4.textContent = COMR.toFixed(2);

                }
            });

        var COMHOY = document.getElementById("totalComisionHoy1");
        var COMHOY_2 = document.getElementById("totalComisionHoy2");
        var COMHOY_3 = document.getElementById("totalComisionHoy3");
        var COMHOY_4 = document.getElementById("totalComisionHoy4");
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
                    COMHOY_2.textContent = COMR.toFixed(2);
                    COMHOY_3.textContent = COMR.toFixed(2);
                    COMHOY_4.textContent = COMR.toFixed(2);

                }
            });
    }

    function colocarDatosCeldasEspecificas3(datos) {

        var celdasEspecificas = [
            [0, 1],
            [1, 1],
            [2, 1],
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas, index) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = datos[index];

            // Colocar el contenido en la celda correspondiente
            if(contenido > 0){
                contenido = parseFloat(contenido).toFixed(2);
                $('#tblEdicionCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }else{
                $('#tblEdicionCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }

        });
    }

    function obtenerDatosCeldasEspecificas3() {
        var datos = [];
        var celdasEspecificas = [
            [0, 1],
            [1, 1],
            [2, 1],
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = $('#tblEdicionCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text();

            // Si el contenido es una cadena vacía o contiene solo espacios en blanco, cambiarlo a 0
            if (contenido.trim() === "" || contenido.trim() === " ") {
                contenido = "0";
            }

            datos.push(contenido);
        });

        return datos;
    }

    function colocarDatosCeldasEspecificas4(datos) {
        console.log(datos);
        var celdasEspecificas = [
            [0, 1],
            [1, 1],
            [2, 1],
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas, index) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = datos[index];

            // Colocar el contenido en la celda correspondiente
            if(contenido > 0){
                contenido = parseFloat(contenido).toFixed(2);
                $('#tblIngresarCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }else{
                $('#tblIngresarCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text(contenido);
            }

        });
    }

    function obtenerDatosCeldasEspecificas4() {
        var datos = [];
        var celdasEspecificas = [
            [0, 1],
            [1, 1],
            [2, 1],
        ];

        // Iterar sobre las celdas específicas
        celdasEspecificas.forEach(function(coordenadas) {
            var filaIndex = coordenadas[0];
            var colIndex = coordenadas[1];
            var contenido = $('#tblIngresarCuenta tbody tr').eq(filaIndex).find('td').eq(colIndex).text();

            // Si el contenido es una cadena vacía o contiene solo espacios en blanco, cambiarlo a 0
            if (contenido.trim() === "" || contenido.trim() === " ") {
                contenido = "0";
            }

            datos.push(contenido);
        });

        return datos;
    }

    function IngresarNuevoCuenta(Banco, Cuenta, Monto) {
        if (!Banco || !Cuenta || Monto <= 0) {
            Swal.fire({
                icon: 'error',
                title: 'Valores no válidos',
                text: 'Todos los campos deben estar completos y el monto debe ser mayor a cero.',
            });
            return;
        }

        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 29,
                'Agente': Banco,
                'Nombre': Cuenta,
                'Credito': Monto,
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log(respuesta);

                if (respuesta === "ok") {
                    Toast.fire({
                        icon: 'success',
                        title: "Registrado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("#mdlIngresarCuenta").modal("hide");
                    cargarTablero();
                } else if (respuesta === "duplicado") {
                    Toast.fire({
                        icon: 'error',
                        title: "Nombre Duplicado",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("#mdlIngresarCuenta").modal("hide");
                    cargarTablero();
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: "Error 404",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("#mdlIngresarCuenta").modal("hide");
                    cargarTablero();
                }
            }
        });
    }

    function EliminarCuenta(Agente,Nombre,id){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 30,
                'Agente': Agente,
                'Nombre': Nombre,
                'id': id,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta)

                if(respuesta === "ok"){
                    Swal.fire(
                        '¡Eliminado!',
                        'La cuenta ha sido eliminada.',
                        'success'
                    );
                    $("#mdlIngresarCuenta").modal("hide");
                    cargarTablero();
                }else{
                    Swal.fire(
                        'Error!',
                        'La cuenta no ha sido eliminada.',
                        'error'
                    );
                    cargarTablero();
                }

            }
        });
    }

    function ModificarCuenta(Banco, Cuenta, Monto, idAgente3, idCuenta3, Cuenta_id_3, monto3) {
        if (!Banco || !Cuenta || Monto < 0) {
            Swal.fire({
                icon: 'error',
                title: 'Valores no válidos',
                text: 'Todos los campos deben estar completos y el monto debe ser mayor a cero.',
            });
            return;
        }

        var diferencia = parseFloat(Monto) - parseFloat(monto3);
        console.log(diferencia);

        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            method: "POST",
            data: {
                'accion': 31,
                'Agente': Banco,
                'Nombre': Cuenta,
                'Credito': Monto,
                'id': Cuenta_id_3,
                'diferencia': diferencia,
                'banco_antes': idAgente3,
                'cuenta_antes': idCuenta3,
                'monto_antes': monto3,
                'Usuario': Usuario,
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log(respuesta);

                if (respuesta === "ok") {
                    Toast.fire({
                        icon: 'success',
                        title: "Registrado Correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("#mdlIngresarCuenta").modal("hide");
                    cargarTablero();
                } else if (respuesta === "duplicado") {
                    Toast.fire({
                        icon: 'error',
                        title: "Nombre Duplicado",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    cargarTablero();
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: "Error 404",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    cargarTablero();
                }
            }
        });
    }

    function CargarModales(){

        $('#mdlNuevoMovimiento_2_BCP').on('shown.bs.modal', function () {
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

        $('#mdlNuevoMovimiento_2_NACION').on('shown.bs.modal', function () {
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

        $('#mdlNuevoMovimiento_2_BBVA').on('shown.bs.modal', function () {
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

        $('#mdlNuevoMovimiento_2_KASNET').on('shown.bs.modal', function () {
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

        $('#mdlNuevoMovimiento_2_INT').on('shown.bs.modal', function () {
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

        $('#mdlNuevoMovimiento_2_RED').on('shown.bs.modal', function () {
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

    }

    function CargarBotonesModal(){

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
            $('#mdlNuevoMovimiento_2_BCP').modal('hide');
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
            $('#mdlNuevoMovimiento_2_NACION').modal('hide');
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
            $('#mdlNuevoMovimiento_2_BBVA').modal('hide');
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
            $('#mdlNuevoMovimiento_2_KASNET').modal('hide');
        });


        var btnINT= document.getElementById("btnGuardarProductoINT");

        btnINT.addEventListener("click", function() {

            var tipo = document.getElementById("selMovimientoINT").value;
            var cuenta = document.getElementById("selCuentaINT").value;
            var monto = document.getElementById("iptMontoTotalINT").value;
            var comision = document.getElementById("iptComisionINT").value;
            var nombre = document.getElementById("iptNombreINT").value;
            var codigo = document.getElementById("iptCodigoINT").value;
            var Agente = "INTERBANK";

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
            $('#mdlNuevoMovimiento_2_INT').modal('hide');
        });

        var btnRED= document.getElementById("btnGuardarProductoRED");

        btnRED.addEventListener("click", function() {

            var tipo = document.getElementById("selMovimientoRED").value;
            var cuenta = document.getElementById("selCuentaRED").value;
            var monto = document.getElementById("iptMontoTotalRED").value;
            var comision = document.getElementById("iptComisionRED").value;
            var nombre = document.getElementById("iptNombreRED").value;
            var codigo = document.getElementById("iptCodigoRED").value;
            var Agente = "RED DIGITAL";


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
            $('#mdlNuevoMovimiento_2_RED').modal('hide');


        });

    }

    function RegistrarMovimiento(tipo,monto, comision,Agente,nombre,cuenta,codigo,saldoCuenta){

        var usuario = '<?php echo $nombreCompleto; ?>';
        var efe = document.getElementById("totalEfectivo_nuevo2").textContent;
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
                                    timer: 1500
                                })

                            } else if (respuesta = "ok"){

                                Swal.fire({
                                    position:'center',
                                    icon:'success',
                                    title: 'Movimiento Registrado Correctamente',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                cargarTablero();
                                
                            }


                        }
                    });
        }

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
                        } else if (["INT", "INTERBANK", "Interbank"].includes(agente)) {
                            selectCuentaINT.insertBefore(option, selectCuentaINT.firstChild);
                        } else if (agente == "KASNET") {
                            selectCuentaKASNET.insertBefore(option, selectCuentaKASNET.firstChild);
                        } else if (agente == "NACION") {
                            selectCuentaNACION.insertBefore(option, selectCuentaNACION.firstChild);
                        } else if (["RED", "RED DIGITAL", "REDDIGITAL"].includes(agente)) {
                            selectCuentaRED.insertBefore(option, selectCuentaRED.firstChild);
                        }
                    } else {
                        // Si no es "Principal", añadirlo como las otras opciones
                        if (agente == "BCP") {
                            selectCuentaBCP.appendChild(option);
                        } else if (agente == "BBVA") {
                            selectCuentaBBVA.appendChild(option);
                        } else if (["INT", "INTERBANK", "Interbank"].includes(agente)) {
                            selectCuentaINT.appendChild(option);
                        } else if (agente == "KASNET") {
                            selectCuentaKASNET.appendChild(option);
                        } else if (agente == "NACION") {
                            selectCuentaNACION.appendChild(option);
                        } else if (["RED", "RED DIGITAL", "REDDIGITAL"].includes(agente)) {
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

    function cargarTablero(){
        // Recargar la tabla mediante AJAX
        CargarEfectivo();
        CargarCuentas2();
        cargarOpciones();
        table11.ajax.reload();
        table13.ajax.reload();
        table14.ajax.reload(); // Esta función recargará los datos vía AJAX
        table21.ajax.reload();
        table31.ajax.reload();
        table41.ajax.reload();
        Cerrar_Mostrar(formattedDate)
        
    }



</script>