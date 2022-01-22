<!DOCTYPE html> 
<html lang="en" > 
    <head> 
        <link rel="stylesheet" type="text/css" href="bukutamu.css">
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Post and Get</title> 
    </head> 
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
    <div class="container"> 
        <h3>Buku Tamu</h3> 
        <nav>
            <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="about.html">about</a></li>
                <li><a href="pesanan.html">pesanan</a></li>
                <li><a href="buku tamu.php">buku tamu</a></li>
            </ul>
        </nav>
        <div id="frame"> 
            <div class="form-group"> 
                <input type="text" name="name" id="name" required /> 
                <label for="name">Nama</label> 
                </div> 

            <div class="form-group"> 
                    <input type="text" name="email" id="email" required /> 
                    <label for="email">Email</label> 
                </div> 
            <div class="form-group"> 
                <input type="text" name="alamat" id="alamat" required /> 
                <label for="name">Alamatmu</label> 
                </div> 
            <div class="form-group"> 
                <input type="text" name="prodi" id="prodi" required /> 
                <label for="name"> Nomer Hp</label> 

                </div> 
            <div class="form-group"> 
                <input type="text" name="saran" id="saran" required /> 
                <label for="name" > Saran <Kritik & Saran </label> 
                </div> 
        </div>  
     </div> 
     <button class="tombol-aktif animasi warna" type="submit" value=" submit" name="submit" onclick="validasi()">SUBMIT</button> 
     </form> 
     <div class="container"> 
        <?php
        if(isset($_POST['submit'])){
            $nama =$_POST['name'];
            $email=$_POST['email'];
            $alamat =$_POST['alamat'];
            $nohp =$_POST['nohp'];
            $saran =$_POST['saran'];
            echo "<div class ='tampilan'>
            Nama Lengkap: $name <br>
            Email Anda : $email <br>
            Alamat Anda : $alamat <br> 
            No Hp Anda :$nohp <br>
            Saran Anda : $saran <br>
            </div>";

        }
        ?>
</div> 
<script> 
function validasi(){ 
    var name = document.getElementById("name"). value; 
    var email = document.getElementById("email"). value; 
    var alamat = document.getElementById("alamat"). value; 
    var prodi= document.getElementById("nohp"). value; 
    var saran = document.getElementById("saran"). value; 
    var peringatan = "Anda Harus Mengisi"; 
    if (name == ""){ 
        peringatan = peringatan + "nama !";
        console.log("Anda Belum Menuliskan nama");  
    }
    if (email == ""){
        peringatan = peringatan + "email !"; 
        console.log("Anda Belum Menuliskan email"); 
    } 
    if (alamat ==""){
        peringatan = peringatan + "alamat !"; 
        console.log("Anda Belum Menuliskan alamat");
    }
    if (nohp ==""){
        peringatan = peringatan + "nohp !";
        console.log("Anda Belum Menuliskan nohp");
    }
    if (saran == ""){
        peringatan = peringatan + "Saran !"; 
        console.log("Anda Belum Menuliskan Saran");
    } 
    if (peringatan == "Anda Harus Mengisi"){
        console. log("Data Anda Lengkap"); 
        alert("Terimakasih Anda Sudah Menuliskan Saran");
    }

}
</script>
</body>
</html>

        