<!-- Membuat koneksi ke database, membuat proses INHERITANCE, ENCAPSULATION, dan POLYMORPHISM -->

<?php

// Membuat class Tugas2 sebagai parent class dari class Pengawas dan Laporan Kerja Lembur.
// Class Tugas2 akan digunakan untuk mengoneksikan database di phpmyadmin.
// Class Tugas2 ditambahkan atribut host, user, password, nama database, dan connection.
class Tugas2 
{
    // visibility PRIVATE termasuk dalam proses ENCAPSULATION yang mana mengubah atribut menjadi PRIVATE.
    private $host = "localhost"; // Atribut host bersifat PRIVATE agar hanya bisa diakses di class Tugas2.
    private $user = "root"; // Atribut user bersifat PRIVATE agar hanya bisa diakses di class Tugas2.
    private $pass = ""; // Atribut pass bersifat PRIVATE agar hanya bisa diakses di class Tugas2.
    private $name = "pweb_2"; // Atribut name bersifat PRIVATE agar hanya bisa diakses di class Tugas2.
    public $connection; // Atribut connection bersifat PROTECTED agar bisa diakses oleh class turunan yang mewarisi class Tugas2.

    // Membuat Method CONSTRUCT yang otomatis akan berjalan ketika object dibuat dan akan ditampilkan, method connstruct ini yang pertama kali akan mengeksekusi.
    public function __construct() 
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->name);
        if (mysqli_connect_errno()) // Kondisi pengecekan Jika databse mysqli tidak terkoneksi.
        {
            echo "koneksi database gagal : " . mysqli_connect_errno(); // Akan menampilkan koneksi database gagal.
        }
    }
}

// Menggunakan konsep INHERITANCE untuk mewarisi dan menghubungkan antar class.
// Membuat class Pengawas yang mewarisi dari class Tugas2
// Class Pengawas untuk instansiasi menampilkan data penggantian pengawas ujian.
class Pengawas extends Tugas2 
{
    // Membuat method untuk menampilkan data penggantian pengawas ujian pada database.
    public function tampildata() 
    {
        $sql = "SELECT * FROM pengawas"; // Membuat variable $sql untuk menyimpan data setelah mengambil semua data dari tabel pengawas.
        return mysqli_query($this->connection, $sql); // Untuk mengembalikan valuenya saat perintah SQL dijalankan.
    }
}

// Menggunakan konsep INHERITANCE untuk mewarisi dan menghubungkan antar class.
// Membuat class KerjaLembur yang mewarisi dari class Tugas2.
// Class KerjaLembur untuk instasiasi menampilkan data laporan kerja lembur
class KerjaLembur extends Tugas2 
{
    // Membuat method untuk menampilkan data laporan kerja lembur pada database.
    public function tampildata() 
    {
        $sql = "SELECT * FROM kerjalembur"; // Membuat variable $sql untuk menyimpan data setelah mengambil semua data dari tabel kerjalembur.
        return mysqli_query($this->connection, $sql);  // Untuk mengembalikan valuenya saat perintah SQL dijalankan.
    }
}

// Menggunakan konsep POLYMORPHISM untuk 1 method yang sama digunakan untuk class turunan dengan tampilan yang berbeda.
// Membuat class laporan untuk POLYMORPHISM yang mewarisi dari class Tugas2.
class laporan extends Tugas2 
{
    // Membuat method untuk menampilkan data laporan kerja lembur tapi hanya 1 data tertentu yang tampil.
    // Method yang digunakan masih sama yaitu tampildata(). Dengan 1 method itu dapat digunakan kembali di class turunan dengan tampil hasil yang berbeda.
    // Contoh data yang akan ditampilkan yang memiliki ID nomor 2 di tabel kerjalembur.
    public function tampildata() 
    {
        $ubah = "SELECT * FROM kerjalembur WHERE id_lembur = '2'"; // Membuat variable $ubah untuk menyimpan data setelah mengambil 1 data tertentu dari tabel kerjalembur.
        return mysqli_query($this->connection, $ubah);  // Untuk mengembalikan valuenya saat perintah SQL dijalankan.
    }
}

// Menggunakan konsep POLYMORPHISM untuk 1 method yang sama digunakan untuk class turunan dengan tampilan yang berbeda.
// Membuat class Pengawas2 untuk POLYMORPHISM yang mewarisi dari class Tugas2.
class Pengawas2 extends Tugas2 
{
    // Membuat method untuk menampilkan data laporan kerja lembur tapi hanya 1 data tertentu yang tampil.
    // Method yang digunakan masih sama yaitu tampildata(). Dengan 1 method itu dapat digunakan kembali di class turunan dengan tampil hasil yang berbeda.
    // Contoh data yang akan ditampilkan yang memiliki nama ruang Staff 01A di tabel pengawas.
    public function tampildata() 
    {
        $ubah = "SELECT * FROM pengawas WHERE ruang = 'Staff 01A'";
        return mysqli_query($this->connection, $ubah);  // Untuk mengembalikan valuenya saat perintah SQL dijalankan.
    }
}

?>