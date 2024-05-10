<?php
include "conn.php"; 
session_start(); // Start the session

if (isset($_POST["post"])) {
    $_username = isset($_POST["_username"]) ? $_POST["_username"] : '';
    $_apartment_name = isset($_POST["_apartment_name"]) ? $_POST["_apartment_name"] : '';
    $_select_viewer = isset($_POST["_select_viewer"]) ? $_POST["_select_viewer"] : '';
    $_description = isset($_POST["_description"]) ? $_POST["_description"] : '';
    $_location = isset($_POST["_location"]) ? $_POST["_location"] : '';
    $_contacts = isset($_POST["_contacts"]) ? $_POST["_contacts"] : '';
    $_internet_access = isset($_POST["_internet_access"]) ? $_POST["_internet_access"] : '';
    $_furnitures = isset($_POST["_furnitures"]) ? $_POST["_furnitures"] : '';
    $_common_areas = isset($_POST["_common_areas"]) ? $_POST["_common_areas"] : '';
    $_water = isset($_POST["_water"]) ? $_POST["_water"] : ''; 
    $_electricity = isset($_POST["_electricity"]) ? $_POST["_electricity"] : ''; 
    $_laundry = isset($_POST["_laundry"]) ? $_POST["_laundry"] : ''; 
    $_parkinglot = isset($_POST["_parkinglot"]) ? $_POST["_parkinglot"] : ''; 
    $_security = isset($_POST["_security"]) ? $_POST["_security"] : ''; 
    $_rules = isset($_POST["_rules"]) ? $_POST["_rules"] : ''; 
    $_rental_fee = isset($_POST["_rental_fee"]) ? $_POST["_rental_fee"] : ''; 
    $_payment = isset($_POST["_payment"]) ? $_POST["_payment"] : ''; 

    $_postImage = isset($_POST["_postImage"]) ? $_POST["_postImage"] : ''; 
    $tempName = isset($_POST["tempName"]) ? $_POST["tempName"] : ''; 

    // $_postImage= $_FILES["inputPictures"]["name"];
    // $tempName= $_FILES["inputPictures"]["tmp_name"];
    $targetPath = "postImages/".$_postImage;

    // // Check if the file is uploaded
    // if(isset($_FILES["_images"]) && $_FILES["_images"]["error"] === UPLOAD_ERR_OK) {
    //     $_images = $_FILES["_images"]["name"]; 
    //     $tempName = $_FILES["_images"]["tmp_name"]; 
    //     $targetPath = "customerImages/".$_images;

    //     // Move uploaded file to new location
    //     if (move_uploaded_file($tempName, $targetPath)) {
    //         // File moved successfully
    //     } else {
    //         echo "Error moving file.";
    //     }
    // } else {
    //     // Handle the case when no file is uploaded
    //     $_images = ""; // Assign an empty string or default value
    // }

    // Insert query
    $sql = "INSERT INTO tblpost (_username, 
                                     _apartment_name,
                                     _select_viewer, 
                                     _description, 
                                     _location, 
                                     _contacts, 
                                     _internet_access,
                                     _furnitures, 
                                     _common_areas, 
                                     _water,
                                     _electricity,
                                     _laundry,
                                     _parkinglot,
                                     _security,
                                     _rules,
                                     _rental_fee,
                                     _payment,
                                     _images)

    VALUES ('$_username',
            '$_apartment_name',
            '$_select_viewer', 
            '$_description', 
            '$_location',
            '$_contacts', 
            '$_internet_access', 
            '$_furnitures', 
            '$_common_areas', 
            '$_water',
            '$_electricity',
            '$_laundry',
            '$_parkinglot',
            '$_security',
            '$_rules',
            '$_rental_fee',
            '$_payment',
            '$_postImage')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: posted.php");
        move_uploaded_file($tempName, $targetPath);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Section</title>
    <link rel="stylesheet" href="./css/posting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
<body>
    <div id="container">

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="">
        <div id="topPost">
        <?php
            $user = $_SESSION['_username'];
            $_apartment_name=  $_SESSION['_apartment_name'];
            $query= "SELECT * FROM tblowner ";
            $result = mysqli_query($conn, $query);
            if($result->num_rows>0){
                while($row = mysqli_fetch_array($result))
                    $_images = $row["_images"];
                    $imageUrl = "ownerImages/".$_images;
                    echo "<img  src='$imageUrl'>"; 
            }
            ?>

            <div>   
                <input  style="width: 200px; border:none; background: transparent;color:black;" id="username" name="_username" value="<?php echo $user?>">
                    <select  name="_select_viewer" id="select-viewer">
                    <option value="public">Public</option>
                    <option value="friends">Friends</option>
                    <option value="only-me">Only me</option>
                </select>
            </div>
            <div style="width: 100%;">
                <a id="back" href="./OWNER/serviceOwner.php"><i class="fa-solid fa-arrow-left"></i>Back</a>
            </div>
        </div>
        <div id="flexPost">
            <div>
                <div id="imagePost">
                <img for="inputPictures" src="./images/white.png"  id="picture-post">
                </div>
                <input id="inputPictures" type="file" name="inputPictures" style="padding: 10px; background-color: white; margin: 5px; border-radius: 10px; width: 280px;" accept=" images/png, images/jpg, images/jpeg">
                <div id="termsConditions">
                    <div id="headTerms">
                        <h4>Posting Terms and Conditions</h4>
                    </div>
                    <ol>
                        <li>Your post will only be visible according to what selection of views you may choose.</li>
                        <li>Any vulgar words are restricted. You are posibly be reported and gain penalty depends on your violation</li>
                        <li>Once the apartment you post are rented, we collect the 5% of your income every month as of Terms and Conditions you agreed on. you can directly send it to our g-cash account</li>
                        <li>1 week delay are allowed but you can't access Mamburao Apartel if it exceeds. You can able to use it again by sending us 100.00php for the second use.</li>
                        <li>All of your post will be stored in our database and allow you to edit,delete, or update your post.</li>
                    </ol>           
                </div>
                <div id="buttonsubmitDecline">
                    <input type="submit" value="Accept" id="accept">
                    <input type="submit" value="Decline" id="decline">
                </div>


            </div>
            
            <div id="informations">
            <h4>Apartment Name:</h4>
                <label for="_apartment_name">Add the name of your apartment.</label>
                <input style="color: gray" required name="_apartment_name" type="text" id="_apartment_name" class="details heightshortInput" value="<?php echo $_apartment_name?>"><br>
                <h4>Description:</h4>
                <label for="description">Add the description or quote about your post.</label>
                <textarea name="_description" id="" cols="10" rows="8" class="details height-input" placeholder="Your description here..."></textarea><br>
                <!-- <input required type="tel" id="description" class="details height-input"><br> -->
                <h4>Location:</h4>
                <label for="location">Add location to find your place easily.</label>
                <input required name="_location" type="text" id="location" class="details heightshortInput"><br>
                <h4>Contacts:</h4>
                <label for="contact">Add contacts to talk to you more easily</label>
                <input required name="_contacts" type="text" id="contact" class="details heightshortInput"><br>
                
                <h4>Amenities:</h4>
                <label for="amenities">Display the available things/amenities in your apartment that is free to use.</label><br>
                <div class="allAmenities">
                    <label for="" class="amenities">Internet Access</label><br>
                    <div class="checkboxselect">
                        <input id="IntFree" name="_internet_access" type="checkbox" value="Free">
                        <label for="IntFree">Free</label><br>
                        <input id="intNotFree" name="_internet_access" type="checkbox" value="Not free">
                        <label for="IntNotFree">Not Free</label><br>
                        <input id="intNone" name="_internet_access" type="checkbox" value="None">
                        <label for="intNone">None</label><br>
                    </div>
                </div><br>

                <div class="allAmenities">
                    <label for="" class="amenities">Accessible Furnitures</label><br>
                    <div class="checkboxselect">
                        <input id="bed" name="_furnitures" type="checkbox" value="Bed">
                        <label for="bed">Bed</label><br>
                        <input id="desk" name="_furnitures" type="checkbox" value="Desk">
                        <label for="desk">Desk</label><br>
                        <input id="chair" name="_furnitures" type="checkbox" value="Chair">
                        <label for="chair">Chair</label><br>
                        <input id="wardrobe" name="_furnitures" type="checkbox" value="Wardrobe">
                        <label for="wardrobe">Wardrobe</label><br>
                        <input id="noneFurni" name="_furnitures" type="checkbox" value="None">
                        <label for="noneFurni">None</label><br>
                    </div>
                </div><br>

                <div class="allAmenities">
                    <label for="" class="amenities">Common Areas</label><br>
                    <div class="checkboxselect">
                        <input id="livingroom" name="_common_areas" type="checkbox" value="Living room">
                        <label for="livingroom">Living room</label><br>
                        <input id="kitchen" name="_common_areas" type="checkbox" value="Kitchen">
                        <label for="kitchen">Kitchen</label><br>
                        <input id="dining" name="_common_areas" type="checkbox" value="Dining area">
                        <label for="dining">Dining area</label><br>
                        <input id="garden" name="_common_areas" type="checkbox" value="Garden">
                        <label for="garden">Garden</label><br>
                    </div>
                </div><br>

                
                <div class="allAmenities">
                    <label for="" class="amenities">Utilities</label><br><br>
                    <div class="checkboxselect">
                        <label class="amenities" for="">Water</label><br>
                        <input id="ownPay" name="_water" type="checkbox" value="Own pay for bill" multiple>
                        <label for="ownPay">Own pay for bill</label><br>
                        <input id="addtoRent" name="_water" type="checkbox" value="Added to rental fee">
                        <label for="addtoRent">Added to rental fee</label><br>
                        <input id="waterFree" name="_water" type="checkbox" value="Water pump (free)">
                        <label for="waterFree">Water pump (free)</label><br><br>

                        <label class="amenities" for="">Electricity</label><br>
                        <input id="ownPayElec" name="_electricity" type="checkbox" value="Own pay for bill">
                        <label for="ownPayElec">Own pay for bill</label><br>
                        <input id="addtoRentElec" name="_electricity" type="checkbox" value="Added to rental fee">
                        <label for="addtoRentElec">Added to rental fee</label><br>
                        <input id="ownerPayElec" name="_electricity" type="checkbox" value="Owner pay for bill">
                        <label for="ownerPayElec">Owner pay for bill</label><br>
                    </div>
                </div><br>

                
                <div class="allAmenities">
                    <label for="" class="amenities">Laundry Facilities</label><br>
                    <div class="checkboxselect">
                        <input id="washing" name="_laundry" type="checkbox" value="Washing machine">
                        <label for="washing">Washing machine</label><br>
                        <input id="dryer" name="_laundry" type="checkbox" value="Dryer">
                        <label for="dryer">Dryer</label><br>
                        <input id="nonelaundry" name="_laundry" type="checkbox" value="None">
                        <label for="nonelaundry">None</label><br>
                    </div>
                </div><br>

                <div class="allAmenities">
                    <label for="" class="amenities">Parking lot</label><br>
                    <div class="checkboxselect">
                        <input id="have" name="_parkinglot" type="checkbox" value="We Have">
                        <label for="have">We Have</label><br>
                        <input id="noneparking" name="_parkinglot" type="checkbox" value="None">
                        <label for="noneparking">None</label><br>
                    </div>
                </div><br>

                <div class="allAmenities">
                    <label for="" class="amenities">Security</label><br>
                    <div class="checkboxselect">
                        <input id="cctv" name="_security" type="checkbox" value="CCTV">
                        <label for="cctv">CCTV</label><br>
                        <input id="owngate" name="_security" type="checkbox" value="Own gate">
                        <label for="owngate">Own gate</label><br>
                        <input id="secpersonnel" name="_security" type="checkbox" value="Security Personnel">
                        <label for="secpersonnel">Security Personnel</label><br>
                        <input id="secnone" name="_security" type="checkbox" value="None">
                        <label for="secnone">None</label><br>
                    </div>
                </div><br>
              

                <!-- <textarea name="" id="" cols="" rows="5" class="details height-input"></textarea><br> -->

                <h4>Rules and Regulations:</h4>
                <label for="amenities">Add the rules and regulations implemented on your apartment.</label>
                <textarea name="_rules" id="" cols="" rows="10" placeholder="Please input your rules and regulations..." class="details height-input"></textarea><br>
                    
                <label class="label2bold" for="rentalFee">Rental Fee | Monthly: </label>
                <input required type="number" name="_rental_fee" id="rentalFee" class="details">
                
                <label class="label2bold" for="payment">Mode of payment</label>
                <select required name="_payment" id="payment" class=" details selection">
                    <option value="g-cash">G-cash</option>
                    <option value="">Cash</option>
                </select>   

                <input name="post" type="submit" id="post-action" value="POST" class="details">
                <!-- <div>
                    <input type="checkbox" id="terms">
                    <label for="terms">Terms and Conditions</label>
                </div> -->
                    
            </div>
        </div>
     
        </form>
    </div>

    <script>
        let profilePic = document.getElementById("picture-post");
        let inputFile = document.getElementById("inputPictures");

        inputFile.onchange = function(){
        profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>