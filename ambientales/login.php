<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #333;
    }

    #logo {
      width: 40px;
      height: 40px;
      margin-right: 10px;
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
    }

    footer {
      background-color: #333;
      color: #fff;
    }
    .bg-custom {
            background-color: #0896d8;
          }
  </style>
  <title>Ingresar</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
      <a class="navbar-brand" href="login.php">
        GuauMiau
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="informacion.html">Información</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="capacitacion.html">Capacitación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donaciones.html">Donaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Ingresar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header> <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Inicio de sesión</h2><br><br>

        <form action="comprobacion.php" method="POST">
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control"> <br><br>
          </div>

          <div class="text-center">
            <input type="submit" value="Iniciar sesión" class="btn btn-primary"> <br><br><br>
          </div>
        </form>

        <p class="text-center">Registrarse <a href="registro.php">Regístrate aquí</a></p>
      </div>
    </div>
  </div><br><br>
  <footer class="container-fluid bg-dark text-white text-center py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Boulevard Belisario Domínguez Km 1081, sn, Terán,
            Tuxtla Gutiérrez, Chiapas, México</p>
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