<?php
session_start();
require_once("Database/Db_functions.php");
// Turn off all error reporting
error_reporting(1);
//require_once("errors.php");
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Disease Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" type="image/x-icon" href="./gallery/img/ic.png">
	<link rel="stylesheet" href="./gallery/css/main.css" />
	<link rel="stylesheet" href="./gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="./gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="./gallery/css/login.css" />
</head>
<body>
	<nav id="myNav" class="navbar navbar-dark bg-dark navbar-expand-sm">
		<div class="col-md-2">
			<!-- <a href="/"><img src="" class="navbar-brand mr-0" width="60px" alt="Logo" /></a> -->
			<h4 class="brand-tit">Disease Prediction</h4>
		</div>

		<div class="col-md-10">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarMain">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navBarMain">
                  <?php
                    if(isset($_SESSION['user'])):
                    $user=$_SESSION['user'];
                    foreach($user as $usern){
                       $user_id=$usern['userId'];
                    }
             
		
                   
                     endif; ?>
                     <ul><li>
                        <a class="navbar-brand" href="logout.php" style="color:#ffffff;">
                   Logout
                </a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
