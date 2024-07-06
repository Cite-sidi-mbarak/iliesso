<?php
include ('../connect.php');

// Check if all required parameters are present in the URL
$required_params = ['wname', 'wdate', 'wusername', 'wpassword', 'wpassword2', 'wtele', 'wsex', 'wcountry'];
foreach ($required_params as $param) {
    if (!isset($_GET[$param])) {
        die("Le paramètre '$param' est manquant.");
    }
}

// Retrieve variables from the URL
$wname = $_GET['wname'];
$wdate = $_GET['wdate'];
$wusername = $_GET['wusername'];
$wpassword = $_GET['wpassword'];
$wpassword2 = $_GET['wpassword2'];
$wtele = $_GET['wtele'];
$wsex = $_GET['wsex'];
$wcountry = $_GET['wcountry'];

// Check if passwords match
if ($wpassword !== $wpassword2) {
    header('Location: adduser.php?q1=1'); // Redirect to adduser.php with error flag q1=1
    exit();
}

// Hash the password before storing it in the database
$hashed_password = password_hash($wpassword, PASSWORD_BCRYPT);

// Check if the username already exists in the database
$sql_check_username = "SELECT * FROM wuser WHERE wusername=?";
$stmt_check_username = $conn->prepare($sql_check_username);
$stmt_check_username->bind_param("s", $wusername);
$stmt_check_username->execute();
$result_check_username = $stmt_check_username->get_result();
$count = $result_check_username->num_rows;

if ($count > 0) {
    header('Location: adduser.php?q2=1'); // Redirect to adduser.php with error flag q2=1
    exit();
}

// Insert new user into the database
$sql_insert_user = "INSERT INTO wuser (wname, wdate, wusername, wpassword, wtele, wsex, wcountry) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt_insert_user = $conn->prepare($sql_insert_user);
$stmt_insert_user->bind_param("sssssss", $wname, $wdate, $wusername, $hashed_password, $wtele, $wsex, $wcountry);
$result_insert_user = $stmt_insert_user->execute();

// Check if the insertion was successful
if ($result_insert_user === TRUE) {
    header('Location: index.html'); // Redirect to index.html on successful insertion
    exit();
} else {
    echo "Erreur: " . $stmt_insert_user->error; // Display error message if insertion fails
}

// Close prepared statements and database connection
$stmt_check_username->close();
$stmt_insert_user->close();
$conn->close();
?>
