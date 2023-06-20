<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Portofolio</title>

    <style>
        body {
        height: 300px;
        font-family: "Poppins", sans-serif;
        transition: 0.25s;
        }

        .backround {
        position: fixed;
        z-index: -99999;
        top: 0;
        }

        .backround img {
        width: 1365px;
        height: 768px;
        }

        .navbar {
        background-color: #342C2A;
        }


        /* Tampilan HP */
        @media screen and (max-width:428px) {

        .navbar-nav {
            text-align: center;
            margin-top: 15px;
        }

        .tutup a {
            margin-top: -20px;
            margin-right: 110px;
        }

        .content img {
            width: auto;
        }
        }

        
        /* Navbar */
        .navbar{
            height: 70px;
        }
        .navbar-nav a {
        margin-right: 20px;
        }
        .logout{
        margin-left: 30px;
        }
        .logout span{
        margin-left: 10px;
        margin-top: 7px;
        }

        @media screen and (max-width:991px) {
        .navbar-nav a {
            text-align: center;
            margin: 0;
        }
        .logout {
            text-align: center;
            margin-top: 15px;
            margin-left: 0px;
        }
        .logout span{
            margin: 0;
        }
        
        }

        .portofolio img {
    width: 300px;
    height: 300px;
    margin-top: 100px;
    border-radius: 10px;
    box-shadow:0px 5px 10px 0px rgba(0, 0, 0, 0.438);
    }

    h1{
        margin-top: 150px;
        text-align: center;
        font: 50px;
    }

    @media screen and (max-width:452px){
        .portofolio a{
            width: min-content;
        }
    }
    </style>
</head>
<body>
    <div class="backround">
        <img src="gambar/bg5.png" alt="">
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark p-md-3 add-animation">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="gambar/logo.png" alt="" width="19" height="20"
                    class="me-2"><strong>Azhar</strong>Creative</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active " aria-current="page" href="/home">Beranda</a>
                    <a class="nav-link " href="/portofolio">Portofolio</a>
                    <a class="nav-link" href="#">Info</a>
                </div>
                <div class="navbar-nav logout">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
                    <span class="nama" style="color: white;">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <div class="cangkangPorto">
        <div class="portofolio text-center" id="page1">
            <h1><strong>"Vektor Karikatur"</strong></h1>
      
            <div class="navigasi mt-4">
              <a href="#page1" class="btn btn-warning btn-md"><strong>Vektor Karikatur</strong></a>
              <a href="#page2" class="btn btn-warning btn-md ms-3"><strong>Vektor Biasa</strong></a>
              <a href="#page3" class="btn btn-warning btn-md ms-3"><strong>Logo Esport</strong></a>
            </div>
      
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/11.1.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/cavani.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/LJ.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/PSCHOO.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/Untitled-2.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Karikatur/Untitled-3.png" alt="">
                </div>
              </div>
      
          <div class="portofolio text-center" id="page2">
            <h1><strong>"Vektor Biasa"</strong></h1>
      
            <div class="navigasi mt-4">
              <a href="#page1" class="btn btn-warning btn-md"><strong>Vektor Karikatur</strong></a>
              <a href="#page2" class="btn btn-warning btn-md ms-3"><strong>Vektor Biasa</strong></a>
              <a href="#page3" class="btn btn-warning btn-md ms-3"><strong>Logo Esport</strong></a>
            </div>
      
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa1.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa6.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa3.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa4.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa5.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Biasa/biasa2.png" alt="">
                </div>
              </div>
      
          <div class="portofolio text-center" id="page3">
            <h1><strong>"Logo Esport"</strong></h1>
      
            <div class="navigasi mt-4">
              <a href="#page1" class="btn btn-warning btn-md"><strong>Vektor Karikatur</strong></a>
              <a href="#page2" class="btn btn-warning btn-md ms-3"><strong>Vektor Biasa</strong></a>
              <a href="#page3" class="btn btn-warning btn-md ms-3"><strong>Logo Esport</strong></a>
            </div>
      
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport1.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport2.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport3.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport4.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport5.png" alt="">
                </div>
                <div class="col">
                  <img src="gambar/portofolio/Esport/esport6.png" alt="">
                </div>
              </div>
    </div>
  
  


    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>