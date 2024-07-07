<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="Images/BBTLR Logo 0nly.jpg" alt="Bamboo by the lake resort logo" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="activities.php">Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Contact.php">Contact us</a>
        </li>
       </ul>
        <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="si.html">Sign in</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="su.html">Sign up</a>
        </li>
        </ul>
    </div>
  </div>
</nav>

    <div class="banner">
        <h1>Bamboo By The Lake Resort</h1>
    </div>
    <div class="row::after">
        <img src="Images/Resort rooms 2.png" alt="">
    </div>
    <div class="content">
        <div>
            <h3 style="text-align: center;">Check Availability</h3>
    
            <form action="" style="text-align: center; background-image: image(Images/Resort rooms 2.png);"
            >
                <label for="CI">Check In</label><br>
                <input type="date" id="Dt" placeholder=""><br><br>
                <label for="N">Nights</label><br>
                <input type="number" id="Num" placeholder=""><br><br>
                <label for="CO">Check Out</label><br>
                <input type="date" id="Dt" placeholder=""><br><br>
                <label for="adults">Adults</label><br>
                <input type="number" id="adults" placeholder=""><br><br>
                <label for="children">Children</label><br>
                <input type="number" id="children" placeholder=""><br><br>
                <input type="button" value="Book now" style="font-style: oblique;
                 text-transform: uppercase;"><br>
        
        
            </form>
        </div>
       
    </div>
    <div class="side_bar">
        <h3>Our Vision</h3>
        <p>Nestled in the heart of Kenya’s breathtaking natural beauty, 
            Bamboo by the Lake Resort offers an escape to paradise for those 
            seeking a tranquil retreat away from the hustle and bustle of 
            city life. Our resort is a haven of peace, located on the 
            shores of Lake Victoria surrounded by lush greenery and 
            teeming with wildlife.</p>
            <br>
        <h3>Our Mission</h3>
        <p>At Bamboo by the Lake Resort, we believe in providing an authentic
            Kenyan experience combined with the comforts of modern amenities.
            Our commitment to sustainability and eco-friendly practices ensures 
            that we live in harmony with the environment.</p>
            <br>

    </div>
   <div class="footer" style="margin-block-start: 1400px;">
        &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>