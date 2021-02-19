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
    <div class="  line  mw1140p center mbs mts contenu">
        <div class="ligne41 line test ">
            <div class="w50 small-w100 tiny-w100 fl coleft first">
                <div class="search-widget">

                    <div class="form-search Array clearfix   ">
                        <h2 class="title-search"><i class="fa fa-search"></i> Recherche détaillée</h2>
                        <div class="search-bloc line">
                            <h2>Recherche détaillée </h2>
                            <form method="get">

                                <div class=" m-surfacemin  w49 fl">
                                    <div class="pad"> <label>
                                            Surface					</label>
                                        <div class="group-champs m-surfacemin "> <input type="input" value="" class="w100 input c_surfacemin " name="sizeMin" id="surfacemin" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-surfacemax  w49 fr">
                                    <div class="pad"> <label>
                                            &nbsp;					</label>
                                        <div class="group-champs m-surfacemax "> <input type="input" value="" class="w100 input c_surfacemax " name="sizeMax" id="surfacemax" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-prixmin  w49 fl">
                                    <div class="pad"> <label>
                                            Budget					</label>
                                        <div class="group-champs m-prixmin "> <input type="input" value="" class="w100 input c_prixmin " name="priceMin" id="prixmin" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-prixmax  w49 fr">
                                    <div class="pad"> <label>
                                            &nbsp;					</label>
                                        <div class="group-champs m-prixmax "> <input type="input" value="" class="w100 input c_prixmax " name="priceMax" id="prixmax" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class=" m-numero  w100 ">
                                    <div class="pad"> <label>
                                            Référence					</label>
                                        <div class="group-champs m-numero "> <input type="input" value="" class="w100 input c_numero " name="reference" id="numero" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="p" id="p" value="1" />
                                <input type="hidden" name="tri" id="tri" value="" />
                                <div class="mts txtright">
                                    <div class="pts">
                                        <!--<label class="labelbtn">&nbsp;
            Référence				</label>-->
                                        <br>
                                        <br>
                                        <button class="btn-validation" type="submit" value="Search"> Recherchez</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w50 small-w100 tiny-w100 fl  last ">
                <div class="forajax" data="290968">
                    <h2>Dernières nouveautés </h2>
                    <div class="content-newbien">

<?php
                        $db = new mysqli("localhost", "root", "", "onlineshop");
                        $array = [];

                        if ($result = $db->query("SELECT * FROM products ORDER BY product_id DESC LIMIT 4")){
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
                        <div class="prs mini_pdt hiddenxs bienssnew">
                            <figure style=" position:relative; overflow:hidden">

                                <a href="homePage.php?product_id=<?php echo $value['product_id']; ?>">
                                    <img src="../product_images/<?php echo $value['product_image']; ?>" >
                                </a>
                            </figure>
                            <div class="desc-new">
                                <p class="descnouv"><?php echo $value['product_title']; ?></p>
                                <h5> <?php echo $value['product_ville']; ?><span> <?php echo $value['product_price']; ?>&euro;</span></h5>
                            </div>
                        </div>



                        <?php }


                        ?>



</div>
                </div>

            </div>
        </div>
        <body>
        <?php

            $auto = NULL;
            $reference = isset($_GET['reference']) ? $_GET['reference'] : NULL;
            $query = $reference;

            $sizeMin = isset($_GET['sizeMin']) ? $_GET['sizeMin'] : NULL;
            $sizeMax = isset($_GET['sizeMax']) ? $_GET['sizeMax'] : NULL;

            $priceMin = isset($_GET['priceMin']) ? $_GET['priceMin'] : NULL;
            $priceMax = isset($_GET['priceMax']) ? $_GET['priceMax'] : NULL;

        if($query != NULL){
            $raw_results = mysqli_query($db, "SELECT * FROM products
                    WHERE (`product_keywords` LIKE '%" . $query . "%') ") or die(mysqli_error());
        }
        if($sizeMax != NULL){
            $raw_results = mysqli_query($db, "SELECT * FROM products
            WHERE product_size BETWEEN $sizeMin AND $sizeMax ") or die(mysqli_error());
        }
        if($priceMax != NULL){
            $raw_results = mysqli_query($db, "SELECT * FROM products
            WHERE product_price BETWEEN $priceMin AND $priceMax ") or die(mysqli_error());
        }
        if($query == NULL && $sizeMax == NULL && $priceMax == NULL){
            $raw_results = mysqli_query($db, "SELECT * FROM products ") or die(mysqli_error());
        }
            // * means that it selects all fields, you can also write: `id`, `title`, `text`
            // articles is the name of our table

            // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
            // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
            // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

            if (mysqli_num_rows($raw_results) > 0) { // if one or more rows are returned do following

                while ($results = mysqli_fetch_array($raw_results)) {
                    // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                    echo "
            <div class=\"centre bloc__listing \">
                    <div class=\"row produit_listing \" id=\"art_20486362\">
                        <div class=\"w30 img-content\">
                           <a href=\"homePage.php?product_id=" . $results['product_id'] . "\" class=\"figure\"> 


                                <div class=\"survol-bien\"><i class=\"fa fa-search\"></i>
                                    <div class=\"btn btn-validation \">Plus de détails</div>
                                </div>
                                <img   src='../product_images/" . $results['product_image'] . "'>
                            </a>


                        </div>
                        <div class=\"w70 list-content\" data-url=\"\">
                            <div class=\"txtleft fr reference tiny-hidden\">" . $results['product_keywords'] . "</div>
                            <div class=\"line\">
                                <h2 class=\"title fl\"></h2>
                                <h3 class=\"prix fr\">" . $results['product_price'] . "&euro;</h3>
                            </div>


                            <h4><span class=\"affpiece\">" . $results['product_piece'] . " pièces</span> - " . $results['product_size'] . "m²</h4>
                            <p class=\"description\">" . $results['product_desc'] . "</p>




                            <div class=\"line mtm nav-list-card\">
                                <div class=\"txtright fr small-hidden tiny-hidden \">
                                    <a title=\"Demande d informations\" class=\"btn btn-secondaire\" rel=\"nofollow\" href=\"contact.php\"><i class=\"fa icon-letter-mail\"></i></a>
                                    <a class=\"btn btn-validation \" href=\"homePage.php?product_id=" . $results['product_id'] . "\">Plus de détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"alertemail mbs txtcenter \">
                        <div class=\"alertelisting tiny-hidden\">

                        </div>

                    </div>

                </div>";
                    // posts results gotten from database(title and text) you can also show id ($results['id'])
                }

            } else { // if there is no matching rows do following
                echo "Aucun résultat de votre recherche ";
            }

        ?>

        </body>

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
                    <a href="" rel="nofollow">
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

<script src="../js/ajax.js"></script>




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