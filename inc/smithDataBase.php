<?php
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DATABASE = 'smith';
$smithDataBase = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($smithDataBase->connect_error) :
    die('Connect Error: ' . $smithDataBase->connect_error);
endif;

