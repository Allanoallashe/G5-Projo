

<?php
  session_start();
  $_SESSION;
  include('connect.php');


  $user_data = check_login('$con');

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
  header("Location: index.php");
  die;
}


?>