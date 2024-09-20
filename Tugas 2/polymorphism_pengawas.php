<!-- Membuat file yang sama isinya dengan file pengawas.php -->
<!-- File ini khusus untuk menampilkan HTML tabel hasil dari konsep POLYMORPHISM yang menampilkan data tertentu. -->

<?php
    include('koneksi.php'); // Menghubungkan file koneksi.php pada tampilan HTML tabel Penggantian Pengawas Ujian.
    $db = new Pengawas2; // Instansiasi objek pada class Pengawas2 yang ada di file koneksi.php
    $pengawas2 = $db->tampildata(); // Menggunakan method yang sama untuk menampilkan data.
    include('nav.php'); // Menghubungkan file nav.php supaya terhubung dan tampil pada tabel Penggantian Pengawas Ujian.
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title></title>
  </head>
  <body>
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PEGAWAI
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                   <th scope="col">No.</th>
                    <th scope="col">ID pengganti</th>
                    <th scope="col">Nama Pengawas</th>
                    <th scope="col">Unit Kerja</th>
                    <th scope="col">Hari Tanggal Ganti</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Ruang</th>
                    <th scope="col">Nama Pengawas Pengganti</th>
                    <th scope="col">ID Dosen</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                      $no = 1;
                      foreach($pengawas2 as $row) { // Menggunakan perulangan foreach agar data yang dipanggil dapat tersusun dengan rapih ayng disimpan dalam variable $row.
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_pengganti'] ?></td>
                      <td><?php echo $row['nama_pengawas_diganti'] ?></td>
                      <td><?php echo $row['unit_kerja'] ?></td>
                      <td><?php echo $row['hari_tgl_penggantian'] ?></td>
                      <td><?php echo $row['jam'] ?></td>
                      <td><?php echo $row['ruang'] ?></td>
                      <td><?php echo $row['nama_pengawas_pengganti'] ?></td>
                      <td><?php echo $row['id_dosen'] ?></td>
                    </tr>

                <?php } ?>
                
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>