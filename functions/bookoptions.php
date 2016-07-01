<div style="background-color: white" class="container">
<div class="col-md-2" id="books-menu">
<ul class="nav nav-tabs nav-stacked">
<li><a data-toggle="tab" href="#add-book">Add Book</a></li>
<li><a data-toggle="tab" href="#update-book">Update Book</a></li>
<li><a data-toggle="tab" href="#delete-book">Delete Book</a></li>
<li><a data-toggle="tab" href="#import">Import books database</a></li>
<li><a data-toggle="tab" href="#export">Export books database</a></li>
<li><a data-toggle="tab" href="#lend">Lend books</a></li>
<li><a data-toggle="tab" href="#authorize-return">Authorize Return</a></li>
</ul>
</div>
<div class="col-md-10 tab-content" id="books-ops">
    <?php 
     require 'addbook.php';
     require 'updatebook.php';
     require 'deletebook.php';
     require 'import.php';
     require 'export.php';
     require 'lend.php';
     require 'authorizebook.php';
    ?>
</div>

