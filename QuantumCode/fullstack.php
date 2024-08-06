<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hardware</title>
</head>

<body>
  <?php include "header.php"?>

  <section class="course">
    <div class="container">
      <div class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft">
        <h2><strong>Full Stack</strong></h2>
        <h2 class="ms-4"><strong>Development</strong></h2>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInLeft wow" data-wow-delay="0.3s">
        <div class="col-md-4">
          <img src="./media/htmlcss.png" alt="" height="200px" />
        </div>
        <div class="col-md-8">
          <h2 class="heading">HTML and CSS</h2>
          <p>
          HTML constructs the basic framework of web content, organizing elements, while CSS elevates its appearance, controlling layout, fonts, and colors, both crucial for shaping the interactive and visual aspects of websites and applications.
          </p>
          <div align="right">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInRight wow" data-wow-delay="0.4s">
        <div class="col-md-8">
          <h2 class="heading">Javascript</h2>
          <p>
          JavaScript is a versatile programming language commonly used for creating dynamic, interactive web content. It empowers developers to add functionality, validate forms, manipulate data, and create engaging user experiences within web browsers. JavaScript's flexibility and wide adoption make it a cornerstone of modern web development.
          </p>
          <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./media/js.png" alt="" height="200px" />
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInLeft wow" data-wow-delay="0.3s">
        <div class="col-md-4">
          <img src="./media/django.jpg" alt="" height="200px" />
        </div>
        <div class="col-md-8">
          <h2 class="heading">Django Framework</h2>
          <p>
          Django is a high-level Python web framework that enables rapid development and clean, pragmatic design. It's built for developers to create secure, scalable web applications with ease, utilizing a robust set of tools, libraries, and a straightforward syntax for efficient development.
          </p>
          <div align="right">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
      </div>
      <div class="row mt-5 animate__animated animate__fadeInRight wow" data-wow-delay="0.4s">
        <div class="col-md-8">
          <h2 class="heading">Mern Stack Development</h2>
          <p>
          Building Dynamic Web Applications MERN Stack course, meticulously designed to equip individuals with the skills necessary to become proficient in full-stack web development using MongoDB, Express.js, React, and Node.js 
          </p>
          <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./media/mern.png" alt="" height="200px" />
        </div>
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