<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">

<body>
  <section class="course">
    <div class="container">
      <div class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft">
        <h2><strong>Database</strong></h2>
        <h2 class="ms-4"><strong>Courses</strong></h2>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInLeft wow" data-wow-delay="0.3s">
        <div class="col-md-4">
          <img src="./media/oracle.png" alt="" height="200px" />
        </div>
        <div class="col-md-8">
          <h2 class="heading">Oracle Database</h2>
          <p>
            Explore the intricacies of Oracle Database and acquire expertise in one of the most robust and extensively
            utilized relational database management systems (RDBMS). This all-inclusive course is crafted for
            professionals aiming to elevate their proficiency in harnessing Oracle Database technologies for streamlined
            data management and optimization.
          </p>
          <div align="right">
          <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInRight wow" data-wow-delay="0.4s">
        <div class="col-md-8">
          <h2 class="heading">SQL Server</h2>
          <p>
            Dive into the world of Oracle Database and gain mastery over one
            of the most powerful and widely-used relational database
            management systems (RDBMS). This comprehensive course is tailored
            for professionals aspiring to excel in leveraging Oracle Database
            technologies for efficient data management and optimization.
          </p>
          <div align="left">
          <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./media/sql.png" alt="" height="200px" />
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInLeft wow" data-wow-delay="0.3s">
        <div class="col-md-4">
          <img src="./media/mongo.png" alt="" height="200px" />
        </div>
        <div class="col-md-8">
          <h2 class="heading">Mongo DB</h2>
          <p>
            Immerse yourself in the world of MongoDB and unlock the potential of NoSQL databases for scalable and
            flexible data management. This comprehensive course is tailored for professionals seeking expertise in
            leveraging MongoDB's capabilities for modern application development and data-driven solutions.
          </p>
          <div align="right">
          <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInRight wow" data-wow-delay="0.4s">
        <div class="col-md-8">
          <h2 class="heading">Oracle DBA</h2>
          <p>
            Delve into the world of Oracle Database Administration and acquire the skills necessary to architect,
            manage, and optimize robust data solutions. This comprehensive course is tailored for professionals aspiring
            to excel in Oracle DBA roles, overseeing critical data infrastructures in enterprise environments.
          </p>
          <div align="left">
          <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./media/dba.jpg" alt="" height="200px" />
        </div>
      </div>
  </section>
  <?php include "footer.php"?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>