<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--page style links--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <!--End of style links--> 
</head>
<body>
        <?php
        include_once ("Templates/nav.php");// navigation bar code.
        ?>
    <div class="banner"><!--page header--> 
        <h1>Bamboo By The Lake Resort</h1>
    </div>
    <div class="row::after">
        <!--Resort view image---> 
        <img src="Images/Resort rooms 2.png" alt="">
    </div>
    <div class="content">
        <div>
            <h3 style="text-align: center;">Check Availability</h3>
            <!-- Booking form for the user-->
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
       
    </div> <!--end of booking form-->

    <?php
    include_once ("Templates/side_bar.php");// side_bar repeated code.
    ?>
   
   <div class="footer" style="margin-block-start: 1000px;">
        &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>