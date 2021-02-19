<body id="body" class="conf- p-accueil p2-  p3-  lan-fr theme-flora">
&#65279;
<script type="text/javascript" async="" defer="" src="#"></script>
<script>
    function ajaxRGPG() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/bandeauRGPDajax.php?' + 1596716788);
        xhr.onload = function() {
            if (xhr.status === 200) {

            } else {

            }
        };
        xhr.send();
        document.getElementById("rgpddiv").style.display = "none";
    }
</script>




<div class="  mw1140p center home">
    <article class="line teste">
        <article class="w66 bloc2 first">


            <div class="bien long line">
                <div class="widget-titre  "> </div>

                <div class="click">




                    <div class="zonebien">
                        <div class="blocimg">

                            <div class="bandeau">Coup<span class="fine">de</span><span class="">coeur</span></div>
                            <a class="featured-img" href="#">
                                <div class="survol">
                                    <i class="icon-search-find"></i>
                                </div>
                                <img src="http://www.presta-vente.com/photos/10340/10340279_1.jpg" alt="vente maison LA BOUILLE 0 €">
                            </a>
                        </div>

                        <div class="blocdesc">
                            <div class="label1">LA BOUILLE 147 m²</div>
                            <div class="label2">LA BOUILLE</div>
                            <div class="label3">A SAISIR, A 10 MINUTES DE LA BOUILLE ET ACCES A 13 MAISON BRULEE ! GRAND PAVILLON DE CARACTERE EN L SUR 2570 M² COMPRENANT : - SOUS-SOL...</div>
                            <div class="label4"><span style="color:red">VENDU</span></div>
                        </div>
                    </div>
                </div>


            </div>
        </article>

        <?php
        $db = new mysqli("localhost", "root", "", "onlineshop");
        $array = [];

        if ($result = $db->query("SELECT * FROM products ORDER BY product_id DESC LIMIT 1")){
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

        <article class="w33 bloc1">


            <div class="bien court">
                <div class="widget-titre  "> </div>

                <div class="click">




                    <div class="zonebien">
                        <div class="blocimg">

                            <div class="bandeau">Nouveauté</div>
                            <a class="featured-img" href="pages/homePage.php?product_id=<?php echo $value['product_id']; ?>">
                                <div class="survol">
                                    <i class="icon-search-find"></i>
                                </div>
                                <img alt= "<?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²"  src="product_images/<?php echo $value['product_image']; ?>"
                            </a>
                        </div>

                        <div class="blocdesc">
                            <div class="label1"><?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²</div>
                            <div class="label2"><?php echo $value['product_price']; ?></div>
                            <div class="label3"><?php echo $value['product_ville']; ?></div>
                        </div>
                    </div>
                </div>


            </div>
        </article>
        <?php } ?>

        <article class="w33 bloc3">
            <div class="widget-immo line">

                    <img class="widgimg" src="img/picto_estimation.png" alt="alerte-email" title="alerte-email">
                    <div class="text-widget">
                        <div class="title-widg">Estimation<span> Gratuite</span></div>
                        <p>Estimation gratuite de votre bien si projet de vente</p>
                    </div>
                </a>
            </div>
            <br>
            <div class="widget-immo line">

                <img alt="outils" class="widgimg" src="img/picto_remboursement.png">
                <div class="text-widget">
                    <p> Dans le cas d'un mandat, nous vous offrons le remboursement des diagnostics techniques en cas de vente par "PRESTA VENTE", le jour de la signature de l'acte authentique</p>
                </div>
            </div>
            <br>
            <div class="widget-immo line">
                <a href="pages/alert.php">
                    <img class="widgimg" src="img/picto_alertemail.png" alt="estimation" title="estimation">
                    <div class="text-widget">
                        <div class="title-widg">Alerte<span> Email</span></div>
                        <p>Créez gratuitement votre alerte email et soyez le premier à recevoir nos offres</p>
                    </div>
                </a>
            </div>
        </article>

        <?php
        $db = new mysqli("localhost", "root", "", "onlineshop");
        $array = [];

        if ($result = $db->query("SELECT * FROM products WHERE product_brand=1 ORDER BY product_id DESC LIMIT 2")){

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
        <article class="w33 bloc1">


            <div class="bien court">
                <div class="widget-titre  "> </div>

                <div class="click">




                    <div class="zonebien">
                        <div class="blocimg">

                            <div class="bandeau">les ventes</div>
                            <a class="featured-img" href="pages/homePage.php?product_id=<?php echo $value['product_id']; ?>">
                                <div class="survol">
                                    <i class="icon-search-find"></i>
                                </div>
                                <img alt= "<?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²"  src="product_images/<?php echo $value['product_image']; ?>"
                            </a>
                        </div>

                        <div class="blocdesc">
                            <div class="label1"><?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²</div>
                            <div class="label2"><span style="color:red">A VENDRE</span></div>
                            <div class="label3"><?php echo $value['product_ville']; ?></div>
                        </div>
                    </div>
                </div>


            </div>
        </article>
        <?php
        }
        ?>



        <?php
        $db = new mysqli("localhost", "root", "", "onlineshop");
        $array = [];

        if ($result = $db->query("SELECT * FROM products where product_brand=3 ORDER BY product_id DESC LIMIT 2")){
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
        <article class="w33 bloc1">


            <div class="bien court">
                <div class="widget-titre  "> </div>

                <div class="click">




                    <div class="zonebien">
                        <div class="blocimg">

                            <div class="bandeau">Vendus</div>
                            <a class="featured-img" href="pages/homePage.php?product_id=<?php echo $value['product_id']; ?>">
                                <div class="survol">
                                    <i class="icon-search-find"></i>
                                </div>
                                <img alt= "<?php $value['product_image'] ?>"  src="product_images/<?php echo $value['product_image']; ?>">
                            </a>
                        </div>

                        <div class="blocdesc">
                            <div class="label1"><?php echo $value['product_title']; ?> / <?php echo $value['product_size']; ?>m²</div>
                            <div class="label2"><span style="color:red">VENDU</span></div>
                            <div class="label3"><?php echo $value['product_ville']; ?></div>
                        </div>
                    </div>
                </div>


            </div>
        </article>

        <?php } ?>

        <article class="w33 bloc3 last">
            <div class="widget-home line">
                <img class="widgimg" src="img/picto_adresse.png" alt="adresse" title="adresse">
                <div class="text-widget">
                    <div class="title-widg"><span>Notre</span> Agence </div>
                    <address>50 Grande Rue<br>
                        27310 Bourg-Achard<br>
                        Tel: 02 32 57 02 32</address>
                </div>
            </div>
            <div class="widget-home line">
                <a href="pages/contact.php">
                    <img class="widgimg" src="img/picto_enveloppe.png" alt="contact" title="contact">
                    <div class="text-widget">
                        <div class="title-widg">Contactez-<span>Nous</span> </div>
                        Nous sommes à votre écoute pour répondre à vos questions
                    </div>
                </a>
            </div>
            <div class="widget-home line">

                <img alt="outils" class="widgimg" src="img/picto_calculatrice.png">
                <div class="text-widget">
                    <div class="title-widg">Nos <span>Outils</span></div>
                    <p>Simulateur financier
                        <br>(<a data-url="simulateur_fr/calcul_mensualites/"  class="popup" rel="nofollow">Mensualité</a>, <a data-url="simulateur_fr/frais_notaire/"  class="popup" rel="nofollow">Frais de notaire</a>)</p>
                </div>
            </div>
        </article>
    </article>

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
                <a  rel="nofollow">
                    Mentions légales &amp; Nos honoraires    </a>
            </div>

            <div class="credits">
                <a href="http://www.lesclesdumidi.com/" target="_blank"><img src="img/credits/ccc/une.png" alt=""></a>
                <a href="https://www.consortium-immobilier.fr/" target="_blank"><img src="img/credits/ccc/realisation.png" alt=""></a>
                <a href="http://www.creation-site-immobilier.net/" target="_blank"><img src="img/credits/ccc/logo-csi.png" alt=""></a>
            </div>
        </div>
        <div class=" footer-credits line last ">
        </div>
    </div>

</div>
</div>



<script src="js/main.js"></script>
<script src="module/ajax.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
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
</body>