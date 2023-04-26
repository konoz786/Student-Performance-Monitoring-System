<?php
  include 'connect.php';
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  


    <style>
        body{
            background-color:#155977;
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

    </style>

  </head>

  <body>
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
           
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        
      </div>

<div class="background">

    <div class="content1">
        <div style="background-color: rgb(75, 192, 192); margin-right: 10px; text-align: center;">
            <h2>STUDENT PERFORMANCE MONITORING SYSTEM</h2>
        </div>
        <form action="csv.php" method="POST">
    <div class="bg-primary-subtle  p-5 d-flex flex-column align-items-center rounded">     
        <div class="input w-25 ">
          <label class="input-text" for="inputGroupSelect01">Semester: </label>
            <select name="semester" class="form-select  bg-info-subtle" id="inputGroupSelect02">
                <option value="Autumn" selected>Autumn</option>
                <option value="Summer">Summer</option>
                <option value="Spring">Spring</option>
            </select> 
            </div>
            <div class="input w-25">
            <label class="input-text">Semester Year: </label>
            <select  name="year" class="form-select bg-info-subtle">
                <option value="2020" selected>2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            </div>
            <div class="input w-25">
            <label class="input-text" for="inputGroupSelect01">Enrolled Course: </label>
            <select  name="courseID" class="form-select bg-info-subtle" id="inputGroupSelect02">
                <option value="CSE101" selected>CSE101</option>
                <option value="EEE131">EEE131</option>
                <option value="ENG101">ENG101</option>
            </select>
            </div>
            <div class="w-25">
                <label class="input-text">Enrolled Section: </label>
                <input class="form-control w-100 bg-info-subtle" type="text" name="section">
            </div>
            <div class="w-25">
                <label class="input-text">Student ID:  </label>
                <input class="form-control w-100 bg-info-subtle" type="text" name="studentID">
            </div>
            <div class="w-25">
                <label class="input-text">Obtained Marks: </label>
                <input class="form-control w-100 bg-info-subtle" type="text" name="marks">
        </div>

            <!-- <button name="submit" class="btn btn-primary w-25 mx-0 mt-4" 
            >Submit</button> -->
            <button name="submit" class="btn btn-primary w-25 mx-0 mt-4" onclick="submitt()">Submit
        </button>
<script>
    // function submitt() {
    //     alert("Submitted");
    // Hover code

//     function submitt() {
//   Swal.fire({
//     title: 'Submitted!',
//     text: 'Your form has been submitted successfully.',
//     icon: 'success',
//     confirmButtonText: 'OK',
//     backdrop: `
//       rgba(0,0,123,0.4)
//       url("https://media.giphy.com/media/3o7buirYcmV5nSwIRW/giphy.gif")
//       left top
//       no-repeat
//     `,
//     timer: 60000 // in milliseconds
//   });
// }
function submitt() {
  Swal.fire({
    title: 'Submitted!',
    text: 'Your form has been submitted successfully.',
    icon: 'success',
    confirmButtonText: 'OK',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://media.giphy.com/media/3o7buirYcmV5nSwIRW/giphy.gif")
      left top
      no-repeat
    `,
    timer: 20000, // in milliseconds
    willClose: () => {
      // Add any code you want to execute when the modal is closed.
      console.log('Modal closed.');
    }
  });
}
            
</script>

</form>
</div>

    
    <!-- JS file link -->
    <script src="main.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</div>    

</body>

</html>