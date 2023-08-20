<?php

require_once ROOT . 'config/database.php';

class Conn
{
  private static $instance = null;

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASS
      );
    }

    return self::$instance;
  }
}
