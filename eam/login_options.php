<?php

    $error = "";
    $emailErr = $passErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "sdi1500039";

      if (empty($_POST["password"])) {
          $passErr = "Password is required";
      }
      else {
          $mypassword = $_POST['password'];
      }

      if (empty($_POST["email"])) {
          $emailErr = "Email is required";
      }
      else {
          $email = $_POST["email"];
      }

      if( ! (strcmp($emailErr, "") or strcmp($passErr, "")) ){

          require_once 'login_db.php'; //db info

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT id FROM user WHERE username = '$email' and password = '$mypassword' ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo "Success!!!";
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $email;
              header('Location: index.php');
          }
          else {
              $error = "Invalid username or password";
          }
          $conn->close();
      }


   }
?>
<!-- Login Start -->
<div class="login-area">
    <div class="my-login">
        <button type="button" id="login" class="btn">Είσοδος</button>
        <div id="myForm" class="my-hide">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="popForm">
                <div>
                    <label class="my-label-email" for="email"><i class="fa fa-envelope" aria-hidden="true"></i>  Email:</label>
                    <input type="email" name="email" id="email" class="form-control input-md">
                    <label class="my-label-password" for="password"><i class="fa fa-lock" aria-hidden="true"></i>  Password:</label>
                    <!-- Password field -->
                    <div class="input-group" id="show_hide_password_login">
                        <input class="form-control" type="password" name="password" id="password">
                        <div class="input-group-addon">
                          <a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="error-msg-login">
                            <?php echo $error;?>
                    </div>
                    <a class="my-password-remember" href="./under_construction.php">Υπενθύμιση Password</a>
                    <label class="my-label-stay-login"><input type="checkbox" value="">  Να παραμείνω συνδεδεμένος</label>
                    <input type="submit" name="submit" class="btn btn-primary my-submit" value="Είσοδος">
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
