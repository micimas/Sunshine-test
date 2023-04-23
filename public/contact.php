<?php require 'includes/header.php' ?>
<main>
  <section class="contact">
    <div class="sub-title">
      <h1>CONTACTO</h1>
      <p>Siempre será un placer atenderte. Si tienes cualquier duda, inquietud o comentario, por favor, contáctanos de inmediato.Recuerda que también puedes escribirnos por Facebook, Messenger o Instagram Direct Message para una atención en tiempo real</p>
    </div>
    <div class="div-contact">
      <div class="form-contact">
        <div class="sub-title">
          <h1>Escribenos</h1>
          <p>Estaremos encantados de atender tus consultas. Por ello, completa el siguiente formulario y déjanos saber tu inquietud.</p>
        </div>
        <div class="div-form">
          <form action="">
            <div class="f-cont">
              <input type="text" id="name" class="f-input" placeholder=" " requerid
               name="">
              <label for="name" class="f-label">Nombre:</label>
              <span class="line"></span>
            </div>
            <div class="f-cont">
              <input type="text" id="last-n" class="f-input" placeholder=" " requerid
               name="">
              <label for="last-n" class="f-label">Apellido:</label>
              <span class="line"></span>
            </div>
            <div class="f-cont">
              <input type="number" id="phone" class="f-input" placeholder=" " requerid
               name="" maxlength="9" min="0">
              <label for="phone" class="f-label">Telefono:</label>
              <span class="line"></span>
            </div>
            <div class="f-cont">
              <input type="email" id="email" class="f-input" placeholder=" " requerid
               name="">
              <label for="email" class="f-label">Email:</label>
              <span class="line"></span>
            </div>
            <div class="f-cont">
              <textarea type="text" id="message" class="f-text" placeholder=" " name=""></textarea>
              <label for="message" class="f-label">Mensaje:</label>
              <span class="line"></span>
            </div>
            <div>
              <input type="submit" class="btn-send" value="Enviar">
            </div>
          </form>
        </div>
      </div>
      <div class="datos-contact">
        <div class="div-title">
          <h1>Contactanos</h1>
        </div>
        <div class="datos">
        <i class="fa-solid fa-phone"></i>
          <div class="div-datos">
            <h1>Telefono</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <a href="">+51 987 654 321</a>
          </div>
        </div>
        <div class="datos">
          <i class="fa-solid fa-envelope-open-text"></i>
          <div class="div-datos">
            <h1>Email</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <a href="">sunshine@gmail.com</a>            
          </div>
        </div>
        <div class="datos">
          <i class="fa-solid fa-location-dot"></i>
          <div class="div-datos">
            <h1>Encuentranos</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>San vicente - cañete</p>
          </div>
        </div>
        <div class="datos">
        <i class="fa-regular fa-clock"></i>
        <div class="div-datos">
            <h1>Horarios</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>Lunes - Viernes - 8:00am a 07:00pm.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require 'includes/footer.php' ?>