<?php
session_start();
include("../db.php");


if(isset($_POST['Submit2']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $description=$_POST['description'];

        mysqli_query($con,"insert into message (nom, prenom, email, telephone, description) values ('$nom', '$prenom', '$email', '$telephone', '$description')") or die ("query incorrect");

        header("location: contact.php?success=1");


    mysqli_close($con);
}
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
    <div class="  mw1280p center mbs mts contenu">
        <div class="ligne41 line test ">
            <div class="w60 small-w100 tiny-w100 fl coleft first">





                <div class="heading">
                    <h2 class="tt-contact">Nous contacter</h2>
                    <div class="texte-contact"> </div>
                </div>

                <form method="post" action="" id="formcontact" enctype="multipart/form-data">

                    <div class="w100 ">
                        <div class="mbs">
                            <label> Nom <span class="ast">*</span></label>

                            <input type="text" class=" w100 input " required="required" name="nom" />
                        </div>
                    </div>
                    <div class="w100 ">
                        <div class="mbs">
                            <label> Prénom <span class="ast">*</span></label>

                            <input type="text" class=" w100 input " required="required" name="prenom" />
                        </div>
                    </div>
                    <div class="w100 ">
                        <div class="mbs">
                            <label> Email <span class="ast">*</span></label>

                            <input type="email" class=" w100 input " required="required" name="email" />
                        </div>
                    </div>
                    <div class="w100 ">
                        <div class="mbs">
                            <label> Téléphone <span class="ast">*</span></label>

                            <input type="tel" class=" w100 input " required="required" name="telephone" />
                        </div>
                    </div>
                    <div class="mbs">
                        <label> Votre demande</label>
                        <div class="w100 ">
                            <textarea class=" w100 textarea " name="description"></textarea>
                        </div>
                    </div>


                    <input type="text" name="Submit2" class="website" value="Envoyer" />
                    <input type="text" name="website" class="website" />










                    <div class="w100 rgpdform">

                        <input style="width:auto; margin-right:20px" required="required" class="form-check-input has-danger form-control-danger" id="rgpd_accept" name="rgpd" value="accept" data-parsley-required-message="Merci de cocher la case d'acceptation." data-parsley-required="true"
                               data-parsley-multiple="rgpd" data-parsley-id="18" type="checkbox">
                        <span tyle="cursor: copy;">J'accepte les conditions d'utilisation des données (<a>Obligatoire</a>)</span>
                        <!-- J'accepte les conditions d'utilisation des données *-->
                    </div>













                    <div class="">
                        <div class="form-submit line">
                            <!--<a class="btn btn-validation w100 valideform"  >
         Envoyer la demande         </a>-->


                            <button type="submit" class="btn btn-validation">Envoyer la demande</button>

                        </div>


                    </div>
                    <div class="ast-desc"><i>(*)  champ obligatoire</i></div>
                </form>

            </div>
            <div class="w40 small-w100  tiny-w100 fl  last ">
                <div class="agence pbl prs pls pts">
                    <article class="line">

                        <div class="w50 fl">
                            <figure>
                                <img class="img-circle axe" src="../img/prestavente-logo.jpg" style="background-color:#ccc" alt="" title="" />
                            </figure>
                        </div>
                        <div class="w50 fl pls">
                            <h3>Agence Immobilier</h3>
                            <ul class="contact-info">
                                <li><a href="tel:0033232570232"> Tél : 02 32 57 02 32</a></li>
                                <li><address>50 Grande Rue<br>
                                        27310 Bourg-Achard</address></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <hr>
                <h2>Où nous trouver ?</h2>
                <article class="carte">

                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                    <script>
                        var map;

                        google.maps.event.addDomListener(window, 'load', initialize);

                        function initialize() {

                            geocoder = new google.maps.Geocoder();

                            geocoder.geocode({
                                'address': "27310 Bourg-Achard"
                            }, function(results, status) {
                                if (status == google.maps.GeocoderStatus.OK) {

                                    lat = results[0].geometry.location.lat();
                                    long = results[0].geometry.location.lng();

                                    directionsDisplay = new google.maps.DirectionsRenderer();
                                    var mapOptions = {
                                        zoom: 11,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        center: new google.maps.LatLng(lat, long),
                                        scrollwheel: false,

                                    };
                                    var map = new google.maps.Map(document.getElementById('map'),
                                        mapOptions);
                                    directionsDisplay.setMap(map);
                                    directionsDisplay.setPanel(document.getElementById('directions-panel'));

                                    var latLng = new google.maps.LatLng(lat, long);

                                    var marker2 = new google.maps.Marker({
                                        position: latLng,
                                        map: map,
                                        title: ""
                                    });


                                }
                            });



                        }
                    </script>
                    <div id="map" style="height:300px"></div>
                </article>
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
                    <img src="img/credits/ccc/une.png" alt="" /><img src="images/credits/ccc/realisation.png" alt="" /><img src="images/credits/ccc/logo-csi.png" alt="" /></div>
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
        var u = "";
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