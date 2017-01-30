<?php
if (isset($action))
{
    if ($action == "logout")
    {
        logout();
        header("Location: .");
    }
}
if(empty($_POST))
{
    // no forms have been submitted, just show the Login view.
    require_once("views/login.view.php");
}
else
{
    // the login form was submitted
    // attempt to login. if logged in , redirect back to the main page
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $login = login($username, $password);

    if ($login)
    {
        header("Location: .");
    }
    else
    {
        $error = "Login failed";
        require_once("views/login.view.php");
    }
}