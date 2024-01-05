<?php

// ($_SESSION)---------- Super Global

# start session
session_start();

# set session

$_SESSION['name']='anjan';



# get session
$name = $_SESSION['name'];

#printing session
var_dump($_SESSION);


# destory session
#-session_destroy();
