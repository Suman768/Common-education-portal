<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/env.php";
require_once root."/src/util/db_conn.php";

// $servername = getenv("DB_SERVER");
// $username = getenv("DB_USR");
// $password = getenv("DB_PASSWD");
// $dbname = getenv("DB_NAME");

// Create connection
$conn = DBConn::get_connection();