<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana dengan PHP</title>
</head>
<body>
    <h2>Kalkulator Aritmatika Sederhana</h2>
    <form method="post">
        Angka 1: <input type="number" name="angka1" required><br><br>
        Angka 2: <input type="number" name="angka2" required><br><br>
        Operasi:
        <select name="operasi" required>
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    // Periksa apakah form telah dikirim`
    if (isset($_POST['hitung'])) {
        // Ambil input dari pengguna
        $angka1 = $_POST['angka1']; // angka pertama
        $angka2 = $_POST['angka2']; // angka kedua
        $operasi = $_POST['operasi']; // operasi yang dipilih

        // Variabel untuk menyimpan hasil
        $hasil = 0;

        // Gunakan struktur if-else untuk menentukan operasi
        if ($operasi == "tambah") {
            $hasil = $angka1 + $angka2; // penjumlahan
        } elseif ($operasi == "kurang") {
            $hasil = $angka1 - $angka2; // pengurangan
        } elseif ($operasi == "kali") {
            $hasil = $angka1 * $angka2; // perkalian
        } elseif ($operasi == "bagi") {
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2; // pembagian
            } else {
                $hasil = "Tidak bisa dibagi dengan nol";
            }
        } else {
            $hasil = "Operasi tidak dikenali";
        }

        // Tampilkan hasil
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
