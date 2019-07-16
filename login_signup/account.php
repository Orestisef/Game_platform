<?php require_once 'controllers/authController.php' ?>
<!DOCTYPE html>
<html>
<?php require_once 'partials/links.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Λογαριασμός</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/style_signup.css">
    
  </head>
  <body>
    <?php require_once 'partials/navbar.php' ?>
    <div class="section-1 box mobilebox">
     <form class="form-signin">
       <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
       <h1 class="h3 mb-3 font-weight-normal text-center">Στοιχεία Λογαριασμού</h1>

       <div class="form-label-group">
       <input type="text" id="username" name="username" value= "<?php echo $_SESSION['username'];?>" class="form-control" readonly>
          <label for="username">Όνομα</label>
       </div>
       <div class="form-label-group">
       <input type="email" id="inputEmail" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control" placeholder="Email adderss" readonly>
       <label for="inputEmail">Ηλ.ταχυδρομίο</label>
       </div>
       <div class="form-label-group">
       <a class="btn btn-lg btn-warning btn-block" href="changeAccount.php">Αλλαγή στοιχείων</a>
     </div>
     <div>
     <a class="btn btn-sm btn-danger float-right" href="index.php">Κεντρική σελίδα</a>
   </div>
     </form>
     </div>
  </body>
</html>
