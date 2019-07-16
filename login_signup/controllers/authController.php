<?php

  session_start();

  require 'config/db.php';

  $errors = array();
  $username = "";
  $email = "";

  //if user clicks on the sign up button
  if (isset( $_POST['signup-btn'] )) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    //validation
    if ( empty($username) ) {
      $errors['username'] = "Όνομα χρήστη Υποχρεωτικό πεδίο";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Η Διεύθυνση Ηλ.Ταχυδρομίουl δεν είναι σωστή";
    }

    if ( empty($email) ) {
      $errors['email'] = "Διεύθυνση Ηλ.Ταχ Υποχρεωτικό πεδίο";
    }

    if ( empty($password) ) {
      $errors['password'] = "Κωδικός χρήστη Υποχρεωτικό πεδίο";
    }

    if ($password !== $passwordConf) {
      $errors['password'] = "Οι κωδικοί είναι διαφορετικοί";
    }
    //query the db
    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ( $userCount > 0 ) {
      $errors['email'] = "Η Διεύθυνση Ηλ.Ταχυδρομίου είναι δεσμευμένη";
    }

    if (count($errors) === 0) {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $token = bin2hex(random_bytes(50));

      $sql = "INSERT INTO users (username, email, token, password) VALUES (?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssss', $username, $email, $token, $password);

      if ($stmt->execute()) {
        //login user
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        // flash message
        $_SESSION['message'] = "Επιτυχής είσοδο";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
      } else {
        $errors['db_error'] = "Database error: fail to register";
      }
    }

  }


  //if user clicks on the sign in button
  if (isset( $_POST['signin-btn'] )) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //validation
    if ( empty($username) ) {
      $errors['username'] = "Όνομα χρήστη Υποχρεωτικό πεδίο";
    }
    if ( empty($password) ) {
      $errors['password'] = "Κωδικός χρήστη Υποχρεωτικό πεδίο";
    }

    if (count($errors) === 0) {

      $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $username, $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {
        //login success
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        // flash message
        $_SESSION['message'] = "Επιτυχής είσοδο";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();
      } else {
        $errors['login_fail'] = "Λάθος στοιχεία";
      }

    }


  }

  //update user account
  if (isset($_POST['account-btn'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $conn->query("UPDATE users SET username='$username', email='$email' WHERE id='$id'") or
            die($conn->error);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header('location: index.php');
  }
  //logout user
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    header('location: signin.php');
    exit();
  }
?>
