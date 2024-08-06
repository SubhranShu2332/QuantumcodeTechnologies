<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quantum Code || Home</title>
</head>


<body>
  

  <!-- Carousal -->
  <!-- <div class="carousal">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="https://media.istockphoto.com/id/623351544/photo/young-people-doing-group-study-in-library.jpg?s=612x612&w=0&k=20&c=uwPxFzzA_yVCww9yYNjgZtkUKlPfAXp06Qjv1Dlb6NU=" height="600px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./media/vasily-koloda-8CqDvPuo_kI-unsplash.jpg" height="600px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./media/christina-wocintechchat-com-KAULAzQwxzE-unsplash.jpg" class="d-block w-100" height="600px" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div> -->
  <div class="container1">
  <?php
  if (isset($_GET['message'])){
    if($_GET['message']==4)
{ ?>
<div class="alert alert-success mt-10" role="alert">
  Query Submitted!!
</div>
<?php
}?>
<?php
if($_GET['message']==1)
{ ?>
<div class="alert alert-success mt-10" role="alert">
  Registration Form Successfully Submitted!!
</div>
<?php
}?>
<?php
if($_GET['message']==2)
{ ?>
<div class="alert alert-success mt-10" role="alert">
  Form Successfully Submitted!!
</div>
<?php
}?>
<?php

  }
?>
    <div class="row">
      <div class="col-md-6 left">

        <h2 class="wow animate__animated animate__bounceInLeft" data-wow-delay="0.5s">
          <strong>
            Elevate Your <span style="color:aqua">Skills</span>
          </strong>
        </h2>
        <h2 class="wow animate__animated animate__bounceInLeft" data-wow-delay="1.5s">
          <strong>
            Elevate Your <span style="color:rgb(59, 233, 175)">Future</span>
          </strong>
        </h2>
        <h3 id="head" class="wow" data-wow-delay="2.5s">
          <!-- Aspiring to Achieving: Your Journey in Tech Starts Here -->

        </h3>

      </div>
      <div class="col-md-6">
        <div class="carousel1 wow animate__animated animate__zoomIn" data-wow-duration="3.5s">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="./media/firstIndex.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="./media/secondIndex.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  src="./media/trial.jpg"
                  class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Trending Courses -->
  <section class="trend">
    <div class="mt-5 ms-5 ps-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft" data-wow-delay="0.3s" ><h2><strong>Trending</strong></h2><h2 class="ms-5"> Courses</h2></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card rounded-0 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <img src="./media/mern.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MERN Stack</h5>
              <p class="card-text">
              Building Dynamic Web Applications
              MERN Stack course, meticulously designed to equip individuals with the skills necessary to become proficient in full-stack web development using MongoDB, Express.js, React, and Node.js
              </p>
              <a href="./signupR.php" class="btn btn-outline-dark rounded-0">Register</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card rounded-0 wow animate__animated animate__fadeInUp" data-wow-delay="1s">
            <img src="./media/machinelearn.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Foundational Course On Machine Learning</h5>
              <p class="card-text">
              This foundational course introduces participants to the expansive field of Machine Learning, encompassing key concepts, diverse algorithms, and applications, including exploration of supervised and unsupervised learning.
              </p>
              <a href="./signupR.php" class="btn btn-outline-dark rounded-0">Register</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card rounded-0 wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
            <img src="./media/aws.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">AWS Masterclass</h5>
              <p class="card-text">
              Offering advanced expertise and profound insights into Amazon Web Services (AWS), this comprehensive program covers diverse services, architectures, and critical best practices essential for mastering cloud computing through AWS.
              </p>
              <a href="./signupR.php" class="btn btn-outline-dark rounded-0">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="map">
    <div class="mt-5 ms-5 ps-5 py-4 mb-5 headi wow animate_animated animate_bounceInLeft" ><h2><strong>How To</strong></h2><h2 class="ms-5"> <strong>Reach</strong></h2></div>
    <div class="row">
      <!-- <div class="col-md-6">
            <h3></h3>
      </div> -->
      <div class="col-md-12">
        <center>
        <section id="contact" class="contact py wow animate_animated animate_zoomIn">
          <div class="container grid">
            <div class="contact-left">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.88649908154738!2d85.81398893681228!3d20.292650269428048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d1dde00913%3A0x6b0e1d08f90bce3b!2sRainbow%20Cafe!5e0!3m2!1sen!2sin!4v1703010314304!5m2!1sen!2sin" 
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
          </div>
        </section>
        </center>
      </div>
    </div>
  </section>
  <footer class="new_footer_area bg_color">
    <div class="new_footer_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInLeft;
              ">
              <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
              <p>Don't miss any updates of our new offers!</p>
              <div class="f_subscribe_two mailchimp">
                <input type="email" name="EMAIL" class="form-control memail" placeholder="youremail@gmail.com" />
                <button class="btn btn_get btn_get_two" type="submit">
                  Subscribe Us
                </button>
                <p class="mchimp-errmessage" style="display: none"></p>
                <p class="mchimp-sucmessage" style="display: none"></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="
                visibility: visible;
                animation-delay: 0.4s;
                animation-name: fadeInLeft;
              ">
              <h3 class="f-title f_600 t_color f_size_18">Download</h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">Android App</a></li>
                <li><a href="#">ios App</a></li>
                <li><a href="#">Web App</a></li>
                <li><a href="#">Company Policy</a></li>
                <li><a href="#">Booking Slips</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="
                visibility: visible;
                animation-delay: 0.6s;
                animation-name: fadeInLeft;
              ">
              <h3 class="f-title f_600 t_color f_size_18">
                Help and Support
              </h3>
              <ul class="list-unstyled f_list">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Terms &amp; conditions</a></li>
                <li><a href="#">Report an isseue</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Support Policy</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="
                visibility: visible;
                animation-delay: 0.8s;
                animation-name: fadeInLeft;
              ">
              <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
              <div class="f_social_icon">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bg">
        <div class="footer_bg_one"></div>
        <div class="footer_bg_two"></div>
        <!-- <div class="footer_bg_three"></div>  as not working properly-->
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-7">
            <p class="mb-0 f_400">© Made by team Quantum with Love</p>
          </div>
          <div class="col-lg-6 col-sm-5 text-right">
            <p>All Rights Reserved by Quantum Code</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="./bootstrap/bootstrap.bundle.min.js"></script>
  <script>
    var text = "Aspiring to Achieving: Your Journey in Tech Starts Here";
    console.log(text.length)
    var delay = 30;
    var elem = $("#head");
    //text- string
    //elem - jQuery element where text is to be attached
    //delay - the delay in each text

    var addTextByDelay = function (text, elem, delay) {
      if (!elem) {
        elem = $("body");
      }
      if (text.length > 0) {
        //append first character
        setTimeout(
          function () {
            //Slice text by 1 character and call function again                
            addTextByDelay(text.slice(1), elem, delay);
          }, delay

        );

        elem.append(text[0]);
      }
    }
    setTimeout(function () {
      addTextByDelay(text, elem, delay)
    }, 3600);

  </script>
  <!-- My js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- My js INit -->
  <script>new WOW().init();</script>

</body>

</html>