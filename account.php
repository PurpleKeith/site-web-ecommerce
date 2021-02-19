<?php
    include_once 'header.php';
?>
<!------- Account page -------->

        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/image1.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Log In</span>
                                <span onclick="register()">Sign Up</span>
                                <hr id="Indicator">
                            </div>
                            <form id="SignInForm" action="includes/login.inc.php" method="POST">
                                <input type="text" name="uid" placeholder="Username">
                                <input type="password" name="pwd" placeholder="Password">
                                <button type="submit" name="submit" class="btn">Log In</button>
                                <a href="Forgot password">Forgot password</a>
                            </form>

                            <form id="SignUpForm" action="includes/signup.inc.php" method="POST">
                                <input type="text" name="username" placeholder="Username">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="pwd" placeholder="Password">
                                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                                <button type="submit" name="submit" class="btn">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "invalidUsername"){
                        echo "<p>Choose a proper username!</p>";
                    }
                    else if ($_GET["error"] == "invalidEmail"){
                        echo "<p>Choose a proper email!</p>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch"){
                        echo "<p>Passwords doesn't match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p>Something went wrong, try again!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken"){
                        echo "<p>Choose another username!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p>You have signed up!</p>";
                    } 
                    else if ($_GET["error"] == "wronglogin"){
                        echo "<p>Incorrect login information!</p>";
                    } 
                    else if ($_GET["error"] == "wrongpwd"){
                        echo "<p>Incorrect password!</p>";
                    } 
                }
            ?>
        </div>

        <?php
            include_once 'footer.php';
        ?>

        <script>
            // js for toggle menu 
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
            }

            //js for toggle form

            var SignInForm = document.getElementById("SignInForm")
            var SignUpForm = document.getElementById("SignUpForm")
            var Indicator = document.getElementById("Indicator")

            function register(){
                SignUpForm.style.transform = "translateX(0px)";
                SignInForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }

            function login(){
                SignUpForm.style.transform = "translateX(300px)";
                SignInForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }
        </script>
    </body> 
</html>