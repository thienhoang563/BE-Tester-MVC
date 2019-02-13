<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 13/02/2019
 * Time: 09:52
 */
namespace Model;

use Exception;
use PDO;

class DBConnection
{
    public $dns;
    public $username;
    public $password;

    public function __construct($dns, $username, $password)
    {
        $this->dns = $dns;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dns, $this->username, $this->password);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        return $conn;
    }

}