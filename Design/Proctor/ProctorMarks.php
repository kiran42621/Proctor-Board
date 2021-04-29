<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/style.css?v=1.1">
    <link rel="stylesheet" href="../CSS/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
    <!--Header-->
    <?php include('../common/ProctorHeader.php') ?>

<!--Body-->
<div class="container py-5">
  <div class="col">
    <center>
    <label for="inputUserID">Enter Register Number</label>
    <input type="text" name="inputUserID" value="">
    <button class="btn btn-outline-primary" type="button" name="button">Search</button>
  </center>
  </div>
  <div class="col">
    <div class="row">
      <h5>Name :</h5>
    </div>
    <div class="row">
      <h5>Class :</h5>
    </div>
    <div class="row">
      <h5>Semester :</h5>
    </div>
    <div class="row">
      <div class="col-2">
        <h5>Exam Type :</h5>
      </div>
      <div class="col-5">
        <select class="form-select" name="">
          <option value="">Internal 1</option>
          <option value="">Internal 2</option>
          <option value="">Internal 3</option>
          <option value="">Preperatory Examination</option>
          <option value="">Final Examination</option>
        </select>
      </div>

    </div>
  </div>
  <div class="container">
    <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Subject</th>
        <th scope="col">Marks</th>
        <th scope="col">Remarks</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Subject Name</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Subject Name 2</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Subject Name 3</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Subject Name 4</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Subject Name 5</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Subject Name 6</td>
        <td><input type="number" name="inputUserID" value=""></td>
        <td><input type="text" name="inputUserID" value=""></td>
      </tr>
    </tbody>
  </table>
  <div class="col">
    <button class="btn btn-success" type="submit" name="button">Submit</button>
  </div>
  </div>

</div>

    <!--Footer-->
    <?php include('../common/Footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
