<html>
<head>
        <title> Registration </title>
<!---Connects page to css file--->
       <?php include('css.php')?>  
<!---Connects page to database--->       
       <?php include('connect.php')?>  
       
       
<style type="text/css">
            body{
                background: #3A02C4;
                /*background: url(https://www2.howard.edu/sites/default/files/styles/howard_home_slider/public/header1_0.png?itok=K3rtNcLV) no-repeat center center fixed; */
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.55)),
                rgba(0,0,0,0.55) url('https://www2.howard.edu/sites/default/files/styles/howard_home_slider/public/header1_0.png?itok=K3rtNcLV') no-repeat center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
                  color:white;
            }
            a{
                color:white;
            }
        </style>
    </head>
    
    <body>
        
        <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="homepage.php">Home</a></li>
  <li role="presentation"><a href="student.php">Student</a></li>
  <li role="presentation"><a href="holds.php">Holds</a></li>
  <li role="presentation"><a href="deanlist.php">Dean's List</a></li>
  <li role="presentation"><a href="update.php">Update</a></li>
  <li role="presentation"><a href="professor.php">Professor</a></li>
</ul>

    <center>    <h1>Registration Subsystem</h1>
                <h2>Creators</h2>
                <br><h3>Daniel Bonaparte</h3>
                <br><h3>Talia LeRay</h3>
                <br><h3>Shamara A. Smith</h3>
                
    </center>
    
    </body>
</html>