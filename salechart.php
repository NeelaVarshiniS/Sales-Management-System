<? php
echo "das";
$user="root";
$pwd="";                              
$db="aa_sales";
$conn =new mysql('localhost',$user,$pwd,$db) or die("unable to connect");
echo "s";
$query="SELECT id,quater_sales_1,quater_sales_2 
        FROM sales_overview";
echo "success";     
?>