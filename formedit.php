<?php
include 'koneksi.php';

    $id_produk = $_GET['id_produk'];
    $sql = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
    $query = mysqli_query($connect,$sql);
    $pro = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)< 1){
        die("data tidak di temukan...");
    }
?>



<!doctype html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>edit produk</title>
    <style>
      body{
            background-color: gray;
        }
        .container{
            background-color: white;
            margin-top: 150px;
            border: 2px solid black;
        }
        h3{
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        label{
            padding: 5px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: white;
        }
    
</style>
</head>

<body>
    <div class="container">
        <h3>form edit produk</h3>
        <form action="edit.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="hidden" name="id_produk" value="<?php echo $pro['id_produk']?>" />
                    <label for="inputEmail4">nama :</label>
                    <input type="text" class="form-control" name="nama_produk" value="<?php echo $pro['nama_produk']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">harga :</label>
                    <input type="text" class="form-control" name="harga_produk"
                        value="<?php echo $pro['harga_produk']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">gambar :</label>
                <input type="url" class="form-control" name="gambar_produk" value="<?php echo $pro['gambar_produk']?>">
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="simpan" value="simpan">Simpan</button>
    </div>
    </div>
    </form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>