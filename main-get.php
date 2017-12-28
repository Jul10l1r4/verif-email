<?php
  $dta = $_GET['email'];
  
  $email = filter_var($dta,FILTER_VALIDATE_EMAIL);
 
