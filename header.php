<html>
<head>
	<title>Bookstore Info System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<!-- jQuery library -->
	<script src="js/jquery-3.0.0.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.js"></script>
</head>
<?php 
	require 'dbconnect.php';
?>
<body>
 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php">BookStore</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="user.php">Librarians</a></li>
            <li><a href="user.php">Borrowers</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
                      <li><a href="signin.php">Sign in</a></li>
                      <li><a href="signup.php">Sign up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>