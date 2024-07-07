<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
        require_once ("includes/db_connect.php");
        include_once ("Templates/nav.php");
     ?>
     <div class="banner"> <h1>Bamboo by the lake Resort</h1></div>
     <div class="row::after">
        <div class="content">
            <h2>Message</h2>
            <p>Welcome to the View Message Database! This database is designed to store and manage messages <br> sent and received by users within a specific platform or application.</p>
            <table>
                <thead>
                <tr>
                    <th colspan="2">Sender name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
            <?php
            $select_msg = "SELECT * FROM messages ORDER BY datecreated DESC";
            $sel_msg_res = $conn->query($select_msg);
            $en= 0;

            if ($sel_msg_res->num_rows > 0) {
                
              // output data of each row
              while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                $en++;
               ?>
               
               <tr>
                <td><?php print $en; ?>.</td>
                <td><?php print $sel_msg_row["sender_name"]; ?></td>
                <td><?php print $sel_msg_row["sender_email"]; ?></td>
                <td><?php print "<strong>". $sel_msg_row["subject_line"] . '</strong> -' . substr($sel_msg_row["text_message"],0,20) . '...'; ?></td>
                <td><?php print date("d-M-Y H:i", strtotime( $sel_msg_row["datecreated"])); ?></td>
                <td> [ <a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a>] [<a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>" onclick="return confirm('This action will delete this message permanently. \n Are you sure you want to proceed?');">Del]</td>
               </tr>
               <?php
              }
            } else {
                echo "0 results";
            }
?>
         </tbody>
         <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</th>
                    <th>Subject line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>   
                
            </table>
        </div>
        </div>
        <div class="footer" style="margin-block-start: 1000px;">
        &copy;2024|Bamboo by The Lake.|All rights reserved.
         </div>
</body>
</html>