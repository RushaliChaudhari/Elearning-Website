<html>
    <head>
        <Title>Home</Title>
        
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  
        <script src="https://kit.fontawesome.com/248d218fad.js" crossorigin="anonymous"></script>
    </head>
    <body>
       
       <div class="header">
            <nav >
                <div class="logo">
                    <img src="capstonelogo.png">
                </div>
                
                <ul>
           
                             <li class="active"><a href="home.php" > <i class="fas fa-home"></i>Home</a></li>
                             <li><a href="about_us.html" ><i class="fas fa-address-card"></i>About_us</a></li>
                             <li><a href="cources.html" ><i class="fas fa-book-reader"></i>Courses</a></li>
                             <li><a href="contact_us.php" ><i class="fas fa-user-circle"></i></i>Contact_us</a></li>
                             <li><a href="logout1.php" ><i class="fas fa-user"></i>Log_out</a></li>
                        </ul>
                         </nav>
                        </div>
                 
                       

                        <div class="service_tag">
                            <h1>Our Services</h1>
                            <h3>Following services provided by us</h3>

                        </div>

                        <div class="services">
                            <div class="services-th">
                            <i class="fas fa-book-open"></i>
                            <h2>Programming</h2>
                            <h3>Here, you will find all lectures and tutorials related to programming language like python,java,html etc</h3>
                        </div>
                   
                        <div class="services-th">
                            <i class="fas fa-book-open"></i>
                            
                            <h2 class="video-h2">Learn_Videos</h2>
                            <h3>Here ,you will find all videos lectures recorded by high professional teachers. </h3>
                        </div>

                        <div class="services-th">
                            <i class="fas fa-book-open"></i>
                            <h2>Assignments</h2>
                            <h3>Here you will find all Assignments related to our subjects like html,java,python etc</h3>
                        </div>
                    </div>

                    <div class="relaxh1">Relax your mind</div>
                       <div class="relaxBg">
                     <div class="relax">
                    <img src="meditation.png" alt="png">
                    <a onclick="playAudio();"> <button>Play</button></a>
                     <a onclick="pauseAudio();"> <button>Pause</button></a> 
                    </div>
                    </div>

        <script>
            var audio = new Audio("Lord Krishna Flute.mp3");
                
            function playAudio() {

                    audio.play(); 
                   
                }
                function pauseAudio() { 
                    audio.pause(); 
                } 
                
                


        </script> 

 



                  <!--Footer Section -->
                <section class="footer">
                    <div class="box-container">
                        
                        <div class="box">
                            <h3>Collections</h3>
                            <a href="home.html" ><i class="fas fa-arrow-right"></i> Home</a>
                            <a href="about_us.html" ><i class="fas fa-arrow-right"></i>About_us</a>
                            <a href="cources.html" ><i class="fas fa-arrow-right"></i>Courses</a>
                            <a href="contact_us.html" ><i class="fas fa-arrow-right"></i>Contact_us</a>
                            <a href="logout.php" ><i class="fas fa-arrow-right"></i>Log_in</a>
                             </div>

                             <div class="box">
                                 <h3>Social links</h3>
                                <a href="#" ><i class="fab fa-facebook"></i> Facebook</a>
                               <a href="#" ><i class="fab fa-instagram-square"></i>Instagram</a>
                                <a href="#" ><i class="fab fa-twitter"></i>Twitter</a>
                                <a href="#" ><i class="fab fa-linkedin"></i>LinkDin</a>
                                <a href="#" ><i class="fab fa-github-square"></i>Github</a>
                          </div>

                          <div class="box">
                              <h3>Contact_Us</h3>
                              <h3>45464748323</h3>
                          </div>
                    </div>
                    <div class="credit">
                        <hr>
                        Created By students of Government Polytechnic,Jalgaon
                        <hr>
                    </div>
                </section>
                  <!--Footer Section end-->
                 
                 

                    









 <script src="script.js"></script>

    </body>
</html>
