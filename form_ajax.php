<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan JQuery</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
<h2>Form Contoh</h2>
<form id="myForm"></form>
        <label for="buah">Pilih Buah</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label>Pilih Warna Favorit:<br>
        <input type="checkbox" name="warna[]" value="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>
        <br>
        <label>Pilih Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan<br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <div id="hasil">
        <!--Hasil akan ditampilkan disini!-->
    </div>
    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(e){
                e.preventDefault(); //Mencegah pengiriman form secara default
                //Mengumpulkan data form
                var formData = $("#myForm").serialize();
                //Mengumpulkan data ke server PHP
                $.ajax({
                    url: "proses_lanjut.php", //ganti dengan nama file PHP yang sesuai
                    type: "POST",
                    data: formData,
                    success:function (response){
                        //Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>