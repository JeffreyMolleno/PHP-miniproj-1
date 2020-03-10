<?php
// session_start();

include 'Model/db.inc.php';

$_SESSION['user'] = '';

class Login
{
    use database;

    public $table;

    public function __construct($reference)
    {
        $this->db_init();
        $this->table = $reference;
    }

    public function check_user($pretext, $pass)
    {
        //check if user is in the db
        $sql = "SELECT * FROM users";

        if (!$res = $this->db->query($sql)) die($this->db->error);

        while ($row = $res->fetch_assoc()) {

            if ($row['username'] === $pretext && $row['password'] === $pass) {
                $_SESSION['user'] = $row['username'];
                return true;
            }
        }

        return false;
    }

    public function logout_user()
    {
        $_SESSION['user'] = '';
    }
}
