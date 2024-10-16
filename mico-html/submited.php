<?php
include('./php/data.php');
include('./php/components.php');
include('./php/functions.php');

?>

<!---header section --->

<!DOCTYPE html>
<html lang="en">
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
<!---end header section --->

<!---body section --->
<body>
    
    <?php
        setHeader($headerTop, $headerBottom);
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $fullName = htmlspecialchars($_GET['fullName'] ?? '');


            echo '<div class="anketa1">';
                h3($fullName .' ' .'Your Form is Submited');
            echo '</div>';
        };


        footer();
    ?>



</body>
<!---end body section --->
</html>


