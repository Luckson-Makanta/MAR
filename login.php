<?php 

include('db_connection/connect.php');

if(isset($_POST['login'])){

session_start();

$_SESSION = $_POST['compNum'];

if(isset($_SESSION['compNum'])){

       

}


}



 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
    	body{
    		background-color: ;
    	}
    </style>

    <title>Hello, world!</title>
  </head>
  <div class="bg-light">
  <body>
  

 
   
        <div class="container py-5">
        	<div class="row">
        		<div class="col-lg-4">
        			     <div class="card text-white-50 bg-dark text-primary" style="width: 18rem;">
						  <img src="images/unza-image.jpg" class="card-img-top" alt="...">
						  <div class="card-body"> 
						  	<h3 class="py-3 font-weight-light" >Sign in</h3>

				            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

						  		<div class="form-group py-2">
						  			<label for="compNum">Computer number</label><br>
						  			<input type="text" class="form-control" id="compNum" name="name" placeholder="Computer number" required>
						  		</div>
						  		<div class="form-group py-2">
						  			<label for="password">Password</label><br>
						  	
						  			<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						  		</div>

  								<div class="form-group py-2">
  								<button class="btn btn-success" name="login" value="login">Log in</button>
						  		</div>
 
						  	</form>
        		</div>
        	</div>
        </div>

       </div>

      <!--  <div class="col-lg-8">
       	    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       	    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       	    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       	    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </div> -->
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  
 </div>
</html>

 