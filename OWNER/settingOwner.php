<?php
include "../conn.php";
session_start(); // Start the session
$username = $_SESSION['_username'];
$email = $_SESSION['_email'];
$password = $_SESSION['_password'];
$apartment_name = $_SESSION['_apartment_name'];
$full_name = $_SESSION['_full_name'];
$gender = $_SESSION['_gender'];
$country = $_SESSION['_country'];
$municipality = $_SESSION['_municipality'];
$phone_number = $_SESSION['_phone_number'];
$address = $_SESSION['_address'];
$bank_account = $_SESSION['_bank_account'];


if (isset($_POST["update"])) {
    // Fetch form data 
    $_username = $_POST['_username'];
    $_email = $_POST['_email'];
    $_password = $_POST['_password'];
    $_apartment_name = $_POST['_apartment_name'];
    $_full_name = $_POST['_full_name'];
    $_gender = $_POST['_gender'];
    $_country = $_POST['_country'];
    $_municipality = $_POST['_municipality'];
    $_phone_number = $_POST['_phone_number'];
    $_address = $_POST['_address'];
    $_bank_account = $_POST['_bank_account'];
    
    // Check if file is uploaded
    // if(isset($_FILES['_images']) && $_FILES['_images']['error'] === UPLOAD_ERR_OK) {
    //     $_images = $_FILES['_images']['name']; 
    //     $tempName= $_FILES["_images"]["tmp_name"]; 
    //     $targetPath = "ownerImages/".$_images;
        
        // Move uploaded file to new location
        // if (move_uploaded_file($tempName, $targetPath)) {
            // File moved successfully
    //     } else {
    //         echo "Error moving file.";
    //     }
    // } else {
        // Handle the case when no file is uploaded
        // $_images = ""; // Assign an empty string or default value
        // $targetPath = ""; // Similarly, assign an empty string or default value for target path
    // }

    // Update query
    $info_query = "UPDATE tblowner SET _username = '$_username', _email= '$_email', _password = '$_password', _apartment_name='$_apartment_name', 
    _full_name=' $_full_name', _gender='$_gender', _country='$_country', _municipality=' $_municipality', _phone_number='$_phone_number', _address='$_address',
    _bank_account='$_bank_account'
    WHERE _username='$username'";
    
    if (mysqli_query($conn, $info_query)) {
        // Update session variables
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
        $_SESSION['_bank_account'] = $_bank_account;
    } else {
        echo "Error: " . $info_query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings Owner</title>
    <link rel="stylesheet" href="../css/setting.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body>
    <form action="settingOwner.php" method="post" class="container light-style flex-grow-1 container-p-y">
        <div style="display:flex; align-items: center">
        <p><a onclick="back()" style="margin-right: 20px; cursor:pointer; text-decoration:none; color:black">Back</a></p>
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        </div>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a> -->
                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a> -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Notifications</a>
                        <a class="list-group-item list-group-item-action" 
                        href="../termsOfService.php">Terms of Service</a>
                        <a class="list-group-item list-group-item-action" 
                        href="../privacyAndPolicy.php">Privacy and Policy</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                            <?php
                            include "../conn.php";
                                    $query= "SELECT * FROM tblowner";
                                    $result = mysqli_query($conn, $query);  
                                if($result->num_rows>0){
                                    while($row = mysqli_fetch_array($result))
                                        $_images = $row["_images"];
                                        $imageUrl = "ownerImages/".$_images;
                                        echo "<img for='profile' id='profile-pic' class='general-profile' src='$imageUrl'>";
                                }
                            ?>
                                <div class="media-body ml-4">
                                    <label for="input-profile" class="btn btn-outline-primary">
                                        Upload new photo
                                        <input name="_images" id="input-profile" type="file" class="account-settings-fileinput" accept=" images/png, images/jpg, images/jpeg">
                                    </label> &nbsp;
                                    <!-- <button type="button" class="btn btn-default md-btn-flat" name="reset">Reset</button> -->
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" name="_username" value="<?php echo $_SESSION ['_username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="_full_name"  value="<?php echo $_SESSION ['_full_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Apartment Name</label>
                                    <input type="text" class="form-control" name="_apartment_name"  value="<?php echo $_SESSION ['_apartment_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="_email"  value="<?php echo $_SESSION ['_email']; ?>">
                                    <!-- <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div> -->
                                </div>
                               
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" name="_password" class="form-control" value="<?php echo $password; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <!-- <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control"
                                        rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div> -->
                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select  class="form-control" name="_gender" id="gender">
                                        <option name="_gender" value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                        <option name="_gender" value="male">Male</option>
                                        <option name="_gender"  value="female">Female</option>
                                        <option name="_gender"  value="prefer not to say">Prefer not to say</option>
                                    </select>

                                </div>
                                   
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <input name="_country"  type="text" class="form-control" value="<?php echo $country; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Municipality</label>
                                        <input name="_municipality"  type="text" class="form-control" value="<?php echo $municipality; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Complete Address</label>
                                        <input name="_address"  type="text" class="form-control" value="<?php echo $address; ?>">
                                    </div>

                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input name="_phone_number" type="text" class="form-control" value="<?php echo $phone_number; ?>">
                                </div>

                                <h6 class="mb-4">Bank Account</h6>
                                <div class="form-group">
                                    <label class="form-label">Account number</label>
                                    <input name="_bank_account" type="text" class="form-control" value="<?php echo $bank_account; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value="https://twitter.com/user">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value="https://www.facebook.com/user">
                                </div>
                               
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value="https://www.instagram.com/user">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Connect to
                                    <strong>Twitter</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                            class="ion ion-md-close"></i> Remove</a>
                                    <i class="ion ion-logo-google text-google"></i>
                                    You are connected to Google:
                                </h5>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protected]</a>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to
                                    <strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to
                                    <strong>Instagram</strong></button>
                          </div>
                        </div> -->
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my Post</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone message me</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly updates</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-primary" name="update">Save changes</button>&nbsp;
            <button type="submit" class="btn btn-default">Cancel</button>
        </div>

    </form>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>

<script>
  function back(){
    window.history.back();  
    }

    // let profilePic = document.getElementById("profile-pic");
    // let inputFile = document.getElementById("input-profile");

    // inputFile.onchange = function(){
    // profilePic.src = URL.createObjectURL(inputFile.files[0]);
    // }

</script>
</body>

</html>
