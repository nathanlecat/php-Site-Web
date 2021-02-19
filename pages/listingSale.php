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
    <div class="  mw1140p center contenu listingv1 mbs mts">
        <div class="ligne45 line teste">
            <div class="w20  small-w100 tiny-w100 fl frist">
                <div class="search-widget">

                    

                </div>
            </div>
            <div class=" w20 pag1 ">
                <div class="account-page">


                </div>
            </div>
            <div class=" w40  pag2 ">
                <section class="nav-pagination">
                    <div class="pagination">
                        <a rel="nofollow" class="current" onclick="document.getElementById('p').value='1';document.forms['moteur'].submit();"><span>1</span></a><a rel="nofollow" class="" onclick="document.getElementById('p').value='2';document.forms['moteur'].submit();"><span>2</span></a>
                        <a rel="nofollow" class="" onclick="document.getElementById('p').value='3';document.forms['moteur'].submit();"><span>3</span></a><span class="ptp"> ... </span><a rel="nofollow" class="" onclick="document.getElementById('p').value='4';document.forms['moteur'].submit();"><span>4</span></a>
                        <a rel="nofollow" class="navnext" onclick="document.getElementById('p').value='2';document.forms['moteur'].submit();">
                            <span class="btn-next hiddenxs">></span>
                            <span class="btn-next hiddenlg ">>></span>

                        </a>
                    </div>
                </section>







            </div>
            <div class=" w20 pag3 ">

                <select class="select tri" onchange="tri(this);" action="#">
                    <option selected="" disabled="">Trier par ...</option>
                    <option value="prix asc"  >Prix</option>
                    <option value="piece asc"  >Pièces</option>
                    <option value="surface desc"  >Surface</option>
                    <option value="idhabit desc"  >plus récent</option>

                </select>


            </div>

<?php
$db = new mysqli("localhost", "root", "", "onlineshop");
$array = [];

if ($result = $db->query("SELECT * FROM products where product_brand=3 ORDER BY product_id DESC")){
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

    <div class="centre bloc__listing ">
                    <div class="row produit_listing " id="art_20486362">
                        <div class="w30 img-content">
                            <a href="" class="figure">

                                <div class="zonebien">
                                    <div class="blocimg">

                                        <div class="bandeau">Vendus</div>
                                        <a class="featured-img" href="homePage.php?product_id=<?php echo $value['product_id']; ?>">
                                            <div class="survol">
                                                <i class="icon-search-find"></i>
                                            </div>
                                            <img alt= "<?php $value['product_image'] ?>"  src="../product_images/<?php echo $value['product_image']; ?>">
                                        </a>
                                    </div>

                                    <div class="blocdesc">
                                        <div class="label1"><?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²</div>
                                        <div class="label2"><span style="color:red">VENDU</span></div>
                                    </div>
                                </div>
                        </div>


                        <div class="w70 list-content" data-url="">
                            <div class="txtleft fr reference tiny-hidden"><?php $value['product_keywords'] ?></div>
                            <div class="line">
                                <h2 class="title fl"></h2>
                                <h3 class="prix fr"><?php echo $value["product_price"]; ?>&euro;</h3>
                            </div>


                            <h4><span class="affpiece"><?php echo $value["product_piece"]; ?> pièces</span> - <?php echo $value["product_size"]; ?>m²</h4>
                            <p class="description"><?php echo $value['product_desc']; ?></p>




                            <div class="line mtm nav-list-card">
                                <div class="txtright fr small-hidden tiny-hidden ">
                                    <a title="Demande d informations" class="btn btn-secondaire" rel="nofollow" href="contact.php"><i class="fa icon-letter-mail"></i></a>
                                    <a class="btn btn-validation " href="homePage.php?product_id=<?php echo $value['product_id']; ?>"
                                    >Plus de détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alertemail mbs txtcenter ">
                        <div class="alertelisting tiny-hidden">

                        </div>

                    </div>

                </div>


<?php }


?>










            <div class=" w80 small-w100 tiny-w100 fr fl last ">
                <section class="nav-pagination">
                    <div class="pagination">
                        <a rel="nofollow" class="current" onclick="document.getElementById('p').value='1';document.forms['moteur'].submit();"><span>1</span></a><a rel="nofollow" class="" onclick="document.getElementById('p').value='2';document.forms['moteur'].submit();"><span>2</span></a>
                        <a rel="nofollow" class="" onclick="document.getElementById('p').value='3';document.forms['moteur'].submit();"><span>3</span></a><span class="ptp"> ... </span><a rel="nofollow" class="" onclick="document.getElementById('p').value='4';document.forms['moteur'].submit();"><span>4</span></a>
                        <a rel="nofollow" class="navnext" onclick="document.getElementById('p').value='2';document.forms['moteur'].submit();">
                            <span class="btn-next hiddenxs">></span>
                            <span class="btn-next hiddenlg ">>></span>

                        </a>
                    </div>
                </section>







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





<script src="js/main.js"></script>

<script src="/module/moteur/ajax.js"></script>




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