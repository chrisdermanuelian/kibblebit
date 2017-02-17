
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="login-form" form action="http://localhost/kibblebit/workspace/login.php" method = "POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder ="password" name="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
    <form class="register-form" form action="http://localhost/kibblebit/workspace/register.php" method = "POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="text" placeholder="first name" name = "fname"/>
      <input type="text" placeholder="last name" name = "lname"/>
      <input type="text" placeholder="kibbleid" name = "kibbleid"/>

      <button>create</button>
      <p class="message">Already registered? <a href="#">Log in</a></p>
    </form>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
