<?php include  "templates/header.php" ?>
<section class="vh-100 login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5 mb-4">
        <img src="imagenes/login.PNG" class="img-fluid"
          alt="Login image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Dirección email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Recordar
              </label>
            </div>
            <a href="" class="text-body">Olvidó su contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">No tiene cuenta? <a href="signup.html"
                class="link-danger">Registrarse</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<?php include  "templates/footer.php" ?>