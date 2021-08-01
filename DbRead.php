<?php

    require 'DbConnect.php';

    function login ($username, $password)
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT * FROM user WHERE UserName = ? and Password = ?");
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        $res = $sql->get_result();
        return $res->num_rows === 1;
    }

    function getAllUsers ()
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT id, UserName, Gender FROM user");
        $sql->execute();
        $res = $sql->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    function getUser ($username)
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT id, UserName, Gender FROM user WHERE UserName = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $res = $sql->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

?>