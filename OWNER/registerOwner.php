<?php
include "../conn.php"; 
session_start(); // Start the session

 
if (isset($_POST["create"])) {
    // Insert user-defined data
    $_username = $_POST["_username"];
    $_email = $_POST["_email"];
    $_password = $_POST["_password"];
    $_apartment_name = $_POST["_apartment_name"];
    $_full_name = $_POST["_full_name"];
    $_gender = $_POST["_gender"];
    $_country = $_POST["_country"];
    $_municipality = $_POST["_municipality"];
    $_phone_number = $_POST["_phone_number"];
    $_address = $_POST["_address"]; 
    $_bank_account = $_POST["_bank_account"];

    $_images= $_FILES["_images"]["name"];
    $tempName= $_FILES["_images"]["tmp_name"];
    $targetPath = "ownerImages/".$_images;



    $sql = "INSERT INTO tblowner (_username, _email, _password, _apartment_name, _full_name, _gender, _country, _municipality, _phone_number, _address, _bank_account, _images) 
    VALUES ('$_username','$_email', '$_password', '$_apartment_name', '$_full_name','$_gender', '$_country', '$_municipality', '$_phone_number', '$_address', '$_bank_account','$_images')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['_username'] = $_username;
        $_SESSION['_email'] = $_email;
        $_SESSION['_password'] = $_password;
        $_SESSION['_apartment_name'] = $_apartment_name;
        $_SESSION['_full_name'] = $_full_name;
        $_SESSION['_gender'] = $_gender;
        $_SESSION['_country'] = $_country;
        $_SESSION['_municipality'] = $_municipality;
        $_SESSION['_phone_number'] = $_phone_number;
        $_SESSION['_address'] = $_address;
        $_SESSION['_country'] = $_country;
        $_SESSION['_phone_number'] = $_phone_number;
        $_SESSION['_bank_account'] = $_bank_account;
        echo "";
        move_uploaded_file($tempName, $targetPath);
        header("Location: successfullyCreatedOwner.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/loginRegister.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
 
      <input type="text" name="_username" placeholder="Username" class="box" required>
      <input type="email" name="_email" placeholder="Email" class="box" required>
      <input type="password" name="_password" placeholder="Password" class="box" required>

      <p style="font-weight: bold; font-size: 17pt">Create Profile</p>



      <div id="addprofile">
          <img for="input-file" src="../images/default-avatar.png"  id="profile-pic">
      </div>
      <input class="box"  id="input-file" type="file" name="_images" accept=" images/png, images/jpg, images/jpeg">


      <input type="text" name="_apartment_name" placeholder="Apartment name" class="box" id="apartmentName" required>
      <input type="text" name="_full_name" placeholder="Fullname" class="box" required>
      <div id="optionGender" class="box">
        <input type="radio" name="_gender" value="Male" required>
        <label class="gend" for="_gender">Male</label>
        <input type="radio" name="_gender" id="_gender" value="Female" requied >
        <label class="gend" for="_gender">Female</label>
        <input type="radio" name="_gender" id="_gender" value="Prefer not to say" required>
        <label class="gend" for="_gender">Prefer not to say</label>
      </div>
      <div>
        <input type="text" name="_country" placeholder="Country" class="box" id="country" required>
        <input type="text" name="_municipality" placeholder="Municipality" class="box" id="municipality" required>
      </div>
     
      <input type="text" name="_phone_number" placeholder="Phone#" class="box" required>
      <input type="text" name="_address" placeholder="Address" class="box" required>
      <input type="text" name="_bank_account" placeholder="Bank account" class="box" required>

      <input type="submit" name="create" value="register now" class="btn">
      <p>already have an account? <a href="loginOwner.php">login now</a></p>
   </form>
 
</div>
    <script src="../JS/loginRegister.js"></script>
</body>
</html>