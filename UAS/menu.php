<!DOCTYPE html>
<html>
        <head>
            <title>Menu</title>
            <link rel="stylesheet" type="text/css" href="stylemenu.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        </head>
        <body>
            <div class="container">
               <nav>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="">pesan</a></li>
                        <li><a href="buku tamu.php">buku tamu</a></li>
                    </ul>
                </nav>
                <div class="section">
                    <div class="container">
                        <h3>Menu</h3>
                        <div class="box">
                            <?php
                            $produk= mysqli_query($conn,"SELECT * FROM tb_product ORDER BY product_id DESC LIMIT 8")
                            if(mysqli_num_rows)$produk > 0){
                            ?>
                            while($p = mysqli_fetch_array(produk)){
                            <div class="makan-5">
                                <img src=""> 
                                <p class=" nama ">Nama Prodak</p>
                                <p class= "harga">Rp 50.000</p>
                            </div>
                            <?php }}else{ ?>
                                <p>prodak tidak ada <p>
                            <?php } ?>
                        </div>
                </div>
              
    </head>
</html>