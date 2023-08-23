<!DOCTYPE html>
<?php
  $post_id = $_GET['id'];

  if ($post_id == "temperatura"){
    $box_1 = "Se a temperatura baixar de X° ligue o ar-condicionado.";
    $box_2 = "Se a Umidade baixar de X% ligue o Umidificador.";
  }else{
    $box_1 = "Se entrar em casa, desligar a câmera.";
    $box_2 = "Se houver detecção de pessoas, disparar sirene.";
  }
?>


<html lang="en">
<head>
  <title>Auxiliar de automação</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <nav class="navbar navbar-light" style="background-color: #00a335;">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" style="color: white;" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </nav>

<p></p>
<h3 style="text-align:center; font-weight: bold">Muito bem!</h3>
<h3 style="text-align:center">Abaixo estão algumas sugestões de automação com seu dispositivo:</h3>

<div class="row">

  <div class="column">
    <div class="card">
      <div class="container">
        <p></p>
        <p><?php echo $box_1; ?></p>
        <a href="passo_a_passo.php?id=<?php echo $post_id; ?>&box=box_1">
        <p><button class="button">Aprenda como fazer!</button></p>
        </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <p></p>
        <p><?php echo $box_2; ?></p>
        <a href="passo_a_passo.php?id=<?php echo $post_id; ?>&box=box_2">
        <p><button class="button">Aprenda como fazer!</button></p>
        </a>
      </div>
    </div>
  </div>

</div>

<footer class="fixarRodape">
  <div class="mt-2 p-2 text-white text-center">
    <img src="img/logo2.JPG" alt="logo">
    <p style="color: #00a335;"> Sempre que desejar reiniciar a consulta, basta clicar no botão 'Home' no canto superior esquerdo. </p>
  </div>
</footer>

</body>
</html>
