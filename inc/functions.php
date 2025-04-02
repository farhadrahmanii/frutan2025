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
    $stmt->execute([]);
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $returned[] = $rows;
        return $returned;
    }
}
function showAllPost($fetch)
{
    $conn = conn();
    $sqlPost = "SELECT * FROM posts LIMIT $fetch";
    $stmt = $conn->prepare($sqlPost);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $rows;
    }
    return $result;
}
function showSinglePost($fetch)
{
    $conn = conn();
    $sqlPost = "SELECT * FROM posts WHERE id= $fetch";
    $stmt = $conn->prepare($sqlPost);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $rows;
    }
    return $result;
}
function showCategory()
{
    $conn = conn();
    $sqlPost = "SELECT * FROM category";
    $stmt = $conn->prepare($sqlPost);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $rows;
    }
    return $result;
}
function showPostsByCategory($category)
{
    $conn = conn();
    $sqlPost = "SELECT * FROM posts WHERE category=`Daily`";
    $stmt = $conn->prepare($sqlPost);
    $stmt->execute();
    while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $rows;
    }
    return $result;
}
?>