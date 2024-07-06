<?php
include ('../connect.php');
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$sql = "SELECT * FROM wuser WHERE wusername='$n1' AND wpassword='$n2'";
$result = $conn->query($sql);
$count = $result->num_rows;

if ($count > 0) {
    header('Location: http://localhost/work/index.php');
} else {
    header('Location: http://localhost/work/login.php');
}
$conn->close();
?>
