<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicação de teste">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- <link rel="modulepreload" href="../js/functions.js"> -->
  <!-- <link rel="modulepreload" href="../js/bairros.js"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Bairros | App</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header/index.php'; ?>

  <main>
    <div>

      <section>
        <div>
          <h2>Cadastro de Bairros</h2>

          <form id="df" action="../../controller/DistrictsController.php" method="post" autocomplete="off" spellcheck="true">
            <div>
              <fieldset>
                <legend>Prencha os campos abaixo</legend>

                <label>
                  <span>Bairro</span>

                  <input type="text" name="district[name]" maxlength="100" required>
                </label>

                <label>
                  <span>Cidade</span>

                  <input type="text" name="district[cityName]" maxlength="100" required>
                </label>
              </fieldset>

              <menu>
                <li><button type="reset">Limpar</button></li>
                <li><button type="submit">Salvar</button></li>
              </menu>
            </div>
          </form>
        </div>
      </section>

    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer/index.php'; ?>

  <?php require_once __DIR__ . '/includes/aside/index.php'; ?>

  <!-- <script type="module" src="../js/bairros.js"></script> -->
</body>
</html>