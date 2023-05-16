<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #2c7a7b;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link {
            padding-right: 10px;
            padding-left: 10px;
        }

        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            text-align: center;
            color: #333;
        }

        .jumbotron h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .jumbotron p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .jumbotron .btn-primary {
            font-size: 18px;
            padding: 12px 30px;
        }

        .community-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center;
        }

        .community-section h3 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .community-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .community-section ul li {
            display: inline-block;
            margin: 0 10px;
        }

        .community-section ul li a {
            font-size: 20px;
        }

        footer {
            background-color: #2c7a7b;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }
        .bg-custom {
                background-color: #0896d8;
              }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <a class="navbar-brand" href="bienvenido.php">
                GuauMiau
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="bienvenido.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.html">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="album.html">Fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacion2.html">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="capacitacion2.html">Capacitación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donaciones2.html">Donaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto2.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comentarios.html">Comentarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="jumbotron">
        <div class="container">
            <h2>Bienvenido a GuauMiau - Cuidando el Ambiente</h2>
            <p>En GuauMiau nos preocupamos por el cuidado del medio ambiente y la protección de los animales. A través de nuestras actividades y eventos, buscamos generar conciencia sobre la importancia de preservar la naturaleza y promover prácticas sostenibles.</p>
            <p>Explora nuestras secciones para conocer más sobre nuestras iniciativas y cómo puedes participar:</p>
            <ul>
                <li><a href="eventos.html">Eventos</a>: Descubre los próximos eventos relacionados con el cuidado del ambiente y los animales.</li>
                <li><a href="album.html">Fotos</a>: Explora nuestras galerías de fotos que reflejan nuestras actividades y logros.</li>
                <li><a href="informacion2.html">Información</a>: Encuentra información útil y recursos sobre temas ambientales.</li>
                <li><a href="capacitacion2.html">Capacitación</a>: Participa en nuestros programas de capacitación para aprender sobre conservación y cuidado del ambiente.</li>
                <li><a href="donaciones.html">Donaciones</a>: Contribuye con nuestras causas a través de donaciones para apoyar proyectos ambientales y de protección animal.</li>
                <li><a href="contacto.html">Contacto</a>: Ponte en contacto con nosotros para obtener más información o colaborar en nuestras actividades.</li>
                <li><a href="comentarios.html">Comentarios</a>: Déjanos tus comentarios y sugerencias para mejorar nuestras acciones y servicios.</li>
                <li><a href="logout.php">Ingresar</a>: Si eres miembro, accede a tu cuenta para disfrutar de beneficios exclusivos.</li>
            </ul>
        </div>
    </div>

    <section class="community-section">
        <div class="container">
            <h3>¡Únete a nuestra comunidad!</h3>
            <p>Síguenos en nuestras redes sociales para estar al tanto de nuestras actividades y noticias:</p>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
    </section>

    <footer class="container-fluid bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Boulevard Belisario Domínguez Km 1081, sn, Terán, Tuxtla Gutiérrez, Chiapas, México</p>
                </div>
                <div class="col-md-6">
                    <p>&copy; GuauMiau Derechos reservados 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>