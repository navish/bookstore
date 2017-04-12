<?php
echo '<div class="container">';
echo'<div>';
echo '<div style="background-color: white; padding: 2%" class="">';
$book_id = mysqli_real_escape_string($con, trim($_GET['book_id']));
$query = "SELECT book_id, name, edition, authors, year_of_pub, ISBN, publisher FROM book WHERE book_id =$book_id ";
$data = mysqli_query($con, $query);
echo'<form class="form-group">';
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
?>
