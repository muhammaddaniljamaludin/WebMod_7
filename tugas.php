<?php
// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    // Menampilkan biodata yang telah diinputkan
    echo "<h2>Biodata yang Dimasukkan:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Alamat: " . $alamat . "<br>";
} else {
    // Form untuk input biodata
    echo '
        <form method="post" action="">
            Nama: <input type="text" name="nama"><br>
            Email: <input type="email" name="email"><br>
            Umur: <input type="number" name="umur"><br>
            Alamat: <textarea name="alamat"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    ';
}
?>