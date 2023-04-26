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

    <title></title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"></script>  

           <style>

body{
    background-image:url('iub.png');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:20% 40%;
    background-position:60% 40%;
    background-color:#81CDC6;
  }
     
  .nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #007F80;
    position: fixed;
    top: 0px;
    width: 300px;
    height: 100%;
    color: #1181B2;
  }
  .nav-side-menu .brand {
    background-color:#0D3AA9;
    line-height: 70px;
    display: block;
    text-align: center;
    font-size: 18px;
    color:white;
  }
  .nav-side-menu .toggle-btn {
    display: none;
  }

  .nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  
}

.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}

.nav-side-menu li a {
    text-decoration: none;
    color: #e1ffff;
  }
  .nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
  }
  .nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
  }
  @media (max-width: 767px) {
    .nav-side-menu {
      position: relative;
      width: 100%;
      margin-bottom: 10px;
    }

    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10 !important;
        padding: 3px;
        background-color: #ffffff;
        color: #000;
        width: 40px;
        text-align: center;
      }
      .brand {
        text-align: left !important;
        font-size: 22px;
        padding-left: 20px;
        line-height: 50px !important;
      }
    }

    @media (min-width: 767px) {
        .nav-side-menu .menu-list .menu-content {
          display: block;
        }
      }
      body {
        margin: 0px;
        padding: 0px;
      }
  


  
    
</style>

</head>


<body>
<div class="nav-side-menu">
    <div class="brand"><b>EMPLOYEE DASHBOARD</b></div>
    <i class="fa fa-check fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  

    <div class="menu-list">
  
  <ul id="menu-content" class="menu-content collapse out">
      <li>
        <a href="employee_dashboard.php">
        <i class="fa fa-check fa-lg"></i> DASHBOARD
        </a>
      </li>


      <li>
         <a href="logout.php">
            <i class="fa fa-check fa-lg"></i> LOGOUT
          </a>
      </li>
      </ul>
     </div>
</div> 
    
<div style="display:flex;justify-content:center;" class="row1">

    <form method="POST">
     <select style="margin-left:10px;" name="year" class="select">
       <option disabled selected>Year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select>
       <input style="background:#00BFFF;border-radius:10px;border:none;outline:none;color:#fff;font-size:14px;letter-spacing:2px;
              text-transform:uppercase;cursor:pointer;font-weight:bold;margin-left:10px;height: 36px;width: 100px;"
              type="submit" name="submit" value="Submit"/>
    </form>  
</div>    
  
    <div class="background">
      <div class="row2">
        <button style="margin-bottom:0px;" onclick="schoolWiseEnrollment()" class="School-wise">School-wise</button>
        <button onclick="departmentWiseEnrollment()" class="Department-wise">Department-wise</button>
        <button onclick="programWiseEnrollment()" class="Program-wise">Program-wise</button>
    </div>
          <div style="width:1000px; margin:auto; margin-top:20px;">     
             <div id="piechart" style="width: 1000px; height: 530px; background-color:#155977;"></div>  
          </div>
  </div>

  <?php
    if(isset($_POST['submit'])){
    $year=$_POST['year'];
  }?>

    <script>
    
    function departmentWiseEnrollment(){
    <?php

    $sql="SELECT d.departmentName AS department, COUNT(s.studentID) AS studentNumber
    FROM department_t AS d, student_t AS s
    WHERE s.enrollmentYear='$year' AND d.departmentID=s.departmentID
    GROUP BY s.departmentID";

    $result=mysqli_query($con,$sql);
    ?>

      google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Department', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["department"]."', ".$row["studentNumber"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Student Enrollment Statistics' 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data,{backgroundColor:{fill:"#87CEFA"}},);  
           }  
    }

    function schoolWiseEnrollment(){
    <?php

    $sql="SELECT sch.schoolName as schoolName, COUNT(s.studentID) AS number
    FROM student_t AS s INNER JOIN department_t AS d 
    ON s.departmentID=d.departmentID
    INNER JOIN school_t AS sch
    ON d.schoolID=sch.schoolID
    WHERE s.enrollmentYear='$year' AND d.departmentID=s.departmentID
    GROUP BY sch.schoolName";

    $result=mysqli_query($con,$sql);
    ?>

      google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['School', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["schoolName"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Student Enrollment Statistics' 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data,{backgroundColor:{fill:"#87CEFA"}},);  
           }  
    }

    function programWiseEnrollment(){
    <?php

    $sql="SELECT p.programName AS programName,COUNT(s.studentID) AS number
    FROM student_t AS s,program_t AS p
    WHERE s.enrollmentYear='$year' AND s.programID=p.programID
    GROUP BY p.programName";

    $result=mysqli_query($con,$sql);
    ?>

      google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ProgramName', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["programName"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  

                     var options = {
                     title: 'My Daily Activities',
                     is3D: true,
                    };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data,{backgroundColor:{fill:"#87CEFA"}},);  
           }  
    }

      </script>
   
 
 
  </body>

</html>