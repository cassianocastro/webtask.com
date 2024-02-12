<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicação de teste">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- <link rel="modulepreload" href="../js/functions.js"> -->
  <!-- <link rel="modulepreload" href="../js/pessoas.js"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">

  <title>Aplicação | Pessoas</title>
</head>
<body>
  <?php include_once 'templates/header.php'; ?>

  <main>
    <section>
      <h2>Cadastro de Pessoas</h2>

      <form id="personForm" autocomplete="off" spellcheck="true" method="post" action="../../controll/people.php">
        <fieldset>
          <legend>Preencha os campos abaixo</legend>

          <label for="fieldName">Nome</label>
          <label for="fieldLastName">Sobrenome</label>
          <label for="fieldAge">Idade Real</label>
          <label for="fieldSons">Filhos</label>

          <input required maxlength="50" type="text" id="fieldName" name="person[nome]">

          <input required maxlength="100" type="text" id="fieldLastName" name="person[sobrenome]">

          <input required min="0" type="number" id="fieldAge" name="person[idade]">

          <select required id="fieldSons" name="person[filhos]">
            <option value="0" selected>Nenhum</option>
            <option value="1">1 filho</option>
            <option value="2">2 filhos</option>
            <option value="3">3 filhos</option>
            <option value="4">4 filhos ou mais</option>
          </select>
        </fieldset>

        <menu>
          <button type="reset">Limpar</button>
          <button type="submit">Enviar</button>
        </menu>
      </form>
    </section>

    <?php include_once 'templates/aside.php'; ?>
  </main>

  <?php include_once 'templates/footer.php'; ?>

  <!-- <script type="module" src="../js/pessoas.js" defer></script> -->
</body>
</html>