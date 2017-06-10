<?php
require 'header.php';
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['usrname']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pwd']); 
      
      $sql = "SELECT id FROM user WHERE email = '$myusername' and userpwd = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = isset($row['active']);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      	//session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: user.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<div class="container">
<div class="row">
	<div class="col-md-4 pull-right login-area">
		<div class="" id="books-menu">
			<ul class="nav nav-tabs">
		  	<li class="col-sm-4 col-md-6"><a data-toggle="tab" href="#adminLogin">Admin Login</a></li>
		  	<li class="col-sm-4 col-md-6"><a data-toggle="tab" href="#userLogin">User Login</a></li>
		  	</ul>
		</div>
		<div class=" tab-content" id="">

			<div class="tab-pane fade in" id="adminLogin">
				<h4>Admin Login</h4>
				<!-- <form role="form">
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" name="adname">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="pwd">
				  </div>
				  <div class="checkbox">
				    <label><input type="checkbox"> Remember me</label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form> -->
			</div>
				<div class="tab-pane fade in active" id="userLogin">
					<h4>User Login</h4>
					<form role="form" method="POST">
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
					  <input type="submit" class="btn btn-submit" placeholder="Submit">
				</form>
				<span>Don't have an account? <a href="signup.php">Sign Up</a></span>
				</div>
		</div>
		
	</div>
</div>
</div>
<?php require'footer.php';?>