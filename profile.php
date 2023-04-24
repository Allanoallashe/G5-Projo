

<?php
  session_start();
  $_SESSION;
  include('connect.php');

  $user_data = check_login($con);

  if (!isset($_SESSION['user_id'])) {
   header("Location: reg.php");
  die();
  }
  
  //code
// $_SESSION['user_id'] = "true";
// header("Location: profile.php");
// if($_SESSION['user_id'] == "false"){
//   // redirect users
//    header("Location: reg.php");
//    die;
//   }
// else{
//    //reset the variable
//    $_SESSION['user_id'] = "false";
// } 


   function check_login($con){
   if(isset($_SESSION['user_id']))
   {
    $id = $_SESSION['user_id'];
    $query = "select * from user1 where user_id = '$id' limit 1";

    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
   }
  //  redirect to login 
  header("Location: reg.php");
  die;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>group5BlogPagesProfile</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="xtypes/images" href="./images/pexels-photo-533990.webp">
  <script src="https://kit.fontawesome.com/9acafcca7d.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
      <!-- <p><img class="logo" src="./images/logo.jpg">Wildlife</p> -->
      <div class="graphics">
        <img class="logo" src="./images/logo.jpg">
        <svg viewBox="0 0 960 300">
          <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">Wildlife</text>
          </symbol>

          <g class = "g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
          </g>
        </svg>
      </div>
      
       <main id="main">
        <i class="fa fa-caret-down"></i> More
        </main> 
        <!-- drop down -->
        <div class="drop-down">
          <h4 id="close">&times;</h4>
          <a href="#plants">Plants</a>
          <a href="#aquatic">Aquatic</a>
          <a href="#birds">Birds</a>
          <a href="#">Terestrial</a>
        </div>

      <div class="profile">
          <i class="fa-solid fa-user"></i>
          <?php echo $user_data['name'];?>
          <i id="viewProfile" class="fa fa-caret-down"></i>

      <div class="profileDrop">
        <h5> 
            Hello, <?php echo $user_data['name']; ?>
        </h5> 
        <button><a href="logout.php">Log Out</a></button>
      </div>
      </div>


    </nav>
          <div class="marquee">
            <marquee behavior="scroll" direction="left" loop="10000" scrollamount="2">The wildlife of Kenya refers to its fauna. The diversity of Kenya's wildlife has garnered international fame, especially for its populations of large mammals. Mammal species include lion (Panthera leo), cheetah (Acinonyx jubatus) hippopotamus (Hippopotamus amphibius), African buffalo (Syncerus caffer), wildebeest (Connochaetes), African bush elephant (Loxodonta africana), zebra (Equus), giraffe (Giraffa), and rhinoceros. Kenya has a very diverse population of birds, including flamingo and common ostrich (Struthio camelus)
            </marquee>
          </div>


        <!-- image popup -->
        <div class="popup">
          <span>&times;</span>
          <img src="./images/pexels-photo-533990.webp" alt="" id="image-pop">
        </div>

          <!-- terestrial -->
         <div class="title1 first">
          <p>Terestrial Animals &plus;</p>
        </div>
      <div class="main">
        <section class="sec">
          <div class="img"><img src="./images/Rhino.jpg" alt=""></div>
          <p><span>c</span>Rhino</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/elephant.jpg" alt=""></div>
          <p><span>c</span>Elephant</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/buffalo.jpg" alt=""></div>
          <p><span>c</span>Buffalo</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/lion.jpg" alt=""></div>
          <p><span>c</span>Lion</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/leopard.jpg" alt=""></div>
          <p><span>c</span>Leopard</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/giraffe.jpg" alt=""></div>
          <p><span>c</span>Giraffe</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/gorilla.jpg" alt=""></div>
          <p><span>c</span>Gorilla</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/hyena.jpg" alt=""></div>
          <p><span>c</span>Hyena</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img"><img src="./images/wilde beest.jpg" alt=""></div>
          <p><span>c</span>Wilde Beest</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section id="plants" class="sec">
          <div class="img"><img src="./images/snake.jpg" alt=""></div>
          <p><span>c</span>Snake</p>
          <a href="" target="blank">click to view more</a>
        </section>
      </div>

       <!-- plants section -->
        <div class="title1">
          <p>Plants &plus;</p>
        </div>
      <div class="main">
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section id="aquatic" class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Plants</p>
          <a href="" target="blank">click to view more</a>
        </section>
      </div>

      <!-- aquatic section -->
      <div class="title1">
          <p>Aquatic Animals &plus;</p>
        </div>
      <div class="main">
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section id="birds" class="sec">
          <div class="img">Image</div>
          <p><span>c</span> Aquatic</p>
          <a href="" target="blank">click to view more</a>
        </section>
      </div>

      <!-- birds -->
      <div class="title1">
          <p>Birds &plus;</p>
        </div>
      <div class="main">
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
        <section class="sec">
          <div class="img">Image</div>
          <p><span>c</span>Birds</p>
          <a href="" target="blank">click to view more</a>
        </section>
      </div>

      <!-- map section -->
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3095102.7314813687!2d34.64083257211432!3d-0.6308324765540915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182780d08350900f%3A0x403b0eb0a1976dd9!2sKenya!5e0!3m2!1sen!2ske!4v1682118043516!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


                <!-- footer section -->
        <div class="footer">
          <div class="contact">
            <p>Contact</p>
            <ul>
              <li><strong>Address:</strong> 
              <small>P.O.BOX 3900 Eldoret 30100 
              </small> 
             </li>
              <li><strong>Location:</strong> <small>Eldoret</small></li>
              <li><strong>Phone:</strong> <small>+254 (0)53 43363 / 43620</small></li>
              <li><strong>Email:</strong> <small>vcmu@mu.ac.ke</small>
              </li>
              <li><strong>Website:</strong>  <small>www.mu.ac.ke</small></li>
            </ul>
          </div>
          <div class="contact">
            <p>About Us</p>

             <p>This website was created by Allan, Davis,Mike, Juma and Steve majorly to emphasize on the significance of African Wildlife.</p>
          </div>
          <div class="contact">
            <p>Social Media</p>
              <div class="social-icons">
              <a href="#" class="s-icon-link" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="s-icon-link" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="#" class="s-icon-link" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="#" class="s-icon-link" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="s-icon-link" target="_blank">
                <i class="fab fa-whatsapp"></i>
              </a>
            </div>
          </div>
          <div class="contact">
            <p>Install App</p>
            <div class="os">
              <img src="./images/google.svg" alt="">
              <img src="./images//mac.svg" alt="">
            </div>
          </div>
        </div>
        <footer>
          <p>
            <strong>&copy;</strong> @groupFiveDevelopers.com
          </p>
        </footer>


  <script src="index.js"></script>
  </body>
</html>