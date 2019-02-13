<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 13/02/2019
 * Time: 09:53
 */
namespace Model; //tao ra k gian rieng cho cac ham va cac lop

class CategoryDB
{
    public $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM categories";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();

        $categories = [];

        foreach ($result as $item){
            $category = new Category($item['name']);
            $category->id = $item['id'];
            $categories[] = $category;

        }
        return $categories;

    }

    public function create($category){
        $sql = "INSERT INTO categories(name) VALUES (?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $category->name);
        $statement->execute();

    }


}