<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

    <h2>Cek Kategori Usia Mahasiswa</h2>
    
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required><br><br>

        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" placeholder="Masukkan umur Anda" required><br><br>

        <button type="submit" name="submit">Cek Kategori</button>
    </form>

    <hr>

    <?php
    // Mengecek apakah tombol submit pada form sudah ditekan
    if (isset($_POST['submit'])) {
        
        //variabel untuk menyimpan input dari form
        $nama = $_POST['nama'];
        $umur = (int) $_POST['umur']; // Casting tipe data ke integer untuk memastikan input berupa angka
        
        //Percabangan if elseif else dan operator perbandingan untuk menentukan kategori
        if ($umur < 13) {
            $kategori = "Anak-anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = "Dewasa";
        } else {
            $kategori = "Lansia";
        }

        //echo untuk menampilkan output
        echo "<h3>Hasil Pengecekan:</h3>";
        echo "<p>Halo <strong>$nama</strong>, umur Anda saat ini adalah $umur tahun.</p>";
        echo "<p>Berdasarkan umur, Anda termasuk dalam kategori: <strong>$kategori</strong>.</p>";
    }
    ?>

</body>
</html>