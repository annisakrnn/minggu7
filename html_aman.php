<?php
if (isset($_POST['email']) && isset($_POST['input'])) {
    $nama = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Email valid</h3>";
        echo "Nama yang anda masukkan: " . $nama . "<br>";
        echo "Email yang anda masukkan adalah: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        echo "<br><br><a href='form1.php'>Kembali ke form</a>";
    } else {
        echo "<h3>Email tidak valid</h3>";
        echo "Silahkan masukkan email yang benar.";
        echo "<br><br><a href='form1.php'>Kembali ke form</a>";
    }
} else {
    echo "<h3>Data tidak lengkap</h3>";
    echo "Silahkan masukkan nama dan email pada form.";
    echo "<br><br><a href='form1.php'>Kembali ke form</a>";
}
?>
