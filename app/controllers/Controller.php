<?php
class Controller{
  // You can use the beforeroute() to improve security
  // by checking to see if a user has a valid session at each
  // page load.
  function beforeroute(){
    echo 'Before routing -- Session management -';
  }

  function afterroute(){
    echo ' - After routing';
  }
}
?>
