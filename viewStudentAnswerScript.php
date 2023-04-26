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
    <link rel="stylesheet" href="questionform.css">

    <style>
       body{

        
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
    background-position:top;
    background-color:#81CDC6;
    height: 600;
    weight:1500;

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
        

      <form method="post">
      <div style="display:flex;justify-content:space-evenly;margin-top:15px;">
        
        <input type="text" style="background-color:#6698FF;height:36px;cursor: pointer;border-radius: 5px;
           font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
           outline:none;text-align:center;color:white;width:250px;margin-top:0px;" 
           placeholder="Exam Name" name="examName"/>


      <select style="width:250px;margin-left:0px;margin-top:0px;" name="courseID" class="select">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select style="width:250px;margin-left:0px;margin-top:0px;" name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

    </div>  <!-- div row-1 ends here -->

  

    <!-- div row-2 starts here -->

    <div style="display:flex;justify-content:space-evenly;margin-top:15px;">

    <select style="width:250px;margin-left:0px;margin-top:0px;" name="semester" class="select">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              


     <input type="submit" style="width:250px;margin-top:0px;margin-left:0px;" name="submit" value="Submit" class="submitButton">


     <select style="width:250px;margin-top:0px;margin-left:0px;" name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select> 
     
     
    </div>

    
   </form>    

   <?php
      if(isset($_POST['submit'])){
      $_SESSION['examName']=$_POST['examName'];
      $_SESSION['courseID']=$_POST['courseID'];
      $_SESSION['sectionNum']=$_POST['sectionNum'];
      $_SESSION['semester']=$_POST['semester'];
      $_SESSION['year']=$_POST['year'];

      header('location:answerScriptGrading.php');
      } 
  ?>  

  </body>

</html>