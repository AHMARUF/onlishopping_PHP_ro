
<?php
  include("dbconnection/connect.php");

  $image="";
  $id=isset($_POST["id"])?$_POST["id"]:"";
  $name=isset($_POST["ItmName"])?$_POST["ItmName"]:"";
  

  $fetcharry[0]="";
  $fetcharry[1]="";

  if(isset($_POST["addBtn"]))
  {
    $image="item_image/$id.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("insert into item_information (`item_id`,`item_name`) values('$id','$name')");
    if($insert)
    {
      echo "Data Add Success";
    }
    else
    {
      echo "Data Add Unsuccess";
    }
  };

  if(isset($_POST["eitbtn"]))
  {

    $image="item_image/$id.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("replace into item_information (`item_id`,`item_name`) values('$id','$name')");
    if($insert)
    {
      echo "Data Edit Success";
    }
    else
    {
      echo "Data Edit Unsuccess";
    }
  };

  if(isset($_POST["deletebtn"]))
  {

    $insert=$conn->query("delete from item_information where item_id='$id'");
    if($insert)
    {
      echo "Data Delete Success";
    }
    else
    {
      echo "Data Delete Unsuccess";
    }
  };
  if(isset($_POST["Cancel"]))
  {
    echo exit();
  };
 
  if(isset($_GET["dltId"]))
  { 
  $insert=$conn->query("delete from item_information where item_id='".$_GET["dltId"]."'");
  };

  if(isset($_GET["editId"]))
  { 
  $insert=$conn->query("select * from item_information where item_id='".$_GET["editId"]."'");
  $fetcharry=$insert->fetch_array();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    
    <form method="post" enctype="multipart/form-data">
    <table class="table table-bordered" style="max-width: 80%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Item Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Item ID</td>
      <td><input type="text" name="id" value="<?php echo $fetcharry[0];?>" class="form-control"></td>
    </tr>

     <tr>
      <td>Item Name</td>
      <td><input type="text" name="ItmName" value="<?php echo $fetcharry[1];?>" class="form-control"></td>
    </tr>
    <tr>
      <td> Product Picture</td>
      <td>
        <input type="file" name="file" class="form-control">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <button type="submit" name="addBtn" class="btn btn-success">Add</button>
        <button type="submit" name="eitbtn" class="btn btn-primary">Edit</button>
        <button type="submit" name="deletebtn" class="btn btn-danger">Delete</button>
        <button type="submit" name="view" class="btn btn-info">View</button>
        <button type="submit" name="Cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>
  </tbody>
</table>

 
  <?php
     if(isset($_POST["view"]))
      {
        ?>
        <table class="table table-bordered" style="max-width: 80%;" align="center">
        <tr>
          <th scope="col">Item Id</th>
          <th scope="col">Item Name</th>
          <th scope="col">Item Picture</th>
           <th scope="col">Edit </th>
          <th scope="col">Delete</th>
        </tr>
        <?php

        $inset=$conn->query("SELECT * FROM item_information");
        while($fetcharry=$inset->fetch_array())
        {
     ?>
      <tr>
        <td><?php echo $fetcharry[0];?></td>
        <td><?php echo $fetcharry[1];?> </td>
        <td><img src="item_image/<?php echo $fetcharry[0];?>.jpg" class="img-Responsive" height="100" width="100"></td>

        <td><a href="Item_information.php?editId=<?php echo $fetcharry[0];?>" type="submit" class="btn btn-info">Edit</a></td>


        <td><a href="Item_information.php?dltId=<?php echo $fetcharry[0];?>" name="dltId" type="submit" class="btn btn-danger">Delete</a></td>
        
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