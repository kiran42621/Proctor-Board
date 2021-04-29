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

    <div class="container py-5 ">
      <div class="container py-5 bg-light border">
        <div class="col">
          <center>
          <label for="inputUserID">Enter Register Number</label>
          <input type="text" name="inputUserID" value="">
          <button class="btn btn-outline-primary" type="button" name="button">Search</button>
        </center>
        </div>
        <div class="col py-5">
          <div class="row py-1">
            <h5>Name :</h5>
          </div>
          <div class="row py-1">
            <h5>Class :</h5>
          </div>
          <div class="row py-1">
            <h5>Semester :</h5>
          </div>
          <div class="row py-1">
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
          <div class="row py-1">
            <div class="col-2">
              <h5>Date Time :</h5>
            </div>
            <div class="col-3">
              <input class="form-date" type="date" name="" value="">
            </div>
          </div>
          <div class="row py-1">
            <div class="col-6">
              <h5>Specific Achievements / Difficulties :</h5>
            </div>
            <div class="col-6">
              <input class="form-control" type="text" name="" value="">
            </div>
          </div>
          <div class="row py-1">
            <div class="col-3">
              <h5>Goal Setting :</h5>
            </div>
            <div class="col-3">
              <input class="form-control" type="text" name="" value="">
            </div>
            <div class="col-3">
              <h5>Work Plan :</h5>
            </div><br>
            <div class="col-3">
              <input class="form-control" type="text" name="" value="">
            </div>
          </div>
        </div>
</div>
</div>
    <!--Footer-->
    <?php include('../common/Footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
