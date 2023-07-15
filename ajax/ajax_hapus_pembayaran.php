<?php
$id_pembayaran = $_GET['id_pembayaran'] ?? '';
if ($id_pembayaran == '') die('id_pembayaran belum terdefinisi!');

include '../conn.php';

$s = "DELETE FROM tb_pembayaran WHERE id='$id_pembayaran'";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));
echo 'sukses';
