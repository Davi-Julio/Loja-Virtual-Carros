<?php
session_start();

// Verifica se o ID do produto foi passado
if (isset($_GET['id'])) {
  $produto_id = $_GET['id'];

  // Remove o produto do carrinho
  if (($key = array_search($produto_id, $_SESSION['carrinho'])) !== false) {
    unset($_SESSION['carrinho'][$key]);
    echo "Produto removido do carrinho.";
    header('Location: /index.php');
  } else {
    echo "Produto não encontrado no carrinho.";
  }
} else {
  echo "ID do produto não especificado.";
}
