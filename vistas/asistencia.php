
<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Asistencia y Empleados</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Asistencias</li>

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
                <a class="nav-link active" id="content-registrar-asistencia-tab" data-toggle="pill" href="#content-registrar-asistencia" role="tab" aria-controls="content-registrar-asistencia" aria-selected="false">Registrar Asistencia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-empleados-tab" data-toggle="pill" href="#content-empleados" role="tab" aria-controls="content-empleados" aria-selected="false">Registro de Asistencia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-tardanzas-tab" data-toggle="pill" href="#content-tardanzas" role="tab" aria-controls="content-tardanzas" aria-selected="false">Lista de Empleados</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-registrar-almuerzo-tab" data-toggle="pill" href="#content-registrar-almuerzo" role="tab" aria-controls="content-registrar-almuerzo" aria-selected="false">Registrar Almuerzo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-almuerzos-tab" data-toggle="pill" href="#content-almuerzos" role="tab" aria-controls="content-almuerzos" aria-selected="false">Registro de Almuerxos</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-registrar-asistencia" role="tabpanel" aria-labelledby="content-registrar-asistencia-tab">

                <div class="row mb-3">
                    <div class="col-md-3 mb-3">

                    </div>

                    <div class="col-md-6 mb-6 text-center">
                        
                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registrar Asistencia del Empleado</h2>

                        </div>
                    
                    </div>

                    <div class="col-md-3 mb-3">
                        
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-2 mb-3">

                    </div>

                    <div class="col-md-8 mb-6">
                        <div class="card card-gray" style="border: 1px solid black;">

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-6 mx-auto text-center">
                                        <div class="reloj" id="reloj">
                                            <div class="fecha" id="fecha"></div>
                                            <div class="hora" id="hora"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-6">
                                        <div class="col-lg-12 mb-3">
                                            <label class="" for="selEmpleado"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Empleado</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selEmpleado">
                                                <option value="0" selected="true">Seleccione Empleado</option>
                                                <option value="1">Cliente</option>
                                                <option value="2">Proveedor</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div>  
                                        
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptComentario"><i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Justificacion</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptComentario"
                                                    name="iptComentario" placeholder="Razon Comercial" required>
                                                <div class="invalid-feedback">Comentario</div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                                                id="btnRegistrarAsistencia">Registrar Asistencia</button>
                                        </div>
                                    </div> 

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        
                    </div>
                </div>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-empleados" role="tabpanel" aria-labelledby="content-empleados-tab">

                <div class="row mb-3">

                    <div class="col-md-12 mb-6 text-center">

                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Lista de Asistencia</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptEmpleado" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptEmpleado">Empleado</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptEmpleado" class="form-control" data-index="3">
                                                        <label for="iptEmpleado">Empleado</label>
                                                    </div>


                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstAsistencias" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id</th>
                                                    <th>Empleado</th>
                                                    <th>Hora de llegada</th>
                                                    <th>Tardanza</th>
                                                    <th>Justifiacion</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-tardanzas" role="tabpanel" aria-labelledby="content-tardanzas-tab">

                <div class="row mb-3">

                    <div class="col-md-12 mb-6 text-center">

                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Lista de Empleados</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                    <div style="width: 75%;" class="form-floating mx-1">
                                                        <input type="text" id="iptEmpleado2" class="form-control" data-index="3" autocomplete="off">
                                                        <label for="iptEmpleado2">Empleado</label>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <!-- small box -->
                                                        <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnAgregarEmpleado" tabindex="0">
                                                            <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                                <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Nuevo empleado</span></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptEmpleado2" class="form-control" data-index="3">
                                                        <label for="iptEmpleado2">Empleado</label>
                                                    </div>

                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstEmpleados" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-black text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th>Id</th>
                                                    <th>Empleado</th>
                                                    <th>dni</th>
                                                    <th>Tardanzas</th>
                                                    <th>Justifiaciones</th>
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

            <div class="tab-pane fade mt-4 px-4" id="content-registrar-almuerzo" role="tabpanel" aria-labelledby="content-registrar-almuerzo-tab">

                <div class="row mb-3">
                    <div class="col-md-3 mb-3">

                    </div>

                    <div class="col-md-6 mb-6 text-center">
                        
                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registrar Almuerzo del Empleado</h2>

                        </div>
                    
                    </div>

                    <div class="col-md-3 mb-3">
                        
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-2 mb-3">

                    </div>

                    <div class="col-md-8 mb-6">
                        <div class="card card-gray" style="border: 1px solid black;">

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4 mb-6 mx-auto text-center">
                                        <div class="reloj" id="reloj_2">
                                            <div class="fecha" id="fecha_2"></div>
                                            <div class="hora" id="hora_2"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-6">
                                        <div class="col-lg-12 mb-3">
                                            <label class="" for="selEmpleadoAlmuerzo"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Empleado</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selEmpleadoAlmuerzo">
                                                <option value="0" selected="true">Seleccione Empleado</option>
                                                <option value="1">Cliente</option>
                                                <option value="2">Proveedor</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div>  
                                        
                                        <div class="col-lg-12 mb-3">
                                            <label class="" for="selReaccion"><i class="fas fa-barcode fs-6"></i>
                                                <span class="small">Inicio o fin?</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selReaccion">
                                                <option value="1" selected="true">Inicio</option>
                                                <option value="2">Final</option>
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una opcion
                                            </span>
                                        </div>  

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                                                id="btnRegistrarAlmuerzo">Registrar Almuerzo</button>
                                        </div>
                                    </div> 

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-2 mb-3">
                        
                    </div>
                </div>
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-almuerzos" role="tabpanel" aria-labelledby="content-almuerzos-tab">

                <div class="row mb-3">

                    <div class="col-md-12 mb-6 text-center">

                        <div class="card card-gray" style="border: 1px solid black;">

                            <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: frank;" >Registros de Almuerzos</h2>

                        </div>

                    </div>

                </div>

                <div class="container-fluid">

                    <div class="row mb-3">

                        <div class="col-md-12">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">

                                    <div class="row">

                                        <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                                        <div class="col-md-12 mb-3">

                                            

                                            <div class="row">

                                                <div class="d-none d-md-flex col-md-12 ">

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptEmpleadoAlmuerzo" class="form-control" data-index="3" autocomplete="off">
                                                    <label for="iptEmpleadoAlmuerzo">Empleado</label>
                                                </div>

                                                </div>

                                                <div class="d-block d-sm-none">

                                                    <div style="width: 100%;" class="form-floating mx-1 my-1">
                                                        <input type="text" id="iptEmpleadoAlmuerzo" class="form-control" data-index="3">
                                                        <label for="iptEmpleadoAlmuerzo">Empleado</label>
                                                    </div>


                                                </div>

                                            </div>
                    
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                        <table id="lstAlmuerzos" class="display nowrap table-striped w-100 shadow ">
                                            <thead class="bg-gray text-left fs-6">
                                                <tr>
                                                    <th class="text-center">Opciones</th>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Id_Empleado</th>
                                                    <th class="text-center">Empleado</th>
                                                    <th class="text-center">Hora Inicio</th>
                                                    <th class="text-center">Hora Final</th>
                                                    <th class="text-center">Retrazo</th>
                                                    <th class="text-center">Duración</th>
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

<div class="modal fade" id="mdlFotoJustifiacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Prueba de Justificacion</h5>

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

<div class="modal fade" id="mdlCrearCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Empleado</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <form method="post" class="needs-validation-registro-empleados" novalidate id="frm_registro_empleados">

                        <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->
                        
                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptNombre"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Nombre de Empleado</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptNombre"
                                        name="iptNombre" placeholder="Razon Social" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Social</div>
                                </div>
                        
                            </div>
                            
                        </div>
                            
                        <div class="col-md-12 mb-3">

                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptDni"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">DNI o identificacion (opcional)</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptDni"
                                        name="iptDni" placeholder="Razon Comercial" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Comercial</div>
                                </div>

                            </div> 

                        </div>

                        <div class="col-md-12">

                            <div class="col-12 col-lg-12">

                                <button type="button" class="btn btn-secondary btn-sm"  id="btnGuardarCliente">Guardar Cliente</button>

                            </div> 

                        </div>
                        
                    </form> 

                    

                </div>

            </div>

            <div class="modal-footer">
                
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlActualizarEmpleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Editar Empleado : <label id = "iptNombreEmpleado"> Empleado x </label> </h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <form method="post" class="needs-validation-actualizar-empleados" novalidate id="frm_actualizar_empleados">

                        <div class="col-md-12"> <!--EN ESTE ESPACIO SE INGRESA EL NOMBRE DEL USUARIO -->
                        
                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptNombreNuevo"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Nuevo Nombre</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptNombreNuevo"
                                        name="iptNombreNuevo" placeholder="Ingresar nuevo nombre" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Social</div>
                                </div>
                        
                            </div>
                            
                        </div> 
                            
                        <div class="col-md-12 mb-3">

                            <div class="col-12 col-lg-12">

                                <div class="form-group mb-2">
                                    <label class="" for="iptDniNuevo"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">DNI o identificacion (opcional)</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-sm" id="iptDniNuevo"
                                        name="iptDniNuevo" placeholder="Ingrese DNI (ejem : 08732123)" required>
                                    <div class="invalid-feedback">Debe ingresar la Razon Comercial</div>
                                </div>

                            </div> 

                        </div>

                        <div class="col-md-12">

                            <div class="col-12 col-lg-12">

                                <button type="button" class="btn btn-secondary btn-sm"  id="btnActualizar">Cambiar Datos</button>

                            </div> 

                        </form>
                        
                    </div> 

                    

                </div>

            </div>

            <div class="modal-footer">
                
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlActualizarAsistencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Asistencia de : <label id = "iptNombreEmpleado"> Empleado x </label> </h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <div class="modal-body">

                <div class="row">

                    <form method="post" class="needs-validation-actualizar-empleados" novalidate id="frm_actualizar_empleados">

                        <div class="col-lg-12 mb-3">

                            <div class="col-12 col-lg-12">
                                <label class="" for="selEmpleadoModal"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Empleado</span><span class="text-danger">*</span>
                                </label>

                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selEmpleadoModal">
                                    <option value="0" selected="true">Seleccione Empleado</option>
                                    <option value="1">Cliente</option>
                                    <option value="2">Proveedor</option>
                                </select>

                                <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                    Debe Seleccionar una opcion
                                </span>
                            </div>
                        </div>   
                            
                        <div class="col-md-12 mb-3">
                            <div class="col-12 col-lg-12">
                                <div class="form-group mb-2">
                                    <label class="" for="iptFechaModal"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Fecha</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="date" class="form-control form-control-sm" id="iptFechaModal" name="iptFechaModal" required>
                                    <div class="invalid-feedback">Por favor ingrese una fecha válida</div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12">
                                <div class="form-group mb-2">
                                    <label class="" for="iptHoraModal"><i class="fas fa-barcode fs-6"></i>
                                        <span class="small">Hora</span><span class="text-danger">*</span>
                                    </label>
                                    <input type="time" class="form-control form-control-sm" id="iptHoraModal" name="iptHoraModal" required step="1">
                                    <div class="invalid-feedback">Por favor ingrese una hora válida</div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label class="" for="iptJustificacion"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Justificacion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptJustificacion"
                                    name="iptJustificacion" placeholder="Ingresar nueva justificacion" required>
                                <div class="invalid-feedback">Justificacion</div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="col-12 col-lg-12">

                                <button type="button" class="btn btn-secondary btn-sm"  id="btnActualizarAsistencia">Cambiar Datos</button>

                            </div> 

                        </form>
                        
                    </div> 

                    

                </div>

            </div>

            <div class="modal-footer">
                
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

</script>

<script>

var table11;
var table21;

var id_empleado_edicion;
var id_asistencia_edicion;

$(document).ready(function(){

    actualizarReloj();
    actualizarReloj_2()
    cargarOpciones();
    cargarOpcionesModal();
    cargarTable();
    CargarBotones();
    
    setInterval(()=> {
        
        actualizarReloj();
        actualizarReloj_2()
    
    }, 1000); // 10000 milisegundos = 10 segundos

})

</script>

<script>

    function cargarTable() {

        tabla11= $("#lstAsistencias").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                            
                                "<span class='btnEliminarAsistencia text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +

                                "<span class='btnEditarAsistencia text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
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
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 1 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstAsistencias'));
            }
        });

        tabla21= $("#lstEmpleados").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +


                                "<span class='btnEliminarEmpleado text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +

                                "<span class='btnEditarEmpleado text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +

                                "</center>"

                    }
                },
                {

                    targets: 3,
                    visible: false,
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
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
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
                ajustarHeadersDataTables($('#lstEmpleados'));
            }
        });

        tabla31= $("#lstAlmuerzos").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                            
                                "<span class='btnEliminarAlmuerzo text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +

                                // "<span class='btnEditarAlmuerzo text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                // "<i class='fas fa-edit fs-5'></i>" +
                                // "</span>" +

                                "</center>"

                    }
                },
                {
                    targets: 2,
                    visible: false
                },
                {
                    targets: 4, // Suponiendo que la columna de timestamp es la número 4 (0-indexed)
                    render: function(data, type, full, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear la fecha-tiempo y extraer solo la hora y los minutos
                            var dateTime = new Date(data);
                            var formattedTime = dateTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });
                            // Aplicar estilos CSS al texto
                            return "<span style='color: green; font-weight: bold;'>" + formattedTime + "</span>";
                        } else {
                            // Retornar la fecha-tiempo completa para otros tipos (sorting, etc.)
                            return data;
                        }
                    },
                },
                {
                    targets: 5, // Suponiendo que la columna de timestamp es la número 4 (0-indexed)
                    render: function(data, type, full, meta) {
                        if (type === 'display' || type === 'filter') {
                            // Formatear la fecha-tiempo y extraer solo la hora y los minutos
                            var dateTime = new Date(data);
                            var formattedTime = dateTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });
                            // Aplicar estilos CSS al texto
                            return "<span style='color: red; font-weight: bold;'>" + formattedTime + "</span>";
                        } else {
                            // Retornar la fecha-tiempo completa para otros tipos (sorting, etc.)
                            return data;
                        }
                    },
                },
                {
                    targets: "_all",
                    createdCell: function(td, cellData, rowData, row, col) {
                        // Centrar el texto en la celda
                        $(td).css('text-align', 'center');
                        // Establecer la fuente
                        $(td).css('font-family', 'Calibri, sans-serif');
                    }
                },
            ],
            lengthMenu: [10,20, 30, 50],
            pageLength: 20,
            ajax: {
                url: "ajax/empleados.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 9 //2: LISTAR CLIENTES
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
                ajustarHeadersDataTables($('#lstAlmuerzos'));
            }
        });

    }

    function CargarBotones(){

        /*===================================================================
        =====================================================================
        AQUI SE REGISTRA TODO LO QUE TENGA QUE VER CON LA VENTANA ASISTENCIAS
        =====================================================================
        ===================================================================*/
        
        $("#btnRegistrarAsistencia").on('click', function() {
            var id_empleado = $("#selEmpleado").val();
            var justificacion = $("#iptComentario").val();

            console.log(id_empleado)

            $.ajax({
                url: "ajax/empleados.ajax.php",
                type: 'POST',
                data: {
                    'accion': 6, 
                    'id_empleado': id_empleado,
                    'justificacion':justificacion,
                },
                dataType:'json',
                success: function(respuesta) {

                    console.log("respuesta: "+ respuesta)

                    if(respuesta === "OK"){

                        tabla11.ajax.reload()
                        
                        var justificacion = $("#iptComentario").val("");
                        Toast.fire({
                            icon: 'success',
                            title: "Asistencia Registrada Correctamente",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        
                    }
                    
                }
            })


        })

        /*===================================================================
        =====================================================================
        AQUI SE REGISTRA TODO LO QUE TENGA QUE VER CON LA VENTANA List ASIS
        =====================================================================
        ===================================================================*/

        $('#lstAsistencias tbody').on('click', '.btnEditarAsistencia', function(){

            var data = tabla11.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];

            var fechaCompleta = data[3];

            var justificacion = data[5];

            var hora = fechaCompleta.split(" ")[1];
            
            var fecha = fechaCompleta.split(" ")[0];

            id_asistencia_edicion = data[1];

            $("#selEmpleadoModal").val(empleado);
            $("#iptFechaModal").val(fecha);
            $("#iptHoraModal").val(hora);
            $("#iptJustificacion").val(justificacion);

            $("#mdlActualizarAsistencia").modal('show')
        
        });

        
        $('#lstAsistencias tbody').on('click', '.btnEliminarAsistencia', function(){

            var data = tabla11.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];
            var id_tardanza = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar la asistencia',
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, deseo hacerlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 7, 
                            'empleado': empleado,
                            'id_tardanza':id_tardanza,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log(respuesta)

                            if(respuesta === "OK"){

                                tabla11.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: "Eliminado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                        }
                    })

                }
                
            })
        
        });


        $("#btnActualizarAsistencia").on('click', function() {
            

            var forms = document.getElementsByClassName('needs-validation-actualizar-empleados');
            var validation = Array.prototype.filter.call(forms, function(form){

                var firstInput = form.elements[0];
                var secondInput = form.elements[1];
                var thirdInput = form.elements[2];

                if(firstInput.checkValidity() === true && secondInput.checkValidity() === true && thirdInput.checkValidity() === true){

                    var empleado = $("#selEmpleadoModal").val();
                    var fecha = $("#iptFechaModal").val();
                    var hora = $("#iptHoraModal").val();
                    var justificacion = $("#iptJustificacion").val();
                    var id = id_asistencia_edicion;

                    var horaClasica24h = moment(hora, "hh:mm:ss a").format("HH:mm:ss");

                    fecha_hora = fecha + " " + horaClasica24h;

                    console.log( empleado+ " .-. "+ fecha_hora)
                    
                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 8,
                            'id':id,  
                            'empleado': empleado,
                            'fecha_hora': fecha_hora,
                            'justificacion' : justificacion,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log("respuesta: "+ respuesta)

                            if(respuesta === "OK"){

                                tabla11.ajax.reload()
                                $("#mdlActualizarAsistencia").modal('hide');
                                $("#iptFechaModal").val("");
                                $("#iptHoraModal").val("");
                                $("#iptJustificacion").val("");
                                Toast.fire({
                                    icon: 'success',
                                    title: "Actualizado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                
                            }
                            
                        }
                    })
                }
                form.classList.add("was-validated");
            })

        })

        /*===================================================================
        =====================================================================
         AQUI SE REGISTRA TODO LO QUE TENGA QUE VER CON LA VENTANA EMPLEADOS
        =====================================================================
        ===================================================================*/

        $("#btnAgregarEmpleado").on('click', function() {
            
            $("#mdlCrearCliente").modal('show');
        })

        $('#lstEmpleados tbody').on('click', '.btnEditarEmpleado', function(){

            var data = tabla21.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];

            id_empleado_edicion = data[1];

            $("#iptNombreEmpleado").text(empleado);

            $("#mdlActualizarEmpleado").modal('show');

            
        
        });

        $('#lstEmpleados tbody').on('click', '.btnEliminarEmpleado', function(){

            var data = tabla21.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];
            var id_empleado = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Seguro de eliminar al empleado: ' + empleado,
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, deseo hacerlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 4, 
                            'empleado': empleado,
                            'id_empleado':id_empleado,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log(respuesta)

                            if(respuesta === "OK"){

                                tabla21.ajax.reload();
                                tabla11.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: "Eliminado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                        }
                    })
                }
                
            })
        
        });

        $("#btnGuardarCliente").on('click', function() {

            var forms = document.getElementsByClassName('needs-validation-registro-empleados');
            var validation = Array.prototype.filter.call(forms, function(form){

                var firstInput = form.elements[0];

                if(firstInput.checkValidity() === true){

                    var nombre = $("#iptNombre").val();
                    var dni = $("#iptDni").val();
                    
                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 3, 
                            'nombre': nombre,
                            'dni': dni,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log("respuesta: "+ respuesta)

                            if(respuesta === "OK"){

                                tabla21.ajax.reload()
                                $("#mdlCrearCliente").modal('hide');
                                cargarOpciones();
                                cargarOpcionesModal();
                                Toast.fire({
                                    icon: 'success',
                                    title: "Agregado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                
                            } else if(respuesta === "ERROR 404"){
                                
                                Swal.fire({
                                    icon: 'error',
                                    title: "Ya existe un empleado con ese nombre",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                            
                        }
                    })
                }
                form.classList.add("was-validated");
            })

        })

        $("#btnActualizar").on('click', function() {
            

            var forms = document.getElementsByClassName('needs-validation-actualizar-empleados');
            var validation = Array.prototype.filter.call(forms, function(form){

                var firstInput = form.elements[0];

                if(firstInput.checkValidity() === true){

                    var nombre = $("#iptNombreNuevo").val();
                    var dni = $("#iptDniNuevo").val();
                    
                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 5, 
                            'nombre': nombre,
                            'dni': dni,
                            'id_empleado':id_empleado_edicion,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log("respuesta: "+ respuesta)

                            if(respuesta === "OK"){
                                cargarOpciones();
                                cargarOpcionesModal();
                                tabla21.ajax.reload()
                                $("#mdlCrearCliente").modal('hide');
                                $("#iptNombreNuevo").val("");
                                $("#iptDniNuevo").val("");
                                Toast.fire({
                                    icon: 'success',
                                    title: "Actualizado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                
                            }
                            
                        }
                    })
                }
                form.classList.add("was-validated");
            })

        })

        $('#lstAlmuerzos tbody').on('click', '.btnEliminarAlmuerzo', function(){

            var data = tabla31.row($(this).parents('tr')).data();

            console.log(data);

            var empleado = data[2];
            var id_almuerzo = data[1];

            Swal.fire({
                icon: 'warning',
                title: 'Seguro de borrar almuerzo',
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, deseo hacerlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {

                if (result.isConfirmed) {
                    $.ajax({
                        url: "ajax/empleados.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 13, 
                            'id_almuerzo':id_almuerzo,
                        },
                        dataType:'json',
                        success: function(respuesta) {

                            console.log(respuesta)

                            if(respuesta === "OK"){

                                tabla31.ajax.reload();
                                tabla21.ajax.reload();
                                tabla11.ajax.reload();

                                Toast.fire({
                                    icon: 'success',
                                    title: "Eliminado Correctamente",
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }
                        }
                    })
                }   

                
                
            })
        
        });

        /*===================================================================
        =====================================================================
        AQUI SE REGISTRA TODO LO QUE TENGA QUE VER CON LA VENTANA ALMUERZO
        =====================================================================
        ===================================================================*/

        $("#btnRegistrarAlmuerzo").on('click', function() {
            var id_empleado = $("#selEmpleadoAlmuerzo").val();
            var justificacion = $("#selReaccion").val();

            if(justificacion == 1){

                console.log(id_empleado)

                $.ajax({
                    url: "ajax/empleados.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 10, 
                        'id_empleado': id_empleado,
                    },
                    dataType:'json',
                    success: function(respuesta) {

                        console.log("respuesta: "+ respuesta)

                        if(respuesta === "OK"){

                            $.ajax({
                                url: "ajax/empleados.ajax.php",
                                type: 'POST',
                                data: {
                                    'accion': 11, 
                                    'id_empleado': id_empleado,
                                },
                                dataType:'json',
                                success: function(respuesta) {

                                    console.log("respuesta: "+ respuesta)

                                    if(respuesta === "OK"){

                                        tabla31.ajax.reload()
                                        
                                        Toast.fire({
                                            icon: 'success',
                                            title: "Asistencia Registrada Correctamente",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                        
                                    }
                                    
                                }
                            })
                            
                        }else if(respuesta === "REPETIDO"){
                            Toast.fire({
                                icon: 'warning',
                                title: "Ya se registro el inicio de este almuerzo",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                        
                    }
                })

            }else if (justificacion == 2){

                $.ajax({
                    url: "ajax/empleados.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 12, 
                        'id_empleado': id_empleado,
                    },
                    dataType:'json',
                    success: function(respuesta) {

                        console.log("respuesta: "+ respuesta)

                        if(respuesta === "OK"){

                            tabla31.ajax.reload()
                            
                            Toast.fire({
                                icon: 'success',
                                title: "Asistencia Registrada Correctamente",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            
                        }else if (respuesta === "REGISTRADO"){

                            Toast.fire({
                                icon: 'warning',
                                title: "Ya se hizo este registro",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                        
                    }
                })

            }

            


        })
    }

    function actualizarReloj() {

        if($('#content-registrar-asistencia:visible').length > 0 || $('#content-empleados:visible').length > 0 || $('#content-tardanzas:visible').length > 0 || $('#content-registrar-almuerzo:visible').length > 0){
        const ahora = new Date();
        const dia = ahora.getDate();
        const mes = ahora.getMonth() + 1;
        const año = ahora.getFullYear();
        const horas = ahora.getHours().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const minutos = ahora.getMinutes().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const segundos = ahora.getSeconds().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        
        const fechaElemento = document.getElementById('fecha');
        fechaElemento.textContent = `${dia}/${mes}/${año}`;

        const horaElemento = document.getElementById('hora');
        horaElemento.textContent = `${horas}:${minutos}:${segundos}`;

        }
    }

    function actualizarReloj_2() {

        if($('#content-registrar-asistencia:visible').length > 0 || $('#content-empleados:visible').length > 0 || $('#content-tardanzas:visible').length > 0 
            || $('#content-registrar-almuerzo:visible').length > 0){

        const ahora = new Date();
        const dia = ahora.getDate();
        const mes = ahora.getMonth() + 1;
        const año = ahora.getFullYear();
        const horas = ahora.getHours().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const minutos = ahora.getMinutes().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        const segundos = ahora.getSeconds().toString().padStart(2, '0'); // Añadir el '0' si es necesario
        
        const fechaElemento = document.getElementById('fecha_2');
        fechaElemento.textContent = `${dia}/${mes}/${año}`;

        const horaElemento = document.getElementById('hora_2');
        horaElemento.textContent = `${horas}:${minutos}:${segundos}`;

        }
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

    function cargarOpciones(){
        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 2, 
            },
            dataType: 'json',
            success: function(respuesta) {
                var selectEmpleados = document.getElementById("selEmpleado");
                var selEmpleadoAlmuerzo = document.getElementById("selEmpleadoAlmuerzo");

                console.log("esto es de cargarOpciones : ", respuesta);

                // Vaciar opciones existentes (si las hay)
                selectEmpleados.innerHTML = '<option value="">Seleccione Empleado</option>';
                selEmpleadoAlmuerzo.innerHTML = '<option value="">Seleccione Empleado</option>';

                for (var i = 0; i < respuesta.length; i++) {
                    var value = respuesta[i]["id_empleado"];
                    var text = respuesta[i]["nombre"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option1 = document.createElement('option');
                    option1.value = value;
                    option1.text = text;

                    var option2 = document.createElement('option');
                    option2.value = value;
                    option2.text = text;

                    selectEmpleados.appendChild(option1);
                    selEmpleadoAlmuerzo.appendChild(option2);
                }
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });

    }

    function cargarOpcionesModal(){
        $.ajax({
            url: "ajax/empleados.ajax.php",
            type: 'POST',
            data: {
                'accion': 2, 
            },
            dataType:'json',
            success: function(respuesta) {
                var selectEmpleados = document.getElementById("selEmpleadoModal");


                console.log("esto es de cargarOpciones : ", respuesta)

                
                // Vaciar opciones existentes (si las hay)
                selectEmpleados.innerHTML = 'Seleccione Empleado';



                for (var i = 0; i < respuesta.length; i++) {

                    var value = respuesta[i]["id_empleado"];
                    var text = respuesta[i]["nombre"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option = document.createElement('option');
                    option.value = text;
                    option.text = text;
                    
                    selectEmpleados.appendChild(option);
                        
                }

                
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });
    }

    
</script>
