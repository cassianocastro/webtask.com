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