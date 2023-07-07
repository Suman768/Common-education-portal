<?php 
 include("../config.php");

  extract($_POST);

  $userFetch = " SELECT * FROM users WHERE email='$emailID' AND pass='$Pass' ";
  $userResult = $conn->query($userFetch);

  if ($userResult->num_rows > 0){
    
        $sql = "INSERT INTO colleges (college_name, college_address, college_state, email )
          VALUES ('$CollegeName', '$CollegeAddress', '$CollegeState', '$emailID' )";


        if ($conn->query($sql) === TRUE) {
            $output = array("response" => "success");
        } 
        else {
            $output = array("response" => "invalid");
        }
  }
  else{
    $output = array("response" => "user_not_exist");
  }

  echo json_encode($output);
?>