<?php
    $q = $_GET['q'];

    //connect to database and use $q

    echo '
    <option value="" selected disabled hidden>Επιλογή Τμήματος</option>
    <option value="Department Of Informatics">'.$q.'  Department Of Informatics </option>
    <option value="Mathematics">'.$q.' Mathematics </option>
    <option value="Physics">'.$q.' Physics </option>
    <option value="Philosophy">'.$q.' Philosophy </option>
    <option value="Chemistry">'.$q.' Chemistry </option>
    ';

?>
