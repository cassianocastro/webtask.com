<?php
$employees = [
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro",
  "João da Silva Sauro"
];
?>

<section>
  <div>
    <header>
      <div>
        <h2>Employees</h2>
      </div>
    </header>

    <nav>
      <div>
        <ul>
          <?php foreach ( $employees as &$employee ) : ?>
            <li>
              <?php require __DIR__ . '/.components/card/index.php'; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </div>
</section>