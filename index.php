<?php
require_once("Database/Db_functions.php");
$con = new Connect();
$name="";
$email="";
$comment="";
 
if(isset($_POST['submit'])) {    
    $name = $_POST['name'];
    $email = $_POST['email'];
  $comment= $_POST['comment'];
}
$result = $con->execute("INSERT INTO `comments` ( name,email,comment) VALUES ('$name','$email','$comment')");
 //var_dump($result);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Disease Prediction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Leave a comment</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Disease Pred<span>+</span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="doctors.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="signup.php">signup</a>
                  <a class="dropdown-item" href="login.php">login</a>
                   <a class="dropdown-item" href="Admin.php">Admin</a>
                </div>
              </li>
              
                    </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Care For You</h1>
              <p>This systems brings the medical closer to the you which is  fast and easy to access and hope you enjoy our services.
              .</p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Provide Health Care Solutions</h1>
              <p>   <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
          
            <p class="mb-0 lead">Experience and qualified doctors have registered with the system and provide services to the users of the system, they provide online consultation services and can also refer you to the relevant specialist for assistance</p>
          </div>
        </div></p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->

<p>   <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Our Doctors</h2>
            <p class="mb-0 lead">Experience and qualified doctors have registered with the system and provide services to the users of the system, they provide online consultation services and can also refer you to the relevant specialist for assistance</p>
          </div>
        </div></p>

    <section class="section bg-light">
      <div class="container">
     
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Robert Mathenge   </h3>
                  <p>Specialist in Cardiology.</p>
                     <p>Nairobi Hospital New Plaza 3rd Floor Rm 308 .</p>
         
                  <p>
                    <a href="facebook.com" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jane Wafula</h3>
                    <p>Cardiologist.</p>
                  <p>Nairobi Hospital New Plaza 3rd Floor Rm 308.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr.Samuel Gathua</h3>
                  <p>Chest Specialists</p>
                  <p>Menelik Medical Centre, Menelik Road, Off Ngong Road</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jessica Doe</h3>
                 <p>General Doctort.</p>
                  <p>Pan Africa Arcade 1st Floor, Flat No. 12 Hurlingham</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Henderson.Munene. Irimu</h3>
                  <p>General Doctort.</p>
                  <p>Pan Africa Arcade 1st Floor, Flat No. 12 Hurlingham</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Kamau Njoroge</h3>
                  <p>Orthopedic/ Trauma</p>
                  <p>5th Avenue House 8th Floor suite 10, 5th Ngong Rd opp Traffic HQ .</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Mary O Adongo</h3>
                  <p>General Physician</p>
                  <p>KMA Centre Mara Road Upper Hill 3rd Floor Suite No 302.1.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black"> Prof   LN Gakuo    </h3>
                  <p>Orthopedic/ Trauma.</p>
                  <p>Menelik Lane, off Ngong Road.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <!-- END slider -->
        </div>
      </div>
    </section>
    <!-- END section -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Comment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="POST" action="<?php echo $_SERVER ['PHP_SELF'];?>" role="form">
              <div class="form-group">
                <label for="name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name" name="name">
              </div>
       <div class="form-group">
                <label for="email" class="text-black">Email</label>
                <input type="email" class="form-control" id="appointment_email" name="email">
              </div>
          
            
              <div class="form-group">
                <label for="appointment_message" class="text-black">Comment</label>
                <textarea name="comment" id="comment" class="form-control" cols="30" rows="10" ></textarea>
              </div> 
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary" name="submit"> 
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>