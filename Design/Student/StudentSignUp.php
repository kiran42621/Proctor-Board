<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../CSS/fontawesome/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="container bg-light py-3">
      <form class="row g-3">
        <!--- Personal Details -->
        <h2>Personal Details</h2>
        <div class="col-md-6">
          <label for="inputName" class="form-label">Name</label>
          <input type="textarea" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputRegisterNumber" class="form-label">Register Number</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-4">
          <label for="inputProgramEnrolled" class="form-label">Program Enrolled</label>
          <input type="textarea" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-4">
          <label for="inputYearOfEnrolment" class="form-label">Year of Enrollment</label>
          <input type="number" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-4">
          <label for="inputSemester" class="form-label">Semester</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>1st semester</option>
            <option>2nd semester</option>
            <option>3rd semester</option>
            <option>4th semester</option>
            <option>5th semester</option>
            <option>6th semester</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputGender" class="form-label">Gender</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Female
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <label for="inputMobile" class="form-label">Mobile No.</label>
          <input type="number" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-4">
          <label for="inputDateofBirth" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputEmail" class="form-label">Email id</label>
          <input type="email" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zipcode</label>
          <input type="text" class="form-control" id="inputZip">
        </div><br>
        <!--- Family Details -->
        <h2>Family Details</h2>
        <table class="table">
          <center>
            <thead>
              <tr>
                <th scope="col">Relationship</th>
                <th scope="col">Name</th>
                <th scope="col">Qualification</th>
                <th scope="col">Profession</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Father</th>
                <td><input type="text" name="inputFatherName" value=""></td>
                <td><input type="text" name="inputFatherQualification" value=""></td>
                <td><input type="text" name="inputFatherProfession" value=""></td>
              </tr>
              <tr>
                <th scope="row">Mother</th>
                <td><input type="text" name="inputMotherName" value=""></td>
                <td><input type="text" name="inputMotherQualification" value=""></td>
                <td><input type="text" name="inputMotherProfession" value=""></td>
              </tr>
              <tr>
                <th scope="row">Sibling 1</th>
                <td><input type="text" name="inputSibling1Name" value=""></td>
                <td><input type="text" name="inputSibling1Qualification" value=""></td>
                <td><input type="text" name="inputSibling1Profession" value=""></td>
              </tr>
              <tr>
                <th scope="row">Sibling 2</th>
                <td><input type="text" name="inputSibling2Name" value=""></td>
                <td><input type="text" name="inputSibling2Qualification" value=""></td>
                <td><input type="text" name="inputSibling2Profession" value=""></td>
              </tr>
            </tbody>
          </center>
        </table>
        <!--- Academic Details -->
        <h2>Academic Details</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name of Institution</th>
              <th scope="col">Year of Passing</th>
              <th scope="col">Percentage</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">SSLC</th>
              <td><input type="text" name="inputSslcInstitute" value=""></td>
              <td><input type="text" name="inputSslcYearofPassing" value=""></td>
              <td><input type="text" name="inputSslcPercentage" value=""></td>
            </tr>
            <tr>
              <th scope="row">PUC</th>
              <td><input type="text" name="inputPucInstitute" value=""></td>
              <td><input type="text" name="inputPucYearofPassing" value=""></td>
              <td><input type="text" name="inputPucPercentage" value=""></td>
            </tr>
          </tbody>
        </table>
        <!--- General Details -->
        <h2>General Details</h2>
        <div class="col-12">
          <label for="inputHobbies" class="form-label">Hobbies</label>
          <p style="color:blue">(Note: You can enter one or more hobbies seperated by ',')</p>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
          <label for="inputPartTimeJobs" class="form-label">Part-Time jobs <span>(If yes specify nature of job)</span></label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
          <label for="inputFuturePlans" class="form-label">Future Plans</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <!--- Password Details -->
        <h2>Password </h2>
        <div class="col-6">
          <label for="inputPassword" class="form-label">Enter Password</label>
          <input type="password" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
          <label for="inputRepassword" class="form-label">Re Enter Password</label>
          <input type="password" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
          <label for="inputFuturePlans" class="form-label">Password Recovery Question 1</label>
          <label class="visually-hidden" for="RecoveryQuestion1">Preference</label>
          <select class="form-select" id="autoSizingSelect">
            <option selected>Choose...</option>
            <option value="1">What is the name of your first pet?</option>
            <option value="2">Which is your favourite car?</option>
            <option value="3">What was your childhood nickname?</option>
            <option value="4">What is the name of your favorite childhood friend?</option>
            <option value="5">What school did you attend for sixth grade?</option>
          </select>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-6">
          <label for="inputFuturePlans" class="form-label">Password Recovery Question 2</label>
          <label class="visually-hidden" for="RecoveryQuestion2">Preference</label>
          <select class="form-select" id="autoSizingSelect">
            <option selected>Choose...</option>
            <option value="1">What is the name of your first pet?</option>
            <option value="2">Which is your favourite car?</option>
            <option value="3">What was your childhood nickname?</option>
            <option value="4">What is the name of your favorite childhood friend?</option>
            <option value="5">What school did you attend for sixth grade?</option>
          </select>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
