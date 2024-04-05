<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Guidelines | SMC</title>
    <!-- Boxicons CSS -->
<link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
<!-- === Login pop-up text === -->
<div class="legNg">
    <div class="legNg-p1">
        <h1>Legislation and Guidelines</h1>
        <p>
            Health Canada administers many pieces of legislation</br> 
            and develops and enforces regulations under this</br> 
            legislation that have a direct impact on the health</br> 
            and safety of Canadians. The Department consults with</br> 
            the Canadian public, industry, non-governmental</br> 
            organizations (NGOs) and other interested parties</br> 
            in the development of these laws. Health Canada also</br> 
            prepares guidelines in order to help interpret and</br> 
            clarify legislation and regulations.</br>
            </br></br></br>
            <u>Below are the Legislation and Guidelines of TechCheck. Read Carefully.</u></br>
        </p>
        <div class="guid-btn">
            <div class="popup" id = "guideline-popup">
                <div class="overlay"></div>
                    <div class="content">
                    <div class="close-btn" onclick = "togglePopup()">&times;</div>
                    <h1>What are Guidelines?</h1>
                    <p>A guideline is a statement by which to determine a course of action.
                        A guideline aims to streamline particular processes according to a set 
                        routine or sound practice</p>
                </div>
            </div>
            <button onclick = "togglePopup()">What are Guidelines?</button>
            
            <div class="popup" id = "legislation-popup">
                <div class="overlay"></div>
                    <div class="content">
                    <div class="close-btn" onclick = "Legislation()">&times;</div>
                    <h1>What is Legislation?</h1>
                    <p>Legislation is the act or process of making or enacting laws. Some people 
                        think there should be more legislation in the area of education and some 
                        people think there should be les</p>
                </div>
            </div>
            <button onclick = "Legislation()">What is Legislation?</button>

            <div class="popup" id = "regulations-popup">
                <div class="overlay"></div>
                    <div class="content">
                    <div class="close-btn" onclick = "Regulations()">&times;</div>
                    <h1>What are Regulations?</h1>
                    <p>Regulation is the management of complex systems according to a set of rules 
                        and trends. In systems theory, these types of rules exist in various fields 
                        of Information technology and society.</p>
                </div>
            </div>
            <button onclick = "Regulations()">What are Regulations?</button>
        </div>
    </div>
</div>
<div class="legAndguid">
<h1>Social Media Best Practice Guidelines</h1>
    <p class = "guide">
    Following best practices can help social media users espicially teenager children most</br>
    maintain a successful online presence and avoid potentially serious pitfalls. These guidelines </br>
    are an educational resource to inform how various community members use </br>
    social media in their professional lives.</br>
    Broader social media users might also find them</br> 
    helpful for navigating the gray area between professional and personal life online.</br></br>

    First and foremost, always consider the implications of what you post and follow the</br> 
    terms of service or community guidelines of the platforms you use. If a student you</br> 
    are also expected to follow applicable university policies</br> 
    (e.g., <u>Code of Student Conduct,</u> <u>Faculty Handbook and Staff Handbook</u>).</br></br>
    Questions? Contact <a href = "#">sms.askus</a> for guidance.</br></br>
    </p>
    <h1>Create a Recognizable Online Identity</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
            <li>
                Use the identity consistently across platforms as much as possible, with minor</br> 
                variations as needed to fit each platform. This includes consistent account names as well</br> 
                as graphics, colors, fonts, and profile description language.</br></br>
            </li>
            <li>
                Account profile, header, and background images should be simple, vibrant, and</br> 
                clear (as high resolution as possible). Keep in mind that a profile image should</br> 
                function effectively as a thumbnail.</br></br>            
            </li>
            <li>
                Confirm that you have permission to use the image, icon or graphic that you select.</br> 
                You may use your unit’s own logo or wordmark. If you are uncertain of permission,</br> 
                snap a fresh photograph to use. <a href = "#"> Learn more about fair use practices here.</a></br></br>
            </li>
            <li>
                Make your account’s name and visual style unique.</br></br>
            </li>
        </ul>
    </p>
    <h1>Provide Engaging Content</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Craft brief, effective messages that pique interest, inspire questions,</br> 
                and implicitly convey why a reader should want to learn more.            
            </li>
            <li>
                Post regularly but avoid redundancy, such as repeating reminders for an</br> 
                upcoming event too many times. Posting frequency can be greater</br> 
                on Twitter, Instagram, and Snapchat than on Facebook, where most institutions post from a</br>
                few times per week to a few times per day.</br></br>
            </li>
            <li>
                Include a diverse mix of content types, such as: (1) original writing, video, audio,</br> 
                or photos highlighting upcoming events, new publications, achievements, opportunities</br> 
                or perspectives; (2) links to material produced by others, like breaking news stories;</br> 
                (3) dialogue with and comments from community members.</br></br>            
            </li>
            <li>
                Use a consistent personality or voice. On more visual platforms, focus on a consistent</br> 
                visual style (such as using just a few of the available Instagram filters).</br></br>
            </li>
        </ul>
    </p>
    <h1>Prioritize Accuracy, Propriety, and Legality</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Distinguish Between Personal and Professional Communications</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Develop Robust Conversations</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <!-- alert -->
    <div class="login-signup-alert">
        <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
        <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
        Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
    </div>
    <!-- end alert -->
    <h1>Run Social Media Campaigns and Contests</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Organize Social Media Takeovers</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Use Resources Wisely</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Explore Paid Advertising Strategically</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
    <h1>Reach out for help when you need it</h1>
    <p class = "guide-p">
        <ul>
            <li>
                Create an online identity that is easy to recognize and understand. Account names that are</br>
                simple, specific, and clearly connected to a real-world identity, such as a department or organization </br>
                name, are the most searchable and memorable.</br></br>
            </li>
        </ul>
    </p>
</div>

<!-- === end Login pop-up text === -->
<footer>
<div class="you-are-here">
            <ul>
                <li><a href = "LegAndGuid.php">Guidelines</a></li>
                <li><a href = "Livestreaming.php">Livestreaming</a></li>
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
