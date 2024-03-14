<?php

session_start();
include_once 'template/Template.php';

// Verifica se o ID do produto foi passado
if (isset($_GET['id'])) {
  $produto_id = $_GET['id'];
  $current;

  foreach ($products as $value) {
    if ($value['id'] == $produto_id) {
      $current = $value;
    }
  }

  // Adiciona o produto ao carrinho
  if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
  }
  $_SESSION['carrinho'][] = $produto_id;
  echo "Produto adicionado ao carrinho.";
} else {
  echo "ID do produto não especificado.";
}
?>

<div id="container-car" class="container-store">
  <div id="card1" class="card" style="width: 18rem;">
    <img src="<?php $BASE_URL ?>Imgs/<?= $current['product'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $current['title'] ?></h5>
      <p><?= $current['price'] ?></p>
      <p class="card-text"> <?= $current['description']  ?> </p>
      <a class="btn btn-primary" href="ver_carrinho.php">Ver Carrinho</a>
    </div>
  </div>
</div>
<!--card-->