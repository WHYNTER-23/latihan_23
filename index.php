<?php
session_start();
$is_login = 0;
if (isset($_POST['jwd_username'])) {
  $username = $_SESSION['jwd_username'];
  $is_login = 1;
}
include 'conn.php';

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 20</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <h1>PHP Routing</h1>
    <?php
    include 'include/foto_saya.php';
    include 'nav.php';
    include 'routing.php';
    ?>
  </div>
</body>

</html>