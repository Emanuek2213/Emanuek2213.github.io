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
                 <h1 class="m-0">Configuración del Sistema</h1>
                 <?php echo '<h6>Bienvenido, ' . $nombreCompleto . '!</h6>';?>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Configuración del Sistema </li>
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

            <!-- <li class="nav-item">
                <a class="nav-link active" id="content-cuentas-tab" data-toggle="pill" href="#content-cuentas" role="tab" aria-controls="content-cuentas" aria-selected="false">Administrar Cuentas</a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link active" id="content-usuarios-edit-tab" data-toggle="pill" href="#content-usuarios-edit" role="tab" aria-controls="content-usuarios-edit" aria-selected="false">Administrar usuarios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-clientes-edit-tab" data-toggle="pill" href="#content-clientes-edit" role="tab" aria-controls="content-clientes-edit" aria-selected="false">Administriar Clientes</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade mt-4 px-4" id="content-cuentas" role="tabpanel" aria-labelledby="content-cuentas-tab">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card card-gray" style="border: 1px solid black;">
                            <div class="card-header">
                                <h3 class="card-title">CAMBIAR CREDITO INICIAL</h3>
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
                                                
                                                <select class="form-select form-select-sm"
                                                id="selCuenta"  data-index="5" required >
                                                    <option value="BCPPrincipal">BCP - Principal : .s/ 1000</span></option>
                                                    <option value="NACIONPrincipal">NACION - Principal : .s/ 1000</span></option>
                                                    <option value="NACIONJohana">NACION - Johana  : .s/ 1000</span></option>
                                                    <option value="NACIONJonatan">NACION - Jonatan : .s/ 1000</span></option>
                                                    <option value="NACIONYvan">NACION - Yvan    : .s/ 1000</span></option>
                                                    <option value="NACIONRuben">NACION - Ruben   : .s/ 1000</span></option>
                                                    <option value="NACIONKaren">NACION - Karen   : .s/ 1000</span></option>
                                                    <option value="BBVAPrincipal">BBVA - Principal : .s/ 1000</span></option>
                                                    <option value="BBVAJohana">BBVA - Johana  : .s/ 1000</span></option>
                                                    <option value="KASNETPrincipal">KASNET - Principal : .s/ 1000</span></option>
                                                    <option value="KASNETJohana">KASNET - Johana  : .s/ 1000</span></option>
                                                    <option value="KASNETJonatan">KASNET - Jonatan : .s/ 1000</span></option>
                                                    <option value="INTPrincipal">INT - Principal : .s/ 1000</span></option>
                                                    <option value="INTJohana">INT - Johana  : .s/ 1000</span></option>
                                                    <option value="REDPrincipal">RED - Principal : .s/ 1000</span></option>
                                                    <option value="EFECTIVOAgente">EFE - Agente : .s/ 1000</span></option>
                                                    <option value="EFECTIVOPrincipal">EFE - Principal : .s/ 1000</span></option>
                                                    
                                                </select>
                                                <label for="selCuenta">Cuenta</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="number" id="iptMonto" class="form-control">
                                                <label for="iptMonto">Monto Principal</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoNuevo" class="form-control">
                                                <label for="iptMontoNuevo">Nuevo Monto Principal</label>
                                            </div>

                                            <div class="col-lg-3">
                                                <!-- small box -->
                                                <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnCambiar" tabindex="0">
                                                    <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                        <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">REGISTRAR</span></h4>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="d-block d-sm-none">

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                
                                                <select class="form-select form-select-sm"
                                                id="selCuenta"  data-index="5" required >
                                                    <option value="BCP-Principal">BCP - Principal : .s/ 1000</span></option>
                                                    <option value="NACION-Principal">NACION - Principal : .s/ 1000</span></option>
                                                    <option value="NACION-Johana">NACION - Johana  : .s/ 1000</span></option>
                                                    <option value="NACION-Jonatan">NACION - Jonatan : .s/ 1000</span></option>
                                                    <option value="NACION-Yvan">NACION - Yvan    : .s/ 1000</span></option>
                                                    <option value="NACION-Ruben">NACION - Ruben   : .s/ 1000</span></option>
                                                    <option value="NACION-Karen">NACION - Karen   : .s/ 1000</span></option>
                                                    <option value="BBVA-Principal">BBVA - Principal : .s/ 1000</span></option>
                                                    <option value="BBVA-Johana">BBVA - Johana  : .s/ 1000</span></option>
                                                    <option value="KASNET-Principal">KASNET - Principal : .s/ 1000</span></option>
                                                    <option value="KASNET-Johana">KASNET - Johana  : .s/ 1000</span></option>
                                                    <option value="KASNET-Jonatan">KASNET - Jonatan : .s/ 1000</span></option>
                                                    <option value="INT-Principal">INT - Principal : .s/ 1000</span></option>
                                                    <option value="INT-Johana">INT - Johana  : .s/ 1000</span></option>
                                                    <option value="RED-Principal">RED - Principal : .s/ 1000</span></option>
                                                    <option value="EFECTIVO-Agente">EFE - Agente : .s/ 1000</span></option>
                                                    <option value="EFECTIVO-Principal">EFE - Principal : .s/ 1000</span></option>
                                                </select>
                                                <label for="selCuenta">Donador</label>
                                            </div>

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="number" id="iptMonto" class="form-control" >
                                                <label for="iptMonto">Monto</label>
                                            </div>
                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoNuevo" class="form-control" >
                                                <label for="iptMontoNuevo">Nuevo Monto</label>
                                            </div>
                                            
                                            
                                            
                                    </div>

                                    

                                </div>
                            </div> <!-- ./ end card-body -->
                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-12">

                        <div class="card card-gray" style="border: 1px solid black;">
                            <div class="card-header">
                                <h3 class="card-title">CAMBIAR CREDITO TOTAL</h3>
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
                                                
                                                <select class="form-select form-select-sm"
                                                id="selCuentaTotal"  data-index="5" required >
                                                
                                                    
                                                </select>
                                                <label for="selCuentaTotal">Cuenta</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoActual" class="form-control">
                                                <label for="iptMontoActual">Monto actual</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoNuevoActual" class="form-control">
                                                <label for="iptMontoNuevoActual">Nuevo Monto</label>
                                            </div>

                                            <div class="col-lg-3">
                                                <!-- small box -->
                                                <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnCambiarTotal" tabindex="0">
                                                    <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                        <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">REGISTRAR</span></h4>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="d-block d-sm-none">

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                
                                                <select class="form-select form-select-sm"
                                                id="selCuentaTotal"  data-index="5" required >
                                                    
                                                </select>
                                                <label for="selCuentaTotal">Donador</label>
                                            </div>

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoActual" class="form-control" >
                                                <label for="iptMontoActual">Monto</label>
                                            </div>
                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoNuevoActual" class="form-control" >
                                                <label for="iptMontoNuevoActual">Nuevo Monto</label>
                                            </div>
                                            
                                            
                                            
                                    </div>

                                    

                                </div>
                            </div> <!-- ./ end card-body -->
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="card card-gray" style="border: 1px solid black;">
                            <div class="card-header">
                                <h3 class="card-title">CREAR NUEVA CUENTA AGENTE</h3>
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
                                                
                                                <select class="form-select form-select-sm"
                                                id="selAgente"  data-index="5" required >
                                                
                                                    
                                                </select>
                                                <label for="selAgente">Agente</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="text" id="iptNombreCuenta" class="form-control">
                                                <label for="iptNombreCuenta">Nombre de la Cuenta</label>
                                            </div>

                                            <div style="width: 25%;" class="form-floating mx-1">
                                                <input type="number" id="iptMontoNuevoInicial" class="form-control">
                                                <label for="iptMontoNuevoInicial">Nuevo Monto</label>
                                            </div>

                                            <div class="col-lg-3">
                                                <!-- small box -->
                                                <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnRegistrarNuevaCuenta" tabindex="0">
                                                    <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                        <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">REGISTRAR</span></h4>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>

                                </div>
                            </div> <!-- ./ end card-body -->
                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade active show mt-4 px-4" id="content-usuarios-edit" role="tabpanel" aria-labelledby="content-usuarios-edit-tab">

                <div class="card card-gray" style="border: 1px solid black;">
                            <div class="card-header">
                                <h3 class="card-title">CAMBIAR DATOS DE USUARIO</h3>
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

                                <div class = "row">
                                    
                                    <div class = "col-lg-9"> 

                                        
                                    </div>

                                    <div class = "col-lg-4">

                                        <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                            <div class="card-body p-3">

                                                <form method="post" class="needs-validation-registro-modulo" novalidate id="frm_registro_modulo">

                                                    <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->

                                                            <div class="form-group mb-2">
                                                                
                                                                <label  class="col-form-label" for="iptNuevoUsuario">
                                                                    <i class="fas fa-dumpster fs-6"></i>
                                                                    <span class="small">Nombre de usuario</span><span class="text-danger">*</span>
                                                                </label>
                                                                
                                                                <div class= "input-group mb-3">

                                                                    <input type="text" class="form-control" id="iptNuevoUsuario"
                                                                        name="iptNuevoUsuario" placeholder="Ingrese la Categoría" required>

                                                                    <div class = "input-group-append">
                                                                        
                                                                        <div class = "input-group-text">
                                                                        
                                                                            <span class = "fas fa-user"></span>
                                                                        
                                                                        </div>

                                                                    </div>
                                                                    
                                                                    <div class="invalid-feedback">Ingrese un usuario</div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->

                                                            <div class="form-group mb-2">
                                                                
                                                                <label  class="col-form-label" for="iptNombreUsuario">
                                                                    <i class="fas fa-dumpster fs-6"></i>
                                                                    <span class="small">Nombre</span><span class="text-danger">*</span>
                                                                </label>
                                                                
                                                                <div class= "input-group mb-3">

                                                                    <input type="text" class="form-control" id="iptNombreUsuario"
                                                                        name="iptNombreUsuario" placeholder="Ingrese la Categoría" required>

                                                                    <div class = "input-group-append">
                                                                        
                                                                        <div class = "input-group-text">
                                                                        
                                                                            <span class = "fas fa-user"></span>
                                                                        
                                                                        </div>

                                                                    </div>
                                                                    
                                                                    <div class="invalid-feedback">Ingrese un usuario</div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->

                                                            <div class="form-group mb-2">
                                                                
                                                                <label  class="col-form-label" for="iptApellidoUsuario">
                                                                    <i class="fas fa-dumpster fs-6"></i>
                                                                    <span class="small">Apellido</span><span class="text-danger">*</span>
                                                                </label>
                                                                
                                                                <div class= "input-group mb-3">

                                                                    <input type="text" class="form-control" id="iptApellidoUsuario"
                                                                        name="iptApellidoUsuario" placeholder="Ingrese la Categoría" required>

                                                                    <div class = "input-group-append">
                                                                        
                                                                        <div class = "input-group-text">
                                                                        
                                                                            <span class = "fas fa-user"></span>
                                                                        
                                                                        </div>

                                                                    </div>
                                                                    
                                                                    <div class="invalid-feedback">Ingrese un usuario</div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label class="col-form-label" for="passwordInput">
                                                                <i class="fas fa-dumpster fs-6"></i>
                                                                <span class="small" id = "txtTituloContraseña" >Nueva Contraseña</span><span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="password" placeholder="Contraseña" name="txtPassword" id="passwordInput" required>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text" onclick="togglePasswordVisibility()">
                                                                        <span class="fas fa-lock" id="togglePassword"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="invalid-feedback">Debe ingresar su contraseña.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label class="col-form-label" for="passwordInput2">
                                                                <i class="fas fa-dumpster fs-6"></i>
                                                                <span class="small" id = "txtTituloContraseña2">Confirmar Contraseña</span><span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control" type="password" placeholder="Contraseña" name="txtPassword" id="passwordInput2" required>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text" onclick="togglePasswordVisibility2()">
                                                                        <span class="fas fa-lock" id="togglePassword2"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="invalid-feedback">Debe ingresar su contraseña.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA CARGO DEL USUARIO -->

                                                        <div class="form-group mb-2">

                                                            <label  class="col-form-label" for="selCargo">
                                                                <i class="fas fa-file-alt fs-6"></i>
                                                                <span class="small">Cargo del usuario</span><span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selCargo" required>
                                                                    <option value="">--Seleccione el cargo--</option>
                                                                    <option value="1">Administrador</option>
                                                                    <option value="2">Vendedor</option>
                                                                    <option value="3">Vendedor Rapido</option>
                                                                </select>
                                                            
                                                                <div class="invalid-feedback">Seleccione una medida</div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group m-0 mt-2">
                                                            <a style="cursor:pointer;"
                                                                class="btn btn-success btn-sm w-100"
                                                                id="btnRegistrarCategoria">Crear nuevo usuario
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 

                                        </div>

                                    </div>

                                    <!--LISTADO DE MODULOS -->
                                    <div class="col-md-8">
                                        <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                            <div class="card-body p-3">
                                                <div class="card card-gray shadow" >

                                                    <div class="card-header">

                                                        <h3 class="card-title"><i class="fas fa-list"></i> Listado de Módulos</h3>

                                                    </div>

                                                    <div class="card-body">

                                                        <table id="tblUsuarios" class="display nowrap table-striped shadow rounded" style="width:100%">

                                                            <thead class="bg-gray text-left">
                                                                <th class="text-center">Acciones</th>
                                                                <th class="text-center">id</th>
                                                                <th class="text-center">Nombre</th>
                                                                <th class="text-center">Apellidos</th>
                                                                <th class="text-center">Usuario</th>
                                                                <th class="text-center">Contraseña</th>
                                                                <th class="text-center">Perfil</th>
                                                            </thead>
                                                            <tbody class="small text left">

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

            <div class="tab-pane fade mt-4 px-4" id="content-clientes-edit" role="tabpanel" aria-labelledby="content-clientes-edit-tab">

                <div class="card card-gray" style="border: 1px solid black;">
                    <div class="card-header">
                        <h3 class="card-title">CAMBIAR DATOS DE LOS CLIENTES</h3>
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
                        <div class = "row">
                            
                            <div class = "col-lg-9"> 

                                
                            </div>

                            <div class = "col-lg-4">

                                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                    <div class="card-body p-3">

                                        <form method="post" class="needs-validation-registro-clientes" novalidate id="frm_registro_clientes">


                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptNombreCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Nombre</span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptNombreCliente"
                                                                name="iptNombreCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback">Ingrese un Nombre</div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL APELLIDO DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptApellidoCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Razon Social</span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptApellidoCliente"
                                                                name="iptApellidoCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback"></div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL DNI O RUC DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptIdentCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">DNI  o RUC </span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptIdentCliente"
                                                                name="iptIdentCliente" placeholder="Ingrese la Categoría" required readonly>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback"></div>

                                                        </div>

                                                    </div>

                                            </div>


                                            <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA LA DIRECCION DEL Cliente -->

                                                    <div class="form-group mb-2">
                                                        
                                                        <label  class="col-form-label" for="iptDireccionCliente">
                                                            <i class="fas fa-dumpster fs-6"></i>
                                                            <span class="small">Direccion </span><span class="text-danger">*</span>
                                                        </label>
                                                        
                                                        <div class= "input-group mb-3">

                                                            <input type="text" class="form-control" id="iptDireccionCliente"
                                                                name="iptDireccionCliente" placeholder="Ingrese la Categoría" required>

                                                            <div class = "input-group-append">
                                                                
                                                                <div class = "input-group-text">
                                                                
                                                                    <span class = "fas fa-user"></span>
                                                                
                                                                </div>

                                                            </div>
                                                            
                                                            <div class="invalid-feedback"></div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <!-- Columna para registro del tipo de movimiento, tranferencia o deposito-->
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <label class="" for="selTipoCliente"><i class="fas fa-dumpster fs-6"></i>
                                                        <span class="small">Tipo</span><span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                    id="selTipoCliente" required>
                                                        <option value="0">Cliente</option>
                                                        <option value="1">Proveedor</option>
                                                        
                                                    </select>
                                                    <div class="invalid-feedback">Seleccione el tipo de movimiento</div>
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-12">
                                                <div class="form-group m-0 mt-2">
                                                    <a style="cursor:pointer;"
                                                        class="btn btn-success btn-sm w-100"
                                                        id="btnRegistrarCliente">Ingresar Nuevo Cliente
                                                    </a>

                                                    <a style="cursor:pointer;"
                                                        class="btn btn-primary btn-sm w-100"
                                                        id="btnVerify">Verificar en SUNAT
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 

                                </div>

                            </div>
                            
                            <!--LISTADO DE Clientes -->
                            <div class="col-md-8">
                                <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                    <div class="card-body p-3">
                                        <div class="card card-gray shadow" >

                                            <div class="card-header">

                                                <h3 class="card-title"><i class="fas fa-list"></i> Listado de Módulos</h3>

                                            </div>

                                            <div class="card-body">

                                                <div class="col-md-12 mb-3 rounded-3 text-right">

                                                    <button class="btn btn-danger" id="btnEliminarCliente">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    
                                                </div>

                                                <table id="tblClientes" class="display nowrap table-striped shadow rounded" style="width:100%">

                                                    <thead class="bg-gray text-left">
                                                        <th class="text-center">Acciones</th>
                                                        <th class="text-center">id</th>
                                                        <th class="text-center">DNI o RUC</th>
                                                        <th class="text-center">Nombre</th>
                                                        <th class="text-center">Apellidos</th>
                                                        <th class="text-center">Direccion</th>
                                                        <th class="text-center">Imagen</th>
                                                        
                                                    </thead>
                                                    <tbody class="small text left">

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

        </div>

     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

 <!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlVerFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Foto de cliente</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">
    
                <form class="needs-validation" novalidate >
                    <!-- Abrimos una fila -->
                    <div class="row">

                        

                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="iptImagen"><i class = "fas fa-image fs-6"></i><span class = "small">Seleccione una imagen</span></label>
                                <input type="file"
                                        class = "form-control form-control-sm"
                                        id = "iptImagen"
                                        name = "iptImagen"
                                        accept = "image/*"
                                        onchange = "previewFile(this)">
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 my-1">
                            <div style="width: 100%; height : 280px;">
                                <img id = "previewImg" src="vistas/assets/imagenes/no_image.jpg" 
                                class = "border border-secondary" 
                                style = "object-fit: cover; width:100%; height:100%;" alt="">
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- creacion de botones para cancelar y guardar el producto -->
                            <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                                data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                            <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                                id="btnGuardarProducto">Guardar Producto</button>
                            <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->
                        </div>
                    </div>
                </form>
            
            </div>

        </div>
    </div>


</div>

 <script> var encendido = 20;
     var idUsuario;
     var idCliente = 0;
     var cuentas = [];
     var cuentas2 = [];
     var codigo;

     var bloquear1;
     var bloquear2;

     var isActionInProgress = false;
     var isActionInProgress2 = false;

     var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

     

     document.getElementById('iptNombreCliente').addEventListener('input', function(event) {
        var inputValue = event.target.value;
        event.target.value = inputValue.toUpperCase();
    });
    document.getElementById('iptApellidoCliente').addEventListener('input', function(event) {
        var inputValue = event.target.value;
        event.target.value = inputValue.toUpperCase();
    });
    document.getElementById('iptDireccionCliente').addEventListener('input', function(event) {
        var inputValue = event.target.value;
        event.target.value = inputValue.toUpperCase();
    });

    $(document).ready(function() {
        $("#iptIdentCliente").prop("readonly", false);

        idUsuario = 0;
        cargarMatrizCuentas();
        cargarOpciones();
        cargarOpciones2();
        CargarDataTable();
        bloquearDesbloquearMonto(true);
        
    

        document.getElementById('selCuenta').focus();

        // Maneja la navegación con la tecla "Enter"
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                // Obtiene el elemento actual con el foco
                var currentElement = document.activeElement;

                // Obtiene una lista de elementos a navegar
                var elementsToNavigate = [
                    document.getElementById('selCuenta'),
                    
                    document.getElementById('iptMontoNuevo'),
                    document.getElementById('btnCambiar')
                ];

                // Encuentra el índice del elemento actual en la lista
                var currentIndex = elementsToNavigate.indexOf(currentElement);

                // Avanza al siguiente elemento
                var nextIndex = currentIndex + 1;
                if (nextIndex < elementsToNavigate.length) {
                    elementsToNavigate[nextIndex].focus();
                }
            }
        });

        document.getElementById('btnCambiar').addEventListener('keydown', function(e) {
            if (e.key === ' ' || e.key === 'Spacebar') {
                e.preventDefault();
                // Realizar la acción deseada cuando se presiona la barra espaciadora
                // Por ejemplo, simular un clic en el botón
                document.getElementById('btnCambiar').click();
            }
        });
        

        CargarCuentas();
        //CargarCuentas2();

        //establecerValorMonto();
        //establecerValorMonto2();

        document.getElementById("selCuenta").addEventListener("change", function () {
            establecerValorMonto();
        });

        document.getElementById("selCuentaTotal").addEventListener("change", function () {
            establecerValorMonto2()
        });
        
        var btnCambiar= document.getElementById("btnCambiar");

        btnCambiar.addEventListener("click", function() {
            var cuenta = document.getElementById("selCuenta").value;
            var monto = document.getElementById("iptMontoNuevo").value;

            var palabras = cuenta.split(/[\s:-]+/);
            var agente = palabras[0];
            var cuenta = palabras[1];

            if(monto == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else if(parseFloat(monto) <= 0 ){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else{


                if (agente.length >= 2 && cuenta.length >= 2) {

                    var Montof = parseFloat(monto);
                    var credito = Montof.toFixed(2);
                    
                    CambiarCredito(credito,agente,cuenta)

                    
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'No se pudo cambiar el credito inicial'
                    });
                }
                
                document.getElementById("selCuenta").value = "BCPPrincipal";
                document.getElementById("iptMontoNuevo").value = "";
            }
        });

        var btnCambiarTotal= document.getElementById("btnCambiarTotal");

        btnCambiarTotal.addEventListener("click", function() {
            var cuenta = document.getElementById("selCuentaTotal").value;
            var monto = document.getElementById("iptMontoNuevoActual").value;
            var monto_actual = document.getElementById("iptMontoActual").value;

            console.log(monto_actual);

            var palabras = cuenta.split(/[\s:-]+/);
            var agente = palabras[0];
            var cuenta = palabras[1];

            if(monto == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else if(parseFloat(monto) <= 0 ){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else{


                if (agente.length >= 2 && cuenta.length >= 2) {

                    var Montof = parseFloat(monto);
                    var credito = Montof.toFixed(2);

                    if(monto_actual === "0.00"){
                        var MontoActualf = 0;
                    }else{
                        var MontoActualf = parseFloat(monto_actual);
                    }
                    
                    var creditoActual = MontoActualf.toFixed(2);
                    
                    CambiarCredito2(credito,agente,cuenta,creditoActual);

                    
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'No se pudo cambiar el credito inicial'
                    });
                }
                
                document.getElementById("selCuentaTotal").value = "BBVAPrincipal";
                document.getElementById("iptMontoNuevoActual").value = "";
                
            }
        });

        var btnRegistrarNuevaCuenta= document.getElementById("btnRegistrarNuevaCuenta");

        btnRegistrarNuevaCuenta.addEventListener("click", function() {
            var Agente = document.getElementById("selAgente").value;
            var Cuenta = document.getElementById("iptNombreCuenta").value;
            var Monto = document.getElementById("iptMontoNuevoInicial").value;

            console.log(Agente,Cuenta,Monto);

            $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 14,
                    'agente': Agente,
                    'cuenta': Cuenta,
                    'monto': Monto, //parametro para obtener las ventas del mes
                },
                dataType:'json',
                success:function(respuesta){
                    if(respuesta === "ok"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Registrado correctamente'
                        });
                        cargarMatrizCuentas();
                        cargarOpciones();
                        CargarCuentas();
                        establecerValorMonto2();
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'No se pudo agregar correctamente'
                        });
                    }
                }
            })
        });

        document.getElementById('btnVerify').addEventListener('click', function() {
            var identificacion = document.getElementById('iptIdentCliente').value.trim();
            
            if (!identificacion) {
                alert("Por favor ingrese un DNI o RUC.");
                return;
            }
            
            if (identificacion.length != 11 && identificacion.length != 8) {
                alert("El número ingresado no es válido. Debe tener 8 dígitos (DNI) o 11 dígitos (RUC).");
                return;
            }else if(identificacion.length === 11){
                $.ajax({
                    url: "ajax/consulta_ruc.ajax.php",
                    type: 'POST',
                    data: {
                        'ruc': identificacion,
                    },
                    dataType:'json',
                    success:function(respuesta){
                        if(respuesta == 1){
                            $("#iptNombreCliente").val("")
                            Toast.fire({
                                icon: 'error',
                                title: "EL RUC NO ES RECONCIBLE VERIFIQUE CORRECTAMENTE",
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }else if(respuesta["message"] === "ruc no valido"){
                            
                            console.log(respuesta["message"]);
                            $("#iptNombreCliente").val("")
                            Toast.fire({
                                icon: 'error',
                                title: respuesta["message"],
                                showConfirmButton: false,
                                timer: 1500
                            })
                            
                        }else{
                            console.log(respuesta["razonSocial"]);
                            
                            var nombre_completo = respuesta["razonSocial"];

                            $("#iptNombreCliente").val(nombre_completo)

                            Toast.fire({
                                icon: 'success',
                                title: "RUC encontrado exitosamente",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    }
                })
            }else if(identificacion.length === 8){
                $.ajax({
                    url: "ajax/consulta_dni.ajax.php",
                    type: 'POST',
                    data: {
                        'dni': identificacion,
                    },
                    dataType:'json',
                    success:function(respuesta){
                        if(respuesta == 1){
                            $("#iptNombreCliente").val("")
                            Toast.fire({
                                icon: 'error',
                                title: "EL DNI NO ES RECONCIBLE VERIFIQUE CORRECTAMENTE",
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }else if(respuesta["message"] === "dni no valido"){
                            
                            console.log(respuesta["message"]);
                            $("#iptNombreCliente").val("")
                            Toast.fire({
                                icon: 'error',
                                title: respuesta["message"],
                                showConfirmButton: false,
                                timer: 1500
                            })
                            
                        }else{
                            console.log(respuesta["nombres"] + ", "+ respuesta["apellidoMaterno"] + " " + respuesta["apellidoPaterno"]);
                            
                            var nombre_completo = respuesta["nombres"] + ", "+ respuesta["apellidoMaterno"] + " " + respuesta["apellidoPaterno"];

                            $("#iptNombreCliente").val(nombre_completo)

                            Toast.fire({
                                icon: 'success',
                                title: "DNI encontrado exitosamente",
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }
                    }
                })
            }            
        });

    })

    $(document).on('keydown', function(event) {

            bloquear1 = 1;
            bloquear2 = 1;

            if (!$(event.target).closest('#tblUsuarios').length) {
                //console.log('No estoy en esta tabla');
                bloquear1 = 0;

            }

            if (!$(event.target).closest('#tblClientes').length) {
                //console.log('No estoy en esta tabla 2');
                bloquear2 = 0;

            }

            if (event.keyCode === 40 && $('#content-usuarios-edit:visible').length > 0 && bloquear1 == 0) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#tblUsuarios tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#tblUsuarios tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-usuarios-edit:visible').length > 0 && bloquear1 == 0) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#tblUsuarios tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#tblUsuarios tbody tr:last').addClass('selected');
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

            if (event.keyCode === 40 && $('#content-clientes-edit:visible').length > 0 && bloquear2 == 0) {
                event.preventDefault(); // Prevent the default behavior of the Down arrow key

                // Check if the action is not already in progress
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;

                    // Get the currently selected row (if any)
                    var $selectedRow = $('#tblClientes tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // If no row is selected, select the first row
                        $('#tblClientes tbody tr:first').addClass('selected');
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

            if (event.keyCode === 38 && $('#content-clientes-edit:visible').length > 0 && bloquear2 == 0) {
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Arriba
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada (si hay alguna)
                    var $selectedRow = $('#tblClientes tbody tr.selected');

                    if ($selectedRow.length === 0) {
                        // Si no hay ninguna fila seleccionada, seleccionar la última fila
                        $('#tblClientes tbody tr:last').addClass('selected');
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

            if (event.keyCode === 13 && $('#content-usuarios-edit:visible').length > 0 && bloquear1 == 0) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#tblUsuarios tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tblUsuarios.row($selectedRow).data();
                        $('#tblUsuarios tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        $(this).parents('tr').addClass('selected');
                        var tituloContraseña = document.getElementById("txtTituloContraseña");
                        tituloContraseña.textContent = "Contraseña Actual";
                        var tituloContraseña = document.getElementById("txtTituloContraseña2");
                        tituloContraseña.textContent = "Nueva Contraseña (si no quiere cambiar colocar la misma contraseña)";
                        //console.log(data);

                        idUsuario = data[1];

                        $("#card-modulos").css("display","block");

                        console.log("id Perfil: " +idUsuario);

                        $.ajax({
                            async:false,
                            url:"ajax/perfil.ajax.php",
                            method: 'POST',
                            data: {
                                accion: 3,
                                idUsuario: idUsuario
                            },
                            dataType: 'json',
                            success: function (respuesta){
                                console.log(respuesta[0][4] , " -- " , respuesta[0][6]);

                                $("#iptNuevoUsuario").val(respuesta[0][4]);
                                $("#iptNombreUsuario").val(respuesta[0][2]);
                                $("#iptApellidoUsuario").val(respuesta[0][3]);
                                $("#selCargo").val(respuesta[0][6])
                                //modulos_usuario = respuesta;

                                //seleccionarModulosPerfil(idUsuario);
                            }
                        })
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }

            if (event.keyCode === 13 && $('#content-clientes-edit:visible').length > 0 && bloquear2 == 0) { // Tecla Enter
                event.preventDefault(); // Evitar el comportamiento predeterminado de la tecla Enter
                if (!isActionInProgress) {
                    // Set the flag to indicate that the action is now in progress
                    isActionInProgress = true;
                    // Obtener la fila actualmente seleccionada
                    var $selectedRow = $('#tblClientes tbody tr.selected');

                    if ($selectedRow.length > 0) {
                        
                        // Si hay una fila seleccionada, obtener los datos de la fila
                        var data = tblClientes.row($selectedRow).data();
                        $('#tblClientes tbody tr').removeClass('selected');
                        $selectedRow.addClass('selected');

                        $(this).parents('tr').addClass('selected');
            
                        idCliente = data[1];
                        IdentCliente = data[2];

                        $("#card-modulos").css("display","block");

                        console.log("id Cliente: " +idCliente);

                        $.ajax({
                            async:false,
                            url:"ajax/clientes.ajax.php",
                            method: 'POST',
                            data: {
                                accion: 3,
                                idCliente: idCliente
                            },
                            dataType: 'json',
                            success: function (respuesta){
                                console.log(respuesta[0]);

                                //$("#iptIdentCliente").prop("readonly", true);
                                $("#iptNombreCliente").val(respuesta[0][1]);
                                $("#iptApellidoCliente").val(respuesta[0][2]);
                                $("#iptIdentCliente").val(respuesta[0][0]);
                                $("#iptDireccionCliente").val(respuesta[0][3]);

                                var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

                                // Cambiar el texto del botón
                                btnRegistrarCliente.textContent = 'Cambiar Datos del Cliente';

                                //modulos_usuario = respuesta;

                                //seleccionarModulosPerfil(idUsuario);
                            }
                        })
                    }
                    setTimeout(function () {
                        isActionInProgress = false;
                    }, 100); // Adjust the delay as needed
                }
                
            }
            
        });



</script>
<script>
    var tblUsuarios;
    
    /*===================================================================*/
    //FUNCION QUE PERMITE PREVISUALIZAR LA IMAGEN
    /*===================================================================*/

    function previewFile(input){
        var file= $("input[type=file]").get(0).files[0];

        if (file){
            var reader = new FileReader();

            reader.onload = function(){
                $("#previewImg").attr("src",reader.result);
            }

            reader.readAsDataURL(file);
        }
    }
    
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("passwordInput");
        var toggleIcon = document.getElementById("togglePassword");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-lock");
            toggleIcon.classList.add("fa-unlock-alt");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-unlock-alt");
            toggleIcon.classList.add("fa-lock");
        }
    }

    function togglePasswordVisibility2() {
        var passwordField = document.getElementById("passwordInput2");
        var toggleIcon = document.getElementById("togglePassword2");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-lock");
            toggleIcon.classList.add("fa-unlock-alt");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-unlock-alt");
            toggleIcon.classList.add("fa-lock");
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
                var select = $('#selCuenta'); // Tu select

                var select2 = $('#selCuentaTotal'); // Tu select


                console.log("esto es de cargarOpciones : ", respuesta)

                
                // Vaciar opciones existentes (si las hay)
                select.empty();
                select2.empty();


                for(var i = 0; i<respuesta.length; i++){

                    if(respuesta[i]["Agente"] === "EFECTIVO" && respuesta[i]["Cuenta"]=== "CONTROLADOR"){

                    }else{

                    var value = respuesta[i]["Agente"] + " - " +  respuesta[i]["Cuenta"];
                    var text = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["Credito"];

                    var value2 = respuesta[i]["Agente"] + " - " + respuesta[i]["Cuenta"];
                    var text2 = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["MontoActual"];

                    // // Agregar las nuevas opciones desde la respuesta AJAX
                    
                        select.append($('<option></option>').attr('value', value).text(text));
                        select2.append($('<option></option>').attr('value', value2).text(text2));
                    }
                    
                }

                // Llamar a las funciones después de agregar las opciones
                establecerValorMonto();
                establecerValorMonto2();
                
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });
    }

    function cargarOpciones2(){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success: function(respuesta) {
                var select3 = $('#selAgente'); // Tu select

                
                // Vaciar opciones existentes (si las hay)
                select3.empty();

                // Array para almacenar agentes únicos
                var agentesUnicos = [];

                // Iterar sobre la respuesta y filtrar agentes únicos
                respuesta.forEach(function(item) {
                    var agente = item["Agente"];
                    if (!agentesUnicos.includes(agente)) {
                        agentesUnicos.push(agente);
                        select3.append($('<option></option>').attr('value', agente).text(agente));
                    }
                });

                console.log("esto es de agentes unicos : ", agentesUnicos)

            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });
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
    
    function CargarCuentas(){
        
    

        var selCuentaParcial = document.getElementById("selCuenta");
        var selCuentaTotal = document.getElementById("selCuentaTotal");

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
                                    var element = selCuentaParcial.querySelector("option[value='" + cuentas[j][0] + " - " + cuentas[j][1][k] + "']");
                                    var elementR = selCuentaTotal.querySelector("option[value='" + cuentas2[j][0] + " - " + cuentas2[j][1][k] + "']");
                                    
                                    if (element && elementR) {
                                        element.textContent = " " + cuentas[j][0] + " - " + cuentas[j][1][k] + " : .s/" + parseFloat(respuesta[i]["Credito"]).toFixed(2);
                                        elementR.textContent = " " + cuentas2[j][0] + " - " + cuentas2[j][1][k] + " : .s/" + parseFloat(respuesta[i]["MontoActual"]).toFixed(2);

                                    }
                                }
                            }
                        }
                    }
                }

            }
        })
        
                
    
    }

    function bloquearDesbloquearMonto(bloquear) {
        const iptMonto = document.getElementById("iptMonto");
        iptMonto.disabled = bloquear;
        const iptMonto2 = document.getElementById("iptMontoActual");
        iptMonto2.disabled = bloquear;
    }

    function establecerValorMonto() {
        var selCuenta = document.getElementById("selCuenta").value;
        console.log("el value es :" + selCuenta);

        var palabras = selCuenta.split(/[\s:-]+/);
        var agente = palabras[0];
        var cuenta = palabras[1];
        
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5,
                 //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){

                for(i = 0; i<respuesta.length ; i++){
                        
                    if(respuesta[i]["Agente"] == agente){
                        
                        if(respuesta[i]["Cuenta"] == cuenta){

                            var respuesta_r = parseFloat(respuesta[i]["Credito"]) ;

                        }

                    }
                }

                document.getElementById("iptMonto").value = respuesta_r.toFixed(2);
                
            }
        });
    }

    function establecerValorMonto2() {
        var selCuenta = document.getElementById("selCuentaTotal").value;

        console.log("el value es :" + selCuenta);
        var palabras = selCuenta.split(/[\s:-]+/);
        var agente = palabras[0];
        var cuenta = palabras[1];
        console.log("cuenta es :" + cuenta);

        
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5,
                 //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){

                for(i = 0; i<respuesta.length ; i++){
                        
                    if(respuesta[i]["Agente"] == agente){
                        
                        if(respuesta[i]["Cuenta"] == cuenta){

                            var respuesta_r = parseFloat(respuesta[i]["MontoActual"]) ;
                            console.log("respuesta r = ",respuesta_r);

                        }

                    }
                }
                if(respuesta_r == undefined){
                    document.getElementById("iptMontoActual").value = "0.00";
                }else{
                    document.getElementById("iptMontoActual").value = respuesta_r.toFixed(2);
                }
                
                
            }
        });
    }

    function CambiarCredito(credito,agente,cuenta){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 12,
                'credito': credito,
                'agente': agente,
                'cuenta': cuenta,
                 //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){

                console.log("respuesta: " + respuesta)

                if (respuesta == "error"){

                    Swal.fire({
                        position:'center',
                        icon:'error',
                        title: 'Ocurrio un error, intentelo de nuevo',
                        showConfirmButton: false,
                        timer: 2500
                    })

                } else if (respuesta == "ok"){
                    Swal.fire({
                        position:'center',
                        icon:'success',
                        title: 'Monto cambiado con exito',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    CargarCuentas();
                    establecerValorMonto();
                }
                
            }
        });
    }

    function CambiarCredito2(credito,agente,cuenta,creditoActual){

        console.log("cambiar credito actual:#" ,credito,agente,cuenta,creditoActual)
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 10, //parametro para obtener las ventas del mes
                'AgenteD':agente,
                'CuentaD':cuenta,
                'AgenteR':"EFECTIVO",
                'CuentaR':"CONTROLADOR",
                'Transferencia':creditoActual,
                'Descripcion':"Esto es un cambio del credito total"
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

                } else if (respuesta == "ok"){

                $.ajax({
                    url: "ajax/registro_agente.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 10, //parametro para obtener las ventas del mes
                        'AgenteD':"EFECTIVO",
                        'CuentaD':"CONTROLADOR",
                        'AgenteR': agente,
                        'CuentaR': cuenta,
                        'Transferencia':credito,
                        'Descripcion':"Esto es un cambio del credito total"
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

                        } else if (respuesta == "ok"){
                            Swal.fire({
                                position:'center',
                                icon:'success',
                                title: 'Monto cambiado con exito',
                                showConfirmButton: false,
                                timer: 2500
                            })
                            cargarMatrizCuentas();
                            cargarOpciones();
                            CargarCuentas();
                            establecerValorMonto2();
                        } 
                    }
                });

                }
                        
            }
        });

        
    }

    function CargarDataTable(){

        tblUsuarios = $('#tblUsuarios').DataTable({
                
                ajax:{
                    async: false,
                    url: "ajax/perfil.ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    dataSrc: "",
                    data:{
                        accion: 2
                    }

                },
            
                
                columnDefs:[{
                        targets: 5,
                        visible:false,
                    },{    
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarPerfil text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
                                "</span>" +
                                "</center>"    
                        }
                    }
                ],
                scrollX:true,
                order:[
                    [1,'asc']
                ],
                language :{
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                },
                drawCallback: function(settings) {
                    ajustarHeadersDataTables($('#tblUsuarios'));
                }
        });

        tblClientes = $('#tblClientes').DataTable({
                
                ajax:{
                    async: false,
                    url: "ajax/clientes.ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    dataSrc: "",
                    data:{
                        accion: 2
                    }

                },
            
                
                columnDefs:[
                    {    
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnSeleccionarPerfil text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-5'></i>" +
                                "</span>" +
                                "<span class='btnVerFoto text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-image fs-5'></i>" +
                                "</span>" +
                                "</center>"    
                        }
                    },
                    {
                        targets: 6,
                        visible: false
                    }
                    
                ],
                scrollX:true,
                order:[
                    [1,'asc']
                ],
                language :{
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                },
                drawCallback: function(settings) {
                    ajustarHeadersDataTables($('#tblClientes'));
                }
        });

    }

    function RegistrarUsuario(){
        var forms = document.getElementsByClassName('needs-validation-registro-modulo');
        var validation = Array.prototype.filter.call(forms, function(form){
            if(form.checkValidity() === true){

                Swal.fire({
                        title: "¿Está seguro de actualizar la lista de usuarios?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, deseo hacerlo!",
                        cancelButtonText: "Cancelar",
                    }).then((result) => {

                        if (result.isConfirmed){

                            var usuario = $("#iptNuevoUsuario").val();
                            var nombre = $("#iptNombreUsuario").val();
                            var apellidos = $("#iptApellidoUsuario").val();
                            var cargo = parseInt($("#selCargo").val());
                            var contraseña = $("#passwordInput").val();
                            var nueva_contraseña = $("#passwordInput2").val();

                            console.log(idUsuario , " - ", usuario , " - ", nombre , " - ", apellidos, " - ", cargo , " - ", contraseña, " - ", nueva_contraseña)
                            $.ajax({
                                async: false,
                                url: "ajax/perfil.ajax.php",
                                method: "POST",
                                data:{
                                    accion:4,
                                    idUsuario: parseInt(idUsuario),
                                    usuario: usuario, 
                                    nombre: nombre,
                                    apellido: apellidos,
                                    cargo: cargo, 
                                    contraseña: contraseña, 
                                    nueva_contraseña: nueva_contraseña
                                },
                                
                                success: function(respuesta){
                                    console.log(respuesta);

                                    if (respuesta == '"OK"'){
                                        Swal.fire({
                                            title: "Cambios realizados",
                                            icon: "success",

                                            
                                        });

                                            $("#iptNuevoUsuario").val("");
                                            $("#iptNombreUsuario").val("");
                                            $("#iptApellidoUsuario").val("");
                                            $("#selCargo").val("");
                                            $("#passwordInput").val("");
                                            $("#passwordInput2").val("");
                                            $(".needs-validation-registro-modulo").removeClass("was-validated");

                                            tblUsuarios.ajax.reload();
                                    }else if (respuesta == '"ERROR"'){
                                        Swal.fire({
                                            title: "Hay un error en sus datos vuelva a ver",
                                            icon: "error",
                                            
                                        });
                                    }
                                }
                            })

                        }

                        console.log(usuario, cargo, contraseña);
                    });
                
            }
            form.classList.add("was-validated");
        })
    }

    function RegistrarCliente(){
        var forms = document.getElementsByClassName('needs-validation-registro-clientes');
        var validation = Array.prototype.filter.call(forms, function(form){

            var firstInput = form.elements[0];

            if(firstInput.checkValidity() === true){

                Swal.fire({
                        title: "¿Está seguro de hacer los cambios?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, deseo hacerlo!",
                        cancelButtonText: "Cancelar",
                    }).then((result) => {

                        if (result.isConfirmed){

                            var nombre = $("#iptNombreCliente").val();
                            var apellidos = $("#iptApellidoCliente").val();
                            var Ident =  $("#iptIdentCliente").val();
                            var Direccion = $("#iptDireccionCliente").val();
                            var Tipo = $("#selTipoCliente").val();

                            if(apellidos === ""){  
                                apellidos = "SIN RAZON SOCIAL"
                            }

                            if(Ident === ""){  
                                Ident = "SIN IDENTIFICACION"
                            }

                            if(Direccion === ""){  
                                Direccion = "SIN DIRECCION"
                            }

                            nombre  = nombre.trim();
                            apellidos = apellidos.trim();
                            Ident = Ident.trim();
                            Direccion = Direccion.trim();

                            console.log("razon comercial: ", nombre ,"razon social: ", apellidos ,"Identificacion: ", Ident, "Direccion : ",Direccion)
                            
                           
                            $.ajax({
                                async: false,
                                url: "ajax/clientes.ajax.php",
                                method: "POST",
                                data:{
                                    accion:4,
                                    senal: idCliente,
                                    Nombres: nombre,
                                    Telefono: apellidos,
                                    Identificacion: Ident,
                                    Direccion: Direccion,
                                    Tipo:Tipo,
                                    
                                },
                                
                                success: function(respuesta){
                                    console.log(respuesta);

                                    if (respuesta === '"OK"'){
                                        Swal.fire({
                                            title: "Cambios realizados",
                                            icon: "success",

                                            
                                        });

                                            $("#iptNombreCliente").val("");
                                            $("#iptApellidoCliente").val("");
                                            $("#iptIdentCliente").val("");
                                            $("#iptDireccionCliente").val("");

                                            $("#iptIdentCliente").prop("readonly", false);
                                            $(".needs-validation-registro-clientes").removeClass("was-validated");
                                            tblClientes.ajax.reload();
                                            var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');
                                            btnRegistrarCliente.textContent = 'Ingresar Nuevo Cliente';

                                    }else if (respuesta == '"ERROR"'){
                                        Swal.fire({
                                            title: "Hay un error en sus datos vuelva a ver",
                                            icon: "error",
                                            
                                        });
                                    }else if (respuesta == '"ID O RUC REPETIDO"'){
                                        Swal.fire({
                                            title: "ID O RUC REPETIDO",
                                            icon: "warning",

                                            
                                        });
                                    }
                                }
                            })

                        }

                       
                    });
                
            }
            form.classList.add("was-validated");
        })
    }

    function EliminarCliente(){
        if(idCliente == 0){
            Swal.fire({
                icon: 'error',
                title: 'Elija un Cliente'
            });
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Cliente id: '+ idCliente + " elegido"
            });

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
                                    
                                        if(respuesta === "ok"){
                                            tblClientes.ajax.reload()
                                        }

                                    }
                                });

                            }
                            
                        }
                    })
                    
                }
            })

        }
    }

</script>

<script>


    $('#tblUsuarios').on('click', '.btnSeleccionarPerfil', function(){
        var data = tblUsuarios.row($(this).parents('tr')).data();

    

        if ($(this).parents('tr').hasClass('selected')) {

            $(this).parents('tr').removeClass('selected');

            $('#modulos').jstree("deselect_all", false);
            
            idUsuario = 0;
            var tituloContraseña = document.getElementById("txtTituloContraseña");
            tituloContraseña.textContent = "Nueva Contraseña";
            var tituloContraseña = document.getElementById("txtTituloContraseña2");
            tituloContraseña.textContent = "Confirmar Contraseña";
            $("#card-modulos").css("display", "none");
            console.log("id Perfil: " +idUsuario);
            $("#iptNuevoUsuario").val("");
            $("#iptNombreUsuario").val("");
            $("#iptApellidoUsuario").val("");
            $("#selCargo").val("");

        }else{
            
            tblUsuarios.$('tr.selected').removeClass('selected');

            $(this).parents('tr').addClass('selected');
            var tituloContraseña = document.getElementById("txtTituloContraseña");
            tituloContraseña.textContent = "Contraseña Actual";
            var tituloContraseña = document.getElementById("txtTituloContraseña2");
            tituloContraseña.textContent = "Nueva Contraseña (si no quiere cambiar colocar la misma contraseña)";
            //console.log(data);

            idUsuario = data[1];

            $("#card-modulos").css("display","block");

            console.log("id Perfil: " +idUsuario);

             $.ajax({
                 async:false,
                 url:"ajax/perfil.ajax.php",
                 method: 'POST',
                 data: {
                     accion: 3,
                     idUsuario: idUsuario
                 },
                 dataType: 'json',
                 success: function (respuesta){
                     console.log(respuesta[0][4] , " -- " , respuesta[0][6]);

                    $("#iptNuevoUsuario").val(respuesta[0][4]);
                    $("#iptNombreUsuario").val(respuesta[0][2]);
                    $("#iptApellidoUsuario").val(respuesta[0][3]);
                    $("#selCargo").val(respuesta[0][6])
                     //modulos_usuario = respuesta;

                     //seleccionarModulosPerfil(idUsuario);
                 }
             })


        }
    })

    $("#btnRegistrarCategoria").on("click", function(){
        RegistrarUsuario();
    })


    $('#tblClientes').on('click', '.btnSeleccionarPerfil', function(){
        var data = tblClientes.row($(this).parents('tr')).data();

    

        if ($(this).parents('tr').hasClass('selected')) {

            $(this).parents('tr').removeClass('selected');

            $('#modulos').jstree("deselect_all", false);

            idCliente = 0;
            
            $("#card-modulos").css("display", "none");
            console.log("id Cliente: " +idCliente);
            //$("#iptIdentCliente").prop("readonly", false);
            $("#iptNombreCliente").val("");
            $("#iptApellidoCliente").val("");
            $("#iptIdentCliente").val("");
            $("#iptDireccionCliente").val("");
            
            var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

            // Cambiar el texto del botón
            btnRegistrarCliente.textContent = 'Ingresar Nuevo Cliente';
            

        }else{

            tblClientes.$('tr.selected').removeClass('selected');

            $(this).parents('tr').addClass('selected');
            
            idCliente = data[1];
            IdentCliente = data[2];

            $("#card-modulos").css("display","block");

            console.log("id Cliente: " +idCliente);

             $.ajax({
                 async:false,
                 url:"ajax/clientes.ajax.php",
                 method: 'POST',
                 data: {
                     accion: 3,
                     idCliente: idCliente
                 },
                 dataType: 'json',
                 success: function (respuesta){
                     console.log(respuesta[0]);

                    //$("#iptIdentCliente").prop("readonly", true);
                    $("#iptNombreCliente").val(respuesta[0][1]);
                    $("#iptApellidoCliente").val(respuesta[0][2]);
                    $("#iptIdentCliente").val(respuesta[0][0]);
                    $("#iptDireccionCliente").val(respuesta[0][3]);

                    var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

                    // Cambiar el texto del botón
                    btnRegistrarCliente.textContent = 'Cambiar Datos del Cliente';

                     //modulos_usuario = respuesta;

                     //seleccionarModulosPerfil(idUsuario);
                 }
             })


        }
    })

    $('#tblClientes').on('click', '.btnVerFoto', function(){
        var data = tblClientes.row($(this).parents('tr')).data();

        console.log("data[1]: ", data[1]);

        if ($(this).parents('tr').hasClass('selected')) {

            $(this).parents('tr').removeClass('selected');

            $('#modulos').jstree("deselect_all", false);

            idCliente = 0;
            codigo = "";
            $("#card-modulos").css("display", "none");
            console.log("id Cliente: " +idCliente);
            //$("#iptIdentCliente").prop("readonly", false);
            $("#iptNombreCliente").val("");
            $("#iptApellidoCliente").val("");
            $("#iptIdentCliente").val("");
            $("#iptDireccionCliente").val("");
            
            var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

            // Cambiar el texto del botón
            btnRegistrarCliente.textContent = 'Ingresar Nuevo Cliente';
           
            

        }else{

            tblClientes.$('tr.selected').removeClass('selected');

            $(this).parents('tr').addClass('selected');
            codigo = parseInt(data[1]);
            idCliente = data[1];
            IdentCliente = data[2];

            $("#card-modulos").css("display","block");

            console.log("id Cliente: " +idCliente);
            $("#mdlVerFoto").modal('show');

             $.ajax({
                 async:false,
                 url:"ajax/clientes.ajax.php",
                 method: 'POST',
                 data: {
                     accion: 3,
                     idCliente: idCliente
                 },
                 dataType: 'json',
                 success: function (respuesta){
                     console.log(respuesta[0]);

                    //$("#iptIdentCliente").prop("readonly", true);
                    $("#iptNombreCliente").val(respuesta[0][1]);
                    $("#iptApellidoCliente").val(respuesta[0][2]);
                    $("#iptIdentCliente").val(respuesta[0][0]);
                    $("#iptDireccionCliente").val(respuesta[0][3]);
                    var imagenPreview = document.getElementById('previewImg');
                    if (imagenPreview) {
                        imagenPreview.src = 'vistas/assets/imagenes/Clientes/'+respuesta[0][4];
                    }

                    var btnRegistrarCliente = document.getElementById('btnRegistrarCliente');

                    // Cambiar el texto del botón
                    btnRegistrarCliente.textContent = 'Cambiar Datos del Cliente';

                     //modulos_usuario = respuesta;

                     //seleccionarModulosPerfil(idUsuario);
                 }
             })


        }
    })

    $("#btnRegistrarCliente").on("click", function(){

        var nombre = $("#iptNombreCliente").val();
        var apellidos = $("#iptApellidoCliente").val();
        var Ident =  $("#iptIdentCliente").val();
        var Direccion = $("#iptDireccionCliente").val();


        console.log(nombre + "-")

        $.ajax({
            async:false,
            url:"ajax/clientes.ajax.php",
            method: 'POST',
            data: {
                accion: 12,
                nombre: nombre,
                Ident : Ident,
                Direccion:Direccion,
            },
            dataType: 'json',
            success: function (respuesta){


                console.log(respuesta);

                if(respuesta == 0){
                    RegistrarCliente();
                }else {

                    var texto = "";

                    if(respuesta == 1){

                        texto = "Hay un cliente con el mismo nombre. Continuar?"
                    }else if(respuesta == 2){

                        texto = "Hay un cliente con el mismo DNI o RUC. Continuar?"
                    }else if(respuesta == 3){

                        texto = "Hay un cliente con el mismo nombre y DNI o RUC.. Continuar?"
                    }else if(respuesta == 4){

                        texto = "Hay un cliente con la misma direccion . Continuar?"
                    }else if(respuesta == 5){

                        texto = "Hay un cliente con la misma direccion y nombre . Continuar?"
                    }else if(respuesta == 6){

                        texto = "Hay un cliente con la misma direccion y  DNI o RUC . Continuar?"
                    }else if(respuesta == 7){

                        texto = "Hay un cliente con la misma direccion, nombre y  DNI o RUC . Continuar?"
                    }

                    Swal.fire({
                            icon: 'error',
                            title: texto,
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "¡Sí, deseo hacerlo!",
                            cancelButtonText: "Cancelar",
                        }).then((result) => {

                            if (result.isConfirmed){
                                RegistrarCliente();
                            } else{
                                return;
                            }

                        })
                }

                
            }
        })

        
    })

    $("#btnEliminarCliente").on("click", function(){
        EliminarCliente();
    })

    document.getElementById("btnGuardarProducto").addEventListener("click", function() {

        var imagen_valida = true;
        console.log("codigo: ", codigo)

        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {

            if (form.checkValidity() === true) {   

                // console.log("Listo para registrar el producto")

                var file = $("#iptImagen").val();

                var ext = file.substring(file.lastIndexOf("."));

                if (ext != ".jpg" && ext != ".png" && ext != ".gif" && ext != ".jpeg" && ext != ".webp") {
                    mensajeToast('error', "La extensión " + ext + " no es una imagen válida");
                    imagen_valida = false;
                }

                if (!imagen_valida) {
                    return;
                }

                


                Swal.fire({
                    title: 'Cambiar la foto?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, cambialo!',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        const inputImage = document.querySelector('#iptImagen');
                        var datos = new FormData();
                        var accion = 11;

                        datos.append("accion", accion);
                        datos.append("codigo", codigo);
                        datos.append("archivo[]",inputImage.files[0])
                        datos.append("Perfil", $("#iptImagen").val());

                        var titulo_msj = "La foto se cambio exitosamente"
                        


                        $.ajax({
                            url: "ajax/clientes.ajax.php",
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
                                        title: titulo_msj
                                    });

                                    tblClientes.ajax.reload();

                                    $("#mdlGestionarProducto").modal('hide');
                                    $("#iptImagen").val("");
                                    $("#previewImg").attr("src","vistas/assets/imagenes/no_image.jpg")
                                    $(".needs-validation").removeClass("was-validated");

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El producto no se pudo registrar'
                                    });
                                }

                            }
                        });

                    }
                })
            }else {
                console.log("No paso la validacion")
            }

            form.classList.add('was-validated');

        });
    });

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


</script>

<script>

//document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>