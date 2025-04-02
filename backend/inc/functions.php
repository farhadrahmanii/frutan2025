<?php
require_once './inc/db.php';
$conn = conn();
function create_contact($name, $email, $reference, $service, $message)
{
    $conn = conn();
    $sql = "INSERT INTO contact (name,email,seen_website,service,message,status)VALUES('$name','$email','$reference','$service','$message','pendding')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    var_dump($stmt);
}
function fetchMessages()
{
    $conn = conn();
    $sql = 'SELECT * FROM contact';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $returned[] = $rows;
        return $returned;
    }
}
function fetchPost()
{
    $conn = conn();
    $sql = 'SELECT * FROM posts';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $rows;
    }
    return $result;
}
function deletePost($Pid)
{
    $conn = conn();
    $sql = 'DELETE FROM posts WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $Pid,
    ]);
}
function userLogin($data)
{
    $conn = conn();
    $SQLSign = 'SELECT * FROM author WHERE email = :email';
    $stmt = $conn->prepare($SQLSign);
    $stmt->execute([
        ':email' => $data['email'],
    ]);
    $rowServer = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rowServer && $data['password'] === $rowServer['password']) {
        $_SESSION['user_id'] = $rowServer['id'];
        return true;
    } else {
        return false;
    }
}
