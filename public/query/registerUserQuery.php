<?php 
 include("../config.php");

  extract($_POST);

  $sql = "INSERT INTO users (email, username, phone, pass )
          VALUES ('$emailID', '$Username', $PhoneNO, '$Pass')";


  if ($conn->query($sql) === TRUE) {
    $output = array("response" => "success");
  } 
  else {
    $emailFetch = " SELECT * FROM users WHERE email='$emailID' ";
    $emailResult = $conn->query($emailFetch);

    if ($emailResult->num_rows > 0){
      $output = array("response" => "email_exist");
    }
    else{
      $output = array("response" => "invalid");
    }
  }


  echo json_encode($output);
?>