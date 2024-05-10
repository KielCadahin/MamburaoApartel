<?php
include "../conn.php";
session_start(); // Start the session
$username = $_SESSION['_username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>succesfullly Created</title>
    <link rel="stylesheet" href="../css/successfulCreated.css">
</head>
<body>
    <form action="">
        <p id="successfullyCreated">Your Account has been successfully created!</p>
        <div id="profile">
            <?php
                include "../conn.php";
                $query= "SELECT * FROM tblowner ";
                $result = mysqli_query($conn, $query);
                if($result->num_rows>0){
                    while($row = mysqli_fetch_array($result))
                        $_images = $row["_images"];
                        $imageUrl = "ownerImages/".$_images;
                        echo "<img class='imgProfile' src='$imageUrl'>";
                }
            ?>
            
        
        </div>
        <p id="username"><?php echo $username ?></p>
        <a href="welcomeOwner.php">Let's Get Started</a>
    </form>
</body>
</html>