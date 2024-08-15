<!-- Navbar -->

<?php
 
 $menuUsuario = UsuarioControlador::ctrObtenerMenuUsuario($_SESSION["usuario"]-> id_usuario);

 //var_dump( $menuUsuario);
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a id= "push_menu" class="nav-link" data-widget="pushmenu" href="#" role="cursor: pointer;"><i class="fas fa-bars"></i></a>
        </li>

        

        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/registro_agente.php','content-wrapper')">
                Movientos
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                Transferencia interna
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/carga_masiva_productos.php','content-wrapper')">
                Carga Masiva
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/categorias.php','content-wrapper')">
                Categorías</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
            Ventas</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/compras.php','content-wrapper')">
                Compras</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/reportes.php','content-wrapper')">
                Reportes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/configuracion.php','content-wrapper')">
                Configuración</a>
        </li> -->
    </ul>

    
</nav>

<!-- /.navbar -->