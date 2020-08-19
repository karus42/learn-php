<?php

session_start();

// unset($_SESSION['user_name']);      // terminate user_name in current session
// echo '$_SESSION[\'user_name\'] has been terminated<br>';
session_destroy();                  // terminate whole session
echo 'whole session has been terminated<br>';

?>