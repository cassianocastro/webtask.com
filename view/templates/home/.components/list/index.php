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
              <div class="item">
                <figure>
                  <img src="view/img/worker.png" alt="Employee Icon" height="24" width="24">

                  <figcaption><?= $employee ?></figcaption>
                </figure>

                <button type="button" title="Show details">
                  <img src="view/img/spiral.png" alt="Details Icon" height="24" width="24">
                </button>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </div>
</section>