<?php

trait Localizable
{
  // if i try to access a property that is not defined in the class
  // but it is defined in the $localizable array, then it will
  // return the value of the property with the current language
  public function __get($name)
  {
    if (in_array($name, $this->localizable)) {
      return $this->{$name . '_' . LANG};
    }
  }
}
