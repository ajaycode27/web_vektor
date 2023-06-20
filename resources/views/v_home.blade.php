<!doctype html>
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
    <title>AzharCreative</title>

    <style>
        ::-moz-selection {
            /* Css Untuk Browser Firefox */
            background-color: #c6538a;
            color: #ffffff
        }

        ::selection {
            background-color: #c6538a;
            color: #ffffff
        }


        body {
            background-color: #ffffff;
            font-family: 'Poppins', sans-serif;
            min-height: 2000px;
        }

        .navbar{
            font-size: 14px;
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
            #utama{
                margin-top: 35px;
            }
            .navbar-nav a {
                text-align: center;
            }

            .box2 {
                margin-top: 20px;
            }
            .logout {
                text-align: center;
                margin-top: 15px;
                margin-right: 10px;
                float: right;
            }
            .logout span{
                margin: 0;
            }
            
        }

        .banner-image {
            background-image: url('gambar/bg3.png');
            background-size: cover;
        }

        @media screen and (max-width:764px) {
            .paragraf1 {
                text-align: center;
            }

            .cardporto,
            .col {
                width: auto;

            }

            .footer {
                position: absolute;
                margin-top: 1200px;
                width: max-content;
            }

        }

        .box2 {
            margin: auto 0px;
        }

        @media screen and (max-width:320px) {
            .lead {
                font-size: 15px;
            }

            .content img {
                margin-top: 50px;
            }

            .cardporto {
                margin-top: 50px;
            }

        }

        .content {
            text-shadow: 3px 2px 5px rgb(31, 31, 31);
        }



        .add-animation {
            background-color: #342C2A;
        }

        .card-footer {
            background-color: #fa9d41;
        }

        .card-footer a {
            color: white;
        }

        .bgcard {
            background-color: #fa9d41;
            border: none;
            height: 900px;
        }

        .gelombang {
            margin-bottom: -10px;
        }

        .bgcard h2 {
            color: white;
        }

        .content2 {
            color: #342C2A;
        }

        .footer svg {
            color: #342C2A;
        }
    </style>
</head>

<body>

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
                <div class="navbar-nav ms-auto" id="utama">
                    <a class="nav-link active " aria-current="page" href="#">Beranda</a>
                    <a class="nav-link " href="/portofolio">Portofolio</a>
                    <a class="nav-link" href="#">Info</a>
                </div>
                <div class="navbar-nav logout">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
                    <span class="  nama" style="color: white;">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- banner -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center text-white">
            <img src="gambar/cavani.png" alt="" class="rounded-circle shadow-lg" width="200">
            <h1 class="display-4 mt-4 fw-bolder">AZHAR CREATIVE</h1>
            <p class="lead ">Freelancer dan Creative Design </p>
        </div>
    </div>
    <!-- Close banner -->

    <!-- Content -->
    <div class="content2 container">
        <div class="row text-center mt-5 p-4">
            <div class="col-md">
                <h2 class="fw-bold">Pengenalan</h2>
            </div>
        </div>

        <div class="paragraf1 row justify-content-around mt-5">
            <div class="col-md-5 text-center">
                <img src="gambar/portofolio/LJ.png" alt="" width="300">
            </div>
            <div class="box2 col-md-5">
                Hallo guys!! Disini saya bakal ngenalin sebuah produk yang mungkin sudah ga asing lagi dimata kalian,
                Yaaa betul banget!! ini adalah Seni lukis wajah atau biasa disebut dengan
                Vektor/Vexel, Seni lukis digital ini sangat cocok untuk hiasan rumah dan hadiah buat orang tercintee :"
                bukan sekedar itu doang, seni lukis digital ini pun bisa diaplikasikan ke berbagai media lain.
                seperti gelas minum, bantal tidur, dan baju, mau ditempelin ke muka lu juga boleh :V canda yaa gess..
            </div>
            <div class="col-md-5 my-5">
                Software yang saya pergunakan disini adalah CorelDraw X8, jangan ragu jangan bimbangg, kualitas tidak
                kalah dengan yang lain dan tentunya
                dengan harga yang miring, file yang akan diterima jika anda mengorder antara lain JPG dan PNG nya, jika
                anda ingin softfile akan dikenakan biaya sedikit ya, karena itu bikinnya susah
                dan saya juga pengen dihargain :( jangan benyak mikir yee nanti diembat yang lain loo :V Cuss order gess
                jan kelamaannn...
            </div>
            <div class="box2 col-md-5 text-center">
                <img src="gambar/portofolio/cavani.png" alt="" width="300">
            </div>
        </div>
    </div>
    <!-- close Content -->

    <!-- card -->
    <div class="gelombang container-fluid p-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fa9d41" fill-opacity="1"
                d="M0,192L48,165.3C96,139,192,85,288,96C384,107,480,181,576,197.3C672,213,768,171,864,160C960,149,1056,171,1152,186.7C1248,203,1344,213,1392,218.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="bgcard container-fluid">
        <div class="row text-center mb-5">
            <div class="col-md-12">
                <h2 class="fw-bold">Jenis Jasa</h2>
            </div>
        </div>
        <div class="container">
                <div class="cardporto row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="gambar/card/mascot final.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Vexel Gaming Logo</h5>
                            <p class="card-text">Vexel ini lebih mengarah ke logo esport, cuman bedanya wajah kitalah
                                yang dijadikan mascotnya.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btm-secondary shadow"
                                style="background-color: #342C2A">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="gambar/card/PSCHOO.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Vexel Karikatur</h5>
                            <p class="card-text">Vexel yang lebih mengedepankan kepala besar dan badan kecil, agar
                                terlihat lucu dan imoet.</p>
                        </div>
                        <div class="card-footer text-center ">
                            <a href="checkout" class="btn btm-secondary shadow"
                                style="background-color: #342C2A">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="gambar/card/84.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Vexel Biasa</h5>
                            <p class="card-text mb-5">Sesuai dengan namanya, ini hanyalah vexel biasa yang dibuat
                                sedemikian rupa agar terlihat elegean dan joss.</p>

                        </div>
                        <div class="card-footer text-center ">
                            <a href="" class="btn btm-secondary shadow"
                                style="background-color: #342C2A">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="gelombang2 container-fluid p-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fa9d41" fill-opacity="1"
                d="M0,128L48,106.7C96,85,192,43,288,48C384,53,480,107,576,128C672,149,768,139,864,117.3C960,96,1056,64,1152,69.3C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </div>
    <!-- close card -->

    <!-- Footer -->
    <div class="container footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span style="color: #342C2A;">© 2022 Azhar, Creative</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-5">
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" class="bi bi-instagram me-3" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" class="bi bi-whatsapp me-3" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a></li>
            </ul>
        </footer>
    </div>
    <!-- Close Footer -->


    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('add-animation', 'shadow');
            } else {
                nav.classList.remove('add-animation', 'shadow');
            }
        });
    </script>
</body>

</html>