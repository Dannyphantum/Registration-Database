<html>
<head>
        <title> Professors </title> 
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
</ul>

<center>
<h1>Associate Professors</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      
                      <th data-field="PROF_FNAME">First Name</th> 
                      <th data-field="PROF_LNAME">Last Name</th> 
                      <th data-field="CLASS_NAME">Course</th> 
                      <th data-field="PROF_ID">ID Number</th>  
                  
                      
                  </tr>
                </thead> 
<tbody>
                

<?php

$query = "SELECT PROFESSOR.PROF_ID, PROFESSOR.PROF_LNAME,
            PROFESSOR.PROF_FNAME, CLASS.CLASS_NAME, CLASS.CURR_ID
            FROM PROFESSOR, CLASS
            WHERE PROFESSOR.PROF_ID LIKE '%ASSO%'
            AND CLASS.PROF_ID = PROFESSOR.PROF_ID";
if( $result= mysqli_query($connection, "SELECT PROFESSOR.PROF_ID, PROFESSOR.PROF_LNAME,
            PROFESSOR.PROF_FNAME, CLASS.CLASS_NAME, CLASS.CURR_ID
            FROM PROFESSOR, CLASS
            WHERE PROFESSOR.PROF_ID LIKE '%ASSO%'
            AND CLASS.PROF_ID = PROFESSOR.PROF_ID"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     
     echo '<td>' . $row[PROF_FNAME] . '</td>';
     echo '<td>' . $row[PROF_LNAME] . '</td>';
     echo '<td>' . $row[CLASS_NAME] . '</td>';
     echo '<td>' . $row[PROF_ID] . '</td>';
      
     
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

    </tbody>
    </table>
    
<?php

if ($_POST['submit']) {
    $id = $_POST['PROF_ID'];
    $fname= $_POST['PROF_FNAME'];
    $lname = $_POST['PROF_LNAME'];
    
    
    $query = "INSERT INTO PROFESSOR VALUES ('$id', '$fname', '$lname')";
    mysqli_query($connection, $query);
}


?>

<br>

    </div> 
    </body>





</html>