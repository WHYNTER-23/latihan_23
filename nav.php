<div>
  <a href="?">Home </a>|
  <a href="?p=about">About </a>|
  <a href="?p=contact">Contact </a>|

  <?php
  if ($is_login) {
    echo "
      <a href=\"?p=tampil_data\">Pembayaran </a>|
      <a  href=\"?p=logout\">Logout</a>";
  } else {
    echo "<a  href=\"?p=login\">Login</a>";
  }
  ?>
</div>