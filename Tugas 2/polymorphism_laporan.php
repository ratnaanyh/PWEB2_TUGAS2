<!-- Membuat file yang sama isinya dengan file kerjalembur.php -->
<!-- File ini khusus untuk menampilkan HTML tabel hasil dari konsep POLYMORPHISM yang menampilkan data tertentu. -->

<?php
    include('koneksi.php'); // Menghubungkan file koneksi.php pada tampilan HTML tabel Laporan Kerja Lembur.
    $db = new laporan; // Instansiasi objek pada class laporan yang ada di file koneksi.php
    $laporan = $db->tampildata(); // Menggunakan method yang sama untuk menampilkan data.
    include('nav.php');  // Menghubungkan file nav.php supaya terhubung dan tampil pada tabel Laporan Kerja Lembur.
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
                      foreach($laporan as $row) {
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_lembur'] ?></td>
                      <td><?php echo $row['hari_tgl_laporan'] ?></td>
                      <td><?php echo $row['waktu'] ?></td>
                      <td><?php echo $row['uraian_pekerjaan'] ?></td>
                      <td><?php echo $row['keterangan'] ?></td>
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