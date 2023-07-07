<?php

include("config.php");

session_start();
$current_email=$_SESSION['admin']['admin_email'];
if(!isset($_SESSION['admin']['admin_login']) == true) header("location:/login");

// echo "Hello "." ".$_SESSION['admin']['admin_email']." ".$_SESSION['admin']['admin_name']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <style>
        body{
            margin:0;
            padding:0;
            // background-color:#abde04;
            // background-image:url("https://gorigoricode.com/wp-content/uploads/2022/02/row-reverse01.png");
            // background-size: cover;
        }
        .container-css{
            display: flex;
            flex-direction: column;  
            // background-color: #d3fa52;
            
        }
        hr{
            border: 1px solid blue;
        }
        .header{
            display: flex;
            justify-content: space-between;
            background-color: #d3fa52;
            padding:5px 20px ;
        }
        .item2{
            display:flex;
            align-items:center;
            justify-content:space-evenly;
            width:25%;
        }
        .item1 h4{
            color:grey;
        }
        .a{
            width:100%;
        }
        .collegetable{
            margin: 0px 10px;
        }
        .collegetable h2{
            text-align:center;
            border-bottom : 2px solid red;
            display:block;
            width:30%;
            margin:auto;
            background-color:#f5ff69;
        }
        #AddClgBtn:hover{
            color:black;
            background-color:white;
        }
        .portal{
            display:flex;
            justify-content:center;
            background-image:url("https://static.vecteezy.com/system/resources/thumbnails/001/228/991/small/back-to-school-concept-pattern-on-chalkboard.jpg");
            color:white;
        }
    </style>
</head>
<body>
<div id="main">
    <div class="portal fw-bold">
        <h2>COMMON COLLEGE PORTAL</h2>
    </div>
    <div class="container-css">
        <div class="header">
            <div class="item1">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>&nbsp&nbsp<?php echo strtoupper($_SESSION['admin']['admin_name'])?></h3>

                <h4><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>&nbsp&nbsp<?php echo ($_SESSION['admin']['admin_email'])?></h4>
            </div>
            
            <div class="item2">
                <a class="btn btn-dark" href="/register-college" id="AddClgBtn"><i class="bi bi-file-earmark-plus"></i> &nbsp ADD COLLEGE</a>
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                    </svg> &nbsp ACTION
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#">ADMIN : <?php echo strtoupper($_SESSION['admin']['admin_name'])?></a></li>

                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
            
            
        </div>
        <div class="collegetable" id="collegetable">
            <hr>
            <h2 class="fw-bold">COLLEGE LIST</h2><br><br>
            <table class="table table-hover">
                <thead id="table_head">
                    <tr>
                    <th class="table-warning text-center" scope="col">COLLEGE ID</th>
                    <th class="text-center" scope="col">COLLEGE NAME</th>
                    <th class="text-center" scope="col">COLLEGE ADDRESS</th>
                    <th class="text-center" scope="col">COLLEGE STATE</th>
                    <th class="table-dark text-center" scope="col" colspan="3" style="width:10%">ACTION</th>

                    </tr>
                </thead>
                
                <tbody class="text-center">
                    <?php 
                        $collegeFetch = "SELECT id,college_name,college_address,college_state FROM colleges where email='$current_email' ";

                        $collegeResult = $conn->query($collegeFetch);
                
                        if ($collegeResult->num_rows > 0) {
                            while($row = $collegeResult->fetch_assoc()) {
                                ?>
                                <tr>

                                    <td class="fs-3 fw-bold"><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["college_name"]; ?></td>
                                    <td><?php echo $row["college_address"]; ?></td>
                                    <td><?php echo $row["college_state"]; ?></td>

                                    <td><a href="#" class="btn btn-info"><i class="bi bi-pencil-square"></i> &nbsp EDIT</a></td>

                                    <td><a href="##" class="btn btn-success"><i class="bi bi-eye"></i> &nbsp VIEW</a></td>

                                    <td><button id="CollegeDeleteBtnAJAX" class="btn btn-danger" data-college-id="<?php echo $row["id"]; ?>"><i class="bi bi-trash"></i> &nbsp DELETE</button></td>

                                </tr>
                                <?php
                            }
                        } 
                        else {
                            ?>
                                <center>
                                    <h3 style="color:red">NO RECORD FOUND</h3>
                                    <h4 style="color:red">Please Register College First</h4>
                                    <script>
                                    document.getElementById("table_head").style.display = "none";
                                    </script>
                                </center>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>
<?php
    @$page=$_GET['page'];
    if($page != ''){
    ?>
        <script>alert(<?php echo $page ;?>)</script>
    <?php
    }
?>

<script type="text/javascript" src="/public/js/ajax.js"></script>
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script type="text/javascript" src="/public/js/sweetalert.js"></script>
