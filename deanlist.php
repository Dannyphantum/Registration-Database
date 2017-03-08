<html>
<head>
        <title> Dean's List </title> 
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
  <li role="presentation"><a href="holds.php">Holds</a></li>
  <li role="presentation"><a href="student.php">Student</a></li>
  <li role="presentation"><a href="update.php">Update</a></li>
  <li role="presentation"><a href="professor.php">Professor</a></li>
</ul>

<center>
<h1>Dean's List</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      
                      <th data-field="STU_FNAME">First Name</th> 
                      <th data-field="STU_LNAME">Last Name</th> 
                      <th data-field="STU_CLASS">Classification</th> 
                      <th data-field="STU_GPA">GPA</th>  
                  
                      
                  </tr>
                </thead> 
<tbody>
                

<?php

$query = "SELECT STUDENT.STU_LNAME, STUDENT.STU_FNAME, 
            STUDENT.STU_CLASS, TRANSCRIPT.STU_GPA
            FROM STUDENT, TRANSCRIPT
            WHERE TRANSCRIPT.STU_GPA >= 3.0
            AND STUDENT.STU_ID = TRANSCRIPT.STU_ID";
if( $result= mysqli_query($connection, "SELECT STUDENT.STU_LNAME, STUDENT.STU_FNAME, 
            STUDENT.STU_CLASS, TRANSCRIPT.STU_GPA
            FROM STUDENT, TRANSCRIPT
            WHERE TRANSCRIPT.STU_GPA >= 3.0
            AND STUDENT.STU_ID = TRANSCRIPT.STU_ID"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[STU_CLASS] . '</td>';
     echo '<td>' . $row[STU_GPA] . '</td>';
      
     
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

    </tbody>
    </table>
    </body>





</html>