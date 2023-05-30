<?php 

   include("dbconnection/connect.php");


  $ItemName=isset($_POST['ItemName'])?$_POST['ItemName']:"";
  $id=isset($_POST['Category_id'])?$_POST['Category_id']:"";
  $name=isset($_POST['Category_name'])?$_POST['Category_name']:"";
  
  $fetc[0]="";
  $fetc[1]="";
  $fetc[2]="";
  


  if(isset($_POST["addbtn"]))
  {

    $insert=$conn->query("insert into category_information (`item_name`,`id`,`Category_name`) values('$ItemName','$id','$name')");
    if($insert)
    {
      echo "Data Add Success";
    }
    else
    {
      echo "Data Add Unsuccess";
    }
  };

  if (isset($_POST["editbtn"])) {
    $insert=$conn->query("replace into category_information (`item_name`,`id`,`Category_name`) values('$ItemName','$id','$name')");
    if ($insert) {
      echo "Data Edit Success";
    } 
    else {
      echo "Data Edit Unsuccess";
    }
    
  };

  if (isset($_POST["Deletebtn"])) {
    $insert=$conn->query("delete from category_information where id='$id' ");
    if ($insert) {
      echo "Data Edit Success";
    } 
    else {
      echo "Data Edit Unsuccess";
    }
    
  };
  if(isset($_POST["Cancel"]))
  {
    echo exit();
  };
 

  if(isset($_GET["dltId"]))
  {
    
  $insert=$conn->query("delete from category_information where id='".$_GET["dltId"]."'");
  };

 if(isset($_GET["editId"]))
  { 
  $insert=$conn->query("select * from category_information where id='".$_GET["editId"]."'");
  $fetc=$insert->fetch_array();
  }
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      
  </head>
  <body>
    
    <form  method="POST">
    <table class="table table-bordered" style="max-width: 80%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Category Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item Name</td>
      <td>
        <select class="form-control" name="ItemName"> 
         
          <option><?php echo $fetc[0]?></option>

      <?php
        $inset=$conn->query("SELECT * FROM item_information");
        while($fetcharry=$inset->fetch_array())
        {
        ?>
      <option><?php echo $fetcharry[1]?></option>

    <?php } ?>
      
        </select>
      </td>
    </tr>

     <tr>
      <td>Category ID</td>
      <td><input type="text" name="Category_id" value="<?php echo $fetc[1]?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Category Name</td>
      <td><input type="text" name="Category_name" value="<?php echo $fetc[2]?>" class="form-control"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addbtn" class="btn btn-success">Add</button>
        <button type="submit" name="editbtn" class="btn btn-primary">Edit</button>
        <button type="submit" name="Deletebtn" class="btn btn-danger">Delete</button>
        <button type="submit" name="view" class="btn btn-info">View</button>
        <button type="submit" name="Cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
    <?php
     if(isset($_POST["view"]))
      {
        ?>
        <table class="table table-bordered" style="max-width: 80%;" align="center">
        <tr>
          <th scope="col">Item Name</th>
          <th scope="col">Category ID</th>
          <th scope="col">Category name</th>
           <th scope="col">Edit </th>
          <th scope="col">Delete</th>
        </tr>
        <?php

        $inset=$conn->query("SELECT * FROM category_information");
        while($fetcharry=$inset->fetch_array())
        {
     ?>
      <tr>
        <td><?php echo $fetcharry[0];?></td>
        <td><?php echo $fetcharry[1];?> </td>
        <td><?php echo $fetcharry[2];?> </td>
        <td><a href="category_informaiton.php?editId=<?php echo $fetcharry[1];?>" type="submit" class="btn btn-info">Edit</a></td>
        <td><a href="category_informaiton.php?dltId=<?php echo $fetcharry[1];?>" name="dltId" type="submit" class="btn btn-danger">Delete</a></td>
        
      </tr>
    <?php
      }
    };
    ?>
  </tbody>
</table>
</form>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>