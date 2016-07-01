<?php require'header.php';?>
<div class="container">
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
		<form action="" method="get">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input name="search" type="text" class="form-control"  
					placeholder="Search a book by Title, Author or ISBN" />
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
		</form>
        </div>
	</div>
	</div>

<?php
echo '<div class="container">';
echo'<div>';
if(isset($_GET['search'])){
echo '<div style="background-color: white; padding: 2%" class="">';
$search = mysqli_real_escape_string($con, trim($_GET['search']));

$query = "SELECT DISTINCT book_id, name, year_of_pub, edition, ISBN, authors FROM book WHERE name LIKE '%$search%' OR authors LIKE '%$search%' OR ISBN LIKE '$search' ";
$data = mysqli_query($con, $query);
$num = mysqli_num_rows($data);
if($num  == 0){
echo '<h2>No result found<h2>';
}else{
echo '<h2>Here are the search result</h2>';
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
}
echo '</div></div>';
require'footer.php';?>
