<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplonTech</title>
  <script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
  <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
  
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
  <link href="http://fr.allfont.net/allfont.css?fonts=play" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <header>
    <?php include "header.php" ?>
  </header>
  <?php include "navbar.php" ?>
  <div class="container">
    <div class="produit-container">
      
          <div class="produit-container">
      
      <aside>
        <h1>Tous nos produit</h1>
        <ul>
          <li class="deroulant"><a href=""><img src="image/ordinateur.png" alt=""> Ordinateur </a>
            <ul class="sous">
              <li>
                <a href="galerie-produit.php">XI</a>
              </li>
              <li>
                <a href="galerie-produit2.php">XY</a>
              </li>
              <li>
                <a href="">XV</a>
              </li>
            </ul>
          </li>
          <li class="deroulant"><a href=""> <img src="image/portable.png" alt="">Portable </a>
            <ul class="sous">
              <li>
                <a href="">XI</a>
              </li>
              <li>
                <a href="">XY</a>
              </li>
              <li>
                <a href="">XV</a>
              </li>
            </ul>
          </li>
          <li class="deroulant"><a href="">  <img src="image/souris.png" alt="">Souris</a>
            <ul class="sous">
              <li>
                <a href="">XI</a>
              </li>
              <li>
                <a href="">XY</a>
              </li>
              <li>
                <a href="">XV</a>
              </li>
            </ul>
          </li>
          <li class="deroulant"><a href=""><img src="image/clavier.png" alt="">Clavier </a>
            <ul class="sous">
              <li>
                <a href="">XI</a>
              </li>
              <li>
                <a href="">XY</a>
              </li>
              <li>
                <a href="">XV</a>
              </li>
            </ul>
          </li>
          <li class="deroulant"><a href=""> <img src="image/casque.png" alt="">Casque </a>
            <ul class="sous">
              <li>
                <a href="">XI</a>
              </li>
              <li>
                <a href="">XY</a>
              </li>
              <li>
                <a href="">XV</a>
              </li>
            </ul>
          </li>
        </aside>
        </div>
        <div class="liste ">
          <a rel="prettyPhoto[myGallery]" title="XY-3000" href="image/XY.jpg">
            <img alt="" src="image/XY.jpg" />
          </a>   
          <ul>
            <a href="fichier-produit2.php"><p>XY-3000</p></a>
            <li>Garantie commerciale : 2ans</li>
            <li>Carte Graphique : Radeon 960</li>
            <li>Processeur : Intelcore 5</li>
          </ul>
        </div>
         <div class="liste color">
          <a rel="prettyPhoto[myGallery]" title="XY-3000" href="image/XY.jpg">
            <img alt="" src="image/XY.jpg" />
          </a>   
          <ul>
            <a href="fichier-produit2.php"><p>XY-3000</p></a>
            <li>Garantie commerciale : 2ans</li>
            <li>Carte Graphique : Radeon 960</li>
            <li>Processeur : Intelcore 5</li>
          </ul>
        </div>
        <div class="liste ">
          <a rel="prettyPhoto[myGallery]" title="XY-3000" href="image/XY.jpg">
            <img alt="" src="image/XY.jpg" />
          </a>   
          <ul>
            <a href="fichier-produit2.php"><p>XY-3000</p></a>
            <li>Garantie commerciale : 2ans</li>
            <li>Carte Graphique : Radeon 960</li>
            <li>Processeur : Intelcore 5</li>
          </ul>
        </div>
        </div>
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
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
      });
    </script>
  
    
  </body>
  </html>