<?php



$conn = new PDO ("mysql:host=sql107.epizy.com;dbname=epiz_23773903_testenvironmentdb;", "epiz_23773903", "IYSNctQrvboxG7S");

$conn->query("INSERT INTO test1 (nonfacialcue, facialcue) VALUES ('1', '0')");
header("location: test2.html");
?>
