<?php
  $dta = $_POST['email'];
  
  $email filter_var($dta,FILTER_VALIDATE_EMAIL);
 
