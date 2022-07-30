<?php

include 'config.php';

error_reporting(0); // for not showing any error

if (isset($_POST['submit'])) { // check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from from
    $email = $_POST['email']; // Get Email from from
    $comment = $_POST['comment']; // Get Commint from from

    $sql = "INSERT INTO comment (name, email, comment)
            VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Comment ewank</title>
 </head>
 <body>
    <div class="wrapper">
        <form action="" method="POST" class="form">
           <div class="row">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" reuired>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" reuired>
           </div>
           </div>
            <div class="input-group textarea">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" placeholder="Enter your comment" required></textarea>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Post Comment</button>
            </div>
        </form>
        <div class="prev-comments">
            <?php

            $sql = "SELECT * FROM "

            ?>
            <div class="single-item">
                <h4>Erwan</h4>
                <a href="mailto:erwantampan@gmail.com">erwantampan@gmail.com</a>
                <p>lorem ipsum</p>
            </div>
        </div>
    </div>
 </body>   
</html>