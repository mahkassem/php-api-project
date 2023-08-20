<?php
require_once UTILS . 'Request.php';

class Router
{
  // get method with request query string
  public static function get($uri, $callback)
  {
    // return callback if request is match
    if (Request::isGet() && Request::uri() === $uri) {
      $callback();
    }
  }

  // handle post request
  public static function post($uri, $callback)
  {
    // return callback if request is match
    if (Request::isPost() && Request::uri() === $uri) {
      $callback();
    } else {
      Response::view('404');
    }
  }

  // redirect to uri
  public static function redirect($uri)
  {
    // return callback if request is match
    if (Request::isGet()) {
      header('Location: ' . $uri);
      // stop excution
      exit();
    }
  }
}
