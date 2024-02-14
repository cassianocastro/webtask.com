<section>
  <div>

    <header>
      <div>
        <h2>Cadastro de Funcionários</h2>
      </div>
    </header>

    <form id="ef" action="../../controller/EmployeesController.php" method="post" autocomplete="off" spellcheck="true">
      <div>
        <fieldset>
          <legend>Personal Info</legend>

          <label>
            <span>Nome</span>

            <input type="text" name="" placeholder="John" maxlength="50" required>
          </label>

          <label>
            <span>Sobrenome</span>

            <input type="text" name="" placeholder="Doe" maxlength="100" required>
          </label>

          <label>
            <span>Idade</span>

            <input type="number" name="" placeholder="18" min="0" required>
          </label>

          <label>
            <span>Filhos</span>

            <select name="" required>
              <option value="0" label="Nenhum" selected></option>
              <option value="1" label="1 filho"></option>
              <option value="2" label="2 filhos"></option>
              <option value="3" label="3 filhos"></option>
              <option value="4" label="4 filhos ou mais"></option>
            </select>
          </label>

          <?php require_once __DIR__ . '/../address/index.php'; ?>
        </fieldset>

        <fieldset>
          <legend>Employee's Info</legend>

          <label>
            <span>Matrícula</span>

            <input type="text" name="" placeholder="123456789" maxlength="100" required>
          </label>

          <label>
            <span>Data de Admissão</span>

            <input type="date" name="" required>
          </label>

          <label>
            <span>Salário</span>

            <input type="number" name="" placeholder="1500.00" min="0" required>
          </label>

          <label>
            <span>Cargo</span>

            <select name="" required>
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