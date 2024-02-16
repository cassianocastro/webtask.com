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
          {% for employee in employees %}
            <li>
              {{ include("@home/list/.components/card/index.php") }}
            </li>
          {% endfor %}
        </ul>
      </div>
    </nav>

    {{ include("@home/list/.components/menu/index.php") }}

  </div>
</section>