<?

$conn = new PDO ("mysql:host=localhost;dbname=ephp086;", "ephp086", "ipeithux");

$id = $_POST["ID"];

$results = $conn->query("UPDATE test1 SET nonfacialcue = nonfacialcue +1");
$results2 = $conn->query("UPDATE test1 SET facialcue = facialcue +1");

if("$id = 'nonfacialcue'") {
  $results;
  header("test2.html");
}

if("$id = 'facialcue'") {
  $results2;
  header("test2.html");
}
