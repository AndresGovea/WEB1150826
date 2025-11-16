<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Academia MELI</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.svg">
</head>
 <body class="d-flex align-items-center py-4" style="background-color: #FEE600;">
    <main class="form-signin w-100 m-auto">
      <form action="./logica/validarLogin.php" method="POST" >
        <img
          class="mb-4"
          src="img/logo.svg"
          alt="Logo de Mercado Libre"
          width="72"
          height="57"
        />
        <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="nombre@ejemplo.com"
          />
          <label for="floatingInput">Correo electrónico</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Contraseña"
          />
          <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="checkDefault"
          />
          <label class="form-check-label" for="checkDefault">
            Recordar contraseña
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">
          Iniciar sesión
        </button>

        <div class="text-center mt-3">
            <a href="registro.php">No tengo cuenta</a>
        </div>
        
        <div class="text-center mt-3">
            <a href="#">Olvide mi contraseña</a>
        </div>

        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2025</p>
      </form>
    </main>
        <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>