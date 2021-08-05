<?php


class firstClass
{
    public function viewDB()
    {
        $conn = new mysqli("localhost", "root", "", "bd");

        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM Users";
        if($result = $conn->query($sql)){
            $rowsCount = $result->num_rows; // количество полученных строк

            echo "<table><tr><th>Id</th><th>ФИО</th><th>Почта</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["fio"] . "</td>";
                echo "<td>" . $row["mail"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
    }

    public function insert($fio, $mail)
    {
        $conn = new mysqli("localhost", "root", "", "bd");

        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }

        $sql = "INSERT INTO `users` values (default, '$fio', '$mail')";

        if(empty($fio) || empty($mail))
        {
            echo"Empty text box";
        }
        else
        {
            if($conn->query($sql))
            {
                echo "positive result";

            }
            else
            {
                echo"negative result";
            }
        }
        $conn->close();
    }

    public function search($mail)
    {
        $conn = new mysqli("localhost", "root", "", "bd");

        if($conn->connect_error){
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM users where mail = $mail ";
        if($result = $conn->query($sql)){
            $rowsCount = $result->num_rows; // количество полученных строк

            echo "<table><tr><th>Id</th><th>ФИО</th><th>Почта</th></tr>";
            foreach($result as $row){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["fio"] . "</td>";
                echo "<td>" . $row["mail"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else{
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
    }

}