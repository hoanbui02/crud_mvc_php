<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa môn học - Quản lý môn học</title>
</head>
<body>
    <div class="content">
        <div class="dangkysinhvien">
            <a href="index.php?controller=course&action=list" class="list">Danh sách</a>
            <h3>Cập nhật môn học</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên môn học: </td>
                        <td><input type="text" name="CourseTitle" value="<?php echo $dataID['CourseTitle']; ?>" placeholder="Tên môn học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update_course" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>