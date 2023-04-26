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
    <link rel="stylesheet" href="style.css">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  

  </head>
  <style>
  body {
  background-color: #374a80;
  background-image: url("iub.png");
  background-size: cover;
  background-blend-mode: multiply; /* blend the color with the image */
}
        ::placeholder{
          color:white;
        }

        ::-ms-input-placeholder{
          color:white;
        }

        :-ms-input-placeholder{
          color:white;
        }
        .nav {
  background-color: #5B5EA6; /* Set background color */
  color: #fff; /* Set text color */
  display: flex; /* Use flexbox */
  justify-content: space-between; /* Position items at the start and end */
  align-items: center; /* Center items vertically */
  padding: 10px; /* Add some padding */
}

.nav-header {
  font-size: 24px; /* Set font size */
  font-weight: bold; /* Set font weight */
}

.nav-btn {
  display: none; /* Hide navigation button by default */
}

/* Styling for navigation button */
.nav-btn label {
  display: block;
  cursor: pointer;
  width: 30px;
  height: 30px;
  position: relative;
}

.nav-btn label span {
  display: block;
  background: #fff;
  position: absolute;
  height: 3px;
  width: 100%;
  border-radius: 3px;
  opacity: 1;
  left: 0;
  transform: rotate(0deg);
  transition: all 0.25s ease-in-out;
}

.nav-btn label span:nth-child(1) {
  top: 0px;
}

.nav-btn label span:nth-child(2), .nav-btn label span:nth-child(3) {
  top: 10px;
}

.nav-btn label span:nth-child(4) {
  top: 20px;
}

/* Styling for navigation links */
.nav-links {
  flex-grow: 1;
  display: flex;
  justify-content: flex-end;
}

.nav-links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.nav-links ul li {
  margin-left: 20px;
}

.nav-links ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  text-transform: uppercase;
}

/* Media queries for responsive design */
@media (max-width: 768px) {
  .nav-links {
    position: fixed;
    top: 70px;
    right: 0;
    height: 100vh;
    width: 200px;
    background-color: #333;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    transform: translateX(100%);
    transition: transform 0.5s ease-in;
  }

  .nav-links ul {
    flex-direction: column;
    align-items: center;
  }

  .nav-links ul li {
    margin: 10px 0;
  }

  .nav-btn {
    display: block;
  }

  .nav-btn label:hover ~ .nav-links {
    transform: translateX(0%);
  }
}</style>
  <body>

    <div class="nav">
      
        </div>
        
        <div class="nav-links">
            <ul>
            <li><a href="courseWisePerformance.php" target="_self">Course-wise</a></li>

          <li><a href="instructorWisePerformance.php" target="_self">Instructor-wise</a></li>
          
          <li style="margin-Right:500px;"><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
      </div>

      <div class="background">

      <!-- div row-1 -->
      <div class="row1">
        <form method="POST">
         <select name="year" class="select">
            <option disabled selected>Year</option>
             <option value="2020">2020</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
         </select>
             <input style="background:#009B77;
              border-radius:10px;
              border:none;
              outline:none;
              color:#fff;
              font-size:14px;
              letter-spacing:2px;
              text-transform:uppercase;
              cursor:pointer;
              font-weight:bold;
              margin-left:5px;
              height: 30px;
              width: 80px;"
              
             type="submit" name="submitInstructorName" value="Submit"/>
         
      </div>

                   <!-- div row-2 -->

      <div
      style="height:50px;display:flex;justify-content:space-around;">
      
        <select name="courseInstructor1" class="select"
        style="margin-left:0px;width:250px;height:60%;margin-top:0px;">
             <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>     


         <select name="courseInstructor2" class="select"
            style="margin-left:0px;width:250px;height:60%;margin-top:0px;">
             <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>
      
         <select name="courseInstructor3" class="select"
            style="margin-left:0px;width:250px;height:60%;margin-top:0px;">
            <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>

      </form>              
      </div>

      <div style="height:50px;padding-left:43%;margin-top:15px;">
      <button onclick="viewInstructorWise()" style="height: 30px;width: 60px;margin-left:50px;display:inline-block; border-radius: 10px; border: none;outline: none;background:#00BFFF;color: #fff;font-size: 14px;letter-spacing:2px;text-transform: uppercase;cursor:pointer;font-weight: bold;">
        view</button>
      </div>
    
    <div class="row3" style="margin-top:5px;"> 
       <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
     </div>
</div>  

<?php
if(isset($_POST['submitInstructorName'])){
    $year=$_POST['year'];
    $instructor1=$_POST['courseInstructor1'];
    $instructor2=$_POST['courseInstructor2'];
    $instructor3=$_POST['courseInstructor3'];
  }?>


<!-- chosen instructor wise function -->

<script>
    function viewInstructorWise(){
     
    <?php
    $sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
    FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
    employee_t AS e
    WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
    AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='autumn'
    AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
    GROUP BY sec.facultyID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='summer'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
                $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Summer',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='spring'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
                $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Spring',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
  }
</script>

  </body>

</html>