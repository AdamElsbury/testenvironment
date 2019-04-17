<?php



$conn = new PDO ("mysql:host=sql107.epizy.com;dbname=epiz_23773903_testenvironmentdb;", "epiz_23773903", "IYSNctQrvboxG7S");

$conn->query("INSERT INTO test4 (nonfacialcue, facialcue) VALUES ('0', '1')");
header("location: test5.html");
?>
