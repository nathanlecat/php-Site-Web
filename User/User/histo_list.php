<?php
session_start();
include("../../db.php");
error_reporting(0);

include "sidenav.php";
include "topheader.php";
?>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">


            <div class="col-md-14">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title"> Historique List: 8 dernieres consultations</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive ps">
                            <table class="table tablesorter " id="page1">
                                <thead class=" text-primary">
                                <tr><th>Image</th><th>id</th><th>Titre</th><th>Catégorie</th><th>
                                        <a class=" btn btn-primary" href="add_products.php">Add New</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $result=mysqli_query($con,"select product_image, product_id, product_title, product_cat from products Limit 8")or die ("query 1 incorrect.....");

                                while(list($image,$id,$title,$cat )=mysqli_fetch_array($result))
                                {
                                    echo "
                                    <tr>
                                        <td><img src='../../product_images/$image' style='width:50px; height:50px; border:groove #000'></td>
                                        <td>$id</td>
                                        <td>$title</td>
                                        <td>$cat</td>
                                        <td>
                                        <a class=' btn btn-warning' href='../../pages/homePage.php?product_id=$id'>Voir</a>
                                        </td>
                                    </tr>";
                                }

                                ?>
                                </tbody>
                            </table>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php
                        //counting paging

                        $paging=mysqli_query($con,"select id,title, email,description from message");
                        $count=mysqli_num_rows($paging);

                        $a=$count/10;
                        $a=ceil($a);

                        for($b=1; $b<=$a;$b++)
                        {
                            ?>
                            <li class="page-item"><a class="page-link" href="message_list.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                            <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>



            </div>


        </div>
    </div>
<?php
include "footer.php";
?>