<!-- Login/Signup Form-->
<div class="row">
    <div class="col">
        <form id="loginForm" action="login.php" class="form" method="POST">
        <p class="labels">Sign In</p>
        <input id="usernameLogin" type="text" class="form-control form-control-lg" placeholder="Username" name = "usernameLogin" >
        <small id="loginText" class="form-text text-muted"></small>
        <br>
        <button id="loginButton" class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
    <div class="col">
        <form id=signupForm action="registration.php" class="form" method="POST">
        <p class="labels">Sign Up</p>
        <!-- Row for check boxes-->
        <div class="form-row">
            <!-- Age check boxes-->
            <input id="userAge" type="integer" class="form-control form-control-lg" name="userAge" placeholder="Age">
                <!-- Gender checkboxes-->
                <fieldset class="form-group">
                <div class="form">
                    <legend class="form-control form-control-lg">Gender</legend>
                    <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="female") echo "checked";?>
                        value="female">Female
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="male") echo "checked";?>
                        value="male">Male
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="other") echo "checked";?>
                        value="other">Other
                </div>
                </fieldset>
        </div>
        <!-- username input-->
        <input id="usernameSignUp" type="text" class="form-control form-control-lg" name="usernameSignUp" placeholder="Username">
        <small id="signupText" class="form-text text-muted"></small>
        <br>
        <button id="signupButton" class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>