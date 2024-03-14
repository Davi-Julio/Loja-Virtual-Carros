<?php

session_start();
include_once "template/Template.php";

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

// Verifica se houve erro na conexão
if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
  $carrinho = $_SESSION['carrinho'];
  $ids = implode(',', $carrinho);

  // Consulta os produtos no carrinho
  $sql = "SELECT id, title, price, description, product FROM loja WHERE id IN ($ids)";
  $result = $conn->query($sql);
  $total = 0;
?>
<h2>Carrinho de Compras</h2>
<?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
<div id="container-carrinh2" class="container-store">
  <div class="card" style="width: 18rem;">
    <img src="<?php $BASE_URL ?>Imgs/<?= $row['product'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $row['title'] ?></h5>
      <p><?= $row['price'] ?></p>
      <p class="card-text"> <?= $row['description']  ?> </p>
      <a href="remover_item.php?id=<?= $row['id'] ?>" class="btn btn-danger">Remover</a>
    </div>
  </div>
</div>
<!--card-->
<?php
      $total += (float)$row['price'];
    }
    ?>
<div class="total">
  <p: colspan=" 2">Total:</p>
    <h3>R$ <?php echo number_format($total, 2); ?></h3>
</div>
<a class=" btn btn-success" href="<?php $BASE_URL ?>finalizarCarrinho.php">Finalizar Comprar</a>
<?php
  }
} else {
  echo "<p>Carrinho vazio.</p>";
}