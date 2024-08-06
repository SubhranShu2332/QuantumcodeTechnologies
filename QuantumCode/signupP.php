
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>signup</title>
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
    <!-- for icons	 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="signupP.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="../../resources/logo.png" type="image/x-icon" />
  </head>

  <body onload="generate()">
  <?php include "header.php"?>
    <!-- signup starts here -->
    <div class="bg">
      
      <div class="parent">
        <form id="form" action="addPlacement.php" method="post" enctype="multipart/form-data">
          <h1><b>Placement</b></h1>
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
          <label for="Course">Courses in Quantum Code</label>
          <select name="course" id="course" required>
            <option value="Programming">Programming</option>
            <option value="Hardware">Hardware</option>
            <option value="Language">Language</option>
            <option value="Emerging Tech">Emerging Tech</option>
          </select>
          <br />
          <label for="qualification">Highest Qualification</label>
          <select name="qualification" id="qualification" required>
            <option value="Higher Secondary">Higher Secondary</option>
            <option value="Under Graduate">Under Graduate</option>
            <option value="Graduate">Graduate</option>
            <option value="PhD">PhD</option>
          </select>
          <br />
          <label for="contact">Contact No</label>
          <input
            type="tel"
            id="mob"
            placeholder="Enter Contact Number" name="phone"
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
          <label for="resume">Upload Resume:</label>
          <input
            type="file"
            id="resume"
            name="resume"
            accept=".pdf, .doc, .docx"
          />
          <br />
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
    <?php include "footer.php"?>
    <!-- signup ends here -->
  </body>
  <script src="signup.js"></script>
  <script src="../../signOut.js"></script>
</html>
