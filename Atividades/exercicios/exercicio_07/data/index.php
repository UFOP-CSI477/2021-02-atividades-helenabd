<?php

require_once 'connection.php';

// Controller -> Model
$states = $conection->query("SELECT * FROM estados");
// var_dump($states->fetchAll());

// Model -> View
require "states_view.php";
