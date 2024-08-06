<!doctype html>
<?php include 'header.php'; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    
    <!-- Style -->
    <link rel="stylesheet" href="contactCss/style.css">

    <title>Contact Us</title>
  </head>
  
  <body>
  <div class="contact">
    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto info">
            <div class="mb-5">
              <h3 class="text-white mb-4">Contact Info</h3>
              <p class="text-white">At Quantum Code, we value your inquiries and feedback. Please feel free to get in touch with us using the information below. Our dedicated team is here to assist you.</p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h3 class="text-white h5 mb-3">Odisha India</h3>
                <ul class="list-unstyled mb-5 info1">
                  <li class="d-flex text-white mb-2">
                    <span class="mr-3"><span class="icon-map"></span></span>Flat no-23,2nd Floor <br>Above Rainbow Cafe, <br>Indradhanu Market, <br>Nayapalli, Bhubaneswar <br>Pin-751015
                  </li>
                  <li class="d-flex text-white mb-2"><span class="mr-3"><span class="icon-phone"></span></span> 7787828987,  9164427828</li>
                  <li class="d-flex text-white email"><span class="mr-3"><span class="icon-envelope-o"></span></span> quantumcodetechnologies@gmail.com </li>
                  <li class="d-flex text-white email"><span class="mr-3"><span class="icon-envelope-o"></span></span> trystwithdj0507@outlook.com </li>
                  <li class="d-flex text-white email"><span class="mr-3"><span class="icon-envelope-o"></span></span> trystwithdeba0507@aol.com  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6 form">
            <div class="box">
              <h3 class="heading">Contact Us</h3>
              <form class="mb-5" method="post" id="contactForm" name="contactForm" action="addContact.php">
                <div class="row">
                  
                  <div class="col-md-12 form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12 form-group">
                    <label for="query" class="col-form-label">Query</label>
                    <textarea class="form-control" name="query" id="query" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>
  </div>
  <?php include "footer.php"?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new WOW().init();
  </script>
  </body>
</html>