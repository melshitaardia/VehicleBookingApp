<?php
session_start();
include('vendor/inc/config.php'); //get configuration file
if (isset($_POST['admin_login'])) {
  $a_email = $_POST['a_email'];
  $a_pwd = ($_POST['a_pwd']); //
  $stmt = $mysqli->prepare("SELECT a_email, a_pwd, a_id FROM tms_admin WHERE a_email=? and a_pwd=? "); //sql to log in user
  $stmt->bind_param('ss', $a_email, $a_pwd); //bind fetched parameters
  $stmt->execute(); //execute bind
  $stmt->bind_result($a_email, $a_pwd, $a_id); //bind result
  $rs = $stmt->fetch();
  $_SESSION['a_id'] = $a_id; //assaign session to admin id
  //$uip=$_SERVER['REMOTE_ADDR'];
  //$ldate=date('d/m/Y h:i:s', time());
  if ($rs) { //if its sucessfull
    header("location:admin-dashboard.php");
  } else {
    #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
    $error = "Access Denied Please Check Your Credentials";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Transport Management System - Approver Login">
  <title>Approver Login - Transport Management System</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

  <!-- Style -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      text-decoration: none;
    }

    a {
      color: #a19b9c;
    }

    body {
      font-family: "League Spartan", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: rgb(217, 217, 211);
      /* Dark background color */
    }

    .container {
      display: flex;
      width: 800px;
      height: 500px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      background-color: #575555;
      /* Light dark background for the container */
    }

    .info-panel {
      background-color: #98231e;
      /* Main accent color */
      color: white;
      padding: 25px 25px 25px 50px;
      /* Geser tulisan ke kanan */
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .info-panel h1 {
      margin-bottom: 20px;
      font-size: 40px;
      line-height: 1;
      font-weight: 500;
    }

    .info-panel p {
      font-size: 16px;
    }

    .form-panel {
      background-color: #f1f1f1;
      /* Light background for form */
      padding: 30px;
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #333313;
      /* Dark color for the heading */
    }

    .input-container {
      margin-bottom: 15px;
    }

    input {
      width: 100%;
      padding: 8px 6px;
      border: 1px solid #a19b9c;
      border-radius: 8px;
      font-size: 14px;
      background-color: #fff;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #8B0000;
      /* Focus border color */
      outline: none;
    }

    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      background-color: #98231e;
      /* Main button color */
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #575555;
      /* Hover color for the button */
    }

    a {
      color: #98231e;
      /* Links color */
    }

    a:hover {
      text-decoration: underline;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .container {
        width: 90%;
        height: auto;
        flex-direction: column;
      }

      .info-panel,
      .form-panel {
        width: 100%;
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="info-panel">
      <h1>Welcome Back</h1>
      <p>Log in to manage your transport services efficiently.</p>
    </div>
    <div class="form-panel">
      <h2>Log In</h2>
      <form method="POST">
        <div class="input-container">
          <input type="email" name="a_email" placeholder="Email Address" required />
        </div>
        <div class="input-container">
          <input type="password" name="a_pwd" placeholder="Password" required />
        </div>
        <button type="submit" name="admin_login">Log In</button>
      </form>
      <p style="margin-top: 20px; font-family: 'League Spartan', sans-serif; font-size: 14px;">
        <a href="../index.php">Home</a> | <a href="admin-reset-pwd.php">Forgot Password?</a>
      </p>
    </div>
  </div>
</body>

</html>