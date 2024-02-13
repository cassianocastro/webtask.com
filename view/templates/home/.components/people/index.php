<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicação de teste">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- <link rel="modulepreload" href="../js/functions.js"> -->
  <link rel="modulepreload" href="./index.js">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Pessoas | App</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header/index.php'; ?>

  <main>
    <div>

      <section>
        <div>

          <h2>Cadastro de Pessoas</h2>

          <form id="pf" action="../../controller/PeopleController.php" method="post" autocomplete="off" spellcheck="true">
            <div>
              <fieldset>
                <legend>Preencha os campos abaixo</legend>

                <label>
                  <span>Nome</span>

                  <input type="text" name="person[name]" maxlength="50" required>
                </label>

                <label>
                  <span>Sobrenome</span>

                  <input type="text" name="person[surname]" maxlength="100" required>
                </label>

                <label>
                  <span>Idade</span>

                  <input type="number" name="person[age]" min="0" required>
                </label>

                <label>
                  <span>Filhos</span>

                  <select name="person[sons]" required>
                    <option value="0" label="Nenhum" selected></option>
                    <option value="1" label="1 filho"></option>
                    <option value="2" label="2 filhos"></option>
                    <option value="3" label="3 filhos"></option>
                    <option value="4" label="4 filhos ou mais"></option>
                  </select>
                </label>
              </fieldset>

              <menu>
                <li><button type="reset">Limpar</button></li>
                <li><button type="submit">Enviar</button></li>
              </menu>
            </div>
          </form>

        </div>
      </section>

    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer/index.php'; ?>

  <?php require_once __DIR__ . '/includes/aside/index.php'; ?>

  <script type="module" src="./index.js"></script>
</body>
</html>