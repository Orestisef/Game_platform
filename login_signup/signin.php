<?php require_once 'controllers/authController.php' ?>
<!DOCTYPE html>
<html>
<?php require_once 'partials/links.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="css/style_signup.css">
  </head>
  <body>
    <form action="signin.php" method="POST" class="form-signin">
      <img class="mb-4" src="{{ site.baseurl }}/docs/{{ site.docs_version }}/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-center">Sign in</h1>

      <?php if(count($errors)>0): ?>
        <div class="alert alert-danger">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="form-label-group">
      <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Username or Email" >
      <label for="username">Name or Email</label>
      </div>
      <div class="form-label-group">
      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
      <label for="password">Password</label>
      </div>
      <div class="form-label-group">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin-btn" value="Login">Sign in</button>
      </div>
      <p class="text-center">You are not a member?<a href="signup.php"> Sign up</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
</form>
  </body>
</html>
