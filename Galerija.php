<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BK Grom - Galerija</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src='../unitegallery/js/unitegallery.min.js'></script> 
	<link rel='stylesheet' href='../unitegallery/css/unite-gallery.css' type='text/css' /> 
	<script src='../unitegallery/themes/tiles/ug-theme-tiles.js'></script> 
	<link rel='stylesheet' href='../unitegallery/themes/default/ug-theme-default.css' type='text/css' /> 
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
              <a class="nav-links active" href="#">Galerija</a>
              <a class="nav-links" href="./Kontakt.php">Kontakt</a>
              <a href="javascript:void(0);" class="icon" onclick="otvoriNav()">
                <i class="fa fa-bars"></i>
              </a>
            </nav>
          </div>
        </div>
        
        <div class="galerija">
            <h1>GALERIJA</h1>
        </div>

        <div id="gallery" style="display:none;">

			    <img alt="" src="./slike/thumbs/thumb1.png"
            data-image="./slike/big/slika1.jpg">
                
          <img alt="" src="./slike/thumbs/thumb2.png"
            data-image="./slike/big/slika2.jpg">
            
          <img alt="" src="./slike/thumbs/thumb3.png"
            data-image="./slike/big/slika3.jpg">

          <img alt="" src="./slike/thumbs/thumb4.png"
            data-image="./slike/big/slika4.jpg">

          <img alt="" src="./slike/thumbs/thumb5.png"
            data-image="./slike/big/slika5.jpg">

          <img alt="" src="./slike/thumbs/thumb6.png"
            data-image="./slike/big/slika6.jpg">

          <img alt="" src="./slike/thumbs/thumb7.png"
            data-image="./slike/big/slika7.jpg">

          <img alt="" src="./slike/thumbs/thumb8.png"
            data-image="./slike/big/slika8.jpg">

          <img alt="" src="./slike/thumbs/thumb9.png"
            data-image="./slike/big/slika9.jpg">

          <img alt="" src="./slike/thumbs/thumb10.png"
            data-image="./slike/big/slika10.jpg">

          <img alt="" src="./slike/thumbs/thumb11.png"
            data-image="./slike/big/slika11.jpg">

          <img alt="" src="./slike/thumbs/thumb12.png"
            data-image="./slike/big/slika12.jpg">

          <img alt="" src="./slike/thumbs/thumb13.png"
            data-image="./slike/big/slika13.jpg">

          <img alt="" src="./slike/thumbs/thumb14.png"
            data-image="./slike/big/slika14.jpg">

          <img alt="" src="./slike/thumbs/thumb15.png"
            data-image="./slike/big/slika15.jpg">

          <img alt="" src="./slike/thumbs/thumb16.png"
            data-image="./slike/big/slika16.jpg">

          <img alt="" src="./slike/thumbs/thumb17.png"
            data-image="./slike/big/slika17.jpg">

          <img alt="" src="./slike/thumbs/thumb18.png"
            data-image="./slike/big/slika18.jpg">
          
          <img alt="" src="./slike/thumbs/thumb24.png"
            data-image="./slike/big/slika24.jpg">

          <img alt="" src="./slike/thumbs/thumb19.png"
            data-image="./slike/big/slika19.png">

          <img alt="" src="./slike/thumbs/thumb20.png"
            data-image="./slike/big/slika20.jpg">

          <img alt="" src="./slike/thumbs/thumb21.png"
            data-image="./slike/big/slika21.jpg">

          <img alt="" src="./slike/thumbs/thumb22.png"
            data-image="./slike/big/slika22.jpg">

          <img alt="" src="./slike/thumbs/thumb23.png"
            data-image="./slike/big/slika23.png">

        </div>

    <footer>
        <?php 
        include("includes/footer.html");
        ?>
    </footer>

   <!-- JavaScript skripte -->
  <script src="./javasc/skripta.js"></script>
    </header>
</body>
</html>
