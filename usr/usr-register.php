<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Transport Management System Registration">
  <title>Register - Transport Management System</title>

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
      padding: 25px;
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }

    .info-panel h1 {
      margin-bottom: 20px;
      font-size: 40px;
      line-height: 1;
      font-weight: 500;
      padding-left: 10px;
    }

    .info-panel p {
      padding-left: 10px;
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
      <h1>Welcome to LogiDrive</h1>
      <p>Join us and enjoy our services for managing your transport needs efficiently.</p>
    </div>
    <div class="form-panel">
      <h2>Register</h2>
      <form method="post">
        <div class="input-container">
          <input type="text" name="u_fname" placeholder="First Name" required />
        </div>
        <div class="input-container">
          <input type="text" name="u_lname" placeholder="Last Name" required />
        </div>
        <div class="input-container">
          <input type="text" name="u_phone" placeholder="Contact" required />
        </div>
        <div class="input-container">
          <input type="text" name="u_addr" placeholder="Address" required />
        </div>
        <div class="input-container">
          <input type="email" name="u_email" placeholder="Email Address" required />
        </div>
        <div class="input-container">
          <input type="password" name="u_pwd" placeholder="Password" required />
        </div>
        <button type="submit" name="add_user">Create Account</button>
      </form>
      <p style="margin-top: 20px; font-family: 'League Spartan', sans-serif; font-size: 14px;">
        Already have an account? <a href="index.php">Login</a>
      </p>
    </div>
  </div>
</body>

</html>