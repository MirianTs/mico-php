<?php

//<!---sections--->

// header 

function setHeader($headerTop,$headerBottom){
    echo ' <header class="header_section">';
        echo '<div class="header_top">';
            echo '<div class="container">';
              echo '<div class="contact_nav">';
                 foreach($headerTop as $headerNav){
                         echo "<a href='#'>";
                         i($headerNav['icon']);
                         span($headerNav['name']);
                     echo "</a>";
                  };
              echo '</div>';
            echo '</div>';
        echo '</div>';
        
        echo '<div class="header_bottom">';
           echo '<div class="container-fluid">';
             echo ' <nav class="navbar navbar-expand-lg custom_nav-container ">';
               echo '<a class="navbar-brand" href="index.php">';
                   img('images/logo.png');
               echo '</a>';

               echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                echo ' <span class=""> </span>';
               echo '</button>';

               echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                  echo ' <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
                    echo ' <ul class="navbar-nav  ">';
                    foreach($headerBottom as $bottom){
                        echo ' <li class="nav-item active">';
                          a($bottom['name'], $bottom['link'],'nav-link');
                        echo '</li>';
                      };
                      echo '</ul>';
                      echo '</div>';

                
                    echo '<div class="quote_btn-container">';
                     echo '<a href="#"';
                     echo '<i class="fa fa-user" aria-hidden="true"></i>';
                     echo '<span>' . 'Login' . '</span>';
                     echo '</a>';

                     echo '<a href="#"';
                     echo '<i class="fa fa-user" aria-hidden="true"></i>';
                     echo '<span>' . 'Sign Up' . '</span>';
                     echo '</a>';

                     echo '<form class="form-inline">';
                     echo ' <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                             </button>';
                    echo '</form>';
               echo '</div>';
               echo  '</div>';
             echo '</nav>';
           echo '</div>';
        echo '</div>';

    echo '</header>';
}




// slider section 

function sliderSection() {
    echo '<section class="slider_section ">
     
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Mico <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Mico <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Mico <br>
                      <span>
                        Hospital
                      </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>';
}



// book section 
function bookAppointment() {
    echo '<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="./appointment.php" method="GET">
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" name="inputPatientName" placeholder="Patient Name" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor s Name</label>
                <select name="inputDoctorName" class="form-control wide" id="inputDoctorName" required>
                  <option value="">Select Doctor</option>
                  <option value="Gega">Gega</option>
                  <option value="Shota">Shota</option>
                  <option value="Jenni">Jenni</option>
                  <option value="Hennry">Hennry</option>
                  <option value="Morco">Morco</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department Name</label>
                <select name="inputDepartmentName" class="form-control wide" id="inputDepartmentName" required>
                  <option value="">Select Department</option>
                   <option value="SkillWill">SkillWill</option>
                  <option value="Cardiology">Cardiology</option>
                  <option value="Dermatology">Dermatology</option>
                  <option value="Pediatrics">Pediatrics</option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" name="inputPhone" id="inputPhone" placeholder="+995 555 555" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" name="inputSymptoms" id="inputSymptoms" placeholder="Symptoms">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" name="inputDate" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>';
}




// about section 

function aboutSection(){
    echo ' <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Hospital</span>
              </h2>
            </div>
            <p>
              has a more-or-less normal distribution of letters, as opposed to using  Content here, content here , making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>';
};




function treatment($treatment){
    echo ' <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">';


          foreach($treatment as $trea){
            echo '<div class="col-md-6 col-lg-3">';
              echo '<div class="box">';
                echo '<div class="img-box">';
                   img($trea['image']);
                echo '</div>';
            echo '<div class="detail-box">';
              h4($trea['h4']);
              p($trea['p']);
              echo '<a href= "#">' . 'Read More' . '</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          };
    
    echo '</div>;';
   echo'</section>';
}




function doctors($doctors){
    echo '<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">';


        foreach($doctors as $doctor){
            echo '<div class="item">';
              echo '<div class="box">';
               echo ' <div class="img-box">';
                 img($doctor['image']);
               echo '</div>';
               echo '<div class="detail-box">';
                 echo '<h5>' . $doctor['name'] .'</h5>';
                 echo '<h6>' . $doctor['h5'] .'</h6>';
                 echo '  <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>';
          };

          echo ' </div>
      </div>
    </div>
  </section>';
};



function testimonial( $testimonial ){
    echo '<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Morijorch
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various
              </p>
            </div>
          </div>';

          foreach($testimonial as $testim){
            echo ' <div class="carousel-item">';
            echo '<div class="box">
                   <div class="client_info">
                   <div class="client_name">';
            echo '<h5>' . $testim['name'] . '</h5>';
            echo '<h6>' . $testim['h6'] . '</h6>';
            echo '</div>';
            echo '<i class="fa fa-quote-left" aria-hidden="true"></i>';
            echo '</div>';
            p($testim['p']);
            echo '  </div>
                   </div>';

          };

          echo '        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>';

};





function formSubmit(){

    echo '<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="./submited.php" method ="GET">
              <div>
                <input type="text" placeholder="Full Name" name="fullName"/>
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>';
}










// footer 


function footer (){
    echo '<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.php">
                  Home
                </a>
                <a href="about.php">
                  About
                </a>
                <a href="treatment.php">
                  Treatment
                </a>
                <a href="doctor.php">
                  Doctors
                </a>
                <a href="testimonial.php">
                  Testimonial
                </a>
                <a href="contact.php">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>';
};