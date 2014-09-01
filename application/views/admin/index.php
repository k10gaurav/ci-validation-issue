<?php

$this->load->view('includes/header');


if ($title == 'signin') {
    
    echo "התחבר לאתר";
    echo "<br>";


}


if ($title == 'logout') {
    
    echo "התנתקת מהמערכת";
    echo "<br>";


};

    
if ($title == 'signup') {
    
    echo "הירשם לאתר";
    echo "<br>";


};


$this->load->view('includes/footer');

?>