<?php require'header.php';
if(isset($_GET['book_id'])){
	//require 'functions/editbookdetails.php';
   require 'functions/bookdetails.php';
}if (isset($_GET['editbook_id'])) {
	
   require 'functions/editbookdetails.php';
   
}else{
	//require 'functions/bookoptions.php';
}
require'footer.php';