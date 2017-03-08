<html>
    <head>
        <title>Registration Login</title>


<!---Connects page to css file--->
       <?php include('css.php')?>  
<!---Connects page to database--->       
       <?php include('connect.php')?>
       
       
    <div class="jumbotron">
        <div class="container">
  <h1>Howard University Registration System</h1>
  <center><h2>Login Below</h2></center>
  </div>
</div>

<br>

<!-- ID Number text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="ID Number" type="text">
    </div>
</div>

<br>
<br>
<br>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput"></label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Password" class="form-control input-md">
  </div>
</div>

<br>
<br>
<br>

<a class="btn btn-primary btn-lg" href="homepage.php" role="button" align="center">Login</a>


</head>    


</html>