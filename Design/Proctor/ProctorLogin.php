<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../css/style.css?v=1.1">
  <link rel="stylesheet" href="../CSS/fontawesome/css/all.css?v=1.1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <?php include('../common/Homeheader.php');?>
  <div class="container-fluid big-banner py-5 px-5" >
    <div class="container login-box " >
      <div class="col-6 mb-3">
        <label for="formGroupExampleInput" class="form-label">Employee Id</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
      </div>
      <div class="col-6 mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="password" class="form-control" id="formGroupExampleInput2">
      </div>
      <div class="mb-3">
        <p>Forgot Password? <a href="#">Click Here</a></p>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </div>
  <?php include('../common/Footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>
