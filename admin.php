<?php
include 'header.php';
require_once("Database/Db_functions.php");
$con = new Connect();

if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $national_id = $_POST['national_id'];
    $age= $_POST['age'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
       
    //insert data to database    
 $query = $con->execute("INSERT INTO `users` (name,email,national_id,age,gender,phone_number,password) VALUES ('$name', '$email', '$national_id','$age','$gender','$phone_number', '$password')");
    var_dump($query);
   // $user = $con->execute("INSERT INTO `users` (name,email,national_id,age,gender,phone_number,password,image) VALUES ('$name', '$email', '$national_id','$age','$gender','$phone_number', '$password',$image')");
     //var_dump($query );
    //display success message
    if( $query ){
    echo "<font color='green'>User registered successfully.";
     header("Location:login.php");
       }
       else{

    echo "<font color='green'>User Not registered successfully.";
   
       }
    }

?>


	<div class="container-fluid p-2 justify-content-center row">
		<div class="jumbotron col-7 ml-3 pt-0 pb-2 mt-4">
			<div class="w-100 display-4 mb-4 pb-1">Sign Up</div>
			
			<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group row">
			    <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control w-50" id="inputName" placeholder="Name" name="name" required>
			    </div>
			  </div>

			 

			 <div class="form-group row">
			    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control w-75" id="inputEmail" placeholder="Email" name="email" required>
			    </div>
			  </div>

			<div class="form-group row">
			    <label for="inputID Number" class="col-sm-2 col-form-label">National ID</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control w-75" id="national ID" placeholder="national ID" name="national_id" required>
			    </div>
			  </div>
<!-- 
			  <div class="form-group row">
			    <label for="inputID Number" class="col-sm-2 col-form-label">Profile Picture</label>
			    <div class="col-sm-10">
			      <input type="file" class="form-control w-75" id="Profile" placeholder="Add Picture" name="image" required>
			    </div>
			  </div>
		 -->

    
        <div class="form-group row">
			    <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
          <div class="form-group col-md-2">
			      <input type="number" min="1" max="125" class="form-control" id="inputAge" placeholder="Age" name="age" required>
		     </div>
		  </div>
	 <div class="form-group row">
	     <fieldset class="form-group ml-4">
		       <div class="row">
		         <legend class="col-form-legend col-sm-2">Gender</legend>
		         <div class="col-sm-10">
		       <select class="custom-select mb-2 mr-sm-2 mb-sm-0 ml-4" id="inlineFormCustomSelect"  name="gender" required>
				     <option value="M">Male</option>
				     <option value="F">Female</option>
				     <option value="O">Other</option>
				   </select>
		     </div>
		       </div>
		        </div>  
		     </fieldset>
        <div class="form-group row">
          <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control w-50" id="inputPhone" placeholder="Phone Number" name="phone_number" required>
          </div>
        </div>
	
        <div class="form-group row">
			    <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-5">
			      <input type="password" class="form-control" id="inputPass" placeholder="Password" name="Password" required>
			    </div>
					<div class="col-sm-5">
			      <input type="password" class="form-control" id="inputPass" placeholder="Confirm Password" name="password" required>
			    </div>
			  </div>
		 

	    <div class="form-group row justify-content-center">
			    <div class="col-sm-10 sndCont">
			      <button type="submit" class="btn btn-primary" name="Submit" value="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Sign Up</button>
			    </div>
			  </div>
			</form>
   </div>
<!--    <div class="jumbotron col-4 pt-0 pb-2 ml-5  mt-4">
    <!--  <div class="w-100 display-4 mb-4 pb-1">Log In</div> -->
		
		<!-- 	 <form method="post" action="validation.php">
			  <div class="form-group">
			    <label for="exampleDropdownFormEmail2">Email address</label>
			    <input type="email" class="form-control" placeholder="email@example.com" name="lnEmail" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleDropdownFormPassword2">Password</label>
			    <input type="password" class="form-control" placeholder="Password" name="lnPass" required>
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input">
			      Remember me
			    </label>
			  </div>
		    <div class="form-group row justify-content-center">
		      <div class="col-sm-10 sndCont">
		        <button type="submit" class="btn btn-primary" name="lnSub" value="submit">Log In</button>
		      </div>
		    </div>
	    </div>
	   </form>
		<!-- </div> -->
	<!-- </div>  -->
	<?php include_once("footer.php"); ?>
	
