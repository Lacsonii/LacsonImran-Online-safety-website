<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href ="Images/smc.png" type="Images/smc">
    <meta charset="utf-8">
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
                    <input type ="text" placeholder = "Search...">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </div>
  </nav>
  <div class = "SignUp-form"> 
    <form action="databaseConnection.php" method="POST" onsubmit="return validateForm()" class = "form">
      <div class="form-reg">  
        <h1 class="header">Sign Up</h1>
        <p class="question">Already have SMC Account?&nbsp;<a href="LogIn.php">Sign In</a></p>
        <label class="label">First Name:</label>
        <input type="text" placeholder="First Name" name="FirstName" id = "textbox" required>

        <label class="label">Last Name:</label>
        <input type="text" placeholder="Last Name" name="LastName" id = "textbox" required>

        <label class="label">Username:</label>
        <input type="text" placeholder="Username" name="Username" id = "textbox" required>
      
        <label class="label">Country:</label>
        <select name="Country" id = "textbox" required>
          <option name value ="">Select country</option>
          <option  value ="Afghanistan">Afghanistan</option>
              <option  value ="Albania">Albania</option>
              <option  value ="Algeria">Algeria</option>
              <option  value ="Andorra">Andorra</option>
              <option  value ="Angola">Angola</option>
              <option  value ="Antigua and Barbuda">Antigua and Barbuda</option>
              <option  value ="Argentina">Argentina</option>
              <option  value ="Armenia">Armenia</option>
              <option  value ="Australia">Australia</option>
              <option  value ="Austria">Austria</option>
              <option  value ="Azerbaijan">Azerbaijan</option>
              <option  value ="The Bahamas">The Bahamas</option>
              <option  value ="Bahrain">Bahrain</option>
              <option  value ="Bangladesh">Bangladesh</option>
              <option  value ="Barbados">Barbados</option>
              <option  value ="Belarus">Belarus</option>
              <option  value ="Belgium">Belgium</option>
              <option  value ="Belize">Belize</option>
              <option  value ="Benin">Benin</option>
              <option  value ="Bhutan">Bhutan</option>
              <option  value ="Bolivia">Bolivia</option>
              <option  value ="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
              <option  value ="Botswana">Botswana</option>
              <option  value ="Brazil">Brazil</option>
              <option  value ="Brunei">Brunei</option>
              <option  value ="Bulgaria">Bulgaria</option>
              <option  value ="Burkina Faso">Burkina Faso</option>
              <option  value ="Burundi">Burundi</option>
              <option  value ="Cabo Verde">Cabo Verde</option>
              <option  value ="Cambodia">Cambodia</option>
              <option  value ="Cameroon">Cameroon</option>
              <option  value ="Canada">Canada</option>
              <option  value ="Central African Republic">Central African Republic</option>
              <option  value ="Chad">Chad</option>
              <option  value ="Chile">Chile</option>
              <option  value ="China">China</option>
              <option  value ="Colombia">Colombia</option>
              <option  value ="Comoros">Comoros</option>
              <option  value ="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
              <option  value ="Republic of the Congo">Republic of the Congo</option>
              <option  value ="Costa Rica">Costa Rica</option>
              <option  value ="Côte d’Ivoire">Côte d’Ivoire</option>
              <option  value ="Croatia">Croatia</option>
              <option  value ="Cuba">Cuba</option>
              <option  value ="Cyprus">Cyprus</option>
              <option  value ="Czech Republic">Czech Republic</option>
              <option  value ="Denmark">Denmark</option>
              <option  value ="Djibouti">Djibouti</option>
              <option  value ="Dominica">Dominica</option>
              <option  value ="Dominican Republic">Dominican Republic</option>
              <option  value ="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
              <option  value ="Ecuador">Ecuador</option>
              <option  value ="Egypt">Egypt</option>
              <option  value ="El Salvador">El Salvador</option>
              <option  value ="Equatorial Guinea">Equatorial Guinea</option>
              <option  value ="Eritrea">Eritrea</option>
              <option  value ="Estonia">Estonia</option>
              <option  value ="Eswatini">Eswatini</option>
              <option  value ="Ethiopia">Ethiopia</option>
              <option  value ="Fiji">Fiji</option>
              <option  value ="Finland">Finland</option>
              <option  value ="France">France</option>
              <option  value ="Gabon">Gabon</option>
              <option  value ="The Gambia">The Gambia</option>
              <option  value ="Georgia">Georgia</option>
              <option  value ="Germany">Germany</option>
              <option  value ="Ghana">Ghana</option>
              <option  value ="Greece">Greece</option>
              <option  value ="Grenada">Grenada</option>
              <option  value ="Guatemala">Guatemala</option>
              <option  value ="Guinea">Guinea</option>
              <option  value ="Guinea-Bissau">Guinea-Bissau</option>
              <option  value ="Guyana">Guyana</option>
              <option  value ="Haiti">Haiti</option>
              <option  value ="Honduras">Honduras</option>
              <option  value ="Hungary">Hungary</option>
              <option  value ="Iceland">Iceland</option>
              <option  value ="India">India</option>
              <option  value ="Indonesia">Indonesia</option>
              <option  value ="Iran">Iran</option>
              <option  value ="Iraq">Iraq</option>
              <option  value ="Ireland">Ireland</option>
              <option  value ="Israel">Israel</option>
              <option  value ="Italy">Italy</option>
              <option  value ="Jamaica">Jamaica</option>
              <option  value ="Japan">Japan</option>
              <option  value ="Jordan">Jordan</option>
              <option  value ="Kazakhstan">Kazakhstan</option>
              <option  value ="Kenya">Kenya</option>
              <option  value ="Kiribati">Kiribati</option>
              <option  value ="North Korea">North Korea</option>
              <option  value ="South Korea">South Korea</option>
              <option  value ="Kosovo">Kosovo</option>
              <option  value ="Kuwait">Kuwait</option>
              <option  value ="Kyrgyzstan">Kyrgyzstan</option>
              <option  value ="Laos">Laos</option>
              <option  value ="Latvia">Latvia</option>
              <option  value ="Lebanon">Lebanon</option>
              <option  value ="Lesotho">Lesotho</option>
              <option  value ="Liberia">Liberia</option>
              <option  value ="Libya">Libya</option>
              <option  value ="Liechtenstein">Liechtenstein</option>
              <option  value ="Lithuania">Lithuania</option>
              <option  value ="Luxembourg">Luxembourg</option>
              <option  value ="Madagascar">Madagascar</option>
              <option  value ="Malawi">Malawi</option>
              <option  value ="Malaysia">Malaysia</option>
              <option  value ="Maldives">Maldives</option>
              <option  value ="Mali">Mali</option>
              <option  value ="Malta">Malta</option>
              <option  value ="Marshall Islands">Marshall Islands</option>
              <option  value ="Mauritania">Mauritania</option>
              <option  value ="Mauritius">Mauritius</option>
              <option  value ="Mexico">Mexico</option>
              <option  value ="Federated States of Micronesia">Federated States of Micronesia</option>
              <option  value ="Moldova">Moldova</option>
              <option  value ="Monaco">Monaco</option>
              <option  value ="Mongolia">Mongolia</option>
              <option  value ="Montenegro">Montenegro</option>
              <option  value ="Morocco">Morocco</option>
              <option  value ="Mozambique">Mozambique</option>
              <option  value ="Myanmar (Burma)">Myanmar (Burma)</option>
              <option  value ="Namibia">Namibia</option>
              <option  value ="Nauru">Nauru</option>
              <option  value ="Nepal">Nepal</option>
              <option  value ="Netherlands">Netherlands</option>
              <option  value ="New Zealand">New Zealand</option>
              <option  value ="Nicaragua">Nicaragua</option>
              <option  value ="Niger">Niger</option>
              <option  value ="Nigeria">Nigeria</option>
              <option  value ="North Macedonia">North Macedonia</option>
              <option  value ="Norway">Norway</option>
              <option  value ="Oman">Oman</option>
              <option  value ="Pakistan">Pakistan</option>
              <option  value ="Palau">Palau</option>
              <option  value ="Panama">Panama</option>
              <option  value ="Papua New Guinea">Papua New Guinea</option>
              <option  value ="Paraguay">Paraguay</option>
              <option  value ="Peru">Peru</option>
              <option  value ="Philippines">Philippines</option>
              <option  value ="Poland">Poland</option>
              <option  value ="Portugal">Portugal</option>
              <option  value ="Qatar">Qatar</option>
              <option  value ="Romania">Romania</option>
              <option  value ="Russia">Russia</option>
              <option  value ="Rwanda">Rwanda</option>
              <option  value ="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
              <option  value ="Saint Lucia">Saint Lucia</option>
              <option  value ="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
              <option  value ="Samoa">Samoa</option>
              <option  value ="San Marino">San Marino</option>
              <option  value ="Sao Tome and Principe">Sao Tome and Principe</option>
              <option  value ="Saudi Arabia">Saudi Arabia</option>
              <option  value ="Senegal">Senegal</option>
              <option  value ="Serbia">Serbia</option>
              <option  value ="Seychelles">Seychelles</option>
              <option  value ="Sierra Leone">Sierra Leone</option>
              <option  value ="Singapore">Singapore</option>
              <option  value ="Slovakia">Slovakia</option>
              <option  value ="Slovenia">Slovenia</option>
              <option  value ="Solomon Islands">Solomon Islands</option>
              <option  value ="Somalia">Somalia</option>
              <option  value ="South Africa">South Africa</option>
              <option  value ="Spain">Spain</option>
              <option  value ="Sri Lanka">Sri Lanka</option>
              <option  value ="Sudan">Sudan</option>
              <option  value ="Sudan, South">Sudan, South</option>
              <option  value ="Suriname">Suriname</option>
              <option  value ="Sweden">Sweden</option>
              <option  value ="Switzerland">Switzerland</option>
              <option  value ="Syria">Syria</option>
              <option  value ="Taiwan">Taiwan</option>
              <option  value ="Tajikistan">Tajikistan</option>
              <option  value ="Tanzania">Tanzania</option>
              <option  value ="Thailand">Thailand</option>
              <option  value ="Togo">Togo</option>
              <option  value ="Tonga">Tonga</option>
              <option  value ="Trinidad and Tobago">Trinidad and Tobago</option>
              <option  value ="Tunisia">Tunisia</option>
              <option  value ="Turkey">Turkey</option>
              <option  value ="Turkmenistan">Turkmenistan</option>
              <option  value ="Tuvalu">Tuvalu</option>
              <option  value ="Uganda">Uganda</option>
              <option  value ="Ukraine">Ukraine</option>
              <option  value ="United Arab Emirates">United Arab Emirates</option>
              <option  value ="United Kingdom">United Kingdom</option>
              <option  value ="United States">United States</option>
              <option  value ="Uruguay">Uruguay</option>
              <option  value ="Uzbekistan">Uzbekistan</option>
              <option  value ="Vanuatu">Vanuatu</option>
              <option  value ="Vatican City">Vatican City</option>
              <option  value ="Venezuela">Venezuela</option>
              <option  value ="Vietnam">Vietnam</option>
              <option  value ="Yemen">Yemen</option>
              <option  value ="Zambia">Zambia</option>
              <option  value ="Zimbabwe">Zimbabwe</option>
        </select>

    
        <label class="label">Email:</label>
        <input type="text" placeholder="techcheck@gmail..." name="EmailAddress" id = "textbox" required>

        <label class="label">ID Type:</label>
        <select name="IDtype" class = "textbox" required>
        <option value="">--select ID type--</option>
          <option value="Passport">Passport</option>
          <option value="National ID">National ID</option>
          <option value="Driver's License">Driver's License</option>
        </select>

        <label class="label">ID NO.:</label>
        <input type="text" placeholder="Enter ID Number" name="IDNumber" id = "textbox" required>
        <label class = "label">Upload ID</label>

        <input type = "file" name = "UploadImage" id = "textbox" required>

        <label class="label">Gender:</label>
        <select name="Gender" class = "textbox"required>
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
        <a href="AccountHelp.php">Account Help</a>&nbsp;|&nbsp;<a href="Subscribe.php">Subscriptions</a>&nbsp;|&nbsp;<a href="Unsubscribe.php">Unsubscribe</a>&nbsp;|&nbsp;<a href="termsAndConditions.php">Terms of Use and Privacy</a>&nbsp;|&nbsp;<a href="cookiepreference.php">Cookie Preferences</a>
      </div>
    </form>
  </div>
<script src ="script.js"></script>
</body>
</html>



