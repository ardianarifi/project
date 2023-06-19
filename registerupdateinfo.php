<!DOCTYPE html>
<html>
<head>
  <title>Update Registration Information</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
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

 .container {
  max-width: 500px;
  margin: 0 auto;
  padding: 70px;
  background-color: #f5f5f5;
  border-radius: 5px;
}

h1 {
  text-align: center;
}

form {
  display: grid;
  grid-gap: 10px;
}

label {
  font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="tel"],
textarea {
  width: 100%;
  padding: 5px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
    </style>

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

  <div class="container">
    <h1>Update Registration Information</h1>
    <form>
       <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="username">Username/Email:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Current Password:</label>
      <input type="password" id="password" name="password" required>

     
      <input type="submit" value="Update Information">
    </form>
  </div>
</body>
</html>
