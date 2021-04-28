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

<!--- header -->
<?php include('../common/studentheader.php');?>

<!--- body -->

    <div class="container-fluid StudentHomeBanner">
<div class="container-md bg-light p-3">
  <div class="col mb-3">
    <label for="" class="form-label">Type of Event</label>
    <select class="form-select" name="">
      <option value="">Co- Curricular</option>
      <option value="">Cultural</option>
      <option value="">Seminars / Paper Presentation</option>
      <option value="">Sports</option>
    </select>
  </div>
  <div class="col mb-3">
    <label for="" class="form-label">Event Name</label>
    <input type="text" class="form-control" name="inputEventName" value="">
  </div>
  <div class="col mb-3">
    <label for="" class="form-label">Prizes won <span>(if any)</span></label>
    <input type="text" class="form-control" name="" value="">
  </div>
  <div class="col mb-3">
    <label for="" class="form-label">Certificates <span>(if any)</span></label>
    <input type="file" class="form-control" name="" value="">
  </div>
  <div class="col mb-3">
    <center>
    <button type="button" class="btn btn-outline-primary" name="button"> Submit </button>
    </center>
  </div>
</div>
    </div>
    <!-- Footer -->
<?php include('../common/footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
