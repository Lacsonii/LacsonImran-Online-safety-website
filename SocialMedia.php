<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href ="Images/smc.png" type="Images/smc">
    <meta charset="utf-8">
    <title>Social Media Apps | SMC</title>
    <!-- Boxicons CSS -->
<link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
                <li><a href = "LegAndGuid.php">Guidance</a></li>
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
                    <input type ="text" id="myInput" placeholder = "Search..." required>
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </div> 
</nav>
<!-- === end navigation-bar text === --> 
<div class="application">
<img src = "images/social-image.png" alt = "Lacson Image" class = "social-image">
    <div class="application-text">
    <h1>Let's get you updated with latest tips and topic.</h1>
    <p>Search for more tips and read carefully.</p>
    <div class="app-question">
        <input type="search" id="myInput" placeholder="Search...." required>
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    </div>
</div>
<div class="btn-app">
    <button class = "button"><a href="#updates">Updates</a></button>
    <button class = "button"><a href="#most-popular">Most Popular</a></button>
    <button class = "button"><a href="#blogs">blog Posts</a></button>
</div>
<div class="learning-news sub">
        <h1>Want to keep on learning about Online safety?</h1>
        <p>
            Subscribe to Newslatter, SMC's monthly recap of the Internet's most popular safety insights!<br><br><br>
            <button><a href="Subscribe.php">Subscribe</a></button>
        </p>
    </div>
<div class="info-site" id="myDIV">
    <h1>Topic: Ensuring Teenager Safety Online</h1>
    <p>
        <h2>Cyberbullying Prevention Strategies:</h2> <p class="paragraph">Cyberbullying remains a pervasive threat to teenagers' mental health and 
        well-being. Discuss effective prevention strategies, such as fostering a supportive online community, 
        promoting empathy, and implementing reporting systems on social media platforms.</p>

        <h2>Navigating Social Media:</h2> <p class="paragraph">With the proliferation of social media platforms, teenagers face challenges in managing
        their online presence responsibly. Explore strategies for educating teenagers on privacy settings, critical thinking 
        skills, and the potential consequences of sharing personal information online.</p>

        <h2>Online Predators Awareness:</h2> <p class="paragraph">The internet exposes teenagers to potential risks from online predators 
        who exploit vulnerabilities in social networks. Shed light on warning signs of grooming behavior,
        strategies for maintaining boundaries, and resources available for seeking help or 
        reporting suspicious activities.</p>

        <h2>Digital Citizenship Education:</h2> <p class="paragraph">Empowering teenagers with digital citizenship skills is crucial for fostering
        responsible online behavior. Discuss the importance of teaching ethical conduct, digital literacy, and the 
        impact of online actions on oneself and others.</p>

        <!-- Alert -->
        <div class="login-signup-alert">
            <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
            <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
            Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
        </div>
        <!-- end alert -->

        <h2>Mental Health Support Online:</h2> <p class="paragraph">Teenagers often turn to the internet for support and information regarding
        mental health issues. Explore the role of online communities, resources, and helplines in providing assistance, 
        while also addressing the importance of discerning reliable sources and seeking professional help when needed.</p>

        <h2>Online Privacy and Security:</h2> <p class="paragraph">Teenagers may not fully grasp the importance of safeguarding their online
        privacy and security. Provide practical tips for protecting personal information, recognizing online 
        threats such as phishing scams, and using secure passwords and authentication methods.</p>

        <h2>Media Literacy and Critical Thinking:</h2> <p class="paragraph">In an era of rampant misinformation, teenagers need skills to 
        critically evaluate online content. Discuss strategies for teaching media literacy, fact-checking 
        techniques, and recognizing bias to empower teenagers.</p>
    </p>

    <h1>Topic: Building Healthy Digital Habits</h1>
    <p id="myDIV">
        <h2>Mindful Social Media Use:</h2> <p class="paragraph">Social media platforms offer opportunities for connection and self-expression, 
        but they can also foster feelings of inadequacy and anxiety. Teaching teenagers to use social media mindfully, 
        cultivate genuine connections, and recognize the impact of their online interactions on their well-being 
        promotes positive digital habits.</p>

        <h2>Balancing Screen Time and Well-being:</h2> <p class="paragraph">Excessive screen time can negatively impact teenagers' 
        physical and mental well-being. Offer guidance on establishing healthy screen time habits, 
        promoting offline activities, and fostering open communication within families 
        regarding technology use.</p>

        <h2>Cyber Wellness Education:</h2> <p class="paragraph">Comprehensive cyber wellness education equips teenagers with the knowledge 
        and skills to navigate online risks confidently. Topics such as digital citizenship, online etiquette, and 
        self-care strategies empower teenagers to make informed choices and advocate for their 
        well-being in the digital realm.</p>

        <h2>Digital Detox Practices:</h2> <p class="paragraph">Periodic digital detoxes can help teenagers recalibrate their relationship 
        with technology and prioritize offline experiences. Encouraging activities such as outdoor recreation, 
        creative pursuits, and face-to-face interactions fosters a healthy balance between 
        the virtual and real worlds.</p>
    </p>
    <!-- Alert -->
    <div class="login-signup-alert">
        <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
        <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
        Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
    </div>
    <div class="safety-safety">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fhLxgQfUtKI?si=FKVSpNN7zaE2N8E4" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
        gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <h1 Id = "most-popular">Most Popular Topics</h1>
    <p id="myDIV">
        <h2>Cyberbullying Awareness:</h2> <p class="paragraph">Teach teens to recognize and report cyberbullying, empowering them to 
        combat it effectively and seek support.</p>

        <h2>Privacy Protection:</h2> <p class="paragraph">Stress the importance of adjusting privacy settings and limiting personal 
        information shared online to safeguard against misuse.</p>

        <h2>Online Predators Awareness:</h2> <p class="paragraph">Educate teens on recognizing and avoiding online predators, 
        fostering open communication about suspicious interactions.</p>

        <h2>Digital Footprint Management:</h2> <p class="paragraph">Highlight the lasting impact of online actions and encourage 
        responsible behavior to protect future opportunities.</p>

        <h2>Safe Social Media Usage:</h2> <p class="paragraph">Provide guidance on responsible social media use, including avoiding 
        interactions with strangers and verifying accounts.</p>

        <h2>Online Scam Awareness:</h2> <p class="paragraph">Educate teens about common online scams to help them recognize 
        and avoid fraudulent schemes.</p>

        <h2>Critical Thinking Skills:</h2> <p class="paragraph">Teach teens to evaluate online information critically, discerning 
        credible sources and questioning content responsibly.</p>
    </p>
<div class="safety-safety">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/9VNHhxRTbSI?si=dpeEa21Yh6i27wZV" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
    <h1 Id = "blogs">Blogs</h1>
    <div class="blog-post">
        <rssapp-carousel id="tbQUTUwpBdAOcL91"></rssapp-carousel><script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
        <br><br><br>
        <p class="paragraph">Read more blogs available now. Please keep intouch and visit the site again. 
        You can <a href="Subscribe.php">Subscribe to SMC Newslatters.</a>
    </div>
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
                <li><a href = "SocialMedia.php">Applications</a></li>
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
