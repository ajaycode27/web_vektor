<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('bootstrap-css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Daftar</title>

  <style>
    body {
      background-color: #fa9d41;
      font-family: 'Poppins', sans-serif;
    }

    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 776px) {
      .h-custom {
        height: 100%;
        width: 90%;
      }
    }


    .button:hover {
      position: relative;
      bottom: 5px;
      box-shadow: 0px 5px 5px #8a5520;
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5 banner-login">
          <img src="{{ url('gambar/banner_login.png') }}" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-5 column-input">

         <form method="POST" action="{{ route('register') }}">
          @csrf
            <!-- Username Input -->
            <div class="form-outline mb-4">
              <label class="form-label">Masukan Nama Kamu</label>
              <input type="text" id="name" class="form-control form-control-lg" placeholder="Nama" name="name" />
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>Mana Namanya coo!</strong>
              </span>
              @enderror
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label">Masukan Nama Pengguna</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg"
                placeholder="Nama Pengguna" />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>Mana Nama Usernya Tolol !</strong>
              </span>
              @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label">Masukan Kata Sandi</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="Kata Sandi" />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>Mana Kata Sandinya Bangsat !</strong>
              </span>
              @enderror
            </div>

            <!-- Password Verified -->
            <div class="form-outline mb-3">
              <label class="form-label">Masukan Kembali Kata Sandi</label>
              <input type="password" id="password-confirm" name="password_confirmation"
                class="form-control form-control-lg" placeholder="Masukan Kembali Kata Sandi" />
              
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-lg button" style="
                    padding-left: 2.5rem;
                    padding-right: 2.5rem;
                    color: white;
                    background-color: rgb(46, 37, 31);
                  ">
                Daftar
              </button>
              <p class="small fw-bold mt-2 pt-1 mb-0">
                Udah Punya Akun ?
                <a href="{{ route('login') }}" class="link-danger">Masuk</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>