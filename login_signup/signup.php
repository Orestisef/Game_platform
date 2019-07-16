<?php require_once 'controllers/authController.php' ?>
<!DOCTYPE html>
<html>
<?php require_once 'partials/links.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Εγγραφή</title>
    <link rel="stylesheet" type="text/css" href="css/style_signup.css">
  </head>
  <body>

    <form action="signup.php" method="POST" class="form-signin">

      <h1 class="h3 mb-3 font-weight-normal text-center">Εγγραφή νέου χρήστη</h1>

      <?php if(count($errors)>0): ?>
        <div class="alert alert-danger">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="form-label-group">
      <input type="text" id="username" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="Username">
      <label for="username">Όνομα χρήστη</label>
      </div>
      <div class="form-label-group">
      <input type="email" id="inputEmail" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Email adderss">
      <label for="inputEmail">Διεύθυνση Ηλ.Ταχυδρομίου</label>
      </div>
      <div class="form-label-group">
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
      <label for="password">Κωδικός χρήστη</label>
      </div>
      <div class="form-label-group">
      <input type="password" id="password" name="passwordConf" class="form-control" placeholder="Password Confirm" >
      <label for="passwordConf">Επαλήθευση Κωδικού χρήστη</label>
      </div>
      <div class="form-label-group">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup-btn">Εγγραφή</button>
      </div>
      <p class="text-center">Είσαι μέλος?<a href="signin.php"> Είσοδος</a></p>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
    </form>
  </body>
</html>
