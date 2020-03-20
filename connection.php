<?php
include 'header.php';
 
$crud = new Crud();
 
if(isset($_POST['Submit'])) {    
    $pat_name = $_POST['pat_name'];
    $pat_email = $_POST['pat_email'];
    $pat_phone_number = $_POST['pat_phone_number'];
    $pat_type = $_POST['pat_type'];
    $pat_reg_no="MMU".rand();
    $DOB = $_POST['DOB'];
    $age= $_POST['age'];
    $gender = $_POST['gender'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name']; 
    //Getting role id from the roles table based on role name selected.
    $pat_type_id_query = "SELECT * FROM patient_type where pat_type='$pat_type'";
    $pat_types = $crud->getData($pat_type_id_query);
    foreach ($pat_types as $type) {
           $pat_type_id = $type['pat_type_id'] ;
        }                        
          
    move_uploaded_file($image_tmp,"C:\\xampp\\htdocs\\Dispensary\\public\\images\\$image");   
    //insert data to database    
    $patient = $crud->execute("INSERT INTO `patient` (pat_name,pat_email,pat_phone_number,pat_type_id,pat_reg_no,dob,age,gender,image) VALUES ('$pat_name', '$pat_email', '$pat_phone_number', '$pat_type_id','$pat_reg_no', '$DOB', '$age', '$gender', '$image')");
    //display success message
    if($patient){
    echo "<font color='green'>Patient registered successfully.";
       }
    }

?>
<?php
    $patient_query = "SELECT * FROM patient_type";
    $patient_types = $crud->getData($patient_query);                                      
?>