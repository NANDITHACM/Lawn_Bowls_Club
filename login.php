<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Lawn Bowl Login</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Dashboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="./assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="login-wrap">
  <div class="login-html"><div class="logo-lb"><img src="./assets/images/lb-logo.svg"></div>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
        <?php include('errors.php'); ?>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <!-- <input type="submit" class="button" value="Signin"> -->
          <button type="submit" class="button" name="login_user">Login</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="register.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input type="text" class="input" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="group">
          <label for="email" class="label">Email</label>
          <input type="email" name="email" class="input" value="<?php echo $email; ?>">
        </div>
        <div class="group">
          <label for="bqn" class="label">BQN number</label>
          <input id="bqnnumber" name="rbqn" class="input">
        </div>        
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input type="password" class="input" name="password_1">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input type="password" class="input" name="password_2">
        </div>
        <div class="group">
          <button type="submit" class="button" name="reg_user">Register</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</label>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>



