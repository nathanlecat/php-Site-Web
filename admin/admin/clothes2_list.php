<?php

include("includes/db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
    $id=$_GET['id'];

    mysqli_query($con,"delete from message where id='$id'")or die("query is incorrect...");
}

///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
    $page1=0;
}
else
{
    $page1=($page*10)-10;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/material-dashboard.css" rel="stylesheet">
    <link href="assets/css/k.css" rel="stylesheet">
    <script src="style/js/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php");?>
<div class="container-fluid main-container">
    <?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
        <div class="panel-heading" style="background-color:#c4e17f">
            <h1>Le message selectionné à etait supprimé !<?php echo $page;?> </h1><a class=' btn btn-primary' href='message_list.php'>Retour messageList</a></div>
        <br>


<?php include("include/js.php");?>
</body>
</html>