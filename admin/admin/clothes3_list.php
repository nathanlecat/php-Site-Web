<?php

include("includes/db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit')
{
    $product_id=$_GET['product_id'];

    /*this is edit query*/
    mysqli_query($con,"update products  SET product_brand='3' where product_id='$product_id'")or die("query is incorrect...");
    header("location: sumit2_form.php?success=2");
}

