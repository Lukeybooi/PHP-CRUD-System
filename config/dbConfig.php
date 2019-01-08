<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'phpblog');
define('ROOT_URL', '../index.php');

class InitDB
{
    private $conn;
    private $result;
    private $post;

    public function __construct()
    {
        $this->conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    }

    public function check_Error()
    {
        return mysqli_error($this->conn);
    }

    public function setPost($query)
    {
        $this->result = mysqli_query($this->conn, $query);
        $this->post = mysqli_fetch_all($this->result, MYSQLI_ASSOC);
        mysqli_free_result($this->result);
        mysqli_close($this->conn);
    }

    public function setPostAssoc($query)
    {
        $this->result = mysqli_query($this->conn, $query);
        $this->post = mysqli_fetch_assoc($this->result);
        mysqli_free_result($this->result);
        mysqli_close($this->conn);
    }

    public function setQuery($query)
    {
        mysqli_query($this->conn, $query);
    }

    public function getPost()
    {
        return $this->post;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
