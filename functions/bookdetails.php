<?php
echo '<div class="container">';
echo'<div>';
echo '<div style="background-color: white; padding: 2%" class="">';
$book_id = mysqli_real_escape_string($con, trim($_GET['book_id']));
$query = "SELECT book_id, name, edition, authors, year_of_pub, ISBN, publisher FROM book WHERE book_id =$book_id ";
$data = mysqli_query($con, $query);
echo'<table class="table table-bordered">';
while ($row = mysqli_fetch_array($data)) {
echo '<tr><td>Name</td><td>'.$row['name'].'</td></tr>';
echo '<tr><td>Authors</td><td>'.$row['authors'].'</td></tr>';
echo '<tr><td>Edition</td><td>'.$row['edition'].'</td></tr>';
echo '<tr><td>Year</td><td>'.$row['year_of_pub'].'</td></tr>';
echo '<tr><td>ISBN</td><td>'.$row['ISBN'].'</td></tr>';
echo '<tr><td>Publisher</td><td>'.$row['publisher'].'</td></tr>';
}
echo'</table';
echo "<p><a href=''>edit</a></td></p>";
echo '</div>';
echo '</div></div>';
?>
