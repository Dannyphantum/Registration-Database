<html>
<head>
        <title> Students </title> 
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
  <li role="presentation"><a href="deanlist.php">Dean's List</a></li>
  <li role="presentation"><a href="update.php">Update</a></li>
  <li role="presentation"><a href="professor.php">Professor</a></li>
</ul>
    <br>
    
<!---Header for Table--->
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
    </center>
<!---End of Query--->

<!---Inserting Students--->

<?php

if ($_POST['submit']) {
    $id = $_POST['STU_ID'];
    $fname= $_POST['STU_FNAME'];
    $lname = $_POST['STU_LNAME'];
    $class = $_POST['STU_CLASS'];
    $holds = $_POST['STU_HOLDS'];
    $graddate = $_POST['STU_GRADDATE'];
    
    $query = "INSERT INTO STUDENT VALUES ('$id', '$fname', '$lname', '$class', '$holds', '$graddate')";
    mysqli_query($connection, $query);
}


?>

<br>

<div class="container"> 
     <h2>Add Students</h2>
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
                  <label for="STU_FNAME">First Name</label>
                  <input id="STU_FNAME" name="STU_FNAME" type="text" class="validate form-control">
                
                </div>
            </div>
            
            <br>
    
            <div class="row"> 
                <div class="input-field col s10">  
                  <label for="STU_LNAME">Last Name</label>
                  <input id="STU_LNAME" name="STU_LNAME" type="text" class="validate form-control">
                 
                </div> 
            </div> 
                
                <br>
                
              <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_CLASS">Classification</label>
                  <input id="STU_CLASS" name="STU_CLASS" type="text" class="validate form-control">
                  
                </div> 
              </div> 
                
                <br>
                
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_HOLDS">Hold Status</label> 
                  <input id="STU_HOLDS" name="STU_HOLDS" type="text" class="validate form-control">
                  
                </div> 
            </div> 
                
                <br>
                
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_GRADDATE">Graduation Date</label>
                  <input id="STU_GRADDATE" name="STU_GRADDATE" type="text" class="validate form-control">
                  
                </div> 
              </div> 
                
             </div>
            </div> 
            
        
             <input type="submit"   name="submit" value="submit" class="btn btn-primary btn-lg">

            </form>
          </div>
    </div> 

</body>
</html>