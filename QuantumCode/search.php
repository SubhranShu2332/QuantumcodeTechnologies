<?php include 'header.php';
include 'conn.php';
$search= mysqli_real_escape_string($conn,$_REQUEST['search']);
$my_query="select * from Courses where lower(category) like '%".strtolower($search)."%' or lower(name) like '%".strtolower($search)."%' or lower(description) like '%".strtolower($search)."%'";
$result = mysqli_query($conn,$my_query);
echo $my_query;


?>
<html>

<head>
  <title>Search</title>
</head>

<body>
  <section class="searchPage">
    <div class="container">
      <div class="mt-5 ms-5 py-4 mb-5 headi wow animate__animated animate__bounceInLeft">
        <h2><strong>Search Results For</strong></h2>
        <h2 class="ms-4"><strong>"
            <?php echo $search ?>"
          </strong></h2>
      </div>
      <?php
        while($fetched_data=mysqli_fetch_row($result)) {?>
      <div class="row mt-5 animate__animated animate__fadeInUp wow" data-wow-delay="0.3s">
        <div class="col-md-4">
          <img src="./media/<?php echo $fetched_data[4] ;?>" alt="" height="200px" />
        </div>
        <div class="col-md-8">
          <h2 class="heading">
            <?php echo $fetched_data[2] ?>
          </h2>
          <p>
            <?php echo $fetched_data[3] ?>
          </p>
          <div align="right" class="btnDiv">
            <a href="signupR.php?course=<?php echo $fetched_data[2]?>">
              <input type="submit" value="Book Demo Class" />
          </a>
          </div>
        </div>
      </div>
      <?php }?>
    </div>



  </section>
  <?php  include "footer.php"?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>