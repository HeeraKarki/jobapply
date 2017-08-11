<?php
require_once 'db_value.php';
class DB
{
    use JarPDO;
    private $dbHost = host;
    private $dbUsername = username;
    private $dbPassword = password;
    private $dbName = dbname;
    private $db;

    public function __construct()
    {
        if (!isset($this->db)) {
// Connect to the database
            try {
                $conn = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName, $this->dbUsername, $this->dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            } catch (PDOException $e) {
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
        }
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        try {
            $this->l = null; //Closes connection
        } catch (PDOException $e) {
            file_put_contents("log/dberror.log", "Date: " . date('M j Y - G:i:s') . " ---- Error: " . $e->getMessage().PHP_EOL, FILE_APPEND);
            die($e->getMessage());
        }
    }


}