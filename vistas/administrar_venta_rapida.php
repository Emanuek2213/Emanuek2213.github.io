<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;" >Punto de Venta</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Ventas</li>

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
                <a class="nav-link active" id="content-generar-tab" data-toggle="pill" href="#content-generar" role="tab" aria-controls="content-generar" aria-selected="false">Crear Catalogo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-productos-tab" data-toggle="pill" href="#content-productos" role="tab" aria-controls="content-productos" aria-selected="false">Crear Botones</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-ordenar-tab" data-toggle="pill" href="#content-ordenar" role="tab" aria-controls="content-ordenar" aria-selected="false">Ordenar Catalogo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-productos-populares-tab" data-toggle="pill" href="#content-productos-populares" role="tab" aria-controls="content-productos-populares" aria-selected="false">Populares</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" id="content-editar-tab" data-toggle="pill" href="#content-editar" role="tab" aria-controls="content-editar" aria-selected="false">Carga Rapida</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-generar" role="tabpanel" aria-labelledby="content-generar-tab">

                <div class="container-fluid">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="col-md-12 mb-3 rounded-3" style="background-color: white ;color: black;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">CREAR CATALOGO</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-7">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">
                                    

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <!-- <button class="btn btn-success" id="btnHacerPedido2">
                                                <i class="fas fa-biking"></i> Volver Pedido
                                            </button>
                                            <button class="btn btn-primary" id="btnHacerVenta2">
                                                <i class="fas fa-shopping-cart"></i> Hacer Venta
                                            </button> -->

                                            <button class="btn btn-warning" id="btnActualizar1">
                                                <i class="fas fa-bolt fs-5"> Actualizar</i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstCategoriasBotones" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th ></th>
                                                        <th >Id</th>
                                                        <th >Catalogo</th>
                                                        <th >Descripcion</th>
                                                        <th >Cantidad</th>
                                                        <th >Borrar</th>
                                                        <th >Color</th>
                                                        <th >Icono</th>
                                                        <th >Color texto</th>
                                                        <th >Icono texto</th>
                                                        <th >Orden</th>

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

                        <div class="col-md-5">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >


                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">

                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selIcono_1">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Icono</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selIcono_1">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar una Opcion
                                            </span>

                                        </div>

                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selColor_1">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Color</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selColor_1">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Elija un Color
                                            </span>

                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptNombre_1"><i class="fas fa-clipboard fs-6"></i>
                                                    <span class="small">Nombre</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombre_1"
                                                    name="iptNombre_1" placeholder="Nombre del Catalogo" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptDescripcion_1"><i class="fas fa-clipboard fs-6"></i>
                                                    <span class="small"> Detalles</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptDescripcion_1"
                                                    name="iptDescripcion_1" placeholder="Descripcion breve" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnGuardarCatalogo">Crear nuevo Catalogo</button>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-primary btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnEditarCatalogo">Guardar Cambios Catalogo</button>
                                        </div>

                                    </div>

                                </div><!-- ./ CARD BODY -->

                            </div><!-- ./ CARD -->

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                        VISTA PREVIA DE ICONO
                                </h5>
                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-lg-12">
                                            <!-- small box -->
                                            <div class="small-box bg-gray" style="border: 1px solid black;" id = "BotonCatalogo_1" >
                                                <div class="inner">
                                                    <div class="row">
                                                            <div class="col-md-9">
                                                            <h4 id="iptTextoCatalogo_1">Producto #1</h4>

                                                            <p id="iptTextoDes_1"> Nombre completo del producto en este caso es el producto emanuel</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="icon" id= "Icono_1">
                                                                <i class="ion ion-clipboard"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

   
                                                
                                                <a style="cursor:pointer;" class="small-box-footer">Ingresar  <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>                                        

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-productos-populares" role="tabpanel" aria-labelledby="content-productos-populares-tab">

                <div class="container-fluid">
                    
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="col-md-12 mb-3 rounded-3" style="background-color: white ;color: black;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">ELEGIR POPULARES</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-7">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">
                                    

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <!-- <button class="btn btn-success" id="btnHacerPedido2">
                                                <i class="fas fa-biking"></i> Volver Pedido
                                            </button>
                                            <button class="btn btn-primary" id="btnHacerVenta2">
                                                <i class="fas fa-shopping-cart"></i> Hacer Venta
                                            </button> -->

                                            <button class="btn btn-warning" id="btnActualizar2">
                                                <i class="fas fa-bolt fs-5"> Actualizar </i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosBotonesPopulares" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Id</th>
                                                        <th >Nombre</th>
                                                        <th >Producto</th>
                                                        <th >Catalogo</th>
                                                        <th ></th>
                                                        <th >Color</th>
                                                        <th >Icono</th>
                                                        <th >Catalogo</th>
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

                        <div class="col-md-5">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >


                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">
                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selIcono_3">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Icono</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selIcono_3">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccione documento
                                            </span>

                                        </div>
                                        
                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selColor_3">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Color</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selColor_3">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Elija un Color
                                            </span>

                                        </div>

                                        <!-- <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selCatalogo_3">
                                                <i class="fas fa-clipboard fs-6"></i>
                                                <span class="small">Catalogo</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCatalogo_3" data-index="4" >
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar un Catalogo
                                            </span>

                                        </div>  -->

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptNombre_3"><i class="fas fa-clipboard fs-6"></i>
                                                    <span class="small">Nombre</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombre_3"
                                                    name="iptNombre_3" placeholder="Nombre o abreviatura " required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="col-form-label" for="iptDescripcion_3">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptDescripcion_3"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnGuardarBotonesPopulates">Crear nuevo Boton</button>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-primary btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnEditarBotonesPopulates">Guardar Cambios Boton</button>
                                        </div>

                                    </div>

                                </div><!-- ./ CARD BODY -->

                            </div><!-- ./ CARD -->

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                        VISTA PREVIA DE ICONO
                                </h5>
                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-lg-12">
                                            
                                            <div class="small-box bg-gray" style="border: 1px solid black;" id = "BotonProducto_3">
                                                
                                                <div class="inner">
                                                    <div class="row">
                                                            <div class="col-md-9">
                                                            <h4 id="iptTextoProducto_3">Producto #1</h4>

                                                            <p id="iptTextoDes_3"> Nombre completo del producto en este caso es el producto emanuel</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="icon" id= "Icono_3" >
                                                                <i class="ion ion-clipboard"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                

                                                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            
            <div class="tab-pane fade mt-4 px-4" id="content-ordenar" role="tabpanel" aria-labelledby="content-ordenar-tab">

                <div class="container-fluid">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="col-md-12 mb-3 rounded-3" style="background-color: white ;color: black;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">CREAR CATALOGO</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-8" id="colPrincipal">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">
                                    

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">

                                            <button class="btn btn-warning" id="btnActualizar3">
                                                <i class="fas fa-bolt fs-5"> Actualizar</i>
                                            </button>

                                            <button class="btn btn-info" id="btnMoverCatalogos">
                                            <i class="fas fa-arrow-right fs-5"> Mover el Orden de catálogos</i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstCategoriasOrden" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>

                                                        <th ></th>
                                                        <th >Id</th>
                                                        <th >Categoria</th>
                                                        <th >Cant</th>

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

                        <div class="col-md-4" id="colSecundario">

                            <!-- FILA PARA IMAGEN DEL GIF -->
                            <div class="row mx-0">
                                <div class="col-lg-12 mx-0 text-center">
                                    <img src="vistas/assets/imagenes/loading.gif" id="img_carga_2" style="display:none;">
                                </div>
                            </div>

                            <div  class="card card-gray shadow" style="border: 1px solid black;" id = "cuadrado" >


                                <div class="card-header">

                                    <h3 class="card-title"><i class="fas fa-edit"></i> Organizar Módulos</h3>

                                </div>

                                <div class="card-body">

                                    <div class="">

                                        <h2>Orden del Catalogo</h2>

                                        <div class="row">
                                        
                                            <div class="col-md-6">

                                                <h4>Columna 1</h4>

                                                <div class="row mb-3">
                                                    
                                                    <h5 class="row mb-3" id="arbolModulos"></h5>

                                                </div>


                                            </div>

                                            <div class="col-md-6">

                                                <h3>Columna 2</h3>

                                                <div class="row mb-3">
                                                    
                                                    <h5 class="row mb-3" id="arbolModulos2"></h5>

                                                </div>

                                            </div>
                                        
                                        </div> 

                                    </div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="text-center">

                                                <button id="btnReordenarModulos" class="btn btn-success btn-sm" style="width: 100%;">Organizar Módulos</button>

                                                <button id="btnReiniciar" class="btn btn-sm btn-warning mt-3 " style="width: 100%;">Estado Inicial</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div><!-- ./ CARD -->
                            
                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-productos" role="tabpanel" aria-labelledby="content-productos-tab">

                <div class="container-fluid">
                    
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="col-md-12 mb-3 rounded-3" style="background-color: white ;color: black;text-align:center;border:1px solid gray;">
                                    <h2 class="fw-bold m-0">CREACION DE BOTONES</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-7">

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >

                                <div class="card-body p-3">
                                    

                                    <div class="row">

                                        <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                                        <div class="col-md-12 mb-3 rounded-3 text-right">
                                            <!-- <button class="btn btn-success" id="btnHacerPedido2">
                                                <i class="fas fa-biking"></i> Volver Pedido
                                            </button>
                                            <button class="btn btn-primary" id="btnHacerVenta2">
                                                <i class="fas fa-shopping-cart"></i> Hacer Venta
                                            </button> -->

                                            <button class="btn btn-warning" id="btnActualizar2">
                                                <i class="fas fa-bolt fs-5"> Actualizar </i>
                                            </button>
                                        </div>

                                        <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                                        <div class="col-md-12">

                                            <table id="lstProductosBotones" class="display nowrap table-striped w-100 shadow ">
                                                <thead class="bg-gray text-left fs-6">
                                                    <tr>
                                                        <th ></th>
                                                        <th >Id</th>
                                                        <th >Nombre</th>
                                                        <th >Producto</th>
                                                        <th >Catalogo</th>
                                                        <th ></th>
                                                        <th >Color</th>
                                                        <th >Icono</th>
                                                        <th >Catalogo</th>
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

                        <div class="col-md-5">

                            <div  class="card card-gray shadow" style="border: 1px solid black;"  >


                                <div class="card-body p-2">

                                    <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                                    <div class="form-group mb-2">
                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selIcono_2">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Icono</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selIcono_2">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccione documento
                                            </span>

                                        </div>
                                        
                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selColor_2">
                                                <i class="fas fa-smile fs-6"></i>
                                                <span class="small">Color</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selColor_2">
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Elija un Color
                                            </span>

                                        </div>

                                        <div class="col-lg-12 mb-3">

                                            <label class="col-form-label" for="selCatalogo_2">
                                                <i class="fas fa-clipboard fs-6"></i>
                                                <span class="small">Catalogo</span><span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                id="selCatalogo_2" data-index="4" >
                                            </select>

                                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                                Debe Seleccionar un Catalogo
                                            </span>

                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="" for="iptNombre_2"><i class="fas fa-clipboard fs-6"></i>
                                                    <span class="small">Nombre</span><span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control form-control-sm" id="iptNombre_2"
                                                    name="iptNombre_2" placeholder="Nombre o abreviatura " required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group mb-2">
                                                <label class="col-form-label" for="iptDescripcion_2">
                                                    <i class="fas fa-barcode fs-6"></i>
                                                    <span class="small">Productos</span>
                                                </label>

                                                <input type="text" class="form-control form-control-sm" id="iptDescripcion_2"
                                                    placeholder="Ingrese el código de barras o el nombre del producto">
                                            </div>
                                        </div> 

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-success btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnGuardarBotones">Crear nuevo Boton</button>
                                        </div>

                                        <div class="col-lg-12 mb-3">
                                            <button type="button" class="btn btn-primary btn-sm btn-block" data-bs-dismiss="modal"
                                                id="btnEditarBotones">Guardar Cambios Boton</button>
                                        </div>

                                    </div>

                                </div><!-- ./ CARD BODY -->

                            </div><!-- ./ CARD -->

                            <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                <h5 class="card-header py-1 bg-gray text-white text-center">
                                        VISTA PREVIA DE ICONO
                                </h5>
                                <div class="card-body p-3">

                                    <div class="row">

                                        <div class="col-lg-12">
                                            <!-- small box -->
                                            <div class="small-box bg-gray" style="border: 1px solid black;" id = "BotonProducto_2">
                                                
                                                <div class="inner">
                                                    <div class="row">
                                                            <div class="col-md-9">
                                                            <h4 id="iptTextoProducto_2">Producto #1</h4>

                                                            <p id="iptTextoDes_2"> Nombre completo del producto en este caso es el producto emanuel</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="icon" id= "Icono_2" >
                                                                <i class="ion ion-clipboard"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                

                                                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-editar" role="tabpanel" aria-labelledby="content-editar-tab">

                <h4>Edicion de Categorias</h4>
                <!-- <button id="cambiarEstilo">Desplazarse hacia abajo</button> -->
                <div class="container-fluid">
                    <!-- FILA PARA INPUT FILE -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-gray" style="border: 1px solid black;">
                                <div class="card-header">
                                    <h3 class="card-title">Seleccionar Archivo de Carga (Excel):</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div> <!-- ./ end card-tools -->
                                </div> <!-- ./ end card-header -->
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" id="form_carga_productos">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <input type="file" name="fileProductos" id="fileProductos" class="form-control"
                                                    accept=".xls, .xlsx">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="submit" value="Cargar Productos" class="btn btn-primary"
                                                    id="btnCargar">
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- ./ end card-body -->
                            </div>
                        </div>
                    </div>

                    <!-- FILA PARA IMAGEN DEL GIF -->
                    <div class="row mx-0">
                        <div class="col-lg-12 mx-0 text-center">
                            <img src="vistas/assets/imagenes/loading.gif" id="img_carga" style="display:none;">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>


        </div>

    </div>

</div>

<!-- AQUI ESTARIAN LOS MODALES -->



<div class="modal fade" id="mdlElegirCategorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Lista de Categorias</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <div class="col-md-12">

                            <table id="lstCategorias" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th class="text-center">Elegir</th>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Cant.Productos</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>
                        <!-- / table -->
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm"
                    id="btnGuardarCategorias">Agregar Categorias</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="mdlProductoCategorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Productos del la Categoria</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <div class="col-md-12">

                            <table id="lstProductoCategorias" class="display nowrap table-striped w-100 shadow ">
                                <thead class="bg-gray text-left fs-6">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>
                        <!-- / table -->
                        </div>
                    </div>

                </div>

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
        var id_catalogo = 0;

        var id_catalogo2 = 0;

        var id_botones = 0;

        var id_botones_2 = 0;

        var id_botones_popular = 0;

        var icono_catalogo;

        var OrdenarCatalogos = 0;

        var color_catalogo;

        var matrizOriginal;

        var cantidad_inicial = 0;

        var cantidades_categorias = 0; 

        var Tabla11;
        var Tabla12;
        var Tabla13;

        var Tabla21;

        var Tabla31;

        var Tabla41;

        var categoriasSeleccionadas = [];
        var categoriasSeleccionadas2 = [];
        
        $(document).ready(function() {

            

            CargarTables();
            cargarOpciones();

            var btnEditarBotones = document.getElementById("btnEditarBotones");

                btnEditarBotones.style.display = "none";

            var btnEditarCatalogo = document.getElementById("btnEditarCatalogo");

                btnEditarCatalogo.style.display = "none";

            var btnEditarBotonesPopulates = document.getElementById("btnEditarBotonesPopulates");

                btnEditarBotonesPopulates.style.display = "none";

            accionesSeleccion();
            accionesTexto();
            CargarBotones();
            cargarProductosAJAX();
            fnCargarArbolModulos();
            Desaparecer();
            
        })
</script>

<script>

    function CargarBotones(){

        $("#btnMoverCatalogos").click(function(){

            Aparecer();

            

            if ($(this).hasClass("btn-info")) {

                if($('#colPrincipal').hasClass('col-md-8')){
                    $('#colPrincipal').toggleClass('col-md-8 col-md-4');
                    $('#colSecundario').toggleClass('col-md-4 col-md-8');
                }

                Tabla31.$('tr.selected').removeClass('selected');
                // Si tiene la clase 'btn-rojo', eliminarla
                $("#btnMoverCatalogos").removeClass("btn-info").addClass("btn-danger");

                OrdenarCatalogos = 1;

                limpiarArbol();

                fnCargarArbolModulos2();

            } else if ($(this).hasClass("btn-danger")){

                Desaparecer();

                if($('#colSecundario').hasClass('col-md-8')){
                    $('#colPrincipal').toggleClass('col-md-8 col-md-4');
                    $('#colSecundario').toggleClass('col-md-4 col-md-8');
                }


                Tabla31.$('tr.selected').removeClass('selected');
                // Si no tiene la clase 'btn-rojo', agregarla
                $("#btnMoverCatalogos").removeClass("btn-danger").addClass("btn-info");

                OrdenarCatalogos = 0;

                limpiarArbol();

            }

           

        });
        
        $("#btnGuardarCatalogo").click(function(){

            var icono = $("#selIcono_1").val()

            var color = $("#selColor_1").val()

            var nombre = $("#iptNombre_1").val()

            var descripcion = $("#iptDescripcion_1").val()

            if(color === "" || icono === "" || nombre === "" || descripcion ===""){
                Swal.fire({
                    icon: 'warning',
                    title: 'faltan datos por rellenar'
                });

                return 0; 
            }

            var selIcono = document.getElementById('selIcono_1');

            var IconoIndex = selIcono.selectedIndex;

            var icono = selIcono.options[IconoIndex].text;

            var selColor = document.getElementById('selColor_1');

            var ColorIndex = selColor.selectedIndex;

            var color = selColor.options[ColorIndex].text;

            console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion )

            color_catalogo = color;

            icono_catalogo = icono;
            id_catalogo2 = 0;

            GuardarCatalogo(icono, color, nombre, descripcion)

            $("#mdlElegirCategorias").modal("show");
        });

        $("#btnGuardarBotones").click(function(){

            var icono = $("#selIcono_2").val()

            var color = $("#selColor_2").val()

            var padre = $("#selCatalogo_2").val()

            var nombre = $("#iptNombre_2").val()

            var descripcion = $("#iptDescripcion_2").val()

            console.log("padre : "+  padre)

            var id_padre = padre;
            
            $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 29,
                'id_padre': id_padre,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log("respuesta")

                console.log(respuesta[0][0])

                var cantidad = parseInt(respuesta[0][0])

                if(cantidad>=100){

                    Swal.fire({
                            icon: 'warning',
                            title: 'El catalogo esta lleno porfavor, elija o cree un nuevo catalogo'
                    }).then((result) => {

                        return 0; 

                    });

                    

                }else{

                    if(color === "" || icono === "" || nombre === "" || descripcion ==="" || padre ==="" ){
                        Swal.fire({
                            icon: 'warning',
                            title: 'faltan datos por rellenar'
                        });

                        return 0; 
                    }

                    var selIcono = document.getElementById('selIcono_2');

                    var IconoIndex = selIcono.selectedIndex;

                    var icono = selIcono.options[IconoIndex].text;

                    var selColor = document.getElementById('selColor_2');

                    var ColorIndex = selColor.selectedIndex;

                    var color = selColor.options[ColorIndex].text;

                    var selPadre = document.getElementById('selCatalogo_2');

                    var PadreIndex = selPadre.selectedIndex;

                    var padre = selPadre.options[PadreIndex].text;

                    console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion, " " , padre )

                    GuardarBoton(icono, color, nombre, descripcion, padre)


                }



                }
            })

            

        });

        $("#btnEditarBotones").click(function(){

            var icono = $("#selIcono_2").val()

            var color = $("#selColor_2").val()

            var padre = $("#selCatalogo_2").val()

            var nombre = $("#iptNombre_2").val()

            var descripcion = $("#iptDescripcion_2").val()

            if(color === "" || icono === "" || nombre === "" || descripcion ==="" || padre ==="" ){
                Swal.fire({
                    icon: 'warning',
                    title: 'faltan datos por rellenar'
                });

                return 0; 
            }

            var selIcono = document.getElementById('selIcono_2');

            var IconoIndex = selIcono.selectedIndex;

            var icono = selIcono.options[IconoIndex].text;

            var selColor = document.getElementById('selColor_2');

            var ColorIndex = selColor.selectedIndex;

            var color = selColor.options[ColorIndex].text;

            var selPadre = document.getElementById('selCatalogo_2');

            var PadreIndex = selPadre.selectedIndex;

            var padre = selPadre.options[PadreIndex].text;

            console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion, " " , padre )

            GuardarBoton2(icono, color, nombre, descripcion, padre)

        });

        $("#btnEditarCatalogo").click(function(){

            var icono = $("#selIcono_1").val()

            var color = $("#selColor_1").val()

            var nombre = $("#iptNombre_1").val()

            var descripcion = $("#iptDescripcion_1").val()

            if(color === "" || icono === "" || nombre === "" || descripcion ===""){
                Swal.fire({
                    icon: 'warning',
                    title: 'faltan datos por rellenar'
                });

                return 0; 
            }

            var selIcono = document.getElementById('selIcono_1');

            var IconoIndex = selIcono.selectedIndex;

            var icono = selIcono.options[IconoIndex].text;

            var selColor = document.getElementById('selColor_1');

            var ColorIndex = selColor.selectedIndex;

            var color = selColor.options[ColorIndex].text;

            console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion)

            GuardarCatalogo2(icono, color, nombre, descripcion)

        });

        $('#lstCategoriasBotones tbody').on('click', '.btnEliminarCatalogo', function() {

            var data = Tabla11.row($(this).parents('tr')).data();

            var numero = data[1]

            var orden  = data[10]

            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[1] + " - " + data[2] + ' "? si lo hace tambien se eliminaran los productos dentro de el ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {

                if(result.isConfirmed == true){

                    console.log(numero);
                    

                    $.ajax({
                        url: "ajax/ventaRapida.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 18,
                            'numero':numero,
                            'orden':orden, 
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            console.log(respuesta);

                            if(respuesta === "ok"){

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Eliminado correctamente',
                                })

                                Tabla11.ajax.reload()
                                Tabla21.ajax.reload()
                                
                            }
                        },
                        error: function() {
                            // Manejo de errores si la solicitud AJAX falla
                            console.log('Error al cargar las opciones');
                        }
                    });

                    cargarOpciones();
                }
            })
        });

        $('#lstCategoriasBotones tbody').on('click', '.btnAgregarCatalogo', function() {

            var data = Tabla11.row($(this).parents('tr')).data();

            console.log(data);
            
            cantidades_categorias = 0

            var cantidad = data[4]

            var numero = data[1];

            var color = data[8];

            var icono = data[9];

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                id_catalogo2 = 0;

                $("#card-modulos").css("display", "none");

            }else{

                Tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                cantidad_inicial = parseInt(cantidad);

                id_catalogo2 = numero;

                color_catalogo = color;

                icono_catalogo = icono;

                $("#mdlElegirCategorias").modal("show");
                

            }

            
            
        });

        $('#lstProductosBotones tbody').on('click', '.btnEliminarBoton', function() {

            var data = Tabla21.row($(this).parents('tr')).data();

            var numero = data[1]

            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[2] + ' " ? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){

                    $.ajax({
                        url: "ajax/ventaRapida.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 19,
                            'numero':numero, 
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            if(respuesta === "ok"){

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Eliminado correctamente',
                                })

                                Tabla21.ajax.reload()
                                
                            }
                        },
                        error: function() {
                            // Manejo de errores si la solicitud AJAX falla
                            console.log('Error al cargar las opciones');
                        }
                    });
                }
            })
        });

        $('#lstProductosBotones tbody').on('click', '.btnEditarBoton', function() {

            var data = Tabla21.row($(this).parents('tr')).data();

            console.log(data);

            var color = data[6];

            var icono = data[7];

            var catalogo = data[8];

            var nombre = data[2];

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                id_botones = 0;

                var btnEditarBotones = document.getElementById("btnEditarBotones");

                btnEditarBotones.style.display = "none";

                var btnGuardarBotones = document.getElementById("btnGuardarBotones");

                btnGuardarBotones.style.display = "block";

                $("#iptNombre_2").val("")

                $("#iptDescripcion_2").val("")
                
                $("#selIcono_2").val("")

                $("#selCatalogo_2").val("")

                $("#selColor_2").val("")

                $("#card-modulos").css("display", "none");

                var Eleccion ='#iptTextoProducto_2'
                var texto = "Producto #1";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var Eleccion = 'Icono_2' ;
                var Icono = "ion ion-clipboard";

                CambiarIcono(Eleccion,Icono)

                var Eleccion = 'BotonProducto_2' ;
                var Color = "bg-gray";

                CambiarColor(Eleccion,Color)

                
                var Eleccion ='#iptTextoDes_2'
                var texto = "Nombre completo del producto en este caso es el producto emanuel";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


            }else{

                Tabla21.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                id_botones = data[1];

                $("#card-modulos").css("display","block");
                console.log("id Boton: " +id_botones);

                var btnEditarBotones = document.getElementById("btnEditarBotones");

                btnEditarBotones.style.display = "block";

                var btnGuardarBotones = document.getElementById("btnGuardarBotones");

                btnGuardarBotones.style.display = "none";

                

                $("#iptNombre_2").val(nombre)

                $("#iptDescripcion_2").val(data[3])
                
                $("#selIcono_2").val(icono)

                $("#selCatalogo_2").val(catalogo)

                $("#selColor_2").val(color)

                var Eleccion ='#iptTextoProducto_2'
                var texto = nombre;

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var selectElement_2 = document.getElementById('selIcono_2');

                var selectedValue = selectElement_2.value;

                var Eleccion = 'Icono_2' ;
                var Icono = selectedValue;

                CambiarIcono(Eleccion,Icono)

                var selectElement_4 = document.getElementById('selColor_2');

                var selectedValue = selectElement_4.value;

                var Eleccion = 'BotonProducto_2' ;
                var Color = selectedValue;

                CambiarColor(Eleccion,Color)

                var selectElement_5 = document.getElementById('selCatalogo_2');

                var selectedText = selectElement_5.options[selectElement_5.selectedIndex].text;


                if(selectedText === "Seleccione Una Categoria"){
                    $("#lstProductosBotones").DataTable().column(4).search("").draw("");
                }else{
                    filtrarBusqueda(selectedText);
                }

                
                var Eleccion ='#iptTextoDes_2'
                var texto = data[3];

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)
            


            }
        });

        $("#form_carga_productos").on('submit',function(e){

            e.preventDefault();

            /*===================================================================*/
            //VALIDAR QUE SE SELECCIONE UN ARCHIVO
            /*===================================================================*/
            if($("#fileProductos").get(0).files.length == 0){
                Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'Debe seleccionar un archivo (Excel).',
                    showConfirmButton: false,
                    timer: 2500
                })
            }else{

                /*===================================================================*/
                //VALIDAR QUE EL ARCHIVO SELECCIONADO SEA EN EXTENSION XLS O XLSX
                /*===================================================================*/
                var extensiones_permitidas = [".xls",".xlsx"];
                var input_file_productos = $("#fileProductos");
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:])+(" + extensiones_permitidas.join('|') + ")$");

                console.log(exp_reg);
                console.log(input_file_productos.val());
                console.log("hola");

                if(!exp_reg.test(input_file_productos.val().toLowerCase())){
                    Swal.fire({
                        position:'center',
                        icon:'warning',
                        title: 'Debe seleccionar un archivo con extensión .xls o .xlsx.',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    return false;
                }

                var datos = new FormData($(form_carga_productos)[0]);
                
                
                $("#btnCargar").prop("disabled",true);
                $("#img_carga").attr("style","display:on");
                $("#img_carga").attr("style","height:200px");
                $("#img_carga").attr("style","width:200px");

                

                console.log("hola2");

                $.ajax({
                    url:"ajax/catalogos.ajax.php",
                    type:"POST",
                    data:datos,
                    cache:false,
                    contentType:false,
                    processData: false,
                    success:function(accion){


                        
                        if(accion = 1 ){
                        
                            Swal.fire({
                                position:'center',
                                icon:'success',
                                title: 'Se registro correctamente!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");
                        }else{

                            Swal.fire({
                                position:'center',
                                icon:'error',
                                title: 'Se presento un error al momento de realizar el registro de Catalogos y/o productos!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            Tabla11.ajax.reload();
                            Tabla21.ajax.reload();

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");

                        }
                    }
                    
                });

                /*$("#btnCargar").prop("disabled",false);
                $("#img_carga").attr("style","display:none");
                    */
                console.log("adios");

            }
        })

        $('#lstCategoriasOrden tbody').on('click', '.btnElegirCatalogo', function() {

            var data = Tabla31.row($(this).parents('tr')).data();

            

            
                


            Desaparecer();

            limpiarArbol();

            if ($("#btnMoverCatalogos").hasClass("btn-danger")){
                // Si no tiene la clase 'btn-rojo', agregarla
                $("#btnMoverCatalogos").removeClass("btn-danger").addClass("btn-info");

                OrdenarCatalogos = 0;

                limpiarArbol();

            }



            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                id_catalogo = 0;

                if($('#colSecundario').hasClass('col-md-8')){
                    $('#colPrincipal').toggleClass('col-md-8 col-md-4');
                    $('#colSecundario').toggleClass('col-md-4 col-md-8');
                }

                $("#card-modulos").css("display", "none");

            }else{

                cargarImagen_2()

                if($('#colPrincipal').hasClass('col-md-8')){
                    $('#colPrincipal').toggleClass('col-md-8 col-md-4');
                    $('#colSecundario').toggleClass('col-md-4 col-md-8');
                }

                Tabla31.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                id_catalogo = data[1];

                $("#card-modulos").css("display","block");
                console.log("id Perfil: " +id_catalogo);

                fnCargarArbolModulos(id_catalogo)

                Aparecer();
                

                


            }

        });

        $("#btnReordenarModulos").on("click", function(){

            if(OrdenarCatalogos == 0){

                fnOrganizarModulos(id_catalogo);

            }else{

                fnOrganizarModulosCategorias();

            }
            
        })

        $("#btnReiniciar").on("click", function(){
            limpiarArbol();
            fnCargarArbolModulos(id_catalogo);
            DesaparecerImagen_2();
        })

        $('#lstCategorias tbody').on('click', '.btnElegirCategoria', function() {
            var data = Tabla12.row($(this).parents('tr')).data();

            if ($(this).parents('tr').hasClass('selected')) {
                // Si la fila está seleccionada, se deselecciona
                $(this).parents('tr').removeClass('selected');

                // Remover la categoría del array categoriasSeleccionadas
                var index = categoriasSeleccionadas.indexOf(data[1]);
                if (index !== -1) {
                    categoriasSeleccionadas.splice(index, 1);
                }

                // Remover la categoría del array categoriasSeleccionadas2
                var index2 = categoriasSeleccionadas2.indexOf(data[3]);
                if (index2 !== -1) {
                    categoriasSeleccionadas2.splice(index2, 1);
                }

            } else {
                // Si la fila no está seleccionada, se selecciona
                $(this).parents('tr').addClass('selected');

                // Agregar la categoría al array categoriasSeleccionadas si no está ya presente
                if (categoriasSeleccionadas.indexOf(data[1]) === -1) {
                    categoriasSeleccionadas.push(data[1]);
                }

                // Agregar la categoría al array categoriasSeleccionadas2 si no está ya presente
                if (categoriasSeleccionadas2.indexOf(data[3]) === -1) {
                    categoriasSeleccionadas2.push(data[3]);
                }
            }
        });

        $("#btnGuardarCategorias").click(function(){

            console.log("color_catalogo : ", color_catalogo , icono_catalogo)
            
            var data = Tabla11.data();

            

            if(id_catalogo2 == 0){

                id_catalogo2 = data.length

            }
            for(var i = 0; i < categoriasSeleccionadas2.length; i++){
            
                var cantidades = categoriasSeleccionadas2[i]

                var cantidades2 = parseInt(cantidades)

                cantidades_categorias = parseInt(cantidades_categorias) + parseInt(cantidades2)

                console.log("cantidades_categorias : " + cantidades_categorias);

            }

            var total = parseInt(cantidad_inicial) + parseInt(cantidades_categorias);

            console.log("total : " + total)

            if(total > 100){

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Se seleccionaron mas productos de los que se puede agregar en este catalogo'
                });

                $("#mdlElegirCategorias").modal("hide");
                Tabla11.ajax.reload();

                return 0;

            }

            

            

            console.log("Categorías seleccionadas:", categoriasSeleccionadas);
            // Verificar si hay datos en el array categoriasSeleccionadas
            if (categoriasSeleccionadas.length == 0 || id_catalogo2 == 0) {
                // Si no hay datos, mostrar un mensaje de error con SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No has seleccionado ninguna categoría.'
                });
            } else {

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 9,
                        'icono': icono_catalogo,
                        'color' : color_catalogo,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        console.log(respuesta);
                        var id_color = respuesta[0]["id_color"]
                        var id_icono = respuesta[0]["id_icono"]


                        for(var i = 0; i < categoriasSeleccionadas.length; i++){

                            var id_categoria = categoriasSeleccionadas[i]

                            $.ajax({
                                url: "ajax/categorias.ajax.php",
                                method: "POST",
                                data: {
                                    'accion': 4,
                                    'id_categoria': id_categoria,
                                },
                                dataType: 'json',
                                success: function(respuesta) {
                                    // Manejar la respuesta del servidor
                                    console.log(respuesta);

                                    for (var i = 0; i < respuesta.length; i++) {
                                        var nombre = respuesta[i][1];

                                        $.ajax({
                                            url: "ajax/ventaRapida.ajax.php",
                                            method: "POST",
                                            async: false, // Esta opción bloquea la ejecución hasta que la llamada se complete
                                            data: {
                                                'accion': 12,
                                                'nombre': nombre,
                                                'descripcion': nombre,
                                                'id_padre': id_catalogo2,
                                                'id_color': id_color,
                                                'id_icono': id_icono,
                                            },
                                            dataType: 'json',
                                            success: function (respuesta) {
                                                console.log("La acción 4 fue exitosa.");
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Éxito',
                                                    text: 'Categorías guardadas correctamente.'
                                                });
                                                $("#mdlElegirCategorias").modal("hide");
                                                Tabla11.ajax.reload();
                                            },
                                            error: function (xhr, status, error) {
                                                console.error("Error en la petición AJAX:", error);
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Error',
                                                    text: 'Hubo un error al guardar las categorías. Por favor, inténtalo de nuevo más tarde.'
                                                });
                                            }
                                        });
                                    }
                                    

                                },
                                error: function(xhr, status, error) {
                                    // Manejar errores en la petición AJAX
                                    console.error("Error en la petición AJAX:", error);
                                    // Mostrar un mensaje de error al usuario
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Hubo un error al guardar las categorías. Por favor, inténtalo de nuevo más tarde.'
                                    });
                                }
                            });



                            
                        }

                    }
                });

                // // Si hay datos, realizar la acción AJAX
                
            }
        });

        $('#lstCategorias tbody').on('click', '.btnDetallesCategoria', function() {

            var data = Tabla12.row($(this).parents('tr')).data();

            console.log(data[1])
            var id_categoria = data[1];

            AbriryActualizar(id_categoria);
            $("#mdlProductoCategorias").modal("show");

        });

        $('#lstCategoriasBotones tbody').on('click', '.btnEditarBoton', function() {

            var data = Tabla11.row($(this).parents('tr')).data();


            var color = data[6];

            var icono = data[7];

            var nombre = data[2];

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                id_botones_2 = 0;

                var btnEditarCatalogo = document.getElementById("btnEditarCatalogo");

                btnEditarCatalogo.style.display = "none";

                var btnGuardarCatalogo = document.getElementById("btnGuardarCatalogo");

                btnGuardarCatalogo.style.display = "block";

                $("#iptNombre_1").val("")

                $("#iptDescripcion_1").val("")
                
                $("#selIcono_1").val("")

                $("#selColor_1").val("")

                $("#card-modulos").css("display", "none");

                var Eleccion ='#iptTextoCatalogo_1'
                var texto = "Producto #1";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var Eleccion = 'Icono_1' ;
                var Icono = "ion ion-clipboard";

                CambiarIcono(Eleccion,Icono)

                var Eleccion = 'BotonCatalogo_1' ;
                var Color = "bg-gray";

                CambiarColor(Eleccion,Color)

                
                var Eleccion ='#iptTextoDes_1'
                var texto = "Nombre completo del producto en este caso es el producto emanuel";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


            }else{

                Tabla11.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                id_botones_2 = data[1];

                $("#card-modulos").css("display","block");
                console.log("id Catalogo: " +id_botones_2);

                var btnEditarCatalogo = document.getElementById("btnEditarCatalogo");

                btnEditarCatalogo.style.display = "block";

                var btnGuardarCatalogo = document.getElementById("btnGuardarCatalogo");

                btnGuardarCatalogo.style.display = "none";

                

                $("#iptNombre_1").val(nombre)

                $("#iptDescripcion_1").val(data[3])
                
                $("#selIcono_1").val(icono)

                $("#selColor_1").val(color)

                var Eleccion ='#iptTextoCatalogo_1'
                var texto = nombre;

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var selectElement_2 = document.getElementById('selIcono_1');

                var selectedValue = selectElement_2.value;

                var Eleccion = 'Icono_1' ;
                var Icono = selectedValue;

                CambiarIcono(Eleccion,Icono)

                var selectElement_4 = document.getElementById('selColor_1');

                var selectedValue = selectElement_4.value;

                var Eleccion = 'BotonCatalogo_1' ;
                var Color = selectedValue;

                CambiarColor(Eleccion,Color)

                
                var Eleccion ='#iptTextoDes_1'
                var texto = data[3];

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)
            


            }
        });
        

        $('#lstProductosBotonesPopulares tbody').on('click', '.btnEliminarBotonPopular', function() {

            var data = Tabla41.row($(this).parents('tr')).data();

            var numero = data[1]

            Swal.fire({
                icon: 'warning',
                title: ' Seguro de eliminar " ' + data[2] + ' " ? ',
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if(result.isConfirmed == true){

                    $.ajax({
                        url: "ajax/ventaRapida.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 31,
                            'numero':numero, 
                        },
                        dataType: 'json',
                        success: function(respuesta) {

                            if(respuesta === "ok"){

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Eliminado correctamente',
                                })

                                Tabla41.ajax.reload()
                                
                            }
                        },
                        error: function() {
                            // Manejo de errores si la solicitud AJAX falla
                            console.log('Error al cargar las opciones');
                        }
                    });
                }
            })
        });

        $('#lstProductosBotonesPopulares tbody').on('click', '.btnEditarBotonPopular', function() {

            var data = Tabla41.row($(this).parents('tr')).data();

            console.log(data);

            var color = data[6];

            var icono = data[7];

            var catalogo = data[8];

            var nombre = data[2];

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                id_botones_popular = 0;

                var btnEditarBotones = document.getElementById("btnEditarBotonesPopulates");

                btnEditarBotones.style.display = "none";

                var btnGuardarBotones = document.getElementById("btnGuardarBotonesPopulates");

                btnGuardarBotones.style.display = "block";

                $("#iptNombre_3").val("")

                $("#iptDescripcion_3").val("")
                
                $("#selIcono_3").val("")

                $("#selCatalogo_3").val("")

                $("#selColor_3").val("")

                $("#card-modulos").css("display", "none");

                var Eleccion ='#iptTextoProducto_3'
                var texto = "Producto #1";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var Eleccion = 'Icono_3' ;
                var Icono = "ion ion-clipboard";

                CambiarIcono(Eleccion,Icono)

                var Eleccion = 'BotonProducto_3' ;
                var Color = "bg-gray";

                CambiarColor(Eleccion,Color)

                
                var Eleccion ='#iptTextoDes_3'
                var texto = "Nombre completo del producto en este caso es el producto emanuel";

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


            }else{

                Tabla41.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                console.log(data);

                id_botones_popular = data[1];

                $("#card-modulos").css("display","block");
                console.log("id Boton: " +id_botones_popular);

                var btnEditarBotones = document.getElementById("btnEditarBotonesPopulates");

                btnEditarBotones.style.display = "block";

                var btnGuardarBotones = document.getElementById("btnGuardarBotonesPopulates");

                btnGuardarBotones.style.display = "none";

                

                $("#iptNombre_3").val(nombre)

                $("#iptDescripcion_3").val(data[3])
                
                $("#selIcono_3").val(icono)

                $("#selCatalogo_3").val(catalogo)

                $("#selColor_3").val(color)

                var Eleccion ='#iptTextoProducto_3'
                var texto = nombre;

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)


                var selectElement_3 = document.getElementById('selIcono_3');

                var selectedValue = selectElement_3.value;

                var Eleccion = 'Icono_3' ;
                var Icono = selectedValue;

                CambiarIcono(Eleccion,Icono)

                var selectElement_4 = document.getElementById('selColor_3');

                var selectedValue = selectElement_4.value;

                var Eleccion = 'BotonProducto_3' ;
                var Color = selectedValue;

                CambiarColor(Eleccion,Color)

                // var selectElement_5 = document.getElementById('selCatalogo_3');

                // var selectedText = selectElement_5.options[selectElement_5.selectedIndex].text;


                // if(selectedText === "Seleccione Una Categoria"){
                //     $("#lstProductosBotones").DataTable().column(4).search("").draw("");
                // }else{
                //     filtrarBusqueda(selectedText);
                // }

                
                var Eleccion ='#iptTextoDes_3'
                var texto = data[3];

                if(texto === ""){
                    return 0;
                }

                CambiarTexto(Eleccion,texto)
            


            }
        });

        $("#btnGuardarBotonesPopulates").click(function(){

            var icono = $("#selIcono_3").val()

            var color = $("#selColor_3").val()

            var nombre = $("#iptNombre_3").val()

            var descripcion = $("#iptDescripcion_3").val()

            
            $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 32,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log("respuesta")

                console.log(respuesta[0][0])

                var cantidad = parseInt(respuesta[0][0])

                if(cantidad>=100){

                    Swal.fire({
                            icon: 'warning',
                            title: 'El catalogo esta lleno porfavor, elija o cree un nuevo catalogo'
                    }).then((result) => {

                        return 0; 

                    });

                    

                }else{

                    if(color === "" || icono === "" || nombre === "" || descripcion ===""){
                        Swal.fire({
                            icon: 'warning',
                            title: 'faltan datos por rellenar'
                        });

                        return 0; 
                    }

                    var selIcono = document.getElementById('selIcono_3');

                    var IconoIndex = selIcono.selectedIndex;

                    var icono = selIcono.options[IconoIndex].text;

                    var selColor = document.getElementById('selColor_3');

                    var ColorIndex = selColor.selectedIndex;

                    var color = selColor.options[ColorIndex].text;

                    console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion)

                    GuardarBotonPopular(icono, color, nombre, descripcion)


                }



                }
            })

            

        });

        $("#btnEditarBotonesPopulates").click(function(){

            var icono = $("#selIcono_3").val()

            var color = $("#selColor_3").val()

            var nombre = $("#iptNombre_3").val()

            var descripcion = $("#iptDescripcion_3").val()

            if(color === "" || icono === "" || nombre === "" || descripcion ===""){
                Swal.fire({
                    icon: 'warning',
                    title: 'faltan datos por rellenar'
                });

                return 0; 
            }

            var selIcono = document.getElementById('selIcono_3');

            var IconoIndex = selIcono.selectedIndex;

            var icono = selIcono.options[IconoIndex].text;

            var selColor = document.getElementById('selColor_3');

            var ColorIndex = selColor.selectedIndex;

            var color = selColor.options[ColorIndex].text;


            console.log( " hola como estas : " , icono , " " , color , " " , nombre , " " , descripcion)

            GuardarBotonPopular2(icono, color, nombre, descripcion)

        });

    }

    function AbriryActualizar(id_categoria) {
        if ($.fn.DataTable.isDataTable('#lstProductoCategorias')) {
            // Si ya existe una tabla DataTable, destrúyela antes de crear una nueva
            $('#lstProductoCategorias').DataTable().destroy();
        }

        Tabla13 = $("#lstProductoCategorias").DataTable({
            columnDefs: [{
                targets: "_all",
                createdCell: function(td, cellData, rowData, row, col) {
                    // Agregar la clase .text-xl solo a la columna especificada
                    $(td).css('font-family', 'Calibri, sans-serif');
                }
            }],
            lengthMenu: [10, 20, 30, 50],
            'pageLength': 10,
            ajax: {
                url: "ajax/categorias.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 4, // 4: LISTAR PRODUCTOS X CATEGORIAS
                    'id_categoria': id_categoria
                },
            },
            scrollX: true,
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstProductoCategorias'));
            }
        });
    }


    function GuardarCatalogo(icono, color, nombre, descripcion){

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 9,
                'icono': icono,
                'color' : color,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 10,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            Tabla11.ajax.reload();

                            cargarOpciones();
                            
                        }
                    }
                })
                
            }
        })

    }

    function GuardarBoton(icono, color, nombre, descripcion, padre){

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 11,
                'icono': icono,
                'color' : color,
                'padre': padre,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]
                var id_padre = respuesta[0]["id_catalogo"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 12,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                        'id_padre':id_padre,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            Tabla21.ajax.reload();
                            $("#lstProductosBotones").DataTable().column(4).search("").draw("");
                            $("#selCatalogo_2").val("");
                            $("#iptNombre_2").val("")
                            $("#iptDescripcion_2").val("")
                            
                        }
                    }
                })
                
            }
        })

    }

    function GuardarBoton2(icono, color, nombre, descripcion, padre){

        console.log("id_botones : ", id_botones)

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 11,
                'icono': icono,
                'color' : color,
                'padre': padre,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]
                var id_padre = respuesta[0]["id_catalogo"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 26,
                        'id_boton':id_botones,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                        'id_padre':id_padre,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            Tabla21.ajax.reload();
                            $("#lstProductosBotones").DataTable().column(4).search("").draw("");
                            $("#selCatalogo_2").val("");
                            $("#iptNombre_2").val("")
                            $("#iptDescripcion_2").val("")
                            
                        }
                    }
                })
                
            }
        })

    }

    function GuardarBotonPopular(icono, color, nombre, descripcion){

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 33,
                'icono': icono,
                'color' : color,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 34,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            Tabla41.ajax.reload();
                            id_botones_popular = 0;
                            $("#iptNombre_3").val("")
                            $("#iptDescripcion_3").val("")
                            
                        }
                    }
                })
                
            }
        })

    }

    function GuardarBotonPopular2(icono, color, nombre, descripcion){

        console.log("id_botones : ", id_botones)

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 33,
                'icono': icono,
                'color' : color,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 35,
                        'id_boton':id_botones_popular,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            var btnEditarBotones = document.getElementById("btnEditarBotonesPopulates");

                            btnEditarBotones.style.display = "none";

                            var btnGuardarBotones = document.getElementById("btnGuardarBotonesPopulates");

                            btnGuardarBotones.style.display = "block";

                            Tabla41.ajax.reload();
                            id_botones_popular = 0;
                            $("#iptNombre_3").val("")
                            $("#iptDescripcion_3").val("")
                            
                        }
                    }
                })
                
            }
        })

    }

    function GuardarCatalogo2(icono, color, nombre, descripcion){

        console.log("id_botones : ", id_botones_2)

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            method: "POST",
            data: {
                'accion': 27,
                'icono': icono,
                'color' : color,
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log(respuesta);
                var id_color = respuesta[0]["id_color"]
                var id_icono = respuesta[0]["id_icono"]

                $.ajax({
                    url: "ajax/ventaRapida.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 28,
                        'id_boton':id_botones_2,
                        'id_color': id_color,
                        'id_icono' : id_icono,
                        'nombre' : nombre,
                        'descripcion' : descripcion,
                    },
                    dataType: 'json',
                    success: function(respuesta) {

                        if(respuesta === "ok"){

                            Toast.fire({
                                icon: 'success',
                                title: ' Se agrego correctamente ',
                            })

                            Tabla11.ajax.reload();
                            var btnEditarCatalogo = document.getElementById("btnEditarCatalogo");

                            btnEditarCatalogo.style.display = "none";

                            var btnGuardarCatalogo = document.getElementById("btnGuardarCatalogo");

                            btnGuardarCatalogo.style.display = "block";

                            $("#iptNombre_1").val("")

                            $("#iptDescripcion_1").val("")
                            
                            $("#selIcono_1").val("")

                            $("#selColor_1").val("")

                            $("#card-modulos").css("display", "none");

                            var Eleccion ='#iptTextoCatalogo_1'
                            var texto = "Producto #1";

                            if(texto === ""){
                                return 0;
                            }

                            CambiarTexto(Eleccion,texto)


                            var Eleccion = 'Icono_1' ;
                            var Icono = "ion ion-clipboard";

                            CambiarIcono(Eleccion,Icono)

                            var Eleccion = 'BotonCatalogo_1' ;
                            var Color = "bg-gray";

                            CambiarColor(Eleccion,Color)

                            
                            var Eleccion ='#iptTextoDes_1'
                            var texto = "Nombre completo del producto en este caso es el producto emanuel";

                            if(texto === ""){
                                return 0;
                            }

                            CambiarTexto(Eleccion,texto)
                            
                        }
                    }
                })
                
            }
        })

    }

    function CambiarIcono(Eleccion,Icono){

        var icono = document.getElementById(Eleccion);
        icono.innerHTML = '<i class="' +Icono + '"></i>';

    }

    function CambiarColor(Eleccion,Color){

        var elemento = document.getElementById(Eleccion);

        // Obtener la lista de clases del elemento
        var clases = elemento.classList;
        // Convertir la lista de clases a un array
        var clasesArray = Array.from(clases);
        // Imprimir el array de clases en la consola
        console.log("Clases del elemento:", clasesArray);

        // Cambiar las clases del elemento
        elemento.classList.remove(clasesArray[1]);
        elemento.classList.add(Color);

    }

    function CambiarTexto(Eleccion,texto){

        $(Eleccion).text(texto)

    }

    function CargarTables(){
        
        Tabla11= $("#lstCategoriasBotones").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnAgregarCatalogo text-success px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-plus fs-2'></i>" +
                                "</span>" +
                                "<span class='btnEditarBoton text-blue px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {

                    targets: 6,
                    visible:false,
                },
                {

                    targets: 7,
                    visible:false,
                },
                {

                    targets: 8,
                    visible:false,
                },
                {

                    targets: 9,
                    visible:false,
                },
                {

                    targets: 10,
                    visible:false,
                },

                {

                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarCatalogo text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-2'></i>" +
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
            'pageLength': 20,
            ajax: {
                url: "ajax/ventaRapida.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 6 //6: LISTAR CATEGORIAS
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
                ajustarHeadersDataTables($('#lstCategoriasBotones'));
            }
        });

        Tabla21= $("#lstProductosBotones").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarBoton text-blue px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {

                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarBoton text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {

                    targets: 4,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return data + "."

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

                    targets: [6,7,8],
                    visible:false,
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/ventaRapida.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 7 // 7: LISTAR BOTONES
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
                ajustarHeadersDataTables($('#lstProductosBotones'));
            }
        });

        Tabla31= $("#lstCategoriasOrden").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnElegirCatalogo text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-2'></i>" +
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
            'pageLength': 20,
            ajax: {
                url: "ajax/ventaRapida.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 6 //6: LISTAR CATEGORIAS
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
                ajustarHeadersDataTables($('#lstCategoriasOrden'));
            }
        });

        Tabla12= $("#lstCategorias").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnElegirCategoria text-blue px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {

                    targets: 4,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnDetallesCategoria text-yellow px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-search fs-2'></i>" +
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
                    targets: [3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = parseInt(data);

                        if(formattedData > 0){
                            return '<span style="font-weight: bold; color: green;">' + formattedData + '</span>';
                        }else{
                            return '<span style="font-weight: bold; color: red;">' + formattedData + '</span>';
                        }
                        
                    }
                },

                {
                    targets: [1],
                    visible: false,
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/categorias.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 3 //3: LISTAR CATEGORIAS
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
                ajustarHeadersDataTables($('#lstCategorias'));
            }
        });

        Tabla41 = $("#lstProductosBotonesPopulares").DataTable({

            columnDefs: [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEditarBotonPopular text-blue px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-check fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                {

                    targets: 5,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarBotonPopular text-red px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-2'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },

                {

                    targets: 4,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return data + "."

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

                    targets: [6,7,8],
                    visible:false,
                },
            ],
            lengthMenu: [10,20, 30, 50],
            'pageLength': 20,
            ajax: {
                url: "ajax/ventaRapida.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 30 // 7: LISTAR BOTONES
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
                ajustarHeadersDataTables($('#lstProductosBotonesPopulares'));
            }
        });


    }

    function accionesSeleccion(){
        var selectElement_1 = document.getElementById('selIcono_1');

        // Agregar un evento 'change' al elemento select
        selectElement_1.addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedValue = selectElement_1.value;
            // Mostrar el valor seleccionado en la consola
            console.log("Valor seleccionado:", selectedValue);
            var Eleccion = 'Icono_1' ;
            var Icono = selectedValue;

            CambiarIcono(Eleccion,Icono)
        });

        var selectElement_2 = document.getElementById('selIcono_2');

        // Agregar un evento 'change' al elemento select
        selectElement_2.addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedValue = selectElement_2.value;
            // Mostrar el valor seleccionado en la consola
            console.log("Valor seleccionado:", selectedValue);
            var Eleccion = 'Icono_2' ;
            var Icono = selectedValue;

            CambiarIcono(Eleccion,Icono)
        });

        var selectElement_7 = document.getElementById('selIcono_3');

        // Agregar un evento 'change' al elemento select
        selectElement_7.addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedValue = selectElement_7.value;
            // Mostrar el valor seleccionado en la consola
            console.log("Valor seleccionado:", selectedValue);
            var Eleccion = 'Icono_3' ;
            var Icono = selectedValue;

            CambiarIcono(Eleccion,Icono)
        });

        var selectElement_4 = document.getElementById('selColor_2');

        // Agregar un evento 'change' al elemento select
        selectElement_4.addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedValue = selectElement_4.value;
            // Mostrar el valor seleccionado en la consola
            console.log("Valor seleccionado:", selectedValue);
            var Eleccion = 'BotonProducto_2' ;
            var Color = selectedValue;

            CambiarColor(Eleccion,Color)
        });

        var selectElement_6 = document.getElementById('selColor_3');

        // Agregar un evento 'change' al elemento select
        selectElement_6.addEventListener('change', function() {
            // Obtener el valor seleccionado
            var selectedValue = selectElement_6.value;
            // Mostrar el valor seleccionado en la consola
            console.log("Valor seleccionado:", selectedValue);
            var Eleccion = 'BotonProducto_3' ;
            var Color = selectedValue;

            CambiarColor(Eleccion,Color)
        });

        var selectElement_5 = document.getElementById('selCatalogo_2');

        selectElement_5.addEventListener('change', function() {
            // Obtener el texto de la opción seleccionada
            var selectedText = selectElement_5.options[selectElement_5.selectedIndex].text;
            // Mostrar el texto seleccionado en la consola
            console.log("Texto seleccionado:", selectedText);

            if(selectedText === "Seleccione Una Categoria"){
                $("#lstProductosBotones").DataTable().column(4).search("").draw("");
            }else{
                filtrarBusqueda(selectedText);
            }


            //filtrarBusqueda(selectedText); // Llama a la función filtrarBusqueda con el texto seleccionado
        });
    }

    function accionesTexto(){
        var iptNombre_1 = document.getElementById('iptNombre_1');

        // Añadimos un evento 'change' al campo iptNombre_1
        iptNombre_1.addEventListener('change', function(event) {
            // Obtenemos el valor cambiado
            const nuevoValor = event.target.value;
            // Mostramos el valor en la consola
            console.log("Se cambió el nombre a: ", nuevoValor);
            var Eleccion ='#iptTextoCatalogo_1'
            var texto = nuevoValor;

            if(texto === ""){
                return 0;
            }

            CambiarTexto(Eleccion,texto)
        });

        var iptDescripcion_1 = document.getElementById('iptDescripcion_1');

        // Añadimos un evento 'change' al campo iptDescripcion_1
        iptDescripcion_1.addEventListener('change', function(event) {
            // Obtenemos el valor cambiado
            const nuevoValor = event.target.value;
            // Mostramos el valor en la consola
            console.log("Se cambió la descripcion: ", nuevoValor);
            var Eleccion ='#iptTextoDes_1'
            var texto = nuevoValor;
            
            if(texto === ""){
                return 0;
            }

            CambiarTexto(Eleccion,texto)
        });

        var iptNombre_2 = document.getElementById('iptNombre_2');

        // Añadimos un evento 'change' al campo iptNombre_2
        iptNombre_2.addEventListener('change', function(event) {
            // Obtenemos el valor cambiado
            const nuevoValor = event.target.value;
            // Mostramos el valor en la consola
            console.log("Se cambió el nombre a: ", nuevoValor);
            var Eleccion ='#iptTextoProducto_2'
            var texto = nuevoValor;

            if(texto === ""){
                return 0;
            }

            CambiarTexto(Eleccion,texto)
        });

        var iptDescripcion_2 = document.getElementById('iptDescripcion_2');

        // Añadimos un evento 'change' al campo iptDescripcion_2
        iptDescripcion_2.addEventListener('change', function(event) {
            // Obtenemos el valor cambiado
            const nuevoValor = event.target.value;
            // Mostramos el valor en la consola
            console.log("Se cambió la descripcion: ", nuevoValor);
            var Eleccion ='#iptTextoDes_2'
            var texto = nuevoValor;

            if(texto === ""){
                return 0;
            }

            CambiarTexto(Eleccion,texto)
        });
    }

    function cargarOpciones(){
        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, 
            },
            dataType: 'json',
            success: function(respuesta) {
                var selectIcono1 = document.getElementById("selIcono_1");
                var selectIcono2 = document.getElementById("selIcono_2");
                var selectIcono3 = document.getElementById("selIcono_3");

                // console.log("esto es de cargarOpciones : ", respuesta);

                // Vaciar opciones existentes (si las hay)
                selectIcono1.innerHTML = '<option value="">Seleccione Un Icono</option>';
                selectIcono2.innerHTML = '<option value="">Seleccione Un Icono</option>';
                selectIcono3.innerHTML = '<option value="">Seleccione Un Icono</option>';

                for (var i = 0; i < respuesta.length; i++) {
                    var value = respuesta[i]["codigo_icono"];
                    var text = respuesta[i]["nombre_icono"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option1 = document.createElement('option');
                    option1.value = value;
                    option1.text = text;

                    var option2 = document.createElement('option');
                    option2.value = value;
                    option2.text = text;

                    var option3 = document.createElement('option');
                    option3.value = value;
                    option3.text = text;

                    selectIcono1.appendChild(option1);
                    selectIcono2.appendChild(option2);
                    selectIcono3.appendChild(option3);
                }
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            type: 'POST',
            data: {
                'accion': 6, 
            },
            dataType: 'json',
            success: function(respuesta) {

                var selectIcono2 = document.getElementById("selCatalogo_2");

                selectIcono2.innerHTML = '<option value="">Seleccione Una Categoria</option>';

                for (var i = 0; i < respuesta.length; i++) {
                    var value = respuesta[i]["id_catalogo"];
                    var text = respuesta[i]["nombre"];

                    // Agregar las nuevas opciones desde la respuesta AJAX

                    var option2 = document.createElement('option');
                    option2.value = value;
                    option2.text = text;

                    selectIcono2.appendChild(option2);
                }
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });

        $.ajax({
            url: "ajax/ventaRapida.ajax.php",
            type: 'POST',
            data: {
                'accion': 8, 
            },
            dataType: 'json',
            success: function(respuesta) {
                var selectIcono1 = document.getElementById("selColor_1");
                var selectIcono2 = document.getElementById("selColor_2");
                var selectIcono3 = document.getElementById("selColor_3");

                // console.log("esto es de cargarOpciones : ", respuesta);

                // Vaciar opciones existentes (si las hay)
                selectIcono1.innerHTML = '<option value="">Seleccione Un Color</option>';
                selectIcono2.innerHTML = '<option value="">Seleccione Un Color</option>';
                selectIcono3.innerHTML = '<option value="">Seleccione Un Color</option>';

                for (var i = 0; i < respuesta.length; i++) {
                    var value = respuesta[i]["codigo_color"];
                    var text = respuesta[i]["nombre_color"];

                    // Agregar las nuevas opciones desde la respuesta AJAX
                    var option1 = document.createElement('option');
                    option1.value = value;
                    option1.text = text;

                    var option2 = document.createElement('option');
                    option2.value = value;
                    option2.text = text;

                    var option3 = document.createElement('option');
                    option3.value = value;
                    option3.text = text;

                    selectIcono1.appendChild(option1);
                    selectIcono2.appendChild(option2);
                    selectIcono3.appendChild(option3);
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

    function cargarProductosAJAX() {

        

            $.ajax({
                async: false,
                url: "ajax/ventaRapida.ajax.php",
                method: "POST",
                data: {
                    'accion': 13
                },
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptDescripcion_2").autocomplete({
                        
                        source: respuesta,
                        select: function (event, ui) {
                            console.log(ui.item.value)
                            CargarProductos(ui.item.value);
                            $("#iptDescripcion_2").blur()
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

                    // // Manejar evento de teclas al navegar por la lista
                    // $("#iptDescripcion_2").on("keydown", function (event) {
                    //     if (event.which === 40) {
                    //         // Flecha abajo, enfocar el siguiente elemento de la lista
                    //         $(".ui-autocomplete-row:focus").next(".ui-autocomplete-row").focus();
                    //     } else if (event.which === 38) {
                    //         // Flecha arriba, enfocar el elemento anterior de la lista
                    //         $(".ui-autocomplete-row:focus").prev(".ui-autocomplete-row").focus();
                    //     }
                    // });

                    // // Configurar el evento de apertura de la lista para asegurarse de que la opción seleccionada sea visible
                    // $("#iptDescripcion_2").on("autocompleteopen", function (event, ui) {
                    //     var selected = $(".ui-autocomplete-row.ui-state-focus");
                    //     if (selected.length) {
                    //         // Si hay un elemento enfocado, asegurarse de que sea visible
                    //         var ul = $(this).autocomplete("widget");
                    //         var itemHeight = selected.outerHeight();
                    //         var scrollTop = ul.scrollTop();
                    //         var top = selected.position().top;

                    //         if (top + itemHeight > ul.height()) {
                    //             // Si el elemento está fuera de la vista por abajo, desplazarse hacia abajo
                    //             ul.scrollTop(scrollTop + top + itemHeight - ul.height());
                    //         } else if (top < 0) {
                    //             // Si el elemento está fuera de la vista por arriba, desplazarse hacia arriba
                    //             ul.scrollTop(scrollTop + top);
                    //         }
                    //     }
                    // });
                },
            });

            $.ajax({
                async: false,
                url: "ajax/ventaRapida.ajax.php",
                method: "POST",
                data: {
                    'accion': 13
                },
                dataType: 'json',
                success: function (respuesta) {
                    $("#iptDescripcion_3").autocomplete({
                        
                        source: respuesta,
                        select: function (event, ui) {
                            console.log(ui.item.value)
                            CargarProductos2(ui.item.value);
                            $("#iptDescripcion_3").blur()
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

                    // // Manejar evento de teclas al navegar por la lista
                    // $("#iptDescripcion_3").on("keydown", function (event) {
                    //     if (event.which === 40) {
                    //         // Flecha abajo, enfocar el siguiente elemento de la lista
                    //         $(".ui-autocomplete-row:focus").next(".ui-autocomplete-row").focus();
                    //     } else if (event.which === 38) {
                    //         // Flecha arriba, enfocar el elemento anterior de la lista
                    //         $(".ui-autocomplete-row:focus").prev(".ui-autocomplete-row").focus();
                    //     }
                    // });

                    // // Configurar el evento de apertura de la lista para asegurarse de que la opción seleccionada sea visible
                    // $("#iptDescripcion_3").on("autocompleteopen", function (event, ui) {
                    //     var selected = $(".ui-autocomplete-row.ui-state-focus");
                    //     if (selected.length) {
                    //         // Si hay un elemento enfocado, asegurarse de que sea visible
                    //         var ul = $(this).autocomplete("widget");
                    //         var itemHeight = selected.outerHeight();
                    //         var scrollTop = ul.scrollTop();
                    //         var top = selected.position().top;

                    //         if (top + itemHeight > ul.height()) {
                    //             // Si el elemento está fuera de la vista por abajo, desplazarse hacia abajo
                    //             ul.scrollTop(scrollTop + top + itemHeight - ul.height());
                    //         } else if (top < 0) {
                    //             // Si el elemento está fuera de la vista por arriba, desplazarse hacia arriba
                    //             ul.scrollTop(scrollTop + top);
                    //         }
                    //     }
                    // });
                },
            });

        
       
    }

    function CargarProductos(valor){
        $("#iptDescripcion_2").val(valor)
    }

    function CargarProductos2(valor){
        $("#iptDescripcion_3").val(valor)
    }

    function filtrarBusqueda(selectedText){
        selectedText = selectedText + "."
        $("#lstProductosBotones").DataTable().column(4).search(selectedText).draw();
    }

    function fnCargarArbolModulos(id_catalogo){

        var dataSource;

        $. ajax({
            async:false,
            url:"ajax/ventaRapida.ajax.php",
            method: 'POST',
            data: {
                accion: 21,
                id_catalogo: id_catalogo,
            },
            dataType: 'json',
            success: function (respuesta){
                dataSource = respuesta;

                matrizOriginal = respuesta; 

                // Matrices para elementos impares y pares
                var impares = [];
                var pares = [];

                // Iterar sobre la matriz original y distribuir los elementos
                for (var i = 0; i < matrizOriginal.length; i++) {
                    if (i % 2 === 0) {
                        impares.push(matrizOriginal[i]);
                    } else {
                        pares.push(matrizOriginal[i]);
                    }
                }

                

                console.log('Matriz de elementos impares:');
                console.log(impares);
                console.log('Matriz de elementos pares:');
                console.log(pares);
                console.log('Matriz Original:');
                console.log(matrizOriginal);

                console.log(dataSource);

                // Inicializar el árbol de jstree con los datos obtenidos
                $("#arbolModulos").jstree({
                    "core": {
                        "check_callback":true,
                        "data": impares
                    },
                    "types":{
                        "default":{
                            "icon":"fas fa-adjust"
                        },
                        "file":{
                            "icon":"fas fa-adjust"
                        }
                    },
                    "plugins": ["types","dnd"]
                }).bind("ready.jstree", function(e,data){
                    $('#arbolModulos').jstree('open_all');
                });

                // Inicializar el árbol de jstree con los datos obtenidos
                $("#arbolModulos2").jstree({
                    "core": {
                        "check_callback":true,
                        "data": pares
                    },
                    "types":{
                        "default":{
                            "icon":"fas fa-adjust"
                        },
                        "file":{ 
                            "icon":"fas fa-adjust"
                        }
                    },
                    "plugins": ["types","dnd"]
                }).bind("ready.jstree", function(e,data){
                    $('#arbolModulos2').jstree('open_all');
                });

                DesaparecerImagen_2();
            }
        });

    }

    function fnCargarArbolModulos2(){

        var dataSource;

        $. ajax({
            async:false,
            url:"ajax/ventaRapida.ajax.php",
            method: 'POST',
            data: {
                accion: 24,
            },
            dataType: 'json',
            success: function (respuesta){
                dataSource = respuesta;

                matrizOriginal = respuesta; 

                // Matrices para elementos impares y pares
                var impares = [];
                var pares = [];

                // Iterar sobre la matriz original y distribuir los elementos
                for (var i = 0; i < matrizOriginal.length; i++) {
                    if (i % 2 === 0) {
                        impares.push(matrizOriginal[i]);
                    } else {
                        pares.push(matrizOriginal[i]);
                    }
                }

                

                console.log('Matriz de elementos impares:');
                console.log(impares);
                console.log('Matriz de elementos pares:');
                console.log(pares);
                console.log('Matriz Original:');
                console.log(matrizOriginal);

                console.log(dataSource);

                // Inicializar el árbol de jstree con los datos obtenidos
                $("#arbolModulos").jstree({
                    "core": {
                        "check_callback":true,
                        "data": impares
                    },
                    "types":{
                        "default":{
                            "icon":"fas fa-adjust"
                        },
                        "file":{
                            "icon":"fas fa-adjust"
                        }
                    },
                    "plugins": ["types","dnd"]
                }).bind("ready.jstree", function(e,data){
                    $('#arbolModulos').jstree('open_all');
                });

                // Inicializar el árbol de jstree con los datos obtenidos
                $("#arbolModulos2").jstree({
                    "core": {
                        "check_callback":true,
                        "data": pares
                    },
                    "types":{
                        "default":{
                            "icon":"fas fa-adjust"
                        },
                        "file":{ 
                            "icon":"fas fa-adjust"
                        }
                    },
                    "plugins": ["types","dnd"]
                }).bind("ready.jstree", function(e,data){
                    $('#arbolModulos2').jstree('open_all');
                });

                DesaparecerImagen_2();
            }
        });

    }

    function cargarImagen_2(){
        $("#img_carga_2").attr("style","display:on");
        $("#img_carga_2").attr("style","height:200px");
        $("#img_carga_2").attr("style","width:200px");
    }

    function DesaparecerImagen_2(){
        $("#img_carga_2").attr("style","display:none");
    }

    function fnOrganizarModulos(id_catalogo){

        console.log(id_catalogo)
          
        var array_modulos = [];
        var reg_id, reg_padre_id, reg_orden;
        var v = $("#arbolModulos").jstree(true).get_json("#",{"flat":true});
        console.log("v : ", v);

        var v2 = $("#arbolModulos2").jstree(true).get_json("#",{"flat":true});

        console.log("v2 : ", v2)

        // Fusionar las matrices impares y pares en el orden especificado
        var matrizFusionada = [];

        if(v.length > v2.length){
            for (var j = 0; j < v.length; j++) {

                if (v[j] !== undefined) {
                    matrizFusionada.push(v[j]);
                }

                if (v2[j] !== undefined) {
                    matrizFusionada.push(v2[j]);
                }

            }
        }else{
            for (var j = 0; j < v2.length; j++) {

                if (v[j] !== undefined) {
                    matrizFusionada.push(v[j]);
                }

                if (v2[j] !== undefined) {
                    matrizFusionada.push(v2[j]);
                }

            }
        }
        
        console.log("matriz antes: ")
        console.log( matrizFusionada)

        for(var i = 0; i < matrizOriginal.length; i++) {

            for(var j = 0; j < matrizFusionada.length; j++) {

                if(matrizOriginal[i][2] === matrizFusionada[j]["text"]){
                    matrizFusionada[j]["id"] = matrizOriginal[i][0]
                }

            }

        }

        console.log("matriz corregida: ")
        console.log( matrizFusionada)

        for(i = 0; i<matrizFusionada.length ; i++){
            var z =matrizFusionada[i];
            console.log("v[i] : ",matrizFusionada[i]);
            reg_id= z["id"];
            reg_padre_id = z["parent"];
            reg_orden = id_catalogo * 100 + i + 1; 
            array_modulos[i] = reg_id + ";" + reg_padre_id + ";" + reg_orden;
        }

        console.log(array_modulos);

        $.ajax({
            async:false,
            url:"ajax/ventaRapida.ajax.php",
            method: 'POST',
            data: {
                accion: 22,
                modulos: array_modulos,
            },
            dataType: 'json',
            success: function (respuesta){
                if(respuesta>0){
                    Swal.fire({
                        position:"center",
                        icon: "success",
                        title:"Se registro correctamente",
                        showConfirmButton: false,
                        timer: 1200
                    })

                    Tabla31.ajax.reload();

                    limpiarArbol();
                    fnCargarArbolModulos(id_catalogo);

                }else{
                    Swal.fire({
                        position:"center",
                        icon: "error",
                        title:"Error al registrar",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        });



    }

    function fnOrganizarModulosCategorias(){
          
        var array_modulos = [];
        var reg_id, reg_padre_id, reg_orden;
        var v = $("#arbolModulos").jstree(true).get_json("#",{"flat":true});
        console.log("v : ", v);

        var v2 = $("#arbolModulos2").jstree(true).get_json("#",{"flat":true});

        console.log("v2 : ", v2)

        // Fusionar las matrices impares y pares en el orden especificado
        var matrizFusionada = [];

        if(v.length > v2.length){
            for (var j = 0; j < v.length; j++) {

                if (v[j] !== undefined) {
                    matrizFusionada.push(v[j]);
                }

                if (v2[j] !== undefined) {
                    matrizFusionada.push(v2[j]);
                }

            }
        }else{
            for (var j = 0; j < v2.length; j++) {

                if (v[j] !== undefined) {
                    matrizFusionada.push(v[j]);
                }

                if (v2[j] !== undefined) {
                    matrizFusionada.push(v2[j]);
                }

            }
        }
        
        console.log("matriz antes: ")
        console.log( matrizFusionada)

        for(var i = 0; i < matrizOriginal.length; i++) {

            for(var j = 0; j < matrizFusionada.length; j++) {

                if(matrizOriginal[i][2] === matrizFusionada[j]["text"]){
                    matrizFusionada[j]["id"] = matrizOriginal[i][0]
                }

            }

        }

        console.log("matriz corregida: ")
        console.log( matrizFusionada)

        for(i = 0; i<matrizFusionada.length ; i++){
            var z =matrizFusionada[i];
            console.log("v[i] : ",matrizFusionada[i]);
            reg_id= z["id"];
            reg_padre_id = z["parent"];
            reg_orden = id_catalogo * 100 + i + 1; 
            array_modulos[i] = reg_id + ";" + reg_padre_id + ";" + reg_orden;
        }

        console.log(array_modulos);

        $.ajax({
            async:false,
            url:"ajax/ventaRapida.ajax.php",
            method: 'POST',
            data: {
                accion: 25,
                modulos: array_modulos,
            },
            dataType: 'json',
            success: function (respuesta){
                if(respuesta>0){
                    Swal.fire({
                        position:"center",
                        icon: "success",
                        title:"Se registro correctamente",
                        showConfirmButton: false,
                        timer: 1200
                    })

                    Tabla31.ajax.reload();

                    limpiarArbol();
                    fnCargarArbolModulos2();

                }else{
                    Swal.fire({
                        position:"center",
                        icon: "error",
                        title:"Error al registrar",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        });



    }

    function limpiarArbol() {
        if ($("#arbolModulos").text().trim().length > 0) {
            $("#arbolModulos").jstree("destroy");
        }
        if ($("#arbolModulos2").text().trim().length > 0) {
            $("#arbolModulos2").jstree("destroy");
        }
    }

    function Desaparecer(){
        document.getElementById('cuadrado').classList.add('d-none'); 
    }

    function Aparecer(){
        document.getElementById('cuadrado').classList.remove('d-none');
    }
</script>