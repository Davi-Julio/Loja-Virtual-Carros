<?php

include_once "template/Template.php";

// Lógica Form BackEnd Página de Carrinho

if(isset($_POST['finalizarComprar'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  if($name === "" || $email === "")
  {
    echo 'Preecha os campos';
  }else{
   header("Location:compraFinalizada.php");
  }
}

?>

<form class="form" action="finalizarCarrinho.php" method="post">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome:</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Email:</label>
    <input name="email" type="email:" class="form-control" id="formGroupExampleInput2" placeholder="Email">
  </div>
  <button name="finalizarComprar" type="submit" class=" btn btn-success">Comprar</button>
</form>

<style>
.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 20px 0px;
}

.form input {
  width: 30vw;
  height: 6vh;
}
</style>