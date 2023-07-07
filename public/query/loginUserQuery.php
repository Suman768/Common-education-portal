<?php 

 session_start();

 include("../config.php");

  extract($_POST);

    $userFetch = " SELECT * FROM users WHERE email='$emailID' and pass='$Pass' ";
    $userResult = $conn->query($userFetch);

    $userResultrow = $userResult->fetch_assoc();

    if ($userResult->num_rows > 0){
        $_SESSION['admin'] = array(
            'admin_email' => $userResultrow['email'],
            'admin_name' => $userResultrow['username'],
            'admin_login' => true
       );
      $output = array("response" => "success");
    }
    else{
      $output = array("response" => "user_not_exist");
    }

  echo json_encode($output);
?>