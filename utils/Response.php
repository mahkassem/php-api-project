<?php
class Response
{
  public static function json($data, $status = 200)
  {
    header('Content-Type: application/json');
    http_response_code($status);

    $json = json_encode($data, true);

    return $json;
    // stop excution
    exit();
  }

  public static function jsona($data, $status = 200)
  {
    header('Content-Type: application/vnd.api+json');
    http_response_code($status);

    $json = json_encode($data, true);

    print_r($json);
    // stop excution
    exit();
  }

  public static function view($view, $data = [])
  {
    extract($data);
    require_once VIEWS . $view . '.php';
    // stop excution
    exit();
  }
}
