<?php

require_once UTILS . 'Conn.php';

class UserEntity
{

  public static function all()
  {
    $users = [];
    $conn = Conn::getInstance();
    $query = 'SELECT * FROM users';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
