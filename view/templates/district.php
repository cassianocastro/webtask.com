<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicação de teste">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="modulepreload" href="../js/functions.js">
  <link rel="modulepreload" href="../js/bairros.js">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Aplicação | Bairros</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header.php'; ?>

  <main>
    <section>
      <h2>Cadastro de Bairros</h2>

      <form id="districtForm" autocomplete="off" spellcheck="true" method="post" action="../../controll/district.php">
        <fieldset>
          <legend>Prencha os campos abaixo</legend>

          <label for="fieldDistrictName">Bairro:</label>
          <label for="fieldCity">Cidade:</label>

          <input required maxlength="100" type="text" id="fieldDistrictName" name="district[name]">
          <input required maxlength="100" type="text" id="fieldCity" name="district[cityName]">
        </fieldset>

        <menu>
          <button type="reset">Limpar</button>
          <button type="submit">Salvar</button>
        </menu>
      </form>
    </section>

    <?php require_once __DIR__ . '/includes/aside.php'; ?>

  </main>

  <?php require_once __DIR__ . '/includes/footer.php'; ?>

  <!-- <script type="module" src="../js/bairros.js"></script> -->
</body>
</html>