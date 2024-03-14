<?php

include_once './helper/url.php';
include_once './Model/config.php';
include_once './Controller/controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Cars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php $BASE_URL ?>Css/style.css">
  <link rel="stylesheet" href="<?php $BASE_URL ?>/Css/MediaQuery.css">
  <link rel="short icon" href="<?php $BASE_URL ?>Imgs/icon.gif">
</head>

<body>

  <header class="header">
    <figure class="img-header">
      <img src="<?php $BASE_URL ?>Imgs/Slogan.avif" alt="">
    </figure>
    <!--img-header-->
    <nav class="nav">
      <ul>
        <li><a href="<?php $BASE_URL ?>/">Home</a></li>
        <li><a href="">Products</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
    <!--nav-->
  </header>
  <!--header-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="/Js/script.js"></script>

</body>

</html>