# EAM_proj3

## TO DO list

### General
* Colors all pages
* NavBar HomePage link should be shown as active only at home page -- maybe to
do it dynamically using php

### Registration_form
* Datepicker
* Danger triangle with '!' at errors
* Popup of successful registration
* Dropdown/Suggestion for department/university fields

### Home Page
* Icons for sections (secretary,library etc)
* colors
* Announcements

### DataBase and PHP
* Search
* Browse
* Edit Profile

### Login/logout
* Where to redirect? At home page always?
* Popup of successful logout

### General comments made by Stathis
1. Αρχική σελίδα γενικά είναι οκ για αυτή τη φάση. Προφανώς θέλει χρώματα κτλ και ίσως και πιο μεγάλες ακόμα γραμματοσειρές στα κουμπιά.

2. Σελίδα επιλογής εγγραφής πρέπει τα γράμματα να είναι πιο μεγάλα σίγουρα, συν τα προφανή δλδ χρώματα και σωστά εικονίδια. Όταν πας από επιλογή εγγραφής σε κάποια συγκεκριμένη το breadcrumb πρέπει να είναι home>εγγραφή>γραμματεια ή κάτι παρόμοιο. Πέραν αυτού ίσως πρέπει να δίνεται και άλλος πιο ξεκάθαρος τρόπος να πάει πίσω στην επιλογή εγγραφής. Κάποιο κουμπί πάνω αριστερά ή κάτι τέτοιο.

3. Γενικά για τις φόρμες, είτε θα έχουν όλα τα πεδία από ένα εικονιδιο είτε κανένα. Τα να έχουν μερικά δεν είναι ωραίο.

4. Στην επιλογή τμήματος εφόσον έχει επιλεχθεί ίδρυμα (καλύτερα ίδρυμα πάρα σχολή) δε χρειάζεται το κάθε τμήμα να ξεκινάει με το όνομα του ιδρύματος. Επίσης καλύτερα να είναι ελληνικά εκεί.

5. Date picker είναι οκ. Δε ξέρω αν μου αρέσει το ότι το μαξ είναι το 2000 γτ κάποιοι τρελοί μπαίνουν και πιο μικροι σε σχολές αλλά λεπτομέρεια νομίζω, πολύ λεπτομέρεια. Το μιν θα το έβαζα πιο παλιά. Πάλι υπάρχουν άνθρωποι μεγάλης ηλικίας που φοιτούν σε σχολές. Αυτό δεν είναι τόσο ασήμαντο θα έλεγα. Θα πρότεινα να μπει 1930 ή και νωρίτερα. Επίσης ιδανικά το default να μην είναι 1951, γίνεται αυτό να αλλάξει;

6. Όταν δε μπορείς να πατήσεις το ολοκλήρωση εγγραφής γτ δεν έχεις βάλει όλα τα στοιχεία καλύτερα να έχει άλλο χρώμα, γκρι πχ

### General MUST
* At registration form make the submit button available only when user selects university and department.
* And only when user selects birth date.
