<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BK Grom - Upis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./styles/bkstil.css" />
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
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class = "grid-container">
        <div class = "img-container">
          <img src="slike/grom-logo.jpg" alt="Grom logo">
        </div>
       <div class="container flex-container">
            <nav class ="topnav" id ="mynav">
              <a class="nav-links" href="./index.php">Naslovnica</a>
              <a class="nav-links active" href="#">Upis</a>
              <a class="nav-links" href="./Galerija.php">Galerija</a>
              <a class="nav-links" href="./Kontakt.php">Kontakt</a>
              <a href="javascript:void(0);" class="icon" onclick="otvoriNav()">
                <i class="fa fa-bars"></i>
              </a>
            </nav>
          </div>
        </div>
    </header>

    <section id="upis">
      <h1>Lista zadataka (To-Do list):</h1>
        <ul>
          <li>Pokrenuti se i napraviti nešto za sebe i svoje tijelo <span class = "mark-simbol" >&#10004;</span></li>
          <li>Riješiti se svakodnevne nervoze <span class = "mark-simbol" >&#10004;</span></li>
          <li>Bolje se osjećati <span class = "mark-simbol" >&#10004;</span></li>
          <li>Upoznati nove ljude i biti dio Grom ekipe <span class = "mark-simbol" >&#10004;</span></li> 
          <li>Naučiti neke <i>cool</i> pokrete <span class = "mark-simbol" >&#10004;</span></li>
        </ul>
      <span class = "underline-crta-upis"></span>
      <h2>
        Na pravom ste mjestu!
      <br>
        &#9889; Grom ekipa vas radosno očekuje &#9889;
      </h2>
    </section>

    <section id="clanarina">
        <h1>Članarina</h1>
        <p>Mjesečna članarina: 200kn</p>
        <p>*Uz upis novog člana plaća se i upisnina od 150kn koja uključuje:
        </p>
        <ul>
            <li>Majicu boksačkog kluba Grom</li>
            <li>Vijaču</li>
        </ul>
    </section>

    <section id="trening">
      <table>
        <caption>Raspored treninga</caption>
        <tr>
          <th>Dan/Lokacija</th>
          <th>Ponedjeljak</th>
          <th>Utorak</th>
          <th>Srijeda</th>
          <th>Četvrtak</th>
          <th>Petak</th>
          <th>Subota</th>
          <th>Nedjelja</th>
        </tr>
        <tr>
          <th class ="loc">Kila</th>
          <td>&#10008;</td>
          <td>20:00h</td>
          <td>&#10008;</td>
          <td>20:00h</td>
          <td>&#10008;</td>
          <td>11:00h</td>
          <td>&#10008;</td>
        </tr>
        <tr>
          <th class ="loc">Gripe</th>
          <td>20:30h</td>
          <td>&#10008;</td>
          <td>20:30h</td>
          <td>&#10008;</td>
          <td>20:30h</td>
          <td>&#10008;</td>
          <td>&#10008;</td>
        </tr>
    </table>
    </section>
    <section id="slobodno-kontakt">
    <h2>Imate dodatnih pitanja?</h2>
    <h2>Slobodno nas <br><a class ="gumb-kontakt" href="Kontakt.php">&#9742; kontaktirajte &#9742;</a></h2>
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