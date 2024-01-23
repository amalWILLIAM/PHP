<html>
<head>
<title>form validation</title>
</head>
<body>
<?php
$name="";
$email="";
$phone="";
$address="";
$pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$pattern2="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";
if($_SERVER["REQUEST_METHOD"]=="POST"){
extract($_POST);
$valid=true;
if(empty($name)){
echo "<script>alert('enter name')</script>";
$valid=false;
}
if(empty($email)){
echo "<script>alert('enter email')</script>";
$valid=false;
}
if(!preg_match($pattern,$email)){
echo "<script>alert('enter valid email')</script>";
$valid=false;
}
if(empty($phone)){
echo "<script>alert('enter phone no')</script>";
$valid=false;
}
else{
if(strlen($phone)!=10){
echo "<script>alert('enter 10 digit phone no')</script>";
}
}
if(empty($gender)){
echo "<script>alert('gender is required')</script>";
$valid=false;
}
if(empty($address)){
echo "<script>alert('address is required')</script>";
$valid=false;
}
if(empty($pass)){
echo "<script>alert('enter password')</script>";
$valid=false;
}
if($pass!=$pass1){
echo "<script>alert('password not match')</script>";
$valid=false;
}
if(!preg_match($pattern2,$pass)){
echo "<script>alert('minimum 8 chracters,one spcl,uppercase,number,lowercase required')</script>";
$valid=false;
}
if($valid){
$con=Mysqli_Connect("localhost","root","","abina");
if(!$con){
echo "connection error";
}
else{
$sql="INSERT INTO table4(name,email,phone_num,gender,address)VALUES('$name','$email','$phone','$gender','$address')";
if($con->query($sql)==TRUE){
echo "new record created successfully";
}
else{
echo "error".$sql."<br>".$con->error;
}
$con->close();
}
$name="";
$email="";
$phone="";
$address="";
echo "<script>alert('localhost successful')</script>";
}
}
?>
<form method="post">
<h1 align="center">REGISTRATION FORM</h1>
<table align="center">
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>
<tr>
<td>Phone Number:</td>
<td><input type="number" name="phone" value="<?php echo $phone;?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" value=""autocomplete="new-password"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="pass1" value=""></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender"value="male">Male
<input type="radio" name="gender"value="female">Female
<input type="radio" name="gender"value="other">Other</td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="address"><?php echo $address;?></textarea></td>
</tr>
<tr>
<td><input type="submit" value="SUBMIT"></td>
<td><input type="reset" value-"RESET"</td>
</tr>
</body>
</html>







