<?php
  include("dbconnection/connect.php");

  $Details=isset($_POST["Details"])?$_POST["Details"]:"";


  if (isset($_POST["Save"]))
   {
    

    $insert=$conn->query("insert into about_us (`id`,`Details`) values('1','$Details')");
    if ($insert){
      echo "Data Add Success";
    }
    else{
      echo "Data Add Unsuccess";
    }
    
  };
  if (isset($_POST["Edit"]))
   {
    

    $insert=$conn->query("replace into about_us (`id`,`Details`) values('1','$Details')");
    if ($insert){
      echo "Data Edit Success";
    }
    else{
      echo "Data Edit Unsuccess";
    }
    
  };
  if (isset($_POST["Delete"]))
   {
    

    $insert=$conn->query("delete from about_us where id='1'");
    if ($insert){
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



?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.0/../css/froala_editor.css">

    <script src='../tinymce/tinymce.min.js'></script>
    <script type="text/javascript">
      tinymce.init({
      selector: '#myTextarea'
  });
    </script>

    <title>About Us</title>
  </head>
  <body style="background-color:#f4f4f4;">
    <br>

<form method="POST">
    <table class="table table-borderless bg-white" style="max-width:100%;" align="center">

      <thead>
        <tr>
           <th colspan="2" style="background-color:#E0FFFF; "><h3><center>About US</center></h3></th>
        </tr>
      </thead>

      <tbody>

       <?php
         $select=$conn->query("SELECT * FROM about_us");
        $fetcharry=$select->fetch_array()
        
       ?>

         <tr>
          <td>
            <label><b>Details</b></label>
            <textarea class="form-control" name="Details" cols="30" rows="10" id="myTextarea">
              <?php echo $fetcharry[1];?>
            </textarea>

          </td>
        </tr>
        
        
      </tbody>

      <tfoot>
        <tr>
          <td colspan="2" align="center"> 
            <button type="submit" name="Save" class="btn btn-success" >Save</button>
            <button type="submit" name="Edit" class="btn btn-primary">Edit</button>
            <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
            <button type="submit" name="cancel" class="btn btn-secondary">Cencel</button>
           
          </td>
        </tr>
      </tfoot>
    </table>
  </form>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>