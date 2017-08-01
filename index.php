<?php
	include("config/config.php");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $language_url."biogas.txt");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $texts_file = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    $texts = json_decode($texts_file);
    //print_r($texts);
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Galileo technologies</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="assets/css/normalize.css">        
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/animations.css" type="text/css">
        <link rel="stylesheet" id="galileocss" href="assets/css/galileo.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
                
    </head>
    <body>
        <!--
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        -->
        <div id="wrapper">
            <div class="bottom-nav">
                <div class="navigation">
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div>
            <div class="front scroll">
                <section class="section center screen-1">
                    <img class="logo-intro" src="svg/titulo-gnc.svg">
                </section>
    
                <section class="section screen-2">
                    <div class="section-content">
                        <div class="title-section">
                            <h2><?php echo $texts->top_titles->fuentes; ?></h2>
                        </div>
                        <div class="screen2-txt">
                            <p><?php echo $texts->intro->intro_text; ?></p>
                        </div>     
                        <div class="menu-circles-icons">
                            <a id="view-biogas-process" class="view-process biogas-menu-btn" href="javascript:void(0);"></a>
                            <a id="view-yacimiento-process" class="view-process yacimiento-menu-btn" href="javascript:void(0);"></a>
                            <a id="view-gasoducto-process" class="view-process gasoducto-menu-btn" href="javascript:void(0);"></a>
                        </div>
                    </div>   
    
                </section>
    
                <section class="section screen-3">
                    <div class="section-content">
                        <div class="title-section">
                            <h2><?php echo $texts->top_titles->fuentes; ?></h2>
                        </div>
                        <div class="screen3-title center">
                            <h1>Bio - GNC</h1>
                            <p><?php echo $texts->intro->biognc_subtitulo; ?></p>
                        </div>                   
                    </div>
                </section>         
    
                <div class="gnc-biogas-landscape landscape-section">
                    <?php require_once("sections/biogas.php"); ?>
    
                </div> <!-- end gnc-biogas-landscape -->
                
                <div class="gnc-yacimiento-landscape landscape-section">
                    <?php require_once("sections/yacimientogas.php"); ?>
    
                </div> <!-- end gnc-yacimiento-landscape -->
                
                <div class="gnc-gasoducto-landscape landscape-section">
                    <?php require_once("sections/gasoducto.php"); ?>
    
                </div> <!-- end gnc-gasoducto-landscape -->
            </div><!-- end front scroll -->
            
        </div><!-- fin wrapper -->
    </body>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>           
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>        
    <script src="assets/js/vendor/jquery.jInvertScroll.js"></script>
    <script src="assets/js/dist/scrollreveal.js"></script>
    <script src="assets/js/dist/css3-animate-it.js"></script>
    <script src="assets/js/main.js"></script>
        
    <style>
        /* Ensure elements load hidden before ScrollReveal runs 
        .sr .fooReveal { visibility: hidden; }        */
    </style>
</html>


        
