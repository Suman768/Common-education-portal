<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/env.php";

// singleton class for database connectivity
class DBConn {
    private static $conn = NULL;
    private static $db_host;
    private static $db_name;
    private static $usr;
    private static $passwd;
    private static $dsn;

    private function __construct() {
        if (self::$conn == NULL) {
            self::$db_host = getenv("DB_SERVER");
            self::$db_name = getenv("DB_NAME");
            self::$usr = getenv("DB_USR");
            self::$passwd = getenv("DB_PASSWD");
            self::$dsn = "mysql:host=".self::$db_host.";dbname=".self::$db_name.";charset=UTF8";

            self::$conn = mysqli_connect(self::$db_host, self::$usr, self::$passwd, self::$db_name);
        
            if (!self::$conn) {
                send_error(mysqli_connect_error(), 503);
                self::$conn = null;
            }
        }
    }

    public static function get_connection() {
        if (self::$conn == null)
            new DBConn();
        return self::$conn;
    }
}
