<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
     
  body {
   background-image:url('iub2.jpg');
   background-repeat:no-repeat;
   background-attachment:fixed;
   background-size:100% 100%;
   background-position:top;
   background-color:grey;
   height:200px;
   width: 1600px;
 
  }
  div {
 background-size:30% 50%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: center;
  }
  
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    /* Change the link color to #111 (black) on hover */
    li a:hover {
      background-color: navajowhite;
    }
    </style>

   
  </head>

  <body>

<div></div>
        <h1>Exam </h1>
        
          <ul>
          <li><a href="employee_dashboard.php" target="_self">Dashboard</a></li>
          <li><a href="addExam.php" target="_self">Add Exam</a></li>
          <li><a href="viewExam.php" target="_self">View Exam</a></li>
          <li><a href="viewStudentAnswerScript.php" target="_self">Evaluate Exam Script</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
       

  </body>

</html>