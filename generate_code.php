// Include your database configuration here
$db_host = 'localhost';
$db_user = 'aviratek_admin';
$db_pass = 'schooladmin2022@';
$db_name = 'aviratek_saas ';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



function generateCode($length = 6) {
    $characters = '0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

$code = generateCode();
$user_id = 123; // Replace with the actual user ID
$sql = "INSERT INTO login_codes (user_id, code) VALUES ('$user_id', '$code')";

if (mysqli_query($conn, $sql)) {
    echo "Code inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
