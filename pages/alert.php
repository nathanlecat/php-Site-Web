<?php
include "../db.php";
include "../User/server/server.php";
?>

<head>
    <meta name="qqui" content="cms333newserv">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <meta name="site-verification" content="check">
    <title>PRESTA VENTE Rattrapage</title>
    <meta name="description" content="">


    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css?" media="all">
    <link rel="stylesheet" href="../css/header.css" media="all">
    <link rel="stylesheet" href="../css/jquery.bxslider.css" media="all">
    <link rel="stylesheet" href="../css/lightcase.css" media="all">
    <link rel="stylesheet" href="../css/header.css" media="all">
    <link rel="stylesheet" href="../css/app.css?" media="all">
    <!--<script type="text/javascript" id="pl-analytics-01" src="//fidoapi.com/papel/scripts/analytics.js?_me=sb_c_download_fr_4&amp;vid=bs_hp_f0e46085b6d897bcc14d7a8dab99dfc9&amp;s=aHR0cDovL3d3dy5wcmVzdGEtdmVudGUuY29tLw==&amp;t=1596716787956"></script>
    --><style type="text/css">
        ._pl-container {
            padding: 0;
            margin-bottom: 10px;
            width: 100%;
        }

        ._pl-list li {
            font-weight: bold;
            font-weight: bold;
            width: 100%;
        }

        ._pl-container small {
            opacity: 0.6;
            font-size: 12px;
            float: right;
        }

        ._pl-title {
            margin-bottom: 15px;
        }

        ._pl-container.amazon h3._pl-title {
            font-size: 14px;
            color: #c66d42;
        }

        ._pl-container.m186301 h3._pl-title {
            font-size: 16px;
            color: #ff3636;
            font-weight: bold;
        }

        ._pl-container.m0 {
            padding: 20px;
        }

        ._pl-gallery {
            width: 100%;
            text-align: center;
        }

        ._pl-gallery a img {
            width: 60px;
        }

        ._pl-gallery.m186301 {
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
        }

        ._pl-gallery.m-1 {
            position: absolute;
            top: 0;
        }

        ._pl-gallery.laredoute img {
            border: 3px solid #fff;
        }
    </style>
</head>
<div id="rgpddiv" role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window cc-banner cc-type-info cc-theme-block cc-bottom cc-color-override-1247188962 " style="position:fixed; z-index:20; bottom:0; width:100%;background: rgba(0, 0, 0, .7); color: #fff; text-align: center; padding:30px 0;">


        <span id="cookieconsent:desc" class="cc-message">En poursuivant votre navigation, vous acceptez l'utilisation de cookies afin de permettre le bon fonctionnement de nos services. Pour en savoir plus, cliquez ici.
            <a aria-label="learn more about cookies" role="button" tabindex="0" class="cc-link" href="infos-legales.html" style="color: #fff;text-decoration: underline;">En savoir plus</a>
        </span>

    <div class="cc-compliance" style="display:inline-block; margin-left:25px;">
        <a aria-label="dismiss cookie message" role="button" tabindex="0" class="cc-btn cc-dismiss" style="color: #fff; border: 2px solid #fff; padding: 5px 50px; cursor: pointer;" onclick="ajaxRGPG();">ok</a>
    </div>

</div>
<div class="wrapper center">
    <div class="  header center">

        <div class="ligne41 line test header center">
            <div class="w30 fl  first">
                <div class="topheader">
                    <a href="/"><img class="elogo" src="../img/logo.png" alt="" title=""> </a>
                </div>
                <div class="langue flagsemi">
                    <a class="flag-fr" href="/" rel="nofollow"></a>
                    <a class="flag-gb" href="/en/" rel="nofollow"></a>
                </div>
            </div>
            <div class=" w70 fr last ">
                <!-- Menu -->
                <!-- <div class="row  mbm"> -->
                <div id="cssMenu">
                    <div id="menu-button">Menu</div>
                    <ul>
                        <li class=" item1 "><a href="../index.php">Accueil</a></li>
                        <li class="  item2 has-sub"><a href="listing.php">Nos biens</a>
                            <ul>
                                <li><a href="listing.php?type=maison">Maison</a></li>
                                <li><a href="listing.php?type=appartement">Appartement</a></li>
                                <li><a href="listing.php?type=terrain">Terrain</a></li>
                                <li><a href="listing.php?type=local">Local</a></li>
                                <li><a href="listing.php?type=immeuble">Immeuble</a></li>
                                <li><a href="listing.php?type=autre">Autre</a></li>
                            </ul>
                        </li>
                        <li class="  item3 "><a href="search.php">Recherche détaillée</a></li>
                        <li class="  item4 "><a href="listingSale.php?vendu_loue=1">Biens vendus</a></li>
                        <li class="  item5 "><a href="alert.php">Alerte Email</a></li>
                        <li class="item 6" ><a href="#">Profil</a>
                            <ul class="flexprofil">
                                <li class=" "><a href="../admin/login.php">Admin Connexion</a></li>


                                <?php
                                if(isset($_SESSION["uid"])){
                                    $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                    $query = mysqli_query($con,$sql);
                                    $row=mysqli_fetch_array($query);
                                    echo '
                            <li ><a href="../User/User/index.php" ><p class="profil">Salut '.$row["first_name"].'</p></a></li>
                            
                               ';
                                }else{
                                    echo '

                                <li class=" "><a href="../User/login.php">Connexion</a></li>
                                ';
                                }
                                ?>


                                <li class=" "><a href="contact.php">Contactez-Nous</a>

                            </ul>
                        </li>

                        <h2></h2>
                    </ul>
                </div>
                <!--   </div> -->
            </div>
        </div>

    </div>
    <div class="  line mw1140p center mbs mts contenu">
        <!-- <div class="row  relative mtm">-->
        <div class="ligne42 line ">
            <div class="w100 small-w100 tiny-w100 fl coleft  bl1 first">
                <div class="heading-alertemail">

                    <h2> Alerte Email</h2>

                    <div class="">Ne ratez aucune annonce correspondant à votre recherche immobilière et retrouvez chaque jour dans votre boîte e-mail tous les nouveaux biens immobiliers disponibles.<br> Créez rapidement et simplement votre alerte e-mail via le
                        formulaire ci-après.<br> Ce service d'alerte e-mail est entièrement gratuit et sans aucun engagement de votre part.<br> Pour supprimer votre (vos) alerte(s) e-mail, il vous suffit de cliquer sur le lien présent au sein de chaque
                        alerte e-mail.
                    </div>
                </div>

                <div class="heading-estim">
                    <h2 class="tt-contact">Estimation</h2>
                    <div>Parce que votre projet immobilier mérite une attention toute particulière, notre agence immobilière vous apporte son expertise pour l'estimation de votre bien immobilier.<br> Parce qu'un bien immobilier estimé à sa juste valeur
                        a les meilleures chances d'être vendu, notre agence vous offre sa connaissance unique du secteur.<br> Merci de remplir les champs ci-après afin que nous vous contactions dans les meilleurs délais.
                    </div>
                </div>
            </div>
            <div class="w70 small-w100 tiny-w100 fl coleft bl2 ">
                <div class="page-bg">


                    <form action="" method="get" name="form" id="form">

                        <div class="heading_alertemail">
                            <!--<h2>Alerte Email</h2>-->
                            <br>
                            <div class="">Vous êtes à la recherche d’un bien immobilier à la vente ou à la location ?<br> Merci de compléter le formulaire d’alerte ci-dessous, vous recevrez nos offres dès leurs mises en ligne sur notre site. <br />
                            </div>
                            <br>
                        </div>
                        <div class="alerte-email line">
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label> Nom *</label>
                                <input type="text" class="w100 input" name="nom" value="" required="required" />
                            </div>
                            <div class="w50 fl mbs  tiny-w100 small-w100">
                                <label> Email *</label>
                                <input type="email" class="w100 input" name="email" value="" required="required" />
                            </div>
                            <div class="w50 fl mbs  tiny-w100 small-w100">
                                <label>  Prénom *</label>
                                <input type="text" class="w100 input" value="" required="required" />
                            </div>
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Type de bien *</label>

                                <select name="type[]" class="w100 select required type_alerte">
                                    <option value="">Sélectionnez</option>
                                    <option value="maison">Maison / Villa</option>
                                    <option value="propriete">Propriété</option>
                                    <option value="appartement">Appartement</option>
                                    <option value="terrain">Terrain</option>
                                    <option value="local">Local</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Ville *</label>

                                <select class="w100 select" name="insee" id="testinsee">
                                    <option value="">Sélectionnez</option>

                                    <option value="27001" >ACLOU - 27800</option>
                                    <option value="27002" >ACON - 27570</option>
                                    <option value="27003" >ACQUIGNY - 27400</option>
                                    <option value="27004" >AIGLEVILLE - 27120</option>
                                    <option value="27005" >AILLY - 27600</option>
                                    <option value="27006" >AIZIER - 27500</option>
                                    <option value="27007" >AJOU - 27410</option>
                                    <option value="27008" >ALIZAY - 27460</option>
                                    <option value="76001" >ALLOUVILLE BELLEFOSSE - 76190</option>
                                    <option value="76002" >ALVIMARE - 76640</option>
                                    <option value="27009" >AMBENAY - 27250</option>
                                    <option value="76003" >AMBOURVILLE - 76480</option>
                                    <option value="76004" >AMBRUMESNIL - 76550</option>
                                    <option value="27010" >AMECOURT - 27140</option>
                                    <option value="27011" >AMFREVILLE LA CAMPAGNE - 27370</option>
                                    <option value="76005" >AMFREVILLE LA MI VOIE - 76920</option>
                                    <option value="27012" >AMFREVILLE LES CHAMPS - 27380</option>
                                    <option value="76006" >AMFREVILLE LES CHAMPS - 76560</option>
                                    <option value="27013" >AMFREVILLE SOUS LES MONTS - 27380</option>
                                    <option value="27014" >AMFREVILLE SUR ITON - 27400</option>
                                    <option value="76007" >ANCEAUMEVILLE - 76710</option>
                                    <option value="76008" >ANCOURT - 76370</option>
                                    <option value="76009" >ANCOURTEVILLE SUR HERICOU - 76560</option>
                                    <option value="76010" >ANCRETIEVILLE VICTOR - 76760</option>
                                    <option value="76011" >ANCRETTEVILLE SUR MER - 76540</option>
                                    <option value="27015" >ANDE - 27430</option>
                                    <option value="76012" >ANGERVILLE BAILLEUL - 76110</option>
                                    <option value="76014" >ANGERVILLE L'ORCHER - 76280</option>
                                    <option value="27017" >ANGERVILLE LA CAMPAGNE - 27930</option>
                                    <option value="76013" >ANGERVILLE LA MARTEL - 76540</option>
                                    <option value="76015" >ANGIENS - 76740</option>
                                    <option value="76017" >ANGLESQUEVILLE L'ESNEVAL - 76280</option>
                                    <option value="76016" >ANGLESQUEVILLE LA BRAS LO - 76740</option>
                                    <option value="76020" >ANNEVILLE AMBOURVILLE - 76480</option>
                                    <option value="76019" >ANNEVILLE SUR SCIE - 76590</option>
                                    <option value="76021" >ANNOUVILLE VILMESNIL - 76110</option>
                                    <option value="76022" >ANQUETIERVILLE - 76490</option>
                                    <option value="76023" >ANVEVILLE - 76560</option>
                                    <option value="27018" >APPEVILLE ANNEBAULT - 27290</option>
                                    <option value="76024" >ARDOUVAL - 76680</option>
                                    <option value="76025" >ARGUEIL - 76780</option>
                                    <option value="27019" >ARMENTIERES SUR AVRE - 27820</option>
                                    <option value="27020" >ARNIERES SUR ITON - 27180</option>
                                    <option value="76026" >ARQUES LA BATAILLE - 76880</option>
                                    <option value="27021" >ASNIERES - 27260</option>
                                    <option value="76027" >ASSIGNY - 76630</option>
                                    <option value="76028" >AUBEGUIMONT - 76390</option>
                                    <option value="76029" >AUBERMESNIL AUX ERABLES - 76340</option>
                                    <option value="76030" >AUBERMESNIL BEAUMAIS - 76550</option>
                                    <option value="76031" >AUBERVILLE LA CAMPAGNE - 76170</option>
                                    <option value="76032" >AUBERVILLE LA MANUEL - 76450</option>
                                    <option value="76033" >AUBERVILLE LA RENAULT - 76110</option>
                                    <option value="27022" >AUBEVOYE - 27940</option>
                                    <option value="76034" >AUFFAY - 76720</option>
                                    <option value="27023" >AULNAY SUR ITON - 27180</option>
                                    <option value="76035" >AUMALE - 76390</option>
                                    <option value="76036" >AUPPEGARD - 76730</option>
                                    <option value="76037" >AUQUEMESNIL - 76630</option>
                                    <option value="27025" >AUTHEUIL AUTHOUILLET - 27490</option>
                                    <option value="27026" >AUTHEVERNES - 27420</option>
                                    <option value="76038" >AUTHIEUX RATIEVILLE - 76690</option>
                                    <option value="76039" >AUTHIEUX SUR LE PORT ST O - 76520</option>
                                    <option value="27028" >AUTHOU - 27290</option>
                                    <option value="27029" >AUTHOUILLET - 27490</option>
                                    <option value="76040" >AUTIGNY - 76740</option>
                                    <option value="76041" >AUTRETOT - 76190</option>
                                    <option value="27030" >AUVERGNY - 27250</option>
                                    <option value="76042" >AUVILLIERS - 76270</option>
                                    <option value="76043" >AUZEBOSC - 76190</option>
                                    <option value="76044" >AUZOUVILLE AUBERBOSC - 76640</option>
                                    <option value="76045" >AUZOUVILLE L'ESNEVAL - 76760</option>
                                    <option value="76046" >AUZOUVILLE SUR RY - 76116</option>
                                    <option value="76047" >AUZOUVILLE SUR SAANE - 76730</option>
                                    <option value="76048" >AVESNES EN BRAY - 76220</option>
                                    <option value="76049" >AVESNES EN VAL - 76630</option>
                                    <option value="27031" >AVIRON - 27930</option>
                                    <option value="76050" >AVREMESNIL - 76730</option>
                                    <option value="27032" >AVRILLY - 27240</option>
                                    <option value="27033" >BACQUEPUIS - 27930</option>
                                    <option value="27034" >BACQUEVILLE - 27440</option>
                                    <option value="76051" >BACQUEVILLE EN CAUX - 76730</option>
                                    <option value="27035" >BAILLEUL LA VALLEE - 27260</option>
                                    <option value="76052" >BAILLEUL NEUVILLE - 76660</option>
                                    <option value="76053" >BAILLOLET - 76660</option>
                                    <option value="76054" >BAILLY EN RIVIERE - 76630</option>
                                    <option value="27036" >BALINES - 27130</option>
                                    <option value="76055" >BAONS LE COMTE - 76190</option>
                                    <option value="76920" >BAPEAUME LES ROUEN - 76380</option>
                                    <option value="27037" >BARC - 27170</option>
                                    <option value="76056" >BARDOUVILLE - 76480</option>
                                    <option value="76057" >BARENTIN - 76360</option>
                                    <option value="27039" >BARNEVILLE SUR SEINE - 27310</option>
                                    <option value="76058" >BAROMESNIL - 76260</option>
                                    <option value="27040" >BARQUET - 27170</option>
                                    <option value="27042" >BARVILLE - 27230</option>
                                    <option value="27045" >BAZINCOURT SUR EPTE - 27140</option>
                                    <option value="76059" >BAZINVAL - 76340</option>
                                    <option value="27046" >BAZOQUES - 27230</option>
                                    <option value="76060" >BEAUBEC LA ROSIERE - 76440</option>
                                    <option value="27047" >BEAUBRAY - 27190</option>
                                    <option value="27048" >BEAUFICEL EN LYONS - 27480</option>
                                    <option value="27049" >BEAUMESNIL - 27410</option>
                                    <option value="76062" >BEAUMONT LE HARENG - 76850</option>
                                    <option value="27051" >BEAUMONT LE ROGER - 27170</option>
                                    <option value="27050" >BEAUMONTEL - 27170</option>
                                    <option value="76064" >BEAUREPAIRE - 76280</option>
                                    <option value="76065" >BEAUSSAULT - 76870</option>
                                    <option value="76066" >BEAUTOT - 76890</option>
                                    <option value="76063" >BEAUVAL EN CAUX - 76890</option>
                                    <option value="76067" >BEAUVOIR EN LYONS - 76220</option>
                                    <option value="76068" >BEC DE MORTAGNE - 76110</option>
                                    <option value="76069" >BELBEUF - 76240</option>
                                    <option value="76070" >BELLENCOMBRE - 76680</option>
                                    <option value="76071" >BELLENGREVILLE - 76630</option>
                                    <option value="76072" >BELLEVILLE EN CAUX - 76890</option>
                                    <option value="76073" >BELLEVILLE SUR MER - 76370</option>
                                    <option value="76075" >BELMESNIL - 76590</option>
                                    <option value="27054" >BEMECOURT - 27160</option>
                                    <option value="76076" >BENARVILLE - 76110</option>
                                    <option value="76077" >BENESVILLE - 76560</option>
                                    <option value="76078" >BENNETOT - 76640</option>
                                    <option value="76079" >BENOUVILLE - 76790</option>
                                    <option value="27055" >BERENGEVILLE LA CAMPAGNE - 27110</option>
                                    <option value="76080" >BERMONVILLE - 76640</option>
                                    <option value="27056" >BERNAY - 27300</option>
                                    <option value="76081" >BERNEVAL LE GRAND - 76370</option>
                                    <option value="27057" >BERNIENVILLE - 27180</option>
                                    <option value="76082" >BERNIERES - 76210</option>
                                    <option value="27058" >BERNIERES SUR SEINE - 27700</option>
                                    <option value="27059" >BERNOUVILLE - 27660</option>
                                    <option value="76083" >BERTHEAUVILLE - 76450</option>
                                    <option value="27060" >BERTHENONVILLE - 27630</option>
                                    <option value="27061" >BERTHOUVILLE - 27800</option>
                                    <option value="76084" >BERTREVILLE - 76450</option>
                                    <option value="76085" >BERTREVILLE ST OUEN - 76590</option>
                                    <option value="76086" >BERTRIMONT - 76890</option>
                                    <option value="76087" >BERVILLE - 76560</option>
                                    <option value="27062" >BERVILLE EN ROUMOIS - 27520</option>
                                    <option value="27063" >BERVILLE LA CAMPAGNE - 27170</option>
                                    <option value="27064" >BERVILLE SUR MER - 27210</option>
                                    <option value="76088" >BERVILLE SUR SEINE - 76480</option>
                                    <option value="76089" >BETTEVILLE - 76190</option>
                                    <option value="27065" >BEUZEVILLE - 27210</option>
                                    <option value="76090" >BEUZEVILLE LA GRENIER - 76210</option>
                                    <option value="76091" >BEUZEVILLE LA GUERARD - 76450</option>
                                    <option value="76092" >BEUZEVILLETTE - 76210</option>
                                    <option value="76093" >BEZANCOURT - 76220</option>
                                    <option value="27066" >BEZU LA FORET - 27480</option>
                                    <option value="27067" >BEZU ST ELOI - 27660</option>
                                    <option value="76094" >BIERVILLE - 76750</option>
                                    <option value="76095" >BIHOREL - 76420</option>
                                    <option value="76096" >BIVILLE LA BAIGNARDE - 76890</option>
                                    <option value="76097" >BIVILLE LA RIVIERE - 76730</option>
                                    <option value="76098" >BIVILLE SUR MER - 76630</option>
                                    <option value="76099" >BLACQUEVILLE - 76190</option>
                                    <option value="76100" >BLAINVILLE CREVON - 76116</option>
                                    <option value="76101" >BLANGY SUR BRESLE - 76340</option>
                                    <option value="76104" >BLOSSEVILLE - 76460</option>
                                    <option value="27068" >BOIS ANZERAY - 27330</option>
                                    <option value="27069" >BOIS ARNAULT - 27250</option>
                                    <option value="76106" >BOIS D'ENNEBOURG - 76160</option>
                                    <option value="76107" >BOIS GUILBERT - 76750</option>
                                    <option value="76108" >BOIS GUILLAUME - 76230</option>
                                    <option value="76109" >BOIS HEROULT - 76750</option>
                                    <option value="76110" >BOIS HIMONT - 76190</option>
                                    <option value="27072" >BOIS JEROME ST OUEN - 27620</option>
                                    <option value="76111" >BOIS L'EVEQUE - 76160</option>
                                    <option value="27073" >BOIS LE ROI - 27220</option>
                                    <option value="27075" >BOIS NORMAND PRES LYRE - 27330</option>
                                    <option value="27070" >BOISEMONT - 27150</option>
                                    <option value="27074" >BOISNEY - 27800</option>
                                    <option value="76113" >BOISSAY - 76750</option>
                                    <option value="27076" >BOISSET LES PREVANCHES - 27120</option>
                                    <option value="27077" >BOISSEY LE CHATEL - 27520</option>
                                    <option value="27079" >BOISSY LAMBERVILLE - 27300</option>
                                    <option value="27080" >BOISSY SUR DAMVILLE - 27240</option>
                                    <option value="76114" >BOLBEC - 76210</option>
                                    <option value="76115" >BOLLEVILLE - 76210</option>
                                    <option value="27081" >BONCOURT - 27120</option>
                                    <option value="27083" >BONNEVILLE APTOT - 27290</option>
                                    <option value="76103" >BONSECOURS - 76240</option>
                                    <option value="76116" >BOOS - 76520</option>
                                    <option value="76117" >BORDEAUX ST CLAIR - 76790</option>
                                    <option value="76118" >BORNAMBUSC - 76110</option>
                                    <option value="27084" >BOSC BENARD COMMIN - 27520</option>
                                    <option value="27085" >BOSC BENARD CRESCY - 27310</option>
                                    <option value="76119" >BOSC BERENGER - 76680</option>
                                    <option value="76120" >BOSC BORDEL - 76750</option>
                                    <option value="76121" >BOSC EDELINE - 76750</option>
                                    <option value="76123" >BOSC GUERARD ST ADRIEN - 76710</option>
                                    <option value="76124" >BOSC HYONS - 76220</option>
                                    <option value="76125" >BOSC LE HARD - 76850</option>
                                    <option value="76126" >BOSC MESNIL - 76680</option>
                                    <option value="27088" >BOSC RENOULT EN OUCHE - 27330</option>
                                    <option value="27089" >BOSC RENOULT EN ROUMOIS - 27520</option>
                                    <option value="27090" >BOSC ROGER EN ROUMOIS - 27670</option>
                                    <option value="76127" >BOSC ROGER SUR BUCHY - 76750</option>
                                    <option value="27086" >BOSCHERVILLE - 27520</option>
                                    <option value="27091" >BOSGOUET - 27310</option>
                                    <option value="27092" >BOSGUERARD DE MARCOUVILLE - 27520</option>
                                    <option value="27093" >BOSNORMAND - 27670</option>
                                    <option value="27094" >BOSQUENTIN - 27480</option>
                                    <option value="27095" >BOSROBERT - 27800</option>
                                    <option value="76128" >BOSVILLE - 76450</option>
                                    <option value="27097" >BOUAFLES - 27700</option>
                                    <option value="27098" >BOUCHEVILLIERS - 27150</option>
                                    <option value="76129" >BOUDEVILLE - 76560</option>
                                    <option value="76130" >BOUELLES - 76270</option>
                                    <option value="27100" >BOULLEVILLE - 27210</option>
                                    <option value="27101" >BOUQUELON - 27500</option>
                                    <option value="27102" >BOUQUETOT - 27310</option>
                                    <option value="76132" >BOURDAINVILLE - 76760</option>
                                    <option value="27103" >BOURG ACHARD - 27310</option>
                                    <option value="27104" >BOURG BEAUDOIN - 27380</option>
                                    <option value="27105" >BOURGTHEROULDE INFREVILLE - 27520</option>
                                    <option value="27903" >BOURNAINVILLE - 27230</option>
                                    <option value="27106" >BOURNAINVILLE FAVEROLLES - 27230</option>
                                    <option value="27107" >BOURNEVILLE - 27500</option>
                                    <option value="27108" >BOURTH - 27580</option>
                                    <option value="76134" >BOURVILLE - 76740</option>
                                    <option value="76135" >BOUVILLE - 76360</option>
                                    <option value="76136" >BRACHY - 76730</option>
                                    <option value="76137" >BRACQUEMONT - 76370</option>
                                    <option value="76138" >BRACQUETUIT - 76850</option>
                                    <option value="76139" >BRADIANCOURT - 76680</option>
                                    <option value="76140" >BRAMETOT - 76740</option>
                                    <option value="27109" >BRAY - 27170</option>
                                    <option value="76141" >BREAUTE - 76110</option>
                                    <option value="76142" >BREMONTIER MERVAL - 76220</option>
                                    <option value="27110" >BRESTOT - 27350</option>
                                    <option value="27111" >BRETAGNOLLES - 27220</option>
                                    <option value="27112" >BRETEUIL - 27160</option>
                                    <option value="76143" >BRETEVILLE DU GRAND CAUX - 76110</option>
                                    <option value="27113" >BRETIGNY - 27800</option>
                                    <option value="76144" >BRETTEVILLE LAURENT - 76560</option>
                                    <option value="27114" >BREUILPONT - 27640</option>
                                    <option value="27115" >BREUX SUR AVRE - 27570</option>
                                    <option value="27116" >BRIONNE - 27800</option>
                                    <option value="27117" >BROGLIE - 27270</option>
                                    <option value="27118" >BROSVILLE - 27930</option>
                                    <option value="76145" >BRUNVILLE - 76630</option>
                                    <option value="76146" >BUCHY - 76750</option>
                                    <option value="27119" >BUEIL - 27730</option>
                                    <option value="27416" >BUIS SUR DAMVILLE - 27240</option>
                                    <option value="76147" >BULLY - 76270</option>
                                    <option value="76148" >BURES EN BRAY - 76660</option>
                                    <option value="27120" >BUREY - 27190</option>
                                    <option value="27121" >BUS ST REMY - 27630</option>
                                    <option value="76149" >BUTOT - 76890</option>
                                    <option value="76150" >BUTOT EN CAUX - 76450</option>
                                    <option value="76732" >BUTOT VENESVILLE - 76450</option>
                                    <option value="27122" >CAHAIGNES - 27420</option>
                                    <option value="76151" >CAILLEVILLE - 76460</option>
                                    <option value="27123" >CAILLOUET ORGEVILLE - 27120</option>
                                    <option value="76152" >CAILLY - 76690</option>
                                    <option value="27124" >CAILLY SUR EURE - 27490</option>
                                    <option value="76122" >CALLENGEVILLE - 76270</option>
                                    <option value="27125" >CALLEVILLE - 27800</option>
                                    <option value="76153" >CALLEVILLE LES DEUX EGLIS - 76890</option>
                                    <option value="27126" >CAMPIGNY - 27500</option>
                                    <option value="76154" >CAMPNEUSEVILLE - 76340</option>
                                    <option value="27127" >CANAPPEVILLE - 27400</option>
                                    <option value="76155" >CANEHAN - 76260</option>
                                    <option value="76156" >CANOUVILLE - 76450</option>
                                    <option value="76157" >CANTELEU - 76380</option>
                                    <option value="27128" >CANTIERS - 27420</option>
                                    <option value="76158" >CANVILLE LES DEUX EGLISES - 76560</option>
                                    <option value="76159" >CANY BARVILLE - 76450</option>
                                    <option value="27129" >CAORCHES ST NICOLAS - 27300</option>
                                    <option value="27130" >CAPELLES LES GRANDS - 27270</option>
                                    <option value="27131" >CARSIX - 27300</option>
                                    <option value="76160" >CARVILLE LA FOLLETIERE - 76190</option>
                                    <option value="76161" >CARVILLE POT DE FER - 76560</option>
                                    <option value="76163" >CATENAY - 76116</option>
                                    <option value="76164" >CAUDEBEC EN CAUX - 76490</option>
                                    <option value="76165" >CAUDEBEC LES ELBEUF - 76320</option>
                                    <option value="27132" >CAUGE - 27180</option>
                                    <option value="27133" >CAUMONT - 27310</option>
                                    <option value="27134" >CAUVERVILLE EN ROUMOIS - 27350</option>
                                    <option value="76167" >CAUVILLE - 76930</option>
                                    <option value="27135" >CESSEVILLE - 27110</option>
                                    <option value="27136" >CHAIGNES - 27120</option>
                                    <option value="27137" >CHAISE DIEU DU THEIL - 27580</option>
                                    <option value="27138" >CHAMBLAC - 27270</option>
                                    <option value="27139" >CHAMBORD - 27250</option>
                                    <option value="27140" >CHAMBRAY - 27120</option>
                                    <option value="27141" >CHAMP DOLENT - 27190</option>
                                    <option value="27142" >CHAMPENARD - 27600</option>
                                    <option value="27143" >CHAMPIGNOLLES - 27330</option>
                                    <option value="27144" >CHAMPIGNY LA FUTELAYE - 27220</option>
                                    <option value="27145" >CHANTELOUP - 27240</option>
                                    <option value="27151" >CHARLEVAL - 27380</option>
                                    <option value="27152" >CHATEAU SUR EPTE - 27420</option>
                                    <option value="27153" >CHAUVINCOURT PROVEMONT - 27150</option>
                                    <option value="27154" >CHAVIGNY BAILLEUL - 27220</option>
                                    <option value="27155" >CHENNEBRUN - 27820</option>
                                    <option value="27156" >CHERONVILLIERS - 27250</option>
                                    <option value="76174" >CIDEVILLE - 76570</option>
                                    <option value="27158" >CIERREY - 27930</option>
                                    <option value="27159" >CINTRAY - 27160</option>
                                    <option value="27160" >CIVIERES - 27630</option>
                                    <option value="76175" >CLAIS - 76660</option>
                                    <option value="76176" >CLASVILLE - 76450</option>
                                    <option value="27161" >CLAVILLE - 27180</option>
                                    <option value="76177" >CLAVILLE MOTTEVILLE - 76690</option>
                                    <option value="76178" >CLEON - 76410</option>
                                    <option value="76179" >CLERES - 76690</option>
                                    <option value="76180" >CLEUVILLE - 76450</option>
                                    <option value="76181" >CLEVILLE - 76640</option>
                                    <option value="76182" >CLIPONVILLE - 76640</option>
                                    <option value="27162" >COLLANDRES QUINCARNON - 27190</option>
                                    <option value="27163" >COLLETOT - 27500</option>
                                    <option value="76183" >COLLEVILLE - 76400</option>
                                    <option value="76184" >COLMESNIL MANNEVILLE - 76550</option>
                                    <option value="27164" >COMBON - 27170</option>
                                    <option value="76185" >COMPAINVILLE - 76440</option>
                                    <option value="27165" >CONCHES EN OUCHE - 27190</option>
                                    <option value="27166" >CONDE SUR ITON - 27160</option>
                                    <option value="27167" >CONDE SUR RISLE - 27290</option>
                                    <option value="27168" >CONNELLES - 27430</option>
                                    <option value="27169" >CONTEVILLE - 27210</option>
                                    <option value="76186" >CONTEVILLE - 76390</option>
                                    <option value="76187" >CONTREMOULINS - 76400</option>
                                    <option value="27170" >CORMEILLES - 27260</option>
                                    <option value="27172" >CORNEUIL - 27240</option>
                                    <option value="27173" >CORNEVILLE LA FOUQUETIERE - 27300</option>
                                    <option value="27174" >CORNEVILLE SUR RISLE - 27500</option>
                                    <option value="27175" >CORNY - 27700</option>
                                    <option value="76188" >COTTEVRARD - 76850</option>
                                    <option value="27176" >COUDRAY - 27150</option>
                                    <option value="27177" >COUDRES - 27220</option>
                                    <option value="27178" >COULONGES - 27240</option>
                                    <option value="27179" >COURBEPINE - 27300</option>
                                    <option value="27180" >COURCELLES SUR SEINE - 27940</option>
                                    <option value="27181" >COURDEMANCHE - 27320</option>
                                    <option value="27182" >COURTEILLES - 27130</option>
                                    <option value="27184" >CRASVILLE - 27400</option>
                                    <option value="76189" >CRASVILLE LA MALLET - 76450</option>
                                    <option value="76190" >CRASVILLE LA ROCQUEFORT - 76740</option>
                                    <option value="76191" >CRESSY - 76720</option>
                                    <option value="27185" >CRESTOT - 27110</option>
                                    <option value="27186" >CRETON - 27240</option>
                                    <option value="76192" >CRIEL SUR MER - 76910</option>
                                    <option value="76194" >CRIQUEBEUF EN CAUX - 76111</option>
                                    <option value="27187" >CRIQUEBEUF LA CAMPAGNE - 27110</option>
                                    <option value="27188" >CRIQUEBEUF SUR SEINE - 27340</option>
                                    <option value="76196" >CRIQUETOT L'ESNEVAL - 76280</option>
                                    <option value="76195" >CRIQUETOT LE MAUCONDUIT - 76540</option>
                                    <option value="76197" >CRIQUETOT SUR LONGUEVILLE - 76590</option>
                                    <option value="76198" >CRIQUETOT SUR OUVILLE - 76760</option>
                                    <option value="76199" >CRIQUIERS - 76390</option>
                                    <option value="76200" >CRITOT - 76680</option>
                                    <option value="76201" >CROISY SUR ANDELLE - 76780</option>
                                    <option value="27190" >CROISY SUR EURE - 27120</option>
                                    <option value="76203" >CROIX MARE - 76190</option>
                                    <option value="76202" >CROIXDALLE - 76660</option>
                                    <option value="76204" >CROPUS - 76720</option>
                                    <option value="27192" >CROSVILLE LA VIEILLE - 27110</option>
                                    <option value="76205" >CROSVILLE SUR SCIE - 76590</option>
                                    <option value="27193" >CROTH - 27530</option>
                                    <option value="27194" >CUVERVILLE - 27700</option>
                                    <option value="76206" >CUVERVILLE - 76280</option>
                                    <option value="76207" >CUVERVILLE SUR YERES - 76260</option>
                                    <option value="76208" >CUY ST FIACRE - 76220</option>
                                    <option value="27195" >DAME MARIE - 27160</option>
                                    <option value="76209" >DAMPIERRE EN BRAY - 76220</option>
                                    <option value="76210" >DAMPIERRE ST NICOLAS - 76510</option>
                                    <option value="27197" >DAMPSMESNIL - 27630</option>
                                    <option value="27198" >DAMVILLE - 27240</option>
                                    <option value="76211" >DANCOURT - 76340</option>
                                    <option value="27199" >DANGU - 27720</option>
                                    <option value="27200" >DARDEZ - 27930</option>
                                    <option value="76212" >DARNETAL - 76160</option>
                                    <option value="27201" >DAUBEUF LA CAMPAGNE - 27110</option>
                                    <option value="27202" >DAUBEUF PRES VATTEVILLE - 27430</option>
                                    <option value="76213" >DAUBEUF SERVILLE - 76110</option>
                                    <option value="76214" >DENESTANVILLE - 76590</option>
                                    <option value="76215" >DERCHIGNY - 76370</option>
                                    <option value="76216" >DEVILLE LES ROUEN - 76250</option>
                                    <option value="76217" >DIEPPE - 76370</option>
                                    <option value="76922" >DIEPPEDALLE CROISSET - 76380</option>
                                    <option value="27203" >DOUAINS - 27120</option>
                                    <option value="76218" >DOUDEAUVILLE - 76220</option>
                                    <option value="27204" >DOUDEAUVILLE EN VEXIN - 27150</option>
                                    <option value="76219" >DOUDEVILLE - 76560</option>
                                    <option value="27205" >DOUVILLE SUR ANDELLE - 27380</option>
                                    <option value="76220" >DOUVREND - 76630</option>
                                    <option value="27206" >DROISY - 27320</option>
                                    <option value="76221" >DROSAY - 76460</option>
                                    <option value="27207" >DRUCOURT - 27230</option>
                                    <option value="76222" >DUCLAIR - 76480</option>
                                    <option value="27208" >DURANVILLE - 27230</option>
                                    <option value="76223" >ECALLES ALIX - 76190</option>
                                    <option value="27209" >ECAQUELON - 27290</option>
                                    <option value="27210" >ECARDENVILLE LA CAMPAGNE - 27170</option>
                                    <option value="27211" >ECARDENVILLE SUR EURE - 27490</option>
                                    <option value="27212" >ECAUVILLE - 27110</option>
                                    <option value="27213" >ECOS - 27630</option>
                                    <option value="27214" >ECOUIS - 27440</option>
                                    <option value="27215" >ECQUETOT - 27110</option>
                                    <option value="76224" >ECRAINVILLE - 76110</option>
                                    <option value="76225" >ECRETTEVILLE LES BAONS - 76190</option>
                                    <option value="76226" >ECRETTEVILLE SUR MER - 76540</option>
                                    <option value="76227" >ECTOT L'AUBER - 76760</option>
                                    <option value="76228" >ECTOT LES BAONS - 76970</option>
                                    <option value="76231" >ELBEUF - 76500</option>
                                    <option value="76229" >ELBEUF EN BRAY - 76220</option>
                                    <option value="76230" >ELBEUF SUR ANDELLE - 76780</option>
                                    <option value="76232" >ELETOT - 76540</option>
                                    <option value="76233" >ELLECOURT - 76390</option>
                                    <option value="27216" >EMALLEVILLE - 27930</option>
                                    <option value="27217" >EMANVILLE - 27190</option>
                                    <option value="76234" >EMANVILLE - 76570</option>
                                    <option value="76235" >ENVERMEU - 76630</option>
                                    <option value="76236" >ENVRONVILLE - 76640</option>
                                    <option value="27218" >EPAIGNES - 27260</option>
                                    <option value="27219" >EPEGARD - 27110</option>
                                    <option value="27220" >EPIEDS - 27730</option>
                                    <option value="27221" >EPINAY - 27330</option>
                                    <option value="76237" >EPINAY SUR DUCLAIR - 76480</option>
                                    <option value="76238" >EPOUVILLE - 76133</option>
                                    <option value="76239" >EPRETOT - 76430</option>
                                    <option value="76240" >EPREVILLE - 76400</option>
                                    <option value="27222" >EPREVILLE EN LIEUVIN - 27560</option>
                                    <option value="27223" >EPREVILLE EN ROUMOIS - 27310</option>
                                    <option value="27224" >EPREVILLE PRES LE NEUBOUR - 27110</option>
                                    <option value="76241" >ERMENOUVILLE - 76740</option>
                                    <option value="76242" >ERNEMONT LA VILLETTE - 76220</option>
                                    <option value="76243" >ERNEMONT SUR BUCHY - 76750</option>
                                    <option value="76244" >ESCLAVELLES - 76270</option>
                                    <option value="76245" >ESLETTES - 76710</option>
                                    <option value="76247" >ESTEVILLE - 76690</option>
                                    <option value="76248" >ESTOUTEVILLE ECALLES - 76750</option>
                                    <option value="76249" >ETAIMPUIS - 76850</option>
                                    <option value="76250" >ETAINHUS - 76430</option>
                                    <option value="76251" >ETALLEVILLE - 76560</option>
                                    <option value="76252" >ETALONDES - 76260</option>
                                    <option value="76253" >ETOUTTEVILLE - 76190</option>
                                    <option value="27226" >ETREPAGNY - 27150</option>
                                    <option value="76254" >ETRETAT - 76790</option>
                                    <option value="27227" >ETREVILLE - 27350</option>
                                    <option value="27228" >ETURQUERAYE - 27350</option>
                                    <option value="76255" >EU - 76260</option>
                                    <option value="27229" >EVREUX - 27000</option>
                                    <option value="27230" >EZY SUR EURE - 27530</option>
                                    <option value="27231" >FAINS - 27120</option>
                                    <option value="76257" >FALLENCOURT - 76340</option>
                                    <option value="27232" >FARCEAUX - 27150</option>
                                    <option value="27233" >FATOUVILLE GRESTAIN - 27210</option>
                                    <option value="27234" >FAUVILLE - 27930</option>
                                    <option value="76258" >FAUVILLE EN CAUX - 76640</option>
                                    <option value="27235" >FAVEROLLES LA CAMPAGNE - 27190</option>
                                    <option value="27236" >FAVEROLLES LES MARES - 27230</option>
                                    <option value="76259" >FECAMP - 76400</option>
                                    <option value="76260" >FERRIERES EN BRAY - 76220</option>
                                    <option value="27238" >FERRIERES HAUT CLOCHER - 27190</option>
                                    <option value="27239" >FERRIERES ST HILAIRE - 27270</option>
                                    <option value="76262" >FESQUES - 76270</option>
                                    <option value="27241" >FEUGUEROLLES - 27110</option>
                                    <option value="27243" >FIQUEFLEUR EQUAINVILLE - 27210</option>
                                    <option value="76264" >FLAMANVILLE - 76970</option>
                                    <option value="76265" >FLAMETS FRETILS - 76270</option>
                                    <option value="27244" >FLANCOURT CATELON - 27310</option>
                                    <option value="27245" >FLEURY LA FORET - 27480</option>
                                    <option value="27246" >FLEURY SUR ANDELLE - 27380</option>
                                    <option value="27247" >FLIPOU - 27380</option>
                                    <option value="76266" >FLOCQUES - 76260</option>
                                    <option value="27248" >FOLLEVILLE - 27230</option>
                                    <option value="76268" >FONGUEUSEMARE - 76280</option>
                                    <option value="27249" >FONTAINE BELLENGER - 27600</option>
                                    <option value="76269" >FONTAINE EN BRAY - 76440</option>
                                    <option value="27250" >FONTAINE HEUDEBOURG - 27490</option>
                                    <option value="27251" >FONTAINE L'ABBE - 27300</option>
                                    <option value="27252" >FONTAINE LA LOUVET - 27230</option>
                                    <option value="76270" >FONTAINE LA MALLET - 76290</option>
                                    <option value="27253" >FONTAINE LA SORET - 27550</option>
                                    <option value="76271" >FONTAINE LE BOURG - 76690</option>
                                    <option value="76272" >FONTAINE LE DUN - 76740</option>
                                    <option value="27254" >FONTAINE SOUS JOUY - 27120</option>
                                    <option value="76273" >FONTAINE SOUS PREAUX - 76160</option>
                                    <option value="27255" >FONTENAY - 27510</option>
                                    <option value="76275" >FONTENAY - 76290</option>
                                    <option value="27257" >FORET LA FOLIE - 27510</option>
                                    <option value="76276" >FORGES LES EAUX - 76440</option>
                                    <option value="27258" >FORT MOVILLE - 27210</option>
                                    <option value="76278" >FOUCARMONT - 76340</option>
                                    <option value="76279" >FOUCART - 76640</option>
                                    <option value="27259" >FOUCRAINVILLE - 27220</option>
                                    <option value="27260" >FOULBEC - 27210</option>
                                    <option value="27261" >FOUQUEVILLE - 27370</option>
                                    <option value="27262" >FOURGES - 27630</option>
                                    <option value="27263" >FOURMETOT - 27500</option>
                                    <option value="27264" >FOURS EN VEXIN - 27630</option>
                                    <option value="27265" >FRANCHEVILLE - 27160</option>
                                    <option value="27266" >FRANQUEVILLE - 27800</option>
                                    <option value="76475" >FRANQUEVILLE ST PIERRE - 76520</option>
                                    <option value="76280" >FREAUVILLE - 76660</option>
                                    <option value="76282" >FRENEUSE - 76410</option>
                                    <option value="27267" >FRENEUSE SUR RISLE - 27290</option>
                                    <option value="76283" >FRESLES - 76270</option>
                                    <option value="76284" >FRESNAY LE LONG - 76850</option>
                                    <option value="27269" >FRESNE CAUVERVILLE - 27260</option>
                                    <option value="27270" >FRESNE L'ARCHEVEQUE - 27700</option>
                                    <option value="76285" >FRESNE LE PLAN - 76520</option>
                                    <option value="27271" >FRESNEY - 27220</option>
                                    <option value="76286" >FRESNOY FOLNY - 76660</option>
                                    <option value="76287" >FRESQUIENNES - 76570</option>
                                    <option value="76288" >FREULLEVILLE - 76510</option>
                                    <option value="76289" >FREVILLE - 76190</option>
                                    <option value="76290" >FRICHEMESNIL - 76690</option>
                                    <option value="76291" >FROBERVILLE - 76400</option>
                                    <option value="76292" >FRY - 76780</option>
                                    <option value="76293" >FULTOT - 76560</option>
                                    <option value="27273" >GADENCOURT - 27120</option>
                                    <option value="27274" >GAILLARDBOIS CRESSENVILLE - 27440</option>
                                    <option value="76295" >GAILLEFONTAINE - 76870</option>
                                    <option value="27275" >GAILLON - 27600</option>
                                    <option value="76296" >GAINNEVILLE - 76700</option>
                                    <option value="27276" >GAMACHES EN VEXIN - 27150</option>
                                    <option value="76297" >GANCOURT ST ETIENNE - 76220</option>
                                    <option value="76298" >GANZEVILLE - 76400</option>
                                    <option value="27277" >GARENCIERES - 27220</option>
                                    <option value="27278" >GARENNES SUR EURE - 27780</option>
                                    <option value="27279" >GASNY - 27620</option>
                                    <option value="27280" >GAUCIEL - 27930</option>
                                    <option value="27281" >GAUDREVILLE LA RIVIERE - 27190</option>
                                    <option value="27282" >GAUVILLE LA CAMPAGNE - 27930</option>
                                    <option value="76299" >GERPONVILLE - 76540</option>
                                    <option value="76300" >GERVILLE - 76790</option>
                                    <option value="27283" >GISAY LA COUDRE - 27330</option>
                                    <option value="27284" >GISORS - 27140</option>
                                    <option value="27285" >GIVERNY - 27620</option>
                                    <option value="27286" >GIVERVILLE - 27560</option>
                                    <option value="76301" >GLICOURT - 76630</option>
                                    <option value="27287" >GLISOLLES - 27190</option>
                                    <option value="27288" >GLOS SUR RISLE - 27290</option>
                                    <option value="76302" >GODERVILLE - 76110</option>
                                    <option value="76303" >GOMMERVILLE - 76430</option>
                                    <option value="76304" >GONFREVILLE CAILLOT - 76110</option>
                                    <option value="76305" >GONFREVILLE L'ORCHER - 76700</option>
                                    <option value="76306" >GONNETOT - 76730</option>
                                    <option value="76307" >GONNEVILLE LA MALLET - 76280</option>
                                    <option value="76308" >GONNEVILLE SUR SCIE - 76590</option>
                                    <option value="76309" >GONZEVILLE - 76560</option>
                                    <option value="76310" >GOUCHAUPRE - 76630</option>
                                    <option value="27290" >GOUPILLIERES - 27170</option>
                                    <option value="76311" >GOUPILLIERES - 76570</option>
                                    <option value="76312" >GOURNAY EN BRAY - 76220</option>
                                    <option value="76901" >GOURNAY EN CAUX - 76700</option>
                                    <option value="27291" >GOURNAY LE GUERIN - 27580</option>
                                    <option value="27292" >GOUTTIERES - 27410</option>
                                    <option value="27293" >GOUVILLE - 27240</option>
                                    <option value="76313" >GOUY - 76520</option>
                                    <option value="76314" >GRAIMBOUVILLE - 76430</option>
                                    <option value="27294" >GRAINVILLE - 27380</option>
                                    <option value="76315" >GRAINVILLE LA TEINTURIERE - 76450</option>
                                    <option value="76316" >GRAINVILLE SUR RY - 76116</option>
                                    <option value="76317" >GRAINVILLE YMAUVILLE - 76110</option>
                                    <option value="27295" >GRAND CAMP - 27270</option>
                                    <option value="76318" >GRAND CAMP - 76170</option>
                                    <option value="76319" >GRAND COURONNE - 76530</option>
                                    <option value="27296" >GRANDCHAIN - 27410</option>
                                    <option value="76320" >GRANDCOURT - 76660</option>
                                    <option value="27297" >GRANDVILLIERS - 27240</option>
                                    <option value="76323" >GRAVAL - 76270</option>
                                    <option value="27298" >GRAVERON SEMERVILLE - 27110</option>
                                    <option value="27299" >GRAVIGNY - 27930</option>
                                    <option value="76324" >GREGES - 76370</option>
                                    <option value="76325" >GREMONVILLE - 76970</option>
                                    <option value="76326" >GRENY - 76630</option>
                                    <option value="76327" >GREUVILLE - 76810</option>
                                    <option value="76328" >GRIGNEUSEVILLE - 76850</option>
                                    <option value="27300" >GROSLEY SUR RISLE - 27170</option>
                                    <option value="27301" >GROSSOEUVRE - 27220</option>
                                    <option value="76329" >GRUCHET LE VALASSE - 76210</option>
                                    <option value="76330" >GRUCHET ST SIMEON - 76810</option>
                                    <option value="76331" >GRUGNY - 76690</option>
                                    <option value="76332" >GRUMESNIL - 76440</option>
                                    <option value="27303" >GUERNANVILLE - 27160</option>
                                    <option value="27304" >GUERNY - 27720</option>
                                    <option value="76333" >GUERVILLE - 76340</option>
                                    <option value="76336" >GUETTEVILLE LES GRES - 76460</option>
                                    <option value="76334" >GUEURES - 76730</option>
                                    <option value="76335" >GUEUTTEVILLE - 76890</option>
                                    <option value="27306" >GUICHAINVILLE - 27930</option>
                                    <option value="76337" >GUILMECOURT - 76630</option>
                                    <option value="27307" >GUISENIERS - 27700</option>
                                    <option value="27308" >GUITRY - 27510</option>
                                    <option value="27310" >HACQUEVILLE - 27150</option>
                                    <option value="76340" >HARCANVILLE - 76560</option>
                                    <option value="27311" >HARCOURT - 27800</option>
                                    <option value="27312" >HARDENCOURT COCHEREL - 27120</option>
                                    <option value="76341" >HARFLEUR - 76700</option>
                                    <option value="27314" >HARICOURT - 27630</option>
                                    <option value="27315" >HARQUENCY - 27700</option>
                                    <option value="76342" >HATTENVILLE - 76640</option>
                                    <option value="76343" >HAUCOURT - 76440</option>
                                    <option value="76344" >HAUDRICOURT - 76390</option>
                                    <option value="76345" >HAUSSEZ - 76440</option>
                                    <option value="76346" >HAUTOT L'AUVRAY - 76450</option>
                                    <option value="76347" >HAUTOT LE VATOIS - 76190</option>
                                    <option value="76348" >HAUTOT ST SULPICE - 76190</option>
                                    <option value="76349" >HAUTOT SUR MER - 76550</option>
                                    <option value="76350" >HAUTOT SUR SEINE - 76113</option>
                                    <option value="27316" >HAUVILLE - 27350</option>
                                    <option value="27324" >HEBECOURT - 27150</option>
                                    <option value="76353" >HEBERVILLE - 76740</option>
                                    <option value="27325" >HECMANVILLE - 27800</option>
                                    <option value="27326" >HECOURT - 27120</option>
                                    <option value="27327" >HECTOMARE - 27110</option>
                                    <option value="27328" >HELLENVILLIERS - 27240</option>
                                    <option value="27329" >HENNEZIS - 27700</option>
                                    <option value="76354" >HENOUVILLE - 76840</option>
                                    <option value="76355" >HERICOURT EN CAUX - 76560</option>
                                    <option value="76356" >HERMANVILLE - 76730</option>
                                    <option value="76357" >HERMEVILLE - 76280</option>
                                    <option value="76359" >HERONCHELLES - 76750</option>
                                    <option value="27330" >HERQUEVILLE - 27430</option>
                                    <option value="27912" >HEUBECOURT - 27630</option>
                                    <option value="27331" >HEUBECOURT HARICOURT - 27630</option>
                                    <option value="27332" >HEUDEBOUVILLE - 27400</option>
                                    <option value="27333" >HEUDICOURT - 27860</option>
                                    <option value="27334" >HEUDREVILLE EN LIEUVIN - 27230</option>
                                    <option value="27335" >HEUDREVILLE SUR EURE - 27400</option>
                                    <option value="76360" >HEUGLEVILLE SUR SCIE - 76720</option>
                                    <option value="27337" >HEUQUEVILLE - 27700</option>
                                    <option value="76361" >HEUQUEVILLE - 76280</option>
                                    <option value="76362" >HEURTEAUVILLE - 76940</option>
                                    <option value="76363" >HODENG AU BOSC - 76340</option>
                                    <option value="76364" >HODENG HODENGER - 76780</option>
                                    <option value="27339" >HONDOUVILLE - 27400</option>
                                    <option value="27340" >HONGUEMARE GUENOUVILLE - 27310</option>
                                    <option value="76365" >HOUDETOT - 76740</option>
                                    <option value="27342" >HOUETTEVILLE - 27400</option>
                                    <option value="27343" >HOULBEC COCHEREL - 27120</option>
                                    <option value="27344" >HOULBEC PRES LE GROS THEI - 27370</option>
                                    <option value="76367" >HOUPPEVILLE - 76770</option>
                                    <option value="76368" >HOUQUETOT - 76110</option>
                                    <option value="27346" >HOUVILLE EN VEXIN - 27440</option>
                                    <option value="27347" >HUEST - 27930</option>
                                    <option value="76370" >HUGLEVILLE EN CAUX - 76570</option>
                                    <option value="27348" >IGOVILLE - 27460</option>
                                    <option value="27349" >ILLEVILLE SUR MONTFORT - 27290</option>
                                    <option value="27350" >ILLIERS L'EVEQUE - 27770</option>
                                    <option value="76372" >ILLOIS - 76390</option>
                                    <option value="76373" >IMBLEVILLE - 76890</option>
                                    <option value="27351" >INCARVILLE - 27400</option>
                                    <option value="76374" >INCHEVILLE - 76117</option>
                                    <option value="27352" >INFREVILLE - 27520</option>
                                    <option value="76375" >INGOUVILLE - 76460</option>
                                    <option value="76376" >INTRAVILLE - 76630</option>
                                    <option value="27353" >IRREVILLE - 27930</option>
                                    <option value="76377" >ISNEAUVILLE - 76230</option>
                                    <option value="27354" >IVILLE - 27110</option>
                                    <option value="27355" >IVRY LA BATAILLE - 27540</option>
                                    <option value="27356" >JONQUERETS DE LIVET - 27410</option>
                                    <option value="27357" >JOUVEAUX - 27260</option>
                                    <option value="27358" >JOUY SUR EURE - 27120</option>
                                    <option value="27359" >JUIGNETTES - 27250</option>
                                    <option value="27360" >JUMELLES - 27220</option>
                                    <option value="76378" >JUMIEGES - 76480</option>
                                    <option value="27309" >L'HABIT - 27220</option>
                                    <option value="27341" >L'HOSMES - 27570</option>
                                    <option value="27041" >LA BARRE EN OUCHE - 27330</option>
                                    <option value="76074" >LA BELLIERE - 76440</option>
                                    <option value="27078" >LA BOISSIERE - 27220</option>
                                    <option value="27082" >LA BONNEVILLE SUR ITON - 27190</option>
                                    <option value="76131" >LA BOUILLE - 76530</option>
                                    <option value="76169" >LA CERLANGUE - 76430</option>
                                    <option value="27146" >LA CHAPELLE BAYVEL - 27260</option>
                                    <option value="27147" >LA CHAPELLE DU BOIS DES F - 27930</option>
                                    <option value="76170" >LA CHAPELLE DU BOURGAY - 76590</option>
                                    <option value="27148" >LA CHAPELLE GAUTHIER - 27270</option>
                                    <option value="27149" >LA CHAPELLE HARENG - 27230</option>
                                    <option value="27150" >LA CHAPELLE REANVILLE - 27950</option>
                                    <option value="76171" >LA CHAPELLE ST OUEN - 76780</option>
                                    <option value="76172" >LA CHAPELLE SUR DUN - 76740</option>
                                    <option value="76173" >LA CHAUSSEE - 76590</option>
                                    <option value="27183" >LA COUTURE BOUSSEY - 27750</option>
                                    <option value="76193" >LA CRIQUE - 76850</option>
                                    <option value="27189" >LA CROISILLE - 27190</option>
                                    <option value="27191" >LA CROIX ST LEUFROY - 27490</option>
                                    <option value="27240" >LA FERRIERE SUR RISLE - 27760</option>
                                    <option value="76261" >LA FERTE ST SAMSON - 76440</option>
                                    <option value="76263" >LA FEUILLIE - 76220</option>
                                    <option value="76267" >LA FOLLETIERE - 76190</option>
                                    <option value="76274" >LA FONTELAYE - 76890</option>
                                    <option value="27256" >LA FORET DU PARC - 27220</option>
                                    <option value="76281" >LA FRENAYE - 76170</option>
                                    <option value="76294" >LA GAILLARDE - 76740</option>
                                    <option value="27289" >LA GOULAFRIERE - 27390</option>
                                    <option value="27305" >LA GUEROULDE - 27160</option>
                                    <option value="76338" >LA HALLOTIERE - 76780</option>
                                    <option value="27313" >LA HARENGERE - 27370</option>
                                    <option value="76352" >LA HAYE - 76780</option>
                                    <option value="27317" >LA HAYE AUBREE - 27350</option>
                                    <option value="27318" >LA HAYE DE CALLEVILLE - 27800</option>
                                    <option value="27319" >LA HAYE DE ROUTOT - 27350</option>
                                    <option value="27320" >LA HAYE DU THEIL - 27370</option>
                                    <option value="27321" >LA HAYE LE COMTE - 27400</option>
                                    <option value="27322" >LA HAYE MALHERBE - 27400</option>
                                    <option value="27323" >LA HAYE ST SYLVESTRE - 27330</option>
                                    <option value="27336" >LA HEUNIERE - 27950</option>
                                    <option value="27345" >LA HOUSSAYE - 27410</option>
                                    <option value="76369" >LA HOUSSAYE BERANGER - 76690</option>
                                    <option value="27904" >LA LANDE - 27210</option>
                                    <option value="27361" >LA LANDE ST LEGER - 27210</option>
                                    <option value="76391" >LA LONDE - 76500</option>
                                    <option value="27901" >LA MADELEINE - 27000</option>
                                    <option value="76401" >LA MAILLERAYE SUR SEINE - 76940</option>
                                    <option value="76902" >LA MAINE - 76150</option>
                                    <option value="27430" >LA NEUVE GRANGE - 27150</option>
                                    <option value="27431" >LA NEUVE LYRE - 27330</option>
                                    <option value="27432" >LA NEUVILLE DU BOSC - 27890</option>
                                    <option value="27435" >LA NOE POULAIN - 27560</option>
                                    <option value="76508" >LA POTERIE CAP D'ANTIFER - 76280</option>
                                    <option value="27475" >LA POTERIE MATHIEU - 27560</option>
                                    <option value="27482" >LA PYLE - 27370</option>
                                    <option value="76522" >LA REMUEE - 76430</option>
                                    <option value="27495" >LA ROQUETTE - 27700</option>
                                    <option value="27499" >LA ROUSSIERE - 27270</option>
                                    <option value="76547" >LA RUE ST PIERRE - 76690</option>
                                    <option value="27616" >LA SAUSSAYE - 27370</option>
                                    <option value="27659" >LA TRINITE - 27930</option>
                                    <option value="27660" >LA TRINITE DE REVILLE - 27270</option>
                                    <option value="76712" >LA TRINITE DU MONT - 76170</option>
                                    <option value="27666" >LA VACHERIE - 27400</option>
                                    <option value="76728" >LA VAUPALIERE - 76150</option>
                                    <option value="27685" >LA VIEILLE LYRE - 27330</option>
                                    <option value="76740" >LA VIEUX RUE - 76160</option>
                                    <option value="27554" >Saint-Just - 27950</option>
                                    <option value="76379" >LAMBERVILLE - 76730</option>
                                    <option value="76380" >LAMMERVILLE - 76730</option>
                                    <option value="27362" >LANDEPEREUSE - 27410</option>
                                    <option value="76381" >LANDES VIEILLES ET NEUVES - 76390</option>
                                    <option value="76464" >LANEUVILLE CHANT D'OISEL - 76520</option>
                                    <option value="76382" >LANQUETOT - 76210</option>
                                    <option value="27364" >LAUNAY - 27470</option>
                                    <option value="27052" >LE BEC HELLOUIN - 27800</option>
                                    <option value="27053" >LE BEC THOMAS - 27370</option>
                                    <option value="76105" >LE BOCASSE - 76690</option>
                                    <option value="27071" >LE BOIS HELLAIN - 27260</option>
                                    <option value="76112" >LE BOIS ROBERT - 76590</option>
                                    <option value="27087" >LE BOSC MOREL - 27270</option>
                                    <option value="27099" >LE BOULAY MORIN - 27930</option>
                                    <option value="76133" >LE BOURG DUN - 76740</option>
                                    <option value="76162" >LE CATELIER - 76590</option>
                                    <option value="76166" >LE CAULE STE BEUVE - 76390</option>
                                    <option value="27157" >LE CHESNE - 27160</option>
                                    <option value="27171" >LE CORMIER - 27120</option>
                                    <option value="27237" >LE FAVRIL - 27230</option>
                                    <option value="27242" >LE FIDELAIRE - 27190</option>
                                    <option value="76277" >LE FOSSE - 76440</option>
                                    <option value="27268" >LE FRESNE - 27190</option>
                                    <option value="76322" >LE GRAND QUEVILLY - 76120</option>
                                    <option value="27302" >LE GROS THEIL - 27370</option>
                                    <option value="76339" >LE HANOUARD - 76450</option>
                                    <option value="76351" >LE HAVRE - 76610</option>
                                    <option value="76358" >LE HERON - 76780</option>
                                    <option value="76366" >LE HOULME - 76770</option>
                                    <option value="27363" >LE LANDIN - 27350</option>
                                    <option value="27386" >LE MANOIR - 27460</option>
                                    <option value="76428" >LE MESNIL DURDENT - 76460</option>
                                    <option value="76429" >LE MESNIL ESNARD - 76240</option>
                                    <option value="27401" >LE MESNIL FUGUET - 27930</option>
                                    <option value="27402" >LE MESNIL HARDRAY - 27190</option>
                                    <option value="27403" >LE MESNIL JOURDAIN - 27400</option>
                                    <option value="76431" >LE MESNIL LIEUBRAY - 76780</option>
                                    <option value="76435" >LE MESNIL REAUME - 76260</option>
                                    <option value="76436" >LE MESNIL SOUS JUMIEGES - 76480</option>
                                    <option value="27428" >LE NEUBOURG - 27110</option>
                                    <option value="27444" >LE NOYER EN OUCHE - 27410</option>
                                    <option value="76903" >LE PETIT APPEVILLE - 76550</option>
                                    <option value="76498" >LE PETIT QUEVILLY - 76140</option>
                                    <option value="27462" >LE PLANQUAY - 27230</option>
                                    <option value="27464" >LE PLESSIS GROHAN - 27180</option>
                                    <option value="27465" >LE PLESSIS HEBERT - 27120</option>
                                    <option value="27466" >LE PLESSIS STE OPPORTUNE - 27170</option>
                                    <option value="27494" >LE RONCENAY - 27240</option>
                                    <option value="27024" >LE RONCENAY AUTHENAY - 27240</option>
                                    <option value="27503" >LE SACQ - 27240</option>
                                    <option value="27627" >LE THEIL NOLENT - 27230</option>
                                    <option value="27632" >LE THIL - 27150</option>
                                    <option value="76691" >LE THIL RIBERPRE - 76440</option>
                                    <option value="27635" >LE THUIT - 27700</option>
                                    <option value="27636" >LE THUIT ANGER - 27370</option>
                                    <option value="27638" >LE THUIT SIGNOL - 27370</option>
                                    <option value="27639" >LE THUIT SIMER - 27370</option>
                                    <option value="76693" >LE TILLEUL - 76790</option>
                                    <option value="27641" >LE TILLEUL LAMBERT - 27110</option>
                                    <option value="27642" >LE TILLEUL OTHON - 27170</option>
                                    <option value="76699" >LE TORP MESNIL - 76560</option>
                                    <option value="27646" >LE TORPT - 27210</option>
                                    <option value="76709" >LE TRAIT - 76580</option>
                                    <option value="27658" >LE TREMBLAY OMONVILLE - 27110</option>
                                    <option value="76711" >LE TREPORT - 76470</option>
                                    <option value="27663" >LE TRONCQ - 27110</option>
                                    <option value="27664" >LE TRONQUAY - 27480</option>
                                    <option value="27668" >LE VAL DAVID - 27120</option>
                                    <option value="27528" >LE VAUDREUIL - 27100</option>
                                    <option value="27684" >LE VIEIL EVREUX - 27930</option>
                                    <option value="27365" >LERY - 27690</option>
                                    <option value="27016" >LES ANDELYS - 27700</option>
                                    <option value="27027" >LES AUTHIEUX - 27220</option>
                                    <option value="27038" >LES BARILS - 27130</option>
                                    <option value="27043" >LES BAUX DE BRETEUIL - 27160</option>
                                    <option value="27044" >LES BAUX STE CROIX - 27180</option>
                                    <option value="27096" >LES BOTTEREAUX - 27250</option>
                                    <option value="76168" >LES CENT ACRES - 76590</option>
                                    <option value="27196" >LES DAMPS - 27340</option>
                                    <option value="27225" >LES ESSARTS - 27240</option>
                                    <option value="76904" >LES ESSARTS - 76530</option>
                                    <option value="76246" >LES ESSARTS VARIMPRE - 76270</option>
                                    <option value="27272" >LES FRETILS - 27250</option>
                                    <option value="76905" >LES GRANDES DALLES - 76540</option>
                                    <option value="76321" >LES GRANDES VENTES - 76950</option>
                                    <option value="27338" >LES HOGUES - 27910</option>
                                    <option value="76371" >LES IFS - 76630</option>
                                    <option value="76390" >LES LOGES - 76790</option>
                                    <option value="27409" >LES MINIERES - 27240</option>
                                    <option value="76906" >LES PETITES DALLES - 76540</option>
                                    <option value="27459" >LES PLACES - 27230</option>
                                    <option value="27461" >LES PLANCHES - 27400</option>
                                    <option value="27476" >LES PREAUX - 27500</option>
                                    <option value="27633" >LES THILLIERS VEXIN - 27420</option>
                                    <option value="76714" >LES TROIS PIERRES - 76430</option>
                                    <option value="27678" >LES VENTES - 27180</option>
                                    <option value="76383" >LESTANVILLE - 76730</option>
                                    <option value="27366" >LETTEGUIVES - 27910</option>
                                    <option value="27367" >LIEUREY - 27560</option>
                                    <option value="27368" >LIGNEROLLES - 27220</option>
                                    <option value="76384" >LILLEBONNE - 76170</option>
                                    <option value="27369" >LILLY - 27480</option>
                                    <option value="76385" >LIMESY - 76570</option>
                                    <option value="76386" >LIMPIVILLE - 76540</option>
                                    <option value="76387" >LINDEBEUF - 76760</option>
                                    <option value="76388" >LINTOT - 76210</option>
                                    <option value="76389" >LINTOT LES BOIS - 76590</option>
                                    <option value="27370" >LISORS - 27440</option>
                                    <option value="27371" >LIVET SUR AUTHOU - 27800</option>
                                    <option value="76392" >LONDINIERES - 76660</option>
                                    <option value="27372" >LONGCHAMPS - 27150</option>
                                    <option value="76393" >LONGMESNIL - 76440</option>
                                    <option value="76394" >LONGROY - 76260</option>
                                    <option value="76395" >LONGUEIL - 76860</option>
                                    <option value="76396" >LONGUERUE - 76750</option>
                                    <option value="76397" >LONGUEVILLE SUR SCIE - 76590</option>
                                    <option value="27373" >LORLEAU - 27480</option>
                                    <option value="27374" >LOUVERSEY - 27190</option>
                                    <option value="76398" >LOUVETOT - 76490</option>
                                    <option value="27375" >LOUVIERS - 27400</option>
                                    <option value="27376" >LOUYE - 27650</option>
                                    <option value="76399" >LUCY - 76270</option>
                                    <option value="76400" >LUNERAY - 76810</option>
                                    <option value="27377" >LYONS LA FORET - 27480</option>
                                    <option value="27378" >MADELEINE DE NONANCOURT - 27320</option>
                                    <option value="27379" >MAINNEVILLE - 27150</option>
                                    <option value="76402" >MALAUNAY - 76770</option>
                                    <option value="76403" >MALLEVILLE LES GRES - 76450</option>
                                    <option value="27380" >MALLEVILLE SUR LE BEC - 27800</option>
                                    <option value="27381" >MALOUY - 27300</option>
                                    <option value="27382" >MANDEVILLE - 27370</option>
                                    <option value="27383" >MANDRES - 27130</option>
                                    <option value="76404" >MANEGLISE - 76133</option>
                                    <option value="76405" >MANEHOUVILLE - 76590</option>
                                    <option value="76406" >MANIQUERVILLE - 76400</option>
                                    <option value="76407" >MANNEVILLE ES PLAINS - 76460</option>
                                    <option value="76408" >MANNEVILLE LA GOUPIL - 76110</option>
                                    <option value="27384" >MANNEVILLE LA RAOULT - 27210</option>
                                    <option value="27385" >MANNEVILLE SUR RISLE - 27500</option>
                                    <option value="76409" >MANNEVILLETTE - 76290</option>
                                    <option value="27387" >MANTHELON - 27240</option>
                                    <option value="27388" >MARAIS VERNIER - 27680</option>
                                    <option value="27389" >MARBEUF - 27110</option>
                                    <option value="27390" >MARCILLY LA CAMPAGNE - 27320</option>
                                    <option value="27391" >MARCILLY SUR EURE - 27810</option>
                                    <option value="76410" >MAROMME - 76150</option>
                                    <option value="76411" >MARQUES - 76390</option>
                                    <option value="27392" >MARTAGNY - 27150</option>
                                    <option value="27393" >MARTAINVILLE - 27210</option>
                                    <option value="76412" >MARTAINVILLE EPREVILLE - 76116</option>
                                    <option value="76413" >MARTIGNY - 76880</option>
                                    <option value="76414" >MARTIN EGLISE - 76370</option>
                                    <option value="27394" >MARTOT - 27340</option>
                                    <option value="76415" >MASSYE - 76270</option>
                                    <option value="76416" >MATHONVILLE - 76680</option>
                                    <option value="76417" >MAUCOMBLE - 76680</option>
                                    <option value="76418" >MAULEVRIER STE GERTRUDE - 76490</option>
                                    <option value="76419" >MAUNY - 76530</option>
                                    <option value="76420" >MAUQUENCHY - 76440</option>
                                    <option value="76907" >MAYVILLE - 76700</option>
                                    <option value="76421" >MELAMARE - 76170</option>
                                    <option value="27395" >MELICOURT - 27390</option>
                                    <option value="76422" >MELLEVILLE - 76260</option>
                                    <option value="76423" >MENERVAL - 76220</option>
                                    <option value="27396" >MENESQUEVILLE - 27850</option>
                                    <option value="27397" >MENILLES - 27120</option>
                                    <option value="27398" >MENNEVAL - 27300</option>
                                    <option value="76424" >MENONVAL - 76270</option>
                                    <option value="76425" >MENTHEVILLE - 76110</option>
                                    <option value="27399" >MERCEY - 27950</option>
                                    <option value="27400" >MEREY - 27640</option>
                                    <option value="76426" >MESANGUEVILLE - 76780</option>
                                    <option value="76427" >MESNIERES EN BRAY - 76270</option>
                                    <option value="76430" >MESNIL FOLLEMPRISE - 76660</option>
                                    <option value="76432" >MESNIL MAUGER - 76440</option>
                                    <option value="76433" >MESNIL PANNEVILLE - 76570</option>
                                    <option value="76434" >MESNIL RAOUL - 76520</option>
                                    <option value="27404" >MESNIL ROUSSET - 27390</option>
                                    <option value="27405" >MESNIL SOUS VIENNE - 27150</option>
                                    <option value="27406" >MESNIL SUR L'ESTREE - 27650</option>
                                    <option value="76908" >MESNIL VAL - 76910</option>
                                    <option value="27407" >MESNIL VERCLIVES - 27440</option>
                                    <option value="76437" >MEULERS - 76510</option>
                                    <option value="27408" >MEZIERES EN VEXIN - 27510</option>
                                    <option value="76438" >MILLEBOSC - 76260</option>
                                    <option value="76439" >MIRVILLE - 76210</option>
                                    <option value="27410" >MISEREY - 27930</option>
                                    <option value="27411" >MOISVILLE - 27320</option>
                                    <option value="76440" >MOLAGNIES - 76220</option>
                                    <option value="76441" >MONCHAUX SORENG - 76340</option>
                                    <option value="76442" >MONCHY SUR EU - 76260</option>
                                    <option value="76443" >MONT CAUVAIRE - 76690</option>
                                    <option value="76444" >MONT DE L'IF - 76190</option>
                                    <option value="76451" >MONT ST AIGNAN - 76130</option>
                                    <option value="27412" >MONTAURE - 27400</option>
                                    <option value="76445" >MONTEROLIER - 76680</option>
                                    <option value="27413" >MONTFORT SUR RISLE - 27290</option>
                                    <option value="76446" >MONTIGNY - 76380</option>
                                    <option value="76447" >MONTIVILLIERS - 76290</option>
                                    <option value="76448" >MONTMAIN - 76520</option>
                                    <option value="76449" >MONTREUIL EN CAUX - 76850</option>
                                    <option value="27414" >MONTREUIL L'ARGILLE - 27390</option>
                                    <option value="76450" >MONTROTY - 76220</option>
                                    <option value="76452" >MONTVILLE - 76710</option>
                                    <option value="27415" >MORAINVILLE JOUVEAUX - 27260</option>
                                    <option value="27417" >MORGNY - 27150</option>
                                    <option value="76453" >MORGNY LA POMMERAYE - 76750</option>
                                    <option value="76606" >MORIENNE - 76390</option>
                                    <option value="27418" >MORSAN - 27800</option>
                                    <option value="76454" >MORTEMER - 76270</option>
                                    <option value="76455" >MORVILLE SUR ANDELLE - 76780</option>
                                    <option value="76456" >MOTTEVILLE - 76970</option>
                                    <option value="27419" >MOUETTES - 27220</option>
                                    <option value="27420" >MOUFLAINES - 27420</option>
                                    <option value="76457" >MOULINEAUX - 76530</option>
                                    <option value="27421" >MOUSSEAUX NEUVILLE - 27220</option>
                                    <option value="76458" >MUCHEDENT - 76590</option>
                                    <option value="27422" >MUIDS - 27430</option>
                                    <option value="27423" >MUZY - 27650</option>
                                    <option value="27424" >NAGEL SEEZ MESNIL - 27190</option>
                                    <option value="27425" >NASSANDRES - 27550</option>
                                    <option value="27427" >NEAUFLES AUVERGNY - 27250</option>
                                    <option value="27426" >NEAUFLES ST MARTIN - 27830</option>
                                    <option value="27902" >NEAUFLES SUR RISLE - 27250</option>
                                    <option value="76459" >NESLE HODENG - 76270</option>
                                    <option value="76460" >NESLE NORMANDEUSE - 76340</option>
                                    <option value="76463" >NEUF MARCHE - 76220</option>
                                    <option value="76461" >NEUFBOSC - 76680</option>
                                    <option value="76462" >NEUFCHATEL EN BRAY - 76270</option>
                                    <option value="27429" >NEUILLY - 27730</option>
                                    <option value="76465" >NEUVILLE FERRIERES - 76270</option>
                                    <option value="76466" >NEUVILLE LES DIEPPE - 76370</option>
                                    <option value="27433" >NEUVILLE SUR AUTHOU - 27800</option>
                                    <option value="76467" >NEVILLE - 76460</option>
                                    <option value="27434" >NOARDS - 27560</option>
                                    <option value="27436" >NOGENT LE SEC - 27190</option>
                                    <option value="76468" >NOINTOT - 76210</option>
                                    <option value="27437" >NOJEON EN VEXIN - 27150</option>
                                    <option value="76469" >NOLLEVAL - 76780</option>
                                    <option value="27438" >NONANCOURT - 27320</option>
                                    <option value="27439" >NORMANVILLE - 27930</option>
                                    <option value="76470" >NORMANVILLE - 76640</option>
                                    <option value="76471" >NORVILLE - 76330</option>
                                    <option value="76472" >NOTRE DAME D'ALIERMONT - 76510</option>
                                    <option value="27441" >NOTRE DAME D'EPINE - 27800</option>
                                    <option value="76473" >NOTRE DAME DE BLIQUETUIT - 76940</option>
                                    <option value="76474" >NOTRE DAME DE BONDEVILLE - 76960</option>
                                    <option value="76476" >NOTRE DAME DE GRAVENCHON - 76330</option>
                                    <option value="27440" >NOTRE DAME DE L'ISLE - 27940</option>
                                    <option value="76477" >NOTRE DAME DU BEC - 76133</option>
                                    <option value="27442" >NOTRE DAME DU HAMEL - 27390</option>
                                    <option value="76478" >NOTRE DAME DU PARC - 76590</option>
                                    <option value="27445" >NOYERS - 27720</option>
                                    <option value="76479" >NULLEMONT - 76390</option>
                                    <option value="76480" >OCQUEVILLE - 76450</option>
                                    <option value="76481" >OCTEVILLE SUR MER - 76930</option>
                                    <option value="76482" >OFFRANVILLE - 76550</option>
                                    <option value="76483" >OHERVILLE - 76560</option>
                                    <option value="76484" >OISSEL - 76350</option>
                                    <option value="76485" >OMONVILLE - 76730</option>
                                    <option value="76486" >ORIVAL - 76500</option>
                                    <option value="27446" >ORMES - 27190</option>
                                    <option value="27447" >ORVAUX - 27190</option>
                                    <option value="76487" >OSMOY ST VALERY - 76660</option>
                                    <option value="76488" >OUAINVILLE - 76450</option>
                                    <option value="76489" >OUDALLE - 76430</option>
                                    <option value="76490" >OURVILLE EN CAUX - 76450</option>
                                    <option value="76491" >OUVILLE L'ABBAYE - 76760</option>
                                    <option value="76492" >OUVILLE LA RIVIERE - 76860</option>
                                    <option value="27448" >PACY SUR EURE - 27120</option>
                                    <option value="76493" >PALUEL - 76450</option>
                                    <option value="27449" >PANILLEUSE - 27510</option>
                                    <option value="27450" >PANLATTE - 27320</option>
                                    <option value="76494" >PARC D'ANXTOT - 76210</option>
                                    <option value="27451" >PARVILLE - 27180</option>
                                    <option value="76495" >PAVILLY - 76570</option>
                                    <option value="76496" >PENLY - 76630</option>
                                    <option value="27452" >PERRIERS LA CAMPAGNE - 27170</option>
                                    <option value="27453" >PERRIERS SUR ANDELLE - 27910</option>
                                    <option value="27454" >PERRUEL - 27910</option>
                                    <option value="76497" >PETIT COURONNE - 76650</option>
                                    <option value="76499" >PETIVILLE - 76330</option>
                                    <option value="27455" >PIENCOURT - 27230</option>
                                    <option value="76500" >PIERRECOURT - 76340</option>
                                    <option value="76501" >PIERREFIQUES - 76280</option>
                                    <option value="76502" >PIERREVAL - 76750</option>
                                    <option value="27456" >PINTERVILLE - 27400</option>
                                    <option value="27457" >PISEUX - 27130</option>
                                    <option value="76503" >PISSY POVILLE - 76360</option>
                                    <option value="27458" >PITRES - 27590</option>
                                    <option value="27460" >PLAINVILLE - 27300</option>
                                    <option value="27463" >PLASNES - 27300</option>
                                    <option value="76504" >PLEINE SEVE - 76460</option>
                                    <option value="76505" >POMMEREUX - 76440</option>
                                    <option value="76506" >POMMEREVAL - 76680</option>
                                    <option value="27467" >PONT AUDEMER - 27500</option>
                                    <option value="27468" >PONT AUTHOU - 27290</option>
                                    <option value="27469" >PONT DE L'ARCHE - 27340</option>
                                    <option value="27470" >PONT ST PIERRE - 27360</option>
                                    <option value="76507" >PONTS ET MARAIS - 76260</option>
                                    <option value="27473" >PORT MORT - 27940</option>
                                    <option value="27471" >PORTE JOIE - 27430</option>
                                    <option value="27472" >PORTES - 27190</option>
                                    <option value="27474" >POSES - 27740</option>
                                    <option value="76509" >PREAUX - 76160</option>
                                    <option value="27477" >PRESSAGNY L'ORGUEILLEUX - 27510</option>
                                    <option value="76510" >PRETOT VICQUEMARE - 76560</option>
                                    <option value="76511" >PREUSEVILLE - 76660</option>
                                    <option value="27478" >PREY - 27220</option>
                                    <option value="27479" >PROVEMONT - 27150</option>
                                    <option value="27480" >PUCHAY - 27150</option>
                                    <option value="76512" >PUISENVAL - 76660</option>
                                    <option value="27481" >PULLAY - 27130</option>
                                    <option value="27483" >QUATREMARE - 27400</option>
                                    <option value="27484" >QUESSIGNY - 27220</option>
                                    <option value="76513" >QUEVILLON - 76840</option>
                                    <option value="76514" >QUEVREVILLE LA POTERIE - 76520</option>
                                    <option value="76515" >QUIBERVILLE - 76860</option>
                                    <option value="76516" >QUIEVRECOURT - 76270</option>
                                    <option value="27485" >QUILLEBEUF SUR SEINE - 27680</option>
                                    <option value="76517" >QUINCAMPOIX - 76230</option>
                                    <option value="27486" >QUITTEBEUF - 27110</option>
                                    <option value="27487" >RADEPONT - 27380</option>
                                    <option value="76518" >RAFFETOT - 76210</option>
                                    <option value="76519" >RAINFREVILLE - 76730</option>
                                    <option value="76520" >REALCAMP - 76340</option>
                                    <option value="76521" >REBETS - 76750</option>
                                    <option value="27488" >RENNEVILLE - 27910</option>
                                    <option value="76523" >RETONVAL - 76340</option>
                                    <option value="27489" >REUILLY - 27930</option>
                                    <option value="76524" >REUVILLE - 76560</option>
                                    <option value="76525" >RICARVILLE - 76640</option>
                                    <option value="76526" >RICARVILLE DU VAL - 76510</option>
                                    <option value="76527" >RICHEMONT - 76390</option>
                                    <option value="27490" >RICHEVILLE - 27420</option>
                                    <option value="76528" >RIEUX - 76340</option>
                                    <option value="76529" >RIVILLE - 76540</option>
                                    <option value="76530" >ROBERTOT - 76560</option>
                                    <option value="76531" >ROCQUEFORT - 76640</option>
                                    <option value="76532" >ROCQUEMONT - 76680</option>
                                    <option value="76533" >ROGERVILLE - 76700</option>
                                    <option value="76534" >ROLLEVILLE - 76133</option>
                                    <option value="27491" >ROMAN - 27240</option>
                                    <option value="27492" >ROMILLY LA PUTHENAYE - 27170</option>
                                    <option value="27493" >ROMILLY SUR ANDELLE - 27610</option>
                                    <option value="76535" >RONCHEROLLES EN BRAY - 76440</option>
                                    <option value="76536" >RONCHEROLLES SUR LE VIVIE - 76160</option>
                                    <option value="76537" >RONCHOIS - 76390</option>
                                    <option value="76538" >ROSAY - 76680</option>
                                    <option value="27496" >ROSAY SUR LIEURE - 27790</option>
                                    <option value="76539" >ROUELLES - 76610</option>
                                    <option value="76540" >ROUEN - 76100</option>
                                    <option value="27498" >ROUGE PERRIERS - 27110</option>
                                    <option value="27497" >ROUGEMONTIERS - 27350</option>
                                    <option value="76541" >ROUMARE - 76480</option>
                                    <option value="76542" >ROUTES - 76560</option>
                                    <option value="27500" >ROUTOT - 27350</option>
                                    <option value="76543" >ROUVILLE - 76210</option>
                                    <option value="27501" >ROUVRAY - 27120</option>
                                    <option value="76544" >ROUVRAY CATILLON - 76440</option>
                                    <option value="76545" >ROUXMESNIL BOUTEILLES - 76370</option>
                                    <option value="76546" >ROYVILLE - 76730</option>
                                    <option value="27502" >RUGLES - 27250</option>
                                    <option value="76548" >RY - 76116</option>
                                    <option value="76549" >SAANE ST JUST - 76730</option>
                                    <option value="27504" >SACQUENVILLE - 27930</option>
                                    <option value="76550" >SAHURS - 76113</option>
                                    <option value="76551" >SAINNEVILLE - 76430</option>
                                    <option value="27505" >Saint-Agnan-de-Cernières - 27390</option>
                                    <option value="76554" >Saint-Aignan-sur-Ry - 76116</option>
                                    <option value="27506" >Saint-Amand-des-Hautes-Terres - 27370</option>
                                    <option value="27507" >Saint-Andre-de-l-Eure - 27220</option>
                                    <option value="76555" >Saint-André-sur-Cailly - 76690</option>
                                    <option value="76556" >Saint-Antoine-la-Forêt - 76170</option>
                                    <option value="27508" >Saint-Antonin-de-Sommaire - 27250</option>
                                    <option value="27509" >SAINT-AQUILIN-D-AUGERONS - 27390</option>
                                    <option value="27510" >Saint-Aquilin-de-Pacy - 27120</option>
                                    <option value="76557" >Saint-Arnoult - 76490</option>
                                    <option value="76558" >Saint-Aubin-Celloville - 76520</option>
                                    <option value="27511" >SAINT-AUBIN-D-ECROSVILLE - 27110</option>
                                    <option value="76559" >Saint-Aubin-de-Crétot - 76190</option>
                                    <option value="27512" >Saint-Aubin-de-Scellon - 27230</option>
                                    <option value="27513" >Saint-Aubin-des-Hayes - 27410</option>
                                    <option value="27514" >Saint-Aubin-du-Thenney - 27270</option>
                                    <option value="76560" >Saint-Aubin-Épinay - 76160</option>
                                    <option value="76562" >Saint-Aubin-le-Cauf - 76510</option>
                                    <option value="27515" >Saint-Aubin-le-Guichard - 27410</option>
                                    <option value="27516" >Saint-Aubin-le-Vertueux - 27300</option>
                                    <option value="76561" >Saint-Aubin-lès-Elbeuf - 76410</option>
                                    <option value="76563" >Saint-Aubin-Routot - 76430</option>
                                    <option value="27517" >Saint-Aubin-sur-Gaillon - 27600</option>
                                    <option value="76564" >Saint-Aubin-sur-Mer - 76740</option>
                                    <option value="27518" >Saint-Aubin-sur-Quillebeuf - 27680</option>
                                    <option value="76565" >Saint-Aubin-sur-Scie - 76550</option>
                                    <option value="27520" >Saint-Benoît-des-Ombres - 27450</option>
                                    <option value="27521" >Saint-Christophe-sur-Avre - 27820</option>
                                    <option value="27522" >Saint-Christophe-sur-Condé - 27450</option>
                                    <option value="27523" >SAINT-CLAIR-D-ARCEY - 27300</option>
                                    <option value="76568" >Saint-Clair-sur-les-Monts - 76190</option>
                                    <option value="76570" >Saint-Crespin - 76590</option>
                                    <option value="27527" >Saint-Cyr-de-Salerne - 27800</option>
                                    <option value="27529" >Saint-Cyr-la-Campagne - 27370</option>
                                    <option value="76572" >SAINT-DENIS-D-ACLON - 76860</option>
                                    <option value="27530" >SAINT-DENIS-D-AUGERONS - 27390</option>
                                    <option value="27531" >Saint-Denis-des-Monts - 27520</option>
                                    <option value="27532" >Saint-Denis-du-Béhélan - 27160</option>
                                    <option value="27533" >Saint-Denis-le-Ferment - 27140</option>
                                    <option value="76573" >Saint-Denis-le-Thiboult - 76116</option>
                                    <option value="76574" >Saint-Denis-sur-Scie - 76890</option>
                                    <option value="27534" >Saint-Didier-des-Bois - 27370</option>
                                    <option value="27535" >Saint-Élier - 27190</option>
                                    <option value="27536" >Saint-Éloi-de-Fourques - 27800</option>
                                    <option value="76575" >Saint-Étienne-du-Rouvray - 76800</option>
                                    <option value="27537" >Saint-Étienne-du-Vauvray - 27430</option>
                                    <option value="27538" >SAINT-ETIENNE-L-ALLIER - 27450</option>
                                    <option value="27539" >Saint-Étienne-sous-Bailleul - 27920</option>
                                    <option value="76576" >Saint-Eustache-la-Forêt - 76210</option>
                                    <option value="27541" >Saint-Georges-du-Mesnil - 27560</option>
                                    <option value="27542" >Saint-Georges-du-Vièvre - 27450</option>
                                    <option value="27543" >Saint-Georges-Motel - 27710</option>
                                    <option value="76580" >Saint-Georges-sur-Fontaine - 76690</option>
                                    <option value="76582" >SAINT-GERMAIN-D-ETABLES - 76590</option>
                                    <option value="27544" >Saint-Germain-de-Fresney - 27220</option>
                                    <option value="27545" >Saint-Germain-de-Pasquier - 27370</option>
                                    <option value="27546" >Saint-Germain-des-Angles - 27930</option>
                                    <option value="76581" >Saint-Germain-des-Essourts - 76750</option>
                                    <option value="27547" >Saint-Germain-la-Campagne - 27230</option>
                                    <option value="76583" >Saint-Germain-sous-Cailly - 76690</option>
                                    <option value="27548" >Saint-Germain-sur-Avre - 27320</option>
                                    <option value="76584" >Saint-Germain-sur-Eaulne - 76270</option>
                                    <option value="27549" >Saint-Germain-Village - 27500</option>
                                    <option value="76585" >Saint-Gilles-de-Crétot - 76490</option>
                                    <option value="76586" >Saint-Gilles-de-la-Neuville - 76430</option>
                                    <option value="27550" >Saint-Grégoire-du-Vièvre - 27450</option>
                                    <option value="76588" >Saint-Hellier - 76680</option>
                                    <option value="76589" >Saint-Honoré - 76590</option>
                                    <option value="76590" >SAINT-JACQUES-D-ALIERMONT - 76510</option>
                                    <option value="76591" >Saint-Jacques-sur-Darnétal - 76160</option>
                                    <option value="76592" >Saint-Jean-de-Folleville - 76170</option>
                                    <option value="27551" >Saint-Jean-de-la-Léqueraye - 27560</option>
                                    <option value="76593" >Saint-Jean-de-la-Neuville - 76210</option>
                                    <option value="76594" >Saint-Jean-du-Cardonnay - 76150</option>
                                    <option value="27552" >Saint-Jean-du-Thenney - 27270</option>
                                    <option value="76595" >Saint-Jouin-Bruneval - 76280</option>
                                    <option value="27553" >Saint-Julien-de-la-Liègue - 27600</option>
                                    <option value="76596" >Saint-Laurent-de-Brèvedent - 76700</option>
                                    <option value="27555" >Saint-Laurent-des-Bois - 27220</option>
                                    <option value="27556" >Saint-Laurent-du-Tencement - 27390</option>
                                    <option value="76597" >Saint-Laurent-en-Caux - 76560</option>
                                    <option value="76598" >Saint-Léger-aux-Bois - 76340</option>
                                    <option value="27557" >Saint-Léger-de-Rôtes - 27300</option>
                                    <option value="76599" >Saint-Léger-du-Bourg-Denis - 76160</option>
                                    <option value="27558" >Saint-Léger-du-Gennetey - 27520</option>
                                    <option value="27559" >Saint-Léger-sur-BonnevilLe- - 27210</option>
                                    <option value="76600" >Saint-Léonard - 76400</option>
                                    <option value="27560" >Saint-Luc - 27930</option>
                                    <option value="76601" >Saint-Lucien - 76780</option>
                                    <option value="27561" >Saint-Maclou - 27210</option>
                                    <option value="76602" >Saint-Maclou-de-Folleville - 76890</option>
                                    <option value="76603" >Saint-Maclou-la-Brière - 76110</option>
                                    <option value="27562" >Saint-Marcel - 27950</option>
                                    <option value="76604" >Saint-Mards - 76730</option>
                                    <option value="27563" >Saint-Mards-de-Blacarville - 27500</option>
                                    <option value="27564" >Saint-Mards-de-Fresne - 27230</option>
                                    <option value="76612" >Saint-Martin-au-Bosc - 76340</option>
                                    <option value="76611" >Saint-Martin-aux-Arbres - 76760</option>
                                    <option value="76613" >Saint-Martin-aux-Buneaux - 76540</option>
                                    <option value="76614" >Saint-Martin-de-Boscherville - 76840</option>
                                    <option value="76615" >Saint-Martin-du-Bec - 76133</option>
                                    <option value="76616" >Saint-Martin-du-Manoir - 76290</option>
                                    <option value="27569" >Saint-Martin-du-Tilleul - 27300</option>
                                    <option value="76617" >Saint-Martin-du-Vivier - 76160</option>
                                    <option value="76618" >Saint-Martin-en-Campagne - 76370</option>
                                    <option value="76620" >SAINT-MARTIN-L-HORTIER - 76270</option>
                                    <option value="27570" >Saint-Martin-la-Campagne - 27930</option>
                                    <option value="76619" >Saint-Martin-le-Gaillard - 76260</option>
                                    <option value="76621" >Saint-Martin-Osmonville - 76680</option>
                                    <option value="27571" >Saint-Martin-Saint-Firmin - 27450</option>
                                    <option value="76622" >SAINT-MAURICE-D-ETELAN - 76330</option>
                                    <option value="27572" >Saint-Meslin-du-Bosc - 27370</option>
                                    <option value="76623" >SAINT-MICHEL-D-HALLESCOURT - 76440</option>
                                    <option value="76624" >Saint-Nicolas-d-Aliermont - 76510</option>
                                    <option value="27573" >SAINT-NICOLAS-D-ATTEZ - 27160</option>
                                    <option value="76625" >Saint-Nicolas-de-Bliquetuit - 76940</option>
                                    <option value="76626" >Saint-Nicolas-de-la-Haie - 76490</option>
                                    <option value="76627" >Saint-Nicolas-de-la-Taille - 76170</option>
                                    <option value="27574" >Saint-Nicolas-du-Bosc - 27370</option>
                                    <option value="27575" >SAINT-NICOLAS-DU-BOSC-L-ABBE - 27300</option>
                                    <option value="27578" >SAINT-OUEN-D-ATTEZ - 27160</option>
                                    <option value="27579" >Saint-Ouen-de-Pontcheuil - 27370</option>
                                    <option value="27580" >Saint-Ouen-de-Thouberville - 27310</option>
                                    <option value="27581" >Saint-Ouen-des-Champs - 27680</option>
                                    <option value="76628" >Saint-Ouen-du-Breuil - 76890</option>
                                    <option value="27582" >Saint-Ouen-du-Tilleul - 27670</option>
                                    <option value="76629" >Saint-Ouen-le-Mauger - 76730</option>
                                    <option value="76630" >Saint-Ouen-sous-Bailly - 76630</option>
                                    <option value="27583" >SAINT-PAER - 27140</option>
                                    <option value="76631" >Saint-Paër - 76480</option>
                                    <option value="27584" >Saint-Paul-de-Fourques - 27800</option>
                                    <option value="27585" >Saint-Paul-sur-RisLe- - 27500</option>
                                    <option value="27586" >Saint-Philbert-sur-Boissey - 27520</option>
                                    <option value="27587" >Saint-Philbert-sur-Risle - 27290</option>
                                    <option value="76632" >Saint-Pierre-Bénouville - 76890</option>
                                    <option value="27588" >Saint-Pierre-d-Autils - 27950</option>
                                    <option value="27589" >Saint-Pierre-de-Bailleul - 27920</option>
                                    <option value="27590" >Saint-Pierre-de-Cernières - 27390</option>
                                    <option value="27591" >Saint-Pierre-de-Cormeilles - 27260</option>
                                    <option value="76634" >Saint-Pierre-de-Manneville - 76113</option>
                                    <option value="27592" >Saint-Pierre-de-Salerne - 27800</option>
                                    <option value="76636" >Saint-Pierre-de-Varengeville - 76480</option>
                                    <option value="27593" >Saint-Pierre-des-Fleurs - 27370</option>
                                    <option value="27594" >Saint-Pierre-des-Ifs - 27450</option>
                                    <option value="76635" >Saint-Pierre-des-Jonquières - 76660</option>
                                    <option value="27595" >Saint-Pierre-du-Bosguérard - 27370</option>
                                    <option value="27596" >Saint-Pierre-du-Mesnil - 27330</option>
                                    <option value="27597" >Saint-Pierre-du-Val - 27210</option>
                                    <option value="27598" >Saint-Pierre-du-Vauvray - 27430</option>
                                    <option value="76637" >Saint-Pierre-en-Port - 76540</option>
                                    <option value="76638" >Saint-Pierre-en-Val - 76260</option>
                                    <option value="27599" >Saint-Pierre-la-Garenne - 27600</option>
                                    <option value="76639" >Saint-Pierre-Lavis - 76640</option>
                                    <option value="76641" >Saint-Pierre-le-Vieux - 76740</option>
                                    <option value="76642" >Saint-Pierre-le-Viger - 76740</option>
                                    <option value="76640" >Saint-Pierre-lès-Elbeuf - 76320</option>
                                    <option value="76643" >Saint-Quentin-au-Bosc - 76630</option>
                                    <option value="27600" >Saint-Quentin-des-Isles - 27270</option>
                                    <option value="76644" >Saint-Rémy-Boscrocourt - 76260</option>
                                    <option value="76645" >Saint-Riquier-en-Rivière - 76340</option>
                                    <option value="76646" >Saint-Riquier-ès-Plains - 76460</option>
                                    <option value="76647" >Saint-Romain-de-Colbosc - 76430</option>
                                    <option value="76648" >Saint-Saëns - 76680</option>
                                    <option value="76649" >Saint-Saire - 76270</option>
                                    <option value="27601" >Saint-Samson-de-la-Roque - 27680</option>
                                    <option value="76650" >SAINT-SAUVEUR-D-EMALLEVILLE - 76110</option>
                                    <option value="27602" >Saint-Sébastien-de-Morsent - 27180</option>
                                    <option value="27603" >Saint-Siméon - 27560</option>
                                    <option value="27604" >Saint-Sulpice-de-Grimbouville - 27210</option>
                                    <option value="76651" >Saint-Sylvain - 76460</option>
                                    <option value="27605" >Saint-Sylvestre-de-Cormeilles - 27260</option>
                                    <option value="27606" >Saint-Symphorien - 27500</option>
                                    <option value="27607" >Saint-Thurien - 27680</option>
                                    <option value="76652" >SAINT-VAAST-D-EQUIQUEVILLE - 76510</option>
                                    <option value="76653" >Saint-Vaast-Dieppedalle - 76450</option>
                                    <option value="76654" >Saint-Vaast-du-Val - 76890</option>
                                    <option value="76655" >Saint-Valery-en-Caux - 76460</option>
                                    <option value="27609" >SAINT-VICTOR-D-EPINE - 27800</option>
                                    <option value="27608" >Saint-Victor-de-Chrétienville - 27300</option>
                                    <option value="76656" >SAINT-VICTOR-L-ABBAYE - 76890</option>
                                    <option value="27610" >Saint-Victor-sur-Avre - 27130</option>
                                    <option value="27611" >Saint-Vigor - 27930</option>
                                    <option value="76657" >Saint-Vigor-d-Ymonville - 76430</option>
                                    <option value="76658" >Saint-Vincent-Cramesnil - 76430</option>
                                    <option value="27612" >Saint-Vincent-des-Bois - 27950</option>
                                    <option value="27613" >Saint-Vincent-du-Boulay - 27230</option>
                                    <option value="76659" >Saint-Wandrille-Rançon - 76490</option>
                                    <option value="27614" >SANCOURT - 27150</option>
                                    <option value="76660" >SANDOUVILLE - 76430</option>
                                    <option value="76662" >SASSETOT LE MALGARDE - 76730</option>
                                    <option value="76663" >SASSETOT MAUCONDUIT - 76540</option>
                                    <option value="76664" >SASSEVILLE - 76450</option>
                                    <option value="27615" >SASSEY - 27930</option>
                                    <option value="76665" >SAUCHAY - 76630</option>
                                    <option value="76666" >SAUMONT LA POTERIE - 76440</option>
                                    <option value="76667" >SAUQUEVILLE - 76550</option>
                                    <option value="76668" >SAUSSAY - 76760</option>
                                    <option value="27617" >SAUSSAY LA CAMPAGNE - 27150</option>
                                    <option value="76669" >SAUSSEUZEMARE EN CAU - 76110</option>
                                    <option value="27618" >SEBECOURT - 27190</option>
                                    <option value="27620" >SELLES - 27500</option>
                                    <option value="76670" >SENNEVILLE SUR FECAMP - 76400</option>
                                    <option value="76671" >SEPT MEULES - 76260</option>
                                    <option value="27621" >SEREZ - 27220</option>
                                    <option value="76672" >SERQUEUX - 76440</option>
                                    <option value="27622" >SERQUIGNY - 27470</option>
                                    <option value="76673" >SERVAVILLE SALMONVILLE - 76116</option>
                                    <option value="76674" >SEVIS - 76850</option>
                                    <option value="76675" >SIERVILLE - 76690</option>
                                    <option value="76676" >SIGY EN BRAY - 76780</option>
                                    <option value="76677" >SMERMESNIL - 76660</option>
                                    <option value="76678" >SOMMERY - 76440</option>
                                    <option value="76679" >SOMMESNIL - 76560</option>
                                    <option value="76680" >SORQUAINVILLE - 76540</option>
                                    <option value="76681" >SOTTEVILLE LES ROUEN - 76300</option>
                                    <option value="76682" >SOTTEVILLE SOUS LE VAL - 76410</option>
                                    <option value="76683" >SOTTEVILLE SUR MER - 76740</option>
                                    <option value="76552" >STE ADRESSE - 76310</option>
                                    <option value="76553" >STE AGATHE D'ALIERMONT - 76660</option>
                                    <option value="76566" >STE AUSTREBERTHE - 76570</option>
                                    <option value="27519" >STE BARBE SUR GAILLON - 27600</option>
                                    <option value="76567" >STE BEUVE EN RIVIERE - 76270</option>
                                    <option value="76569" >STE COLOMBE - 76460</option>
                                    <option value="27524" >STE COLOMBE LA COMMANDERI - 27110</option>
                                    <option value="27525" >STE COLOMBE PRES VERNON - 27950</option>
                                    <option value="27526" >STE CROIX SUR AIZIER - 27500</option>
                                    <option value="76571" >STE CROIX SUR BUCHY - 76750</option>
                                    <option value="76577" >STE FOY - 76590</option>
                                    <option value="76578" >STE GENEVIEVE - 76440</option>
                                    <option value="27540" >STE GENEVIEVE LES GASNY - 27620</option>
                                    <option value="76587" >STE HELENE BONDEVILLE - 76400</option>
                                    <option value="27565" >STE MARGUERITE DE L'AUTEL - 27160</option>
                                    <option value="27566" >STE MARGUERITE EN OUCHE - 27410</option>
                                    <option value="76608" >STE MARGUERITE SUR DUCLAI - 76480</option>
                                    <option value="76607" >STE MARGUERITE SUR FAUVIL - 76640</option>
                                    <option value="76605" >STE MARGUERITE SUR MER - 76119</option>
                                    <option value="76609" >STE MARIE AU BOSC - 76280</option>
                                    <option value="27567" >STE MARIE DE VATIMESNIL - 27150</option>
                                    <option value="76610" >STE MARIE DES CHAMPS - 76190</option>
                                    <option value="27568" >STE MARTHE - 27190</option>
                                    <option value="27576" >STE OPPORTUNE BOSC - 27110</option>
                                    <option value="27577" >STE OPPORTUNE LA MARE - 27680</option>
                                    <option value="27623" >SURTAUVILLE - 27400</option>
                                    <option value="27624" >SURVILLE - 27400</option>
                                    <option value="27625" >SUZAY - 27420</option>
                                    <option value="27693" >SYLVAINS LES MOULINS - 27240</option>
                                    <option value="76684" >TANCARVILLE - 76430</option>
                                    <option value="27626" >THEILLEMENT - 27520</option>
                                    <option value="76685" >THEROULDEVILLE - 76540</option>
                                    <option value="76686" >THEUVILLE AUX MAILLOTS - 76540</option>
                                    <option value="27628" >THEVRAY - 27330</option>
                                    <option value="27629" >THIBERVILLE - 27230</option>
                                    <option value="27630" >THIBOUVILLE - 27800</option>
                                    <option value="76688" >THIERGEVILLE - 76540</option>
                                    <option value="27631" >THIERVILLE - 27290</option>
                                    <option value="76689" >THIETREVILLE - 76540</option>
                                    <option value="76690" >THIL MANNEVILLE - 76730</option>
                                    <option value="76692" >THIOUVILLE - 76450</option>
                                    <option value="27634" >THOMER LA SOGNE - 27240</option>
                                    <option value="27637" >THUIT HEBERT - 27520</option>
                                    <option value="27640" >TILLEUL DAME AGNES - 27170</option>
                                    <option value="27643" >TILLIERES SUR AVRE - 27570</option>
                                    <option value="27644" >TILLY - 27510</option>
                                    <option value="27645" >TOCQUEVILLE - 27500</option>
                                    <option value="76694" >TOCQUEVILLE EN CAUX - 76730</option>
                                    <option value="76695" >TOCQUEVILLE LES MURS - 76110</option>
                                    <option value="76696" >TOCQUEVILLE SUR EU - 76910</option>
                                    <option value="76697" >TORCY LE GRAND - 76590</option>
                                    <option value="76698" >TORCY LE PETIT - 76590</option>
                                    <option value="27647" >TOSNY - 27700</option>
                                    <option value="27648" >TOSTES - 27340</option>
                                    <option value="76700" >TOTES - 76890</option>
                                    <option value="27649" >TOUFFREVILLE - 27440</option>
                                    <option value="76701" >TOUFFREVILLE LA CABLE - 76170</option>
                                    <option value="76702" >TOUFFREVILLE LA CORBELINE - 76190</option>
                                    <option value="76703" >TOUFFREVILLE SUR EU - 76910</option>
                                    <option value="27650" >TOURNEDOS BOIS HUBERT - 27180</option>
                                    <option value="27651" >TOURNEDOS SUR SEINE - 27100</option>
                                    <option value="27652" >TOURNEVILLE - 27930</option>
                                    <option value="27653" >TOURNY - 27510</option>
                                    <option value="27654" >TOURVILLE LA CAMPAGNE - 27370</option>
                                    <option value="76704" >TOURVILLE LA CHAPELLE - 76630</option>
                                    <option value="76705" >TOURVILLE LA RIVIERE - 76410</option>
                                    <option value="76706" >TOURVILLE LES IFS - 76400</option>
                                    <option value="76707" >TOURVILLE SUR ARQUES - 76550</option>
                                    <option value="27655" >TOURVILLE SUR PONT AUDEME - 27500</option>
                                    <option value="76708" >TOUSSAINT - 76400</option>
                                    <option value="27656" >TOUTAINVILLE - 27500</option>
                                    <option value="27657" >TOUVILLE SUR MONTFORT - 27290</option>
                                    <option value="76710" >TREMAUVILLE - 76640</option>
                                    <option value="27662" >TRICQUEVILLE - 27500</option>
                                    <option value="27661" >TRINITE DE THOUBERVILLE - 27310</option>
                                    <option value="76713" >TRIQUERVILLE - 76170</option>
                                    <option value="76715" >TROUVILLE ALLIQUERVILLE - 76210</option>
                                    <option value="27665" >TROUVILLE LA HAULE - 27680</option>
                                    <option value="76716" >TURRETOT - 76280</option>
                                    <option value="76717" >VAL DE LA HAYE - 76380</option>
                                    <option value="27701" >VAL DE REUIL - 27100</option>
                                    <option value="76018" >VAL DE SAANE - 76890</option>
                                    <option value="27667" >VALAILLES - 27300</option>
                                    <option value="27669" >VALLETOT - 27350</option>
                                    <option value="76718" >VALLIQUERVILLE - 76190</option>
                                    <option value="76719" >VALMONT - 76540</option>
                                    <option value="27670" >VANDRIMARE - 27380</option>
                                    <option value="27671" >VANNECROCQ - 27210</option>
                                    <option value="76720" >VARENGEVILLE SUR MER - 76119</option>
                                    <option value="76721" >VARNEVILLE BRETTEVILLE - 76890</option>
                                    <option value="27672" >VASCOEUIL - 27910</option>
                                    <option value="76723" >VASSONVILLE - 76890</option>
                                    <option value="76724" >VATIERVILLE - 76270</option>
                                    <option value="76725" >VATTETOT SOUS BEAUMONT - 76110</option>
                                    <option value="76726" >VATTETOT SUR MER - 76111</option>
                                    <option value="27673" >VATTEVILLE - 27430</option>
                                    <option value="76727" >VATTEVILLE LA RUE - 76940</option>
                                    <option value="27674" >VAUX SUR EURE - 27120</option>
                                    <option value="27675" >VAUX SUR RISLE - 27250</option>
                                    <option value="76729" >VEAUVILLE LES BAONS - 76190</option>
                                    <option value="76730" >VEAUVILLE LES QUELLE - 76560</option>
                                    <option value="27676" >VENABLES - 27940</option>
                                    <option value="76731" >VENESTANVILLE - 76730</option>
                                    <option value="27677" >VENON - 27110</option>
                                    <option value="76733" >VENTES ST REMY - 76680</option>
                                    <option value="76734" >VERGETOT - 76280</option>
                                    <option value="27679" >VERNEUIL SUR AVRE - 27130</option>
                                    <option value="27680" >VERNEUSSES - 27390</option>
                                    <option value="27681" >VERNON - 27200</option>
                                    <option value="27682" >VESLY - 27870</option>
                                    <option value="76735" >VEULES LES ROSES - 76980</option>
                                    <option value="76736" >VEULETTES SUR MER - 76450</option>
                                    <option value="27683" >VEZILLON - 27700</option>
                                    <option value="76737" >VIBEUF - 76760</option>
                                    <option value="76738" >VIEUX MANOIR - 76750</option>
                                    <option value="27686" >VIEUX PORT - 27680</option>
                                    <option value="76739" >VIEUX ROUEN SUR BRESLE - 76390</option>
                                    <option value="27687" >VIEUX VILLEZ - 27600</option>
                                    <option value="76741" >VILLAINVILLE - 76280</option>
                                    <option value="27688" >VILLALET - 27240</option>
                                    <option value="27689" >VILLEGATS - 27120</option>
                                    <option value="76742" >VILLEQUIER - 76490</option>
                                    <option value="76743" >VILLERS ECALLES - 76360</option>
                                    <option value="27690" >VILLERS EN VEXIN - 27420</option>
                                    <option value="76744" >VILLERS SOUS FOUCARMONT - 76340</option>
                                    <option value="27691" >VILLERS SUR LE ROULE - 27940</option>
                                    <option value="27692" >VILLETTES - 27110</option>
                                    <option value="27694" >VILLEZ SOUS BAILLEUL - 27950</option>
                                    <option value="27695" >VILLEZ SUR LE NEUBOURG - 27110</option>
                                    <option value="27696" >VILLIERS EN DESOEUVRE - 27640</option>
                                    <option value="76745" >VILLY LE BAS - 76260</option>
                                    <option value="76746" >VINNEMERVILLE - 76540</option>
                                    <option value="27697" >VIRONVAY - 27400</option>
                                    <option value="76747" >VIRVILLE - 76110</option>
                                    <option value="27698" >VITOT - 27110</option>
                                    <option value="76748" >VITTEFLEUR - 76450</option>
                                    <option value="27699" >VOISCREVILLE - 27520</option>
                                    <option value="27700" >VRAIVILLE - 27370</option>
                                    <option value="76749" >WANCHY CAPVAL - 76660</option>
                                    <option value="76750" >YAINVILLE - 76480</option>
                                    <option value="76751" >YEBLERON - 76640</option>
                                    <option value="76752" >YERVILLE - 76760</option>
                                    <option value="76753" >YMARE - 76520</option>
                                    <option value="76754" >YPORT - 76111</option>
                                    <option value="76900" >YPREVILLE - 76540</option>
                                    <option value="76755" >YPREVILLE BIVILLE - 76540</option>
                                    <option value="76756" >YQUEBEUF - 76690</option>
                                    <option value="76757" >YVECRIQUE - 76560</option>
                                    <option value="76758" >YVETOT - 76190</option>
                                    <option value="76759" >YVILLE SUR SEINE - 76530</option>
                                </select>
                            </div>
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Elargir la recherche à</label>
                                <select class="w100 select" name="distance">
                                    <option value="0" selected>Sélectionnez</option>
                                    <option value="5" >dans un rayon de 5km</option>
                                    <option value="10" >dans un rayon de 10km</option>
                                    <option value="15" >dans un rayon de 15km</option>
                                    <option value="20" >dans un rayon de 20km</option>
                                    <option value="30" >dans un rayon de 30km</option>
                                </select>
                            </div>
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Surface minimum (m²)</label>
                                <input type="number" class="w100 input" name="surfacemin" value="" />
                            </div>
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Nombre de pièce(s)</label>
                                <select class="w100 select" name="piece">
                                    <option value="">Sélectionnez </option>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6 et plus</option>
                                </select>
                            </div>
                            <div class="w50 fl mbs tiny-w100 small-w100">
                                <label>  Budget minimum</label>

                                <input type="number" class="w100 input" name="prixmin" value="" />
                            </div>
                            <div class="w50 fl tiny-w100 small-w100">
                                <label>  Budget maximum</label>
                                <input type="number" class="w100 input" name="prixmax" value="" />
                            </div>
                        </div>


                        <div class="w100 rgpdform">

                            <input style="width:auto; margin-right:20px" required="required" class="form-check-input has-danger form-control-danger" id="rgpd_accept" name="rgpd" value="accept" data-parsley-required-message="Merci de cocher la case d'acceptation." data-parsley-required="true"
                                   data-parsley-multiple="rgpd" data-parsley-id="18" type="checkbox">
                            <span tyle="cursor: copy;">J'accepte les conditions d'utilisation des données (<a >Obligatoire</a>)</span>
                            <!-- J'accepte les conditions d'utilisation des données *-->
                        </div>

                        <div class="form-submit line">


                            <a class="fr btn-validation" onclick="validalertemail('Envoyer')" class="btn btn-validation w100 valideform">Envoyer</a>
                        </div>
                        <input type="text" value="" id="laction" name="laction" class="website" />
                        <input type="text" value="" name="website" class="website" />
                        <input type="hidden" name="loc" value="vente" />

                    </form>

                    <div class="ast-desc"><i>(*)  champ obligatoire</i></div>

                </div>
            </div>
            <div class="w30 small-w100 tiny-w100 fl  bl3 last">
                <div class="agence pbl prs pls pts">
                    <h2 class="txtcenter">Nos coordonnées</h2>
                    <article class=" mts">
                        <address>
                            <figure>
                                <img class="img-circle axe" src="../img/prestavente-logo.jpg" style="background-color:#ccc" /><h3>Agence Immobilier</h3>
                            </figure>
                            <ul class="contact-info">
                                <li> <a href="tel:0232570232"> Tel : 02 32 57 02 32</a></li>
                                <li>
                                    <address>
                                        50 Grande Rue<br>
                                        27310 Bourg-Achard
                                    </address>
                                </li>
                            </ul>
                            <a class="btn-contact" href="contact.php">Nous contacter</a>
                        </address>
                    </article>

                </div>
            </div>
        </div>

    </div>
    <div class="  footer line">

        <div class="ligne41 line test footer line">
            <div class="coordonnees line  first">
                <div class="horaires">
                    <ul>
                        <li>
                            <h5>Nos horaires d'ouverture:</h5>
                        </li>
                        <li>
                            <p>Du lundi au vendredi: 10h - 12h / 14h - 18h30</p>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <p>le samedi: 10h - 12h / 14h30 - 17h</p>
                        </li>
                    </ul>



                </div>

                <hr>

                <div class="menu-footer">
                    <a href="#" rel="nofollow">
                        Mentions légales & Nos honoraires    </a>
                </div>

                <div class="credits">
                    <img src="images/credits/ccc/une.png" alt="" /><img src="images/credits/ccc/realisation.png" alt="" /><img src="images/credits/ccc/logo-csi.png" alt="" /></div>
            </div>
            <div class=" footer-credits line last ">
            </div>
        </div>

    </div>
</div>



<script src="../js/main.js"></script>




<script src="../js/app.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function() {
        jQuery(".popup").click(function() {
            jQuery.magnificPopup.open({
                items: {
                    src: $(this).data('url'),
                    type: 'iframe'
                }
            });
        });
    });
</script>







<!-- Piwik2 -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "#";
        _paq.push(['setTrackerUrl', u + 'piwik2.php']);
        _paq.push(['setSiteId', '374']);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.async = true;
        g.defer = true;
        g.src = u + 'piwik2.php';
        s.parentNode.insertBefore(g, s);
    })();
</script>
<!-- Fin Piwik2 -->


<!-- No piwik 1-->
<center>
</center>


</body>

</html>