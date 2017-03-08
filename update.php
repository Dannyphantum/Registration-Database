<html>
<head>
        <title> Update </title> 
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
  <li role="presentation"><a href="holds.php">Holds</a></li>
  <li role="presentation"><a href="deanlist.php">Dean's List</a></li>
  <li role="presentation"><a href="professor.php">Professor</a></li>
</ul>

 <center> 
    <h1>Student</h1>
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

<!---Displays Student table--->               
<tbody>
                    
<?php

$query = "SELECT * FROM STUDENT";
if( $result= mysqli_query($connection, "SELECT * FROM STUDENT"))   {

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
    
    </table>
    
<?php

$holds = $_POST['STU_HOLDS'];
$id = $_POST['STU_ID'];

$query = "UPDATE STUDENT SET STUDENT.STU_HOLDS = '$holds'
            WHERE STU_ID = '$id'";
            mysqli_query($connection, $query);
        
?>

<?php

$gpa = $_POST['STU_GPA'];
$id = $_POST['STU_ID'];

$query = "UPDATE TRANSCRIPT SET TRANSCRIPT.STU_GPA = $gpa
            WHERE STU_ID = '$id'";
            mysqli_query($connection, $query);
        
?>

<div class="container">
<div class="row">
         <div class="col s6">
          <div class="row">
            <form class="col s12" method="post">
              <div class="row">
                <div class="input-field col s10"> 
                  <label for="STU_ID">Student ID</label>
                  <input value="" id="STU_ID" name="STU_ID" type="text" class="validate form-control">
                
                </div>
            </div>
            
                <br>
                    
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_HOLDS">Holds</label>
                  <input id="STU_HOLDS" name="STU_HOLDS" type="text" class="validate form-control">
                
                </div>
            </div>
            
            <br>
            
                    
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_GPA">GPA</label>
                  <input id="STU_GPA" name="STU_GPA" type="text" class="validate form-control">
                
                </div>
            </div>
            
            <br>
            
            <input type="submit"   name="submit" value="Update" class="btn btn-primary btn-lg">
    </center>
<!---End of Query--->

</html>