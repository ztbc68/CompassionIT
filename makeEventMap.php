<?php

require 'connections/dbconnect.php';

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the markers table

$query = mysqli_query($conn, "SELECT * FROM event");
header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($query)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("num",$row['num']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("info", $row['info']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("user_id", $row['user_id']);
}

echo $dom->saveXML();

?>