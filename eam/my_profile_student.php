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
        <title> New Eudoxus </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li>Το προφίλ μου - Φοιτητής</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <div class="my-main-content-registration">

                <div class="my-reg-account-info">
                    <h> Στοιχεία Λογαριασμού </h>
                      <div class="form-group row">
                        <label for="myEmail" class="col-5 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>   <span class="my-req-star">*</span>Email:</label>
                        <div class="col-6">
                            Test
                        </div>
                        <div class="col-1">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPassword" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Κωδικός:</label>
                        <div class="col-6">
                            Test
                        </div>
                        <div class="col-1">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPasswordConfirm" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Επιβεβαίωση:</label>
                        <div class="col-6">
                            <div class="input-group" id="show_hide_password_confirm">
                                Test
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                      </div>
                </div>
                <div class="my-reg-personal-info">
                    <h> Προσωπικά Στοιχεία </h>
                    <div class="form-group row">
                      <label for="myFirstName" class="col-5 col-form-label"><span class="my-req-star">*</span>Όνομα:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="myLastName" class="col-5 col-form-label"><span class="my-req-star">*</span>Επώνυμο:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="myBirthDate" class="col-5 col-form-label"><span class="my-req-star">*</span>Ημερομηνία Γέννησης:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                </div>
                <div class="my-university-info">
                    <h> Στοιχεία Σχολής </h>
                    <div class="form-group row">
                      <label for="myUniv" class="col-5 col-form-label"><span class="my-req-star">*</span>Σχολή:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="myDepart" class="col-5 col-form-label"><span class="my-req-star">*</span>Τμήμα:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                </div>
                <div class="my-reg-contact-info">
                    <h> Στοιχεία Επικοινωνίας </h>
                    <div class="form-group row">
                      <label for="myPhoneNumber" class="col-5 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i> Τηλέφωνο Επικοινωνίας:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="myAddress" class="col-5 col-form-label">Διεύθυνση Κατοικίας:</label>
                      <div class="col-6">
                          Test
                      </div>
                      <div class="col-1">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </div>
                    </div>

                </div>

        </div>

        <?php include 'footer.php';?>

    </body>
</html>
