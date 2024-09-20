<!-- Membuat file untuk tampilan HTML pada tabel Laporan Kerja Lembur -->

<?php

    include('koneksi.php'); // Menghubungkan file koneksi.php pada tampilan HTML tabel Laporan Kerja Lembur.
    $db = new KerjaLembur; // Instansiasi objek pada class KerjaLembur yang ada di file koneksi.php
    $kerjalembur = $db->tampildata(); // Menggunakan method yang sama untuk menampilkan data.
    include('nav.php.'); // Menghubungkan file nav.php supaya terhubung dan tampil pada tabel Laporan Kerja Lembur.

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
                    <th scope="col">ID Lembur</th>
                    <th scope="col">Hari Tanggal Laporan</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Uraian Pekerjaan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">ID Dosen</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
                      $no = 1;
                      foreach($kerjalembur as $row) { // Menggunakan perulangan foreach agar data yang dipanggil dapat tersusun dengan rapih ayng disimpan dalam variable $row.
                  ?>

                  <tr> <!-- Mendefinisikan tabel sesuai dengan data pada database. -->
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_lembur'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel id_lembur yang sesuai pada database. -->
                      <td><?php echo $row['hari_tgl_laporan'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel hari_tgl_laporan yang sesuai pada database. -->
                      <td><?php echo $row['waktu'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel waktu yang sesuai pada database. -->
                      <td><?php echo $row['uraian_pekerjaan'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel uraian_pekerjaan yang sesuai pada database. -->
                      <td><?php echo $row['keterangan'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel keterangan yang sesuai pada database. -->
                      <td><?php echo $row['id_dosen'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel id_dosen yang sesuai pada database. -->
                  </tr>

                <?php } // Untuk menutup eksekusi proses di atas.?> 

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