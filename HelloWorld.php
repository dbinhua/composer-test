<?php

namespace Micro;

class HelloWorld
{
  private $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello()
  {
    return 'Hi,'.$this->name;
  }
}
