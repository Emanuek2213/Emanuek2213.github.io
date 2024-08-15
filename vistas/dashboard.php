 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0" style="font-family: 'Times New Roman', sans-serif;font-style: italic;">Tablero Principal</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                     <li class="breadcrumb-item active">Tablero Principal</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">

     <div class="container-fluid">

         <!-- row Tarjetas Informativas -->
         <div class="row">

             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-info" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalProductos">10000</h4>

                         <p>Productos registrados</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-clipboard"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA TOTAL COMPRAS -->
             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-success" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalCompras">S./ 2,500.00</h4>

                         <p>Total Compras</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-cash"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA TOTAL VENTAS -->
             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-warning" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalVentas">S./ 1,200.00</h4>

                         <p>Total Ventas</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-ios-cart"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA TOTAL GANANCIAS -->
             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-danger" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalGanancias">S./ 470.00</h4>

                         <p>Total Ganancias</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-ios-pie"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA PRODUCTOS POCO STOCK -->
             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-primary" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalProductosMinStock">15</h4>

                         <p>Productos poco stock</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-android-remove-circle"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>

             <!-- TARJETA TOTAL VENTAS DIA ACTUAL -->
             <div class="col-lg-2">
                 <!-- small box -->
                 <div class="small-box bg-secondary" style="border: 1px solid black;">
                     <div class="inner">
                         <h4 id="totalVentasHoy">S./ 250.00</h4>

                         <p>Ventas del día</p>
                     </div>
                     <div class="icon">
                         <i class="ion ion-android-calendar"></i>
                     </div>
                     <a style="cursor:pointer;" class="small-box-footer">Mas Info <i
                             class="fas fa-arrow-circle-right"></i></a>
                 </div>
             </div>


         </div> <!-- ./row Tarjetas Informativas -->

         <!-- row Grafico de barras -->
         <div class="row">

             <div class="col-12">

                 <div class="card card-gray card-info" style="border: 1px solid black;">

                     <div class="card-header">
                        

                         <h3 class="card-title" id="title-header">Ventas del mes : S./1,200.00</h3>

                         <div class="card-tools">

                             <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                             </button>

                         </div> <!-- ./ end card-tools -->

                     </div> <!-- ./ end card-header -->


                     <div class="card-body">

                         <div class="chart">

                             <canvas id="barChart"
                                 style="min-height: 250px; height: 400px; max-height: 450px; width: 100%;">

                             </canvas>

                         </div>

                     </div> <!-- ./ end card-body -->

                 </div>

             </div>

         </div>
         <!-- ./row Grafico de barras -->

         <div class="row">
             <div class="col-lg-6">
                 <div class="card card-gray card-info" style="border: 1px solid black;">
                     <div class="card-header">
                         <h3 class="card-title">Los 10 productos mas vendidos</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div> <!-- ./ end card-tools -->
                     </div> <!-- ./ end card-header -->
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table" id="tbl_productos_mas_vendidos">
                                 <thead>
                                     <tr class="text-danger">
                                         <th>Cod. producto</th>
                                         <th>Producto</th>
                                         <th>Cantidad</th>
                                         <th>Ventas</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                 </tbody>
                             </table>
                         </div>
                     </div> <!-- ./ end card-body -->
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="card card-gray card-info" style="border: 1px solid black;">
                     <div class="card-header">
                         <h3 class="card-title">Listado de productos con poco stock</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-tool" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div> <!-- ./ end card-tools -->
                     </div> <!-- ./ end card-header -->
                     <div class="card-body">
                     <div class="table-responsive">
                             <table class="table" id="tbl_productos_poco_stock">
                                 <thead>
                                     <tr class="text-danger">
                                         <th>Cod. producto</th>
                                         <th>Producto</th>
                                         <th>Stock Actual</th>
                                         <th>Mín. Stock</th>
                                     </tr>
                                 </thead>
                                 <tbody></tbody>
                             </table>
                         </div>
                     </div> <!-- ./ end card-body -->
                 </div>
             </div>
         </div>

     </div><!-- /.container-fluid -->



 </div>
 <!-- /.content -->

 <script> var encendido = 20;
$(document).ready(function() {

    /* =======================================================
    SOLICITUD AJAX TARJETAS INFORMATIVAS
    =======================================================*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
            //console.log("respuesta", respuesta);
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalCompras").html('S./ ' + respuesta[0]['totalCompras']);
            $("#totalVentas").html('S./ ' + respuesta[0]['totalVentas']);
            $("#totalGanancias").html('S./ ' + respuesta[0]['ganancias']);
            $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
            $("#totalVentasHoy").html('S./ ' + respuesta[0]['ventasHoy']);
        }
    });

    setInterval(() => {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
            //console.log("respuesta", respuesta);
            $("#totalProductos").html(respuesta[0]['totalProductos']);
            $("#totalCompras").html('S./ ' + respuesta[0]['totalCompras']);
            $("#totalVentas").html('S./ ' + respuesta[0]['totalVentas']);
            $("#totalGanancias").html('S./ ' + respuesta[0]['ganancias']);
            $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
            $("#totalVentasHoy").html('S./ ' + respuesta[0]['ventasHoy']);
        }
        });
    }, 10000);


    /* =======================================================
    SOLICITUD AJAX GRAFICO DE BARRAS DE VENTAS DEL MES
    =======================================================*/
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        data: {
            'accion': 1 //parametro para obtener las ventas del mes
        },
        dataType: 'json',
        success: function(respuesta) {
            // console.log("respuesta", respuesta);

            var fecha_venta = [];
            var total_venta = [];
            var total_venta_ant = [];

            var total_ventas_mes = 0;

            for (let i = 0; i < respuesta.length; i++) {

                fecha_venta.push(respuesta[i]['fecha_venta']);
                total_venta.push(respuesta[i]['total_venta']);
                total_venta_ant.push(respuesta[i]['total_venta_ant']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i][
                    'total_venta'
                ]);

            }

            total_venta.push(0);
            // total_venta.push(600);

            // console.log(total_ventas_mes);

            $("#title-header").html('Ventas del Mes: S./ ' + total_ventas_mes.toString().replace(
                /\d(?=(\d{3})+\.)/g, "$&,"));

            var barChartCanvas = $("#barChart").get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [{
                    label: 'Ventas del mes anterior',
                    backgroundColor: 'rgb(60, 140, 0,0.9)',
                    data: total_venta_ant
                }, {
                    label: 'Ventas del Mes',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    data: total_venta
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
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 2 // listar los 10 productos mas vendidos
        },
        dataType:'json',
        success:function(respuesta){
            // console.log("respuesta",respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>'+
                            '<td>'+ respuesta[i]["codigo_producto"] + '</td>'+
                            '<td>'+ respuesta[i]["descripcion_producto"] + '</td>'+
                            '<td>'+ respuesta[i]["cantidad"] + '</td>'+
                            '<td> S./ '+ respuesta[i]["total_venta"] + '</td>'+
                        '</tr>'
                $("#tbl_productos_mas_vendidos tbody").append(filas);
            }
            
        }
    });

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 3 // listar los  productos con poco stock
        },
        dataType:'json',
        success:function(respuesta){
            console.log("respuesta",respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                filas = '<tr>'+
                            '<td>'+ respuesta[i]["codigo_producto"] + '</td>'+
                            '<td>'+ respuesta[i]["descripcion_producto"] + '</td>'+
                            '<td>'+ respuesta[i]["stock_producto"] + '</td>'+
                            '<td>' + respuesta[i]["minimo_stock_producto"] + '</td>'+
                        '</tr>'
                $("#tbl_productos_poco_stock tbody").append(filas);
            }
            
        }
    });

})
 </script>
 <script>
 //document.removeEventListener('keydown', boton3);
//document.removeEventListener('keydown', boton2);
//document.removeEventListener('keydown', boton1);
</script>