<?php
include("../Admin/dbconnection/connect.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Shop</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.exzoom.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">

              <?php
                  $inset=$conn->query("select * from product_information");
                  while($fetcharry=$inset->fetch_array())
                  {
               ?>

          <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="../Admin/pdtImage/<?php echo $fetcharry[2];?>.jpg" class="img-fluid img" id="productimg"></a><br>
                <span class="name"><?php echo $fetcharry[3];?></span><br>
                <span style="color: red;"><?php echo $fetcharry[5];?> &#2547;</span>
              </center>
            </div>
          </div>

           <?php } ?>

         </div>

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   <script type="text/javascript" src="js/jquery.exzoom.js"></script>

</body>
</html>