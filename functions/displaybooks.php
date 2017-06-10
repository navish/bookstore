<div class="tab-pane fade in" id="display_all_books">
<?php
echo '<div class="container col-md-6">';
echo'<div>';
echo '<div style="background-color: white; padding: 2%" class="">';
$query = "SELECT DISTINCT book_id, name, year_of_pub, edition, ISBN, authors FROM book ORDER BY name ASC";
$data = mysqli_query($con, $query);
$num = mysqli_num_rows($data);
if($num  == 0){
echo '<h2>No result found<h2>';
}else{
echo '<h2>Here are all books</h2>';
echo'<table class="table table-bordered">';
while ($row = mysqli_fetch_array($data)) {
echo '<tr><td>';
echo "<a href='books.php? book_id=".$row['book_id']."'>".$row['name']."</a>";
echo '<br>'.$row['authors'];
echo '<br>'.$row['year_of_pub'].'</td></tr>';
}
echo'</table';
}
echo '</div>';
echo '</div></div>';
?>
</div>
