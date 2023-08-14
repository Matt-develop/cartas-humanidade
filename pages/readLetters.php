<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Leia as Cartas!</title>
</head>
<body>

  <div class='container'>

    <h1 id='titulo'>Leia as cartas!</h1>
    <h3 style='text-align: center' id='subtitulo'>De pessoas, para pessoas.</h3>
    <h3 style='font-size: 1.4em; margin-top: 2em;' id='titulo'>Ouça o que elas tem a dizer.</h3>

  </div>

  <div class='cartas'>

    <?php
        include ('../scripts/getLetters.php');
    ?>

    <h3 style='margin: 2em;' id='aviso'>É bem simples por enquanto, mas fique a vontade para escrever se quiser (:</h3>

  </div>
  
</body>
</html>