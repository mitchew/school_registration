<?php
class Database
{
    private static $dsn = "mysql:host=localhost;dbname=school_registration";

    private static $username = "root";

    private static $password = "";

    private static $db;

    private function __construct()
    {

    }
    // connect function to connect to the database
    // saves the connection as self::$db
    public static function connect()
    {
        // this comes from the object oriented programming chapter
        // if $db is not set
        if (!isset(self::$db))
        {
            // try to make a new $db if not set
            try
            {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            }
            // if error shows, save as $e then echo and die
            catch(PDOException $e)
            {
                echo $e->getMessage();
                die();
            }
        }
        return self::$db;
    }
}