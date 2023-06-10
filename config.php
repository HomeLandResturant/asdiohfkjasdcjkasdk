<?php

define('DB_USERNAME','VirxsPaste');
define('DB_PASSWORD','*36Sn4H%pSJaYdEw');
define('DB_SERVER','localhost');
define('DB_NAME','Paste');
define('BASE_URL', 'https://paste.virxs.xyz/');

// Language Config

// paste.php
define('PASTE_P_NOT_DEFINED',"Error p not defined.");

// create.php
define('CREATE_CONTENT_NOT_DEFINED',"Error content not defined.");
define('CREATE_INSERT_FAILED',"Oops! Something went wrong. Please try again later.");

// install.php
define('INSTALL_PASTES_TABLE_CREATED',"Table 'pastes' was created successfully.");
define('INSTALL_PRIMARY_KEY_ID_ADDED',"Primary Key 'id' added successfully.");

// Attempt to connect to MySQL database
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
