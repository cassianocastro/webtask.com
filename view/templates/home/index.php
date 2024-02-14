<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="application-name" content="MyApp">
  <meta name="description" content="Aplicação de teste">
  <meta name="author" content="Cassiano Castro">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">
  <link rel="stylesheet" type="text/css" href="view/templates/home/index.css">

  <title>Home | App</title>
</head>
<body>
  <?php require_once __DIR__ . '/../includes/header/index.php'; ?>

  <main>
    <div>

      <?php require_once __DIR__ . '/.components/employee/index.php'; ?>

      <?php require_once __DIR__ . '/.components/list/index.php'; ?>

    </div>
  </main>

  <?php require_once __DIR__ . '/../includes/footer/index.php'; ?>

  <?php require_once __DIR__ . '/../includes/aside/index.php'; ?>

  <!-- <script type="module" src="./index.js"></script> -->
</body>
</html>