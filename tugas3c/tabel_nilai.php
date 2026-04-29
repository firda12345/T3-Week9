<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $uts;
    public $uas;

    public function __construct($nama, $nim, $uts, $uas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->uts = $uts;
        $this->uas = $uas;
    }
}

// Data Mahasiswa (Array Multidimensi berisi Object)
$daftar_mahasiswa = [
    new Mahasiswa("Mustafida", "F1D02410126", 85, 90),
    new Mahasiswa("Azizah", "F1D021002", 55, 60),
    new Mahasiswa("Alya Rasyida Putri", "F1D021003", 90, 75),
    new Mahasiswa("Citra Lestari", "F1D021004", 45, 50),
    new Mahasiswa("Baiq Erwina Yolanda", "F1D021005", 90, 88)
];

// Function untuk menentukan Grade
function hitungGrade($nilai) {
    if ($nilai >= 80) return "A";
    if ($nilai >= 70) return "B";
    if ($nilai >= 60) return "C";
    if ($nilai >= 50) return "D";
    return "E";
}

$total_akhir = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Nilai Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daftar_mahasiswa as $mhs): 
                    // Hitung Nilai Akhir: (UTS 40%) + (UAS 60%)
                    $nilai_akhir = ($mhs->uts * 0.4) + ($mhs->uas * 0.6);
                    $total_akhir += $nilai_akhir;
                    $grade = hitungGrade($nilai_akhir);
                    
                    // Cek jika nilai < 60 untuk class CSS
                    $row_class = ($nilai_akhir < 60) ? 'low-score' : '';
                ?>
                    <tr class="<?= $row_class ?>">
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->uts ?></td>
                        <td><?= $mhs->uas ?></td>
                        <td><?= $nilai_akhir ?></td>
                        <td><?= $grade ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr class="average-row">
                    <td colspan="4">Rata-rata Kelas</td>
                    <td colspan="2">
                        <?php echo $total_akhir / count($daftar_mahasiswa); ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>