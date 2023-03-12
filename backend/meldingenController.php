<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$type = $_POST['type'];
$capaciteit = $_POST['capaciteit']; 
if(isset($_POST['prioriteit']))
{
    $prioriteit = 1;
}
else
{
    $prioriteit = 0;
}
$melder = $_POST['melder'];
$overig = $_POST['overig'];

// echo $attractie . " / " . $capaciteit . " / " . $melder . " / " . $type;

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type, capaciteit, melder, prioriteit, overige_info) 
VALUES(:attractie, :type, :capaciteit, :melder, :prioriteit, :overige_info)";

//3. Prepare
$statement = $conn->prepare($query);

//4. Execute
$statement->execute([
    ":attractie"=> $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":prioriteit" => $prioriteit,
    ":overige_info" => $overig
]);

header("Location: ../meldingen/index.php?msg=Melding opgeslagen");