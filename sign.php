<?php


    session_start();
    include("connect.php");
    
    // uploading registration details into the database
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // something was posted
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $password = $_POST['pwd1'];
    $con_password = $_POST['pwd2'];

    if(!empty($user_name) && !empty($password) &&
    !empty($user_email) && !empty($con_password) && !is_numeric($user_name)){
      // save to database
      $user_id = random_num(25);
      $query = "insert into user1 (user_id,name,email,password,con_password) values('$user_id','$user_name','$user_email','$password','$con_password')";

      mysqli_query($con,$query);
      header("Location: reg.php");
      die;

    }else{
      echo "Fill in the Required Fields!";
    }
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