<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"]; "<br>"; 
        $email = $_POST["email"]; "<br>";
        $password = $_POST["password"]; "<br>";
        $errors = array();

        //validasi nama
        if (empty($nama)) {
            $errors[] = "Nama harus diisi.";
        }
        //validasi email
        if (empty($email)) {
            $errors[] = "Email harus diisi.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid.";
        }
        //validasi password
        if (empty($password)) {
            $errors[] = "Password harus diisi.";
        } elseif (strlen($password) < 8 ) {
            $errors[] = "Password harus diisi minimal 8 karakter.";
        }
        //jika ada kesalahan validasi
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            // Kirim email setelah validasi sukses
        $to = $email;
        $subject = "Registrasi Berhasil";
        $message = "Terima kasih $nama, Anda telah berhasil melakukan registrasi.";
        $headers = "From: admin@gmail.com";  // Ganti dengan email pengirim
        if (mail($to, $subject, $message, $headers)) {
            echo "Email berhasil dikirim ke $email.<br>";
        } else {
            echo "Terjadi kesalahan saat mengirim email.<br>";
        }
        echo "Data berhasil dikirim: <br> Nama = $nama  <br> Email = $email ";
    }
}
?>