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
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Checkout</title>
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

.pc-utm li img {
  width: 30%;
  border-radius: 10px;
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.555)
}

.pc-btm li img {
  width: 150px;
  border-radius: 10px;
}

.pc-btm li {
  display: inline-block;
  margin-top: 25px;
  margin-right: 20px;
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

/* pesanan */
.pesan img {
  width: 100%;
}

@media screen and (max-width:990px) {
  .pesan img {
      width: 75%;
      margin-top: 120px;
  }

  .pc-utm li img {
      width: 60%;
  }

  .pc-btm li img {
      width: 170px;
  }
}

@media screen and (max-width:500px) {
  .pesan img {
      width: 75%;
      margin-top: 120px;
  }

  .pc-utm li img {
      width: 60%;
      margin-right: 30px;
  }

  .pc-btm li img {
      width: 100px;
  }
}

.pemesanan {
  height: calc(100% - 73px);
  margin-top: 100px;
}

@media (max-width: 776px) {
  .pemesanan {
      height: 50%;
      width: 90%;
      margin-top: 70px
  }

  .pesan {
      margin-top: 30px;
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
                    <a class="nav-link " href="portofolio.html">Portofolio</a>
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

    <!-- Lightbox -->
    <div class="lightbox">
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-hero align-items-center">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work ">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(gambar/lightbox/Karikatur/img4.png);">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(gambar/lightbox/Karikatur/img3.png);">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(gambar/lightbox/Karikatur/img2.png);"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="my-5 text-center">
                      <ul class="thumbnail">
                        <li class="active img"><a href="#"><img src="gambar/lightbox/Karikatur/img4.png" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="gambar/lightbox/Karikatur/img3.png" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="gambar/lightbox/Karikatur/img2.png" alt="Image" class="img-fluid"></a></li>
                      </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- close Lightbox -->
    <div class="judul mb-5" align="center">
        <h2 style="color:#342C2A; font-size: 40px;"><strong>"Vexel Karikatur"</strong></h2>
    </div>
    <!-- Content -->
    <div class="pesan">
        <div class="row justify-content-around">
            <div class="col-lg-4 text-center">
                <img src="gambar/paketbiasa.png" alt="">
            </div>
            <div class="col-lg-4 text-center">
                <img src="gambar/paketluarbiasa.png" alt="">
            </div>
        </div>
    </div>

    <!-- close content -->

    <!-- form pemesanan -->
    <div class="container-fluid pemesanan">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <form method="post" action="/checkout" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label" for="select"><b>Masukan Jenis Paket</b></label>
                            <select name="paket" id="paket" class="selectpicker form-select">
                                <option value="biasa">Paket Biasa</option>
                                <option value="luarBiasa">Paket Luar Biasa</option>
                            </select>

                            @error('jenisPaket')
                            <span class="invalid-feedback" role="alert">
                                <strong>Mana Jenis Paketnya Sayang</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="select"><b>Masukan Ukuran Foto (Yang Akan Diedit)</b></label>
                            <select name="ukuran" id="ukuran" class="selectpicker form-select">
                                <option value="half">Half Body (Setengah Badan)</option>
                                <option value="full">Fullbody (Seluruh Badan)</option>
                            </select>

                            @error('ukuranFoto')
                            <span class="invalid-feedback" role="alert">
                                <strong>Mana Ukuran Fotonya Beb</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="foto"><b>Masukan Foto</b></label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">

                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>Mana Bisa, Ga ada Fotonya</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="keterangan"><b>Masukan Keterangan</b></label>
                            <textarea class="form-control" id="keterangan" rows="7 " name="keterangan"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <button type="button" onclick="cekHarga()" class="btn btn-success mb-3">Cek Harga</button> <br>
                                <button type="submit" class="btn btn-primary">Pesan</button>
                                

                    
                            </div>
                            <h3 id="totalHarga" class="fw-bold"></h3>
                            <input type="hidden" name="harga" id="harga">
                        </div>
                </form>
            </div>

            <div class="row d-flex h-100 mt-5 justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <h5><b>Note :</b></h5>
                    <p>1. Harga diatas merupakan harga <b>Perkepala</b> bukan perfoto, maka dari itu <b>isi form jumlah kepala</b> <br> 
                        2. Disarankan untuk mengirim foto dengan kualitas yang tinggi (Tidak Pecah). <br>
                        3. Yang dimaksud dengan "Masukan Ukuran Foto" adalah untuk ukuran hasil akhir yang sudah diedit
                        nanti <br>
                        4. Masukan keterangan jika anda ingin mengcustom backround sendiri atau barangkali ada yang
                        ingin diubah/ditambahkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- close form -->
    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Script -->
<script type="text/javascript"  >
 
    const harga = [
        biasa = [
            half = 10000,
            full = 20000
        ],
        luarBiasa = [
            half =35000,
            full = 50000,
        ]
    ]
    let paket = document.getElementById('paket')
    let ukuran = document.getElementById('ukuran')
    let tampilHarga = document.getElementById('totalHarga')
    let price = document.getElementById('harga');
    let totalHarga = 0;

console.log(harga[0][0])

    function cekHarga() {
        if(paket.value == 'biasa' && ukuran.value == 'half') {
            totalHarga = harga[0][0] * counter.textContent;
            console.log(totalHarga)
        }
        if(paket.value == 'biasa' && ukuran.value == "full") {
            totalHarga = harga[0][1] * counter.textContent;
            console.log(totalHarga)
        }
        if(paket.value == 'luarBiasa' && ukuran.value == "half") {
            totalHarga = harga[1][0] * counter.textContent;
            console.log(totalHarga)
        }
        if(paket.value == 'luarBiasa' && ukuran.value == "full") {
            totalHarga = harga[1][1] * counter.textContent;
            console.log(totalHarga)
        }
        let current = 'Rp. '+totalHarga
        tampilHarga.innerHTML = current
        price.value = current

    }
</script>



</html>