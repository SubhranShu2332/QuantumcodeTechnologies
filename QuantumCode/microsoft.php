<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Microsoft</title>
  </head>
  <body>
  <?php include "header.php"?>

    <section class="course">
      <div class="container">
        <div
          class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft"
        >
          <h2><strong>Microsoft</strong></h2>
          <h2 class="ms-4"><strong>Office</strong></h2>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/net.jpeg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">.NET Framework</h2>
            <p>
              Step into the world of software development excellence with our
              comprehensive .NET Framework course. This program is meticulously
              designed to equip individuals with the fundamental skills and
              advanced knowledge required to build dynamic and scalable
              applications using the versatile .NET Framework.
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
            <h2 class="heading">MS Office and Power BI</h2>
            <p>
              Welcome to our comprehensive Power BI course, your gateway to the
              dynamic realm of data visualization and analytics combined with
              essential skills in Microsoft Office applications. This is
              designed to equip individuals with the indispensable tools and
              expertise necessary not only to extract and transform data but
              also to proficiently craft compelling visualizations.
            </p>
            <div align="left">
            <a href="./signupR.php"><input type="submit" value="Book Demo Class" /></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="./media/powerbi.jpeg" alt="" height="200px" />
          </div>
        </div>
        <div
          class="row mt-5 animate__animated animate__fadeInLeft wow"
          data-wow-delay="0.3s"
        >
          <div class="col-md-4">
            <img src="./media/azure.jpg" alt="" height="200px" />
          </div>
          <div class="col-md-8">
            <h2 class="heading">Microsoft Azure</h2>
            <p>
              Empowering Cloud Innovation Embark on a transformative journey
              into Microsoft Azure, the cutting-edge cloud computing platform,
              with our comprehensive course designed to equip individuals with
              the expertise to navigate and leverage Azure's powerful
              capabilities.
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
