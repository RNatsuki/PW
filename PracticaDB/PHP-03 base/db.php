<?php

class DatabaseConnectionMysqli
{
  private static $host = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $database = "productos";
  public static  $connection;

  public static function query(string $query)
  {
    $instance = self::get_instance();
    return $instance->query($query);
  }

  public static function get_instance()
  {
    try {
      if (!self::$connection) {
        self::$connection = new mysqli(self::$host, self::$username, self::$password, self::$database);
      }

      return self::$connection;
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
