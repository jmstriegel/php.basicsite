<?php
$templatesdir = 'templates/';
$includesdir = 'includes/';

require_once $includesdir . 'config.inc';
require_once $includesdir . 'common.inc';
require_once $includesdir . 'database.inc';

//libraries we're using (these are in /lib/)
//require_once 'MyProject/MyClass.php';

//Sets up normal page variables, performs auth, runs PageMain()
require_once $includesdir . 'standard_page_logic.inc';

function PageMain() {
    global $template, $templatesdir, $includesdir, $config;

    //Do any page logic here.
    //If $using_db is set in standard_page_logic.inc the global $db
    //will be set. Most db queries should be done in a class library, though.

    $template['title'] = 'Example Template';
    $template['sample_var'] = 'Here is a sample page variable';

    require_once $templatesdir . 'pages/example.inc';

}
