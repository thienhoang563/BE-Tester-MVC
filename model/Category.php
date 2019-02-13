<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 13/02/2019
 * Time: 09:52
 */
namespace Model;

class Category
{
    public $id; //id tu tang
    public $name;

    public function __construct($name)
    {
      $this->name = $name;
    }

}