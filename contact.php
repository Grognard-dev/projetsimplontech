<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimplonTech</title>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="http://fr.allfont.net/allfont.css?fonts=play" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css">
    <style> 
      #map {
        height: 400px;  
        width: 100%;  
       }
    </style>

</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <?php include "navbar.php" ?>
    <form method="post">
    <div class="formulaire-container">
  <div class="formulaire">
    <input type="text" class="form-control" placeholder="Last name" name="user_lastname" value="<?= htmlentities($nom ?? '') ?>">
  </div>
  <div class="formulaire">
    <input type="text" class="form-control"  placeholder="First name" name="user_firstname" value="<?= htmlentities($prenom ?? '') ?>">
  </div>
    <div class="formulaire">
    <input type="text" class="form-control"  placeholder="Telephone" name="user_telephone" value="<?= htmlentities($telephone ?? '') ?>">
  </div>
  <div class="formulaire">
    <input type="email" class="form-control"  placeholder="E-mail" name="user_email" value="<?= htmlentities($email ?? '') ?>">
  </div>
  </div>
  <div class="message">
    <textarea class="text-area"  placeholder="Envoyer message ici!" name="user_message" rows="10" cols="50"><?= htmlentities($messages ?? '') ?></textarea>
  </div>
  <div class="bouton">
    <button type="submit" name="bouton" class="btn btn-primary mb-2">Envoyé</button>
  </div>
</form>
<div class="avis">
  <div class="avis-container">
  <div class="avis-text">
              <img src="image/avatar1.png" alt="">
              <p>c'est pas le site de la convention star wars ?</p><br>
  </div>
  <div class="avis-text reverse">
              <img src="image/avatar2.png" alt="">
              <p>Je deteste cette boutique , c’est de la fiante de moineaux</p><br>
  </div>
</div>
</div>
<div class="avis">
  <div class="avis-container">
  <div class="avis-text">
              <img src="image/avatar3.jpg" alt="">
              <p>Je pensais que c'était un site de lingerie.</p><br>
  </div>
  <div class="avis-text reverse">
              <img src="image/belle.jpg" alt="">
              <p>Je deteste cette boutique , c’est de la fiante de moineaux</p><br>
  </div>
</div>
</div>
  <<iframe src="https://www.google.com/maps/d/u/0/embed?mid=106OZPmLdAz_UnF4CLJoVhrTYIt3KJ4BF" width="1350" height="480"></iframe>
    <?php include "footer.php"?>
     <script>
       <?php include "formulaire.php" ?>
function initMap() {
  var charleville = {lat: 49.77483, lng:  4.70182};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: charleville});
  var marker = new google.maps.Marker({position: charleville, map: map});
}
    </script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWy9bcZv9Q7JTpYmUv1wHzpVwhuMs4KwA&callback=initMap">
    </script>
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
        
        jssor_1_slider_init();
    </script>
 

</body>
</html>