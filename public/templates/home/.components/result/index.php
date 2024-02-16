<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta charset="utf-8">

  <base href="../public/templates/" target="_self">

  <title>Resultados | App</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header/index.php'; ?>

  <main>
    <div>

      <section>
        <div>

          <h2>Resultados</h2>

          <output name="result">
            <table>
              <caption>
                <?= $caption ?>
              </caption>
              <thead>
                <tr>
                  <?php foreach ( $columns as $column ) : ?>
                    <th><?= $column ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ( $resultSet as $register ) : ?>
                  <tr>
                    <?php foreach ( $columns as $column ) : ?>
                      <td><?= $register[$column] ?></td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </output>

        </div>
      </section>

    </div>
  </main>

  <?php require_once __DIR__ . '/includes/footer/index.php'; ?>

  <?php require_once __DIR__ . '/includes/aside/index.php'; ?>
</body>
</html>