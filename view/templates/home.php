<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="MyApp">
  <meta name="description" content="Aplicação de teste">
  <meta name="author" content="Cassiano Castro">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <link rel="stylesheet" href="view/css/reset.css">
  <link rel="stylesheet" href="view/css/global.css">
  <link rel="stylesheet" href="view/css/header.css">
  <link rel="stylesheet" href="view/css/main.css">
  <link rel="stylesheet" href="view/css/footer.css">

  <!--
    <base href="view/html/" target="_blank">
  -->
  <title>Aplicação | Home</title>
</head>
<body>
  <?php require_once __DIR__ . '/templates/header.php'; ?>

  <main>
    <div>
      <section>
        <h2>Bem-vindo</h2>

        <p>
          Olá, seja bem-vindo ao sistema de cadastro <br>
          Nesse sisteva você poderá realizar cadastros diversos. <br>
          Para isso, utilize o menu ao lado para escolher qual cadastro deseja.
        </p>
      </section>
    </div>

    <?php require_once __DIR__ . '/templates/aside.php'; ?>

  </main>

  <?php require_once __DIR__ . '/templates/footer.php'; ?>
</body>
</html>