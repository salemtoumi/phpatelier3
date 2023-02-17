<html>
<body>

<?php 
$n=$_POST["nombre"];
$s=0;

for($i=0;$i<=$n;$i++)
    $s+=$i;

echo "Sigma = ".$s; 
?>
</body>
</html>