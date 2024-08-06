<!DOCTYPE html>
<?php include 'header.php'?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quantum Code</title>

    <link rel="stylesheet" href="style/about.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    
  </head>
  <body>
    <div class="about lobster-font-family">
      <div class="container">
        <h2 class="text-center text-capitalize">About our Director</h2>
        <div class="row">
          <div class="col-md-9">
            <h4>Where Education Meets Elegance</h4>
            <p>
              Quantum Code Computer Institute specializes in providing education
              and training across a broad spectrum of Computer Science, delving
              into emerging fields such as Python, AI/ML, IoT, and Data Science.
              <br />
              <br />
              Debajyoti Choudhary, the founder of our institution, boasts a
              formidable profile in the IT realm. Armed with a B.Tech in I.T
              from BPUT, he carries an illustrious career spanning two decades
              within the software industry. His journey includes pivotal roles
              in esteemed companies such as TCS, Satyam, MindTree, and Quest
              Telecom. With an invaluable reservoir of knowledge accrued from
              these experiences, Choudhary brings a blend of practical wisdom
              and industry insights that enrich our institution's foundation.
              Presently, he holds the position of Vertical Head within the
              Android Mobile Apps division at AppWallet Technologies in
              Bangalore.
            </p>
            <button><a href="mailto:quantumcodetechnologies.com">For More Contact Us</a></button>
          </div>
          <div class="col-md-3">
            <center><div class="img"></div></center>
          </div>
        </div>
      </div>
    </div>

    <div class="slider main-font-family">
      <h2 class="text-center text-capitalize main-font-family">Testimonials</h2>
      <div id="slideToNext" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slideToNext" data-slide-to="0" class="active"></li>
          <li data-target="#slideToNext" data-slide-to="1"></li>
          <li data-target="#slideToNext" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption d-block">
              <img src="./media/sibu.jpg" />
              <h5>Antaryami Sahoo</h5>
              <p>
                Enrolling at Quantum Code was a game-changer for me. The
                institute's comprehensive courses in AI/ML and Data Science
                equipped me with industry-relevant skills. The hands-on approach
                and dedicated mentors ensured a seamless transition from
                learning to real-world application.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-block">
              <img src="./media/subu.jpg" />
              <h5>Subhranshu Sahoo</h5>
              <p>
                Quantum Code Computer Institute stands out for its commitment to
                staying at the forefront of technology. Their Python and IoT
                programs were exceptional, providing me with a solid foundation
                and opening doors to exciting opportunities in the tech
                industry.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-block">
              <img src="./media/stdu.jpg" />
              <h5>Sangeeta</h5>
              <p>
                I can't recommend Quantum Code enough! The educators' expertise
                and the diverse range of computer science disciplines covered,
                from Android Development to Data Science, empowered me to
                confidently navigate the complexities of today's technological
                landscape.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <?php include 'footer.php'?>
  </body>
</html>
