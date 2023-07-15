<?php
session_start();

$is_login = 0;
$dm = 1; // debug mode is ON/OFF

if ($dm) {
}

if (isset($_SESSION['jwd_username'])) {
  $username = $_SESSION['jwd_username'];
  $is_login = 1;
}

include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 22</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <style>
    .container {
      background: linear-gradient(#eee, #afa);
      min-height: 100vh;
      font-family: sans-serif;
    }

    .debug {
      background: red;
      display: <?php if (!$dm) echo "none"; ?>;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>PHP Routing</h1>
    <?php
    include 'include/foto_saya.php';
    include 'nav.php';
    include 'routing.php';
    include 'jquery_asikron.php';
    ?>
  </div>

</body>

</html>