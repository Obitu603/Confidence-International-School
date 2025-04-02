<?php
// include ('security.php');
include ('message.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CIS</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo"><span>CI</span>S</div>
        <nav class="navbar">
          
            <ul class="nav-links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#academics">Academics</a></li>
                <li><a href="#admissions">Admissions</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- <li><button class="login-btn"data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Login</button></li> -->
                <li>
  <a href="index.php" class="login-btn" aria-label="Login">
    <i class="fas fa-sign-in-alt"></i> Login
  </a>
</li>

            </ul>
            <div class="menu-icon" id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <section id="home" class="section">
      
        <div class="carousel-container">
            <div class="carousel">
              <div class="slide" style="background-image: url('image/bg.jpg');"></div>
              <div class="slide" style="background-image: url('image/bg3.jpg');"></div>
              <div class="slide" style="background-image: url('image/bg4.jpg');"></div>
              <div class="slide" style="background-image: url('image/bg5.jpg');"></div>
            </div>
            <div class="glass-card">
                <h1>Welcome to <br>Confidence International <br>School</h1> <p>Empowering students to achieve academic excellence  <br> and personal growth.</p> 
                <button class="register-btn" data-toggle="modal" data-target="#registerModal"><i class="fas fa-user-plus"></i> Register Now</button>
            </div>
          </div>
    </section>

    <section id="about" class="section">
                                             <?php
                                             if(isset($_SESSION['message'])&&$_SESSION['message']!=''){
                                                echo '<h2>'.$_SESSION['message'].'</h2>';
                                                unset($_SESSION['message']);
                                              }
                                             ?>
        <h2 class="heading">About Us</h2>
        <p>Welcome to Confidence International School, where we nurture young minds to achieve their full potential.</p>

        <div class="mycards">
        <div class="c1">
            <h3><i class="fas fa-bullseye"></i> Our Mission</h3>
            <p>To provide a holistic education that fosters academic excellence, character development, and lifelong learning.</p>
        </div>
        <div class="c2">
            <h3><i class="fas fa-eye"></i> Our Vision</h3>
            <p>To be a leading educational institution recognized for our commitment to student success and community engagement.</p>
        </div>
    </div>
    </section>

    <section id="academics" class="section">
        <h2 class="heading">Academics</h2>
        <p>Our academic programs are designed to challenge and inspire students to reach their highest potential.</p>
        <div class="mycards">
        <div class="card">
            <h3><i class="fas fa-chalkboard-teacher"></i> Primary Education</h3>
            <p>We offer a comprehensive curriculum that builds a strong foundation in core subjects.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>
        <div class="card">
            <h3><i class="fas fa-futbol"></i> Extracurricular Activities</h3>
            <p>We provide a variety of extracurricular activities to enhance students' learning experiences.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>
        <div class="card">
            <h3><i class="fas fa-graduation-cap"></i> Secondary Education</h3>
            <p>Our secondary program prepares students for higher education and future careers.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>
       
        </div>

    </section>

    <section id="admissions" class="section">
        <h2 class="heading">Admissions</h2>
        <p>Join our vibrant community of learners. Find out more about our admissions process.</p>
        <div class="mycards">
        <div class="card">
            <h3><i class="fas fa-file-alt"></i> Application Process</h3>
            <p>Learn about our application requirements and how to apply.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>

        <div class="card">
            <h3><i class="fas fa-map-marker-alt"></i> Visit Us</h3>
            <p>Schedule a visit to our campus and see what makes Confidence International School special.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>

        <div class="card">
            <h3><i class="fas fa-dollar-sign"></i> Tuition and Fees</h3>
            <p>Get information on our tuition rates and financial aid options.</p>
            <a href="#"><i class="fas fa-arrow-right"></i> Learn More</a>
        </div>
       
        </div>

    </section>

    
        <section id="contact" class="message">
            <h2 class="headings">Get in Touch</h2>
            <p>Have questions? Reach out to us anytime.</p>
            <form>
              <input type="text" placeholder="Your Name">
              <input type="email" placeholder="Your Email">
              <textarea placeholder="Your Message"></textarea>
              <button type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
            </form>
          </section>
       

    <footer class="footer">
        <p>&copy; 2024 Confidence International School. All rights reserved.</p>
    </footer>



    <!-- modals -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
           
            <form class="form" action="code.php" method="POST">
                    <p class="title">Login</p>
                    <label>
                        <i class="fas fa-envelope"></i>
                        <input class="input" type="email" name="email" id="email" placeholder="" required="">
                        <span>Email</span>
                    </label>
                
                    <label>
                        <i class="fas fa-lock"></i>
                        <input class="input" type="password" name="password" id="password" placeholder="" required="">
                        <span>Password</span>
                    </label>
                
                    <button class="submit" name ="login" id="login">Login</button>
                   
                    <p class="signin">Don't have an account? <a href="#">Sign up</a></p>
                </form>
                
            </div>

        </div>
    </div>
</div>
    
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
           
                <form class="form" action="code.php" method="POST">
                    <p class="title">Register</p>
                    <input type="hidden" name="user_type" value="student">

                    <label>
                        <i class="fas fa-user"></i>
                        <input class="input" type="text" id ="sname" name="sname" placeholder="" required="">
                        <span>SurName</span>
                    </label>
                    <div class="flex">
                    <label>
                        <i class="fas fa-user"></i>
                        <input class="input" id = "fname" type="text" name="fname" placeholder="" required="">
                        <span>First Name</span>
                    </label>
                    <label>
                        <i class="fas fa-user"></i>
                        <input class="input" type="text" id ="lname" name="lname" placeholder="" required="">
                        <span>Last Name</span>
                    </label>
                    
                    </div>
                    <div class="flex">
                    <label>
                        <i class="fas fa-envelope"></i>
                        <input class="input" type="email" placeholder=""  name="email" id="email" required="">
                        <span>Email</span>
                    </label>
                    <label>
                        <i class="fa-solid fa-location-pin"></i>
                        <input class="input" type="text" placeholder="" name="address" id="address" required="">
                        <span>Address</span>
                    </label>
                </div>
                    <div class="flex">
                    <label>
                        <i class="fa-solid fa-calendar-days"></i>
                        <input class="input" type="date" placeholder="" name ="DOB" id="DOB" required="">
                        <span>Date of Birth</span>
                    </label>
                    <label>
                        <i class="fas fa-user"></i>
                        
                        <select id="gender" name="gender" class="input" >
                            <option >Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                           
                        </select>
                        
                    </label>
                </div>
                <div class="flex">
                    <label>
                        <i class="fas fa-phone"></i>
                        <input class="input" type="text" name="phone" placeholder="" required="">
                        <span>Phone number</span>
                    </label>
                    <label>
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <input class="input" type="text" name="SOO" id="SOO" placeholder="" required="">
                        <span>State of Origin</span>
                    </label>
                    </div>
                    <div class="flex">
                    <label>
                        <i class="fas fa-lock"></i>
                        <input class="input" type="password" name="password" id="password" placeholder="" required="">
                        <span>Password</span>
                    </label>
                    <label>
                        <i class="fas fa-lock"></i>
                        <input class="input" type="password" name="cpassword" id="cpassword" placeholder="" required="">
                        <span>Comfirm Password</span>
                    </label>
                    </div>
                    <button class="submit" name ="regbtn" id="regbtn">Submit</button>
                   
                    <p class="signin">Don't have an account? <a href="#">Sign up</a></p>
                </form>
                
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
    // Initialize ScrollReveal
    ScrollReveal().reveal('.section', {
        duration: 1000,
        origin: 'bottom',
        distance: '50px',
        reset: true
    });

    // Toggle menu for mobile view
    const menuIcon = document.getElementById('menu-icon');
    const navLinks = document.getElementById('nav-links');

    menuIcon.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
    </script>
</body>
</html>
