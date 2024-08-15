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
                 <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Transferencia Interna 2</h1>
                 <?php echo '<h6>Bienvenido, ' . $nombreCompleto . '!</h6>';?>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Agente</li>
                     <li class="breadcrumb-item active">Tranf. Interna</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid" id = "contenedor_de_transferencias">

        <!-- row TABLA DE MOVIMIENTOS AGENTE-->
        <div class="row">

            <div class="col-lg-12">

                <div class="card card-gray shadow" style="border: 1px solid black;">
                    <div class="card-header">
                        <h3 class="card-title">NUEVA TRANSFERENCIA INTERNA</h3>
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
                                        id="selDonador"  data-index="5" required >
                                           
                                            
                                        </select>
                                        <label for="selDonador">Donador</label>
                                    </div>

                                    <div style="width: 25%;" class="form-floating mx-1">
                                        <input type="number" id="iptMonto" class="form-control" data-index="6">
                                        <label for="iptMonto">Monto</label>
                                    </div>

                                    
                                    
                                    

                                    <div style="width: 25%;" class="form-floating mx-1">
                                        
                                        <select class="form-select form-select-sm"
                                        id="selReceptor" data-index="7" required >
                                            
                                        </select>
                                        <label for="selReceptor">Receptor</label>
                                    </div>

                                    <div class="col-lg-3">
                                        <!-- small box -->
                                        <div style="cursor: pointer;" class="small-box bg-indigo" data-toggle="modal" id="btnRegistrar" tabindex="0">
                                            <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">REGISTRAR</span></h4>
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <div class="d-block d-sm-none">

                                    <div style="width: 100%;" class="form-floating mx-1">
                                        
                                        <select class="form-select form-select-sm"
                                        id="selDonador"  data-index="5" required >
                                            
                                        </select>
                                        <label for="selDonador">Donador</label>
                                    </div>

                                    <div style="width: 100%;" class="form-floating mx-1">
                                        <input type="number" id="iptMonto" class="form-control" data-index="6">
                                        <label for="iptMonto">Monto</label>
                                    </div>

                                    
                                    
                                    

                                    <div style="width: 100%;" class="form-floating mx-1">
                                        
                                        <select class="form-select form-select-sm"
                                        id="selReceptor" data-index="7" required >
                                            
                                        </select>
                                        <label for="selReceptor">Receptor</label>
                                    </div>
                            </div>

                            

                        </div>


                        <div class="row">

                            <div class="d-none d-md-flex col-md-12 ">
      
                                    <div style="width: 25%;" class="form-floating mx-1">
                                        <input type="text" id="iptDescripcion" class="form-control" data-index="6">
                                        <label for="iptDescripcion">Descripcion</label>
                                    </div>
                            </div>

                            <div class="d-block d-sm-none">  

                                    <div style="width: 100%;" class="form-floating mx-1">
                                        <input type="text" id="iptDescripcion" class="form-control" data-index="6">
                                        <label for="iptDescripcion">Descripcion</label>
                                    </div>

                            </div>

                            

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>


         <!-- row TABLA DE MOVIMIENTOS AGENTE-->
         <div class="row">

            <div class="col-lg-12">

                <div class="card card-gray shadow" style="border: 1px solid black;">
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
                                    <input type="text" id="iptDonadorAgente" class="form-control" data-index="2">
                                    <label for="iptDonadorAgente">D.Agente</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptDonadorCuenta" class="form-control" data-index="3">
                                    <label for="iptDonadorCuenta">D.Cuenta</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptReceptorAgente" class="form-control" data-index="5">
                                    <label for="iptReceptorAgente">R.Agente</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptReceptorCuenta" class="form-control" data-index="6">
                                    <label for="iptReceptorCuenta">R.Cuenta</label>
                                </div>

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

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptDonadorAgente" class="form-control" data-index="2">
                                    <label for="iptDonadorAgente">D.Agente</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptDonadorCuenta" class="form-control" data-index="3">
                                    <label for="iptDonadorCuenta">D.Cuenta</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptReceptorAgente" class="form-control" data-index="5">
                                    <label for="iptReceptorAgente">R.Agente</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptReceptorCuenta" class="form-control" data-index="6">
                                    <label for="iptReceptorCuenta">R.Cuenta</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptDineroDesde" class="form-control">
                                    <label for="iptDineroDesde">M. Desde</label>
                                </div>

                                <div style="width: 100%;" class="form-floating mx-1">
                                    <input type="text" id="iptDineroHasta" class="form-control">
                                    <label for="iptDineroHasta">M. Hasta</label>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-3 ">
                            <button id="btnBorrarDatos" class="small-box bg-indigo" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Borrar Datos</span></button>
                            </div>

                            <div class="col-lg-6 mt-3 ">
                            <button id="btnCargarExcelHoy" class="small-box bg-success" ><span style="font-style: italic; font-weight: bold;  padding: 10px;">Reporte del dia de hoy</span></button>
                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

            </div>

            <div class="row">

                <div class="card card-gray shadow" style="border: 1px solid black;">
                    <div class="card-body p-3">
                        <div class="col-lg-12">       
                            <table  id="tbl_transferencia" class="table table-striped w-100 shadow">
                                <thead class="bg-gray text-left fs-6" >
                                    <tr style="font-size: 15px;">
                                        <th></th>
                                        <th>Numero</th>
                                        <th>D.Agente</th>
                                        <th>D.Cuenta</th>
                                        <th>Monto</th>
                                        <th>R.Agente</th>
                                        <th>R.Cuenta</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
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

     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

 <script> 
    var encendido = 20;
    var cuentas = [];
    var excel_transferencias;
        var excel_movimientos;
    $(document).ready(function() {

        document.getElementById('selDonador').focus();

        cargarMatrizCuentas()
        
        cargarOpciones();
        
        // Maneja la navegación con la tecla "Enter"
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                // Obtiene el elemento actual con el foco
                var currentElement = document.activeElement;

                // Obtiene una lista de elementos a navegar
                var elementsToNavigate = [
                    document.getElementById('selDonador'),
                    document.getElementById('iptMonto'),
                    document.getElementById('selReceptor'),
                    document.getElementById('btnRegistrar')
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

        document.getElementById('btnRegistrar').addEventListener('keydown', function(e) {
            if (e.key === ' ' || e.key === 'Spacebar') {
                e.preventDefault();
                // Realizar la acción deseada cuando se presiona la barra espaciadora
                // Por ejemplo, simular un clic en el botón
                document.getElementById('btnRegistrar').click();
            }
        });
        cargarOpciones()
        cargarPagina();

        var btnRegistrar= document.getElementById("btnRegistrar");

    

        btnRegistrar.addEventListener("click", function() {

            var donador = document.getElementById("selDonador").value;
            var monto = document.getElementById("iptMonto").value;
            var receptor = document.getElementById("selReceptor").value;
            var Descripcion = document.getElementById("iptDescripcion").value;

            console.log("donador: ", donador , " receptor: " , receptor);

            if(monto == ""){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else if(parseFloat(monto) < 0 ){
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese un monto valido'
                });

            }else{
                
                var palabrasd = donador.split(" - ");
                var palabrasr = receptor.split(" - ");


                if (palabrasd.length >= 2 && palabrasr.length >= 2 ) {
                    var AgenteD = palabrasd[0];
                    var CuentaD = palabrasd[1];

                    console.log("DONADOR: "+ AgenteD + "_" +CuentaD);

                    var AgenteR = palabrasr[0];
                    var CuentaR = palabrasr[1];
                    console.log("RECEPTOR : " + AgenteR + "-" +CuentaR);
                    console.log("Monto : " + monto);
                    var Montof = parseFloat(monto);
                    var Transferencia = Montof.toFixed(2);
                    console.log("Transferencia : " + Transferencia);
                    

                    RegistrarTransferencia(AgenteD,CuentaD,AgenteR,CuentaR,Transferencia,Descripcion);
                    
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'No se pudo hacer la transferencia'
                    });
                }
                
                document.getElementById("selDonador").value = "BCPPrincipal";
                document.getElementById("iptMonto").value = "";
                document.getElementById("selReceptor").value = "BCPPrincipal";
                document.getElementById("iptDescripcion").value = "";
            }
            
            
            

        });

        var btnExcel = document.getElementById("btnCargarExcelHoy");

        btnExcel.addEventListener("click", function() {
            DarExcel();
        })
    })
    
    function RegistrarTransferencia(AgenteD,CuentaD,AgenteR,CuentaR,Transferencia,Descripcion){
        
        
            
            $.ajax({
                url: "ajax/registro_agente.ajax.php",
                type: 'POST',
                data: {
                    'accion': 10, //parametro para obtener las ventas del mes
                    'AgenteD':AgenteD,
                    'CuentaD':CuentaD,
                    'AgenteR':AgenteR,
                    'CuentaR':CuentaR,
                    'Transferencia':Transferencia,
                    'Descripcion':Descripcion
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
                            title: 'Registrado correctamente',
                            showConfirmButton: false,
                            timer: 2500
                        })

                        destruir_tabla();

                        cargarPagina();

                        cargarOpciones()
                    }


                }
            });


        
        
    }

    function CargarCuentas() {
        var selectCuentaDonador = document.getElementById("selDonador");
        var selectCuentaReceptor = document.getElementById("selReceptor");

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
                                    var element = selectCuentaDonador.querySelector("option[value='" + cuentas[j][0] + " - " + cuentas[j][1][k] + "']");
                                    var elementR = selectCuentaReceptor.querySelector("option[value='" + cuentas[j][0] + " - " + cuentas[j][1][k] + "']");
                                    if (element && elementR) {
                                        element.textContent = " " + cuentas[j][0] + " - " + cuentas[j][1][k] + " : .s/" + parseFloat(respuesta[i]["MontoActual"]).toFixed(2);
                                        elementR.textContent = " " + cuentas[j][0] + " - " + cuentas[j][1][k] + " : .s/" + parseFloat(respuesta[i]["MontoActual"]).toFixed(2);
                                    }
                                }
                            }
                        }
                    }
                }

            }
        })
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

        table = $("#tbl_transferencia").DataTable({
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
                        'accion': 8 //parametro para obtener las ventas del mes
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

                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'color': 'red',
                                'font-weight': 'bold',
                                'text-align': 'center'
                            });
                        }
                    },
                    {
                        targets: 3,

                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'color': 'red',
                                'text-align': 'center'
                            });
                        }
                    },
                    
                    {
                        targets: 4,
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
                        targets: 5,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'color': 'green',
                                'text-align': 'center'
                            });
                        }
                    },

                    {
                        targets: 6,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'color': 'green',
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
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return "<center>" +
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

        $("#iptDonadorAgente").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptDonadorCuenta").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#iptReceptorAgente").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptReceptorCuenta").keyup(function() {
            table.column($(this).data('index')).search(this.value).draw();
        })

        /*$("#iptDia").attr("readonly", true);

        
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
        }) */

        /*===================================================================*/
        // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
        /*===================================================================*/
        $("#iptDineroDesde, #iptDineroHasta").keyup(function() {
            table.draw();
        })
        if ($('#contenedor_de_transferencias').is(':visible')) {
            $.fn.dataTable.ext.search.push(

                function(settings, data, dataIndex) {

                    if (settings.nTable.id !== 'tbl_transferencia') {
                        return true; // Si no es el DataTable específico, permite que la fila pase el filtro
                    }

                    var precioDesde = parseFloat($("#iptDineroDesde").val());
                    var precioHasta = parseFloat($("#iptDineroHasta").val());

                    console.log(data[2])
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
        }

        $("#btnBorrarDatos").click(function() {
            $("#iptDonadorAgente").val("");
            $("#iptDonadorCuenta").val("");

            $("#iptReceptorAgente").val("");
            $("#iptReceptorCuenta").val("");
            
            $("#iptDineroDesde").val("");
            $("#iptDineroHasta").val("");

            table.column($("#iptDonadorAgente").data('index')).search("").draw();
            table.column($("#iptDonadorCuenta").data('index')).search("").draw();

            table.column($("#iptReceptorAgente").data('index')).search("").draw();
            table.column($("#iptReceptorCuenta").data('index')).search("").draw();
            
            table.column($("#iptDineroDesde").data('index')).search("").draw();
            table.column($("#iptDineroHasta").data('index')).search("").draw(); // Realiza una búsqueda sin restricciones
        });

        $('#tbl_transferencia tbody').on('click', '.btnEliminarRegistro', function() {

            
            var accion = 9;
            var data = table.row($(this).parents('tr')).data();
            console.log("el valor de la data es :" + data);
            if(data === undefined){
                data = table.row($(this)).data();
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
                                    title: 'La transferencia se elimino correctamente'
                                });

                                table.ajax.reload();
                                cargarOpciones()

                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'La transferencia no se pudo eliminar'
                                });
                            }

                        }
                    });

                }
            })
            
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

    function destruir_tabla(){
        table.destroy();
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
                var select = $('#selDonador'); // Tu select

                var select2 = $('#selReceptor'); // Tu select


                console.log("esto es de cargarOpciones : ", respuesta)

                
                // Vaciar opciones existentes (si las hay)
                select.empty();
                select2.empty();


                for(var i = 0; i < respuesta.length; i++){

                    if(respuesta[i]["Agente"] === "EFECTIVO" && respuesta[i]["Cuenta"]=== "CONTROLADOR"){

                    }else{

                    var value = respuesta[i]["Agente"] + " - " +  respuesta[i]["Cuenta"];
                    var text = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["MontoActual"];

                    var value2 = respuesta[i]["Agente"] + " - " + respuesta[i]["Cuenta"];
                    var text2 = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["MontoActual"];

                    // // Agregar las nuevas opciones desde la respuesta AJAX

                        select.append($('<option></option>').attr('value', value).text(text));
                        select2.append($('<option></option>').attr('value', value2).text(text2));
                    }
                    
                }
                
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });
    }

    function DarExcel(){

        
        const workbook = XLSX.utils.book_new(); //esto crea un excel en blanco


        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 15, //parametro para obtener las transferencias del dia; 
            },
            dataType:'json',
            success:function(respuesta1,excel_transferencias){

                excel_transferencias = respuesta1;

                console.log(respuesta1);

                const worksheet1 = arregloAExcel(respuesta1);
                XLSX.utils.book_append_sheet(workbook, worksheet1, "Transferencias");

                

                $.ajax({
                    url: "ajax/registro_agente.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 16, //parametro para obtener los movimientos del dia; 
                    },
                    dataType:'json',
                    success:function(respuesta2,excel_movimientos){

                        excel_movimientos = respuesta2;

                        console.log(respuesta2);

                        const worksheet2 = arregloAExcel(respuesta2);
                        XLSX.utils.book_append_sheet(workbook, worksheet2, "Movimientos");

                        // Generar el archivo Excel y descargarlo
                        XLSX.writeFile(workbook, "transferencias.xlsx");
                    }
                });


            }
        });

        



    }

    function arregloAExcel(data) {
        const worksheet = XLSX.utils.json_to_sheet(data);
        return worksheet;
    }

 </script>
 
 <script>

//document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>