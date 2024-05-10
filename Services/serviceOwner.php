<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
      <nav>
            <div class="container">
                <a href=../OWNER/indexOwner.php><i class="fa-solid fa-arrow-left"></i></a><h2 class="logo">Mamburao Apartel</h2>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input
                    type="search"
                    placeholder="Search your home to stay.."
                    />
                </div>
                <div class="create">
                    <label class="btn btn-primary" for="create-post">Create</label>
                    <a href="../OWNER/settingOwner.php"><div class="profile-pic">
                    <img src="../images/homeimg/team/teamKiel.jpg" alt="">
                    </div></a>
                </div>
            </div>
      </nav>

      <main>
          <div class="container">
              <div class="left">
                  <a class="profile">
                      <div class="profile-pic">
                      <img src="../images/homeimg/team/teamKiel.jpg" alt="">
                      </div>
                      <div class="handle">
                          <h4>Owner</h4>
                          <p class="text-muted">@owner</p>
                      </div>
                  </a>
                  <div class="sidebar">
                    <a class="menu-item active">
                      <span><i class="uil uil-home"></i></span> <h3>Home</h3>
                    </a>
                    <!-- <a class="menu-item ">
                      <span><i class="uil uil-compass"></i></span> <h3>Explore</h3>
                    </a> -->
                    <a class="menu-item" id="notifications">
                      <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span> <h3>Notifications</h3>
                      <div class="notifications-popup">
                          <div>
                              <div class="profile-pic">
                                  <img src="./images/profile-10.jpg" >
                              </div>
                              <div class="notification-body">
                                  <b>Esquivias Mico</b> accepted your friend request
                                  <small class="text-muted">2 DAYS AGO</small>
                              </div>
                          </div>
                          <div>
                              <div class="profile-pic">
                                  <img src="./images/profile-11.jpg" >
                              </div>
                              <div class="notification-body">
                                  <b>Salgado Angel</b> commented on your post
                                  <small class="text-muted">1 HOUR AGO</small>
                              </div>
                          </div>
                          <div>
                              <div class="profile-pic">
                              <img src="../images/homeimg/team/teamKiel.jpg" alt="">
                              </div>
                              <div class="notification-body">
                                  <b>Consul Jareld</b> and 210 other liked your post
                                  <small class="text-muted">4 MINUTES AGO</small>
                              </div>
                          </div>
                          <div>
                              <div class="profile-pic">
                                  <img src="./images/profile-13.jpg" >
                              </div>
                              <div class="notification-body">
                                  <b>Tadeja Shamelle</b> started following you
                                  <small class="text-muted"> 11 HOURS AGO</small>
                              </div>
                          </div>
                      </div>
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <i class="uil uil-envelope"><small class="notification-count">6</small></i></span><h3>Messages</h3>
                    </a>
                    <!-- <a class="menu-item ">
                      <span><i class="uil uil-bookmark"></i></span> <h3>Bookmarks</h3>
                    </a> -->
                    <!-- <a class="menu-item ">
                      <span><i class="uil uil-analytics"></i></span> <h3>Analytics</h3>
                    </a> -->
                    <a style="color: rgb(62, 62, 62);" href="https://maps.app.goo.gl/NisYRaywX8RfLpoe9" class="menu-item ">
                      <span><i class="fa-solid fa-map-location-dot"></i></span> <h3>Map</h3>
                    </a>
                    <a class="menu-item " href="../OWNER/settingOwner.php">
                      <span><i class="uil uil-setting"></i></span> <h3>Settings</h3>
                    </a>
                    
                    <label class="btn btn-primary" for="create-post">Create Post</label>
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


                <form class="create-post">
                    <div class="profile-pic">
                        <img src="../images/homeimg/team/teamKiel.jpg" alt="">
                    </div>
                    <a href="../post.php"><input style="width:" type="text" placeholder="What's on your mind?" id="create-post"></a>
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>

                <div class="feeds">
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-14.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Camella Apartment</h3>
                                 <small>Brgy Payompon, 15 MINUTES AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="../images/ApartmentIMG/blueHouse.jpeg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-15.jpg"></span>
                             <span><img src="images/profile-16.jpg"></span>
                             <span><img src="images/profile-17.jpg"></span>
                             ,<p>Liked by <b>Cadahin Kiel</b> and <b>220 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Camella Apartment</b> Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#myhome</span></p>
                         </div>
                         <div class="comments text-muted">View all 100 comments</div>
                    </div>
                
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-15.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Juan Apartment</h3>
                                 <small>Brgy Tangkalan, 2 DAYS AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="../images/ApartmentIMG/gateHouse.jpeg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-2.jpg"></span>
                             <span><img src="images/profile-4.jpg"></span>
                             <span><img src="images/profile-6.jpg"></span>
                             ,<p>Liked by <b>Babiera Ella</b> and <b>188 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Juan Apartment</b> Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#peacefulHome</span></p>
                         </div>
                         <div class="comments text-muted">View all 40 comments</div>
                    </div>
                
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-16.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Smith Apartment</h3>
                                 <small>Brgy 2, 3 DAYS AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="../images/ApartmentIMG/threeColorHouse.jpg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-3.jpg"></span>
                             <span><img src="images/profile-5.jpg"></span>
                             <span><img src="images/profile-7.jpg"></span>
                             ,<p>Liked by <b>Perez Bien</b> and <b>130 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Smith Apartment</b> Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#findHome</span></p>
                         </div>
                         <div class="comments text-muted">View all 15 comments</div>
                    </div>
                
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-17.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Custodio Apartment</h3>
                                 <small>Brgy Fatima, 1 WEEK AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="../images/ApartmentIMG/nightHouse.jpg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-8.jpg"></span>
                             <span><img src="images/profile-10.jpg"></span>
                             <span><img src="images/profile-12.jpg"></span>
                             ,<p>Liked by <b>Herba Mildred</b> and <b>280 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Custodio Apartment</b> Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#allYouNeedIsHere</span></p>
                         </div>
                         <div class="comments text-muted">View all 110 comments</div>
                    </div>
                
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-18.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Aguilar Apartment</h3>
                                 <small>Brgy Payompon, 3 WEEKS AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="../images/ApartmentIMG/colorfulHouse.jpeg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-9.jpg"></span>
                             <span><img src="images/profile-11.jpg"></span>
                             <span><img src="images/profile-13.jpg"></span>
                             ,<p>Liked by <b>Tamangan Jared</b> and <b>420 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Aguilar Apartment</b> Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#liveHere</span></p>
                         </div>
                         <div class="comments text-muted">View all 120 comments</div>
                    </div>
                
                    <!-- <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-19.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Karim Benzema</h3>
                                 <small>Mumbai, 30 MINUTES AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="images/feed-6.jpg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-15.jpg"></span>
                             <span><img src="images/profile-14.jpg"></span>
                             <span><img src="images/profile-17.jpg"></span>
                             ,<p>Liked by <b>Enrest Achiever</b>snd <b>150 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Karim Benzema</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span></p>
                         </div>
                         <div class="comments text-muted">View all 30 comments</div>
                    </div>
                    <div class="feed">
                        <div class="head">
                            
                        </div>
                         <div class="user">
                             <div class="profile-pic">
                                 <img src="images/profile-20.jpg" alt="">
                             </div>
                             <div class="info">
                                 <h3>Srishti Tirkey</h3>
                                 <small>Bangalore, 11 HOURS AGO</small>
                             </div >
                             <SPAN class="edit"><i class="uil uil-ellipsis-h"></i></SPAN>
                         </div>

                         <div class="photo">
                             <img src="images/feed-7.jpg" alt="">
                         </div>

                         <div class="action-button">
                             <div class="interaction-button">
                                 <span><i class="uil uil-thumbs-up"></i></span>
                                 <span><i class="uil uil-comment"></i></span>
                                 <span><i class="uil uil-share"></i></span>
                             </div>
                             <div class="bookmark">
                                 <span><i class="uil uil-bookmark"></i></span>
                             </div>
                         </div>

                         <div class="liked-by">
                             <span><img src="images/profile-15.jpg"></span>
                             <span><img src="images/profile-13.jpg"></span>
                             <span><img src="images/profile-10.jpg"></span>
                             ,<p>Liked by <b>Enrest Achiever</b>snd <b>530 others</b></p>
                         </div>

                         <div class="caption">
                             <p><b>Srishti Tirkey</b>Lorem ipsum dolor storiesquiquam eius.
                            <span class="hash-tag">#lifestyle</span></p>
                         </div>
                         <div class="comments text-muted">View all 190 comments</div>
                    </div>
                </div>
              </div> -->
              
              <div class="right">
                  <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <span><i class="uil uil-edit"></i></span>
                    </div>
  
                    <div class="search-bar">
                        <span><i class="uil uil-search"></i></span>
                        <input type="search" placeholder="Search Messages" id="message-search">
                    </div>
  
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-17.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Herba Mildred</h5>
                            <p class="text-muted">Just woke up bruh..</p>
                        </div>
                    </div>                             
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-18.jpg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Dionson Kate</h5>
                            <p class="text-bold">2 New Messages</p>
                        </div>
                    </div>                             
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-15.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Pagilagan Marc Owen</h5>
                            <p class="text-muted">Lol u right</p>
                        </div>
                    </div>                             
                    <div class="message">
                        <div class="profile-pic">
                            <img src="images/profile-14.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Perez Bien Justine</h5>
                            <p class="text-bold">Birthday tomorrow!!</p>
                        </div>
                    </div>                             
                                           
                                                                       
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
            
              </div>  -->


               
              </div>
          </div>
      </main>

        <script src="index.js"></script>
  </body>
  
</html>
