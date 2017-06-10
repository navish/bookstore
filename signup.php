<?php
require 'header.php';
?>
<div class="container">
<div class="login-area col-md-4 pull-right" id="add-user">
<form role="form" method="post" action="">
<div class="row form-group">
<label class="">Name: </label>
<input class="form-control" type="text" name="uname" required>
</div>
<div class="row form-group">
<label class="">Date of Birth: </label>
<input class="form-control" type="date" name="dob" required/>
</div>
<div class="row form-group">
<label  class="">Phone Number: </label>
<input class="form-control" type="text" name="phone" required/>
</div>
<div class="row form-group"> 
<label  class="">Gender: </label>
<label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
value="F">Female
<label class="radio-inline"><input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="M">Male
</div>
<div class="row form-group">
<label  class="">Email: </label>
<input class="form-control" type="email" name="email" required/>
</div>
<div class="row form-group">
<label  class="">Password: </label>
<input class="form-control" type="password" name="pwd1" required/>
</div>
<div class="row form-group">
<label  class="">Confirm Password: </label>
<input class="form-control" type="password" name="confirmpwd" required/>
</div>
<div class="row form-group">
<input class="btn btn-submit" type="submit" name="saveuser" value="Submit">
</div>
</form>
<?php
if(isset($_POST['saveuser'])) {


$name = $_POST['uname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd1 = $_POST['pwd1'];
$confirmpwd = $_POST['confirmpwd'];


if($pwd1==$confirmpwd)
{
$userpwd = password_hash($pwd1, PASSWORD_DEFAULT);

$id = "$gender"."$phone";


//echo "$name"." "."$dob"." "."$gender"." "."$email"." "."$phone"." "."$userpwd"." "."$id";           
$qry = "INSERT INTO user (id,name,dob,gender,email,phone,userpwd)
VALUES ('$id','$name','$dob','$gender','$email','$phone','$userpwd')";
$result = mysqli_query($con,$qry);

if($result){

}
else{

}
}//Password Confirmation
else
{
echo "<div class=\"alert alert-danger\"> Passwords do not match</div>";
}
}//Submit is not empty
?>

</div>
</div>
<?php require'footer.php';?>




