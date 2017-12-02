<?php
require 'connections/dbconnect.php';

session_start();

//if user logged in
if(isset($_SESSION["id"]))
{
  // Start XML file, create parent node
  $doc = domxml_new_doc("1.0");
  $node = $doc->create_element("markers");
  $parnode = $doc->append_child($node);
  // Select all the rows in the markers table
  $query = mysqli_query($conn, "SELECT * FROM user WHERE 1");
  $num = mysqli_num_rows($query);
  if(!$query)
  {
      die('Invalid query: ' . mysql_error());
  }

  header("Content-type: text/xml");

  // Iterate through the rows, adding XML nodes for each
  while ($row = @mysql_fetch_assoc($query)){
    // Add to XML document node
    $node = $doc->create_element("marker");
    $newnode = $parnode->append_child($node);

    $newnode->set_attribute("id", $row['id']);
    $newnode->set_attribute("fname", $row['fname']);
    $newnode->set_attribute("lname", $row['lname']);
    $newnode->set_attribute("email", $row['email']);
    $newnode->set_attribute("lat", $row['lat']);
    $newnode->set_attribute("lng", $row['lng']);
  }

  $xmlfile = $doc->dump_mem();
  echo $xmlfile;
}
else //user not logged in, redirect them to login
{
  header('Location: login.php');
}

?>