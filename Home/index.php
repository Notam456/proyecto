<?php 
    session_start();
    if($_POST){
        include_once '../configuraciones/bd.php';
        $conexionBD=BD::crearInstancia(); 

        $sentencia=$conexionBD->prepare("SELECT *,count(*) as n_usuarios
        FROM `usuarios` 
        WHERE `usuario` =:usuario 
        AND `contraseña` =:password
        ");

        $usuario=$_POST['usuario'];
        $password=$_POST['password'];

        $sentencia->bindParam(':usuario',$usuario);
        $sentencia->bindParam(':password',$password);

        $sentencia->execute();
        
        $registro=$sentencia->fetch(PDO::FETCH_LAZY);
        if($registro["n_usuarios"]>0){
            $_SESSION['usuario']=$registro["usuario"];
            $_SESSION['logged']=true;
            header("Location:/app/mainmenu/index.php");
        } else{     
            $mensaje="Usuario o contraseña incorrectos";
        }
    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="GBV.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="/app/sweetalert/sweetalert2.min.css">
            
            <script src="/app/sweetalert/sweetalert2.all.min.js"></script>

    <title>MPPST</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">




    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">MPPST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="mision.html">Misión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vision.html">Visión</a>
                    </li>
                    <li class="nav-item">
                </ul>
<!-- Botón para abrir el modal -->

             <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Iniciar Sesión</a>
<!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mx-auto modal-body">
                            <div class="mx-auto form-box">
                                <form class="mx-auto form" action='' method="post">
                                <?php if(isset($mensaje)){ ?>
                                    <div class="alert alert-danger" role="alert"> <strong><?php echo $mensaje; ?></strong>
                                    </div>
                                    <script>
                                            $(document).ready(function(){
                                                $("#exampleModal").modal('show');
                                            });
                                    </script>
                                <?php } ?>
                                    <span class="mx-auto title">Iniciar Sesión</span>
                                    <span class="subtitle"></span>  
                                    <div class="mx-auto form-container">

                                        <input type="text" class="input form-control" name="usuario" id="usuario" placeholder="Usuario">
                                        
                                        <br>
                                        <input type="password" class="input form-control" name="password" id="password" placeholder="Contraseña">
                                        <br>
                                        
                                        
                                    </div>
                                    <button
                                        name=""
                                        id=""
                                        class="btn btn-primary"
                                        type="submit"
                                        role="button"
                                        >Entrar</button
                                    >
                                    
                                </form>
                                <div class="form-section">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h3 class="text-white text-uppercase">Asesoramiento a empleadores y trabajadores</h3>
                        <h6 class="display-3 my-4"></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h3 class="text-white text-uppercase">Investigaciones laborales</h3>
                        <h1 class="display-3 my-4"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">MPPST<span class="dot">.</span></h4>
                        <p>Ministerio del Poder Popular para el Proceso Social del Trabajo</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                        </div>
                        <div class="col-auto conditions-section">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>









    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
