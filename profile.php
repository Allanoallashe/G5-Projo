

<?php
//   session_start();
//   $_SESSION;
//   include('connect.php');

// // if(isset($_SESSION['user_id'])){
// //   unset($_SESSION['user_id']);
// // }

// // header('Location: index.php');
// // die;


//   $user_data = check_login('$con');

//    function check_login($con){
//    if(isset($_SESSION['user_id']))
//    {
//     $id = $_SESSION['user_id'];
//     $query = "select * from user1 where user_id = '$id' limit 1";

//     $result = mysqli_query($con, $query);
//     if($result && mysqli_num_rows($result) > 0){
//       $user_data = mysqli_fetch_assoc($result);
//       return $user_data;
//     }
//    }
//   //  redirect to login 
//   header("Location: profile.php");
//   die;
// }
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
      <p><img class="logo" src="./images/logo.jpg">Wildlife</p>
       <main id="main">
        <i class="fa fa-caret-down"></i> Terestrial
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
          Victor
          <i id="viewProfile" class="fa fa-caret-down"></i>

      <div class="profileDrop">
          <h5>User Name:</h5> 
        <button><a href="#">Log Out</a></button>
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
  <script src="index.js"></script>
  </body>
</html>