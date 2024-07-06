<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'work'; // تصحيح اسم المتغير إلى $dbname بدلاً من $dhname

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("خطأ في الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// تعيين ترميز الحروف إلى UTF-8
$conn->set_charset('utf8');

echo "تم الاتصال بقاعدة البيانات بنجاح";
?>
