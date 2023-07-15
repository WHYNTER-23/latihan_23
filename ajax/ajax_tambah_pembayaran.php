<?php
include '../conn.php';

$s = "INSERT INTO tb_pembayaran (nim,nama) VALUES ('99999999','NEW_MMHS')";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));
echo 'sukses';
