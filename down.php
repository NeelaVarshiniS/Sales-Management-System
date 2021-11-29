<?php
require('dbconnection.php');
require('vendor/autoload.php');
$from=$_POST['from'];
$to=$_POST['to'];
$res=mysqli_query($con,"select * from custind where date='$from' OR date='$to' ");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>Name</td><td>Email</td></tr><td>MobileNumber</td></tr><td>City</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['custname'].'</td><td>'.$row['custemail'].'</td><td>'.$row['custmob'].'</td></tr><td>'.$row['custmail'].'</td></tr></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');

?>