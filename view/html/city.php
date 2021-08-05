<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Aplicação de teste">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Aplicação | Cidades
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="modulepreload" href="../js/functions.js">
    <link rel="modulepreload" href="../js/cidades.js"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">
</head>
<body>
    <?php include_once 'templates/header.php'; ?>
    <main>
        <section>
            <h2>Cadastro de Cidades</h2>
            <form id="formCity" autocomplete="off" spellcheck="true" method="post" action="../../index.php">
                <fieldset>
                    <legend>Preencha os campos com seu endereço</legend>
                    <label for="fieldCity">Cidade:</label>
                    <label for="fieldState">Estado:</label>

                    <input required maxlength="100" id="fieldCity" name="city[name]" type="text">

                    <select required id="fieldState" name="city[state]">
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
                </fieldset>
                <menu>
                    <button type="reset">Limpar</button>
                    <button type="submit" name="action" value="registerCity">Salvar</button>
                </menu>
            </form>
        </section>
        <?php include_once 'templates/aside.php'; ?>
    </main>
    <?php include_once 'templates/footer.php'; ?>
    <!-- <script type="module" src="../js/cidades.js"></script> -->
</body>
</html>
