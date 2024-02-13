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

<script type="module" src="./index.js"></script>