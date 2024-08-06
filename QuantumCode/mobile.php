<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile</title>
    
  </head>
  <body>
  <?php include "header.php"?>

    <section class="course">
      <div class="container">
        <div
          class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft"
        >
          <h2><strong>Mobile</strong></h2>
          <h2 class="ms-4"><strong>Technologies</strong></h2>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/android.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">Android Programming</h2>
            <p>
              Embark on a journey into the world of Core Java and develop a
              strong foundation in one of the most versatile and widely-used
              programming languages. This comprehensive course is designed for
              beginners and aspiring developers seeking to master the
              fundamentals of Java programming.
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
            <h2 class="heading">iOS Programming</h2>
            <p>
              Embark on an exciting journey into the realm of iOS app
              development with our comprehensive course meticulously designed to
              equip individuals with the essential skills and advanced
              techniques required to build innovative, user-centric applications
              for Apple's iOS platform.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/ios.png" alt="" height="200px" />
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
