<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;500&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <title>Cricket Club IIITDMJ</title>
</head>
<body>

    <?php include'nav.php' ?>
<section class="my-5">
    <div class="pb-5">
      <h2 class="text-center text-dark"> Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control" >
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control" >
        </div>

        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control" >
        </div>

        <div class="form-group">
          <label>Comments</label>
          <input type="textarea" name="comment" autocomplete="off" class="form-control" >
        </div>
        <button type="submit" class="btn btn-success">Submit</button>

      </form>
    </div>
  </section>
</body>
<?php include 'footer.php'?>
</html>