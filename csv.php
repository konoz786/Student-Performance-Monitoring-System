<?php
include 'connect.php';
session_start();
$inputedMark = 0;


?>
<?php

if (isset($_POST['submit'])) {
    //include 'connect.php';
    //session_start();
    $studentID = $_POST['studentID'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];
    $courseID = $_POST['courseID'];
    $section = $_POST['section'];
    $marks = $_POST['marks'];
    $inputedMark = $marks;
    $facultyID = $_SESSION['ID'];
    $timeStamp = date("Y-m-d H:i:s");

    // echo $studentID;
    // echo $semester;
    // echo $year;
    // echo $courseID;
    // echo $section;
    // echo $marks;
     //echo $facultyID; die();
    // echo $timeStamp;

    $backlogQuery="INSERT INTO backlog_data_t (studentID, edu_year, 
    edu_semester, enrolled_course, enrolled_section, obtained_marks,
    facultyID, time_stamp) VALUES 
    ('$studentID', '$year', '$semester', '$courseID',
    '$section', '$marks', '$facultyID', '$timeStamp')";
    $backlogTable = mysqli_query($con, $backlogQuery);
    
    //Getting backlogID
    $result = mysqli_query($con,
    "SELECT MAX(backlogID) AS backlogID
    FROM backlog_data_t");
    $row=mysqli_fetch_assoc($result); 
    $backlogID=$row['backlogID'];

    $sectionQuery="INSERT INTO section_t (sectionNum, semester, courseID, facultyID, year) VALUES 
    ('$section', '$semester', '$courseID','$facultyID', '$year')";
    $sectionTable = mysqli_query($con, $sectionQuery);
    
    //Getting sectionID
    $result = mysqli_query($con,
    "SELECT MAX(sectionID) AS secID
    FROM section_t");
    $row=mysqli_fetch_assoc($result); 
    $secID=$row['secID'];

    
    $registrationQuery="INSERT INTO registration_t (sectionID, studentID) VALUES 
    ('$secID', '$studentID')";
    $registrationTable = mysqli_query($con, $registrationQuery);

    $examName="Backlog";
    $examQuery="INSERT INTO exam_t (sectionID, examName) VALUES 
    ('$secID', 'Backlog')";
    $examTable = mysqli_query($con, $examQuery);

    //Getting registrationID
    $result = mysqli_query($con,
    "SELECT MAX(registrationID) AS regID
    FROM registration_t");
    $row=mysqli_fetch_assoc($result);
    $regID=$row['regID'];

    //student course performance
    $gradePoint=0;
    if( $marks >= 90 && $marks<=100)
        $gradePoint=4.0;
    elseif( $marks>= 85 && $marks<=89)
        $gradePoint=3.7;
    elseif($marks >= 80 && $marks<=84)
        $gradePoint=3.3;
    elseif( $marks >= 75 && $marks<=79)
        $gradePoint=3.0;
    elseif( $marks >= 70 && $marks <=74)
        $gradePoint=2.7;
    elseif( $marks >= 60 && $marks <=69)
        $gradePoint=2.3;
    elseif( $marks >= 65 && $marks <=64)
        $gradePoint=2.0;
    elseif( $marks >= 55 && $marks <=59)
        $gradePoint=1.7;
    elseif( $marks >= 50 && $marks <=54)
        $gradePoint=1.3;
    elseif( $marks >= 45 && $marks<=49)
        $gradePoint=1.0;
    elseif( $marks < 44 )
        $gradePoint=0.0;
    $studCoursePerformanceQuery = "INSERT INTO student_course_performance_t(registrationID, totalMarksObtained,gradePoint)
    VALUES ('$regID', '$marks', '$gradePoint')";
    $studCoursePerformanceTable = mysqli_query($con, $studCoursePerformanceQuery);
    
    
    //Getting examID
    $result = mysqli_query($con,
    "SELECT MAX(examID) AS examID
    FROM exam_t");
    $row=mysqli_fetch_assoc($result);
    $examID=$row['examID'];
    
    
    $ansMark = $marks/10;
    $answerQuery="INSERT INTO answer_t (answerDetails, answerNum, markObtained,
    registrationID,questionID, examID) VALUES
    ('Backlog', 1, '$ansMark', '$regID', 0, '$examID'),
    ('Backlog', 2, '$ansMark', '$regID', 0, '$examID'),
    ('Backlog', 3, '$ansMark', '$regID', 0, '$examID'),
    ('Backlog', 4, '$ansMark', '$regID', 0, '$examID')";
    $answerTable = mysqli_query($con, $answerQuery);

    $questionQuery="INSERT INTO question_t (questionDetails, markPerQuestion, questionNum,
    difficultyLevel, examID, courseID, coNum) VALUES
    ('Backlog', 10, 1, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 1),
    ('Backlog', 10, 2, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 2),
    ('Backlog', 10, 3, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 3),
    ('Backlog', 10, 4, FLOOR(RAND()* (5-1+1))+1, '$examID', '$courseID', 4)";
    $questionTable = mysqli_query($con, $questionQuery);

    //PO Table
    $programID=0;
    if($courseID=="CSE101"){
        $programID=13;}
    elseif($courseID=="EEE131"){
        $programID=20;}
    elseif($courseID=="ENG101"){
        $programID=9; }

    $poQuery="INSERT INTO po_t (poNum, programID) VALUES
    (FLOOR(RAND()* (12-1+1))+1, '$programID'), 
    (FLOOR(RAND()* (12-1+1))+1, '$programID'),
    (FLOOR(RAND()* (12-1+1))+1, '$programID'),
    (FLOOR(RAND()* (12-1+1))+1, '$programID')";
    $poTable = mysqli_query($con, $poQuery);

    //Getting po/ploID
    $result = mysqli_query($con,
    "SELECT MAX(poID) AS poID
    FROM po_t");
    $row=mysqli_fetch_assoc($result);
    $poID=$row['poID'];

    //PLO Table :)
    $minPLO =$poID-3;
    $ploQuery="INSERT INTO plo_t (ploNum, programID)
    SELECT poNum, programID
    FROM po_t
    Where poID Between '$minPLO' AND '$poID'";
    $ploTable = mysqli_query($con, $ploQuery);
    $ploID=$poID;


    //CO Table
    $coQuery="INSERT INTO co_t (coNum, courseID, ploID, poID) VALUES
    (1, '$courseID', '$ploID', '$poID'),
    (2, '$courseID', '$ploID', '$poID'),
    (3, '$courseID', '$ploID', '$poID'),
    (4, '$courseID', '$ploID', '$poID')";
    $coTable = mysqli_query($con, $coQuery);



    // $backlogCourseQuery = "INSERT INTO  backlog_course_t (backlogID, courseID) VALUES ('$backlogID', '$courseID')";
    // $backlogCourseTable = mysqli_query($con, $backlogCourseQuery);

    // $backlogSectionQuery = "INSERT INTO  backlog_section_t (backlogID, secID) VALUES 
    // ('$backlogID', '$sectionID')";
    // $backlogSectionTable = mysqli_query($con, $backlogSectionQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        
     
      var data = google.visualization.arrayToDataTable([
        ["CLO NUMBER", "percentage", { role: "style" } ],
        ["CO1", <?php echo $inputedMark; ?>, "green"],
        ["CO2", <?php echo $inputedMark; ?>, "red"],
        ["CO3", <?php echo $inputedMark; ?>, "blue"],
        ["CO4", <?php echo $inputedMark; ?>, "yellow"]
      ]);
      
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "GRADE WISE CO ANALYSIS ",
        width: 1300,
        height: 650,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
</head>
<body>
    <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</body>
</html>