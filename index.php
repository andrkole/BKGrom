<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Boksački klub Grom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./styles/bkstil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Mali"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <div class = "grid-container">
        <div class = "img-container">
          <img src="slike/grom-logo.jpg" alt="Grom logo">
        </div>
       <div class="container flex-container">
            <nav class ="topnav" id ="mynav">
              <a class="nav-links active" href="#">Naslovnica</a>
              <a class="nav-links" href="./Upis.php">Upis</a>
              <a class="nav-links" href="./Galerija.php">Galerija</a>
              <a class="nav-links" href="./Kontakt.php">Kontakt</a>
              <a href="javascript:void(0);" class="icon" onclick="otvoriNav()">
                <i class="fa fa-bars"></i>
              </a>
            </nav>
          </div>
        </div>
    </header>
    
    <section id="cover">
      <div id="cover-text" class="container">
          <a href="#welcome"><h1>Boksački klub Grom</h1></a>
        </div>
      </section>

      <section id="welcome">
          <h2>Stranica Boksačkog kluba Grom</h2>
          <span class = "underline-crta"></span>
          <h3 class ="text-ali">"Mrzio sam svaki dan treninga, ali sam sebi govorio: Nemoj odustati. Trpi sada i provedi ostatak života kao šampion."</h3><h3 class = "ali-autor"> - Muhammad Ali</h3>
      </section>
      
      <section id="about">
        <img class="aslika1" src="./slike/about1.jpg" alt="Slika kluba">
        <img class="aslika2" src="./slike/about2.jpg" alt="Slika kluba2">
        <article class= "about-holder">
          <div class = "inner-box">
            <h1>O nama</h1>
            <p>
            Boksački klub Grom postoji već ~br~ godina, te uspješno nižemo odlične rezultate na različitim nacionalnim i međunarodnim natjecanjima.
            <br>
            Osim natjecateljske skupine, također vodimo i skupinu za rekreativce.
            <br>
            Obje skupine prate naša 4 trenera koja će se pobrinuti da uvijek napredujete, a uz to i uživate.
            <br>
            Sve dobne skupine su dobrodošle u Boksački klub Grom.
            </p>
          </div>  
      </article>
      </section>

      <div class = "nasi-treneri">
        <h2>Naši treneri!</h3>
      </div>
      <section id ="treneri">
       <div class ="img-desc-treneri">
        <div class ="img-treneri">
          <img src ="slike/trener-brnic.jpg" alt = "Ivan Brnic">
        </div>
        <div class ="desc-treneri">
          Ivan Brnić
       </div>
       <div class ="popup" onclick ="otvoriPop()">Kontakt broj <br> (Klikni!)
         <span class ="popup-text" id ="poptxt1">(+385)98 901 1688</span>
       </div>
      </div>
      <div class ="img-desc-treneri">
        <div class ="img-treneri">
          <img src ="slike/trener-damir.jpg" alt = "Damir Madunić">
        </div>
        <div class ="desc-treneri">
          Damir Madunić
        </div>
        <div class = "popup" onclick = "otvoriPop2()">Kontakt broj <br> (Klikni!)
          <span class ="popup-text" id ="poptxt2">(+385)95 869 3905</span>
        </div>
      </div>
      </section>
      <section id="about-upis">
        <h2>Sviđa Vam se naš klub i zanima Vas više informacija?</h2>
        <h2>Sve informacije vezane za upis i termine treninga pogledajte ovdje:</h2>
        <a class ="gumb-upis" href="Upis.php">&rArr;Upis&lArr;</a>
      </section>
    <footer>
        <?php 
        include("includes/footer.html");
        ?>
    </footer>

<!-- JavaScript skripte -->
<script src="./javasc/skripta.js"></script>
  </body>
</html>