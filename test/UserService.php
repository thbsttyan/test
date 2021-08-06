<?php


class userService
{
    public function __construct()
    {

        $this->con = new mysqli("localhost", "root", "", "bd");
    }

    public function viewDB()
    {
        if ($this->con->connect_error) {
            die("Ошибка: " . $this->con->connect_error);
        }

        $result = [];

        $sql = "SELECT * FROM Users";

        if ($data = $this->con->query($sql)) {
            foreach ($data as $row) {
                $result[] = $row;
            }
        } else {
            echo "Ошибка: " . $this->con->error;
        }
        $this->con->close();

        return $result;
    }

    public function insert($fio, $mail)
    {
        if ($this->con->connect_error) {
            die("Ошибка: " . $this->con->connect_error);
        }

        $sql = "INSERT INTO `users` values (default, '$fio', '$mail')";

        if (empty($fio) || empty($mail)) {
            echo "Empty text box";
        } else {
            if ($this->con->query($sql)) {
                echo "positive result";

            } else {
                echo "negative result";
            }
        }
        $this->con->close();
    }

    public function search($mail)
    {
        if ($this->con->connect_error) {
            die("Ошибка: " . $this->con->connect_error);
        }

        $result = [];

        $sql = "SELECT * FROM users where mail = $mail ";
        if ($data = $this->con->query($sql)) {
            foreach ($data as $row) {
                $result[] = $row;
            }
        } else {
            echo "Ошибка: " . $this->con->error;
        }
        $this->con->close();

        return $result;
    }

}