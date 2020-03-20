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
    
</head>
<body>

    <header>
        <?php include "header.php" ?>
    </header>
    <?php include "navbar.php" ?>
    <div class="bienvenue">
        <p>
            Bienvenue sur le nouveau site de simplon tech , votre partenaire informatique dans les Ardennes.
        </p>
        <img src="image/slideinfos.jpg" alt="">
    </div>
    <div class="slider">
        <?php include "slider.php" ?>
    </div>
    <div class="tableau-container">
        <div class="tableau">
            <p>Maintenance</p>
            <img src="image/maintenances.jpg" alt="">
        </div>
        <div class="tableau">
            <p>Vente</p>
            <img src="image/ventes.jpg" alt="">
        </div>
        <div class="tableau">
            <p>Livraison</p>
            <img src="image/livraisons.jpg" alt="">
        </div>
    </div>
    <?php include "footer.php"?>
     <div class="banane"><img src="image/simplon.gif" alt=""></div>
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
     <script type="text/javascript">
        jssor_2_slider_init = function() {
            
            var jssor_2_SlideoTransitions = [
            [{b:-1,d:1,o:-0.7}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];
            
            var jssor_2_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_2_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };
            
            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            
            /*#region responsive code begin*/
            
            var MAX_WIDTH = 3000;
            
            function ScaleSlider() {
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                
                if (containerWidth) {
                    
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    
                    jssor_2_slider.$ScaleWidth(expectedWidth);
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
        
        jssor_2_slider_init();
    </script>
     <script src="js/konami.js"></script>
    <script>var easter_egg = new Konami(function() {
        var conteneur = document.querySelector(".banane")
        conteneur.style.display="block"
    });</script>
</body>
</html>