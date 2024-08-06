<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="icon" href="../../resources/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">

  <!-- my Js -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="tle fixed-top pt-3">
    <!-- <center class="d-block mt-1 ">
      <h1>Quantum Code</h1>
    </center> -->
    <center>
    <a class="navbar-brand " href="index.php"><img class="webLogo"src="./media/webLogo.png" alt=""></a>
    </center>
    <marquee behavior="" direction=""><h5 class="text-secondary">We are the only institute in Odisha to offer off-campus placements different software companies like TCS, Mindtree, Wipro, Capgemini, Mahindra etc.</h5></marquee>
    
    <nav class="navbar bg-body-white navbar-expand-lg ">
      
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Quantum Code</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <!-- <a class="navbar-brand d-none d-lg-block" href="index.php"><img class="webLogo"src="./media/webLogo.png" alt=""></a> -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <form class="d-flex d-block d-sm-none" role="search" action="search.php">
                <input class="form-control me-2 " name="search" type="search" placeholder="  🔍  Search For The Courses"
                  aria-label="Search" >
              </form>
              <li class="nav-item me-2">
                <a class="nav-link" href="./index.php">Home</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./about.php">About Us</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./courses.php">Courses</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./service.php">Services</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./facultyCareer.php">Careers</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./signupP.php">Placements</a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="./contact.php">Contact Us</a>
              </li>
              <form class=" ms-5 mt-1 d-none d-lg-block" role="search" action="search.php">
                <input class="form-control me-2 " name="search" type="search" placeholder="  🔍       Search For The Courses..."
                  aria-label="Search">
              </form>
            </ul>
            <!-- <button class="btn btn-outline-dark ms-3 rounded-1" type="submit">Log in</button> -->
            <a class="btn btn-dark ms-3 rounded-1 sub" href="signupR.php"  type="submit">Register</a>
          </div>
        </div>
    </nav>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="./bootstrap/bootstrap.bundle.min.js"></script>
  <script>
    // var text = "Aspiring to Achieving: Your Journey in Tech Starts Here";
    // console.log(text.length)
    // var delay = 30;
    // var elem = $("#head");
    //text- string
    //elem - jQuery element where text is to be attached
    //delay - the delay in each text

    // var addTextByDelay = function (text, elem, delay) {
    //   if (!elem) {
    //     elem = $("body");
    //   }
    //   if (text.length > 0) {
    //     //append first character
    //     setTimeout(
    //       function () {
    //         //Slice text by 1 character and call function again                
    //         addTextByDelay(text.slice(1), elem, delay);
    //       }, delay

    //     );

    //     elem.append(text[0]);
    //   }
    // }
    // setTimeout(function () {
    //   addTextByDelay(text, elem, delay)
    // }, 3600);

  </script>
  <!-- My js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- My js INit -->
  <script>new WOW().init();</script>
</body>
</html>