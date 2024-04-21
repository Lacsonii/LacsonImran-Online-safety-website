<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href ="Images/smc.png" type="Images/smc">
    <meta charset="utf-8">
    <title>About Us | SMC</title>
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
<div class="Accounthelp">
    <h1>Account Help</h1>
    <p>
        Welcome to the Account Help section of Social Media for Teenager Safety (SMC). We understand that 
        managing your account and ensuring its security are essential aspects of your online 
        experience. Whether you're facing issues with your account, need assistance 
        with privacy settings, or want to learn how to enhance your account 
        security, we're here to help.
    </p>
    <h1>Common Account Issues</h1>
    <ol>
        <li>
            <strong>Forgot Password:</strong> If you've forgotten your password, don't worry! 
            You can easily reset it by following the "Forgot Password" link on the 
            login page. Make sure to choose a strong and unique password 
            to protect your account.
        </li>
        
        <li>
            <strong>Account Hacked or Compromised:</strong> If you suspect that your account has 
            been hacked or compromised, take immediate action to secure it. Change your 
            password, enable two-factor authentication if available, and review your 
            account activity for any unauthorized actions.
        </li>
        <li>
            <strong>Account Disabled:</strong> If your account has been disabled or restricted, it may be 
            due to a violation of the platform's community guidelines or terms of service. Contact the 
            platform's support team for assistance in resolving the issue.
        </li>
    </ol>
    <h1>Privacy and Security Settings</h1>
    <ol>
        <li>
           <strong>Privacy Settings:</strong> Review and adjust your privacy settings to 
           control who can see your posts, photos, and personal information. Consider 
           limiting your profile visibility to friends only and being selective 
           about accepting friend requests.
        </li>
        <li>
        <strong>Two-Factor Authentication (2FA):</strong> Enable two-factor authentication 
        for an extra layer of security. This feature typically requires you to enter a 
        code sent to your mobile device when logging in from an unrecognized device.
        </li>
        <li>
        <strong>Password Security:</strong> Protect your account with a strong and unique password. 
        Avoid using easily guessable passwords and consider using a password manager to 
        securely store and generate passwords.
        </li>
    </ol>
    <h1>Account Safety Tips</h1>
    <ol>
        <li>
        <strong>Be Skeptical of Suspicious Links:</strong> Avoid clicking on suspicious links or downloading attachments 
        from unknown sources, as they could lead to phishing scams or malware infections
        </li>
        <li>
        <strong>Keep Software Updated:</strong> Keep your device's operating system, web browser, and antivirus software 
        up to date to protect against security vulnerabilities and exploits.
        </li>
        <li>
        <strong>Regularly Review Account Activity:</strong> Periodically review your account activity and logins to ensure there are no 
        unauthorized accesses. If you notice any suspicious activity, change your password immediately 
        and report it to the platform's support team.
        </li>
    </ol>

    <h1>Contact Us</h1>
    <p>
        If you're experiencing any issues with your account or need further assistance, don't hesitate to <a href = "contactus.php">contact 
        our support team</a>. We're here to help you resolve any account-related issues and ensure a safe and 
        enjoyable online experience. You can reach us through our contact form or community forums. 
        Your security and satisfaction are our top priorities at SMC.
    </p><br><br><br>

    <!-- Alert -->
    <div class="login-signup-alert">
                    <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
                    <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
                    Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
                </div>
        <!-- end alert -->
    </div>
</div>
<!-- === end Login pop-up text === -->
<footer>
<div class="you-are-here">
            <ul>
                <li><a href = "AboutUs.php">About Us</a></li>
                <li><a href = "contact.php">Contact</a></li>
                <li><a href = "review.php">Reviews</a></li>
                <li><a href = "index.php">Home</a></li>
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
