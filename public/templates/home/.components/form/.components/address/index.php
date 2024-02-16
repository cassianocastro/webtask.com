<fieldset>
  <legend>Preencha os campos a seguir com seu endereço</legend>

  <label>
    <span>Estado</span>

    <select name="" required>
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

  <label>
    <span>Cidade</span>

    <input type="text" name="" placeholder="Porto Alegre" maxlength="100" required>
  </label>

  <label>
    <span>Bairro</span>

    <input type="text" name="" placeholder="Higienópolis" maxlength="100" required>
  </label>

  <label>
    <span>CEP</span>

    <input type="text" name="" placeholder="00000-000" maxlength="100" required>
  </label>

  <label>
    <span>Rua</span>

    <input type="text" name="" placeholder="Rua dos Bobos" maxlength="100" required>
  </label>

  <label>
    <span>Número</span>

    <input type="text" name="" placeholder="1423" maxlength="100" required>
  </label>

  <label>
    <span>Complemento</span>

    <textarea name="" placeholder="Ao lado da lotérica" required></textarea>
  </label>

  <menu>
    <li>
      <label>
        <button type="button" title="Limpar todos os campos">Clear</button>

        <span>address</span>
      </label>
    </li>

    <li>
      <label>
        <button type="button" title="Salvar dados de endereço">Save</button>

        <span>address</span>
      </label>
    </li>
  </menu>
</fieldset>