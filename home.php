<?php
 session_start();

 include("connect.php");
 include("functions.php");

// $user_data = check_login($db);


 if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $room_type = $_POST['room_type'];
      
          
    $query = "insert into users (room_type) values ('$room_type')";
     
    mysqli_query($db, $query);

    // header("Location: login.php");
// die;

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

  
</head>

<body>
   

<div class="topbar">


  <div class="logo"></div>
        
  <a href="logout.php"><div class="profile">Log Out

  </div> </a>
  <div class="profiledata">
    <br><div class="profilename">Name: <?php echo $user_data['user_name'];  ?></div>


  <br><div class="profileemail">Email:</div>
      
      
  <br><div class="profileage">Age:</div>
           

  <br><div class="logout">Logout</div>
       

  </div>          
</div> 


 <div class="your_rooms">
  <div class="rooms">
    <div class="room1"><img src="1.jpg" alt="Chania"><p class="roomtypes">Simple</p></div>
    <div class="room2"><img src="55.jpg" alt="Chania"><p class="roomtypes">Supreme</p></div>
    <div class="room3"><img src="7.jpg" alt="Chania"><p class="roomtypes">Deluxe</p></div>
  </div>
  <div class="roombooking">
    <div class="book_form">
    <form method="post">
      <div style="font-size: 20px; text-align: center;text-decoration: underline; margin: 10px; color: black;">Book a Room</div>
      <P>Room Type:</P>
      <select id="selecting" name="room_type">
        <option>Simple</option>
        <option>Supreme</option>
        <option>Deluxe</option>
      </select><br><br>
      <div class="buttoned"><input id="button1" type="submit" value="Check In"></div>
    </form>
    </div> 
    <div class="checkinout">
      <form method="post">
      <div style="font-size: 20px; text-align: center;text-decoration: underline; margin: 10px; color: black;">You Have Booked:</div>
      <P>Room Type:</P>
<!--       <select id="selecting" name="room_type">
        <option>Simple</option>
        <option>Supreme</option>
      </select><br><br> -->
<!--       <input id="button1" type="submit" value="Book Now"> -->
    </form>
    </div>             
  </div>
</div>      

  

   <script src="jquery.js"></script>
   <script src="bootstrap.min.js"></script>
   <script src="index.js"></script>
<script type="text/javascript">
  $('#button1').click(function(){
    $('.book_form').fadeOut();
    $('.checkinout').fadeIn();
     
});
</script>


</body>

</html>