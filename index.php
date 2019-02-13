<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 13/02/2019
 * Time: 09:51
 */
require "controller/CategoryController.php";
require "model/Category.php";
require "model/CategoryDB.php";
require "model/DBConnection.php";

use Controller\CategoryController;

$category = new CategoryController();
$category->index();
