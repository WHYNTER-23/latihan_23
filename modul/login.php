<?php
if (isset($_POST['btn_login'])) {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $s = "SELECT 1 FROM tb_user username='$username' AND password='$password'";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));

  if (mysqli_num_rows($q) == 1) {
    $_SESSION['jwd_username'] = $username;
  } else {
    echo "Maaf Username atau Password salah!";
  }

  exit;
}
?>
<style>
  .btn-block {
    width: 100%;
  }
</style>
<h1>Login</h1>
<p>Silahkan Login</p>

<form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-contol" id="password" name="password">
  </div>
  <div class="form-group">
    <button class="btn btn-primary btn-block mt-2" name="btn_login">Login</button>

  </div>
</form>