<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./assets/gallery.png" />
    

</head>
<body>
    <header id="main-header" class="text-white p-4 mb-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h1 id="header-title">Notes Lister</h1>
            </div>
            <div class="col-md-6 align-self-center">
                <input type="text" class="form-control" id="filter" placeholder="Search Items...">
            </div>
          </div>
        </div>
      </header>
        
      <br>
      <div class="container">
       <div id="main" class="card card-body">
        <h2 class="title">Add Notes</h2>
        <form action="./php/add.php" id="addForm" class="form-inline mb-3" method="post" >
          <input type="text" class="form-control mr-2" id="item" name="note">
          <input type="submit" class="btn btn-dark" value="Submit" name="add">
        </form>
        <br>
        <h2 class="title">Notes</h2>
        <ul id="items" class="list-group">
           <?php include './php/print.php' ?>
        </ul>
       </div>
      </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
