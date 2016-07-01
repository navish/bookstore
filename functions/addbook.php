<div class="active tab-pane fade in" id="add-book">
<form action="" method="post">
<div class="col-md-8"><input class="form-control" type="text" name="book_name" placeholder="Name" required></div>
<div class="col-md-2"><input class="form-control" type="text" name="edition" placeholder="Edition" required></div>
<div class="col-md-2"><input class="form-control" type="text" name="year_of_pub" placeholder="Year" required></div>
<div class="col-md-8"><input class="form-control" type="text" name="ISBN" placeholder="ISBN" required></div>
<div class="col-md-8"><input class="form-control" type="text" name="pub" placeholder="Publisher" required=""/></div>
<div class="col-md-8"><input class="form-control" type="text" name="authors" placeholder="Authors" required></div>
<div class="col-md-8"><input class="form-control" type="submit" name="savebook" value="Save"></div>
</form>
</div>

<?php
if(isset($_POST['savebook'])){
$name       = mysqli_real_escape_string($con, trim($_POST['book_name']));
$year       = mysqli_real_escape_string($con, trim($_POST['year_of_pub']));
$ed         = mysqli_real_escape_string($con, trim($_POST['edition']));
$isbn       = mysqli_real_escape_string($con, trim($_POST['ISBN']));
$authors    = mysqli_real_escape_string($con, trim($_POST['authors']));
$pub        = mysqli_real_escape_string($con, trim($_POST['pub']));

$query1     = "INSERT INTO book (name, edition, authors, year_of_pub, ISBN, publisher) VALUES ('$name','$ed','$authors','$year','$isbn', '$pub')";
mysqli_query($con, $query1);

//$query2 = "INSERT INTO book_author(ISBN, author_name) VALUES ('$isbn','$author')";
//mysqli_query($con, $query2);

if($query1){
    
}  else {
    echo '<div class="alert alert-warning">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
  <strong>Warning!</strong>No book added, please try again, if problem persist contact adminstrator.
</div>';
}

}


