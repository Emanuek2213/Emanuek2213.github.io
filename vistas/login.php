<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JUSIVA | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="vistas/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    
<div class="login-box">

    <div class="card card-outline card-primary">
        
        <div class="card-header text-center">

            <h1 class = "h1"><b>JUSIVA</b></h1>

        </div>

        <div class="card-body">

            <!-- FORMULARIO DE INICIO DE SESION -->
            <form method = "post" class= "needs-validation-login" novalidate>

                <!-- USUARIO DEL SISTEMAW -->
                <div class= "input-group mb-3">

                    <input class = "form-control" type="text" placeholder = "Usuario" name= "loginUsuario" required>

                    <div class = "input-group-append">
                        
                        <div class = "input-group-text">
                        
                            <span class = "fas fa-user"></span>
                        
                        </div>
                    
                    </div>

                    <div class="invalid-feedback">Debe ingresar su usuario.</div>

                </div>

                <!-- CONTRASEÑA DEL USUARIO -->
                <div class= "input-group mb-3">

                    <input class = "form-control" type="password" placeholder = "Contraseña" name= "loginPassword" required>

                    <div class = "input-group-append">
                        
                        <div class = "input-group-text">
                        
                            <span class = "fas fa-lock"></span>
                        
                        </div>

                    </div>

                    <div class="invalid-feedback">Debe ingresar su contraseña.</div>

                </div>

                <!-- BOTON INGRESO AL SISTEMA -->
                <div class="row">
                    <?php
                        $login = new UsuarioControlador();
                        $login ->login();
                    ?>

                    <div class="col-md-12 text-center">

                        <button type = "submit" class = "btn btn-info">Iniciar Sesion</button>
                        
                    </div>    
                </div>
      
            </form>

        </div> <!-- end card body -->
        
        
    </div>


</div>
<!-- end login box -->

<script>

    $(document).ready(function(){
        adjustStylesForTablet();
    })

    function adjustStylesForTablet() {
        var inputGroup = document.querySelector('.input-group');
        var formControl = document.querySelector('.form-control');
        var inputGroupAppend = document.querySelector('.input-group-append');
        var inputGroupText = document.querySelector('.input-group-text');

        if (window.innerWidth <= 768) {
            // Aplicar estilos para tabletas
            inputGroup.style.flexDirection = 'column';
            inputGroup.style.alignItems = 'stretch';

            formControl.style.marginBottom = '0.5rem';

            inputGroupAppend.style.width = '100%';
            inputGroupText.style.justifyContent = 'flex-start';
        } else {
            // Revertir a estilos por defecto para pantallas más grandes
            inputGroup.style.flexDirection = '';
            inputGroup.style.alignItems = '';

            formControl.style.marginBottom = '';

            inputGroupAppend.style.width = '';
            inputGroupText.style.justifyContent = '';
        }
    }

    // Ejecutar la función al cargar la página
    window.addEventListener('load', adjustStylesForTablet);

    // Ejecutar la función al redimensionar la ventana
    window.addEventListener('resize', adjustStylesForTablet);
</script>

<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>

</body>
</html>