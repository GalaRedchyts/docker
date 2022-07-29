<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$pdo = new PDO('pgsql:host=db;dbname=postgres;user=user1;password=changeme');

