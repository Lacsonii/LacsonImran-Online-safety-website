
const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    modeToggle = document.querySelector(".dark-light"),
    searchToggle = document.querySelector(".searchToggle"),
    sidebarOpen = document.querySelector(".sidebarOpen"),
    sidebarClose = document.querySelector(".sidebarClose");
    
    let getMode = localStorage.getItem("mode");
        if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
        }


  //toggle dark and light js code
    modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

  //keep user in selected mode
        if(!body.classList.contains("dark")){
           localStorage.setItem("mode" , "light-mode");
        }else{
           localStorage.setItem("mode" , "dark-mode");
        }
    });

  //toggle searchbox js code
    searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
    } );

  //toggle sidebar
  sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
  });

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu-links")){
        nav.classList.remove("active");
    }
  });
// === displays and removes LogIn Modal Pop-Up === //
document.querySelector("#showlogin").addEventListener("click", function(){
    document.querySelector(".popup").classList.add("active")
});
document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active")
});
// === shows password in a textbox === //
function Function() 
      {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
      }

    // === password similarity === //
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
          alert("Passwords do not match!");
          return false;
        }
        return true;
      }
    // === Show passsword first-checkbox === //
      function Function() 
      {
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
      }
    // === Show confirm passsword second-checkbox === //
    function myFunction() 
    {
      var x = document.getElementById("confirmPassword");
      if (x.type === "password") {
      x.type = "text";
      } else {
      x.type = "password";
      }
    } 

    function togglePopup(){
      document.getElementById("guideline-popup").classList.toggle("active");
    }

    function Legislation(){
      document.getElementById("legislation-popup").classList.toggle("active");
    }

    function Regulations(){
      document.getElementById("regulations-popup").classList.toggle("active");
    }
    
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myDIV *").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });


    
