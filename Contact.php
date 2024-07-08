<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        require_once ("includes/db_connect.php");// connection to the database
        include_once ("Templates/nav.php");//navigation bar

        if(isset($_POST["send_message"])){

            $fn= mysqli_real_escape_string($conn,$_POST["fullname"]);
            $Pn= mysqli_real_escape_string($conn,$_POST["phone number"]);
            $Em= mysqli_real_escape_string($conn,$_POST["email"]);
            $s= mysqli_real_escape_string($conn,$_POST["Subject_line"]);
            $msg= mysqli_real_escape_string($conn,$_POST["send_message"]);
        
            $insert_message = "INSERT INTO messages (sender_name,sender_phone_number, sender_email,subject_line, text_message)
            VALUES ('$fn', '$Pn', '$Em', '$s','$msg')";
        //inserting data into the database
            if ($conn->query($insert_message) === TRUE) {
                header("Location: view_messages.php");
                exit();
            } else {
                echo "Error: " . $insert_message . "<br>" . $conn->error;
            }
        }
        ?>
    <div class="banner"> <h1>Bamboo by the lake Resort</h1></div>
   <div class="row::after">
    <h1>Contact Us</h1>
    <p>Have any queries or ideas concerning our facilities?<br> Please leave us a message and we will be glad to respond ASAP.</p>
    <h3>Details</h3>
    <!--user interaction inerface form-->
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" class="contacts_form label">
    <label for="fn">Fullnames</label><br>
    <input type="text" name="fullname" id="fn " placeholder="First & Last Name" required><br><br>

    <label for="Pn">Phone Number</label><br>
    <input type="tel" name="phone number" id="Pn"><br><br>

    <label for="Em">Email Address</label><br>
    <input type="text" name="email" id="Em" placeholder="Email" required><br><br>

    <label for="s">Subject</label><br>
                <select name="Subject_line" id="s">
                <option value="">--Select Subject--</option>
                    <option value="booking inquiry">Booking inquiry</option>
                    <option value="review">Review</option>
                </select><br><br>

    <label for="msg">Message</label><br>
    <textarea name="message" rows="4" cols= "50" id="msg" required>Enter Message</textarea><br><br>

    <input type="submit" value="Send message" name="send_message"><br><br>

    </form>
    <!--End of user interaction interface-->
   </div>
   <div class="footer">
    &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>