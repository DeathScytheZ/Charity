<?php
include "lib.php";
$conn =connectDB();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_check = "SELECT * FROM users WHERE userName = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $_POST['userName']);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0)
{
    gePageHtml("../login.html","The user name is in the system pick another..",false);
    return;
}
$sql = "insert into users values (?,?,?,?);";
$stmt=$conn->prepare($sql);
$flag = getRandomString(10);
$password=convertToMD5($flag.$_POST['password']);
$stmt->bind_param("ssss",$_POST['userName'],$flag,$password,$_POST['email']);
if(!$stmt->execute())
{
    gePageHtml("../login.html","problem found please Enter again...",false);
}
else
{
    gePageHtml("../login.html","you have creat account please login ",false);
}

?>
