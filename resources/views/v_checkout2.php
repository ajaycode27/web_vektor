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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
   <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Masuk</title>
    <style>
        @import url(https://pro.fontawesome.com/releases/v5.11.2/css/all.css);
:root {
  --user-button-circle: rgba(0, 0, 0, 0.025);
  --user-button-cardborder: rgba(255, 255, 255, 0.25);
  --user-button-text: #323133;
  --user-button-shadow: rgba(0, 0, 0, 0.1);
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

.lightbox {
  margin-top: 100px;
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

  .lightbox {
      margin-bottom: 0;
  }
}

/* Navbar */
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



body {
  height: 300px;
  font-family: "Poppins", sans-serif;
  transition: 0.25s;
}
body.dark {
  background: #212123;
  color: white;
}
@media (prefers-color-scheme: dark) {
  body:not(.light) {
    background: #212123;
    color: white;
  }
}
body .credit {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: inherit;
}
body .options {
  display: flex;
  flex-direction: row;
  align-items: stretch;
  overflow: hidden;
  min-width: 400px;
  max-width: 700px;
  width: calc(100% - 100px);
  height: 400px;
}
@media screen and (max-width: 718px) {
  body .options {
    min-width: 520px;
  }
  body .options .option:nth-child(5) {
    display: none;
  }
}
@media screen and (max-width: 638px) {
  body .options {
    min-width: 440px;
  }
  body .options .option:nth-child(4) {
    display: none;
  }
}
@media screen and (max-width: 558px) {
  body .options {
    min-width: 360px;
  }
  body .options .option:nth-child(3) {
    display: none;
  }
}
@media screen and (max-width: 478px) {
  body .options {
    min-width: 280px;
  }
  body .options .option:nth-child(2) {
    display: none;
  }
}
body .options .option {
  position: relative;
  overflow: hidden;
  min-width: 60px;
  margin: 10px;
  background: var(--optionBackground, var(--defaultBackground, #e6e9ed));
  background-size: auto 120%;
  background-position: center;
  cursor: pointer;
  transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
}
body .options .option:nth-child(1) {
  --defaultBackground: #ed5565;
}
body .options .option:nth-child(2) {
  --defaultBackground: #fc6e51;
}
body .options .option:nth-child(3) {
  --defaultBackground: #ffce54;
}
body .options .option:nth-child(4) {
  --defaultBackground: #2ecc71;
}
body .options .option:nth-child(5) {
  --defaultBackground: #5d9cec;
}
body .options .option:nth-child(6) {
  --defaultBackground: #ac92ec;
}
body .options .option.active {
  flex-grow: 10000;
  transform: scale(1);
  max-width: 600px;
  margin: 0px;
  border-radius: 40px;
  background-size: auto 100%;
  /*&:active {
     transform:scale(0.9);
  }*/
}
body .options .option.active .shadow {
  box-shadow: inset 0 -120px 120px -120px black,
    inset 0 -120px 120px -100px black;
}
body .options .option.active .label {
  bottom: 20px;
  left: 20px;
}
body .options .option.active .label .info > div {
  left: 0px;
  opacity: 1;
}
body .options .option:not(.active) {
  flex-grow: 1;
  border-radius: 30px;
}
body .options .option:not(.active) .shadow {
  bottom: -40px;
  box-shadow: inset 0 -120px 0px -120px black, inset 0 -120px 0px -100px black;
}
body .options .option:not(.active) .label {
  bottom: 10px;
  left: 10px;
}
body .options .option:not(.active) .label .info > div {
  left: 20px;
  opacity: 0;
}
body .options .option .shadow {
  position: absolute;
  bottom: 0px;
  left: 0px;
  right: 0px;
  height: 120px;
  transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
}
body .options .option .label {
  display: flex;
  position: absolute;
  right: 0px;
  height: 40px;
  transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95);
}
body .options .option .label .icon {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  min-width: 40px;
  max-width: 40px;
  height: 40px;
  border-radius: 100%;
  background-color: white;
  color: var(--defaultBackground);
}
body .options .option .label .icon img {
  min-width: 20px;
  max-width: 20px;
}
body .options .option .label .icon {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  min-width: 40px;
  max-width: 40px;
  height: 40px;
  border-radius: 100%;
  background-color: #212123;
  color: var(--defaultBackground);
}
body .options .option .label .info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-left: 10px;
  color: white;
  white-space: pre;
}
body .options .option .label .info > div {
  position: relative;
  transition: 0.5s cubic-bezier(0.05, 0.61, 0.41, 0.95), opacity 0.5s ease-out;
}
body .options .option .label .info .main {
  font-weight: bold;
  font-size: 1.2rem;
}
body .options .option .label .info .sub {
  transition-delay: 0.1s;
}


    </style>
</head>

<body>

    <!-- Close Navbar -->
    <div class="options">
        <div class="option active" style="--optionBackground:url(gambar/card/11.1.png);">
           <div class="shadow"></div>
           <div class="label">
              <div class="icon" style="background-color: white;">
                 <img src="gambar/ikon/logo.png"/>
              </div>
              <div class="info">
                 <div class="main">Asik</div>
                 <div class="sub">Chegou a hora.</div>
              </div>
           </div>
        </div>
        <div class="option" style="--optionBackground:url(gambar/card/mascot\ final.png);">
           <div class="shadow"></div>
           <div class="label">
              <div class="icon" style="background-color: white;">
                 <img src="gambar/ikon/logo.png" />
              </div>
              <div class="info">
                 <div class="main">Eleven</div>
                 <div class="sub">O meu herói é o meu pai.</div>
              </div>
           </div>
        </div>
        <div class="option" style="--optionBackground:url(gambar/card/12.png);">
           <div class="shadow"></div>
           <div class="label">
              <div class="icon" style="background-color: white;">
                 <img src="gambar/ikon/logo.png" />
              </div>
              <div class="info">
                 <div class="main">Hopper</div>
                 <div class="sub">Manhãs são para café e contemplação</div>
              </div>
           </div>
        </div>
        <div class="option" style="--optionBackground:url(gambar/card/Ariel.jpg);">
           <div class="shadow"></div>
           <div class="label">
              <div class="icon" style="background-color: white;">
                 <img src="gambar/ikon/logo.png" />
              </div>
              <div class="info">
                 <div class="main">Eddie</div>
                 <div class="sub">Bem-vinda ao Hellfire.</div>
              </div>
           </div>
        </div>
        <div class="option" style="--optionBackground:url(gambar/card/PSCHOO.png);">
           <div class="shadow"></div>
           <div class="label">
              <div class="icon" style="background-color: white;">
                 <img src="gambar/ikon/logo.png" />
              </div>
              <div class="info">
                 <div class="main">Dustin</div>
                 <div class="sub">Badda Badda BOOM!</div>
              </div>
           </div>
        </div>
     </div>
     <!-- Carosel -->
     
     <!-- close carosel -->
     
     <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
     <script src="js/banner.js"></script>
</body>
<script>
    $(".option").click(function () {
    $(".option").removeClass("active");
    $(this).addClass("active");
  });
</script>
</html>