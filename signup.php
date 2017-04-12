<?php
	require 'header.php';
?>

<div class=Container "main-index">

	<div class="container">
		<div class="jumbotron" id="add-user">
			<div class="row">
			<form role="form" method="post" action="#">
      <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
			        <div ><label class="col-md-4">Name: </label></div>
        <div class="col-md-8"><input class="form-control" type="text" name="uname" required></div>
      </div>
      <div class="row">
        <div class="form-group"><label class="col-md-4">Date of Birth: </label>
        <div class="col-md-8"><input class="form-control" type="date" name="dob" required></div></div>
      </div>
      <div class="row">
        <div class="form-group"><label  class="col-md-4">Phone Number: </label>
        <div class="col-md-8"><input class="form-control" type="number" name="phone" required></div></div>
      </div>
      <div class="row"> 
        <div class="form-group"><label  class="col-md-4">Gender: </label>
        <div class="col-md-8">
        <label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="F">Female
		<label class="radio-inline"><input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="M">Male</div></div>
      </div>
      <div class="row">
        <div class="form-group"><label  class="col-md-4">Email: </label>
        <div class="col-md-8"><input class="form-control" type="email" name="email" required></div></div>
      </div>
      <div class="row">
        <div class="form-group"><label  class="col-md-4">Password: </label>
        <div class="col-md-8"><input class="form-control" type="password" name="pwd1" required></div></div>
      </div>
      <div class="row">
        <div class="form-group"><label  class="col-md-4">Confirm Password: </label>
        <div class="col-md-8"><input class="form-control" type="password" name="confirmpwd" required></div></div>
      </div>
      <div class="row">
        <div class="form-group"><input class="btn btn-submit" type="submit" name="saveuser" value="Submit"></div>
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
                  echo "<div class=\"alert alert-success\"><strong>Success.</strong>Account has been created. Go to <a href=\"../index.php\">Login</a>
                  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";

                  }
                else{
                  echo "<div class=\"alert alert-danger\"><strong>Failure.</strong>Something went wrong, please try again.</div>".mysqli_error($con);
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
	</div>


</div>


