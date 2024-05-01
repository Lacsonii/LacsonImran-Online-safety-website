<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href ="Images/smc.png" type="Images/smc">
    <meta charset="utf-8">
    <title>Information | SMC</title>
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

<div class="image-c">
    <img src = "images/images.png" name = "On" alt = "On-Image">
</div>
<!-- === end Login pop-up text === -->

<div class="campaign">
    <h1 class = "header-camapign">Social Media Campaigns</h1>
    <p class = "p-camapign">
        Be aware of the social media applications in this world, which we are sure you all know about them
        This includes Facebook, Instagram and X-twitter (formerly know as twitter)
    </p>
</div>
 <div class="parent-ing" id="myDIV">
    <div class="img-campaign">
        <h2>ParentsLoveYou(PLY) Campaign</h2>
        <img src = "images/parentting.jpg" name = "talk" alt = "talk-Image" class = "campaign-image">
        <h3>Campaign Aim</h3>
        <p>
            Empowering parents to engage in conversations about online safety with their teenagers,
            fostering trust and understanding to navigate the digital world together.
        </p>
        <h3>Vision</h3>
        <p>
            Creating a community where parents and teenagers collaborate to promote safer online behaviors and healthier
            digital habits, fostering a culture of trust and resilience in the digital age.
            <br><br>
            <!-- alert -->
            <div class="login-signup-alert alert">
                    <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
                    <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
                    Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
            </div>
        </p>
        
        <h3>Camapign Summary</h3>
        <p>
            The ParentsLoveYou (PLY) Campaign encourages parental involvement in discussing online safety 
            with teenagers. By providing resources and support, it aims to foster trust and understanding within families, 
            creating a safer online environment for adolescents.
        </p>
        <div class="img-c">
            <h2>Let Me Browse</h2>
            <img src = "images/browsing.jpg" name = "talk" alt = "talk-Image" class = "campaign-image">
            <h3>Campaign Aim</h3>
            <p>
                Empower teens with knowledge and skills for safe online navigation, fostering digital citizenship </br>
                and informed decision-making.
            </p>
            <h3>Vision</h3>
            <p>
                Create a digitally literate generation confident in utilizing the internet responsibly, promoting a culture
                of online safety and well-being through collaboration with schools, parents, and online platforms.
            </p>
            <h3>Camapign Summary</h3>
            <p>
                "Let Me Browse" educates teens on online safety, empowering them to navigate the digital world responsibly.
                Through workshops and resources, it aims to equip teens with skills to identify and avoid online threats like cyberbullying and identity theft.
            </p>
            <div class="img-c">
                <h2>Get Better friend Online</h2>
                <img src = "images/terrace.jpg" name = "talk" alt = "talk-Image" class = "campaign-image">
                <h3>Campaign Aim</h3>
                <p> 
                    Empower teenagers with tools and knowledge for safer online interactions, reducing cyber
                    risks and fostering responsible digital citizenship.
                </p>
                <h3>Vision</h3>
                <p>
                    A digital landscape where teenagers navigate online spaces confidently, practicing empathy, respect, and digital
                    responsibility, contributing to a safer and more positive online community.
                </p>
                <h3>Camapign Summary</h3>
                <p>
                    The "Get Better Friend Online" campaign aims to educate and empower teenagers<br>
                    for safer online experiences. By addressing cyberbullying, privacy issues, and digital literacy,
                    it strives to create a secure and supportive online environment.
                </p>
                <div class="img-c">
                    <h2>Lets Be On Internet</h2>
                    <img src = "images/internet.png" name = "talk" alt = "talk-Image" class = "campaign-image">
                    <h3>Campaign Aim</h3>
                    <p>
                        Equip teenagers with essential tools and awareness to safeguard themselves and
                        others online, reducing risks and promoting positive online behavior.
                    </p>
                    <h3>Vision</h3>
                    <p>
                        To cultivate a safer online space where teenagers can freely explore, learn, and connect,
                        ensuring a future where online safety is ingrained in digital culture.
                    </p>
                    <h3>Camapign Summary</h3>
                    <p>
                        "Let's Be On Internet" champions online safety for teenagers. Our mission is to empower
                        teens with the skills and knowledge to navigate the digital world safely, fostering a culture of
                        responsibility and respect online.
                    </p>
                    <div class="img-c">
                        <h2>WeAreTeenagers Campaign</h2>
                        <img src = "images/we-are-teens.jpg" name = "talk" alt = "talk-Image" class = "campaign-image">
                        <h3>Campaign Aim</h3>
                        <p>
                            To raise awareness and equip teenagers with the knowledge and skills to protect
                            themselves from online threats such as cyberbullying and exploitation.
                        </p>
                        <h3>Vision</h3>
                        <p>
                            A future where teenagers confidently explore the digital world, 
                            expressing themselves creatively and connecting with others while prioritizing
                            their safety and well-being.
                        </p>
                        <h3>Camapign Summary</h3>
                        <p>
                            The WeAreTeenagers Campaign aims to promote online safety and digital literacy
                            among teenagers. Through education and awareness initiatives, we empower teens to
                            navigate the digital world safely.
                        </p>
                        <div class="img-c">
                            <h2>My Safety My Pride</h2>
                            <img src = "images/woman-padlock.jpg" name = "talk" alt = "talk-Image" class = "campaign-image">
                            <h3>Campaign Aim</h3>
                            <p>
                                Empowering teens with skills and knowledge to navigate the online world safely, "My Safety My Pride" aims
                                to prevent cyber threats and foster digital citizenship among teenagers.
                            </p>
                            <h3>Vision</h3>
                            <p>
                                Creating a generation of digitally savvy teens who prioritize online safety and ethical
                                use of technology, "My Safety My Pride" envisions a future where teenagers confidently engage
                                in online activities without fear, contributing to safer online communities.
                            </p>
                            <h3>Camapign Summary</h3>
                            <p>
                                "My Safety My Pride" educates teens on online safety through 
                                workshops and multimedia. Aimed at preventing cyberbullying, identity theft, and online 
                                predators, it empowers teens to navigate the digital world responsibly.
                                <br><br>
                                <!-- alert -->
                                <div class="login-signup-alert alert">
                                        <span class="closeButton" onclick="this.parentElement.style.display = 'none';">&times;</span>
                                        <a href="LogIn.php">Log In</a> or <a href="SignUp.php">Create Account</a><br>
                                        Do not forget to <a href="Subscribe.php">Subscribe</a> to SMC Newsletters.
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
<div class="you-are-here">
            <ul>
                <li><a href = "Information.php">Information</a></li>
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
