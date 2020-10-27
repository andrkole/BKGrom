<!DOCTYPE html>
<html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';


$result = "";

if(isset($_POST['submit'])) {

    $email_to = "andreas.kolenda98@gmail.com";
    $email_from = $_POST['mail'];
    $ime = $_POST['ime'];
    $poruka = $_POST['poruka'];

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = "andreas.kolenda98@gmail.com";
    $mail->Password = 'kolendaa';

    $mail->setFrom($email_to, $ime);
    $mail->addAddress($email_to);
    $mail->addReplyTo($email_from, $ime);
    $mail->Subject = 'Web Poruka BKGrom - ' . $ime;
    $mail->Body = $poruka;

    if(!$mail->send()) {
        $result = "Greška! \n<br> Poruka nije poslana. \n<br> Administrator je obaviješten.";
    }      
    else {
        $result = "Poruka je poslana. \n<br> Hvala!";
    }
}
?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BK Grom - Kontakt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                  <a class="nav-links" href="./index.php">Naslovnica</a>
                  <a class="nav-links" href="./Upis.php">Upis</a>
                  <a class="nav-links" href="./Galerija.php">Galerija</a>
                  <a class="nav-links active" href="#">Kontakt</a>
                  <a href="javascript:void(0);" class="icon" onclick="otvoriNav()">
                    <i class="fa fa-bars"></i>
                  </a>
                </nav>
            </div>
        </div>
     </header>

     <section id="lokacija">
       <div class="loc-tekst">
         <h1>Ukoliko nas želite posjetiti i vidjeti kako izgleda naš trening,</h1>
         <h1>Slobodno dođite na jednu od navedenih lokacija za vrijeme treninga</h1>
         <h2>*Raspored treninga se nalazi na stranici <a class ="upis-ref" href="Upis.php">Upis</a>*</h2>
       </div>
       <div class="loc-container">
         <div class="desc-container">
           <a href="https://goo.gl/maps/UmtVEcjRfs12" target="_blank">
          <img class="slika-loc" src="./slike/loc-kila.gif" alt="Lokacija Kila">
            </a>
          <p>Vrboran ul. 27</p>
          <p>21000, Split</p>
          </div>
          <div class="desc-container">
            <a href="https://goo.gl/maps/ernYfSfGYQK2" target="_blank">
            <img class="slika-loc" src="./slike/loc-gripe.gif" alt="Lokacija Gripe">
              </a>
            <p>Slobode ul. 16A</p>
            <p>21000, Split</p>
          </div>
        </div>
     </section>     
     <section id = "kontakt-head">
          <h1>Imate pitanje na koje niste našli odgovor, želite dodatne informacije</h1>
          <h1>ili nam se samo želite javiti?</h1>
          <h1>Ukoliko preferirate kontakt pisanim putem umjesto telefonskim,</h1>
          <h1>&#8681; Ispunite kontakt formu i stupite s nama u kontakt &#8681;</h1>
     </section>
     <section id ="kontakt-forma">
       <div class ="forma-container">
       <form name="emailform" action="#kontakt-forma" method="POST">   
         <h1>Kontakt Forma</h1>
         <div class="red">
            <div class="25-col">
              <label for="ime">Vaše ime:</label>
            </div>
            <div class="75-col">
              <input type="text" id="ime" name="ime" required>
          </div>

          <div class="red">
            <div class="25-col">
              <label for="mail">Vaša e-mail adresa:</label>
            </div>
            <div class="75-col">
              <input type="email" id="mail" name="mail" required>
            </div>
         </div>

         <div class="red">
           <div class="25-col">
             <label for="poruka">Poruka:</label>
            </div>
            <div class="75-col">
              <textarea rows = "5" cols = "50" id ="poruka" name ="poruka" placeholder="Vaša poruka..." required></textarea>
            </div>
         </div>

         <div class="red">
           <input type="submit" name="submit" value="Pošalji!">
        </div>
        <div class="result-container">
        <?php 
          if(isset($result))
          {
            echo "<span>" . $result . "</span>";
          }
        ?> 
       </form>
       </div>
     </section>

      <span class="form-underline"></span>

  <footer>
    <?php 
    include("includes/footer.html");
    ?>
  </footer>

<!-- JavaScript skripte -->
<script src="./javasc/skripta.js"></script>
  </body>
</html>