<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 bg-primary" style="height: 100px;"><br>
          <h2 class="text-white">Admin Panel</h2>
        </div>
      </div>
      <!-- break -->
      <div class="row">
        <div class="col-12 bg-dark">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about_us.php"  target="sbit">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Contuct_us.php"  target="sbit">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"  target="">Terms And Condition</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" target="">Gallary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" target="">Log Out</a>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
      <!-- break -->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 bg-light"><br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">
              Left Side
            </button>
            <a href="Item_information.php" target="sbit" style="text-decoration: none">
              <button type="button" class="list-group-item list-group-item-action">Item Information</button></a>
              <a href="category_informaiton.php" target="sbit"  style="text-decoration: none">
            <button type="button" class="list-group-item list-group-item-action">Category Information</button></a>
            <a href="product_information.php" target="sbit"  style="text-decoration: none">
            <button type="button" class="list-group-item list-group-item-action">Product Information</button></a>
             <a href="customerInformation.php" target="sbit"  style="text-decoration: none">
            <button type="button" class="list-group-item list-group-item-action">Customer Information</button></a>
             <a href="Create_user.php" target="sbit"  style="text-decoration: none">
            <button type="button" class="list-group-item list-group-item-action">Create Admin</button></a>
          </div>
        </div>
        <!-- break -->
        <div class="col-lg-8 col-md-8 col-sm-8 bg-white"><br>
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" name="sbit"></iframe>
          </div>
        </div>
        <!-- break -->
      </div>
      <!-- break -->
      <div class="row">
        <div class="col-12 bg-primary" style="height: 50px;">
          <span class="float-right"><h6 style="padding-top: 15px; color: white;">Design by AH Maruf</h6></span>
        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>