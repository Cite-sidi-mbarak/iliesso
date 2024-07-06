<?php
include ('../connect.php');

// التحقق من وجود جميع المتغيرات المطلوبة في العنوان URL
$required_params = ['wname', 'wdate', 'wusername', 'wpassword', 'wpassword2', 'wtele', 'wsex', 'wcountry'];
foreach ($required_params as $param) {
    if (!isset($_GET[$param])) {
        die("Le paramètre '$param' est manquant.");
    }
}

// استرجاع المتغيرات من العنوان URL
$wname = $_GET['wname'];
$wdate = $_GET['wdate'];
$wusername = $_GET['wusername'];
$wpassword = $_GET['wpassword'];
$wpassword2 = $_GET['wpassword2'];

// التحقق من تطابق كلمتي المرور
if ($wpassword !== $wpassword2) {
    header('Location: http://localhost/work/adduser.php?q1=1');
    exit();
}

// تجزئة كلمة المرور قبل تخزينها في قاعدة البيانات
$hashed_password = password_hash($wpassword, PASSWORD_BCRYPT);

$wtele = $_GET['wtele'];
$wsex = $_GET['wsex'];
$wcountry = $_GET['wcountry'];

// التحقق من وجود المستخدم في قاعدة البيانات
$sql = "SELECT * FROM wuser WHERE wusername=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $wusername);
$stmt->execute();
$result = $stmt->get_result();
$count = $result->num_rows;

if ($count > 0) {
    header('Location: http://localhost/work/adduser.html?q2=1');
    exit();
}

// إعداد الاستعلام SQL لإدخال المستخدم الجديد
$sql = "INSERT INTO wuser (wname, wdate, wusername, wpassword, wtele, wsex, wcountry) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $wname, $wdate, $wusername, $wpassword, $wtele, $wsex, $wcountry);
$result = $stmt->execute();

// التحقق من نجاح التنفيذ
if ($result === TRUE) {
    header('Location: http://localhost/work/index.html');
    exit();
} else {
    echo "erreur " . $stmt->error;
}

// إغلاق الاتصال بقاعدة البيانات
$stmt->close();
$conn->close();
?>
