<?php
 session_start();

 include("connect.php");
 include("functions.php");



 if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      

if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
         
    $query = "select * from users where user_name = '$user_name' limit 1";
     
   $result = mysqli_query($db, $query);


   if ($result) {
     if ($result && mysqli_num_rows($result) > 0) {

           $user_data = mysqli_fetch_assoc($result);

      if ($user_data['password'] === $password) {

             $_SESSION['user_id'] = $user_data['user_id']; 
             header("Location: home.php");
             die;

      }
       
    }
   }

      echo"Please Enter Valid Information";
    }else{
      echo"Please Enter Valid Information";
    }        
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Destination Jumanji</title>

    <style type="text/css">
    #text{
      height: 25px;
      border-radius: 5px;
      padding: 4px;
      border: solid thin #aaa;
      width: 100%;
    }
    #button{
      padding: 10px;
      width: 100px;
      color: white;
      background-color: lightblue;
      border: none;
    }
      #box{
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;  
      }
     a{
     	color: #fff;
     	text-decoration: underline;
     	font-size: 17px;
     	transition: 1s;
     } 
     a:hover{
     	color: #fff;
     	text-decoration: none;
     	font-size: 18px;

     }
    </style>
</head>

<body>

  <div id="box">
    <form method="post">
      <div style="font-size: 20px; margin: 10px; color: white;">Log In</div>
      <input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
      <input id="text" type="password" name="password" placeholder="Password"><br><br>
      <input i="button" type="submit" value="Log In">
    </form>
    <br>
    <a href="signup.php">Register Now</a>
  </div>
</body>
</html>