<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplonTech</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
  
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="http://fr.allfont.net/allfont.css?fonts=play" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <header>
    <?php include "header.php" ?>
  </header>
  <?php include "navbar.php" ?>
  
  
  <div class="top-fiche">
<div class="fotorama"
     data-nav="thumbs">
  <a href="image/XY.jpg"><img src="image/XY.jpg" width="144" height="96"></a>
  <a href="image/XI2.jpg"><img src="image/XI2.jpg" width="144" height="96"></a>
  <a href="image/XI3.jpg"><img src="image/XI3.jpg" width="144" height="96"></a>
</div>
    <h1>XY 3000<br><br>Le Top du PC</h1>
</div>
<div class="description">
  <h2>Description produit</h2>
  <p>lorem ipus romanus tropzk zoqckqzcoq qzkczqpokczq zqcpzpqzzq zkqpczpqzpzqcplorem ipus romanus, lorem ipsum romanum austrum lorem ipus romanus tropzk zoqckqzcoq qzkczqpokczq zqcpzpqzzq lorem ipus romanus tropzk zoqckqzcoq qzkczqpokczq zqcpzpqzzq zkqpczpqzpzqcplorem ipus romanus, lorem ipsum romanum austrumzkqpczpqzpzqcplorem ipus romanus, lorem ipsum romanum austrum</p>
</div>
<div class="caracteristique">
  <h2>Caractéristique Produit</h2>
  <div class="carac-container">
  <ul>
              <li>Garantie commerciale : 2ans</li><br>
              <li>Carte Graphique : Radeon 960</li><br>
              <li>Processeur : Intelcore 5</li><br>
  </ul>
  <ul>
              <li>Marque : Lenovo</li><br>
              <li>Modèle : RX60R26614</li><br>
              <li>Capacité : 8go</li><br>
  </ul>
</div>
 
  
  
  <?php include "footer.php"?>
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