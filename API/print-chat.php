<?php
// Include the config file.
include "Config/config.php";

// Table to use.
$table = "chat_msg";

// Create SQL Connection.
$conn = new mysqli($sql_host, $sql_user, $sql_pw, $sql_db);
if($conn->connect_error)
{
  die("Connection failed, error: " . $conn->connect_error);
}

// SQL Query Command.
$sql = "SELECT * FROM " . $table;

// Execute Query.
$result = $conn->query($sql);

// Check Rows.
if($result->num_rows > 0)
{
  // Loop through rows.
  while($row = $result->fetch_assoc())
  {
    // Print chat messages in html format.
    echo '<div class="chat_line">' . $row['msg'] . "</div>";
  }
}

// Close the SQL Connection.
$conn->close();

?>
