<?php
$includesdir = '../includes/';

require_once $includesdir . 'config.inc';
require_once $includesdir . 'common.inc';
require_once $includesdir . 'database.inc';

//libraries we're using (these are in /lib/)
//require_once 'MyProject/MyClass.php';

//Sets up normal page variables, performs auth, runs PageMain()
require_once $includesdir . 'standard_daemon_logic.inc';

function PageMain() {
    global $includesdir, $config;

    //Do any page logic here.
    //If $using_db is set in standard_page_logic.inc the global $db
    //will be set. Most db queries should be done in a class library, though.

    echo "daemon process code would go here";
}
