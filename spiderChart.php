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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- JS Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

#chartdiv {
  width: 100%;
  height: 500px;
  background-color:pink;
}

body{
        background-color:#81CDC6;
    }
    
    
    .studentID{
        background-color:#6698FF;
        height:36px;border: 1px solid;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing:2px;
        font-weight: bold;
        text-transform: uppercase;
        border: none;
        outline: none;
        text-align: center;
        color:white;
    }

    .studentID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .studentID:active{
    opacity: 0.5;
    }

    .enterButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
             
    }

    .enterButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .enterButton:active{
    opacity: 0.5;
    }

    .viewButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
    }

    .viewButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .viewButton:active{
    opacity: 0.5;
    }

    body{
    background-image:url('');
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
    color: #e1ffff;
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
        <i class="fa fa-check fa-lg"></i> Employee Dashboard
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


<div class="background">

<!-- div row-1 starts here -->
     <div style="display:flex;justify-content:center;padding-top:15px;" class="row1">
     <form method="POST">

     <input style="margin-bottom:0px;" class="studentID" type="text" placeholder="Enter Student ID" name="studentID"/>

    <input style="margin-bottom:0px;" class="enterButton" type="submit" name="submit" value="Enter"/>

    </form>       
    </div>  <!-- div row-1 ends here -->

       
        <!-- div row-2 -->
    <div style="display:flex;justify-content:center;margin-bottom:10px;">

        <button onclick="poView()" style="width:200px;" class="viewButton">view PO analysis</button>
        <button onclick="coView()" style="width:200px;" class="viewButton">View CO analysis</button>
    
    </div> <!-- div row-2 ends here -->

        <div style="display:flex;justify-content:center;margin-top:5px;height:600px;width:100%;"class="row3"> 
        <canvas style="background-color:white;height:500px;width:400px;" id="myChart"></canvas>
        </div> <!-- div row-3 ends here -->

     </div>  <!-- background div ends here -->

    <?php
    if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
    }?>


<script>
  
  function poView(){
  <?php
   $sql="SELECT po.poNum AS poNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
   AND q.courseID=co.courseID AND co.poID=po.poID 
   AND r.studentID='$studentID'
   GROUP BY po.poNum";

   $result=mysqli_query($con,$sql);

   $po=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($po,"PO ".$data['poNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var po=<?php echo json_encode($po); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: po,
    datasets: [{
      label: 'PO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }

  function coView(){
  <?php
   $sql="SELECT q.coNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum
   AND r.studentID='$studentID'
   GROUP BY q.coNum";

   $result=mysqli_query($con,$sql);

   $co=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($co,"CO ".$data['coNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var co=<?php echo json_encode($co); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: co,
    datasets: [{
      label: 'CO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }


</script>



</body>

</html>