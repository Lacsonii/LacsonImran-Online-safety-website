<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <title>Create Account | SMC</title>
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
  <div class = "SignUp-form"> 
    <form action="register.php" method="POST" onsubmit="return validateForm()" class = "form">
      <div class="form-reg">  
        <h1 class="header">Sign Up</h1>
        <p class="question">Already have SMC Account?&nbsp;<a href="">Sign In</a></p>
        <label class="label">First Name:</label>
        <input type="text" placeholder="First Name" name="FirstName" id = "textbox" required>

        <label class="label">Last Name:</label>
        <input type="text" placeholder="Last Name" name="LastName" id = "textbox" required>

        <label class="label">Username:</label>
        <input type="text" placeholder="Username" name="Username" id = "textbox" required>
      
        <label class="label">Country:</label>
        <select name="Country" id = "textbox" required>
          <option name value ="">Select country</option>
          <option  value ="">Afghanistan</option>
              <option  value ="">Albania</option>
              <option  value ="">Algeria</option>
              <option  value ="">Andorra</option>
              <option  value ="">Angola</option>
              <option  value ="">Antigua and Barbuda</option>
              <option  value ="">Argentina</option>
              <option  value ="">Armenia</option>
              <option  value ="">Australia</option>
              <option  value ="">Austria</option>
              <option  value ="">Azerbaijan</option>
              <option  value ="">The Bahamas</option>
              <option  value ="">Bahrain</option>
              <option  value ="">Bangladesh</option>
              <option  value ="">Barbados</option>
              <option  value ="">Belarus</option>
              <option  value ="">Belgium</option>
              <option  value ="">Belize</option>
              <option  value ="">Benin</option>
              <option  value ="">Bhutan</option>
              <option  value ="">Bolivia</option>
              <option  value ="">Bosnia and Herzegovina</option>
              <option  value ="">Botswana</option>
              <option  value ="">Brazil</option>
              <option  value ="">Brunei</option>
              <option  value ="">Bulgaria</option>
              <option  value ="">Burkina Faso</option>
              <option  value ="">Burundi</option>
              <option  value ="">Cabo Verde</option>
              <option  value ="">Cambodia</option>
              <option  value ="">Cameroon</option>
              <option  value ="">Canada</option>
              <option  value ="">Central African Republic</option>
              <option  value ="">Chad</option>
              <option  value ="">Chile</option>
              <option  value ="">China</option>
              <option  value ="">Colombia</option>
              <option  value ="">Comoros</option>
              <option  value ="">Democratic Republic of the Congo</option>
              <option  value ="">Republic of the Congo</option>
              <option  value ="">Costa Rica</option>
              <option  value ="">Côte d’Ivoire</option>
              <option  value ="">Croatia</option>
              <option  value ="">Cuba</option>
              <option  value ="">Cyprus</option>
              <option  value ="">Czech Republic</option>
              <option  value ="">Denmark</option>
              <option  value ="">Djibouti</option>
              <option  value ="">Dominica</option>
              <option  value ="">Dominican Republic</option>
              <option  value ="">East Timor (Timor-Leste)</option>
              <option  value ="">Ecuador</option>
              <option  value ="">Egypt</option>
              <option  value ="">El Salvador</option>
              <option  value ="">Equatorial Guinea</option>
              <option  value ="">Eritrea</option>
              <option  value ="">Estonia</option>
              <option  value ="">Eswatini</option>
              <option  value ="">Ethiopia</option>
              <option  value ="">Fiji</option>
              <option  value ="">Finland</option>
              <option  value ="">France</option>
              <option  value ="">Gabon</option>
              <option  value ="">The Gambia</option>
              <option  value ="">Georgia</option>
              <option  value ="">Germany</option>
              <option  value ="">Ghana</option>
              <option  value ="">Greece</option>
              <option  value ="">Grenada</option>
              <option  value ="">Guatemala</option>
              <option  value ="">Guinea</option>
              <option  value ="">Guinea-Bissau</option>
              <option  value ="">Guyana</option>
              <option  value ="">Haiti</option>
              <option  value ="">Honduras</option>
              <option  value ="">Hungary</option>
              <option  value ="">Iceland</option>
              <option  value ="">India</option>
              <option  value ="">Indonesia</option>
              <option  value ="">Iran</option>
              <option  value ="">Iraq</option>
              <option  value ="">Ireland</option>
              <option  value ="">Israel</option>
              <option  value ="">Italy</option>
              <option  value ="">Jamaica</option>
              <option  value ="">Japan</option>
              <option  value ="">Jordan</option>
              <option  value ="">Kazakhstan</option>
              <option  value ="">Kenya</option>
              <option  value ="">Kiribati</option>
              <option  value ="">North Korea</option>
              <option  value ="">South Korea</option>
              <option  value ="">Kosovo</option>
              <option  value ="">Kuwait</option>
              <option  value ="">Kyrgyzstan</option>
              <option  value ="">Laos</option>
              <option  value ="">Latvia</option>
              <option  value ="">Lebanon</option>
              <option  value ="">Lesotho</option>
              <option  value ="">Liberia</option>
              <option  value ="">Libya</option>
              <option  value ="">Liechtenstein</option>
              <option  value ="">Lithuania</option>
              <option  value ="">Luxembourg</option>
              <option  value ="">Madagascar</option>
              <option  value ="">Malawi</option>
              <option  value ="">Malaysia</option>
              <option  value ="">Maldives</option>
              <option  value ="">Mali</option>
              <option  value ="">Malta</option>
              <option  value ="">Marshall Islands</option>
              <option  value ="">Mauritania</option>
              <option  value ="">Mauritius</option>
              <option  value ="">Mexico</option>
              <option  value ="">Federated States of Micronesia</option>
              <option  value ="">Moldova</option>
              <option  value ="">Monaco</option>
              <option  value ="">Mongolia</option>
              <option  value ="">Montenegro</option>
              <option  value ="">Morocco</option>
              <option  value ="">Mozambique</option>
              <option  value ="">Myanmar (Burma)</option>
              <option  value ="">Namibia</option>
              <option  value ="">Nauru</option>
              <option  value ="">Nepal</option>
              <option  value ="">Netherlands</option>
              <option  value ="">New Zealand</option>
              <option  value ="">Nicaragua</option>
              <option  value ="">Niger</option>
              <option  value ="">Nigeria</option>
              <option  value ="">North Macedonia</option>
              <option  value ="">Norway</option>
              <option  value ="">Oman</option>
              <option  value ="">Pakistan</option>
              <option  value ="">Palau</option>
              <option  value ="">Panama</option>
              <option  value ="">Papua New Guinea</option>
              <option  value ="">Paraguay</option>
              <option  value ="">Peru</option>
              <option  value ="">Philippines</option>
              <option  value ="">Poland</option>
              <option  value ="">Portugal</option>
              <option  value ="">Qatar</option>
              <option  value ="">Romania</option>
              <option  value ="">Russia</option>
              <option  value ="">Rwanda</option>
              <option  value ="">Saint Kitts and Nevis</option>
              <option  value ="">Saint Lucia</option>
              <option  value ="">Saint Vincent and the Grenadines</option>
              <option  value ="">Samoa</option>
              <option  value ="">San Marino</option>
              <option  value ="">Sao Tome and Principe</option>
              <option  value ="">Saudi Arabia</option>
              <option  value ="">Senegal</option>
              <option  value ="">Serbia</option>
              <option  value ="">Seychelles</option>
              <option  value ="">Sierra Leone</option>
              <option  value ="">Singapore</option>
              <option  value ="">Slovakia</option>
              <option  value ="">Slovenia</option>
              <option  value ="">Solomon Islands</option>
              <option  value ="">Somalia</option>
              <option  value ="">South Africa</option>
              <option  value ="">Spain</option>
              <option  value ="">Sri Lanka</option>
              <option  value ="">Sudan</option>
              <option  value ="">Sudan, South</option>
              <option  value ="">Suriname</option>
              <option  value ="">Sweden</option>
              <option  value ="">Switzerland</option>
              <option  value ="">Syria</option>
              <option  value ="">Taiwan</option>
              <option  value ="">Tajikistan</option>
              <option  value ="">Tanzania</option>
              <option  value ="">Thailand</option>
              <option  value ="">Togo</option>
              <option  value ="">Tonga</option>
              <option  value ="">Trinidad and Tobago</option>
              <option  value ="">Tunisia</option>
              <option  value ="">Turkey</option>
              <option  value ="">Turkmenistan</option>
              <option  value ="">Tuvalu</option>
              <option  value ="">Uganda</option>
              <option  value ="">Ukraine</option>
              <option  value ="">United Arab Emirates</option>
              <option  value ="">United Kingdom</option>
              <option  value ="">United States</option>
              <option  value ="">Uruguay</option>
              <option  value ="">Uzbekistan</option>
              <option  value ="">Vanuatu</option>
              <option  value ="">Vatican City</option>
              <option  value ="">Venezuela</option>
              <option  value ="">Vietnam</option>
              <option  value ="">Yemen</option>
              <option  value ="">Zambia</option>
              <option  value ="">Zimbabwe</option>
        </select>

    
        <label class="label">Email:</label>
        <input type="text" placeholder="techcheck@gmail..." name="EmailAddress" id = "textbox" required>

        <label class="label">ID Type:</label>
        <select name="IDType" class = "textbox" required>
        <option value="">--select ID type--</option>
          <option value="Passport">Passport</option>
          <option value="National ID">National ID</option>
          <option value="Driver's License">Driver's License</option>
        </select>

        <label class="label">ID NO.:</label>
        <input type="text" placeholder="Enter ID Number" name="userID" id = "textbox" required>
        <label class = "label">Upload ID</label>

        <input type = "file" name = "IDpicture" id = "textbox" required>

        <label class="label">Gender:</label>
        <select name="gender" class = "textbox"required>
        <option value="">--select gender--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        
        <label class="label">Date Of Birth:</label>
        <input type="date" name="dateOfBirth" class = "dob" required>

        <label class="label">New Password:</label>
        <input type="password" placeholder="Password" name="password" id="password" required>
        <div class ="password"><input type="checkbox" onclick="Function()">Show Password</div>
        <div class = "passwordcheck"><p>(char between 8 & 16  should include: Kj@7chEck)</p></div>

        <label class="label">Confirm Password:</label>
        <input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword"  required>
        <div class = "password"><input type="checkbox" onclick="myFunction()"> Show Password</div>

        <div class = "buttonCreate">
        <div class = "btnCreate"><input type="submit" value="Create Account"></div>
      </div>
      <div class="signup-declare">
        <p>By clicking on the "Create Account" button below, you understand and agree that the<br>
           use of SMC's web site is subject to the smc.com Terms of Use. Additional details<br> 
           regarding SMC’s collection and use of your personal information, including<br> 
           information about access, retention, rectification, deletion, security, cross-border<br>
           transfers and other topics, is available in the Oracle Privacy Policy.<br></p>
      </div>
      <div class="signup-links">
        <a href="">Account Help</a>&nbsp;|&nbsp;<a href="Subscribe.php">Subscriptions</a>&nbsp;|&nbsp;<a href="Unsubscribe.php">Unsubscribe</a>&nbsp;|&nbsp;<a href="termsAndConditions.php">Terms of Use and Privacy</a>&nbsp;|&nbsp;<a href="cookiepreference.php">Cookie Preferences</a>
      </div>
    </form>
  </div>
<script src ="script.js"></script>
</body>
</html>



