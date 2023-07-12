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
  <script src="jquery.min.js"></script>
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      background-color: gray;
    }

    .container {
      background: linear-gradient(#eee, #afa);
      min-height: 100vh;
      width: 100vw;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .debug {
      background: red;
      display: <?php if (!$dm) echo "none"; ?>;
    }

    .navbar {
      padding-bottom: 10px;
      width: 100%;
      /* Set lebar navbar menjadi 100% */
    }

    .navbar-nav {
      margin-left: auto;
      /* Menempatkan item navbar di sebelah kanan */
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    include 'include/foto_saya.php';
    include 'nav.php';
    include 'routing.php';
    ?>
  </div>
</body>

</html>