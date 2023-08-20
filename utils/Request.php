<?php

class Request
{
  public static function uri()
  {
    return trim(
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
      '/'
    );
  }

  public static function method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function isGet()
  {
    return self::method() === 'GET';
  }

  public static function isPost()
  {
    return self::method() === 'POST';
  }

  public static function body()
  {
    $body = [];
    if (self::method() === 'GET') {
      foreach ($_GET as $key => $value) {
        $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    } else if (self::method() === 'POST') {
      foreach ($_POST as $key => $value) {
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
    }
    return $body ?? null;
  }

  public static function file($name)
  {
    return $_FILES[$name] ?? null;
  }

  public static function files()
  {
    return $_FILES ?? [];
  }

  public static function hasFile($name)
  {
    return isset($_FILES[$name]);
  }

  public static function hasFiles()
  {
    return count($_FILES) > 0;
  }

  public static function has($name)
  {
    return isset($_REQUEST[$name]);
  }

  public static function hasAll($names)
  {
    foreach ($names as $name) {
      if (!isset($_REQUEST[$name])) {
        return false;
      }
    }
    return true;
  }

  public static function hasAny($names)
  {
    foreach ($names as $name) {
      if (isset($_REQUEST[$name])) {
        return true;
      }
    }
    return false;
  }

  public static function get($name)
  {
    return $_REQUEST[$name] ?? null;
  }

  public static function all()
  {
    return $_REQUEST;
  }

  public static function only($names)
  {
    $result = [];
    foreach ($names as $name) {
      $result[$name] = $_REQUEST[$name];
    }
    return $result;
  }

  public static function except($names)
  {
    $result = [];
    foreach ($_REQUEST as $key => $value) {
      if (!in_array($key, $names)) {
        $result[$key] = $value;
      }
    }
    return $result;
  }
}
