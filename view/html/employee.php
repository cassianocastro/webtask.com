<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplicação de teste">
    <title>
        Aplicação | Funcionários
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="modulepreload" href="../js/functions.js">
    <link rel="modulepreload" href="../js/funcionario.js"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap">
</head>
<body>
    <?php include_once 'templates/header.php'; ?>
    <main>
        <section>
            <h2>Cadastro de Funcionários</h2>

            <form id="employeeForm" autocomplete="off" spellcheck="true" method="post" action="../../controll/employee.php">
                <fieldset>
                    <legend>Preencha todos os campos abaixo</legend>
                    <div id="labels">
                        <label for="fieldName">Nome Completo:</label>
                        <label for="fieldMatricula">Matrícula:</label>
                        <label for="fieldDate">Data de Admissão:</label>
                        <label for="fieldSalario">Salário:</label>
                        <label for="fieldFilhos">Filhos:</label>
                        <label for="fieldCargo">Cargo:</label>
                    </div>
                    <div id="inputs">
                        <input required maxlength="300" type="text" id="fieldName" name="employee[name]">
                        <input required maxlength="100" type="text" id="fieldMatricula" name="employee[registration]">
                        <input required type="date" id="fieldDate" name="employee[admission]">
                        <input required min="0" type="number" id="fieldSalario" name="employee[wage]">
                        <input required min="0" type="number" id="fieldFilhos" name="employee[sons]">

                        <select required id="fieldCargo" name="employee[office]">
                            <option value="Gerente">Gerente</option>
                            <option value="Encarregado">Encarregado</option>
                            <option value="Operador">Operador</option>
                            <option value="Telefonista">Telefonista</option>
                            <option value="Motorista">Motorista</option>
                        </select>
                    </div>
                </fieldset>
                <menu>
                    <button type="reset">Limpar</button>
                    <button type="submit">Salvar</button>
                </menu>
            </form>
        </section>
        <?php include_once 'templates/aside.php'; ?>
    </main>
    <?php include_once 'templates/footer.php'; ?>
    <!-- <script type="module" src="../js/funcionario.js" defer></script> -->
</body>
</html>