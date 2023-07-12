<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Online</title>
  <link rel='stylesheet' href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_saya.css">
  <script src="js/jquery.min.js"></script>

  <?php 
    $nama_mhs = 'Iin Sholihin'; //benar, PHP
    $namaMhs = 'Iin Sholihin'; //tidak sesuai best practice, PHP
    $NamaMhs = 'Iin Sholihin'; //tidak sesuai best practice, tidak sesuai dg kaidah pemrograman
    $Namamhs = 'Iin Sholihin'; //tidak sesuai best practice, tidak sesuai dg kaidah pemrograman
    $Nama_mhs = 'Iin Sholihin'; //tidak sesuai best practice, tidak sesuai dg kaidah pemrograman

    $s = "select * from tb_mhs"; // lowercase, no proplem, tetapi ga dianggap
    $s = "SELECT * FROM tb_mhs a 
    JOIN tb_prodi b ON a.id_prodi=b.id 
    WHERE id=1 
    AND status=1 OR status=2
     
    "; // UPPERCASE depannya aja maka dianggap oleh VSCode / Kode editor lainnya
    // Best Practice untuk SQL = UPPERCASE, kecuali nama db/tabel/kolom



  ?>
  <script>
    let namaMhs = 'Iin Sholihin'; // benar, JS

    // $(function(){
    //   alert('JQuery sudah ON')
    // })
  </script>

  <style>
    .container{border:solid 1px red}
  </style>
</head>
<body>
  <div class="container">
    <h1>CV Online</h1>

  </div>
</body>
</html>