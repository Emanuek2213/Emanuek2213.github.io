<!-- Content Header (Page header) -->
<div class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h2 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Arqueo de Caja (reporte)</h2>

            </div><!-- /.col -->

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="#">Inicio</a>
                    </li>

                    <li class="breadcrumb-item active">Arqueo de Caja (reporte)</li>

                </ol>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div>

</div>

<div class="content">

    <div class="container-fluid">

        <ul class="nav nav-tabs" id="tabs-asignar-modulos-perfil" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="content-efectivo-tab" data-toggle="pill" href="#content-efectivo" role="tab" aria-controls="content-efectivo" aria-selected="false">Perfiles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-cuentas-tab" data-toggle="pill" href="#content-cuentas" role="tab" aria-controls="content-cuentas" aria-selected="false">Asignar Modulo a Perfil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="content-prestamo-tab" data-toggle="pill" href="#content-prestamo" role="tab" aria-controls="content-prestamo" aria-selected="false">Asignar Modulo a Perfil</a>
            </li>

        </ul>

        <div class="tab-content" id="tabsContent-asignar-modulos-perfil">

            <div class="tab-pane fade active show mt-4 px-4" id="content-efectivo" role="tabpanel" aria-labelledby="content-efectivo-tab">
                
                <div class="row">
                    

                    <div class="col-lg-9">
                        <h4>INGRESO DEL EFECTIVO EN CAJA PRINCIPAL</h4>
                    </div>  
                    <div class="col-lg-3">
                        <button id="btnReporte" href="#" style="border: 1px solid black;" class="btn btn-success btn-lg w-100 h-100 d-flex align-items-center justify-content-center">Dar Reporte (.xlsx)</button>
                    </div>

                    <div class="col-lg-9">
                        
                        <div class="row">

                            <div class="col-lg-12">

                                <div class="card card-gray" style="border: 1px solid black;">
                                    <div class="card-header">
                                        <h3 class="card-title">COMPARACION</h3>
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

                                                    <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                        <input type="number" id="iptMontoPrincipal" class="form-control">
                                                        <label for="iptMontoPrincipal">Monto Calculado</label>
                                                    </div>

                                                    <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                        <input type="number" id="iptRealPrincipal" class="form-control">
                                                        <label for="iptRealPrincipal">Monto Real</label>
                                                    </div>

                                                    <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                        <input type="text" id="iptResultadoPrincipal" class="form-control">
                                                        <label for="iptResultadoPrincipal">Resultado</label>
                                                    </div>

                                            </div>

                                            <div class="d-block d-sm-none">


                                                    <div style="width: 100%;" class="form-floating mx-1">
                                                        <input type="number" id="iptMontoPrincipal" class="form-control" >
                                                        <label for="iptMontoPrincipal">Monto Calculado</label>
                                                    </div>
                                                    <div style="width: 100%;" class="form-floating mx-1">
                                                        <input type="number" id="iptRealPrincipal" class="form-control" >
                                                        <label for="iptRealPrincipal">Monto Real</label>
                                                    </div>

                                                    <div style="width: 100%;" class="form-floating mx-1">
                                                        <input type="text" id="iptResultadoPrincipal" class="form-control" >
                                                        <label for="iptResultadoPrincipal">Resultado</label>
                                                    </div>
                                                    
                                                    
                                                    
                                            </div>

                                            

                                        </div>
                                    </div> <!-- ./ end card-body -->
                                </div>

                            </div>

                        </div>
                    

                        <h4>INGRESO DEL EFECTIVO EN CAJA AGENTE</h4>

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="card card-gray" style="border: 1px solid black;">
                                    <div class="card-header">
                                        <h3 class="card-title">COMPARACION</h3>
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

                                                <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                    <input type="number" id="iptMontoAgente" class="form-control">
                                                    <label for="iptMontoAgente">Monto Calculado</label>
                                                </div>

                                                <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                    <input type="number" id="iptRealAgente" class="form-control">
                                                    <label for="iptRealAgente">Monto Real</label>
                                                </div>

                                                <div style="width: 25%;" class="form-floating mx-1 col-lg-4">
                                                    <input type="text" id="iptResultadoAgente" class="form-control">
                                                    <label for="iptResultadoAgente">Resultado</label>
                                                </div>

                                            </div>

                                            <div class="d-block d-sm-none">


                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="number" id="iptMontoAgente" class="form-control" >
                                                    <label for="iptMontoAgente">Monto Calculado</label>
                                                </div>
                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="number" id="iptRealAgente" class="form-control" >
                                                    <label for="iptRealAgente">Monto Real</label>
                                                </div>

                                                <div style="width: 100%;" class="form-floating mx-1">
                                                    <input type="text" id="iptResultadoAgente" class="form-control" >
                                                    <label for="iptResultadoAgente">Resultado</label>
                                                </div>



                                            </div>

                                            

                                        </div>
                                    </div> <!-- ./ end card-body -->
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch justify-content-center" >
                        <button href="#" id="btnSiguiente" style="border: 1px solid black;" class="btn btn-secondary btn-lg w-100 h-100 d-flex align-items-center justify-content-center">Siguiente</button>
                    </div>

                </div>

            </div>


            <div class="tab-pane fade mt-4 px-4" id="content-cuentas" role="tabpanel" aria-labelledby="content-cuentas-tab">

                <h4>INGRESO DEL CREDITO ACTUAL DE LAS CUENTAS</h4>

                <div class="row">
                    
                    <div class="col-lg-9">
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
                                    <table id="lstAsignarCuentas" class="display nowrap table-striped w-100 shadow ">
                                        <thead class="bg-gray text-left fs-6">
                                            <tr>
                                                <th style="text-align: center;">BANCO</th>
                                                <th style="text-align: center;">CUENTA</th>
                                                <th style="text-align: center;">MONTO ANTERIOR</th>
                                                <th style="text-align: center;">MONTO ACTUAL</th>
                                                <th style="text-align: center;">DIFERENCIA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="small text-left fs-6">
                                        </tbody>
                                    </table><!-- / table -->
                                </div> <!-- ./ end card-header -->

                        </div>
                    </div>

                    <div class="col-lg-3 d-flex align-items-stretch justify-content-center" >
                        <button href="#" id="btnRegistrar" style="border: 1px solid black;" class="btn btn-secondary btn-lg w-100 h-100 d-flex align-items-center justify-content-center">REGISTRAR</button>
                    </div>
                    
                </div>
                <!-- /.col -->

                
                
                
            </div>

            <div class="tab-pane fade mt-4 px-4" id="content-prestamo" role="tabpanel" aria-labelledby="content-prestamo-tab">

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

                                            <div style="width: 20%;" class="form-floating mx-1">
                                                
                                                <select class="form-select form-select-sm" id="selCuenta"  data-index="5" required >

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

                                            <div style="width: 20%;" class="form-floating mx-1">
                                                <input type="number" id="iptMonto" class="form-control">
                                                <label for="iptMonto">Monto Principal</label>
                                            </div>

                                            <div style="width: 20%;" class="form-floating mx-1">
                                                <input type="text" id="iptPersona" class="form-control">
                                                <label for="iptPersona">Persona</label>
                                            </div>

                                            <div style="width: 20%;" class="form-floating mx-1">
                                                <select class="form-select form-select-sm" id="selTipo"  data-index="5" required >

                                                    <option value="Prestamo">Prestamo</span></option>
                                                    <option value="Deuda">Deuda</span></option>
                                                    
                                                </select>
                                                
                                                <label for="selTipo">Opciones</label>
                                            </div>

                                            <div style="width: 20%;" class="form-floating mx-1">
                                                <!-- small box -->
                                                <div style="cursor: pointer;" class="small-box bg-success" data-toggle="modal" id="btnPrestar" tabindex="0">
                                                    <div class="inner" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                                                        <h4 id="tarjeta_bcp"><span style="font-style: italic; font-weight: bold;  padding: 10px;">Realizar</span></h4>
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
                                                    <option value="INT-Johana">INT - Johana  : .s/ 1000</span></op    tion>
                                                    <option value="RED-Principal">RED - Principal : .s/ 1000</span></option>
                                                    <option value="EFECTIVO-Agente">EFE - Agente : .s/ 1000</span></option>
                                                    <option value="EFECTIVO-Principal">EFE - Principal : .s/ 1000</span></option>
                                                </select>
                                                <label for="selCuenta">Cuenta</label>
                                            </div>

                                            <div style="width: 100%;" class="form-floating mx-1">

                                                <input type="number" id="iptMonto" class="form-control">
                                                <label for="iptMonto">Monto Principal</label>

                                            </div>

                                            <div style="width: 100%;" class="form-floating mx-1">
                                                <input type="text" id="iptPersona" class="form-control">
                                                <label for="iptPersona">Persona</label>
                                            </div>

                                            <div style="width: 100%;" class="form-floating mx-1">

                                                <select class="form-select form-select-sm" id="selTipo"  data-index="5" required >

                                                    <option value="Prestamo">Prestamo</span></option>
                                                    <option value="Deuda">Deuda</span></option>
                                                    
                                                </select>
                                                
                                                <label for="selTipo">Opciones</label>

                                            </div>
                                            
                                            
                                            
                                    </div>

                                    

                                </div>
                            </div> <!-- ./ end card-body -->
                        </div>

                    </div>

                </div>

                <div class="card card-gray shadow" style="border: 1px solid black;"  >

                    <div class="card-body p-3">
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="display nowrap table-striped w-100 shadow" id="lstMovimientos">
                                    <thead class="bg-gray text-left fs-6">
                                        <tr>
                                            <th>Opc</th>
                                            <th>Nro</th>
                                            <th>Banco</th>
                                            <th>Agente</th>
                                            <th>Monto</th>
                                            <th>Estado</th>
                                            <th>Persona</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
<script>

    var table;
    var table2;
    $(document).ready(function() {
        //ExcelVacio();
        table = $("#lstAsignarCuentas").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pageLength'
                ],
                pageLength: [5, 10, 15, 30, 50, 100],
                pageLength: 30,

                columnDefs: [

                    {
                        targets:0,
                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'text-align': 'center'
                            });
                        }
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
                                'color': 'green',
                                'text-align': 'center'
                            });

                            // Agregar la clase 'editable' a las celdas específicas
                            if ($(td).hasClass('editable')) {
                                $(td).addClass('editable');
                            } else {
                                $(td).addClass('editable');
                            }
                        }
                    },

                    {
                        targets: 4,

                        createdCell: function (td, cellData, rowData, row, col) {
                            $(td).css({
                                'font-weight': 'bold',
                                'text-align': 'center'
                            });
                        }
                    },
                    
                    
                    

                ],
                ScrollX: true,
                Scroll: true,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                }
            
        });

        table.on('init.dt', function () {
        

            $('#lstAsignarCuentas tbody').on('click', 'td.editable', function(){

                $(this).attr('contenteditable', 'true');
                    var data = table.row($(this).parents('tr')).data();

                    //console.log("el valor de de la data 3 es : " , data[3]);
                    // Cambiar el valor de la celda a 0
                    if(data[3]===""){
                        data[3]=data[2];
                    }
                    $(this).text(parseFloat(data[3].replace("S./ ", "")));

                    // Seleccionar todo el texto en la celda
                    var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                
                //console.log("se dio click a una celda : ", data[1]);

                //console.log("desbloqueado");
                $(this).attr('contenteditable', 'true');
                
            });

            $('#lstAsignarCuentas tbody').on('blur', 'td.editable', function() {

                var columnaModificada = $(this).index(); // Obtener el número de columna modificada
                var nuevoValor = $(this).text(); // Obtener el nuevo valor
                var currentRow = $(this);
                var data = table.row($(this).parents('tr')).data();
                //console.log("columna modificada : "+ columnaModificada );

                // Determinar la descripción de la columna modificada
                var descripcionColumna = '';
                if (columnaModificada === 3) {
                    descripcionColumna = 'Columna 3';
                    table.cell(currentRow, 3).data("S./ "+parseFloat(nuevoValor).toFixed(2));

                }

                //console.log("Se modificó " + descripcionColumna + " con valor: " + nuevoValor);

                DarDiferencia(currentRow,nuevoValor);
                
            });

            $('#lstAsignarCuentas tbody').on('keydown', 'td.editable', function(e) {
                 var keyCode = e.keyCode || e.which;
                 var currentValue = parseFloat($(this).text()) || 0;

                 // Manejar la tecla arriba (38) y abajo (40)
                 if (keyCode === 38) { // Tecla arriba
                     $(this).text((currentValue + 1).toFixed(2));
                     var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                 } else if (keyCode === 40) { // Tecla abajo
                     $(this).text(Math.max(0, currentValue - 1).toFixed(2));
                     var range = document.createRange();
                    range.selectNodeContents(this);
                    var sel = window.getSelection();
                    sel.removeAllRanges();
                    sel.addRange(range);
                 } else if (keyCode === 13) { // Tecla Enter
                    e.preventDefault(); // Evitar el comportamiento predeterminado del Enter

                    var $currentCell = $(this);
                    var $currentRow = $currentCell.closest('tr');
                    var $nextRow = $currentRow.next(); // Obtener la siguiente fila

                    if ($nextRow.length) {
                        var $nextEditableCell = $nextRow.find('td.editable').first(); // Obtener la primera celda editable de la siguiente fila

                        if ($nextEditableCell.length) {
                            // Aplicar las mismas modificaciones que al hacer clic en una celda editable
                            $nextEditableCell.attr('contenteditable', 'true');
                            var data = table.row($nextEditableCell.parents('tr')).data();

                            if (data[3] === "") {
                                data[3] = data[2];
                            }
                            $nextEditableCell.text(parseFloat(data[3].replace("S./ ", "")));

                            var range = document.createRange();
                            range.selectNodeContents($nextEditableCell[0]);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);

                            //console.log("se dio click a una celda : ", data[1]);

                            //console.log("desbloqueado");
                            $nextEditableCell.attr('contenteditable', 'true');
                        }
                    }else{
                        $currentCell.attr('contenteditable', 'false');
                    }
                } else {
                    return true;
                }

                 // Evitar el comportamiento predeterminado de las teclas arriba y abajo
                 e.preventDefault();
             });
        

        })

        table2 = $('#lstMovimientos').DataTable({  
            
            
            "columnDefs": [
                {

                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnEliminarVenta text-danger px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Categoria'>" +
                                "<i class='fas fa-trash fs-5'></i>" +
                                "</span>" +
                                "<span class='btnEditarVenta text-warning px-1' style='cursor:pointer;' data-bs-toggles='tooltip' data-bs-placement='top' title='Seleccionar Cliente'>" +
                                "<i class='fas fa-edit fs-5'></i>" +
                                "</span>" +
                                "</center>"

                    }
                },
                
                {
                    targets: [1],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;color: blue;"> N° ' + formattedData + '</span>';
                    }
                },
                {
                    targets: [2],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;">' + formattedData + '</span>';
                    }
                },
                {
                    targets: [3],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold;">' + formattedData + '</span>';
                    }
                },
                {
                    targets: [4],
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var formattedData = data;
                        return '<span style="font-weight: bold; color: green;"> S/.' + formattedData + '</span>';
                    }
                },
            

            
                {
                    targets: [5],
                    orderable: false,
                    render: function(data, type, full, meta) {
                            if(data === ""){
                                data = "sin mensajero"
                            }
                            return data;

                    }
                },
                
            ],
            scrollX:true,
            "order": [[0, 'desc']],
            ajax: {
                url: "ajax/registro_agente.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'accion': 17 //15: LISTAR BOLETAS con tod la info
                },
            },
            
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "drawCallback": function(settings) {
                ajustarHeadersDataTables($('#lstMovimientos'));
            }
        });
        
        CargarDatos();
        cargarOpciones();

        $("#iptRealPrincipal").change(function() {
            //console.log("este es Principal");

            var montoPrincipal = parseFloat($("#iptMontoPrincipal").val()) || 0;
            var realPrincipal = parseFloat($(this).val()) || 0;
            var diferencia = realPrincipal - montoPrincipal;
            var $resultadoPrincipal = document.getElementById("iptResultadoPrincipal");

            if (diferencia > 0) {
                $resultadoPrincipal.value = "+S./ " + diferencia.toFixed(2);
            } else if (diferencia < 0) {
                $resultadoPrincipal.value = "-S./ " + Math.abs(diferencia).toFixed(2);
            } else {
                $resultadoPrincipal.value = "S./ 0.00";
            }
        });

        $("#iptRealAgente").change(function() {
            //console.log("este es Agente");

            var montoAgente = parseFloat($("#iptMontoAgente").val()) || 0;
            var realAgente = parseFloat($(this).val()) || 0;
            var diferencia = realAgente - montoAgente;
            var $resultadoAgente = document.getElementById("iptResultadoAgente");

            if (diferencia > 0) {
                $resultadoAgente.value = "+S./ " + diferencia.toFixed(2);
            } else if (diferencia < 0) {
                $resultadoAgente.value = "-S./ " + Math.abs(diferencia).toFixed(2);
            } else {
                $resultadoAgente.value = "S./ 0.00";
            }
        });

        $('#btnSiguiente').on('click', function() {
            var Resultado2 = document.getElementById("iptResultadoAgente");
            var Resultado = document.getElementById("iptResultadoPrincipal");
            if(Resultado.value === "----" || Resultado2.value === "----"){

                Swal.fire({
                    icon:'warning',
                    title:'Todavia falta rellanar los datos del efectivo'                    
                })


            }else{

                $('#content-cuentas-tab').click();

            }
            
        });

        $('#btnReporte').on('click', function() {
            ExcelVacio();
        });

        $('#btnRegistrar').on('click', function() {

            
            // Simula el clic en el enlace de la pestaña "content-cuentas"
            var Resultado2 = document.getElementById("iptResultadoAgente");
            var Resultado = document.getElementById("iptResultadoPrincipal");
            //console.log("esto funciona");

            var celdasFaltantes = [];

            // Iterar a través de cada celda de la tabla
            $('#lstAsignarCuentas td').each(function() {
                var textoCelda = $(this).text().trim(); // Obtener el texto de la celda

                // Verificar si la celda está vacía
                if (textoCelda === '') {
                    var rowIndex = $(this).closest('tr').index() + 1; // Obtener el índice de fila
                    var colIndex = $(this).index() + 1; // Obtener el índice de columna
                    celdasFaltantes.push(`Fila ${rowIndex}`);
                }
            });

            // Mostrar el mensaje con las celdas vacías, si las hay
            if (celdasFaltantes.length > 0) {
                alert(`Celdas faltantes: ${celdasFaltantes.join(', ')}`);
            } else {
                
                if(Resultado.value === "----" || Resultado2.value === "----"){

                    Swal.fire({
                        icon:'warning',
                        title:'Todavia falta rellanar los datos del efectivo'                    
                    })
                    $('#content-efectivo-tab').click();
                }else{
                    RegistrarControl();
                }
            }

            
            
        });


        $('#btnPrestar').on('click', function() {

            var cuenta = $("#selCuenta").val();
            var valores_cuenta = cuenta.split(" - ");

            var banco = valores_cuenta[0];
            var agente = valores_cuenta[1];
            var disponible = parseFloat(valores_cuenta[2]);

            var solicitado = $("#iptMonto").val()

            var persona = $("#iptPersona").val()

            var movimiento = $("#selTipo").val();

            console.log(solicitado + persona);

            if(persona === "" || solicitado ===""){
                Swal.fire({
                    icon:'warning',
                    title:'Porfavor termine de rellenar todos los datos'                    
                });
                if(solicitado ===""){

                    $("#iptMonto").val("");
                    $("#iptMonto").focus();

                }else if(persona ===""){

                    $("#iptPersona").val("");
                    $("#iptPersona").focus();

                }
                return;
            }else{
                solicitado = parseFloat(solicitado);
                if(solicitado <= 0){
                    Swal.fire({
                        icon:'warning',
                        title:'Porfavor, ingrese un monto valido para el prestamo o deuda'                    
                    });
                    $("#iptMonto").val("");
                    $("#iptMonto").focus();
                    return;
                }else{
                    
                    $.ajax({
                        url: "ajax/registro_agente.ajax.php",
                        type: 'POST',
                        data: {
                            'accion': 18, //parametro para obtener las ventas del mes
                            'persona':persona,
                            'solicitado' : solicitado,
                            'movimiento':movimiento,
                            'banco':banco,
                            'agente':agente,

                        },
                        dataType:'json',
                        success:function(respuesta){
                            console.log(respuesta);
                            if(respuesta === "ok"){
                                Swal.fire({
                                    icon:'success',
                                    title:'Movimiento registrado correctamente'                    
                                });
                                cargarOpciones();
                                table2.ajax.reload();
                            }
                        }

                    });

                }
            }
            
            
        });
    })
 
</script>

<script>
    
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

    function CargarDatos(){
        $.ajax({
            url: "ajax/registro_agente.ajax.php",
            type: 'POST',
            data: {
                'accion': 5, //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(respuesta){//////console.log(respuesta);
                
                for(i = 0; i<respuesta.length ; i++){
                    if(respuesta[i]["Agente"] === "EFECTIVO"){

                        if(respuesta[i]["Cuenta"] === "Principal"){

                            var input = document.getElementById("iptMontoPrincipal");
                            input.value = respuesta[i]['MontoArqueo']; // Establece el valor a 120
                            input.disabled = true; // Bloquea el campo de entrada

                            var Resultado = document.getElementById("iptResultadoPrincipal");
                            Resultado.value = "----"; // Establece el valor a 120
                            Resultado.disabled = true; // Bloquea el campo de entrada



                        } else if(respuesta[i]["Cuenta"] === "Agente"){
                            
                            var input2 = document.getElementById("iptMontoAgente");
                            input2.value = respuesta[i]['MontoArqueo']; // Establece el valor a 120
                            input2.disabled = true; // Bloquea el campo de entrada

                            var Resultado2 = document.getElementById("iptResultadoAgente");
                            Resultado2.value = "----"; // Establece el valor a 120
                            Resultado2.disabled = true; // Bloquea el campo de entrada
                        }
                        
                        
                
                    } else{
                        
                        table.row.add([
                            respuesta[i]['Agente'],
                            respuesta[i]['Cuenta'],
                            "S./ " + parseFloat(respuesta[i]['MontoArqueo']).toFixed(2),
                            "",
                            "---",
                        ]).draw();
                        
                    }
                }


            
                
            }
        });
    }

    function DarDiferencia(currentRow,nuevoValor){

        //console.log("esto funciona ? ");

        var data = table.row(currentRow.parents('tr')).data();

        var nuevoValor = parseFloat(data[2].replace("S./ ", "")) - parseFloat(data[3].replace("S./ ", ""));

        //console.log(nuevoValor);

        if(nuevoValor > 0){
            table.cell(currentRow, 4).data(" - S./ "+parseFloat(nuevoValor).toFixed(2));
        }else if(nuevoValor < 0){
            nuevoValor = nuevoValor * -1;
            table.cell(currentRow, 4).data(" + S./ "+parseFloat(nuevoValor).toFixed(2));
        }else if(nuevoValor == 0){
            table.cell(currentRow, 4).data(" S./ "+parseFloat(nuevoValor).toFixed(2));
        }

        

    }

    function RegistrarControl(){

        var matriz = [];


        var fechaFormateada = moment().format('DD/MM/YY HH:mm:ss');

        var Resultado2 = document.getElementById("iptResultadoAgente");
        var Calculo2 = document.getElementById("iptMontoAgente");
        var rowDataAgente = ["EFECTIVO","Agente","S./" + Calculo2.value,"S./" + Calculo2.value,Resultado2.value,fechaFormateada]
        matriz.push(rowDataAgente);

        var Resultado = document.getElementById("iptResultadoPrincipal");
        var Calculo = document.getElementById("iptMontoPrincipal");
        var rowDataPrincipal = ["EFECTIVO","Principal","S./" + Calculo.value,"S./" + Calculo.value,Resultado.value,fechaFormateada]
        matriz.push(rowDataPrincipal);

        var table = document.getElementById('lstAsignarCuentas');
        // Inicializar la matriz para almacenar los datos
        

        // Iterar sobre las filas de la tabla
        for (var i = 1; i < table.rows.length; i++) {
            var rowData = [];
            var row = table.rows[i];
            
            // Iterar sobre las celdas de cada fila
            for (var j = 0; j < row.cells.length; j++) {
                var cellData = row.cells[j].innerText;
                rowData.push(cellData);
            }
            
            rowData.push(fechaFormateada);
            // Agregar los datos de la fila a la matriz
            matriz.push(rowData);
        }


        //console.log(matriz);

        GuardarDatos(matriz);

    }

    function GuardarDatos(matriz){
        
        
        
        

            
        for(var i = 0; i < matriz.length; i++){
            
            var Diferencia;
            var Monto;
            // Verificar si la cadena comienza con "S/."
            if (matriz[i][4].startsWith("S./")) {
                Diferencia = parseFloat(matriz[i][4].replace("S./ ", "")).toFixed(2);
                
            }

            // Verificar si la cadena comienza con "-S/."
            if (matriz[i][4].startsWith("-S./")) {
                Diferencia = parseFloat(matriz[i][4].replace("-S./ ", "")).toFixed(2);

            }

            // Verificar si la cadena comienza con "-S/."
            if (matriz[i][4].startsWith("+S./")) {
                Diferencia = parseFloat(matriz[i][4].replace("+S./ ", "")).toFixed(2);

            }

            if (matriz[i][2].startsWith("S./")) {

                Monto = parseFloat(matriz[i][2].replace("S./", "")).toFixed(2);

            }else if (matriz[i][2].startsWith("-S./")) {

                Monto = parseFloat(matriz[i][2].replace("-S./", "")).toFixed(2);

            }else if (matriz[i][2].startsWith("+S./")) {

                Monto = parseFloat(matriz[i][2].replace("+S./", "")).toFixed(2);

            }else{
                Monto = parseFloat(matriz[i][2]).toFixed(2);
            }


            //console.log("diferencia: " , Diferencia , matriz[i][4]);

            //console.log("Monto: " , Monto , matriz[i][2]);
            
            $.ajax({
                url: "ajax/reporte.ajax.php",
                method: "POST",
                data: {
                'accion': 1, //Verifica el stock del producto
                'Agente': matriz[i][0],
                'Cuenta': matriz[i][1],
                'Monto': Monto,
                'Fecha': matriz[i][5],
                'Diferencia': Diferencia,

                },
                dataType: 'json',
                success: function(respuesta){

                    //console.log(respuesta);

                }
            })

        }
    }

    function ExcelVacio(){
        var  matriz = [];
        console.log("columnas");
        $.ajax({
            url: "ajax/reporte.ajax.php",
            type: 'POST',
            data: {
                'accion': 2, //parametro para obtener las ventas del mes
            },
            dataType:'json',
            success:function(columnas){
                console.log("columnas", columnas);

                matriz[0] = [];

                matriz[0][0] = "FECHAS";

                for (var j = 1; j < columnas.length; j++) {
                    matriz[0][j] = columnas[j]["Concatenacion"]; 
                }

                console.log("matriz",matriz);

                $.ajax({
                    url: "ajax/reporte.ajax.php",
                    type: 'POST',
                    data: {
                        'accion': 3, //parametro para obtener las ventas del mes
                    },
                    dataType:'json',
                    success:function(filas){

                        console.log("filas", filas);

                        for (var i = 1; i <= filas.length; i++) {
                            matriz[i] = []; // Inicializar cada fila
                            matriz[i][0] = filas[i-1]["Fecha"]; 

                            for (var j = 1; j < columnas.length; j++) {
                                matriz[i][j] = 10; // Asignar el valor 10 a cada celda
                            }
                        }
                        
                        //console.log(matriz);

                        CompletarExcel(matriz,filas,columnas);

                    }
                })

            }
        });
    }

    function CargarCuentas(){
        
    

        var selCuentaParcial = document.getElementById("selCuenta");
        //var selCuentaTotal = document.getElementById("selCuentaTotal");

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
                                    //var elementR = selCuentaTotal.querySelector("option[value='" + cuentas2[j][0] + " - " + cuentas2[j][1][k] + "']");
                                    
                                    if (element && elementR) {
                                        element.textContent = " " + cuentas[j][0] + " - " + cuentas[j][1][k] + " : .s/" + parseFloat(respuesta[i]["Credito"]).toFixed(2);
                                        //elementR.textContent = " " + cuentas2[j][0] + " - " + cuentas2[j][1][k] + " : .s/" + parseFloat(respuesta[i]["MontoActual"]).toFixed(2);

                                    }
                                }
                            }
                        }
                    }
                }

            }
        })
        
                
    
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

                    var value = respuesta[i]["Agente"] + " - " +  respuesta[i]["Cuenta"]+ " - " +respuesta[i]["Credito"] ;
                    var text = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["Credito"];

                    var value2 = respuesta[i]["Agente"] + " - " + respuesta[i]["Cuenta"]+ " - " +respuesta[i]["MontoActual"] ;
                    var text2 = respuesta[i]["Agente"] + " - " +respuesta[i]["Cuenta"] + " :.s/"+respuesta[i]["MontoActual"];

                    // // Agregar las nuevas opciones desde la respuesta AJAX
                    
                        select2.append($('<option></option>').attr('value', value).text(text));
                        select.append($('<option></option>').attr('value', value2).text(text2));
                    }
                    
                }

                // Llamar a las funciones después de agregar las opciones

                
            },
            error: function() {
                // Manejo de errores si la solicitud AJAX falla
                console.log('Error al cargar las opciones');
            }
        });
    }

    function CompletarExcel(matriz,filas,columnas){
        var promises = [];

        for (var i = 1; i <= filas.length; i++) {
            var fecha = matriz[i][0];

            for (var j = 1; j < columnas.length; j++) {
                var cadena = matriz[0][j];
                var partes = cadena.split(' ');
                var Agente = partes[0];
                var Cuenta = partes.slice(1).join(' ');

                // Crear una función para realizar la solicitud AJAX
                var promise = (function (i, j, fecha, Agente, Cuenta) {
                    return new Promise(function (resolve, reject) {
                        $.ajax({
                            url: "ajax/reporte.ajax.php",
                            type: 'POST',
                            data: {
                                'accion': 4,
                                'Agente': Agente,
                                'Cuenta': Cuenta,
                                'Fecha': fecha,
                            },
                            dataType: 'json',
                            success: function (respuesta) {
                                matriz[i][j] = respuesta[0]["Monto"];
                                resolve(); // Resolver la promesa una vez se ha asignado el valor
                            },
                            error: function (error) {
                                reject(error); // Manejar el error si ocurre
                            }
                        });
                    });
                })(i, j, fecha, Agente, Cuenta);

                promises.push(promise); // Agregar la promesa al array de promesas
            }
        }


        // Ejecutar todas las promesas y cuando todas se resuelvan, mostrar la matriz
        Promise.all(promises)
            .then(function () {
                // Suponiendo que 'matriz' es tu matriz de datos y 'encabezado' es tu array de encabezado
                var encabezado = [];
                // Crear un nuevo libro de trabajo
                var workbook = XLSX.utils.book_new();

                // Convertir la matriz y el encabezado a una hoja de cálculo de SheetJS
                var worksheet = XLSX.utils.aoa_to_sheet([encabezado].concat(matriz));

                // Ajustar el ancho de las columnas para que se ajusten al contenido
                var columnWidths = [];
                matriz.forEach((fila) => {
                    fila.forEach((celda, indice) => {
                        var cellLength = (celda.toString().length * 1.2); // Ajuste fino para el ancho de la celda
                        columnWidths[indice] = columnWidths[indice] || 0;
                        if (cellLength > columnWidths[indice]) {
                            columnWidths[indice] = cellLength;
                        }
                    });
                });

                worksheet['!cols'] = columnWidths.map(width => ({ width }));

                // Agregar la hoja de cálculo al libro de trabajo
                XLSX.utils.book_append_sheet(workbook, worksheet, 'Nombre de la Hoja');

                // Crear un archivo Excel en formato .xlsx
                XLSX.writeFile(workbook, 'Arqueo_caja_resumen.xlsx'); // La matriz estará completamente poblada

            })
            .catch(function (error) {
                console.error("Error:", error); // Manejar errores si ocurren
            });
        
    }
</script>