<section>
  <div>

    <header>
      <div>
        <h2>Cadastro de Funcionários</h2>
      </div>
    </header>

    <form id="ef" action="../../controller/EmployeesController.php" method="post" autocomplete="off" spellcheck="true">
      <div>
        <?php require_once __DIR__ . '/.components/personal/index.php'; ?>

        <?php require_once __DIR__ . '/.components/address/index.php'; ?>

        <?php require_once __DIR__ . '/.components/employee/index.php'; ?>
      </div>
    </form>

    <footer>
      <div>
        <menu>
          <li>
            <button form="ef" type="reset" title="Clear fields">
              Limpar
            </button>
          </li>
          <li>
            <button form="ef" type="submit" title="Submit data">
              Salvar
            </button>
          </li>
        </menu>
      </div>
    </footer>

    <aside>
      <div>
        <menu>
          <li>
            <button form="ef" type="button" title="">
              <figure>
                <img src="view/img/user.png" alt="" height="50" width="50">

                <figcaption>User</figcaption>
              </figure>
            </button>
          </li>
          <li>
            <button form="ef" type="button" title="">
              <figure>
                <img src="view/img/location.png" alt="" height="50" width="50">

                <figcaption>Address</figcaption>
              </figure>
            </button>
          </li>
          <li>
            <button form="ef" type="button" title="">
              <figure>
                <img src="view/img/worker.png" alt="" height="50" width="50">

                <figcaption>Work</figcaption>
              </figure>
            </button>
          </li>
        </menu>
      </div>
    </aside>

  </div>
</section>