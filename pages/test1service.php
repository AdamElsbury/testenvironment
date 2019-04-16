<?php



$conn = new PDO ("mysql:host=sql107.epizy.com;dbname=epiz_23773903_testenvironmentdb;", "epiz_23773903", "IYSNctQrvboxG7S");

$conn->query("INSERT INTO test1 (nonfacialcue, facialcue) VALUES ('1', '0')");
header("location: test2.html");
?>

//$conn = new PDO ("mysql:host=sql107.epizy.com;dbname=epiz_23773903_testenvironmentdb;", "epiz_23773903", "IYSNctQrvboxG7S");



//$conn->query("UPDATE test1 SET NonFacialCue = NonFacialCue + 1");

//$conn->query("INSERT INTO test1 (nonfacialcue, facialcue) VALUES ('1', '0')");
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Connected successfully";
  //  }
//catch(PDOException $e)
    //{
    //echo "Connection failed: " . $e->getMessage();
    //}
?>
