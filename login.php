
<?php
//including the database connection file
include 'header.php';
$con = new Connect();

if(isset($_POST['login'])){
$email=$_POST['email'];
//$password=md5($_POST['password']);
$password=$_POST['password'];
//staff login
$user1 = "SELECT * FROM users WHERE email='$email' and password='$password'";
$user = $con->getData($user1);
 //var_dump($user1);
 if($user){
    $_SESSION['user']=$user;
    //var_dump($_SESSION['user']);exit;
    header("Location:filter.php");   
}

else{?>
    <script type="text/javascript">
        alert("Invalid username or password");
    </script><?php
    header("Location: login.php"); 
   }
    
}


 ?>
	<div class="container-fluid p-2 justify-content-center row">
   <div class="jumbotron col-4 pt-0 pb-2 ml-5  mt-4">
     <div class="w-100 display-4 mb-4 pb-1">Log In</div>
		
			 <form method="post" action="" style="width:80%; height:60%;" >
			  <div class="form-group">
			    <label for="exampleDropdownFormEmail2">Email address</label>
			    <input type="email" class="form-control" placeholder="email@example.com" name="email" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleDropdownFormPassword2">Password</label>
			    <input type="password" class="form-control" placeholder="Password" name="password" required>
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input">
			      Remember me
			    </label>
			  </div>
		    <div class="form-group row justify-content-center">
		      <div class="col-sm-10 sndCont">
		        <button type="submit" class="btn btn-primary" name="login" value="submit"  >Log In</button>
		      </div>
		     </div>  
	 
	   </form>
		</div>
	
	<?php include_once("footer.php"); ?>
