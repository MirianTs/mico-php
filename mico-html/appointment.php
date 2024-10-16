<?php
include('./php/data.php');
include('./php/components.php');
include('./php/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
    
<!---header section --->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book appointment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<!---body section --->
<body>
    
    <?php
        setHeader($headerTop, $headerBottom);
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $patientName = htmlspecialchars($_GET['inputPatientName'] ?? '');
            $doctorName = htmlspecialchars($_GET['inputDoctorName'] ?? ''); 
            $departmentName = htmlspecialchars($_GET['inputDepartmentName'] ?? ''); 
            $phone = htmlspecialchars($_GET['inputPhone'] ?? ''); 
            $symptoms = htmlspecialchars($_GET['inputSymptoms'] ?? ''); 
            $date = htmlspecialchars($_GET['inputDate'] ?? '');  


            echo '<div class="anketa">';

            h3("Patient Name: $patientName");
            h3("Doctor's Name: $doctorName");
            h3("Department Name: $departmentName");
            h3("Phone Number: $phone");
            h3("Symptoms: $symptoms");
            h3("Appointment Date: $date");
            echo '</div>';
        };

        footer();
    ?>



</body>
</html>




