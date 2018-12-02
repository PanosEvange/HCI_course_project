<!-- Login Start -->
<div class="login-area">
    <div class="my-login">
        <button type="button" id="login" class="btn">Είσοδος</button>
        <div id="myForm" class="my-hide">
            <form action="/echo/html/" id="popForm" method="get">
                <div>
                    <label class="my-label-email" for="email"><i class="fa fa-envelope" aria-hidden="true"></i>  Email:</label>
                    <input type="email" name="email" id="email" class="form-control input-md">
                    <label class="my-label-password" for="password"><i class="fa fa-lock" aria-hidden="true"></i>  Password:</label>
                    <!-- Password field -->
                    <div class="input-group" id="show_hide_password_login">
                        <input class="form-control" type="password" id="password">
                        <div class="input-group-addon">
                          <a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <a class="my-password-remember" href="./under_construction.php">Υπενθύμιση Password</a>
                    <label class="my-label-stay-login"><input type="checkbox" value="">  Να παραμείνω συνδεδεμένος</label>
                    <button type="button" class="btn btn-primary my-submit" data-loading-text="Sending info.."><em class="icon-ok"></em> Είσοδος</button>
                </div>
            </form>
        </div>
        <div id="result"></div>
    </div>
    <div class="my-signup">
        <a href="./registration_form.php" class="btn" >Εγγραφή</a>
    </div>
</div>
<!-- Login End -->
