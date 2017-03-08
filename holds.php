<html>
<head>
        <title> Holds </title> 
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
        
<!---Header--->
        <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="homepage.php">Home</a></li>
  <li role="presentation"><a href="student.php">Student</a></li>
  <li role="presentation"><a href="deanlist.php">Dean's List</a></li>
  <li role="presentation"><a href="update.php">Update</a></li>
  <li role="presentation"><a href="professor.php">Professor</a></li>
</ul>
    <br>
<!---End Header--->


<!---Financial Aid Holds--->
<center>
<h1>Financial Holds</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th> 
                      <th data-field="STU_LNAME">Last Name</th> 
                      <th data-field="STU_CLASS">Classification</th> 
                      <th data-field="STU_HOLDS">Holds</th> 
                      <th data-field="STU_GRADDATE">Graduation Date</th> 
                  
                      
                  </tr>
                </thead> 
<tbody>
                

<?php

$query = "SELECT STU_ID, STU_FNAME, STU_LNAME,
          STU_CLASS, STU_HOLDS, STU_GRADDATE
          FROM STUDENT
          WHERE STU_HOLDS = 'Financial'";
if( $result= mysqli_query($connection, "SELECT STU_ID, STU_FNAME, STU_LNAME,
          STU_CLASS, STU_HOLDS, STU_GRADDATE
          FROM STUDENT
          WHERE STU_HOLDS = 'Financial'"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[STU_CLASS] . '</td>';
     echo '<td>' . $row[STU_HOLDS] . '</td>';
     echo '<td>' . $row[STU_GRADDATE] . '</td>'; 
     
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

    </tbody>
    </table>
<!---End of Query--->    
<form action="holds.php" method="post">
<input type="submit"   name="submit" value="Refresh" class="btn btn-primary btn-lg">
</form>

<br>
<br>

<!---Medical Holds--->

<center>
<h1>Medical Holds</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th> 
                      <th data-field="STU_LNAME">Last Name</th> 
                      <th data-field="STU_CLASS">Classification</th> 
                      <th data-field="STU_HOLDS">Holds</th> 
                      <th data-field="STU_GRADDATE">Graduation Date</th> 
                  
                      
                  </tr>
                </thead> 
<tbody>
                

<?php

$query = "SELECT STU_ID, STU_FNAME, STU_LNAME,
          STU_CLASS, STU_HOLDS, STU_GRADDATE
          FROM STUDENT
          WHERE STU_HOLDS = 'Medical'";
if( $result= mysqli_query($connection, "SELECT STU_ID, STU_FNAME, STU_LNAME,
          STU_CLASS, STU_HOLDS, STU_GRADDATE
          FROM STUDENT
          WHERE STU_HOLDS = 'Medical'"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[STU_CLASS] . '</td>';
     echo '<td>' . $row[STU_HOLDS] . '</td>';
     echo '<td>' . $row[STU_GRADDATE] . '</td>'; 
     
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

    </tbody>
    </table>
<!---End of Query--->  
<form action="holds.php" method="post">
<input type="submit"   name="submit" value="Refresh" class="btn btn-primary btn-lg">
</form>
    
    </center>
</body>
</html>