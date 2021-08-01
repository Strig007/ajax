<?php
    require "DbConnect.php";
    $conn = connect();
    $sql =  $conn->prepare("SELECT id, UserName, Gender FROM user WHERE UserName = ?");
    $sql->bind_param("s", $_GET["name"]);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($uid, $uname, $ugender);
    $sql->fetch();
    $sql->close();
    
    echo "<table border =1px solid black; style='text-align:center;'>";
    echo "<tr>";
    echo "<th>User ID</th>";
    echo "<th>User Name</th>";
    echo "<th>User Gender</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $uid . "</td>";
    echo "<td>" . $uname . "</td>";
    echo "<td>" . $ugender . "</td>";
    echo "</tr>";
    echo "</table>";
    
    ?>