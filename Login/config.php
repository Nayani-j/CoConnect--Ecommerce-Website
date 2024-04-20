<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "project");
define("DB_PORT",3307);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,DB_PORT);

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
