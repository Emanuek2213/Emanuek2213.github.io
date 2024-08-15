<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Administrar Módulos y Perfiles</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="#">Inicio</a>
                    </li>

                    <li class="breadcrumb-item active">Administrar Módulos y Perfiles</li>

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div>

</div>

<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

            <li class="nav-item">
                <a class="nav-link" id="content-perfiles-tab" data-toggle="pill" href="#content-perfiles" role="tab" aria-controls="content-perfiles" aria-selected="false">Perfiles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " id="content-modulos-tab" data-toggle="pill" href="#content-modulos" role="tab" aria-controls="content-modulos" aria-selected="false">Modulos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" id="content-modulo-perfil-tab" data-toggle="pill" href="#content-modulo-perfil" role="tab" aria-controls="content-modulo-perfil" aria-selected="false">Asignar Modulo a Perfil</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade mt-4 px-4" id="content-perfiles" role="tabpanel" aria-labelledby="content-perfiles-tab">
                <h4>Administrar Perfiles</h4>

                <div class = "row">
                            
                            <div class = "col-lg-9"> 

                                
                            </div>

                            <div class = "col-lg-4">

                                <div class="card card-gray shadow" style="border: 1px solid black;"  >
                                    <div class="card-body p-3">

                                        <form method="post" class="needs-validation-registro-perfil" novalidate id="frm_registro_perfil">

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

            <!--============================================================================================================================================
            CONTENIDO PARA MODULOS 
            =============================================================================================================================================-->
            <div class="tab-pane fade  mt-4 px-4" id="content-modulos" role="tabpanel" aria-labelledby="content-modulos-tab">

                <div class="row">

                    <!--LISTADO DE MODULOS -->
                    <div class="col-md-6">

                        <div class="card card-gray shadow">

                            <div class="card-header">

                                <h3 class="card-title"><i class="fas fa-list"></i> Listado de Módulos</h3>

                            </div>

                            <div class="card-body">

                                <table id="tblModulos" class="display nowrap table-striped shadow rounded" style="width:100%">

                                    <thead class="bg-gray text-left">
                                        <th class="text-center">Acciones</th>
                                        <th>id</th>
                                        <th>orden</th>
                                        <th>Módulo</th>
                                        <th>Módulo Padre</th>
                                        <th>Vista</th>
                                        <th>Icono</th>
                                        <th>F. Creación</th>
                                        <th>F. Actualización</th>
                                    </thead>
                                    <tbody class="small text left">

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>
                    <!--/. col-md-6 -->

                    <!--FORMULARIO PARA REGISTRO Y EDICION -->
                    <div class="col-md-3">

                        <div class="card card-gray shadow">

                            <div class="card-header">

                                <h3 class="card-title"><i class="fas fa-edit"></i> Registro de Módulos</h3>

                            </div>

                            <div class="card-body">

                                <form method="post" class="needs-validation-registro-modulo" novalidate id="frm_registro_modulo">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group mb-2">

                                                <label for="iptModulo" class="m-0 p-0 col-sm-12 col-form-label-sm"><span class="small">Módulo</span><span class="text-danger">*</span></label>

                                                <div class="input-group  m-0">
                                                    <input type="text" class="form-control form-control-sm" name="iptModulo" id="iptModulo" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-gray"><i class="fas fa-laptop text-white fs-6"></i></span>
                                                    </div>
                                                    <div class="invalid-feedback">Debe ingresar el módulo</div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group mb-2">

                                                <label for="iptVistaModulo" class="m-0 p-0 col-sm-12 col-form-label-sm"><span class="small">Vista PHP</span></label>
                                                <div class="input-group  m-0">
                                                    <input type="text" class="form-control form-control-sm" name="iptVistaModulo" id="iptVistaModulo">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-gray"><i class="fas fa-code text-white fs-6"></i></span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group mb-2">

                                                <label for="iptIconoModulo" class="m-0 p-0 col-sm-12 col-form-label-sm"><span class="small">Icono</span><span class="text-danger">*</span></label>
                                                <div class="input-group  m-0">
                                                    <input type="text" placeholder="<i class='far fa-circle'></i>" name="iptIconoModulo" class="form-control form-control-sm" id="iptIconoModulo" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-gray" id="spn_icono_modulo"><i class="far fa-circle fs-6 text-white"></i></span>
                                                    </div>
                                                    <div class="invalid-feedback">Debe ingresar el ícono del módulo</div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group m-0 mt-2">

                                                <button type="button" class="btn btn-success w-100" id="btnRegistrarModulo">Guardar Módulo</button>

                                            </div>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                    <!--/. col-md-3 -->

                    <!--ARBOL DE MODULOS PARA REORGANIZAR -->
                    <div class="col-md-3">

                        <div class="card card-gray shadow">

                            <div class="card-header">

                                <h3 class="card-title"><i class="fas fa-edit"></i> Organizar Módulos</h3>

                            </div>

                            <div class="card-body">

                                <div class="">

                                    <div>Modulos del Sistema</div>

                                    <div class="" id="arbolModulos"></div>

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

                        </div>

                    </div>
                    <!--/. col-md-3 -->

                </div>
                <!--/.row -->

            </div><!-- /#content-modulos -->

            <div class="tab-pane fade active show mt-4 px-4" id="content-modulo-perfil" role="tabpanel" aria-labelledby="content-modulo-perfil-tab">

                <div class="row">

                    <div class="col-md-8">

                        <div class="card card-gray shadow">

                            <div class="card-header">

                                <h3 class="card-title"><i class="fas fa-list"></i> Listado de Perfiles</h3>

                            </div>

                            <div class="card-body">

                                <table id="tbl_perfiles_asignar" class="display nowrap table-striped w-100 shadow rounded">

                                    <thead class="bg-gray text-left">
                                        <th></th>
                                        <th>id Perfil</th>
                                        <th>Perfil</th>
                                        <th>Estado</th>
                                        <th>F. Creación</th>
                                        <th>F. Actualización</th>
                                        <th class="text-center">Opciones</th>
                                    </thead>

                                    <tbody class="small text left">

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="card card-gray shadow" style="display:none" id="card-modulos">

                            <div class="card-header">

                                <h3 class="card-title"><i class="fas fa-laptop"></i> Módulos del Sistema</h3>

                            </div>

                            <div class="card-body" id="card-body-modulos">

                                <div class="row m-2">

                                    <div class="col-md-6">

                                        <button class="btn btn-success btn-small  m-0 p-0 w-100" id="marcar_modulos">Marcar todo</button>

                                    </div>

                                    <div class="col-md-6">

                                        <button class="btn btn-danger btn-small m-0 p-0 w-100" id="desmarcar_modulos">Desmarcar todo</button>

                                    </div>

                                </div>

                                <!-- AQUI SE CARGAN TODOS LOS MODULOS DEL SISTEMA -->
                                <div id="modulos" class="demo"></div>

                                <div class="row m-2">

                                    <div class="col-md-12">

                                        <div class="form-group">

                                            <label>Seleccione el modulo de inicio</label>
                                            <select class="custom-select" id="select_modulos">
                                            </select>

                                        </div>

                                    </div>

                                </div>

                                <div class="row m-2">

                                    <div class="col-md-12">

                                        <button class="btn btn-success btn-small w-50 text-center" id="asignar_modulos">Asignar</button>

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
 <!-- /.content -->

<script>

    var tbl_perfiles_asignar, modulos_usuario, modulos_sistema;

    $(document).ready(function(){
        CargarDataTable();

        /*==============================================================================
        VARIABLES PARA REGISTRAR EL PREFIL Y LOS MODULOS
        ==============================================================================*/

        var idPerfil = 0;
        var selectedElmsIds=[];

        $("#select_modulos").append($("<option>",{
                value: 0,
                text: "--No hay modulos seleccionados--"
            }));

        $('#tbl_perfiles_asignar tbody').on('click', '.btnSeleccionarPerfil', function(){
            var data = tbl_perfiles_asignar.row($(this).parents('tr')).data();

        

            if ($(this).parents('tr').hasClass('selected')) {

                $(this).parents('tr').removeClass('selected');

                $('#modulos').jstree("deselect_all", false);

                $("#select_modulos option").remove();

                idPerfil = 0;

                $("#card-modulos").css("display", "none");

            }else{

                tbl_perfiles_asignar.$('tr.selected').removeClass('selected');

                $(this).parents('tr').addClass('selected');

                //console.log(data);

                idPerfil = data[1];

                $("#card-modulos").css("display","block");
                //console.log("id Perfil: " +idPerfil);

                $.ajax({
                    async:false,
                    url:"ajax/modulo.ajax.php",
                    method: 'POST',
                    data: {
                        accion: 2,
                        id_perfil: idPerfil
                    },
                    dataType: 'json',
                    success: function (respuesta){
                        //console.log(respuesta);
                        modulos_usuario = respuesta;

                        seleccionarModulosPerfil(idPerfil);
                    }
                })


            }
        })

        $("#modulos").on("changed.jstree", function(evt,data){
            $("#select_modulos option").remove();

            var selectedElms = $('#modulos').jstree("get_selected",true);

            //console.log(selectedElms);
            $.each(selectedElms, function(){
                for(let i = 0; i< modulos_sistema.length; i++){
                    if( modulos_sistema[i]["id"]==this.id && modulos_sistema[i]["vista"]){
                        
                        $('#select_modulos').append($('<option>',{
                            value: this.id,
                            text: this.text
                        }));
                    }
                }
            })

            if($("#select_modulos").has("option").length <= 0){
                $("#select_modulos").append($("<option>",{
                    value: 0,
                    text: "--No hay modulos seleccionados--"
                }));
            }

        })

         /*==============================================================================
        EVENTO PARA MARCAR TODOS LOS CHECKBOX DEL ARBOL DE MODULOS
        ==============================================================================*/

        $("#marcar_modulos").on("click", function(){
            $("#modulos").jstree("select_all")
        })

         /*==============================================================================
        EVENTO PARA DESMARCAR TODOS LOS CHECKBOX DEL ARBOL DE MODULOS
        ==============================================================================*/

        $("#desmarcar_modulos").on("click", function(){
            $("#modulos").jstree("deselect_all", false);
            $("#select_modulos option").remove();

            $("#select_modulos").append($("<option>",{
                value: 0,
                text: "--No hay modulos seleccionados--"
            }));
        })

         /*==============================================================================
        REGISTRO EN BASE DE DATOS DE LOS MODULOS ASOCIADOS AL PERFIL
        ==============================================================================*/
        $ ("#asignar_modulos").on('click', function() {

            alert("entro al evento")
            selectedElmsIds = []
            var selectedElms = $('#modulos').jstree("get_selected", true);

            $.each(selectedElms, function() {

                selectedElmsIds.push(this.id);

                if (this.parent != "#") {
                    selectedElmsIds.push(this.parent);
                }

            });

            //quitamos valores duplicados
            let modulosSeleccionados = [...new Set(selectedElmsIds)];

            let modulo_inicio = $("#select_modulos").val();

            console.log(modulosSeleccionados);

            if (idPerfil != 0 && modulosSeleccionados.length > 0) {
                registrarPerfilModulos(modulosSeleccionados, idPerfil, modulo_inicio);
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar el perfil y módulos a registrar',
                    showConfirmButton: false,
                    timer: 3000
                })
            }
        })

         /*==============================================================================
        EVENTO PARA MARCAR TODOS LOS CHECKBOX DEL ARBOL DE MODULOS
        ==============================================================================*/

        $("#btnReordenarModulos").on("click", function(){
            fnOrganizarModulos();
        })


         /*==============================================================================
        EVENTO PARA MARCAR TODOS LOS CHECKBOX DEL ARBOL DE MODULOS
        ==============================================================================*/

        $("#btnReiniciar").on("click", function(){
            actualizarArbolModulos();
        })

         /*==============================================================================
        VISTA PREVIA DEL ICONO DE LA VISTA
        ==============================================================================*/

        $("#iptIconoModulo").change(function(){
            $("#spn_icono_modulo").html($("#iptIconoModulo").val())
            
            var long = parseInt($("#iptIconoModulo").val().length);

            console.log(long);
            if(long == 0 ){
                $("#spn_icono_modulo i").html("<i class ='far fa-circle'></i>")
            }
        })

         /*==============================================================================
        EVENTO QUE GUARDA LOS DATOS DEL MODELO
        ==============================================================================*/
        document.getElementById("btnRegistrarModulo").addEventListener("click", function(){
            fnRegistrarModulo();
        })

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

        /*==============================================================================
        ================================================================================
        ================================================================================
        MANTENIMIENTO DE MODULOS
        ================================================================================
        ================================================================================
        ==============================================================================*/
        cargarDataTables();
        ajustarHeadersDataTables($('#tblModulos'));
        ajustarHeadersDataTables($('#tblUsuarios'));
        iniciarArbolModulos();
        fnCargarArbolModulos();

        function cargarDataTables(){

            tbl_perfiles_asignar = $('#tbl_perfiles_asignar').DataTable({
                
                ajax:{
                    async: false,
                    url: "ajax/perfil.ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    dataSrc: "",
                    data:{
                        accion: 1
                    }

                },
            
                
                columnDefs:[{
                        targets:3,
                        sortable: false,
                        createdCell: function(td, cellData, rowData, row, col){
                            if(parseInt(rowData[2])==1){
                                $(td).html("Activo")
                            }else{
                                $(td).html("Inactivo")
                            }
                        } 
                    },{
                        targets: 0,
                        visible:false,
                    },{
                        
                    targets: 6,
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
                }
            });

            tbl_modulos = $('#tblModulos').DataTable({
                ajax:{
                    async: false,
                    url: "ajax/modulo.ajax.php",
                    type: 'POST',
                    dataType: 'json',
                    dataSrc: "",
                    data:{
                        'accion': 3
                    }

                },
                columnDefs:[
                    {
                        targets:7,
                        visible: false,
                        
                    },
                    {
                        targets:8,
                        visible: false,
                    },
                    {
                        
                        targets: 0,
                        sortable: false,
                        render: function(data, type, full, meta) {
                                return "<center>" +
                                    "<span class='btnSeleccionarModulo text-primary px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Modulo'>" +
                                    "<i class='fas fa-edit fs-6'></i>" +
                                    "</span>" +
                                    "<span class='btnEliminarModulo text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Eliminar Modulo'>" +
                                    "<i class='fas fa-trash fs-6'></i>" +
                                    "</span>" +
                                    "</center>"
                            
                                }
                    }
                ],
                scrollX:true,
                order:[
                    [2,'asc']
                ],
                lengthMenu:[0,5,10,15,20,50],
                pageLength:20,
                language :{
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });

        }

        function iniciarArbolModulos(){
            $. ajax({
                async:false,
                url:"ajax/modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 1
                },
                dataType: 'json',
                success: function (respuesta){
                    modulos_sistema = respuesta;
                    //console.log(respuesta);
                    //incline data demo
                    $('#modulos').jstree({
                        'core':{
                            "check_callback":true,
                            'data': respuesta
                        },
                        "checkbox":{
                            "keep_selected_style":false
                        },
                        "types":{

                            "default":{
                                "icon":"fas fa-laptop text-warning"
                            }

                        },
                        "plugins":["wholerow", "checkbox", "types", "changed"]
                    }).bind("loaded.jstree", function(event, data){
                        $(this).jstree("open_all");
                    });
                }
            });
        }
        
        function seleccionarModulosPerfil(pin_idPerfil){

            
            $("#modulos").jstree('deselect_all');
            for (let i = 0; i< modulos_sistema.length; i++){
                console.log(modulos_usuario[i]["id"] + " es igual a : " + modulos_sistema[i]["id"] + " y sel es : " + modulos_usuario[i]["sel"] );

                if(modulos_sistema[i]["id"] == modulos_usuario[i]["id"] && modulos_usuario[i]["sel"] == 1){
                    $("#modulos").jstree("select_node", modulos_sistema[i]["id"]);
                }
            }

            if(pin_idPerfil == 1){
                $("#modulos").jstree(true).hide_node(16);   
            }else{
                $("#modulos").jstree(true).show_all();
            }
        }
        
        function registrarPerfilModulos(modulosSeleccionados, idPerfil, idModulo_inicio){


            $.ajax({
                async: false,
                url: "ajax/perfil_modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 1,
                    id_modulosSeleccionados: modulosSeleccionados,
                    id_Perfil: idPerfil,
                    id_modulo_inicio: idModulo_inicio
                },
                dataType: 'json',
                success: function(respuesta) {
                    console.log(respuesta);
                    if (respuesta > 0) {

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Se registro correctamente',
                            showConfirmButton: false,
                            timer: 2000
                        })

                        $("#select_modulos option").remove();
                        $('#modulos').jstree("deselect_all", false);
                        tbl_perfiles_asignar.ajax.reload();
                        $("#card-modulos").css("display", "none");

                    }else {

                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Error al registrar',
                            showConfirmButton: false,
                            timer: 3000
                        })

                    }

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


        /*==============================================================================
        ================================================================================
        ================================================================================
        MANTENIMIENTO DE MODULOS
        ================================================================================
        ================================================================================
        ==============================================================================*/
        function fnCargarArbolModulos(){

            var dataSource;

            $. ajax({
                async:false,
                url:"ajax/modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 1
                },
                dataType: 'json',
                success: function (respuesta){
                    dataSource = respuesta;
                }
            });

            /*
            $.jstree.defaults.core.check_callback:
                Determina lo que sucede cuando un usuario intenta modificar la estructura del arbol,
                si se deja como false se impide todas las operaciones como crear, renombrar, eliminar, mover o copiar
                Puede configurar esto en true para permitir todas las interacciones o usar una function para tener un mejor control
            */

            $("#arbolModulos").jstree({
                "core": {
                    "check_callback":true,
                    "data": dataSource
                },
                "types":{
                    "default":{
                        "icon":"fas fa-laptop "
                    },
                    "file":{
                        "icon":"fas fa-laptop"
                    }
                },
                "plugins": ["types","dnd"]
            }).bind("ready.jstree", function(e,data){
                $('#arbolModulos').jstree('open_all')
            })


        }


        function actualizarArbolModulos(){
            $.ajax({
                async:false,
                url:"ajax/modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 1
                },
                dataType: 'json',
                success: function (respuesta){
                    $("#arbolModulos").jstree(true).settings.core.data = respuesta;
                    $("#arbolModulos").jstree(true).refresh();
                }
            })
        }

        function fnOrganizarModulos(){
          
            var array_modulos = [];
            var reg_id, reg_padre_id, reg_orden;
            var v = $("#arbolModulos").jstree(true).get_json("#",{"flat":true});
            console.log("v : ", v);

            for(i = 0; i<v.length ; i++){

                var z =v[i];
                console.log("v[i] : ",v[i]);

                reg_id= z["id"];
                reg_padre_id = z["parent"];
                reg_orden = i; 

                array_modulos[i] = reg_id + ";" + reg_padre_id + ";" + reg_orden;

            }

            $.ajax({
                async:false,
                url:"ajax/modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 4,
                    modulos: array_modulos
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

                        tbl_modulos.ajax.reload();

                        actualizarArbolModulosPerfiles();
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

        function actualizarArbolModulosPerfiles(){
            $.ajax({
                async:false,
                url:"ajax/modulo.ajax.php",
                method: 'POST',
                data: {
                    accion: 1
                },
                dataType: 'json',
                success: function (respuesta){

                    modulos_sistema = respuesta;
                    $("#arbolModulos").jstree(true).settings.core.data = respuesta;
                    $("#arbolModulos").jstree(true).refresh();
                }
            });
        }

        function fnRegistrarModulo(){
            var forms = document.getElementsByClassName('needs-validation-registro-modulo');
            var validation = Array.prototype.filter.call(forms, function(form){
                if(form.checkValidity() === true){
                    console.log("listo para registrar el producto");

                    Swal.fire({
                        title: "¿Está seguro de registrar el producto?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "¡Sí, deseo hacerlo!",
                        cancelButtonText: "Cancelar",
                    }).then((result) => {

                        if (result.isConfirmed){

                            $("#iptIconoModulo").val($("#spn_icono_modulo i").attr("class"));

                            console.log($("#frm_registro_modulo").serialize());

                            $.ajax({
                                async: false,
                                url: "ajax/modulo.ajax.php",
                                method: "POST",
                                data:{
                                    accion:5,
                                    datos: $("#frm_registro_modulo").serialize()
                                },
                                dataType: "json",
                                success: function(respuesta){
                                    
                                    console.log(respuesta)

                                    Swal.fire({
                                        position: "center",
                                        icon: "success",
                                        title: respuesta,
                                        showConfirmButton:false,
                                        timer: 1500
                                    })

                                    tbl_modulos.ajax.reload();

                                    actualizarArbolModulos();

                                    actualizarArbolModulosPerfiles();

                                    $("#iptModulo").val("");
                                    $("#iptVistaModulo").val("");
                                    $("#iptIconoModulo").val("");

                                    $(".needs-validation-registro-modulo").removeClass("was-validated");
                                }

                            })

                        }
                    });
                }

                form.classList.add("was-validated");
            })
        }


        /*==============================================================================
        ================================================================================
        ================================================================================
        MANTENIMIENTO DE PERFILES
        ================================================================================
        ================================================================================
        ==============================================================================*/
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
                    }
                });

        }

        function RegistrarUsuario(){
            var forms = document.getElementsByClassName('needs-validation-registro-perfil');
            var validation = Array.prototype.filter.call(forms, function(form){
                if(form.checkValidity() === true){

                    Swal.fire({
                            title: "¿Está seguro de registrar el producto?",
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
                                                $(".needs-validation-registro-perfil").removeClass("was-validated");
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

        
    })
 </script>

 <script>
    //document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
 </script>