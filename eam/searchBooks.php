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

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="./vendor/select2-4.0.6-rc.1/dist/js/select2.js"></script>

        <script src="./vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <link href="./vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

        <script src="main.js"></script>
        <title> New Eudoxus </title>
    </head>
    <body>

        <!-- Header Start -->
        <div class="my-nav-bar">
            <!-- Navigation -->
            <nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
              <a class="navbar-brand ml-auto" href="./index.php">Νέος Εύδοξος</a>
                <ul class="my-navbar-main-list navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="./index.php"><i class="fa fa-home" aria-hidden="true"></i>Αρχική <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./under_construction.php">Ανακοινώσεις</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="./searchBooks.php">Αναζήτηση Συγγραμμάτων</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./under_construction.php">Επικοινωνία</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./under_construction.php">FAQ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./under_construction.php" id="navbarDropdownInfo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Πληροφορίες
                    </a>
                    <div class="dropdown-menu dropdown-menu-right myNavbarDropdownInfo" aria-labelledby="navbarDropdownInfo">
                      <a class="dropdown-item" href="./under_construction.php">Πληροφορίες για Φοιτητές</a>
                      <a class="dropdown-item" href="./under_construction.php">Πληροφορίες για Γραμματείες</a>
                      <a class="dropdown-item" href="./under_construction.php">Πληροφορίες για Εκδότες</a>
                      <a class="dropdown-item" href="./under_construction.php">Πληροφορίες για Βιβλιοθήκη</a>
                    </div>
                  </li>
                </ul>
                <form class="my-search-bar mr-auto">
                  <input class="form-control my-search-area" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn my-search-button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </nav>
        </div>
        <!-- Header End -->

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                  <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li>Αναζήτηση Συγγραμμάτων</li>
                </ul>
            </div>

            <?php include 'isLoggedIn.php';?>

        </div>

        <div class="search-container myBooksSearch">
            <input class="MySearchBookSearchBox" type="text" placeholder="Αναζήτηση..." name="mySearchBookQuery" id="mySearchBookTerm">
            <button class="MySearchBookSearchButton" type="submit" onclick="mySearchBookFind()"><i class="fa fa-search"></i></button>
        </div>

        <div id="filterButtonContainer" class="myBooksSearchFiltersButton">
            <a href="#" class="btn" onclick="BookSearchFilterToggle()" id="myFilterButton"> Φίλτρα <br/> Αναζήτησης <i id="filterButtonIcon" class="fa fa-angle-down" aria-hidden="true"></i> </a>
        </div>

        <div class="myBooksSearchFiltersInput myHiddenClass" id="myFiltersInput">
            hahahah
        </div>

        <?php include 'executeSearch.php';?>

        <!-- <div class="mySearchBookResultsCount">
            Βρέθηκαν <span class="mySearchBookCounter">10</span> αποτελέσματα για 'Διακριτά Μαθηματικά'.
        </div>

        <div class="mySearchBookOneResult">
            <div class="book-image">
                <img src="./150.png" alt="Image Placeholder">
            </div>
            <div class="book-title">
                Διακριτά Μαθηματικά για Χημικούς
            </div>
            <div class="book-authors">
                Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
            </div>
            <div class="book-publisher">
                Εκδόσεις: Αλχημεία
            </div>
            <div class="book-isbn">
                ISBN: 123666123
            </div>
            <div class="book-comments">
                <a href="#">Σχόλια(5)</a>
            </div>
            <div class="book-page">
                <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
            </div>
        </div>

        <div class="mySearchBookOneResult">
            <div class="book-image">
                <img src="./150.png" alt="Image Placeholder">
            </div>
            <div class="book-title">
                Διακριτά Μαθηματικά για Χημικούς
            </div>
            <div class="book-authors">
                Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
            </div>
            <div class="book-publisher">
                Εκδόσεις: Αλχημεία
            </div>
            <div class="book-isbn">
                ISBN: 123666123
            </div>
            <div class="book-comments">
                <a href="#">Σχόλια(5)</a>
            </div>
            <div class="book-page">
                <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
            </div>
        </div>

        <div class="mySearchBookOneResult">
            <div class="book-image">
                <img src="./150.png" alt="Image Placeholder">
            </div>
            <div class="book-title">
                Διακριτά Μαθηματικά για Χημικούς
            </div>
            <div class="book-authors">
                Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
            </div>
            <div class="book-publisher">
                Εκδόσεις: Αλχημεία
            </div>
            <div class="book-isbn">
                ISBN: 123666123
            </div>
            <div class="book-comments">
                <a href="#">Σχόλια(5)</a>
            </div>
            <div class="book-page">
                <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
            </div>
        </div>

        <div class="mySearchBookOneResult">
            <div class="book-image">
                <img src="./150.png" alt="Image Placeholder">
            </div>
            <div class="book-title">
                Διακριτά Μαθηματικά για Χημικούς
            </div>
            <div class="book-authors">
                Συγγραφείς: Μάστορας Γιώργος, Σπάθας Μιχάλης
            </div>
            <div class="book-publisher">
                Εκδόσεις: Αλχημεία
            </div>
            <div class="book-isbn">
                ISBN: 123666123
            </div>
            <div class="book-comments">
                <a href="#">Σχόλια(5)</a>
            </div>
            <div class="book-page">
                <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
            </div>
        </div>

        <div class="endOfResultsPlaceHolder">

        </div> -->

        <?php include 'footer.php';?>

    </body>
</html>
