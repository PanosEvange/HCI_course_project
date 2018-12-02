<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="main.js"></script>
        <title> Registration </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li>Εγγραφή</li>
                </ul>
            </div>

            <!-- If user is not logged in  -->
            <?php include 'login_options.php';?>

        </div>

        <?php
            // define variables and set to empty values
            $emailErr = $passErr = "";
            $email = $pass = "";
            $succ = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if (empty($_POST["password"])) {
                $passErr = "Password is required";
              }
              else {
                $pass = test_input($_POST["password"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z]*$/",$pass)) {
                  $passErr = "Only letters allowed";
                }
              }

              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              }
              else {
                  $email = test_input($_POST["email"]);
                  // check if e-mail address is well-formed
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
                  }
              }

              require_once 'login_db.php'; //db info

              if( ! (strcmp($emailErr, "") or strcmp($passErr, "")) ){
                  //save to db
                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }

                  $sql = "INSERT INTO user (id, username, password)
                  VALUES ('0', '$email', '$pass')";

                  if ($conn->query($sql) === TRUE) {
                      $succ = "Επιτυχής καταχώρηση!";
                  }
                  else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }

                  $conn->close();

                }

            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

        ?>

        <div class="my-main-content-registration">
            <p> Η συμπλήρωση των πεδίων με <span class="my-req-star">*</span> είναι υποχρεωτική.</p>
            <p class="success-registration"> <?php echo $succ;?> </p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="my-registration-from">
                <div class="my-reg-account-info">
                    <h> Στοιχεία Λογαριασμού </h>
                      <div class="form-group row">
                        <label for="myEmail" class="col-5 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>   <span class="my-req-star">*</span>Email:</label>
                        <div class="col-6">
                          <input type="text" name="email" onfocusout="valRegEmail()" value="<?php echo $email;?>" id="myEmail-reg" class="form-control" >
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-email-reg">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPassword" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Κωδικός:</label>
                        <div class="col-6">
                            <div class="input-group" id="show_hide_password_first">
                              <input class="form-control" name="password" onfocusout="valPassword()" value="<?php echo $pass;?>" type="password" id="myPassword-reg">
                              <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-pass-reg">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPasswordConfirm" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Επιβεβαίωση:</label>
                        <div class="col-6">
                            <div class="input-group" id="show_hide_password_confirm">
                              <input class="form-control" onfocusout="valPassConf()" type="password" id="myPasswordConfirm-reg">
                              <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          <!-- <input type="password" class="form-control" id="myPasswordConfirm" placeholder="Password"> -->
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-conf-pass-reg">
                          </div>
                      </div>
                </div>
                <div class="my-reg-personal-info">
                    <h> Προσωπικά Στοιχεία </h>
                    <div class="form-group row">
                      <label for="myFirstName" class="col-5 col-form-label"><span class="my-req-star">*</span>Όνομα:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valFirstName()" class="form-control" id="myFirstName-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-first-name-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myLastName" class="col-5 col-form-label"><span class="my-req-star">*</span>Επώνυμο:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valLastName()" class="form-control" id="myLastName-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-last-name-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myBirthDate" class="col-5 col-form-label"><span class="my-req-star">*</span>Ημερομηνία Γέννησης:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valBirthDate()" class="form-control" id="myBirthDate-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-date-reg">
                        </div>
                    </div>
                </div>
                <div class="my-reg-law-info">
                    <h> Νομικά Στοιχεία </h>
                    <div class="form-group row">
                      <label for="myIdNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>Αριθμός Ταυτότητας:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valIdNumber()" class="form-control" id="myIdNumber-reg">
                      </div>
                      <div class="col-1">
                          <span class="my-question-popover" title="" data-toggle="popover" data-trigger="hover"
                          data-content="Εισάγετε τον αριθμό που αναγράφεται στην μπροστινή μεριά της αστυνομικής ταυτότητας σας. Ξεκινάει υποχρεωτικά
                          με Α ακολουθούμενο από ένα γράμμα και αριθμούς ή μόνο αριθμούς. Απαραίτητα 10 χαρακτήρες.">
                              <i class="fa fa-question-circle" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-id-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myTaxNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>ΑΦΜ:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valTaxNumber()" class="form-control" id="myTaxNumber-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-tax-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myAmkaNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>ΑΜΚΑ:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valAmkaNumber()" class="form-control" id="myAmkaNumber-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-amka-reg">
                        </div>
                    </div>
                </div>
                <div class="my-reg-contact-info">
                    <h> Στοιχεία Επικοινωνίας </h>
                    <div class="form-group row">
                      <label for="myPhoneNumber" class="col-5 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i> Τηλέφωνο Επικοινωνίας:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valPhoneNumber()" class="form-control" id="myPhoneNumber-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-phone-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myAddress" class="col-5 col-form-label">Διεύθυνση Κατοικίας:</label>
                      <div class="col-6">
                        <input type="text" onfocusout="valAddress()" class="form-control" id="myAddress-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-myAddress-reg">
                        </div>
                    </div>
                </div>
                <div class="my-registration-submit">
                    <div class="row">
                        <label><input type="checkbox" value="" id="reg-checkbox">  Έχω διαβάσει και αποδέχομαι τους <a href="./under_construction.php">όρους χρήσης</a> </label>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="btn btn-primary" value="Ολοκλήρωση Εγγραφής" disabled id="submit-reg-button">
                    </div>
                </div>
            </form>
        </div>

        <!-- <div class="my-registration-submit">
            <div class="checkbox">

            </div>
            <a href="./under_construction.php" class="btn btn-primary"> Ολοκλήρωση Εγγραφής </a>
        </div> -->


        <!-- Footer Start  -->
        <footer class="bg-dark footer">
            <p class="text-center text-white">Copyright &copy; Eudoxus Team 2018</p>
        </footer>
        <!-- Footer End  -->
    </body>
</html>
