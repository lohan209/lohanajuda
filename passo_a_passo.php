<!DOCTYPE html>
<?php
  $post_id = $_GET['id'];
  $post_box = $_GET['box'];

  if ($post_box == "box_1"){
    if ($post_id == "temperatura"){
      $explain = "<p>1) Vá no menu de Rotinas de seu aplicativo;</p>
                  <p>2) Selecione o botão + para criar novas automações;</p>
                  <p>3) Selecione a opção 'Automação';</p>
                  <p>4) Selecione o seu sensor de temperatura;</p>
                  <p>5) Selecione a condição 'Temperatura abaixo de:';</p>
                  <p>6) Defina a temperatura limite e clique em 'Ok';</p>
                  <p>7) Selecione a opção 'Executar Ação';</p>
                  <p>8) Seleciona a opção 'Ação do dispositivo';</p>
                  <p>9) Selecione o 'Ar-condicionado';</p>
                  <p>10) Selecione a opção 'Controle' e 'Ligado';</p>
                  <p>11) Clique em Ok;</p>
                  <p>12) Nomeie sua rotina e clique em Salvar;</p>";
    }elseif ($post_id == "camera"){
      $explain = "<p>1) Vá no menu de Rotinas de seu aplicativo; </p>
                  <p>2) Selecione o botão + para criar novas automações; </p>
                  <p>3) Selecione a opção 'Chegou em algum lugar'; </p>
                  <p>4) Selecione a localização de sua residência; </p>
                  <p>5) Selecione a opção 'Executar Ação'; </p>
                  <p>6) Seleciona a opção 'Ação do dispositivo'; </p>
                  <p>7) Selecione a sua Câmera Wi-Fi; </p>
                  <p>8) Selecione a opção 'Modo inativo' e 'Habilitar'; </p>
                  <p>9) Clique em Ok; </p>
                  <p>10) Nomeie sua rotina e clique em Salvar; </p>";
    }
  }
  else{
    if ($post_id == "temperatura"){
      $explain = "
              <p>1) Vá no menu de Rotinas de seu aplicativo; </p>
              <p>2) Selecione o botão + para criar novas automações; </p>
              <p>3) Selecione a opção 'Automação'; </p>
              <p>4) Selecione o seu sensor de temperatura; </p>
              <p>5) Selecione a condição Umidade abaixo de:'; </p>
              <p>6) Defina a Umidade limite e clique em 'Ok'; </p>
              <p>7) Selecione a opção 'Executar Ação'; </p>
              <p>8) Seleciona a opção 'Ação do dispositivo'; </p>
              <p>9) Selecione o seu 'Smart Plug'; </p>
              <p>10) Selecione a opção 'Controle' e 'Ligado'; </p>
              <p>11) Clique em Ok; </p>
              <p>12) Nomeie sua rotina e clique em Salvar; </p>";
    }elseif ($post_id == "camera"){
      $explain = "<p>1) Vá no menu de Rotinas de seu aplicativo; </p>
                  <p>2) Selecione o botão + para criar novas automações; </p>
                  <p>3) Selecione a opção 'Automação'; </p>
                  <p>4) Selecione o sua Câmera Wi-Fi; </p>
                  <p>5) Selecione a condição 'Humano Detectado'; </p>
                  <p>6) Clique em 'Ok'; </p>
                  <p>7) Selecione a opção 'Executar Ação'; </p>
                  <p>8) Seleciona a opção 'Ação do dispositivo'; </p>
                  <p>9) Selecione sua Sirene; </p>
                  <p>10) Selecione a opção 'Alarme' e 'Ligado'; </p>
                  <p>11) Clique em Ok; </p>
                  <p>12) Nomeie sua rotina e clique em Salvar; </p>";
    }
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
<h3 style="text-align:center">Siga o passo a passo abaixo e configure sua automação!</h3>

<div class="row">

  <div class="column">
    <div class="card">
      <div class="container">
        <p></p>
        <p><?php echo $explain; ?></p>
        <a href="automacoes.php?id=<?php echo $post_id; ?>">
        <p><button class="button">Voltar</button></p>
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
