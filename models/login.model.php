<?php

// session are the way we keep track of when a user is logged into something

session_start();

function login($username, $password)
{
    $adminuser = "mitch";
    // $adminuser = Login::getAdminUser();
    $adminpass = "mitch";

    if ($username == $adminuser && $password == $adminpass)
    {
        $_SESSION['loguser'] = $username;
        return true;
    }
    else
    {
        return false;
    }
}

function logout()
{
    $_SESSION = array();
    session_destroy();
}

function checkLogin()
{
    if (isset($_SESSION['loguser']))
    {
        return $_SESSION['loguser'];
    }
    else
    {
        return false;
    }
}