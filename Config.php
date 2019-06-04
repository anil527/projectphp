<?php
   define('DB_SERVER', 'demo.clywntyfs7x3.ap-southeast-1.rds.amazonaws.com:3036');
   define('DB_USERNAME', 'demo);
   define('DB_PASSWORD', 'demo123456');
   define('DB_DATABASE', 'demo');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>