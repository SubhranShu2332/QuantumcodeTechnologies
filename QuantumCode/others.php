<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Others</title>
    
  </head>
  <body>
  <?php include "header.php"?>

    <section class="course">
      <div class="container">
        <div
          class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft"
        >
          <h2><strong>Other</strong></h2>
          <h2 class="ms-4"><strong>Technologies</strong></h2>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/robot.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">Robotics</h2>
            <p>
              Immerse yourself in the exciting realm of robotics, where
              technology and innovation converge to create intelligent machines.
              This course is designed to introduce beginners to the fundamental
              concepts and applications of robotics.
            </p>
            <div align="right">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInRight wow"
          data-wow-delay="0.4s"
        >
          <div class="col-md-8">
            <h2 class="heading">Devops</h2>
            <p>
              DevOps Fundamentals: Bridging Development and Operations for Agile
              Software Delivery. Explore the transformative world of DevOps,
              where collaboration, automation, and innovation converge to
              streamline software development and operations. This course is
              tailored for individuals eager to master the principles and
              practices of DevOps.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/devop.jpeg" alt="" height="200px" />
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/aws.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">Amazon Web Services</h2>
            <p>
              Explore the vast capabilities of Amazon Web Services (AWS), the
              leading cloud computing platform, and gain proficiency in
              leveraging its diverse suite of services. This course is designed
              to introduce beginners to the fundamentals and applications of
              AWS.
            </p>
            <div align="right">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInRight wow"
          data-wow-delay="0.4s"
        >
          <div class="col-md-8">
            <h2 class="heading">Block Chain</h2>
            <p>
              Delve into the revolutionary world of blockchain technology,
              understanding its principles, applications, and transformative
              potential. This course is designed to introduce beginners to the
              fundamental concepts and functionalities of blockchain.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/bc.jpeg" alt="" height="200px" />
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/salesforce.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">SalesForce</h2>
            <p>
              Discover the power of Salesforce, a leading cloud-based CRM
              platform revolutionizing customer relationship management and
              business operations. This course is designed to introduce
              individuals to the fundamentals and applications of Salesforce.
            </p>
            <div align="right">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "footer.php"?>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
      integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
