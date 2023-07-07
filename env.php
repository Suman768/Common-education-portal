<?php
    putenv("DB_SERVER=localhost:3306");
    putenv("DB_USR=root");
    putenv("DB_PASSWD=root");
    putenv("DB_NAME=demo_mca");
    putenv("DB_PORT=3306");
    putenv("APP_DOMAIN=localhost");

    define("root", $_SERVER["DOCUMENT_ROOT"]);
?>