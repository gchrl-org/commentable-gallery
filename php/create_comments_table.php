<?php

require "db_config.php";

function db_conn() {
	$passed_conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ($passed_conn->connect_error) {
		die("Connection Failed: " . $passed_conn->connect_error);
	}
	return $passed_conn;
}


function db_kill_conn($passed_conn) {
	$passed_conn->close;
}

$conn = db_conn();

$create_CommentsTable = "CREATE TABLE IF NOT EXISTS `idgallery_comments` (
  `comment_id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`)
);";
if ($conn->query($create_CommentsTable) === TRUE) {
	echo("Comments Table Created!\r\n");
} else {
	echo "FAILURE! " . $conn->error;
}

db_kill_conn($conn);

?>
