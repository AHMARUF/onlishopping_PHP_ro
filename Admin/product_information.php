<?php  

  include ("dbconnection/connect.php");

  $filloutcat="";
  $image="";
  $_GET["dltId"]="";
  $fetc[0]="";
  $fetc[1]="";
  $fetc[2]="";
  $fetc[3]="";
  $fetc[4]="";
  $fetc[5]="";
  $fetc[6]="";
  

  $ItemName=isset($_POST['ItemName'])?$_POST['ItemName']:"";
  $Category_Name=isset($_POST['CatName'])?$_POST['CatName']:"";
  $Product_ID=isset($_POST['Product_ID'])?$_POST['Product_ID']:"";
  $Product_Name=isset($_POST['Product_Name'])?$_POST['Product_Name']:"";
  $Product_Details=isset($_POST['Product_Details'])?$_POST['Product_Details']:"";
  $Product_Price=isset($_POST['Product_Price'])?$_POST['Product_Price']:"";
  $Product_Stock=isset($_POST['Product_Stock'])?$_POST['Product_Stock']:"";


  if (isset($_POST["btnadd"]))
   {
    $image="pdtImage/$Product_ID.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $insert=$conn->query("insert into product_information (`Item_Name`,`Category_Name`,`Product_ID`,`Product Name`,`Product Details`,`Product Price`,`Product Stock`) values('$ItemName','$Category_Name','$Product_ID','$Product_Name','$Product_Details','$Product_Price','$Product_Stock')");
    if ($insert) {
      echo "Data Add Success";
    }
    else{
      echo "Data Add Unsuccess";
    }
    
  };

  if (isset($_POST["editbtn"])) {
    $image="pdtImage/$Product_ID.jpg";
    move_uploaded_file($_FILES['file']['tmp_name'],$image);
    
    $insert=$conn->query("replace into product_information (`Item_Name`,`Category_Name`,`Product_ID`,`Product Name`,`Product Details`,`Product Price`,`Product Stock`) values('$ItemName','$Category_Name','$Product_ID','$Product_Name','$Product_Details','$Product_Price','$Product_Stock')");
    if ($insert) {
      echo "Data Edit Success";
    }
    else{
      echo "Data Edit Unsuccess";
    }
    
  };


  if (isset($_POST["deletebtn"])) {
    $insert=$conn->query("delete from product_information where Product_ID='$Product_ID' ");
    if ($insert) {
      echo "Data Delete Success";
    }
    else{
      echo "Data Delete Unsuccess";
    }
    
  };


  
if(isset($_POST["cancel"]))
{
  echo exit();
};

if(isset($_GET["editId"]))
  { 
  $insert=$conn->query("select * from product_information where Product_ID='".$_GET["editId"]."'");
  $fetc=$insert->fetch_array();
  };
  



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script src='../tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
      tinymce.init({
      selector: '#myTextarea'
  });
    </script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    var checking_html = '<img src="loading.gif" /> Checking...';
    $('#ItemName').change(function() //id of item name
    {
      //alert("ok");
      $('#item_result').html(checking_html);
        check_availability();
    }); 
  });
//function to check username availability 
function check_availability()
{
    var item_name = $('#ItemName').val();
    //alert(item_name);
    $.post("check_category_name.php", { item: item_name },  // item is a varriable and item_name of top line
      function(result){
        //if the result is 1
        if(result !=null )
        {
          //show that the username is available
          $('#CatName').html(result);
          $('#item_result').html("");
          $('#category_result').html('');
        }
        else
        {
          //show that the username is NOT available
          $('#category_result').html('No Category Name Found');
          $('#item_result').html("");
          $('#select').html('');
        }
    });

}  

</script>


  </head>
  <body>
    
    <form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>"  name="PDT_Info" id="PDT_Info" enctype="multipart/form-data">
    <table class="table table-bordered" style="max-width: 100%;" align="center">
  <thead>
    <tr>
      <th colspan="2"><h2>Product Information</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>
        <label>Item Name</label>
        <select class="form-control" name="ItemName" id="ItemName">
          <option><?php echo $fetc[0]?></option>
            <?php
            $inset=$conn->query("SELECT * FROM item_information");
            while($fetcharry=$inset->fetch_array())
            {
            ?>
            <option><?php echo $fetcharry[1]?></option>

        <?php } ?>
        </select><input name="text_hidn" type="hidden" id="text_hidn" value="<?php print $fetch[1]?>">
      </td>

       <td> 
        <label>Category Name</label>
        <select name="CatName" id="CatName" class="form-control">
        <option><?php echo $fetc[1]?></option>
          </select>       
         &nbsp;&nbsp;<?php print $filloutcat?> <span id="category_result"></span>
         </td>
    </tr>

     <tr>
      
      <td>
        <label>Product ID</label> 
        <input type="text" name="Product_ID" class="form-control" value="<?php echo $fetc[2];?>"></td>
      
      <td>
        <label>Product Name</label>
        <input type="text" name="Product_Name" class="form-control" value="<?php echo $fetc[3];?>"></td>
    </tr>


    <tr>

      
      <td colspan="2">
        <label>Product Details</label>
        <textarea class="form-control" name="Product_Details" id="myTextarea"><?php echo $fetc[4];?></textarea></td>
    </tr>

     <td><label>Product Price</label><input type="text" name="Product_Price" class="form-control"value="<?php echo $fetc[5];?>"></td>
      <td><label>Product Stock</label><input type="text" name="Product_Stock" class="form-control"value="<?php echo $fetc[6];?>"></td>
  

     <tr>
      
      <td colspan="2">
        <label>Product Picture</label>
        <input type="file" name="file" class="form-control">
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <button type="Submit" name="btnadd" class="btn btn-success">Add</button>
        <button type="Submit" name="editbtn" class="btn btn-primary">Edit</button>
        <button type="Submit" name="deletebtn" class="btn btn-danger">Delete</button>
        <a href="pdt_view.php" type="Submit" name="view" class="btn btn-info" target="_blank">View</a>
        <button type="Submit" name="cancel" class="btn btn-secondary">Cancel</button>
      </td>
    </tr>


  </tbody>
</table>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>