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

<script type="module" src="./index.js"></script>