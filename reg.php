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
    <form action="#">

      <div class="inputs">
      <label for="name">Enter Your Name.</label>
      <input title="Enter your name" type="text" name="name" id="name">
      </div>

      <div class="inputs">
      <label for="email">Enter Your Email.</label>
      <input title="Enter your email" type="email" name="email" id="email">
      </div>

      <div class="inputs">
      <label for="pwd1">Enter Your Password.</label>
      <input title="Enter your password" type="password" name="pwd1" id="pwd1">
      <div class="toggle">
        <i id="hide" class="fa-solid fa-eye-slash"></i>
        <i id="view" class="fa-solid fa-eye"></i>
      </div>
      </div>

      <div class="inputs">
      <label for="pdw2">Confirm Your Password.</label>
      <input title="Confirm your Password" type="password" name="pwd2" id="pwd2">
      <div class="toggle">
        <i id="hide" class="fa-solid fa-eye-slash"></i>
        <i id="view" class="fa-solid fa-eye"></i>
      </div>
      </div>

      <button type="submit" class="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>