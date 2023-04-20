<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="./reg.css">
  <link rel="icon" type="xtypes/images" href="./images/pexels-photo-533990.webp">
  <script src="https://kit.fontawesome.com/9acafcca7d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="main">

  <!-- registration form -->
    <form id="form1" action="#" method="post" class="form1">

      <div class="inputs">
      <label for="name">Enter Your Name.</label>
      <input title="Enter your name" type="text" name="name" id="name" required autofocus>
      <small class="small">Error</small>
      </div>
        

      <div class="inputs">
      <label for="email">Enter Your Email.</label>
      <input title="Enter your email" type="email" name="email" id="email1" required autofocus pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}">
      <small class="small">Error</small>
      </div>
      

      <div class="inputs">
      <label for="pwd1">Enter Your Password.</label>
      <input title="Enter your password" type="password" name="pwd1" id="pwd1" minlength="6" inputmode="numeric" maxlength="16" size="8" autocomplete="on" required autofocus>
      <div class="toggle">
        <i id="hide" class="fa-solid fa-eye-slash"></i>
        <i id="view" class="fa-solid fa-eye"></i>
      </div>
      <small class="small">Error</small>
      </div>

      <div class="inputs">
      <label for="pwd2">Confirm Your Password.</label>
      <input title="Confirm your Password" type="password" name="pwd2" id="pwd2" minlength="6" inputmode="numeric" maxlength="16" size="8" autocomplete="on" required autofocus>
      <div class="toggle">
        <i id="hider" class="fa-solid fa-eye-slash"></i>
        <i id="viewer" class="fa-solid fa-eye"></i>
      </div>
      <small class="small">Error</small>
      </div>
      

      <input type="submit" class="submit" value="Sign Up">
      <p>To Sign in <a href="#form1">Click Here</a> </p>
    </form>



    <!-- login form -->
    <form id="form2" action="#" method="post" class="form2">
      <div class="inputs1">
      <label for="email">Enter Your Email.</label>
      <input title="Enter your email" type="email" name="email" id="email2" required autofocus pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}">
      </div>
    <div class="inputs1">
      <label for="pwd3">Enter Your Password.</label>
     <input title="Enter your password" type="password" name="pwd3" id="pwd3" minlength="6" inputmode="numeric" maxlength="16" size="8" autocomplete="on" required autofocus>
      <div class="toggle">
        <i id="hidden" class="fa-solid fa-eye-slash"></i>
        <i id="viewed" class="fa-solid fa-eye"></i>
      </div>
      </div>

      <input type="submit" class="submit1" value="Sign In">
      <p>To Sign Up <a href="#form2">Click Here</a> </p>
    </form>
  </div>
  <script src="./form.js" type="text/javascript"></script>
</body>
</html>