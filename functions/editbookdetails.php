<?php
echo '<div class="container">';
echo'<div>';
echo '<div style="background-color: white; padding: 2%" class="">';
$book_id = mysqli_real_escape_string($con, trim($_GET['editbook_id']));
$query = "SELECT book_id, name, edition, authors, year_of_pub, ISBN, publisher FROM book WHERE book_id =$book_id ";
$data = mysqli_query($con, $query);
echo'<form method="post" action="" class="form-group">';
while ($row = mysqli_fetch_array($data)) {
echo '<label>Name</label><input style="width: 100%" type="text" name="" value="'.$row['name'].'"/>';
echo '<label>Authors</label><input style="width: 100%" type="text" name="" value="'.$row['authors'].'"/>';
echo '<label>Edition</label><input style="width: 100%" type="text" name="" value="'.$row['edition'].'"/>';
echo '<label>Year</label><input style="width: 100%" type="text" name="" value="'.$row['year_of_pub'].'"/>';
echo '<label>ISBN</label><input style="width: 100%" type="text" name="" value="'.$row['ISBN'].'"/>';
echo '<label>Publisher</label><input style="width: 100%" type="text" name="" value="'.$row['publisher'].'"/>';
echo '<input type="submit" name="update_book" value="Update"';
}
echo'</form';
echo '</div>';
echo '</div></div>';

if(isset($POST['update_book'])){
$name       = mysqli_real_escape_string($con, trim($_POST['book_name']));
$year       = mysqli_real_escape_string($con, trim($_POST['year_of_pub']));
$ed         = mysqli_real_escape_string($con, trim($_POST['edition']));
$isbn       = mysqli_real_escape_string($con, trim($_POST['ISBN']));
$authors    = mysqli_real_escape_string($con, trim($_POST['authors']));
$pub        = mysqli_real_escape_string($con, trim($_POST['pub']));
$query = "UPDATE book SET name = '$name' WHERE book_id = $book_id ";
mysqli_query($con, $query);
}
?>

