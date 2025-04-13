<?php 
require_once 'class_mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $angkatan = $_POST['angkatan'];
    $prodi = $_POST['prodi'];
    $ipk = $_POST['ipk'];

    $mahasiswa_baru = new Mahasiswa($nim, $nama, $angkatan, $prodi, $ipk);
    $daftar_mahasiswa[] = $mahasiswa_baru;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <form method="POST" class="mb-4">
            <div class="form-floating mb-3">
                <input class="form-control" name="nim" type="text" placeholder="NIM" required />
                <label for="nim">NIM</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="nama" type="text" placeholder="Nama" required />
                <label for="nama">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="angkatan" type="number" placeholder="Angkatan" required />
                <label for="angkatan">Angkatan</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="prodi" type="text" placeholder="Prodi" required />
                <label for="prodi">Prodi</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="ipk" type="number" step="0.01" placeholder="IPK" required />
                <label for="ipk">IPK</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Tambah Mahasiswa</button>
            </div>
        </form>
        <table class="table table-bordered mt-3">  
            <thead>
            <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Prodi</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $mhs->nim . "</td>";
                    echo "<td>" . $mhs->nama . "</td>";
                    echo "<td>" . $mhs->angkatan . "</td>";
                    echo "<td>" . $mhs->prodi . "</td>";
                    echo "<td>" . $mhs->ipk . "</td>";
                    echo "<td>" . $mhs->getPredikat() . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>