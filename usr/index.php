<?php
session_start();
include('vendor/inc/config.php');

if (isset($_POST['Usr-login'])) {
  $u_email = $_POST['u_email'];
  $u_pwd = $_POST['u_pwd'];

  $stmt = $mysqli->prepare("SELECT u_email, u_pwd, u_id FROM tms_user WHERE u_email=? AND u_pwd=?");
  $stmt->bind_param('ss', $u_email, $u_pwd);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($db_email, $db_pwd, $u_id);

  if ($stmt->fetch()) {
    $_SESSION['u_id'] = $u_id;
    $_SESSION['login'] = $u_email;
    $ip = $_SERVER['REMOTE_ADDR'];
    $ldate = date('d/m/Y h:i:s', time());

    $stmt->close();

    $geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip;
    $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
    $city = $addrDetailsArr['geoplugin_city'] ?? 'Unknown';
    $country = $addrDetailsArr['geoplugin_countryName'] ?? 'Unknown';

    $log_stmt = $mysqli->prepare("INSERT INTO tms_syslogs (u_id, u_email, u_ip, u_city, u_country) VALUES (?, ?, ?, ?, ?)");
    $log_stmt->bind_param('issss', $u_id, $u_email, $ip, $city, $country);
    $log_stmt->execute();
    $log_stmt->close();

    header("Location: user-dashboard.php");
    exit;
  } else {
    $error = "Access Denied. Please check your credentials.";
    $stmt->close();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Transport Management System Login">
  <title>Login - Transport Management System</title>

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
      color: #2F4F4F;
    }

    body {
      font-family: "League Spartan", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: rgb(217, 217, 211);
    }

    .container {
      display: flex;
      width: 800px;
      height: 500px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 16px;
      overflow: hidden;
      position: relative;
    }

    .info-panel {
      background-color: #98231e;
      color: white;
      padding: 25px 25px 25px 50px;
      /* Tambahkan padding kiri lebih besar */
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
      background-color: white;
      padding: 30px;
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .input-container {
      margin-bottom: 15px;
    }

    input {
      width: 100%;
      padding: 8px 6px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      background-color: #f9f9f9;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #FFD700;
      outline: none;
    }

    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      background-color: #8B0000;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #d62828;
    }

    a {
      color: #2F4F4F;
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
      <?php if (isset($error)) { ?>
        <p style="color: red; font-size: 14px;"><?php echo $error; ?></p>
      <?php } ?>
      <form method="POST">
        <div class="input-container">
          <input type="email" name="u_email" placeholder="Email Address" required />
        </div>
        <div class="input-container">
          <input type="password" name="u_pwd" placeholder="Password" required />
        </div>
        <button type="submit" name="Usr-login">Login</button>
      </form>
      <p style="margin-top: 20px; font-family: 'League Spartan', sans-serif; font-size: 14px;">
        <a href="../index.php">Home</a> | <a href="usr-forgot-password.php">Forgot Password?</a>

      </p>
      <p style="margin-top: 5px; font-family: 'League Spartan', sans-serif; font-size: 14px;">
        Don't have an account? <a href="usr-register.php">Register</a>
        <!-- <a href="../index.php">Home</a> | <a href="admin-reset-pwd.php">Forgot Password?</a> -->
      </p>
    </div>
  </div>
</body>

</html>