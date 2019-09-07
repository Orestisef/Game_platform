<?php require_once 'controllers/authController.php' ?>
<!DOCTYPE html>
<html>
<?php require_once 'partials/links.php' ?>
<?php require_once 'partials/navbar.php' ?>
  <head>
    <meta charset="utf-8">
    <title>My Account</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/style_signup.css">
  </head>
  <body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div class="section-1 box mobilebox">
      <div id="myDiv" class="animate-bottom">
     <form action="account.php" method="POST" class="form-signin">
       <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
       <h1 class="h3 mb-3 font-weight-normal text-center">Change My Account</h1>

       <div class="form-label-group">
       <input type="text" id="username" name="username" value= "<?php echo $_SESSION['username'];?>" class="form-control"  placeholder="Username">
          <label for="username">Name</label>
       </div>
       <div class="form-label-group">
       <input type="email" id="inputEmail" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control" placeholder="Email adderss">
       <label for="inputEmail">E-mail</label>
       </div>
       <div class="form-label-group">
       <button class="btn btn-lg btn-warning btn-block" type="submit" name="account-btn">Submit</button>
       </div>
       <div>
       <a class="btn btn-sm btn-danger float-right" href="index.php">Go back</a>
     </div>
     </form>
     </div>
     </div>
  </body>
  <script src="loaderScript.js"></script>
</html>
