
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->



</head>
<?php
    require ("config.php");
    session_start();
    if(isset($_SESSION['admin'])){
        header("location:index.php");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password=mysqli_real_escape_string($conn, $_POST['password']);
        $sql = "SELECT `usename`, `password`, `id` FROM `admin` WHERE `usename`='$email' and `password`='$password'";
        $retval=mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
        $count = mysqli_num_rows($retval);

        if($count==1){
            $_SESSION['admin']=$email;
            header('location:index.php');
        }else{
            header("location:login.php");
        }
        echo $sql;
    }
?>

<body class="cyan">
  <div id="login-page" class="row">
      <br>
      <br>
      <br>
    <div class="col s3 push-s4 z-depth-4 card-panel">
      <form method="post" action="login.php" class="login-form" id="form" class="col s4 push-s4">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login for Food Ordering System</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="email" placeholder="username" id="username" type="text">
            <label for="username" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" placeholder="password" id="password" type="password">
            <label for="password"></label>
          </div>
        </div>
        <div class="row">
            <input type="submit" class="btn center" value="login"/>

          </div>
        </div>


      </form>
    </div>
  </div>
</body>
</html>
