<!-- Membuat file untuk tampilan HTML pada tabel Penggantian Pengawas Ujian -->

<?php
    include('koneksi.php'); // Menghubungkan file koneksi.php pada tampilan HTML tabel Penggantian Pengawas Ujian.
    $db = new Pengawas; // Instansiasi objek pada class Pengawas yang ada di file koneksi.php
    $pengawas = $db->tampildata(); // Menggunakan method yang sama untuk menampilkan data.
    include('nav.php.'); // Menghubungkan file nav.php supaya terhubung dan tampil pada tabel Penggantian Pengawas Ujian.
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
                      foreach($pengawas as $row) { // Menggunakan perulangan foreach agar data yang dipanggil dapat tersusun dengan rapih ayng disimpan dalam variable $row.
                  ?>

                  <tr> <!-- Mendefinisikan tabel sesuai dengan data pada database. -->
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_pengganti'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel id_pengganti yang sesuai pada database. -->
                      <td><?php echo $row['nama_pengawas_diganti'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel nama_pengawas_diganti yang sesuai pada database. -->
                      <td><?php echo $row['unit_kerja'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel unit_kerja yang sesuai pada database. -->
                      <td><?php echo $row['hari_tgl_penggantian'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel hari_tgl_penggantian yang sesuai pada database. -->
                      <td><?php echo $row['jam'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel jam yang sesuai pada database. -->
                      <td><?php echo $row['ruang'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel ruang yang sesuai pada database. -->
                      <td><?php echo $row['nama_pengawas_pengganti'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel nama_pengawas_pengganti yang sesuai pada database. -->
                      <td><?php echo $row['id_dosen'] ?></td> <!-- Menampilkan data yang disimpan dalam aray $row untuk tabel id_dosen yang sesuai pada database. -->
                  </tr>

                <?php } // Untuk menutup eksekusi proses di atas. ?>

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