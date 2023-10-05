
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php?controller=student&action=add" class="add">Student</a>
<a href="index.php?controller=class&action=add" class="add">Class</a>
<a href="index.php?controller=course&action=add" class="add">Course</a>






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
             break;
        }

        case 'class': {
             require_once ('Controller/class/index.php');
             break;
        }

        case 'course': {
             require_once ('Controller/course/index.php');
             break;
        }
    }

?>
</body>
</html>


