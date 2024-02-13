<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Aplicação de teste">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- <link rel="modulepreload" href="../js/functions.js"> -->
  <link rel="modulepreload" href="./index.js">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Cidades | App</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header/index.php'; ?>

  <main>
    <div>

      <section>
        <div>

          <h2>Cadastro de Cidades</h2>

          <form id="fc" autocomplete="off" spellcheck="true" method="post" action="../../index.php">
            <div>
              <fieldset>
                <legend>Preencha os campos com seu endereço</legend>

                <label>
                  <span>Cidade</span>

                  <input type="text" name="city[name]" maxlength="100" required>
                </label>

                <label for="fieldState">
                  <span>Estado</span>

                  <select name="city[state]" required>
                    <optgroup label="Região Norte">
                      <option value="AP">Amapá</option>
                      <option value="AM">Amazonas</option>
                      <option value="AC">Acre</option>
                      <option value="TO">Tocantins</option>
                      <option value="RO">Roraima</option>
                      <option value="RR">Rondônia</option>
                      <option value="PA">Pará</option>
                    </optgroup>

                    <optgroup label="Região Nordeste">
                      <option value="AL">Alagoas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Ceará</option>
                      <option value="MA">Maranhão</option>
                      <option value="PB">Paraíba</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piauí</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="SE">Sergipe</option>
                    </optgroup>

                    <optgroup label="Região Centro-Oeste">
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="GO">Goiás</option>
                      <option value="DF">Distrito Federal</option>
                    </optgroup>

                    <optgroup label="Região Sudeste">
                      <option value="SP">São Paulo</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="ES">Espírito Santo</option>
                      <option value="MG">Minas Gerais</option>
                    </optgroup>

                    <optgroup label="Região Sul">
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="PR">Paraná</option>
                    </optgroup>
                  </select>
                </label>
              </fieldset>

              <menu>
                <li><button type="reset">Limpar</button></li>
                <li><button type="submit" name="action" value="registerCity">Salvar</button></li>
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