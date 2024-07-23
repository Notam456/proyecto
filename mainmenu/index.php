<!doctype html>
<html lang="en">

<head>
    <title>Aplicacion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="/app/mainmenu/css/style.css">
    <link rel="stylesheet" href="../Home/css/style.css">


    <style>
        body {
            font-family: "Barlow", sans-serif
        }

        .barra-superior {
            background-color: light-gray;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .contenido {
            margin-left: 200px;
            padding: 1px 16px;
        }

        .expediente {
            cursor: pointer;
        }

        .expediente-info {
            display: none;
            padding: 5px;
            margin-top: 5px;
            background-color: #f9f9f9;
        }

        .busqueda {
            margin: 20px 0;
        }

        .formulario-crear {
            margin: 20px;
        }

        .formulario-crear input,
        .formulario-crear button {
            display: block;
            margin-bottom: 10px;
        }

        .input {
            max-width: 190px;
            background-color: #f5f5f5;
            color: #242424;
            padding: .15rem .5rem;
            min-height: 40px;
            border-radius: 4px;
            outline: none;
            border: none;
            line-height: 1.15;
            box-shadow: 0px 10px 20px -18px;
        }

        .panel-container {
            width: 100%;
        }

        .button-container {
            text-align: center;
        }

        .panel {
            display: none;
        }

        .active-panel {
            display: block;
        }

        input:focus {
            border-bottom: 2px solid #5b5fc7;
            border-radius: 4px 4px 2px 2px;
        }

        input:hover {
            outline: 1px solid lightgrey;
        }

        h2,
        h3 {
            color: #333;
        }
    </style>

</head>
<header>

    <?php include '../templates/barra_lateral.html'; ?>
    <?php include '../templates/navbar.html'; ?>



</header>

<body>
    <header>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="row">

                        <main class="site-content">
                            <section class="search-helper">
                                <div class="container">
                                    <div class="search-helper__inner">
                                        <h2 class="h1">
                                            MPPPST/Expedientes</h2>
                                    </div>
                                </div>
                            </section>

                            <section class="documentation-links">
                                <div class="container">
                                    <div class="documentation-links__inner">
                                        <div class="row">
                                            <div class="col">
                                                <div class="documentation-links__single">
                                                    <a href="../nini/index.php" class="anchor-overlay">null</a>
                                                    <figure class="documentation-links__icon">
                                                        <img src="./images/assignment.svg" alt="File Pencil Icon" style=" width: 25px; " height="28" width="28">
                                                    </figure>
                                                    <div class="documentation-links__content">
                                                        <h2>Nuevo expediente</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="documentation-links__single">

                                                    <figure class="documentation-links__icon">
                                                        <a href="../secciones/direcciones/direcciones.php" class="anchor-overlay">null</a>
                                                        <img src="./images/files.svg" alt="File Stack Icon" style=" width: 25px; " height="28" width="25">
                                                    </figure>
                                                    <div class="documentation-links__content">
                                                        <h2>Administrador de direcciones</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="documentation-links__single">
                                                    <a href="../secciones/perimir/index.php" class="anchor-overlay">null</a>
                                                    <figure class="documentation-links__icon">
                                                        <img src="./images/grid.svg" alt="Grid Lines Icon" style=" width: 25px; " height="28" width="28">
                                                    </figure>
                                                    <div class="documentation-links__content">
                                                        <h2>Expedientes a Perimir</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="documentation-links__single">
                                                    <a href="../secciones/usuarios/usuarios.php" class="anchor-overlay">null</a>

                                                    <figure class="documentation-links__icon">
                                                        <img src="./images/not-graded.svg" alt="File Exclamation Icon" style=" width: 25px; " height="28" width="28">
                                                    </figure>
                                                    <div class="documentation-links__content">
                                                        <h2>Gestión de Usuarios</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    </section>
                    </main>

                    <script src="./js/script.min.js"></script>
                </div>
            </div>
        </div>


        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                if (sidebar.style.display === "none") {
                    sidebar.style.display = "block";
                } else {
                    sidebar.style.display = "none";
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>