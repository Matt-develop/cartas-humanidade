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

    <h1 id='titulo'>Protótipo: ler cartas!</h1>
    <h3 id='subtitulo'>De pessoas, para pessoas. Ouça o que elas tem a dizer.</h3>

    <?php
      include ('../scripts/getLetters.php');
    ?>

    <h3 id='aviso'>É bem simples por enquanto, mas fique a vontade para escrever se quiser (:</h3>

  </div>
  
</body>
</html>