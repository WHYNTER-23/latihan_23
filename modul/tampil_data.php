<h1>Data Penting</h1>
<style>
  .editable {
    cursor: pointer;
    transition: .2s;
    background: linear-gradient(#cfc, #afa);
  }

  .editable:hover {
    background: linear-gradient(#fcf, #faf);
    letter-spacing: 1px;
  }
</style>
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
    $hapus = "<button class='btn_aksi btn btn-danger btn-sm' id='btn_hapus__$d[id]'>Hapus</button>";
    $ubah = "<button class='btn_aksi btn btn-info btn-sm' id='btn_ubah__$d[id]'>Ubah</button>";
    $tr .= "
      <tr id='tr__$d[id]'>
        <td>$i</td>
        <td class='editable' id='nim__$d[id]'>$d[nim]</td>
        <td class='editable' id='nama__$d[id]'>$d[nama]</td>
        <td class='editable' id='status__$d[id]'>$status</td>
        <td class='editable'>$hapus<span class='debug'>id=$d[id]</span></td>
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
      <tbody>
        $tr
      </tbody>
    </table>
  ";
}
?>

<button class='btn_aksi btn btn-success' id='btn_tambah__new'>Tambah</button>

<script>
  $(function() {
    $('.btn_aksi').click(function() {
      let id = $(this).prop('id');
      let arr = id.split('__');
      let aksi = arr[0];
      let id_pembayaran = arr[1];

      let link_ajax;

      if (aksi == 'btn_hapus') {
        let y = confirm('Apakah Anda yakin ingin menghapus data ini?');
        if (!y) return;

        link_ajax = 'ajax/ajax_hapus_pembayaran.php?id_pembayaran=' + id_pembayaran;
      } else if (aksi == 'btn_tambah') {
        link_ajax = 'ajax/ajax_tambah_pembayaran.php';
        alert('link_ajax');
      } else {
        alert('Belum ada handle untuk aksi: ' + aksi);
        return;
      }

      $.ajax({
        url: link_ajax,
        success: function(hasil) {
          if (hasil.trim() == 'sukses') {
            if (aksi == 'btn_hapus') {
              $('#tr__' + id_pembayaran).fadeOut();
            } else if (aksi == 'btn_tambah') {
              location.reload();
            }
          } else {
            alert(hasil);
          }
        }
      });
    });

    $('.editable').click(function() {
      let tid = $(this).prop('id');
      let arr = tid.split('__');
      let kolom = arr[0];
      let id_pembayaran = arr[1];
      let data_awal = $(this).text().trim();
      let data_baru = prompt('Masukkan data baru:', data_awal).trim();
      if (!data_baru) return;
      if (data_baru == data_awal) return;

      let link_ajax = `ajax/ajax_ubah_pembayaran.php?id_pembayaran=${id_pembayaran}&data_baru=${data_baru}&kolom=${kolom}`;

      $.ajax({
        url: link_ajax,
        success: function(hasil) {
          if (hasil.trim() == 'sukses') {
            $('#' + tid).text(data_baru);
          } else {
            alert(hasil);
          }
        }
      });
    });
  });
</script>