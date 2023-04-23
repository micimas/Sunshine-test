<?php require 'includes/header.php' ?>
<main>
  <section class="s-product">
    <div class="nav-product">
    <ul>
      <li><a href="">Collares</a></li>
      <li><a href="">Pulseras</a></li>
      <li><a href="">Gargantinas</a></li>
      <li><a href="">Aretes</a></li>
    </ul>
    </div>
    <div class="container">
      <div class="cont-cat">
        <h3 class="title-cat">collares</h3>
        <div class="product-container">
          <?php for ($p=0; $p < 8; $p++) { ?>
          <div class="product" data-name="p-1">  
            <img src="../img/product/producto-<?php echo $p ?>.jpg" class="img-product">
            <h3>nombre <?php echo $pr ?></h3>
            <div class="price">$20.00</div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require 'includes/footer.php' ?>