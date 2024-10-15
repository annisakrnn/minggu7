<?php
//soal no 1
$umur;
if (isset($umur) && $umur >= 18){
    echo"Anda sudah dewasa.";
}else{
    echo"Anda belum dewasa ata variabel 'umur' tidak ditemukan.";
}

//soal no 2
$data = array("nama" => "Jane", "usia" => 25);
if(isset($data["nama"])){
    echo "<br> Nama: " .$data["nama"];
}
    else{
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }

?>