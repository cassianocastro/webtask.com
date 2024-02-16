<section id="employees">
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

    <?php require_once __DIR__ . '/.components/menu/index.php'; ?>
  </div>
</section>