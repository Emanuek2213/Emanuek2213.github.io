<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h4 class="m-0">Categorías</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Productos</li>
                    <li class="breadcrumb-item active">Categorías</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">
    <div class="row p-0 m-0">

        <!--LISTADO DE CATEGORIAS -->
        <div class="col-md-8">
            <div class="card card-gray card-outline shadow " >
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-list"></i> Listado de Categorias</h3>
                </div>
                <div class="card-body">
                    <table id="lstCategorias" class="display nowrap table-striped w-100 shadow rounded" style="border: 1px solid black;">
                        <thead class="bg-gray text-left fs-6">
                            <th>id</th>
                            <th>Categoría</th>
                            <th>Medida</th>
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

         <!--FORMULARIO PARA REGISTRO Y EDICION -->
        <div class="col-md-4">
            <div class="card card-gray card-outline shadow" style="border: 1px solid black;">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i> Registro de Categorías</h3>
                </div>
                <div class="card-body">

                    <form class="needs-validation" novalidate>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group mb-2">
                                    
                                    <label  class="col-form-label" for="iptCategoria">
                                        <i class="fas fa-dumpster fs-6"></i>
                                        <span class="small">Categoria</span><span class="text-danger">*</span>
                                    </label>
                                    
                                    <input type="text" class="form-control form-control-sm" id="iptCategoria"
                                        name="iptCategoria" placeholder="Ingrese la Categoría" required>
                                    
                                    <div class="invalid-feedback">Debe ingresar la categoría</div>

                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group mb-2">

                                    <!-- <label  class="col-form-label" for="selMedida">
                                        <i class="fas fa-file-alt fs-6"></i>
                                        <span class="small">Medida</span><span class="text-danger">*</span>
                                    </label>
                                    
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="selMedida" required>
                                        <option value="">--Seleccione una medida--</option>
                                        <option value="0">Unidades</option>
                                        <option value="1">Kilogramos</option>
                                    </select> -->
                                    
                                    <div class="invalid-feedback">Seleccione una medida</div>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group m-0 mt-2">
                                    <a style="cursor:pointer;"
                                        class="btn btn-success btn-sm w-100"
                                        id="btnRegistrarCategoria">Registrar Categoría
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="mdlEditarCatalogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Editar Catalogo</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">
                </button>
            </div>

            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        
                        <label  class="col-form-label" for="iptEditarCategoria">
                            <i class="fas fa-dumpster fs-6"></i>
                            <span class="small">Categoria</span><span class="text-danger">*</span>
                        </label>
                        
                        <input type="text" class="form-control form-control-sm" id="iptEditarCategoria"
                            name="iptEditarCategoria" placeholder="Ingrese la Categoría" required>
                        
                        <div class="invalid-feedback">Debe ingresar la categoría</div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnCambiarNombre">Cambiar Nombre</button>
            </div>

        </div>
    </div>
</div> -->

<script> var encendido = 20;

        var Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000
        });
        
        $(document).ready(function() {

             //variables para registrar o editar la categoria
            var idCategoria = 0;        
            var categoria = "";
            var medida = "";

            var tableCategorias = $('#lstCategorias').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength',
                ],
                ajax: {
                    url: 'ajax/categorias.ajax.php',
                    dataSrc: ""
                },
                columnDefs: [
                    {
                        targets: 2,
                        visible:false,
                        sortable: false,
                        createdCell: function(td, cellData, rowData, row, col) {

                            if (parseInt(rowData[2]) == 0) {
                                $(td).html("Und(s)")
                            } else {
                                $(td).html("Kg(s)")
                            }

                        }
                    },
                    {
                        targets: 5,
                        sortable: false,
                        render: function(data, type, full, meta) {
                            return "<center>" +
                                        "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Editar Categoría'> " +
                                        "<i class='fas fa-pencil-alt fs-5'></i> " +
                                        "</span> " +
                                        "<span class='btnEliminarCategoria text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar Categoría'> " +
                                        "<i class='fas fa-trash fs-5'> </i> " +
                                        "</span>" +
                                "</center>";
                        }
                    }
                ],
                "order": [[ 0, 'desc' ]],
                lengthMenu: [0, 5, 10, 15, 20, 50],
                "pageLength": 15,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            });

            $('#lstCategorias tbody').on('click', '.btnEditarCategoria', function() {

                var data = tableCategorias.row($(this).parents('tr')).data();

                if ($(this).parents('tr').hasClass('selected')) {

                    $(this).parents('tr').removeClass('selected');

                    idCategoria = 0;
                    $("#iptCategoria").val("");
                    // $("#selMedida").val("");
                    var btnRegistrarCategoria = document.getElementById('btnRegistrarCategoria');

                    btnRegistrarCategoria.classList.remove('btn-info');
                    btnRegistrarCategoria.classList.add('btn-success');

                    btnRegistrarCategoria.textContent = 'Registrar Categoría';

                }else{

                    tableCategorias.$('tr.selected').removeClass('selected');                    
                    $(this).parents('tr').addClass('selected'); 

                    idCategoria = data[0];
                    $("#iptCategoria").val(data[1]);

                    var btnRegistrarCategoria = document.getElementById('btnRegistrarCategoria');

                    btnRegistrarCategoria.classList.remove('btn-success');
                    btnRegistrarCategoria.classList.add('btn-info');

                    btnRegistrarCategoria.textContent = 'Cambiar Nombre';
                    // $("#selMedida").val(data[2]);
                    

                    
                }
            })

            $('#lstCategorias tbody').on('click', '.btnEliminarCategoria', function() {

                var data = tableCategorias.row($(this).parents('tr')).data();

                var id_categoria = data[0];

                Swal.fire({
                    title: 'Está seguro de eliminar la categoría ' + data[1] +'?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar!',
                    cancelButtonText: 'Cancelar!',
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            async:false,
                            url:"ajax/categorias.ajax.php",
                            method: 'POST',
                            data: {
                                'accion': 6, //1: LISTAR PRODUCTOS
                                'id_categoria': id_categoria,
                            },
                            dataType: 'json',
                            success: function (respuesta){
                                console.log(respuesta)

                                if(respuesta == "OK"){
                                    Toast.fire({
                                            icon: 'success',
                                            title: "Eliminado con Exito"
                                        });
                                }else if(respuesta.length > 0){
                                    Toast.fire({
                                            icon: 'error',
                                            title: "ERROR: no se pudo eliminar"
                                        });
                                }

                                tableCategorias.ajax.reload();
                            }
                        })
                        
                    }
                })
            })
            

            document.getElementById("btnRegistrarCategoria").addEventListener("click", function() {

                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {

                    if (form.checkValidity() === true) { 
                        
                        categoria = $("#iptCategoria").val();
                        medida = 1

                        var datos = new FormData();

                        datos.append("idCategoria",idCategoria);
                        datos.append("categoria",categoria);
                        datos.append("medida",medida);
                        
                        Swal.fire({
                            title: 'Está seguro de guardar la categoría?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Aceptar!',
                            cancelButtonText: 'Cancelar!',
                        }).then((result) => {

                            if (result.isConfirmed) {
                                console.log(datos);
                                $.ajax({
                                    url: "ajax/categorias.ajax.php",
                                    type: "POST",
                                    data: datos,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    success:function(respuesta){

                                        Toast.fire({
                                            icon: 'success',
                                            title: respuesta
                                        });
                                        
                                        idCategoria = 0;
                                        categoria = "";
                                        medida = "";

                                        $("#iptCategoria").val("");
                                        // $("#selMedida").val("");

                                        tableCategorias.ajax.reload();
                                        $(".needs-validation").removeClass("was-validated");
                                    }
                                });
                            }
                        })
                    }

                    form.classList.add('was-validated');

                })
                
            });
        })
</script><script>

//document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>