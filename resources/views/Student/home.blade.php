
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student portal</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="student/afterlogincss/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="user">
        <img src="../img/06315a131be93d18e14c5b21bed168c0.jpg" alt="">
        @if(Route::has('login'))
            @auth

            <x-app-layout>
            </x-app-layout>
            @endauth 
            @endif
        <!-- <p>front-end developer</p> -->
    </div>

    <nav class="navbar">
        <!-- <a href="#home">Profile</a> -->
        <a href="#about">result</a>
        <a href="#services">Faculty</a>
        <a href="#portfolio">Payment</a>
        <a href="#contact">Schedule</a>
        <a href="#contact">Courses</a>
         <a href="#contact">Calender</a>
    </nav>

</header>


<!-- header section ends -->

<div id="menu-btn" class="fas fa-bars"></div>




<!-- services section starts  -->

<section class="portal" id="portal">

    <h1 class="heading"> my <span>portal</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-user-circle"></i>
            <h3>My profile</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
            
        </div>

        <div class="box">
            <i class="fas fa-poll-h"></i>
            <h3>Show Result</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
            
        </div>

        <div class="box">
           <i class="fas fa-users"></i>
            <h3>Faculty Members</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
            
        </div>

        <div class="box">
            <i class="fas fa-money-check-alt"></i>
            <h3>payment</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
           
        </div>

        <div class="box">
            <i class="far fa-clock"></i>
            <h3>class schedule</h3>
             <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
           
        </div>

        <div class="box">
            <i class="fas fa-book"></i>
            <h3>Course List</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
        </div>

         <div class="box">
            <i class="far fa-calendar-alt"></i>
            <h3>Academic Calender</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
        </div>

     <!--    <div class="box">
            <i class="fas fa-calculator"></i>
            <h3>CGPA Calculator</h3>
            <br>
            <a href="#" class="btn"> Click <span class="fas fa-chevron-right"></span> </a>
        </div> -->


    </div>

</section>

<!-- services section ends -->



<!-- custom js file link  -->
<script src="student/afterloginjs/script.js"></script>

</body>
</html>



