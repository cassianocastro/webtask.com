<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicação de teste">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- <link rel="modulepreload" href="../js/functions.js"> -->
  <!-- <link rel="modulepreload" href="../js/funcionario.js"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Funcionários | App</title>
</head>

<body>
  <?php require_once __DIR__ . '/includes/header/index.php'; ?>

  <main>
    <div>

      <section>
        <div>

          <h2>Cadastro de Funcionários</h2>

          <form id="ef" action="../../controller/EmployeesController.php" method="post" autocomplete="off" spellcheck="true">
            <div>
              <fieldset>
                <legend>Preencha todos os campos abaixo</legend>

                <label>
                  <span>Nome Completo</span>

                  <input type="text" name="employee[name]" maxlength="300" required>
                </label>

                <label>
                  <span>Matrícula</span>

                  <input type="text" name="employee[registration]" maxlength="100" required>
                </label>

                <label>
                  <span>Data de Admissão</span>

                  <input type="date" name="employee[admission]" required>
                </label>

                <label>
                  <span>Salário</span>

                  <input type="number" name="employee[wage]" min="0" required>
                </label>

                <label>
                  <span>Filhos</span>

                  <input type="number" name="employee[sons]" min="0" required>
                </label>

                <label>
                  <span>Cargo</span>

                  <select name="employee[office]" required>
                    <option value="Gerente" label="Gerente"></option>
                    <option value="Encarregado" label="Encarregado"></option>
                    <option value="Operador" label="Operador"></option>
                    <option value="Telefonista" label="Telefonista"></option>
                    <option value="Motorista" label="Motorista"></option>
                  </select>
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

  <!-- <script type="module" src="../js/funcionario.js"></script> -->
</body>
</html>