<dialog id="details">
  <div>
    <header>
      <div>
        <h4>
          <span class="material-icons">person</span>

          <span>Employee's Details</span>
        </h4>

        <menu>
          <li><button type="button" class="material-icons" title="Drag window">drag_indicator</button></li>
          <li><button type="button" class="material-icons" title="Close window">close</button></li>
        </menu>
      </div>
    </header>

    <?php require_once __DIR__ . '/.components/section/index.php'; ?>

    <footer>
      <div>
        <menu>
          <li>
            <button type="button" title="Print employee's informations">
              <span>Print</span>

              <span class="material-icons">print</span>
            </button>
          </li>

          <li>
            <button type="button" title="Close window">
              <span class="material-icons">close</span>

              <span>Close</span>
            </button>
          </li>
        </menu>
      </div>
    </footer>
  </div>
</dialog>

<?php require_once __DIR__ . '/.components/ballon/index.php'; ?>