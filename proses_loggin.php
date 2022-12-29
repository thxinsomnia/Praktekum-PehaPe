<?php
session_start();
if(isset($HTTP_SESSION_VARS["sesson_status"]))
{
    echo("<pre>");
    echo("username : <b>". $HTTP_SESSION_VARS["session_user"]."</b><br>");
    echo("username : <b>". $HTTP_SESSION_VARS["session_password"]."</b><br>");
    echo("Click <a href=\"loggout.php\">loggout</a> untuk keluar");
    echo("</pre>");
}else
{
    header("Location: loggin.php");
    exit;
}?>