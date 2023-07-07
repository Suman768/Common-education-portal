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
    <title>College Registration Page</title>
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
<div class="container" style="width:40%; background-color:yellow">
<h3 style="text-align:center">COLLEGE REGISTRATION FORM</h3><hr>
<form method="post" id="RegisterCollegeFormAJAX">
  <div class="mb-3">
    <label for="Email" class="form-label">Registered Email address</label>
    <input type="email" name="emailID" class="form-control" id="Email" required>
  </div><br>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" name="Pass" id="Password" class="form-control" required>
  </div><br>
  <div class="mb-3">
    <label for="name" class="form-label">College Name</label>
    <input type="text" name="CollegeName" class="form-control" id="name" required>
  </div><br>
  <div class="mb-3">
    <label for="address" class="form-label">College Address</label>
    <input type="text" name="CollegeAddress" class="form-control" id="address" required>
  </div><br>
  <div class="mb-3">
    <label for="state" class="form-label">College State</label>
    <select name="CollegeState" class="form-control" aria-label="Default select example" id="state" required >
        <option value="NULL">--Select a State--</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
    </select>
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button><br>
    <hr>
  
  <div class="link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
    <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
    </svg>
    <a href="register-user">Want to Register Admin ?</a></a><br><br>
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