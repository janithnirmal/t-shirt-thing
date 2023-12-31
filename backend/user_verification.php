<?php
require_once 'app/database_driver.php';
require_once 'app/response_sender.php';
require_once 'app/passwordEncryptor.php';
require("app/user_access_updater.php");

if (isset($_GET['email'])) {
    $encrpt_password = $_GET['password'];
    $encrpt_email = $_GET['email'];

    $password = base64_decode($encrpt_password);
    $email = base64_decode($encrpt_email);

    $response = new stdClass();
    $response->status = 'failed'; // Corrected the typo, changing 'success' to 'success'

    $db = new database_driver();
    // Check if the email already exists in the database
    $searchQuery = "SELECT email FROM `user` WHERE email = ?";
    $queryResult = $db->execute_query($searchQuery, 's', array($email));

    // Extract the statement and the result from the queryResult array
    $stmt = $queryResult['stmt'];
    $result = $queryResult['result'];

    // Fetch the row from the result
    if ($result->num_rows > 0) {
        // The email already exists in the database, show error
?>
        <h1 style="text-align: center; color: red;">Email already exists in the database</h1>
    <?php
        exit;
    }


    $passwordEncypter = StrongPasswordEncryptor::encryptPassword($password);
    $hash = $passwordEncypter['hash'];
    $salt = $passwordEncypter['salt'];

    $insertQuery = "INSERT INTO `user` (`email`, `password_hash`,`password_salt`) VALUES (?, ?, ?);";
    $db->execute_query($insertQuery, 'sss', array($email, $hash, $salt));

    $query = "SELECT * FROM `user` WHERE email = ?";
    $result = $db->execute_query($query, 's', [$email]);


    // Fetch the row from the result
    $row = $result['result']->fetch_assoc();


    //create a session
    $UseerAccess = new UserAccess();
    $UseerAccess->login($row);

    ?>
    <h1 style="text-align: center; color: green;">Successfully Signed Up <?php echo $_SERVER["HTTP_HOST"]  ?></h1>
    <a href="http://<?php echo $_SERVER["HTTP_HOST"] ?>"> GO TO Home</a>
<?php
}
