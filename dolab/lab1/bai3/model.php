<?php
function get_user($email)
{
    include("./config.php");
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    }
    $connection->close();
}
// function get_user($email)
// {
//     include("./config.php");
//     $sql = "SELECT * FROM user WHERE email = ?";
//     $stmt = $connection->prepare($sql);
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $connection->close();
//         return $row;
//     }
//     $connection->close();
//     return null;
// }

// function get_user1($email)
// {
//     include("./config.php");
//     $sql = "SELECT * FROM user WHERE email = ?";
//     $stmt = $connection->prepare($sql);
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();  // Corrected by adding parentheses
//         return $row;
//     }
//     $connection->close();
// }
