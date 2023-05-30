<?php
  include ("dbconnection/connect.php");

  if(isset($_GET["dltId"]))
  {
    
     $insert=$conn->query("delete from product_information where Product_ID='".$_GET["dltId"]."'");
  };

 


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>All Product View</title>
  </head>
  <body>
    
        <table class="table table-bordered" style="max-width: 80%;" align="center">
        <tr>
          <th scope="col">Item Name</th>
          <th scope="col">Category Name</th>
          <th scope="col">Product ID</th>
           <th scope="col">Product Name </th>
           <th scope="col">Product Details </th>
          <th scope="col">Product Price</th>
          <th scope="col">Product Stock</th>
          <th scope="col">Product Picture</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
        <?php

        $inset=$conn->query("SELECT * FROM product_information");
        while($fetcharry=$inset->fetch_array())
        {
     ?>
      <tr>
        <td><?php echo $fetcharry[0];?></td>
        <td><?php echo $fetcharry[1];?> </td>
        <td><?php echo $fetcharry[2];?> </td>
        <td><?php echo $fetcharry[3];?> </td>
        <td><?php echo $fetcharry[4];?> </td>
        <td><?php echo $fetcharry[5];?> </td>
        <td><?php echo $fetcharry[6];?> </td>
        <td><img src="pdtImage/<?php echo $fetcharry[2];?>.jpg" class="img-Responsive" height="100" width="100"></td>
        <td><a href="product_information.php?editId=<?php echo $fetcharry[2];?>" type="submit" class="btn btn-info">Edit</a></td>
        <td><a href="pdt_view.php?dltId=<?php echo $fetcharry[2];?>" name="dltId" type="submit" class="btn btn-danger">Delete</a></td>
        
      </tr>
    <?php
      }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>