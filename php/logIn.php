<?php
include "lib.php";
$conn =  connectDB();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from users where userName like ?;";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s",$_POST['userName']);
$stmt->execute();
$result = $stmt->get_result();
$row=$result->fetch_assoc();
if($result->num_rows ==0 || $row['password'] != convertToMD5($row['flag'].$_POST['password']))
{
    gePageHtml("../login.html","User or password is wrong",false);
    return;
}
gePageHtml("../Save_Gaza.html","User or password is wrong",true);

?>
