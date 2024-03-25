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
    <h1 id = "section-1">What Is streaming?</h1>
    <img src ="images/streaming.png" alt ="LiveStreamImage"  class = "LiveStreamImage"><br>
    <p>
        <a href ="#section-1">Streaming</a> is the continuous transmission of audio or video files from a server to a client.<br> 
        In simpler terms, <a href ="#section-1">streaming</a> is what happens when consumers watch TV or listen to podcasts<br> 
        on Internet-connected devices. With <a href ="#section-1">streaming</a>, the media file being played on the client device<br>
        is stored remotely, and is transmitted a few seconds at a time over the Internet.<br>
    </p>
        <h1>What is the difference between streaming and downloading?</h1><br>
    <p>
        <a href ="#section-1">Streaming</a> media involves playing video or audio content in real-time without saving a complete <br>
        copy onto a device's hard drive. Unlike downloading, where the entire file is stored locally <br>
        before playback, <a href ="#section-1">streaming</a> delivers content in small increments, allowing immediate playback without<br>
        saving data locally. This approach is likened to a stream, where data flows continuously to the user's<br>
        browser, contrasting with downloading, which is akin to storing a lake of data on a device's hard drive.<br>
    </p>
        <h1>How does streaming work?</h1><br>
    <p>
        Audio and video data transmitted over the Internet are divided into data packets, each containing a portion<br>
        of the file. These packets are then interpreted by a browser's audio or video player on the client device,<br>
        reconstructing the content for playback.<br>
    </p>
        <h1>What is buffering?</h1>
        <img src ="images/buffering.png" alt ="LiveStreamImage"><br>
    <p>
        <a href ="#section-1">Streaming</a> media players use buffering to preload a few seconds of content, ensuring smooth playback even if<br> 
        the connection briefly drops. However, slow connections or high latency can lead to longer buffering times,<br> 
        causing delays in video playback.<br>
    </p>
        <h1>What factors slow down streaming?</h1>
    <p>
        <strong>On the network side:</strong><br>
        <ul>
            <li>Network latency: A variety of factors impact latency, including where the content that users are trying to access is stored.</li>
            <li>Network congestion: If too much data is sent through the network, this can degrade streaming performance.</li>
        </ul>
    </p>
    <p>
        <strong>On the user side:</strong><br>
        <ul>
        <li>WiFi problems: Restarting the LAN router, or switching to Ethernet instead of WiFi,<br> 
        can help improve streaming performance.</li><br>
        <li>Slowly performing client devices: To play videos takes a good amount of processing power.<br> 
        If the device <a href ="#section-1">streaming</a> the video has a lot of other processes running or is just slow<br> 
        in general, <a href ="#section-1">Streaming</a> performance can be impacted.</li><br>
        <li>Not enough bandwidth: For streaming video, home networks need about 4 Mbps of<br> 
        bandwidth; for high-definition video, they will likely need more.</li><br>
        </ul>
    </p>
        <h1>How can streaming be made faster?</h1>
    <p>
    <a href ="#section-1">Streaming</a>, like other web content, can suffer from delays and performance issues. The location<br>  
        of the content's host is crucial; for instance, if a user in New York streams from a server in Los<br>  
        Gatos, a distance of 3,000 miles, buffering or playback failures may occur. To address this, streaming<br>  
        providers like Netflix rely on distributed content delivery networks (CDNs) <br> 
        to store content closer to users globally, ensuring smoother and more reliable <a href ="#section-1">streaming</a> experiences.<br> 
    </p>

    <h1 id = "section-2">What Is Live streaming?</h1>
    <img src ="images/whatIsImage.png" alt ="LiveStreamImage"><br>
    <p>
    <a href ="#section-1">Streaming</a> is a method of transmitting data over the internet, commonly used for<br> 
        watching videos. It delivers content gradually from a remote storage location, allowing playback to <br>
        start without downloading the entire file first.<br><br>
    </p>
    <p>
        Live <a href ="#section-1">Streaming</a> involves transmitting video over the internet in real-time, without prior recording or storage. <br>
        It encompasses various forms such as TV broadcasts, video game streams, and social media videos.<br><br>
    </p>
    <p>
        Live <a href ="#section-1">Streaming</a> refers to one-to-many broadcasts that transmit video in real-time to multiple<br>
        users simultaneously. This differs from video conferencing technologies like Skype or FaceTime, which operate<br> 
        on real-time communication protocols distinct from live streaming.<br><br>
    </p>
    <h1 id = "section-3">How does live streaming works?</h1>
    <img src ="images/howToImage.png" alt ="LiveStreamImage" class = "LiveStreamImage">
    <p>
    Just like other data that's sent over the Internet, audio and video data is broken down into data packets. <br>
    Each packet contains a small piece of the file, and an audio or video player in the browser <br>
    on the client device takes the flow of data packets and interprets them as video or audio.<br>
    </p>
    <h1 id = "section-4">How can live streaming be done in safe environment?</h1>
    <img src ="images/How-to-Protect.png" alt ="LiveStreamImage" class = "SafeWays">
    <p> Below are the safesty way you could live streaming in a particular environment.<br><br>
        <ul>
            <li>Avoid DDos attacks</li>
            <li>Beware of privacy risks when screen sharing</li>
            <li>Use <a href = "#" >SSl / TLS Encryption Paywall</a></li>
            <li>Geo-blocking</li>
            <li><a href = "#">HTTP delivery</a></li>
            <li>Password protection</li>
            <li>Secure hosting content</li>
            <li>secure video data centers and <a href = "#">CDN</a></li>
            <li>Secure content <a href = "#"> AES encryption</a></li>
        </ul>
    </p>
</div>

<footer>
<div class="you-are-here">
            <ul>
                <li><a href = "Livestreaming.php">Livestreaming</a></li>
                <li><a href = "index.php">Home</a></li>
            </ul>
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
