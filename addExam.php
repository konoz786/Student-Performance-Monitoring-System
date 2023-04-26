<?php
include 'connect.php';
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
     
div {
   
   background-repeat:no-repeat;
   background-attachment:fixed;
   background-size:100% 100%;
   background-position:top;
   background-color:#6B5B95; 
  }
 
  
  

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #8c7373;
  }
  
  li {
    float: center;
  }
  
    li a {
      display: block;
      color: black;
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

    


  <!-- div row-1 starts here -->

  <form action="addExamConfig.php" method="POST">
      <div style="display:flex;justify-content:space-evenly;margin-top:15px;">
        
        <input type="text" style="background-color:#6698FF;height:36px;cursor: pointer;border-radius: 5px;
           font-size: 14px;letter-spacing:2px;font-weight: bold;text-transform: uppercase;border: none;
           outline:none;text-align:center;color:white;width:200px;margin-top:0px;" 
           placeholder="Exam Name" name="examName"/>


      <select style="width:200px;margin-left:0px;margin-top:0px;" name="courseID" class="select">
     <option disabled selected>Course</option>
     <option value="CSC101">CSC101</option>
      <option value="EEE131">EEE131</option>
      <option value="ENG101">ENG101</option>
     </select>              

    <select style="width:200px;margin-left:0px;margin-top:0px;" name="sectionNum" class="select">
    <option disabled selected>Section</option>
    <option value="1">section-1</option>
    <option value="2">section-2</option>
    <option value="3">section-3</option>
    <option value="4">section-4</option>
    </select>  

      </div>

  <!-- div row-1 ends here -->




    <!-- div row-2 starts here -->

    <div style="display:flex;justify-content:space-evenly;margin-top:15px;">

    <select style="margin-left:0px;width:200px;margin-top:0px;" name="questionCount" class="select">
       <option disabled selected>No. of Questions</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
     </select> 

    <select style="width:200px;margin-left:0px;margin-top:0px;" name="semester" class="select">
       <option disabled selected>Semester</option>
       <option value="spring">spring</option>
       <option value="summer">summer</option>
       <option value="autumn">autumn</option>
     </select>              

     <select style="width:200px;margin-top:0px;margin-left:0px;" name="year" class="select">
       <option disabled selected>year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select>  

    </div>
    
    <div style="display:flex;justify-content:center;">
    <div style="margin-top:15px; width:85%;" class="background">
            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum1">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails1">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark1">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum1">
                </label>
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum2">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails2">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark2">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum2">
                </label>

                
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum3">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails3">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark3">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum3">
                </label>

                
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum4">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails4">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark4">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum4">
                </label>

                
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum5">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails5">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark5">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum5">
                </label>

                
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum6">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails6">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark6">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum6">
                </label>

                
            </div>

            <div class="question-row1">
  
                <label class="question-form">
                 Question Number
                <input type="text" class="question-number" name="questionNum7">
                </label>

                <label class="question-form">
                  Question Details
                <input type="text" class="question-details" name="questionDetails7">
                </label>

                <label class="question-form">
                 Mark
                <input type="text" class="mark" name="mark7">
                </label>

                <label class="question-form">
                 CO Number
                <input type="text" class="coNum" name="coNum7">
                </label>

                
            </div>

            <input type="submit" style="margin-top:20px;" name="submit" value="Submit" class="submitButton">
        
        </div>   
      </div>  
    </form>

  </body>

</html>