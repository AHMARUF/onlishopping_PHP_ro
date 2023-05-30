<?php
  include("dbconnection/connect.php");


  $image="";
  $fetcharry[0]="";
  $fetcharry[1]="";
  $fetcharry[2]="";
  $fetcharry[3]="";

  $Customer_ID = isset($_POST['Castomer_id'])?$_POST['Castomer_id']:"";
  $Customer_Name = isset($_POST['Customer_name'])?$_POST['Customer_name']:"";
  $Customer_Details =isset($_POST['Customer_Details'])?$_POST['Customer_Details']:"";
  $Customer_Contact =isset($_POST['Customer_Contact'])?$_POST['Customer_Contact']:"";



 if (isset($_POST["btnadd"]))
   {
    $image="Customer_image/$Customer_ID.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("insert into customer_information (`Customer_ID`,`Customer_Name`,`Customer_Details`,`Customer_Contact`) values('$Customer_ID','$Customer_Name','$Customer_Details','$Customer_Contact')");
    if ($insert) {
      echo "Data Add Success";
    }
    else{
      echo "Data Add Unsuccess";
    }
    
  };
  if (isset($_POST["Edit"]))
   {
    $image="Customer_image/$Customer_ID.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("replace into customer_information (`Customer_ID`,`Customer_Name`,`Customer_Details`,`Customer_Contact`) values('$Customer_ID','$Customer_Name','$Customer_Details','$Customer_Contact')");
    if ($insert) {
      echo "Data Edit Success";
    }
    else{
      echo "Data Edit Unsuccess";
    }
    
  };
  if (isset($_POST["Delete"]))
   {
    $image="Customer_image/$Customer_ID.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("delete from customer_information where item_id='$Customer_ID'");
    if ($insert) {
      echo "Data Delete Success";
    }
    else{
      echo "Data Delete Unsuccess";
    }
    
  };
  if(isset($_POST["Cancel"]))
  {
    echo exit();
  };

 if(isset($_GET["dltId"]))
  { 
  $insert=$conn->query("delete from customer_information where Customer_ID='".$_GET["dltId"]."'");
  };

  if(isset($_GET["editId"]))
  { 
  $insert=$conn->query("select * from customer_information where Customer_ID='".$_GET["editId"]."'");
  $fetcharry=$insert->fetch_array();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Info</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src='../tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
      tinymce.init({
      selector: '#myTextarea'
  });
    </script>


  </head>
  <body>
    
    <form action="" method="post" enctype="multipart/form-data">

    <table class="table table-bordered" style="max-width: 100%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2><center>Customer Information</center></h2></th>
    </tr>
  </thead>
  <!-- break -->
  <tbody>


     <tr>
      <td>Customer ID</td>
      <td><input type="text" name="Castomer_id" value="<?php echo $fetcharry[0];?>" placeholder="Enter Castomer id" class="form-control"></td>
    </tr>

     <tr>
      <td>Customer Name</td>
      <td><input type="text" name="Customer_name" value="<?php echo $fetcharry[1];?>" class="form-control"></td>
    </tr>



    <tr>
      <td>Customer Details</td>
      <td><textarea class="form-control" name="Customer_Details" id="myTextarea"><?php echo $fetcharry[2];?></textarea></td>
    </tr>

     <tr>
      <td>Customer Contact</td>
      <td><input type="text" name="Customer_Contact" value="<?php echo $fetcharry[3];?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Customer Picture</td>
      <td><input type="file" name="file" value="<?php echo $fetcharry[0];?>" class="form-control"></td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="btnadd" class="btn btn-success">Add</button>
        <button type="submit" name="Edit" class="btn btn-primary">Edit</button>
        <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
        <button type="submit" name="view" class="btn btn-info">View</button>
        <button type="submit" name="Cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>
  <?php
     if(isset($_POST["view"]))
      {
        ?>
        <table class="table table-bordered" style="max-width: 80%;" align="center">
        <tr>
          <th scope="col">Customer ID</th>
          <th scope="col">Customer Name</th>
           <th scope="col">Customer Details </th>
           <th scope="col">Customer Contact </th>
           <th scope="col">Edit </th>
          <th scope="col">Delete</th>
        </tr>
        <?php

        $inset=$conn->query("SELECT * FROM customer_information");
        while($fetcharry=$inset->fetch_array())
        {
     ?>
      <tr>
        <td><?php echo $fetcharry[0];?></td>
        <td><?php echo $fetcharry[1];?> </td>
        <td><?php echo $fetcharry[2];?> </td>
        <td><?php echo $fetcharry[3];?> </td>
        
        <td><a href="customerInformation.php?editId=<?php echo $fetcharry[0];?>" type="submit" class="btn btn-info">Edit</a></td>

        <td><a href="customerInformation.php?dltId=<?php echo $fetcharry[0];?>" name="dltId" type="submit" class="btn btn-danger">Delete</a></td>
        
      </tr>
    <?php
      }
    }
    ?>
</table>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>