<!DOCTYPE html>
<html lang="en">
<head>
  <title>DREAM | PARTY PLANNING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset ('css/loginstyle.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/9c1531a844.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="hero">
    <div id="login-form" class="login-page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn"><font color="white"><b>Log In</b></font></button>
                <button type="button" onclick="register()" class="toggle-btn"><font color="white"><b>Register</b></font></button>
            </div>
            <form id="login" class="input-group-login">
                <input type="text" class="input-field" placeholder="Email" required>
                <input type="password" class="input-field" placeholder="Enter password" required>
                <div class="text-center">
                    <button type="submit" class="submit-btn"><font color="white"><b>Log In</b></font></button>
                </div>
                    <div class="container">
                        <label>
                        <input type="checkbox" checked="checked" name="remember"><font color="white"><b> Remember me</b></font>
                      </label>
                    </div>
            </form>
                <form id="register" class="input-group-register">
                    <input type="radio" id="1u" name="user" value="role1" required><label for="1u"> <font color="white"><b>Customer</b></font></label> &nbsp; &nbsp; &nbsp;
    				<input type="radio" id="2u" name="user" value="role2" required><label for="2u"><font color="white"><b> Admin</b></font></label>  &nbsp; &nbsp; &nbsp;
                    <input type="radio" id="3u" name="user" value="role2" required><label for="3u"><font color="white"><b> Supplier</b></font></label>
                    <input type="text" class="input-field" placeholder="First Name" required>
                    <input type="text" class="input-field" placeholder="Last Name" required>
                    <input type="email" class="input-field" placeholder="Email" required>
                    <input type="password" class="input-field" placeholder="Password" required>
                    <input type="password" class="input-field" placeholder="Confirm Password" required>
                    <input type="checkbox" checked="checked" name="terms"><div class="popup" onclick="myFunction()"><font color="white"><b> I agree to the terms & conditions</b></font><span class="popuptext" id="myPopup"><b>TERMS AND CONDITIONS</b>
                        <p> This Site is ecommerce website,owned and operated by Dream Event planning team.
                            By using this site, you indicate that you have read and understand these Terms and Conditions and agree to abide by them at all times.
                            All content published and made available on our Site is the property of Dream event planning team and the Site's creators.
                            When you create an account on our Site, you agree to the following:<br>
                            1. You are solely responsible for your account and the security and privacy of your account,and <br>
                            2. All personal information you provide to us through your account is up to date, accurate, and truthful and that you will update your personal information if it changes.<br>
                            We reserve the right to suspend or terminate your account if you are using our Site illegally or if you violate these Terms and Conditions.<br>
                             </span> </div>


                    <button type="submit" class="submit-btn1" ><div class="bottom"><font color="white"><b>Register</b></font></div></button>
                </form>

        </div>
    </div>
</div>
        <script>

                function myFunction(){
                var popup=document.getElementById("myPopup");
                popup.classList.toggle("show");
                }

            var x=document.getElementById("login");
            var y=document.getElementById("register");
            var z=document.getElementById("btn");
            function register()
            {
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login()
            {
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
        <script>
            var model = document.getElementById("login-form");
            window.onclick=function(event)
            {
                if (event.target == model)
                {
                    model.style.display = "none";
                }
            }
        </script>
</body>
</html>
