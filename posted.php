
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Section</title>
    <link rel="stylesheet" href="./css/posted.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
<body>
    <div id="container">
        <?php    
        
        include "conn.php";

        $select = mysqli_query($conn, "SELECT * FROM tblpost");

        while ($row = mysqli_fetch_assoc($select)){

       

    echo '<form  method="post" enctype="">';
    echo  '<div id="topPost">';
    echo            '<img  src="./images/default-avatar.png">';
    echo        ' <div>   ';
    echo            ' <p style="width: 200px; font-weight: bold;">'.$row['_username'].'</p>';
    echo                ' <select  name="_select_viewer" id="select-viewer">';
    echo                 '<option value="public">'.$row['_select_viewer'].'</option>';
    echo                ' <option value="friends">Friends</option>';
    echo                 '<option value="only-me">Only me</option>';
    echo            ' </select>';
    echo        ' </div>';
    echo        ' <div style="width: 100%;">';
    echo          '   <a id="back" href="./OWNER/serviceOwner.php"><i class="fa-solid fa-arrow-left"></i>Back</a>';
    echo        ' </div>';
    echo     '</div>';
    echo    ' <div id="flexPost">';
    echo    '     <div>';
    echo           '  <div id="imagePost">';
    echo           '  <img for="inputPictures" src="./images/ApartmentIMG/blueHouse.jpeg"  id="picture-post">';
    echo          '   </div>';


    echo       '  </div>';
            
    echo       '  <div id="informations">';
    echo'             <h4>Apartment Name:</h4>';
    echo        '     <p class="paddingdeskbottom">'.$row['_apartment_name'].'</p><br>';
    echo           '  <h4>Description:</h4>';
    echo           '  <p class="paddingdeskbottom">'.$row['_description'].'</p><br>';
                
    echo           '  <h4>Location:</h4>';
    echo          '   <p class="paddingdeskbottom">'.$row['_location'].'</p><br>';
                
    echo             '<h4>Contacts:</h4>';
    echo          '  <p class="paddingdeskbottom">'.$row['_contacts'].'</p><br>';
                
    echo           ' <h4>Amenities:</h4><br>';
    echo           ' <p class="pInsideAmenities paddingdeskbottom boldbottom">Internet Access</p>';
    echo            '<p class="doublepadding">'.$row['_internet_access'].'</p><br>';

    echo           ' <p class="pInsideAmenities paddingdeskbottom boldbottom">Accessible Furnitures</p>';
    echo           ' <p class="doublepadding">'.$row['_furnitures'].'</p><br>';

    echo           ' <p class="pInsideAmenities paddingdeskbottom boldbottom">Common areas</p>';
    echo          '  <p class="doublepadding">'.$row['_common_areas'].'</p><br>';

    echo           ' <p class="pInsideAmenities paddingdeskbottom boldbottom">Utilities</p><br>';
    echo               ' <p  class="doublepadding" ><span style="font-weight: bold; font-size: 11pt;">Water: </span>'.$row['_water'].'</p>';
    echo              '  <p  class="doublepadding"><span style="font-weight: bold; font-size: 11pt;">Electricity: </span>'.$row['_electricity'].'</p><br>';
    echo            '<p class="pInsideAmenities paddingdeskbottom boldbottom">Laundry Facilities</p>';
    echo            '<p class="doublepadding">'.$row['_laundry'].'</p><br>';

    echo         '   <p class="pInsideAmenities paddingdeskbottom boldbottom">Parking lot</p>';
    echo             '   <p>'.$row['_parkinglot'].'</p><br>';

    echo         '  <p class="pInsideAmenities paddingdeskbottom boldbottom">Security</p>';
    echo         '   <p class="doublepadding">'.$row['_security'].'</p><br>';

    echo           ' <h4>Rules and Regulations</h4>';
    echo                '<p class="paddingdeskbottom">'.$row['_rules'].'</p><br>';

    echo        '    <h4>Rental Fee | Monthly:</h4>';
    echo                '<p class="paddingdeskbottom">'.$row['_rental_fee'].'</p><br>';

    echo          '  <h4>Mode of payment</h4>';
    echo           ' <select required name="_payment" id="payment" class=" details selection">';
    echo              '  <option value="g-cash">'.$row['_payment'].'</option>';
    echo               ' <option value="">Cash</option>';
    echo          '  </select>  ';

    echo         '  <input name="post" type="submit" id="post-action" value="RENT" class="details">';
    echo     '   </div>';
    echo    '</div>';

    echo   ' </form>';
    

    // header("Location: posted.php");
    // exit();
    }
        ?>
    </div>

</body>
</html>