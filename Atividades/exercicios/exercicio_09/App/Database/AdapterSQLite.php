<?php

namespace App\Database;

use PDO;

class AdapterSQLite implements AdapterInterface
{

    private $strConn;
    private $db;

    public function __construct($dbfile)
    {
        $this->strConn = 'sqlite:' . $dbfile;
        $this->db = null;
    }

    public function connect()
    {
        $this->db = new PDO($this->strConn);
    }

    public function disconnect()
    {
        $this->db = null;
    }

    public function get()
    {
        return $this->db;
    }
}
