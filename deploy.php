<?php
define('PRIVATE_KEY', 'nL9D7TQWMcVBE5u');

if ($_GET['key'] === PRIVATE_KEY)
{
    //echo shell_exec("/usr/bin/git pull 2>&1");
    echo shell_exec("/usr/bin/git fetch --all 2>&1");
    echo shell_exec("/usr/bin/git reset --hard origin/development 2>&1");
//    chdir(realpath(dirname(__FILE__)) . "/wp-content/themes/newadvant/");
//    echo shell_exec("/usr/bin/gulp &");
}
//end of new deployment test