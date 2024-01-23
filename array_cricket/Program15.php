<?php
$cricketers=array();
$cricketers=array
("a"=>"Virat Kohli",
"b"=>"Rohit Sharma",
"c"=>"Ms Dhoni",
"d"=>"Sachin Tendulkar",
"e"=>"Yuvraj Singh",
"f"=>"Ravindra Jadeja");
?>
<html>
<head>
<title>array cricket</title>
</head>
<body>
<center>
<table border="2" width="500" height="500">
<tr bgcolor="cyan">
<th>Name of Cricketers</th>
</tr>
<tr>
<td align="center"><?php echo $cricketers["a"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["b"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["c"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["d"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["e"];?></td>
</tr>
<tr>
<td align="center"><?php echo $cricketers["f"];?></td>
</tr>
</table>
</center>
</body>
</html>

