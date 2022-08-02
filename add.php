<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');    // cache for 1 day
header ("Access-Control-Allow-Headers: X-PINGOTHER, Content-Type");
header ("Access-Control-Allow-Methods: POST, GET");

$_GET ["quiet"] = true ;
$quiet = true ;
include "config.php";
include "anneli/header.php";
if ($uid == null) {
  http_response_code (403);
  die ();
}

$json = json_decode (file_get_contents('php://input'), true);
// var_dump ($json);

$filename = "list.txt" ;
$e = array () ;
$e ["error"] = "cannot open file";
$myfile = fopen($filename, "a+") or die ("cannot open file");
$text = sprintf ("%s,%s,%s\n", $json ["name"], $json ["url"], $json ["poster"]) ;
$res = fwrite ($myfile, $text);
fclose ($myfile);
$data = file_get_contents ($filename);
$v = explode ("\n", $data);
$counter = 0 ;
foreach ($v as $line) {
  $x = explode (",", $line);
  if (str_starts_with ($x [1], "http"))
      $counter ++ ;
    
}

echo json_encode (array ("written"=> $res, "files"=>$counter));

?>

<?php
include "anneli/footer.php";
?>
