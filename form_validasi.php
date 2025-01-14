<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var email = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (password === "") {
                    $("#password-error").text("Password diisi minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }
                if (!valid) {
                    event.preventDefault();//mencegah pengiriman form secara default
                    //tambahan ajax
                    var formData = $("#myForm").serialize();
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data:formData,
                        success:function(response){
                            $("#hasil").html(response);
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>
