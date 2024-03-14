<?php

session_start();
include_once "./template/Template.php"

?>

<section class="section">
  <div class="conteudo-section">
    <h1>Potência e Estilo: Encontre o Seu Carro Esportivo dos Sonhos!Potência e Estilo: Encontre o Seu Carro Esportivo
      dos Sonhos!
    </h1>
    <p>Bem-vindo à nossa página de vendas de carros esportivos, onde a emoção da velocidade encontra o requinte do
      design. Aqui, você encontrará uma seleção exclusiva dos mais deslumbrantes e potentes carros esportivos
      disponíveis no mercado. Desde os clássicos ícones até as últimas novidades em tecnologia automotiva, temos o
      veículo que vai satisfazer até mesmo os mais exigentes entusiastas.</p>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/Imgs/FerrariBlack.webp" class="d-block w-150" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Imgs/ferrari-purosangue.jpg" class="d-block w-150" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Imgs/Porsche.webp" class="d-block w-150" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
</section>
<!--Section-->


<main class="main-store">
  <div class="title-main-store">
    <h1>Encontre os Melhoress Carros!
    </h1>
  </div>
  <!--title-main-store-->
  <div class="container-store">
    <?php
    $total_itens_carrinho = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
    foreach ($products as $product) {
    ?>
    <div class="card">
      <img src="<?php $BASE_URL ?>Imgs/<?= $product['product'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $product['title'] ?></h5>
        <p><?= $product['price'] ?></p>
        <p class="card-text"> <?= $product['description']  ?> </p>
        <a href="carrinho.php?id=<?= $product['id'] ?>" class="btn btn-primary">Comprar</a>
      </div>
    </div>
    <!--card-->
    <?php
    }
    ?>
  </div>
  <!--container-store-->
  <p>Total de itens no carrinho: <?php echo $total_itens_carrinho; ?></p>
  <a class="btn btn-success" href="ver_carrinho.php">Ver Carrinho</a>
</main>
<!--main store-->

<section class="section-cars">
  <div class="container-cars">
    <div class="container-cars-1">
      <div class="conteudo-container-car-1">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit non soluta rerum labore omnis reiciendis
          porro
          reprehenderit! A, est iure!</p>
      </div>
      <!--conteudo-container-car-1-->
      <figure class="img-container-cars-1">
        <img src="/Imgs/Carro1.jpg" alt="">
      </figure>
      <!--img-container-cars-1-->
    </div>
    <!--container-cars 1-->

    <div class="container-cars-2">
      <figure class="img-container-cars-2">
        <img src="./Imgs/jaguar.jpeg" alt="">
      </figure>
      <!--img-container-cars-2-->
      <div class="conteudo-container-car-2">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit non soluta rerum labore omnis reiciendis
          porro
          reprehenderit! A, est iure!</p>
      </div>
      <!--conteudo-container-car-2-->
    </div>
    <!--container-cars 2-->

    <div class="container-cars-3">
      <div class="conteudo-container-car-3">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit non soluta rerum labore omnis reiciendis
          porro
          reprehenderit! A, est iure!</p>
      </div>
      <!--conteudo-container-car-3-->
      <figure class="img-container-cars-3">
        <img src="./Imgs/jaguar.webp" alt="">
      </figure>
      <!--img-container-cars-3-->
    </div>
    <!--container-cars 3-->
  </div>
  <!--container-cars-->
</section>
<!--section-cars-->


<?php

include_once "./template/footer.php";

?>