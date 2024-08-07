<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!--page style links--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <!--end of style links-->
</head>
<body>
    <?php
    include_once ("Templates/nav.php");// navigation bar
    ?>

    <div class="banner"> 
        <h1>Welcome to Bamboo by the Lake Resort</h1>
    </div>
    
    <div class="content">
        <p>Join as at the Bamboo by The Lake Resort,nestled among lush
            bamboo trees. Our resort offers a unique blend of luxury,
            tranquility, and natural beauty, making it the perfect destination 
            for your next getaway.</p><br>

        <h3>Our Location</h3>
        <p> Visit us on the shores of Lake Victoria, the largest tropical lake 
            in the world, within the Kitawa village near Nyandiwa.Our resort 
            provides breathtaking views of the crystal-clear waters and stunning
            sunsets. Surrounded by swaying  bamboo trees, you will feel immersed
            in nature while enjoying all the comforts of a modern retreat.</p><br>
        
        <h3>Our Commitment</h3>
        <p>At Serenity Lake Resort, your satisfaction is our priority. Our 
        dedicated staff is committed to ensuring that your stay with us is 
        memorable, comfortable, and above all, enjoyable. We look forward to 
        welcoming you to our little slice of paradise.</p>
        
    </div>
    <?php
    include_once ("Templates/side_bar.php");//side bar
    ?>
    
    <div class="footer" style="margin-block-start: 1400px;">
        &copy;2024|Bamboo by The Lake.|All rights reserved.
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>