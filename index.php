
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "Model/DBConfig.php";
    $db = new Database;
    $db->connect();

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = '';
    }

    switch ($controller) {
        case 'student': {
            require_once ('Controller/student/index.php');
        }
    }
?>
</body>
</html>