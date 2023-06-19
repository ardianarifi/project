<?php
session_start();

include("config.php");



?>


<!DOCTYPE html>
<html>
<head>
  <style>

    /* CSS for the event management navigation bar */
    body {
      margin: 0;
      font-family: 'Helvetica Neue', Arial, sans-serif;
    }

    .navbar {
      background-color: #4caf50;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      display: flex;
      justify-content: center;
    }

    .navbar li {
      float: left;
    }

    .navbar li a {
      display: block;
      color: #ffffff;
      text-align: center;
      padding: 20px 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .navbar li a:hover {
      background-color: #45a049;
    }

    .active {
      background-color: #45a049;
    }

    /* CSS for the registration page */
    body {
      background-color: #f9f9f9;
      font-family: 'Helvetica Neue', Arial, sans-serif;
    }

    .registration-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 70px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .registration-container h2 {
      text-align: center;
      color: #333333;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      color: #555555;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      background-color: #f5f5f5;
      transition: border-color 0.3s;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="email"]:focus,
    .form-group input[type="password"]:focus {
      border-color: #4caf50;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-group .login-link {
      text-align: center;
      margin-top: 10px;
      color: #555555;
    }

    .form-group .login-link a {
      color: #4caf50;
      text-decoration: none;
      transition: color 0.3s;
    }

    .form-group .login-link a:hover {
      color: #45a049;
    }
  </style>
</head>
<body>

<div class="navbar">
    <ul>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="manage-event.php">Events</a></li>
      <li><a href="login.php">Log In</a></li>
      <li><a href="registerupdateinfo.php">Update register info</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

  <div class="registration-container">
    <h2>Register</h2>
    <form  action="register.php" method="post">
    
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Choose a password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
      <div class="form-group login-link">
        <p>Already have an account? <a href="login.php">Log in</a></p>
      </div>
      <input type="submit" value="Add User" class="btn btn-block btn-primary" name="save">
    </form>
  </div>
</body>
</html>
