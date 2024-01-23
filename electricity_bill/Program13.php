<html>
<head>
<title>electricity biil</title>
</head>
<body>
<form method="POST">
<table align="center">
<tr>
<td>Consumer name</td>
<td>:<input type="text" name="name"></td>
</tr>
<tr>
<td>Consumer number</td>
<td>:<input type="text" name="cnum"></td>
</tr>
<tr>
<td>Units Consumed</td>
<td>:<input type="number" name="units"></td>
</tr>
<tr>
</tr>
<tr>
<td><input type="submit"></td>
</tr>
</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
extract($_POST);
function calculate_bill($units){
$unit_first=4;
$unit_second=5;
$unit_third=6;
$bill=0;
if($units<=100){
$bill=$units*$unit_first;
}
elseif($units>100 && $units<=200){
$temp=100*$unit_first;
$rem_unit=$units-100;
$bill=$temp+($rem_unit*$unit_second);
}
else{
$temp=(100*4)+(100*$unit_second)+(100*$unit_first);
$rem_unit=$units-200;
$bill=$temp+($rem_unit*$unit_third);
}
return number_format((float)$bill,2,'.','');
}
echo "<h3>KSEB</h3>";
echo "Consumer name:".$name."<br>";
echo "Consumer number:".$cnum."<br>";
echo "Units consumed:".$units."<br>";
$result=calculate_bill($units);
echo "Total Rs ".$result."<br>";
}
?>
</body>
</html>
