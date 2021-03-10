<html>
<head>
<title> largest of three </title>
</head>
<body>
 <?php
 $a = 2;
 $b = 7;
 $c = 9;
 if($a > $b)
 {
 if($a > $c)
 echo "largest number a = $a";
 else
 echo "largest number c = $c";
 }
 else
 {
 if($c > $b)
 echo "largest number c = $c";
else
 echo "largest number b = $b";
 }
 ?>
</body>
</html>