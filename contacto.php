<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autos Facu/contacto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/miLogo.png" alt="milogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">asasa</span>
        </button>


        <!-- menu de navegacion -->

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav navegacion mx-5">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogo.html">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main>

    
    <div class="container">
      
      <h1>CONTACTO</h1>
      
    
  </div>

<!-- medios de contacto -->

<div class="padre" id="padre">
  <div class="col-xl-3 col-md-6 col-sm-12" id="hijo">
    <!-- Tarjeta con ícono de Ubicación -->
<div class="card">
  <!-- Ícono de Ubicación de Font Awesome -->
  <i class="fas fa-map-marker-alt"></i>
  <h3>Ubicación</h3>
  <p>Av. 32 1524, La Plata</p>
</div>
  </div>
  <div class="col-xl-3 col-md-6 col-sm-12" id="hijo">
<div class="card">
  <!-- Ícono de teléfono de Font Awesome -->
  <i class="fas fa-phone"></i>
  <h3>Teléfono</h3>
  <p>0221 479-9559</p>
</div>
  </div>
  <div class="col-xl-3 col-md-6 col-sm-12" id="hijo">
    <!-- Tarjeta con ícono de WhatsApp -->
    <div class="card">
      <!-- Ícono de WhatsApp de Font Awesome -->
      <i class="fab fa-whatsapp"></i>
      <h3>WhatsApp</h3>
      <p>¡Contáctanos por WhatsApp!</p>
    </div></div>
  
  <div class="col-xl-3 col-md-6 col-sm-12" id="hijo">
    <!-- Tarjeta con ícono de Instagram -->
<div class="card">
  <!-- Ícono de Instagram de Font Awesome -->
  <i class="fab fa-instagram"></i>
  <h3>Instagram</h3>
  <p><a href="https://www.instagram.com/autos_facu/" target="_blank">@autos_facu</a></p>
</div>
  </div>
</div>

    <!-- form -->

 <!-- <form class="container" id="formulario">
      <h4>O vía email</h4>
      <div class="mb-1 mt-4">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Mensaje</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary mt-4 botton">Enviar</button>
  </form>
</main> -->

<!--formulario de chat gpt-->


<form action="correo.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>


  <!-- footer -->

<footer class="footer">
  <div class="container-fluid">
    <div class="copyright">
      &copy; Copyright <strong><span>Autos Facu</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      Designed by <a href="img/myself.jpg" target="_blank">MySelf</a>
    </div>
  </div>
</footer>

<!-- enlace de bootstrap -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>



</html>