<?php

session_start();

$_SESSION;

include("config.php");
include("function.php");

// index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $containerName = $_POST['container_name'];
    $containerDetails = $_POST['container_details'];
    
    echo '<div class="container">';
    echo '<p><strong>' . $containerName . '</strong></p>';
    echo '<p>' . $containerDetails . '</p>';
    echo '<span class="remove" onclick="removeContainer(this.parentNode.id)">Remove</span>';
    echo '</div>';
}

?>

<!DOCTYPE html>
<html>

<head>
<header>
    <h1>Event managment</h1>
    <p>Welcome to my website</p>
    <p>here you can add,remove,detail all kind of events</p>
    <a href="#" class="header-button">Learn More</a>
  </header>

    <title>Event Registration System</title>
    <style>
          /* CSS for the header */
    header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      color: #333333;
      font-size: 36px;
      margin: 0;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    p {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      color: #666666;
      font-size: 16px;
      margin-top: 10px;
    }

    .header-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4caf50;
      color: #ffffff;
      text-decoration: none;
      border-radius: 4px;
      font-family: 'Helvetica Neue', Arial, sans-serif;
      font-size: 14px;
      margin-top: 20px;
      transition: background-color 0.3s;
    }

    .header-button:hover {
      background-color: #45a049;
    }
      
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 70px;
            background-color: #f0f0f0;
        }

        header {
           
            color: #fff;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }





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

       
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #666;
            color: #666;
            padding: 10px;
            text-align: center;

            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: <?php echo isset($_POST['color']) ? $_POST['color'] : '#f0f0f0'; ?>;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-top: 10px;
        }



        .container {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f0f0f0;
        }

        .container p {
            margin: 0;
        }

        .container .remove {
            color: red;
            cursor: pointer;
        }

        .container .remove:hover {
            text-decoration: underline;
        }

        .item {
            margin-bottom: 5px;
            padding: 5px;
            background-color: #ccc;
        }

        .item .remove {
            color: red;
            cursor: pointer;
        }

        .item .remove:hover {
            text-decoration: underline;
        }



        .container {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #fff;
        }
        
        .container p {
            margin: 0;
        }
        
        .container .remove {
            color: red;
            cursor: pointer;
        }
        
        .container .remove:hover {
            text-decoration: underline;
        }
    </style>


</head>

<body>

    <header>
        
        <!-- Include your header content here -->
        <?php include 'header.php'; ?>
    </header>

    <main>
        <!-- Include your main content here -->
        <?php include 'login.php'; ?>
    </main>


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


</body>

</html>