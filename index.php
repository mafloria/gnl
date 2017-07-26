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
                        <h2><?php echo $texts->top_titles->fuentes; ?></h2>
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
                        <h2><?php echo $texts->top_titles->fuentes; ?></h2>
                    </div>
                    <div class="screen3-title center">
                        <h1>Bio - GNC</h1>
                        <p><?php echo $texts->intro->biognc_subtitulo; ?></p>
                    </div>                   
                </div>
            </section>         

            <div class="gnc-biogas-landscape landscape-section">
                <div class="landscape-top">
                 <!--elementos landscape top 1 -->  
                     <div class="group-animated animatedParent" data-appear-left-offset='-700'  data-sequence='200'>
                         <div id="txt-wrap-1" class="txtWrap1 animated fadeInLeftShort" data-id="1">
                             <div class="txt-wrap-cntr">
                                 <div id="icon-1" class="icon1 animated fadeInLeftShort" data-id="2"></div> 
                                 <p class="txt-box1 animated fadeInLeftShort" data-id="3"><?php echo $texts->process->fuentes_biogas_box_op1; ?></p>   
                             </div>
                             <div class="txt-wrap-cntr">
                                 <div id="icon-2" class="icon2 animated fadeInLeftShort" data-id="4"></div> 
                                 <p class="txt-box1 animated fadeInLeftShort" data-id="5"><?php echo $texts->process->fuentes_biogas_box_op2; ?></p>   
                             </div>
                             <div class="txt-wrap-cntr">
                                 <div id="icon-1" class="icon3 animated fadeInLeftShort" data-id="6"></div> 
                                 <p class="txt-box1 animated fadeInLeftShort" data-id="7"><?php echo $texts->process->fuentes_biogas_box_op3; ?></p>   
                             </div>
                             <div class="txt-wrap-cntr">
                                 <div id="icon-2" class="icon4 animated fadeInLeftShort" data-id="8"></div> 
                                 <p class="txt-box1 animated fadeInLeftShort" data-id="9"><?php echo $texts->process->fuentes_biogas_box_op4; ?></p>
                             </div> 
                             <h3 id="h3-1" class="title-h3 animated fadeInLeftShort" data-id="10"><?php echo $texts->process->fuentes_biogas_box_titulo; ?></h3>   
                         </div>
                     </div>
                     <div class="group-animated animatedParent" data-appear-left-offset='-700'  data-sequence='300'>
                             <h2 id="h2-1" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->estacion_madre; ?></h2>
                     </div>
 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-700'  data-sequence='150'>
                        <div id="hill-1" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                         <div id="tree-1" class="treeType2 animated fadeInLeftShort" data-id='2'></div>
                         
                         <div id="hill-2" class="hillType2 animated fadeInLeftShort" data-id='3'></div>
                         <div id="tree-2" class="treeType2 animated fadeInLeftShort" data-id='4'></div>
                         
                         <div id="hill-3" class="hillType1 animated fadeInLeftShort" data-id='5'></div>
                         <div id="tree-3" class="treeType1 animated fadeInLeftShort" data-id='6'></div>       
                     </div>
                     
                     <!--elementos landscape top 2 --> 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-1500'  data-sequence='300'>
                         <div id="tree-4" class="treeType2 animated fadeInLeftShort" data-id='7'></div>
                         <div id="tree-5" class="treeType1 animated fadeInLeftShort" data-id='8'></div>
                     </div> 
                     <div class="group-animated animatedParent" data-appear-left-offset='-1600'  data-sequence='300'>
                         <h2 id="h2-2" class="h2-title-box animated fadeInLeftShort" data-id="1"><h2><?php echo $texts->top_titles->estacion_madre; ?></h2>
                     </div>
 
                     <div class="group-animated animatedParent" data-appear-left-offset='-1900'  data-sequence='300'>
                         <div id="tree-6" class="treeType2 animated fadeInLeftShort" data-id='1'></div>
                     </div>
 
                     <!--elementos landscape top 3 --> 
 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-3100'  data-sequence='300'>
                         <div id="tree-7" class="treeType1 animated fadeInLeftShort" data-id='1'></div>
                         <div id="hill-4" class="hillType1 animated fadeInLeftShort" data-id='2'></div>
                         <div id="tree-8" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                         <div id="tree-9" class="treeType1 animated fadeInLeftShort" data-id='4'></div>    
                     </div>
                     <div class="group-animated animatedParent" data-appear-left-offset='-3200'  data-sequence='300'>
                         <h2 id="h2-3" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->estacion_madre; ?></h2>
                         <h4 id="subt-1" class="subtitle animated fadeInLeftShort" data-id="2"><?php echo $texts->top_titles->estacion_madre_desc; ?></h4>
                     </div>
                     <div class="group-animated animatedParent"  data-appear-left-offset='-3600'  data-sequence='300'>
                         <div id="hill-5" class="hillType2 animated fadeInLeftShort" data-id='1'></div>
                     </div>
 
                     <!--elementos landscape top 4 -->
                     <div class="group-animated animatedParent"  data-appear-left-offset='-5200'  data-sequence='300'> 
                         <div id="hill-6" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                         <div id="tree-10" class="treeType2 animated fadeInLeftShort" data-id='2'></div>
                         <div id="hill-7" class="hillType2 animated fadeInLeftShort" data-id='3'></div>
                         <div id="tree-11" class="treeType1 animated fadeInLeftShort" data-id='4'></div>
                         <div id="hill-8" class="hillType1 animated fadeInLeftShort" data-id='5'></div>
                         <div id="hill-9" class="hillType2 animated fadeInLeftShort" data-id='6'></div>
                         <div id="tree-12" class="treeType2 animated fadeInLeftShort" data-id='7'></div>
                     </div>
                     <!--elementos landscape top 5 --> 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-5800'  data-sequence='300'>
                         <div id="tree-13" class="treeType1 animated fadeInLeftShort" data-id='1'></div>
                         <div id="hill-10" class="hillType1 animated fadeInLeftShort" data-id='2'></div>
                         <div id="tree-14" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                         <div id="hill-11" class="hillType2 animated fadeInLeftShort" data-id='4'></div>
                         <div id="tree-15" class="treeType1 animated fadeInLeftShort" data-id='5'></div>
                         <div id="tree-16" class="treeType2 animated fadeInLeftShort" data-id='6'></div>
                         <div id="tree-17" class="treeType1 animated fadeInLeftShort" data-id='7'></div>
                     </div>
 
                     <div class="group-animated animatedParent" data-appear-left-offset='-5900'  data-sequence='300'>
                         <h2 id="h2-4" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->transporte; ?></h2>
                     </div>
  
                     <div class="group-animated animatedParent" data-appear-left-offset='-6600'  data-sequence='300'>
                         <div id="hill-12" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                         <div id="tree-18" class="treeType1 animated fadeInLeftShort" data-id='2'></div>
                         <div id="hill-13" class="hillType2 animated fadeInLeftShort" data-id='3'></div>
                         <div id="tree-19" class="treeType2 animated fadeInLeftShort" data-id='4'></div>
                     </div>
                                     
                    <!--elementos landscape top 6 -->
                    <div class="group-animated animatedParent" data-appear-left-offset='-7100'  data-sequence='300'>
                         <h2 id="h2-5" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->transporte; ?></h2>
                     </div>

                     <div class="group-animated animatedParent" data-appear-left-offset='-7200'  data-sequence='200'>
                         <div id="txt-wrap-2" class="txtWrap2 animated fadeInLeftShort" data-id="1">
                            <h3 id="h3-9" class="title-h3 animated fadeInLeftShort" data-id="2">MAT-B</h3>
                            <div id="wrap-objet-1" class="wrapObjet1 animated fadeInLeftShort" data-id="3"></div>
                         </div>
                     </div>

                    <div class="group-animated animatedParent" data-appear-left-offset='-7300'  data-sequence='300'> 
                        <div id="tree-20" class="treeType2 animated fadeInLeftShort" data-id='1'></div>
                        <div id="tree-21" class="treeType1 animated fadeInLeftShort" data-id='2'></div>
                        <div id="tree-22" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                    </div>

                    <!--elementos landscape top 7 --> 
                    <div class="group-animated animatedParent" data-appear-left-offset='-8000'  data-sequence='300'>
                        <div id="tree-23" class="treeType1 animated fadeInLeftShort" data-id='1'></div>
                        <div id="hill-14" class="hillType1 animated fadeInLeftShort" data-id='2'></div>
                        <div id="tree-24" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                        <div id="hill-15" class="hillType2 animated fadeInLeftShort" data-id='4'></div>   
                    </div>

                    <div class="group-animated animatedParent" data-appear-left-offset='-8100'  data-sequence='300'>
                         <h2 id="h2-6" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->estacion_hija; ?></h2>
                         <h4 id="subt-2" class="subtitle animated fadeInLeftShort" data-id="2"><?php echo $texts->top_titles->estacion_hija_desc; ?></h4>
                     </div>

                     <div class="group-animated animatedParent" data-appear-left-offset='-8700'  data-sequence='300'>
                        <div id="hill-16" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                        <div id="tree-25" class="treeType2 animated fadeInLeftShort" data-id='2'></div>
                        <div id="hill-17" class="hillType2 animated fadeInLeftShort" data-id='3'></div>
                        <div id="tree-26" class="treeType1 animated fadeInLeftShort" data-id='4'></div>
                     </div>
                    <!--elementos landscape top 8 --> 
                    <div class="group-animated animatedParent" data-appear-left-offset='-9900'  data-sequence='300'>
                        <h2 id="h2-7" class="h2-title-box animated fadeInLeftShort" data-id="1"><?php echo $texts->top_titles->estacion_hija; ?></h2>
                    </div>

                    <!--elementos landscape top 9 --> 
                    <div class="group-animated animatedParent" data-appear-left-offset='-10750'  data-sequence='300'>
                        <div id="tree-27" class="treeType2 animated fadeInLeftShort" data-id='1'></div>
                        <div id="tree-28" class="treeType1 animated fadeInLeftShort" data-id='2'></div>
                    </div>
                    <div class="group-animated animatedParent" data-appear-left-offset='-11500'  data-sequence='300'>
                        <div id="hill-18" class="hillType1 animated fadeInLeftShort" data-id='1'></div>
                        <div id="hill-19" class="hillType2 animated fadeInLeftShort" data-id='2'></div>
                        <div id="tree-29" class="treeType2 animated fadeInLeftShort" data-id='3'></div>
                    </div>
                     
 
                      
                 </div>
                 <div class="landscape-bottom">
                     <!--elementos landscape bottom 1 -->
                 
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
 
                    <!--elementos landscape bottom 2 --> 
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
                     <div class="group-animated animatedParent"  data-appear-left-offset='-1400'  data-sequence='300'>                       
                         <h3 id="h3-3" class="title-green animated fadeInLeftShort" data-id="1"><?php echo $texts->road_info->biogas; ?></h3>    
                     </div>
 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-1200'  data-sequence='300'>   
                     <h3 id="h3-2" class="title-h3 animated fadeInLeftShort" data-id="1"><?php echo $texts->road_info->biodigestor; ?></h3>
                     </div>
 
                     <div class="group-animated animatedParent"  data-appear-left-offset='-1350'  data-sequence='300'> 
                         <div id="line-1" class="linea-txt-1 animated fadeInLeftShort" data-id="1"></div>
                         <p id="txt-1" class="txtInfo animated fadeInLeftShort" data-id="2"><?php echo $texts->road_info->biodigestor_desc; ?></p>
                     </div>
 
                    <!--elementos landscape bottom 3 -->
 
                    <div class="group-animated animatedParent"  data-appear-left-offset='-3250'  data-sequence='300'>
                        <h3 id="h3-7" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">2</span>Módulos MAT</h3>
                        <p id="txt-4" class="txtInfo animated fadeInLeftShort" data-id="2">El GNC es enviado desde los paquetes de compresión a las plataformas PAC® que sirven de soporte fijo y fuente de carga de los contenedores modulares MAT.</p>
                        <p id="txt-5" class="txtInfo animated fadeInLeftShort" data-id="3">Los contenedores MAT pueden almacenar 1500 Nm3 (420 GGE) de Bio-GNC a una presión de 250 bar (3625 psi) a temperatura ambiente.</p>
                    </div>

                     <div class="group-animated animatedParent"  data-appear-left-offset='-3250'  data-sequence='300'>
                         <h3 id="h3-7" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">2</span><?php echo $texts->process->p2_modulos_mat; ?></h3>
                         <p id="txt-4" class="txtInfo animated fadeInLeftShort" data-id="2"><?php echo $texts->process->p2_modulos_mat_desc; ?></p>
                         <p id="txt-5" class="txtInfo animated fadeInLeftShort" data-id="3"><?php echo $texts->process->p2_modulos_mat_desc2; ?></p>
                     </div>

 
                    <!--elementos landscape bottom 5 -->

                    <div class="group-animated animatedParent"  data-appear-left-offset='-6100'  data-sequence='300'>
                        <h3 id="h3-8" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">3</span>Tráiler VST</h3>
                        <p id="txt-6" class="txtInfo animated fadeInLeftShort" data-id="2">Los MAT son transportados por carretera sobre tráileres VST y distribuidos en las estaciones hijas localizadas en los distintos centros de consumo. Los VST presentan configuraciones de transporte para 2, 3 ó 4</p>
                        <p id="txt-7" class="txtInfo animated fadeInLeftShort" data-id="3">MATs y sus mecanismos de anclaje garantizan que el recorrido se realice en forma segura y a la velocidad promedio de cualquier flete.</p>
                    </div>

                     <div class="group-animated animatedParent"  data-appear-left-offset='-6100'  data-sequence='300'>
                         <h3 id="h3-8" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">3</span><?php echo $texts->process->p3_trailer_vst; ?></h3>
                         <p id="txt-6" class="txtInfo animated fadeInLeftShort" data-id="2"><?php echo $texts->process->p3_trailer_vst_desc; ?></p>
                         <p id="txt-7" class="txtInfo animated fadeInLeftShort" data-id="3"><?php echo $texts->process->p3_trailer_vst_desc2; ?></p>
                     </div>


                    <!--elementos landscape bottom 6 -->
 
                    <div class="group-animated animatedParent"  data-appear-left-offset='-7400'  data-sequence='300'>
                        <div id="warning-1" class="warning-icon animated fadeInLeftShort" data-id="1"></div>
                        <p id="txt-8" class="txtInfo animated fadeInLeftShort" data-id="2">Un tráiler equipado con un MAT-B puede funcionar como una estación móvil de Bio-GNC, y abastecer flotas en sus propios centros logísticos.</p>
                        <p id="txt-9" class="txtInfo animated fadeInLeftShort" data-id="3">Los MAT-B cuentan con booster de recompresión y surtidor para distribuir Bio-GNC a granel.</p>
                    </div>

                     <!--elementos landscape bottom 7 -->
                    <div class="group-animated animatedParent"  data-appear-left-offset='-8200'  data-sequence='300'>
                        <h3 id="h3-10" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">4</span></h3>
                        <p id="txt-10" class="txtInfo animated fadeInLeftShort" data-id="2">Una vez en el centro de consumo, los mecanismos hidráulicos de anclaje del tráiler VST depositan los MAT llenos sobre una plataforma de descarga PAD® y simultáneamente retiran los vacíos. </p>
                    </div>
                    <div class="group-animated animatedParent"  data-appear-left-offset='-8600'  data-sequence='300'>
                        <div id="warning-2" class="warning-icon animated fadeInLeftShort" data-id="1"></div>
                        <p id="txt-11" class="txtInfo animated fadeInLeftShort" data-id="2">La operación de intercambio y conexión toma menos de 7 minutos por MAT y es realizada con la sola asistencia del conductor del camión, quien inmediatamente continúa su ruta hacia la próxima estación hija.</p>
                    </div>

                    <!--elementos landscape bottom 8 -->
                    <div class="group-animated animatedParent"  data-appear-left-offset='-10100'  data-sequence='300'>
                        <h3 id="h3-11" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">5</span></h3>
                        <p id="txt-12" class="txtInfo animated fadeInLeftShort" data-id="2">Al ser depositados sobre la PAD, los MAT son conectados a ella para que el GNC sea transferido a una Planta Reguladora de Presión PRP®, cuya función es proveer gas en los rangos de presión de salida y caudal requeridos por los usuarios finales.</p>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-10450'  data-sequence='300'>
                        <h3 id="h3-12" class="title-h3 animated fadeInLeftShort" data-id="1"><span class="numeracion">6</span></h3>
                        <p id="txt-13" class="txtInfo animated fadeInLeftShort" data-id="2">Finalmente, el gas es distribuido a través de una red de tuberías para que los hogares reemplacen las garrafas de gas por una simple llave de paso. También para que las operaciones en las industrias, las usinas eléctricas y los centros turísticos reemplacen el consumo de combustibles contaminantes y costosos por gas biometano.</p>
                    </div>

                    <!--elementos landscape bottom 9 -->
                    <div class="group-animated animatedParent"  data-appear-left-offset='-10800'  data-sequence='300'>
                        <div id="figure-1" class="figure1 animated fadeInLeftShort" data-id="1"></div>
                        <div id="y-line-1" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <h3 id="h3-13" class="title-h3 animated fadeInLeftShort" data-id="3">Comunidades aisladas</h3>
                        <div id="figure-2" class="figure2 animated fadeInLeftShort" data-id="4"></div>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-10900'  data-sequence='300'>
                        <div id="warning-3" class="warning-icon animated fadeInLeftShort" data-id="1"></div>
                        <h3 id="h3-14" class="title-h3 animated fadeInLeftShort" data-id="2">Suministro continuo y monitoreado 24/7</h3>
                        <p id="txt-14" class="txtInfo animated fadeInLeftShort" data-id="3">Cada vez que el medidor de los MATs indica una baja de los niveles de carga, el sistema recibe una orden automática de reabastecimiento.</p>
                        <div id="figure-3" class="figure3 animated fadeInLeftShort" data-id="4"></div>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-10920'  data-sequence='300'>
                        <h3 id="h3-15" class="title-h3 animated fadeInLeftShort" data-id="1">Inyección en la red<br />de gas natural</h3>
                        <div id="y-line-2" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <div id="figure-4" class="figure4 animated fadeInLeftShort" data-id="3"></div>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-11100'  data-sequence='300'>
                        <div id="figure-5" class="figure5 animated fadeInLeftShort" data-id="1"></div>
                        <div id="y-line-3" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <h3 id="h3-16" class="title-h3 animated fadeInLeftShort" data-id="3">Minas y plantas industriales</h3>
                        <div id="figure-6" class="figure6 animated fadeInLeftShort" data-id="4"></div>
                    </div>

                    <!--elementos landscape bottom 10 -->
                    <div class="group-animated animatedParent"  data-appear-left-offset='-11900'  data-sequence='300'>
                        <div id="figure-7" class="figure7 animated fadeInLeftShort" data-id="1"></div>
                        <div id="y-line-4" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <h3 id="h3-17" class="title-h3 animated fadeInLeftShort" data-id="3">Usinas</h3>
                        <div id="figure-8" class="figure8 animated fadeInLeftShort" data-id="4"></div>
                        <div id="figure-9" class="figure9 animated fadeInLeftShort" data-id="5"></div>
                        <div id="figure-10" class="figure9 animated fadeInLeftShort" data-id="6"></div>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-12100'  data-sequence='300'>
                        <div id="figure-11" class="figure1 animated fadeInLeftShort" data-id="1"></div>
                        <div id="y-line-5" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <h3 id="h3-18" class="title-h3 animated fadeInLeftShort" data-id="3">Centros turísticos</h3>
                        <div id="figure-12" class="figure10 animated fadeInLeftShort" data-id="4"></div>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-12150'  data-sequence='300'>
                        <div id="warning-4" class="warning-icon animated fadeInLeftShort" data-id="1"></div>
                        <p id="txt-15" class="txtInfo animated fadeInLeftShort" data-id="3">En las estaciones de GNC abastecidas por Gasoducto Virtual, un sistema de recompresión acelera los tiempos de carga surtidores EMB®.</p>
                    </div>

                    <div class="group-animated animatedParent"  data-appear-left-offset='-12600'  data-sequence='300'>
                        <div id="figure-13" class="figure1 animated fadeInLeftShort" data-id="1"></div>
                        <div id="y-line-6" class="y-line animated fadeInLeftShort" data-id="2"></div>
                        <h3 id="h3-19" class="title-h3 animated fadeInLeftShort" data-id="3">Estaciones de servicio</h3>
                        <div id="figure-14" class="figure11 animated fadeInLeftShort" data-id="4"></div>
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


        
