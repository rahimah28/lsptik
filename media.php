<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Media</title>
    <link rel="stylesheet" href="./assets/vendors/bootsrap-4.6/css/bootstrap.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
            Lembaga Sertifikasi Online
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="visi.php">Visi & Misi</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="media.php">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informasi.php">Informasi</a>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                GALERI FOTO<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                GALERI VIDEO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                HOT NEWS
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-md-1">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                                    alt="First slide [900x300]"
                                    src="./assets/image/foto1.png"
                                    data-holder-rendered="true">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <h3>First slide label</h3>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                                    alt="Second slide [900x300]"
                                    src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22900%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20900%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17bf58acf64%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A45pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17bf58acf64%22%3E%3Crect%20width%3D%22900%22%20height%3D%22300%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22264.9453125%22%20y%3D%22170.0015625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                    data-holder-rendered="true">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Second slide label</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br><br>
                <!-- <h1>
                    <center>Lembaga Sertifikasi</center>
                </h1> -->
            </main>
        </div>
</body>
</html>
