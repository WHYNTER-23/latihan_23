<?php
if (isset($_POST['btn_update'])) {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $status = $_POST['status'];
  $id_pembayaran = $_POST['id_pembayaran'];

  $s = "UPDATE tb_pembayaran SET
  nim='$nim', 
  nama='$nama', 
  status='$status' 
  WHERE id=$id_pembayaran";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));

  echo "<div class='alert alert-success'>Update Berhasil!</div>";
  echo "<script>location.replace('?p=tampil_data')</script>";
  exit;
}

// kita membutuhkan id_pembayaran

$id_pembayaran = $_GET['id_pembayaran'] ?? '';
if ($id_pembayaran == '') {
  // minta user id_pembayaran atau pesan error
  die('<div class="alert alert-danger">maaf id pembayaran tidak terdefinisi. Silahkan klik ubah!<hr><a href="?p=tampil_data">Go to pembayaran</a></div>');
} else {
  // id_pembayaran tersedia, lakukan SELECT DATA, lalu tampilkan ke form
  echo "<span class=debug>id_pembayaran=$id_pembayaran</span>";

  $s = "SELECT * FROM tb_pembayaran WHERE id=$id_pembayaran";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));

  if (mysqli_num_rows($q) == 0) {
    // id_pembayaran invalid
    die('data pembayaran tidak ada!');
  } else {
    // echo "data ada!";
    $d = mysqli_fetch_assoc($q);
    $nim = $d['nim'];
    $nama = $d['nama'];
    $status = $d['status'];

    $selected_lunas = $status ? 'selected' : '';
    $selected_belum_lunas = $status ? '' : 'selected';
  }
}
?>

<h1>Ubah Data</h1>
<form method="post">
  <div class="form-group">
    <label for="">NIM</label>
    <input type="text" class="form-control" name="nim" minlength="8" maxlength="8" required value='<?= $nim ?>'>
  </div>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" minlength="3" maxlength="30" required value='<?= $nama ?>'>
  </div>
  <div class="form-group">
    <label for="">Status pembayaran</label>
    <select name="status" class="form-control">
      <option value="1" <?= $selected_lunas ?>>Lunas</option>
      <option value="0" <?= $selected_belum_lunas ?>>Belum Lunas</option>
    </select>
  </div>
  <div class="form-group">
    <input class="debug" name="id_pembayaran" value='<?= $id_pembayaran ?>'>
    <button class="btn btn-primary btn-block mt-2" name="btn_update">Update</button>
  </div>
</form>