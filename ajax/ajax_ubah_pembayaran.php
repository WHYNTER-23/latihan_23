<?php
$id_pembayaran = $_GET['id_pembayaran'] ?? '';
$kolom = $_GET['kolom'] ?? '';
$data_baru = $_GET['data_baru'] ?? '';
if ($id_pembayaran == '') die('id_pembayaran belum terdefinisi!');
if ($kolom == '') die('kolom belum terdefinisi!');
if ($data_baru == '') {
  $data_baru = 'NULL';
} else {
  $data_baru = "'$data_baru'";
}

include '../conn.php';

$s = "UPDATE tb_pembayaran SET 
$kolom=$data_baru 
WHERE id=$id_pembayaran";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));
echo 'sukses';
