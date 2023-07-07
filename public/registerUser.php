<?php
    include 'config.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/src/util/send_error.php';

    // Check connection
    if (!$conn) {
      send_error(mysqli_connect_error(), 503);
    }
    else{
      echo "Connected successfully";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .link{
            display:block;
            width:100%;
        }
        .link a{
            color:black;
        }
        hr{
            border: 1px solid black;
        }
        .container{
          -webkit-box-shadow: 26px 31px 55px -4px rgba(0,0,0,0.52);
          -moz-box-shadow: 26px 31px 55px -4px rgba(0,0,0,0.52);
          box-shadow: 26px 31px 55px -4px rgba(0,0,0,0.52);
        }
    </style>
</head>
<body>
<div class="container" style="width:30%; background-color:yellow">
<h3 style="text-align:center; background-color:yellowgreen; color:white">ADMIN REGISTRATION FORM</h3><hr>
<form method="post" id="RegisterUserFormAJAX">
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" name="emailID" class="form-control" id="Email" required>
  </div><br>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="Username" id="Name" class="form-control" required>
  </div><br>
  <div class="mb-3">
    <label for="Phone" class="form-label">Phone No</label>
    <input type="number" name="PhoneNO" class="form-control" id="Phone" required>
  </div><br>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="Pass" id="Password" class="form-control" required>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
  <hr>

  <div class="link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
    <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
    </svg>
    <a href="register-college">Want to Register College ?</a></a><br><br>
  </div>

  <div class="link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg>
    <a href="login">Want to login Admin ?</a><br>
  </div>

  
</form>
</div>
</body>
</html>

<script type="text/javascript" src="/public/js/ajax.js"></script>
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/sweetalert.js"></script>