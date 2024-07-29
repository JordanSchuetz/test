<?php
  // session_start();
  // session_destroy();
  // require 'vendor/autoload.php';
  // include("./includes/settings.php");
?>
<!-- WEBSITE CODED BY JORDAN SCHUETZ https://jordanschuetz https://twitter.com/jordanschuetz
     & TYLER RICHARDS https://tylerscottrichards.com/ -->
<html>
<head>
     <script src="dist/sweetalert.min.js"></script> 
     <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
     <link rel="stylesheet" type="text/css" href="css/site.css">
     <link rel="stylesheet" type="text/css" href="css/form.css">
     <link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <!-- jQuery CDN download. Most users have this cached so it's quite fast to load -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- FontAwesome for awesome icons -->
     <script src="js/all.js"></script>
     <title>Learn CS8 - UCR Computer Science 8 Portal - CS8 Tutorials</title>
     <meta name="description" content="Learn CS8 is a tutorial website for UC Riverside students.  LearnCS8.com teaches UCR students how to program in HTML, CSS and also teaches students about products like Google Docs and Microsoft Office. CS8 is important class at that teaches skills in Computer Science.">
     <meta name="keywords" content="CS8, UCR, UC Riverside, LearnCS8, Computer Science 8, CS8 UCR, UCR CS8">
     <meta name="author" content="Jordan Schuetz">
     <meta http-equiv="content-type" content="text/html;charset=UTF-8">
     <script src="./bluebird.min.js"></script>
     <script src="./fetch.js"></script>
  <!-- Start of learncs8 Zendesk Widget script -->
     <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="learncs8.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
     <!-- End of learncs8 Zendesk Widget script -->
</head>
<body>
     <div class="Top-Bar" align="center">
          <a href="index.php"><img src="https://upbeat-dubinsky-1aba89.netlify.app/images/logo.png"></a>
     </div>
     <div class="White-Space"></div>
     <div class="Main" align="center">
      <div class="row">
        <div class="column">
          <div class="Text-Box" align="left">
               <h2>Login to Learn CS8</h2>
               <p>LearnCS8.com is an online tutorial website that teaches students basic HTML and CSS programming.</p><p>To get started, login or create an account by typing in your UCR Email (with your NetID) and Password. If you need to reset your password, please contact support.</p>
               <div class="derp" align="center">     
                    <h><input type="submit" value="FAQ" class="button"></h>
               </div>
          </div>
        </div>
        <div class="column">
          <div class="Log-In" >
               <!-- <form action="includes/signup.inc.php" id="registerForm" name="registerForm" method="POST" onsubmit="return validateInputs()"> -->
               <form action="includes/signup.inc.php" id="registerForm" name="registerForm" method="POST">
                    <div>
                         <label>Email Address: [NetID]@ucr.edu</label>
                         <input id="EmailAddress" name="EmailAddress" type="email" maxLength="64" required pattern=".+@ucr.edu" class="text" autofocus alt="Email Address: flast012@ucr.edu" title="You must use an @ucr.edu email address.">
                    </div>
                    <div>
                         <label>Password:</label>
                         <input id="Password" name="Password" type="password" class="text" required alt="Password">
                    </div>
                    <div id="ConfirmPasswordContainer" style="display: none;">
                         <label>Confirm Password:</label>
                         <input id="ConfirmPassword" name="ConfirmPassword" type="password" class="text" alt="Confirm Password">
                    </div>
                    <div id="StudentIDContainer" style="display: none;">
                         <label>Student ID:</label>
                         <input id="StudentID" name="StudentID" type="number" class="text" alt="Student ID">
                    </div>
                    <div id="NameContainer" style="display: none;">
                         <label>First & Last Name:</label>
                         <input id="FirstAndLastName" name="FirstAndLastName" type="text" class="text" alt="First & Last Name">
                    </div>
                    <div id="MismatchResults"></div>
                    <div id="StudentIDResults"></div>
                    <div id="PasswordResults"></div>
                    <div>
                         <!-- <a href="#" class="tooltip"> -->
                              <input type="submit" name="signup-submit" value="Register / Login" class="button" style="background-color: gray;" id="submitBtn">
                              <div class="fa-3x" style="display: none;" id="loginSpin">
                                <i class="fas fa-spinner fa-pulse"></i>
                              </div>
                              <!-- <span>
                                   <strong>Please Read FAQ First</strong><br />Verify that your above information is correct. Once you continue, your information is finalized and can not be changed unless you submit a support ticket.
                              </span> -->
                         <!-- </a> -->
                    </div>
                    <!--<div id="ForgotPassword" style="cursor: pointer; text-decoration: underline;"><br><span onclick="attemptReset()">I forgot my password.</span></div>-->
               </form>
          </div>
        </div>
    </div>
          <j>
               <script>$("j").slideUp();</script>
               <div class="FAQ" align="Left">
                    <h1>FAQ</h1>
                    <h2>Signing Up</h2>
                    In order to access the CS8 educational labs, you will first need to make a Learn CS8 account.<br><br>

                    First navigate to the <a href="https://learncs8.com">https://learncs8.com</a> homepage and enter your personal information.  Make sure to enter your student identification number, your first and last name in the fields provided.<br><br>

                    *Note: This information will be what you log in with for the rest of the quarter.<br><br>

                    Once you make your account, you will be sent to the payment page.  In order to access the site, you will have to pay the fee through PayPal.  Please contact PayPal support if you have any issues with making a payment through their portal.<br><br>

                    Once your payment is complete, <b>close your web browser</b> and reload the <a href="https://learncs8.com">https://learncs8.com</a> website.  Now log in with the information you registered with.  You should now have full access to all of the labs.<br><br>

                    If you have any problems, please submit a support ticket.<br><br>

                    <h2>University Financial Aid</h2>

                    Learn CS8 is not affiliated with any school or university, therefore you can not purchase an access code through the campus store or student services.<br><br>

                    The only way you can purchase access to Learn CS8 is by paying through PayPal on our site.<br><br>

                    <h2>500 Error</h2>

                    Our database is encountering too much traffic at the moment. Your professor will be automatically notified if there is an issue with our web systems and you will be granted an extension on your assignment. This takes no action on your part, but we'd appreciate you filing a support request so we can follow up with you.<br><br>

                    <h2>Forgot Password</h2>

                    If you forgot your password for your account, please submit a support ticket and we will manually reset it for you. This could take a few hours to complete so please stand by so we can fulfill the request.<br><br>

                    <h2>Accidentally Purchased 2 Accounts</h2>

                    If you are one of the few that accidentatly bought your access using the wrong student ID, send us a support ticket with your PayPal receipt attached and we will issue a refund within a few business days.<br><br>

                    <h2>Invalid Login Information Message</h2>

                    There can sometimes be problems with students making accounts.  If you have an sort of special characters in your name like an apostrophe, we would highly recommend removing them.  If you already paid through PayPal, send us a support ticket immediately and we will fix your account.<br><br>

                    There could be other issues like adding spaces between your name or accidentally misspelling your name when creating an account.  Please contact us if you have any issues with logging into the website.<br><br>

                    <h2>I'm Retaking the Class</h2>

                    For students that are retaking the class in a future quarter, they will have to purchase access again for their new quarter.  Learn CS8 is constantly updating with new content which requires purchasing access again.<br><br>

                    <h2>My Question Isn't Here</h2>

                    Please click the support button on the left and let us know your problem.  We will get back to you within 24 hours.  Make sure to plan ahead by purchasing access 1 week before your first class.
               </div>
          </j>

          <!-- Error Modal -->
          <div id="errorModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close" id="closeerrormodal">&times;</span>
              <h1 style="text-decoration: underline;">Incorrect Email</h1>
              <p>There was an error with the email address you requested a reset for.</p>
              <p>Either you have a pending request already, or the email doesn't exist.</p>
              <p>Please check your spelling, or go ahead and create an account using that email.</p>
            </div>

          </div>

          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close" id="closemodal">&times;</span>
              <h1 style="text-decoration: underline;">Password Reset</h1>
              <p>Please check your email, we have sent you a password reset request.</p>
              <p>Please input the authorization code sent to your email address into the field below and select a new password.</p>
              <form id="resetForm" name="resetForm" method="POST" autocomplete="off">
                    <input style="display: none" type="text" name="fakeusernameremembered" />
                    <input style="display: none" type="password" name="fakepasswordremembered" />
                    <label for="code">Reset Key:</label>
                    <input type="text" name="code" id="code" placeholder="Enter Reset Key" class="text" required><br>
                    <label for="password">New Password:</label>
                    <input type="password" name="password" id="resetpassword" placeholder="New Password" class="text" required><br>
                    <label for="confirmpassword">Confirm Password:</label>
                    <input type="password" name="confirmpassword" id="resetconfirmpassword" placeholder="Confirm Password" class="text" required><br>

                    <div id="ResetPasswordResults"></div>

                    <input type="submit" value="Update Password" class="button">
              </form>
            </div>

          </div>

          <!-- Success Modal -->
          <div id="successModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close" id="closesuccessmodal">&times;</span>
              <h1 style="text-decoration: underline;">Password Changed</h1>
              <p>Your password has been successfully changed!</p>
              <p>You can close this window and login with your new password.</p>
            </div>

          </div>

          <script>
               $( "h" ).click(function() {
                    $( "j" ).slideToggle( "slow" );
               });

               //process reset password
               const resetForm = document.getElementById('resetForm');
               resetForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    var code = document.getElementById("code").value;
                    var password = document.getElementById("resetpassword").value;
                    var confirmpassword = document.getElementById("resetconfirmpassword").value;

                    if (password != confirmpassword){
                         return;
                    }

                    if (code == null) {
                         $("#ResetPasswordResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Reset code needed!<br><br>");
                         return;
                    }

                    const data = {
                         code: document.getElementById("code").value,
                         resetpassword: document.getElementById("resetpassword").value,
                         resetconfirmpassword: document.getElementById("resetconfirmpassword").value
                    };

                    //make sure to serialize your JSON body
                    body: JSON.stringify(data)
                    fetch('includes/reset.process.php', {
                         method: 'post',
                         body: JSON.stringify(data)
                    }).then(function (response) {
                         return response.text();
                    }).then(function (text) {
                         let thearr = JSON.parse(text);
                         if (thearr["message"] == "Password reset successfully.") {
                              errorModal.style.display = "none";
                              modal.style.display = "none";
                              successModal.style.display = "block";
                         }else if (thearr["message"] == "New password is the same as the old password.") {
                              $("#ResetPasswordResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> You cannot re-use an old password, pick a new one.<br><br>");
                         }else if (thearr["message"] == "Reset key is invalid.") {
                              $("#ResetPasswordResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Incorrect key, please copy the key you received in your email.<br><br>");
                         }else{
                              $("#ResetPasswordResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Unknown error occurred, try again.<br><br>");
                         }
                    }).catch(function (error) {
                         // console.error(error);
                    })
               });

               //Confirm Password Matching Validation In Real Time
               function isPasswordMatch(field1,field2,resultField,conditional) {
                    let dowego = true;
                    if (conditional && document.getElementById(conditional).style.display != "block") {
                         dowego = false;
                    }
                    if (dowego) {
                         var password = $("#"+field1).val();
                         var confirmPassword = $("#"+field2).val();

                         if (password == "" || confirmPassword == "") $("#"+resultField).html("");
                         else if (password != confirmPassword && confirmPassword != "") $("#"+resultField).html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Passwords don't match!<br><br>");
                         else if (password == confirmPassword && confirmPassword != "") $("#"+resultField).html("<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color:green;\"></i> Passwords match!<br><br>");
                         else $("#"+resultField).html("");
                    }
               }

               //Check if student id length is 9
               function isLength9() {
                    if (document.getElementById('StudentIDContainer').style.display == "block") {
                         var studentid = document.getElementById("StudentID").value;

                         if (studentid == "") $("#StudentIDResults").html("");
                         else if (studentid.length > 0 && studentid.length != 9) $("#StudentIDResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Student ID must be 9 digits.<br><br>");
                         else if (studentid.length == 9) $("#StudentIDResults").html("<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color:green;\"></i> Student ID is 9 digits.<br><br>");
                    }
               }

               $(document).ready(function () {
                   $("#Password").keyup(function(){ isPasswordMatch("Password","ConfirmPassword","PasswordResults","ConfirmPasswordContainer") });
                   $("#ConfirmPassword").keyup(function(){ isPasswordMatch("Password","ConfirmPassword","PasswordResults","ConfirmPasswordContainer") });
                   $("#StudentID").keyup(isLength9);

                   $("#resetpassword").keyup(function(){ isPasswordMatch("resetpassword","resetconfirmpassword","ResetPasswordResults") });
                   $("#resetconfirmpassword").keyup(function(){ isPasswordMatch("resetpassword","resetconfirmpassword","ResetPasswordResults") });
               });

               //Intercept form submission
               const registerForm = document.getElementById('registerForm');
               var submittedYet = false;
               registerForm.addEventListener('submit', function (e) {
                    document.getElementById('loginSpin').style.display = "block";
                    document.getElementById('submitBtn').style.display = "none";
                    if (submittedYet == false) {
                         //First Attempt
                         e.preventDefault();
                         const formData = new FormData(this);
                         fetch('includes/login.init.php', {
                              method: 'post',
                              body: formData
                         }).then(function (response) {
                              return response.text();
                         }).then(function (text) {
                              if (text == "yes") {
                                   submittedYet = true;
                                   $("#registerForm")[0].submit();
                              } else if(text == "mismatch") {
                                   //email/password mismatch
                                   $("#MismatchResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Incorrect Login.<br><br>");
                                   document.getElementById('loginSpin').style.display = "none";
                                   document.getElementById('submitBtn').style.display = "block";
                              } else if(text == "nonexistent") {
                                   submittedYet = true;
                                   $("#MismatchResults").html("");
                                   document.getElementById('EmailAddress').setAttribute("readonly", "readonly");
                                   document.getElementById('ConfirmPasswordContainer').style.display = "block";
                                   document.getElementById('StudentIDContainer').style.display = "block";
                                   document.getElementById('NameContainer').style.display = "block";
                                   document.getElementById("ConfirmPassword").required = true;
                                   document.getElementById("StudentID").required = true;
                                   document.getElementById("FirstAndLastName").required = true;

                                   document.getElementById('ForgotPassword').style.display = "none";

                                   document.getElementById('loginSpin').style.display = "none";
                                   document.getElementById('submitBtn').style.display = "block";
                              }else{
                                  document.getElementById('loginSpin').style.display = "none";
                                  document.getElementById('submitBtn').style.display = "block";
                                  $("#MismatchResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Login Error #500, please try again in a few minutes.<br><br>");
                              }
                         }).catch(function (error) {
                              document.getElementById('loginSpin').style.display = "none";
                              document.getElementById('submitBtn').style.display = "block";
                              $("#MismatchResults").html("<i class=\"fa fa-times\" aria-hidden=\"true\" style=\"color: red;\"></i> Login Error #503, please try again in a few minutes. If you get this error when creating a new account, please ignore.<br><br>");
                         })
                    }else{
                         //Second Attempt, Ignore And Let Submit
                         if (document.getElementById('ConfirmPasswordContainer').style.display == "block") {
                              var password = document.getElementById("Password").value;
                              var confirmpassword = document.getElementById("ConfirmPassword").value;

                              if (password != confirmpassword){
                                   e.preventDefault();
                                   document.getElementById('loginSpin').style.display = "none";
                                    document.getElementById('submitBtn').style.display = "block";
                              }
                         }

                         if (document.getElementById('StudentIDContainer').style.display == "block") {
                              var studentid = document.getElementById("StudentID").value;

                              if (studentid.length != 9){
                                   e.preventDefault();
                                   document.getElementById('loginSpin').style.display = "none";
                                   document.getElementById('submitBtn').style.display = "block";
                              }
                         }
                    }
               });

               //Attempt to reset password
               function attemptReset() {
                    if ($('#EmailAddress')[0].checkValidity()){
                         //Email is filled out, request reset
                         let data = {
                              email: document.getElementById("EmailAddress").value,
                         };

                         fetch('includes/reset.request.php', {
                              method: 'post',

                              //make sure to serialize your JSON body
                              body: JSON.stringify(data)
                         })
                         .then(function (response) {
                              return response.text();
                         }).then(function (text) {
                              let thearr = JSON.parse(text);
                              if (thearr["error"] == true) {
                                   errorModal.style.display = "block";
                              }else if (thearr["message"] == "Password reset request sent to email address." || thearr["message"].substring(0,31) == "A reset request already exists.") {
                                   modal.style.display = "block";
                              }
                         }).catch(function (error) {
                              // console.error(error);
                         })
                    }else{
                         //Email is not filled out
                         //Request submission of form since it will fail and the native message will be displayed
                         var $myForm = $('#registerForm');

                         if(! $myForm[0].checkValidity()) {
                              $myForm.find(':submit').click();
                         }
                    }
               }

               var errorModal = document.getElementById("errorModal");
               var errorSpan = document.getElementById("closeerrormodal");

               var modal = document.getElementById("myModal");
               var span = document.getElementById("closemodal");

               var successModal = document.getElementById("successModal");
               var successSpan = document.getElementById("closesuccessmodal");

               errorSpan.addEventListener('click', function(){
                    errorModal.style.display = "none";
               });

               span.addEventListener('click', function(){
                    modal.style.display = "none";
               });

               successSpan.addEventListener('click', function(){
                    successModal.style.display = "none";
               });

               window.onclick = function(event) {
                    if (event.target == modal || event.target == errorModal || event.target == successModal) {
                         errorModal.style.display = "none";
                         modal.style.display = "none";
                         successModal.style.display = "none";
                    }
               }

               <?php

               if (isset($_GET['reset'])) {
                    echo 'modal.style.display = "block";';
               }

               if (isset($_GET['notLoggedIn'])) {
                  echo 'alert("You are not logged in, submission failed.")';
               }

               ?>
          </script>
     </div>

     <div class="footer-content" align="center"> </div>

     <div class="footer-text" align="center">Copyright <script>document.write(new Date().getFullYear())</script>&nbsp;&nbsp;<a href="https://learncs8.com">LearnCS8.com </a>&nbsp;&nbsp;Designed by <a href="https://jordanschuetz.com">Jordan Schuetz</a><div>
     <center><br><small><small>This site is not affiliated with any school or university</small></small></center>
</body>
</html>