<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PHP Routing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="?">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=contact">Contact</a>
      </li>
      <?php
      if ($is_login) {
        echo "
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"?p=tampil_data\">Pembayaran</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"?p=logout\">Logout</a>
        </li>
        ";
      } else {
        echo "
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"?p=login\">Login</a>
        </li>
        ";
      }

      ?>

    </ul>
  </div>
</nav>