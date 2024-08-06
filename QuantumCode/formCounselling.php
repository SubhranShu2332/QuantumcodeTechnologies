<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Faculty Signup</title>
  
    <link rel="stylesheet" href="formCounselling.css" />
    
  </head>
  <?php include "header.php"?>

  <body onload="generate()">
    <!-- signup starts here -->
    

    <div class="bg">
      
      <div class="parent">
        <form id="form" action="./addCounselling.php" method="post" enctype="multipart/form-data">
          <h1><b>Carrer Counselling</b></h1>

          <label for="name">Name</label>
          <input
            type="text"
            id="name"
            placeholder="Enter Name"
            name="name"
            required
          /><br />

          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter Email"
            required
          /><br />

          <label for="contact">Contact No</label>
          <input
            type="tel"
            id="mob"
            placeholder="Enter Contact Number"
            name="phone"
            required
          /><br />
          <label for="address">Address</label>
          <input
            type="text"
            id="address"
            placeholder="Enter Address"
            name="address"
            required
          /><br />
          <div class="btn">
            <button type="reset" id="cancel" class="btn btn-dark">
              Refresh
            </button>
            <button type="submit" id="submit" class="btn btn-danger">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- signup ends here -->
    <?php include "footer.php"?>
  </body>
  <script src="signup.js"></script>
  <script src="../../signOut.js"></script>
</html>
