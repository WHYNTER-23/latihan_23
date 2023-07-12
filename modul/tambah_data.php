<?php
if (isset($_POST['btn_simpan'])) {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $status = $_POST['status'];

  $s = "INSERT INTO tb_pembayaran (nim,nama,status) VALUES ('$nim','$nama','$status')";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));

  echo "<div class='alert alert-success'>Insert Berhasil!</div>";
  echo "<script>location.replace('?p=tampil_data')</script>";
  exit;
}
?>

<h1>Tambah Data</h1>
<form method="post">
  <div class="form-group">
    <label for="">NIM</label>
    <input type="text" class="form-control" name="nim" minlength="8" maxlength="8" required>
  </div>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" minlength="3" maxlength="30" required>
  </div>
  <div class="form-group">
    <label for="">Status pembayaran</label>
    <select name="status" class="form-control">
      <option value="1">Lunas</option>
      <option value="0">Belum Lunas</option>
    </select>
  </div>
  <div>
    <button class="btn btn-primary btn-block mt-2" name="btn_simpan">Simpan</button>
  </div>
</form>