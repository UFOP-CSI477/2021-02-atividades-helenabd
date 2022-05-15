<?php

namespace App\Database;

interface AdapterInterface
{
    public function connect();
    public function disconnect();
    public function get();
}
