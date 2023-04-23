<?php require 'includes/header.php' ?>
<main>
  <section class="c-banner">
    <div class="contenedor">
      <div class="slider">
        <?php
          for ($cont=1; $cont<=6; $cont++) { 
        ?>
        <div class="contenido-slider">
          <img src="../img/portada/banner-<?php echo $cont ?>.jpg" class="img-banner">
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <section class="cualidades">
    <div class="c-cualidad">
      <h3>cualidad 1</h3>
      <div class="div-contenido">
        <i class="fa-solid fa-truck"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="c-cualidad">
      <h3>cualidad 1</h3>
      <div class="div-contenido">
        <i class="fa-solid fa-truck"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="c-cualidad">
      <h3>cualidad 1</h3>
      <div class="div-contenido">
        <i class="fa-solid fa-truck"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
    <div class="c-cualidad">
      <h3>cualidad 1</h3>
      <div class="div-contenido">
        <i class="fa-solid fa-truck"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
  </section>
  <section class="coleccion">
    <div class="div-colec">
      <div class="img-cat">
        <img src="../img/categoria/cat-1.png" alt="">
      </div>
      <div class="title-cat">
        <h2>
          Categoria
        </h2>
      </div>
    </div>
    <div class="div-colec">
      <div class="img-cat">
        <img src="../img/categoria/cat-1.png" alt="">
      </div>
      <div class="title-cat">
        <h2>
          Categoria
        </h2>
      </div>
    </div>
    <div class="div-colec">
      <div class="img-cat">
        <img src="../img/categoria/cat-1.png" alt="">
      </div>
      <div class="title-cat">
        <h2>
          Categoria
        </h2>
      </div>
    </div>
    <div class="div-colec">
      <div class="img-cat">
        <img src="../img/categoria/cat-1.png" alt="">
      </div>
      <div class="title-cat">
        <h2>
          Categoria
        </h2>
      </div>
    </div>
    
  </section>
  <section class="slider-card">
    <div class="div-title">
      <h1 class="sub-title">NUESTRA COLECCION PREFERIDA</h1>
    </div>
    <div class="wrapper">
      <i  id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
        <?php 
        for ($pr=1; $pr< 9; $pr++) { 
        ?>
        <div class="card">
          <div class="content" draggable="false">
            <img src="../img/product/producto-<?php echo $pr ?>.jpg" class="img-product">
            <h2 class="name-prod">nombre producto</h2>
            <button class="buy-<?php echo $pr ?> boton">view now</button>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
  </section>
  <section class="art-new">
    <div class="promocion">
      <img src="../img/product/producto-15.jpg" alt="">
    </div>
    <div class="div-art">
      <div class="div-title">
        <strong>ARTICLE NEWS!!!</strong>
        <h2>ENCUENTRA TU ACCESORIO PREFERIDO</h2>
      </div>
      <div class="sl-product">
        <i  id="left-2" class="fa-solid fa-angle-left"></i>
        <div class="carrusel-pn">
        <?php for ($pn=0; $pn <4 ; $pn++) { ?>
          <div class="card-pn">
            <div class="product-new">
              <img src="../img/product/producto-<?php echo 15+$pn ?>.jpg" alt="">
              <h3>broccoli</h3>
              <div class="price">$2.00</div>
            </div>
          </div>
          <?php }?>
        </div>
        <i  id="right-2" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </section>

</main>
<?php require 'includes/footer.php' ?>
