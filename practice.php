

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Posted Data</title>
    <link rel="stylesheet" href="./css/posted.css">
</head>

<body>
    <div class="container">
        <?php
            include "conn.php";
            session_start();
            $username = $_SESSION['_username'];
            $select = mysqli_query($conn, "SELECT * FROM tblpost WHERE _username = '$username' ");

            while ($row = mysqli_fetch_assoc($select)){
                echo '<form>';
                echo '<img src="" alt="">';
                echo '<h4>Apartment Name</h4>';
                echo '<p>'.$row['_apartment_name'].'</p>';
                echo '<h6>Description</h6>';
                echo '<p>'.$row['_description'].'</p>';
                echo '<h6>Location</h6>';
                echo '<p>'.$row['_location'].'</p>';
                echo '<h6>Contacts</h6>';
                echo '<p>'.$row['_contacts'].'</p>';
                echo '<h3>Amenities</h3>';
                echo '<h6>Internet Access</h6>';
                echo '<p>'.$row['_internet_access'].'</p>';
                echo '<h6>Furnitures</h6>';
                echo '<p>'.$row['_furnitures'].'</p>';
                echo '<h6>Common Areas</h6>';
                echo '<p>'.$row['_common_areas'].'</p>';
                echo '<h6>Water</h6>';
                echo '<p>'.$row['_water'].'</p>';
                echo '<h6>Electricity</h6>';
                echo '<p>'.$row['_electricity'].'</p>';
                echo '<h6>Laundry</h6>';
                echo '<p>'.$row['_laundry'].'</p>';
                echo '<h6>Parking lot</h6>';
                echo '<p>'.$row['_parkinglot'].'</p>';
                echo '<h6>Security</h6>';
                echo '<p>'.$row['_security'].'</p>';
                echo '<h6>Rules</h6>';
                echo '<p>'.$row['_rules'].'</p>';
                echo '<h6>Rental Fee</h6>';
                echo '<p>'.$row['_rental_fee'].'</p>';
                echo '<h6>Payment</h6>';
                echo '<p>'.$row['_payment'].'</p>';
                echo '</form>';
            }
            
        
        
        ?>
    </div>
</body>
</html>
