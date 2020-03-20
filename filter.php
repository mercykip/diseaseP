<?php 

require_once("header.php");
require_once("Database/Db_functions.php");
if(!isset($_SESSION['user'])){?>
    <script>window.location="http://localhost/diseaseP/login.php";</script><?php
    die();
}
//require_once("errors.php");
include'style.css';
$con = new Connect();
error_reporting(0); // Disable all errors.

if(isset($_POST['submit'])){

	$symptom=$_POST['symptom'];
	$query="SELECT * FROM filter_symptoms WHERE symptom_name LIKE '%{$symptom}%'";
	$diseases= $con->getData($query);
	//echo"<pre>";
	//print_r($diseases);
	//echo"</pre>";exit;
	$messg="Are you suffering from one of these symptom too?";

	$messgd="Choose more than 6 symptoms for more accuracy";
	}
	$symptomp= array();
	foreach ($diseases as $dis) {
		$query1="SELECT * FROM filter_symptoms WHERE disease_name='$dis[disease_name]'";
		$symptomps= $con->getData($query1);
		array_push($symptomp,$symptomps);
	}
		// echo" $arraySize".count($symptomp)."<br>";

	$search=array();
	if(isset($_POST['search'])){
	 $search=$_POST['symptom_list'];
	}
	//declare count array
	$count_arr=array();
	//search for disease with the selected symptoms fro db
	$res="SELECT filter_symptoms.disease_name,count(filter_symptoms.disease_name) as count_d FROM filter_symptoms WHERE symptom_name IN ('" . implode("','", $search) . "') Group By disease_name";
	$ressul= $con->getData($res);
   //loop through the diseases to count the number of sysmptoms for each disease
	foreach ($ressul as $key => $value) {
		// echo $value['disease_name']."count=".$value['count_d'];
		$count_arr[$key]=[$value['disease_name'],$value['count_d']];
		// var_dump($symptomp[1]);
		
	   }
	//Filter the disease with the highest count number of symptoms   
	$max_value=max(array_column($count_arr, 1));
	echo "<br>";
	$predicted_disease=array_column($count_arr, 0, 1)[$max_value];
	$_SESSION['predicted_disease']=$predicted_disease;
?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Disease Prediction</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- <link rel="icon" type="image/x-icon" href="gallery/img/ic.png"> -->
	<link rel="stylesheet" href="./gallery/css/main.css" />
	<link rel="stylesheet" href="./gallery/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./gallery/css/health.css" />
	<link rel="stylesheet" type="text/css" href="./gallery/css/font-awesome-4.5.0/css/font-awesome.min.css" />
	<head>

	<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  font-family: Arial, Helvetica, sans-serif;
	}

	/* Float four columns side by side */
	.column {
	  float: left;
	  width: 25%;
	  padding: 0 10px;
	}

	/* Remove extra left and right margins, due to padding */
	.row {margin: 0 -5px;}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Responsive columns */
	@media screen and (max-width: 600px) {
	  .column {
	    width: 100%;
	    display: block;
	    margin-bottom: 20px;
	  }
	}

	/* Style the counter cards */
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  padding: 16px;
	  text-align: justify;
	  background-color: #f1f1f1;
	}
	</style>
</head>
<body>
<?php require_once("header.php"); ?>

	<div class="container-fluid p-0">
		<div id="physiological" class="tabcontent">
			 <div class="display-4">Please Enter Symptoms</div>
			  <div class="jumbotron">
			  	<form method="post" action="">
			  		<div class="row p-3 justify-content-center">
						<div class="col-6">
							<input type="text" placeholder="Please Enter Symptoms" name="symptom" class="form-control"/>
						</div>
						<div class="col-sm-4 sndCont">
		        			<button type="submit" class="btn btn-primary" name="submit">Next</button>
					    </div>
					</div>
				</form>
				<?php if(isset($_POST['submit'])){?>
				<div class="row">
				<p><center><h3>Are you suffering from any of the following symptoms too?</h3></center></p>
						  
				</div>
				<div class="row">
					<p><center><h3>Choose more than 6 symptoms for more accuracy?</h3></center></br></br></p> 
				</div>
				<form method="post" action="">
					<?php foreach ($diseases as $dis) {
						$query1="SELECT * FROM filter_symptoms WHERE disease_name='$dis[disease_name]'";
							$symptomps= $con->getData($query1);

								foreach ($symptomps as $value) {


						?>
						    <div class="column">
						    <div class="card">
						      <p> <input type="checkbox" class="btn btn-success" name="symptom_list[]" value="<?php echo $value["symptom_name"];?>"><?php echo $value["symptom_name"];?></p>
						    </div>
						   </div>
						 
						
					<?php } }?>
					<div class="row p-3 justify-content-center">
						<div class="col-sm-4 sndCont" id="new">
			        		<button type="submit" class="btn btn-primary" name="search">Submit</button>
						</div>
					</div>
				</form>
			    
				</div>
			<?php }?>
			<?php if(isset($_POST['search'])){?>

			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/data.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>

			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

			<table id="datatable">
			    <tbody style="display: none;">
			    	<?php foreach ($count_arr as $value) {?>
			    	<tr>
			            <th ><?php echo $value[0]?></th>
			            <td><?php echo ($value[1]*0.1*100)?></td>
			          
			        </tr>
			    	<?php } ?>
			        
			    </tbody>
			</table>

			<script type="text/javascript">
   					
					Highcharts.chart('container', {
					    data: {
					        table: 'datatable'
					    },
					    chart: {
					        type: 'column'
					    },
					    title: {
					        text: 'Likelyhood Diseases'
					    },
					    yAxis: {
					        allowDecimals: false,
					        title: {
					            text: 'Percentage'
					        }
					    },
					    tooltip: {
					        formatter: function () {
					            return '<b>' + this.series.name + '</b><br/>' +
					                this.point.y + ' ' + this.point.name.toLowerCase();
					        }
					    }
					});
			</script>
			<form method="post" action="printReport.php">
             	<input type="submit" name="create_pdf" class="btn btn-success" value="Print Report"/>
          	</form>
				<?php echo "You are likely suffering from : ".$predicted_disease."<br>";
				//var_dump($_SESSION['patient_symptoms']);?>
		</div>
			<?php } ?>
	</div>

     
	<script src="/gallery/js/jquery-3.1.0.min.js"></script>
	<script src="/gallery/js/health.js"></script>
</body>
</html>






