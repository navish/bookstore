<?php
require 'header.php';
?>

<div class="container">
<div class="row">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-4 pull-right login-area">
	<div class=" " id="userLogin">
					<h4>User Login</h4>
					<form role="form" method="POST" action="">
					  <div class="form-group">
					    <label for="username">Username</label>
					    <input type="text" class="form-control" name="usrname">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" name="pwd">
					  </div>
					  <div class="checkbox">
					    <!--<label><input type="checkbox"> Remember me</label>-->
					  </div>
					  <input type="submit" class="btn btn-default" value="Sign In">
				</form>
				<span>Don't have an account? <a href="signup.php">Sign Up</a></span>
				</div>
		

		
	</div>
</div>
<?php
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['usrname']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd']); 

      $dbpass = md5($mypassword);
      
     // $sql = "SELECT * FROM user WHERE email = '$myusername' and userpwd = $dbpass";
      $result = mysqli_query($con,"SELECT * FROM user WHERE email = '$myusername' and userpwd = '$dbpass'");
      $row = mysqli_fetch_array($result);
      $active = isset($row['active']);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      	//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header('location: user.php');
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
</div>
<?php require'footer.php';?>