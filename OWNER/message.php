<?php
include "../conn.php"; 
session_start(); // Start the session
// $username = $_SESSION['_username'];
// $email = $_SESSION['_email'];
// $phoneNumber = $_SESSION['_phone_number'];
// $query= "SELECT * FROM tblowner";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    if(isset($_GET['delete'])){
        $select_messages = $conn->prepare("DELETE FROM `messages` WHERE id= ?");
        $delete_messages->execute([$delete_id]);
        header('location:message.php');
    }
      
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Messages</title>
    </head>
    <body>
        <section class="messages">
            <h1 class="heading">Messages</h1>
            <div class="box-container">
            <?php
                  $select_messages = $conn->prepare("SELECT * FROM `messages`");
                  $delete_messages->execute();
                  if($select_messages->rowCount() > 0){
                        while($fetch_messages = $select_messages-> fetch(PDO::FETCH_ASSOC)){
                ?>
            <div class="box">
                <p>name: <span><?= $fetch_messages['_username']; ?></span></p>
                <p>number: <span><?= $fetch_messages['_number']; ?></span></p>
                <p>email: <span><?= $fetch_messages['_email']; ?></span></p>
                <p>message: <span><?= $fetch_messages['_message']; ?></span></p>
                <a href="messages.php?delete=<?= $fetch_messages['_id']; ?> " class="delete-btn" onclick="return confirm('delete this message?');">delete</a>
            </div>
            <?php
                        }
                  }else{
                    echo '<p class="empty"> you have no messages</p>';
                  }
            ?>

            </div>

        </section>
    </body>
    </html>
</body>
</html>