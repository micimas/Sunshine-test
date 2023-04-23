<?php require 'includes/header.php' ?>
<main>
  <section class="login">
    <div class="f-login">
      <form action="">
        <h1> Inicia session</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum aperiam dignissimos rem fugit praesentium</p>
        <div class="l-login">
          <div class="l-cont">
            <input type="text" id="user" class="l-input" placeholder=" " requerid name="">
            <label for="user" class="l-label">Usuario:</label>
            <span class="line"></span>
          </div>
          <div class="l-cont">
            <input type="password" id="password" class="l-input" placeholder=" " requerid name="">
            <label for="password" class="l-label">Contraseña:</label>
            <span class="line"></span>
          </div>
          
          <div>
            <input type="submit" class="btn-send" value="Enviar">
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<?php require 'includes/footer.php' ?>