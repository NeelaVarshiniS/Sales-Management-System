<?php

session_start();

include("includes/db.php");
include("dbconnection.php");


?>

<?php


$get_products = "select * from product";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "select * from custind";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "select * from repdetails";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_pending_orders = "select * from order_details";
$run_pending_orders = mysqli_query($con,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<style>
input { font-size: 18px; }
div { font-size: 17px; }

</style>

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['sale7'])){

include("dash.php");

}

if(isset($_GET['view_products'])){

include("view_product.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['add_product'])){

include("addproduct.php");

}

if(isset($_GET['update_stock'])){

include("viewstock.php");

}


if(isset($_GET['view_customers'])){

include("viewcust.php");

}

if(isset($_GET['insert_customer'])){

include("addcust.php");

}


if(isset($_GET['view_orders'])){

include("vieworder.php");

}

if(isset($_GET['insert_orders'])){

include("order.php");

}



if(isset($_GET['set_target'])){

include("settarget.php");

}

if(isset($_GET['view_target'])){

include("viewtarget.php");

}

if(isset($_GET['insert_salesEngineer'])){

include("addsaleengg.php");

}

if(isset($_GET['view_salesEngineer'])){

include("viewengg.php");

}

if(isset($_GET['product_demand'])){

include("product_demand.php");

}


if(isset($_GET['sales'])){

include("sales.php");

}

if(isset($_GET['new_customer'])){

include("cust.php");

}

if(isset($_GET['customer_enquiry'])){

include("custenq.php");

}

if(isset($_GET['sales_rep'])){

include("salese.php");

}

if(isset($_GET['top_customer'])){

include("topcust.php");

}

if(isset($_GET['opp'])){

include("opp.php");

}

?>

</div><!-- container-fluid Ends -->

<?php

$i = 0;

$get_order = "select * from product";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$id = $row_order['id'];

$proname = $row_order['proname'];

$c_id = $row_order['cost'];

$avail = $row_order['avail'];

$reorder = $row_order['reorder'];

if($reorder > $avail)
{?>
<marquee behavior="scroll" direction="left">
<font color="black" size="5px"><?php echo $proname;?> stock is low.. please refill it!!!!</font> </marquee>	

<?php
}

$i++;

} ?>

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
