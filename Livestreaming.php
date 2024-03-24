<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Live  | SMC</title>
    <!-- Boxicons CSS -->
<link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <li><a href = "index.php">Home</a></li>
                <li><a href = "Information.php">Information</a></li>
                <li><a href = "SocialMedia.php">Apps</a></li>
                <li><a href = "Livestreaming.php">Live</a></li>
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
                    <input type ="text" placeholder = "Search...">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </div> 
</nav>
<!-- === end navigation-bar text === --> 

<div class="live-stream">
    <h1>What is live streaming?&nbsp;|&nbsp;</br>How live streaming can be done in safe environment</h1>
    <p>
        Live streaming is the delivery of video or audio data to an audience over the Internet as</br> 
        the data is created.</br>
    </p>
</div>
<div class="streaming-topics">
    <h1>An overview&nbsp;|</h1>
    <ul>
        <li><a href="#section-1">What is streaming?</a></li>
        <li><a href="#section-2">What is Live streaming?</a></li>
        <li><a href="#section-3">How does live streaming works</a></li>
        <li><a href="#section-4">Safe environment</a></li>
    </ul>
</div>
<hr> </br>
<div class="overview-site">
    <h1 id = "section-1">What Is streaming</h1>
    <img src ="images/streaming.png" alt ="LiveStreamImage"  class = "LiveStreamImage">
    <h1 id = "section-2">What Is Live streaming</h1>
    <img src ="images/whatIsImage.png" alt ="LiveStreamImage">
    <h1 id = "section-3">How does live streaming works</h1>
    <img src ="images/howToImage.png" alt ="LiveStreamImage" class = "LiveStreamImage">
    <h1 id = "section-4">How can live streaming be done in safe environment</h1>
    <img src ="images/How-to-Protect.png" alt ="LiveStreamImage" class = "SafeWays">
</div>
<footer>
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
