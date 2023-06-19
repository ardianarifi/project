<?php

include("config.php");
include("function.php");

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

    /* CSS for the create event page */
    body {
      margin: 0;
      font-family: 'Helvetica Neue', Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 70px;
    }

    h2 {
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
    .form-group textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      background-color: #f5f5f5;
      transition: border-color 0.3s;
    }

    .form-group input[type="text"]:focus,
    .form-group textarea:focus {
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
  </style>
</head>
<body>

<div class="navbar">
    <ul>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="manage-event.php">Events</a></li>
      <li><a href="login.php">Log In</a></li>
      <li><a href="registerupdateinfo.php">Register update info</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

  <div class="container">
    <h2>Create Event</h2>
    <form method="POST" action="process_event.php">
      <div class="form-group">
        <label for="event-name">Event Name</label>
        <input type="text" id="event-name" name="event_name" placeholder="Enter the event name" required>
      </div>
      <div class="form-group">
        <label for="event-date">Event Date</label>
        <input type="text" id="event-date" name="event_date" placeholder="Enter the event date" required>
      </div>
      <div class="form-group">
        <label for="event-description">Event Description</label>
        <textarea id="event-description" name="event_description" placeholder="Enter the event description" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Create Event">
      </div>
    </form>
  </div>
</body>
</html>

