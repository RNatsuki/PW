<?php

class DatabaseConnectionPDO
{
  private static $host = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $database = "testdb";

  public static  $connection;


  public static function get_instance()
  {
    try {
      if (!self::$connection) {
        self::$connection = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$database, self::$username, self::$password);
      }
      echo "Connection successfully";
      return self::$connection;
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
