<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(241, 242, 246);
        }

        .card {
            display: flex;
            justify-content: center;
            float: left;
            line-height: 20px;
            margin-top: -150px;
            border-radius: 5%;
        }

        #btn-close {
            color: white;
            background-color: white;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Canon_logo_vector.png " alt=""
                                width="60" height="60">
                        </a>
                    </li>
                    <li class="nav-item mt-2" style="margin-left: 1000px;">
                        <a class="nav-link active text-white" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link active text-white" aria-current="page" href="#card">Produk</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link active text-white" aria-current="page" href="tampildataa.php">Input Data</a>
                </ul>
            </div>
        </div>
    </nav>
    <!--CLOSE NAVBAR -->


    <!-- CAROUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://id.canon/media/image/2020/08/26/d3ffb526da3e4fd4855884be98c9f1ae_2020-08-2484-ID.CANON-Update-Banner-EOS-R5-R6-01-1920x750.png"
                    class="d-block w-100" alt="..." style="width:1390px; height: 600px;">
            </div>
            <div class="carousel-item">
                <img src="https://id.canon/media/image/2020/08/26/61b9fd36cac74ac3bd5dad539aeea892_2020-08-2484-ID.CANON-Update-Banner-EOS-R5-R6-02-1920x750.png"
                    alt="" style="width:1389px; height: 600px;">
            </div>
            <div class="carousel-item">
                <img src="https://id.canon/media/image/2020/04/06/5c914b4bcfe847b9bc2f76ec52a027ab_2020-03-0579-Banner-id.canon---EOS-1DX-mark-III-1920x750.jpg"
                    class="d-block w-100" alt="..." style="width:1389px; height: 600px;">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--CLOSE CAROUSEL -->

    <!-- CARD -->
    <?php
    $sql = "SELECT*FROM produk";
    $query = mysqli_query($connect,$sql);
    while($pro = mysqli_fetch_array($query)){
        echo "<div class='container'>";
        echo "<div class='card' id='card' style='width: 16rem; margin-left: 70px; margin-top: -80px; margin-bottom: 65px;'>";
        echo "<img src='" . $pro['gambar_produk'] ."' class='card-img-top'; style='width: 100%; height: 200px;'>";
        echo "<div class='card-body'>";
        echo "<h6 class='card-title text-center'>".$pro['nama_produk']."</h6>";
        echo "<p class='card-text text-center  fw-light'>Rp." .$pro['harga_produk']."</p>";
        //POP UP DETAIL
        echo "<a href='' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal' style='width:150px; margin-left:40px;'>Detail</a>";
        echo "<div class='modal fade' style='margin-top:200px;' id='exampleModal' tabindex='-1' aria-hidden='true'>";
        echo "<div class='modal-dialog'>";
        echo "<div class='modal-content bg-dark text-white'>";
        echo "<div class='modal-header'>";
        echo "<h5 class='modal-title'id='exampleModalLabel'>".$pro['nama_produk']."</h5>";
        echo "<button type='button' class='btn-close' data-bs-dismiss='modal' id='btn-close' aria-label='Close'></button>";
        echo "</div>";
        echo " <div class='modal-body'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate autem nihil animi asperiores deleniti aliquam, quia dolor corrupti cum nam dicta voluptatum rerum laborum iure deserunt, distinctio nulla fugit exercitationem. <br> <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate autem nihil animi asperiores deleniti aliquam, quia dolor corrupti cum nam dicta voluptatum rerum laborum iure deserunt, distinctio nulla fugit exercitationem.</div>";
        echo "</div>"; 
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";  
        
    } 
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>