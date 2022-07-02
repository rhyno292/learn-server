<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once('./sendMailTo.php');

        $servername = "mysql";
        $username = "admin";
        $password = "secret";
        $dbname = "testing";

        $pdo = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8", $username, $password, 
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
            $pdo->query("DELETE FROM EMAIL_LIST");
        // Create table EMAIL_LIST
        $sqlCreateTable = "CREATE TABLE EMAIL_LIST (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(50)
        )";
        if ($pdo->query($sqlCreateTable) === TRUE) {
            echo "created table EMAIL_LIST";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        if(isset($_POST['email'])) {
            // Insert Email into table EMAIL_LIST
            $sqlInsertEmail = "INSERT INTO EMAIL_LIST (email) VALUES ('" . $_POST['email'] . "')";
            $pdo->query($sqlInsertEmail);

            //Send mail
            sendMailTo($_POST['email']);

            $result = $pdo->query("SELECT email FROM EMAIL_LIST");
            foreach($result as $row) {
                echo 'sended mail to ' . $row['email'] . '<br>';
            }
        }

    ?>
</body>
</html>