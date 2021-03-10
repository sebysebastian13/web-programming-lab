<?php
$con=mysqli_connect("localhost","20mca050","2748","20mca050");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student_name where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>
