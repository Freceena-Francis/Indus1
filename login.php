<?php
include('db.php');
if(isset($_POST['login']))
{
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $role=$_POST['role'];
  $sqlsaveedit="SELECT * FROM user";
  $resultsaveedit=$conn->query($sqlsaveedit);
  //$oldHash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
  
	while($row=$resultsaveedit->fetch_assoc())
	{
		
		//$password=$row['password'];
		
		$x=$row['alpsid'];
		$y=$row['password'];
		$z=$row['role'];
		$oldHash = 'rasmuslerdorf';
		if( $x==$uname && true === password_verify($oldHash,$y) && $z==$role ){
		//echo "<script type='text/javascript'>alert('hihihihihi');</script>";
		header("location: activitytabledummy.php");
		}
	}

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INDUS BACKOFFICE</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST">
              <h1>INDUS - Login</h1>
              <div>
                <input type="text" class="form-control" name="uname" id="uname" placeholder="Username" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"  />
              </div>
              <select class="form-control" name="role" id="role">
                   <option value="" disabled selected>Select your role</option>
                  <option value="0">INDUS USER</option>
                  <option value="1">USER</option>
                  <option value="2">ADMIN</option>
                </select>
				
				<br>
				<br>
              <div>
                <button class="btn btn-default submit" type="submit" id="login" name="login">Log in</button>
                <a class="reset_pass" href="reset-password.html">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Request Access </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> INDUS BACKOFFICE</h1>
                  <p>©2019 All Rights Reserved. Developed by RAMS INDIA</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       

      </div>
    </div>
  </body>
</html>
