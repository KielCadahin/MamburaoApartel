<?php
include "../conn.php"; 
session_start(); // Start the session
$username = $_SESSION['_username'];
$email = $_SESSION['_email'];
$phoneNumber = $_SESSION['_phone_number'];
$query= "SELECT * FROM tblcustomer";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" />
    <link rel="stylesheet" href="../css/Service.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <nav>
        <div class="container">
            <div class="logoflex">
                <img style="width: 30px;" src="../images/homeimg/logo.png" alt="">
                <h2 class="logo"> Mamburao Apartel</h2>
            </div>
           
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for your future home..." />
            </div>
            <div class="create">
                <!-- <label class="btn btn-primary" for="create-post">Create</label> -->
                <div class="profile-pic">
                <?php
                                    $result = mysqli_query($conn, $query);  
                                if($result->num_rows>0){
                                    while($row = mysqli_fetch_array($result))
                                        $_images = $row["_images"];
                                        $imageUrl = "customerImages/".$_images;
                                        echo "<a href='settingCustomer.php'><img src='$imageUrl'></a>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="left">
                <a class="profile">
                    <div class="profile-pic">
                       
                    <?php
                                    $result = mysqli_query($conn, $query);  
                                if($result->num_rows>0){
                                    while($row = mysqli_fetch_array($result))
                                        $_images = $row["_images"];
                                        $imageUrl = "customerImages/".$_images;
                                        echo "<a href='settingCustomer.php'><img src='$imageUrl'></a>";
                            }
                        ?>
                    </div>
                    <div class="handle">
                        <h4><?php echo $username ?></h4>
                        <p><?php echo $email  ?></p>
                        
                    </div>
                </a>
                <div class="sidebar">
                    <a href="indexCustomer.php" class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>

                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"></i></span>
                        <!-- <small class="notification-count"></small> -->
                        <h3>Notifications</h3>
                        <div class="notifications-popup">
                            <div>

                                <!-- <div class="profile-pic">
                                    <img src="./images/profile-10.jpg">
                                </div> -->
                                <div >
                                    <!-- <b>Abigail Willey</b> accepted your friend request
                                    <small class="text-muted">2 DAYS AGO</small> -->
                                    No notification
                                </div>
                            </div>
                        
                        </div>
                    </a>

                    <a href="#messages" class="menu-item" id="messages-notifications">
                        <i class="uil uil-envelope"></i></span>
                        <h3>Messages</h3>
                    </a>

                    <a class="menu-item " href="https://maps.app.goo.gl/mE9G2HLj2K4C3MBz8">
                        <span><i id="menu-item-icon" class="fa-solid fa-map-location-dot"></i></span>
                        <h3>Map</h3>
                    </a>
                    <a href="settingCustomer.php" class="menu-item ">
                        <span><i class="uil uil-setting"></i></span>
                        <h3>Settings</h3>
                    </a>

                    <!-- <label class="btn btn-primary" for="create-post">Create Post</label> -->
                </div>
            </div>



            <div class="middle">
                <!-- <div class="stories">
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-8.jpg" alt="">
                        </div>
                        <p class="name">Your Story</p>
                    </div>
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-9.jpg" alt="">
                        </div>
                        <p class="name">Lilla James</p>
                    </div>
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-2.jpg" alt="">
                        </div>
                        <p class="name">Jasmine Singh</p>
                    </div>
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-3.jpg" alt="">
                        </div>
                        <p class="name">Celina Fernandes</p>
                    </div>
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-4.jpg" alt="">
                        </div>
                        <p class="name">Mia Addams</p>
                    </div>
                    <div class="story">
                        <div class="profile-pic">
                            <img src="./images/profile-5.jpg" alt="">
                        </div> 
                        <p class="name">Christy Kahea</p>
                    </div>
                    </div> -->

                <!-- <form class="create-post">
                    <div class="profile-pic">
                    <?php
                                    $result = mysqli_query($conn, $query);  
                                if($result->num_rows>0){
                                    while($row = mysqli_fetch_array($result))
                                        $_images = $row["_images"];
                                        $imageUrl = "customerImages/".$_images;
                                        echo "<a href='settingCustomer.php'><img src='$imageUrl'></a>";
                            }
                        ?>
                    </div>
                    <a href="../post.php"><input type="text" placeholder="What's on your mind?" id="create-post"></a>
                    <input type="submit" value="Post" class="btn btn-primary">
                </form> -->





                <div class="feeds">
                    <div class="feed">
                        <div class="head">

                        </div>
                        <div class="user">
                            <div class="profile-pic">
                                <img src="../images/ApartmentIMG/blueHouse.jpeg" alt="">
                            </div>
                            <div class="info">
                                <h3>Our Apartment</h3>
                                <small>Brgy Payompon, 5 DAYS AGO</small>
                            </div>
                            <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                        </div>

                        <div class="photo">
                            <a href="../posted.php"><img src="../images/ApartmentIMG/blueHouse.jpeg" alt=""></a>
                        </div>

                        <div class="action-button">
                            <div id="mainCommentSection">
                                <div id="commentSection" class="commentSection">
                                    <textarea  name="comment" id="comment" cols="30" rows="1"></textarea>
                                    <a href="" style="margin-left: 10px; color: rgb(30, 38, 105);"><i class="fa-regular fa-paper-plane"></i></a>
                                </div>
                            </div>
                           
                            <div class="interaction-button">
                                <span><button href="" onclick="react()"><i class="uil uil-thumbs-up"></i></button></i></span>
                                <span><button type="button" href="" onclick="mdcomment()" id="commentbtn"><i class="uil uil-comment"></i></button></span>
                                <span><button href=""  onclick="share()"><i class="uil uil-share"></i></button></span>
                            </div>

                        </div>

                        <!-- <div class="liked-by">
                             <span><img src="images/profile-15.jpg"></span>
                             <span><img src="images/profile-16.jpg"></span>
                             <span><img src="images/profile-17.jpg"></span>
                             <p>Liked by <b>Enrest Achiever</b>snd <b>220 others</b></p>
                         </div> -->

                        <!-- <div class="caption">
                             <p><b>Lana Rose</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 130 comments</div>-->
                    </div>







    


                </div>
            </div>

            <div class="right">
                <div id="messages" class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <span><i class="uil uil-edit"></i></span>
                    </div>

                    <div class="search-bar">
                        <span><i class="uil uil-search"></i></span>
                        <input type="search" placeholder="Search Messages" id="message-search">
                    </div>
                            No contacts
                    <!-- <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div> -->
                    <!-- <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-17.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Kareena Joshua</h5>
                            <p class="text-muted">Just woke up bruh..</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-18.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Dan Smith</h5>
                            <p class="text-bold">2 New Messages</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-15.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Chris Brown</h5>
                            <p class="text-muted">Lol u right</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-14.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Lana Rose</h5>
                            <p class="text-bold">Birthday tomorrow!!</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-11.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Varun Nair</h5>
                            <p class="text-muted">Ssup?</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-1.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Jahnvi Doifode</h5>
                            <p class="text-bold">3 New Messages</p>
                        </div>
                    </div> -->
                </div>











                <!-- <div class="friend-requests">
                    <h4>Requests</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-pic">
                                <img src="images/profile-13.jpg">
                            </div>
                            <div>
                                <h5>Wilson Fisk</h5>
                                <p class="text-muted">8 mutual friends</p>

                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-pic">
                                <img src="images/profile-20.jpg">
                            </div>
                            <div>
                                <h5>Srishti Tirkey</h5>
                                <p class="text-muted">2 mutual friends</p>

                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-pic">
                                <img src="images/profile-5.jpg">
                            </div>
                            <div>
                                <h5>Christ Kahea</h5>
                                <p class="text-muted">1 mutual friend</p>

                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>

                </div> -->

            </div>





        </div>
    </main>

    <script src="../JS/services.js"></script>


</body>

</html>