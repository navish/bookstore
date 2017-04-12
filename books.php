<<<<<<< HEAD
<?php require'header.php';
if(isset($_GET['book_id'])){
    require 'functions/editbookdetails.php';
}  else {
    require 'functions/bookoptions.php';
}
=======
<?php require'header.php';
if(isset($_GET['book_id'])){
    require 'functions/editbookdetails.php';
}  else {
    require 'functions/bookoptions.php';
}
>>>>>>> ba7219cb7faa1ceda4c7c408734d731e92199b73
require'footer.php';