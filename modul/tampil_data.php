<?php
$tr = '';
$s = "SELECT * FROM tb_pembayaran ORDER BY nama";
$q = mysqli_query($cn, $s) or die(mysqli_error($cn));

// cek jumlah rows
if (mysqli_num_rows($q) == 0) {
  $tb = "<div class='alert alert-danger'>Belum ada data pembayaran!</div>";
} else {
  $i = 0;
  while ($d = mysqli_fetch_assoc($q)) {
    $i++;
    $status = $d['status'] ? 'lunas' : 'belum lunas';
    $ubah = "<a href='?p=ubah_data&id_pembayaran=$d[id]' class='text-primary'>ubah</a>";
    $hapus = "<a href='?p=hapus_data&id_pembayaran=$d[id]' onclick='return confirm(\" apakah anda yakin ingin menghapus data ini!\")' class='text-danger'>hapus</a>";
    $tr .= "
      <tr>
        <td>$i</td>
        <td>$d[nim]</td>
        <td>$d[nama]</td>
        <td>$status</td>
        <td>$ubah | $hapus<span class=debug>id=$d[id]</span></td>
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
        <th>Aksi</th>
      </thead>
      $tr
    </table>
  ";
}
?>

<div>
  <a class="btn btn-primary btn-block mt-2" href="?p=tambah_data">tambah</a>
</div>