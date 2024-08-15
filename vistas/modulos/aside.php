 <?php
 
    $menuUsuario = UsuarioControlador::ctrObtenerMenuUsuario($_SESSION["usuario"]-> id_usuario);

    //var_dump( $menuUsuario);
 ?>
 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="vistas/assets/dist/img/jota.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">JUSYBA</span>
     </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <h6 class="text-warning"><?php echo $_SESSION["usuario"]->nombre_usuario . ' ' . $_SESSION["usuario"]->apellido_usuario ?></h6>
            </div>
        </div>

<!-- Sidebar Menu -->
<?php


$nombreCompleto = $_SESSION["usuario"]->nombre_usuario . ' ' . $_SESSION["usuario"]->apellido_usuario;

// Guardar el nombre completo en una variable de sesión
$_SESSION["nombreCompleto"] = $nombreCompleto;
?>
<nav class="mt-2">

    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

       <?php foreach ($menuUsuario as $menu) : ?>
           <li class="nav-item">

               <a style="cursor: pointer;" 
                   class="nav-link <?php if($menu->vista_inicio == 1) : ?>
                                       <?php echo 'active'; ?>
                                   <?php endif; ?>"
                   <?php if(!empty($menu->vista)) : ?>
                       onclick="CargarContenido('vistas/<?php echo $menu->vista; ?>','content-wrapper')"
                   <?php endif; ?>
               >
                   <i class="nav-icon <?php echo $menu->icon_menu; ?>"></i>
                   <p>
                       <?php echo $menu->modulo ?>
                       <?php if(empty($menu->vista)) : ?>
                           <i class="right fas fa-angle-left"></i> 
                       <?php endif; ?>
                   </p>
               </a>

               <?php if(empty($menu->vista)) : ?>

                   <?php
                       $subMenuUsuario = UsuarioControlador::ctrObtenerSubMenuUsuario($menu->id,$_SESSION["usuario"]->id_usuario);
                   ?>

                   <ul class="nav nav-treeview">

                       <?php foreach ($subMenuUsuario as $subMenu) : ?>

                           <li class="nav-item">
                               <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/<?php echo $subMenu->vista ?>','content-wrapper')">
                                   <i class="<?php echo $subMenu->icon_menu; ?> nav-icon"></i>
                                   <p><?php echo $subMenu->modulo; ?></p>
                               </a>
                           </li>

                       <?php endforeach; ?>
                                                 
                   </ul>

               <?php endif; ?>

           </li>
       <?php endforeach; ?>
                
                 <!-- <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Tablero Principal
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas ion-clipboard"></i>
                         <p>
                             Ventas
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                                <i class="nav-icon ion ion-ios-cart"></i>
                                <p>
                                    Nueva Venta
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/VentaRapida.php','content-wrapper')">
                                <i class="nav-icon ion ion-ios-cart"></i>
                                <p>
                                    Venta Rapida
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/administrar_ventas.php','content-wrapper')">
                                <i class="nav-icon ion ion-ios-cart"></i>
                                <p>
                                    Administrar Ventas
                                </p>
                            </a>
                        </li>
                    </ul>
                 </li>
                 

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas ion ion-card"></i>
                         <p>
                             Agente
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/registro_agente.php','content-wrapper')">
                                <i class="nav-icon ion ion-arrow-swap"></i>
                                <p>
                                    Movimientos
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/transferencias.php','content-wrapper')">
                                <i class="nav-icon ion ion-arrow-swap"></i>
                                <p>
                                    Transferencia Interna
                                </p>
                            </a>
                        </li>
                    </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Productos
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                         <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inventario</p>
                             </a>
                         </li>
                         <li class="nav-item">
                         <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/carga_masiva_productos.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Carga Masiva</p>
                             </a>
                         </li>
                         <li class="nav-item">
                         <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/categorias.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Categorías</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Ventas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/compras.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Compras
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/reportes.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Reportes
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/configuracion.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Configuración
                         </p>
                     </a>
                 </li> -->

                <!---OPCION DEL MENU PARA CERRAR SESION-- -->
                <li class="nav-item">
                    <a href="market-pos?cerrar_sesion=1" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            CERRAR SESION
                        </p>
                    </a>
                </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <script>
     $("#push_menu").on('click',function(){
        $("#push_menu").removeClass('active');
        $(this).addClass('active');
     })
 </script>
<script>
    // Función para redirigir a otra URL si la primera no está disponible
    function redirectToBackupURL(url) {
        window.location.href = url;
    }

    // // Verificar si la primera URL no está disponible y redirigir
    // document.getElementById('logoutLink').addEventListener('click', function(event) {
    //     event.preventDefault(); // Evitar el comportamiento por defecto del enlace

    //     var firstURL = 'http://192.168.18.7//market-pos?cerrar_sesion=1';
    //     var backupURL = 'http://localhost/market-pos?cerrar_sesion=1';

    //     var xhr = new XMLHttpRequest();
    //     xhr.open('HEAD', firstURL);
    //     xhr.onload = function() {
    //         if (xhr.status !== 200) {
    //             redirectToBackupURL(backupURL); // Redirigir a la URL de respaldo si la primera no está disponible
    //         } else {
    //             window.location.href = firstURL; // Ir a la primera URL si está disponible
    //         }
    //     };
    //     xhr.onerror = function() {
    //         redirectToBackupURL(backupURL); // En caso de error, redirigir a la URL de respaldo
    //     };
    //     xhr.send();
    // });
</script>
<script>


// document.addEventListener('keydown', function(event) {
//     const inputText = document.getElementById('iptCodigoVenta');
//     const select = document.getElementById('selDocumentoVenta');
//     const select2 = document.getElementById('selTipoPago');
//     const checkbox = document.getElementById('chkEfectivoExacto');
//     const boton = document.getElementById('btnIniciarVenta');

    

//     console.log(select.value);
//     if (event.code === 'F2') {
//         handleKeyPress(select, inputText);
//     } else if (event.code === 'F4') {
//         handleKeyPress(select2, inputText);
//     } else if (event.code === 'F7') {
//         handleCheckboxToggle(checkbox, inputText);
//     }else if (event.code === 'F10') {
//         if (boton) {
//             boton.click();
//         }
//     }
    
// });




function handleKeyPress(select, inputText) {
    let currentValue = parseInt(select.value);
    if (document.activeElement === inputText) {
        return;
    }else{
        let newSelectedValue = (currentValue + 1) % 5;
        if (newSelectedValue === 0) {
            newSelectedValue = 1;
        }

        select.value = newSelectedValue.toString();
    }

    
}

function handleCheckboxToggle(checkbox, inputText) {
    
    if (document.activeElement === inputText) {
        return;
    } else {
        checkbox.checked = !checkbox.checked;
        $(checkbox).change();
        // Resto de la lógica asociada al cambio del checkbox...
        $(checkbox).change(function() {
            if ($(this).is(':checked')) {
                var vuelto = 0;
                var totalVenta = $("#totalVenta").html();

                $("#iptEfectivoRecibido").val(totalVenta);
                $("#EfectivoEntregado").html(totalVenta);

                var EfectivoRecibido = parseFloat($("#EfectivoEntregado").html().replace("S./ ", ""));
                vuelto = parseFloat(totalVenta) - parseFloat(EfectivoRecibido);

                $("#Vuelto").html(vuelto.toFixed(2));
            } else {
                $("#iptEfectivoRecibido").val("");
                $("#EfectivoEntregado").html("0.00");
                $("#Vuelto").html("0.00");
            }
        });
    }

    
}





</script>