<?php

require_once 'connection.php';

// Controller -> Model
$products = $connection->query("SELECT * FROM produtos");

// Model -> View
require 'products_view.php';
