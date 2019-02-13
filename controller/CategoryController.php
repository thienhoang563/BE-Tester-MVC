<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 13/02/2019
 * Time: 10:14
 */
namespace Controller;
use Model\CategoryDB;
use Model\DBConnection;

class CategoryController
{
    public $categoryDB;
    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=manage_customer","root","@Bc123456");
        $this->categoryDB = new CategoryDB($db->connect());

    }
    public function index(){
        $categories = $this->categoryDB->getAll();
        include "view/category/list.php";
    }

}