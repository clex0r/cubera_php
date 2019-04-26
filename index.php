<!DOCTYPE html>
<html>
<!-- Meta Tags-->  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey MARK</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <?php 
        include('assets/php/detect.php');
        if($lang == 'en'){
            include('assets/php/en.php');
        }else{
            include('assets/php/de.php');
        }
    ?> 
    <div id="fullpage">
        <!-- Section 1 -->
        <div class="section">
            <div class="content">
                <img class="profile" src="assets/img/mark.jpg">
                <span class="text"><?php echo $thanks; ?></span>
            </div>
        </div>
        <!-- Section 2-->
        <div class="section">
            <!-- Header-->
            <header>
                <img class="profile_header" src="assets/img/mark.jpg" alt="">
                <span class="text_header"><?php echo  $thanks; ?></span>
            </header>
            <div class="content">
               <span class="text"><?php echo $sum; ?></span>
            </div>          
        </div>
        <!-- Section 3-->
        <div class="section">
           <!-- Header-->
            <header>
                <img class="profile_header" src="assets/img/mark.jpg">
                <span class="text_header"><?php echo  $thanks; ?><br></span>
                <span class="text_header"><?php echo  $sum; ?></span>
            </header>
            <!-- 6 colored boxes-->
            <div id="container">
                <div id="s1"class="square"></div>
                <div id="s2"class="square"></div>
                <div id="s3"class="square"></div>
                <div id="s4"class="square"></div>
                <div id="s5"class="square"></div>
                <div id="s6"class="square"></div>
            </div>         
        </div>
        <!-- Section 4-->
        <div id="section4" class="section">
            <!-- Header-->
            <header>
                <img class="profile_header" src="assets/img/mark.jpg">
                <span class="text_header"><?php echo  $thanks; ?><br></span>
                <span class="text_header"><?php echo  $sum; ?></span>
            </header>
            <!-- 6 white boxes-->
            <div id="container">
                <div id="s7"class="square">
                    <p id="bg_lgreen"><span>Du bist <br>der</span></p>
                    <h2 class="counter">5000</h2>
                    <p>Besucher</p>
                </div>
                <div id="s8"class="square">
                    <p id="bg_dgreen"><span>Dein Besuch <br>dauerte</span></p>
                    <h2 class="counter">18</h2>
                    <p>Minuten</p>
                </div>
                <div id="s9"class="square">
                    <p id="aqua"><span>Du liest <br>durchschnittlich</span></p>
                    <h2 class="counter">100</h2>
                    <p>Wörter in der Minute</p>
                </div>
                <div id="s10"class="square">
                    <p class="moos"><span>Besuch war um</span></p>
                    <h2 class="counter">2</h2>
                    <p>Minuten</p>
                    <p class="moos"><span>kürzer als die durch-<br>schnittliche Besuchsdauer</span></p>
                </div>
                <div id="s11"class="square">
                    <p id="bg_dblue"><span>Besuch<br>dauerte</span></p>
                    <h2 class="counter">18</h2>
                    <p>Minuten</p>
                </div>
                <div class="square">
                    <img id="cubera" src="assets/img/cubera.png">
                </div>
            </div>
        </div>         
    </div>
    
    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/switchCase.js"></script>
    <script type="text/javascript" src="assets/js/countUp.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <script type="text/javascript" src="assets/js/upload.js"></script>
  </body>
</html>