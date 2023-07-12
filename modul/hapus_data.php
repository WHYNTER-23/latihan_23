<?php
// kita membutuhkan id_pembayaran
$id_pembayaran = $_GET['id_pembayaran'] ?? '';
if ($id_pembayaran == '') {
  // minta ke user id_pembayaran atau pesan error
  '<div class="alert alert-danger">maaf id pembayaran tidak terdefinisi. Silahkan klik ubah!<hr><a href="?p=tampil_data">Go to pembayaran</a></div>';
} else {
  // id_pembayaran tersedia, lakukan HAPUS DATA
  $s = "DELETE FROM tb_pembayaran WHERE id=$id_pembayaran";
  $q = mysqli_query($cn, $s) or die(mysqli_error($cn));
  die("<script>location.replace('?p=tampil_data')</script>");
}
