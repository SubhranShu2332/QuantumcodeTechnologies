<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Programming</title>
  </head>
  <body>
  <?php include "header.php"?>

    <section class="course">
      <div class="container">
        <div
          class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft"
        >
          <h2><strong>Programming</strong></h2>
          <h2 class="ms-4"><strong>Languages</strong></h2>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/c programming.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">C Programming</h2>
            <p>
              Embark on a journey into the world of programming with our
              comprehensive C Programming course tailored for beginners and
              aspiring developers. Master the fundamentals of C, a foundational
              programming language widely used in software development.
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
            <h2 class="heading">C++ Programming</h2>
            <p>
              Dive into the world of C++ programming and acquire comprehensive
              expertise in one of the most versatile and powerful
              object-oriented programming languages. This course is designed for
              beginners and aspiring developers seeking proficiency in C++
              programming.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/cpp.jpeg" alt="" height="200px" />
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/datastr.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">Data Structure</h2>
            <p>
              Delve into the core of software development with our comprehensive
              course on Data Structures and Algorithms, designed for developers
              aiming to enhance their problem-solving skills and build efficient
              software solutions.
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
            <h2 class="heading">PHP</h2>
            <p>
              Enter the world of web development with PHP, a powerful scripting
              language for creating dynamic and interactive web applications.
              This comprehensive course is designed for beginners and aspiring
              developers seeking proficiency in PHP programming.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/php.jpeg" alt="" height="200px" />
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
