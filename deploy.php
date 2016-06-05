<?php
define('PRIVATE_KEY', 'BLvzt7HRiLrI4xUny1');

if ($_GET['key'] === PRIVATE_KEY)
{
    echo shell_exec("/usr/bin/git fetch --all 2>&1");
    echo shell_exec("/usr/bin/git reset --hard origin/development 2>&1");
}
//end