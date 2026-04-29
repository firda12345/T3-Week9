<?php
// Validasi jika akses langsung tanpa POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: form.php");
    exit();
}

// Ambil data dari POST
$nama = $_POST['nama'] ?? '';
$nim = $_POST['nim'] ?? '';
$email = $_POST['email'] ?? '';
$telepon = $_POST['telepon'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jk = $_POST['jk'] ?? '';
$hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : 'Tiada hobi dipilih';
$jurusan = $_POST['jurusan'] ?? '';

// Cek jika ada field kosong
if (empty($nama) || empty($nim) || empty($email)) {
    echo "<script>alert('Semua field wajib diisi!'); window.history.back();</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Hasil Biodata</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container" style="max-width: 600px;">
        <h2>Hasil Input Biodata</h2>
        <table>
            <tr><th>Kriteria</th><th>Data</th></tr>
            <tr><td>Nama</td><td><?= htmlspecialchars($nama) ?></td></tr>
            <tr><td>NIM</td><td><?= htmlspecialchars($nim) ?></td></tr>
            <tr><td>Email</td><td><?= htmlspecialchars($email) ?></td></tr>
            <tr><td>Telepon</td><td><?= htmlspecialchars($telepon) ?></td></tr>
            <tr><td>Alamat</td><td><?= nl2br(htmlspecialchars($alamat)) ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?= htmlspecialchars($jk) ?></td></tr>
            <tr><td>Hobi</td><td><?= htmlspecialchars($hobi) ?></td></tr>
            <tr><td>Jurusan</td><td><?= htmlspecialchars($jurusan) ?></td></tr>
        </table>
        <br>
        <button onclick="window.history.back()">Kembali ke Form</button>
    </div>
</body>
</html>