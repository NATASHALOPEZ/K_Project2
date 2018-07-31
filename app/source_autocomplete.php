<?php
$server = 'localhost';
$database = 'project_ws';
$user = 'root';
$mysqli = new MySQLi($server,$user,$database);
/* Connect to database and set charset to UTF-8 */
if($mysqli->connect_error) {
  echo 'Database connection failed...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $mysqli->set_charset('utf8');
}
/* retrieve the search term that autocomplete sends */
$term = trim(strip_tags($_GET['term'])); 
$a_json = array();
$a_json_row = array();
if ($data = $mysqli->query("SELECT * FROM laundry WHERE name LIKE '%$term%' OR City LIKE '%$term%' ORDER BY name , City")) {
	while($row = mysqli_fetch_array($data)) {
		$name = htmlentities(stripslashes($row['name ']));
		$city = htmlentities(stripslashes($row['City']));
		$latitude = htmlentities(stripslashes($row['latitude']));
		$longitude = htmlentities(stripslashes($row['longitude']));
		$a_json_row["id"] = $code;
		$a_json_row["value"] = $firstname.' '.$lastname;
		$a_json_row["label"] = $firstname.' '.$lastname;
		$a_json_row["latitude"] = $latitude;
		$a_json_row["longitude"] = $longitude;
		array_push($a_json, $a_json_row);
	}
}
// jQuery wants JSON data
echo json_encode($a_json);
flush();

$mysqli->close();
?>