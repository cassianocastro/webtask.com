<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <base href="../view/html/" target="_self">

  <title>Aplicação | Resultados</title>
</head>
<body>
  <?php require_once __DIR__ . '/templates/header.php'; ?>

  <main>
    <section>
      <h2>Resultados</h2>

      <output name="result">
        <table border="1">
          <caption>
            <?= $caption ?>
          </caption>
          <thead>
            <tr>
              <?php
              foreach ($columns as $column) :
                echo "<th>$column</th>";
              endforeach;
              unset($column);
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($resultSet as $register) :
              echo "<tr>";
              foreach ($columns as $column) :
                echo "<td>$register[$column]</td>";
              endforeach;
              echo "</tr>";
            endforeach;
            ?>
          </tbody>
        </table>
      </output>
    </section>

    <?php require_once __DIR__ . '/templates/aside.php'; ?>

  </main>

  <?php require_once __DIR__ . '/templates/footer.php'; ?>
</body>
</html>