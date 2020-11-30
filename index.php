<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>data barang</title>
  </head>
  <body class="jumbotron">
    <div>
        <p><a class="btn btn-primary btn-lg" href="tambah.php" role="button">tambah produk</a> </p>
       
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">nama produk</th>
                <th scope="col">keterangan</th>
                <th scope="col">harga</th>
                <th scope="col">jumlah</th>
                <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            //koneksi
            include "koneksi.php";
            //baca data mysqli
            $ambildata = mysqli_query($koneksi, "SELECT * FROM produk");
            while ($tampil = mysqli_fetch_array($ambildata)){
                echo "
                <tr>
                <td>$tampil[nama_produk]</td>
                <td>$tampil[keterangan]</td>
                <td>$tampil[harga]</td>
                <td>$tampil[jumlah]</td>
                <td>  
                      <a href='apus.php?id=$tampil[id]'> hapus </a> | 
                      <a href='edit.php?id=$tampil[id]'> edit </a> 
                </td>
              
                </tr> ";               
            }
            ?>        
            </tbody>
        </table>
    </div>
    
   
   

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>