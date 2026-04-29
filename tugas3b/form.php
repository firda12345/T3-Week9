<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Form Input Biodata</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Form Biodata Mahasiswa</h2>
        <form action="hasil.php" method="POST">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" required>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Telepon:</label>
                <input type="tel" name="telepon" required>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </div>

            <div class="form-group">
                <label>Hobi (Boleh pilih lebih dari satu):</label>
                <input type="checkbox" name="hobi[]" value="Coding"> Coding
                <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                <input type="checkbox" name="hobi[]" value="Menyanyi"> Menyanyi
            </div>

            <div class="form-group">
                <label>Jurusan:</label>
                <select name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select>
            </div>

            <button type="submit">Kirim Data</button>
        </form>
    </div>
</body>
</html>