<?php
 session_start();

 include("connect.php");
 include("functions.php");

 // $user_data = check_login($db);

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
    </style>
</head>

<body>

            <div class="our_rooms">
                <div class="leftroom">
                    





         <div id="myCarousel" class="carousel slide wow bounceInLeft" data-wow-delay="1s" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
    </ol>

  
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="1.jpg" alt="Chania">

        <a href="login.php"><div class="book">Book Now</div></a>

      </div>

      <div class="item">
        <img src="55.jpg" alt="Chania">
        <a href="login.php"><div class="book">Book now</div></a>


      </div>
    
      <div class="item">
        <img src="7.jpg" alt="Flower">
        <a href="login.php"><div class="book"> Book Now</div></a>


      </div>

      <!-- <div class="item">
        <img src="media/44.png" alt="Flower">
      </div> -->
  
    </div>
</div>





                </div>
                <div class="rightroom">
                    <div class="close"><p>&#x2715;</p></div>
                    <div class="roomtitle">Our Rooms</div>
                    <div class="roomservices">Jumanji Hotel Boasts of Luxurious Presidential suite rooms that offer comfortability and privacy. All Our Rooms have speciliazed room service to gurantee that all your unique needs are met and are professional. The rooms have Wifi, Television sets and air conditioning. Jumanji spur, a palour of relaxation, is located opposite the swimming pool and our masseuses are courteous and proffesional.</div>
                </div>
            </div>   

            <div class="topbar">


            <div class="logo"></div>
        
            <div class="register">
                <a href="signup.php"><div class="sign_up">Sign Up
               

                </div></a>


                 <a href="login.php"><div class="log_in">Log In
                    
                </div></a>
      


            </div>            
        </div> 

    <div class="left">

        <div class="righted">
            <div class="checked">
               <div class="midcheck">
                   <div class="explorer">
                      <div class="bookroom"><p>Explore Rooms</p></div>
                   </div>
               </div>
            </div>

            
        </div>
        
    </div>
    
    <div class="right">

        <div class="lefted">






    <div class="moreabtctn">




        <div class="aboutcontact">
                        <div class="abtcnt">
        <div class="abt">About Us</div>
        <div class="cnt">Contact Us</div>
    </div>



       <div class="cntus"><p>Feel Free To Get In Touch With Us.</p>

        <div class="mailphone">
            <div class="mailus">  &#128231; Jumanjihotels@gmail.com  </div>
            <div class="phoneus"> &#128241; +254 797215037</div>

        </div>
        
        
    </div>

    <div class="abtus">Jumanji Hotel is an iconic and unique destination in Kenya. We are located in Karen, a leafy suburb on the outskirts of Nairobi city. It is approximately half-hour drve from Nairobi's Central Business District. We offer confrencing halls, lavish rooms, a top-tier spur and children Entertainment Services.
        
    </div>


        </div>



        <div class="populace">
               <div class="poptitle">Today's Populace</div>
               <div class="popbase">
                 <?php
                  $sql = "select * from users";
                  $result = mysqli_query($db, $sql);
                  $resultCheck = mysqli_num_rows($result);

                  if ($resultCheck > 0) {
                       while ($row = mysqli_fetch_assoc($result)) {
                           echo $row['id'] . "<br>";
                       }
                  }
                  ?>


               </div>
            </div>
        
    </div>
    </div>

    </div>

   <script src="jquery.js"></script>
   <script src="bootstrap.min.js"></script>
   <script src="index.js"></script>



</body>

</html>