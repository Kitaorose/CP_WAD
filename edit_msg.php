<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        require_once ("includes/db_connect.php");
        include_once ("Templates/nav.php");

        $messageId=$_GET["messageId"];
        $spot_msg = "SELECT * FROM messages WHERE messageId = '$messageId' LIMIT 1";
        $spot_msg_res = $conn->query($spot_msg);
        $spot_msg_row = $spot_msg_res->fetch_assoc();

        if(isset($_POST["update_message"])){

            $fn= mysqli_real_escape_string($conn,$_POST["fullname"]);
            $Em= mysqli_real_escape_string($conn,$_POST["email"]);
            $s= mysqli_real_escape_string($conn,$_POST["Subject_line"]);
            $msg= mysqli_real_escape_string($conn,$_POST["message"]);
            $messageId= mysqli_real_escape_string($conn,$_POST["messageId"]);
        
            $update_message = "UPDATE messages SET sender_name= '$fn', sender_email = '$Em', subject_line ='$s', text_message= '$msg' WHERE messageId= '$messageId' LIMIT 1";

        
            if ($conn->query($update_message) === TRUE) {
                header("Location: view_messages.php");
                exit();
            } else {
                echo "Error: " . $update_message . "<br>" . $conn->error;
            }
        }
        ?>
    <div class="banner"> <h1>Bamboo by the lake Resort</h1></div>
   <div class="row::after">
    <h1>Edit message</h1>
    <p>Have any queries or ideas concerning our facilities?<br> Please leave us a message and we will be glad to respond ASAP.</p>
    <h3>Details</h3>
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" class="contacts_form label">
    <label for="fn">Fullnames</label><br>
    <input type="text" name="fullname" id="fn " placeholder="First & Last Name" required value="<?php print $spot_msg_row["sender_name"];?>"><br><br>

    <label for="Em">Email Address</label><br>
    <input type="text" name="email" id="Em" placeholder="Email" required value="<?php print $spot_msg_row["sender_email"];?>"><br><br>

    <label for="s">Subject</label><br>
                <select name="Subject_line" id="s">
                <option value="<?php print $spot_msg_row["sender_name"];?>"><?php print $spot_msg_row["subject_line"];?>"</option>
                    <option value="booking inquiry">Booking inquiry</option>
                    <option value="review">Review</option>
                </select><br><br>

    <label for="msg">Message</label><br>
    <textarea name="message" rows="4" cols= "50" id="msg" required><?php print $spot_msg_row["text_message"];?></textarea><br><br>

    <input type="submit" value="Update Message" name="update_message"><br><br>
    <input type="hidden" name="messageId" value="<?php print $spot_msg_row["messageId"];?>">
    </form>
   </div>
   <div class="footer">
    &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>