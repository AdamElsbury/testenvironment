<?php



$conn = new PDO ("mysql:host=sql107.epizy.com;dbname=epiz_23773903_testenvironmentdb;", "epiz_23773903", "IYSNctQrvboxG7S");

$conn->query("INSERT INTO test5 (nonfacialcue, facialcue) VALUES ('0', '1')");
header("location: success.html");
?>
