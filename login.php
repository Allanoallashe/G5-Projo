
<?php
  session_start();
  include("connect.php");


  // catch errors
  try{

       // login session

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // something was posted
    $user_email = $_POST['email2'];
    $password = $_POST['pwd3'];
    if(!empty($user_email) && !empty($password)){
      // read from database
      $user_id = random_num(25);
      $query = "select* from user1 where email = '$user_email' limit 1";

      $result = mysqli_query($con,$query);
      if($result){
        if($result && mysqli_num_rows($result) > 0){
          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] === $password){
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: profile.php");
            die;
          }
        }
      }
      
      echo "invalid information!";
    }else{
      echo "invalid information!";
    }
  }
  } catch(Exception $e) {
    echo ('The Email does not Exist Register First!');
  }
  

    // functions for validation
  
// create a random Id
function random_num($length){
  $text = "";
  if($length < 5){
    $length = 5;
  }
  $len = rand(4,$length);
  for ($i=0; $i <$len ; $i++){
    $text .= rand(0,9);
  }
  return $text;
}

?>