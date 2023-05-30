
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
    <script type="text/javascript">
      mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
    </script>
</head>
<body>

<div class="col-sm-12 col-12" style="background: black; color: #fff; padding: 4px; font-size: 15px;">
<div class="container-fluid">

   <div class="row">

    <div class="col-sm-3 col-12" style="margin-top: 8px;">
        <span>Trusted Online Shopping Site in Bangladesh</span> 
    </div>


       <div class="col-sm-6 col-12" style="margin-top: 8px;">
       <center><i class="fas fa-user-clock"></i>&nbsp;&nbsp;717-864118 , 09636-102030 <span style="color: red;">(9am-11pm)</span></center>
    </div>

       <div class="col-sm-3 col-12" style="margin-top: 8px;">
         <ul class="headmenu">
             <li><a href="#">How to buy</a></li>
             <li><a href="#">Sell with us</a></li>
         </ul>
    </div>


       
   </div>

</div>
</div>

<!------------------------------------end header------------------------------------>



<div class="col-sm-12 col-12" style="margin-top: 10px;">
    <div class="container-fluid">
        <div class="row">


            <div class="col-sm-3 col-12">
                <a href="#"><img src="img/support.png" class="img-fluid" style="height: 80px;"></a>
            </div>

            <div class="col-sm-6 col-12" style="margin-top: 20px;">
                <div class="input-group mb-3">

			        <div class="input-group-prepend">
					    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="drop">Catagory</button>
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="#">Action</a>
					      <a class="dropdown-item" href="#">Another action</a>
					      <a class="dropdown-item" href="#">Something else here</a>
					      <div role="separator" class="dropdown-divider"></div>
					      <a class="dropdown-item" href="#">Separated link</a>
				    	</div>
			  		</div>


  					<input type="text" class="form-control" id="search" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
  					<div class="input-group-append">
    					<button class="btn btn-outline-secondary" id="btns" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
  					</div>
				</div>
			</div>




			<div class="col-sm-1 col-12" style="margin-top: 15px;">

			     <div class="header-btns-icon">
			        <a href="#" style="text-decoration: none; color: red;"><i class="fas fa-shopping-bag" style="color: lightgray; font-size: 35px;"></i>
			        <span class="badge badge-light" style="background: red; color: #fff;">4</span><br>
			        <span>3000 Tk</span></a>
			    </div>
			    
			</div>


			<div class="col-sm-2 col-12" style="margin-top: 20px;">

			    <div class="input-group-prepend">
			    	<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="account"><i class="fas fa-user-tie" style="color: #000; font-size: 15px; "></i>&nbsp;&nbsp;My Account</button>
			    	<div class="dropdown-menu">
			      		<a class="dropdown-item" href="#">Profile</a>
			      		<a class="dropdown-item" href="#">Dashboard</a>
			      		<a class="dropdown-item" href="../Admin/Login.php">Login</a>
			    
			    	</div>
			  </div>
			</div>



            
        </div>
    </div>
</div>


	
<!-------------------------------Logo End----------------------------------->


  
<nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=allItem">Home</a>

      </li>

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEN'S CLOTHING
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WOMEN'S CLOTHING 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

         <li class="nav-item">
        <a class="nav-link" href="#">CORPORATE CUSTOMER</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#">FASHION & BEAUTY</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>

             <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WATCH AND JEWELRY 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>

  </div>
</nav>



















<div class="col-sm-12 col-12" style="margin-top: 20px;">
  <div class="container-fluid">
    <div class="row">

    <div class="col-sm-3 col-12">
      <div class="list-group">
        <a href="index.php?page=allcat" id="lists" class="list-group-item list-group-item-action" style="background: darkorange; color: #fff">
        <i class="fas fa-bars"></i>&nbsp;&nbsp;All Catagory</a>
      <?php
        $inset=$conn->query("select * from category_information");
        while($fetcharry=$inset->fetch_array())
      {
      ?>

  <a href="#" id="lists" class="list-group-item list-group-item-action">
    <?php echo $fetcharry[2];?></a>

    <?php
      }
      ?>

</div>
<div style="margin-top: 20px;">
 <a href="#"><img src="img/baner1.jpg" class="img-fluid" id="img"></a>
  </div><br><br>

</div>
<!--------------------------end-----left side---------------------->

<div class="col-sm-9 col-12">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/s1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/s2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/s3.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

          <div class="row">
          <?php
          $id=$_GET["id"];
  $inset=$conn->query("select * from product_information where Product_ID='$id'");
  $fetcharry=$inset->fetch_array()
          ?>
          <div class="col-md-6"><img src="../Admin/pdtImage/<?php echo $fetcharry[2]?>.jpg" class="img-fluid" id="img"></div>
          <div class="col-md-6">
            <div style="padding-top:90px;">
              <h5><?php echo $fetcharry[3]?></h5><br>
              <span><b style="font-size: 20px;">Price</b> <label style="margin-left: 100px;"><?php echo $fetcharry[5]?></label></span><br>
              <span><b style="font-size: 20px;">Brand</b> <label style="margin-left: 94px;"><?php echo $fetcharry[1]?></label></span><br>
              <span><b style="font-size: 20px;">Product Code</b> <label style="margin-left: 20px;"><?php echo $fetcharry[2]?></label></span><br>
              <span><b style="font-size: 20px;">Status</b> <label style="margin-left: 90px;"><?php echo $fetcharry[6]?></label></span><br>
              <div class="row" style="margin-top: 10px;">
                <input type="text" name="" class="form-control ml-3 mt-4" style="max-width: 50%;"> <button class="btn btn-success mt-4 ml-3">Buy</button>
              </div> 
              <br><br>
            </div> 
          </div>
        </div>
        
          <div class="card">
            <div class="card-header">
             <h4>Description :</h4> 
            </div>
            <div class="card-body">
            <?php echo $fetcharry[4]?>
          </div>
          </div>
          
        

        </div>

        
    </div> 
  </div>
</div>

<!------------------------------End slide------------------------>








<div class="col-sm-12 col-12" style="margin-top: 20px; border-bottom: 1px solid #ccc;">
  <div class="container-fluid">
     <div class="row">

      <div class="col-sm-8 col-8">
        <h3>SMART GADGET</h3>
        
      </div>

        <div class="col-sm-4 col-4">
          <a href="#" class="view">View</a><br><br>

        
      </div>

       
     </div>
  </div>
</div>

<!--------------------------------------------End Title------------------------------->


<div class="col-sm-12 col-12" style="margin-top: 20px;">
  <div class="container-fluid">

         <div class="row">



          <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div class="row">
              <center>
                <a href="#"><img src="img/g1.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>

            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/g2.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/g3.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/g4.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>




           
         </div>
       </div>
      
    </div>



     
   </div>  
  </div>
</div>

<!----------------------------------End gadget------------------------------>




<!------------------------------End banner------------------------->



<div class="col-sm-12 col-12" style="margin-top: 20px; border-bottom: 1px solid #ccc;">
  <div class="container-fluid">
     <div class="row">

      <div class="col-sm-8 col-8">
        <h3>Feature Product</h3>
        
      </div>

        <div class="col-sm-4 col-4">
          <a href="#" class="view">View</a><br><br>

        
      </div>

       
     </div>
  </div>
</div>

<!--------------------------------------------End Title------------------------------->


<div class="col-sm-12 col-12" style="margin-top: 20px;">
  <div class="container-fluid">

         <div class="row">



          <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/f1.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>

            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/f2.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/f3.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


            <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/f4.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>

                      <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/ff1.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


                      <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/ff2.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


                      <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/ff3.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>


                      <div class="col-sm-3 col-12" style="margin-top: 10px;">
            <div>
              <center>
                <a href="#"><img src="img/f1.jpg" class="img-fluid" id="productimg img"></a><br>
                <span class="name">Valentine Couple T-shirt True Love – DF08</span><br>
                <span style="color: red;">450.00 TK <del style="color: gray;">550.00 TK</del></span>
              </center>
            </div>
            
          </div>




           
         </div>
       </div>
      
    </div>



     
   </div>  
  </div>
</div>

<!----------------------------------End feature------------------------------>



<div class="col-sm-12 col-12" style="margin-top: 20px; padding: 0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.2735969059945!2d91.39693131496762!3d23.01372448495752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37536836ba1a6935%3A0x8c51de81f4d7516d!2sSkill%20Based%20Information%20Technology%2C%20Mizan%20Rd%2C%20Feni!5e0!3m2!1sen!2sbd!4v1568615859984!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  
</div>


<!-- 
<div class="col-sm-12 col-12" style="margin-top: 20px; padding: 0;">
  <iframe width="100%" height="500" src="https://www.youtube.com/embed/EQSc_-TCzKQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
</div>
 -->







<div class="col-sm-12 col-12" style="background: orange;  padding: 30px 0px;">
  <div class="container-fluid">
    <div class="row">



      <div class="col-sm-5 col-12" style="margin-top: 20px;">
              <center>

            <a href="#"><i class="fab fa-facebook-f icons"></i></a>
            <a href="#"><i class="fab fa-twitter icons"></i></a>
            <a href="#"><i class="fab fa-instagram icons"></i></a>
            <a href="#"><i class="fab fa-youtube icons"></i></a>
            <a href="#"><i class="fab fa-linkedin-in icons"></i></a>
            <a href="#"><i class="fab fa-google-plus-g icons"></i></a>
            <a href="#"><i class="fab fa-pinterest-p icons"></i></a>
          </center>

        
      </div>


  
      <div class="col-sm-7 col-12">

        <div class="input-group mb-3" style="margin-top: 10px;">
  <input type="text" class="form-control" placeholder="Email..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="background:red; color: #fff;  ">SUBSCRIBE</button>
  </div>
</div>



        
      </div>


      



    </div>
  </div>
</div>






<div class="col-sm-12 col-12" style="padding: 30px 0px; background: #f4f4f4;">
  <div class="container">
    <div class="row">

      <div class="col-sm-3 col-12">
        <h5>INFORMATION</h5>
        <ul  class="submenu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        
      </div>

            <div class="col-sm-3 col-12">
        <h5>CUSTOMER SERVICE</h5>
        <ul  class="submenu">
          <li><a href="#">Security Policy</a></li>
          <li><a href="#">Shipping & Replacement</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
        </ul>
        
      </div>




      <div class="col-sm-3 col-12">
        <h5>MY ACCOUNT</h5>
        <ul  class="submenu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        
      </div>



      <div class="col-sm-3 col-12">
        <h5>CONTACT US</h5>
        <ul  class="submenu">
          <li><a href="#">Customer info</a></li>
          <li><a href="#">Addresses</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        
      </div>



      
    </div>
    
  </div>
</div>





<div class="col-sm-12 col-12" style=" padding: 20px 0px;">
<center>
  <span>Copyright &copy 2019 onlineShop.com All Right Reserved.<br><span>Design By <a href="https://www.facebook.com/ariyanshuvo45" style="color: red;">Amdadul hasan Maruf (SBIT)</a></span></span>
</center>
  
</div>




<button onClick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up"></i></button>



<!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    
  </body>
</html>



       <div class="col-sm-6 col-12" style="margin-top: 8px;">
       <center><i class="fas fa-user-clock"></i>&nbsp;&nbsp;717-864118 , 09636-102030 <span style="color: red;">(9am-11pm)</span></center>
    </div>

       <div class="col-sm-3 col-12" style="margin-top: 8px;">
         <ul class="headmenu">
             <li><a href="#">How to buy</a></li>
             <li><a href="#">Sell with us</a></li>
         </ul>
    </div>


       
   </div>

</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   <script type="text/javascript" src="js/jquery.exzoom.js"></script>

</body>
</html>