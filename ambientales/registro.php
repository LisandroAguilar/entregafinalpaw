<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Usuario</title>
  <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      .bg-custom {
            background-color: #0896d8;
          }
      footer {
        background-color: #333;
        color: #fff;
      }
    </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
      <a class="navbar-brand" href="registro.php">
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
          <li class="nav-item">
            <a class="nav-link" href="login.php">Ingresar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container mt-4">
    <h1 class="text-center">Registro de Nuevo Usuario</h1>
    <form action="guardarUsuario.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" id="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" name="Correo" id="correo" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="clave" class="form-label">Contraseña:</label>
            <input type="password" name="Clave" id="clave" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" name="Telefono" id="telefono" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <input type="text" name="Estado" id="estado" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="municipio" class="form-label">Municipio:</label>
            <input type="text" name="Municipio" id="municipio" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="colonia" class="form-label">Colonia:</label>
            <input type="text" name="Colonia" id="colonia" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="codigoPostal" class="form-label">Código Postal:</label>
            <input type="text" name="CodigoPostal" id="codigoPostal" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Quiero registrarme</button>
      </div>
      <p class="text-center mt-3">¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </form>
  </main><br><br>

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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>