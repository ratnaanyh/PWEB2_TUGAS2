# TUGAS 2 PEMROGRAMAN WEB 2 (STUDY CASE)

<b>
Nama    : Ratna Nur Hidayah<br>
Kelas   : TI - 2D<br>
NPM     : 230202088
</b>

<h2>Menyelesaikan Study Case Dengan Konsep OOP yang terkoneksi dengan Database.</h2>
<p>Membuat database tabel Penggantian Pegawai Ujian</p>

![Capture](https://github.com/user-attachments/assets/b09418ff-42b7-4006-81e0-71c5220b8d90)


<p>Membuat database tabel Laporan Kerja Lembur</p> 

![Capture](https://github.com/user-attachments/assets/cdf4f2cf-469d-4095-98ad-e36acb3e9518)

<h2>Membuat koneksi dari database ke kode program PHP.</h2>
<p>a). Membuat class baru di file koneksi.php untuk proses koneksi ke database dengan OOP. Menambahkan atribut host, user, password, nama database dengan visibility <b>PRIVATE</b> agar hanya dapat diakses di class tersebut. Sedangkan atribut connection dengan visibility <b>PROTECTED</b> agar atribut ini dapat digunakan kembali di class turunan dan menghubungkan antar kelas.<br>
b). Membuat method atau <b>function __construct</b> yang mengintansiasi mysqli dan melakukan pengecekan kondisi jika database gagal terkoneksi.<br>
c). Pada class Tugas 2 sudah menerapkan konsep <b>ENCAPSULATION</b> yang mana pada atribut host, user, pass, dan db_name bersifat <b>PRIVATE</b>.</p>

![Capture](https://github.com/user-attachments/assets/5bedf694-b712-4650-9011-a46c5908d604)

<h2>Menerapkan Konsep INHERITENANCE (pewarisan sifat)</h2>
<p>a). Membuat class untuk tabel laporan kerja yaitu KerjaLembur yang mewarisi dari class Tugas2.<br>
b). Membuat method untuk menampilkan data semua pada tabel Laporan Kerja Lembur menggunakan <b>SELECT * FROM kerjalembur</b>. Setelah itu, data yang diambil akan disimpan dalam parameter $sql.<br>
c). Kemudian, valuenya akan dikembalikan dengan menjalankan perintah SQL yaitu <b>return mysqli_query($this->connection, $sql)</b>. Contoh kode program :</p>

![Capture](https://github.com/user-attachments/assets/f3b2d4a9-697d-41a5-a119-828d7d91dba0)

<p>d). Membuat class untuk tabel Penggantian Pengawas Ujian yaitu Pengawas yang mewarisi dari class Tugas2.<br>
e).  Membuat method untuk menampilkan data semua dari tabel Penggantian Pengawas Ujian menggunakan <b>SELECT * FROM Pengawas</b>. Setelah itu, data yang diambil akan disimpan dalam parameter $sql.<br>
f). Kemudian, valuenya akan dikembalikan dengan menjalankan perintah SQL yaitu <b>return mysqli_query($this->connection, $sql)</b>. Contoh kode program :</p>

![Capture](https://github.com/user-attachments/assets/39f4df78-e1fc-43d3-b0fe-44e96b970420)

<h2>Menerapkan Konsep PLYMORPHISM (satu method, banyak bentuk)</h2>
<p>a). Membuat class untuk tabel Laporan Kerja Lembur untuk mengeksekusi dengan konsep POLYMORPHISM yang mewarisi dari class Tugas2.<br>
b). Membuat method yang sama dengan method sebelumnya yaitu tampildata(), method ini digunakan untuk <b>menampilkan 1 data tertentu</b> dari tabel Laporan Kerja Lembur menggunakan <b> $ubah = "SELECT * FROM kerjalembur WHERE id_lembur = '2'"</b>, Contoh kode programnya :</p>

![Capture](https://github.com/user-attachments/assets/813df6fd-1edb-4b5e-9eca-ba7675abc92d)

<p>a). Membuat class untuk tabel Penggantian Pengawas Ujian untuk mengeksekusi dengan konsep POLYMORPHISM yang mewarisi dari class Tugas2.<br>
b). Membuat method yang sama dengan method sebelumnya yaitu tampildata(), method ini digunakan untuk <b>menampilkan 1 data tertentu</b> dari tabel Laporan Kerja Lembur menggunakan <b>$ubah = "SELECT * FROM pengawas WHERE ruang = 'Staff 01A'";</b>, Contoh kode programnya :</p>

![Capture](https://github.com/user-attachments/assets/fdb03f66-f806-4169-9704-87c031dccce1)

<h2>Membuat tampilan HTML Tabel Laporan Kerja Lembur</h2>
<p>Membuat file HTML dengan menghubungkan ke file koneksi.php yang file tersebut berisi function untuk tampil datanya.</p>

![Capture](https://github.com/user-attachments/assets/70a2591e-912d-4254-9705-aca79b133170)

<p>Output hasil eksekusi Untuk Tabel Laporan Kerja Lembur :</p>

![Capture](https://github.com/user-attachments/assets/20717ae8-039c-4604-9bc3-b39f95295d41)

<h2>Membuat tampilan HTML Tabel Laporan Penggantian Pengawas Ujian</h2>
<p>Membuat file HTML dengan menghubungkan ke file koneksi.php yang file tersebut berisi function untuk tampil datanya.</p>

![Capture](https://github.com/user-attachments/assets/97328ee8-740e-4ff8-93d8-fec2da85846f)

<p>Output hasil eksekusi Untuk Tabel Penggantian Pengawas Ujian :</p>

![Capture](https://github.com/user-attachments/assets/9bca189c-df47-4408-bf05-0bab91cb8981)

<h2>Manampilkan Output Tabel Penggantian Pengawas Ujian (POLYMORPHISM)</h2>

![Capture](https://github.com/user-attachments/assets/20573850-0dab-4a12-bff4-c88477345a2d)

<h2>Manampilkan Output Tabel Laporan Kerja Lembur (POLYMORPHISM)</h2>

![Capture](https://github.com/user-attachments/assets/48dfe8b2-9723-41b2-a740-7f956b57ce3a)

<h2>Manampilkan Output Navbar</h2>

![Capture](https://github.com/user-attachments/assets/4710952a-7da5-48c8-8c3c-6dbfd24449fc)
