<?php

require_once UTILS . 'traits/Localizable.php';

class User
{
  use Localizable;
  public $name;
  public $email;
  public $description_en;
  public $description_ar;
  public $city_en;
  public $city_ar;

  private $localizable = ['description'];

  public function __construct($user)
  {
    // define the properties of the class
    foreach ($user as $key => $value) {
      $this->{$key} = $value;
    }
  }

}
