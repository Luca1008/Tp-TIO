<?php include  "templates/header.php" ?>
<!--CONTACT PAGE-->
<div class="">
  <h3 class="text-warning">CONTACTO</h3>

  <div class="px-2">
    <form>
      <div class="col-md-3">
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group mt-3 mb-5">
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary ">Enviar</button>

    </form>
  </div>


  <div>
    <h3 class="titulo subrayado ancho"> REDES SOCIALES </h3>
    <ol class="noiconos, elementoslista">
      <li class="redes"> <img class="iconoredes" src="./Imagenes/instagram.png"> INSTAGRAM: </li>
      <li class="redes"> <img class="iconoredes" src="./Imagenes/facebook.png"> FACEBOOK: </li>
      <li class="redes"> <img class="iconoredes" src="./Imagenes/wsp.png"> WHATSAPP: 2494-123123 </li>
    </ol>
  </div>

</div>

<?php include  "templates/footer.php" ?>