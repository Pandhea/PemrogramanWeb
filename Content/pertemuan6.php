<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <style>
        .container { 
        width: 450px; 
        margin: 40px auto; 
        background-color: white; 
        padding: 25px; 
        border-radius: 10px; 
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12); 
        } 
        
        h1 { 
        text-align: center; 
        margin-bottom: 10px; 
        color: #222; 
        } 
        
        .deskripsi { 
        text-align: center; 
        color: #666; 
        font-size: 14px; 
        margin-bottom: 25px; 
        } 
        
        .form-group { 
        margin-bottom: 15px; 
        } 
        
        label { 
        display: block; 
        margin-bottom: 6px; 
        font-weight: bold; 
        color: #333; 
        } 
        
        input, 
        select, 
        textarea { 
        width: 100%; 
        padding: 10px; 
        border: 1px solid #bbb; 
        border-radius: 6px; 
        font-size: 14px; 
        } 
        
        input:focus, 
        select:focus, 
        textarea:focus { 
        outline: none; 
        border-color: #007bff; 
        }
        </style>
</head>
<body>
    <div class="container">
        <h1>Form Data Mahasiswa</h1>
        <p class="deskripsi">Pengumpulan data mahasiswa</p>
        <form action="#" method="post"></form>
            <div class="form-group">
                <label for="nama lengkap">Nama</label>
                <input type="text" id="nama lengkap" name="nama lengkap" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="contoh123@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password">
            </div>
            <div class="form-group">
                <label for="jenis kelamin">Jenis Kelamin</label>
                <select id="jenis kelamin" name="jenis kelamin">
                    <option value="">Pilih jenis kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan">
                    <option value="">Pilih jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
            </div>
            

</body>
</html>
