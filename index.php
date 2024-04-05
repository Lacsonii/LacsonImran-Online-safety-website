<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Home | SMC</title>
    <!-- Boxicons CSS -->
<link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- === navigation-bar text === -->
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i> 
        <span class ="logo navLogo"><a href ="#">SMC</a></span>

        <div class = "menu-links">
                <div class ="logo-toggle">
                    <span class ="logo"><a href ="#">SMC</a></span>
                    <i class='bx bx-x sidebarClose'></i>
                </div>

            <ul class = "links">
                <li><a href = "index.php">Social Issues</a>
                <ul class="Dropdown">
                    <li><a href="">Cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                </ul>
                </li>
                <li><a href = "Information.php">Information</a></li>
                <li><a href = "SocialMedia.php">Apps</a></li>
                <li><a href = "Livestreaming.php">Live</a></li>
                <ul class="Dropdown-live">
                    <li><a href="">Cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                    <li><a href="">cyberbullying</a></li>
                </ul>
                <li><a href = "LegAndGuid.php">Guidlines</a></li>
                <li><a href = "ParentsHelp.php">Help</a></li>
                <li><a href = "contact.php">Contacts</a></li>
                <li><a href = "review.php">Reviews</a></li>
            </ul> 
        </div>

        <div class ="darklight-searchBox">
            <div class = "dark-light">
                <i class ='bx bx-moon moon'></i>
                <i class ='bx bx-sun sun'></i>
            </div>
        
            <div class = "searchBox">
                <div class = "searchToggle">
                    <i class='bx bx-x cancle'></i>
                    <i class='bx bx-search search'></i>
                </div>

                <div class = "search-field">
                    <input type ="text" id="myInput" placeholder = "Search...">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- === end navigation-bar text === --> 
<!-- === Login pop-up text === -->

<div class = "popup">
    <div class = "close-btn">&times;</div>
    <div class = "form">
      <h2>Log In</h2>
        <div class = "form-element">
            <lable for = "Username">Username</lable>
            <input type = "text" id = "email" placeholder = "username or email">
        </div>

        <div class = "form-element">
            <lable for = "password">Password</lable>
            <input type = "password" id = "password" placeholder = "password">
            <input type="checkbox" onclick="Function()">Show Password
        </div>

        <div class = "form-element">
            <input type = "checkbox" id = "remember.me">
            <lable for = "remember-me">Remember Me</lable>
        </div>
        <div class = "form-element">
            <button type = "submit" class = "btn">Sign In</button></br></br>
            <a href = "SignUp.php"><button>Sign Up</button></a>
        </div>
        <div class = "form-element">
            <a href = "#">Forgot password?</a>
        </div>
    </div>
    <div class="login-links">
        <a href="contactus.php">Contact Us</a>&nbsp;|&nbsp;<a href="termsAndConditions.php">Terms of Use</a>&nbsp;|&nbsp;<a href="privacypolicy.php">Privacy policy</a>
    </div>
</div>
<!-- on backgroung image -->
<div class="background">
    <button class = "bg-btn"><a href="SignUp.php">Create Account</a></button>
        <div class = "login">
        <button id = "showlogin">Log in</button>
    </div> 
</div>
<div class="index-bar">
    
</div>
<div id="myDIV">
<!-- How to stay online texts -->
<div class="how-to-stay-safe">
    <h1>How to Stay safe Online</h1></br>
    <img src ="images/safe-online.png" alt ="pictureSafe">
        <ul>
            <li>
                Block anyone you’ve had contact with that was negative or unsafe.</br>
            </li>
            <li>
                Protect your identity.</br> 
            </li>
            <li>
                Think before you upload and share photos.</br>
            </li>
            <li>
                Think carefully about sharing links to other site.</br> 
            </p>
            <li>
                Be mindful of what you write to others.</br> 
            </li>
            <li>
                keep sexting laws in mind when taking photos and sending or receiving images.</br> 
            </li>
            <li>
                Keep your online friends online.</br> 
            </li>
            <li>
                Think critically about online content (link to social post once up).</br> 
            </li>
        </ul>
      <div class = "readmore">You can Read More on <a href="https://blogs.microsoft.com/on-the-issues/2024/01/16/youth-online-safety-ai-safer-internet/">Advancing youth online safety and wellness.</a></br> 
            Available On Microsoft website.</div>
      </div>
</div>


<div class="image-3D">
    <img src ="images/safe.png" alt ="pictureSafe">
    <img src ="images/safe.png" alt ="pictureSafe">
</div>

<!-- Popular social media application -->
<div class="popular-social-media">
    <h1 class = "header-media">Popular Social Media Applications</h1>
    <p class = "p-media">
        Be aware of the social media applications in this world, which we are sure you all know about them</br>
        This includes Facebook, Instagram and X-twitter (formerly know as twitter)</br>
    </p>

    <div class="facebook">
            <h2>About Facebook&nbsp;&nbsp;<i class="fa-brands fa-facebook"></i></h2>
        <p>
            Facebook is a social networking site that makes it easy for you to connect and share with</br>
            family and friends online. Originally designed for college students, Facebook was </br>
            created in 2004 by Mark Zuckerberg while he was enrolled at Harvard University. By </br>
            2006, anyone over the age of 13 with a valid email address could join Facebook. Today, </br>
            Facebook is the world's largest social network, with more than 1 billion users worldwide.</br></br>
            
            You can create an account on <a href ="https://web.facebook.com/signup?_rdc=1&_rdr">Facebook</a></br>
            <a href="https://edu.gcfglobal.org/en/facebook101/what-is-facebook/1/">Read more</a></br>
        </p>
    </div>
    <!-- Alert -->
    <div class="login-signup-alert">
        <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
        <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
        Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
    </div>
    <!-- end alert -->
    <div class="x-twitter">
            <h2>About X(Formaly twitter)&nbsp;&nbsp;<i class="fa-brands fa-square-x-twitter"></i></h2>
        <p>
             X (formerly Twitter) is an online news and social networking site where</br> 
            people communicate in short messages. The hope is that your words are useful and </br>
            interesting to someone in your audience. X is one example of a microblogging platform.</br>
            Some people use X to discover interesting people and companies online, opting to follow their tweets.</br></br>

            Create account on <a href = "https://twitter.com/i/flow/signup?lang=en">X-twitter</a></br>
            <a href="https://www.lifewire.com/what-exactly-is-twitter-2483331">Read more</a>
        </p>

    </div>
        <div class="Instagram">
            <h2>About Instagram&nbsp;&nbsp;<i class="fa-brands fa-square-instagram"></i></h2>
            <p>
            Instagram is a free photo and video sharing app available on iPhone and Android. People can</br>
            upload photos or videos to our service and share them with their followers or with a </br>
            select group of friends. They can also view, comment and like posts shared by their friends</br> 
            on Instagram. Anyone 13 and older can create an account by registering an email address and</br> 
            selecting a username.</br></br>

            
            Create account on <a href = "https://www.instagram.com/accounts/emailsignup/">Instagram</a></br>
            
            <a href="https://help.instagram.com/424737657584573/?helpref=uf_share">Read More</a>
        </p>
    </div>
</div>
</div>
<div class="play-fun">
    <h1>Play fun and test your typing skills</h1>
    <a href="https://10fastfingers.com/typing-test/english"><img src="http://img.10fastfingers.com/badge/typing-test_1_AN.png" alt="Typing Test" /></a><p>Visit the <a href="https://10fastfingers.com/typing-test/english">Typing Test</a> and try!</p>
</div>

<div class="popular">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/MB5VDIebMd8?si=Lff96cWWiGhKE2Aa" 
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
    gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/fhLxgQfUtKI?si=FKVSpNN7zaE2N8E4" 
    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
    gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>
<!-- End Popular social media application -->
<footer>
<div class="you-are-here">
            <ul>
                <li><a href = "index.php">Home</a></li>
                <li><a href = "LegAndGuid.php">Guidlines</a></li>
                <li><a href = "review.php">Reviews</a></li>
            </ul>
            <img src ="images/playStore.png" alt ="PlayStore Badge" class="playstore">
        </div>
    <div class ="footer">
        <div class="icon">
        <a href = "https://web.facebook.com/profile.php?id=61557074391706"><i class="fa-brands fa-facebook-f"></i></a>
        <a href = ""><i class="fa-brands fa-instagram"></i></a>
        <a href = ""><i class="fa-brands fa-x-twitter"></i></a>
        <a href = ""><i class="fa-solid fa-envelope"></i></a>
        <a href = ""><i class="fa-brands fa-whatsapp"></i></a>
        <a href = ""><i class="fa-brands fa-youtube"></i></a>
        <a href = ""><i class="fa-brands fa-pinterest-p"></i></a>
        </div> 
        <div class="about-text">
            <h1>About SMC</h1>
            <p>
                At Teenager’s SMC of Lilongwe, our mission is to</br>
                make teenagers protected online today and tomorrow.</br>
                SMC is one of the many ways we deliver on</br>
                that promise. Armed with a team of internet professionals,</br> 
                Cyber security experts, Social media experts,</br> 
                and other Internet experts. SMC has resources</br> 
                to help teenagers raise better, safe online.</br></br>
                <a href ="">You can donate or support our dreams to protect the teeangers</a>
            </p></br></br>
            <div class="con-us">
                    |&nbsp;&nbsp;<a href="contactus.php">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="Aboutus.php">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="termsAndConditions.php">Terms & Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="faq.php">FAQ's</a>&nbsp;&nbsp;|
                </div>
        </div>
        <div class="txt">
            <p>Lilongwe Mw</p>
            <p>Tel: +265882000119</p>
            <p> Support:&nbsp;<a href = "#">smcsupport@gmail.com</a></p>
            
                <p>  
                Copywrite 1998-2024 &copy; SMC, All Rights Reserved.
                </p>
                
                <div class="footer-links">
                <a href = "cookiepreference.php">Cookie Preferences</a>&nbsp;|&nbsp;<a href = "cookieDeclaration.php">Cookie Declaration</a>&nbsp;|&nbsp;<a href = "privacypolicy.php">Privacy Policy</a>
                </div>
                <div class="sign">
                    <button><a href = "SignUp.php">Sign Up&nbsp;<i class="fa-solid fa-arrow-right"></i></a></button>
                </div>
    </div>
</footer>
<!-- === calling javascript codes/scripts in script.js folder === -->
<script src ="script.js"></script>
</body>
</html>
