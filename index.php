<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/php-apps/IndustriasParaiso/gnl/language/biogas.txt");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $texts_file = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    $texts = json_decode($texts_file);
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Galileo technologies</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/normalize.css">        
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/animations.css" type="text/css">
        <link rel="stylesheet" href="assets/css/galileo.css">
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
                        <h2>FUENTES</h2>
                    </div>
                    <div class="screen2-txt">
                        <p><?php echo $texts->intro->intro_text; ?></p>
                    </div>     
                    <div class="menu-circles-icons">
                        <a class="biogas-menu-btn" href=""></a>
                        <a class="yacimiento-menu-btn" href=""></a>
                        <a class="gasoducto-menu-btn" href=""></a>
                    </div>
                </div>   

            </section>

            <section class="section screen-3">
                <div class="section-content">
                    <div class="title-section">
                        <h2>FUENTES</h2>
                    </div>
                    <div class="screen3-title center">
                        <h1>Bio - GNC</h1>
                        <p><?php echo $texts->intro->biognc_subtitulo; ?></p>
                    </div>                   
                </div>
            </section>         

            <div class="gnc-biogas-landscape landscape-section">
                <div class="landscape-top">
                <!--elementos landscape 1 -->  
                    <div class="group-animated animatedParent" data-appear-left-offset='-700'  data-sequence='200'>
                        <div id="txt-wrap-1" class="txtWrap1 animated fadeInLeftShort" data-id="1">
                            <div class="txt-wrap-cntr">
                                <div id="icon-1" class="icon1 animated fadeInLeftShort" data-id="2"></div> 
                                <p class="txt-box1 animated fadeInLeftShort" data-id="3"><?php echo $texts->intro->fuentes_biogas_box_op1; ?></p>   
                            </div>
                            <div class="txt-wrap-cntr">
                                <div id="icon-2" class="icon2 animated fadeInLeftShort" data-id="4"></div> 
                                <p class="txt-box1 animated fadeInLeftShort" data-id="5"><?php echo $texts->intro->fuentes_biogas_box_op2; ?></p>   
                            </div>
                            <div class="txt-wrap-cntr">
                                <div id="icon-1" class="icon3 animated fadeInLeftShort" data-id="6"></div> 
                                <p class="txt-box1 animated fadeInLeftShort" data-id="7"><?php echo $texts->intro->fuentes_biogas_box_op3; ?></p>   
                            </div>
                            <div class="txt-wrap-cntr">
                                <div id="icon-2" class="icon4 animated fadeInLeftShort" data-id="8"></div> 
                                <p class="txt-box1 animated fadeInLeftShort" data-id="9"><?php echo $texts->intro->fuentes_biogas_box_op4; ?></p>
                            </div> 
                            <h3 id="h3-1" class="title-h3 animated fadeInLeftShort" data-id="10"><?php echo $texts->intro->fuentes_biogas_box_titulo; ?></h3>   
                        </div>
                    </div>
                    <div class="group-animated animatedParent" data-appear-left-offset='-700'  data-sequence='300'>
                            <h2 id="h2-1" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->intro->estacion_madre; ?></h2>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-700'  data-sequence='150'>
                        <div id="hill-1" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                        <div id="tree-1" class="treeType2 animated fadeInLeftShort" data-id='2'></div>
                        
                        <div id="hill-2" class="hillType2 animated fadeInLeftShort" data-id='3'></div>
                        <div id="tree-2" class="treeType2 animated fadeInLeftShort" data-id='4'></div>
                        
                        <div id="hill-3" class="hillType1 animated fadeInLeftShort" data-id='5'></div>
                        <div id="tree-3" class="treeType1 animated fadeInLeftShort" data-id='6'></div>       
                    </div>
                    
                    <!--elementos landscape 2 --> 
                    <div class="group-animated animatedParent"  data-appear-left-offset='-1500'  data-sequence='300'>
                        <div id="tree-4" class="treeType2 animated fadeInLeftShort" data-id='7'></div>
                        <div id="tree-5" class="treeType1 animated fadeInLeftShort" data-id='8'></div>
                    </div> 
                    <div class="group-animated animatedParent" data-appear-left-offset='-1600'  data-sequence='300'>
                        <h2 id="h2-2" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->intro->estacion_madre; ?></h2>
                    </div>

                    <div class="group-animated animatedParent" data-appear-left-offset='-1900'  data-sequence='300'>
                        <div id="tree-6" class="treeType2 animated fadeInLeftShort" data-id='1'></div>
                    </div>

                    <!--elementos landscape 3 --> 

                    <div class="group-animated animatedParent"  data-appear-left-offset='-3100'  data-sequence='300'>
                        <div id="tree-7" class="treeType1 animated fadeInLeftShort" data-id='1'></div>
                        <div id="hill-4" class="hillType1 animated fadeInLeftShort" data-id='2'></div>
                        <div id="tree-8" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                        <div id="tree-9" class="treeType1 animated fadeInLeftShort" data-id='4'></div>    
                    </div>
                    <div class="group-animated animatedParent" data-appear-left-offset='-3200'  data-sequence='300'>
                        <h2 id="h2-3" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->intro->estacion_madre; ?></h2>
                        <h4 id="subt-1" class="subtitle animated fadeInLeftShort" data-id="2">Plataformas PAC</h4>
                    </div>
                    <div class="group-animated animatedParent"  data-appear-left-offset='-3600'  data-sequence='300'>
                        <div id="hill-5" class="hillType2 animated fadeInLeftShort" data-id='1'></div>
                    </div>

                    <div id="hill-6" class="hillType1 animated fadeInLeftShort" data-id='15'></div>
                    <div id="hill-7" class="hillType2 animated fadeInLeftShort" data-id='16'></div>
                    <div id="hill-8" class="hillType1 animated fadeInLeftShort" data-id='19'></div>
                    <div id="hill-9" class="hillType2 animated fadeInLeftShort" data-id='20'></div>

                    <div id="hill-10" class="hillType1 animated fadeInLeftShort" data-id='22'></div>
                    <div id="hill-11" class="hillType2 animated fadeInLeftShort" data-id='25'></div>
                    <div id="hill-12" class="hillType1 animated fadeInLeftShort" data-id='29'></div>
                    <div id="hill-13" class="hillType2 animated fadeInLeftShort" data-id='32'></div>
                    <div id="hill-14" class="hillType1 animated fadeInLeftShort" data-id='36'></div>
                    <div id="hill-15" class="hillType2 animated fadeInLeftShort" data-id='39'></div>
                    <div id="hill-16" class="hillType1 animated fadeInLeftShort" data-id='40'></div>
                    <div id="hill-17" class="hillType2 animated fadeInLeftShort" data-id='42'></div>

                    <div id="tree-10" class="treeType2 animated fadeInLeftShort" data-id='17'></div>
                    <div id="tree-11" class="treeType1 animated fadeInLeftShort" data-id='18'></div>
                    <div id="tree-12" class="treeType2 animated fadeInLeftShort" data-id='21'></div>

                    <div id="tree-13" class="treeType1 animated fadeInLeftShort" data-id='23'></div>
                    <div id="tree-14" class="treeType2 animated fadeInLeftShort" data-id='24'></div>
                    <div id="tree-15" class="treeType1 animated fadeInLeftShort" data-id='26'></div>
                    <div id="tree-16" class="treeType2 animated fadeInLeftShort" data-id='27'></div>
                    <div id="tree-17" class="treeType1 animated fadeInLeftShort" data-id='28'></div>
                    <div id="tree-18" class="treeType1 animated fadeInLeftShort" data-id='30'></div>
                    <div id="tree-19" class="treeType2 animated fadeInLeftShort" data-id='31'></div>

                    <div id="tree-20" class="treeType2 animated fadeInLeftShort" data-id='33'></div>
                    <div id="tree-21" class="treeType1 animated fadeInLeftShort" data-id='34'></div>
                    <div id="tree-22" class="treeType2 animated fadeInLeftShort" data-id='35'></div>

                    <div id="tree-23" class="treeType1 animated fadeInLeftShort" data-id='37'></div>
                    <div id="tree-24" class="treeType2 animated fadeInLeftShort" data-id='38'></div>
                    <div id="tree-25" class="treeType2 animated fadeInLeftShort" data-id='41'></div>
                    <div id="tree-26" class="treeType1 animated fadeInLeftShort" data-id='43'></div>

                    
                    
                </div>
                <div class="landscape-bottom">
                    <!--elementos landscape 1 -->
                
                    <div class="group-animated animatedParent"  data-appear-left-offset='-1400'  data-sequence='300'>                       
                        <h3 id="h3-3" class="title-green animated fadeInLeftShort" data-id="1">Biogas</h3>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-1200'  data-sequence='300'>   
                    <h3 id="h3-2" class="title-h3 animated fadeInLeftShort" data-id="1">Biodigestor</h3>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-1350'  data-sequence='300'> 
                        <div id="line-1" class="linea-txt-1 animated fadeInLeftShort" data-id="1"></div>
                        <p id="txt-1" class="txtInfo animated fadeInLeftShort" data-id="2">Los efluentes del proceso se transforman en fertilizantes.</p>
                    </div>

                    <!--elementos landscape 2 --> 
                    <div class="group-animated animatedParent"  data-appear-left-offset='-1650'  data-sequence='300'>                       
                        <h3 id="h3-4" class="title-green animated fadeInLeftShort" data-id="1">Biogas</h3>
                        <div id="arrow-1" class="red-arrow animated fadeInLeftShort" data-id="2"></div>
                    </div>
                    <div class="group-animated animatedParent"  data-appear-left-offset='-1750'  data-sequence='300'>
                        <h3 id="h3-5" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">1</span>Paquete de Compresión Microbox-Bio</h3>
                        <p id="txt-2" class="txtInfo animated fadeInLeftShort" data-id="2">Los paquetes de compresión Microbox-Bio® permiten depurar hasta 500 m3/h de biogás de todos sus elementos corrosivos (H2O, H2S, y CO2 entre otros) y proveer Gas Biometano Comprimido (Bio-GNC) de alta calidad a una presión de 250 bar (3625 psi).</p>
                        <p id="txt-3" class="txtInfo animated fadeInLeftShort" data-id="3">A su vez, su sistema de refrigeración por agua provee 170 mil kilocalorías por hora (Kcal/h) que aseguran las condiciones térmicas de operación del biodigestor.</p>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-2400'  data-sequence='300'>                       
                        <h3 id="h3-6" class="title-green animated fadeInLeftShort" data-id="1">Gas Biometano <br />Comprimido</h3>
                        <div id="arrow-2" class="red-arrow animated fadeInLeftShort" data-id="2"></div>
                    </div>

                    <!--elementos landscape 3 -->

                    <div class="group-animated animatedParent"  data-appear-left-offset='-3250'  data-sequence='300'>
                        <h3 id="h3-7" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">2</span>Módulos MAT</h3>
                        <p id="txt-4" class="txtInfo animated fadeInLeftShort" data-id="2">El GNC es enviado desde los paquetes de compresión a las plataformas PAC® que sirven de soporte fijo y fuente de carga de los contenedores modulares MAT.</p>
                        <p id="txt-5" class="txtInfo animated fadeInLeftShort" data-id="3">Los contenedores MAT pueden almacenar 1500 Nm3 (420 GGE) de Bio-GNC a una presión de 250 bar (3625 psi) a temperatura ambiente.</p>
                    </div>


                    <!--main image-->
                    <img class="main-landscape-image" src="assets/images/gnc-biogas-landscape-main-img.png">
                    <!--main image-->
                </div>

            </div>
</div>
            
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


        
