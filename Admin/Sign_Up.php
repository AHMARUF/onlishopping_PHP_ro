
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



      <script type="text/javascript">
        

        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value)
             {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Matching';
          } 
          else 
          {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Not matching';
          }
        }
      </script>
  </head>
  <body>
    
   <table class="table table-borderless" style="max-width: 50%; background-color: #fff; margin-top: 50px;" align="center">
  <thead class="bg-light" style="border-bottom: 1px solid #ccc;">
    <tr>
      <th scope="col"><h4>Sign Up</h4></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>
        <span>Email</span>
        <input type="email" name="email" value="" class="form-control">
      </td>
    </tr>
    <tr>
      <td>
        <span>Password</span>
        <input  name="password" id="password" type="password" onkeyup='check();' class="form-control">
      </td>
    </tr>

    <tr>
      <td>
        <span>Confirm Password</span>
        <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' class="form-control">

        <span id='message'></span>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="right">
        <button type="button" class="btn btn-success">&nbsp;&nbsp;&nbsp;Submit &nbsp;&nbsp;&nbsp;</button>   
      </td>
    </tr>

    <tr>
      <td>
       <span>Already have an Account<a href="Login.html">&nbsp; Login</a></span> 
      </td>
    </tr>
  </tbody>
</table>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>