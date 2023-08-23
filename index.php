<!DOCTYPE html>
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
<h2 style="text-align:center"> Selecione seu dispositivo de condição:</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/camera.png" alt="Câmera">
      <div class="container">
        <p> Câmera Wi-Fi</p>
        <a href="automacoes.php?id=camera">
          <p><button class="button">Selecionar</button></p>
        </a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/temperatura.PNG" alt="Temperatura">
      <div class="container">
        <p>Sensor de temperatura</p>
        <a href="automacoes.php?id=temperatura">
          <p><button class="button">Selecionar</button></p>
        </a>
      </div>
    </div>
  </div>
</div>

<footer class="fixarRodape">
  <div class="mt-2 p-2 text-white text-center">
    <img src="img/logo2.JPG" alt="Temperatura">
    <p style="color: #00a335;"> Sempre que desejar reiniciar a consulta, basta clicar no botão 'Home' no canto superior esquerdo. </p>
  </div>
</footer>

</body>
</html>
