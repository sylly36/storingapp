<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$type = 'test';

// echo $attractie . " / " . $capaciteit . " / " . $melder . " / " . $type;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder, type) 
VALUES(:attractie, :capaciteit, :melder, :type)";

//3. Prepare
$statement = $conn->prepare($query);

//4. Execute
$statement->execute([
    ":attractie"=> $attractie,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":type" => $type

]);