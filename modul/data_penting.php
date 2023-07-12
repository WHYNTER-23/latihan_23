<?php
$tr = '';
$s = "SELECT * FROM tb_pembayaran ORDER BY nama";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));

// cek jumlah rows
if (mysqli_num_rows($q) == 0) {
  $tb = "<div class='alert alert-danger>Belum ada data pembayaran!</div>";
} else {
  $i = 0;
  while ($d = mysqli_fetch_assoc($q)) {
    $i++;
    $status = $d ? '1' : '0';
    $tr .= "
    <tr>
    <td>$i</td>
    <td>$d[nim]</td>
    <td>$d[nama]</td>
    <td>$d[status]</td>
    <td>ubah | hapus</td>
    </tr>
    ";
  }

  echo "
  <table class='table table-striped'>
  <thead>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Status Pembayaran</th>
  </thead>
  $tr
</table>
  ";
}
?>
<a href="?p=tambah_data">tambah</a>