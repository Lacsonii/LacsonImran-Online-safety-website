<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href ="Images/smc.png" type="Images/smc">
    <meta charset="utf-8">
    <title>Unsubscribe | SMC</title>
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
<!-- === End nav === -->
    <form class = "subscribe unsubscribe" action="Unsubscribe.php" method="POST"> 
        <div class = "sub">
            <img src = "images/unsubscribe.png" alt = "newslatter Icon"><br>
            <h1>Unsubscribe</h1>
        </div>
        <div class="subscribe-security">
        <p>SMC respects your privacy and holds your communications preferences<br>
            in the highest regard. If you no longer wish to receive emails <br>
            from us, simply click unsubscribe button.<br><br>
        </p>
        Email<input type = "text" placeholder= "Enter the email address to remove" requred><br>
        <button class = "subscribe-btn unsubscribe-btn" value = "unsubscribe">Unsubscribe</button>
      </div>
      <div class="subscribe-footer">
        <h1 class = "smc">SMC</h1><div class="line">
            <h1 class = "line-paaragraph">Trusted Campaign</h1>
        </div>
        <p class="subscribe-links">
            <a href="contactus.php">Contact Us</a>&nbsp;|&nbsp;<a href="Subscribe.php">Subscriptions</a>&nbsp;|&nbsp;<a href="termsAndConditions.php">Terms of Use and Privacy</a>&nbsp;|&nbsp;<a href="cookiepreference.php">Cookie Preferences</a>
        </p>
      </div>
    </div> 
    </form>
<script src ="script.js"></script>
</body>
</html>



