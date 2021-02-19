<?php

include("../db.php");
include "../User/server/server.php";


$product_id=$_GET['product_id'];
$result=mysqli_query($con,"select * from products where product_id='$product_id' LIMIT 1")
or die("query is incorrect...");

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

    <meta property="og:title" content="Acheter maison LA BOUILLE  147 m² 5 pièces">
    <meta property="og:type" content="product">
    <meta property="og:url" content="http://www.presta-vente.com/vente-maison-la-bouille-10340279.html">
    <meta property="og:image" content="https://medias.consortium-immobilier.fr/photos_immo_formats/902_678/10340/10340279_1.jpg">
    <meta property="og:site_name" content="Agence immobilière Presta'Vente">
    <meta property="og:image:width" content="902">
    <meta property="og:image:height" content="678">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="nositelinkssearchbox">
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
                <?php
                $db = new mysqli("localhost", "root", "", "onlineshop");
                $array = [];

                if ($result = $db->query("SELECT * FROM products where product_id='$product_id'")){
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            array_push($array, $row);
                        }
                    }
                }


                ?>

                <?php


                foreach ($array as $value){

                ?>
                <?php

                ?>
                <div class="   mw1140p center contenu mbs mts annonce annoncev1">


                    <div class="line ">
                        <div class="titre-flora prs small-hidden tiny-hidden"><span class="type"><?php echo $value['product_title']; ?></span><span
                                class="ville"> <?php echo $value['product_ville']; ?></span> <span class="prixannonce fr"><span style="color:red"></span> </span>
                        </div>

                        <div class="w100 small-w100  tiny-w100 fl  ">


                            <div class="line nav-detail">
                                <div class="line"><a target="_self" onclick="history.back()"
                                                     class="fl btn-md tiny-w100"><i
                                            class="fa icon-arrow-circle-left"></i>Retour</a></div>
                                <h1 class="titre desk-hidden ">
                                    <div class="ville"> <?php echo $value['product_ville']; ?></div>
                                    <div class="type"><?php echo $value['product_cat']; ?></div>
                                    <div class="prixannonce"><span style="color:red"></span></div>
                                </h1>
                            </div>
                        </div>

                        <div class="w70 small-w100  tiny-w100 fl ">
                            &#65279;<div class="slidebx relative figure">


                                <div class="bx-wrapper" style="max-width: 100%;">
                                    <div class="bx-viewport"
                                         style="width: 100%; overflow: hidden; position: relative; height: 229px;">
                                        <div class="bxslider bxsliderdetail " data-nbp="10"
                                             style="width: auto; position: relative;">

                                            <img data-rel="lightcase:myCollection"
                                                 src="../product_images/<?php echo $value['product_image']; ?>"
                                                 style="float: none; list-style: none; position: absolute; width: 304px; z-index: 0; display: block; opacity: 0.991723;">



                                        </div>
                                    </div>
                                    <div class="bx-controls bx-has-controls-direction">
                                        <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a
                                                class="bx-next" href="">Next</a></div>
                                    </div>
                                </div>

                                <div class="tapis mbs mts  pas " id="bxp">
                                    <div id="bx-pager">


                                        <a href="" data-slide-index="0" class="">
                                            <img alt= "<?php $value['product_image'] ?>"  src="../product_images/<?php echo $value['product_image']; ?>">


                                    </div>

                                </div>
                            </div>

                            <div class="desc-contenu"><h2>Description : </h2><i class=" fa icon-quote-left pas"></i>
                               <?php echo $value['product_desc']; ?>
                            </div>


                        </div>
                        <aside class="w30 small-w100  tiny-w100 fl">
                            <div>


                                <div class="tapis caract-bien line pls">
                                    <!-- <div class="tapis tapis_detail mls pas line"> -->
                                    <div class="titre prs pls desk">
                                    </div>
                                    <table class="table-striped">
                                        <tbody>
                                        <tr>
                                            <td class="i-numero">
                                                <span>Référence</span> <span class="numero">: <?php echo $value['product_keywords']; ?></span>
                                            </td>
                                            <td class="i-surface">
                                                <span>Surface</span> <span class="surface"> : <?php echo $value['product_size']; ?>m²</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="i-piece">
                                                <span>Nbr de chambre</span> <span class="piece"> : <?php echo $value['product_room']; ?></span>
                                            </td>
                                            <td class="i-piece">
                                                <span>Nbr de pièce</span> <span class="piece"> : <?php echo $value['product_piece']; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="i-sbain">
                                                <span>Adresse</span> <span class="sbain">  : <?php echo $value['product_adress']; ?></span>
                                            </td>
                                            <td class="i-chauffage">
                                                <span>Ville</span> <span class="chauffage">  : <?php echo $value['product_ville']; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="i-cuisine">
                                                <span>Code postal</span> <span class="cuisine">  : <?php echo $value['product_code']; ?></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>


                                </div>


                                <?php
                                }

?>



                </div>
                <div class="tapis-contact mts">


                    <div class="heading">
                        <h2 class="tt-contact">Nous contacter</h2>
                        <div class="texte-contact"> </div></div>



                        <input type="text" name="Submit2" class="website" value="Envoyer">
                        <input type="text" name="website" class="website">


                        <div class="">
                            <div class="form-submit line">
                                <!--<a class="btn btn-validation w100 valideform"  >
                     Envoyer         </a>-->


                                <button type="submit" class="btn btn-validation"><a href="contact.php">contactez-nous</a></button>

                            </div>


                        </div>



                </div>
                <div id="div-modal" class="mfp-hide white-popup-block line">
                    <div class="mts">
                        <h2>DPE</h2>
                        <div class="w50 fl tiny-w100">
                            <p>Consommations énergétiques</p>
                            <img src="http://www.presta-vente.com/images/dpe/dpe_noir/CE-F.png" class="dpeIMG">        </div>
                        <div class="w50 fl tiny-w100 ">
                            <p> Émissions de gaz à effet de serre</p>
                            <img src="http://www.presta-vente.com/images/dpe/dpe_noir/GES-C.png" class="dpeIMG">
                        </div>

                    </div>
                </div>
            </aside>
        </div>



        <div class="row-semi mbm nav-bien">

            <div class="w20 tiny-w100 fl">
                <a rel="nofollow" class="popup btn-green btn w100 txt popup-with-form fl" href="#" data-url="/simulateur_fr/frais_notaire/">Frais de notaire</a>
            </div>
            <div class="w20 tiny-w100 fl">
                <a rel="nofollow" class="popup btn-green btn w100 txt popup-with-form fl" href="#" data-url="/simulateur_fr/calcul_mensualites/">Financement</a>
            </div>
            <div class="w20 tiny-w100 fl">
                <a rel="nofollow" href="imprim1.html?annonce=10340279" class=" btn btn-validation w100" target="_blank"><i class="fa icon-file-document"></i> Fiche PDF</a>
            </div>
            <div class="w20 tiny-w100 fl">
                <a rel="nofollow" class="popup-modal btn- w100 txt fl" href="#div-modal">DPE</a>
            </div>

            <div class="dropdown w20 tiny-w100 fl">
                <a href="#" class="btn btn-black w100 "><i class="fa icon-share"></i> </a>
                <ul class="dropdown-menu txtleft">
                    <li><a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.presta-vente.com%2Fvente-maison-la-bouille-10340279.html"><i class="fa icon-facebook"></i> Facebook</a></li>
                    <li><a rel="nofollow" target="_blank" href="https://twitter.com/share?url=http%3A%2F%2Fwww.presta-vente.com%2Fvente-maison-la-bouille-10340279.html&amp;name=vente+Maison+LA+BOUILLE+0+%26euro%3B "><i class="fa icon-twitter"></i> Twitter</a></li>
                    <li><a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fwww.presta-vente.com%2Fvente-maison-la-bouille-10340279.html"><i class="fa icon-google-plus"></i> Google +</a></li>
                    <li><a rel="nofollow" class="popup popup-with-form" href="#" data-url="/plus/envoyer-a-un-ami.php?an=http://www.presta-vente.com//vente-maison-la-bouille-10340279.html"><i class="fa icon-share-square"></i> Envoyer à un ami</a></li>
                </ul>
            </div>
        </div>





        <div class="zonemap">

            <style type="text/css">
                .divmapi{
                    position: relative;
                    width: 1140px;
                    height: 400px;
                    overflow: hidden;
                    cursor: Grab;
                }
                .markmap{
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                    right: -9999px;
                    bottom: -9999px;
                    margin: auto;
                    cursor: Grab;
                }
                .imgapi{
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                    right: -9999px;
                    bottom: -9999px;
                    margin: auto;
                    width:1140px;
                    cursor: Grab;
                }
                .zoomap{
                    position: absolute;
                    left: 10px;
                    top: 32px;
                    height: 60px !important;
                    cursor: Grab;
                }


            </style>
            <script type="text/javascript">
                function affIframe(){
                    document.getElementById("divmapi").innerHTML = "<iframe border=\"none\" style=\" border:0px; width: 1140px; height: 400px; \" src=\"https://www.passimmopro.com/api-map/gmap-iframe.php?mapbox=1&adresse=<?php echo $value['product_code']; ?>+<?php echo $value['product_ville']; ?>\" ></iframe>";
                }
            </script>
            <div class="divmapi" id="divmapi">
                <br>
                <br>
                <br>
                <br>
                <br>
                <center><h2 color="red">Click sur le point de localisation pour voir la maison sur la map</h2></center>
                <br>
                <img onclick="affIframe()" class="imgapi" src="https://www.passimmopro.com/api-map/mapApi/<?php echo $value['product_code']; ?>_/<?php echo $value['product_code']; ?>_<?php echo $value['product_ville']; ?>_1140x400.jpg">
                <img onclick="affIframe()" class="markmap" src="https://www.passimmopro.com/api-map/map-marker-leaflet.png">
                <img onclick="affIframe()" class="zoomap" src="https://www.passimmopro.com/api-map/zoomap.jpg">
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
                    <a href="infos-legales.html" rel="nofollow">
                        Mentions légales &amp; Nos honoraires    </a>
                </div>

                <div class="credits">
                    <img src="images/credits/ccc/une.png" alt=""><img src="images/credits/ccc/realisation.png" alt=""><img src="images/credits/ccc/logo-csi.png" alt=""></div>	</div>
            <div class=" footer-credits line last ">
            </div>
        </div>

    </div>
</div>



<script src="js/main.js"></script>

<script src="/js/jquery.bxslider.min.js"></script>

<script src="/js/jquery.magnific-popup.min.js"></script>

<script src="/js/lightcase.js"></script>




<script src="js/app.js"></script>
<script>
    $(document).ready(function() {
        jQuery( ".popup" ).click(function() {
            jQuery.magnificPopup.open({
                items: {
                    src: $(this).data('url'),
                    type: 'iframe'
                }
            });
        });    $(document).ready(function() {
            if($('.bxslider').data('nbp')>1)
            {
                $('.bxslider').bxSlider({auto: true, mode: 'fade', captions: true, pagerCustom: '#bx-pager',
                    adaptiveHeight: true});

            }
            else
            {
                $('.bxslider').wrapAll('<div class="bx-viewport" />');
                $('.bx-viewport').wrapAll('<div class="bx-wrapper" />');

            }
            $('.tapis_dpe b').click(function(){$('.tapis_dpe img').toggle();});


        });
        jQuery( ".popup" ).click(function() {
            jQuery.magnificPopup.open({
                items: {
                    src: $(this).data('url'),
                    type: 'iframe'
                }
            });
        });


        var sliderun = $(".bxsliderdetail img").lightcase();


        $('#toggle4').click(function() {
            $('.toggle4').slideToggle('fast');
            return false;
        });




        $(document).ready(function() {
            $('.popup-modal').magnificPopup({
                type: 'inline',
                preloader: false,
                focus: '#name',

                // When elemened is focused, some mobile browsers in some cases zoom in
                // It looks not nice, so we disable it:
                callbacks: {
                    beforeOpen: function() {
                        if($(window).width() < 700) {
                            this.st.focus = false;
                        } else {
                            this.st.focus = '#name';
                        }
                    }
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
        var u="http://www.presta-vente.com/";
        _paq.push(['setTrackerUrl', u+'piwik2.php']);
        _paq.push(['setSiteId', '374']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik2.php'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- Fin Piwik2 -->


<!-- No piwik 1--><center>
</center>






</body>